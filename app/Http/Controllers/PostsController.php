<?php
//檔案：app/http/controllers/postscontroller.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Post;

class PostsController extends Controller
{
    //檔案：app/http/controllers/postscontroller.php
    public function index(){
        return view('posts.index');
    }
    public function create(){
    	return view('posts.create');
    }
    public function store(CreatePostRequest $request){
        Post::create($request->all());
        return redirect('/posts');
    }
    //檔案：app/http/controllers/postscontroller.php
    public function show($id){
        $post=Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }
    //檔案：app/http/controllers/postscontroller.php
    public function edit($id){
        $post=Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }
   
    public function update(Request $request,$id){
    	$post=Post::findOrFail($id);
        $post->update($request->all());
        return redirect('posts');
    }

    public function destroy($id){
        //方法一
        $post=Post::findOrFail($id);
        $post->delete();

        //方法二
        // $post=Post::whereId($id)->delete();
        return redirect('/posts');
    }

}
