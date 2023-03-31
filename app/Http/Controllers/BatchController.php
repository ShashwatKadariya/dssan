<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Alumni;
use App\Http\Requests\BatchFormRequest;
use Illuminate\Support\Facades\Storage;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::orderBy('batch', 'desc')->get();
        return view('admin.batch.index', compact('batches'));
    }

    public function create()
    {
        return view('admin.batch.create');
    }

    public function store(BatchFormRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['image'] = $request->file('image')->store('batchImage');
        Batch::create($validatedData);
        return redirect()->route('batch.index')->with('success', 'Batch added successfully.');
    }

    public function show($id)
    {
        $batch = Batch::findorFail($id);
        $alumni = Alumni::where('batch_id', $id)->orderBy('full_name', 'asc')->get();
        return view('admin.batch.show', compact('batch', 'alumni'));
    }

    public function edit(Batch $batch)
    {
        return view('admin.batch.edit', compact('batch'));
    }

    public function update(BatchFormRequest $request, Batch $batch)
    {
        if ($request->hasFile('image')) {
            Storage::delete($batch->image);
            $batch->image = $request->file('image')->store('batchImage');
        }
        $batch->update($request->validated() + [
            'image' => $batch->image,
        ]);
        return redirect()->route('batch.index')->with('success', 'Batch updated successfully.');
    }

    public function destroy(Batch $batch)
    {
        $alumni = $batch->alumni->where('batch_id', $batch->id);
        if (count($alumni) == 0) {
            Storage::delete($batch->image);
            $batch->delete();
            return redirect()->route('batch.index')->with('danger', 'Batch deleted successfully.');
        } else {
            return redirect()->route('batch.index')->with('danger', 'Batch not empty.');
        }
    }
}
