/** @type {import('tailwindcss').Config} */

module.exports = {
	content: [
		'./assets/**/*.{php,html,js}',
		'template-parts/**/*.{php,html,js}',
	],
	theme: {
		extend: {
			colors: {
				/* Site Colors */
				bistre: "#3f261a",
				camelian: "#b20e18",
				calcite: "#b55a18",
				"sand-1": "#f0e6d9",
				"sand-2": "#f8f4ee",
				"sand-3": "#fbf9f6",
				/* UBC Colors */
				ubc: {
					primary: "#002145",
					grey: "#2f5d7c",
					blue: "#0055b7",
					"grey-1": "#2f5d7c",
					"grey-2": "#5e869f",
					"grey-3": "#98b2c3",
					"grey-4": "#c3d0db",
					"blue-1": "#0055b7",
					"blue-2": "#00a7e1",
					"blue-3": "#40b4e5",
					"blue-4": "#6ec4e8",
				},
				// General Colors
				warning: "#f1dc54",
				error: "#c7333c",
				success: "#6fca93",
			},

			fontFamily: {
				body: ['"Open Sans"', "sans-serif"],
			},
		},
	},
	plugins: [],
};
