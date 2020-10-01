module.exports = function (gulp, plugins, conf, errorHandler) {
  gulp.task(
    'img',
    function () {

      let imgSources = conf.assets.src;
      let sources = [];
      if(Array.isArray(imgSources))
      {
        for(let srcKey in imgSources)
        {
          if(imgSources.hasOwnProperty(srcKey))
          {
            sources[srcKey] = imgSources[srcKey] + ".+(png|jpeg|jpg|gif)";
          }
        }
      }

      return (
        gulp.src(sources)
          .pipe(plugins.imagemin())
          .pipe(gulp.dest(conf.assets.dist))
      );
    }
  );
};
