<div
    {{ $attributes->merge([
        'class' => 'bg-white rounded-md shadow-md p-4',
    ]) }}
>{{ $slot }}</div>
