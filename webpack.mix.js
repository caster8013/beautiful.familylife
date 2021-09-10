let mix = require('laravel-mix');

mix
.js('src/custom.js', 'dist/')
.sass('src/custom.scss', 'dist/')
.js('src/bfl-video-list.js', 'dist/')
.sass('src/bfl-video-list.scss', 'dist/')
.sourceMaps()
// .browserSync('http://sass.practice:8085/');

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'dist/');
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'webfonts/');