<?php

namespace App\Http\Controllers\User\Safety;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SafetyController extends Controller
{
    public function index()
    {
        return view('user.safety.index');
    }

    public function provideFirstAid()
    {
        return view('user.safety.provide-first-aid');
    }

    public function contacts()
    {
        return view('user.safety.contacts');
    }
}
