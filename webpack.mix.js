const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/site/site.js', 'public/js')
    .sass('resources/sass/site/site.scss', 'public/css')

    .js('resources/js/adminMat/adminMat.js', 'public/js')
    .sass('resources/sass/adminMat/adminMat.scss', 'public/css')

    // .options({
    //     processCssUrls: false,
    //     postCss: [ tailwindcss('./tailwind.config.js') ],
    // })
