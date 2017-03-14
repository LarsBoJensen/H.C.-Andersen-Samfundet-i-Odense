var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var pixrem = require('gulp-pixrem');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');
var shell = require('gulp-shell');
var reload = browserSync.reload;
var requireDir = require('require-dir');
var tasks = requireDir('./tasks');

gulp.task('default', ['watch']);
