const mix = require('laravel-mix');

mix.js('Public/js/app.js', 'public/js')
   .sass('Public/sass/app.scss', 'public/css')
   .version();
