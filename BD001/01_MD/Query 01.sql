USE programacion_school;

INSERT INTO variables
(cNombreVariable, cValorVariable, cDescripcion, lVigente)
VALUES
('NombreEmpresa', 'PROGRAMACION SCHOOL', 'Nombre de la empresa',1),
('cAñoAplicacion', '2023', 'Año de registro de aplicacion',1),
('cAñoAplicacion', 'Primer Mensaje de la aplicacion', 'Titulo del primer BANNER',1),
('cAñoAplicacion', 'Segundo Mensaje de la aplicacion', 'Titulo del primer BANNER',1),
('cAñoAplicacion', 'Tercer Mensaje de la aplicacion', 'Titulo del primer BANNER',1),
('cLogoEmpresa', 'xxxxxx', 'Nombre de la empresa',1);

SELECT 
*
FROM variables A;

UPDATE variables
SET 
	cValorVariable = "QUE RICO CAFE"
WHERE cNombreVariable = "cNombreEmpresa";
UPDATE variables
SET 
	cValorVariable = "Tercer Mensaje de la aplicacion"
WHERE cNombreVariable = "cTituloBan3";

