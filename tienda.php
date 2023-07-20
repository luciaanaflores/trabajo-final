<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tienda</title>
</head>

<body>

    <header class="header">
        <h1>Vivero La Flora Mágica</h1>
        <nav>
            <ul class="menucontacto">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="tienda.php">Tienda</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="comunidad">
            <ul>
                <li><a href="tienda.php?nombre=be">Begonias</a></li>
                <li><a href="tienda.php?nombre=ro">Rosas</a></li>
                <li><a href="tienda.php?nombre=tu">Tulipanes</a></li>
            </ul>
        </div>

        <?php
        $tipo = "";
        $vidautil = "";
        $caracteristicas = "";

        if (isset($_GET["nombre"])) {
            switch ($_GET["nombre"]) {
                case "be":
                    $tipo = "Begonias";
                    $vidautil = "Perennes";
                    $caracteristicas = "Las begonias son plantas ornamentales populares debido a sus hermosas flores y follaje atractivo. Son plantas perennes que se cultivan tanto en interiores como en exteriores. Tienen una amplia variedad de colores y formas de flores, lo que las convierte en una elección popular para jardines, macetas y arreglos florales.";
                    $imagen = ".plantas/begonias1.jpg";
                    break;
                case "ro":
                    $tipo = "Rosas";
                    $vidautil = "Perennes";
                    $caracteristicas = "Las rosas son conocidas por ser una de las flores más emblemáticas y hermosas del mundo. Existen una gran variedad de rosas, con diferentes colores, tamaños y fragancias. Son plantas perennes que florecen en primavera y verano, y han sido símbolos de amor y romance a lo largo de la historia.";
                    $imagen = ".plantas/rosas1.jpg";
                    break;
                case "tu":
                    $tipo = "Tulipanes";
                    $vidautil = "Perennes";
                    $caracteristicas = "Los tulipanes son flores bulbosas que pertenecen a la familia de las Liliáceas. Son conocidos por sus llamativos colores y formas únicas de floración. Los tulipanes son originarios de Europa y Asia, y se han convertido en un símbolo icónico de los Países Bajos. Son plantas perennes que florecen en primavera y son muy apreciados en jardines y arreglos florales.";
                    $imagen = ".plantas/tulipanes1.jpeg";
                    break;
            }
        }
        ?>

        <div class="info_contacto">
            <h2><?php echo $tipo; ?></h2>
            <h3><?php echo $vidautil; ?></h3>
            <p><?php echo $caracteristicas; ?></p>
        </div>
    </section>

</body>

</html>