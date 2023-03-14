<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Batch;
use App\Models\Feedback;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $teams = Team::orderBy('position', 'asc')->get();
        $feedbacks = Feedback::where('display_status', 'Displayed')->get();
        $alumni = count(Alumni::all());
        $team = count(Team::all());
        $batch = count(Batch::all());
        return view('users.home', compact('teams', 'feedbacks', 'alumni', 'team', 'batch'));
    }
}
