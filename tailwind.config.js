/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{html,htm,js}'],
	theme: {
		container: {
			padding: 'var(--container-gap)',
			center: true,
			screens: {
				sm: '100%',
				md: '100%',
				lg: '100%',
				xl: '100%',
			},
		},
		spacing: {
			0: '0',
			4: '.04rem',
			6: '.06rem',
			8: '.08rem',
			10: '.1rem',
			12: '.12rem',
			14: '.14rem',
			16: '.16rem',
			20: '.2rem',
			24: '.24rem',
			32: '.32rem',
			42: '.42rem',
			48: '.48rem',
			56: '.56rem',
		},
		borderWidth: {
			DEFAULT: '1px',
			1: '1px',
			2: '2px',
		},
		extend: {
			fontSize: {
				s: 'var(--txt-s)',
				m: 'var(--txt-m)',
				l: 'var(--txt-l)',
				18: '.18rem',
				20: '.2rem',
				24: '.24rem',
			},
			lineHeight: {},
			colors: {
				black: 'var(--black)',
				white: 'var(--white)',
				'dark-gray': 'var(--dark-gray)',
				gray: 'var(--gray)',
				'light-gray': 'var(--light-gray)',
				accent: 'var(--accent)',
				'dark-main': 'var(--dark-main)',
				main: 'var(--main)',
				'light-main': 'var(--light-main)',
			},

			borderRadius: {
				DEFAULT: '50%',
				sm: '.1rem',
				md: '.2rem',
				40: '.4rem',
			},
		},
	},
	plugins: [],
}
