<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
	///////////////
	// old model //
	///////////////
    // protected $primaryKey = 'id';
    // protected $table = 'posts';
    // protected $fillable = array('url', 'title', 'description', 'content', 'blog', 'created_at_ip', 'updated_at_ip');

    ///////////////
    // new model //
    ///////////////
    protected $fillable = array('url', 'title', 'description', 'content', 'image', 'blog', 'category_id');

    public static function prevBlogPostUrl($id)
    {
    	$blog = static::where('id', '<', $id)->orderBy('id', 'desc')->first();
    	return $blog ? $blog->url : '#';
    }

    public static function nextBlogPostUrl($id)
    {
    	$blog = static::where('id', '>', $id)->orderBy('id', 'asc')->first();
    	return $blog ? $blog->url : '#';
    }

    public function tags()
    {
    	return $this->belongsToMany('App\BlogTag', 'blog_post_tags', 'post_id', 'tag_id');
    }
}
