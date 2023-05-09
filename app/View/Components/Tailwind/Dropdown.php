<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public $buttonText;
    public $id;

    public function __construct($buttonText = 'Dropdown', $id ='dropdownId')
    {
        $this->buttonText = $buttonText;
        $this->id = $id;
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.dropdown');
    }
}
