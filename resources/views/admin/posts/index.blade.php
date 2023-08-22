<x-layout>
    <x-setting heading="Manage Posts">
        <!-- ====== Table Section Start -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead
                                    class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                            <tr>

                                <th scope="col" class="px-6 py-4">Title</th>
                                <th scope="col" class="px-6 py-4">Date</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                                <th scope="col" class="px-6 py-4"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">

                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="/posts/{{ $post->slug }}">
                                            {{ $post->title }}
                                        </a>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $post->created_at->diffForHumans() }}</td>
                                    <td class="whitespace-nowrap px-6 py-4"><a href="/admin/posts/{{ $post->id }}/edit">Edit</a></td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <form method="POST" action="/admin/posts/{{ $post->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-xs text-gray-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Table Section End -->
    </x-setting>
</x-layout>