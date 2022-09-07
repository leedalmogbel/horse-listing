/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        lGreen: "#0A1C12",
        hGreen: "#004637"
      }
    },
  },
  plugins: [],
}
