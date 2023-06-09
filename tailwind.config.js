/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        screens: {
            'xs': '140px',
            // => @media (min-width: 640px) { ... }

            'sm': '640px',
            // => @media (min-width: 640px) { ... }

            'md': '768px',
            // => @media (min-width: 768px) { ... }

            'lg': '1024px',
            // => @media (min-width: 1024px) { ... }

            'xl': '1280px',
            // => @media (min-width: 1280px) { ... }

            '2xl': '1536px',
            // => @media (min-width: 1536px) { ... }
          },
        // colors: {
        //     'dark-mode-background': '#323232',
        //     'dark-mode-object': '#4a4a4c',
        //   },
        extend: {
            boxShadow: {'box-shadow': '0 4px 30px rgba(0, 0, 0, 0.1)',}
        },

    },
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
        require('flowbite/plugin')
    ],
}

