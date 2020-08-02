<?php

namespace App\Http\Controllers;

use App\BinOwners;
use App\BinRequest;
use App\Bins;
use App\ManualPickRequest;
use App\Owners;
use Illuminate\Http\Request;

class Bin_requestController extends Controller
{
    //function responsible for listing all the pick_up requests.
    public function index(){
        $pickup_requests = BinRequest::all();
        $manual_requests = BinRequest::where('request_type','=','1')->get();
        $pending_requests = BinRequest::where('request_state','=','1')->get();
        $resolved_requests = BinRequest::where('request_state','=','2')->get();
//        $data = [
//            'pickup_requests'   => $pickup_requests,
//            'pending_requests'  => $pending_requests,
//            'resolved_requests' => $resolved_requests,
//        ];
        return view('zuba.Requests.index',['pickup_requests' => $pickup_requests,
                                                'manual_requests' => $manual_requests,
                                                'pending_requests'=>$pending_requests,
                                                'resolved_requests' => $resolved_requests]);
    }

    //function responsible for all request issued by automatic bins request system.
    public function showAllBinsRequest(){
        $pickup_requests = BinRequest::all();
        return view('zuba.Requests.bins_pickup',['pickup_requests'=>$pickup_requests]);
    }

    //function responsible for all home-pickup request.
    public function showAllPickupRequest(){
        $manual_requests = BinRequest::where('request_type','=','1')->get();
        return view('zuba.Requests.home_pickup',['manual_requests' => $manual_requests]);
    }

    //function responsible for showing all pending.
    public function showAllPending(){
        $pending_requests = BinRequest::where('request_state','=','1')->get();
        return view('zuba.Requests.pending',['pending_requests' => $pending_requests]);
    }

    //function responsible for showing all resolved requests.
    public function showAllResolved(){
        $resolved_requests = BinRequest::where('request_state','=','2')->get();
        return view('zuba.Requests.resolved',['resolved_requests' => $resolved_requests]);
    }

    //function responsible for showing all bin details.
    public function showRequestDetails($id){
        $request = BinRequest::find($id);
        $bin = Bins::where('id','=',$request->bin_id)->first();
        $record = BinOwners::where('binId','=',$request->bin_id)->first();
        $owner = Owners::where('id','=',$record->owner_ID)->first();
        return view('zuba.Requests.detail_info',['request' => $request,'bin' => $bin, 'owner' => $owner]);
    }


    //function responsible for deleting a particular request.
    public function destroy($id){
        dd($id);
        //find the request you would want to delete.
        $request = BinRequest::find($id)->delete();
        if($request){
            return redirect(route('showAllBinsRequest'))->with('success','The request deletion successful');
        }
    }

}

