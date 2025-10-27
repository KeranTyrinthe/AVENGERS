/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#FFFFFF',
          white: '#FFFFFF',
        },
        blue: {
          DEFAULT: '#1E88E5',
          primary: '#1E88E5',
          light: '#E3F2FD',
          dark: '#1565C0',
        },
        yellow: {
          DEFAULT: '#FFC107',
          primary: '#FFC107',
          light: '#FFECB3',
          dark: '#FFA000',
        },
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        roboto: ['Roboto', 'sans-serif'],
        sans: ['Poppins', 'Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
