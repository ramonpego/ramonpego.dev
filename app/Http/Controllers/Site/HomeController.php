<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function dashboard() {
        return view('adminMat.contents.dashboard');
    }

    public function index() {
        return view('site.content.home');
    }
}
