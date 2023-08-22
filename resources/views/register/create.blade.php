<x-layout>
    <section class="px-5 py-8">
        <main class="max-w-lg mx-auto mt-10 ">
            <x-panel>
             <h1 class="text-xl font-bold text-center">Create an account ! </h1>
             <form method="POST" action="/register" class="mt-10">
                @csrf
                 <x-form.input name="name" />

                 <x-form.input name="username" />

                 <x-form.input name="email" />


                 <x-form.input name="password" type="password" />

                <x-button>Register</x-button>

             </form>
            </x-panel>
        </main>

    </section>
</x-layout>
