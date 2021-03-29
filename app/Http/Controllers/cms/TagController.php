<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagController extends Controller
{
    
    public function tagList(Request $request)
    {
        $data['tags'] = Tag::all();

        return view('cms.article.tag',$data);
    }

    public function edit(Tag $tag)
    {
        $data['tag'] = $tag;
        $data['submitroute'] = array('updateTag',$tag->id);
        return view("cms.article.tagForm",$data);
    }

   public function update(Tag $tag,Request $request)
   {
       $tag->name  = $request->name;
       
       $tag->save();
       
       return back()->with('success','Successfully Updated!');
   }

   public function delete(Tag $tag)
   {
       $tag->delete();
   }

   public function tagtrashList()
   {
    $data['trashedTags'] = Tag::onlyTrashed()->get();
 

    return  view('cms.trashed.tagTrashedList',$data);
       
   }

   public function restoreTag($id)
   {
        $tag = Tag::onlyTrashed()->find($id)->restore();
 
        return back()->with('success','Successfully Restored');

   }
   public function forceDeleteTag($id)
   {
        $tag = Tag::onlyTrashed()->find($id)->forceDelete();
 
        return back()->with('success','Permanently Deleted');

   }
}
