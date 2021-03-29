<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Course;
use App\Models\Module;
use App\Models\Popular;
use App\Models\Topic;

class PopularController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		// $this->middleware('access:role,insert')->only('insertRole');
    }
    
    public function list(Request $request)
    {
        $popularItems = Popular::query();
        $data['popularItems'] = $popularItems->get()->groupBy("module_type");

        $data['module']   = Module::pluck('name','name');
        
        return view('cms.popular.list',$data);
    }

    public function getModuleData(Request $request)
    {
        
        $module = $request->module;

        switch ($module) {
            case 'service':
                $data = Course::doesntHave('popular')->pluck('name', 'id');
                break;
            case 'article':
                $data = Article::doesntHave('popular')->pluck('title', 'id');
                break;
            case 'serviceLocation':
                $data = Topic::doesntHave('popular')->pluck('name', 'id');
                break;
            case 'serviceCategory':
                $data = Category::doesntHave('popular')->pluck('name', 'id');
                break;
        }
        return $data;
    }

    public function sort(Request $request)
    {
        $module = $request->get('module');
        $items  = $request->get('id');
        $popularItems = Popular::where('module_type',$module)->get();
        foreach($popularItems as $item)
        {
            $item->display_order = array_search($item->id, $items)+1;
            $item->save();
        }
        return "done";
    }

    public function insert(Request $request)
    {
        $display_order = Popular::where('module_type', $request->module_type)->max('display_order');
        $popular = new Popular();
        $popular->module_type   = $request->module_type;
        $popular->module_id     = $request->module_id;
        $popular->display_order = $display_order+1;
        $popular->save();
        
        return "done";
    }

    public function delete(Popular $popular)
    {
        $popular->delete();
    }
}