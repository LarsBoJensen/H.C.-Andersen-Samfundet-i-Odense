// Include Gulp & Tools We'll Use
var gulp = require('gulp'),
  shell  = require('gulp-shell');

// Build styleguide.
gulp.task('styleguide', shell.task([
    'kss-node --config <%= pathToConfig %>'
  ], {
    templateData: {
      pathToConfig: 'assets/kss-config.json'
    }
  }
));