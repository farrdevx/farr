import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// Mengimpor paket Tailwind CSS v4.x dan Autoprefixer
import tailwindcss from '@tailwindcss/postcss'; // Perhatikan ini, menunjuk ke @tailwindcss/postcss
import autoprefixer from 'autoprefixer';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // --- Tambahkan blok 'css' ini untuk konfigurasi PostCSS langsung ---
    css: {
        postcss: {
            plugins: [
                tailwindcss(), // Panggil plugin Tailwind CSS v4.x
                autoprefixer(), // Panggil plugin Autoprefixer
            ],
        },
    },
    // --- Akhir blok 'css' ---
    server: {
        cors: true,
    },
});
