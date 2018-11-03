<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model //really this is it for this class
{
    //table to use - else default is plural of class name(Forms)
    protected $table = 'form_info';

    //set primarykey
    protected $primaryKey = 'id';

    //mass assign
    protected $fillable = ['client_name', 'car_make', 'car_model', 'car_year', 'client_email', 'client_address', 'client_phonenumber', 'client_memo',
        'client_picture1', 'client_picture2', 'client_picture3'];

    //not mass assigned
    //protected $guarded = ['client_email'];
}
