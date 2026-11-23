// Acordeón de sectLordFaq: solo una respuesta abierta a la vez dentro de cada lista.
export function sectLordFaq(root = document) {
    root.querySelectorAll("[data-sect-lord-faq]").forEach((lista) => {
        if (lista.dataset.sectLordFaqReady) return;
        lista.dataset.sectLordFaqReady = "true";
        lista.classList.add("is-js");

        const items = [...lista.querySelectorAll(".sectLordFaq__item")];

        const abrir = (itemAbierto) => {
            items.forEach((item) => {
                const abierto = item === itemAbierto;
                item.classList.toggle("is-abierto", abierto);
                item.querySelector(".sectLordFaq__boton")?.setAttribute("aria-expanded", String(abierto));
            });
        };

        items.forEach((item) => {
            item.querySelector(".sectLordFaq__boton")?.addEventListener("click", () => {
                abrir(item.classList.contains("is-abierto") ? null : item);
            });
        });

        abrir(items.find((item) => item.classList.contains("is-abierto")) ?? null);
    });
}
