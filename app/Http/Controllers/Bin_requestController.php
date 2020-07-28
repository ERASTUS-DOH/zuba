<?php

namespace App\Http\Controllers;

use App\BinRequest;
use Illuminate\Http\Request;

class Bin_requestController extends Controller
{
    //function responsible for listing all the pick_up requests.
    public function index(){
        $pickup_requests = BinRequest::all();
        return view('zuba.Requests.index',['requests' => $pickup_requests]);
    }
}

