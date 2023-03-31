<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\NewsFormRequest;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('release_date', 'desc')->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsFormRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['image'] = $request->file('image')->store('newsImage');
        News::create($validatedData);
        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    public function show($id)
    {
        $news = News::findorFail($id);
        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        $date = $news->release_date->format('Y-m-d');
        return view('admin.news.edit', compact('news', 'date'));
    }

    public function update(NewsFormRequest $request, News $news)
    {
        if ($request->hasFile('image')) {
            Storage::delete($news->image);
            $news->image = $request->file('image')->store('newsImage');
        }
        $news->update($request->validated() + [
            'image' => $news->image,
        ]);
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        Storage::delete($news->image);
        $news->delete();
        return redirect()->route('news.index')->with('danger', 'News deleted successfully.');
    }
}
