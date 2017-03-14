var gulp = require('gulp');
var sass = require('gulp-sass');
var pixrem = require('gulp-pixrem');
var autoprefixer = require('gulp-autoprefixer');
var concatCss = require('gulp-concat-css');

gulp.task('styles', function() {
  return gulp.src('assets/**/*.scss')
    .pipe(sass({
      errLogToConsole: true,
      includePaths: ['bower_components']
    }))
    .pipe(pixrem('62,5%', {
      html: true
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(concatCss('hcas.css'))
    .pipe(gulp.dest('css'));
});

