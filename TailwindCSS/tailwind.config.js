/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../index.php"],
  	[
        "../node_modules/flowbite/**/*.js"
   	 ]
  theme: {
   extend:{
    colors:{
      'primary': '#02111b',
    },
   },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
