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

            // Conexión al servidor
            $connection = mysqli_connect($server, $user, $password);

            // Verificar conexión
            if (!$connection) {
                die("<h1>Error al conectar a la base de datos: </h1><br>" . mysqli_connect_error());
            }

            // Crear base de datos si no existe
            $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $bd";
            if (mysqli_query($connection, $sqlCreateDB)) {
                echo "<h1>Base de datos creada o existente.</h1><br>";
            } else {
                die("<h1>Error al crear la base de datos: </h1><br>" . mysqli_error($connection));
            }

            // Seleccionar la base de datos
            mysqli_select_db($connection, $bd);

            // Crear tabla
            $sqlCreateTable = "
            CREATE TABLE IF NOT EXISTS inscripciones (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                telefono VARCHAR(15) NOT NULL,
                genero VARCHAR(10) NOT NULL,
                experiencia VARCHAR(20) NOT NULL,
                texas BOOLEAN DEFAULT 0,
                omaha_hi BOOLEAN DEFAULT 0,
                omaha_hi_lo BOOLEAN DEFAULT 0,
                draw BOOLEAN DEFAULT 0,
                stud BOOLEAN DEFAULT 0,
                otros BOOLEAN DEFAULT 0,
                mensaje TEXT
            )";

            if (mysqli_query($connection, $sqlCreateTable)) {
                echo "<h1>Tabla 'inscripciones' creada correctamente.</h1><br>";
            } else {
                echo "<h1>Error al crear la tabla: </h1><br>" . mysqli_error($connection);
            }

            mysqli_close($connection);
            ?>            
            <div id="boton">
                <a id="enlace" href="inscripcion.php"><button type="button">Volver</button></a>
            </div>
        </section>
    </main>
	<?php include '../footer.php'; ?>
</body>
</html>
