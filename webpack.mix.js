const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/pages/register.js', 'public/js/pages')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/pages/authentication.scss', 'public/css/pages')
   .sass('resources/sass/pages/register.scss', 'public/css/pages')
   .sass('resources/sass/pages/welcome.scss', 'public/css/pages');
