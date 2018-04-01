let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
mix.copy('resources/assets/js/jQuery/menu.js', 'public/js/menu.js')
    .copy('app/Modules/Administrators/resources/js/administrators.js', 'public/js/modules/administrators.js')
    .sass('resources/assets/sass/style.scss', 'public/css');
