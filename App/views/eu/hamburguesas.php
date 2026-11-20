<?php $hamburguesas = require app_path("includes/eu/hamburguesas.php"); ?>
<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/hanburgesak")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/hamburguesas")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/hanburgesak")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/hamburguesas")) ?>" />
        <title>Plantxan egindako hanburgesa artisauen karta | THE LORD</title>
        <meta
            name="description"
            content="Egunero txikitutako eta unean sukaldatutako sei hanburgesa: Ragnarök, Berserker, Freya, Jarl, Lagertha eta Odin. Ezagutu prezioak eta osagaiak."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Plantxan egindako hanburgesa artisauen karta | THE LORD" />
        <meta
            property="og:description"
            content="Egunero txikitutako eta unean sukaldatutako sei hanburgesa: Ragnarök, Berserker, Freya, Jarl, Lagertha eta Odin. Ezagutu prezioak eta osagaiak."
        />
        <meta property="og:url" content="<?= e(app_url("/eu/hanburgesak")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/parrilla-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Plantxan egindako hanburgesa artisauen karta | THE LORD" />
        <meta
            name="twitter:description"
            content="Egunero txikitutako eta unean sukaldatutako sei hanburgesa: Ragnarök, Berserker, Freya, Jarl, Lagertha eta Odin. Ezagutu prezioak eta osagaiak."
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
        <?php require app_path("includes/eu/nav.php"); ?>

        <header class="headerLordGrill" data-lord-carrusel data-intervalo="4200">
            <div class="headerLordGrill__fotogramas">
                <img
                    class="headerLordGrill__fotograma is-activa"
                    src="<?= asset("assets/img/thelord/parrilla-1.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Sukaldaria sugarrak dituen parrila baten gainean lanean"
                    title="THE LORDen parrila martxan"
                    fetchpriority="high"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordGrill__fotograma"
                    src="<?= asset("assets/img/thelord/parrilla-2.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Haragia sutan erretzen parrila baten gainean"
                    title="Haragia sutan erretzen"
                    loading="lazy"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordGrill__fotograma"
                    src="<?= asset("assets/img/thelord/parrilla-3.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Ikatz piztuaren gainean markatutako haragia"
                    title="Haragia ikatz piztuaren gainean"
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
                <p class="headerLordGrill__directo"><span aria-hidden="true"></span>Parrila martxan</p>
                <p class="lordEyebrow">Gure karta</p>
                <h1 class="headerLordGrill__titulo">Sei kondaira.<br /><em>Su bakarra.</em></h1>
                <p class="headerLordGrill__texto">
                    Geure errezetak, osagai zintzoak eta inoiz atseden hartzen ez duen plantxa. Hurbildu berora eta
                    ezagutu gure arsenaleko arma bakoitza.
                </p>
                <a class="lordBoton" href="#carta" title="Karta osora joan">
                    Kartan sartu <span aria-hidden="true">↓</span>
                </a>
            </div>

            <div class="headerLordGrill__controles" role="group" aria-label="Irudi-sekuentziaren kontrolak">
                <button
                    class="headerLordGrill__pausa"
                    type="button"
                    aria-label="Sekuentzia pausatu"
                    data-lord-pausa
                    data-label-pausar="Sekuentzia pausatu"
                    data-label-reproducir="Sekuentzia erreproduzitu"
                ></button>
                <div class="headerLordGrill__linea">
                    <button class="is-activa" type="button" aria-label="1. planoa ikusi: sukaldaria parrilan" aria-current="true" data-lord-punto><span></span></button>
                    <button type="button" aria-label="2. planoa ikusi: haragia sutan erretzen" aria-current="false" data-lord-punto><span></span></button>
                    <button type="button" aria-label="3. planoa ikusi: haragia ikatz piztuaren gainean" aria-current="false" data-lord-punto><span></span></button>
                </div>
                <p class="headerLordGrill__contador" aria-hidden="true" data-lord-contador>01 / 03</p>
            </div>

            <p class="headerLordGrill__temperatura" aria-hidden="true">
                <span>Plantxa</span>
                <strong>280°</strong>
                <i>Su bizia</i>
            </p>
        </header>

        <main id="contenido">
            <section class="sectLordCarta sectLordCarta--completa" id="carta" aria-labelledby="carta-titulo-eu">
                <div class="sectLordCarta__cabecera">
                    <div>
                        <p class="lordEyebrow">Karta osoa</p>
                        <h2 class="lordTitulo" id="carta-titulo-eu">Aukeratu zure <em>borroka</em></h2>
                    </div>
                    <div class="sectLordCarta__intro">
                        <p>
                            Gure haragi guztiak egunero txikitzen eta unean sukaldatzen ditugu. Galdetu aukera
                            begetarianoei eta alergenoei buruz.
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
                                    alt="THE LORDen <?= e($hamburguesa["nombre"]) ?> hanburgesa"
                                    title="<?= e($hamburguesa["nombre"]) ?> hanburgesa"
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
                                <ul class="artLordBurger__ingredientes" aria-label="Osagai nagusiak">
                                    <?php foreach ($hamburguesa["ingredientes"] as $ingrediente): ?>
                                        <li><?= e($ingrediente) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="sectLordPasos" aria-labelledby="metodo-titulo-eu">
                <div class="sectLordPasos__intro">
                    <p class="lordEyebrow">Nola egiten dugu</p>
                    <h2 class="lordTitulo" id="metodo-titulo-eu">Suaren<br /><em>errituala</em></h2>
                    <p>Ez dago sekretu industrialik. Denbora, tenperatura eta ofizioa ezagutzen duten eskuak besterik ez.</p>
                </div>
                <div class="sectLordPasos__grid">
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-seleccion-eu">
                        <span class="sectLordPasos__numero" aria-hidden="true">01</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-seleccion-eu">Hautaketa</h3>
                        <p class="sectLordPasos__texto">
                            Tokiko behi-ebakiak aukeratzen ditugu, zaporearen eta mamitasunaren arteko oreka zehatzarekin.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-picado-eu">
                        <span class="sectLordPasos__numero" aria-hidden="true">02</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-picado-eu">Eguneroko txikitzea</h3>
                        <p class="sectLordPasos__texto">
                            Pieza bakoitza gure sukaldean txikitu eta moldatzen dugu, zerbitzua den egun berean.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-plancha-eu">
                        <span class="sectLordPasos__numero" aria-hidden="true">03</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-plancha-eu">Plantxa bizia</h3>
                        <p class="sectLordPasos__texto">
                            Tenperatura altuan zigilatzen dugu, azal bizia sortzeko zukua galdu gabe.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="metodo-montaje-eu">
                        <span class="sectLordPasos__numero" aria-hidden="true">04</span>
                        <h3 class="sectLordPasos__titulo" id="metodo-montaje-eu">Muntaketa</h3>
                        <p class="sectLordPasos__texto">
                            Ogia txigortu, gazta urtu eta eskaera bakoitza zerbitzatu aurretik muntatzen dugu.
                        </p>
                    </article>
                </div>
            </section>

            <section class="sectLordCta" aria-labelledby="cta-titulo-eu">
                <p class="sectLordCta__antetitulo">Oturuntzarako prest?</p>
                <h2 class="sectLordCta__titulo" id="cta-titulo-eu">Aurkitu THE LORD</h2>
                <a class="lordBoton lordBoton--oscuro" href="<?= url("/eu/gure-ibilbidea") ?>" title="Foodtruckaren hurrengo geldialdiak kontsultatu">
                    Gure ibilbidea kontsultatu <span class="lordFlecha" aria-hidden="true"></span>
                </a>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
