<?php
// especificar que usamos UTF8
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');


// tomar datos del formulario y guardarlos en variables
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// mostrar los datos recibidos
echo "Nombre: $nombre <br>";
echo "Email: $email <br>";
echo "Mensaje: $mensaje <br>";

echo "Hola $nombre tu email es $email y tu mensaje es $mensaje <br>";

//insertar los datos en la base de datos
$conexion = mysqli_connect("localhost", "root", "", "datos_form") or die("Problemas de conexion");

$consulta =  "INSERT INTO datos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

mysqli_query($conexion, $consulta);
echo "Datos insertados correctamente";
mysqli_close($conexion);

echo "<br><br><a href='index.html'>Volver al formulario</a>";