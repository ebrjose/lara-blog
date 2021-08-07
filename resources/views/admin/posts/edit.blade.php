<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">

        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />

            <div class="flex mt-6">
                <div class="flext-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6 object-contain" width="70" />
            </div>

            <x-form.textarea name="description" rows="4">{{ old('description', $post->description) }}</x-form.textarea>
            <x-form.textarea name="body" rows="10">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.select
                name="category_id"
                label="Category"
                :options="$categories"
                optValue="id"
                optText="name"
                :value="old('category_id', $post->category_id)"
            />

            <x-form.button>Publish</x-form.button>

        </form>
    </x-setting>
</x-layout>
