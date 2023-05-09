<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    public $colors = [
        'default' => ['text-white', 'bg-blue-700', 'hover:bg-blue-800' , 'focus:ring-4' , 'focus:ring-blue-300' , 'dark:bg-blue-600',  'dark:hover:bg-blue-700', 'focus:outline-none', 'dark:focus:ring-blue-800'],
        'dark' => ['text-white', 'bg-gray-800', 'hover:bg-gray-900', 'focus:outline-none', 'focus:ring-4', 'focus:ring-gray-300', 'dark:bg-gray-800', 'dark:hover:bg-gray-700', 'dark:focus:ring-gray-700', 'dark:border-gray-700'],
        'green' => ['focus:outline-none', 'text-white', 'bg-green-700', 'hover:bg-green-800', 'focus:ring-4', 'focus:ring-green-300', 'dark:bg-green-600', 'dark:hover:bg-green-700', 'dark:focus:ring-green-800'],
        'red' => ['focus:outline-none', 'text-white', 'bg-red-700', 'hover:bg-red-800', 'focus:ring-4', 'focus:ring-red-300', 'dark:bg-red-600', 'dark:hover:bg-red-700', 'dark:focus:ring-red-900'],
        'yellow' => ['focus:outline-none', 'text-white', 'bg-yellow-400', 'hover:bg-yellow-500', 'focus:ring-4', 'focus:ring-yellow-300', 'dark:focus:ring-yellow-900'],
        'purple' => ['focus:outline-none', 'text-white', 'bg-purple-700', 'hover:bg-purple-800', 'focus:ring-4', 'focus:ring-purple-300', 'dark:bg-purple-600', 'dark:hover:bg-purple-700', 'dark:focus:ring-purple-900'],

        'orange' => ['text-white', 'bg-[#FF9119]', 'hover:bg-[#FF9119]/80', 'focus:ring-4', 'focus:outline-none', 'focus:ring-[#FF9119]/50', 'dark:hover:bg-[#FF9119]/80', 'dark:focus:ring-[#FF9119]/40'],
        'paleyellow' => ['text-gray-900', 'bg-[#F7BE38]', 'hover:bg-[#F7BE38]/90', 'focus:ring-4', 'focus:outline-none', 'focus:ring-[#F7BE38]/50', 'dark:focus:ring-[#F7BE38]/50'],
        'alternative' => ['text-gray-900', 'bg-white', 'focus:outline-none', 'rounded-lg', 'border border-gray-200', 'hover:bg-gray-100', 'hover:text-blue-700', 'focus:z-10', 'focus:ring-4', 'focus:ring-gray-200', 'dark:focus:ring-gray-700', 'dark:bg-gray-800', 'dark:text-gray-400', 'dark:border-gray-600', 'dark:hover:text-white', 'dark:hover:bg-gray-700'],
        'light' => ['text-gray-900', 'bg-white', 'border', 'border-gray-300', 'focus:outline-none', 'hover:bg-gray-100', 'focus:ring-4', 'focus:ring-gray-200', 'dark:bg-gray-800', 'dark:text-white', 'dark:border-gray-600', 'dark:hover:bg-gray-700', 'dark:hover:border-gray-600', 'dark:focus:ring-gray-700'],
    ];

    public $sizes = [
        'xsmall' => ['px-3', 'py-2', 'text-xs', 'font-medium'],
        'small' => ['px-3', 'py-2', 'text-sm','font-medium'],
        'base' => ['px-5', 'py-2.5', 'text-sm', 'font-medium '],
        'large' => ['px-5', 'py-3', 'ext-base', 'font-medium'],
        'xlarge' => ['px-6', 'py-3.5', 'text-base', 'font-medium']
    ];


    public $borders = [
        'default' => ['text-blue-700', 'hover:text-white', 'border-blue-700', 'hover:bg-blue-800',  'focus:ring-blue-300', 'dark:border-blue-500', 'dark:text-blue-500', 'dark:hover:text-white', 'dark:hover:bg-blue-500', 'dark:focus:ring-blue-800', 'border', 'focus:ring-4', 'focus:outline-none'],
        'dark' => ['text-gray-900', 'hover:text-white','border-gray-800', 'hover:bg-gray-900', 'focus:ring-gray-300', 'dark:border-gray-600', 'dark:text-gray-400', 'dark:hover:text-white', 'dark:hover:bg-gray-600', 'dark:focus:ring-gray-800', 'border', 'focus:ring-4', 'focus:outline-none'],
        'green' => ['text-green-700', 'hover:text-white',  'border-green-700', 'hover:bg-green-800', 'focus:ring-green-300', 'dark:border-green-500', 'dark:text-green-500', 'dark:hover:text-white', 'dark:hover:bg-green-600', 'dark:focus:ring-green-800', 'border', 'focus:ring-4', 'focus:outline-none'],
        'red' => ['text-red-700', 'hover:text-white', 'border-red-700', 'hover:bg-red-800', 'focus:ring-red-300', 'dark:border-red-500', 'dark:text-red-500', 'dark:hover:text-white', 'dark:hover:bg-red-600', 'dark:focus:ring-red-900', 'border', 'focus:ring-4', 'focus:outline-none'],
        'yellow' => ['text-yellow-400', 'hover:text-white', 'border-yellow-400', 'hover:bg-yellow-500', 'focus:ring-yellow-300', 'dark:border-yellow-300', 'dark:text-yellow-300', 'dark:hover:text-white', 'dark:hover:bg-yellow-400', 'dark:focus:ring-yellow-900', 'border', 'focus:ring-4', 'focus:outline-none'],
        'purple' => ['text-purple-700', 'hover:text-white', 'border-purple-700', 'hover:bg-purple-800', 'focus:ring-purple-300', 'dark:border-purple-400', 'dark:text-purple-400', 'dark:hover:text-white', 'dark:hover:bg-purple-500', 'dark:focus:ring-purple-900', 'border', 'focus:ring-4', 'focus:outline-none'],
    ];

    public $id;
    public $type;
    public $color;
    public $pilled;
    public $withicon;
    public $size;
    public $bordered;

    public $attr;


    public function __construct($type='button', $color='default', $pilled = false, $withicon = true, $size = 'base', $bordered = false, $id = null, $attr = null)
    {
        $this->type = $type;
        $this->color = $color;
        $this->pilled = $pilled;
        $this->withicon = $withicon;
        $this->size = $size;
        $this->bordered = $bordered;
        $this->id = $id;
        $this->attr = $attr;
    }


    public function render(): View|Closure|string
    {
        return view('components.tailwind.button');
    }
}
