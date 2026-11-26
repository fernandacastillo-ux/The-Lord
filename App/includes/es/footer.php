<footer class="footerLord">
    <div class="footerLord__marca">
        <span class="lordRuna footerLord__runa" aria-hidden="true"></span>
        <p class="footerLord__nombre">THE LORD</p>
        <p class="footerLord__lema">Cocina sobre ruedas · Madrid</p>
    </div>

    <nav aria-label="Navegación del pie">
        <?php require app_path("includes/es/enlaces.php"); ?>
    </nav>

    <nav class="footerLord__legal" aria-label="Información legal">
        <ul>
            <li><a href="<?= url("/es/aviso-legal") ?>" title="Leer el aviso legal"<?= ($url ?? "") === "/es/aviso-legal" ? ' aria-current="page"' : "" ?>>Aviso legal</a></li>
            <li><a href="<?= url("/es/politica-privacidad") ?>" title="Leer la política de privacidad"<?= ($url ?? "") === "/es/politica-privacidad" ? ' aria-current="page"' : "" ?>>Política de privacidad</a></li>
            <li><a href="<?= url("/es/gestion-cookies") ?>" title="Consultar y gestionar las cookies"<?= ($url ?? "") === "/es/gestion-cookies" ? ' aria-current="page"' : "" ?>>Gestión de cookies</a></li>
        </ul>
    </nav>

    <div class="footerLord__base">
        <p>&copy; <?= date("Y") ?> THE LORD · Todos los derechos reservados</p>
        <p>Hecho con fuego en Madrid</p>
    </div>
</footer>
