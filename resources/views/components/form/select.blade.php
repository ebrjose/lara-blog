@props([
    'name',
    'label' => $name,
    'options',
    'optValue' => 'id',
    'optText' => 'name',
    'value'
])

<x-form.field>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />

    <select
        class="border border-gray-200 p-2 w-full rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes }}
    >

        <option value="">Select...</option>

        @foreach ($options as $option )
            <option
                value="{{ $option->$optValue }}"
                {{ old($name, $value) == $option->$optValue ? 'selected' : '' }}
            >
                {{ ucwords($option->$optText) }}
            </option>
        @endforeach

    </select>

    <x-form.error name="{{ $name }}" />

</x-form.field>
