import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// creao path per poterla utilizzare come alias come cartella di sistema
// const path = require('path');

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
            ],
            refresh: true
        }),
    ],

    resolve: {
        alias: {
            '~resources': '/resources/',
        }
    }
});