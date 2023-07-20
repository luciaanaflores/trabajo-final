<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="./css/lightbox.css">
    <title>Actividad Integradora Módulo 3</title>
</head>

<body>

    <header class="header">
        <h1>Vivero La Flora Mágica</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="tienda.php">Tienda</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="tienda">
        <?php
        $productos = array(
            "./plantas/begonias1.jpg",
            "./plantas/cactus.jpg",
            "./plantas/rosas.jpg",
            "./plantas/suculentas.jpg",
            "./plantas/tulipanes.webp"
        );

        foreach ($productos as $imagen) {
            echo '<div>';
            echo '<img src="' . $imagen . '" alt="Imagen de planta">';
            echo '</div>';
        }
        ?>
    </section>

    <section class="comunidad">
        <div class="comunidad_imagen">
            <a href="./plantas/plantasvarias.webp"
            data-lightbox="plantasvarias">
            <img src="./plantas/plantasvarias.webp" alt="Comunidad de plantas">
            </a>
        </div>
        <div class="texto">
            <p>
                Cuando llega el invierno, cambia el paisaje y se apagan los colores en balcones y jardines. Para los
                amantes
                de las plantas, esa época del año puede resultar complicada ya que muchas veces no encuentran la forma
                de
                mantenerlas tan atractivas como en primavera o verano.
                Sin embargo, y aún sin ser un experto, la cuestión es bastante más sencilla de lo que podría creerse.
                Una de
                las claves es conocer las características de las especies y darles los cuidados específicos, tanto para
                que
                conserven su belleza como para que en la siguiente primavera se encuentren sanas y listas para florecer.
                El otoño y el invierno son, además, buenas estaciones para algunas tareas fundamentales de la
                jardinería.
            </p>
        </div>
    </section>

    <footer class="footer">
        <h6>Pie de página</h6>
    </footer>
<script src="./js/lightbox-plus-jquery.min.js"></script>
</body>

</html>
