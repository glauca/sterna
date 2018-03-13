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
    .js('resources/assets/js/h5/item/show.js', 'public/js/h5/item');

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/h5/common.scss', 'public/css/h5')
    .sass('resources/assets/sass/h5/index.scss', 'public/css/h5')
    .sass('resources/assets/sass/h5/shop/index.scss', 'public/css/h5/shop')
    .sass('resources/assets/sass/h5/item/show.scss', 'public/css/h5/item');

if (mix.inProduction()) {
    mix.version();
}