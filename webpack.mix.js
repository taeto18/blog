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
   .sass('resources/assets/scss/style.scss', 'public/css')
   .sass('resources/assets/scss/styles.scss', 'public/css')
   // .sass('resources/assets/scss/bootstrap.scss', 'public/css')
   // .sass('resources/assets/scss/datepicker3.scss', 'public/css')
   // .sass('resources/assets/scss/datepicker.scss', 'public/css')
   // .sass('resources/assets/scss/bootstrap-table.scss', 'public/css')
   .sass('resources/assets/scss/bootstrap-theme.scss', 'public/css')
   .options({
      processCssUrls: false
  });

if (!mix.inProduction()) {
   mix.sourceMaps();
}