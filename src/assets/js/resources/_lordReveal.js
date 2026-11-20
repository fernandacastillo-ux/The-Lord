// Hace aparecer las secciones de main al entrar en pantalla.
// Sin JS o con movimiento reducido el contenido se muestra directamente.
export function lordReveal(root = document) {
    const secciones = root.querySelectorAll(".lord main > section:not(.lordReveal)");

    if (!secciones.length || !("IntersectionObserver" in window)) return;
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

    const observador = new IntersectionObserver(
        (entradas) => {
            entradas.forEach((entrada) => {
                if (entrada.isIntersecting) {
                    entrada.target.classList.add("is-visible");
                    observador.unobserve(entrada.target);
                }
            });
        },
        { threshold: 0.08, rootMargin: "0px 0px -55px" },
    );

    secciones.forEach((seccion) => {
        seccion.classList.add("lordReveal");
        observador.observe(seccion);
    });
}
