import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

let inputs = [];

if (process.env.TAILWIND_CONFIG) {
    inputs = [`resources/css/${process.env.TAILWIND_CONFIG}.css`];
} else {
    inputs = [
        'resources/css/app.css',
        'resources/css/admin.css',
        'resources/js/app.js',
    ];
}

export default defineConfig({
    plugins: [
        laravel({
            input: inputs,
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    css: {
        postcss: {
            plugins: [
                require("tailwindcss/nesting"),
                require("tailwindcss")({
                    config: process.env?.TAILWIND_CONFIG
                        ? `tailwind-${process.env.TAILWIND_CONFIG}.config.js`
                        : "./tailwind.config.js",
                }),
                require("autoprefixer"),
            ],
        },
    },
    build: {
        outDir: process.env?.TAILWIND_CONFIG
            ? `./public/build/${process.env.TAILWIND_CONFIG}`
            : "./public/build",
    },
});
