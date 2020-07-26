<?php

namespace App\Http\Controllers;

use App\BinOwners;
use App\Bins;
use App\Owners;
use Illuminate\Http\Request;
//use vendor\project\StatusTest;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zuba.Settings.index');
    }

    /**
     * show the page to assign Bin to respective registered owners.
     *
     *
     *
     */
    public function assignBin(){
        $owners = Owners::all();
        $bins = Bins::where('assign_state','=',0)->get();
        return view('zuba.Settings.assign_bin',['owners' => $owners,'bins' => $bins]);
    }


    //function to save the assigned bin to the owner.
    public function saveAssignation(Request $request){

        $assigned = BinOwners::create([
            'owner_ID' =>$request->input('owner_id'),
            'binId' =>$request->input('bin_id'),
        ]);

        if($assigned){
           return redirect(route('assignBin'))->with('success','Bin assigned to an owner successfully');
        }

        return back()->with('error','Bin was not assigned');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
