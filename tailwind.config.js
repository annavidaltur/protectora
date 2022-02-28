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
              },
        },        
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
