import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */

const plugin = require("tailwindcss/plugin");

// Rotate X and Y utilities
const rotateXY = plugin(function ({ addUtilities }) {
    addUtilities({
        ".rotate-xy": {
            transform: "rotateX(70deg) rotatey(10deg)",
        },
    });
});

export default {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontWeight: {
                black: "1000",
            },
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                xl: "0 0 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)",
            },
        },
    },
    plugins: [rotateXY],
};
