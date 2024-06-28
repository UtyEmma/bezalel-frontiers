<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller {

    function index(){
        $services = Service::isFeatured()->status(Status::ACTIVE)->latest()->get();
        $testimonials = Testimonial::whereFeatured(true)->status(Status::ACTIVE)->latest()->get();
        $posts = Post::status(Status::ACTIVE)->latest()->get();
        $sliders = Slider::status(Status::ACTIVE)->get();
        $clients = Client::status(Status::ACTIVE)->whereFeatured(true)->get();

        return view('welcome', compact('services', 'testimonials', 'posts', 'sliders', 'clients'));
    }

    function about(){
        $teams = Team::whereStatus(Status::ACTIVE)->get();
        $testimonials = Testimonial::status(Status::ACTIVE)->latest()->get();
        $faqs = Faq::whereStatus(Status::ACTIVE)->latest()->get();
        return view('about', compact('teams', 'testimonials', 'faqs'));
    }

    function contact(){
        return view('contact');
    }

    function faqs(){
        $faqs = Faq::whereStatus(Status::ACTIVE)->latest()->get();
        return view('faqs', compact('faqs'));
    }

}
