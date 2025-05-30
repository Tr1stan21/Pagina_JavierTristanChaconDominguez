<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Poker Royal</title>
	<link rel="stylesheet" href="./styles/inscripcion.css" />
	<link rel="stylesheet" href="./styles/header_footer.css" />
	<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png" />

</head>
<body>
	<?php include 'header.php'; ?>
	<main>
		<section>
			<h1>Manejo de la base de datos</h1>
			<form action="./formularios/crearBd.php" method="post"> 
				<button type="submit" value="Crear BD">Crear base de datos</button>
			</form>
			<form action="./formularios/eliminarBd.php" method="post"> 
				<button type="submit" value="Eliminar BD">Eliminar base de datos</button>
			</form>
			<form action="./formularios/mostrarRegistros.php" method="post"> 
				<button type="submit" value="Mostrar registros">Mostrar todos los registros</button>
			</form>
			<form action="./formularios/eliminarRegistro.php" method="post"> 
				<p>Número de registro a eliminar: <input type="number" name="identificador" required></p>
				<button type="submit" value="Eliminar registro">Eliminar registro</button>
			</form>
			<br>
			<br>	
			<h1>Búsquedas personalizadas</h1>
			<form action="./formularios/registroNombreEmail.php" method="post"> 
				<button type="submit" value="Mostrar registros">Mostrar nombre y email</button>
			</form>
			<br>
			<form action="./formularios/registroInicial.php" method="post">
				<p>Mostrar registros cuyo nombre empieza por: <input type="text" name="inicial" pattern="[A-Z]" placeholder="A" maxlength="1" required> </p> 
				<button type="submit" value="Mostrar registros">Mostrar registro por inicial</button>
			</form>
			<br>
			<form action="./formularios/registroExperiencia.php" method="post">
				<select id="experiencia" name="experiencia" required>
					<option value="principiante">Principiante</option>
					<option value="intermedio">Intermedio</option>
					<option value="avanzado">Avanzado</option>
				</select>
				<button type="submit" value="Mostrar registros">Mostrar registros por nivel de experiencia</button>
			</form>
		</section>
		<section>
			<h1>Solicitud de inscripción</h1>
			<form action="./formularios/comprobar.php" method="post">
				<label for="nombre">Nombre completo</label>
				<input
					type="text"
					id="nombre"
					name="nombre"
					placeholder="Tu nombre"
					required
					pattern="([A-ZÑÁÉÍÓÚ][a-zñáéíóú]*)|(([A-ZÑÁÉÍÓÚ][a-zñáéíóú]*)\s([a-zñáéíóú]+\s)*([A-ZÑÁÉÍÓÚ][a-zñáéíóú]*))"
				/>
				<label for="email">Correo electrónico</label>
				<input
					type="email"
					id="email"
					name="email"
					placeholder="Tu correo electrónico"
					required
					pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}"
				/>
				<label for="telefono">Teléfono</label>
				<input
					type="tel"
					id="telefono"
					name="telefono"
					placeholder="Tu teléfono"
					required
					pattern="\d{9}"
				/>
				<label>Género</label>
				<div class="form-genero">
					<input type="radio" id="hombre" name="genero" value="hombre" required />
					<label for="hombre">Hombre</label>
					<input type="radio" id="mujer" name="genero" value="mujer" required style="margin-left: 2vw;" />
					<label for="mujer">Mujer</label>
				</div>
				<label for="experiencia">Nivel de experiencia</label>
				<select id="experiencia" name="experiencia" required>
					<option value="principiante">Principiante</option>
					<option value="intermedio">Intermedio</option>
					<option value="avanzado">Avanzado</option>
				</select>
				<label for="modalidades">Modalidades de juego</label>
				<div id="modalidades">
					<div class="columna">
						<div class="checkbox-label-group">
							<input type="checkbox" id="texas" name="texas" value="Texas Hold’em">
							<label for="texas">Texas Hold’em</label>
						</div>
						<div class="checkbox-label-group">
							<input type="checkbox" id="omaha_hi" name="omaha_hi" value="Omaha Hi">
							<label for="omaha_hi">Omaha Hi</label>
						</div>
						<div class="checkbox-label-group">
							<input type="checkbox" id="omaha_hi_lo" name="omaha_hi_lo" value="Omaha Hi-Lo">
							<label for="omaha_hi_lo">Omaha Hi-Lo</label>
						</div>
					</div>
					<div class="columna">
						<div class="checkbox-label-group">
							<input type="checkbox" id="draw" name="draw" value="5 Card Draw">
							<label for="draw">5 Card Draw</label>
						</div>
						<div class="checkbox-label-group">
							<input type="checkbox" id="stud" name="stud" value="7-Card Stud">
							<label for="stud">7-Card Stud</label>
						</div>
						<div class="checkbox-label-group">
							<input type="checkbox" id="otros" name="otros" value="Otros">
							<label for="otros">Otros</label>
						</div>
					</div>
				</div>
				<label for="mensaje">Mensaje</label>
				<textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." rows="4"></textarea>
				<button type="submit">Inscribirse</button>
			</form>
			<p id="dudas">
				¿Tienes dudas? <a href="#" id="contacto">Contáctanos</a>
			</p>
		</section>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>
