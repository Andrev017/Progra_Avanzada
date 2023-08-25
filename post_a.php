<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $apellidop = $_POST['apellidop'];

    $apellidom = $_POST['apellidom'];
    $direc = $_POST['direccion'];

    $fecha = $_POST['fecha'];
    $fijo = $_POST['fijo'];

    $movil = $_POST['movil'];
    $nacimiento = $_POST['nacimiento'];
    
    $pais = $_POST['pais'];
    $gamil = $_POST['gmail'];

    $facultad = $_POST['facultad'];
    


    if (empty($name)) 
        echo "Porfavor ingre su nombre";
        
    elseif(empty($apellidop))
        echo "Por favor ingrese su apellido paterno"; 

    elseif(empty($apellidom))
        echo "Por favor ingrese";

    elseif(empty($direc))
        echo "Por favor ingrese su direccion";
    
    elseif(empty($fecha))
        echo "Por favor ingrese su fecha de nacimiento";

    elseif(empty($fijo))
        echo "Por favor ingrese su telefono fijo";

    elseif(empty($movil))
        echo "Por favor ingrese su telefono movil";

    elseif(empty($gamil))
        echo "Por favor ingrese su gamil";

    else
        echo "<h1>Bienvenido.</h1>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corregir</title>
    <link rel="stylesheet" href="/post.css">
</head>

    <body>
        <button class="btn"><a href="./validaciones/index.html">VOLVER</a></button>

    </body>
</html>
