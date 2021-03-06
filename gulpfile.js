var gulp = require('gulp');
var elixir = require('laravel-elixir');
var minifyCss = require('gulp-minify-css');
var concat = require('gulp-concat');
//var uglify = require('gulp-uglify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
});

gulp.task('minify-css', function() {
	return gulp.src('public/css/app.css')
		.pipe(minifyCss({compatibility: 'ie8'}))
		.pipe(gulp.dest('dist'));
});

gulp.task('scripts', function () {
    return gulp.src('./public/js/scripts/*.js')
    .pipe(concat('app.js'))
    //.pipe(uglify())
    .pipe(gulp.dest('./public/js/compiled/'));
});
