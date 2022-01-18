<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\ShipmentTracking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        return view('tracking', [
            'shipment' => '', 
            'tracking' => []
        ]);
    }

    public function search(Request $request)
    {
        $check = Shipment::where('no_invoice', $request->no_invoice)->get();

        if (count($check) > 0) {
            return redirect('/tracking/' . $request->no_invoice);
        }
        else {
            return redirect()->back()->with('status','No Resi tidak ditemukan.');
        }
    }

    public function tracking(Shipment $shipments)
    {
        // $logistic = Company::first();
        // $status = Status::get();
        $shipment = Shipment::where('no_invoice', $shipments->no_invoice)->first();
        $tracking = ShipmentTracking::where('no_invoice', $shipments->no_invoice)->orderBy('id', 'DESC')->get();

        // for ($i=0; $i < count($shipment); $i++) { 
            $shipment['datetime'] = Carbon::parse($shipment['datetime'])->format('H:i M d Y');;
        // }
        for ($i=0; $i < count($tracking); $i++) { 
            $tracking[$i]['date'] = Carbon::parse($tracking[$i]['datetime'])->format('M d, Y');;
            $tracking[$i]['time'] = Carbon::parse($tracking[$i]['datetime'])->format('H:i');;
        }

        // return $tracking;
        return view('tracking', [
            'shipment' => $shipment, 
            'tracking' => $tracking
        ]);
    }

}
