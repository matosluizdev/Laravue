/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/js/**/*.vue",
      ],
  content: [],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],

}

