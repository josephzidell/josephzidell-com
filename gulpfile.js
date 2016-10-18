var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
	'bootstrap': './node_modules/bootstrap-sass/assets/',
	'fontawesome': './node_modules/font-awesome/',
	'jquery': './node_modules/jquery/',
	'vue': './node_modules/vue/',
	'vue_router': './node_modules/vue-router/',
	'vue_resource': './node_modules/vue-resource/',
}

elixir(function(mix) {
    mix.sass('app.scss')
    .sass('josephzidell.scss');
    // .version('public/css/app.css');
    // mix.sass('posts.scss');
});

elixir(function(mix) {
	mix
		.sass([
			'app.scss',
			'josephzidell.scss',
			'posts.scss',
			paths.fontawesome + 'css/font-awesome.min.css',
		], 'public/css/app.css')
		.copy(paths.fontawesome + 'fonts/**', 'public/fonts')
		.scripts([
			paths.jquery + "dist/jquery.js",
			paths.bootstrap + "javascripts/bootstrap.js",
			paths.vue + "dist/vue.js",
			paths.vue_resource + "dist/vue-resource.js",
			paths.vue_router + "dist/vue-router.js",
			'./public/bower_components/jquery-truncate-html/jquery.truncate.js',
			'app-vue.js',
		], 'public/js/app.js');
});
