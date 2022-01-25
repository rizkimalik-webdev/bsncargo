<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use App\Models\Receiver;
use App\Models\Shipment;
use App\Models\Satuan;
use App\Models\ShipmentTracking;
use App\Models\Shipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ShipmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $shipments = Shipment::orderBy('id', 'DESC')->get();
        foreach ($shipments as $shipment) {
            $tracking = ShipmentTracking::where('no_invoice',$shipment->no_invoice)->select('status')->orderBy('id', 'DESC')->first();
            $shipment->status = $tracking->status;
        }
        return view('admin.shipment.shipment-index', compact('shipments'));
    }

    public function create()
    {
        $logistic = Company::first();
        $satuan = Satuan::get();
        
        return view('admin.shipment.shipment-create', ['logistic' => $logistic, 'satuan' => $satuan]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'file_invoice' => 'file|mimes:jpeg,png,jpg,doc,docx,pdf|max:2048',
            'no_invoice' => 'required|numeric|min:6',
            'logistic_id' => 'required',
            'datetime' => 'required',
            'shipper_name' => 'required',
            'shipper_city' => 'required',
            'receiver_name' => 'required',
            'receiver_city' => 'required',
            'service' => 'required',
            'service_type' => 'required',
        ]);

        //? nama data file
        $file_invoice = $request->file('file_invoice');
        $file_invoice_hash = "";
        if ($file_invoice != "") {
            $file_invoice_hash = $file_invoice->hashName();
            // $file_invoice = time().'_'.$image->getClientOriginalName();
            $tujuan_upload = 'theme/invoice'; //? folder file diupload
            $file_invoice->move(public_path($tujuan_upload), $file_invoice_hash);
        } 

        $product_slug = "";
        if ($request->product){
            $product_slug = Str::slug($request->product, '-');

            Product::create([
                'product_slug' => $product_slug,
                'product_name' => $request->product,
            ]);
        }
        
        $shipper_id = "";
        if ($request->shipper_id) {
            $shipper_id = $request->shipper_id;
        }
        else {
            $shipper = Shipper::create([
                'shipper_name' => $request->shipper_name,
                'shipper_telp' => $request->shipper_telp,
                'shipper_city' => $request->shipper_city,
                'shipper_address' => $request->shipper_address,
            ]);
            $shipper_id = $shipper->id;
        }
        
        $receiver_id = "";
        if ($request->receiver_id) {
            $receiver_id = $request->receiver_id;
        }
        else {
            $receiver = Receiver::create([
                'receiver_name' => $request->receiver_name,
                'receiver_telp' => $request->receiver_telp,
                'receiver_city' => $request->receiver_city,
                'receiver_address' => $request->receiver_address
            ]);
            $receiver_id = $receiver->id;
        }

        //? tracking pick-up
        ShipmentTracking::create([
            'no_invoice' => $request->no_invoice,
            'datetime' => $request->datetime,
            'status' => 'PICK-UP',
            'description' => $request->description,
        ]);
        
        //? shipment
        Shipment::create([
            'logistic_id' => (int)$request->logistic_id,
            'no_invoice' => $request->no_invoice,
            'datetime' => $request->datetime,
            'origin' => $request->shipper_city,
            'destination' => $request->receiver_city,
            'product' => $product_slug,
            'shipper_id' => $shipper_id,
            'receiver_id' => $receiver_id,
            'amount' => $request->amount,
            'unit' => $request->unit,
            'driver' => $request->driver,
            'no_truck' => $request->no_truck,
            'service' => $request->service,
            'service_type' => $request->service_type,
            'description' => $request->description,
            'file_invoice' => $file_invoice_hash,
        ]);

        return redirect('/admin_shipment')->with('status', 'Berhasil tambah Data.');
    }


    public function show(Shipment $shipments)
    {
        $tracking = ShipmentTracking::where('no_invoice',$shipments->no_invoice)->orderBy('id', 'DESC')->first();
        $logistic = Company::where('id',$shipments->logistic_id)->first();
        $shipper = Shipper::where('id',$shipments->shipper_id)->first();
        $receiver = Receiver::where('id',$shipments->receiver_id)->first();

        return view('admin.shipment.shipment-show', [
            'shipment' => $shipments, 
            'tracking' => $tracking,
            'logistic' => $logistic,
            'shipper' => $shipper,
            'receiver' => $receiver,
        ]);
    }

    public function destroy(Shipment $shipments)
    {
        $shipment = Shipment::where('no_invoice', $shipments->no_invoice)->first();
        $tracking = ShipmentTracking::where('no_invoice', $shipments->no_invoice)->get();

        // hapus file
        if ($shipment->file_invoice) {
            File::delete(public_path('theme/invoice/' . $shipment->file_invoice));
        }

        // hapus data
        Shipment::where('id', $shipment->id)->delete();
        foreach ($tracking as $track) {
            ShipmentTracking::where('no_invoice', $track->no_invoice)->delete();
        }

        return redirect()->back(); 
    }
}
