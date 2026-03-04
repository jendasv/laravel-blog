@php
    $types = [
        'success' => 'bg-green-200 text-green-800 border-green-200',
        'error'   => 'bg-red-200 text-red-800 border-red-200',
        'warning' => 'bg-yellow-200 text-yellow-800 border-yellow-200',
        'info'    => 'bg-blue-200 text-blue-800 border-blue-200',
    ];
@endphp

<div class="space-y-4 mb-6">

    {{-- Flash messages --}}
    @foreach($types as $type => $classes)
        @if(session($type))
            <div class="border px-4 py-3 rounded-2xl {{ $classes }}">
                {{ session($type) }}
            </div>
        @endif
    @endforeach

    {{-- Validation errors --}}
    @if ($errors->any())
        <div class="border bg-red-200 text-red-800 border-red-400 px-4 py-3 rounded-lg">
            <ul class="list-disc pl-5 space-y-1 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
