import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import vuetify from 'vite-plugin-vuetify'
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/css/app.css'],
            refresh: true,
        }),
        vue(),
        vuetify({ autoImport: true }),
    ],
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js'
        }
    },
    build: {
        outDir: 'public/build', // Asegura que se genere en public/build
        manifest: true, // Genera manifest.json
        rollupOptions: {
            input: 'resources/js/app.js',
        },
    },
    base: '/quoter/',
});
