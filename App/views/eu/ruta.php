<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/gure-ibilbidea")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/nuestra-ruta")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/gure-ibilbidea")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/nuestra-ruta")) ?>" />
        <title>Gure ibilbidea: hurrengo geldialdiak eta jaialdiak | THE LORD</title>
        <meta
            name="description"
            content="Kontsultatu non egongo den THE LORD foodtrucka: Madril, Alcalá eta Toledoko merkatu eta azokak, eta bisitatzen ditugun jaialdi bikingo eta erdi arokoak."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Gure ibilbidea: hurrengo geldialdiak eta jaialdiak | THE LORD" />
        <meta
            property="og:description"
            content="Kontsultatu non egongo den THE LORD foodtrucka: Madril, Alcalá eta Toledoko merkatu eta azokak, eta bisitatzen ditugun jaialdi bikingo eta erdi arokoak."
        />
        <meta property="og:url" content="<?= e(app_url("/eu/gure-ibilbidea")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/cabecera-ruta.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Gure ibilbidea: hurrengo geldialdiak eta jaialdiak | THE LORD" />
        <meta
            name="twitter:description"
            content="Kontsultatu non egongo den THE LORD foodtrucka: Madril, Alcalá eta Toledoko merkatu eta azokak, eta bisitatzen ditugun jaialdi bikingo eta erdi arokoak."
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
        <?php require app_path("includes/eu/nav.php"); ?>

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
                <p class="lordEyebrow">Gure ibilbidea</p>
                <h1 class="headerLord__titulo">Suaren bideari<br /><em>jarraitzen diogu.</em></h1>
                <p class="headerLord__texto">
                    Merkatuz merkatu eta jaialdiz jaialdi. Kontsultatu gure hurrengo geldialdiak eta gogoratu klanak
                    dagoeneko arrastoa utzi duen topaketak.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordCalendario" aria-labelledby="paradas-titulo-eu">
                <div class="sectLordCalendario__intro">
                    <p class="lordEyebrow">Hurrengo geldialdiak</p>
                    <h2 class="lordTitulo" id="paradas-titulo-eu">Etorri<br /><em>drakkarraren bila</em></h2>
                    <p>
                        Denboraldi bakoitzean eguneratzen dugu ibilbidea. Jarraitu gaitzazu ordutegi-aldaketen eta
                        geldialdi berrien berri izateko.
                    </p>
                </div>
                <div class="sectLordCalendario__lista">
                    <article class="sectLordCalendario__fecha" aria-labelledby="parada-motores-eu">
                        <span class="sectLordCalendario__numero" aria-hidden="true">01</span>
                        <strong>Urr. 17—19</strong>
                        <div class="sectLordCalendario__datos">
                            <h3 id="parada-motores-eu">Mercado de Motores</h3>
                            <p>Madril</p>
                        </div>
                        <small>Ost 19—00 · Lar eta ig 13—00</small>
                    </article>
                    <article class="sectLordCalendario__fecha" aria-labelledby="parada-medieval-eu">
                        <span class="sectLordCalendario__numero" aria-hidden="true">02</span>
                        <strong>Urr. 25—26</strong>
                        <div class="sectLordCalendario__datos">
                            <h3 id="parada-medieval-eu">Erdi Aroko Merkatua</h3>
                            <p>Alcalá de Henares</p>
                        </div>
                        <small>Lar eta ig 12—23</small>
                    </article>
                    <article class="sectLordCalendario__fecha" aria-labelledby="parada-callejera-eu">
                        <span class="sectLordCalendario__numero" aria-hidden="true">03</span>
                        <strong>Aza. 08—09</strong>
                        <div class="sectLordCalendario__datos">
                            <h3 id="parada-callejera-eu">Kale-sukaldaritzaren Azoka</h3>
                            <p>Toledo</p>
                        </div>
                        <small>Lar eta ig 13—00</small>
                    </article>
                </div>
            </section>

            <section class="sectLordFestivales" aria-labelledby="festivales-titulo-eu">
                <div class="sectLordFestivales__cabecera">
                    <div>
                        <p class="lordEyebrow">Ikurrina dagoeneko altxatu dugun tokiak</p>
                        <h2 class="lordTitulo" id="festivales-titulo-eu">Arima bikingoa<br /><em>duten jaialdiak</em></h2>
                    </div>
                    <p>
                        Ez ditugu hanburgesak bakarrik eramaten. Egurra, sua eta inspirazio bikingoko ontzietan egindako
                        topak esperientziaren parte diren gune bat eraikitzen dugu.
                    </p>
                </div>
                <div class="sectLordFestivales__grid">
                    <article class="sectLordFestivales__tarjeta" aria-labelledby="festival-catoira-eu">
                        <div class="sectLordFestivales__imagen">
                            <img
                                src="<?= asset("assets/img/thelord/festival-catoira.webp") ?>"
                                width="1400"
                                height="1050"
                                alt="Giroa Catoirako Erromeria Bikingoan"
                                title="Catoirako Erromeria Bikingoa"
                                loading="lazy"
                                decoding="async"
                            />
                            <span class="sectLordFestivales__anio">2024</span>
                        </div>
                        <div class="sectLordFestivales__texto">
                            <p class="sectLordFestivales__lugar">Catoira · Pontevedra</p>
                            <h3 id="festival-catoira-eu">Catoirako Erromeria Bikingoa</h3>
                            <p>
                                Ezkutu, musika eta berreraikuntza historikoen artean lehorreratu ginen. Gure menua
                                zerbitzatu genuen publikoak adarretan eta inspirazio nordikoko pitxerretan topa egiten
                                zuen bitartean.
                            </p>
                        </div>
                    </article>
                    <article class="sectLordFestivales__tarjeta" aria-labelledby="festival-avila-eu">
                        <div class="sectLordFestivales__imagen">
                            <img
                                src="<?= asset("assets/img/thelord/festival-avila.webp") ?>"
                                width="1000"
                                height="750"
                                alt="Giroa Ávilako Erdi Aroko Jardunaldietan"
                                title="Ávilako Erdi Aroko Jardunaldiak"
                                loading="lazy"
                                decoding="async"
                            />
                            <span class="sectLordFestivales__anio">2023</span>
                        </div>
                        <div class="sectLordFestivales__texto">
                            <p class="sectLordFestivales__lugar">Ávila · Gaztela eta Leon</p>
                            <h3 id="festival-avila-eu">Ávilako Erdi Aroko Jardunaldiak</h3>
                            <p>
                                Harresia izan zen su, haragi eta garagardozko asteburu baten agertokia. Postua egurrez,
                                ikurrinez eta itxura bikingoko ontziz egokitu genuen.
                            </p>
                        </div>
                    </article>
                    <article class="sectLordFestivales__tarjeta" aria-labelledby="festival-clan-eu">
                        <div class="sectLordFestivales__imagen">
                            <img
                                src="<?= asset("assets/img/thelord/festival-clan.webp") ?>"
                                width="1000"
                                height="750"
                                alt="Giroa Klanaren Jaialdian"
                                title="Klanaren Jaialdia"
                                loading="lazy"
                                decoding="async"
                            />
                            <span class="sectLordFestivales__anio">2023</span>
                        </div>
                        <div class="sectLordFestivales__texto">
                            <p class="sectLordFestivales__lugar">Madril</p>
                            <h3 id="festival-clan-eu">Klanaren Jaialdia</h3>
                            <p>
                                Kanpaleku, artisautza eta zuzeneko sukaldaritzako gaueko ospakizuna. Gure gunea mahaia
                                partekatu eta topa egiteko topagune bihurtu zen.
                            </p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="sectLordSplit" aria-labelledby="taberna-titulo-eu">
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
                    <p class="lordEyebrow">Taberna bat gurpilen gainean</p>
                    <h2 class="lordTitulo" id="taberna-titulo-eu">Postu bat baino<br /><em>askoz gehiago</em></h2>
                    <p>
                        Ekitaldi bakoitzean gure gunea janzten dugu ospakizunean txertatzeko: ikurrinak, egurra, argi
                        epela eta publikoak THE LORDen unibertsoa bizi dezan pentsatutako zerbitzua, hurbiltzen denetik
                        azken topara arte.
                    </p>
                    <ul class="sectLordSplit__lista">
                        <li>Topaketa bakoitzerako muntaketa tematikoa</li>
                        <li>Inspirazio nordikoko pitxerretan zerbitzatutako garagardoa</li>
                        <li>Zuzeneko sukaldaritza eta jaialdira egokitutako karta</li>
                    </ul>
                    <a class="lordBoton" href="<?= url("/eu/harremanetan") ?>" title="THE LORD ekitaldi baterako kontratatu">
                        Eraman THE LORD zure ekitaldira <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                </div>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
