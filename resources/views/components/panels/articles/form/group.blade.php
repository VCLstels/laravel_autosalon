@props(['error', 'name'])
<label {{ $attributes->merge(['for'=>"", 'class'=> $attributes->prepends("text-gray-700")]) }}>{{ $name }}</label>
{{ $slot }}
@if(!empty($error))
    <span class="text-xs italic text-red-600">{{ $error }}</span>
@endif
