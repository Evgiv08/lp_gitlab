let path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const webpack = require("webpack");
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

let pathsToClean = [
    'public/js',
    'public/css'
]


module.exports = (env, options) => {
    const devMode = options.mode !== 'production';
    return {
        entry: [
            // 'webpack-dev-server/client?http://public/js/index.js',
            // 'webpack/hot/only-dev-server', // Enable hot reloading
            './src/js/index.js'
        ],
        output: {
            path: path.resolve(__dirname, './public'),
            filename: 'js/index.js',
            publicPath: ''
        },
        devServer: {
            overlay: true,
            // hot: true,
            publicPath: '',
            // contentBase: 'http://resources/view/',
            // watchContentBase: true,
            proxy: {
                '*' : {
                    target: 'http://public/',
                    changeOrigin: true,
                    // ignorePath: true,
                    // secure: false
                }
            }
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    loader: "babel-loader",
                    exclude: '/node_modules/'
                },
                {
                    test: /\.scss$/,
                    use: ExtractTextPlugin.extract({
                        fallback: "style-loader",
                        use: devMode ? [
                            {
                                loader : 'css-loader',
                                options : {
                                    sourceMap: 'true'
                                }
                            },
                            {
                                loader : 'sass-loader',
                                options : {
                                    sourceMap: 'true'
                                }
                            }] : [
                             'css-loader',
                            {
                                loader: 'postcss-loader',
                                options: {
                                    plugins: [
                                        autoprefixer({
                                            browsers:['ie >= 8', 'last 4 version']
                                        }),
                                        cssnano()
                                    ]
                                }
                            }, 'sass-loader'
                            ]
                    })
                },
                {
                    test: /\.(eot|svg|ttf|woff|woff2)$/,
                    loader : "file-loader",
                    query : {
                        name: '../fonts/[name].[ext]',
                        emitFile: false,
                        publicPath: function(url) {
                            return url.replace(/public/, '')
                        }
                    }
                },
                {
                    test: /\.(png|jpg|gif)$/,
                    loader : "file-loader",
                    query : {
                        name: '../img/[name].[ext]',
                        emitFile: false,
                        publicPath: function(url) {
                            return url.replace(/public/, '')
                        }
                    }
                }
            ]
        },
        plugins: [
            devMode ? false :  new CleanWebpackPlugin(pathsToClean),
            new ExtractTextPlugin("css/styles.css"),
            devMode ? new webpack.SourceMapDevToolPlugin({
                filename: devMode ? "[file].map" : '',
                exclude: ["/vendor/"]
            }) : false,
            new CopyWebpackPlugin([
                {from:'src/img',to:'img'},
                {from:'src/fonts',to:'fonts'},
                {from:'src/template',to:'template'}
            ])
            // new HtmlWebpackPlugin({
            //     template:  path.join(__dirname, './resources/views/site/layout/master-sample.blade.php'),
            //     filename:  path.join(__dirname, './resources/views/site/layout/master.blade.php')
            // })
        ].filter(Boolean),

        devtool : (devMode) ? 'cheap-module-eval-source-map' : false
    };
};
