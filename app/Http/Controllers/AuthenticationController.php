<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function STORE(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', 'your are now sign in');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provide credentials does not match your account'
        ]);
    }
}
