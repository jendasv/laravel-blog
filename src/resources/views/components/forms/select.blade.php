@props([
    'name',
    'label',
    'options' => [],
    'value' => null
])

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700 mb-2">
        {{ $label }}
    </label>

    <select name="{{ $name }}"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">

        @foreach($options as $key => $option)
            <option value="{{ $option }}"
                {{ old($name, $value) == $option ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach

    </select>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
