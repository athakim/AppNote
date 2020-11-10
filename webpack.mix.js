const mix = require('laravel-mix');

require('laravel-mix-tailwind');

var LiveReloadPlugin = require('webpack-livereload-plugin');

mix
    .js('resources/js/app.js', 'public/js')
    //.less('resources/less/app.less', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .tailwind()
    .webpackConfig({
    plugins: [new LiveReloadPlugin()]
});