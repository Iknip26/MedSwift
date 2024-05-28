/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "med" : "#333399",
        "swift" : "#C800CC",
        "nav_warna":"#9999CC",
        "ping":"#F26DD433",
        "biru" :"#82D5FF33"
      },
      height:{
        "716": "660px",
        "600": "500px"
      },
      width:{
        "745" : "670px",
        "400" : "500px"
      },
      margin: {
        "120" : '610px',
        "98" : '98px'
      }
    },
  },
  plugins: [],
}