<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'batch' => 'required|unique:batches',
        ]);
        Batch::create($validatedData);
        return redirect()->route('batch.index')->with('success', 'Batch added successfully.');
    }

    public function show(Batch $batch)
    {
    }

    public function edit(Batch $batch)
    {
        return view('admin.batch.edit', compact('batch'));
    }

    public function update(Request $request, Batch $batch)
    {
        $validatedData = $this->validate($request, [
            'batch' => 'required',
        ]);
        $batch->update($validatedData);
        return redirect()->route('batch.index')->with('success', 'Batch updated successfully.');
    }

    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->route('batch.index')->with('danger', 'Batch deleted successfully.');
    }
}
