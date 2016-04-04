var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    notify = require('gulp-notify'),
    del = require('del');

gulp.task('default',['clean'], function() {

    gulp.src('resources/assets/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        //.pipe(cssnano())
        .pipe(gulp.dest('./public/css/'))
        .pipe(notify({ message: 'TDM bkk task complete' }));
});


gulp.task('clean', function() {
  return del(['css']);
});

//Watch task
gulp.task('watch',function() {
    gulp.watch('resources/assets/sass/*.scss',['default']);
});
