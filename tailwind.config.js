/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('flowbite/plugin'),
        require('tailwind-scrollbar')({ nocompatible: true }),
    ],
}

