// Parallax de los fotogramas de headerLordGrill según la posición del puntero.
// La secuencia de fotos la gestiona lordCarrusel.
export function headerLordGrill(root = document) {
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

    root.querySelectorAll(".headerLordGrill").forEach((cabecera) => {
        if (cabecera.dataset.headerLordGrillReady) return;
        cabecera.dataset.headerLordGrillReady = "true";

        cabecera.addEventListener("pointermove", (evento) => {
            if (evento.pointerType !== "mouse") return;

            const limites = cabecera.getBoundingClientRect();
            const x = ((evento.clientX - limites.left) / limites.width - 0.5) * 2;
            const y = ((evento.clientY - limites.top) / limites.height - 0.5) * 2;

            cabecera.style.setProperty("--grill-x", `${(x * 12).toFixed(1)}px`);
            cabecera.style.setProperty("--grill-y", `${(y * 8).toFixed(1)}px`);
        });

        cabecera.addEventListener("pointerleave", () => {
            cabecera.style.setProperty("--grill-x", "0px");
            cabecera.style.setProperty("--grill-y", "0px");
        });
    });
}
