<!DOCTYPE html>
<html lang="es">
<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="./styles/header_footer.css" />
    <link rel="stylesheet" href="./styles/informativo.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png" />
</head>
<body>
	<?php include '../header.php'; ?>
    <main>
        <section id="informativo" >
            <?php
            // Configuración de la base de datos
            $server = "localhost:3307";
            $bd = "miBD";
            $user = "root";
            $password = "";

            // Verificar conexión
            $connection2 = mysqli_connect($server, $user, $password, $bd);
            if (!$connection2) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }

            // Insertar datos
            function createRecord ($connection2, $nombre, $email, $telefono, $genero, $experiencia, $mensaje, $texas, $omaha_hi, $omaha_hi_lo, $draw, $stud, $otros) {
                $crearRegistro = "INSERT INTO inscripciones (nombre, email, telefono, genero, experiencia, mensaje, texas, omaha_hi, omaha_hi_lo, draw, stud, otros)
                    VALUES ('$nombre', '$email', '$telefono', '$genero', '$experiencia', '$mensaje', $texas, $omaha_hi, $omaha_hi_lo, $draw, $stud, $otros)";
                mysqli_query($connection2 , $crearRegistro);
            }

            // Recoger datos del POST
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $genero = $_POST['genero'];
            $experiencia = $_POST['experiencia'];
            $mensaje = $_POST['mensaje'];
            $texas = $_POST['texas'];
            $omaha_hi = $_POST['omaha_hi'];
            $omaha_hi_lo = $_POST['omaha_hi_lo'];
            $draw = $_POST['draw'];
            $stud = $_POST['stud'];
            $otros = $_POST['otros'];

            $resultado = createRecord($connection2, $nombre, $email, $telefono, $genero, $experiencia, $mensaje, $texas, $omaha_hi, $omaha_hi_lo, $draw, $stud, $otros);
            if ($resultado !== false) {
                echo "<h1>Registro enviado correctamente.<h1>";
            } else {
                echo "<h1>Error al enviar el registro.<h1>";
            }

            mysqli_close($connection2);
            ?>            
            <div id="boton">
                <a id="enlace" href="inscripcion.php"><button type="button">Volver</button></a>
            </div>
        </section>
    </main>
	<?php include '../footer.php'; ?>
</body>
</html>