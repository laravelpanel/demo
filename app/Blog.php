<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    //put your code here
    protected  $table = 'blog';
    
    // return url of blog post 
    function getUrl(){
        return Config::get('app.url') .'/blog/post/'. $this->id . '/' . BlogController::seoUrl($this->title);
    }
    
    public static  function mostRecommended(){
        return  Blog::orderBy('socialPoint','desc')->where('public', 1)->take(1)->get()->first();
    }
    public function nextPost(){
        // get next post
        return Blog::where('id', '>', $this->id)->where('public', 1)->orderBy('id','asc')->take(1)->get()->first();
    }
    public  function previousPost(){
        // get previous  post 
        return Blog::where('id', '<', $this->id)->where('public', 1)->orderBy('id','desc')->take(1)->get()->first();
    }
    
    public static  function lastPosts(){
        return Blog::orderBy('created_at','desc')->where('public', 1)->get();
    }
}
