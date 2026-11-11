<?php

$servername = "localhost";
$database = "u509112580_quierounirmebd";
$username = "u509112580_quierounirme";
$password = "Realitysnack1045736163_";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Error de Conexión: " . mysqli_connect_error());
}


$areas = $_POST['medioparainformarle'];
$sql = "INSERT INTO boletin.informativo (medioparainformarle) VALUES ('$medioparainformarle')";
if (mysqli_query($conn, $sql)) {
      header('Location: ../../../../../info/Inscripcion-Exitosa');
} else {
      header('Location: ../../../../../info/404');
}
mysqli_close($conn);

?>