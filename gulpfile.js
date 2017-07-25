var gulp = require('gulp'),
    less = require('gulp-less'),
    browserSync = require('browser-sync').create(),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    uglify = require('gulp-uglify'),
    connect = require('gulp-connect-php'),
    httpProxy = require('http-proxy'),
    concat = require('gulp-concat'),
    gulpCopy = require('gulp-copy');


gulp.task('images', function(cb) {
    gulp.src(['public/img/**/*.png','public/img/**/*.jpg','public/img/**/*.gif','public/img/**/*.jpeg'])
    .pipe(imageop({
        optimizationLevel: 10,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/img/')).on('end', cb).on('error', cb);
});

// Compile LESS files from /less into /css
gulp.task('less', function() {
    return gulp.src('resources/assets/less/gestion.less')
        .pipe(less())
        .pipe(gulp.dest('public/assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});
gulp.task('copy', function() {
  gulp.src([
    'node_modules/izimodal/js/iziModal.js',
    'node_modules/izimodal/css/iziModal.min.css',
  ])
  .pipe(gulp.dest('public/assets/plugins'));
});


gulp.task('lobostrap', function() {
    return gulp.src('resources/assets/less/lobostrap/lobostrap.less')
        // .pipe(less().on('error', function(err){
        //     // gutil.log(err);
        //     this.emit('end');
        // }))
        .pipe(less())
        .pipe(gulp.dest('public/assets/css/lobostrap'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Minify compiled CSS
gulp.task('minify-css', ['less'], function() {
    return gulp.src('public/assets/css/gestion.css')
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('scripts', function() {
  return gulp.src('resources/assets/js/*.js')
    .pipe(concat('gestion.js'))
    .pipe(gulp.dest('public/assets/js/'));
});

// Minify JS
gulp.task('minify-js', function() {
    return gulp.src('public/assets/js/gestion.js')
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/assets/js'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Run everything
gulp.task('default', ['less', 'minify-css', 'minify-js']);

gulp.task('connect-sync', function () {
    connect.server({
        port: 8079,
        base: 'public',
        open: false,
        debug: true
    });

    var proxy   = httpProxy.createProxyServer({});
    var reload  = browserSync.reload;

    browserSync.init({
        notify: false,
        port  : 8079,
        server: {
            baseDir   : ['public'],
            middleware: function (req, res, next) {
                var url = req.url;

                if (!url.match(/^\/(styles)\//)) {
                    proxy.web(req, res, { target: 'http://localhost:8079' });
                } else {
                    next();
                }
            }
        }
    });
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost:8079/gestion/public",
        // logLevel: "info",
        // logSnippet: false

    });
});

// Dev task with browserSync
gulp.task('dev', ['connect-sync', 'less', 'lobostrap', 'scripts', 'minify-css', 'minify-js'], function() {
    gulp.watch('resources/assets/less/*.less', ['less']);
    gulp.watch('resources/assets/less/lobostrap/*/*.less', ['lobostrap']);
    gulp.watch('resources/assets/less/lobostrap/*.less', ['lobostrap']);
    gulp.watch('resources/assets/less/admin.less', ['lessAdmin']);
    gulp.watch('public/assets/css/*.css', ['minify-css']);
    gulp.watch('resources/assets/js/*.js', ['scripts']);
    // Reloads the browser whenever HTML or JS files change
    gulp.watch('resources/views/*/*/*.php', browserSync.reload);
    gulp.watch('resources/views/*/*.php', browserSync.reload);
    gulp.watch('resources/views/*.php', browserSync.reload);
});
