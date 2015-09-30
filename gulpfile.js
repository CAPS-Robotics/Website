'use strict';

// +---------------------------------------------------------------------------+
// | Dependencies                                                              |
// +---------------------------------------------------------------------------+

var gulp        = require('gulp');
var sass        = require('gulp-sass');
var scss_lint   = require('gulp-scss-lint');
var typescript  = require('gulp-typescript');
var tslint      = require('gulp-tslint');
var sourcemaps  = require('gulp-sourcemaps');
var gutil       = require('gulp-util');

// +---------------------------------------------------------------------------+
// | Variables                                                                 |
// +---------------------------------------------------------------------------+

var sass_src    = 'public/scss/**/*.scss';
var sass_dest   = 'public/css';
var sass_lint   = 'public/scss/.scsslint.yml';

var ts_src      = 'public/ts/**/*.ts';
var ts_dest     = 'public/js';
var ts_lint     = 'public/ts/tslint.json';

// +---------------------------------------------------------------------------+
// | Tasks                                                                     |
// +---------------------------------------------------------------------------+

/**
 * Builds scss with sourcemaps
 * src:     sass_src
 * dest:    sass_dest
 */
gulp.task('sass:build', function() {
    gulp.src(sass_src)
        .pipe(sourcemaps.init())
            .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(sass_dest));
});

/**
 * Builds typescript with sourcemaps
 * src:     ts_src
 * dest:    ts_dest
 */
gulp.task('ts:build', function() {
    gulp.src(ts_src)
        .pipe(sourcemaps.init())
            .pipe(typescript({}, "", typescript.reporter.defaultReporter()))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(ts_dest));
});

/**
 * Lint scss
 * src:     sass_src
 * config:  sass_lint
 */
gulp.task('sass:lint', function() {
    gulp.src(['!./public/scss/libraries/_normalize.scss', sass_src])
        .pipe(scss_lint({
            'config': sass_lint
        }));
});

/**
 * Lint typescript
 * src:     ts_src
 */
gulp.task('ts:lint', function() {
    gulp.src(ts_src)
        .pipe(tslint().on('error', gutil.log))
        .pipe(tslint.report('prose'));
});

/**
 * Watch scss files and build/lint on change
 * src:     sass_src
 */
gulp.task('sass:watch', function() {
    gulp.watch(sass_src, ['sass:lint', 'sass:build']);
});

/**
 * Watch typescript files and build/lint on change
 * src:     ts_src
 */
gulp.task('ts:watch', function() {
    gulp.watch(ts_src, [/*'ts:lint', */'ts:build']);
});

// +---------------------------------------------------------------------------+
// | Default Tasks                                                             |
// +---------------------------------------------------------------------------+

gulp.task('watch', ['sass:watch', 'ts:watch']);         // Watches all files and builds/lints.
gulp.task('build', ['sass:build', 'ts:build']);         // Compiles all files.
gulp.task('test', ['sass:lint'/*, 'ts:lint'*/]);            // Test/Lints all files.

gulp.task('default', ['test', 'build', 'watch']);       // Default it to watch,
