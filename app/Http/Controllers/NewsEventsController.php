<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsEventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date_time', 'desc')->take(3)->get();
        $news = News::orderBy('release_date', 'desc')->take(3)->get();
        // dd($news);
        return view('users.news&events', compact('events', 'news'));
    }

    public function allevents()
    {
        $all_events = Event::orderBy('event_date_time', 'desc')->get();
        return view('users.all_events', compact('all_events'));
    }

    public function allnews()
    {
        $all_news = News::orderBy('release_date', 'desc')->get();
        return view('users.all_news', compact('all_news'));
    }

    public function article($id)
    {
        $article = News::findorFail($id);
        $latest_news = News::orderBy('release_date', 'desc')->take(3)->get();
        return view('users.news_article', compact('article', 'latest_news'));
    }
}
