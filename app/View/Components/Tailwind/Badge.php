<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{

public $colors = [
        'blue' => ['bg-blue-100', 'text-blue-800', 'dark:bg-blue-900', 'dark:text-blue-300' ],
        'gray' => ['bg-gray-100', 'text-gray-800', 'dark:bg-gray-700', 'dark:text-gray-300' ],
        'red' => ['bg-red-100', 'text-red-800', 'dark:bg-red-900', 'dark:text-red-300' ],
        'green' => ['bg-green-100', 'text-green-800', 'dark:bg-green-900', 'dark:text-green-300' ],
        'yellow' => ['bg-yellow-100', 'text-yellow-800', 'dark:bg-yellow-900', 'dark:text-yellow-300' ],
        'indigo' => ['bg-indigo-100', 'text-indigo-800', 'dark:bg-indigo-900', 'dark:text-indigo-300' ],
        'purple' => ['bg-purple-100', 'text-purple-800', 'dark:bg-purple-900', 'dark:text-purple-300' ],
        'pink' => ['bg-pink-100', 'text-pink-800', 'dark:bg-pink-900', 'dark:text-pink-300' ],
    ];

    public $color;
    public $size;
    public $round;
    public $icononly;


    /**
     * @Badge = Default, Large & Small, Pill, HasIcon
     */
    public function __construct( $color = 'blue', $size = 'text-xs', $round = false, $icononly = false)
    {
        $this->color = $color;
        $this->colors[$color] ?? $this->colors['blue'];
        $this->size = $size;
        $this->round = $round;
        $this->icononly = $icononly;

    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.badge');
    }
}
