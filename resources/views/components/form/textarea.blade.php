@props([
    'name',
    'rows' => 3,
    'label' => $name,
    'required' => false
])

<x-form.field>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <textarea
        class="border border-gray-400 p-2 w-full"
        name="{{ $name }}" id="{{ $name }}"
        rows="{{ $rows }}"
        {{ $required ? 'required' : '' }}
    >{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
