# ************************************************************
# Sequel Ace SQL dump
# Version 20062
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.7.39)
# Database: academia_conoce_mas
# Generation Time: 2024-01-22 23:00:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tbl_usuario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_usuario`;

CREATE TABLE `tbl_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_dni` varchar(20) DEFAULT NULL,
  `reg_apellidos_nombres` varchar(100) DEFAULT NULL,
  `reg_correo` varchar(100) DEFAULT NULL,
  `reg_password` varchar(20) DEFAULT NULL,
  `reg_celular` varchar(20) DEFAULT NULL,
  `reg_codigo` varchar(50) DEFAULT NULL,
  `reg_estatus` tinyint(1) DEFAULT '1',
  `reg_rol` varchar(10) NOT NULL DEFAULT 'user',
  `reg_curso_1` char(2) DEFAULT 'No',
  `reg_curso_2` char(2) DEFAULT 'No',
  `reg_curso_3` char(2) DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;

INSERT INTO `tbl_usuario` (`id`, `reg_dni`, `reg_apellidos_nombres`, `reg_correo`, `reg_password`, `reg_celular`, `reg_codigo`, `reg_estatus`, `reg_rol`, `reg_curso_1`, `reg_curso_2`, `reg_curso_3`)
VALUES
	(1,'00001234','VILLEGAS TERRONES MANUEL ANTONIO','admin','admin','932449843','00000000',1,'admin','No','No','No'),
	(2,'00001234','USUARIO DE PRUEBA','user','user','987654321','00000000',1,'user','Si','No','No');

/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Dumping routines (PROCEDURE) for database 'academia_conoce_mas'
--
DELIMITER ;;

# Dump of PROCEDURE sp_login
# ------------------------------------------------------------

/*!50003 DROP PROCEDURE IF EXISTS `sp_login` */;;
/*!50003 SET SESSION SQL_MODE="ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `sp_login`(correo varchar(100), password varchar(20))
begin
    select * from tbl_usuario
             where reg_correo = correo and reg_password = password and reg_estatus = 1;
end */;;

/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;;
DELIMITER ;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
