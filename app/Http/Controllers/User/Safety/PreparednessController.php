<?php

namespace App\Http\Controllers\User\Safety;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreparednessController extends Controller
{
    public function index()
    {
        return view('user.safety.preparedness-kit.index');
    }

    public function itemsList()
    {
        return view('user.safety.preparedness-kit.items-list');
    }
}
