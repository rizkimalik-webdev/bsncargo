<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    public $title;
    public $style = null;
    public $script = null;

    public function __construct($title = null)
    {
        $this->title = $title ?? "BSN Cargo & Logistics";
    }

    public function render()
    {
        return view('layouts.admin');
    }
}
