<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST["materno"];
        $direccion = $_POST['direccion'];
        //$fecha_nac = $_POST['fechanac'];
        $ci = $_POST['ci'];
        $email = $_POST['email'];


    define("DB_HOST", "localhost");
    define("DB_NAME", "test_hito2_progra");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");


    $pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME, 
        DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);


        if ($pdo) {
            $sql = "INSERT INTO usuario (nombre,paterno,materno,direccion,ci,email) VALUES (?,?,?,?,?,?)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute([$nombre, $paterno, $materno, $direccion, $ci, $email]);
            echo "Se enviaron los datos!";
            echo '<br> <br> <br>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <link rel="stylesheet" href="/Segunda_Practica_conexion/conexion.css">
</head>
<body>

        <button class="btn_1">
            <a href="/Segunda_Practica_conexion/index.html">Volver al Registro</a>
        </button>


        <button class="btn_2">
            <a href="/Segunda_Practica_conexion/tablas.php">Entrar a las Listas</a>
        </button>

</body>
</html>
