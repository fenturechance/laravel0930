<?php
//檔案：app/post.php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
				//parents
{
	use SoftDeletes;
	protected $dates=['deleted_at'];
	protected $fillable = ['title','content','user_id'];

	//檔案：app/post.php
	public function user(){
		return $this->belongsTo('App\User');
	}
}
