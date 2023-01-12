<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $teams = Team::orderBy('position', 'asc')->get();
        return view('users.home', compact('teams'));
    }
}
