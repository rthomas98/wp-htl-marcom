const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './theme/**/*.php',
    './theme/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
        heading: ['Heebo', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'cod-gray': '#141414',
        'pippin': '#FFE8E5',
        'mine-shaft': '#222222',
        'gallery': '#F0F0F0',
        'white': '#FFFFFF',
      },
      animation: {
        'loop-vertically-top': 'loop-vertically-top 25s linear infinite',
        'loop-vertically-bottom': 'loop-vertically-bottom 25s linear infinite',
      },
      keyframes: {
        'loop-vertically-top': {
          '0%': { transform: 'translateY(0)' },
          '100%': { transform: 'translateY(-50%)' },
        },
        'loop-vertically-bottom': {
          '0%': { transform: 'translateY(-50%)' },
          '100%': { transform: 'translateY(0)' },
        },
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
