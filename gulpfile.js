var gulp = require('gulp'),

    minifyCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),

    minifyJS = require('gulp-uglify'),

    partsHTML = require('gulp-rigger'),

    path = {
      build: {
          css: 'css/',
          js: 'js/'
      },
      src: { //Пути откуда брать исходники
          css: 'src/scss/*.scss',
          js: 'src/js/*.js'
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
  gulp.src(path.src.js)
  .pipe(minifyJS())
  .pipe(rename({suffix: '.min'}))
.pipe(gulp.dest(path.build.js));  
});

gulp.task('build:html', function(){
});
