/* jshint node:true */
var gulp =       require('gulp'),
    sass =       require('gulp-sass'),
    jade =       require('gulp-jade'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    minifyCss = require('gulp-minify-css'),
    gutil = require('gulp-util'),
    livereload = require('gulp-livereload');

gulp.task('sass', function() {
    gulp.src('assets/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', gutil.log))
        .pipe(autoprefixer())
        .pipe(sourcemaps.wite())
        .pipe(gulp.dest('assets/css/'))
        .pipe(livereload());
});

gulp.task('jade', function() {
    var LOCALS = {};

    gulp.src('mockups/src/*.jade')
        .pipe(jade({
            locals: LOCALS
        }))
        .pipe(gulp.dest('mockups'))
        .pipe(livereload());
});

gulp.task('minify', function() {
    gulp.src('assets/css/*.css')
        .pipe(sourcemaps.init())
        .pipe(minifyCss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('assets/css/min/'));
});

gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('assets/scss/*.scss', ['scss']);
    gulp.watch('mockups/src/*.jade', ['jade']);
});