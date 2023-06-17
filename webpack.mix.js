const mix = require( 'laravel-mix' );

mix.webpackConfig( {
	stats: {
		children: true,
	},
} );

mix.postCss( 'assets/css/main.css', 'css' );
mix.postCss( 'assets/css/editor.css', 'css' );

mix.js( 'assets/js/main.js', 'js' );
mix.setPublicPath( 'dist' );
