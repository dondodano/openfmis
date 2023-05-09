<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadcrumbItem extends Component
{
    public $slug;
    public $iscurrent;

    public function __construct($slug = null, $iscurrent = false)
    {
        $this->slug = $slug;
        $this->iscurrent = $iscurrent;
    }

    public function render(): View|Closure|string
    {
        return view('components.tailwind.breadcrumb-item');
    }
}
