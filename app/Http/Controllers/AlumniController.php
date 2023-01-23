<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumniFormRequest;
use App\Models\Alumni;
use App\Models\Batch;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    public function index()
    {
        //
    }

    public function create($id)
    {
        $batch = Batch::find($id);
        return view('admin.alumni.create', compact('batch'));
    }

    public function store(AlumniFormRequest $request, $id)
    {
        $validatedData = $request->validated();
        $validatedData['batch_id'] = $id;
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('alumniImage');
        }
        Alumni::create($validatedData);
        return redirect()->route('batch.show', $id)->with('success', 'Alumnus added successfully.');
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $batches = Batch::get();
        $alumni = Alumni::find($id);
        return view('admin.alumni.edit', compact('batches', 'alumni'));
    }

    public function update(AlumniFormRequest $request, $id)
    {
        $alumni = Alumni::find($id);
        if ($request->hasFile('image')) {
            if (!is_null($alumni->image)) {
                Storage::delete($alumni->image);
            }
            $alumni->image = $request->file('image')->store('alumniImage');
        }
        $alumni->update($request->validated() + [
            'image' => $alumni->image,
        ]);
        return redirect()->route('batch.show', $alumni->batch_id)->with('success', 'Details edited successfully.');
    }

    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        if (!is_null($alumni->image)) {
            Storage::delete($alumni->image);
        }
        $alumni->delete();
        return back()->with('danger', 'Alumnus removed successfully.');
    }
}
