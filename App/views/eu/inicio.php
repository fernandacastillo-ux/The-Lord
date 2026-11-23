<?php $hamburguesas = require app_path("includes/eu/hamburguesas.php"); ?>
<!doctype html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/svg+xml" href="<?= asset("favicon.svg") ?>" />
        <link rel="canonical" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="es" href="<?= e(app_url("/es")) ?>" />
        <link rel="alternate" hreflang="eu" href="<?= e(app_url("/eu")) ?>" />
        <link rel="alternate" hreflang="x-default" href="<?= e(app_url("/es")) ?>" />
        <title>THE LORD | Hanburgesa bikingoen foodtrucka Madrilen</title>
        <meta
            name="description"
            content="Sutan landutako hanburgesa artisauak, estetika bikingoko foodtruck batean. Ezagutu karta, Madrilgo gure hurrengo geldialdia eta nola kontratatu gaitzakezun."
        />
        <meta name="robots" content="index, follow" />
        <meta property="og:type" content="website" />    
        <meta property="og:locale" content="eu_ES" />
        <meta property="og:site_name" content="THE LORD" />
        <meta property="og:title" content="THE LORD | Hanburgesa bikingoen foodtrucka Madrilen" />
        <meta
            property="og:description"
            content="Sutan landutako hanburgesa artisauak, estetika bikingoko foodtruck batean. Ezagutu karta, Madrilgo gure hurrengo geldialdia eta nola kontratatu gaitzakezun."
        />
        <meta property="og:url" content="<?= e(app_url("/eu")) ?>" />
        <meta property="og:image" content="<?= e(app_url("assets/img/thelord/hero-1.webp")) ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="THE LORD | Hanburgesa bikingoen foodtrucka Madrilen" />
        <meta
            name="twitter:description"
            content="Sutan landutako hanburgesa artisauak, estetika bikingoko foodtruck batean. Ezagutu karta, Madrilgo gure hurrengo geldialdia eta nola kontratatu gaitzakezun."
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
        <?php require app_path("includes/eu/nav.php"); ?>

        <header class="headerLordSlider" data-lord-carrusel data-intervalo="5500">
            <div class="headerLordSlider__fondos">
                <img
                    class="headerLordSlider__imagen is-activa"
                    src="<?= asset("assets/img/thelord/hero-1.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Egin berri den hanburgesa artisaua egurrezko mahai baten gainean"
                    title="THE LORDen hanburgesa artisaua"
                    fetchpriority="high"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordSlider__imagen"
                    src="<?= asset("assets/img/thelord/hero-2.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Sutan prestatutako gazta-hanburgesa"
                    title="Gazta-hanburgesa sutan"
                    loading="lazy"
                    decoding="async"
                    data-lord-slide
                />
                <img
                    class="headerLordSlider__imagen"
                    src="<?= asset("assets/img/thelord/hero-3.webp") ?>"
                    width="1920"
                    height="1080"
                    alt="Hanburgesa artisaua patatekin"
                    title="Hanburgesa artisaua patatekin"
                    loading="lazy"
                    decoding="async"
                    data-lord-slide
                />
            </div>
            <div class="headerLordSlider__humo" aria-hidden="true"></div>

            <div class="headerLordSlider__contenido">
                <p class="lordEyebrow">
                    <span aria-hidden="true"></span>
                    Sua · Haragia · Aintza
                    <span aria-hidden="true"></span>
                </p>
                <h1 class="headerLordSlider__titulo">Kondaira-<br /><em>gosea</em></h1>
                <p class="headerLordSlider__texto">
                    Sutan forjatutako hanburgesak, lasterbiderik eta errendiziorik gabe. Ongi etorri hiriko oturuntza
                    basatienera.
                </p>
                <div class="headerLordSlider__acciones">
                    <a class="lordBoton" href="<?= url("/eu/hanburgesak") ?>" title="Hanburgesen karta ikusi">
                        Hanburgesak ikusi <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                    <a class="headerLordSlider__enlace" href="#ruta" title="Foodtruckaren hurrengo geldialdia ikusi">
                        Non gaude? <span aria-hidden="true">↓</span>
                    </a>
                </div>
            </div>

            <div class="headerLordSlider__controles" role="group" aria-label="Irudi-karruselaren kontrolak">
                <button class="headerLordSlider__flecha" type="button" aria-label="Aurreko irudia" data-lord-anterior>
                    <span aria-hidden="true">←</span>
                </button>
                <div class="headerLordSlider__puntos">
                    <button class="is-activa" type="button" aria-label="1. irudia ikusi" aria-current="true" data-lord-punto></button>
                    <button type="button" aria-label="2. irudia ikusi" aria-current="false" data-lord-punto></button>
                    <button type="button" aria-label="3. irudia ikusi" aria-current="false" data-lord-punto></button>
                </div>
                <button class="headerLordSlider__flecha" type="button" aria-label="Hurrengo irudia" data-lord-siguiente>
                    <span aria-hidden="true">→</span>
                </button>
            </div>

            <p class="headerLordSlider__sello" aria-hidden="true">
                <span>Haragia</span>
                <span class="lordRuna"></span>
                <span>Sutan</span>
            </p>
        </header>

        <main id="contenido">
            <section class="sectLordManifiesto" aria-labelledby="inicio-manifiesto-eu">
                <p class="sectLordManifiesto__numero" aria-hidden="true">01 <span></span></p>
                <div>
                    <p class="lordEyebrow">Gure zina</p>
                    <h2 class="lordTitulo" id="inicio-manifiesto-eu">Ez dugu zerbitzatzen<br /><em>janari azkarra.</em></h2>
                </div>
                <div class="sectLordManifiesto__texto">
                    <p class="sectLordManifiesto__lead">Amorruz egindako <strong>janaria zerbitzatzen dugu.</strong></p>
                    <p>
                        Haragi hautatua, ogi txigortua eta geure saltsak. Hanburgesa bakoitza unean bertan prestatzen
                        dugu gure plantxan, benetako oturuntza batek ez baitu presarik ezagutzen.
                    </p>
                    <ul class="sectLordManifiesto__datos">
                        <li><strong>% 100</strong><span>Behi heldua</span></li>
                        <li><strong>0</strong><span>Izoztuak</span></li>
                        <li><strong>∞</strong><span>Jarrera bikingoa</span></li>
                    </ul>
                </div>
            </section>

            <section class="sectLordCarta" aria-labelledby="inicio-elegidas-eu">
                <div class="sectLordCarta__cabecera">
                    <div>
                        <p class="lordEyebrow">Hautatuak</p>
                        <h2 class="lordTitulo" id="inicio-elegidas-eu">Klanaren <em>armak</em></h2>
                    </div>
                    <div class="sectLordCarta__intro">
                        <p>Gure kartako hiru kondaira. Guztiek dute sutan markatutako gure ogi artisaua.</p>
                        <a class="lordEnlace sectLordCarta__enlace" href="<?= url("/eu/hanburgesak") ?>" title="Hanburgesen karta osoa ikusi">
                            Karta osoa ikusi <span class="lordFlecha" aria-hidden="true"></span>
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
                                    alt="THE LORDen <?= e($hamburguesa["nombre"]) ?> hanburgesa"
                                    title="<?= e($hamburguesa["nombre"]) ?> hanburgesa"
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
                                    href="<?= url("/eu/hanburgesak") ?>#hamburguesa-<?= e($hamburguesa["slug"]) ?>"
                                    title="<?= e($hamburguesa["nombre"]) ?> hanburgesaren osagaiak ikusi"
                                >
                                    <span class="lordOculto"><?= e($hamburguesa["nombre"]) ?>: </span>Errezeta ezagutu
                                    <span class="lordFlecha" aria-hidden="true"></span>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="sectLordExtras" aria-labelledby="inicio-extras-eu">
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
                    <p class="sectLordExtras__lema">Gudaririk ez da<br />bakarrik joaten</p>
                </div>
                <div class="sectLordExtras__contenido">
                    <p class="lordEyebrow">Lagundu zure konkista</p>
                    <h2 class="lordTitulo" id="inicio-extras-eu">Oturuntzaren <em>aliatuak</em></h2>
                    <p class="sectLordExtras__intro">
                        Zure borrokarako osagarri ezin hobea. Patata kurruskariak eta edari hotz-hotza.
                    </p>
                    <div class="sectLordExtras__lista">
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-patatas-eu">
                            <span class="sectLordExtras__numero" aria-hidden="true">01</span>
                            <div>
                                <h3 id="inicio-extra-patatas-eu">Drakkar patatak</h3>
                                <p class="sectLordExtras__descripcion">Etxeko ebaketa, gatz ketua eta gazta-saltsa</p>
                            </div>
                            <p class="sectLordExtras__precio">4,50 €</p>
                        </article>
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-aros-eu">
                            <span class="sectLordExtras__numero" aria-hidden="true">02</span>
                            <div>
                                <h3 id="inicio-extra-aros-eu">Odinen eraztunak</h3>
                                <p class="sectLordExtras__descripcion">Tipula kurruskaria barbakoa-saltsa nordikoarekin</p>
                            </div>
                            <p class="sectLordExtras__precio">5,20 €</p>
                        </article>
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-hidromiel-eu">
                            <span class="sectLordExtras__numero" aria-hidden="true">03</span>
                            <div>
                                <h3 id="inicio-extra-hidromiel-eu">Eztiardoa</h3>
                                <p class="sectLordExtras__descripcion">Ezti, limoi eta jengibrezko freskagarri artisaua</p>
                            </div>
                            <p class="sectLordExtras__precio">3,80 €</p>
                        </article>
                        <article class="sectLordExtras__item" aria-labelledby="inicio-extra-cerveza-eu">
                            <span class="sectLordExtras__numero" aria-hidden="true">04</span>
                            <div>
                                <h3 id="inicio-extra-cerveza-eu">Jarlen garagardoa</h3>
                                <p class="sectLordExtras__descripcion">Tokiko garagardo txigortua, fiordo bat bezain hotza</p>
                            </div>
                            <p class="sectLordExtras__precio">3,50 €</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="sectLordParada" id="ruta" aria-labelledby="inicio-parada-eu">
                <p class="sectLordParada__linea" aria-hidden="true"><span></span>Hurrengo geldialdia<span></span></p>
                <div class="sectLordParada__interior">
                    <div class="sectLordParada__texto">
                        <p class="lordEyebrow">Jarraitu keari</p>
                        <h2 class="lordTitulo" id="inicio-parada-eu">Aurkitu<br />gure <em>drakkarra</em></h2>
                        <p>Aste honetan ibai ondoan lehorreratu gara. Etorri goseak; suak guk jarriko dugu.</p>
                    </div>
                    <article class="sectLordParada__tarjeta" aria-labelledby="inicio-destino-eu">
                        <p class="sectLordParada__fecha">
                            <span>Ost — Iga</span>
                            <strong>17—19</strong>
                            <small>Urria</small>
                        </p>
                        <div class="sectLordParada__info">
                            <p class="sectLordParada__etiqueta">Hurrengo helmuga</p>
                            <h3 id="inicio-destino-eu">Mercado de Motores</h3>
                            <p>Paseo de las Delicias, 61 · Madril</p>
                            <p class="sectLordParada__horario">Ostirala 19—00 · Larunbata eta igandea 13—00</p>
                            <a
                                class="lordEnlace"
                                href="https://maps.google.com/?q=Paseo+de+las+Delicias+61+Madrid"
                                target="_blank"
                                rel="noopener noreferrer"
                                title="Mercado de Motores Google Mapsen ireki (fitxa berria)"
                            >
                                Mapetan ireki <span class="lordFlecha" aria-hidden="true"></span>
                            </a>
                        </div>
                    </article>
                </div>
            </section>

            <section class="sectLordOpiniones" aria-labelledby="inicio-opiniones-eu">
                <div class="sectLordOpiniones__cabecera">
                    <div>
                        <p class="lordEyebrow">Klanaren esperientziak</p>
                        <h2 class="lordTitulo" id="inicio-opiniones-eu">Haiek<br /><em>kontatzen dute</em></h2>
                    </div>
                    <p>
                        Laudorioak bezainbeste entzuten ditugu hobetu dezakeguna. Hauek dira 2024ko gure ekitaldietan
                        jasotako esperientzia batzuk.
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
                                <strong>4,6</strong> <span>5etik</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Ragnarök-ek zapore handia du eta haragia eskatu genuen puntuan iritsi zen. Hogei bat
                                    minutu itxaron genuen ilara luzea zegoelako, baina ordaindu aurretik abisatu
                                    ziguten eta merezi izan zuen.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Lucía Martín</strong><span>Mercado de Motores · Madril</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-2.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">02 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,3</strong> <span>5etik</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Postuaren giroa eta arreta bikainak izan ziren. Berserker oso mamitsua zegoen;
                                    patatei saltsa gehiago jarriko nien, baina orokorrean oso ona izan zen.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>David Romero</strong><span>Jaialdi gastronomikoa · Toledo</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-3.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">03 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,8</strong> <span>5etik</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Estetika bikingoagatik joan ginen eta hanburgesengatik itzuli. Taldeak umore ona
                                    mantendu zuen zerbitzu osoan, eta garagardo txigortua primeran zihoan.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Marta eta Álvaro</strong><span>Erdi Aroko jardunaldiak · Ávila</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-4.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">04 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,5</strong> <span>5etik</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Giroa ezin hobeto zetorren erromeriarekin, eta Jarl dastatu nuen onenetakoa izan
                                    zen. Ogia apur bat txigortuago egon zitekeen, baina haragiaren zaporeak konpentsatu
                                    zuen.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Sergio Prieto</strong><span>Erromeria Bikingoa · Catoira</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-5.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">05 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,7</strong> <span>5etik</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Pazientzia handiz azaldu zizkiguten osagaiak eta eskaera bat egokitu ziguten
                                    intolerantzia batengatik. Freya kurruskaria zegoen eta itxaronaldia espero baino
                                    laburragoa izan zen.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Elena Casas</strong><span>Erdi Aroko azoka · Alcalá de Henares</span></figcaption>
                    </figure>
                    <figure class="sectLordOpiniones__slide" data-lord-slide>
                        <div class="sectLordOpiniones__avatar">
                            <img src="<?= asset("assets/img/thelord/avatar-6.svg") ?>" width="160" height="160" alt="" />
                            <span class="sectLordOpiniones__indice" aria-hidden="true">06 / 06</span>
                        </div>
                        <div class="sectLordOpiniones__cita">
                            <p class="sectLordOpiniones__valoracion">
                                <strong>4,4</strong> <span>5etik</span>
                                <span class="sectLordOpiniones__estrellas" aria-hidden="true">★★★★★</span>
                            </p>
                            <blockquote>
                                <p>
                                    “Giro ona, anoa oparoak eta garagardo benetan hotza. Musika ozenegi zegoen
                                    postutik gertu, baina taldeak azkar eta oso hurbiltasunez artatu gintuen.”
                                </p>
                            </blockquote>
                        </div>
                        <figcaption><strong>Raúl Sánchez</strong><span>Klanaren Jaialdia · Madril</span></figcaption>
                    </figure>

                    <div class="sectLordOpiniones__controles" role="group" aria-label="Esperientzia aukeratu">
                        <button class="sectLordOpiniones__flecha" type="button" aria-label="Aurreko esperientzia" data-lord-anterior>
                            <span aria-hidden="true">←</span>
                        </button>
                        <div class="sectLordOpiniones__puntos">
                            <button class="is-activa" type="button" aria-label="Lucía Martínen esperientzia ikusi" aria-current="true" data-lord-punto></button>
                            <button type="button" aria-label="David Romeroren esperientzia ikusi" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Marta eta Álvaroren esperientzia ikusi" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Sergio Prietoren esperientzia ikusi" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Elena Casasen esperientzia ikusi" aria-current="false" data-lord-punto></button>
                            <button type="button" aria-label="Raúl Sánchezen esperientzia ikusi" aria-current="false" data-lord-punto></button>
                        </div>
                        <button class="sectLordOpiniones__flecha" type="button" aria-label="Hurrengo esperientzia" data-lord-siguiente>
                            <span aria-hidden="true">→</span>
                        </button>
                    </div>
                </div>
            </section>

            <section class="sectLordFaq" aria-labelledby="inicio-faq-eu">
                <div class="sectLordFaq__intro">
                    <p class="lordEyebrow">Itsasoratu aurretik</p>
                    <h2 class="lordTitulo" id="inicio-faq-eu">Ohiko<br /><em>galderak</em></h2>
                    <p>Gure ibilbideari, eskaerei eta ekitaldietarako kontratazioari buruz jakin behar duzun guztia.</p>
                    <a class="lordBoton" href="<?= url("/eu/harremanetan") ?>" title="THE LORDi kontsulta bat bidali">
                        Beste galdera bat egin <span class="lordFlecha" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="sectLordFaq__lista" data-sect-lord-faq>
                    <article class="sectLordFaq__item is-abierto">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-1-eu" aria-expanded="true" aria-controls="faq-respuesta-1-eu">
                                <span class="sectLordFaq__numero" aria-hidden="true">01</span>
                                <span class="sectLordFaq__pregunta">Non aurki dezakegu THE LORD?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-1-eu" role="region" aria-labelledby="faq-boton-1-eu">
                            <div>
                                <p>
                                    Gure kokapena astero aldatzen da. Hurrengo geldialdiak
                                    <a href="<?= url("/eu/gure-ibilbidea") ?>" title="Hurrengo geldialdiak kontsultatu">Gure ibilbidea</a>
                                    orrian argitaratzen ditugu, ordutegiekin eta maparako sarbide zuzenarekin batera.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-2-eu" aria-expanded="false" aria-controls="faq-respuesta-2-eu">
                                <span class="sectLordFaq__numero" aria-hidden="true">02</span>
                                <span class="sectLordFaq__pregunta">Postua kontrata daiteke ekitaldi pribatu baterako?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-2-eu" role="region" aria-labelledby="faq-boton-2-eu">
                            <div>
                                <p>
                                    Bai. Ezteietan, ospakizunetan, jaialdietan eta enpresa-topaketetan lan egiten dugu.
                                    Idatzi iezaguzu
                                    <a href="<?= url("/eu/harremanetan") ?>" title="THE LORDekin harremanetan jarri">Harremanetan</a>
                                    ataletik, data, lekua eta gutxi gorabeherako bertaratu kopurua adieraziz.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-3-eu" aria-expanded="false" aria-controls="faq-respuesta-3-eu">
                                <span class="sectLordFaq__numero" aria-hidden="true">03</span>
                                <span class="sectLordFaq__pregunta">Baduzue aukera begetarianorik eta alergiak dituztenentzat?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-3-eu" role="region" aria-labelledby="faq-boton-3-eu">
                            <div>
                                <p>
                                    Aukera begetariano bat dugu eskatuz gero. Alergiaren bat edo intolerantziaren bat
                                    baduzu, abisatu eskatu aurretik; osagaien eta egon daitezkeen aztarnen berri emango
                                    dizugu.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-4-eu" aria-expanded="false" aria-controls="faq-respuesta-4-eu">
                                <span class="sectLordFaq__numero" aria-hidden="true">04</span>
                                <span class="sectLordFaq__pregunta">Haragia eta saltsak postuan bertan prestatzen dira?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-4-eu" role="region" aria-labelledby="faq-boton-4-eu">
                            <div>
                                <p>
                                    Haragia egunero txikitu eta moldatzen dugu gure sukaldean, eta saltsak geuk egiten
                                    ditugu. Postuan eskaera bakoitza unean bertan sukaldatu eta muntatzen dugu.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="sectLordFaq__item">
                        <h3>
                            <button class="sectLordFaq__boton" type="button" id="faq-boton-5-eu" aria-expanded="false" aria-controls="faq-respuesta-5-eu">
                                <span class="sectLordFaq__numero" aria-hidden="true">05</span>
                                <span class="sectLordFaq__pregunta">Zenbat denbora behar izaten du eskaera batek?</span>
                                <span class="sectLordFaq__icono" aria-hidden="true"></span>
                            </button>
                        </h3>
                        <div class="sectLordFaq__respuesta" id="faq-respuesta-5-eu" role="region" aria-labelledby="faq-boton-5-eu">
                            <div>
                                <p>
                                    Zerbitzu arrunt batean, 8 eta 12 minutu artean. Jende gehien dagoen orduetan
                                    itxaronaldia luzatu daiteke; ordaindu aurretik beti adierazten dugu gutxi
                                    gorabeherako denbora.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <?php require app_path("includes/eu/footer.php"); ?>
    </body>
</html>
