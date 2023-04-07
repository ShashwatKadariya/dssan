<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(UserFormRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make('password');
        User::create($validatedData);
        return redirect('/dashboard')->with('success', 'User added successfully.');
    }
}
