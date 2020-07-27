<?php

namespace App\Http\Controllers;


use App\BinOwners;
use App\Bins;
use App\Owners;
use App\Http\Requests\BinStoreRequest;
use Illuminate\Http\Request;
//use MongoDB\Driver\Session;

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
        //$owners = Owners::all();

       //function to return all the bins available.
        return view('zuba.Bins.index',['bins' => $bins]);
    }

    //function for showing the details of the bin.
    public function sample($id){
        return view('zuba.Bins.show');
    }


    //function responsible for showing the assign bin page together with prospective owners.
    public function assignBin($id){
        $owners = Owners::all();
        return view('zuba.Bins.assignBin',['owners' => $owners,'bin_id' => $id]) ;

    }

    //function responsible for saving the assigned bin to the owner.
    public function saveAssignation(Request $request){

        $assigned = BinOwners::create([
            'owner_ID' =>$request->input('owner_id'),
            'binId' =>$request->input('bin_id'),
        ]);

        $bin = Bins::find($request->input('bin_id'));
        $bin->assign_state = true;
        $update = $bin->save();

        if($assigned && $update){
            return redirect(route('bins'))->with('success','Bin assigned to an owner successfully');
        }

        return back()->with('error','Bin was not assigned');

    }


    //function to de_assign bin from the user.
    public function de_assign($id){
        $delete = BinOwners::where('binId',$id)->delete();
        $bin = Bins::find($id);
        $bin->assign_state = false;
        $update = $bin->save();

        if($delete && $update){
           return redirect(route('bins'))->with('success','Bin de-assigned successfully');
        }

        return back()->with('error','Bin de-assignation unsuccessful');
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
        $bin = Bins::find($id);

        $owner = '';
        //validation of bin ownership
        if($bin->assign_state){
            $binOwner = BinOwners::where('binId','=',$id)->first();
            $owner_id = $binOwner->owner_ID;
            $owner = Owners::find($owner_id);
        }

        return view('zuba.Bins.show',['bin' => $bin,'owner' => $owner]);
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

        $bin = Bins::find($id);

        //check to see if the bin has been assigned to an owner
        if($bin->assign_state){
            return redirect(route('bins'))->with('error','The Bin has been assigned to an owner');
        }

        //deleting the bin successfully and redirecting back.
        if($bin->delete()){
            return redirect(route('bins'))->with('success','The Bin has been deleted successfully');
        }

    }
}
