<?php

namespace App\Http\Controllers;

use App\Bins;
use App\TricycleRiders;
use App\Tricycles;
use App\User;
use DemeterChain\B;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        if(Auth::check()) {
            $data = [
                'bins'         =>   Bins::all(),
                'riders'       =>   User::where('usertype',1)->get(),
                'tricycles'    =>   Tricycles::all(),
                'binOwners'    =>   User::where('usertype',2)->get()
            ];
            return view('zuba.index', ['details' => $data]);
        }
        return ;

    }

//    public function bins(){
//
//    }
}
