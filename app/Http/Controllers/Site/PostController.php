<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        $posts = Post::query()->paginate(5);
        return view('site.content.home',compact('posts'));
    }

    public function show(Post $post) {
        return view('site.content.post',compact('post'));
    }
}
