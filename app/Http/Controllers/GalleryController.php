<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        $gallerySliders = Gallery::orderBy('id', 'desc')->take(10)->get();

        return view('gallery', ['galleries' => $galleries, 'gallerySliders' => $gallerySliders]);
    }
    
}
