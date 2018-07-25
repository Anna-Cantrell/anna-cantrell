// Require packages
var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify-css');
var babelMinify = require('gulp-babel-minify');
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');


// Do CSS things
gulp.task('styles', function(){
  return gulp.src('./imports/scss/main.scss')
    .pipe(sass().on('error', sass.logError))
		.pipe(minify({ keepBreaks: true }))
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('./'))
    .pipe(livereload())
});

// Do JS things
gulp.task('js', function() {
	return gulp.src('./functions.js')
		.pipe(babelMinify())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('./'))
		.pipe(livereload());
});

// Watch things
gulp.task('watch', function() {
	livereload.listen();
	gulp.watch(['./style.css', './functions.js', './imports/**/*.scss'], gulp.parallel('styles', 'js'));
});

gulp.task('default', gulp.series(gulp.parallel('styles', 'js'), 'watch'));
