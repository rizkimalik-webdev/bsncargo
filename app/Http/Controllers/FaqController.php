<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $syarat = Faq::where('type', 'syarat_ketentuan')->get();
        $bisnis = Faq::where('type', 'bisnis_jasa')->get();
        
        return view('faq', compact('syarat', 'bisnis'));
    }
    
}
