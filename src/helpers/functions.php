<?php 

$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('IMG_PATH', $config['img_url']);
define('FONT_PATH', $config['font_url']);
define('SRC_PATH', $config['src_url']);

function getVideojuegos() {
    return [
        [
            'nombre' => 'Mario Kart World',
            'descripcion' => '¡Prepárate para la carrera definitiva en Mario Kart World, donde cada pista está conectada en un mundo abierto lleno de desafíos, maravillas y sorpresas!',
            'imagen' => '/videojuegosVendidos/mariokartworld.png',
            'bg' => 'bg-rojo',
            'wimg' => 'w-50'
        ],
        [
            'nombre' => 'Sonic Racing: Crossworlds',
            'descripcion' => '¡Corre por tierra, mar, aire, espacio y tiempo en Sonic Racing: CrossWorlds! Teletranspórtate a través de los Rings de travesía a nuevas dimensiones.',
            'imagen' => '/videojuegosVendidos/sonicracingcrossworlds.png',
            'bg' => 'bg-azul',
            'wimg' => 'w-65'
        ],
        [
            'nombre' => 'Hades II',
            'descripcion' => 'Usa las artes oscuras para abrirte paso más allá del inframundo y enfréntate al Titán del Tiempo en esta cautivadora continuación del gran juego de mazmorras.',
            'imagen' => '/videojuegosVendidos/hades2.jpg',
            'bg' => 'bg-verde',
            'wimg' => 'w-51'
        ],
        [
            'nombre' => 'Hollow Knight: Silksong',
            'descripcion' => '¡Descubre un vasto reino embrujado en Hollow Knight: Silksong! Explora, lucha y sobrevive mientras asciendes a la cima de un vasto reino gobernado por la seda y el canto.',
            'imagen' => '/videojuegosVendidos/silksong.png',
            'bg' => 'bg-amarillo',
            'wimg' => 'w-51'
        ],
    ];
}

function getSecciones() {
    return [
        [
            'nombre' => 'Videojuegos',
            'seccion' => 'videojuegos',
            'imagen' => '/cards/fortnite.png'
        ],
        [
            'nombre' => 'Accesorios',
            'seccion' => 'accesorios',
            'imagen' => '/cards/controller.png'
        ],
        [
            'nombre' => 'Consolas',
            'seccion' => 'consolas',
            'imagen' => '/cards/switch.png'
        ],
        [
            'nombre' => 'Tarjetas de regalo',
            'seccion' => 'regalo',
            'imagen' => '/cards/giftcards.png'
        ],
    ];
}

function getTendencias() {
    return [
        [
            'nombre' => 'Grand Theft Auto V',
            'tendencia' => 'tendencia-1',
            'imagen' => '/tendencias/gta5.png'
        ],
        [
            'nombre' => 'Audífonos',
            'tendencia' => 'tendencia-2',
            'imagen' => '/tendencias/headphones.png'
        ],
        [
            'nombre' => 'Tarjeta de Steam',
            'tendencia' => 'tendencia-3',
            'imagen' => '/tendencias/steam.png'
        ],
        [
            'nombre' => 'Nintendo Switch 2',
            'tendencia' => 'tendencia-4',
            'imagen' => '/tendencias/switch2.png'
        ],
        [
            'nombre' => 'Halo Reach',
            'tendencia' => 'tendencia-5',
            'imagen' => '/tendencias/haloreach.png'
        ],
    ];
}