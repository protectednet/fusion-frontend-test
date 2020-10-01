module.exports = function (gulp, browserSync, conf, errorHandler) {
  gulp.task(
    'watcher',
    function () {
      let watcherSources = conf.assets.src;
      let jsWatchSrc = [];
      let scssWatchSrc = [];
      let tsWatchSrc = [];
      let fontWatchSrc = [];
      let markupWatchSrc = [];

      if(Array.isArray(watcherSources))
      {
        for(let srcKey in watcherSources)
        {
          if(watcherSources.hasOwnProperty(srcKey))
          {
            jsWatchSrc[srcKey] = watcherSources[srcKey] + ".+(js)";
            scssWatchSrc[srcKey] = watcherSources[srcKey] + ".+(scss)";
            tsWatchSrc[srcKey] = watcherSources[srcKey] + ".+(c.ts)";
            fontWatchSrc[srcKey] = watcherSources[srcKey] + ".+(eot|woff2|woff|ttf|svg)";
            markupWatchSrc[srcKey] = watcherSources[srcKey] + ".+(phtml)";
          }
        }
      }

      // Javascript task watcher
      gulp.watch(
        jsWatchSrc,
        gulp.series('js', 'browser-reload')
      ).on('error', errorHandler);

      // Styling task watcher
      gulp.watch(
        scssWatchSrc,
        gulp.series('scss', 'global-scss', 'browser-reload')
      ).on('error', errorHandler);

      // Font task watcher
      gulp.watch(
        fontWatchSrc,
        gulp.series('font', 'browser-reload')
      ).on('error', errorHandler);

      // Webpack task watcher
      gulp.watch(
        tsWatchSrc,
        gulp.series('webpack', 'browser-reload')
      ).on('error', errorHandler);

      // Template task watcher
      gulp.watch(
        markupWatchSrc,
        gulp.series('browser-reload')
      ).on('error', errorHandler);
    }
  )
};
