@props([
    'name',
    'label' => $name,
    'options',
    'value' => 'id',
    'text' => 'name',
    'required' => false
])

<x-form.field>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <select
        class="border border-gray-400 p-2 w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
    >

        <option value="">Select...</option>

        @foreach ($options as $option )
            <option
                value="{{ $option->$value }}"
                {{ old($name) == $option->$value ? 'selected' : '' }}
            >
                {{ ucwords($option->$text) }}
            </option>
        @endforeach

    </select>

    <x-form.error name="{{ $name }}" />

</x-form.field>
