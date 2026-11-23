<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu/harremanetan")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es/contacto")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu/harremanetan")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es/contacto")) ?>" />
        <title>Harremanetan: kontratatu foodtrucka zure ekitaldirako | THE LORD</title>
        <meta
            name="description"
            content="Ezteiak, jaialdia edo enpresa-topaketa? Kontaiguzu data, lekua eta bertaratu kopurua, eta THE LORD eramango dugu zure ekitaldira, Madrilen edo Espainia osoan."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="Harremanetan: kontratatu foodtrucka zure ekitaldirako | THE LORD" />
        <meta
            property="og:description"
            content="Ezteiak, jaialdia edo enpresa-topaketa? Kontaiguzu data, lekua eta bertaratu kopurua, eta THE LORD eramango dugu zure ekitaldira, Madrilen edo Espainia osoan."
        />
        <meta property="og:url" content="<?= e(app_url("/eu/harremanetan")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/cabecera-contacto.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Harremanetan: kontratatu foodtrucka zure ekitaldirako | THE LORD" />
        <meta
            name="twitter:description"
            content="Ezteiak, jaialdia edo enpresa-topaketa? Kontaiguzu data, lekua eta bertaratu kopurua, eta THE LORD eramango dugu zure ekitaldira, Madrilen edo Espainia osoan."
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
        <?php require app_path("includes/eu/nav.php"); ?>

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
                <p class="lordEyebrow">Hitz egin dezagun</p>
                <h1 class="headerLord__titulo">Zure hurrengo<br /><em>oturuntzan egon nahi dugu.</em></h1>
                <p class="headerLord__texto">
                    Ekitaldiak, jaialdiak, ospakizunak edo edozein zalantza. Kontaiguzu zure ideia eta elkarrizketa
                    hasiko dugu.
                </p>
            </div>
        </header>

        <main id="contenido">
            <section class="sectLordContacto" aria-labelledby="contacto-titulo-eu">
                <div class="sectLordContacto__detalles">
                    <p class="lordEyebrow">Harreman zuzena</p>
                    <h2 class="lordTitulo" id="contacto-titulo-eu">Eman lehen<br /><em>urratsa.</em></h2>
                    <p>
                        Normalean 24 ordu baino lehen erantzuten dugu. Zure kontsulta presazkoa bada, zuzenean dei
                        diezagukezu.
                    </p>
                    <dl>
                        <div class="sectLordContacto__dato">
                            <dt>Posta elektronikoa</dt>
                            <dd><a href="mailto:hola@thelord.es" title="THE LORDi mezu elektroniko bat idatzi">hola@thelord.es</a></dd>
                        </div>
                        <div class="sectLordContacto__dato">
                            <dt>Telefonoa</dt>
                            <dd><a href="tel:+34612034567" title="THE LORDi deitu">+34 612 034 567</a></dd>
                        </div>
                        <div class="sectLordContacto__dato">
                            <dt>Zerbitzu-eremua</dt>
                            <dd>Madril eta Espainia osoa</dd>
                        </div>
                    </dl>
                </div>

                <div class="sectLordContacto__formulario">
                    <div id="modal_envio" aria-live="polite">
                        <h3 id="h3_modal_envio">Kontsulta bidali da</h3>
                        <p id="p_modal_envio">Zure mezua behar bezala jaso dugu.</p>
                        <button class="lordBoton" type="button" id="boton_modal_envio">Beste kontsulta bat idatzi</button>
                    </div>

                    <form id="idForAjax" action="<?= e(app_url("/app/artForm02")) ?>" method="post" aria-label="Harremanetarako formularioa">
                        <p class="error" id="errorForm02" aria-live="assertive"></p>

                        <div class="sectLordContacto__fila">
                            <div>
                                <label for="nombreAjax">Izen-abizenak *</label>
                                <input
                                    type="text"
                                    id="nombreAjax"
                                    name="nombre"
                                    placeholder="Zure izena"
                                    minlength="3"
                                    maxlength="40"
                                    autocomplete="name"
                                    required
                                />
                            </div>
                            <div>
                                <label for="emailAjax">Helbide elektronikoa *</label>
                                <input
                                    type="email"
                                    id="emailAjax"
                                    name="email"
                                    placeholder="zu@posta.eus"
                                    autocomplete="email"
                                    required
                                />
                            </div>
                        </div>

                        <label for="telefonoAjax">Telefonoa *</label>
                        <input
                            type="tel"
                            id="telefonoAjax"
                            name="telefono"
                            placeholder="+34 600 000 000"
                            autocomplete="tel"
                            required
                        />

                        <label for="mensajeAjax">Kontaiguzu zure ideia *</label>
                        <textarea
                            id="mensajeAjax"
                            name="mensaje"
                            rows="7"
                            placeholder="Data, lekua, pertsona kopurua eta jakin behar dugun guztia..."
                            minlength="4"
                            maxlength="200"
                            required
                        ></textarea>

                        <div class="sectLordContacto__check">
                            <input type="checkbox" id="terminosAjax" name="terminos" required />
                            <label for="terminosAjax">
                                Onartzen dut THE LORDek datu hauek nire kontsultari erantzuteko erabiltzea. *
                            </label>
                        </div>

                        <label for="respuestaajax">Ebatzi eragiketa hau *</label>
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
                            Kontsulta bidali <span class="lordFlecha" aria-hidden="true"></span>
                        </button>
                    </form>

                    <div class="moduloLoader01" id="moduloLoader01" role="status" aria-label="Kontsulta bidaltzen">
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

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
