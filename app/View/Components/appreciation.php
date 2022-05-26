<?php

namespace App\View\Components;

use Illuminate\View\Component;

class appreciation extends Component
{
    public $alpha="vvvv";
    public $idc;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idc)
    {
        $this->idc=$idc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.appreciation');
    }
}
