import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/frontend/css/style.css',
                'resources/frontend/js/main.js',],
            refresh: true,
        }),
    ],
});
