<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/lege-oharra")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/lege-oharra")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <title>Lege-oharra: webgunearen titularra eta erabilera-baldintzak | THE LORD</title>
        <meta
            name="description"
            content="THE LORDen lege-oharra: webgunearen titularraren datuak, erabilera-baldintzak, jabetza intelektuala, erantzukizuna eta foodtruckaren webguneari aplikatzen zaion legeria."
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
                <h1 class="headerLord__titulo">Lege-oharra</h1>
                <p class="headerLord__texto">
                    Nor dagoen webgune honen atzean eta zer baldintzatan erabil dezakezun.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordLegal" aria-labelledby="legal-titular-eu">
                <h2 class="sectLordLegal__titulo" id="legal-titular-eu">Titularraren datuak</h2>
                <p>
                    Informazio-gizartearen zerbitzuei eta merkataritza elektronikoari buruzko 34/2002 Legearen (LSSI-CE)
                    10. artikulua betez, webgune honen titularraren identifikazio-datuak jakinarazten dira.
                </p>
                <dl class="sectLordLegal__datos">
                    <div>
                        <dt>Titularra</dt>
                        <dd>[Titularraren sozietate-izena edo izena, zehazteke]</dd>
                    </div>
                    <div>
                        <dt>Merkataritza-izena</dt>
                        <dd>THE LORD</dd>
                    </div>
                    <div>
                        <dt>IFZ / IFK</dt>
                        <dd>[IFZ zehazteke]</dd>
                    </div>
                    <div>
                        <dt>Helbidea</dt>
                        <dd>[Helbide soziala zehazteke]</dd>
                    </div>
                    <div>
                        <dt>Posta elektronikoa</dt>
                        <dd><a href="mailto:hola@thelord.es" title="THE LORDi mezu elektroniko bat idatzi">hola@thelord.es</a></dd>
                    </div>
                    <div>
                        <dt>Telefonoa</dt>
                        <dd><a href="tel:+34612034567" title="THE LORDi deitu">+34 612 034 567</a></dd>
                    </div>
                </dl>
            </section>

            <section class="sectLordLegal" aria-labelledby="legal-condiciones-eu">
                <h2 class="sectLordLegal__titulo" id="legal-condiciones-eu">Erabilera-baldintzak</h2>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-uso-eu">
                    <h3 class="sectLordLegal__subtitulo" id="legal-uso-eu">Webgunearen erabilera</h3>
                    <p>
                        Webgune honetarako sarbidea doakoa da eta erabiltzaile izaera ematen du. Erabiltzaileak
                        legearen, fede onaren eta lege-ohar honen arabera erabiltzeko konpromisoa hartzen du. Debekatuta
                        dago legez kanpoko jardueretarako erabiltzea, kode maltzurra sartzea edo THE LORDen nahiz
                        hirugarrenen sistemak kaltetzea.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-propiedad-eu">
                    <h3 class="sectLordLegal__subtitulo" id="legal-propiedad-eu">Jabetza intelektuala eta industriala</h3>
                    <p>
                        Webgune honetako testuak, irudiak, logotipoak, diseinua eta kodea titularrarenak dira edo
                        egileen baimenarekin erabiltzen dira. Debekatuta dago horiek baimen espresurik gabe xede
                        komertzialekin erreproduzitzea, banatzea edo eraldatzea.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-responsabilidad-eu">
                    <h3 class="sectLordLegal__subtitulo" id="legal-responsabilidad-eu">Erantzukizuna</h3>
                    <p>
                        THE LORDek argitaratutako informazioa, hala nola karta edo foodtruckaren geldialdiak, zehatza
                        eta eguneratua izan dadin ahalegintzen da, baina aurrez abisatu gabe alda daiteke. Ez da
                        zerbitzuaren etenen ezta estekatutako kanpoko webguneen edukiaren erantzule.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-ley-eu">
                    <h3 class="sectLordLegal__subtitulo" id="legal-ley-eu">Legeria aplikagarria</h3>
                    <p>
                        Lege-ohar hau Espainiako legeriak arautzen du. Datu pertsonalen tratamendurako, ikusi
                        <a href="<?= url("/eu/pribatutasun-politika") ?>" title="Pribatutasun-politika irakurri">pribatutasun-politika</a>;
                        cookien erabilerarako, <a href="<?= url("/eu/cookien-kudeaketa") ?>" title="Cookiak kontsultatu eta kudeatu">cookien kudeaketa</a> orria.
                    </p>
                    <p class="sectLordLegal__actualizado">Azken eguneratzea: 2026ko azaroa.</p>
                </article>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
