<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//檔案：app/role.php

class Role extends Model
{
   public function users(){
   		return $this->belongsToMany('App\User');
   }
}
