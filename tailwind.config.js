/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors');
const { gray } = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        fontFamily: {
            'popi': ['Poppins']
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'nikkei': '#211915',
            gray: colors.gray,
            white: colors.white,
            blue: colors.blue,
            red: colors.red,
            white: colors.white
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
