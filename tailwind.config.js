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
        'darkblue': '#193241',
        'borange': '#F97847',
        'lightgray': '#F7F7F7'
      },
      height: {
        '0': '2px'
      }
    },
  },
  plugins: [],
}

