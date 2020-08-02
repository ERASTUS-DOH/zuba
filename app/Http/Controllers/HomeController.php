<?php

namespace App\Http\Controllers;

use App\BinRequest;
use App\Bins;
use App\Owners;
use App\RequestType;
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
        $bin_requests = BinRequest::all();
        $test = RequestType::all();
        $pending_requests = BinRequest::where('request_state','=','1')->get();

        $data = [
            'riders' => $riders,
            'owners' => $owners,
            'tricycles' => $tricycles,
            'bins' => $bins,
            'bin_requests' => $bin_requests,
            'test' => $test,

        ];
        return view('zuba.index', ['data' => $data,'pending_requests' => $pending_requests]);
    }

//    public function bins(){
//
//    }
}
