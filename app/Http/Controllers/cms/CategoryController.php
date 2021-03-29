<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Country;
use App\Models\CategoryContent;
use App\Http\Requests\cms\CategoryContentRequest;
use App\Http\Requests\cms\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Image_prefix;
    private $Icon_prefix;

    public function __construct()
    {
        $this->Image_prefix = "categoryImage";
        $this->Icon_prefix  = "categoryIcon";
    }
    public function popular(Request $request){
        $category=Category::find($request->categoryId);
        if($request->checked=='checked'){
            $category->popular->delete();    
            return 'removed';
        }
        $category->popular->save();
        return 'added';
    }
    public function list(Request $request)
    {    
        $categories = Category::All();
        
        return view('cms.category.categoryList',compact('categories'));    
             
    }

    public function create()
    {
        $data['category']     = new Category();
        $data['submitRoute']  = "insertCategory";
        return view('cms.category.categoryForm',$data);
    }
    
    public function insert(CategoryRequest $request)
    {
        $input    = $request->except("_token");
        $category = new Category();
        //$country = Country::updateOrCreate( ['name' => $input['name']], $input );
        $category->name                 = $input['name'];
        $category->tag_line             = $input['tag_line'];
        // $category->display_order        = $input['display_order'];
        
        $category->reference            = encodeUrlSlug($input['reference']);
        $category->color_code           = $input['color_code'];
        $category->published            = isset($input['published'])?1:0;
        $category->is_technical         = isset($input['is_technical'])?1:0;
        
        if($request->hasFile('image')){
            $imageName = $this->Image_prefix.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($category->image_path), $imageName);
            $category->image = $imageName;
        }

        if($request->hasFile('icon')){
            $imageName = $this->Icon_prefix.Carbon::now()->timestamp.'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path($category->icon_path), $imageName);
            $category->icon = $imageName;
        }
        $category->save();

        if(isset($input['is_popular']))
        {
            $category->popular->save();
        }
        
        return redirect()->route('categoryList')->with('success','Successfully Added');
    }

    public function edit($category)
    {
        $category            = Category::with('popular')->find($category);
        $data['category']    = $category;
        $data['submitRoute'] = array('updateCategory',$category->id);
        return view("cms.category.categoryForm",$data);
    }

    public function update(Category $category,CategoryRequest $request)
    {
        $input                      = $request->all();
        $category->name             = $input['name'];
        $category->tag_line         = $input['tag_line'];
        // $category->display_order    = $input['display_order'];
        $category->reference        = encodeUrlSlug($input['reference']);
        $category->color_code       = $input['color_code'];
        $category->published        = isset($input['published']);
        $category->is_technical     = isset($input['is_technical']);
   
        if($request->hasFile('image')){
            $imageName = $this->Image_prefix.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($category->image_path), $imageName);
            $category->image = $imageName;
        }

        if($request['removeimagetxt']!=null)
        {
            $category->image = null;
        }
        
        if($request->hasFile('icon')){
            $imageName = $this->Icon_prefix.Carbon::now()->timestamp.'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path($category->icon_path), $imageName);
            $category->icon = $imageName;
        }

        if($request['removeicontxt']!=null)
        {
            $category->icon = null;
        }

        $category->save();
        
        if(isset($input['is_popular']))
        {
            $category->popular->save();
        }
        else
        {
            $category->popular->delete();
        }
        
        return redirect()->route('categoryList')->with('success','Successfully Updated');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return back();
    }

    public function bulletPointList(Request $request)
    {
        $data['selectedCourse']         = $request->module;
        $data['editbulletpointroute']   ='categoryEditBulletPoint';
        $data['deletebulletpointroute'] ='categoryDeleteBulletPoint';
        $data['insertbulletpointroute'] ='categoryCreateBulletPoint';
        $data['type']                   ='category';
        $data['module']                 = Category::with('Bulletpoint')->find($request->module);
        return view('cms.bulletPoints.bulletPoints',$data);
        
    }
   

    public function whatsincludedlist(Request $request)
   {
        $id = $request->module;
        if(empty($id))
        {
            $url = route('courseList');
            return redirect($url,302);
        }
        $data['result']                   = Category::with('whatsIncluded')->find($id);
        $data['module']                   = 'category';
        $data['deletewhatsincludedroute'] = 'categoryDeleteWhatsincluded';
        $data['insertwhatsincludedroute'] = 'categoryCreateWhatsincluded';
        return view('cms.whatsincluded.whatsincluded',$data);
   }

 
   public function contentList(Request $request)
    {
        $filter                     = $request->all();
        $data['selectedCategory']   = empty($filter['category'])? NULL : $filter['category'];
        $data['selectedCountry']    = empty($filter['country'])? NULL : $filter['country'];
        $query                      = CategoryContent::query();
        $query                      = empty($filter['category'])? $query : $query->where('category_id',$filter['category']);
        $query->whereHas('category');
        $result                     = $query->get();
        $list['category']           = Category::all()->pluck('name','id')->toArray();
        $data['list']               = $list;
        $data['contents']           = $result;
        return view('cms.category.contents',$data);
    }
    public function contentCreate(Request $request)
    {
        $filter = $request->all();
        $selectedCategory   = empty($filter['category'])? NULL : $filter['category'];
        $selectedCountry    = empty($filter['country'])? NULL : $filter['country'];
        $categoryDetail     = CategoryContent::firstOrNew(array('category_id'=>$selectedCategory,'country_id'=>$selectedCountry));
        $list['category']   = Category::all()->pluck('name','id')->toArray();
        $data['list'] = $list;
        $data['categoryDetail'] = $categoryDetail;
        $data['submitRoute']    = 'insertCategoryContent';
        return view('cms.category.contentForm',$data);
    }
    public function contentInsert(CategoryContentRequest $request)
    {
        $inputs   = $request->except("_token");
        $content  = CategoryContent::firstOrNew(
        ['category_id'=>$inputs['category_id'],'country_id'=>$inputs['country_id']],$inputs);
            if(empty($content->created_at))
            {
                $content->save();
                \Session::flash('success', 'Content added!'); 
            }
            else
            {
                \Session::flash('failure', 'Duplicate Data Found!'); 
            }

        return redirect()->route('categoryContentList',['category'=>$inputs['category_id']]);
    }
    public function contentEdit(Request $request,CategoryContent $categoryDetail)
    {
        $list['category']       = Category::all()->pluck('name','id')->toArray();
        $list['countries']      = Country::all()->pluck('name','country_code')->toArray();
        $data['list']           = $list;
        $data['categoryDetail'] = $categoryDetail;
        $data['submitRoute']    = array('updateCategoryContent',$categoryDetail->id);
        return view('cms.category.contentForm',$data);
    }
    public function contentUpdate(CategoryContentRequest $request,CategoryContent $categoryDetail)
    {
        $inputs  = $request->except("_token");
        $content = $categoryDetail->update($inputs);
        if(!empty($content))
        \Session::flash('success', 'Content Updated!'); 
        return redirect()->route('categoryContentList',['category'=>$inputs['category_id']]);

    }
    public function contentDelete(Request $request,CategoryContent $categoryDetail)
    {
        $categoryDetail->delete();
    }
   public function categorytrashList()
   {
        $data['trashedCategories'] = Category::onlyTrashed()->get();
        return  view('cms.trashed.categoryTrashedList',$data);
   }

   public function restoreCategory($id)
   {
       Category::onlyTrashed()->find($id)->myRestore();
       return back()->with('success','Successfully Restored');
   }
   public function forceDeleteCategory($id)
   {
       Category::onlyTrashed()->find($id)->myforceDelete();
       return back()->with('success','Permanently Deleted');
   }
   public function categoryContentTrash()
   {
        $data['categoryContent'] = CategoryContent::with(['category'=>function($query){
            $query->withTrashed();
        }])->onlyTrashed()->where('country_id',country()->country_code)->get();

       return view('cms.trashed.categoryContentTrashList',$data);
   }
   public function restoreCategoryContent($id)
   {
       CategoryContent::where('id',$id)->restore();
       return back()->with('success','Successfully Restored');
   }
   public function forceDeleteCategoryContent($id)
   {
       CategoryContent::where('id',$id)->forceDelete();
       return back()->with('success','Permanently Deleted');
   }
}