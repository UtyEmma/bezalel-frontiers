<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {

    function index(){
        return view('posts.index');
    }

    function show($post){
        return view('posts.single');
    }

}
