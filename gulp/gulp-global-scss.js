module.exports = function (gulp, plugins, conf, errorHandler) {
  let flexibility = require('postcss-flexibility');

  gulp.task(
    'global-scss',
    function (done)
    {
      gulp.src('./src/_assets/styles/global.scss', {"allowEmpty": true})
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.sassGlob())
        .pipe(
          plugins
            .sass({includePaths: conf.gulp.scss.inputPaths})
            .on('error', errorHandler)
        )
        .pipe(
          plugins.rename(
            function (path) {
              path.basename += ".min";
            }
          )
        )
        .pipe(plugins.postcss([ flexibility() ]))
        .pipe(plugins.sourcemaps.write())
        .pipe(gulp.dest("./resources/styles/"))
        .on('error', errorHandler);

      done();
    }
  );
};
