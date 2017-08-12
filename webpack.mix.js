const { mix } = require('laravel-mix');

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


mix.sass('resources/assets/sass/app.scss', 'public/css/bundle.css').options({
      processCssUrls: false
   });

mix.combine(['resources/assets/js/jquery-3.2.1.min.js', 'resources/assets/js/bootstrap.min.js', 'resources/assets/js/app.js'], 'public/js/bundle.js');


mix.combine(['public/css/bundle.css', 'resources/assets/sass/app-admin.css'], 'public/css/bundle-admin.css');
mix.combine(['resources/assets/js/jquery-3.2.1.min.js', 'resources/assets/js/bootstrap.min.js', 'resources/assets/js/app-admin.js'], 'public/js/bundle-admin.js');