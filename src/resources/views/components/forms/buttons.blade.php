@props([
    'back-route' => route('admin.dashboard'),
    'textBack' => 'Back',
    'submitText' => 'Save changes'
])

<div class="pt-4 flex justify-between">
    <a href="{{ route('admin.users.index') }}"
       class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
        {{$textBack}}
    </a>

    <button type="submit"
            class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-700 transition">
        {{$submitText}}
    </button>
</div>
