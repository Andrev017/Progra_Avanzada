<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>

    <h2>Registros existentes:</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Dirección</th>
            <th>CI</th>
            <th>Email</th>
            <th>Botones</th>
        </tr>

        <?php
        require "modelo.php";

        // Consulta para seleccionar todos los registros
        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["paterno"] . "</td>";
                echo "<td>" . $row["materno"] . "</td>";
                echo "<td>" . $row["direccion"] . "</td>";
                echo "<td>" . $row["ci"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td><a href='actualizar.php?id=" . $row["ID"] . "'>Actualizar</a> | <a href='eliminar.php?id=" . $row["ID"] . "'>Eliminar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "No hay registros en la base de datos.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>



<?php
    require "modelo.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST["materno"];
        $direccion = $_POST['direccion'];
        $ci = $_POST['ci'];
        $email = $_POST['email'];
        

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];

        $sql = "INSERT INTO tabla (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php"); // Redirige a la página principal
        } else {
            echo "Error al insertar registro: " . $conn->error;
        }

        $conn->close();
    }
?>

