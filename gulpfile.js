const gulp = require('gulp');
const shell = require('gulp-shell');
const elixir = require('laravel-elixir');
var bowerDir = './bower_components/';
require('laravel-elixir-vue-2');


elixir(function(mix) {

    mix.less('site.less',
        'public/common/css/site.css')
        .less('vendor.less',
            //compiled bootstrap and font-awesome
            'public/common/css/vendor.css');

    //copia todos os css dentro do site.css
    mix.combine([
        'public/common/css/vendor.css',
        'public/vendor/bootstrap/css/shop-homepage.css',
        'public/common/css/site.css',
    ], 'public/common/css/site-all.css');

    //copiar as fontes de vendors utilizadas no projetos
    mix.copy(bowerDir + 'bootstrap/fonts', 'public/common/fonts')
       .copy(bowerDir + 'font-awesome/fonts', 'public/common/fonts');

    mix.scripts([
        bowerDir + 'jquery/dist/jquery.js',
        bowerDir + 'bootstrap/dist/js/bootstrap.js',
    ], 'public/common/js/vendor.js');


    //copy to Admin-lte
    mix.sass('app.scss')
        //Landing page
        .less('./node_modules/bootstrap-less/bootstrap/bootstrap.less',
            './public/css/bootstrap.css')
        .styles([
            './public/css/bootstrap.css',
            'main.css'
        ], 'public/css/all-landing.css')
        //AdminLTE
        .less('./node_modules/admin-lte/build/less/AdminLTE.less',
            './public/css/adminlte-less.css')
        .less('adminlte-app.less')
        .less('./node_modules/toastr/toastr.less')
        .styles([
            './public/css/app.css',
            './node_modules/admin-lte/dist/css/skins/_all-skins.css',
            './public/css/adminlte-less.css',
            './public/css/adminlte-app.css',
            './node_modules/icheck/skins/square/blue.css',
            './public/css/toastr.css',
        ])
        //RESOURCES
        .copy('node_modules/font-awesome/fonts/*.*','public/fonts/')
        .copy('node_modules/ionicons/dist/fonts/*.*','public/fonts/')
        .copy('node_modules/admin-lte/bootstrap/fonts/*.*','public/fonts/bootstrap')
        .copy('node_modules/admin-lte/dist/css/skins/*.*','public/css/skins')
        .copy('node_modules/admin-lte/dist/img','public/img')
        .copy('node_modules/admin-lte/plugins','public/plugins')
        .copy('node_modules/icheck/skins/square/blue.png','public/css')
        .copy('node_modules/icheck/skins/square/blue@2x.png','public/css');


        //.webpack('app.js');

});
