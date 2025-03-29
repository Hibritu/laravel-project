const mix = require('laravel-mix');

// Compile JavaScript
mix.js('resources/js/app.js', 'public/js');

// Compile CSS with PostCSS (for Tailwind CSS)
mix.postCss('resources/css/app.css', 'public/css', [
   require('tailwindcss'), // Use Tailwind CSS
]);
