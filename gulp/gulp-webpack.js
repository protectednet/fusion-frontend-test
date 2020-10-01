module.exports = function (gulp, plugins, conf, errorHandler) {
  let webpackConfig = require("./../webpack.config.js");
  let glob = require("glob");
  let webpackCompiler = require('webpack');
  let webpackStream = require('webpack-stream');

  gulp.task(
    'webpack',
    function (done)
    {
      let gulpSrcCount = 0;
      let webpackSources = conf.assets.src;
      let sources = [];
      if(Array.isArray(webpackSources))
      {
        for(let srcKey in webpackSources)
        {
          if(webpackSources.hasOwnProperty(srcKey))
          {
            sources.push(webpackSources[srcKey] + ".c.ts");
            sources.push(webpackSources[srcKey] + ".b.ts");
          }
        }
      }

      for(let srcKey in sources)
      {
        if(sources.hasOwnProperty(srcKey))
        {
          let src = sources[srcKey];

          glob(
            src,
            function (er, files) {

              for(let key in files)
              {
                if(files.hasOwnProperty(key))
                {
                  let file = files[key];
                  let src = file.split('.ts')[0];
                  let dest = file.replace("/" + conf.assets.directoryName, "");
                  let pathChunks = dest.split('/');

                  // filename with .ts extension
                  let filename = pathChunks[pathChunks.length - 1];

                  // remove the file from the path
                  dest = dest
                    .replace(filename, '')
                    .replace('.ts', '.js')
                    .replace('./src/', '');

                  // remove the extension from the filename
                  filename = filename.split('.ts')[0];
                  webpackConfig.entry[dest + filename] = src + ".ts";

                }
              }

              if (gulpSrcCount === webpackSources.length )
              {
                if (!(Object.keys(webpackConfig.entry).length === 0 && webpackConfig.entry.constructor === Object))
                {
                  gulp.src(webpackSources)
                    .pipe(
                      webpackStream(
                        webpackConfig,
                        webpackCompiler
                      )
                        .on('error', errorHandler)
                    )
                    .pipe(gulp.dest(conf.assets.dist));
                }
                else
                {
                  console.log('no local ts components found!');
                }

                done();
              }

              gulpSrcCount++;
            }
          );
        }
      }
    }
  );
};
