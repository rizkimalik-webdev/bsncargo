<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Status;
use App\Models\Shipment;
use App\Models\ShipmentTracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search()
    {
        return view('admin.tracking.tracking-search');
    }

    public function tracking(Shipment $shipments)
    {
        $logistic = Company::first();
        $status = Status::get();
        $shipment = Shipment::where('no_invoice', $shipments->no_invoice)->first();
        $tracking = ShipmentTracking::where('no_invoice', $shipments->no_invoice)->orderBy('id', 'DESC')->get();
       
        return view('admin.shipment.shipment-tracking', [
            'logistic' => $logistic, 
            'status' => $status, 
            'shipment' => $shipment, 
            'tracking' => $tracking
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_invoice' => 'required|numeric',
            'datetime' => 'required',
            'status' => 'required',
        ]);
        
        ShipmentTracking::create([
            'no_invoice' => $request->no_invoice,
            'datetime' => date('Y-m-d H:i:s'),
            'status' => $request->status,
            'description' => $request->description,
        ]);

        return redirect('/admin_tracking/'.$request->no_invoice)->with('status', 'Berhasil update No RESI.');
    }


}
