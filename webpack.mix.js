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
    .sass('resources/sass/app.scss', 'public/css');


//SB ADMIN2 設定
mix.sass('resources/sass/sbadmin/styles.scss','public/css');
mix.js('resources/js/sbadmin/scripts.js','public/js');
mix.js('resources/js/sbadmin/demo/chart-area-demo.js','public/assets/demo')
    .js('resources/js/sbadmin/demo/chart-bar-demo.js','public/assets/demo')
    .js('resources/js/sbadmin/demo/chart-pie-demo.js','public/assets/demo')
    .js('resources/js/sbadmin/demo/datatables-demo.js','public/assets/demo');
