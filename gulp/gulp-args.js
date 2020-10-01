module.exports = function (gulp, conf, errorHandler) {
  let argv = require('yargs').argv;

  gulp.task(
    'args',
    function (done) {
      // Get port number
      if(typeof argv.port !== "undefined")
      {
        conf.cubex.port = argv.port;
      }

      // Get base path
      if(typeof argv.base !== "undefined")
      {
        conf.cubex.base = argv.base;
      }

      // Get proxy port number
      if(typeof argv.proxy_port !== "undefined")
      {
        conf.cubex.proxyPort = argv.proxy_port;
      }

      if(typeof argv.env !== "undefined")
      {
        if(argv.env === "dev" || argv.env === "test" || argv.env === "prod")
        {
          conf['env'] = argv.env;
        }
      }

      done();
    }
  );
};
