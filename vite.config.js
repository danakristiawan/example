import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import commonjs from "vite-plugin-commonjs";

export default defineConfig({
    plugins: [
        commonjs({
            input: ["resources/js/app.js", "resources/css/app.css"],
            refresh: true,
        }),
    ],

    // plugins: [
    //     laravel({
    //         input: ["resources/js/app.js", "resources/css/app.css"],
    //         refresh: true,
    //     }),
    // ],
});
