import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["assets/css/", "assets/js/", "assets/images/"],
            refresh: true,
        }),
    ],
});
