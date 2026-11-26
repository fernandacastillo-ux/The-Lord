<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/politica-privacidad")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/politica-privacidad")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/pribatutasun-politika")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/politica-privacidad")) ?>" />
        <title>Política de privacidad y protección de datos | THE LORD</title>
        <meta
            name="description"
            content="Cómo trata THE LORD los datos que envías por el formulario de contacto: responsable, finalidad, base legal, conservación y cómo ejercer tus derechos RGPD."
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
                <h1 class="headerLord__titulo">Política de privacidad</h1>
                <p class="headerLord__texto">
                    Qué hacemos con los datos que nos envías y cómo puedes decidir sobre ellos.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordLegal" aria-labelledby="privacidad-tratamiento-es">
                <h2 class="sectLordLegal__titulo" id="privacidad-tratamiento-es">Tratamiento de tus datos</h2>
                <p>
                    Esta política explica cómo se tratan los datos personales recogidos en esta web, de acuerdo con el
                    Reglamento (UE) 2016/679 (RGPD) y la Ley Orgánica 3/2018 (LOPDGDD).
                </p>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-responsable-es">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-responsable-es">Responsable del tratamiento</h3>
                    <p>
                        [Razón social o nombre del titular, pendiente], con nombre comercial THE LORD, NIF [pendiente] y
                        domicilio en [pendiente]. Contacto:
                        <a href="mailto:hola@thelord.es" title="Escribir un correo a THE LORD">hola@thelord.es</a>.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-datos-es">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-datos-es">Datos que recogemos y finalidad</h3>
                    <p>
                        Mediante el <a href="<?= url("/es/contacto") ?>" title="Ir al formulario de contacto">formulario de contacto</a>
                        recogemos nombre y apellidos, correo electrónico, teléfono y el mensaje que escribas. Los usamos
                        únicamente para responder a tu consulta y, si lo solicitas, preparar un presupuesto para tu
                        evento. No los utilizamos para enviar publicidad ni elaboramos perfiles.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-base-es">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-base-es">Base legal</h3>
                    <p>
                        El consentimiento que otorgas al marcar la casilla de aceptación antes de enviar el formulario
                        (art. 6.1.a RGPD) y, cuando pides un presupuesto, la aplicación de medidas precontractuales a tu
                        solicitud (art. 6.1.b RGPD). Puedes retirar el consentimiento en cualquier momento.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-conservacion-es">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-conservacion-es">Conservación y destinatarios</h3>
                    <p>
                        Conservamos los datos el tiempo necesario para atender tu consulta y, después, durante los plazos
                        legales que correspondan. No se ceden a terceros salvo obligación legal. El proveedor de
                        alojamiento y de correo electrónico puede acceder a ellos como encargado del tratamiento.
                    </p>
                </article>
            </section>

            <section class="sectLordLegal" aria-labelledby="privacidad-derechos-es">
                <h2 class="sectLordLegal__titulo" id="privacidad-derechos-es">Tus derechos</h2>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-ejercicio-es">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-ejercicio-es">Cómo ejercerlos</h3>
                    <p>Puedes solicitar en cualquier momento:</p>
                    <ul>
                        <li>Acceso a tus datos, rectificación o supresión.</li>
                        <li>Limitación del tratamiento u oposición a él.</li>
                        <li>Portabilidad de los datos que nos hayas facilitado.</li>
                    </ul>
                    <p>
                        Escribe a <a href="mailto:hola@thelord.es" title="Escribir un correo a THE LORD">hola@thelord.es</a>
                        indicando el derecho que quieres ejercer. Si consideras que no se han respetado, puedes reclamar
                        ante la <a href="https://www.aepd.es" title="Web de la Agencia Española de Protección de Datos" rel="noopener" target="_blank">Agencia Española de Protección de Datos</a>.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="privacidad-relacion-es">
                    <h3 class="sectLordLegal__subtitulo" id="privacidad-relacion-es">Más información</h3>
                    <p>
                        Los datos del titular y las condiciones de uso están en el
                        <a href="<?= url("/es/aviso-legal") ?>" title="Leer el aviso legal">aviso legal</a>, y el uso de
                        cookies se explica en <a href="<?= url("/es/gestion-cookies") ?>" title="Consultar y gestionar las cookies">gestión de cookies</a>.
                    </p>
                    <p class="sectLordLegal__actualizado">Última actualización: noviembre de 2026.</p>
                </article>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
