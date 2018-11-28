const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {

  mode: 'development', //development or production

  entry: './src/script/index.js',

  output: {
      path: path.resolve(__dirname, 'dist'),
      filename: 'index.js'
  },
  
  module: {
    // babel-loaderの設定
    rules: [
    {
      test: /\.js$/,
      use: [
        {
        loader: 'babel-loader',
        options: {
          presets: [
          '@babel/preset-env'
          ]
        }
        }
      ],
      exclude: /node_modules/,
    },

    {
      test: /\.(sa|sc|c)ss$/,
      use: [
        MiniCssExtractPlugin.loader,
        {
          loader: 'css-loader',
          options: {
            url: false,
            minimize: true,
          }
        },
        {
          loader: 'sass-loader'
        }
      ]
    }
  ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'style.css',
    })
  ]
};