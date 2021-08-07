@props([
    'name',
    'label' => $name,
])

<x-form.field>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <textarea
        class="border border-gray-200 p-2 w-full rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes }}
    >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
