var gulp = require('gulp');
var ts = require('gulp-typescript');
 
gulp.task('tscripts', function() {
   var tsResult = gulp.src('src/**/*.ts')
    .pipe(ts({
        noImplicitAny: true,
        out: 'output.js'
      }));
  return tsResult.js.pipe(gulp.dest('built/local'));
});
