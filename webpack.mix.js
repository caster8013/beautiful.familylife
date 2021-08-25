let mix = require('laravel-mix');

mix
.js('src/app.js', 'dist/')
.js('src/bfl-video-list.js', 'dist/')
.sass('src/bfl-video-list.scss', 'dist/')
.sass('src/conditionally-load-style.scss', 'dist/')
.sass('src/app.scss', 'dist/');