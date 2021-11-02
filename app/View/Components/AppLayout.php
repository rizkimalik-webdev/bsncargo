<?php

namespace App\View\Components;

use App\Models\Company;
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

        return view('layouts.app', [
            'company' => $company, 
            'services' => $services
        ]);
    }
}
