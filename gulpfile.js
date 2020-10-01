//////////////////////
// GLOBAL VARIABLES
//////////////////////

let gulp = require('gulp');
let gutil = require("gulp-util");
let yaml = require('js-yaml');
let fs = require('fs');
let conf = yaml.load(fs.readFileSync('./gulp/config.yml', 'utf8'));
let browserSync = require('browser-sync').create();
let plugins = require('gulp-load-plugins')();
let exec = require('child_process').exec;
plugins.sass.compiler = require('dart-sass');

//////////////////////
// INDIVIDUAL TASKS
//////////////////////

require('./gulp/gulp-args')(gulp, conf, errorHandler);
require('./gulp/gulp-js')(gulp, plugins, conf, errorHandler);
require('./gulp/gulp-global-scss')(gulp, plugins, conf, errorHandler);
require('./gulp/gulp-scss')(gulp, plugins, conf, errorHandler);
require('./gulp/gulp-font')(gulp, plugins, conf, errorHandler);
require('./gulp/gulp-webpack')(gulp, plugins, conf, errorHandler);
require('./gulp/gulp-img')(gulp, plugins, conf, errorHandler);
require('./gulp/gulp-cubex-serve')(gulp, exec, conf, errorHandler);
require('./gulp/gulp-watcher')(gulp, browserSync, conf, errorHandler);
require('./gulp/gulp-browser-sync')(gulp, browserSync, conf, errorHandler);
require('./gulp/gulp-browser-reload')(gulp, browserSync, conf, errorHandler);
require('./gulp/gulp-browser-sync-proxy')(gulp, browserSync, conf, errorHandler);

//////////////////////////////
// FULL GULP TASKS
//////////////////////////////

// # gulp - compiles everything once
gulp.task('default', gulp.series('args', gulp.parallel('js', 'font', 'global-scss', 'scss', 'webpack')));

// # gulp watch - compiles everything and then watch's all assets for changes
gulp.task('watch', gulp.parallel('default', 'watcher'));

// # gulp cubex - Compile then start cubex server
gulp.task('cubex', gulp.series('default', 'cubex-serve'));

// # gulp cubex-watch - Compile then start cubex server and watch for changes
gulp.task('cubex-watch', gulp.series('cubex-serve', 'watch'));

// # gulp cubex-reload - Same as above except will reload the browser after each compile
gulp.task('cubex-reload', gulp.series('cubex-serve', 'browser-sync-proxy', 'watch'));

//////////////////////////////
// Error Handler Functions
//////////////////////////////

function readTextFile() {
  let data = null;

  fs.readFile(
    conf.gulp.errorLog,
    "utf-8",
    function (err, _data) { data = _data; }
  );

  return data;
}

function logError(origin, log) {
  let src = require('stream').Readable({objectMode: true});

  src._read = function () {
    console.log('//////////////////// ERROR ///////////////////');
    this.push(
      new gutil.File(
        {
          cwd:      "",
          base:     "",
          path:     conf.gulp.errorLog,
          contents: new Buffer(log)
        }
      )
    );
    this.push(null);
  };

  return src
}

function errorHandler(error) {
  logError(readTextFile(), JSON.stringify(error)).pipe(gulp.dest('./'));
  return true;
}
