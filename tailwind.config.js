/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    safelist: [
        'w-11/12',
        'w-10/12',
        'w-9/12',
        'w-8/12',
        'w-7/12',
        'w-6/12',
        'w-5/12',
        'w-4/12',
        'w-3/12',
        'w-2/12',
        'w-1/12',
        'whitespace-pre',
        'text-green-800'
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
