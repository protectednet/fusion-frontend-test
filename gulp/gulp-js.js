module.exports = function (gulp, plugins, conf, errorHandler) {
  gulp.task(
    'js',
    function (done) {
      gulp.src(
        conf.gulp.js.concat.files, {allowEmpty: true}
      )
          .pipe(plugins.concat('libraries.min.js'))
          .pipe(plugins.sourcemaps.init())
          .pipe(plugins.sourcemaps.write())
          .pipe(gulp.dest(conf.gulp.js.concat.dist));

      done();
    }
  );
};
