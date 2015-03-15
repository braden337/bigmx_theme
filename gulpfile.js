var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var livereload = require('gulp-livereload');
var prefix = require('gulp-autoprefixer');

gulp.task('styles', function() {
  sass('sass/style.scss', {style: 'expanded', require: 'susy'})
  .pipe(prefix({browsers: ['last 5 versions'], cascade: false}))
  .pipe(gulp.dest(''))
  .pipe(livereload());
});

gulp.task('reload', function() {
  // gulp.src('index.php')
  // .pipe(livereload());
  livereload.reload();
});


gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('sass/style.scss', ['styles']);
  gulp.watch('*.php', ['reload']);
});

gulp.task('default', ['styles', 'watch']);