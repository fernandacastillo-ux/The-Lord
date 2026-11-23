// Barra superior: estado al hacer scroll, barra de progreso y menú móvil.
export function navLord(root = document) {
    root.querySelectorAll("[data-nav-lord]").forEach((nav) => {
        if (nav.dataset.navLordReady) return;
        nav.dataset.navLordReady = "true";

        const progreso = nav.querySelector("[data-nav-lord-progreso]");
        const boton = nav.querySelector("[data-nav-lord-toggle]");
        const menu = nav.querySelector("[data-nav-lord-menu]");
        const escritorio = window.matchMedia("(min-width: 901px)");

        const actualizarScroll = () => {
            const recorrido = document.documentElement.scrollHeight - window.innerHeight;
            const porcentaje = recorrido > 0 ? Math.min(window.scrollY / recorrido, 1) : 0;

            nav.classList.toggle("is-scroll", window.scrollY > 28);
            progreso?.style.setProperty("--progreso", porcentaje.toFixed(4));
        };

        actualizarScroll();
        window.addEventListener("scroll", actualizarScroll, { passive: true });
        window.addEventListener("resize", actualizarScroll);

        if (!boton || !menu) return;

        const cambiarMenu = (abrir) => {
            boton.setAttribute("aria-expanded", String(abrir));
            boton.setAttribute("aria-label", abrir ? boton.dataset.labelCerrar : boton.dataset.labelAbrir);
            menu.classList.toggle("is-abierto", abrir);
            document.body.classList.toggle("navLord-abierto", abrir);
        };

        boton.addEventListener("click", () => {
            cambiarMenu(boton.getAttribute("aria-expanded") !== "true");
        });

        // Un enlace a un ancla de la misma página también debe cerrar el panel.
        menu.querySelectorAll("a").forEach((enlace) => {
            enlace.addEventListener("click", () => cambiarMenu(false));
        });

        document.addEventListener("keydown", (evento) => {
            if (evento.key === "Escape" && boton.getAttribute("aria-expanded") === "true") {
                cambiarMenu(false);
                boton.focus();
            }
        });

        escritorio.addEventListener("change", () => cambiarMenu(false));
    });
}
