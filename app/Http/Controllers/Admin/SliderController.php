<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::get();

        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.slider-create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);

        //? nama data file
        $image = $request->file('image');
        $nama_image = $image->hashName();
        // $nama_image = time() . "_" . $image->getClientOriginalName();

        //? folder file diupload
        $tujuan_upload = 'theme/images/slider';
        $image->move($tujuan_upload, $nama_image);

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $nama_image,
        ]);

        return redirect('/admin_slider')->with('status', 'Berhasil tambah Data.');
    }

    public function edit(Slider $sliders)
    {
        return view('admin.slider.slider-edit', compact('sliders'));
    }

    public function update(Request $request, Slider $sliders)
    {
        $request->validate([
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $slider = Slider::findOrFail($sliders->id);

        if ($request->file('image') == "") {

            $slider->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
        } 
        else {
            //hapus old image
            File::delete('theme/images/slider/' . $slider->image);

            //upload new image
            $image = $request->file('image');
            $nama_image = $image->hashName();
            // $nama_image = time() . "_" . $image->getClientOriginalName();
            
            //? folder file diupload
            $tujuan_upload = 'theme/images/slider';
            $image->move($tujuan_upload, $nama_image);
            // $image->storeAs($tujuan_upload, $nama_image);


            $slider->update([
                'image' => $nama_image,
                'title' => $request->title,
                'description' => $request->description
            ]);
        }

        // $product->update($request->all());
        if($slider){
            //? redirect dengan pesan sukses
            return redirect('/admin_slider')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/admin_slider')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy(Slider $sliders)
    {
        // hapus file
        $slider = Slider::where('id', $sliders->id)->first();
        File::delete('theme/images/slider/' . $slider->image);

        // hapus data
        Slider::where('id', $slider->id)->delete();

        return redirect()->back();
    }
}
