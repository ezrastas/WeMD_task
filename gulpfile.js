var gulp = require('gulp'),

    minifyCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),

    partsHTML = require('gulp-rigger'),

    path = {
      build: {
          css: 'css/'
      },
      src: { //Пути откуда брать исходники
          html: '*.html',
          js: 'js/js/*.*',
          css: 'css/scss/*.scss'
      }
};
 
gulp.task('build:css', function(){
  gulp.src(path.src.css)
    .pipe(concat('main.scss'))
    .pipe(sass())
    .pipe(minifyCSS())
    .pipe(rename({suffix: '.min'}))
.pipe(gulp.dest(path.build.css));
});

gulp.task('build:js', function(){
});

gulp.task('build:html', function(){
});
