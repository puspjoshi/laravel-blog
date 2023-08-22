@props(['name'])
<x-form.field>
    <label for="{{ $name }}" class="block mb-2 uppercase bold text-xs text-gray-700">{{ $name }}</label>
    <textarea name="{{ $name }}"  id="{{ $name }}" class="border border-gray-200 p-2 w-full rounded">{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{$name}}" />
</x-form.field>