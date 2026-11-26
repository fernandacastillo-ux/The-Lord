<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/lege-oharra")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/aviso-legal")) ?>" />
        <title>Aviso legal: titular y condiciones de uso de la web | THE LORD</title>
        <meta
            name="description"
            content="Aviso legal de THE LORD: datos del titular de la web, condiciones de uso, propiedad intelectual, responsabilidad y legislación aplicable al sitio del foodtruck."
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
                <h1 class="headerLord__titulo">Aviso legal</h1>
                <p class="headerLord__texto">
                    Quién está detrás de esta web y en qué condiciones puedes utilizarla.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordLegal" aria-labelledby="legal-titular-es">
                <h2 class="sectLordLegal__titulo" id="legal-titular-es">Datos del titular</h2>
                <p>
                    En cumplimiento del artículo 10 de la Ley 34/2002, de servicios de la sociedad de la información y
                    de comercio electrónico (LSSI-CE), se informa de los datos identificativos del titular de este
                    sitio web.
                </p>
                <dl class="sectLordLegal__datos">
                    <div>
                        <dt>Titular</dt>
                        <dd>[Razón social o nombre del titular, pendiente]</dd>
                    </div>
                    <div>
                        <dt>Nombre comercial</dt>
                        <dd>THE LORD</dd>
                    </div>
                    <div>
                        <dt>NIF / CIF</dt>
                        <dd>[NIF pendiente]</dd>
                    </div>
                    <div>
                        <dt>Domicilio</dt>
                        <dd>[Domicilio social pendiente]</dd>
                    </div>
                    <div>
                        <dt>Correo electrónico</dt>
                        <dd><a href="mailto:hola@thelord.es" title="Escribir un correo a THE LORD">hola@thelord.es</a></dd>
                    </div>
                    <div>
                        <dt>Teléfono</dt>
                        <dd><a href="tel:+34612034567" title="Llamar a THE LORD">+34 612 034 567</a></dd>
                    </div>
                </dl>
            </section>

            <section class="sectLordLegal" aria-labelledby="legal-condiciones-es">
                <h2 class="sectLordLegal__titulo" id="legal-condiciones-es">Condiciones de uso</h2>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-uso-es">
                    <h3 class="sectLordLegal__subtitulo" id="legal-uso-es">Uso del sitio web</h3>
                    <p>
                        El acceso a esta web es gratuito y atribuye la condición de persona usuaria, que se compromete a
                        utilizarla conforme a la ley, la buena fe y el presente aviso legal. No está permitido emplearla
                        para actividades ilícitas, introducir código malicioso ni dañar los sistemas de THE LORD o de
                        terceros.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-propiedad-es">
                    <h3 class="sectLordLegal__subtitulo" id="legal-propiedad-es">Propiedad intelectual e industrial</h3>
                    <p>
                        Los textos, imágenes, logotipos, diseño y código de esta web pertenecen a su titular o se usan
                        con autorización de sus autores. Queda prohibida su reproducción, distribución o transformación
                        con fines comerciales sin permiso expreso.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-responsabilidad-es">
                    <h3 class="sectLordLegal__subtitulo" id="legal-responsabilidad-es">Responsabilidad</h3>
                    <p>
                        THE LORD procura que la información publicada, como la carta o las paradas del foodtruck, sea
                        exacta y esté actualizada, pero puede cambiar sin previo aviso. No se responsabiliza de las
                        interrupciones del servicio ni del contenido de las webs externas a las que se enlace.
                    </p>
                </article>

                <article class="sectLordLegal__articulo" aria-labelledby="legal-ley-es">
                    <h3 class="sectLordLegal__subtitulo" id="legal-ley-es">Legislación aplicable</h3>
                    <p>
                        Este aviso legal se rige por la legislación española. Para el tratamiento de datos personales,
                        consulta la <a href="<?= url("/es/politica-privacidad") ?>" title="Leer la política de privacidad">política de privacidad</a>;
                        para el uso de cookies, la página de <a href="<?= url("/es/gestion-cookies") ?>" title="Consultar y gestionar las cookies">gestión de cookies</a>.
                    </p>
                    <p class="sectLordLegal__actualizado">Última actualización: noviembre de 2026.</p>
                </article>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
