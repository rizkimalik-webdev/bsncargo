<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Shipment;
use App\Models\Satuan;
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
        $shipments = Shipment::get();
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
            'no_invoice' => 'required',
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
            //? folder file diupload
            $tujuan_upload = 'theme/invoice';
            $file_invoice->move($tujuan_upload, $file_invoice_hash);
        } 
        $slug_product = Str::slug($request->product, '-');

        // 'shipper_name' => $request->shipper_name,
            // 'shipper_telp' => $request->shipper_telp,
            // 'shipper_city' => $request->shipper_city,
            // 'shipper_address' => $request->shipper_address,

            // 'receiver_name' => $request->receiver_name,
            // 'receiver_telp' => $request->receiver_telp,
            // 'receiver_city' => $request->receiver_city,
            // 'receiver_address' => $request->receiver_address,

        Shipment::create([
            'logistic_id' => (int)$request->logistic_id,
            'no_invoice' => $request->no_invoice,
            'datetime' => date('Y-m-d H:i:s'),
            'origin' => $request->shipper_city,
            'destination' => $request->receiver_city,
            'product' => $slug_product,
            'amount' => $request->amount,
            'unit' => $request->unit,
            'driver' => $request->driver,
            'no_truck' => $request->no_truck,
            'service' => $request->service,
            'service_type' => $request->service_type,
            'description' => $request->description,
            'file_invoice' => $file_invoice_hash,
        ]);

        return redirect('/shipment')->with('status', 'Berhasil tambah Data.');
    }


    public function edit(Shipment $shipment)
    {
        return view('admin.shipment.shipment-edit', compact('shipment'));
    }


    public function update(Request $request, Shipment $Shipments)
    {
        $request->validate([
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'Shipment' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $Shipment = Shipment::findOrFail($Shipments->id);

        if ($request->file('image') == "") {

            $Shipment->update([
                'Shipment' => $request->Shipment,
                'description' => $request->description
            ]);
        } 
        else {
            //hapus old image
            File::delete('theme/images/Shipment/' . $Shipment->image);

            //upload new image
            $image = $request->file('image');
            $nama_image = time().'_'.$image->getClientOriginalName();
            // $nama_image = $image->hashName();
            
            //? folder file diupload
            $tujuan_upload = 'theme/images/Shipment';
            $image->move($tujuan_upload, $nama_image);
            // $image->storeAs($tujuan_upload, $nama_image);


            $Shipment->update([
                'image' => $nama_image,
                'Shipment' => $request->Shipment,
                'description' => $request->description
            ]);
        }

        if($Shipment){
            //? redirect dengan pesan sukses
            return redirect('/Shipment')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/Shipment')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy(Shipment $Shipments)
    {
        // hapus file
        $Shipment = Shipment::where('id', $Shipments->id)->first();
        File::delete('theme/images/Shipment/' . $Shipment->image);

        // hapus data
        Shipment::where('id', $Shipment->id)->delete();

        return redirect()->back();
    }
}
