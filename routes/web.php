<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aa', function () {
    return 'aa';
});


// Route::get('/insert', function () {
//    DB::insert('insert into posts(title,content) values(?,?)',['欣欣新的文章標題','欣欣新的文章內容']);
// });


//檔案：routes/web.php

use App\Post;

Route::get('/forcedelete',function(){
	Post::onlyTrashed()->where('is_admin',0)->forceDelete();
});


Route::get('/restore',function(){
	Post::withTrashed()->where('is_admin',0)->restore();
});

Route::get('/readsoftdelete', function () {
	$post=Post::onlyTrashed()->get();
	return $post;
});

Route::get('/softdelete', function () {
	Post::find(4)->delete();
});


Route::get('/create', function () {
	Post::create(['title'=>'更更新的標題','content'=>'更更新的內容']);
});

// Route::get('/basicinsert', function () {
// 	$post = new Post;
// 	$post->title = '又有新的標題惹';
// 	$post->content = '又有新的內容惹';
// 	$post->save();
// });

//檔案：routes/web.php

use App\User;
// use App\Post;

Route::get('post/{id}/user', function() {
    return Post::find($id)->user->name;
});


Route::get('user/{id}/post', function($id) {
    return User::find($id)->post;
});

Route::get('post/{id}/user', function($id) {
    return Post::find($id)->user->name;
});


//檔案：routes/web.php

Route::get('/posts', function() {
    $user = User::find(1); //先確定有User這個model被use

    foreach ($user->posts as $post) {
    	echo $post->title . "<br>";
    }
});

//檔案：routes/web.php

Route::get('/user/{id}/role', function($id) {
    $user= User::find($id)->roles()->get();
            //選出這個user //找出他的階級
     return  $user;
});

//檔案：routes/web.php

Route::get('user/pivot', function() {
    $user = User::find(1);
    foreach ($user->roles as $role) {
        return $role->pivot->created_at;
    }
});

//檔案：routes/web.php

use App\Country;

Route::get('/user/country', function() {
    $country=Country::find(2);
    foreach ($country->posts as $post) {
        return $post->title;
    }
});