<a class="lordSaltar" href="#contenido">Saltar al contenido</a>
<div class="navLord" data-nav-lord>
    <span class="navLord__progreso" aria-hidden="true" data-nav-lord-progreso></span>

    <a class="navLord__marca" href="<?= url("/es") ?>" title="Ir al inicio de THE LORD">
        <span class="lordRuna" aria-hidden="true"></span>
        <span class="navLord__textos">
            <strong>THE LORD</strong>
            <small>Cocina sobre ruedas</small>
        </span>
    </a>

    <button
        class="navLord__toggle"
        type="button"
        aria-controls="navLord-menu-es"
        aria-expanded="false"
        aria-label="Abrir menú"
        data-nav-lord-toggle
        data-label-abrir="Abrir menú"
        data-label-cerrar="Cerrar menú"
    >
        <span></span>
        <span></span>
    </button>

    <nav class="navLord__menu" id="navLord-menu-es" aria-label="Navegación principal" data-nav-lord-menu>
        <?php require app_path("includes/es/enlaces.php"); ?>

        <div class="navLord__idiomas" role="group" aria-label="Idioma">
            <a
                class="navLord__idioma"
                href="<?= url(ruta_homologa($url ?? null, "es")) ?>"
                lang="es"
                hreflang="es"
                aria-current="true"
                title="Ver esta página en castellano"
                >ES</a
            >
            <a
                class="navLord__idioma"
                href="<?= url(ruta_homologa($url ?? null, "eu")) ?>"
                lang="eu"
                hreflang="eu"
                title="Orri hau euskaraz ikusi"
                >EU</a
            >
        </div>
    </nav>
</div>
