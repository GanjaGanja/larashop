<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array('url', 'title', 'description', 'content', 'blog', 'created_at_ip', 'updated_at_ip');
}
