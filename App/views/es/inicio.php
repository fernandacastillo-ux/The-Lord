<?php $hamburguesas = require app_path("includes/es/hamburguesas.php"); ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es")) ?>" />
        <title>THE LORD | Foodtruck de hamburguesas vikingas en Madrid</title>
        <meta
            name="description"
            content="Hamburguesas artesanas forjadas al fuego en un foodtruck de estética vikinga. Descubre la carta, nuestra próxima parada en Madrid y cómo contratarnos."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="THE LORD | Foodtruck de hamburguesas vikingas en Madrid" />
        <meta
            property="og:description"
            content="Hamburguesas artesanas forjadas al fuego en un foodtruck de estética vikinga. Descubre la carta, nuestra próxima parada en Madrid y cómo contratarnos."
        />
        <meta property="og:url" content="<?= e(app_url("/es")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/hero-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="THE LORD | Foodtruck de hamburguesas vikingas en Madrid" />
        <meta
            name="twitter:description"
            content="Hamburguesas artesanas forjadas al fuego en un foodtruck de estética vikinga. Descubre la carta, nuestra próxima parada en Madrid y cómo contratarnos."
        />
        <meta name="twitter:image" content="<?= e(app_url("assets/img/thelord/hero-1.webp")) ?>" />
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

        <header class="headerLordSlider" data-lord-carrusel data-intervalo="5500">
            <div class="headerLordSlider__fondos">
                <img
                    class="headerLordSlider__imagen is-activa"
                    src="<?= asset("assets/img/thelord/hero-1.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Hamburguesa artesana recién hecha sobre una mesa de madera"
                    title="Hamburguesa artesana de THE LORD"
                    fetchpriority="high"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordSlider__imagen"
                    src="<?= asset("assets/img/thelord/hero-2.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Hamburguesa con queso preparada al fuego"
                    title="Hamburguesa con queso al fuego"
                    loading="lazy"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordSlider__imagen"
                    src="<?= asset("assets/img/thelord/hero-3.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Hamburguesa artesana acompañada de patatas"
                    title="Hamburguesa artesana con patatas"
                    loading="lazy"
                    decoding="async"
                    data-lord-slide
                />
            </div>
            <div class="headerLordSlider__humo" aria-hidden="true"></div>

            <div class="headerLordSlider__contenido">
                <p class="lordEyebrow">
                    <span aria-hidden="true"></span>
                    Fuego · Carne · Gloria
                    <span aria-hidden="true"></span>
                </p>
                <h1 class="headerLordSlider__titulo">Hambre de<br /><em>leyenda</em></h1>
                <p class="headerLordSlider__texto">
                    Hamburguesas forjadas al fuego, sin atajos ni rendiciones. Bienvenido al festín más salvaje de
                    la ciudad.
                </p>
                <div class="headerLordSlider__acciones">
                    <a class="lordBoton" href="<?= url("/es/hamburguesas") ?>" title="Ver la carta de hamburguesas">
                        Ver hamburguesas <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                    <a class="headerLordSlider__enlace" href="#ruta" title="Ver la próxima parada del foodtruck">
                        ¿Dónde estamos? <span aria-hidden="true">↓</span>
                    </a>
                </div>
            </div>

            <div class="headerLordSlider__controles" role="group" aria-label="Controles del carrusel de imágenes">
                <button class="headerLordSlider__flecha" type="button" aria-label="Imagen anterior" data-lord-anterior>
                    <span aria-hidden="true">←</span>
                </button>
                <div class="headerLordSlider__puntos">
                    <button class="is-activa" type="button" aria-label="Ver imagen 1" aria-current="true" data-lord-punto></button>
                    <button type="button" aria-label="Ver imagen 2" aria-current="false" data-lord-punto></button>
                    <button type="button" aria-label="Ver imagen 3" aria-current="false" data-lord-punto></button>
                </div>
                <button class="headerLordSlider__flecha" type="button" aria-label="Imagen siguiente" data-lord-siguiente>
                    <span aria-hidden="true">→</span>
                </button>
            </div>

            <p class="headerLordSlider__sello" aria-hidden="true">
                <span>Carne</span>
                <span class="lordRuna"></span>
                <span>Al fuego</span>
            </p>
        </header>

        <main id="contenido">
            <section class="sectLordManifiesto" aria-labelledby="inicio-manifiesto-es">
                <p class="sectLordManifiesto__numero" aria-hidden="true">01 <span></span></p>
                <div>
                    <p class="lordEyebrow">Nuestro juramento</p>
                    <h2 class="lordTitulo" id="inicio-manifiesto-es">No servimos<br /><em>comida rápida.</em></h2>
                </div>
                <div class="sectLordManifiesto__texto">
                    <p class="sectLordManifiesto__lead">Servimos comida <strong>hecha con furia.</strong></p>
                    <p>
                        Carne seleccionada, pan tostado y salsas propias. Cada hamburguesa se prepara al momento sobre
                        nuestra plancha, porque un verdadero festín no entiende de prisas.
                    </p>
                    <ul class="sectLordManifiesto__datos">
                        <li><strong>100%</strong><span>Vaca madurada</span></li>
                        <li><strong>0</strong><span>Congelados</span></li>
                        <li><strong>∞</strong><span>Actitud vikinga</span></li>
                    </ul>
                </div>
            </section>

            <section class="sectLordCarta" aria-labelledby="inicio-elegidas-es">
                <div class="sectLordCarta__cabecera">
                    <div>
                        <p class="lordEyebrow">Las elegidas</p>
                        <h2 class="lordTitulo" id="inicio-elegidas-es">Armas del <em>clan</em></h2>
                    </div>
                    <div class="sectLordCarta__intro">
                        <p>Tres leyendas de nuestra carta. Todas incluyen nuestro pan artesano marcado al fuego.</p>
                        <a class="lordEnlace sectLordCarta__enlace" href="<?= url("/es/hamburguesas") ?>" title="Ver la carta completa de hamburguesas">
                            Ver la carta completa <span class="lordFlecha" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>

                <div class="sectLordCarta__grid">
                    <?php foreach (array_slice($hamburguesas, 0, 3) as $indice => $hamburguesa): ?>
                        <article class="artLordBurger" aria-labelledby="inicio-burger-<?= e($hamburguesa["slug"]) ?>">
                            <div class="artLordBurger__foto">
                                <img
                                    src="<?= asset($hamburguesa["imagen"]) ?>"
                                    width="900"
                                    height="720"
                                    alt="Hamburguesa <?= e($hamburguesa["nombre"]) ?> de THE LORD"
                                    title="Hamburguesa <?= e($hamburguesa["nombre"]) ?>"
                                    loading="lazy"
                                    decoding="async"
                                />
                                <span class="artLordBurger__indice" aria-hidden="true">0<?= $indice + 1 ?></span>
                                <span class="artLordBurger__etiqueta"><?= e($hamburguesa["etiqueta"]) ?></span>
                            </div>
                            <div class="artLordBurger__info">
                                <div class="artLordBurger__fila">
                                    <h3 class="artLordBurger__nombre" id="inicio-burger-<?= e($hamburguesa["slug"]) ?>">
                                        <?= e($hamburguesa["nombre"]) ?>
                                    </h3>
                                    <p class="artLordBurger__precio"><?= e($hamburguesa["precio"]) ?> <small>€</small></p>
                                </div>
                                <p class="artLordBurger__descripcion"><?= e($hamburguesa["descripcion"]) ?></p>
                                <a
                                    class="lordEnlace"
                                    href="<?= url("/es/hamburguesas") ?>#hamburguesa-<?= e($hamburguesa["slug"]) ?>"
                                    title="Ver los ingredientes de la <?= e($hamburguesa["nombre"]) ?>"
                                >
                                    Descubrir la receta<span class="lordOculto"> de la <?= e($hamburguesa["nombre"]) ?></span>
                                    <span class="lordFlecha" aria-hidden="true"></span>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="sectLordExtras" aria-labelledby="inicio-extras-es">
                <div class="sectLordExtras__visual">
                    <img
                        class="sectLordExtras__fondo"
                        src="<?= asset("assets/img/thelord/extras.webp") ?>"
                        width="1100"
                        height="1100"
                        alt=""
                        loading="lazy"
                        decoding="async"
                    />
                    <span class="sectLordExtras__runa" aria-hidden="true">ᚠ</span>
                    <p class="sectLordExtras__lema">Ningún guerrero<br />marcha solo</p>
                </div>
                <div class="sectLordExtras__contenido">
                    <p class="lordEyebrow">Acompaña tu conquista</p>
                    <h2 class="lordTitulo" id="inicio-extras-es">Aliados del <em>festín</em></h2>
                    <p class="sectLordExtras__intro">
                        El complemento perfecto para tu batalla. Patatas crujientes y bebida bien fría.
                    </p>
                    <div class="sectLordExtras__lista">
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-patatas-es">
                            <span class="sectLordExtras__numero" aria-hidden="true">01</span>
                            <div>
                                <h3 id="inicio-extra-patatas-es">Patatas Drakkar</h3>
                                <p class="sectLordExtras__descripcion">Corte casero, sal ahumada y salsa de queso</p>
                            </div>
                            <p class="sectLordExtras__precio">4,50 €</p>
                        </article>
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-aros-es">
                            <span class="sectLordExtras__numero" aria-hidden="true">02</span>
                            <div>
                                <h3 id="inicio-extra-aros-es">Aros de Odín</h3>
                                <p class="sectLordExtras__descripcion">Cebolla crujiente con salsa barbacoa nórdica</p>
                            </div>
                            <p class="sectLordExtras__precio">5,20 €</p>
                        </article>
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-hidromiel-es">
                            <span class="sectLordExtras__numero" aria-hidden="true">03</span>
                            <div>
                                <h3 id="inicio-extra-hidromiel-es">Hidromiel</h3>
                                <p class="sectLordExtras__descripcion">Refresco artesano de miel, limón y jengibre</p>
                            </div>
                            <p class="sectLordExtras__precio">3,80 €</p>
                        </article>
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-cerveza-es">
                            <span class="sectLordExtras__numero" aria-hidden="true">04</span>
                            <div>
                                <h3 id="inicio-extra-cerveza-es">Cerveza del Jarl</h3>
                                <p class="sectLordExtras__descripcion">Cerveza tostada local, fría como un fiordo</p>
                            </div>
                            <p class="sectLordExtras__precio">3,50 €</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sectLordParada" id="ruta" aria-labelledby="inicio-parada-es">
                <p class="sectLordParada__linea" aria-hidden="true"><span></span>Próxima parada<span></span></p>
                <div class="sectLordParada__interior">
                    <div class="sectLordParada__texto">
                        <p class="lordEyebrow">Sigue el humo</p>
                        <h2 class="lordTitulo" id="inicio-parada-es">Encuentra<br />nuestro <em>drakkar</em></h2>
                        <p>Esta semana atracamos junto al río. Ven con hambre; nosotros ponemos el fuego.</p>
                    </div>
                    <article class="sectLordParada__tarjeta" aria-labelledby="inicio-destino-es">
                        <p class="sectLordParada__fecha">
                            <span>Vie — Dom</span>
                            <strong>17—19</strong>
                            <small>Octubre</small>
                        </p>
                        <div class="sectLordParada__info">
                            <p class="sectLordParada__etiqueta">Próximo destino</p>
                            <h3 id="inicio-destino-es">Mercado de Motores</h3>
                            <p>Paseo de las Delicias, 61 · Madrid</p>
                            <p class="sectLordParada__horario">Viernes 19—00 h · Sábado y domingo 13—00 h</p>
                            <a
                                class="lordEnlace"
                                href="https://maps.google.com/?q=Paseo+de+las+Delicias+61+Madrid"
                                target="_blank"
                                rel="noopener noreferrer"
                                title="Abrir el Mercado de Motores en Google Maps (nueva pestaña)"
                            >
                                Abrir en mapas <span class="lordFlecha" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>
            </section>

            <section class="sectLordOpiniones" aria-labelledby="inicio-opiniones-es">
                <div class="sectLordOpiniones__cabecera">
                    <div>
                        <p class="lordEyebrow">Experiencias del clan</p>
                        <h2 class="lordTitulo" id="inicio-opiniones-es">Lo cuentan<br /><em>ellos</em></h2>
                    </div>
                    <p>
                        Escuchamos tanto los elogios como aquello que podemos mejorar. Estas son algunas experiencias
                        recogidas durante nuestros eventos de 2024.
                    </p>
                </div>

                <div data-lord-carrusel data-intervalo="6500">
                    <figure class="sectLordOpiniones__slide is-activa" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-1.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">01 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,6</strong> <span>sobre 5</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “La Ragnarök tiene muchísimo sabor y la carne llegó en el punto que pedimos.
                                    Esperamos unos veinte minutos porque había bastante cola, pero nos avisaron antes
                                    de cobrar y mereció la pena.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Lucía Martín</strong><span>Mercado de Motores · Madrid</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-2.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">02 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,3</strong> <span>sobre 5</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “El ambiente del puesto y la atención fueron excelentes. La Berserker estaba muy
                                    jugosa; a las patatas les habría puesto algo más de salsa, pero el conjunto fue muy
                                    bueno.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>David Romero</strong><span>Festival gastronómico · Toledo</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-3.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">03 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,8</strong> <span>sobre 5</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Fuimos por la estética vikinga y volvimos por las hamburguesas. El equipo mantuvo
                                    el buen humor durante todo el servicio y la cerveza tostada acompañaba genial.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Marta y Álvaro</strong><span>Jornadas medievales · Ávila</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-4.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">04 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,5</strong> <span>sobre 5</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “La ambientación encajaba perfectamente con la romería y la Jarl fue de lo mejor
                                    que probé. El pan podría haber llegado algo más tostado, pero el sabor de la carne
                                    compensó.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Sergio Prieto</strong><span>Romería Vikinga · Catoira</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-5.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">05 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,7</strong> <span>sobre 5</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Nos explicaron los ingredientes con mucha paciencia y adaptaron un pedido por una
                                    intolerancia. La Freya estaba crujiente y la espera fue más corta de lo que
                                    esperábamos.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Elena Casas</strong><span>Mercado medieval · Alcalá de Henares</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-6.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">06 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,4</strong> <span>sobre 5</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Buen ambiente, raciones generosas y cerveza realmente fría. La música estaba un
                                    poco alta cerca del puesto, aunque el equipo nos atendió rápido y con mucha
                                    cercanía.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Raúl Sánchez</strong><span>Festival del Clan · Madrid</span></figcaption>
                    </figure>

                    <div class="sectLordOpiniones__controles" role="group" aria-label="Seleccionar experiencia">
                        <button class="sectLordOpiniones__flecha" type="button" aria-label="Experiencia anterior" data-lord-anterior>
                            <span aria-hidden="true">←</span>
                        </button>
                        <div class="sectLordOpiniones__puntos">
                            <button class="is-activa" type="button" aria-label="Ver experiencia de Lucía Martín" aria-current="true" data-lord-punto></button>
                            <button type="button" aria-label="Ver experiencia de David Romero" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Ver experiencia de Marta y Álvaro" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Ver experiencia de Sergio Prieto" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Ver experiencia de Elena Casas" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Ver experiencia de Raúl Sánchez" aria-current="false" data-lord-punto></button>
                        </div>
                        <button class="sectLordOpiniones__flecha" type="button" aria-label="Experiencia siguiente" data-lord-siguiente>
                            <span aria-hidden="true">→</span>
                        </button>
                    </div>
                </div>
            </section>

            <section class="sectLordFaq" aria-labelledby="inicio-faq-es">
                <div class="sectLordFaq__intro">
                    <p class="lordEyebrow">Antes de zarpar</p>
                    <h2 class="lordTitulo" id="inicio-faq-es">Preguntas<br /><em>frecuentes</em></h2>
                    <p>Todo lo que necesitas saber sobre nuestra ruta, los pedidos y la contratación para eventos.</p>
                    <a class="lordBoton" href="<?= url("/es/contacto") ?>" title="Enviar una consulta a THE LORD">
                        Hacer otra pregunta <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="sectLordFaq__lista" data-sect-lord-faq>
                    <article class="sectLordFaq__item is-abierto">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-1-es" aria-expanded="true" aria-controls="faq-respuesta-1-es">
                                <span class="sectLordFaq__numero" aria-hidden="true">01</span>
                                <span class="sectLordFaq__pregunta">¿Dónde podemos encontrar a THE LORD?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-1-es" role="region" aria-labelledby="faq-boton-1-es">
                            <div>
                                <p>
                                    Nuestra ubicación cambia cada semana. Publicamos las próximas paradas en la página
                                    <a href="<?= url("/es/nuestra-ruta") ?>" title="Consultar las próximas paradas">Nuestra ruta</a>,
                                    junto con los horarios y el acceso directo al mapa.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-2-es" aria-expanded="false" aria-controls="faq-respuesta-2-es">
                                <span class="sectLordFaq__numero" aria-hidden="true">02</span>
                                <span class="sectLordFaq__pregunta">¿Se puede contratar el puesto para un evento privado?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-2-es" role="region" aria-labelledby="faq-boton-2-es">
                            <div>
                                <p>
                                    Sí. Trabajamos en bodas, celebraciones, festivales y encuentros de empresa.
                                    Escríbenos desde
                                    <a href="<?= url("/es/contacto") ?>" title="Contactar con THE LORD">Contacto</a>
                                    indicando fecha, lugar y número aproximado de asistentes.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-3-es" aria-expanded="false" aria-controls="faq-respuesta-3-es">
                                <span class="sectLordFaq__numero" aria-hidden="true">03</span>
                                <span class="sectLordFaq__pregunta">¿Tenéis opciones vegetarianas y para personas con alergias?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-3-es" role="region" aria-labelledby="faq-boton-3-es">
                            <div>
                                <p>
                                    Disponemos de una alternativa vegetariana bajo petición. Si tienes una alergia o
                                    intolerancia, avisa antes de pedir; te informaremos de ingredientes y posibles
                                    trazas.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-4-es" aria-expanded="false" aria-controls="faq-respuesta-4-es">
                                <span class="sectLordFaq__numero" aria-hidden="true">04</span>
                                <span class="sectLordFaq__pregunta">¿La carne y las salsas se preparan en el propio puesto?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-4-es" role="region" aria-labelledby="faq-boton-4-es">
                            <div>
                                <p>
                                    La carne se pica y forma a diario en nuestra cocina, y las salsas son de elaboración
                                    propia. En el puesto cocinamos y montamos cada pedido al momento.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-5-es" aria-expanded="false" aria-controls="faq-respuesta-5-es">
                                <span class="sectLordFaq__numero" aria-hidden="true">05</span>
                                <span class="sectLordFaq__pregunta">¿Cuánto tiempo suele tardar un pedido?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-5-es" role="region" aria-labelledby="faq-boton-5-es">
                            <div>
                                <p>
                                    En un servicio normal, entre 8 y 12 minutos. En las horas de mayor afluencia la
                                    espera puede aumentar; siempre indicamos el tiempo estimado antes de cobrar.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <?php require app_path("includes/es/footer.php"); ?>
    </body>
</html>
