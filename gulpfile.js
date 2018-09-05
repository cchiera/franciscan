//gulpfile.js

var gulp = require('gulp');
var sass = require('gulp-sass');
let cleanCSS = require('gulp-clean-css');

//style paths
var sassFiles = 'assets/styles/sass/**/*.scss',
    cssDest = 'assets/styles/css/';

gulp.task('styles', function(){
    gulp.src(sassFiles)
        .pipe(sass().on('error', sass.logError))
	    .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest(cssDest));
});

gulp.task('watch',function() {
    gulp.watch(sassFiles,['styles']);
});
// end