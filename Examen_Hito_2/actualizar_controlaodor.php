<?php
require "modelo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST["materno"];
    $direccion = $_POST['direccion'];
    $ci = $_POST['ci'];
    $email = $_POST['email'];


    $sql = "UPDATE usuario SET nombre='$nombre', paterno='$paterno', materno='$materno', direccion='$direccion', ci='$ci', email='$email' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: actualizar_controlaodor.php"); 
    } else {
        echo "Error al actualizar registro: " . $conn->error;
    }

} else {
    $id = $_GET["ID"];
    $sql = "SELECT * FROM usuario WHERE ID=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nombre = $row["nombre"];
        $paterno = $row["paterno"];
        $materno = $row["materno"];
        $direccion = $row["direccion"];
        $ci = $row["ci"];
        $email = $row["email"];
    } else {
        echo "Registro no encontrado.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualisacion</title>
    <link rel="stylesheet" href="/Examen_Hito_2/css/actu_controlador.css">
<body>

    <section class="bloque">
    <h1>Actualizar Registro</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="hidden" name="ID" value="<?php echo $id; ?>">
            <br>
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">
            <br><br>
            <input type="text" name="paterno" placeholder="Apellido" value="<?php echo $paterno; ?>">
            <br><br>
            <input type="text" name="materno" placeholder="Apellido" value="<?php echo $materno; ?>">
            <br><br>
            <input type="text" name="direccion" placeholder="Direccion" value="<?php echo $direccion; ?>">
            <br><br>
            <input type="text" name="ci" placeholder="Carnet" value="<?php echo $ci; ?>">
            <br><br>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <br><br><br>
            
            <input type="submit" value="Actualizar" class="botonsub">

            <button class="botonsub"><a href="/Examen_Hito_2/controlador.php">Volver</a></button>
        </form>

    </section>
    

    
</body>
</html>
