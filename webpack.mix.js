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
 mix.options({ processCssUrls: false });


 mix.webpackConfig({
    stats: {
        children: true,
    },});

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/main.scss', 'public/css/admin', [
//         //

//     ]);


    mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);