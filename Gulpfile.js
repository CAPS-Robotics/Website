/* jshint node:true */
var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    jade         = require('gulp-jade'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps   = require('gulp-sourcemaps'),
    minifyCss    = require('gulp-minify-css'),
    gutil        = require('gulp-util'),
    livereload   = require('gulp-livereload'),
    http         = require('http'),
    st           = require('st');

gulp.task('sass', function() {
    gulp.src('assets/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', gutil.log))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('assets/css/'))
        .pipe(livereload());
});

gulp.task('jade', function() {
    var LOCALS = {
        "css": "http://localhost:8000/assets/css/main.css"
    };

    gulp.src('mockups/src/**/*.jade')
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

gulp.task('server', function(done) {
    http.createServer(st({
        path: __dirname + '/',
        index: 'index.html',
        cache: false
    })).listen(8000, done);
});

gulp.task('watch', ['server'], function() {
    livereload.listen();
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch('mockups/src/*.jade', ['jade']);
});

gulp.task('default', ['jade', 'sass', 'watch']);