const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {

  mode: 'development', //development or production

  entry: {
    'index': [
      path.resolve(__dirname, 'src/assets/script/index.js')
    ],
  },

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