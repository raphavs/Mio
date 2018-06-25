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
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/css/bootstrap.css',
    'public/css/mio_styles.css',
], 'public/css/mixOfMioAndBootstrap.css');

mix.scripts([
    'public/js/mioAddDoor.js',
    'public/js/mioAddUser.js',
    'public/js/mioDoorAlreadyExists.js',
    'public/js/mioRightsExt.js',
    'public/js/mioTransactions.js',
    'public/js/mioUserAlreadyExists.js',
    'public/js/mioUserNotExists.js',
    'public/js/mioUserWrongPassword.js'
], 'public/js/mixOfMio.js');