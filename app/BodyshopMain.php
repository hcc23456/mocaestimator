<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodyshop extends Model
{
    //table to use - else default is plural of class name(Forms)
    protected $table = 'bodyshop_main';

    //set primarykey
    protected $primaryKey = 'bodyshop_id';

    //mass assign
    protected $fillable = ['name', 'url', 'email', 'phone_number', 'address', 'rep_pic',
        'rep_name', 'rep_title', 'about_us'];

    //not mass assigned
    //protected $guarded = [''];
}
