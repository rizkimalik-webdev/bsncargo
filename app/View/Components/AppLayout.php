<?php

namespace App\View\Components;

use App\Models\Company;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title= 'BSN Cargo';

    public function __construct()
    {
        $this->title = 'BSN CARGO';
    }

    public function render()
    {
        $company = Company::first();
        $services = Service::select('service')->get();
        $gallery = Gallery::orderBy('id', 'desc')->take(2)->get();


        return view('layouts.app', [
            'company' => $company, 
            'services' => $services,
            'gallery' => $gallery,
        ]);
    }
}
