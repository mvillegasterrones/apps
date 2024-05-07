-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 07, 2024 at 10:00 PM
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
-- Database: `e_contable`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_rubros_list` ()   BEGIN
    SELECT *,(SELECT COUNT(*) FROM tbl_empresa WHERE id_rubro = r.id) AS 'tEmpresas' FROM tbl_rubros r;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_activate_empresa` (`idEmpresa` INT)   BEGIN
    update tbl_empresa set emp_estado_sys = 1;
    update tbl_empresa set emp_estado_sys = 2 where id = idEmpresa;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_empresas_get_list` (`name_rubro` VARCHAR(100))   BEGIN
    select *,e.id as 'idEmpresa' from tbl_empresa e inner JOIN tbl_rubros r on e.id_rubro = r.id 
    where r.rubro_name = name_rubro;
    -- where id_rubro = idRubro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_get_active_empresa` ()   BEGIN
if exists(select * from tbl_empresa where emp_estado_sys = 2) then
    select * from tbl_empresa e 
    inner join tbl_rubros r on e.id_rubro = r.id 
    where e.emp_estado_sys = 2;
ELSE
    select * from tbl_empresa where id = 1;
end IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_save_empresa` (`empresa_rubro` VARCHAR(50), `empresa_ruc` TEXT, `empresa_rs` TEXT, `empresa_direccion` TEXT, `empresa_departamento` TEXT, `empresa_provincia` TEXT, `empresa_distrito` TEXT, `empresa_ubigeo` TEXT, `empresa_condicion` TEXT, `empresa_estado` TEXT)   begin
    DECLARE idRbro INT;
    SET idRbro = (SELECT id FROM tbl_rubros WHERE rubro_name = empresa_rubro);
    IF NOT EXISTS(SELECT * FROM tbl_empresa WHERE emp_ruc = empresa_ruc) THEN
        INSERT INTO tbl_empresa VALUES(0,empresa_ruc, empresa_rs, empresa_direccion, empresa_departamento, empresa_provincia, empresa_distrito, empresa_ubigeo, empresa_condicion, empresa_estado, NOW(),1, idRbro);
    END IF;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_set_login` (`usr` VARCHAR(10), `pwd` VARCHAR(10))   BEGIN
    select * from tbl_usuario u 
    inner join tbl_empresa e on u.`idEmpresa` = e.id
    where u.user_usuario = usr and u.user_password = pwd;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_v1_set_rubro` (`id` INT, `r_icono` VARCHAR(100), `r_name` VARCHAR(100), `r_descripcion` VARCHAR(100), `r_imagen` VARCHAR(100))   BEGIN
    INSERT INTO tbl_rubros VALUES(id, r_icono, r_name, r_descripcion, r_imagen);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activaciones`
--

CREATE TABLE `tbl_activaciones` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `idEmpresa` int(11) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activaciones`
--

INSERT INTO `tbl_activaciones` (`id`, `create_time`, `idEmpresa`, `periodo`) VALUES
(1, '2024-04-15 14:22:12', 1, 'enero - 2024'),
(2, '2024-04-15 15:18:36', 6, 'enero - 2024'),
(3, '2024-04-15 15:20:02', 5, 'mayo - 2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `id` int(11) NOT NULL,
  `emp_ruc` char(11) DEFAULT '00000000000',
  `emp_razon_social` varchar(250) DEFAULT 'Empresa-Prueba',
  `emp_direccion` text,
  `emp_dpto` varchar(100) NOT NULL,
  `emp_provincia` varchar(100) NOT NULL,
  `emp_distrito` varchar(150) NOT NULL,
  `emp_ubigeo` char(20) NOT NULL,
  `emp_condicion` varchar(50) NOT NULL,
  `emp_estado` varchar(50) NOT NULL,
  `emp_fecha_registro` datetime NOT NULL,
  `emp_estado_sys` int(11) DEFAULT '1',
  `id_rubro` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id`, `emp_ruc`, `emp_razon_social`, `emp_direccion`, `emp_dpto`, `emp_provincia`, `emp_distrito`, `emp_ubigeo`, `emp_condicion`, `emp_estado`, `emp_fecha_registro`, `emp_estado_sys`, `id_rubro`) VALUES
