module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/js/*.jsx",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "cuspat-white": "#FFFAE6",
                "cuspat-green": "#155438",
                "cuspat-orange": "#FBAA0B",
                "cuspat-blue": "#1A2A42",
                "cuspat-pastel": "#B4CABF",
            },
            fontFamily: {
                Lato: ["Lato"],
                spartan: ["League Spartan"],
                caveat_Brush: ["Caveat Brush"],
                fredoka: ["Fredoka"],
            },
            boxShadow: {
                custom: ["0px 5px 15px 0px rgba(0, 0, 0, 0.15)"],
                navbot: ["0px 5px 20px 0px rgba(0, 0, 0, 0.15)"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
