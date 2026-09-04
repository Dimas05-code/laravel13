{{-- Memanggil komponen x-layout sebagai kerangka utama web --}}
<x-layout :tittle="$tittle">

    {{-- PERHATIAN: Di halaman ini TIDAK ADA @foreach karena kita hanya menerima 
         dan menampilkan SATU data artikel secara utuh. --}}
    <article class="py-8 max-w-screen-md border-b border-gray-300">

        {{-- JUDUL ARTIKEL: 
             Dicetak dengan huruf besar menggunakan class teks dari Tailwind (text-3xl font-bold) --}}
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['tittle'] }}</h2>

        {{-- NAMA PENULIS: 
             Menampilkan pembuat artikel ini. Jika diklik, pengunjung akan diarahkan 
             ke halaman profil penulis yang berisi seluruh daftar artikel milik orang tersebut. --}}
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a>
        </div>

        {{-- ISI ARTIKEL FULL: 
             Menampilkan seluruh isi cerita tanpa menggunakan pemotong teks (Str::limit) 
             sehingga pengunjung bisa membaca sampai habis. --}}
        <p class="my-4 font-light">{{ $post['isi'] }}</p>

        {{-- TOMBOL KEMBALI: 
             Tombol sederhana untuk memulangkan pengunjung ke halaman utama daftar artikel (/posts) --}}
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts</a>

    </article>

</x-layout>
