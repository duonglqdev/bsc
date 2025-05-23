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
				gray: { 100: '#898A8D' },
			},
			fontSize: {
				sm: '15px',
				xs: '14px',
				xxs: '12px',
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
				'gradient-blue-150':
					'linear-gradient(194deg, #F4FBFE 17%, #E1F0FA 94.99%)',
				'gradient-blue-200':
					'linear-gradient(194deg, #E5F3FF 23.63%, #CCE3FF 96.18%)',
				'gradient-blue-250':
					'linear-gradient(270deg, #EAF8FE 0%, #F3FAFF 100%)',
				'gradient-blue-300':
					'linear-gradient(180deg, #E5F0FF 14.17%, #FFF 67.74%)',
				'gradient-blue-350':
					'linear-gradient(180deg, #E5F0FF 40.35%, #FFF 89.76%)',
				'gradient-blue-400':
					'linear-gradient(255deg, #F4FBFE 24.06%, #E1F0FA 76.4%)',
				'gradient-blue-450':
					'linear-gradient(270deg, rgba(255, 255, 255, 0.00) 0%, #D9F2FF 34.72%)',
				'gradient-blue-500':
					'linear-gradient(270deg, rgba(255, 255, 255, 0.00) 0%, #D9F2FF 66.97%)',
				'gradient-blue-550':
					'linear-gradient(270deg, #F3FAFF 0%, #EAF8FE 100%), linear-gradient(270deg, #EBF4FA 0%, #F3FBFE 100%)',
				'gradient-blue-600':
					'linear-gradient(90deg, #265CAB 0%, #2681E0 100%)',
				'gradient-banner':
					'linear-gradient(251deg, rgba(27, 70, 141, 0.00) 8.87%, rgba(34, 52, 114, 0.74) 77.96%, #252D69 98.08%)',
				'gradient-banner-bold':
					'linear-gradient(270deg, rgba(27, 70, 141, 0) 28.22%, #252D69 98.45%)',
				'gradient-blue-to-top':
					'linear-gradient(180deg, #FFF 1.59%, #E5F0FF 29.32%)',
				'gradient-blue-to-bottom':
					'linear-gradient(357.62deg, rgba(180, 208, 255, 0) -45.93%, rgba(180, 208, 255, 0.1) 30.67%, #6DB0ED 109.57%), ' +
					'linear-gradient(351.48deg, #6DB0ED -71.46%, rgba(180, 208, 255, 0.1) 10.05%, rgba(180, 208, 255, 0) 89.17%)',
				'gradient-blue-to-bottom-50':
					'linear-gradient(180deg, #ECF5FB 4.67%, #FFF 43.73%)',
				'gradient-blue-to-bottom-100':
					'linear-gradient(270deg, #DEF1FF 0%, #DBF5FF 100%)',
				'gradient-blue-to-bottom-150':
					'linear-gradient(180deg, #ECF5FB 42.92%, #FFF 94.53%)',
				'gradient-blue-to-right-50':
					'linear-gradient(265deg, rgba(27, 70, 141, 0) 4.02%, rgba(37, 45, 105, 0.8) 95.98%)',
				'gradient-blue-to-right-100':
					'linear-gradient(90deg, #D4EDFF 0%, #EFF9FF 91.93%)',
				'gradient-blue-to-right-150':
					'linear-gradient(270deg, rgba(31, 61, 98, 0.00) 18.41%, #123781 100%)',
				'gradient-white-to-top-50':
					'linear-gradient(180deg, rgba(255, 255, 255, 0.00) 41.68%, rgba(229, 240, 255, 0.60) 100%)',
				'gradient-yellow-50':
					'linear-gradient(265deg, #FFE79B 5.95%, #FFDB8D 98.96%)',
				'gradient-sliver-50':
					'linear-gradient(264deg, #F6F6F6 7.99%, #E6E6E6 94.22%)',
				'gradient-sliver-100':
					'linear-gradient(264deg, #DCDCDC 7.4%, #DCE2E4 95.54%)',
				'gradient-bronze-50':
					'linear-gradient(264deg, #D8A787 5.35%, #EDC4A3 93.71%)',
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
				md: '991px',
				lg: '1140px',
				xl: '1240px',
				'2xl': '1372px',
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
		require('flowbite/plugin')({
			datatables: true,
		}),
		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
