<?php 
require __DIR__.'/../../helpers/functions.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GameZone</title>
  <link href="<?=BASE_PATH?>/output.css" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col bg-white">
    <nav data-theme="light" class="navbar shadow-sm px-4 sticky top-0 z-1 inline-flex flex-wrap">  
        <div class="w-2/5 sm:w-3/20">
            <img class="pl-1 sm:pl-4" src="<?=IMG_PATH?>/gamezone.png" alt="">
        </div>
        <div class="pl-10 hidden sm:inline-block form"> 
            <input type="text" placeholder="Búsqueda en Videojuegos..." class="input w-9/10 font-normal font-busqueda">
            <button class="btn w-15 boton-busqueda"><img src="<?=IMG_PATH?>/search.png" alt=""></button>
        </div> 
        <div class="pl-[25%] sm:pl-10 w-2/5 sm:w-[20%] inline-flex">
            <div class="dropdown">
                <details>
                    <summary class="btn btn-ghost w-12 p-1 sm:w-auto sm:p-auto"><img class="w-full" src="<?=IMG_PATH?>/icon.png" alt=""><a class="font-normal font-busqueda hidden sm:inline-flex">Cuenta</a></summary>
                    <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-0 mt-3 w-3/1 -ml-[100%] sm:w-52 sm:p-2 sm:ml-auto shadow">
                        <ul class="p-2 font-normal">
                            <li><a class="font-menu">Perfil</a></li>
                            <li><a class="font-menu">Historial de compras</a></li>
                            <li><a class="font-menu">Configuración</a></li>
                            <li><a class="font-menu">Cerrar Sesión</a></li>
                        </ul>
                    </ul>
                </details>
            </div>
            <a class="btn btn-ghost font-normal font-busqueda"><div class="hidden sm:inline-flex">Carrito (0)</div><img class="w-full p-1 sm:w-auto sm:p-auto" src="<?=IMG_PATH?>/cart.png" alt=""></a>
        </div>
    </nav>