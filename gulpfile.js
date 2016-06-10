var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    notify = require('gulp-notify'),
    del = require('del'),
    uglify = require('gulp-uglify'),
    imageop = require('gulp-image-optimization');

gulp.task('default',['clean'], function() {

    gulp.src('resources/assets/js/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/'));

    gulp.src('resources/assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        //.pipe(cssnano())
        .pipe(gulp.dest('./public/css/'))
        .pipe(notify({ message: 'Bkk task complete', onLast: true}));

});

gulp.task('all',['clean', 'minify-js', 'compile'], function () {

});

gulp.task('clean', function() {
  return del(['css']);
});

gulp.task('minify-js', function () {
    gulp.src('resources/assets/js/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/'))
        .pipe(notify({ message: 'Minify-js complete: <%= file.relative %>'}));
    gulp.src('public/js/modernizr/modernizr.js')
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/modernizr'))
        .pipe(notify({ message: 'Minify-js complete: <%= file.relative %>'}));
});

gulp.task('minify-css', function () {
    gulp.src('resources/assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(cssnano())
        .pipe(gulp.dest('./public/css/'))
        .pipe(notify({ message: 'Compile scss task complete: <%= file.relative %>'}));
});

gulp.task('compile', function () {
    gulp.src('resources/assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        //.pipe(cssnano())
        .pipe(gulp.dest('./public/css/'))
        .pipe(notify({ message: 'Compile scss task complete: <%= file.relative %>'}));
});

//optimize image 
gulp.task('images', function(cb) {
    gulp.src(['public/images/**/*.png','public/images/**/*.jpg','public/images/**/*.gif','public/images/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 5,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/images')).on('end', cb).on('error', cb);
});
gulp.task('images-upload', function(cb) {
    gulp.src(['public/uploads/normal/**/*.png','public/uploads/normal/**/*.jpg','public/uploads/normal/**/*.gif','public/uploads/normal/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 5,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal')).on('end', cb).on('error', cb);
});

//Watch task
gulp.task('watch',function() {
    gulp.watch('resources/assets/sass/*.scss',['compile']);
});

gulp.task('watch-js',function() {
    gulp.watch('resources/assets/js/*.js',['minify-js']);
});
