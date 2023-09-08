<?php
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST["materno"];
        $direccion = $_POST['direccion'];
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
*/
//--------------------------------------------------------------;

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