@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'bg-sky-950 border-black border-b-4 border-r-2 text-white' : 'space-x-4 duration-500 text-gray-900 hover:text-gray-200 border-collapse hover:bg-sky-950 hover:border-black border-transparent border-b-4 border-r-2' }} rounded-md  px-3 py-2 text-sm font-medium "
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
