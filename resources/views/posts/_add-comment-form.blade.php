@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?img={{ auth()->user()->id }}" width="60" height="60" class="rounded-full">
                <h2 class="ml-3">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea
                    name="body"
                    class="w-full text-sm"
                    rows="6"
                    placeholder="Quick, thing of something to say!" required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6" >
                <x-submit-button> Post </x-submit-button>
            </div>
        </form>
    </x-panel>

@else
    <x-panel>
        <h2 class=" font-bold"><a href="/login" class="text-blue-500"> Log In</a> to leave a comment!</h2>
    </x-panel>
@endauth
