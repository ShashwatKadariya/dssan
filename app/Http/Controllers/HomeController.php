<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $teams = Team::orderBy('position', 'asc')->get();
        $feedbacks = Feedback::where('display_status', 'Displayed')->get();
        return view('users.home', compact('teams', 'feedbacks'));
    }
}
