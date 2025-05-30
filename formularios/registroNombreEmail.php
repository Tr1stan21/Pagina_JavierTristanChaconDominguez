<!DOCTYPE html>
<html lang="es">
<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="./styles/header_footer.css" />
    <link rel="stylesheet" href="./styles/mostrarregistros.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png" />
</head>
<body>
	<?php include '../header.php'; ?>
    <main>
        <div id="muestra">
            <h1>Registros en la base de datos:</h1>
            <?php
                $server = "localhost:3307";
                $bd = "miBD";
                $user = "root";
                $password = "";

                function mostrarRegistros($connection2) {
                    $consulta = "SELECT nombre, email FROM inscripciones";
                    $result = mysqli_query($connection2, $consulta);
                    $registros = [];

                    // La siguiente instrucción llama al método mysqli_fetch_assoc() y el resultado
                    // se le asigna a $row. En cada iteración se recupera un registro de la tabla.
                    // En el caso de que no haya más registros, devuelve NULL y se sale del bucle
                    while ($row = mysqli_fetch_assoc($result)) {
                        $registros[] = $row;
                    }
                    return $registros;
                }

                // Conexión al servidor
                $connection2 = mysqli_connect($server, $user, $password);
                if (!$connection2) {
                    die("<h1>Error al conectar al servidor MySQL: <h1>" . mysqli_connect_error());
                }

                // Comprobar si la base de datos existe consultando INFORMATION_SCHEMA
                $db_exists_query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$bd'";
                $db_exists_result = mysqli_query($connection2, $db_exists_query);
                if (mysqli_num_rows($db_exists_result) == 0) {
                    echo "<p>La base de datos no existe.</p>";
                } else {
                    mysqli_select_db($connection2, $bd);
                    $registros = mostrarRegistros($connection2);
                }

                // El método mysqli_fetch_assoc() devuelve un array asociativo en el valor de cada registro corresponde
                // con el nombre del cada registro.
                // Para recorrer el array se hace uso del bucle foreach que, en cada iteración devuelve un registro de la tabla
                if (empty($registros)) {
                    echo "<p>No existen registros en la base de datos.</p>";
                } else {
                    foreach ($registros as $registro) {
                        echo "Nombre: " . $registro['nombre'] . "<br>Email: " . $registro['email']
                            . "<br><br>";
                    }
                }
            ?>            
            <div id="boton">
                <a id="enlace" href="inscripcion.php"><button type="button">Volver</button></a>
            </div>
        </div>
    </main>
	<?php include '../footer.php'; ?>
</body>
</html>