<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="/Examen_Hito_2/css/controlador.css">
</head>
<body>

    <h2>Registros existentes:</h2>
    <table border="1" class="tabala">
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
                echo "<td><a class='actu' href='actualizar_controlaodor.php?ID=" . $row["ID"] . "'>Actualizar</a> | <a class='elim' href='eliminar_controlador.php?ID=" . $row["ID"] . "'>Eliminar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "No hay registros en la base de datos.";
        }

        $conn->close();
        ?>
    </table>
    <br>
    <button class="botonsub"><a href="/Examen_Hito_2/vista.html">Volver al Registro</a></button>
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


        $sql = "INSERT INTO usuario (nombre,paterno,materno,direccion,ci,email) VALUES ('$nombre', '$paterno', '$materno', '$direccion', '$ci', '$email')";

        if ($conn->query($sql) === TRUE) {
            header("Location: controlador.php"); 
        } else {
            echo "Error al insertar registro: " . $conn->error;
        }

        $conn->close();
    }
?>



