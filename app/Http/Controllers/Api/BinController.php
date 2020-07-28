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

    /**
     * Register a new Bin statistics
     *
     * Registers a new request issued by the bin for pickup.
     * @bodyParam bin_id integer required The id of the bin issuing the request. Example: 1.
     * @bodyParam waste_level double required The level of waste in the bin. Example: 2.0.
     * @bodyParam smoke_noti boolean required The smoke notification status. Example: 0
     * @bodyParam weight double required The weight of the bin. Example: 3.0
     * @bodyParam location_long string required The longitude of the location of the bin. Example:5.1106446
     * @bodyParam location_lat string required The latitude of the location of the bin. Example: -5.1106446
     *
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "bin_id": 1,
     * "waste_level":"1.0",
     * "smoke_noti": "1",
     * "weight": "1.0",
     * "location_long": "5.1106446",
     * "location_lat": "-5.1106446",
    *    }
     * }
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function storeBinStatistics(Request $request){
        //validating the values coming from the bin.

        $validator = Validator::make($request->all(), [
            'bin_id' => 'required|integer|max:10',
            'waste_level' => 'required|double|max:10',
            'smoke_noti' => 'required|boolean',
            'weight' =>  'required|double',
            'location_long' => 'required|string',
            'location_lat' => 'required|string',
        ]);

        if($validator->fails()){
            return $this->sendErrorResponse($validator->errors()->first());
        }

        $bin_request = BinRequest::query()->create([
            'bin_id' => $request->input('bin_id'),
            'waste_level' => $request->input('waste_level'),
            'smoke_noti' => $request->input('smoke_noti'),
            'weight' => $request->input('weight'),
            'location_long' => $request->input('location_long'),
            'location_lat' => $request->input('location_lat'),
        ]);

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
