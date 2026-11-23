import { defineConfig } from "vite";
import { fileURLToPath } from "node:url";

const resolvePath = (path) => fileURLToPath(new URL(path, import.meta.url));

export default defineConfig({
    base: "./",
    server: {
        host: "localhost",
        port: 5173,
        strictPort: true,
        cors: true,
        origin: "http://localhost:5173",
    },
    build: {
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: {
                inicio: resolvePath("./src/assets/js/inicio.js"),
                hamburguesas: resolvePath("./src/assets/js/hamburguesas.js"),
                quienessomos: resolvePath("./src/assets/js/quienessomos.js"),
                ruta: resolvePath("./src/assets/js/ruta.js"),
                contacto: resolvePath("./src/assets/js/contacto.js"),
                404: resolvePath("./src/assets/js/404.js"),
                showroom: resolvePath("./src/assets/js/showroom.js"),
            },
            output: {
                entryFileNames: "assets/[name]-[hash].js",
                chunkFileNames: "assets/[name]-[hash].js",
                assetFileNames: "assets/[name]-[hash][extname]",
            },
        },
    },
});
