@auth
    <x-panel class="bg-gray-100">
        <form method="post" action="/post/{{ $post->slug }}/comment">
            @csrf
            <div class="">
                <header class="flex">
                    <div class="text-center">
                        <img src="https://i.pravatar.cc/100" alt="avatar" width="40" height="40" class="rounded-xl"/>
                    </div>
                    <div class="text-center ml-5 text-xl">want to participate ?</div>

                </header>
                <div class="content mt-5">
                    <textarea class="w-full focus:outline-none focus:ring border border-gray-200" name="body" placeholder="Quick, things of something to say!" rows="5"></textarea>
                    @error('body')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <x-button>Post</x-button>

            </div>
        </form>
    </x-panel>
@else
    <div class="font-semibold">
        <p><a href="/register" class="hover:underline">Register </a> or <a href="/login" class="hover:underline">Log in</a> to leave a comment.</p>
    </div>
@endauth