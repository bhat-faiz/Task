const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'public/js/app.js',
        'public/frontend/js/slick.js',
        'public/frontend/js/main.js',
    ],'public/js/all.js')
    .postCss('resources/css/app.css', 'public/css')
    .styles([
        'public/css/app.css',
        'public/frontend/css/slick.css',
        'public/frontend/css/slick-theme.css',
        'public/frontend/css/style.css',
    ],'public/css/all.css');
