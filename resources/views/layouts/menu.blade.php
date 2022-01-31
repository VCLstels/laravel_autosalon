<nav>
<ul class="block lg:flex">
    @foreach($menu as $men)
        @if (isset($inmenu[$men['title']]))
            <x-panels.header.menu.many_menu :menu="$men['title']">
                <x-panels.header.menu.in_menu :menu="$inmenu[$men['title']]"/>
            </x-panels.header.menu.many_menu>
        @else
            <x-panels.header.menu.one_menu :menu="$men" />
        @endif
    @endforeach
</ul>
</nav>
