let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');

mix.browserSync({
    proxy: 'bbay.test',
});