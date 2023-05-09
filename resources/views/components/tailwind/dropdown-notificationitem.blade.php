<a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
    <div class="flex-shrink-0">
        <x-tailwind.avatar isImage="{{ $isAvatarImage }}">
            @if(toBoolean($isAvatarImage) == false)
                {{ $avatarInitial }}
            @else
                {{ $avatarImageSource }}
            @endif
        </x-tailwind.avatar>
    </div>
    <div class="w-full pl-3">
        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">{{ $slot }}</div>
        <div class="text-xs text-blue-600 dark:text-blue-500">{{ elapse($date) }}</div>
    </div>
</a>
