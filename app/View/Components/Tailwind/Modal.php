<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title==null ? 'Modal Title' : $title;
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.modal');
    }
}
