<?php

namespace App\Http\Controllers;

use App\Models\Uploads;
use Illuminate\Http\Request;
// use File;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $files = Uploads::get();
        return view('upload', compact('files'));
    }
    

    public function store(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();

        // echo 'File Name: '.$file->getClientOriginalName();
		// echo 'File Extension: '.$file->getClientOriginalExtension();
		// echo 'File Real Path: '.$file->getRealPath();
		// echo 'File Size: '.$file->getSize();
		// echo 'File Mime Type: '.$file->getMimeType();
 
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';
		$file->move($tujuan_upload,$nama_file);
 
		Uploads::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}

    public function edit(Uploads $uploads)
    {
        return view('upload-edit',compact('uploads'));
    }

    public function destroy(Uploads $uploads){
		// hapus file
		$gambar = Uploads::where('id',$uploads->id)->first();
		File::delete('uploads/'.$gambar->file);
 
		// hapus data
		Uploads::where('id',$uploads->id)->delete();
 
		return redirect()->back();
	}
}
