/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}", "index.php"],
  theme: {
    extend: { 
      colors:{
      'primary': '#02111b',
      'secondary': '#FCFCFC',
      'third': '#3F4045',
      'fourth': '#D7263D',
      'fifth': '#30292F',
    },},
  },
  plugins: [],
}

