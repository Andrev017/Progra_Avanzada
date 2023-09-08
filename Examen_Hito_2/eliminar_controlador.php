<?php
require "modelo.php";

$id = $_GET["ID"];
$sql = "DELETE FROM usuario WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: controlador.php"); 
} else {
    echo "Error al eliminar registro: " . $conn->error;
}

$conn->close();
?>
