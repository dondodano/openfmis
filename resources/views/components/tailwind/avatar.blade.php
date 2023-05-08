@if($isImage == true)
    <img class="w-10 h-10 rounded-full" src="{{ $slot }}" alt="Avatar">
@else
    <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
        <span class="font-medium text-gray-600 dark:text-gray-300">{{ $slot }}</span>
    </div>
@endif
