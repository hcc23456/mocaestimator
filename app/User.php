<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //for captchatrait
    /*public static $rules = [
        'email'                 => 'required|email|unique:notes-users',
        'password'              => 'required|confirmed|min:6',
        'confirmation_code'		=>	'required',
        'password_confirmation' => 'required|same:password',
        //'g-recaptcha-response'  => 'required'
    ];*/

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'confirmation_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password_confirmation', 'remember_token'
    ];

    //needed for foreign key reference, points to Notes model by id(many to many ref)
    /*public function notes()
    {
        return $this->hasMany('Notes','user_id'); //model, param
    }*/
}
