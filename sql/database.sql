CREATE DATABASE IF NOT EXISTS actividad61ASJ;
USE actividad61ASJ;

CREATE TABLE DeadSpace (
  deadspace_id INT AUTO_INCREMENT PRIMARY KEY,
  apellido VARCHAR(100) NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  edad INT NOT NULL,
  puesto VARCHAR(100) NOT NULL,
  primeraaparicion VARCHAR (100) NOT NULL,
  ultimaaparicion VARCHAR (100) NOT NULL
);

INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Clarke', 'Isaac', 46, 'Ingeniero', 'Dead Space', 'Dead Space 3');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Brennan', 'Nicole', 45, 'Medico', 'Dead Space','Dead Space 3');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Challus', 'Mercer', 40, 'Medico', 'Dead Space', 'Dead Space');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Brant', 'Harris', 34, 'Minero', 'Dead Space', 'Dead Space');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Cross', 'Elizabeth', 25, 'Medico', 'Dead Space', 'Dead Space');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Temple', 'Jacob', 26, 'Ingeniero', 'Dead Space', 'Dead Space');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Clarke', 'Octavia', 58, 'Desempleo', 'Pre-Dead Space', 'Pre-Dead Space');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('White', 'D.', 56, 'Administrador', 'Dead Space', 'Dead Space');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Serrano', 'Earl', 33, 'Ingeniero', 'Dead Space 3', 'Dead Space 3');
INSERT INTO DeadSpace (apellido, nombre, edad, puesto, primeraaparicion, ultimaaparicion) VALUES('Burns', 'Sandra', 26, 'Medico', 'Pre-Dead Space', 'Pre-Dead Space');