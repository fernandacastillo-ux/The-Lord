<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/nor-gara")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/nor-gara")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/quienes-somos")) ?>" />
        <title>Nor gara: foodtruck bikingoaren historia | THE LORD</title>
        <meta
            name="description"
            content="2019an jaio ginen Madrilen, mailegatutako plantxa baten inguruan. Ezagutu THE LORD izenaren jatorria, gurpilen gaineko gure bizitza eta klanaren balioak."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Nor gara: foodtruck bikingoaren historia | THE LORD" />
        <meta
            property="og:description"
            content="2019an jaio ginen Madrilen, mailegatutako plantxa baten inguruan. Ezagutu THE LORD izenaren jatorria, gurpilen gaineko gure bizitza eta klanaren balioak."
        />
        <meta property="og:url" content="<?= e(app_url("/eu/nor-gara")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/cabecera-quienes-somos.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Nor gara: foodtruck bikingoaren historia | THE LORD" />
        <meta
            name="twitter:description"
            content="2019an jaio ginen Madrilen, mailegatutako plantxa baten inguruan. Ezagutu THE LORD izenaren jatorria, gurpilen gaineko gure bizitza eta klanaren balioak."
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
        <?php require app_path("includes/eu/nav.php"); ?>

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
                <p class="lordEyebrow">Nor gara</p>
                <h1 class="headerLord__titulo">Suaren jaun<br /><em>izateko jaio ginen.</em></h1>
                <p class="headerLord__texto">
                    Sukalde txiki bat, asmo handi bat eta errepidea etxe gisa. Hau da THE LORDen historia.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordHistoria" aria-labelledby="historia-titulo-eu">
                <p class="sectLordHistoria__sello">
                    <span>Noiztik</span>
                    <strong>2019</strong>
                    <small>Madril</small>
                </p>
                <div>
                    <p class="lordEyebrow">Izenaren jatorria</p>
                    <h2 class="lordTitulo" id="historia-titulo-eu">Ez da titulu bat.<br /><em>Hitzarmen bat da.</em></h2>
                    <div class="sectLordHistoria__columnas">
                        <p>
                            THE LORD mailegatutako plantxa baten inguruan jaio zen, lagunen arteko udako gau batean.
                            Lehen errezeta dastatzean, norbaitek hanburgesa altxatu eta esan zuen: «Honek beste guztiaren
                            gainetik agintzen du». Esaldia geratu zen; izena ere bai.
                        </p>
                        <p>
                            Estetika bikingoa aukeratu genuen ofizioa nola ulertzen dugun adierazten duelako: sortzeko
                            ausardia, produktuarekiko errespetua eta batera aurrera egiten duen klana. Ez dugu koroarik
                            bilatzen. Zerbitzu bakoitzean irabazi nahi dugu titulua.
                        </p>
                    </div>
                </div>
            </section>

            <section class="sectLordSplit sectLordSplit--claro" aria-labelledby="ruedas-titulo-eu">
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
                    <p class="lordEyebrow">Gure bizitza gurpilen gainean</p>
                    <h2 class="lordTitulo" id="ruedas-titulo-eu">Mugarik gabeko<br /><em>jatetxea</em></h2>
                    <p>
                        Auzoetako merkatuak zeharkatzen hasi ginen, hiru hanburgesako karta batekin eta ibilgailuan
                        ozta-ozta sartzen zen plantxa batekin. Gaur egun jaialdietan, ospakizunetan eta topaketa
                        gastronomikoetan sukaldatzen dugu Espainia osoan.
                    </p>
                    <p>
                        Sukaldaritza ibiltariaren munduko parte izateak esan nahi du astero mahai desberdin batera
                        iristea, pertsona berriak ezagutzea eta edozein aparkaleku bizitzaz betetako jantoki bihurtzea.
                    </p>
                    <a class="lordBoton" href="<?= url("/eu/harremanetan") ?>" title="THE LORD ekitaldi baterako kontratatu">
                        Gonbidatu gaitzazu zure ekitaldira <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                </div>
            </section>

            <section class="sectLordPasos sectLordPasos--valores" aria-labelledby="valores-titulo-eu">
                <h2 class="lordEyebrow" id="valores-titulo-eu">Gure balioak</h2>
                <div class="sectLordPasos__grid">
                    <article class="sectLordPasos__paso" aria-labelledby="valor-producto-eu">
                        <span class="sectLordPasos__numero" aria-hidden="true">01</span>
                        <h3 class="sectLordPasos__titulo" id="valor-producto-eu">Produktua</h3>
                        <p class="sectLordPasos__texto">
                            Gertuko hornitzaileekin, tokiko haragiarekin eta geuk egindako prestakinekin lan egiten dugu.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="valor-oficio-eu">
                        <span class="sectLordPasos__numero" aria-hidden="true">02</span>
                        <h3 class="sectLordPasos__titulo" id="valor-oficio-eu">Ofizioa</h3>
                        <p class="sectLordPasos__texto">
                            Eskaera bakoitza unean sukaldatzen dugu eta xehetasuna zaintzen dugu ilara luzea denean ere.
                        </p>
                    </article>
                    <article class="sectLordPasos__paso" aria-labelledby="valor-comunidad-eu">
                        <span class="sectLordPasos__numero" aria-hidden="true">03</span>
                        <h3 class="sectLordPasos__titulo" id="valor-comunidad-eu">Komunitatea</h3>
                        <p class="sectLordPasos__texto">
                            Kale-sukaldaritza hazten duten merkatu, ekoizle eta proiektuekin elkarlanean aritzen gara.
                        </p>
                    </article>
                </div>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
