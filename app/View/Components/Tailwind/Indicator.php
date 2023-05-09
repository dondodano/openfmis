<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Indicator extends Component
{
    public $colors = [
        'light' => ['bg-gray-200'],
        'dark' => ['bg-gray-900', 'dark:bg-gray-700' ],
        'blue' => ['bg-blue-600'],
        'green' => ['bg-green-500'],
        'red' => ['bg-red-500'],
        'yellow' => ['bg-yellow-300'],
        'purple' => ['bg-purple-500'],
        'indigo' => ['bg-indigo-500'],
        'teal' => ['bg-teal-500'],
    ];

    public $color;
    public $withText;

    public function __construct($color = 'light', $withText = false)
    {
        $this->color = $color;
        $this->withText = $withText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tailwind.indicator');
    }
}
