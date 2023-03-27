<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsEventsController extends Controller
{
    public function index()
    {
    }

    public function allevents()
    {
        $all_events = Event::orderBy('event_date_time', 'desc')->get();
        return view('users.all_events', compact('all_events'));
    }
}
