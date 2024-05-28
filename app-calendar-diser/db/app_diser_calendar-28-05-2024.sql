-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 28, 2024 at 10:43 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_diser_calendar`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_login` (`dni` VARCHAR(10))   BEGIN
    SELECT * FROM tbl_usuario u INNER JOIN tbl_areas_diser a ON u.`idArea` = a.`id`
    WHERE u.user_dni = dni;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_areas_diser`
--

CREATE TABLE `tbl_areas_diser` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `area_min` varchar(15) DEFAULT NULL,
  `area_nombre` varchar(200) DEFAULT NULL,
  `area_estado` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_areas_diser`
--

INSERT INTO `tbl_areas_diser` (`id`, `area_min`, `area_nombre`, `area_estado`) VALUES
(1, 'DIR/ADMIN', 'DIRECCIÓN/ADMINISTRACIÓN', 1),
(2, 'APC', 'ÁREA PEDAGÓGICA CURRICULAR', 1),
(3, 'MSE-DISER', 'MODELOS DE SERVICIOS EDUCATIVOS', 1),
(4, 'MSE-SA', 'MSE - SECUNDARIA EN ALTERNANCIA', 1),
(5, 'MSE-SRE', 'MSE - SECUNDARIA CON RESIDENCIA ESTUDIANTIL', 1),
(6, 'MSE-ST', 'MSE - SECUNDARIA TUTORIAL', 1),
(7, 'PMM', 'PRIMARIA MULTIGRADO MONOLINGÜE', 1),
(8, 'MRE', 'MATERIALES Y RECURSOS EDUCATIVOS', 1),
(9, 'PBE', 'PARTICIPACIÓN Y BIENESTAR ESTUDIANTIL', 1),
(10, 'APMGI', 'ÁREA DE PLANIFICACIÓN, MONITOREO Y GESTIÓN DE LA INFORMACIÓN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calendar`
--

CREATE TABLE `tbl_calendar` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `idArea` int(11) DEFAULT NULL,
  `cal_tipo_programa` varchar(150) DEFAULT NULL COMMENT 'Curso, AT, etc...',
  `cal_nombre_programa` varchar(250) DEFAULT NULL,
  `cal_descripcion_programa` text COMMENT 'Breve descripcion de la reunion',
  `cal_agenda` text COMMENT 'Lista de temas a tratar',
  `cal_modalidad` varchar(150) DEFAULT NULL COMMENT 'Virtual (online), presencial',
  `cal_cobertura` varchar(150) DEFAULT NULL COMMENT 'Macional, Minedu, Regional, UGEL, IE',
  `cal_regiones` text,
  `cal_ugel` text,
  `cal_participantes` text,
  `cal_nro_participantes` int(11) DEFAULT NULL,
  `cal_fecha_inicio` datetime DEFAULT NULL,
  `cal_fecha_fin` datetime DEFAULT NULL,
  `cal_link_reunion` text,
  `cal_link_asistencia` text,
  `cal_estado` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `idArea` int(11) DEFAULT NULL,
  `user_rol` varchar(30) DEFAULT NULL,
  `user_dni` char(10) DEFAULT NULL,
  `user_apellidos` varchar(80) DEFAULT NULL,
  `user_nombre` varchar(80) DEFAULT NULL,
  `user_cargo` varchar(150) DEFAULT NULL,
  `user_estado` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id`, `idArea`, `user_rol`, `user_dni`, `user_apellidos`, `user_nombre`, `user_cargo`, `user_estado`) VALUES
(1, 1, 'Admin', '47352403', 'VILLEGAS TERRONES', 'MANUEL ANTONIO', 'ESPECIALISTA EN GESTIÓN DE LA INFORMACIÓN', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_areas_diser`
--
ALTER TABLE `tbl_areas_diser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_calendar`
--
ALTER TABLE `tbl_calendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArea` (`idArea`);

--
-- Indexes for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_areas_diser`
--
ALTER TABLE `tbl_areas_diser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_calendar`
--
ALTER TABLE `tbl_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_calendar`
--
ALTER TABLE `tbl_calendar`
  ADD CONSTRAINT `tbl_calendar_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `tbl_areas_diser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
