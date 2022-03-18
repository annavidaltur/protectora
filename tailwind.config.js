const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {            
                'broccoli': {
                    '50': '#E2EAD9',
                    '100': '#D8E3CB',
                    '200': '#C4D4B1',
                    '300': '#B0C697',
                    '400': '#9CB77C',
                    '500': '#88A962',
                    '600': '#6C884B',
                    '700': '#4F6437',
                    '800': '#324023',
                    '900': '#161C0F'
                },
                'millbrook': {
                    '50': '#BF9286',
                    '100': '#B78679',
                    '200': '#A96E5E',
                    '300': '#915C4D',
                    '400': '#774B3F',
                    '500': '#5C3A31',
                    '600': '#37231E',
                    '700': '#130C0A',
                    '800': '#000000',
                    '900': '#000000'
                },
                'matrix': {
                    '50': '#E6D1CB',
                    '100': '#DFC4BD',
                    '200': '#D2ACA1',
                    '300': '#C59486',
                    '400': '#B77B6A',
                    '500': '#A86451',
                    '600': '#824D3F',
                    '700': '#5C372D',
                    '800': '#36201A',
                    '900': '#110A08'
                },
                'woodland': {
                    '50': '#A3C17E',
                    '100': '#99BB70',
                    '200': '#85AE55',
                    '300': '#709346',
                    '400': '#5B7839',
                    '500': '#465C2C',
                    '600': '#29361A',
                    '700': '#0C1008',
                    '800': '#000000',
                    '900': '#000000'
                },
            },
        },        
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
