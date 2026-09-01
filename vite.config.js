import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // refresh: true,

            // Refres semua termasuk pemrosesan data
            refresh: [
                'resources/views/**',
                'routes/**',
                'app/Http/Controllers/**',
                'app/Models/**',
            ],
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        // penambahan manual supaya bisa reload otomastis di device lain
        host: '192.168.100.108',
        hmr: {
            host: '192.168.100.108',
        },
        // ////////////////////////
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});