<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller {


    function index() {
        return view('services.index');
    }

    function show(){
        return view('services.show');
    }

}
