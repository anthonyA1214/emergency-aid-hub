<?php

namespace App\Http\Controllers\User\Safety;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstAidController extends Controller
{
    public function index()
    {
        return view('user.safety.first-aid-kit.index');
    }

    public function itemsList()
    {
        return view('user.safety.first-aid-kit.items-list');
    }
}
