<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
    <div class="nom">

        <h1>Lista de los registrados</h1>
    </div>


    <button>
        <a href="/Segunda_Practica_conexion/index.html">Regresar al registro</a>
    </button>
    <br><br>
</body>
</html>



<?php
// Consulta SQL para seleccionar datos de la tabla
$sql = "SELECT * FROM tu_tabla";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    

    //---------------------------------------------------------
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Correo Electrónico</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros en la tabla.";
}


?>


