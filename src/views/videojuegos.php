<?php
require './layouts/header.php';
$videojuegos = getVideojuegos();
?>

    <header class="hero header text-center text-justify py-4 font-grande">
        <div class="hero-content flex-col">
            <h1 class="text-5xl md:text-5x1 font-header">Videojuegos</h1>
        </div>
    </header>

    <h2 class="font-grande font-vendidos text-center pt-5">Los más vendidos</h2>

    <section class="pt-5 flex gap-10 justify-center font-normal inline-flex flex-wrap">
        <?php foreach($videojuegos as $videojuego) : ?>
        <a href="#" class="w-17/20 sm:w-6/25">
            <div data-theme="light" class="card shadow-sm hover:shadow-xl transition flex-wrap">
                <div class="card-body">
                    <h2 class="card-title font-busqueda"><?= $videojuego['nombre'] ?></h2>
                    <p class="font-menu"><?= $videojuego['descripcion'] ?></p>
                </div>
                <figure class="<?=$videojuego['bg']?>">
                    <img class="<?=$videojuego['wimg']?> pt-5 pb-10" src="<?=IMG_PATH?><?=$videojuego['imagen']?>" alt="" />
                </figure>
            </div>
        </a>
        <?php endforeach; ?>
    </section>
</body>
</html>
