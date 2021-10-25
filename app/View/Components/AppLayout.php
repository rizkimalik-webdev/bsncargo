<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title= 'BSN Cargo';
    public $mail= 'sales@bsncargo.com';
    public $telp= '620123456';
    public $whatsapp= '123456';
    public $facebook= 'bsncargo';
    public $twitter= '@bsncargo';

    public function __construct()
    {
        $this->title = 'BSN CARGO';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
