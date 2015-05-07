

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

USE `seminariointerdiocesano`;
--
-- Dumping data for table `diocesis`
--

INSERT INTO `diocesis` (`id_diocesis`, `nombre_diocesis`) VALUES
(3, 'Chinandega'),
(2, 'León'),
(1, 'Managua');

-- --------------------------------------------------------
-- Dumping data for table `facultades`
--

INSERT INTO `facultades` (`id_facultad`, `nombre_facultad`) VALUES
(1, 'Filosofía'),
(2, 'Teología');

-- --------------------------------------------------------
-- Dumping data for table `parentesco`
--

INSERT INTO `parentesco` (`id_parentesco`, `nombre_parentesco`) VALUES
(1, 'Madre'),
(2, 'Padre');

-- --------------------------------------------------------
-- Dumping data for table `parroquias`
--

INSERT INTO `parroquias` (`id_parroquia`, `id_diocesis`, `nombre_parroquia`) VALUES
(1, 1, 'Candelaria'),
(2, 1, 'Espiritu Santo'),
(3, 3, 'La Luz'),
(4, 3, 'La Cruz'),
(5, 2, 'La Asunción'),
(6, 2, 'Santa María');

-- --------------------------------------------------------
-- Dumping data for table `profesiones`
--

INSERT INTO `profesiones` (`id_profesion`, `nombre_profesion`) VALUES
(2, 'Agricultor'),
(1, 'Ama de Casa'),
(3, 'Ganadero');

-- --------------------------------------------------------
-- Dumping data for table `tipos_de_estudio`
--

INSERT INTO `tipos_de_estudio` (`id_tipo_estudio`, `nombre_tipo_estudio`) VALUES
(1, 'Primaria'),
(2, 'Secundaria'),
(3, 'Universidad'),
(4, 'Técnico');

-- --------------------------------------------------------
-- Dumping data for table `tipos_de_grupo`
--

INSERT INTO `tipos_de_grupo` (`id_tipo_grupo`, `nombre_tipo_grupo`) VALUES
(1, 'Regular'),
(2, 'Tutoría');

-- --------------------------------------------------------
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id_doc`, `num_carnet_doc`, `nombres_doc`, `apellidos_doc`, `cedula_doc`, `telefono_doc`, `email_doc`) VALUES
(1, '201134', 'Emerson Javier', 'Molina Torres', '001-090887-0011N', '8976-4352', 'emerson3@gmail.com'),
(2, '201135', 'Edwin Ricardo', 'Gónzales Moreno', '001-070985-0033M', '8960-4352', 'edwinricardo@hotmail.com'),
(3, '201136', 'Norman Uriel', 'Bellorini Alvarez', '001-231082-0099M', '2260-1456', 'normanU@yahoo.es'),
(4, '201137', 'Alexander Miurel', 'Vega Perez', '001-061080-0033H', '8754-3134', 'alex@gmail.com'),
(5, '201138', 'Joaquin Alberto', 'Avellán Centeno', '001-110477-0099K', '8950-3245', 'joaV@hotmail.com');

-- --------------------------------------------------------
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id_est`, `num_carnet_est`, `nombres_est`, `apellidos_est`, `fecha_nac_est`, `lugar_nac_est`, `telefono_est`, `direccion_dom_est`, `cedula_est`) VALUES
(1, '2013930012', 'Armando José', 'López Cerda', '0000-00-00 00:00:00', 'Nandaime', '8113-9067', 'Barrio santa ana, del hospital 3 c abajo', '001-200296-0012s'),
(2, '2013980501', 'Roberto José', 'Gutiérrez Salazar', '0000-00-00 00:00:00', 'Managua', '8956-4321', 'B San judas, del ceibo 2 c al sur', '001-040395-0022B'),
(3, '2012980020', 'Franklin Javier', 'Ruíz Martinez', '0000-00-00 00:00:00', 'Managua', '2260-3412', 'B Luis norte, de la pizzeria 2 c abajo, 3 c al lago', '001-281292-0022B'),
(4, '2012970021', 'Pablo de Jesús', 'Loasiga Miranda', '0000-00-00 00:00:00', 'Masaya', '2255-1324', 'Del parque central, 2 c abajo', '001-150595-0022N'),
(5, '2014950023', 'Casimiro Rodrigo', 'Lorenzo López', '0000-00-00 00:00:00', 'Managua', '8932-1456', 'B El pilar, de los raspados loli, 2 c al norte', '001-201193-0044G'),
(6, '2012980034', 'Elvis Antonio', 'Murillo Murillo', '0000-00-00 00:00:00', 'Managua', '8976-5432', 'B san judas, de a terminal de la 123, 1/2 al sur', '001-030698-0022A'),
(7, '2013930045', 'Juan Manuel', 'Vargas Zeledón', '0000-00-00 00:00:00', 'Managua', '2234-5678', 'B Villa Roma, de la panaderia magda, 200 metros norte', '001-120493-0033H'),
(8, '2012900043', 'Gerald Scott', 'Santamaria lópez', '0000-00-00 00:00:00', 'Managua', '2280-5674', 'B Monzeñor lezcano, carne asada la yarda, 1 c al lago', '001-050697-0033M'),
(9, '2013980034', 'Luis Carlos', 'Alfaro Vargas', '0000-00-00 00:00:00', 'Managua', '8967-8083', 'Linda Vista, de la estación de policia,4 c al norte', '001-091292-0034D'),
(10, '2013987601', 'Mario Luz', 'Aguilar Centeno', '0000-00-00 00:00:00', 'Managua', '2290-9876', 'Linda vista, colonia azules del cielo, casa N 34', '001-040595-0999B');

