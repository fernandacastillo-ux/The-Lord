<?php
// Listado compartido por el nav y el footer en castellano.
// Cada href coincide con una ruta definida en App/config/config.php.
$rutaActual = $url ?? "";
?>
<ul class="enlacesLord">
    <li>
        <a class="enlacesLord__link" href="<?= url("/es") ?>" title="Ir al inicio de THE LORD"<?= $rutaActual === "/es" ? ' aria-current="page"' : "" ?>>Inicio</a>
    </li>
    <li>
        <a class="enlacesLord__link" href="<?= url("/es/hamburguesas") ?>" title="Ver la carta de hamburguesas"<?= $rutaActual === "/es/hamburguesas" ? ' aria-current="page"' : "" ?>>Hamburguesas</a>
    </li>
    <li>
        <a class="enlacesLord__link" href="<?= url("/es/quienes-somos") ?>" title="Conocer la historia de THE LORD"<?= $rutaActual === "/es/quienes-somos" ? ' aria-current="page"' : "" ?>>Quiénes somos</a>
    </li>
    <li>
        <a class="enlacesLord__link" href="<?= url("/es/nuestra-ruta") ?>" title="Consultar las próximas paradas del foodtruck"<?= $rutaActual === "/es/nuestra-ruta" ? ' aria-current="page"' : "" ?>>Nuestra ruta</a>
    </li>
    <li>
        <a class="enlacesLord__link enlacesLord__link--cta" href="<?= url("/es/contacto") ?>" title="Contactar con THE LORD"<?= $rutaActual === "/es/contacto" ? ' aria-current="page"' : "" ?>>
            Contacto <span class="lordFlecha" aria-hidden="true"></span>
        </a>
    </li>
</ul>
