@props(['name'])
<label class="inline-flex items-center cursor-pointer">
    <input type="checkbox" name="published_at"  class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" checked="">
    <span class="ml-2">{{ $name }}</span>
</label>
