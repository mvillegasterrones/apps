-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 31, 2024 at 10:52 PM
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_get_dre` ()   BEGIN
    SELECT DISTINCT(dre_nombre) as 'DRE' FROM tbl_dre_ugel
    ORDER BY DRE ASC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_get_events` ()   BEGIN
    SELECT 
        c.id AS 'id',
        c.cal_nombre_programa AS 'title', 
        c.cal_descripcion_programa AS 'description', 
        c.cal_fecha_inicio AS 'start', 
        c.cal_fecha_fin AS 'end' ,
        CASE WHEN c.cal_modalidad = '1. Virtual: Microsoft Teams' THEN 'bg-gradient-primary'
        WHEN c.cal_modalidad = '2. Virtual: Zoom' THEN 'bg-gradient-info'
        WHEN c.cal_modalidad = '3. Virtual: Google Meet' THEN 'bg-gradient-success'
        WHEN c.cal_modalidad = '4. Presencial' THEN 'bg-gradient-warning'
        END AS 'classname',
        a.area_min, 
        a.area_nombre ,
        CONCAT(a.area_min, ' - ', a.area_nombre) AS 'areaName',
        c.cal_agenda AS 'agenda',
        c.cal_regiones AS 'regiones', 
        c.cal_ugel AS 'ugel', 
        c.cal_participantes AS 'participantes',
        c.cal_nro_participantes AS 'nroparticipantes',
        c.cal_link_reunion AS 'linkreunion',
        c.cal_link_asistencia AS 'linkasistencia'
    FROM tbl_calendar c INNER JOIN tbl_areas_diser a 
    ON c.`idArea` = a.id
    ORDER BY c.cal_fecha_fin DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_get_events_recents` ()   BEGIN
    SELECT 
        c.id AS 'id',
        c.cal_nombre_programa AS 'title', 
        c.cal_descripcion_programa AS 'description', 
        c.cal_fecha_inicio AS 'start', 
        c.cal_fecha_fin AS 'end' ,
        CASE WHEN c.cal_modalidad = '1. Virtual: Microsoft Teams' THEN 'bg-gradient-primary'
        WHEN c.cal_modalidad = '2. Virtual: Zoom' THEN 'bg-gradient-info'
        WHEN c.cal_modalidad = '3. Virtual: Google Meet' THEN 'bg-gradient-success'
        WHEN c.cal_modalidad = '4. Presencial' THEN 'bg-gradient-warning'
        END AS 'classname',
        a.area_min, 
        a.area_nombre ,
        CONCAT(a.area_min, ' - ', a.area_nombre) AS 'areaName',
        c.cal_agenda AS 'agenda',
        c.cal_regiones AS 'regiones', 
        c.cal_ugel AS 'ugel', 
        c.cal_participantes AS 'participantes',
        c.cal_nro_participantes AS 'nroparticipantes',
        c.cal_link_reunion AS 'linkreunion',
        c.cal_link_asistencia AS 'linkasistencia'
    FROM tbl_calendar c INNER JOIN tbl_areas_diser a 
    ON c.`idArea` = a.id
    ORDER BY c.cal_fecha_fin DESC
    LIMIT 5;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_get_ugel_by_dre` (`dre` VARCHAR(200))   BEGIN
    SELECT ugel_nombre AS 'UGEL' FROM tbl_dre_ugel WHERE dre_nombre = dre;
END$$

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

--
-- Dumping data for table `tbl_calendar`
--

