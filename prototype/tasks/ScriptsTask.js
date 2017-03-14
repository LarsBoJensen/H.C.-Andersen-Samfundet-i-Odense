var gulp = require('gulp');

gulp.task('scripts', function() {
  gulp.src([
    'assets/scripts/**/*.js'])
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'));
});
