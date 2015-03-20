/* jshint node:true */
var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    jade         = require('gulp-jade'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps   = require('gulp-sourcemaps'),
    minifyCss    = require('gulp-minify-css'),
    gutil        = require('gulp-util'),
    connect      = require('gulp-connect');

gulp.task('sass', function() {
    gulp.src('assets/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', gutil.log))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('assets/css/'))
        .pipe(connect.reload());
});

gulp.task('jade', function() {
    var LOCALS = {
        'css': 'http://localhost:8000/assets/css/main.css',
        'first': 'http://localhost:8000/assets/img/FIRSTicon_RGB.jpg',
        'recyclerush': 'http://localhost:8000/assets/img/RecycleRush.jpg'
    };

    gulp.src('mockups/src/**/*.jade')
        .pipe(jade({
            locals: LOCALS
        }))
        .pipe(gulp.dest('mockups'))
        .pipe(connect.reload());
});

gulp.task('minify', function() {
    gulp.src('assets/css/*.css')
        .pipe(sourcemaps.init())
        .pipe(minifyCss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('assets/css/min/'));
});

gulp.task('server', function() {
    connect.server({
        livereload: true,
        port: 8000
    });
});

gulp.task('watch', ['server'], function() {

    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch('mockups/src/*.jade', ['jade']);
});

gulp.task('default', ['jade', 'sass', 'watch']);