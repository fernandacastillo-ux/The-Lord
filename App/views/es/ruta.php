<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/nuestra-ruta")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/nuestra-ruta")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/gure-ibilbidea")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/nuestra-ruta")) ?>" />
        <title>Nuestra ruta: próximas paradas y festivales | THE LORD</title>
        <meta
            name="description"
            content="Consulta dónde estará el foodtruck THE LORD: mercados y ferias en Madrid, Alcalá de Henares y Toledo, y los festivales vikingos y medievales que visitamos."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Nuestra ruta: próximas paradas y festivales | THE LORD" />
        <meta
            property="og:description"
            content="Consulta dónde estará el foodtruck THE LORD: mercados y ferias en Madrid, Alcalá de Henares y Toledo, y los festivales vikingos y medievales que visitamos."
        />
        <meta property="og:url" content="<?= e(app_url("/es/nuestra-ruta")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/cabecera-ruta.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Nuestra ruta: próximas paradas y festivales | THE LORD" />
        <meta
            name="twitter:description"
            content="Consulta dónde estará el foodtruck THE LORD: mercados y ferias en Madrid, Alcalá de Henares y Toledo, y los festivales vikingos y medievales que visitamos."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/thelord/cabecera-ruta.webp")) ?>" />
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
                src="<?= asset("assets/img/thelord/cabecera-ruta.webp") ?>"
                width="1920"
                height="1080"
                alt=""
                fetchpriority="high"
                decoding="async"
            />
            <div class="headerLord__contenido">
                <p class="lordEyebrow">Nuestra ruta</p>
                <h1 class="headerLord__titulo">Seguimos<br /><em>el camino del fuego.</em></h1>
                <p class="headerLord__texto">
                    De mercado en mercado y de festival en festival. Consulta nuestras próximas paradas y revive los
                    encuentros donde el clan ya ha dejado su huella.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordCalendario" aria-labelledby="paradas-titulo-es">
                <div class="sectLordCalendario__intro">
                    <p class="lordEyebrow">Próximas paradas</p>
                    <h2 class="lordTitulo" id="paradas-titulo-es">Ven a buscar<br /><em>el drakkar</em></h2>
                    <p>
                        Actualizamos la ruta cada temporada. Síguenos para conocer cambios de horario y nuevas
                        incorporaciones.
                    </p>
                </div>
                <div class="sectLordCalendario__lista">
                    <article class="sectLordCalendario__fecha" aria-labelledby="parada-motores-es">
                        <span class="sectLordCalendario__numero" aria-hidden="true">01</span>
                        <strong>17—19 oct</strong>
                        <div class="sectLordCalendario__datos">
                            <h3 id="parada-motores-es">Mercado de Motores</h3>
                            <p>Madrid</p>
                        </div>
                        <small>Vie 19—00 h · Sáb y dom 13—00 h</small>
                    </article>
                    <article class="sectLordCalendario__fecha" aria-labelledby="parada-medieval-es">
                        <span class="sectLordCalendario__numero" aria-hidden="true">02</span>
                        <strong>25—26 oct</strong>
                        <div class="sectLordCalendario__datos">
                            <h3 id="parada-medieval-es">Mercado Medieval</h3>
                            <p>Alcalá de Henares</p>
                        </div>
                        <small>Sáb y dom 12—23 h</small>
                    </article>
                    <article class="sectLordCalendario__fecha" aria-labelledby="parada-callejera-es">
                        <span class="sectLordCalendario__numero" aria-hidden="true">03</span>
                        <strong>08—09 nov</strong>
                        <div class="sectLordCalendario__datos">
                            <h3 id="parada-callejera-es">Feria de Cocina Callejera</h3>
                            <p>Toledo</p>
                        </div>
                        <small>Sáb y dom 13—00 h</small>
                    </article>
                </div>
            </section>

            <section class="sectLordFestivales" aria-labelledby="festivales-titulo-es">
                <div class="sectLordFestivales__cabecera">
                    <div>
                        <p class="lordEyebrow">Donde ya hemos alzado el estandarte</p>
                        <h2 class="lordTitulo" id="festivales-titulo-es">Festivales con<br /><em>alma vikinga</em></h2>
                    </div>
                    <p>
                        No solo llevamos hamburguesas. Construimos un espacio donde la madera, el fuego y los brindis en
                        vasijas de inspiración vikinga forman parte de la experiencia.
                    </p>
                </div>
                <div class="sectLordFestivales__grid">
                    <article class="sectLordFestivales__tarjeta" aria-labelledby="festival-catoira-es">
                        <div class="sectLordFestivales__imagen">
                            <img
                                src="<?= asset("assets/img/thelord/festival-catoira.webp") ?>"
                                width="1400"
                                height="1050"
                                alt="Ambiente en la Romería Vikinga de Catoira"
                                title="Romería Vikinga de Catoira"
                                loading="lazy"
                                decoding="async"
                            />
                            <span class="sectLordFestivales__anio">2024</span>
                        </div>
                        <div class="sectLordFestivales__texto">
                            <p class="sectLordFestivales__lugar">Catoira · Pontevedra</p>
                            <h3 id="festival-catoira-es">Romería Vikinga de Catoira</h3>
                            <p>
                                Desembarcamos entre escudos, música y recreaciones históricas. Servimos nuestro menú
                                mientras el público brindaba en cuernos y jarras de inspiración nórdica.
                            </p>
                        </div>
                    </article>
                    <article class="sectLordFestivales__tarjeta" aria-labelledby="festival-avila-es">
                        <div class="sectLordFestivales__imagen">
                            <img
                                src="<?= asset("assets/img/thelord/festival-avila.webp") ?>"
                                width="1000"
                                height="750"
                                alt="Ambiente en las Jornadas Medievales de Ávila"
                                title="Jornadas Medievales de Ávila"
                                loading="lazy"
                                decoding="async"
                            />
                            <span class="sectLordFestivales__anio">2023</span>
                        </div>
                        <div class="sectLordFestivales__texto">
                            <p class="sectLordFestivales__lugar">Ávila · Castilla y León</p>
                            <h3 id="festival-avila-es">Jornadas Medievales de Ávila</h3>
                            <p>
                                La muralla fue el escenario de un fin de semana de fuego, carne y cerveza. Adaptamos el
                                puesto con madera, estandartes y vajilla de aspecto vikingo.
                            </p>
                        </div>
                    </article>
                    <article class="sectLordFestivales__tarjeta" aria-labelledby="festival-clan-es">
                        <div class="sectLordFestivales__imagen">
                            <img
                                src="<?= asset("assets/img/thelord/festival-clan.webp") ?>"
                                width="1000"
                                height="750"
                                alt="Ambiente en el Festival del Clan"
                                title="Festival del Clan"
                                loading="lazy"
                                decoding="async"
                            />
                            <span class="sectLordFestivales__anio">2023</span>
                        </div>
                        <div class="sectLordFestivales__texto">
                            <p class="sectLordFestivales__lugar">Madrid</p>
                            <h3 id="festival-clan-es">Festival del Clan</h3>
                            <p>
                                Una celebración nocturna con campamento, artesanía y cocina en directo. Nuestro espacio
                                se convirtió en punto de encuentro para compartir mesa y brindar.
                            </p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="sectLordSplit" aria-labelledby="taberna-titulo-es">
                <img
                    class="sectLordSplit__foto"
                    src="<?= asset("assets/img/thelord/taberna.webp") ?>"
                    width="1400"
                    height="1400"
                    alt=""
                    loading="lazy"
                    decoding="async"
                />
                <div class="sectLordSplit__texto">
                    <p class="lordEyebrow">Una taberna sobre ruedas</p>
                    <h2 class="lordTitulo" id="taberna-titulo-es">Mucho más que<br /><em>un puesto</em></h2>
                    <p>
                        En cada evento vestimos nuestro espacio para integrarlo en la celebración: estandartes, madera,
                        luz cálida y un servicio pensado para que el público viva el universo de THE LORD desde que se
                        acerca hasta el último brindis.
                    </p>
                    <ul class="sectLordSplit__lista">
                        <li>Montaje tematizado para cada encuentro</li>
                        <li>Servicio de cerveza en jarras de inspiración nórdica</li>
                        <li>Cocina en directo y carta adaptada al festival</li>
                    </ul>
                    <a class="lordBoton" href="<?= url("/es/contacto") ?>" title="Contratar THE LORD para un evento">
                        Llevar THE LORD a tu evento <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
