@props([
    'name',
    'type' => 'text',
    'label' => $name,
])

<x-form.field>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <input
        class="border border-gray-200 p-2 w-full rounded"
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes(['value' => old($name) ]) }}
    />

    <x-form.error name="{{ $name }}" />

</x-form.field>
