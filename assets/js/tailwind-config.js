// Extend Tailwind config to use the Google Font
tailwind.config = {
    theme: {
        screens: {
            'xs': '240px',
            'xsm': '480px',
            'sm': '640px',
            'md': '768px',
            'lg': '1025px',
            'xl': '1280px',
            '2xl': '1536px',

        },
        // colors: {
        //     'Pink': '#ff4980',
        // },
        extend: {
            fontFamily: {
                roboto: ['Roboto', 'sans-serif'],
            },
        },
    },
};