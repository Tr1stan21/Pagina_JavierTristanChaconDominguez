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
            function eliminarRegistro($id) {
                global $connection2;
                $borrado = "DELETE FROM inscripciones WHERE id=$id";
                return mysqli_query($connection2, $borrado);
            } 

            $server = "localhost:3307"; 
            $bd = "miBD";
            $user = "root";
            $password = "";

            $connection2 = mysqli_connect($server, $user, $password);
            if (!$connection2) {
                die ("<h1>Error al conectar al servidor MySQL: <h1>". mysqli_connect_error());
            }
            $db_exists_query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$bd'";
            $db_exists_result = mysqli_query($connection2, $db_exists_query);
            if (mysqli_num_rows($db_exists_result) == 0) {
                echo "<h1>No existe la base de datos.</h1>";
            } else {
                mysqli_select_db($connection2, $bd);
                $valor = $_POST['identificador'];
                if (!isset($valor) || $valor === '') {
                    echo "<h1>El ID proporcionado no es válido.</h1>";
                }
                elseif (eliminarRegistro($valor)) {
                    echo "<h1>Registro con ID $valor eliminado correctamente.<h1>";
                } else {
                    echo "<h1>Error al eliminar el registro con ID $valor.<h1>";
                }
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
