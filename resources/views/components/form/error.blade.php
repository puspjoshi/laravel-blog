@props(['name'])
@error($name)
<p class="text-xs text-red-500 mt-2">{{ $message }}</p>
@enderror