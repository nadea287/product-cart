// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    mix.copy('resources/js/custom.js', 'public/js')
    mix.copy('resources/js/vendor.js', 'public/js')
    mix.copy('resources/css/custom.css', 'public/css')
    .setPublicPath('public/js');
