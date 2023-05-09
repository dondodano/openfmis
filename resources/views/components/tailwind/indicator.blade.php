@if(toBoolean($withText) == true)
    <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white">
@endif

<span class="flex w-3 h-3  rounded-full {{ implode(' ', $colors[$color]) }} {{ toBoolean($withText) == true ? 'mr-1.5 flex-shrink-0' : '' }}"></span>

@if(toBoolean($withText) == true)
        {{ $slot }}
    </span>
@endif
