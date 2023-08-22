<x-layout>
    <section class="px-5 py-8">

        <main class="max-w-lg mx-auto mt-10 p-7">
            <x-panel>
                <h1 class="text-xl font-bold text-center">Login ! </h1>
                <form method="POST" action="/login" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username" />

                    <x-form.input name="password" type="password" autocomplete="new-password" />

                    <x-button>Login</x-button>

                </form>
            </x-panel>
        </main>


    </section>
</x-layout>
