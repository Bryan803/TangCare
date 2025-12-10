import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Flat Design System Colors
                primary: '#3B82F6',    // Blue 500 - Action color
                secondary: '#10B981',  // Emerald 500 - Supporting accent
                accent: '#F59E0B',     // Amber 500 - Highlights/badges
                muted: '#F3F4F6',      // Gray 100 - Secondary backgrounds
                foreground: '#111827', // Gray 900 - Sharp text
            },
            letterSpacing: {
                tighter: '-0.02em',    // For headings
            },
        },
    },
    plugins: [],
};
