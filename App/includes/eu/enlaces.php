<?php
// Nabigazioak eta oinak partekatzen duten zerrenda euskaraz.
// href bakoitza App/config/config.php fitxategiko ibilbide batekin bat dator.
$rutaActual = $url ?? "";
?>
<ul class="enlacesLord">
    <li>
        <a class="enlacesLord__link" href="<?= url("/eu") ?>" title="THE LORDen hasierara joan"<?= $rutaActual === "/eu" ? ' aria-current="page"' : "" ?>>Hasiera</a>
    </li>
    <li>
        <a class="enlacesLord__link" href="<?= url("/eu/hanburgesak") ?>" title="Hanburgesen karta ikusi"<?= $rutaActual === "/eu/hanburgesak" ? ' aria-current="page"' : "" ?>>Hanburgesak</a>
    </li>
    <li>
        <a class="enlacesLord__link" href="<?= url("/eu/nor-gara") ?>" title="THE LORDen historia ezagutu"<?= $rutaActual === "/eu/nor-gara" ? ' aria-current="page"' : "" ?>>Nor gara</a>
    </li>
    <li>
        <a class="enlacesLord__link" href="<?= url("/eu/gure-ibilbidea") ?>" title="Foodtruckaren hurrengo geldialdiak kontsultatu"<?= $rutaActual === "/eu/gure-ibilbidea" ? ' aria-current="page"' : "" ?>>Gure ibilbidea</a>
    </li>
    <li>
        <a class="enlacesLord__link enlacesLord__link--cta" href="<?= url("/eu/harremanetan") ?>" title="THE LORDekin harremanetan jarri"<?= $rutaActual === "/eu/harremanetan" ? ' aria-current="page"' : "" ?>>
            Harremanetan <span class="lordFlecha" aria-hidden="true"></span>
        </a>
    </li>
</ul>
