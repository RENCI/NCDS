var gulp = require('gulp');
var sass = require('gulp-sass');

//style paths

var sassFiles = 'css/*.scss',
    cssDest = 'css/';

gulp.task('css', async () => {
    gulp.src(sassFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});


