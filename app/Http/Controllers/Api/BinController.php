<?php

namespace App\Http\Controllers\Api;
use App\Bins;
use App\Http\Resources\BinCollection;
use App\BinOwners;
use App\BinRequest;
use App\Traits\ApiBaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


/**
 * @group Bin Management.
 *
 * Bin Owners management
 * Class BinController
 * @package App\Http\Controllers\Api
 *
 */
class BinController extends Controller
{
    use ApiBaseController;

    /**
     *
     * Function responsible for getting the individual bins for their respective owner
     * @return BinCollection
     *
     *Owner Bins
     *
     * Get bins for an owner.
     * @responseFile responses/owner.bin.json
     */

    public function getOwnerBins(){
            //get the required user.
            $owner = auth()->user();

            //
            $ownerBinIds = BinOwners::where('owner_ID', $owner->id)->get();

            //array to hold bins
            $bins = [];
            $ownerBinIds->each(function($ownerBinId) use (&$bins) {
                //find the bin
                $bin = Bins::find($ownerBinId->binId);
                //push to the bins array
                array_push($bins, $bin);
            });
        return  new BinCollection(Collect($bins));
    }

    /**
     * Function for storing the incoming request of the bin.
     * @param Request $request
     * @return JsonResponse ()
     */

    public function storeBinStatics(Request $request){
        //validating the values coming from the bin.

        $validator = Validator::make($request->all(), [
            'bin_id' => 'required|integer|max:10',
            'waste_level' => 'required|double|max:10',
            'smoke_noti' => 'required|integer',
            'weight' =>  'required|double',
            'location_id' => 'required|string',
            'request_state' => 'required|boolean'
        ]);

        if($validator->fails()){
            return $this->sendErrorResponse($validator->errors()->first());
        }

//        $bin_request = BinRequest::query()->create([
//            'bin_id' => $request->input('bin_id'),
//            'waste_level' => $request->input('waste_level'),
//            'smoke_noti' => $request->input('smoke_noti'),
//            'weight' => $request->input('weight'),
//            'location_id' => $request->input('location_id'),
//            'request_state' => $request->input('request_state')
//        ]);

        return  $this->sendSuccessResponse('Request sent successfully');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
