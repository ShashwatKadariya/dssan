<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
use App\Models\Batch;
use App\Models\Event;
use App\Models\Alumni;
use App\Models\Feedback;
use App\Http\Requests\FeedbackFormRequest;

class ClientSideController extends Controller
{
    public function home()
    {
        $teams = Team::orderBy('position', 'asc')->get();
        $feedbacks = Feedback::where('display_status', 'Displayed')->get();
        $alumni_count = count(Alumni::all());
        $team_count = count(Team::all());
        $batch_count = count(Batch::all());
        return view('users.home', compact('teams', 'feedbacks', 'alumni_count', 'team_count', 'batch_count'));
    }

    public function batch()
    {
        $batches = Batch::orderBy('batch', 'desc')->get();
        return view('users.alumni', compact('batches'));
    }

    public function alumni($slug)
    {
        $batch = Batch::where('slug', $slug)->first();
        $alumni = Alumni::where('batch_id', $batch->id)->orderBy('full_name', 'asc')->get();
        return view('users.alumni_view', compact('batch', 'alumni'));
    }

    public function news_events()
    {
        $events = Event::orderBy('event_date_time', 'desc')->take(3)->get();
        $news = News::orderBy('release_date', 'desc')->take(3)->get();
        return view('users.news&events', compact('events', 'news'));
    }

    public function allnews()
    {
        $all_news = News::orderBy('release_date', 'desc')->get();
        return view('users.all_news', compact('all_news'));
    }

    public function article($slug)
    {
        $article = News::where('slug', $slug)->first();
        $latest_news = News::orderBy('release_date', 'desc')->take(3)->get();
        return view('users.news_article', compact('article', 'latest_news'));
    }

    public function allevents()
    {
        $all_events = Event::orderBy('event_date_time', 'desc')->get();
        return view('users.all_events', compact('all_events'));
    }

    public function feedback(FeedbackFormRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('feedbackImage');
        }
        Feedback::create($validatedData);
        return redirect('/')->with('info', 'Thankyou for your feedback.');
    }
}
