<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class AlumniPageController extends Controller
{
    public function alumni()
    {
        $batches = Batch::orderBy('batch', 'desc')->get();
        return view('users.alumni', compact('batches'));
    }
}
