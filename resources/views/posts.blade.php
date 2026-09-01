<x-layout :tittle="$tittle">


    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $posts['tittle'] }}</h2>
        <div class="text-base tetx-gray-500">
            <a href="">{{ $posts['author_id'] }}</a>
        </div>
        <p class="my-4 font-light">{{ $posts['isi'] }}</p>
        <a href="/post" class="font-medium text-blue-500 hover:underline">&laquo; Back more</a>
    </article>

</x-layout>
