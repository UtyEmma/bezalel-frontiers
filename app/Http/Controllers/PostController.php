<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

    function index(){
        return view('posts.index');
    }

    function show(Post $post){
        return view('posts.single', compact(['post']));
    }

}
