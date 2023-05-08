<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Avatar extends Component
{
    public $isImage;

    public function __construct($isImage = false)
    {
        $this->isImage = $isImage;
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.avatar');
    }
}
