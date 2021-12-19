const mix = require('laravel-mix');

mix.js('resources/js/website/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css')
    .sourceMaps();