(1, '20164030246', 'INSTITUTO DE APOYO AL MANEJO DE AGUAS DE RIEGO-COSTA NORTE', 'CAL. NAPO N. 379 URB. QUINONES LAMBAYEQUE-CHICLAYO-CHICLAYO', 'LAMBAYEQUE', 'CHICLAYO', 'CHICLAYO', '140101', 'HABIDO', 'ACTIVO', '2024-03-27 12:16:26', 1, 1),
(2, '20380795907', 'PROGRAMA EDUCACION BASICA PARA TODOS', 'CAL. DEL COMERCIO N. 193 RES. LAS TORRES DE SAN BORJA LIMA-LIMA-SAN BORJA', 'LIMA', 'LIMA', 'SAN BORJA', '150130', 'HABIDO', 'ACTIVO', '2024-04-12 16:29:24', 2, 4),
(3, '20442598691', 'ASOC. CIVIL FUNDACION HOPE HOLANDA PERU', 'CAL. VENEZUELA Dpto 601 Mz K-15 URB. QUISPICANCHI CUSCO-CUSCO-CUSCO', 'CUSCO', 'CUSCO', 'CUSCO', '80101', 'HABIDO', 'ACTIVO', '2024-04-12 16:53:17', 1, 4),
(4, '20147739835', 'CARITAS DEL PERU', 'CAL. OMICRON N. 492 Z.I. PARQUE INDUSTRIAL CALLAO-PROV. CONST. DEL CALLAO-CALLAO', 'CALLAO', 'PROV. CONST. DEL CALLAO', 'CALLAO', '70101', 'HABIDO', 'ACTIVO', '2024-04-12 16:54:39', 1, 4),
(5, '20188899278', 'VICARIATO APOSTOLICO DE YURIMAGUAS', 'JR. BOLIVAR N. 208 LORETO-ALTO AMAZONAS-YURIMAGUAS', 'LORETO', 'ALTO AMAZONAS', 'YURIMAGUAS', '160201', 'HABIDO', 'ACTIVO', '2024-04-12 17:18:21', 1, 4),
(6, '20131370998', 'MINISTERIO DE EDUCACION', 'CAL. DEL COMERCIO N. 193 LIMA-LIMA-SAN BORJA', 'LIMA', 'LIMA', 'SAN BORJA', '150130', 'HABIDO', 'ACTIVO', '2024-04-12 17:32:49', 1, 4),
(7, '20609719738', 'ONG ARCA BETA', 'CAL. ERNESTO DIAZ LOPEZ N. 171 Dpto 201 URB. SANTA LEONOR LIMA-LIMA-CHORRILLOS', 'LIMA', 'LIMA', 'CHORRILLOS', '150108', 'HABIDO', 'ACTIVO', '2024-04-15 14:18:46', 1, 4),
(10, '20600355733', 'SERVICIOS DATHISA S.A.C.', 'AV. TACNA N. 543 Dpto 607 ---- CERCADO DE LIMA LIMA-LIMA-LIMA', 'LIMA', 'LIMA', 'LIMA', '150101', 'HABIDO', 'ACTIVO', '2024-05-03 10:51:07', 1, 1),
(11, '10473524037', 'VILLEGAS TERRONES MANUEL ANTONIO', '--', '', '', '', '0', 'HABIDO', 'ACTIVO', '2024-05-03 11:18:18', 1, 1),
(12, '20467675436', 'OPTICAS GMO PERU S.A.C', 'AV. LAS FLORES N. 242 URB. COUNTRY CLUB LIMA-LIMA-SAN ISIDRO', 'LIMA', 'LIMA', 'SAN ISIDRO', '150131', 'HABIDO', 'ACTIVO', '2024-05-03 12:03:06', 1, 2),
(13, '20100130204', 'BANCO BBVA PERU', 'AV. REP DE PANAMA N. 3055 URB. EL PALOMAR LIMA-LIMA-SAN ISIDRO', 'LIMA', 'LIMA', 'SAN ISIDRO', '150131', 'HABIDO', 'ACTIVO', '2024-05-03 12:04:06', 1, 5),
(14, '20548185051', 'CREDICORP CAPITAL PERU S.A.A.', 'AV. EL DERBY N. 55 URB. EDIFICIO CRONOS TORRE 3 P LIMA-LIMA-SANTIAGO DE SURCO', 'LIMA', 'LIMA', 'SANTIAGO DE SURCO', '150140', 'HABIDO', 'ACTIVO', '2024-05-03 12:04:41', 1, 5),
(15, '20609211173', 'CORPORACION DE FARMACIAS INKA SALUD S.A.C.', 'AV. PERU N. 2119 URB. PERU LIMA-LIMA-SAN MARTÍN DE PORRES', 'LIMA', 'LIMA', 'SAN MARTÍN DE PORRES', '150135', 'HABIDO', 'ACTIVO', '2024-05-03 12:57:44', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rubros`
--

CREATE TABLE `tbl_rubros` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `rubro_icon` varchar(50) DEFAULT 'fas fa-check',
  `rubro_name` varchar(100) DEFAULT NULL,
  `rubro_descripcion` varchar(255) DEFAULT NULL,
  `rubro_ruta_img` varchar(255) DEFAULT './assets/img/systems-logo/default-2.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rubros`
--

INSERT INTO `tbl_rubros` (`id`, `rubro_icon`, `rubro_name`, `rubro_descripcion`, `rubro_ruta_img`) VALUES
(1, 'fa-duotone fa-books', 'Contable', 'Sistema contable conectado a la SUNAT', './assets/img/systems-logo/e-contable-sf.png'),
(2, 'fa-duotone fa-user-doctor', 'Salud/Farmacia', 'Sistema farmaceutico', './assets/img/systems-logo/e-farmacia-sf.png'),
(3, 'fa-duotone fa-screwdriver-wrench', 'Administrativos', 'Sistema administrativo y presupuesta', './assets/img/systems-logo/e-admin-sf.png'),
(4, 'fa-duotone fa-person-chalkboard', 'Educativos', 'Sistema Educativo', './assets/img/systems-logo/e-education-sf.png'),
(5, 'fa-duotone fa-building-columns', 'Caja y Bancos', 'Sistema de control de caja y bancos', './assets/img/systems-logo/default-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) DEFAULT NULL,
  `user_apellidos` varchar(50) DEFAULT NULL,
  `user_nombres` varchar(50) DEFAULT NULL,
  `user_tipodoc` varchar(20) DEFAULT NULL,
  `user_docidentidad` varchar(15) DEFAULT NULL,
  `user_fecha_inicio` date DEFAULT NULL,
  `user_usuario` varchar(20) DEFAULT NULL,
  `user_password` varchar(20) DEFAULT NULL,
  `user_estado` tinyint(4) DEFAULT '1',
  `user_rol` varchar(20) DEFAULT 'USER',
  `user_cargo` varchar(100) DEFAULT 'Empleado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id`, `create_time`, `idEmpresa`, `user_apellidos`, `user_nombres`, `user_tipodoc`, `user_docidentidad`, `user_fecha_inicio`, `user_usuario`, `user_password`, `user_estado`, `user_rol`, `user_cargo`) VALUES
(1, '2024-04-15 15:13:25', 2, 'VILLEGAS TERRONES', 'MANUEL ANTONIO', 'DNI', '47352403', '2024-01-01', 'ADMIN', 'ADMIN', 1, 'ADMIN', 'COORDINADOR DE RECURSOS HUMANOS'),
(2, '2024-04-18 15:04:19', 1, 'RODRIGUEZ FERNANDEZ', 'SONIA LILY', 'DNI', '41095420', '2024-01-15', 'USER', 'USER', 2, 'USER', 'ESPECIALISTA EN ESTADISTICA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activaciones`
--
ALTER TABLE `tbl_activaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `k_emp_rubro` (`id_rubro`);

--
-- Indexes for table `tbl_rubros`
--
ALTER TABLE `tbl_rubros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activaciones`
--
ALTER TABLE `tbl_activaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_rubros`
--
ALTER TABLE `tbl_rubros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD CONSTRAINT `k_emp_rubro` FOREIGN KEY (`id_rubro`) REFERENCES `tbl_rubros` (`id`);

--
-- Constraints for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `tbl_empresa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
