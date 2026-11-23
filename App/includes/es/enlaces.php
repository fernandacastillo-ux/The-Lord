<?php
// Listado compartido por el nav y el footer en castellano.
// Cada href coincide con una ruta definida en App/config/config.php.
?>
<ul class="enlaces01">
    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/es") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/home.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Inicio</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/es/contacto") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/email.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Contacto</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/es/quienessomos") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/persons.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Quiénes somos</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/showroom") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Showroom</span>
        </a>
    </li>
</ul>
