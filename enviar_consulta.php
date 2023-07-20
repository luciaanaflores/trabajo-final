<?php
#$cuerpo_mail =
#    "Nombre: " . $nombre_form . "\r\n" .
#    "Apellido: " . $apellido_form . "\r\n" .
#    "Correo: " . $correo_form . "\r\n" .
#    "Mensaje: " . $mensaje_form . "\r\n";

$servername = "localhost";
$username = "luciana";
$password = "luciana"; 
$dbname = "actividad_integradora";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

#ini_set("smtp_port", "587");
#ini_set("SMTP", "mail.example.com");
#mail("luciaanaflores2000@gmail.com", "Mensaje enviado desde nuestro sitio", $cuerpo_mail);

#$conexion = mysqli_connect($servername, $username, $password, $dbname) or exit("No se pudo conectar a la base de datos");

$nombre_form = $_POST["nombre"] ?? '';
$apellido_form = $_POST["apellido"] ?? '';
$correo_form = $_POST["correo"] ?? '';
$mensaje_form = $_POST["mensaje"] ?? '';

$sql = "INSERT INTO contactos (nombre, apellido, correo, mensaje) VALUES ('$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

#$stmt = mysqli_prepare($conexion, $query);
#mysqli_stmt_bind_param($stmt, "ssss", $nombre_form, $apellido_form, $correo_form, $mensaje_form);
#mysqli_stmt_execute($stmt);
#
#mysqli_close($conexion);
#
#header("Location: contacto.php?ok");
?>