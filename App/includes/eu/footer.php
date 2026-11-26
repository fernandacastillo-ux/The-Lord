<footer class="footerLord">
    <div class="footerLord__marca">
        <span class="lordRuna footerLord__runa" aria-hidden="true"></span>
        <p class="footerLord__nombre">THE LORD</p>
        <p class="footerLord__lema">Sukaldaritza gurpilen gainean · Madril</p>
    </div>

    <nav aria-label="Oineko nabigazioa">
        <?php require app_path("includes/eu/enlaces.php"); ?>
    </nav>

    <nav class="footerLord__legal" aria-label="Lege-informazioa">
        <ul>
            <li><a href="<?= url("/eu/lege-oharra") ?>" title="Lege-oharra irakurri"<?= ($url ?? "") === "/eu/lege-oharra" ? ' aria-current="page"' : "" ?>>Lege-oharra</a></li>
            <li><a href="<?= url("/eu/pribatutasun-politika") ?>" title="Pribatutasun-politika irakurri"<?= ($url ?? "") === "/eu/pribatutasun-politika" ? ' aria-current="page"' : "" ?>>Pribatutasun-politika</a></li>
            <li><a href="<?= url("/eu/cookien-kudeaketa") ?>" title="Cookiak kontsultatu eta kudeatu"<?= ($url ?? "") === "/eu/cookien-kudeaketa" ? ' aria-current="page"' : "" ?>>Cookien kudeaketa</a></li>
        </ul>
    </nav>

    <div class="footerLord__base">
        <p>&copy; <?= date("Y") ?> THE LORD · Eskubide guztiak erreserbatuta</p>
        <p>Madrilen suarekin egina</p>
    </div>
</footer>
