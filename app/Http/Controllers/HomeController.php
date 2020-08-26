<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function site() {
        return view('site.content.home');
    }

    public function index() {
        return view('adminMat.contents.dashboard');
    }
}
