<?php
include '../src/views/layouts/header.php';
$secciones = getSecciones();
$tendencias = getTendencias();
?>

    <section class="hidden sm:alterBuscar">
        <form action="#">
             <input class="buscar" id="busqueda" type="text" name="buscar" placeholder="Búsqueda" required>
             <button class="button" type="submit"><img class="button-image" src="img/search.png"></button>
        </form>
    </section>

    <section class="card-container">
        <?php foreach($secciones as $seccion) : ?>
        <a href="../src/views/videojuegos.php">
            <div class="card-principal card-<?=$seccion['seccion']?>">
                <img class="card-img-<?=$seccion['seccion']?>" src="<?=IMG_PATH?><?=$seccion['imagen']?>" alt="">
                <p class="card-text-<?=$seccion['seccion']?>"><?=$seccion['nombre']?></p>
            </div>
        </a>
        <?php endforeach; ?>
    </section>

    <section>
         <h1 class="titulo-tendencias">Artículos en tendencia</h1>
         <div class="tendencias-container">
            <?php foreach($tendencias as $tendencia) : ?>
            <div class="<?=$tendencia['tendencia']?>">
                <img class="<?=$tendencia['tendencia']?>-img" src="<?=IMG_PATH?><?=$tendencia['imagen']?>" alt="">
                <p><?=$tendencia['nombre']?></p>
            </div>
            <?php endforeach; ?>
         </div>
    </section>

    <section>
            <div id="mensaje">
                <h1 class="tituloform">Únete a GameZone</h1>
                <p class="subtitulo">Suscríbete a nuestra hoja informativa para conocer lo último en videojuegos:</p>

            <form action="#" method="get" class="formhoja">
            <fieldset class="titulo">
                <label for="email">Email:</label> <br>                    
                <input id="email" type="text" name="correo" placeholder="Ingrese su email..." class="campostexto" required>
                <br> <br>
                <label for="pais">País:</label>
                <br>
                <select id="pais" size="3" name="pais" class="campostexto" required>
                    <option value="estadosunidos">Estados Unidos</option>
                    <option value="mexico">México</option>
                    <option value="espana">España</option>
                </select>
                <br> <br>
                <label for="nombres">Nombres:</label>
                <br>
                <input id="firstname" type="text" name="nombres" placeholder="Nombres..." class="campostexto" required>
                <br> <br>

                <label for="apellidos">Apellidos:</label>
                <br>
                <input id="lastname" type="text" name="apellidos" placeholder="Apellidos..." class="campostexto" required>
                <br> <br>
                
                <label for="mayor">¿Es usted mayor de 18 años?</label>
                    <br>
                    <input id="mayor" list="mayor18" name="mayorde18" class="campostexto" required>

                <datalist id="mayor18">
                    <option value="Sí"></option>
                    <option value="No"></option>
                </datalist>

            </fieldset>
                <button type="submit" class="botonsuscribir">Suscribirse</button>
            </form>
        </div>
    </section>
</body>
</html>