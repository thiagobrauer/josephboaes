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
   .sass('resources/assets/sass/app.scss', 'public/css');

// GLOBAL

mix.styles([
    'resources/assets/vendor/bootstrap-4/dist/css/bootstrap.min.css',
    'resources/assets/vendor/animate.css/animate.min.css',
    
], 'public/frontend/css/global/vendor.css');

mix.scripts([
    'resources/assets/vendor/jquery/dist/jquery.min.js',
    'resources/assets/vendor/popper.js/dist/umd/popper.min.js',
    'resources/assets/vendor/bootstrap-4/dist/js/bootstrap.min.js',
    
], 'public/frontend/js/global/vendor.js');

// HOME

mix.styles([
    'resources/assets/vendor/slick-carousel/slick/slick.css',
    'resources/assets/vendor/slick-carousel/slick/slick-theme.css',
    'resources/assets/vendor/photoswipe/dist/photoswipe.css', 
    'resources/assets/vendor/photoswipe/dist/default-skin/default-skin.css', 
    
], 'public/frontend/css/home/vendor.css');

mix.scripts([
    'resources/assets/vendor/slick-carousel/slick/slick.js',
    'resources/assets/vendor/photoswipe/dist/photoswipe.js', 
    'resources/assets/vendor/photoswipe/dist/photoswipe-ui-default.js', 
    'resources/assets/vendor/page-scroll-to-id/jquery.malihu.PageScroll2id.js', 
    'resources/assets/vendor/tingle/dist/tingle.min.js',
    'resources/assets/vendor/jquery-ui/jquery-ui.min.js',
    'resources/assets/vendor/HoldOn.js/src/js/HoldOn.min.js',
    
], 'public/frontend/js/home/vendor.js');

mix.copy([
    'resources/assets/frontend/css/home/custom.css',
    'resources/assets/frontend/css/home/responsive.css',
], 'public/frontend/css/home/');

mix.copy([
    'resources/assets/frontend/js/home/custom.js',
], 'public/frontend/js/home/');

mix.copy([
    'resources/assets/vendor/photoswipe/dist/default-skin/default-skin.svg', 
    'resources/assets/vendor/photoswipe/dist/default-skin/default-skin.png', 
    'resources/assets/vendor/photoswipe/dist/default-skin/preloader.gif', 

    'resources/assets/vendor/slick-carousel/slick/ajax-loader.gif',
    
], 'public/frontend/css/home/');

mix.copy([
    'resources/assets/vendor/slick-carousel/slick/fonts/*.*',
    'resources/assets/vendor/slick-carousel/slick/ajax-loader.gif',
], 'public/frontend/css/home/fonts/');