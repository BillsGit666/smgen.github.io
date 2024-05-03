const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/app.js', 'public/js')
 .vue() // Tambahkan fungsi vue() untuk mengelola file Vue.js
 .postCss('resources/css/app.css', 'public/css', [
      //
  ])
 .sass('resources/sass/app.scss', 'public/css')
 .styles([
      'public/css/login_register_user.css',
      'public/fonts/material-icon/css/material-design-iconic-font.min.css',
      'node_modules/vue-multiselect/dist/vue-multiselect.min.css',
  ], 'public/css/all.css');
