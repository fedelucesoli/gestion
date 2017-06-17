var gulp = require('gulp'),
    less = require('gulp-less'),
    browserSync = require('browser-sync'),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    uglify = require('gulp-uglify');
    // connect = require('gulp-connect-php'),
    // httpProxy = require('http-proxy');


// Compile LESS files from /less into /css
gulp.task('less', function() {
    return gulp.src('public/assets/lobostrap/obras.less')
        .pipe(less())
        .pipe(gulp.dest('public/assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Minify compiled CSS
gulp.task('minify-css', ['less'], function() {
    return gulp.src('public/assets/css/obras.css')
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Minify JS
gulp.task('minify-js', function() {
    return gulp.src('public/assets/js/obras.js')
        // .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/assets/js'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Copy lib libraries from /node_modules into /lib
gulp.task('copy', function() {
    gulp.src(['node_modules/bootstrap/dist/**/*', '!**/npm.js', '!**/bootstrap-theme.*', '!**/*.map'])
        .pipe(gulp.dest('public/assets/css/bootstrap'))

    gulp.src(['node_modules/jquery/dist/jquery.js', 'node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('public/assets/js/jquery'))

    gulp.src([
            'node_modules/font-awesome/**',
            '!node_modules/font-awesome/**/*.map',
            '!node_modules/font-awesome/.npmignore',
            '!node_modules/font-awesome/*.txt',
            '!node_modules/font-awesome/*.md',
            '!node_modules/font-awesome/*.json'
        ])
        .pipe(gulp.dest('public/assets/css/font-awesome'))
})

// Run everything
gulp.task('default', ['less', 'minify-css', 'minify-js', 'copy']);

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost/obras/public"
    });
});

gulp.task('dev', ['browser-sync', 'less', 'minify-css', 'minify-js'], function() {
    gulp.watch('public/assets/lobostrap/*.less', ['less', browserSync.reload]);
    gulp.watch('public/assets/lobostrap/includes/*.less', ['less', browserSync.reload]);
    gulp.watch('public/assets/css/*.css', ['minify-css', browserSync.reload]);
    gulp.watch('public/assets/js/*.js', ['minify-js']);
    // Reloads the browser whenever HTML or JS files change
    gulp.watch('public/*.php', browserSync.reload);
    gulp.watch('public/includes/*.php', browserSync.reload);
    gulp.watch('public/assets/js/**/*.js', browserSync.reload);
});
