<?php include "header.php"; ?>
<section class="contato_contenido">
</section>
<form action="enviar_consulta.php" method="post">
    <label for="nombre"> Nombre: </label>
    <input type="text" name="nombre" class="contacto_input">

    <label for="apellido"> Apellido: </label>
    <input type="text" name="apellido" class="contacto_input">

    <label for="correo"> Correo: </label>
    <input type="text" name="correo" class="contacto_input">

    <label for="mensaje"> Mensaje: </label>
    <textarea name="mensaje" id="mensaje" class="contacto_input" cols="30" rows="10"></textarea>

    <div class="botonera">
        <input type="submit" value="Enviar Consulta">
        <input type="reset" value="Limpiar Formulario">
        <button type="button" onclick="mostrarAyuda()">Ayuda</button>
    </div>
</form>

<?php
if (isset($_GET["ok"])) {
    echo "<h3> Su mensaje ha sido enviado con éxito</h3>";
}
?>

<script>
    function mostrarAyuda() {
        alert("¡Hola! ¿En qué puedo ayudarte?");
    }
</script>
