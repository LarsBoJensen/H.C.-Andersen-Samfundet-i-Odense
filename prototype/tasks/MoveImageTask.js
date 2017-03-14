var gulp = require('gulp');

gulp.task('move_images', function () {
  gulp.src('./bower_components/leaflet/dist/images/*')
    .pipe(gulp.dest('../docroot/images'));

  return gulp.src('./assets/images/*')
    .pipe(gulp.dest('../docroot/images'));
});

