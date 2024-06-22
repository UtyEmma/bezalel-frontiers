<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller {
    
    function index(){
        $teams = Team::whereStatus(Status::ACTIVE)->paginate();
        return view('teams.index', compact('teams'));
    }

    function show(Team $team){
        return view('teams.show', compact('team'));
    }

}
