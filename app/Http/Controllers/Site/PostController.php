<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        return view('site.content.posts');
    }

    public function detalhes() {
        return view('site.content.post');
    }
}
