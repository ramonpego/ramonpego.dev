<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function site() {
        return view('site.content.home');
    }

    public function index() {
        return view('adminMat.contents.dashboard');
    }
}
