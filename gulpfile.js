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
        .pipe(cssnano())
        .pipe(gulp.dest('./public/css/'))
        .pipe(notify({ message: 'Bkk task complete', onLast: true}));

});

gulp.task('all',['clean', 'minify-js', 'minify-css', 'compile', 'images', 'images-upload'], function () {

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
        .pipe(cssnano())
        .pipe(gulp.dest('./public/css/'))
        .pipe(notify({ message: 'Compile scss task complete: <%= file.relative %>'}));
});

//optimize image 
gulp.task('images', function(cb) {
    gulp.src(['public/images/**/*.png','public/images/**/*.jpg','public/images/**/*.gif','public/images/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/images')).on('end', cb).on('error', cb);
});
gulp.task('images-upload', function(cb) {
    gulp.src(['public/uploads/normal/**/*.png','public/uploads/normal/**/*.jpg','public/uploads/normal/**/*.gif','public/uploads/normal/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal')).on('end', cb).on('error', cb);
});
gulp.task('images-aboutus', function(cb) {
    gulp.src(['public/uploads/normal/aboutus/**/*.png','public/uploads/normal/aboutus/**/*.jpg','public/uploads/normal/aboutus/**/*.gif','public/uploads/normal/aboutus/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/aboutus')).on('end', cb).on('error', cb);
});
gulp.task('images-attraction-category', function(cb) {
    gulp.src(['public/uploads/normal/attraction_category/**/*.png','public/uploads/normal/attraction_category/**/*.jpg','public/uploads/normal/attraction_category/**/*.gif','public/uploads/normal/attraction_category/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/attraction_category')).on('end', cb).on('error', cb);
});
gulp.task('images-banner', function(cb) {
    gulp.src(['public/uploads/normal/banner/**/*.png','public/uploads/normal/banner/**/*.jpg','public/uploads/normal/banner/**/*.gif','public/uploads/normal/banner/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/banner')).on('end', cb).on('error', cb);
});
gulp.task('images-footer', function(cb) {
    gulp.src(['public/uploads/normal/footer/**/*.png','public/uploads/normal/footer/**/*.jpg','public/uploads/normal/footer/**/*.gif','public/uploads/normal/footer/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/footer')).on('end', cb).on('error', cb);
});
gulp.task('images-home', function(cb) {
    gulp.src(['public/uploads/normal/home/**/*.png','public/uploads/normal/home/**/*.jpg','public/uploads/normal/home/**/*.gif','public/uploads/normal/home/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/home')).on('end', cb).on('error', cb);
});
gulp.task('images-orbit', function(cb) {
    gulp.src(['public/uploads/normal/orbit/**/*.png','public/uploads/normal/orbit/**/*.jpg','public/uploads/normal/orbit/**/*.gif','public/uploads/normal/orbit/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/orbit')).on('end', cb).on('error', cb);
});
gulp.task('images-transportation', function(cb) {
    gulp.src(['public/uploads/normal/transportation/**/*.png','public/uploads/normal/transportation/**/*.jpg','public/uploads/normal/transportation/**/*.gif','public/uploads/normal/transportation/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/transportation')).on('end', cb).on('error', cb);
});
gulp.task('images-trip', function(cb) {
    gulp.src(['public/uploads/normal/trips/**/*.png','public/uploads/normal/trips/**/*.jpg','public/uploads/normal/trips/**/*.gif','public/uploads/normal/trips/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/trips')).on('end', cb).on('error', cb);
});
gulp.task('images-attraction', function(cb) {
    gulp.src(['public/uploads/normal/Attractions/**/*.png','public/uploads/normal/Attractions/**/*.jpg','public/uploads/normal/Attractions/**/*.gif','public/uploads/normal/Attractions/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal/Attractions')).on('end', cb).on('error', cb);
});

//Watch task
gulp.task('watch',function() {
    gulp.watch('resources/assets/sass/*.scss',['compile']);
});

gulp.task('watch-js',function() {
    gulp.watch('resources/assets/js/*.js',['minify-js']);
});
