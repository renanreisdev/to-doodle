/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ['Rubik', 'sans-serif'],
        },
        extend: {
            colors: {
                primary: "#1F2833",
                secondary: "#66FCF1",
                secondary2: "#45A29E",
                gray_td: {
                    100: "#EBF7F7",
                    200: "#EBECED",
                    300: "#C5C6C7",
                },
                white_td: "#F2F5F7",
                subtitles: "#C5C6C7"
            },
            backgroundImage: {
                'circle-progress': "conic-gradient(#66FCF1 var(--deg-progress), #F2F5F7 0deg)",
            }
        },
    },
    plugins: [],
}

