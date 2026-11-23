<a class="lordSaltar" href="#contenido">Edukira joan</a>
<div class="navLord" data-nav-lord>
    <span class="navLord__progreso" aria-hidden="true" data-nav-lord-progreso></span>

    <a class="navLord__marca" href="<?= url("/eu") ?>" title="THE LORDen hasierara joan">
        <span class="lordRuna" aria-hidden="true"></span>
        <span class="navLord__textos">
            <strong>THE LORD</strong>
            <small>Sukaldaritza gurpilen gainean</small>
        </span>
    </a>

    <button
        class="navLord__toggle"
        type="button"
        aria-controls="navLord-menu-eu"
        aria-expanded="false"
        aria-label="Menua ireki"
        data-nav-lord-toggle
        data-label-abrir="Menua ireki"
        data-label-cerrar="Menua itxi"
    >
        <span></span>
        <span></span>
    </button>

    <nav class="navLord__menu" id="navLord-menu-eu" aria-label="Nabigazio nagusia" data-nav-lord-menu>
        <?php require app_path("includes/eu/enlaces.php"); ?>

        <div class="navLord__idiomas" role="group" aria-label="Hizkuntza">
            <a
                class="navLord__idioma"
                href="<?= url(ruta_homologa($url ?? null, "es")) ?>"
                lang="es"
                hreflang="es"
                title="Ver esta página en castellano"
                >ES</a
            >
            <a
                class="navLord__idioma"
                href="<?= url(ruta_homologa($url ?? null, "eu")) ?>"
                lang="eu"
                hreflang="eu"
                aria-current="true"
                title="Orri hau euskaraz ikusi"
                >EU</a
            >
        </div>
    </nav>
</div>
