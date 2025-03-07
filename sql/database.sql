CREATE TABLE PersonajesDeadSpeace (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  apellido VARCHAR(100) NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  edad INT UNSIGNED NOT NULL,
  puesto VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO PersonajesDeadSpeace (apellido, nombre, edad, puesto) VALUES('Clarke', 'Isaac', 46, 'Ingeniero');
INSERT INTO PersonajesDeadSpeace (apellido, nombre, edad, puesto) VALUES('Brennan', 'Nicole', 45, 'Medico');
INSERT INTO PersonajesDeadSpeace (apellido, nombre, edad, puesto) VALUES('Challus', 'Mercer', 40, 'Medico');
INSERT INTO PersonajesDeadSpeace (apellido, nombre, edad, puesto) VALUES('Brant', 'Harris', 34, 'Minero');



