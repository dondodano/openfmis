<x-tailwind.button id="{{ $id }}" attr="data-dropdown-toggle=dropdownHover data-dropdown-trigger=hover">
    {{ $buttonText }}
    <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</x-tailwind.button>

<div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    {{ $slot }}
</div>
