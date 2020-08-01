<?php

namespace App\Http\Controllers\Api;
use App\Events\BinStatusBroadcast;
use App\Bins;
use App\Http\Resources\BinCollection;
use App\BinOwners;
use App\BinRequest;
//use App\ManualPickRequest;
use App\RequestType;
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
     * @bodyParam id integer required The id of the bin issuing the request. Example: 1.
     * @bodyParam c_level double required The level of waste in the bin. Example: 2.0.
     * @bodyParam c_weight double required The weight of the bin. Example: 3.0
     * @bodyParam s_noti boolean required The smoke notification status. Example: 0
     * @bodyParam loc_long string required The longitude of the location of the bin. Example:5.1106446
     * @bodyParam loc_lat string required The latitude of the location of the bin. Example: -5.1106446
     *
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "id": 1,
     * "c_level":"1.0",
     * "c_weight": "1.0",
     * "s_noti": "1",
     * "loc_long": "5.1106446",
     * "loc_lat": "-5.1106446",
    *    }
     * }
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function storeBinStatistics(Request $request){
        //validating the values coming from the bin.

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer|max:10',
            'c_level' => 'required|numeric|max:10',
            'c_weight' =>  'required|numeric',
            's_noti' => 'required|boolean',
            'loc_long' => 'required|string',
            'loc_lat' => 'required|string',
        ]);

        if($validator->fails()){
            return $this->sendErrorResponse($validator->errors()->first());
        }

        $bin_request = BinRequest::query()->create([
            'bin_id' => $request->input('id'),
            'current_level' => $request->input('c_level'),
            'current_weight' => $request->input('c_weight'),
            'smoke_noti' => $request->input('s_noti'),
            'location_long' => $request->input('loc_long'),
            'location_lat' => $request->input('loc_lat'),
            'request_state' => 1,
            'request_type' => 0
        ]);

        broadcast(new BinStatusBroadcast($bin_request));

        return  $this->sendSuccessResponse('Request received successfully');
    }



    /**
     * Function for updating the incoming request of the bin.
     * @param Request $request
     * @return JsonResponse ()
     */

    /**
     * Update a  Bin statistics
     *
     * Updates the states of bin.
     * @bodyParam id integer required The id of the bin issuing the request. Example: 1.
     * @bodyParam c_level double required The level of waste in the bin. Example: 2.0.
     * @bodyParam c_weight double required The weight of the bin. Example: 3.0
     * @bodyParam s_noti boolean required The smoke notification status. Example: 0
     * @bodyParam loc_long string required The longitude of the location of the bin. Example:5.1106446
     * @bodyParam loc_lat string required The latitude of the location of the bin. Example: -5.1106446
     *
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "id": 1,
     * "c_level":"1.0",
     * "c_weight": "1.0",
     * "s_noti": "1",
     * "loc_long": "5.1106446",
     * "loc_lat": "-5.1106446",
     *    }
     * }
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function storeBinUpdateStats(Request $request){
        //validation of incoming request.
        $validator = Validator::make($request->all(),[
            'id' => 'required|integer',
            'c_level' => 'required|numeric|max:10',
            'c_weight' => 'required|numeric|max:10',
            's_noti' => 'required|boolean',
            'loc_long' => 'required|string',
            'loclat'  => 'required|string'
        ]);

        if($validator->fails()){
            return $this->sendErrorResponse($validator->errors()->first());
        }

        $updateBin = Bins::find($request->input('id'));
        $updateBin->current_level = $request->input('c_level');
        $updateBin->current_weight = $request->input('c_weight');
        $updateBin->smoke_noti = $request->input('s_noti');
        $updateBin->location_long = $request->input('loc_long');
        $updateBin->location_lat = $request->input('loc_lat');

       if($updateBin->save()){
           return  $this->sendSuccessResponse('Request received successfully');
       }

       return $this->sendErrorResponse('Request not successfull');

    }


    /**
     * Function for creating a new manual pickup request from the mobile application.
     * @param Request $request
     * @return JsonResponse ()
     */

    /**
     * create a  Bin manual pickup statistics
     *
     * creates bin pickup statistics of bin.
     * @bodyParam bin_id integer required The id of the bin issuing the request. Example: 1.
     *
     *
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "bin_id": 1
     * }
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */



    public function storeManualStats(Request $request){
        //validate the incoming request from the mobile app.
        $validator =  Validator::make($request->all(),[
            'bin_id' => 'integer|required'
        ]);

        if($validator->fails()){
            return $this->sendErrorResponse($validator->errors()->first());
        }

        $bin = Bins::find($request->input('bin_id'));

        $pickup_request = BinRequest::query()->create([
            'bin_id' => $bin->id,
            'current_level' => $bin->current_level,
            'current_weight' => $bin->current_weight,
            'smoke_noti' => $bin->smoke_noti,
            'location_long' => $bin->location_long,
            'location_lat' => $bin->location_lat,
            'request_state' => 1,
            'request_type' => 1,
        ]);

        if($pickup_request){
            return  $this->sendSuccessResponse('Request received successfully');
        }

    }

    public function storetest(){
        $test = RequestType::query()->create([
            'request_type' => "welcome"
        ]);

        if($test){
            return  $this->sendSuccessResponse('Request received successfully');
        }
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
