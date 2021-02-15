module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      height: {
        670: '42rem',
      },
      fontFamily: {
        'avant': ['itc-avant-garde-gothic-pro', 'sans-serif'],
        'mont': ['Montserrat', 'sans-serif'],
      },
      colors: {
        gray: {
          dark: '#414042',
          DEFAULT: '#A7A9AC',
          light: '#f1f2f2',
        },
        yellow: {
          DEFAULT: '#fdb71c',
        },
      },
      
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
