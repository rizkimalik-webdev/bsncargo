<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Company;
use Illuminate\Http\Request;


class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $about = About::first();
        $company = Company::first();


        return view('admin.about', ['company' => $company, 'about' => $about]);
    }

    public function update(Request $request, About $about)
    {
        // return $request;
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        //? get data by ID
        $data = About::findOrFail($about->company_id);

        $data->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        

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
