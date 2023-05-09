<button type="{{ $type }}" class="{{ $pilled == true ? 'rounded-full' : 'rounded-lg' }} {{ implode(' ', $sizes[$size]) }} {{ $withicon == true ? 'text-center inline-flex items-center' : '' }}  mr-2 mb-2 {{ $bordered==true ? implode(' ',$borders[$color]) : implode(' ',$colors[$color]) }}">
    {{ $slot }}
</button>
