<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Service::get();
        return view('admin.service.service-index', compact('services'));
    }


    public function create()
    {
        return view('admin.service.service-create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'service' => 'required',
            'description' => 'required',
        ]);

        //? nama data file
        $image = $request->file('image');
        // $nama_image = $image->hashName();
        $nama_image = time().'_'.$image->getClientOriginalName();

        //? folder file diupload
        $tujuan_upload = 'public/theme/images/services';
        $image->move($tujuan_upload, $nama_image);

        Service::create([
            'service' => $request->service,
            'description' => $request->description,
            'image' => $nama_image,
        ]);

        return redirect('/admin_service')->with('status', 'Berhasil tambah Data.');
    }


    public function edit(Service $services)
    {
        return view('admin.service.service-edit', compact('services'));
    }


    public function update(Request $request, Service $services)
    {
        $request->validate([
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'service' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $service = Service::findOrFail($services->id);

        if ($request->file('image') == "") {

            $service->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        } 
        else {
            //hapus old image
            File::delete('public/theme/images/services/' . $service->image);

            //upload new image
            $image = $request->file('image');
            $nama_image = time().'_'.$image->getClientOriginalName();
            // $nama_image = $image->hashName();
            
            //? folder file diupload
            $tujuan_upload = 'public/theme/images/services';
            $image->move($tujuan_upload, $nama_image);
            // $image->storeAs($tujuan_upload, $nama_image);


            $service->update([
                'image' => $nama_image,
                'title' => $request->title,
                'description' => $request->description
            ]);
        }

        if($service){
            //? redirect dengan pesan sukses
            return redirect('/admin_service')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/admin_service')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy(Service $services)
    {
        // hapus file
        $service = Service::where('id', $services->id)->first();
        File::delete('public/theme/images/services/' . $service->image);

        // hapus data
        Service::where('id', $service->id)->delete();

        return redirect()->back();
    }
}
