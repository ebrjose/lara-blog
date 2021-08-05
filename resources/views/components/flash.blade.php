@if (session()->has('success'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed bg-blue-500 text-white py-3 px-7 rounded-xl bottom-8 right-6 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
