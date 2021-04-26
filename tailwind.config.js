module.exports = {
  mode: 'jit',
  purge: [
      './themes/site/**/*.ss',
      './themes/site/**/*.js',
      './themes/site/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
        sans: ['Helvetica', 'arial', 'sans-serif'],
        serif: ['Georgia', 'serif'],
    },
    container: {
        center: true,
        padding: '1.25rem',
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/typography'),
  ],
}
