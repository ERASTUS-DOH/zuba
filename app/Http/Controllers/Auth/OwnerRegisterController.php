<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class OwnerRegisterController extends Controller
{
    /**
     * this is used for the creation of a bin owner.
     *
     */
    public function createNewUser(Request $request){
        //first of validate the incoming request.
        $validator = Validator::make($request->all(),[
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'other_name' => 'string|max:255',
            'email' => 'required|string|max:20|unique:owners',
            'address' => 'string|max:50',
            'password' => 'required'
        ]);
    }
}



