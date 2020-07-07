<?php

namespace App\Http\Controllers;

use App\Http\Requests\CycleStoreRequest;
use App\Tricycles;
use Illuminate\Http\Request;

class TricyclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cycles = Tricycles::all();
        return view('zuba.Tricycles.index', ['cycles' => $cycles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zuba.Tricycles.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CycleStoreRequest $request)
    {

        $cycle = Tricycles::create([
            'regNumber' => $request->input('reg_number'),
            'colour' => $request->input('color'),
            'brand' => $request->input('brand'),
            'max_capacity' => $request->input('max_capacity')
        ]);

        if($cycle){
            return redirect(url('/tricycles'))->with('success','Tricycles was created successfully!');
        }
        return back()->withInput()->with('error','An error occured preventing the creation of new Tricycle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cycle = Tricycles::find($id);
        return view('zuba.Tricycles.profile',['cycle' => $cycle]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cycle = Tricycles::find($id);
        return view('zuba.Tricycles.update',['cycle' => $cycle]);
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
        $validateData = $request->validate([
            'color' => 'required|string',
            'max_capacity' => 'required|numeric'
        ]);

        $updatedCycle = Tricycles::where('id',$id)->update([
            'colour' => $request->input('color'),
            'max_capacity' => $request->input('max_capacity')
        ]);

        if($updatedCycle){
            return redirect(url('/tricycles'))->with('success','Tricycle updated successfully!');
        }
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
