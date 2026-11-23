// Importamos el archivo principal de estilos.
import "../scss/inicio.scss";

import "./resources/_global.js";

import { lordCarrusel } from "./resources/_lordCarrusel.js";
import { sectLordFaq } from "./resources/_sectLordFaq.js";

document.addEventListener("DOMContentLoaded", () => {
    lordCarrusel();
    sectLordFaq();
});