INSERT INTO `tbl_calendar` (`id`, `idArea`, `cal_tipo_programa`, `cal_nombre_programa`, `cal_descripcion_programa`, `cal_agenda`, `cal_modalidad`, `cal_cobertura`, `cal_regiones`, `cal_ugel`, `cal_participantes`, `cal_nro_participantes`, `cal_fecha_inicio`, `cal_fecha_fin`, `cal_link_reunion`, `cal_link_asistencia`, `cal_estado`) VALUES
(1, 1, '1. Curso', 'Titulo del evento', 'Descripción del evento', 'Description de la agente a tratar', '2. Virtual: Zoom', '5. MINEDU', '* No Aplica', '* No Aplica', '* Especialistas MINEDU', 30, '2024-05-29 08:00:00', '2024-05-29 11:00:00', 'link de la reu', 'link de la asistencia', 1),
(2, 1, '2. Taller de Asistencia Técnica', '[Brigadistas] PRESENTACIÓN APLICATIVO REPORTE DE RESULTADOS - SIMULACRO', 'Reunión de Microsoft Teams', 'I Simulacro Nacional 2024', '1. Virtual: Microsoft Teams', '5. MINEDU', '* No Aplica', '* No Aplica', '* Especialistas MINEDU', 38, '2024-05-15 15:00:00', '2024-05-15 17:30:00', 'https://teams.microsoft.com/l/meetup-join/19%3ameeting_ZmYwMGZkNTYtYWY2Ni00ZTk3LWI5ZGUtZGQ5OTE4MDBlN2Iz%40thread.v2/0?context=%7b%22Tid%22%3a%22179bdda8-d964-43ff-ad3b-674186a2fa28%22%2c%22Oid%22%3a%22ce3eba70-c0dd-48a1-8264-412a24dcc466%22%7d', '-', 1),
(3, 10, '2. Taller de Asistencia Técnica', '[Brigadistas] PRESENTACIÓN APLICATIVO REPORTE DE RESULTADOS - SIMULACRO', 'Coordinaciones para el I Simulacro Nacional Multipeligo', '* Coordinaciones\r\n* Revisión de EPS\r\n* Revision de instrumentos', '1. Virtual: Microsoft Teams', '5. MINEDU', '* Todas,\r\n* DRE Lima Metropolitana', '* DRE AMAZONAS: UGEL CHACHAPOYAS,\r\n* DRE AMAZONAS: UGEL BAGUA,\r\n* DRE AMAZONAS: UGEL BONGARÁ,\r\n* DRE AMAZONAS: UGEL LUYA,\r\n* DRE AMAZONAS: UGEL UTCUBAMBA,\r\n* DRE AMAZONAS: UGEL IBIR-IMAZA', '* Especialistas MINEDU,\r\n* ESpecialistas DRE,\r\n* Especialistas UGEL', 33, '2024-05-16 10:00:00', '2024-05-16 12:30:00', 'https://teams.microsoft.com/l/meetup-join/19%3ameeting_ZmYwMGZkNTYtYWY2Ni00ZTk3LWI5ZGUtZGQ5OTE4MDBlN2Iz%40thread.v2/0?context=%7b%22Tid%22%3a%22179bdda8-d964-43ff-ad3b-674186a2fa28%22%2c%22Oid%22%3a%22ce3eba70-c0dd-48a1-8264-412a24dcc466%22%7d', '-', 1),
(4, 6, '3. Taller de Fortalecimiento de Capacidades', 'xxxxxx', 'xxxxx', 'a.\r\nb.\r\nc.', '3. Virtual: Google Meet', '5. MINEDU', '* No Aplica', '* No Aplica', '* Especialistas MINEDU', 10, '2024-05-28 09:00:00', '2024-05-28 10:30:00', '-', '-', 1),
(5, 10, '2. Taller de Asistencia Técnica', 'Recordatorios - cargar megáfono para uso durante el simulacro.', 'Recordatorio', 'Recordatorio', '1. Virtual: Microsoft Teams', '5. MINEDU', '* DRE Lima Metropolitana', '* No Aplica', '* Especialistas MINEDU', 1, '2024-05-31 11:00:00', '2024-05-31 13:00:00', 'https://teams.microsoft.com/l/meetup-join/19%3ameeting_ZmYwMGZkNTYtYWY2Ni00ZTk3LWI5ZGUtZGQ5OTE4MDBlN2Iz%40thread.v2/0?context=%7b%22Tid%22%3a%22179bdda8-d964-43ff-ad3b-674186a2fa28%22%2c%22Oid%22%3a%22ce3eba70-c0dd-48a1-8264-412a24dcc466%22%7d', '-', 1),
(6, 10, '1. Curso', 'Asistencia Técnica presencial - DRE Lambayeque', 'Refers para el registro de la app', '* Presentación de la plataforma\r\n* Registro de información\r\n* Procesamiento de la información\r\n* Descarga de la información registrada y procesada', '4. Presencial', '2. Regional', '* DRE Lambayeque', '* No Aplica', '* Directores,\r\n* ESpecialistas DRE', 13, '2024-05-30 14:00:00', '2024-05-30 17:30:00', '-', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dre_ugel`
--

CREATE TABLE `tbl_dre_ugel` (
  `id` int(11) NOT NULL,
  `cod_dre` char(10) DEFAULT NULL,
  `dre_nombre` varchar(80) DEFAULT NULL,
  `cod_ugel` char(10) DEFAULT NULL,
  `ugel_nombre` varchar(100) DEFAULT NULL,
  `combinado_dre_ugel` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dre_ugel`
--

INSERT INTO `tbl_dre_ugel` (`id`, `cod_dre`, `dre_nombre`, `cod_ugel`, `ugel_nombre`, `combinado_dre_ugel`) VALUES
(1, '010000', 'DRE AMAZONAS', '010001', 'UGEL CHACHAPOYAS', '\'DRE AMAZONAS: UGEL CHACHAPOYAS\',\r'),
(2, '010000', 'DRE AMAZONAS', '010002', 'UGEL BAGUA', '\'DRE AMAZONAS: UGEL BAGUA\',\r'),
(3, '010000', 'DRE AMAZONAS', '010003', 'UGEL BONGARÁ', '\'DRE AMAZONAS: UGEL BONGARÁ\',\r'),
(4, '010000', 'DRE AMAZONAS', '010004', 'UGEL CONDORCANQUI', '\'DRE AMAZONAS: UGEL CONDORCANQUI\',\r'),
(5, '010000', 'DRE AMAZONAS', '010005', 'UGEL LUYA', '\'DRE AMAZONAS: UGEL LUYA\',\r'),
(6, '010000', 'DRE AMAZONAS', '010006', 'UGEL RODRÍGUEZ DE MENDOZA', '\'DRE AMAZONAS: UGEL RODRÍGUEZ DE MENDOZA\',\r'),
(7, '010000', 'DRE AMAZONAS', '010007', 'UGEL UTCUBAMBA', '\'DRE AMAZONAS: UGEL UTCUBAMBA\',\r'),
(8, '010000', 'DRE AMAZONAS', '010009', 'UGEL IBIR-IMAZA', '\'DRE AMAZONAS: UGEL IBIR-IMAZA\',\r'),
(9, '010000', 'DRE AMAZONAS', '010010', 'UGEL INTERCULTURAL BILINGÜE RIO SANTIAGO', '\'DRE AMAZONAS: UGEL INTERCULTURAL BILINGÜE RIO SANTIAGO\',\r'),
(10, '010000', 'DRE AMAZONAS', '010011', 'UGEL INTERCULTURAL BILINGÜE CENEPA', '\'DRE AMAZONAS: UGEL INTERCULTURAL BILINGÜE CENEPA\',\r'),
(11, '020000', 'DRE ANCASH', '020001', 'UGEL HUARAZ', '\'DRE ANCASH: UGEL HUARAZ\',\r'),
(12, '020000', 'DRE ANCASH', '020002', 'UGEL AIJA', '\'DRE ANCASH: UGEL AIJA\',\r'),
(13, '020000', 'DRE ANCASH', '020003', 'UGEL ANTONIO RAYMONDI', '\'DRE ANCASH: UGEL ANTONIO RAYMONDI\',\r'),
(14, '020000', 'DRE ANCASH', '020004', 'UGEL ASUNCIÓN', '\'DRE ANCASH: UGEL ASUNCIÓN\',\r'),
(15, '020000', 'DRE ANCASH', '020005', 'UGEL BOLOGNESI', '\'DRE ANCASH: UGEL BOLOGNESI\',\r'),
(16, '020000', 'DRE ANCASH', '020006', 'UGEL CARHUÁZ', '\'DRE ANCASH: UGEL CARHUÁZ\',\r'),
(17, '020000', 'DRE ANCASH', '020007', 'UGEL CARLOS F. FITZCARRALD', '\'DRE ANCASH: UGEL CARLOS F. FITZCARRALD\',\r'),
(18, '020000', 'DRE ANCASH', '020008', 'UGEL CASMA', '\'DRE ANCASH: UGEL CASMA\',\r'),
(19, '020000', 'DRE ANCASH', '020009', 'UGEL CORONGO', '\'DRE ANCASH: UGEL CORONGO\',\r'),
(20, '020000', 'DRE ANCASH', '020010', 'UGEL HUARI', '\'DRE ANCASH: UGEL HUARI\',\r'),
(21, '020000', 'DRE ANCASH', '020011', 'UGEL HUARMEY', '\'DRE ANCASH: UGEL HUARMEY\',\r'),
(22, '020000', 'DRE ANCASH', '020012', 'UGEL HUAYLAS', '\'DRE ANCASH: UGEL HUAYLAS\',\r'),
(23, '020000', 'DRE ANCASH', '020013', 'UGEL MARISCAL LUZURIAGA', '\'DRE ANCASH: UGEL MARISCAL LUZURIAGA\',\r'),
(24, '020000', 'DRE ANCASH', '020014', 'UGEL OCROS', '\'DRE ANCASH: UGEL OCROS\',\r'),
(25, '020000', 'DRE ANCASH', '020015', 'UGEL PALLASCA', '\'DRE ANCASH: UGEL PALLASCA\',\r'),
(26, '020000', 'DRE ANCASH', '020016', 'UGEL POMABAMBA', '\'DRE ANCASH: UGEL POMABAMBA\',\r'),
(27, '020000', 'DRE ANCASH', '020017', 'UGEL RECUAY', '\'DRE ANCASH: UGEL RECUAY\',\r'),
(28, '020000', 'DRE ANCASH', '020018', 'UGEL SANTA', '\'DRE ANCASH: UGEL SANTA\',\r'),
(29, '020000', 'DRE ANCASH', '020019', 'UGEL SIHUAS', '\'DRE ANCASH: UGEL SIHUAS\',\r'),
(30, '020000', 'DRE ANCASH', '020020', 'UGEL YUNGAY', '\'DRE ANCASH: UGEL YUNGAY\',\r'),
(31, '030000', 'DRE APURÍMAC', '030001', 'UGEL ABANCAY', '\'DRE APURÍMAC: UGEL ABANCAY\',\r'),
(32, '030000', 'DRE APURÍMAC', '030002', 'UGEL ANDAHUAYLAS', '\'DRE APURÍMAC: UGEL ANDAHUAYLAS\',\r'),
(33, '030000', 'DRE APURÍMAC', '030003', 'UGEL ANTABAMBA', '\'DRE APURÍMAC: UGEL ANTABAMBA\',\r'),
(34, '030000', 'DRE APURÍMAC', '030004', 'UGEL AYMARAES', '\'DRE APURÍMAC: UGEL AYMARAES\',\r'),
(35, '030000', 'DRE APURÍMAC', '030005', 'UGEL COTABAMBAS', '\'DRE APURÍMAC: UGEL COTABAMBAS\',\r'),
(36, '030000', 'DRE APURÍMAC', '030006', 'UGEL CHINCHEROS', '\'DRE APURÍMAC: UGEL CHINCHEROS\',\r'),
(37, '030000', 'DRE APURÍMAC', '030007', 'UGEL GRAU', '\'DRE APURÍMAC: UGEL GRAU\',\r'),
(38, '030000', 'DRE APURÍMAC', '030008', 'UGEL HUANCARAMA', '\'DRE APURÍMAC: UGEL HUANCARAMA\',\r'),
(39, '040000', 'DRE AREQUIPA', '040001', 'UGEL AREQUIPA NORTE', '\'GRE AREQUIPA: UGEL AREQUIPA NORTE\',\r'),
(40, '040000', 'DRE AREQUIPA', '040002', 'UGEL AREQUIPA SUR', '\'GRE AREQUIPA: UGEL AREQUIPA SUR\',\r'),
(41, '040000', 'DRE AREQUIPA', '040003', 'UGEL CAMANÁ', '\'GRE AREQUIPA: UGEL CAMANÁ\',\r'),
(42, '040000', 'DRE AREQUIPA', '040004', 'UGEL CARAVELI', '\'GRE AREQUIPA: UGEL CARAVELI\',\r'),
(43, '040000', 'DRE AREQUIPA', '040005', 'UGEL CASTILLA', '\'GRE AREQUIPA: UGEL CASTILLA\',\r'),
(44, '040000', 'DRE AREQUIPA', '040006', 'UGEL CAYLLOMA', '\'GRE AREQUIPA: UGEL CAYLLOMA\',\r'),
(45, '040000', 'DRE AREQUIPA', '040007', 'UGEL CONDESUYOS', '\'GRE AREQUIPA: UGEL CONDESUYOS\',\r'),
(46, '040000', 'DRE AREQUIPA', '040008', 'UGEL ISLAY', '\'GRE AREQUIPA: UGEL ISLAY\',\r'),
(47, '040000', 'DRE AREQUIPA', '040009', 'UGEL LA UNIÓN', '\'GRE AREQUIPA: UGEL LA UNIÓN\',\r'),
(48, '040000', 'DRE AREQUIPA', '040010', 'UGEL LA JOYA', '\'GRE AREQUIPA: UGEL LA JOYA\',\r'),
(49, '050000', 'DRE AYACUCHO', '050001', 'UGEL HUAMANGA', '\'DRE AYACUCHO: UGEL HUAMANGA\',\r'),
(50, '050000', 'DRE AYACUCHO', '050002', 'UGEL CANGALLO', '\'DRE AYACUCHO: UGEL CANGALLO\',\r'),
(51, '050000', 'DRE AYACUCHO', '050003', 'UGEL HUANCASANCOS', '\'DRE AYACUCHO: UGEL HUANCASANCOS\',\r'),
(52, '050000', 'DRE AYACUCHO', '050004', 'UGEL HUANTA', '\'DRE AYACUCHO: UGEL HUANTA\',\r'),
(53, '050000', 'DRE AYACUCHO', '050005', 'UGEL LA MAR', '\'DRE AYACUCHO: UGEL LA MAR\',\r'),
(54, '050000', 'DRE AYACUCHO', '050006', 'UGEL LUCANAS', '\'DRE AYACUCHO: UGEL LUCANAS\',\r'),
(55, '050000', 'DRE AYACUCHO', '050007', 'UGEL PARINACOCHAS', '\'DRE AYACUCHO: UGEL PARINACOCHAS\',\r'),
(56, '050000', 'DRE AYACUCHO', '050008', 'UGEL PAUCAR DEL SARASARA', '\'DRE AYACUCHO: UGEL PAUCAR DEL SARASARA\',\r'),
(57, '050000', 'DRE AYACUCHO', '050009', 'UGEL SUCRE', '\'DRE AYACUCHO: UGEL SUCRE\',\r'),
(58, '050000', 'DRE AYACUCHO', '050010', 'UGEL VÍCTOR FAJARDO', '\'DRE AYACUCHO: UGEL VÍCTOR FAJARDO\',\r'),
(59, '050000', 'DRE AYACUCHO', '050011', 'UGEL VILCASHUAMÁN', '\'DRE AYACUCHO: UGEL VILCASHUAMÁN\',\r'),
(60, '060000', 'DRE CAJAMARCA', '060001', 'UGEL CAJAMARCA', '\'DRE CAJAMARCA: UGEL CAJAMARCA\',\r'),
(61, '060000', 'DRE CAJAMARCA', '060002', 'UGEL CAJABAMBA', '\'DRE CAJAMARCA: UGEL CAJABAMBA\',\r'),
(62, '060000', 'DRE CAJAMARCA', '060003', 'UGEL CELENDÍN', '\'DRE CAJAMARCA: UGEL CELENDÍN\',\r'),
(63, '060000', 'DRE CAJAMARCA', '060004', 'UGEL CHOTA', '\'DRE CAJAMARCA: UGEL CHOTA\',\r'),
(64, '060000', 'DRE CAJAMARCA', '060005', 'UGEL CONTUMAZÁ', '\'DRE CAJAMARCA: UGEL CONTUMAZÁ\',\r'),
(65, '060000', 'DRE CAJAMARCA', '060006', 'UGEL CUTERVO', '\'DRE CAJAMARCA: UGEL CUTERVO\',\r'),
(66, '060000', 'DRE CAJAMARCA', '060007', 'UGEL HUALGAYOC', '\'DRE CAJAMARCA: UGEL HUALGAYOC\',\r'),
(67, '060000', 'DRE CAJAMARCA', '060008', 'UGEL JAÉN', '\'DRE CAJAMARCA: UGEL JAÉN\',\r'),
(68, '060000', 'DRE CAJAMARCA', '060009', 'UGEL SAN IGNACIO', '\'DRE CAJAMARCA: UGEL SAN IGNACIO\',\r'),
(69, '060000', 'DRE CAJAMARCA', '060010', 'UGEL SAN MARCOS', '\'DRE CAJAMARCA: UGEL SAN MARCOS\',\r'),
(70, '060000', 'DRE CAJAMARCA', '060011', 'UGEL SAN MIGUEL', '\'DRE CAJAMARCA: UGEL SAN MIGUEL\',\r'),
(71, '060000', 'DRE CAJAMARCA', '060012', 'UGEL SAN PABLO', '\'DRE CAJAMARCA: UGEL SAN PABLO\',\r'),
(72, '060000', 'DRE CAJAMARCA', '060013', 'UGEL SANTA CRUZ', '\'DRE CAJAMARCA: UGEL SANTA CRUZ\',\r'),
(73, '070101', 'DRE CALLAO', '070102', 'UGEL VENTANILLA', '\'DRE CALLAO: UGEL VENTANILLA\',\r'),
(74, '080000', 'DRE CUSCO', '080001', 'UGEL CUSCO', '\'DRE CUSCO: UGEL CUSCO\',\r'),
(75, '080000', 'DRE CUSCO', '080002', 'UGEL ACOMAYO', '\'DRE CUSCO: UGEL ACOMAYO\',\r'),
(76, '080000', 'DRE CUSCO', '080003', 'UGEL ANTA', '\'DRE CUSCO: UGEL ANTA\',\r'),
(77, '080000', 'DRE CUSCO', '080004', 'UGEL CALCA', '\'DRE CUSCO: UGEL CALCA\',\r'),
(78, '080000', 'DRE CUSCO', '080005', 'UGEL CANAS', '\'DRE CUSCO: UGEL CANAS\',\r'),
(79, '080000', 'DRE CUSCO', '080006', 'UGEL CANCHIS', '\'DRE CUSCO: UGEL CANCHIS\',\r'),
(80, '080000', 'DRE CUSCO', '080007', 'UGEL CHUMBIVILCAS', '\'DRE CUSCO: UGEL CHUMBIVILCAS\',\r'),
(81, '080000', 'DRE CUSCO', '080008', 'UGEL ESPINAR', '\'DRE CUSCO: UGEL ESPINAR\',\r'),
(82, '080000', 'DRE CUSCO', '080009', 'UGEL LA CONVENCIÓN', '\'DRE CUSCO: UGEL LA CONVENCIÓN\',\r'),
(83, '080000', 'DRE CUSCO', '080010', 'UGEL PARURO', '\'DRE CUSCO: UGEL PARURO\',\r'),
(84, '080000', 'DRE CUSCO', '080011', 'UGEL PAUCARTAMBO', '\'DRE CUSCO: UGEL PAUCARTAMBO\',\r'),
(85, '080000', 'DRE CUSCO', '080012', 'UGEL QUISPICANCHI', '\'DRE CUSCO: UGEL QUISPICANCHI\',\r'),
(86, '080000', 'DRE CUSCO', '080013', 'UGEL URUBAMBA', '\'DRE CUSCO: UGEL URUBAMBA\',\r'),
(87, '080000', 'DRE CUSCO', '080014', 'UGEL PICHARI-KIMBIRI-VILLA VIRGEN', '\'DRE CUSCO: UGEL PICHARI-KIMBIRI-VILLA VIRGEN\',\r'),
(88, '090000', 'DRE HUANCAVELICA', '090001', 'UGEL HUANCAVELICA', '\'DRE HUANCAVELICA: UGEL HUANCAVELICA\',\r'),
(89, '090000', 'DRE HUANCAVELICA', '090002', 'UGEL ACOBAMBA', '\'DRE HUANCAVELICA: UGEL ACOBAMBA\',\r'),
(90, '090000', 'DRE HUANCAVELICA', '090003', 'UGEL ANGARAES', '\'DRE HUANCAVELICA: UGEL ANGARAES\',\r'),
(91, '090000', 'DRE HUANCAVELICA', '090004', 'UGEL CASTROVIRREYNA', '\'DRE HUANCAVELICA: UGEL CASTROVIRREYNA\',\r'),
(92, '090000', 'DRE HUANCAVELICA', '090005', 'UGEL CHURCAMPA', '\'DRE HUANCAVELICA: UGEL CHURCAMPA\',\r'),
(93, '090000', 'DRE HUANCAVELICA', '090006', 'UGEL HUAYTARÁ', '\'DRE HUANCAVELICA: UGEL HUAYTARÁ\',\r'),
(94, '090000', 'DRE HUANCAVELICA', '090007', 'UGEL TAYACAJA', '\'DRE HUANCAVELICA: UGEL TAYACAJA\',\r'),
(95, '090000', 'DRE HUANCAVELICA', '090009', 'UGEL SURCUBAMBA', '\'DRE HUANCAVELICA: UGEL SURCUBAMBA\',\r'),
(96, '100000', 'DRE HUÁNUCO', '100001', 'UGEL HUÁNUCO', '\'DRE HUÁNUCO: UGEL HUÁNUCO\',\r'),
(97, '100000', 'DRE HUÁNUCO', '100002', 'UGEL AMBO', '\'DRE HUÁNUCO: UGEL AMBO\',\r'),
(98, '100000', 'DRE HUÁNUCO', '100003', 'UGEL DOS DE MAYO', '\'DRE HUÁNUCO: UGEL DOS DE MAYO\',\r'),
(99, '100000', 'DRE HUÁNUCO', '100004', 'UGEL LAURICOCHA', '\'DRE HUÁNUCO: UGEL LAURICOCHA\',\r'),
(100, '100000', 'DRE HUÁNUCO', '100005', 'UGEL YAROWILCA', '\'DRE HUÁNUCO: UGEL YAROWILCA\',\r'),
(101, '100000', 'DRE HUÁNUCO', '100006', 'UGEL HUACAYBAMBA', '\'DRE HUÁNUCO: UGEL HUACAYBAMBA\',\r'),
(102, '100000', 'DRE HUÁNUCO', '100007', 'UGEL HUAMALÍES', '\'DRE HUÁNUCO: UGEL HUAMALÍES\',\r'),
(103, '100000', 'DRE HUÁNUCO', '100008', 'UGEL LEONCIO PRADO', '\'DRE HUÁNUCO: UGEL LEONCIO PRADO\',\r'),
(104, '100000', 'DRE HUÁNUCO', '100009', 'UGEL MARAÑÓN', '\'DRE HUÁNUCO: UGEL MARAÑÓN\',\r'),
(105, '100000', 'DRE HUÁNUCO', '100010', 'UGEL PACHITEA', '\'DRE HUÁNUCO: UGEL PACHITEA\',\r'),
(106, '100000', 'DRE HUÁNUCO', '100011', 'UGEL PUERTO INCA', '\'DRE HUÁNUCO: UGEL PUERTO INCA\',\r'),
(107, '110000', 'DRE ICA', '110001', 'UGEL ICA', '\'DRE ICA: UGEL ICA\',\r'),
(108, '110000', 'DRE ICA', '110002', 'UGEL CHINCHA', '\'DRE ICA: UGEL CHINCHA\',\r'),
(109, '110000', 'DRE ICA', '110003', 'UGEL NAZCA', '\'DRE ICA: UGEL NAZCA\',\r'),
(110, '110000', 'DRE ICA', '110004', 'UGEL PALPA', '\'DRE ICA: UGEL PALPA\',\r'),
(111, '110000', 'DRE ICA', '110005', 'UGEL PISCO', '\'DRE ICA: UGEL PISCO\',\r'),
(112, '120000', 'DRE JUNÍN', '120001', 'UGEL HUANCAYO', '\'DRE JUNÍN: UGEL HUANCAYO\',\r'),
(113, '120000', 'DRE JUNÍN', '120002', 'UGEL CHUPACA', '\'DRE JUNÍN: UGEL CHUPACA\',\r'),
(114, '120000', 'DRE JUNÍN', '120003', 'UGEL CONCEPCIÓN', '\'DRE JUNÍN: UGEL CONCEPCIÓN\',\r'),
(115, '120000', 'DRE JUNÍN', '120004', 'UGEL CHANCHAMAYO', '\'DRE JUNÍN: UGEL CHANCHAMAYO\',\r'),
(116, '120000', 'DRE JUNÍN', '120005', 'UGEL JAUJA', '\'DRE JUNÍN: UGEL JAUJA\',\r'),
(117, '120000', 'DRE JUNÍN', '120006', 'UGEL JUNÍN', '\'DRE JUNÍN: UGEL JUNÍN\',\r'),
(118, '120000', 'DRE JUNÍN', '120007', 'UGEL SATIPO', '\'DRE JUNÍN: UGEL SATIPO\',\r'),
(119, '120000', 'DRE JUNÍN', '120008', 'UGEL TARMA', '\'DRE JUNÍN: UGEL TARMA\',\r'),
(120, '120000', 'DRE JUNÍN', '120009', 'UGEL YAULI', '\'DRE JUNÍN: UGEL YAULI\',\r'),
(121, '120000', 'DRE JUNÍN', '120010', 'UGEL PANGOA', '\'DRE JUNÍN: UGEL PANGOA\',\r'),
(122, '120000', 'DRE JUNÍN', '120011', 'UGEL PICHANAKI', '\'DRE JUNÍN: UGEL PICHANAKI\',\r'),
(123, '120000', 'DRE JUNÍN', '120012', 'UGEL RIO TAMBO', '\'DRE JUNÍN: UGEL RIO TAMBO\',\r'),
(124, '120000', 'DRE JUNÍN', '120014', 'UGEL RIO ENE - MANTARO', '\'DRE JUNÍN: UGEL RIO ENE - MANTARO\',\r'),
(125, '130000', 'DRE LA LIBERTAD', '130002', 'UGEL VIRÚ', '\'GRE LA LIBERTAD: UGEL VIRÚ\',\r'),
(126, '130000', 'DRE LA LIBERTAD', '130003', 'UGEL ASCOPE', '\'GRE LA LIBERTAD: UGEL ASCOPE\',\r'),
(127, '130000', 'DRE LA LIBERTAD', '130004', 'UGEL BOLIVAR', '\'GRE LA LIBERTAD: UGEL BOLIVAR\',\r'),
(128, '130000', 'DRE LA LIBERTAD', '130005', 'UGEL CHEPÉN', '\'GRE LA LIBERTAD: UGEL CHEPÉN\',\r'),
(129, '130000', 'DRE LA LIBERTAD', '130006', 'UGEL JULCÁN', '\'GRE LA LIBERTAD: UGEL JULCÁN\',\r'),
(130, '130000', 'DRE LA LIBERTAD', '130007', 'UGEL OTUZCO', '\'GRE LA LIBERTAD: UGEL OTUZCO\',\r'),
(131, '130000', 'DRE LA LIBERTAD', '130008', 'UGEL PACASMAYO', '\'GRE LA LIBERTAD: UGEL PACASMAYO\',\r'),
(132, '130000', 'DRE LA LIBERTAD', '130009', 'UGEL PATAZ', '\'GRE LA LIBERTAD: UGEL PATAZ\',\r'),
(133, '130000', 'DRE LA LIBERTAD', '130010', 'UGEL SÁNCHEZ CARRIÓN', '\'GRE LA LIBERTAD: UGEL SÁNCHEZ CARRIÓN\',\r'),
(134, '130000', 'DRE LA LIBERTAD', '130011', 'UGEL SANTIAGO DE CHUCO', '\'GRE LA LIBERTAD: UGEL SANTIAGO DE CHUCO\',\r'),
(135, '130000', 'DRE LA LIBERTAD', '130012', 'UGEL GRAN CHIMÚ', '\'GRE LA LIBERTAD: UGEL GRAN CHIMÚ\',\r'),
(136, '130000', 'DRE LA LIBERTAD', '130014', 'UGEL 01 EL PORVENIR', '\'GRE LA LIBERTAD: UGEL 01 EL PORVENIR\',\r'),
(137, '130000', 'DRE LA LIBERTAD', '130015', 'UGEL 02 LA ESPERANZA', '\'GRE LA LIBERTAD: UGEL 02 LA ESPERANZA\',\r'),
(138, '130000', 'DRE LA LIBERTAD', '130016', 'UGEL 03 TRUJILLO NOR OESTE', '\'GRE LA LIBERTAD: UGEL 03 TRUJILLO NOR OESTE\',\r'),
(139, '130000', 'DRE LA LIBERTAD', '130017', 'UGEL 04 TRUJILLO SUR ESTE', '\'GRE LA LIBERTAD: UGEL 04 TRUJILLO SUR ESTE\',\r'),
(140, '140000', 'DRE LAMBAYEQUE', '140001', 'UGEL CHICLAYO', '\'GRE LAMBAYEQUE: UGEL CHICLAYO\',\r'),
(141, '140000', 'DRE LAMBAYEQUE', '140002', 'UGEL FERREÑAFE', '\'GRE LAMBAYEQUE: UGEL FERREÑAFE\',\r'),
(142, '140000', 'DRE LAMBAYEQUE', '140003', 'UGEL LAMBAYEQUE', '\'GRE LAMBAYEQUE: UGEL LAMBAYEQUE\',\r'),
(143, '150101', 'DRE LIMA METROPOLITANA', '150102', 'UGEL 01 SAN JUAN DE MIRAFLORES', '\'DRE LIMA METROPOLITANA: UGEL 01 SAN JUAN DE MIRAFLORES\',\r'),
(144, '150101', 'DRE LIMA METROPOLITANA', '150103', 'UGEL 02 RÍMAC', '\'DRE LIMA METROPOLITANA: UGEL 02 RÍMAC\',\r'),
(145, '150101', 'DRE LIMA METROPOLITANA', '150104', 'UGEL 03 BREÑA', '\'DRE LIMA METROPOLITANA: UGEL 03 BREÑA\',\r'),
(146, '150101', 'DRE LIMA METROPOLITANA', '150105', 'UGEL 04 COMAS', '\'DRE LIMA METROPOLITANA: UGEL 04 COMAS\',\r'),
(147, '150101', 'DRE LIMA METROPOLITANA', '150106', 'UGEL 05 SAN JUAN DE LURIGANCHO', '\'DRE LIMA METROPOLITANA: UGEL 05 SAN JUAN DE LURIGANCHO\',\r'),
(148, '150101', 'DRE LIMA METROPOLITANA', '150107', 'UGEL 06 ATE', '\'DRE LIMA METROPOLITANA: UGEL 06 ATE\',\r'),
(149, '150101', 'DRE LIMA METROPOLITANA', '150108', 'UGEL 07 SAN BORJA', '\'DRE LIMA METROPOLITANA: UGEL 07 SAN BORJA\',\r'),
(150, '150200', 'DRE LIMA PROVINCIAS', '150201', 'UGEL 08 CAÑETE', '\'DRE LIMA PROVINCIAS: UGEL 08 CAÑETE\',\r'),
(151, '150200', 'DRE LIMA PROVINCIAS', '150202', 'UGEL 09 HUAURA', '\'DRE LIMA PROVINCIAS: UGEL 09 HUAURA\',\r'),
(152, '150200', 'DRE LIMA PROVINCIAS', '150203', 'UGEL 10 HUARAL', '\'DRE LIMA PROVINCIAS: UGEL 10 HUARAL\',\r'),
(153, '150200', 'DRE LIMA PROVINCIAS', '150204', 'UGEL 11 CAJATAMBO', '\'DRE LIMA PROVINCIAS: UGEL 11 CAJATAMBO\',\r'),
(154, '150200', 'DRE LIMA PROVINCIAS', '150205', 'UGEL 12 CANTA', '\'DRE LIMA PROVINCIAS: UGEL 12 CANTA\',\r'),
(155, '150200', 'DRE LIMA PROVINCIAS', '150206', 'UGEL 13 YAUYOS', '\'DRE LIMA PROVINCIAS: UGEL 13 YAUYOS\',\r'),
(156, '150200', 'DRE LIMA PROVINCIAS', '150207', 'UGEL 14 OYÓN', '\'DRE LIMA PROVINCIAS: UGEL 14 OYÓN\',\r'),
(157, '150200', 'DRE LIMA PROVINCIAS', '150208', 'UGEL 15 HUAROCHIRÍ', '\'DRE LIMA PROVINCIAS: UGEL 15 HUAROCHIRÍ\',\r'),
(158, '150200', 'DRE LIMA PROVINCIAS', '150209', 'UGEL 16 BARRANCA', '\'DRE LIMA PROVINCIAS: UGEL 16 BARRANCA\',\r'),
(159, '160000', 'DRE LORETO', '160001', 'UGEL MAYNAS', '\'DRE LORETO: UGEL MAYNAS\',\r'),
(160, '160000', 'DRE LORETO', '160002', 'UGEL ALTO AMAZONAS-YURIMAGUAS', '\'DRE LORETO: UGEL ALTO AMAZONAS-YURIMAGUAS\',\r'),
(161, '160000', 'DRE LORETO', '160003', 'UGEL ALTO AMAZONAS-SAN LORENZO', '\'DRE LORETO: UGEL ALTO AMAZONAS-SAN LORENZO\',\r'),
(162, '160000', 'DRE LORETO', '160004', 'UGEL LORETO - NAUTA', '\'DRE LORETO: UGEL LORETO - NAUTA\',\r'),
(163, '160000', 'DRE LORETO', '160005', 'UGEL RAMÓN CASTILLA-CABALLOCOCHA', '\'DRE LORETO: UGEL RAMÓN CASTILLA-CABALLOCOCHA\',\r'),
(164, '160000', 'DRE LORETO', '160006', 'UGEL REQUENA', '\'DRE LORETO: UGEL REQUENA\',\r'),
(165, '160000', 'DRE LORETO', '160007', 'UGEL UCAYALI-CONTAMANA', '\'DRE LORETO: UGEL UCAYALI-CONTAMANA\',\r'),
(166, '160000', 'DRE LORETO', '160008', 'UGEL PUTUMAYO', '\'DRE LORETO: UGEL PUTUMAYO\',\r'),
(167, '170000', 'DRE MADRE DE DIOS', '170001', 'UGEL TAMBOPATA', '\'DRE MADRE DE DIOS: UGEL TAMBOPATA\',\r'),
(168, '170000', 'DRE MADRE DE DIOS', '170002', 'UGEL MANU', '\'DRE MADRE DE DIOS: UGEL MANU\',\r'),
(169, '170000', 'DRE MADRE DE DIOS', '170003', 'UGEL TAHUAMANU', '\'DRE MADRE DE DIOS: UGEL TAHUAMANU\',\r'),
(170, '180000', 'DRE MOQUEGUA', '180001', 'UGEL MARISCAL NIETO', '\'DRE MOQUEGUA: UGEL MARISCAL NIETO\',\r'),
(171, '180000', 'DRE MOQUEGUA', '180002', 'UGEL GENERAL SÁNCHEZ CERRO', '\'DRE MOQUEGUA: UGEL GENERAL SÁNCHEZ CERRO\',\r'),
(172, '180000', 'DRE MOQUEGUA', '180003', 'UGEL ILO', '\'DRE MOQUEGUA: UGEL ILO\',\r'),
(173, '180000', 'DRE MOQUEGUA', '180005', 'UGEL SAN IGNACIO DE LOYOLA-ICHUÑA', '\'DRE MOQUEGUA: UGEL SAN IGNACIO DE LOYOLA-ICHUÑA\',\r'),
(174, '190000', 'DRE PASCO', '190001', 'UGEL PASCO', '\'DRE PASCO: UGEL PASCO\',\r'),
(175, '190000', 'DRE PASCO', '190002', 'UGEL DANIEL ALCIDES CARRIÓN', '\'DRE PASCO: UGEL DANIEL ALCIDES CARRIÓN\',\r'),
(176, '190000', 'DRE PASCO', '190003', 'UGEL OXAPAMPA', '\'DRE PASCO: UGEL OXAPAMPA\',\r'),
(177, '190000', 'DRE PASCO', '190006', 'UGEL PUERTO BERMÚDEZ', '\'DRE PASCO: UGEL PUERTO BERMÚDEZ\',\r'),
(178, '200000', 'DRE PIURA', '200001', 'UGEL PIURA', '\'DRE PIURA: UGEL PIURA\',\r'),
(179, '200000', 'DRE PIURA', '200002', 'UGEL TAMBOGRANDE', '\'DRE PIURA: UGEL TAMBOGRANDE\',\r'),
(180, '200000', 'DRE PIURA', '200003', 'UGEL LA UNIÓN', '\'DRE PIURA: UGEL LA UNIÓN\',\r'),
(181, '200000', 'DRE PIURA', '200004', 'UGEL SECHURA', '\'DRE PIURA: UGEL SECHURA\',\r'),
(182, '200000', 'DRE PIURA', '200005', 'UGEL AYABACA', '\'DRE PIURA: UGEL AYABACA\',\r'),
(183, '200000', 'DRE PIURA', '200006', 'UGEL HUANCABAMBA', '\'DRE PIURA: UGEL HUANCABAMBA\',\r'),
(184, '200000', 'DRE PIURA', '200007', 'UGEL CHULUCANAS', '\'DRE PIURA: UGEL CHULUCANAS\',\r'),
(185, '200000', 'DRE PIURA', '200008', 'UGEL MORROPÓN', '\'DRE PIURA: UGEL MORROPÓN\',\r'),
(186, '200000', 'DRE PIURA', '200009', 'UGEL PAITA', '\'DRE PIURA: UGEL PAITA\',\r'),
(187, '200000', 'DRE PIURA', '200010', 'UGEL SULLANA', '\'DRE PIURA: UGEL SULLANA\',\r'),
(188, '200000', 'DRE PIURA', '200011', 'UGEL TALARA', '\'DRE PIURA: UGEL TALARA\',\r'),
(189, '200000', 'DRE PIURA', '200012', 'UGEL HUARMACA', '\'DRE PIURA: UGEL HUARMACA\',\r'),
(190, '210000', 'DRE PUNO', '210001', 'UGEL PUNO', '\'DRE PUNO: UGEL PUNO\',\r'),
(191, '210000', 'DRE PUNO', '210002', 'UGEL AZÁNGARO', '\'DRE PUNO: UGEL AZÁNGARO\',\r'),
(192, '210000', 'DRE PUNO', '210003', 'UGEL CARABAYA', '\'DRE PUNO: UGEL CARABAYA\',\r'),
(193, '210000', 'DRE PUNO', '210004', 'UGEL EL COLLAO', '\'DRE PUNO: UGEL EL COLLAO\',\r'),
(194, '210000', 'DRE PUNO', '210005', 'UGEL CHUCUITO', '\'DRE PUNO: UGEL CHUCUITO\',\r'),
(195, '210000', 'DRE PUNO', '210006', 'UGEL HUANCANÉ', '\'DRE PUNO: UGEL HUANCANÉ\',\r'),
(196, '210000', 'DRE PUNO', '210007', 'UGEL SAN ANTONIO DE PUTINA', '\'DRE PUNO: UGEL SAN ANTONIO DE PUTINA\',\r'),
(197, '210000', 'DRE PUNO', '210008', 'UGEL MOHO', '\'DRE PUNO: UGEL MOHO\',\r'),
(198, '210000', 'DRE PUNO', '210009', 'UGEL LAMPA', '\'DRE PUNO: UGEL LAMPA\',\r'),
(199, '210000', 'DRE PUNO', '210010', 'UGEL MELGAR', '\'DRE PUNO: UGEL MELGAR\',\r'),
(200, '210000', 'DRE PUNO', '210011', 'UGEL SAN ROMÁN', '\'DRE PUNO: UGEL SAN ROMÁN\',\r'),
(201, '210000', 'DRE PUNO', '210012', 'UGEL SANDIA', '\'DRE PUNO: UGEL SANDIA\',\r'),
(202, '210000', 'DRE PUNO', '210013', 'UGEL YUNGUYO', '\'DRE PUNO: UGEL YUNGUYO\',\r'),
(203, '210000', 'DRE PUNO', '210014', 'UGEL CRUCERO', '\'DRE PUNO: UGEL CRUCERO\',\r'),
(204, '220000', 'DRE SAN MARTÍN', '220001', 'UGEL MOYOBAMBA', '\'DRE SAN MARTÍN: UGEL MOYOBAMBA\',\r'),
(205, '220000', 'DRE SAN MARTÍN', '220002', 'UGEL BELLAVISTA', '\'DRE SAN MARTÍN: UGEL BELLAVISTA\',\r'),
(206, '220000', 'DRE SAN MARTÍN', '220003', 'UGEL HUALLAGA', '\'DRE SAN MARTÍN: UGEL HUALLAGA\',\r'),
(207, '220000', 'DRE SAN MARTÍN', '220004', 'UGEL LAMAS', '\'DRE SAN MARTÍN: UGEL LAMAS\',\r'),
(208, '220000', 'DRE SAN MARTÍN', '220005', 'UGEL EL DORADO', '\'DRE SAN MARTÍN: UGEL EL DORADO\',\r'),
(209, '220000', 'DRE SAN MARTÍN', '220006', 'UGEL MARISCAL CÁCERES', '\'DRE SAN MARTÍN: UGEL MARISCAL CÁCERES\',\r'),
(210, '220000', 'DRE SAN MARTÍN', '220007', 'UGEL PICOTA', '\'DRE SAN MARTÍN: UGEL PICOTA\',\r'),
(211, '220000', 'DRE SAN MARTÍN', '220008', 'UGEL RIOJA', '\'DRE SAN MARTÍN: UGEL RIOJA\',\r'),
(212, '220000', 'DRE SAN MARTÍN', '220009', 'UGEL SAN MARTÍN', '\'DRE SAN MARTÍN: UGEL SAN MARTÍN\',\r'),
(213, '220000', 'DRE SAN MARTÍN', '220010', 'UGEL TOCACHE', '\'DRE SAN MARTÍN: UGEL TOCACHE\',\r'),
(214, '230000', 'DRE TACNA', '230001', 'UGEL TACNA', '\'DRE TACNA: UGEL TACNA\',\r'),
(215, '230000', 'DRE TACNA', '230002', 'UGEL JORGE BASADRE', '\'DRE TACNA: UGEL JORGE BASADRE\',\r'),
(216, '230000', 'DRE TACNA', '230003', 'UGEL TARATA', '\'DRE TACNA: UGEL TARATA\',\r'),
(217, '230000', 'DRE TACNA', '230004', 'UGEL CANDARAVE', '\'DRE TACNA: UGEL CANDARAVE\',\r'),
(218, '240000', 'DRE TUMBES', '240001', 'UGEL TUMBES', '\'DRE TUMBES: UGEL TUMBES\',\r'),
(219, '240000', 'DRE TUMBES', '240002', 'UGEL CONTRALMIRANTE VILLAR', '\'DRE TUMBES: UGEL CONTRALMIRANTE VILLAR\',\r'),
(220, '240000', 'DRE TUMBES', '240003', 'UGEL ZARUMILLA', '\'DRE TUMBES: UGEL ZARUMILLA\',\r'),
(221, '250000', 'DRE UCAYALI', '250001', 'UGEL CORONEL PORTILLO', '\'DRE UCAYALI: UGEL CORONEL PORTILLO\',\r'),
(222, '250000', 'DRE UCAYALI', '250002', 'UGEL ATALAYA', '\'DRE UCAYALI: UGEL ATALAYA\',\r'),
(223, '250000', 'DRE UCAYALI', '250003', 'UGEL PADRE ABAD', '\'DRE UCAYALI: UGEL PADRE ABAD\',\r'),
(224, '250000', 'DRE UCAYALI', '250004', 'UGEL PURUS', '\'DRE UCAYALI: UGEL PURUS\',');

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
(1, 10, 'Admin', '47352403', 'VILLEGAS TERRONES', 'MANUEL ANTONIO', 'ESPECIALISTA EN GESTIÓN DE LA INFORMACIÓN', 1);

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
-- Indexes for table `tbl_dre_ugel`
--
ALTER TABLE `tbl_dre_ugel`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_dre_ugel`
--
ALTER TABLE `tbl_dre_ugel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

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
