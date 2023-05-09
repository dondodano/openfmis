<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{

    public $list;

    public function __construct($list = [])
    {
        $this->list = $list;
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.breadcrumb');
    }
}
