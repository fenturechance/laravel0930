<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //檔案：APP/user.php
    public function post(){
        return $this->hasOne('App\Post','user_id');
                                    //user_id其實是預設值
    }
    
    //檔案：APP/user.php
    public function posts(){
        return $this->hasMany('App\Post');
    } 
    //檔案：APP/user.php
    public function roles(){
        // return $this->belongsToMany('App\Role','user_roles','user_id','role_id');
        //若表格命名為role_user，則可以使用預設值，不用上面那行
        return $this->belongsToMany('App\Role')->withPivot('created_at');
    }
}
