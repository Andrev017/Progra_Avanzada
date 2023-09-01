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
try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=test_hito2_progra",
        "root",
        "",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    $stmt = $conn->prepare("SELECT * FROM usuario");
    $stmt->execute();
    $result = $stmt->fetchAll();

    echo '<table border="2">';
    echo '<tr><th>ID</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>DIRECCION</th><th>CI</th><th>EMAIL</th></tr>';
    foreach ($result as $row) {
        echo '<tr>';
        echo '<td>' . $row['ID'] . '</td>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['paterno'] . '</td>';
        echo '<td>' . $row['materno'] . '</td>';
        echo '<td>' . $row['direccion'] . '</td>';
        echo '<td>' . $row['ci'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST["materno"];
    $direccion = $_POST['direccion'];
    $ci = $_POST['ci'];
    $email = $_POST['email'];

    try {
        $pdo = new PDO(
            "mysql:host=localhost;dbname=test_hito2_progra",
            "root",
            "",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

        $sql = "INSERT INTO usuario (nombre, paterno, materno, direccion, ci, email) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre, $paterno, $materno, $direccion, $ci, $email]);
        echo "Se enviaron los datos!";
    } catch (PDOException $e) {
        echo "Error al insertar datos: " . $e->getMessage();
    }
}
?>


