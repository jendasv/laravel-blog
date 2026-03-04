@props([
    'label' => 'Checkbox text',
    'name' => 'checkbox_1'
])

<div class="mb-4 flex items-center">
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="mr-2">
    <label for="{{ $name }}" class="text-gray-700 text-xs">{{ $label }}</label>
</div>
