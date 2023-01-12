<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackFormRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::get();
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function create()
    {
        //
    }

    public function store(FeedbackFormRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('feedbackImage');
        }
        Feedback::create($validatedData);
        return redirect('/home')->with('info', 'Your message has been recorded.');
    }

    public function show(Feedback $feedback)
    {
        //
    }

    public function edit(Feedback $feedback)
    {
        return view('admin.feedbacks.edit', compact('feedback'));
    }

    public function update(FeedbackFormRequest $request, Feedback $feedback)
    {
        if ($request->hasFile('image')) {
            if (!is_null($feedback->image)) {
                Storage::delete($feedback->image);
            }
            $feedback->image = $request->file('image')->store('feedbackImage');
        }
        $feedback->update($request->validated() + [
            'image' => $feedback->image,
        ]);
        return redirect()->route('feedback.index')->with('success', 'Details updated successfully.');
    }

    public function destroy(Feedback $feedback)
    {
        if (!is_null($feedback->image)) {
            Storage::delete($feedback->image);
        }
        $feedback->delete();
        return redirect()->route('feedback.index')->with('danger', 'Details deleted successfully.');
    }
}
