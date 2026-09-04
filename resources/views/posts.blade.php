{{-- Memanggil komponen x-layout sebagai kerangka utama web dan mengirimkan variabel $tittle --}}
<x-layout :tittle="$tittle">

    {{-- MEMULAI PERULANGAN: 
         Mengambil bungkusan data '$posts' dari web.php, lalu membukanya satu per satu 
         dan memberinya nama panggilan '$post' untuk setiap putarannya. --}}
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">

            {{-- JUDUL ARTIKEL: 
                 Dibuat menjadi link (tautan) yang mengarah ke '/posts/judul-slug-artikel'. 
                 Data diambil menggunakan $post['tittle'] --}}
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['tittle'] }}</h2>
            </a>

            {{-- DATA PENULIS (ELOQUENT RELATIONSHIP): 
                 '$post->author->name' artinya: "Hai Artikel ($post), tolong panggilkan Penulismu (author), 
                 lalu ambilkan Namanya (name)". Ini terjadi berkat relasi yang dibuat di file Model. --}}
            <div class="text-base text-gray-500">
                <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a>
            </div>

            {{-- CUPLIKAN ISI ARTIKEL: 
                 Fungsi 'Str::limit' digunakan untuk memotong teks panjang. 
                 Angka 100 berarti kita hanya menampilkan 100 karakter pertama saja sebagai cuplikan (teaser). --}}
            <p class="my-4 font-light">{{ Str::limit($post['isi'], 100) }}</p>

            {{-- TOMBOL BACA SELENGKAPNYA: 
                 Membawa pengunjung ke halaman detail artikel berdasarkan slug-nya. --}}
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>

        </article>
        {{-- MENGAKHIRI PERULANGAN --}}
    @endforeach

</x-layout>
