<?php
use App\Models\WebsiteDetail;
use App\Models\Category;
use App\Models\Article;
use App\Models\Course;
use App\Models\PageDetail;
use App\Models\Topic;
use App\Models\SocialMedia;


if(!function_exists('summernote_replace')){
    function summernote_replace($content){
        foreach($content as $key=>$value)
        {
            $content->$key = str_replace('<p></p>',null,$value);
            $content->$key = str_replace('<p><br></p>',null,$value);
        }
        return $content;
    }
}
if (!function_exists('encodeUrlSlug')) {
    function encodeUrlSlug($string)
    {
        $name = str_replace("&", " and", "$string");
        $name = str_replace("+", " plus", "$name");
        $name = str_replace("/", "", "$name");
        $name = str_replace("-", " ", "$name");
        $stringname = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $name));
        return $stringname;
    }
}
    
  
   
    if (!function_exists('socialmedialinks')) {
        function socialmedialinks()
        {
            return SocialMedia::all();
        }
    }
    if (!function_exists('websiteDetail')) {
        function websiteDetail()
        {
            $selectedDetail = WebsiteDetail::$selected;
            if (empty($selectedDetail)) {
                $selectedDetail = WebsiteDetail::first();
                if (empty($selectedDetail)) {
                    $selectedDetail = WebsiteDetail::first();
                }
                WebsiteDetail::$selected = $selectedDetail;
            }
            return $selectedDetail;
        }
    }
    if (!function_exists('menu_data')) {
        function menu_data()
        {
            $data['categories']     =   Category::has('popular')->has('topics.courses')
                                                    ->select('id', 'name','image','icon', 'display_order', 'published')
                                                    ->where('published', 1)
                                                    ->orderBy('display_order')
                                                    ->limit(8)
                                                    ->get();
            // dd($data['categories']);
            $category_ids           =   $data['categories']->pluck('id')->toArray();
            $data['topics']         =   Topic::has('courses')
                                                    //->has('popular')
                                                    ->select('id', 'name','category_id', 'display_order', 'published','reference')
                                                    ->whereIn('category_id', $category_ids)
                                                    ->where('published', 1)
                                                    ->orderBy('display_order')
                                                    ->orderBy('category_id')
                                                    ->get()
                                                    ->groupBy('category_id');
                                                    
            $data['courses']        =   Course::has('topic.category')->select('id', 'name', 'topic_id','display_order', 'reference')
                                                    ->whereHas('topic.category', function($query) use($category_ids)
                                                    {
                                                        $query->whereIn('category_id', $category_ids);
                                                    })
                                                    ->orderBy('display_order')
                                                    ->orderBy('topic_id')
                                                    ->get()
                                                    ->groupBy('topic_id');
            return $data;
            
        }
    }

   
    if (!function_exists('footer')){
        function footer(){

            $selectedDetail = PageDetail::$selected;
            if (empty($selectedDetail)) {
                $selectedDetail = PageDetail::getContent('home');
                PageDetail::$selected = $selectedDetail;
            }
            return $selectedDetail;
        }
    }
  
    if (!function_exists('metaData')) {

        function metaData($data)
        {
            static $metaData = [
                'title' => 'Best Practice Training Courses | Best Practice Training',
                'description' => 'Study our professional Best Practice Training courses today delivered by expert trainers in the industry.',
                'keyword' => 'Best Practice Training Courses, Best Practice Training'
            ];
            if (is_array($data)) {
                $metaData = $data;
                return $metaData;
            } 
            return '';
        }
    }
    if (!function_exists('blogs')) {
        function blogs()
        {
            $blogs = Article::where(['type' => 'blog'])->orderBy('post_date', 'desc')->get();
            return $blogs;
        }
    }
    if (!function_exists('topicPopular')) {
        function topicPopular()
        {
            $topicPopular = Topic::has('popular')->get();
            return $topicPopular;
        }
    }

  


