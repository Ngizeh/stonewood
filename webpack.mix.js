let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up details the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
.sass('resources/assets/sass/app.scss', 'public/css')
.styles([
    'public/css/swiper.min.css',
     'public/css/app.css',
    'public/Front/owl-carousel/owl.carousel.css',
    'public/Front/owl-carousel/owl.theme.css',
    'public/Front/slitslider/css/style.css',
    'public/Front/slitslider/css/custom.css'
  ], 'public/css/all.min.css');

