<?php

namespace App\Http\Controllers;

use App\Bins;
use App\Owners;
use App\Riders;
use App\Tricycles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $riders = Riders::all();
        $owners = Owners::all();
        $tricycles = Tricycles::all();
        $bins = Bins::all();

        $data = [
            'riders' => $riders,
            'owners' => $owners,
            'tricycles' => $tricycles,
            'bins' => $bins
        ];
        return view('zuba.index', ['data' => $data]);
    }

//    public function bins(){
//
//    }
}
