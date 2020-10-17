module.exports = ( env, arg ) => {
  function isDev(){
    return arg.mode === 'development';
  }

  var config = {
    entry: './js/index.js',
    output: {
      filename: 'bundle.js'
    },
    devtool: isDev() ? 'source-map' : 'source-map',
    module: {
      rules: [
          {
            test: /\.js$/,
            exclude: /module_nodes/,
            use: {
              loader: 'babel-loader',
              options: {
                presets: [
                  '@babel/preset-env',
                  [
                      "@babel/preset-react",
                      {
                        "pragma": "React.createElement",
                        "pragmaFrag": "React.Fragment",
                        "development": isDev()
                      }
                  ]
                ]
              }
            }
          }
      ]
    }
  };

  return config;

}




