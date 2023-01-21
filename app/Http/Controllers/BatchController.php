<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Batch;
use Illuminate\Http\Request;

use function Symfony\Component\VarDumper\Dumper\esc;

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

    public function show($id)
    {
        $batch = Batch::findorFail($id);
        $alumni = $batch->alumni->where('batch_id', $id);
        return view('admin.batch.show', compact('batch', 'alumni'));
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
        $alumni = $batch->alumni->where('batch_id', $batch->id);
        if (count($alumni) == 0) {
            $batch->delete();
            return redirect()->route('batch.index')->with('danger', 'Batch deleted successfully.');
        } else {
            return redirect()->route('batch.index')->with('danger', 'Batch not empty.');
        }
    }
}
