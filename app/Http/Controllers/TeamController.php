<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Faq;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller {
    
    function index(){
        $teams = Team::whereStatus(Status::ACTIVE)->paginate();
        $faqs = Faq::whereStatus(Status::ACTIVE)->latest()->get();
        return view('teams.index', compact('teams', 'faqs'));
    }

    function show(Team $team){
        return view('teams.show', compact('team'));
    }

}
