let mix = require('laravel-mix');

mix.php('test/index.php', 'public/index.php')
    .sass('test/style.css', 'public/css');
