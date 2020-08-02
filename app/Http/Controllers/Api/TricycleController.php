<?php

namespace App\Http\Controllers\Api;
use App\Traits\ApiBaseController;
use App\TricycleRiders;
use App\Tricycles;
use App\Http\Resources\TricycleCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * @group Tricycles Management.
 * Tricycle Owners management
 * Class TricycleController
 * @package App\Http\Controllers\Api
 *
 */
class TricycleController extends Controller
{
    use ApiBaseController;

    /**
     *
     * Function responsible for getting the individual tricycle details for their respective owner
     * @return TricycleCollection
     *
     *Riders Tricycles
     *
     * Get the tricycles for a rider.
     * @responseFile response/rider.bin.json
     */

    public function getOwnerCycles(){
        //get the required Rider
        $rider = auth()->user();

        //
        $rider_cycle_ids = TricycleRiders::where('rider_id','=',$rider->id)->get();

        //array to hold the Tricycles owned by the rider.
        $cycles = [];
        $rider_cycle_ids->each(function ($rider_cycle_id) use (&$cycles){
            $cycle = Tricycles::find($rider_cycle_id->truck_id);
            //push to the cycles array.
            array_push($cycles,$cycle);
        });

        return new TricycleCollection(Collect($cycles));
    }
}


