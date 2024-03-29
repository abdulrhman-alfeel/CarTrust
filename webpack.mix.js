const mix = require('laravel-mix');
const path = require('path');
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

 
// mix.webpackConfig({
//   module: {
//     rules: [
//        {
//          loader: "style-loader!css-loader!less-loader",
//          exclude: [
//              path.resolve(__dirname, "node-modules"),
//              path.resolve(__dirname, "resources/assets/less"),
//          ],
//        },
//    ]} 
//  });
mix.js('resources/js/app.js', 'public/js')
    .react()
    .sass('resources/sass/app.scss', 'public/css');
mix.browserSync

