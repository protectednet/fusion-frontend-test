module.exports = function (gulp, browserSync, conf, errorHandler) {
  gulp.task(
    'browser-sync-proxy',
    function (done) {
      browserSync.init(
        {
          proxy: "localhost:" + conf.cubex.port,
          port:  conf.cubex.proxyPort,
          index: "/index.php"
        }
      );

      done();
    }
  );
};
