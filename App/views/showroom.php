<!doctype html>
<html lang="<?= e($lang ?? env("LANG_DEFAULT", "es")) ?>">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= url("/showroom") ?>" />
        <title>Showroom de resources</title>
        <meta name="description" content="Showroom interno con todos los resources y componentes del stack." />
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= vite_tags($route["resources"] ?? null) ?>
        <?php require app_path("includes/cookielad.php"); ?>
    </head>
    <body>
        <?php require app_path("includes/es/nav.php"); ?>

        <header class="header01">
            <img class="header01__media" src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
            <div class="header01__content">
                <p class="header01__eyebrow">Header 01</p>
                <h1>Showroom de resources</h1>
                <p class="header01__text">
                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                    simulacrum.
                </p>
                <a href="#showroom-recursos" class="boton">Ver recursos</a>
            </div>
        </header>

        <header class="header02">
            <img class="header02__media" src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
            <div class="header02__content">
                <p class="header02__eyebrow">Header 02</p>
                <h1 class="header02__title">Header 02</h1>
                <p class="header02__text">
                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et realitatem.
                </p>
                <a href="#showroom-recursos" class="boton">Continuar</a>
            </div>
        </header>

        <main>
            <section aria-labelledby="headers-title">
                <h2 id="headers-title">Recursos Header</h2>
            </section>

            <section id="showroom-recursos">
                <h2 class="moduloNikoH2">Módulo Niko H2</h2>
            </section>

            <section class="sect01">
                <div class="h2Especial">
                    <span></span>
                    <h2>Sección 01</h2>
                </div>

                <article>
                    <div>
                        <h3>Sección 01 · Matrix ipsum</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                        </p>
                        <span></span>
                        <div class="cards">
                            <div class="card">
                                <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                                <h4>Matrix ipsum 01</h4>
                                <p>
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                    codicem et simulacrum.
                                </p>
                                <a href="" class="moduloBoton01">
                                    <span>Módulo Botón 01</span>
                                    <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                                </a>
                            </div>
                            <div class="card">
                                <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                                <h4>Matrix ipsum 02</h4>
                                <p>
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem
                                    et realitatem.
                                </p>
                                <a href="" class="moduloBoton01">
                                    <span>Módulo Botón 01</span>
                                    <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                                </a>
                            </div>
                        </div>
                        <a href="" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                        </a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>
                </article>
            </section>

            <section class="sect02">
                <div class="h2Especial">
                    <span></span>
                    <h2>Sección 02</h2>
                </div>
                <div class="sect02-content">
                    <ul>
                        <li>
                            <a href="tel:+34000000000" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/call.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>000 000 000</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/logo-whatsapp.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>600 123 123</span>
                            </a>
                        </li>

                        <li>
                            <a href="mailto:info@example.com" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/mail-solid.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>correo@correo.com</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" title="Lorem ipsum" target="_blank">
                                <img src="<?= asset("assets/img/icons/location.svg") ?>" alt="Matrix" title="Lorem ipsum" width="20" height="20" />
                                <span>Lorem ipsum<br />Dolor sit amet</span>
                            </a>
                        </li>
                    </ul>

                    <iframe
                        src="about:blank"
                        title="Mapa de ejemplo"
                        width="100%"
                        height="300"
                        style="border: 0"
                        loading="lazy"
                    ></iframe>
                </div>
            </section>

            <section>
                <div class="h2Especial">
                    <span></span>
                    <h2>Artículos 01 a 13</h2>
                </div>

                <article class="art01">
                    <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    <div>
                        <h3>Artículo 01</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum.
                        </p>

                        <a href="" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                        </a>
                    </div>
                </article>

                <article class="art02">
                    <div class="textos">
                        <h3>Artículo 02</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem,
                            pillula rubra aperiam systema et realitatem.
                        </p>

                        <a href="" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="" title="" />
                        </a>
                    </div>

                    <div class="imagenes">
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="" />
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="" />
                    </div>
                </article>

                <article class="art02-bis">
                    <div class="textos">
                        <h3>Artículo 02-bis</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                        </p>
                        <a href="<?= url("/es/servicios") ?>" class="moduloBoton02">
                            <span>Módulo Botón 02</span>
                            <img src="<?= asset("assets/img/icons/arrow-forward-outline.svg") ?>" alt="Matrix" title="Lorem ipsum" />
                        </a>
                    </div>

                    <div class="imagenes">
                        <a href="<?= url("/es/servicios") ?>" title="Lorem ipsum">
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="Lorem ipsum" />
                            <h4>Matrix ipsum 01</h4>
                        </a>
                        <a href="<?= url("/es/servicios") ?>" title="Lorem ipsum">
                            <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" title="Lorem ipsum" />
                            <h4>Matrix ipsum 02</h4>
                        </a>
                        <a href="<?= url("/es/servicios") ?>" title="Lorem ipsum">
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="Lorem ipsum" />
                            <h4>Matrix ipsum 03</h4>
                        </a>
                    </div>
                </article>

                <article class="art03">
                    <h3>Artículo 03</h3>

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Agent Smith erroribus reiciendis, Zion libertatem defendit.
                    </p>

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et
                        realitatem.
                    </p>

                    <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                </article>

                <article class="art04">
                    <h3>Artículo 04</h3>
                    <span class="ralla"></span>
                    <div class="contenedor-fichas">
                        <div class="ficha">
                            <h4>Matrix ipsum 01</h4>
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                codicem et simulacrum.
                            </p>
                            <span class="ralla"></span>
                        </div>

                        <div class="ficha">
                            <h4>Matrix ipsum 02</h4>
                            <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et
                                realitatem.
                            </p>
                            <span class="ralla"></span>
                        </div>

                        <div class="ficha">
                            <h4>Matrix ipsum 03</h4>
                            <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus
                                reiciendis et systema.
                            </p>
                            <span class="ralla"></span>
                        </div>

                        <div class="ficha">
                            <h4>Matrix ipsum 04</h4>
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="" />
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit
                                contra machinas.
                            </p>
                            <span class="ralla"></span>
                        </div>
                    </div>
                </article>

                <article class="art05">
                    <h3>Artículo 05</h3>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum.
                    </p>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem, pillula
                        rubra aperiam systema et realitatem.
                    </p>
                    <a href="" class="boton">CTA</a>
                </article>

                <article class="art06">
                    <div>
                        <h3>Artículo 06</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis,
                            Zion libertatem defendit dum machinae mundum regunt.
                        </p>
                        <a href="#" title="" class="boton">CTA</a>
                    </div>
                </article>

                <article class="art07">
                    <h3>Artículo 07</h3>

                    <img src="<?= asset("assets/img/test/dummy_900.avif") ?>" width="900" alt="" title="" />

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                    </p>

                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et
                        Zion libertatem defendit.
                    </p>

                    <a href="" class="boton">CTA</a>
                </article>

                <article class="art08">
                    <h3>Artículo 08</h3>
                    <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum.
                    </p>
                    <a href="#" class="boton">CTA</a>
                </article>

                <article class="art09">
                    <h3>Artículo 09</h3>

                    <div class="art09-content">
                        <div class="contenedor-lista">
                            <h4>Matrix ipsum columna 01</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: pillula rubra.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: codex revelatus.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Zion vigilat.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Neo eligendi.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: machinae quaerunt.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="contenedor-lista">
                            <h4>Matrix ipsum columna 02</h4>
                            <ul>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: simulacrum cadit.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Morpheus respondet.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Trinity navigat.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: Agent Smith advenit.</span>
                                </li>
                                <li>
                                    <img src="<?= asset("assets/img/icons/checkmark-circle.svg") ?>" alt="" title="" />
                                    <span>Matrix ipsum: realitas aperitur.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="art10">
                    <h3>Artículo 10</h3>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                    </p>
                    <div class="matrix-items">
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/home-solid.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 01</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                codicem.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/garages.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 02</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/furniture.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 03</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Pillula rubra aperiam
                                systema.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/paint-tool.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 04</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus
                                reiciendis.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/tools-power-drill-sharp.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 05</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/stairs-arch.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 06</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Machinae mundum regunt.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/business.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 07</h4>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Simulacrum veritatem celat.
                            </p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/house-check-fill.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 08</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Codex realitatem mutat.</p>
                        </div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/icons/thumbs-up-outline.svg") ?>" alt="" title="" />
                            <h4 class="sub-header">Matrix ipsum 09</h4>
                            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo systema transcendit.</p>
                        </div>
                    </div>
                </article>

                <article class="art11">
                    <h3>Artículo 11</h3>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art12">
                    <h3>Artículo 12</h3>
                    <p>
                        Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                        simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                    </p>
                    <div>
                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 01</h4>
                                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Neo veritatem eligit.</p>
                            </div>
                        </div>

                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 02</h4>
                                <p>
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat
                                    optionem.
                                </p>
                                <p>Pillula rubra aperit.</p>
                            </div>
                        </div>

                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 03</h4>
                                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Zion libertatem defendit.</p>
                            </div>
                        </div>

                        <div class="ficha">
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" title="" />
                            <div>
                                <h4>Matrix ipsum 04</h4>
                                <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Systema simulacrum celat.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="art13">
                    <img alt="" title="" src="<?= asset("assets/img/test/dummy_1200.avif") ?>" />
                    <div>
                        <h3>Artículo 13 · Variante 01</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.
                        </p>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis
                            et Zion libertatem defendit.
                        </p>
                        <a href="#" class="boton">CTA</a>
                    </div>
                </article>

                <article class="art13 upsidedown">
                    <img alt="" title="" src="<?= asset("assets/img/test/dummy_1200.avif") ?>" />
                    <div>
                        <h3>Artículo 13 · Variante invertida</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem,
                            pillula rubra aperiam systema et realitatem.
                        </p>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum.
                        </p>
                        <a href="#" class="boton">CTA</a>
                    </div>
                </article>

                <article class="artForm02">
                    <h3>artForm02</h3>
                    <div>
                        <div class="contenedor-form">
                            <img src="<?= asset("assets/img/icons/mail-solid.svg") ?>" alt="" />

                            <div id="modal_envio">
                                <h3 id="h3_modal_envio">Matrix ipsum modal</h3>
                                <p id="p_modal_envio">
                                    Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                    codicem et simulacrum.
                                </p>
                                <div class="boton" id="boton_modal_envio">Escribir otra consulta</div>
                            </div>

                            <form id="idForAjax" action="<?= e(app_url("/app/artForm02")) ?>" method="post">
                                <p class="error" id="errorForm02"></p>

                                <label for="nombreAjax">Nombre *</label>
                                <input type="text" id="nombreAjax" name="nombre" placeholder="Lorem ipsum" />

                                <label for="telefonoAjax">Teléfono *</label>
                                <input type="tel" id="telefonoAjax" name="telefono" placeholder="Lorem ipsum" />

                                <label for="emailAjax">Correo Electrónico</label>
                                <input type="email" id="emailAjax" name="email" placeholder="Lorem ipsum" />

                                <label for="mensajeAjax">Escribe tu mensaje</label>
                                <textarea name="mensaje" id="mensajeAjax" placeholder="Lorem ipsum"></textarea>

                                <div class="horizontal">
                                    <label for="terminosAjax" id="consentimiento"
                                        >Acepto el envío de datos de prueba *</label
                                    >
                                    <input type="checkbox" name="terminos" id="terminosAjax" />
                                </div>

                                <label for="respuesta">Resuelve</label>
                                <div class="horizontal">
                                    <span id="num1ajax"></span>
                                    <span id="operadorajax"></span>
                                    <span id="num2ajax"></span>
                                    <input
                                        type="text"
                                        name="respUser"
                                        id="respuestaajax"
                                        placeholder="Lorem ipsum"
                                        autocomplete="off"
                                    />
                                    <input type="hidden" name="respSystem" id="respSystemajax" value="" />
                                </div>

                                <input type="hidden" name="url" value="<?= e($url) ?>" />
                                <input type="hidden" name="lang" value="<?= e($lang) ?>" />

                                <input type="submit" class="boton" value="Enviar" id="botonEnviarAjax" />
                            </form>

                            <div class="moduloLoader01" id="moduloLoader01">
                                <svg
                                    version="1.1"
                                    id="L7"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    viewBox="0 0 100 100"
                                    enable-background="new 0 0 100 100"
                                    xml:space="preserve"
                                >
                                    <path
                                        fill="#000000"
                                        d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                            c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z"
                                    >
                                        <animateTransform
                                            attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            dur="2s"
                                            from="0 50 50"
                                            to="360 50 50"
                                            repeatCount="indefinite"
                                        />
                                    </path>
                                    <path
                                        fill="#000000"
                                        d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                            c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z"
                                    >
                                        <animateTransform
                                            attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            dur="1s"
                                            from="0 50 50"
                                            to="-360 50 50"
                                            repeatCount="indefinite"
                                        />
                                    </path>
                                    <path
                                        fill="#000000"
                                        d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                            L82,35.7z"
                                    >
                                        <animateTransform
                                            attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            dur="2s"
                                            from="0 50 50"
                                            to="360 50 50"
                                            repeatCount="indefinite"
                                        />
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="contenedor-info">
                            <ul>
                                <li>
                                    <a href="tel:+34000000000" target="_blank">
                                        <img src="<?= asset("assets/img/icons/tel.svg") ?>" alt="" title="" />
                                        <span>000 000 000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@example.com" target="_blank">
                                        <img src="<?= asset("assets/img/icons/mail-solid.svg") ?>" alt="" title="" />
                                        <span>info@example.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="<?= asset("assets/img/icons/wa.svg") ?>" alt="" title="" />
                                        <span>000 000 000</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <img src="<?= asset("assets/img/icons/map-pin-solid.svg") ?>" alt="" title="" />
                                        <span>Lorem ipsum dolor sit amet</span>
                                    </a>
                                </li>
                            </ul>
                            <iframe
                                src="about:blank"
                                title="Mapa de ejemplo"
                                width="100%"
                                height="300"
                                style="border: 0"
                                loading="lazy"
                            ></iframe>
                        </div>
                    </div>
                </article>
            </section>

            <section id="section2">
                <h2>Artículos 14 y 15</h2>

                <article class="art14">
                    <div class="content">
                        <h3>Artículo 14</h3>
                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Agent
                            Smith recusandae Zion, dum machinae architecto mundum regunt et Trinity viam demonstrat.
                        </p>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art15">
                    <div>
                        <h3>Artículo 15</h3>
                        <p>Matrix ipsum dolor sit amet. Neo eligendi veritatis codicem et simulacrum.</p>
                        <p>
                            Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Agent Smith custodit
                            Matrix, sed Trinity et Neo per codicem navigant. Zion resistit machinis dum oraculum
                            responsum revelat.
                        </p>
                    </div>

                    <div>
                        <a href="" class="item">
                            <h4>Matrix ipsum 01</h4>
                            <p>Neo eligendi veritatis codicem, dum pillula rubra realitatem aperit.</p>
                            <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" width="700" height="700" />
                        </a>

                        <a href="" class="item">
                            <h4>Matrix ipsum 02</h4>
                            <p>Morpheus quaerat optionem et Trinity per simulacrum navigat.</p>
                            <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                        </a>

                        <a href="" class="item">
                            <h4>Matrix ipsum 03</h4>
                            <p>Agent Smith codicem custodit, sed Zion machinis resistit.</p>
                            <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                        </a>
                    </div>

                    <div class="modulePersonal01">
                        <div>
                            <img src="<?= asset("assets/img/icons/truck.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 01</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/tools.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 02</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/clip.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 03</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/bag.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 04</h4>
                        </div>
                        <div>
                            <img src="<?= asset("assets/img/icons/money.svg") ?>" alt="" />
                            <h4>modulePersonal01 · Item 05</h4>
                        </div>
                    </div>
                </article>

                <article class="artAcordeon01">
                    <div class="cabecera">
                        <div>
                            <h3>artAcordeon01</h3>
                            <p>
                                Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis
                                codicem et simulacrum.
                            </p>
                            <p>
                                Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Trinity navigat
                                dum Agent Smith codicem custodit.
                            </p>
                        </div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                    <div class="contenedor">
                        <div class="ficha">
                            <h4>Matrix quaestio 01</h4>
                            <p class="respuesta">
                                Matrix ipsum dolor sit amet. Neo eligendi pillulam rubram et veritatem post codicem
                                invenit.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 02</h4>
                            <p class="respuesta">
                                Morpheus quaerat optionem et simulacrum aperit. Machinae codicem regunt, sed Zion
                                resistit.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 03</h4>
                            <p class="respuesta">Trinity per systema navigat, dum Neo leges simulacri mutare discit.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 04</h4>
                            <p class="respuesta">Agent Smith recusandae libertatem et multiplicat se intra Matrix.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 05</h4>
                            <p class="respuesta">Oraculum responsum non imponit; electio viam ante Neo revelat.</p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                        <div class="ficha">
                            <h4>Matrix quaestio 06</h4>
                            <p class="respuesta">
                                Zion vigilat et homines contra machinas ultimam realitatem defendunt.
                            </p>
                            <span class="mostrar boton">Mostrar más</span>
                        </div>
                    </div>
                </article>
            </section>

            <section id="section3">
                <h2>Artículo 16</h2>

                <article class="art16">
                    <div>
                        <h3>Artículo 16 · Variante 01</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et
                            simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Trinity
                            navigat per lineas codicis dum machinae architecto mundum regunt.
                        </p>

                        <p>Agent Smith recusandae libertatem, sed Zion veritatem defendit.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art16 invert">
                    <div>
                        <h3>Artículo 16 · Variante invertida</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et Neo
                            codicem sequitur. Pillula rubra simulacrum frangit, dum Trinity ostium ad realitatem
                            invenit.
                        </p>

                        <p>Machinae systema custodiunt, sed electio cursum mutat.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art16">
                    <div>
                        <h3>Artículo 16 · Variante 03</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatem et leges
                            mundi virtualis superat. Oraculum quaestionem relinquit, Morpheus fidem servat et Zion
                            vigilat.
                        </p>

                        <p>Codex fluit et simulacrum novam viam demonstrat.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <article class="art16 invert">
                    <div>
                        <h3>Artículo 16 · Variante invertida 04</h3>

                        <p>
                            Matrix ipsum dolor sit amet, consectetur adipisicing elit. Trinity codicem legit et Agent
                            Smith intra systema multiplicatur. Neo autem realitatem eligit et machinarum ordinem
                            recusat.
                        </p>

                        <p>Pillula rubra viam aperit; nulla electio sine consequentia manet.</p>

                        <a href="#" class="boton">CTA</a>
                    </div>

                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>
                </article>
            </section>

            <section id="section4">
                <h2>artSlider01</h2>

                <article class="artSlider01" aria-label="Carrusel de productos">
                    <div class="artSlider01__visor">
                        <div class="artSlider01__pista">
                            <div class="artSlider01__slide">
                                <h3>Matrix ipsum 01</h3>
                                <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                            </div>
                            <div class="artSlider01__slide">
                                <h3>Matrix ipsum 02</h3>
                                <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                            </div>

                            <div class="artSlider01__slide">
                                <h3>Matrix ipsum 03</h3>
                                <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                            </div>
                        </div>
                    </div>

                    <button class="artSlider01__arrow artSlider01__arrow--prev">&lsaquo;</button>
                    <button class="artSlider01__arrow artSlider01__arrow--next">&rsaquo;</button>

                    <div class="artSlider01__track">
                        <div class="artSlider01__track__dot active"></div>
                        <div class="artSlider01__track__dot"></div>
                        <div class="artSlider01__track__dot"></div>
                    </div>
                </article>
            </section>

            <section id="section5">
                <h2 data-lang="encabezado">artGrid</h2>

                <article class="artGrid">
                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy03.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy04.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy01.avif") ?>" alt="Matrix" />
                    </div>
                    <div>
                        <img src="<?= asset("assets/img/test/dummy02.avif") ?>" alt="Matrix" />
                    </div>
                </article>

                <div class="modulePersonal01">
                    <div>
                        <h4 data-lang>modulePersonal01 · Item 01</h4>
                        <img src="<?= asset("assets/img/icons/truck.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 02</h4>
                        <img src="<?= asset("assets/img/icons/tools.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 03</h4>
                        <img src="<?= asset("assets/img/icons/clip.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 04</h4>
                        <img src="<?= asset("assets/img/icons/bag.svg") ?>" alt="" />
                    </div>
                    <div>
                        <h4>modulePersonal01 · Item 05</h4>
                        <img src="<?= asset("assets/img/icons/money.svg") ?>" alt="" />
                    </div>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
