var gulp = require('gulp');
var browserSync = require('browser-sync');

var config = null; 
try{
config = require('../config/config_dev.json');
}catch(e){
}

if(config == null){
 config = require('../config/config.json');
}


gulp.task('browserSync', function() {
  browserSync({
    server: false,
    notify: true,
    proxy: config.browserSync.url,
    browser: config.browserSync.browser
  });
});

