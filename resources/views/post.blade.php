<x-layout :tittle="$tittle">

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3x1 tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            <div class="text-base tetx-gray-500">
                <a href="">{{ $post['author'] }}</a>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['isi'], 100) }}</p>
            <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3x1 tracking-tight font-bold text-gray-900">Artikel 2</h2>
        <div class="text-base tetx-gray-500">
            <a href="">Muhammad Adit</a>
        </div>
        <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut eaque expedita enim in
            magnam natus nam repellendus ab laboriosam amet omnis, corrupti consequatur repudiandae ullam consequuntur
            provident temporibus esse assumenda.</p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>

</x-layout>
