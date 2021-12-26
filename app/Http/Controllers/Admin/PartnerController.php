<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PartnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $partners = Partner::get();
        return view('admin.partner.partner-index', compact('partners'));
    }


    public function create()
    {
        return view('admin.partner.partner-create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'partner' => 'required',
            'description' => 'required',
        ]);

        //? nama data file
        $image = $request->file('image');
        $nama_image = time().'_'.$image->getClientOriginalName();
        // $nama_image = $image->hashName();

        //? folder file diupload
        $tujuan_upload = 'theme/images/partner';
        $image->move(public_path($tujuan_upload), $nama_image);

        Partner::create([
            'partner' => $request->partner,
            'description' => $request->description,
            'image' => $nama_image,
        ]);

        return redirect('/admin_partner')->with('status', 'Berhasil tambah Data.');
    }


    public function edit(Partner $partners)
    {
        return view('admin.partner.partner-edit', compact('partners'));
    }


    public function update(Request $request, Partner $partners)
    {
        $request->validate([
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'partner' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $partner = Partner::findOrFail($partners->id);

        if ($request->file('image') == "") {

            $partner->update([
                'partner' => $request->partner,
                'description' => $request->description
            ]);
        } 
        else {
            //hapus old image
            File::delete(public_path('theme/images/partner/' . $partner->image));

            //upload new image
            $image = $request->file('image');
            $nama_image = time().'_'.$image->getClientOriginalName();
            // $nama_image = $image->hashName();
            
            //? folder file diupload
            $tujuan_upload = 'theme/images/partner';
            $image->move(public_path($tujuan_upload), $nama_image);
            // $image->storeAs($tujuan_upload, $nama_image);


            $partner->update([
                'image' => $nama_image,
                'partner' => $request->partner,
                'description' => $request->description
            ]);
        }

        if($partner){
            //? redirect dengan pesan sukses
            return redirect('/admin_partner')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/admin_partner')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy(Partner $partners)
    {
        // hapus file
        $partner = Partner::where('id', $partners->id)->first();
        File::delete(public_path('theme/images/partner/' . $partner->image));

        // hapus data
        Partner::where('id', $partner->id)->delete();

        return redirect()->back();
    }
}
