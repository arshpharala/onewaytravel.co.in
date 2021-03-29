<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Topic;
use App\Models\TopicContent;
use App\Http\Requests\cms\BulletPointRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Faq;
use App\Models\WhatsIncluded;
use App\Models\BulletPoint;
use App\Models\WhatsIncludedHeaders;
use App\Models\Accreditation;
use App\Http\Requests\cms\TopicContentRequest;
use App\Http\Requests\cms\TopicRequest;
use App\Http\Requests\cms\WhatsIncludedRequest;

class TopicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $Image_prefix;

    public function __construct()
    {
        $this->Image_prefix = "topicImage";
    }
    public function popular(Request $request){
        $topic=Topic::find($request->topicId);
        if($request->checked=='checked'){
            $topic->popular->delete();    
            return 'removed';
        }
        $topic->popular->save();
        return 'added';
    }
    public function list(Request $request)
    {
        $topics = Topic::all();
        
        return view('cms.topic.topicList',compact('topics'));
    }

    public function unlinkedTopicList()
    {
        $data['topics']     = Topic::whereDoesntHave('category')->get();
        $data['category']   = Category::pluck('name','id');
        return view('cms.topic.unlinkedTopics',$data);
    }

    public function linkCategory($id, Request $request)
    {
        $topic = Topic::find($id);
        $category=encodeUrlSlug(Category::find($request['category_id'])->name);
        $topic->reference           = 'training-courses'.'/'.$category.'/'.encodeUrlSlug($topic['name']);
        $topic->category_id         = $request['category_id'];
        $topic->update();
        return back()->with('success','Category linked');
    }
    public function topicName(Request $request){
        $category=Category::find($request->category_id)->reference;

        return $category;
    }
    public function contentList(Request $request)
    {
        $filter                 = $request->all();
        $data['selectedTopic']  = empty($filter['topic'])? NULL : $filter['topic'];
        $data['selectedCountry'] = empty($filter['country'])? NULL : $filter['country'];
        $query                  = TopicContent::query();
        $query                  = empty($filter['topic'])? $query : $query->where('topic_id',$filter['topic']);
        $query->whereHas('topic');
        $result                 = $query->get();
        $list['topics']         = Topic::all()->pluck('name','id')->toArray();
        $data['list']           = $list;
        $data['contents']       = $result;
        return view('cms.topic.contents',$data);
    }
    
   
    public function contentCreate(Request $request)
    {
        $filter             = $request->all();
        $selectedTopic      = empty($filter['topic'])? NULL : $filter['topic'];
        $selectedCountry    = empty($filter['country'])? NULL : $filter['country'];
        $topicDetail        = TopicContent::firstOrNew(array('topic_id'=>$selectedTopic,'country_id'=>$selectedCountry));
        $list['topics']     = Topic::all()->pluck('name','id')->toArray();
        $data['list']       = $list;
        $data['topicDetail'] = $topicDetail;
        $data['submitRoute'] = 'insertTopicContent';
        return view('cms.topic.contentForm',$data);
    }
    
    public function create()
    {
        $data['topic']          = new Topic();
        $data['submitRoute']    = 'insertTopic';
        $data['slugs']          = [0=>null,1=>null];
        $data['categories']     = Category::all()->pluck('name','id')->toArray();
       
        return view('cms.topic.topicForm',$data);
    }

    public function insert(TopicRequest $request)
    {
        $inputs                     = $request->except("_token");
        $topic                      = new Topic();

        $topic->reference           = encodeUrlSlug($inputs['category_slug']).'/'.encodeUrlSlug($inputs['topic_slug']);
        
        $topic->name                = $inputs['name'];
        $topic->tag_line            = $inputs['tag_line'];
    
        $topic->published           = isset($inputs['published']);
        $topic->priority            = isset($inputs['priority']);
        $topic->category_id         = $inputs['category_id'];
        $topic->ip_trademark        = $inputs['ip_trademark'];

        if($request->hasFile('image')){
            $imageName = $this->Image_prefix.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($topic->image_path), $imageName);
            $topic->image = $imageName;
        }
        
        $topic->save();
        if(isset($inputs['is_popular']))
        {
            $topic->popular->save();
        }
       
        
        return redirect()->route('topicList')->with('success','Successfully Added');
    }

    public function contentInsert(TopicContentRequest $request)
    {
        $inputs              = $request->except("_token");
        $content             = TopicContent::firstOrCreate(['topic_id'=>$inputs['topic_id'],'country_id'=>$inputs['country_id']],$inputs);
        return back()->with('success','Content Added');

    }

    public function edit($topic)
    {
        $data['topic']          = Topic::with('faqs','Popular')->find($topic);
        $data['slugs']            = explode('/',$data['topic']->reference);

        $data['submitRoute']    = array('updateTopic',$data['topic']->id);
        $data['categories']     = Category::all()->pluck('name','id')->toArray();

        return view("cms.topic.topicForm",$data);
    }

    public function contentEdit(Request $request,TopicContent $topicDetail)
    {
        $list['topics'] = Topic::all()->pluck('name','id')->toArray();
        $data['list'] = $list;
        $data['topicDetail'] = $topicDetail;
        $data['submitRoute'] = array('updateTopicContent',$topicDetail->id);
        
        return view('cms.topic.contentForm',$data);
    }
    
    public function update(Topic $topic,TopicRequest $request)
    {
        $inputs                     = $request->all();
        // dd($inputs);
        $topic->name                = $inputs['name'];
        $topic->reference           = encodeUrlSlug($inputs['category_slug']).'/'.encodeUrlSlug($inputs['topic_slug']);
        $topic->tag_line            = $inputs['tag_line'];
        $topic->published           = isset($inputs['published'])? 1:0;
        $topic->priority            = isset($inputs['priority'])? 1:0;
        $topic->category_id         = $inputs['category_id'];
        $topic->ip_trademark        = $inputs['ip_trademark'];
        if($request->hasFile('image')){
            $imageName = $this->Image_prefix.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($topic->image_path), $imageName);
            $topic->image = $imageName;
        }
        if($inputs['removeimagetxt']!=null)
        {
            $topic->image = null;
        }
        $topic->save();
        if(isset($inputs['is_popular']))
        {
            $topic->popular->save();
        }
        else
        {
            $topic->popular->delete();
        }
       
        return redirect()->route('topicList')->with('success','Successfully Updated');
    }

    public function contentUpdate(TopicContentRequest $request,TopicContent $topicDetail)
    {
        $inputs              = $request->except("_token");
        
        $content = $topicDetail->update($inputs);
        
        return back()->with('success','Content Updated');
    }

    public function delete(Topic $topic)
    {
        $topic->delete();
    }

    public function contentDelete(Request $request,TopicContent $topicDetail)
    {
        $topicDetail->delete();
    }
        
   public function topictrashList()
   {
        $data['trashedTopics'] = Topic::onlyTrashed()->get();
    
        return  view('cms.trashed.topicTrashedList',$data);
   }

   public function restoreTopic($id)
   {
        $topic = Topic::onlyTrashed()->find($id)->myRestore();
    
        return back()->with('success','Successfully Restored');

   }
   public function forceDeleteTopic($id)
   {
        $topic = Topic::onlyTrashed()->find($id)->myforceDelete();
    
        return back()->with('success','Permanently Deleted');
   }

   public function trashTopicContent()
   {
       $data['topicContent'] = TopicContent::with(['topic'=>function($query){
        $query->withTrashed();
       }])->onlyTrashed()->get();
      
       return view('cms.trashed.topicContentTrashList',$data);
   }
   public function restoreTopicContent($id)
   {
       TopicContent::where('id',$id)->restore();
       return back()->with('success','Successfully Restored');
   }
   public function forceDeleteTopicContent($id)
   {
        TopicContent::where('id',$id)->forceDelete();
        return back()->with('success','Permanently Deleted');
   }
   
   public function multipleFaq()
   {
       $data['courses'] = Course::pluck('name','id')->toArray();
       return view('cms.faq.insertmultiple',$data);
   }
   
   public function insertMultipleFaq(Request $request)
   {
       $input       = $request->input();
       $questions   = $request->get('question');
       $answers     = $request->get('answer');
       foreach($input['courses'] as $module_id){
            $module = Course::find($module_id);
            if(empty($questions))
            {
                \Session::flash('failure', 'please add faq to save!'); 
                return back();
            }
            if(empty($answers))
            {
                \Session::flash('failure', 'please add faq to save!'); 
                return back();
            }

            foreach($questions as $i)
            {
                $module->faqs()->create([
                    'question' => $questions[$i],
                    'answer'    => $answers[$i],
                    'display_order' => $module->faqs()->count()+1
                ]);
            }
        }
       return back()->with('success','Success!');
   }
}