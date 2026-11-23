// Carrusel genérico para headerLordSlider, headerLordGrill y sectLordOpiniones.
// Marcado: [data-lord-carrusel data-intervalo="ms"] con [data-lord-slide], y opcionalmente
// [data-lord-anterior], [data-lord-siguiente], [data-lord-punto], [data-lord-pausa] y [data-lord-contador].
// El estado visible se marca con .is-activa; la raíz recibe .is-pausado al pausar.
export function lordCarrusel(root = document) {
    const movimientoReducido = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    root.querySelectorAll("[data-lord-carrusel]").forEach((carrusel) => {
        if (carrusel.dataset.lordCarruselReady) return;
        carrusel.dataset.lordCarruselReady = "true";

        const slides = [...carrusel.querySelectorAll("[data-lord-slide]")];
        const puntos = [...carrusel.querySelectorAll("[data-lord-punto]")];
        const pausa = carrusel.querySelector("[data-lord-pausa]");
        const contador = carrusel.querySelector("[data-lord-contador]");
        const intervalo = Number(carrusel.dataset.intervalo) || 6000;
        let actual = Math.max(
            slides.findIndex((slide) => slide.classList.contains("is-activa")),
            0,
        );
        let temporizador = null;
        let pausadoPorUsuario = movimientoReducido;

        if (slides.length < 2) return;

        const dosCifras = (numero) => String(numero).padStart(2, "0");

        const mostrar = (indice) => {
            actual = (indice + slides.length) % slides.length;

            slides.forEach((slide, i) => {
                const activa = i === actual;
                slide.classList.toggle("is-activa", activa);
                slide.setAttribute("aria-hidden", String(!activa));
            });

            puntos.forEach((punto, i) => {
                punto.classList.toggle("is-activa", i === actual);
                punto.setAttribute("aria-current", String(i === actual));
            });

            if (contador) {
                contador.textContent = `${dosCifras(actual + 1)} / ${dosCifras(slides.length)}`;
            }
        };

        const detener = () => {
            window.clearInterval(temporizador);
            temporizador = null;
        };

        const iniciar = () => {
            detener();
            if (pausadoPorUsuario) return;
            temporizador = window.setInterval(() => mostrar(actual + 1), intervalo);
        };

        // Al elegir una imagen se reinicia la cuenta para que no cambie al instante.
        const irA = (indice) => {
            mostrar(indice);
            iniciar();
        };

        carrusel.querySelector("[data-lord-anterior]")?.addEventListener("click", () => irA(actual - 1));
        carrusel.querySelector("[data-lord-siguiente]")?.addEventListener("click", () => irA(actual + 1));
        puntos.forEach((punto, i) => punto.addEventListener("click", () => irA(i)));

        const actualizarPausa = () => {
            carrusel.classList.toggle("is-pausado", pausadoPorUsuario);
            if (pausa) {
                pausa.setAttribute(
                    "aria-label",
                    pausadoPorUsuario ? pausa.dataset.labelReproducir : pausa.dataset.labelPausar,
                );
            }
        };

        pausa?.addEventListener("click", () => {
            pausadoPorUsuario = !pausadoPorUsuario;
            actualizarPausa();
            iniciar();
        });

        // El avance automático se detiene mientras se usa el teclado dentro del carrusel.
        carrusel.addEventListener("focusin", detener);
        carrusel.addEventListener("focusout", (evento) => {
            if (!carrusel.contains(evento.relatedTarget)) iniciar();
        });

        document.addEventListener("visibilitychange", () => {
            if (document.hidden) detener();
            else iniciar();
        });

        mostrar(actual);
        actualizarPausa();
        iniciar();
    });
}
