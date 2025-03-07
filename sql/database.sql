CREATE TABLE PersonajesDeadSpace (
  id INT AUTO_INCREMENT PRIMARY KEY,
  apellido VARCHAR(100) NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  edad INT NOT NULL,
  puesto VARCHAR(100) NOT NULL,
  primeraaparicion VARCHAR (100) NOT NULL,
  ultimaaparicion VARCHAR (100) NOT NULL
);

INSERT INTO PersonajesDeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Clarke', 'Isaac', 46, 'Ingeniero', 'Dead Space', 'Dead Space 3');
INSERT INTO PersonajesDeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Brennan', 'Nicole', 45, 'Medico', 'Dead Space','Dead Space 3');
INSERT INTO PersonajesDeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Challus', 'Mercer', 40, 'Medico', 'Dead Space', 'Dead Space');
INSERT INTO PersonajesDeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Brant', 'Harris', 34, 'Minero', 'Dead Space', 'Dead Space');



