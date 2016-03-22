'use strict';

/* ------------------------------------------------------------------------------------------ */
/* Dependencies                                                                                    */
/* ------------------------------------------------------------------------------------------ */

var gulp = require('gulp');
var resolveDependencies = require('gulp-resolve-dependencies');
var concat = require('gulp-concat');
var args = require('yargs').argv;
var browserSync = require('browser-sync');
var gulpIf = require('gulp-if');
var minifyCSS = require('gulp-minify-css');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var postcss = require('gulp-postcss');
var stylus = require('gulp-stylus');
var reload = browserSync.reload;

/* ------------------------------------------------------------------------------------------ */
/* CSS Processors                                                                             */
/* ------------------------------------------------------------------------------------------ */

var processors = [
  require('postcss-import')({
    path: [
      'node_modules/normalize.css/',
      'styl/flex-embed.css/'
    ]
  }),
  require('postcss-custom-media')(),
  require('postcss-custom-properties')(),
  require('postcss-calc')(),
  require('autoprefixer-core')({
    browsers: ['last 3 versions'],
    cascade: false
  })
];

// var isProduction = args.type === 'production';
var isProduction = true;


/* ------------------------------------------------------------------------------------------ */
/* Paths                                                                                      */
/* ------------------------------------------------------------------------------------------ */

var cssPaths = {
  src: 'styl/style.styl',
  dest: 'css',
  stylusAll: ["**/*.styl"]
};


/* ------------------------------------------------------------------------------------------ */
/* TASKS                                                                                      */
/* ------------------------------------------------------------------------------------------ */


gulp.task('styles', function() {

  return gulp.src(cssPaths.src)
    .pipe(plumber({
      errorHandler: notify.onError(function(error) {
        console.log(error.toString());
        return 'Error in "styles" task';
      })
    }))
    .pipe(stylus({}))
    .pipe(postcss(processors))
    .pipe(gulpIf(isProduction, minifyCSS()))
    .pipe(gulp.dest(cssPaths.dest))
    .pipe(reload({stream:true}));

});

gulp.task('watch', function() {
  gulp.watch("**/*.js", reload);
  gulp.watch("*.html", reload);
  gulp.watch(cssPaths.stylusAll, ['styles']);
});

gulp.task('browser-sync', function() {
  browserSync({
    browser: 'google chrome',
    proxy: "egghunt.dev",
    host: "localhost",
  });
});

gulp.task("default", ["watch", "browser-sync"]);
