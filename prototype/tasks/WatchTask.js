var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;


gulp.task('watch', ['styles', 'browserSync'], function() {
  gulp.watch('assets/**/*.scss', ['styles']);
  gulp.watch('assets/js/**/*.js', ['scripts']).on('change', reload);
  gulp.watch('css/*.css').on('change', reload);
});

