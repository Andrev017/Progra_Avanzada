<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST["materno"];
        $direccion = $_POST['direccion'];
        $fecha_nac = $_POST['fechanac'];
        $ci = $_POST['ci'];
        $email = $_POST['email'];



//  DATABASE SETTINGS 
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
        
    
            //INSERT
            $sql = "INSERT INTO usuarios (nombre,paterno,email) VALUES (?,?,?)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute([$nombre, $paterno, $materno, $email]);
            echo "Se enviaron los datos!";
        }
    }
?>