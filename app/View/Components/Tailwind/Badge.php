<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{

public $class = [
        'blue' => ['bg-blue-100', 'text-blue-800','rounded', 'dark:bg-blue-900', 'dark:text-blue-300' ],
        'gray' => ['bg-gray-100', 'text-gray-800','rounded', 'dark:bg-gray-700', 'dark:text-gray-300' ],
        'red' => ['bg-red-100', 'text-red-800','rounded', 'dark:bg-red-900', 'dark:text-red-300' ],
        'green' => ['bg-green-100', 'text-green-800','rounded', 'dark:bg-green-900', 'dark:text-green-300' ],
        'yellow' => ['bg-yellow-100', 'text-yellow-800','rounded', 'dark:bg-yellow-900', 'dark:text-yellow-300' ],
        'indigo' => ['bg-indigo-100', 'text-indigo-800','rounded', 'dark:bg-indigo-900', 'dark:text-indigo-300' ],
        'purple' => ['bg-purple-100', 'text-purple-800','rounded', 'dark:bg-purple-900', 'dark:text-purple-300' ],
        'pink' => ['bg-pink-100', 'text-pink-800','rounded', 'dark:bg-pink-900', 'dark:text-pink-300' ],
    ];

    public $badge;


    public $size;

    public function __construct( $badge = 'blue', $size = 'text-xs')
    {
        $this->badge = $badge;
        $this->class[$badge] ?? $this->class['blue'];
        $this->size = $size;
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.badge');
    }
}
