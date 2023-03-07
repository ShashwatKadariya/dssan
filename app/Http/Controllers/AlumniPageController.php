<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Batch;
use Illuminate\Http\Request;

class AlumniPageController extends Controller
{
    public function index()
    {
        $batches = Batch::orderBy('batch', 'desc')->get();
        return view('users.alumni', compact('batches'));
    }

    public function show($id)
    {
        $batch = Batch::findorFail($id);
        $alumni = Alumni::where('batch_id', $id)->orderBy('full_name', 'asc')->get();
        return view('users.alumni_view', compact('batch', 'alumni'));
    }
}
