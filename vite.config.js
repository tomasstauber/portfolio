import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/components.scss',
                'resources/scss/main.scss',
                'resources/scss/pages.scss',
                'resources/js/app.js'
            ],
                
            refresh: true,
        })
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
