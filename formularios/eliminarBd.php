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

            $server = "localhost:3307"; 
            $bd = "miBD";
            $user = "root";
            $password = "";

            $borrarBD = "DROP DATABASE IF EXISTS $bd";

            $connection2 = mysqli_connect($server, $user, $password);

            if (mysqli_query($connection2, $borrarBD)) {
                echo "<h1>La base de datos '$bd' ha sido eliminada correctamente.</h1>";
            } else {
                echo "<h1>Error al eliminar la base de datos</h1>";
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
