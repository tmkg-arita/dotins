<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
class Postcontroller extends Controller
{


   public function index() {

        $posts = Post::latest()->get();

        return view('index')
        -> with(['posts' => $posts]);
    }

    public function show(Post $post){

        return view('posts.show')
        -> with(['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request){

        $post = new Post();
        // dd($post);

        $post -> title = $request -> title;
        $post -> body = $request -> body;
        // データベースに値を挿入する。
        $post->save();

        return redirect() -> route('posts.index');
   }
   public function edit(Post $post){

    return view('posts.edit')
    -> with(['post' => $post]);
}

public function update(PostRequest $request,Post $post){

    $post -> title = $request -> title;
    $post -> body = $request -> body;
    // データベースに値を挿入する。
    $post->save();

    return redirect() -> route('posts.show',$post);
}

public function destory(Post $post){
    $post -> delete();
    return redirect()->route('posts.index');
}

}
