<?php $hamburguesas = require app_path("includes/es/hamburguesas.php"); ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/hamburguesas")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/hamburguesas")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/hanburgesak")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/hamburguesas")) ?>" />
        <title>Carta de hamburguesas artesanas a la plancha | THE LORD</title>
        <meta
            name="description"
            content="Seis hamburguesas de autor con carne picada a diario y cocinada al momento: Ragnarök, Berserker, Freya, Jarl, Lagertha y Odín. Precios e ingredientes."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Carta de hamburguesas artesanas a la plancha | THE LORD" />
        <meta
            property="og:description"
            content="Seis hamburguesas de autor con carne picada a diario y cocinada al momento: Ragnarök, Berserker, Freya, Jarl, Lagertha y Odín. Precios e ingredientes."
        />
        <meta property="og:url" content="<?= e(app_url("/es/hamburguesas")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/parrilla-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Carta de hamburguesas artesanas a la plancha | THE LORD" />
        <meta
            name="twitter:description"
            content="Seis hamburguesas de autor con carne picada a diario y cocinada al momento: Ragnarök, Berserker, Freya, Jarl, Lagertha y Odín. Precios e ingredientes."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/thelord/parrilla-1.webp")) ?>" />
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

        <header class="headerLordGrill" data-lord-carrusel data-intervalo="4200">
            <div class="headerLordGrill__fotogramas">
                <img
                    class="headerLordGrill__fotograma is-activa"
                    src="<?= asset("assets/img/thelord/parrilla-1.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Cocinero trabajando sobre una parrilla con llamas"
                    title="Parrilla de THE LORD en acción"
                    fetchpriority="high"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordGrill__fotograma"
                    src="<?= asset("assets/img/thelord/parrilla-2.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Carne asándose sobre una parrilla al fuego"
                    title="Carne asándose al fuego"
                    loading="lazy"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordGrill__fotograma"
                    src="<?= asset("assets/img/thelord/parrilla-3.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Carne marcada sobre carbón encendido"
                    title="Carne sobre carbón encendido"
                    loading="lazy"
                    decoding="async"
                    data-lord-slide
                />
            </div>
            <div class="headerLordGrill__sombra" aria-hidden="true"></div>
            <div class="headerLordGrill__brasas" aria-hidden="true">
                <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
            </div>

            <div class="headerLordGrill__contenido">
                <p class="headerLordGrill__directo"><span aria-hidden="true"></span>Parrilla en movimiento</p>
                <p class="lordEyebrow">Nuestra carta</p>
                <h1 class="headerLordGrill__titulo">Seis leyendas.<br /><em>Un solo fuego.</em></h1>
                <p class="headerLordGrill__texto">
                    Recetas propias, ingredientes honestos y una plancha que nunca descansa. Acércate al calor y
                    conoce cada arma de nuestro arsenal.
                </p>
                <a class="lordBoton" href="#carta" title="Ir a la carta completa">
                    Entrar en la carta <span aria-hidden="true">↓</span>
                </a>
            </div>

            <div class="headerLordGrill__controles" role="group" aria-label="Controles de la secuencia de imágenes">
                <button
                    class="headerLordGrill__pausa"
                    type="button"
                    aria-label="Pausar secuencia"
                    data-lord-pausa
                    data-label-pausar="Pausar secuencia"
                    data-label-reproducir="Reproducir secuencia"
                ></button>
                <div class="headerLordGrill__linea">
                    <button class="is-activa" type="button" aria-label="Ver plano 1: cocinero sobre la parrilla" aria-current="true" data-lord-punto><span></span></button>
                    <button type="button" aria-label="Ver plano 2: carne asándose al fuego" aria-current="false" data-lord-punto><span></span></button>
                    <button type="button" aria-label="Ver plano 3: carne sobre carbón encendido" aria-current="false" data-lord-punto><span></span></button>
                </div>
                <p class="headerLordGrill__contador" aria-hidden="true" data-lord-contador>01 / 03</p>
            </div>

            <p class="headerLordGrill__temperatura" aria-hidden="true">
                <span>Plancha</span>
                <strong>280°</strong>
                <i>Fuego vivo</i>
            </p>
        </header>

        <main id="contenido">
            <section class="sectLordCarta sectLordCarta--completa" id="carta" aria-labelledby="carta-titulo-es">
                <div class="sectLordCarta__cabecera">
                    <div>
                        <p class="lordEyebrow">Carta completa</p>
                        <h2 class="lordTitulo" id="carta-titulo-es">Elige tu <em>batalla</em></h2>
                    </div>
                    <div class="sectLordCarta__intro">
                        <p>
                            Todas nuestras carnes se pican a diario y se cocinan al momento. Pregunta por opciones
                            vegetarianas y alérgenos.
                        </p>
                    </div>
                </div>

                <div class="sectLordCarta__grid">
                    <?php foreach ($hamburguesas as $indice => $hamburguesa): ?>
                        <article
                            class="artLordBurger artLordBurger--detallada"
                            id="hamburguesa-<?= e($hamburguesa["slug"]) ?>"
                            aria-labelledby="carta-burger-<?= e($hamburguesa["slug"]) ?>"
                        >
                            <div class="artLordBurger__foto">
                                <img
                                    src="<?= asset($hamburguesa["imagen"]) ?>"
                                    width="900"
                                    height="720"
                                    alt="Hamburguesa <?= e($hamburguesa["nombre"]) ?> de THE LORD"
                                    title="Hamburguesa <?= e($hamburguesa["nombre"]) ?>"
                                    loading="lazy"
                                    decoding="async"
                                />
                                <span class="artLordBurger__indice" aria-hidden="true">0<?= $indice + 1 ?></span>
                                <span class="artLordBurger__etiqueta"><?= e($hamburguesa["etiqueta"]) ?></span>
                            </div>
                            <div class="artLordBurger__info">
                                <div class="artLordBurger__fila">
                                    <h3 class="artLordBurger__nombre" id="carta-burger-<?= e($hamburguesa["slug"]) ?>">
                                        <?= e($hamburguesa["nombre"]) ?>
                                    </h3>
                                    <p class="artLordBurger__precio"><?= e($hamburguesa["precio"]) ?> <small>€</small></p>
                                </div>
                                <p class="artLordBurger__descripcion"><?= e($hamburguesa["descripcion"]) ?></p>
                                <ul class="artLordBurger__ingredientes" aria-label="Ingredientes principales">
                                    <?php foreach ($hamburguesa["ingredientes"] as $ingrediente): ?>
                                        <li><?= e($ingrediente) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="sectLordPasos" aria-labelledby="metodo-titulo-es">
                <div class="sectLordPasos__intro">
                    <p class="lordEyebrow">Cómo lo hacemos</p>
                    <h2 class="lordTitulo" id="metodo-titulo-es">El ritual<br /><em>del fuego</em></h2>
                    <p>No hay secretos industriales. Solo tiempo, temperatura y manos que conocen el oficio.</p>
                </div>
                <div class="sectLordPasos__grid">
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-seleccion-es">
                        <span class="sectLordPasos__numero" aria-hidden="true">01</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-seleccion-es">Selección</h3>
                        <p class="sectLordPasos__texto">
                            Elegimos cortes de vaca nacional con el equilibrio exacto entre sabor y jugosidad.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-picado-es">
                        <span class="sectLordPasos__numero" aria-hidden="true">02</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-picado-es">Picado diario</h3>
                        <p class="sectLordPasos__texto">
                            Picamos y formamos cada pieza en nuestra cocina el mismo día del servicio.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-plancha-es">
                        <span class="sectLordPasos__numero" aria-hidden="true">03</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-plancha-es">Plancha viva</h3>
                        <p class="sectLordPasos__texto">
                            Sellamos a alta temperatura para crear una costra intensa sin perder el jugo.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-montaje-es">
                        <span class="sectLordPasos__numero" aria-hidden="true">04</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-montaje-es">Montaje</h3>
                        <p class="sectLordPasos__texto">
                            Tostamos el pan, fundimos el queso y montamos cada pedido justo antes de servir.
                        </p>
                    </article>
                </div>
            </section>

            <section class="sectLordCta" aria-labelledby="cta-titulo-es">
                <p class="sectLordCta__antetitulo">¿Listo para el festín?</p>
                <h2 class="sectLordCta__titulo" id="cta-titulo-es">Encuentra a THE LORD</h2>
                <a class="lordBoton lordBoton--oscuro" href="<?= url("/es/nuestra-ruta") ?>" title="Consultar las próximas paradas del foodtruck">
                    Consultar nuestra ruta <span class="lordFlecha" aria-hidden="true"></span>
                </a>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
