<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactFormRequest;
use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index()
    {
        $facts = Fact::all();
        return view('admin.facts.index', compact('facts'));
    }

    public function create()
    {
        return view('admin.facts.create');
    }

    public function store(FactFormRequest $request)
    {
        $validatedData = $request->validated();
        Fact::create($validatedData);
        return redirect()->route('fact.index')->with('success', 'Details saved successfully.');
    }

    public function show(Fact $fact)
    {
        //
    }

    public function edit(Fact $fact)
    {
        return view('admin.facts.edit', compact('fact'));
    }

    public function update(FactFormRequest $request, Fact $fact)
    {
        $fact->update($request->validated());
        return redirect()->route('fact.index')->with('success', 'Details updated successfully.');
    }

    public function destroy(Fact $fact)
    {
        $fact->delete();
        return redirect()->route('fact.index')->with('danger', 'Details deleted successfully.');
    }
}
