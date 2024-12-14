@props(['active' => false])
@guest
    <a {{ $attributes }}
        class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300  ' }} 
rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
@endguest
@auth
    <a {{ $attributes }}
        class="{{ $active ? 'bg-white text-black' : 'text-gray-300  ' }} 
rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
@endauth
