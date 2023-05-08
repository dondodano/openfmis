<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    protected $arrayTypes = [
        'info', 'danger', 'success', 'warning', 'default'
    ];

    protected $alertTypes = [
        'info' => ['fg' => 'text-blue-800', 'bg' => 'bg-blue-50', 'dark' => 'text-blue-400'],
        'danger' => ['fg' => 'text-red-800', 'bg' => 'bg-red-50', 'dark' => 'text-red-400'],
        'success' => ['fg' => 'text-green-800', 'bg' => 'bg-green-50', 'dark' => 'text-green-400'],
        'warning' => ['fg' => 'text-yellow-800', 'bg' => 'bg-yellow-50', 'dark' => 'text-yellow-300'],
        'default' => ['fg' => 'text-gray-800', 'bg' => 'bg-gray-50', 'dark' => 'text-gray-400']
    ];

    public $textColor;
    public $backColor;
    public $darkColor;

    public $title;
    public $withList;

    public function __construct($title = '', $type = 'default', $withList = false)
    {
        $this->title = $title;
        $this->withList = $withList;

        $this->textColor = $this->alertTypes[$type]['fg'];
        $this->backColor = $this->alertTypes[$type]['bg'];
        $this->darkColor = $this->alertTypes[$type]['dark'];
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.alert');
    }
}
