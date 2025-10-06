<?php

namespace App\Http\Controllers\User\Safety;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisasterController extends Controller
{
    public function index()
    {
        return view('user.safety.natural-and-man-made-disasters.index');
    }

    public function earthquake()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.earthquake');
    }

    public function landslide()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.landslide');
    }

    public function sinkhole()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.sinkhole');
    }

    public function flood()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.flood');
    }

    public function wildfire()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.wildfire');
    }

    public function drought()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.drought');
    }

    public function tornado()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.tornado');
    }

    public function typhoon()
    {
        return view('user.safety.natural-and-man-made-disasters.natural.typhoon');
    }

    public function chemicalSpill()
    {
        return view('user.safety.natural-and-man-made-disasters.man-made.chemical-spill');
    }

    public function infrastructureFailure()
    {
        return view('user.safety.natural-and-man-made-disasters.man-made.infrastructure-failure');
    }

    public function transportationAccident()
    {
        return view('user.safety.natural-and-man-made-disasters.man-made.transportation-accident');
    }

    public function terrorism()
    {
        return view('user.safety.natural-and-man-made-disasters.man-made.terrorism');
    }
}
