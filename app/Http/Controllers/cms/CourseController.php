<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Course;
use App\Models\Topic;
use App\Models\BulletPoint;
use App\Models\CourseContent;
use App\Models\Country;
use App\Models\WhatsIncluded;
use App\Models\OnlinePrice;
use App\Models\Accreditation;
use App\Http\Requests\cms\CourseContentRequest;
use App\Http\Requests\cms\BulletPointRequest;
use App\Http\Requests\cms\CourseRequest;
use App\Http\Requests\cms\WhatsIncludedRequest;
use App\Http\Requests\cms\CourseFaqRequest;
use App\Models\WhatsIncluded as ModelsWhatsIncluded;
use App\Models\WhatsIncludedHeaders;
class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $Logo_prefix;

    public function __construct()
    {
        $this->Logo_prefix = "Logo";
    }
    
    public function categoryTopicName(Request $request){
        $topic=Topic::find($request->topic_id)->reference;
        $slug=explode('/',$topic);
        return $slug;
    }
    
    public function popular(Request $request){
        $course=Course::find($request->courseId);
        if($request->checked=='checked'){
            $course->popular->delete();    
            return 'removed';
        }
        $course->popular->save();
        return 'added';
    }
    public function list(Request $request)
    {
        $courses = Course::with('popular')->get();
        
        return view('cms.course.courseList',compact('courses'));
    }

    public function unlinkedCourseList()
    {
        $data['courses']     = Course::with('topic')->whereDoesntHave('topic')->get();
        $data['topics']      = Topic::pluck('name','id');
        return view('cms.course.unlinkedCourses',$data);
    }

    public function linkTopic($id, Request $request)
    {
        $course = Course::find($id);
        $course->topic_id         = $request['topic_id'];
        $topic  = Topic::find($request['topic_id']);
        $course->reference   = $topic->reference.'/'.encodeUrlSlug($course['name']);
        $course->update();
        return back()->with('success','Topic linked');
    }

    public function contentList(Request $request)
    {
        $filter = $request->all();
        $data['selectedCourse'] = empty($filter['course'])? NULL : $filter['course'];
        $data['selectedCountry'] = empty($filter['country'])? NULL : $filter['country'];
        $query = CourseContent::query();
        $query = empty($filter['course'])? $query : $query->where('course_id',$filter['course']);
        $query->whereHas('course');
        $result = $query->paginate(10);
        $data['contents'] = $result;
        return view('cms.course.contents',$data);
    }

    public function create()
    {
        $list['topics'] = Topic::all()->pluck('name','id')->toArray();
        $list['slugs'] = Topic::all()->pluck('reference','id')->toArray();
        $data['slugs']            = [0=>null,1=>null,2=>null];
        $data['list'] = $list;
        $data['course'] = new Course();
        $data['submitRoute'] = 'insertCourse';
        return view('cms.course.courseForm',$data);
    }
    
    public function contentCreate(Request $request)
    {
        $filter = $request->all();
        $selectedCourse = empty($filter['course'])? NULL : $filter['course'];
        $selectedCountry = empty($filter['country'])? NULL : $filter['country'];
        $courseDetail = CourseContent::firstOrNew(array('course_id'=>$selectedCourse,'country_id'=>$selectedCountry));
        $list['courses'] = course::all()->pluck('name','id')->toArray();
        $data['list'] = $list;
        $data['courseDetail'] = $courseDetail;
        $data['submitRoute'] = 'insertCourseContent';
        return view('cms.course.contentForm',$data);
    }

    public function insert(CourseRequest $request)
    {
        $inputs = $request->except(["_token"]);
        $inputs['accreditation_id']=$request->accreditation_id;
        $inputs['accredited'] = isset($inputs['accredited']);
        $inputs['published'] = isset($inputs['published']);
        $course = Course::firstOrNew( 
            ['topic_id'=>$inputs['topic_id'],'name'=>$inputs['name']]
        ,$inputs);

        $course['is_online'] = isset($inputs['is_online']);
        
        $course['reference'] = encodeUrlSlug($inputs['category_slug']).'/'.encodeUrlSlug($inputs['topic_slug']).'/'.encodeUrlSlug($inputs['course_slug']);

        if(empty($course->created_at))
        {                    
            if($request->hasFile('image')){
                $imageName = $this->Logo_prefix.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path($course->logo_path), $imageName);
                $course->image = $imageName;
            }
            $course->save();
        }
        
        if(isset($inputs['is_popular']))
        {
            $course->popular->save();
        }

      
        

        return redirect()->route('courseList')->with('success','Course Added!');
    }

    public function contentInsert(CourseContentRequest $request)
    {
        $inputs              = $request->except("_token");
      
        $content               = CourseContent::firstOrNew(
            ['course_id'=>$inputs['course_id']]
            ,$inputs);
            if(empty($content->created_at))
            {
                $content->save();
                \Session::flash('success', 'Content added!'); 
            }
            else
            {
                \Session::flash('failure', 'Duplicate Data Found!'); 
            }

        return redirect()->back();
    }

    public function edit($course)
    {
        $course = Course::with('popular','onlinePrice')->find($course);
        $list['topics'] = Topic::all()->pluck('name','id')->toArray();
        $list['slugs'] = Topic::all()->pluck('reference','id')->toArray();
        
        $data['list'] = $list;
        $data['submitRoute'] = array('updateCourse',$course->id);
        $data['slugs']            = explode('/',$course->reference);
        $data['course'] = $course;
        return view("cms.course.courseForm",$data);
    }

    public function contentEdit(Request $request,CourseContent $courseDetail)
    {
        $list['courses'] = Course::all()->pluck('name','id')->toArray();
        $data['list'] = $list;
        $data['courseDetail'] = $courseDetail;
        $data['submitRoute'] = array('updateCourseContent',$courseDetail->id);
        return view('cms.course.contentForm',$data);
    }

    public function update(Course $course ,CourseRequest $request)
    {
        $inputs = $request->except("_token");
        $inputs['accreditation_id']=$request->accreditation_id;
        
        $inputs['accredited'] = isset($inputs['accredited']);
        $inputs['published']  = isset($inputs['published']);
        $inputs['is_online']  = isset($inputs['is_online']);
        $inputs['reference']  = encodeUrlSlug($inputs['category_slug']).'/'.encodeUrlSlug($inputs['topic_slug']).'/'.encodeUrlSlug($inputs['course_slug']);
        $course->update($inputs);
        $online = array();

        if($request->hasFile('image')){
            $imageName = $this->Logo_prefix.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($course->logo_path), $imageName);
            $course->image = $imageName;
            $course->save();
        }
        if($inputs['removeimagetxt']!=null)
        {
            $course->image = null;
            $course->save(); 
        }
        if(isset($inputs['is_popular']))
        {
            $course->popular->save();
        }
        else
        {
            $course->popular->delete();
        }
                
        return redirect()->route('courseList')->with('success','Course Updated!');
    }

    public function contentUpdate(CourseContentRequest $request,CourseContent $courseDetail)
    {
        $inputs              = $request->except("_token");
        
        $content = $courseDetail->update($inputs);
            if(!empty($content))
        \Session::flash('success', 'Content Updated!'); 

        return redirect()->back();
    }

    public function delete(Course $course)
    {
        $course->delete();
    }

    public function contentDelete(Request $request,CourseContent $courseDetail)
    {
        $courseDetail->delete();
    }


   public function coursetrashList()
   {
        $data['trashedCourses'] = Course::onlyTrashed()->get();
        return  view('cms.trashed.courseTrashedList',$data);
       
   }

   public function restoreCourse($id)
   {
        $course= Course::onlyTrashed()->find($id);
        $course->myRestore();
        return back()->with('success','Successfully Restored');

   }
   public function forceDeleteCourse($id)
   {
        $course = Course::onlyTrashed()->find($id);
        $course->myforceDelete();
        return back()->with('success','Permanently Deleted');
   }
   public function courseContentTrash()
   {
        $data['courseContent'] = CourseContent::with(['course'=>function($query){
            $query->withTrashed();
        }])->onlyTrashed()->where('country_id',country()->country_code)->get();

       return view('cms.trashed.courseContentTrashList',$data);
   }
   public function restoreCourseContent($id)
   {
       CourseContent::where('id',$id)->restore();
       return back()->with('success','Successfully Restored');
   }
   public function forceDeleteCourseContent($id)
   {
       CourseContent::where('id',$id)->forceDelete();
       return back()->with('success','Permanently Deleted');
   }

}