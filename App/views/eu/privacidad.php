<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/pribatutasun-politika")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/politica-privacidad")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/pribatutasun-politika")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/politica-privacidad")) ?>" />
        <title>Pribatutasun-politika eta datuen babesa | THE LORD</title>
        <meta
            name="description"
            content="Nola tratatzen dituen THE LORDek harremanetarako formularioan bidaltzen dituzun datuak: arduraduna, helburua, oinarri juridikoa, kontserbazioa eta zure DBEO eskubideak."
        />
        <meta name="robots" content="noindex, follow" />
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
                src="<?= asset("assets/img/thelord/parrilla-2.webp") ?>"
                width="1920"
                height="1080"
                alt=""
                fetchpriority="high"
                decoding="async"
            />
            <div class="headerLord__contenido">
                <p class="lordEyebrow">Lege-informazioa</p>
                <h1 class="headerLord__titulo">Pribatutasun-politika</h1>
                <p class="headerLord__texto">
                    Zer egiten dugun bidaltzen dizkiguzun datuekin eta nola erabaki dezakezun horien gainean.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordLegal" aria-labelledby="privacidad-tratamiento-eu">
                <h2 class="sectLordLegal__titulo" id="privacidad-tratamiento-eu">Zure datuen tratamendua</h2>
                <p>
                    Politika honek azaltzen du nola tratatzen diren webgune honetan jasotako datu pertsonalak,
                    (EB) 2016/679 Erregelamenduaren (DBEO) eta 3/2018 Lege Organikoaren (DBLOE) arabera.
                </p>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-responsable-eu">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-responsable-eu">Tratamenduaren arduraduna</h3>
                    <p>
                        [Titularraren sozietate-izena edo izena, zehazteke], THE LORD merkataritza-izenarekin, IFZ
                        [zehazteke] eta helbidea [zehazteke]. Harremana:
                        <a href="mailto:hola@thelord.es" title="THE LORDi mezu elektroniko bat idatzi">hola@thelord.es</a>.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-datos-eu">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-datos-eu">Jasotzen ditugun datuak eta helburua</h3>
                    <p>
                        <a href="<?= url("/eu/harremanetan") ?>" title="Harremanetarako formulariora joan">Harremanetarako formularioaren</a>
                        bidez izen-abizenak, posta elektronikoa, telefonoa eta idazten duzun mezua jasotzen ditugu.
                        Zure kontsultari erantzuteko eta, eskatzen baduzu, zure ekitaldirako aurrekontua prestatzeko
                        baino ez ditugu erabiltzen. Ez ditugu publizitatea bidaltzeko erabiltzen, ezta profilak egiteko
                        ere.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-base-eu">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-base-eu">Oinarri juridikoa</h3>
                    <p>
                        Formularioa bidali aurretik onarpen-laukia markatzean ematen duzun baimena (DBEOren 6.1.a art.)
                        eta, aurrekontua eskatzen duzunean, zure eskaerari kontratu aurreko neurriak aplikatzea (DBEOren
                        6.1.b art.). Baimena edozein unetan erretira dezakezu.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-conservacion-eu">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-conservacion-eu">Kontserbazioa eta hartzaileak</h3>
                    <p>
                        Zure kontsultari erantzuteko behar den denboran gordetzen ditugu datuak, eta ondoren dagozkion
                        legezko epeetan. Ez zaizkie hirugarrenei lagatzen, legezko betebeharra dagoenean izan ezik.
                        Ostatatze- eta posta-zerbitzuen hornitzaileak tratamendu-eragile gisa sar daitezke datuetara.
                    </p>
                </article>
            </section>

            <section class="sectLordLegal" aria-labelledby="privacidad-derechos-eu">
                <h2 class="sectLordLegal__titulo" id="privacidad-derechos-eu">Zure eskubideak</h2>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-ejercicio-eu">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-ejercicio-eu">Nola baliatu</h3>
                    <p>Edozein unetan eska dezakezu:</p>
                    <ul>
                        <li>Zure datuak eskuratzea, zuzentzea edo ezabatzea.</li>
                        <li>Tratamendua mugatzea edo horren aurka egitea.</li>
                        <li>Eman dizkiguzun datuen eramangarritasuna.</li>
                    </ul>
                    <p>
                        Idatzi <a href="mailto:hola@thelord.es" title="THE LORDi mezu elektroniko bat idatzi">hola@thelord.es</a>
                        helbidera, baliatu nahi duzun eskubidea adieraziz. Errespetatu ez direla uste baduzu,
                        <a href="https://www.aepd.es" title="Datuak Babesteko Espainiako Agentziaren webgunea" rel="noopener" target="_blank">Datuak Babesteko Espainiako Agentzian</a>
                        erreklamazioa aurkez dezakezu.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-relacion-eu">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-relacion-eu">Informazio gehiago</h3>
                    <p>
                        Titularraren datuak eta erabilera-baldintzak
                        <a href="<?= url("/eu/lege-oharra") ?>" title="Lege-oharra irakurri">lege-oharrean</a> daude, eta
                        cookien erabilera <a href="<?= url("/eu/cookien-kudeaketa") ?>" title="Cookiak kontsultatu eta kudeatu">cookien kudeaketan</a> azaltzen da.
                    </p>
                    <p class="sectLordLegal__actualizado">Azken eguneratzea: 2026ko azaroa.</p>
                </article>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
