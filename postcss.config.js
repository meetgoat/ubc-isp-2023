// postcss.config.js
const postcssCustomMedia = require('postcss-custom-media');

module.exports = {
	plugins: [
		require('postcss-preset-env'), 
		postcssCustomMedia()
	],
};
