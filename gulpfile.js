// Theme Folder
var url = "assets";

// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src(url+'/css/src/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest(url + '/css/'))
});

//Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src(url+'/js/src/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest(url + '/js/'))
});

//Watch task
gulp.task('watch', function(){
	gulp.watch(url + '/css/src/**/*.scss', gulp.series('sass'));
	gulp.watch(url + '/js/src/**/*.js', gulp.series('scripts'));
})