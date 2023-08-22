<x-layout>
    <x-setting :heading="'Edit post '.$post->title">

        <form method="POST" action="/admin/posts/{{ $post->id }}" class="mt-10" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="old('title',$post->title)"/>
            <x-form.input name="slug" :value="old('slug',$post->slug )"/>
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>
                </div>
                <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl ml-6" width="100">
            </div>
            <x-form.textarea name="excerpt">{{ old('excerpt',$post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body" >{{ old('body', $post->body) }}</x-form.textarea>


            <x-form.field>
                <x-form.label name="category" ></x-form.label>
                <select name="category_id">
                    @foreach(App\Models\Category::all() as $category)
                        <option
                                value="{{ $category->id }}"
                                {{ old('category', $post->category_id) == $category->id ? 'selected': '' }}
                        >
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="category_id"/>
            </x-form.field>
            <x-button>Update</x-button>
        </form>
    </x-setting>
</x-layout>