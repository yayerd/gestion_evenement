/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./ressources/**/*/blade.php",
    "./ressources/**/*.js",
    "./ressources/**/**.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}


// tailwind.config.js
module.exports = {
  // ...
  plugins: [
    // ...
    require('@tailwindcss/forms'),
  ],
}

module.exports = {
  // ...
  plugins: [
    // ...
    require('@tailwindcss/aspect-ratio'),
  ],
}