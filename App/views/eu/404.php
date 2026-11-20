<?php http_response_code(404); ?>
<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <title>Ez da orria aurkitu | THE LORD</title>
        <meta
            name="description"
            content="Eskatutako orria ez dago edo helbidez aldatu da. Itzuli hasierara, kontsultatu karta edo begiratu non dagoen gaur THE LORD foodtrucka."
        />
        <meta name="robots" content="noindex, nofollow" />
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

        <main id="contenido">
            <header class="headerLord">
                <img
                    class="headerLord__fondo"
                    src="<?= asset("assets/img/thelord/parrilla-2.webp") ?>"
                    width="1920"
                    height="1080"
                    alt=""
                    decoding="async"
                />
                <div class="headerLord__contenido">
                    <p class="lordEyebrow">404 errorea</p>
                    <h1 class="headerLord__titulo">Bide honek ez du<br /><em>oturuntzara eramaten.</em></h1>
                    <p class="headerLord__texto">
                        Baliteke esteka aldatu izana edo helbidea gaizki idatzita egotea. Itzuli hasierara, begiratu
                        karta edo kontsultatu non gauden aste honetan.
                    </p>
                    <div class="headerLord__acciones">
                        <a class="lordBoton" href="<?= url("/eu") ?>" title="THE LORDen hasierara itzuli">Hasierara itzuli</a>
                        <a class="lordBoton" href="<?= url("/eu/hanburgesak") ?>" title="Hanburgesen karta ikusi">Karta ikusi</a>
                        <a class="lordBoton" href="<?= url("/eu/gure-ibilbidea") ?>" title="Hurrengo geldialdiak kontsultatu">Gure ibilbidea</a>
                    </div>
                </div>
            </header>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
