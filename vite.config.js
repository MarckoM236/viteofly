import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

//get files from themes folder
const themes = fs
    .readdirSync('resources/themes', { withFileTypes: true })
    .filter(dirent => dirent.isDirectory() && dirent.name !== 'components')
    .map(dirent => dirent.name);

const themesCss = themes.map(theme => `resources/themes/${theme}/styles.css`);
const themesJs = themes.map(theme => `resources/themes/${theme}/functions.js`);

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                ...themesCss,
                ...themesJs,
                'resources/themes/themes.js'
            ],
            refresh: true,
        }),
    ],
});
