<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/gestion-cookies")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/gestion-cookies")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/cookien-kudeaketa")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/gestion-cookies")) ?>" />
        <title>Gestión de cookies: qué usamos y cómo configurarlas | THE LORD</title>
        <meta
            name="description"
            content="Qué cookies y servicios de terceros utiliza la web de THE LORD, para qué sirven y cómo aceptar, rechazar o cambiar tus preferencias en cualquier momento."
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
        <?php require app_path("includes/es/nav.php"); ?>

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
                <p class="lordEyebrow">Información legal</p>
                <h1 class="headerLord__titulo">Gestión de cookies</h1>
                <p class="headerLord__texto">
                    Qué guarda esta web en tu navegador y cómo puedes decidirlo tú.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordLegal" aria-labelledby="cookies-uso-es">
                <h2 class="sectLordLegal__titulo" id="cookies-uso-es">Cookies de esta web</h2>
                <p>
                    Las cookies son pequeños archivos que una web guarda en tu dispositivo. Según el artículo 22.2 de
                    la LSSI-CE, solo instalamos las que no son técnicas cuando nos das tu consentimiento.
                </p>

                <article class="sectLordLegal__articulo" aria-labelledby="cookies-tipos-es">
                    <h3 class="sectLordLegal__subtitulo" id="cookies-tipos-es">Qué cookies y servicios utilizamos</h3>
                    <div class="sectLordLegal__tabla">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Finalidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gestor de consentimiento (CookieLad)</td>
                                    <td>Técnica, propia</td>
                                    <td>Recordar si has aceptado o rechazado las cookies para no volver a preguntarte.</td>
                                </tr>
                                <tr>
                                    <td>Google Fonts</td>
                                    <td>Servicio de terceros</td>
                                    <td>Cargar las tipografías de la web. Google puede recibir tu dirección IP.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>
                        Esta web no utiliza cookies publicitarias. Si en el futuro se incorporan cookies analíticas o de
                        otro tipo, se añadirán a esta tabla y solo se activarán con tu permiso.
                    </p>
                </article>
            </section>

            <section class="sectLordLegal" aria-labelledby="cookies-gestion-es">
                <h2 class="sectLordLegal__titulo" id="cookies-gestion-es">Cómo gestionar tus preferencias</h2>

                <article class="sectLordLegal__articulo" aria-labelledby="cookies-panel-es">
                    <h3 class="sectLordLegal__subtitulo" id="cookies-panel-es">Desde el aviso de cookies</h3>
                    <p>
                        La primera vez que visitas la web aparece un aviso donde puedes aceptar, rechazar o configurar
                        las cookies. Para cambiar tu decisión, borra las cookies de este sitio en tu navegador y el aviso
                        volverá a mostrarse.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="cookies-navegador-es">
                    <h3 class="sectLordLegal__subtitulo" id="cookies-navegador-es">Desde tu navegador</h3>
                    <p>También puedes bloquear o eliminar las cookies en la configuración de tu navegador:</p>
                    <ul>
                        <li><a href="https://support.google.com/chrome/answer/95647" title="Ayuda de Chrome sobre cookies" rel="noopener" target="_blank">Google Chrome</a></li>
                        <li><a href="https://support.mozilla.org/es/kb/Borrar%20cookies" title="Ayuda de Firefox sobre cookies" rel="noopener" target="_blank">Mozilla Firefox</a></li>
                        <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" title="Ayuda de Safari sobre cookies" rel="noopener" target="_blank">Safari</a></li>
                        <li><a href="https://support.microsoft.com/es-es/microsoft-edge" title="Ayuda de Microsoft Edge" rel="noopener" target="_blank">Microsoft Edge</a></li>
                    </ul>
                    <p>
                        Más información sobre tus datos en la
                        <a href="<?= url("/es/politica-privacidad") ?>" title="Leer la política de privacidad">política de privacidad</a>
                        y sobre el titular en el <a href="<?= url("/es/aviso-legal") ?>" title="Leer el aviso legal">aviso legal</a>.
                    </p>
                    <p class="sectLordLegal__actualizado">Última actualización: noviembre de 2026.</p>
                </article>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
