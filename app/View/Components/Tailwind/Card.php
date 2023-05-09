<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    public function __construct()
    {

    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.card');
    }
}
