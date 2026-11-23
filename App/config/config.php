<?php

return [
    "langs" => ["es", "eu", "en"],
    "lang_default" => env("LANG_DEFAULT", "es"),
    "global_routes" => [
        "/showroom" => ["view" => "showroom.php", "resources" => "src/assets/js/showroom.js"],
    ],
    "post_routes" => ["/app/artForm02" => "app/artForm02.php"],
    "routes" => [
        "es" => [
            "/es" => ["view" => "inicio.php", "resources" => "src/assets/js/inicio.js"],
            "/es/quienes-somos" => ["view" => "quienessomos.php", "resources" => "src/assets/js/quienessomos.js"],
            "/es/contacto" => ["view" => "contacto.php", "resources" => "src/assets/js/contacto.js"],
            "/es/404" => ["view" => "404.php", "resources" => "src/assets/js/404.js"],
        ],
        "eu" => [
            "/eu" => ["view" => "inicio.php", "resources" => "src/assets/js/inicio.js"],
            "/eu/quienessomos" => ["view" => "quienessomos.php", "resources" => "src/assets/js/quienessomos.js"],
            "/eu/contacto" => ["view" => "contacto.php", "resources" => "src/assets/js/contacto.js"],
            "/eu/404" => ["view" => "404.php", "resources" => "src/assets/js/404.js"],
        ],
    ],
];
