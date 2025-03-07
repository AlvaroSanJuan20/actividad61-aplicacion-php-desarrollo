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
/* Se comprueba si se ha llegado a esta página PHP a través del formulario de edición. 
Para ello se comprueba la variable de formulario: "modifica" enviada al pulsar el botón Guardar de dicho formulario.
Los datos del formulario se acceden por el método: POST
*/

if(isset($_POST['modifica'])) {
/* Se obtienen los datos del personaje (id, nombre, apellido, edad, puesto, primeraaparicion, ultimaaparicion) a partir del formulario de edición (idpersonaje, name, surname, age, job, primeraaparicion, ultimaaparicion) por el método POST.
Se envía a través del body del HTTP Request. No aparecen en la URL como era el caso del otro método de envío de datos: GET */

	$idpersonaje = $mysqli->real_escape_string($_POST['idpersonaje']);
	$nombre = $mysqli->real_escape_string($_POST['name']);
	$apellido = $mysqli->real_escape_string($_POST['surname']);
	$edad = $mysqli->real_escape_string($_POST['age']);
	$puesto = $mysqli->real_escape_string($_POST['job']);
	$primeraaparicion = $mysqli->real_escape_string($_POST['primeraaparicion']);
	$ultimaaparicion = $mysqli->real_escape_string($_POST['ultimaaparicion']);

// Se comprueba si existen campos del formulario vacíos
	if(empty($nombre) || empty($apellido) || empty($edad) || empty($puesto) || empty($primeraaparicion) || empty($ultimaaparicion))	{
		if(empty($nombre)) {
			echo "<font color='red'>Campo nombre vacío.</font><br/>";
		}

		if(empty($apellido)) {
			echo "<font color='red'>Campo apellido vacío.</font><br/>";
		}

		if(empty($edad)) {
			echo "<font color='red'>Campo edad vacío.</font><br/>";
		}

		if(empty($puesto)) {
			echo "<font color='red'>Campo puesto vacío.</font><br/>";
		}

		if(empty($primeraaparicion)) {
			echo "<font color='red'>Campo primera aparición vacío.</font><br/>";
		}

		if(empty($ultimaaparicion)) {
			echo "<font color='red'>Campo última aparición vacío.</font><br/>";
		}
	} else { // Se realiza la modificación de un registro de la BD. 
		// Se actualiza el registro a modificar: update
		$mysqli->query("UPDATE PersonajesDeadSpace SET nombre = '$nombre', apellido = '$apellido', edad = '$edad', puesto = '$puesto', primeraaparicion = '$primeraaparicion', ultimaaparicion = '$ultimaaparicion' WHERE id = $idpersonaje");
		$mysqli->close();
        echo "<div>Registro editado correctamente...</div>";
        echo "<a href='index.php'>Ver resultado</a>";
	}// fin sino
}//fin si
?>

    <!-- Formulario de edición -->
    <form method="POST" action="">
        <input type="hidden" name="idpersonaje" value="<?php echo $idpersonaje; ?>" />
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="<?php echo $nombre; ?>" /><br/>

        <label for="surname">Apellido:</label>
        <input type="text" id="surname" name="surname" value="<?php echo $apellido; ?>" /><br/>

        <label for="age">Edad:</label>
        <input type="number" id="age" name="age" value="<?php echo $edad; ?>" /><br/>

        <label for="job">Puesto:</label>
        <input type="text" id="job" name="job" value="<?php echo $puesto; ?>" /><br/>

        <label for="primeraaparicion">Primera aparición:</label>
        <input type="text" id="primeraaparicion" name="primeraaparicion" value="<?php echo $primeraaparicion; ?>" /><br/>

        <label for="ultimaaparicion">Última aparición:</label>
        <input type="text" id="ultimaaparicion" name="ultimaaparicion" value="<?php echo $ultimaaparicion; ?>" /><br/>

        <input type="submit" name="modifica" value="Guardar" />
    </form>

	</main>	
</div>
</body>
</html>


