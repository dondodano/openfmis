<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BadgeBordered extends Component
{

    public $class = [
        'blue' => ['bg-blue-100', 'text-blue-800', 'dark:bg-gray-700', 'dark:text-blue-400', 'border border-blue-400' ],
        'gray' => ['bg-gray-100', 'text-gray-800', 'dark:bg-gray-700', 'dark:text-gray-400', 'border border-gray-500' ],
        'red' => ['bg-red-100', 'text-red-800', 'dark:bg-gray-700', 'dark:text-red-400', 'border border-red-400' ],
        'green' => ['bg-green-100', 'text-green-800', 'dark:bg-gray-700', 'dark:text-green-400', 'border border-green-400' ],
        'yellow' => ['bg-yellow-100', 'text-yellow-800', 'dark:bg-gray-700', 'dark:text-yellow-300', 'border border-yellow-300' ],
        'indigo' => ['bg-indigo-100', 'text-indigo-800', 'dark:bg-gray-700', 'dark:text-indigo-400', 'border border-indigo-400' ],
        'purple' => ['bg-purple-100', 'text-purple-800', 'dark:bg-gray-700', 'dark:text-purple-400', 'border border-purple-400' ],
        'pink' => ['bg-pink-100', 'text-pink-800', 'dark:bg-gray-700', 'dark:text-pink-400', 'border border-pink-400' ],
    ];

    public $badge;
    public $size;
    public $round;
    public $hasicon;

    /**
     * @Badge = Bordered, Large & Small, Pill, HasIcon
     */
    public function __construct($badge = 'blue', $size = 'text-xs', $round = false, $hasicon = false)
    {
        $this->badge = $badge;
        $this->class[$badge] ?? $this->class['blue'];
        $this->size = $size;
        $this->round = $round;
        $this->hasicon = $hasicon;
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.badge-bordered');
    }
}
