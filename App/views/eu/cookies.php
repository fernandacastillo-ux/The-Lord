<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/cookien-kudeaketa")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/gestion-cookies")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/cookien-kudeaketa")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/gestion-cookies")) ?>" />
        <title>Cookien kudeaketa: zer erabiltzen dugun eta nola konfiguratu | THE LORD</title>
        <meta
            name="description"
            content="THE LORDen webguneak zer cookie eta hirugarrenen zerbitzu erabiltzen dituen, zertarako diren eta nola onartu, baztertu edo zure hobespenak edozein unetan aldatu."
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
                <h1 class="headerLord__titulo">Cookien kudeaketa</h1>
                <p class="headerLord__texto">
                    Zer gordetzen duen webgune honek zure nabigatzailean eta nola erabaki dezakezun zuk.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordLegal" aria-labelledby="cookies-uso-eu">
                <h2 class="sectLordLegal__titulo" id="cookies-uso-eu">Webgune honetako cookiak</h2>
                <p>
                    Cookiak webgune batek zure gailuan gordetzen dituen fitxategi txikiak dira. LSSI-CEren 22.2
                    artikuluaren arabera, teknikoak ez direnak zure baimenarekin bakarrik instalatzen ditugu.
                </p>

                <article class="sectLordLegal__articulo" aria-labelledby="cookies-tipos-eu">
                    <h3 class="sectLordLegal__subtitulo" id="cookies-tipos-eu">Zer cookie eta zerbitzu erabiltzen ditugun</h3>
                    <div class="sectLordLegal__tabla">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">Zerbitzua</th>
                                    <th scope="col">Mota</th>
                                    <th scope="col">Helburua</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Baimen-kudeatzailea (CookieLad)</td>
                                    <td>Teknikoa, berezkoa</td>
                                    <td>Cookiak onartu edo baztertu dituzun gogoratzea, berriro ez galdetzeko.</td>
                                </tr>
                                <tr>
                                    <td>Google Fonts</td>
                                    <td>Hirugarrenen zerbitzua</td>
                                    <td>Webguneko letra-tipoak kargatzea. Googlek zure IP helbidea jaso dezake.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>
                        Webgune honek ez du publizitate-cookierik erabiltzen. Etorkizunean cookie analitikoak edo
                        bestelakoak gehitzen badira, taula honetan jasoko dira eta zure baimenarekin bakarrik aktibatuko
                        dira.
                    </p>
                </article>
            </section>

            <section class="sectLordLegal" aria-labelledby="cookies-gestion-eu">
                <h2 class="sectLordLegal__titulo" id="cookies-gestion-eu">Nola kudeatu zure hobespenak</h2>

                <article class="sectLordLegal__articulo" aria-labelledby="cookies-panel-eu">
                    <h3 class="sectLordLegal__subtitulo" id="cookies-panel-eu">Cookien abisutik</h3>
                    <p>
                        Webgunea lehen aldiz bisitatzean abisu bat agertzen da, cookiak onartu, baztertu edo
                        konfiguratzeko. Zure erabakia aldatzeko, ezabatu gune honetako cookiak zure nabigatzailean eta
                        abisua berriro agertuko da.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="cookies-navegador-eu">
                    <h3 class="sectLordLegal__subtitulo" id="cookies-navegador-eu">Zure nabigatzailetik</h3>
                    <p>Cookiak zure nabigatzailearen ezarpenetan ere blokea edo ezaba ditzakezu:</p>
                    <ul>
                        <li><a href="https://support.google.com/chrome/answer/95647" title="Chromeren laguntza cookiei buruz" rel="noopener" target="_blank">Google Chrome</a></li>
                        <li><a href="https://support.mozilla.org/es/kb/Borrar%20cookies" title="Firefoxen laguntza cookiei buruz" rel="noopener" target="_blank">Mozilla Firefox</a></li>
                        <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" title="Safariren laguntza cookiei buruz" rel="noopener" target="_blank">Safari</a></li>
                        <li><a href="https://support.microsoft.com/es-es/microsoft-edge" title="Microsoft Edgeren laguntza" rel="noopener" target="_blank">Microsoft Edge</a></li>
                    </ul>
                    <p>
                        Zure datuei buruzko informazio gehiago
                        <a href="<?= url("/eu/pribatutasun-politika") ?>" title="Pribatutasun-politika irakurri">pribatutasun-politikan</a>
                        eta titularrari buruzkoa <a href="<?= url("/eu/lege-oharra") ?>" title="Lege-oharra irakurri">lege-oharrean</a>.
                    </p>
                    <p class="sectLordLegal__actualizado">Azken eguneratzea: 2026ko azaroa.</p>
                </article>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
