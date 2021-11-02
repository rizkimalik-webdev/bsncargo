<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use App\Models\Slider;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::get();
        $services = Service::get();
        $clients = Client::get();

        return view('home', [
            'sliders' => $sliders, 
            'services' => $services, 
            'clients' => $clients
        ]);
    }
    
}
