import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            // Abaikan folder vendor, storage, dan node_modules agar tidak melebihi batas watcher
            ignored: ['**/vendor/**', '**/storage/**', '**/node_modules/**'],
        },
    },
});