/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/**/*.js",
    "./node_modules/flowbite/**/*.js",
    "./layouts/**/*.html", 
    "./content/**/*.md", 
    "./content/**/*.html", 
    "./src/**/*.js",
  ],
  theme: {
    extend: {
      screens: {
        'xs': '100px',
        // => @media (min-width: 640px) { ... }
      },
      colors: {
        '7eleven':'#007351',
        '7elven-gray':'#F1F1F1'
      },
      height: ({ theme }) => ({
        'big':'550px',
        'xbig':'650px'
      }),
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