-- --------------------------------------------------------
-- Dumping data for table `formacion_academica`
--

INSERT INTO `formacion_academica` (`id_estudio`, `id_est`, `lugar_estudio`, `id_tipo_estudio`) VALUES
(1, 1, 'UCA', 3),
(2, 2, 'Bautista Belén', 2),
(3, 3, 'UNI', 3),
(4, 4, 'Upoli', 3),
(5, 5, 'UCA', 3),
(6, 6, 'UCN', 3),
(7, 7, 'Manuel olivares', 4),
(8, 8, 'Cristiano Restauración', 2),
(9, 9, 'UNICA', 3),
(10, 10, 'La inmaculada', 2);

-- --------------------------------------------------------
-- Dumping data for table `informacion_familiar`
--

INSERT INTO `informacion_familiar` (`id_info_fami`, `id_est`, `cant_hermanas_est`, `cant_hermanos_est`) VALUES
(1, 1, 1, 1),
(2, 2, 0, 1),
(3, 3, 1, 2),
(4, 4, 0, 1),
(5, 5, 0, 0),
(6, 6, 5, 0),
(7, 7, 1, 1),
(8, 8, 3, 0),
(9, 9, 1, 2),
(10, 10, 0, 1);

-- --------------------------------------------------------
-- Dumping data for table `informacion_seminarista`
--

INSERT INTO `informacion_seminarista` (`id_info_semi`, `id_est`, `id_parroquia`, `fecha_ingreso_est`, `observaciones`) VALUES
(1, 1, 2, '0000-00-00 00:00:00', 'Ninguna'),
(2, 2, 2, '0000-00-00 00:00:00', 'Ninguno'),
(3, 3, 1, '0000-00-00 00:00:00', 'Ninguna'),
(4, 4, 5, '0000-00-00 00:00:00', 'Ninguna'),
(5, 5, 4, '0000-00-00 00:00:00', ''),
(6, 6, 1, '0000-00-00 00:00:00', ''),
(7, 7, 1, '0000-00-00 00:00:00', ''),
(8, 8, 4, '0000-00-00 00:00:00', ''),
(9, 9, 6, '0000-00-00 00:00:00', ''),
(10, 10, 4, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------
-- Dumping data for table `parientes`
--

INSERT INTO `parientes` (`id_pariente`, `id_est`, `nombre_pariente`, `id_parentesco`, `id_profesion`) VALUES
(1, 1, 'Maria Cerda', 1, 1),
(2, 2, 'Orlando Gutiérrez', 2, 2),
(3, 3, 'Rosa Martinez', 1, 1),
(4, 4, 'Lorena Miranda', 1, 1),
(5, 5, 'Rodrigo Lorenzo', 2, 3),
(6, 6, 'Antonia Murillo', 1, 1),
(7, 7, 'Cecilia Zeledón', 1, 3),
(8, 8, 'Scott Santamaria', 2, 3),
(9, 9, 'Susana Vargas', 1, 2),
(10, 10, 'Mario Aguilar', 2, 3);

-- --------------------------------------------------------
-- --------------------------------------------------------
-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
