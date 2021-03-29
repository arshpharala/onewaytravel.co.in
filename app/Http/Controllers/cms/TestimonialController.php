<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Models\Testimonial;
use Carbon\Carbon;
use App\Http\Requests\cms\TestimonialRequest;

class TestimonialController extends Controller
{

    private $Image_prefix;
    public function __construct()
    {
        $this->Image_prefix = "testimonialImage";
	
    }

    public function testimonialList(Request $request)
    {
        $data['testimonials'] = Testimonial::all();
         
        return view('cms.testimonial.testimonial',$data);
    }

    public function create()
    {
        $data['testimonial'] = new Testimonial();
        $data['submitRoute'] = "insertTestimonial";
        return view('cms.testimonial.testimonialForm',$data);
    }

    public function insert(TestimonialRequest $request)
    {
        $testimonial=new Testimonial();
        $testimonial->author        = $request->author;
        $testimonial->location      = $request->location;
        $testimonial->title         = $request->title;
        $testimonial->designation   = $request->designation;
        $testimonial->content       = $request->content;
        $testimonial->post_date     = $request->post_date;
        $testimonial->rating        = $request->rating;
        
    
        if($request->hasFile('image')){
            $imageName = $request->author.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path($testimonial->image_path), $imageName);
            $testimonial->image = $imageName;
        }
        
        $testimonial->save();
        
        return redirect()->route('testimonialList')->with('success','Successfully Added');
    }
    
    public function edit(Testimonial $testimonial)
    {
        $data['testimonial'] = $testimonial;
        $data['submitRoute'] = array('updateTestimonial',$testimonial->id);
     
        return view("cms.testimonial.testimonialForm",$data);
    }

   public function update(Testimonial $testimonial,TestimonialRequest $request)
   {
        $testimonial->author        = $request->author;
        $testimonial->location      = $request->location;
        $testimonial->title         = $request->title;
        $testimonial->designation   = $request->designation;
        $testimonial->content       = $request->content;
        $testimonial->post_date     = $request->post_date;
        $testimonial->rating        = $request->rating;

       
       if($request->hasFile('image')){
           $imageName = $this->Image_prefix.Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->move(public_path($testimonial->image_path), $imageName);
           $testimonial->image = $imageName;
       }
       if($request['removeimagetxt']!=null)
        {
            $testimonial->image = null;
        }
       $testimonial->save();
       return redirect()->route('testimonialList')->with('success','Successfully Updated');
   }

   public function delete(Testimonial $testimonial)
   {
       $testimonial->delete();
   }

       
   public function testimonialtrashList()
   {
        $data['trashedTestimonials'] = Testimonial::onlyTrashed()->get();
    
        return  view('cms.trashed.testimonialTrashedList',$data);
       
   }

   public function restoreTestimonial($id)
   {
        $testimonial = Testimonial::onlyTrashed()->find($id)->restore();
 
       return back()->with('success','Successfully Restored');

   }
   public function forceDeleteTestimonial($id)
   {
        $testimonial = Testimonial::onlyTrashed()->find($id)->forceDelete();
 
       return back()->with('success','Permanently Deleted');

   }
   
}
