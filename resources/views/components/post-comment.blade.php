@props(['comment'])
<x-panel class="bg-gray-100">
<article class="flex space-x-10">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?u={{ $comment->author->id }}" alt="avatar" width="60" height="60" class="rounded-xl"/>
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->name }}</h3>
            <p class="text-xs">Posted on <time>{{ $comment->created_at->diffForHumans() }}</time> </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>

</article>
</x-panel>