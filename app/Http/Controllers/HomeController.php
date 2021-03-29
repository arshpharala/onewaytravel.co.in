<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Certification;
use App\Models\Course;
use App\Models\PageDetail;
use App\Models\Topic;
use App\Models\Location;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['serviceLocations']     = Topic::with('courses')->get();
        // $pageDetail = PageDetail::where(['page_name' => 'home', 'section' => 'metas'])->get();
        // if ($pageDetail->isNotEmpty()) {
        //     $data['title'] = $pageDetail->where('sub_section', 'title')->first()->heading;
        //     $data['description'] = $pageDetail->where('sub_section', 'description')->first()->heading;
        //     $data['keyword'] = $pageDetail->where('sub_section', 'keywords')->first()->heading;
        //     metaData($data);
        // }
        // $data['pageDetail'] = PageDetail::getContent('home');
        $data['serviceCategories'] = Category::has('popular')->select('id', 'name', 'reference', 'display_order', 'reference', 'image', 'icon')->withCount('topics')->with('topics')->orderBy('display_order')->get();
        
        $data['testimonials'] = Testimonial::select('author', 'content', 'image', 'designation')->get();
        return view('home', $data);
    }
}
