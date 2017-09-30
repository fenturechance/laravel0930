<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	//檔案：app/photo.php
    public function imageable(){

    	return $this->morphTo();
    }
}
