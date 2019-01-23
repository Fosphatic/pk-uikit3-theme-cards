/**
 * Popular Tasks
 * -------------
 *
 * compile: compiles the .less files of the specified packages
 * lint: runs jshint on all .js files
 */

var gulp       = require('gulp'),
    header     = require('gulp-header'),
    less       = require('gulp-less'),
    rename     = require('gulp-rename');

// banner for the css files
var banner = "/*! <%= data.title %> <%= data.version %> | <%= data.copyright %> | <%= data.license %> License */\n";

gulp.task('default', ['compile']);


/**
 * Compile all less files
 */
gulp.task('compile', function () {

    return gulp.src('less/theme.less', {base: __dirname})
        .pipe(less({compress: true}))
        .pipe(header(banner, { data: require('./composer.json') }))
        .pipe(rename(function (file) {
            // the compiled less file should be stored in the css/ folder instead of the less/ folder
            file.dirname = file.dirname.replace('less', 'css');
        }))
        .pipe(gulp.dest(__dirname));
});

/**
 * Watch for changes in files
 */
gulp.task('watch', function (cb) {
    gulp.watch('**/*.less', ['compile']);
});
