<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Company;
use App\Models\Partner;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $company = Company::first();
        $about = About::first();
        $partners = Partner::get();

        return view('about', ['company' => $company, 'about' => $about, 'partners' => $partners]);
    }
}
