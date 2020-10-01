module.exports = function (gulp, browserSync, conf, errorHandler) {
  gulp.task(
    'browser-sync',
    function (done) {
      browserSync.init(
        {
          server: {
            baseDir: conf.cubex.base,
            port:    conf.cubex.port
          }
        }
      );

      done();
    }
  );
};
