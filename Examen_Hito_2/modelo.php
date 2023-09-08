<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test_hito2_progra";

        // Crear una conexión a la base de datos
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }

?>