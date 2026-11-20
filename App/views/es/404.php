<?php http_response_code(404); ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <title>Página no encontrada | THE LORD</title>
        <meta
            name="description"
            content="La página solicitada no existe o ha cambiado de dirección. Vuelve al inicio, consulta la carta o mira dónde está hoy el foodtruck THE LORD."
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
        <?php require app_path("includes/es/nav.php"); ?>

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
                    <p class="lordEyebrow">Error 404</p>
                    <h1 class="headerLord__titulo">Este camino<br /><em>no lleva al festín.</em></h1>
                    <p class="headerLord__texto">
                        Es posible que el enlace haya cambiado o que la dirección no esté escrita correctamente.
                        Vuelve al inicio, revisa la carta o consulta dónde estamos esta semana.
                    </p>
                    <div class="headerLord__acciones">
                        <a class="lordBoton" href="<?= url("/es") ?>" title="Volver al inicio de THE LORD">Volver al inicio</a>
                        <a class="lordBoton" href="<?= url("/es/hamburguesas") ?>" title="Ver la carta de hamburguesas">Ver la carta</a>
                        <a class="lordBoton" href="<?= url("/es/nuestra-ruta") ?>" title="Consultar las próximas paradas">Nuestra ruta</a>
                    </div>
                </div>
            </header>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
