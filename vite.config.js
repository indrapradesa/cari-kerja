import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/toggleJobUpdate.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            input: {
                main: 'resources/js/toggleJobUpdate.js',
            },
        },
    },
});
