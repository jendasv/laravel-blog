{{-- resources/views/components/forms/form-layout.blade.php --}}
@props([
    'title',
    'action',
    'method' => 'POST',
    'singleButton' => false,
    'submitLabel' => 'Submit',
    'displayErrors' => true,
    'classes' => null,
])

<div class="{{$classes ?? 'max-w-2xl mx-auto bg-white shadow rounded-2xl p-8'}}">
    @if($title)
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">{{$title}}</h2>
    @endif
    {{--    <form method="{{ $method ?? 'POST' }}" action="{{ $action }}">--}}
    <form method="POST" action="{{ $action }}">
        @csrf
        @if(($method ?? 'POST') !== 'POST')
            @method($method)
        @endif
        {{ $slot }}

        {{-- Chybová hláška --}}
        @if($displayErrors && session('error'))
            <p class="text-red-500 text-center text-sm">{{ session('error') }}</p>
        @endif
        @if($singleButton)
            <x-forms.singleSubmit
                :label="$submitLabel ?? 'Submit'"
            />
        @else
            <x-forms.buttons
                :label="$submitLabel ?? 'Submit'"
            />
        @endif
    </form>
</div>

