<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    public $title= 'BSN Cargo';
    public $style = null;
    public $script = null;

    public function __construct()
    {
        // $this->title = 'BSN CARGO';
    }

    public function render()
    {
        return view('layouts.admin');
    }
}
