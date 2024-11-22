import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#003580", // Nile Blue
                secondary: "#E7C097", // Desert Sand
                success: "#008F11", // Palm Green
                danger: "#D9534F", // Cairo Crimson
                warning: "#FFB400", // Pharaoh Gold
                info: "#17A2B8", // Suez Cyan
                light: "#FDF3E8", // Parchment White
                dark: "#343A40",
            },
            fontFamily: {
                sans: [
                    '"Montserrat"',
                    "Figtree",
                    ...defaultTheme.fontFamily.sans,
                ],
                title: ['"Lobster"'],
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
