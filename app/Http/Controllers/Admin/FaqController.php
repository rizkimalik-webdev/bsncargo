<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;


class FaqController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_syarat()
    {
        $faqs = Faq::where('type', 'syarat_ketentuan')->get();

        return view('admin.faq.syarat-index', compact('faqs'));
    }

    public function create_syarat()
    {
        return view('admin.faq.syarat-create');
    }

    public function store_syarat(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        Faq::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => 'syarat_ketentuan',
        ]);

        return redirect('/admin_faq/syarat')->with('status', 'Berhasil tambah Data.');
    }

    public function edit_syarat(Faq $faqs)
    {
        return view('admin.faq.syarat-edit', compact('faqs'));
    }

    public function update_syarat(Request $request, Faq $faqs)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $faq = Faq::findOrFail($faqs->id);

        $faq->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        if($faq){
            //? redirect dengan pesan sukses
            return redirect('/admin_faq/syarat')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/admin_faq/syarat')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy_syarat(Faq $faqs)
    {
        Faq::where('id', $faqs->id)->delete();

        return redirect()->back();
    }






    //? faq bisnis controller
    public function index_bisnis()
    {
        $faqs = Faq::where('type', 'bisnis_jasa')->get();

        return view('admin.faq.bisnis-index', compact('faqs'));
    }

    public function create_bisnis()
    {
        return view('admin.faq.bisnis-create');
    }

    public function store_bisnis(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        Faq::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => 'bisnis_jasa',
        ]);

        return redirect('/admin_faq/bisnis')->with('status', 'Berhasil tambah Data.');
    }

    public function edit_bisnis(Faq $faqs)
    {
        return view('admin.faq.bisnis-edit', compact('faqs'));
    }

    public function update_bisnis(Request $request, Faq $faqs)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $faq = Faq::findOrFail($faqs->id);

        $faq->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        if($faq){
            //? redirect dengan pesan sukses
            return redirect('/admin_faq/bisnis')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/admin_faq/bisnis')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy_bisnis(Faq $faqs)
    {
        Faq::where('id', $faqs->id)->delete();

        return redirect()->back();
    }

}
