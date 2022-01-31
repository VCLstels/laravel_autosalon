@foreach($leftMenu as $menu)
    <li><a class="@if(url()->current() == route($menu['path'])) text-orange cursor-default @else text-gray-600 hover:text-orange @endif" href="{{ route($menu['path']) }}"> {{ $menu['title'] }}</a></li>
@endforeach

