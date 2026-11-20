<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es/contacto")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/contacto")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/harremanetan")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/contacto")) ?>" />
        <title>Contacto: contrata el foodtruck para tu evento | THE LORD</title>
        <meta
            name="description"
            content="¿Una boda, un festival o un encuentro de empresa? Cuéntanos fecha, lugar y número de asistentes y llevamos THE LORD a tu evento en Madrid o toda España."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Contacto: contrata el foodtruck para tu evento | THE LORD" />
        <meta
            property="og:description"
            content="¿Una boda, un festival o un encuentro de empresa? Cuéntanos fecha, lugar y número de asistentes y llevamos THE LORD a tu evento en Madrid o toda España."
        />
        <meta property="og:url" content="<?= e(app_url("/es/contacto")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/cabecera-contacto.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Contacto: contrata el foodtruck para tu evento | THE LORD" />
        <meta
            name="twitter:description"
            content="¿Una boda, un festival o un encuentro de empresa? Cuéntanos fecha, lugar y número de asistentes y llevamos THE LORD a tu evento en Madrid o toda España."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/thelord/cabecera-contacto.webp")) ?>" />
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
                src="<?= asset("assets/img/thelord/cabecera-contacto.webp") ?>"
                width="1800"
                height="1000"
                alt=""
                fetchpriority="high"
                decoding="async"
            />
            <div class="headerLord__contenido">
                <p class="lordEyebrow">Hablemos</p>
                <h1 class="headerLord__titulo">Queremos estar<br /><em>en tu próximo festín.</em></h1>
                <p class="headerLord__texto">
                    Eventos, festivales, celebraciones o cualquier duda. Cuéntanos tu idea y abriremos la
                    conversación.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordContacto" aria-labelledby="contacto-titulo-es">
                <div class="sectLordContacto__detalles">
                    <p class="lordEyebrow">Contacto directo</p>
                    <h2 class="lordTitulo" id="contacto-titulo-es">Da el primer<br /><em>paso.</em></h2>
                    <p>
                        Respondemos habitualmente en menos de 24 horas. Si tu consulta es urgente, puedes llamarnos
                        directamente.
                    </p>
                    <dl>
                        <div class="sectLordContacto__dato">
                            <dt>Correo</dt>
                            <dd><a href="mailto:hola@thelord.es" title="Escribir un correo a THE LORD">hola@thelord.es</a></dd>
                        </div>
                        <div class="sectLordContacto__dato">
                            <dt>Teléfono</dt>
                            <dd><a href="tel:+34612034567" title="Llamar a THE LORD">+34 612 034 567</a></dd>
                        </div>
                        <div class="sectLordContacto__dato">
                            <dt>Zona de servicio</dt>
                            <dd>Madrid y toda España</dd>
                        </div>
                    </dl>
                </div>

                <div class="sectLordContacto__formulario">
                    <div id="modal_envio" aria-live="polite">
                        <h3 id="h3_modal_envio">Consulta enviada</h3>
                        <p id="p_modal_envio">Tu mensaje se ha recibido correctamente.</p>
                        <button class="lordBoton" type="button" id="boton_modal_envio">Escribir otra consulta</button>
                    </div>

                    <form id="idForAjax" action="<?= e(app_url("/app/artForm02")) ?>" method="post" aria-label="Formulario de contacto">
                        <p class="error" id="errorForm02" aria-live="assertive"></p>

                        <div class="sectLordContacto__fila">
                            <div>
                                <label for="nombreAjax">Nombre y apellidos *</label>
                                <input
                                    type="text"
                                    id="nombreAjax"
                                    name="nombre"
                                    placeholder="Tu nombre"
                                    minlength="3"
                                    maxlength="40"
                                    autocomplete="name"
                                    required
                                />
                            </div>
                            <div>
                                <label for="emailAjax">Correo electrónico *</label>
                                <input
                                    type="email"
                                    id="emailAjax"
                                    name="email"
                                    placeholder="tu@correo.es"
                                    autocomplete="email"
                                    required
                                />
                            </div>
                        </div>

                        <label for="telefonoAjax">Teléfono *</label>
                        <input
                            type="tel"
                            id="telefonoAjax"
                            name="telefono"
                            placeholder="+34 600 000 000"
                            autocomplete="tel"
                            required
                        />

                        <label for="mensajeAjax">Cuéntanos tu idea *</label>
                        <textarea
                            id="mensajeAjax"
                            name="mensaje"
                            rows="7"
                            placeholder="Fecha, lugar, número de personas y todo lo que debamos saber..."
                            minlength="4"
                            maxlength="200"
                            required
                        ></textarea>

                        <div class="sectLordContacto__check">
                            <input type="checkbox" id="terminosAjax" name="terminos" required />
                            <label for="terminosAjax">
                                Acepto que THE LORD utilice estos datos para responder a mi consulta. *
                            </label>
                        </div>

                        <label for="respuestaajax">Resuelve esta operación *</label>
                        <div class="sectLordContacto__captcha">
                            <span id="num1ajax"></span>
                            <span id="operadorajax"></span>
                            <span id="num2ajax"></span>
                            <span aria-hidden="true">=</span>
                            <input
                                type="text"
                                id="respuestaajax"
                                name="respUser"
                                inputmode="numeric"
                                autocomplete="off"
                                required
                            />
                            <input type="hidden" name="respSystem" id="respSystemajax" value="" />
                        </div>

                        <input type="hidden" name="url" value="<?= e($url) ?>" />
                        <input type="hidden" name="lang" value="<?= e($lang) ?>" />

                        <button class="lordBoton sectLordContacto__enviar" type="submit" id="botonEnviarAjax">
                            Enviar consulta <span class="lordFlecha" aria-hidden="true"></span>
                        </button>
                    </form>

                    <div class="moduloLoader01" id="moduloLoader01" role="status" aria-label="Enviando consulta">
                        <svg viewBox="0 0 50 50" aria-hidden="true">
                            <circle
                                cx="25"
                                cy="25"
                                r="20"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="5"
                                stroke-linecap="round"
                                stroke-dasharray="90 40"
                            >
                                <animateTransform
                                    attributeName="transform"
                                    type="rotate"
                                    from="0 25 25"
                                    to="360 25 25"
                                    dur="1s"
                                    repeatCount="indefinite"
                                />
                            </circle>
                        </svg>
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
