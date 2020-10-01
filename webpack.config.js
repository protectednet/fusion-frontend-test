module.exports = {
  mode: 'development',
  watch: false,
  watchOptions: {aggregateTimeout: 300},
  devtool: 'hidden-source-map',
  entry: {},
  output: {filename: "[name].js"},
  resolve: {extensions: ['.ts', '.js']},
  externals: {
    'jquery': "jQuery"
  },
  module: {
    rules: [{
      test: /\.(ts)$/,
      loader: require.resolve('ts-loader'),
      options: {
        compiler: 'ttypescript'
      }
    }]
  },
  plugins: []
};
