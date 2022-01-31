@props(['menu'])
<ul class="dropdown-navigation-submenu absolute hidden group-hover:block bg-white shadow-lg">
    @foreach($menu as $men)
        <li><a class="block py-2 px-4 text-black hover:text-orange hover:bg-gray-100" href="{{ $men['path'] }}">{{ $men['title'] }}</a></li>
    @endforeach
</ul>
