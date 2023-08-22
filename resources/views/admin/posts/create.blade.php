<x-layout>
    <x-setting heading="Create new post">

        <form method="POST" action="/admin/posts" class="mt-10" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />


            <x-form.field>
                <x-form.label name="category" ></x-form.label>
                <select name="category_id">
                    @foreach(App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"> {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category_id"/>
            </x-form.field>
            <x-button>Create</x-button>
        </form>
    </x-setting>
</x-layout>