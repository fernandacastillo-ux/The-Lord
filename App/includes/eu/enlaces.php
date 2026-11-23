<?php
// Nabigazioan eta footerrean berrerabiltzen den euskarazko esteka-zerrenda.
// Href bakoitza App/config/config.php fitxategiko bide batekin bat dator.
?>
<ul class="enlaces01">
    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/eu") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/home.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Hasiera</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/eu/contacto") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/email.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Kontaktua</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/eu/quienessomos") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/persons.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Nortzuk gara</span>
        </a>
    </li>

    <li class="enlaces01__item">
        <a class="enlaces01__link" href="<?= url("/showroom") ?>" title="Lorem ipsum">
            <img class="enlaces01__icon" src="<?= asset("assets/img/icons/grid.svg") ?>" alt="" title="" aria-hidden="true" />
            <span>Showroom</span>
        </a>
    </li>
</ul>
