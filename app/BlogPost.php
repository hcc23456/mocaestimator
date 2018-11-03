<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //table to use - else default is plural of class name(Forms)
    protected $table = 'blog_post';

    //set primarykey
    protected $primaryKey = 'post_id';

    //mass assign
    protected $fillable = ['title', 'text_body1', 'text_body2', 'text_body3', 'text_body4', 'text_body5',
        'text_body6', 'text_body7', 'text_body8', 'text_body9', 'text_body10', 'pic1', 'pic2', 'pic3', 'pic4', 'pic5',
        'pic6', 'pic7', 'pic8', 'pic9', 'pic10', 'user_id', 'created_at', 'updated_at'];

    //not mass assigned
    //protected $guarded = [''];
}
