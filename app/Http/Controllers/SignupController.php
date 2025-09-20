<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class SignupController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:35'],
            'last_name' => ['required', 'string', 'min:1', 'max:35'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', Password::min(8)],
            'password_confirmation' => ['required' , 'same:password']
        ]);

        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect('/')->with('success', 'Account created and logged in!');
    }
}
