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
    .copy('resources/assets/js/jQuery/popup.js', 'public/js/popup.js')
    .copy('resources/assets/img/*', 'public/images/')
    .copy('app/Modules/Administrators/resources/js/administrators.js', 'public/js/modules/administrators.js')
    .copy('app/Modules/Departments/resources/js/departments.js', 'public/js/modules/departments.js')
    .copy('app/Modules/Companies/resources/js/companies.js', 'public/js/modules/companies.js')
    .copy('app/Modules/Users/resources/js/users.js', 'public/js/modules/users.js')
    .copy('app/Modules/Specialists/resources/js/specialists.js', 'public/js/modules/specialists.js')
    .sass('resources/assets/sass/style.scss', 'public/css');
