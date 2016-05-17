var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    notify = require('gulp-notify'),
    del = require('del'),
    uglify = require('gulp-uglify');

gulp.task('default',['clean'], function() {

    gulp.src('resources/assets/js/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/'));

    gulp.src('resources/assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        //.pipe(cssnano())
        .pipe(gulp.dest('./public/css/'))
        .pipe(notify({ message: 'TDM bkk task complete' }));

});


gulp.task('clean', function() {
  return del(['css','./public/js/frontend/']);
});

gulp.task('minify-js', function () {
    gulp.src('resources/assets/js/**/*.js') // path to your files
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/'))
        .pipe(notify({ message: 'minify-js complete'}));
});

//Watch task
gulp.task('watch',function() {
    gulp.watch('resources/assets/sass/*.scss',['default']);
});
