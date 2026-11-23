<?php

return [
    "langs" => ["es", "eu", "en"],
    "lang_default" => env("LANG_DEFAULT", "es"),
    "global_routes" => [
        "/showroom" => ["view" => "showroom.php", "resources" => "src/assets/js/showroom.js"],
    ],
    "post_routes" => ["/app/artForm02" => "app/artForm02.php"],
    // Las rutas equivalentes ocupan la misma posición en cada idioma: el selector de idioma depende de ello.
    "routes" => [
        "es" => [
            "/es" => ["view" => "inicio.php", "resources" => "src/assets/js/inicio.js"],
            "/es/hamburguesas" => ["view" => "hamburguesas.php", "resources" => "src/assets/js/hamburguesas.js"],
            "/es/quienes-somos" => ["view" => "quienessomos.php", "resources" => "src/assets/js/quienessomos.js"],
            "/es/nuestra-ruta" => ["view" => "ruta.php", "resources" => "src/assets/js/ruta.js"],
            "/es/contacto" => ["view" => "contacto.php", "resources" => "src/assets/js/contacto.js"],
            "/es/404" => ["view" => "404.php", "resources" => "src/assets/js/404.js"],
        ],
        "eu" => [
            "/eu" => ["view" => "inicio.php", "resources" => "src/assets/js/inicio.js"],
            "/eu/hanburgesak" => ["view" => "hamburguesas.php", "resources" => "src/assets/js/hamburguesas.js"],
            "/eu/nor-gara" => ["view" => "quienessomos.php", "resources" => "src/assets/js/quienessomos.js"],
            "/eu/gure-ibilbidea" => ["view" => "ruta.php", "resources" => "src/assets/js/ruta.js"],
            "/eu/harremanetan" => ["view" => "contacto.php", "resources" => "src/assets/js/contacto.js"],
            "/eu/404" => ["view" => "404.php", "resources" => "src/assets/js/404.js"],
        ],
    ],
];
