var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    notify = require('gulp-notify'),
    del = require('del'),
    uglify = require('gulp-uglify'),
    imageop = require('gulp-image-optimization'),
    concat = require('gulp-concat');

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

gulp.task('all',['clean', 'clean-js', 'scripts', 'minify-css', 'compile', 'images', 'images-upload'], function () {

});

gulp.task('clean', function() {
    return del(['css']);
});
gulp.task('clean-js', function() {
    return del(['./public/js/resource-all.js', './public/js/public-all.js', './public/js/backend/backend-all.js'])
});

// javascript
gulp.task('minify-modernizr', function() {
    return gulp.src('public/js/modernizr/modernizr.js')
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/modernizr'))
        .pipe(notify({ message: 'Minify-js complete: <%= file.relative %>'}));
});
gulp.task('minify-js', ['minify-modernizr','merge-public-js','merge-resource-js','merge-backend-js'], function () {
    return gulp.src('resources/assets/js/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/'))
        .pipe(notify({ message: 'Minify-js complete: <%= file.relative %>'}));
});
gulp.task('merge-public-js', function() {
    return gulp.src(['public/js/jquery.min.js','public/js/modernizr/modernizr.js','public/js/foundation.min.js','public/js/angular.min.js',
        'public/js/isMobile.min.js','public/js/verge.min.js','public/js/sly.min.js','public/js/main.js'])
        .pipe(concat('public-all.js'))
        .pipe(gulp.dest('./public/js/'))
        .pipe(notify({ message: 'merge js complete: <%= file.relative %>'}));
});
gulp.task('merge-resource-js',['merge-public-js'], function() {
    return gulp.src(['resources/assets/js/*.js'])
        .pipe(concat('resource-all.js'))
        .pipe(gulp.dest('./public/js/'))
        .pipe(notify({ message: 'merge js complete: <%= file.relative %>'}));
});
gulp.task('merge-backend-js',['merge-public-js'], function() {
    return gulp.src(['resources/assets/js/backend/*.js'])
        .pipe(concat('backend-all.js'))
        .pipe(gulp.dest('./public/js/backend/'))
        .pipe(notify({ message: 'merge js complete: <%= file.relative %>'}));
});
gulp.task('scripts', ['clean-js','merge-public-js','merge-resource-js','merge-backend-js','minify-modernizr','minify-js'], function() {
    return gulp.src(['./public/js/backend-all.js','./public/js/resource-all.js','./public/js/public-all.js'])
        .pipe(uglify())
        .pipe(gulp.dest('./public/js/'))
        .pipe(notify({ message: 'Minify-js complete: <%= file.relative %>'}));
});

// css
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
gulp.task('images-nonattraction',function(cb) {
    gulp.src(['public/uploads/normal/**/*.png','public/uploads/normal/**/*.jpg','public/uploads/normal/**/*.gif','public/uploads/normal/**/*.jpeg',
        '!public/uploads/normal/Attractions/**/*.png','!public/uploads/normal/Attractions/**/*.jpg','!public/uploads/normal/Attractions/**/*.gif','!public/uploads/normal/Attractions/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 9,
        progressive: true,
        interlaced: true
    })).pipe(gulp.dest('public/uploads/normal')).on('end', cb).on('error', cb);
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
