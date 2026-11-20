<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/nor-gara")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <title>Quiénes somos: la historia del foodtruck vikingo | THE LORD</title>
        <meta
            name="description"
            content="Nacimos en 2019 alrededor de una plancha prestada en Madrid. Conoce el origen del nombre THE LORD, nuestra vida sobre ruedas y los valores del clan."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Quiénes somos: la historia del foodtruck vikingo | THE LORD" />
        <meta
            property="og:description"
            content="Nacimos en 2019 alrededor de una plancha prestada en Madrid. Conoce el origen del nombre THE LORD, nuestra vida sobre ruedas y los valores del clan."
        />
        <meta property="og:url" content="<?= e(app_url("/es/quienes-somos")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/cabecera-quienes-somos.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Quiénes somos: la historia del foodtruck vikingo | THE LORD" />
        <meta
            name="twitter:description"
            content="Nacimos en 2019 alrededor de una plancha prestada en Madrid. Conoce el origen del nombre THE LORD, nuestra vida sobre ruedas y los valores del clan."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/thelord/cabecera-quienes-somos.webp")) ?>" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800;900&family=DM+Sans:wght@400;500;600;700;800&display=swap"
        />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body class="lord">
        <?php require app_path("includes/es/nav.php"); ?>

        <header class="headerLord">
            <img
                class="headerLord__fondo"
                src="<?= asset("assets/img/thelord/cabecera-quienes-somos.webp") ?>"
                width="1800"
                height="1000"
                alt=""
                fetchpriority="high"
                decoding="async"
            />
            <div class="headerLord__contenido">
                <p class="lordEyebrow">Quiénes somos</p>
                <h1 class="headerLord__titulo">Nacimos para<br /><em>mandar en el fuego.</em></h1>
                <p class="headerLord__texto">
                    Una cocina pequeña, una ambición enorme y la carretera como hogar. Esta es la historia de THE
                    LORD.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordHistoria" aria-labelledby="historia-titulo-es">
                <p class="sectLordHistoria__sello">
                    <span>Desde</span>
                    <strong>2019</strong>
                    <small>Madrid</small>
                </p>
                <div>
                    <p class="lordEyebrow">El origen del nombre</p>
                    <h2 class="lordTitulo" id="historia-titulo-es">No es un título.<br /><em>Es una promesa.</em></h2>
                    <div class="sectLordHistoria__columnas">
                        <p>
                            THE LORD nació alrededor de una plancha prestada, durante una noche de verano entre amigos.
                            Al probar la primera receta, alguien levantó la hamburguesa y dijo: «Esto manda sobre todo
                            lo demás». La frase se quedó; el nombre también.
                        </p>
                        <p>
                            Elegimos una estética vikinga porque representa cómo entendemos el oficio: valentía para
                            crear, respeto por el producto y un clan que avanza unido. No buscamos coronas. Queremos
                            ganarnos el título con cada servicio.
                        </p>
                    </div>
                </div>
            </section>

            <section class="sectLordSplit sectLordSplit--claro" aria-labelledby="ruedas-titulo-es">
                <img
                    class="sectLordSplit__foto"
                    src="<?= asset("assets/img/thelord/foodtruck.webp") ?>"
                    width="1200"
                    height="1100"
                    alt=""
                    loading="lazy"
                    decoding="async"
                />
                <div class="sectLordSplit__texto">
                    <p class="lordEyebrow">Nuestra vida sobre ruedas</p>
                    <h2 class="lordTitulo" id="ruedas-titulo-es">Un restaurante<br /><em>sin fronteras</em></h2>
                    <p>
                        Empezamos recorriendo mercados de barrio con una carta de tres hamburguesas y una plancha que
                        apenas cabía en el vehículo. Hoy cocinamos en festivales, celebraciones y encuentros
                        gastronómicos por toda España.
                    </p>
                    <p>
                        Ser parte del mundo de la cocina itinerante significa llegar cada semana a una mesa distinta,
                        conocer a personas nuevas y convertir cualquier aparcamiento en un comedor lleno de vida.
                    </p>
                    <a class="lordBoton" href="<?= url("/es/contacto") ?>" title="Contratar THE LORD para un evento">
                        Invítanos a tu evento <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                </div>
            </section>

            <section class="sectLordPasos sectLordPasos--valores" aria-labelledby="valores-titulo-es">
                <h2 class="lordEyebrow" id="valores-titulo-es">Nuestros valores</h2>
                <div class="sectLordPasos__grid">
                    <article class="sectLordPasos__paso" aria-labelledby="valor-producto-es">
                        <span class="sectLordPasos__numero" aria-hidden="true">01</span>
                        <h3 class="sectLordPasos__titulo" id="valor-producto-es">Producto</h3>
                        <p class="sectLordPasos__texto">
                            Trabajamos con proveedores cercanos, carne nacional y preparaciones hechas por nosotros.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="valor-oficio-es">
                        <span class="sectLordPasos__numero" aria-hidden="true">02</span>
                        <h3 class="sectLordPasos__titulo" id="valor-oficio-es">Oficio</h3>
                        <p class="sectLordPasos__texto">
                            Cocinamos cada pedido al momento y cuidamos el detalle incluso cuando la cola es larga.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="valor-comunidad-es">
                        <span class="sectLordPasos__numero" aria-hidden="true">03</span>
                        <h3 class="sectLordPasos__titulo" id="valor-comunidad-es">Comunidad</h3>
                        <p class="sectLordPasos__texto">
                            Colaboramos con mercados, productores y proyectos que hacen crecer la cocina callejera.
                        </p>
                    </article>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
