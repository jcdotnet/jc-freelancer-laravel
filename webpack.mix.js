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

/* CSS */
mix.sass('resources/assets/sass/app.scss', 'public/css/bundle.css').options({
    processCssUrls: false
});
mix.styles([
    'node_modules/lightslider/dist/css/lightslider.min.css'
], 'public/css/lightslider.min.css');
   
mix.combine(['node_modules/jquery/dist/jquery.min.js', 'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'resources/assets/js/app.js'], 'public/js/bundle.js');

/* JavaScript */
mix.js('node_modules/lightslider/dist/js/lightslider.min.js', 'public/js')
mix.combine(['public/css/bundle.css', 'resources/assets/sass/app-admin.css'], 'public/css/bundle-admin.css');
mix.combine(['node_modules/jquery/dist/jquery.min.js','node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'resources/assets/js/app-admin.js'], 'public/js/bundle-admin.js');

