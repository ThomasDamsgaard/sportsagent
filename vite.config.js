import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import fs from "fs";
const host = "sportsagent.test";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
            valetTls: "sportsagent.test",
        }),
    ],
    server: {
        host,
        hmr: { host },
        https: {
            key: fs.readFileSync(
                `/Users/thomasdamsgaard/.config/valet/Certificates/${host}.key`
            ),
            cert: fs.readFileSync(
                `/Users/thomasdamsgaard/.config/valet/Certificates/${host}.crt`
            ),
        },
    },
});
