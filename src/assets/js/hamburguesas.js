import "../scss/hamburguesas.scss";
import "./resources/_global.js";

import { lordCarrusel } from "./resources/_lordCarrusel.js";
import { headerLordGrill } from "./resources/_headerLordGrill.js";

document.addEventListener("DOMContentLoaded", () => {
    lordCarrusel();
    headerLordGrill();
});
