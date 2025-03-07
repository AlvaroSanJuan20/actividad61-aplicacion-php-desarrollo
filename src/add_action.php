<?php
// Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>DEAD SPACE</title>
</head>
<body>
<div>
	<header>
		<h1>PERSONAJES DE LA FRANQUICIA DEAD SPACE</h1>
	</header>
	<main>

<?php
/* Se comprueba si se ha llegado a esta página PHP a través del formulario de altas. 
Para ello se comprueba la variable de formulario: "inserta" enviada al pulsar el botón Agregar.
Los datos del formulario se acceden por el método: POST
*/

if(isset($_POST['inserta'])) 
{
/* Se obtienen los datos del personaje (apellido, nombre, edad, puesto, primeraaparicion y ultimaaparicion) a partir del formulario de alta (surname, name, age, job, firstappearance, lastappearance) por el método POST.
Se envía a través del body del HTTP Request. No aparecen en la URL como era el caso del otro método de envío de datos: GET.
*/

	$apellido = $mysqli->real_escape_string($_POST['apellido']);
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$edad = $mysqli->real_escape_string($_POST['edad']);
	$puesto = $mysqli->real_escape_string($_POST['puesto']);
	$primeraaparicion = $mysqli->real_escape_string($_POST['primeraaparicion']);
	$ultimaaparicion = $mysqli->real_escape_string($_POST['ultimaaparicion']);

/* Con mysqli_real_escape_string protege caracteres especiales en una cadena para ser usada en una sentencia SQL.
Esta función es usada para crear una cadena SQL legal que se puede usar en una sentencia SQL. 
Los caracteres codificados son NUL (ASCII 0), \n, \r, \, ', ", y Control-Z.
*/

	// Se comprueba si existen campos del formulario vacíos
	if(empty($apellido) || empty($nombre) || empty($edad) || empty($puesto) || empty($primeraaparicion) || empty($ultimaaparicion)) 
	{
		if(empty($apellido)) {
			echo "<div>Campo apellido vacío.</div>";
		}

		if(empty($nombre)) {
			echo "<div>Campo nombre vacío.</div>";
		}

		if(empty($edad)) {
			echo "<div>Campo edad vacío.</div>";
		}

		if(empty($puesto)) {
			echo "<div>Campo puesto vacío.</div>";
		}

		if(empty($primeraaparicion)) {
			echo "<div>Campo primera aparición vacío.</div>";
		}

		if(empty($ultimaaparicion)) {
			echo "<div>Campo última aparición vacío.</div>";
		}

		// Enlace a la página anterior
		$mysqli->close();
		echo "<a href='javascript:self.history.back();'>Volver atrás</a>";
	} // fin si
	else // Si no existen campos vacíos, se procede al alta del nuevo personaje
	{
		// Se ejecuta una sentencia SQL. Inserta (da de alta) el nuevo registro
		$result = $mysqli->query("INSERT INTO PersonajesDeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) 
			VALUES ('$apellido', '$nombre', '$edad', '$puesto', '$primeraaparicion', '$ultimaaparicion')");	

		// Se cierra la conexión
		$mysqli->close();
		echo "<div>Registro añadido correctamente...</div>";
		echo "<a href='index.php'>Ver resultado</a>";
		// Se redirige a la página principal: index.php
		//header("Location:index.php");
	} // fin sino
}
?>

<!-- <div>Registro añadido correctamente</div>
<a href='index.php'>Ver resultado</a> -->
	</main>
</div>
</body>
</html>
