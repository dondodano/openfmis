# Installation of tailwindcss
go to https://tailwindcss.com/docs/guides/laravel

on terminal (run)
    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init -p

on tailwind.config.js (copy)
    module.exports = {
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
        ],
        theme: {
            extend: {},
        },
        plugins: [],
    }

on resources/css/app.css (copy)
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

on terminal (run)
    npm install
    npm run dev


on reouces/views/welcome.blade.php (copy)
    @vite('resources/css/app.css')
