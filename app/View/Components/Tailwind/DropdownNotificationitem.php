<?php

namespace App\View\Components\Tailwind;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownNotificationitem extends Component
{
    public $date;
    public $isAvatarImage;
    public $avatarImageSource;
    public $avatarInitial;


    public function __construct( $date = null, $isAvatarImage = false, $avatarInitial = null, $avatarImageSource = null)
    {
        $this->date = $date==null ? now() : $date;

        $this->isAvatarImage = $isAvatarImage;
        $this->avatarInitial = $avatarInitial;
        $this->avatarImageSource = $avatarImageSource;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tailwind.dropdown-notificationitem');
    }
}
