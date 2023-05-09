<span class="{{ implode(' ', $colors[$color])}}  {{ $size }} mr-2 {{ $round == true ? 'rounded-full' : 'rounded' }} {{ $icononly == true ? 'inline-flex items-center font-semibold p-1.5' : 'font-medium px-2.5 py-0.5' }}">
    {{ $slot }}
</span>
