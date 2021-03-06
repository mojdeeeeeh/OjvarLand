const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .js('resources/js/pages/team/index.js', 'public/js/pages/team')
   .js('resources/js/pages/image/index.js', 'public/js/pages/image')
   .copyDirectory('resources/assets/tem_virb', 'public/template')
   .sass('resources/sass/myCss.scss', 'public/css')
   .version();
