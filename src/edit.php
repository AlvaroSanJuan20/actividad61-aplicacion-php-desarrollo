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
    <ul>
        <li><a href="index.php" >Inicio</a></li>
        <li><a href="add.html" >Agregar Personaje</a></li>
    </ul>
    <h2>Modificar Personaje</h2>

<?php
// Obtiene el id del personaje a modificar a partir de la URL con el método GET
$idpersonaje = $_GET['idpersonaje'];

// Protege contra inyección SQL
$idpersonaje = $mysqli->real_escape_string($idpersonaje);

// Selecciona el personaje a modificar
$resultado = $mysqli->query("SELECT apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion FROM PersonajesDeadSpace WHERE id = $idpersonaje");

// Extrae el registro
$fila = $resultado->fetch_array();
$surname = $fila['apellido'];
$name = $fila['nombre'];
$age = $fila['edad'];
$job = $fila['puesto'];
$firstAppearance = $fila['primeraaparicion'];
$lastAppearance = $fila['ultimaaparicion'];

// Cierra la conexión a la base de datos
$mysqli->close();
?>

<!-- FORMULARIO DE EDICIÓN -->
    <form action="edit_action.php" method="post">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="<?php echo $name;?>" required>
        </div>

        <div>
            <label for="surname">Apellido</label>
            <input type="text" name="surname" id="surname" value="<?php echo $surname;?>" required>
        </div>

        <div>
            <label for="age">Edad</label>
            <input type="number" name="age" id="age" value="<?php echo $age;?>" required>
        </div>

        <div>
            <label for="job">Puesto</label>
            <input type="text" name="job" id="job" value="<?php echo $job;?>" required>
        </div>

        <div>
            <label for="firstAppearance">Primera Aparición</label>
            <input type="text" name="firstAppearance" id="firstAppearance" value="<?php echo $firstAppearance;?>" required>
        </div>

        <div>
            <label for="lastAppearance">Última Aparición</label>
            <input type="text" name="lastAppearance" id="lastAppearance" value="<?php echo $lastAppearance;?>" required>
        </div>

        <div>
            <input type="hidden" name="idpersonaje" value="<?php echo $idpersonaje;?>">
            <input type="submit" name="modifica" value="Guardar">
            <input type="button" value="Cancelar" onclick="location.href='index.php'">
        </div>
    </form>
    </main>    
    <footer>
        Created by the IES Miguel Herrero team &copy; 2024
    </footer>
</div>
</body>
</html>


