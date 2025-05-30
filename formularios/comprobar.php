<!DOCTYPE html>
<html lang="es">
<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="./styles/header_footer.css" />
    <link rel="stylesheet" href="./styles/comprobar.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png" />
</head>
<body>
	<?php include '../header.php'; ?>
    <main>
        <section>
            <h1>Comprueba si tus datos son correctos: </h1>
            <?php
                // Recoger variables del formulario
                if (isset($_POST['nombre'])) {
                    $nombre = $_POST['nombre'];
                } else {
                    $nombre = '';
                }

                if (isset($_POST['email'])) {
                    $email = $_POST['email'];
                } else {
                    $email = '';
                }

                if (isset($_POST['telefono'])) {
                    $telefono = $_POST['telefono'];
                } else {
                    $telefono = '';
                }

                if (isset($_POST['genero'])) {
                    $genero = $_POST['genero'];
                } else {
                    $genero = '';
                }

                if (isset($_POST['experiencia'])) {
                    $experiencia = $_POST['experiencia'];
                } else {
                    $experiencia = '';
                }

                if (isset($_POST['mensaje'])) {
                    $mensaje = $_POST['mensaje'];
                } else {
                    $mensaje = '';
                }

                if (isset($_POST['texas'])) {
                    $texas = 1;
                } else {
                    $texas = 0;
                }

                if (isset($_POST['omaha_hi'])) {
                    $omaha_hi = 1;
                } else {
                    $omaha_hi = 0;
                }

                if (isset($_POST['omaha_hi_lo'])) {
                    $omaha_hi_lo = 1;
                } else {
                    $omaha_hi_lo = 0;
                }

                if (isset($_POST['draw'])) {
                    $draw = 1;
                } else {
                    $draw = 0;
                }

                if (isset($_POST['stud'])) {
                    $stud = 1;
                } else {
                    $stud = 0;
                }

                if (isset($_POST['otros'])) {
                    $otros = 1;
                } else {
                    $otros = 0;
                }

                // Nombre completo
                echo "Nombre completo: ";
                if (!empty($nombre)) {
                    echo ($nombre);
                } else {
                    echo "No escrito";
                }
                echo "<br/>";

                // Correo electrónico
                echo "Correo electrónico: ";
                if (!empty($email)) {
                    echo ($email);
                } else {
                    echo "No escrito";
                }
                echo "<br/>";

                // Teléfono
                echo "Teléfono: ";
                if (!empty($telefono)) {
                    echo ($telefono);
                } else {
                    echo "No escrito";
                }
                echo "<br/>";

                // Género
                echo "Género: ";
                if (!empty($genero)) {
                    echo ($genero);
                } else {
                    echo "No seleccionado";
                }
                echo "<br/>";

                // Nivel de experiencia
                echo "Nivel de experiencia: ";
                if (!empty($experiencia)) {
                    echo ($experiencia);
                } else {
                    echo "No seleccionado";
                }
                echo "<br/>";

                // Modalidades de juego
                echo "Modalidades de juego: ";
                $modalidades = [];
                if ($texas) $modalidades[] = "Texas";
                if ($omaha_hi) $modalidades[] = "Omaha Hi";
                if ($omaha_hi_lo) $modalidades[] = "Omaha Hi/Lo";
                if ($draw) $modalidades[] = "Draw";
                if ($stud) $modalidades[] = "Stud";
                if ($otros) $modalidades[] = "Otros";
                if (count($modalidades) > 0) {
                    echo implode(", ", $modalidades);
                } else {
                    echo "No seleccionaste ninguna modalidad";
                }
                echo "<br/>";

                // Mensaje
                echo "Mensaje: ";
                if (!empty($mensaje)) {
                    echo ($mensaje);
                } else {
                    echo "No escrito";
                }
                echo "<br/>";
            ?>
            <form action="./formularios/enviar.php" method="post" style="margin-bottom:0;">
                <input type="hidden" name="nombre" value="<?php echo ($nombre); ?>">
                <input type="hidden" name="email" value="<?php echo ($email); ?>">
                <input type="hidden" name="telefono" value="<?php echo ($telefono); ?>">
                <input type="hidden" name="genero" value="<?php echo ($genero); ?>">
                <input type="hidden" name="experiencia" value="<?php echo ($experiencia); ?>">
                <input type="hidden" name="mensaje" value="<?php echo ($mensaje); ?>">
                <input type="hidden" name="texas" value="<?php echo $texas; ?>">
                <input type="hidden" name="omaha_hi" value="<?php echo $omaha_hi; ?>">
                <input type="hidden" name="omaha_hi_lo" value="<?php echo $omaha_hi_lo; ?>">
                <input type="hidden" name="draw" value="<?php echo $draw; ?>">
                <input type="hidden" name="stud" value="<?php echo $stud; ?>">
                <input type="hidden" name="otros" value="<?php echo $otros; ?>">
                <div class="botones">
                    <button id="boton" type="submit">Enviar</button>
                    <a id="enlace" href="inscripcion.php"><button type="button">Volver</button></a>
                </div>
            </form>
        </section>
    </main>
	<?php include '../footer.php'; ?>
</body>
</html>