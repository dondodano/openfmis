<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownItem extends Component
{
    public $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    public function render(): View|Closure|string
    {
        return view('components.tailwind.dropdown-item');
    }
}
