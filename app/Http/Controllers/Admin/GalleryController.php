<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Gallery::get();
        return view('admin.gallery.gallery-index', compact('galleries'));
    }


    public function create()
    {
        return view('admin.gallery.gallery-create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            // 'description' => 'required',
        ]);

        //? nama data file
        $image = $request->file('image');
        $nama_image = $image->hashName();
        // $nama_image = time().'_'.$image->getClientOriginalName();

        //? folder file diupload
        $tujuan_upload = 'public/theme/images/galleries';
        $image->move($tujuan_upload, $nama_image);

        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $nama_image,
        ]);

        return redirect('/admin_gallery')->with('status', 'Berhasil tambah Data.');
    }


    public function edit(Gallery $galleries)
    {
        return view('admin.gallery.gallery-edit', compact('galleries'));
    }


    public function update(Request $request, Gallery $galleries)
    {
        $request->validate([
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $gallery = Gallery::findOrFail($galleries->id);

        if ($request->file('image') == "") {
            $gallery->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        } 
        else {
            //hapus old image
            File::delete('public/theme/images/galleries/' . $gallery->image);

            //upload new image
            $image = $request->file('image');
            // $nama_image = time().'_'.$image->getClientOriginalName();
            $nama_image = $image->hashName();
            
            //? folder file diupload
            $tujuan_upload = 'public/theme/images/galleries';
            $image->move($tujuan_upload, $nama_image);
            // $image->storeAs($tujuan_upload, $nama_image);


            $gallery->update([
                'image' => $nama_image,
                'title' => $request->title,
                'description' => $request->description
            ]);
        }

        if($gallery){
            //? redirect dengan pesan sukses
            return redirect('/admin_gallery')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/admin_gallery')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy(Gallery $galleries)
    {
        // hapus file
        $gallery = Gallery::where('id', $galleries->id)->first();
        File::delete('public/theme/images/galleries/' . $gallery->image);

        // hapus data
        Gallery::where('id', $gallery->id)->delete();

        return redirect()->back();
    }
}
