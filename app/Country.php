<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //檔案：app/country.php
    public function posts(){
    	return $this->hasManyThrough('App\Post','App\User');
    }
}
