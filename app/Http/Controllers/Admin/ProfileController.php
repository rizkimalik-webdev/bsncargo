<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $company = Company::first();

        return view('admin.profile', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        // return $request;
        $request->validate([
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'company' => 'required',
            'telp' => 'required',
            'email' => 'required'
        ]);

        //? get data by ID
        $data = Company::findOrFail($company->id);

        if ($request->file('image') == "") {

            $data->update([
                'company' => $request->company,
                'detail' => $request->detail,
                'telp' => $request->telp,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'city' => $request->city,
                'address' => $request->address
            ]);
        } 
        else {
            //hapus old image
            File::delete('public/theme/images/' . $data->image);

            //upload new image
            $image = $request->file('image');
            $nama_image = $image->getClientOriginalName();
            // $nama_image = $image->hashName();
            
            //? folder file diupload
            $tujuan_upload = 'public/theme/images';
            $image->move($tujuan_upload, $nama_image);
            // $image->storeAs($tujuan_upload, $nama_image);


            $data->update([
                'company' => $request->company,
                'detail' => $request->detail,
                'telp' => $request->telp,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'city' => $request->city,
                'address' => $request->address
            ]);
        }

        if($data){
            //? redirect dengan pesan sukses
            return redirect()->back()->with('status','Data Berhasil Diupdate!');
            // return $data;
        }else{
            //! redirect dengan pesan error
            return redirect()->back()->with('status','Data Gagal Diupdate!');
        }
    }


}
