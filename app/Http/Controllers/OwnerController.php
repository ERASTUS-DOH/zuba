<?php

namespace App\Http\Controllers;

use App\BinOwners;
use App\Http\Resources\Bin;
use App\Owners;
use App\Bins;
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
        $details = array();
        $owner_bins = BinOwners::where('owner_ID','=',$id)->get();
        foreach($owner_bins as $owner_bin ){
            $bin =  Bins::find($owner_bin->binId);
            array_push($details,$bin);
        }

//        $details = array();
        $owner = Owners::find($id);
//        $owner_bins = BinOwners::where('owner_ID','=',$id)->get();
//        foreach($owner_bins as $owner_bin ){
//          $bin =  Bins::where('id','=',$owner_bin->binId)->get();
//          array_push($details,$bin);
//        }
        return view('zuba.BinOwners.show',['owner' => $owner,'details' => $details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner =  Owners::find($id);
        return view('zuba.BinOwners.edit',['owner' => $owner]);
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


        $ownerUpdate = Owners::where('id',$id)
            ->update([
                'title' => $request->input('title'),
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'other_name' => $request->input('other_name'),
                'address' => $request->input('address'),
                'telephone' => $request->input('telephone'),
                'email' => $request->input('email')
            ]);

        if($ownerUpdate){
            //urn redirect()->route('projects.show',['Project'=>$Project])->with('success','Project updated Successfully');
            return redirect(url('/binOwners/'.$id))->with('success','Bin owner updated successfully');
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
        $owner = Owners::find($id)->delete();
        if($owner){
            return redirect(url('/binOwners'))->with('success','Bin Owner deleted successfully');
        }
        return redirect(url('/binOwners'))->with('error','Bin Owner was not deleted.');
    }
}
