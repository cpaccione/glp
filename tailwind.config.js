module.exports = {
  purge: [
    "./*.php",
    "./template-parts/blocks/*.php",
    "./template-parts/blocks/contact_footer/*.php",
    "./template-parts/blocks/hero/*.php",
    "./template-parts/blocks/intro_slider/*.php",
    "./template-parts/blocks/slt/*.php",
    "./template-parts/blocks/srt/*.php",
    "./template-parts/blocks/video_embed/*.php",
  ],
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
