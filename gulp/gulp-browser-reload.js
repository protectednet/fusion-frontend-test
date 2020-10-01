module.exports = function (gulp, browserSync, conf, errorHandler) {
  gulp.task(
    'browser-reload',
    function (done) {
      browserSync.reload();
      done();
    }
  );
};
