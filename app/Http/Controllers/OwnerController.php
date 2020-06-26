<?php

namespace App\Http\Controllers;

use App\Owners;
use App\Http\Requests\OwnerStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use vendor\project\StatusTest;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owners::all();
        return view('zuba.BinOwners.index',['owners' => $owners])->with('success','wecome to the Bin Owners page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zuba.BinOwners.add');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerStoreRequest $request)
    {
        $owner = Owners::create([
            'title' =>$request->input('title'),
            'fname' =>$request->input('fname'),
            'lname' =>$request->input('lname'),
            'other_name' => $request->input('other_name'),
            'telephone' => $request->input('telephone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password'=> Hash::make($request->input('password'))
        ]);



        if($owner){
            return redirect()->route('Owners')->with('success','New Owner was created successfully!');
        }

    }

    /**
     * Displays the specified bin owner and their details. .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owners::find($id);
        return view('zuba.BinOwners.show',['owner' => $owner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
