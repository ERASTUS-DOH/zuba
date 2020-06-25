<?php

namespace App\Http\Controllers;


use App\Bins;
use App\Http\Requests\BinStoreRequest;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class BinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetching list of all registered bins.
        $bins = Bins::all();

       //function to return all the bins available.
        return view('zuba.Bins.index',['bins' => $bins]);
    }

    //function for showing the details of the bin.
    public function sample($id){
        return view('zuba.Bins.show');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zuba.Bins.add');
    }

    /**
     * Store a newly created Bin resource in the database.
     *
     * @param  \Illuminate\Http\Request\BinStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BinStoreRequest $request)
    {

//        //verifying if the bin already exists.
//        $check = Bins::where('serialNumber',$request->input('serialNumber'))->get();
//
//        if($check){
//            return back()->withInput()->with('error','Bin with similar Serial number exits');
//        }

        //creation of new bin.
        $bin = Bins::create([
            'nickname' => $request->input('nickName'),
            'serialNumber' => $request->input('serialNumber'),
            'max_level' => $request->input('maxLevel'),
            'maxWeight' => $request->input('maxWeight'),
            'locationID' =>$request->input('locationID'),
            'smoke_noti' => $request->input('smokeNotification')
        ]);

        if($bin){
            return redirect()->route('bins')->with('success','Bin was created successfully!');
        }

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
        return view('zuba.Bins.edit');
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
