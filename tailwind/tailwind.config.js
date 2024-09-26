// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				primary: {"50":"#EBF4FA","100":"#E5F0FF","200":"#E8F1FF","300":"#1C478C","400":"#262E69","500":"#235BA8","600":"#295CA9"},
				green:"#009E87",
				yellow:{"100":"#FFB81C","200":"#FDB525"},
				black :"#31333F",
				
			},
			fontSize: {
				sm: '15px',
			  },
			fontFamily: {
				body: ['Barlow', 'sans-serif'],
			},
			backgroundImage: {
				'gradient-blue': 'linear-gradient(90deg, #1C478C 0%, #262E69 100%)',
			  },

		},
		container: {
			center: true,
			padding: '1rem',
			screens: {
				sm: '600px',
				md: '728px',
				lg: '984px',
				xl: '1240px',
				'2xl': '3240px',
			  },
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),
		// require('flowbite/plugin'),
		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
