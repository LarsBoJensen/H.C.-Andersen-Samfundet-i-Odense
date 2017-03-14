var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('watch-default', ['styles'], function() {
  gulp.watch('assets/**/*.scss', ['styles']).on('change', reload);
  gulp.watch('assets/scripts/**/*.js', ['scripts']).on('change', reload);
});

