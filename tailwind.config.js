module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
  content: [
    "./node_modules/flowbite/**/*.js"
],
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('flowbite/plugin')
  ]
}
