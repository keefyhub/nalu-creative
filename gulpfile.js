var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    cache = require('gulp-cache'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload'),
    moduleImporter = require('sass-module-importer'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    paths = {
        input_scss: [
            './scss/style.scss'
        ],
        input_js: [
            './js/*.js'
        ],
        input_images: './images/**/*',
        output_css: './',
        output_js: './public/js',
        output_images: './public/images'
    };

gulp.task('test', function () {
    console.log('Gulp is working! Proceed with tasks...');
});

gulp.task('clear', function (done) {
    console.log('Cleared cache.');
    return cache.clearAll(done);
});

gulp.task('scripts', function () {
    gulp.src(paths.input_js)
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .on('error', function (error) {
            console.log('Error: ' + error.message);
        })
        .pipe(gulp.dest(paths.output_js));
});

gulp.task('sass', function () {
    gulp.src(paths.input_scss)
        .pipe(sass({importer: moduleImporter()}))
        .on('error', function (error) {
            console.log('Error: ' + error.message);
        })
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'iOS 8'],
            cascade: false
        }))
        .pipe(gulp.dest(paths.output_css))
        .pipe(livereload());
});

gulp.task('images', function () {
    gulp.src(paths.input_images)
        .pipe(imagemin({
            optimizationLevel: 5,
            progressive: true,
            interlaced: true
        }))
        .pipe(gulp.dest(paths.output_images));
});

gulp.task('watch', ['scripts', 'sass', 'images'], function () {
    livereload.listen();
    gulp.watch('./js/**/*', ['scripts']);
    gulp.watch('./scss/**/*', ['sass']);
    gulp.watch('./images/**', ['images']);
});

gulp.task('default', ['scripts', 'sass', 'images']);
