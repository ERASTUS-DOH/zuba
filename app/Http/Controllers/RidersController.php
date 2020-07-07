<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiderStoreRequest;
use App\Riders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riders = Riders::all();
        return view('zuba.Riders.index',['riders' => $riders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zuba.Riders.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RiderStoreRequest $request)
    {
        $rider = Riders::create([
            'title' =>$request->input('title'),
            'fname' =>$request->input('fname'),
            'lname' =>$request->input('lname'),
            'other_name' => $request->input('other_name'),
            'telephone' => $request->input('telephone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password'=> Hash::make($request->input('password'))
        ]);



        if($rider){
            return redirect()->route('riders')->with('success','New Rider was created successfully!');
        }
        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rider = Riders::find($id);
        return view('zuba.Riders.profile',['rider' => $rider]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rider =  Riders::find($id);
        return view('zuba.Riders.edit',['rider' => $rider]);
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
        $validatedData = $request->validate([
            'title' => 'required|string',
            'fname' => 'required|string',
            'lname' => 'required|string',
            'other_name' => 'string|nullable',
            'address' => 'string',
            'telephone' => 'numeric',
            'email' => 'email|required'
        ]);

        $riderUpdate = Riders::where('id',$id)
            ->update([
                'title' => $request->input('title'),
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'other_name' => $request->input('other_name'),
                'address' => $request->input('address'),
                'telephone' => $request->input('telephone'),
                'email' => $request->input('email')
            ]);

        if($riderUpdate){
            return redirect(url('/riders/'.$id))->with('success','Rider updated successfully');
        }

        return back()->withInput()->with('error','something strange occured preventing update');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rider = Riders::find($id)->delete();
        if($rider){
            return redirect(url('/riders'))->with('success','Rider deleted successfully');
        }
        return redirect(url('/riders'))->with('error','Rider was not deleted.');
    }
}
