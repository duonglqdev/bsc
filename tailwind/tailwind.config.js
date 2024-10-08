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
				primary: {
					50: '#EBF4FA',
					100: '#E5F0FF',
					200: '#E8F1FF',
					300: '#235BA8',
					400: '#295CA9',
					500: '#1C478C',
					600: '#262E69',
					700: '#1B468D',
				},
				green: '#009E87',
				yellow: { 100: '#FFB81C', 200: '#FDB525' },
				black: '#31333F',
				paragraph: '#4A5568',
				gray: { 100: '#898A8D'}
			},
			fontSize: {
				sm: '15px',
				xs: '14px',
			},
			spacing: {
				3: '10px',
			},
			fontFamily: {
				body: ['Barlow', 'sans-serif'],
				Helvetica: ['Helvetica Neue', 'sans-serif'],
			},
			backgroundImage: {
				'gradient-blue':
					'linear-gradient(90deg, #1C478C 0%, #262E69 100%)',
				'gradient-green':
					'linear-gradient(180deg, #009C88 15.25%, #2A5CAA 110.41%, #2A5CAA 111.37%)',
				'gradient-blue-50':
					'linear-gradient(270deg, #EBF4FA 0%, #F3FBFE 100%)',
					'gradient-blue-100':
					'linear-gradient(90deg, rgba(62, 127, 231, 0.1) 0%, rgba(5, 48, 118, 0.1) 100%)',
				'gradient-banner':
					'linear-gradient(251.37deg, rgba(27, 70, 141, 0) 21.94%, rgba(34, 52, 114, 0.738462) 58.49%, #252D69 98.08%)',
				'gradient-blue-to-top':
					'linear-gradient(180deg, #FFF 1.59%, #E5F0FF 29.32%)',
				'gradient-blue-to-bottom':
					'linear-gradient(357.62deg, rgba(180, 208, 255, 0) -45.93%, rgba(180, 208, 255, 0.1) 30.67%, #6DB0ED 109.57%), ' +
					'linear-gradient(351.48deg, #6DB0ED -71.46%, rgba(180, 208, 255, 0.1) 10.05%, rgba(180, 208, 255, 0) 89.17%)',
				'gradient-blue-to-bottom-50':
					'linear-gradient(180deg, #ECF5FB 4.67%, #FFF 43.73%)',
			},
			boxShadow: {
				header: '0px 4px 10px 0px #0000000D',
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
				'2xl': '1340px',
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
		require('flowbite/plugin'),
		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
