# ************************************************************
# Sequel Ace SQL dump
# Version 20062
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.7.39)
# Database: minedudi_academia
# Generation Time: 2024-02-13 15:27:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tbl_curso
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_curso`;

CREATE TABLE `tbl_curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cur_tipo` varchar(100) DEFAULT 'Virtual',
  `cur_numero` varchar(100) DEFAULT 'Curso 1',
  `cur_nombre` text,
  `cur_modulo` varchar(200) DEFAULT 'Módulo 1',
  `cur_nombre_video` text,
  `cur_ruta` varchar(255) DEFAULT 'https://conoce-mas.com/lyceum-group/videos/curso-1/Modulo-1/clase-1',
  `cur_estado` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_curso` WRITE;
/*!40000 ALTER TABLE `tbl_curso` DISABLE KEYS */;

INSERT INTO `tbl_curso` (`id`, `cur_tipo`, `cur_numero`, `cur_nombre`, `cur_modulo`, `cur_nombre_video`, `cur_ruta`, `cur_estado`)
VALUES
	(1,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Introducción','./recursos/curso-1/videos/Introduccion.mp4',1),
	(2,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Módulo 1 - Clase 1_En qué consiste la gestiвn basada en resultados V3.0','./recursos/curso-1/videos/M-1/c1.mp4',1),
	(3,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Módulo 1 - Clase 2_Modelo lвgico de los sistemas de monitoreo y evaluaciвn V3.0','./recursos/curso-1/videos/M-1/c2.mp4',1),
	(4,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Módulo 1 - Clase 3_Errores habituales en la aplicaciвn de la gestiвn basada en resultados V3.0','./recursos/curso-1/videos/M-1/c3.mp4',1),
	(5,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Módulo 1 - Clase 4_Monitoreo en el marco de la gestiвn basada en resultados V3.0','./recursos/curso-1/videos/M-1/c4.mp4',1),
	(6,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Módulo 1 - Clase 5_Pasos fundamentales del monitoreo de los resultados Parte 1 V3.0','./recursos/curso-1/videos/M-1/c5.mp4',1),
	(7,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Módulo 1 - Clase 6_Pasos fundamentales del monitoreo de los resultados Parte 2 V3.0','./recursos/curso-1/videos/M-1/c6.mp4',1),
	(8,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 1','Módulo 1 - Conclusiones_V3.0','./recursos/curso-1/videos/M-1/m1-c1.mp4',1),
	(9,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 1_Cadena de resultados Parte 1 V3.0','./recursos/curso-1/videos/M-2/c1.mp4',1),
	(10,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 2_Cadena de resultados Parte 2 V3.0','./recursos/curso-1/videos/M-2/c2.mp4',1),
	(11,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 3_Indicadores en la gestiвn de resultados- Parte 1_ V3.0','./recursos/curso-1/videos/M-2/c3.mp4',1),
	(12,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 4_Indicadores en la gestiвn de resultados- Parte 2_ V3.0','./recursos/curso-1/videos/M-2/c4.mp4',1),
	(13,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 5_Formulaciвn de indicadores - Parte 1_V3.0','./recursos/curso-1/videos/M-2/c5.mp4',1),
	(14,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 6_Formulaciвn de indicadores - Parte 2_V3.0','./recursos/curso-1/videos/M-2/c6.mp4',1),
	(15,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 7_Formulaciвn de indicadores - Parte 3_V3.0','./recursos/curso-1/videos/M-2/c7.mp4',1),
	(16,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Clase 8_Formulaciвn de indicadores - Parte 4_V3.0','./recursos/curso-1/videos/M-2/c8.mp4',1),
	(17,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 2','Módulo 2 - Conclusiones_V3.0  1','./recursos/curso-1/videos/M-2/m2-c1.mp4',1),
	(18,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Clase 1_Matriz de indicadores - Parte 1_V3.0','./recursos/curso-1/videos/M-3/c1.mp4',1),
	(19,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Clase 2_Matriz de indicadores - Parte 2_V3.0','./recursos/curso-1/videos/M-3/c2.mp4',1),
	(20,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Clase 3_Flujo de datos - Parte 1_V3.0','./recursos/curso-1/videos/M-3/c3.mp4',1),
	(21,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Clase 4_Flujo de datos - Parte 2_V3.0','./recursos/curso-1/videos/M-3/c4.mp4',1),
	(22,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Clase 5- Rastreador de indicadores_V3.0','./recursos/curso-1/videos/M-3/c5.mp4',1),
	(23,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Clase 6- Estrategia de comunicaciвn Cronograma de informes_V3.0','./recursos/curso-1/videos/M-3/c6.mp4',1),
	(24,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Clase 7- Plan y presupuesto de actividades_V3.0','./recursos/curso-1/videos/M-3/c7.mp4',1),
	(25,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 3','Módulo 3 - Conclusiones_V3.0','./recursos/curso-1/videos/M-3/m3-c1.mp4',1),
	(26,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 10_Presupuesto de Actividades - Parte 2','./recursos/curso-1/videos/M-4/c1.mp4',1),
	(27,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 11_Monitoreo programático y financiero - Parte 1','./recursos/curso-1/videos/M-4/c2.mp4',1),
	(28,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 12_Monitoreo programático y financiero - Parte 2','./recursos/curso-1/videos/M-4/c3.mp4',1),
	(29,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 1_Matriz de marco lógico y de indicadores - Parte 1','./recursos/curso-1/videos/M-4/c4.mp4',1),
	(30,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 2_Matriz de marco lógico y de indicadores - Parte  2','./recursos/curso-1/videos/M-4/c5.mp4',1),
	(31,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 3_Rastreador de indicadores - Parte 1','./recursos/curso-1/videos/M-4/c6.mp4',1),
	(32,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 4_Rastreador de indicadores - Parte 2','./recursos/curso-1/videos/M-4/c7.mp4',1),
	(33,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 5_Rastreador de indicadores - Parte 3','./recursos/curso-1/videos/M-4/c8.mp4',1),
	(34,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 6_Rastreador de indicadores - Parte 4','./recursos/curso-1/videos/M-4/c9.mp4',1),
	(35,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 7_Plan de Actividades - Parte 1','./recursos/curso-1/videos/M-4/c10.mp4',1),
	(36,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 8_Plan de Actividades - Parte 2','./recursos/curso-1/videos/M-4/c11.mp4',1),
	(37,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4 - Clase 9_Presupuesto de Actividades - Parte 1','./recursos/curso-1/videos/M-4/c12.mp4',1),
	(38,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Módulo 4','Módulo 4_Introducción a las Herramientas del Marco MyE','./recursos/curso-1/videos/M-4/m4-c1.mp4',1),
	(39,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 1','./recursos/curso-1/videos/B-1/b1.mp4',1),
	(40,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 2','./recursos/curso-1/videos/B-1/b2.mp4',1),
	(41,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 3','./recursos/curso-1/videos/B-1/b3.mp4',1),
	(42,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 4','./recursos/curso-1/videos/B-1/b4.mp4',1),
	(43,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 5','./recursos/curso-1/videos/B-1/b5.mp4',1),
	(44,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 6','./recursos/curso-1/videos/B-1/b6.mp4',1),
	(45,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 7','./recursos/curso-1/videos/B-1/b7.mp4',1),
	(46,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 8','./recursos/curso-1/videos/B-1/b8.mp4',1),
	(47,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 9','./recursos/curso-1/videos/B-1/b9.mp4',1),
	(48,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 10','./recursos/curso-1/videos/B-1/b10.mp4',1),
	(49,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 11','./recursos/curso-1/videos/B-1/b11.mp4',1),
	(50,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-1','BONUS 1 - Marco MyE en Power BI - Parte 12','./recursos/curso-1/videos/B-1/b12.mp4',1),
	(51,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-2','BONUS 2 - Herramienta de complejidad de proyectos - Parte 1','./recursos/curso-1/videos/B-2/b1.mp4',1),
	(52,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-2','BONUS 2 - Herramienta de complejidad de proyectos - Parte 2','./recursos/curso-1/videos/B-2/b2.mp4',1),
	(53,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-2','BONUS 2 - Herramienta de complejidad de proyectos - Parte 3','./recursos/curso-1/videos/B-2/b3.mp4',1),
	(54,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-3','BONUS 3 - Matriz de cálculo del tamaño de muestra','./recursos/curso-1/videos/B-3/b1.mp4',1),
	(55,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-4','BONUS 4 - TDR CHECKLIST - Parte 1','./recursos/curso-1/videos/B-4/b1.mp4',1),
	(56,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-4','BONUS 4 - TDR CHECKLIST - Parte 2','./recursos/curso-1/videos/B-4/b2.mp4',1),
	(57,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-4','BONUS 4 - TDR CHECKLIST - Parte 3','./recursos/curso-1/videos/B-4/b3.mp4',1),
	(58,'Virtual','Curso-1','¿CÓMO DISEÑAR UN MARCO DE MONITOREO Y EVALUACIÓN DE PROYECTOS SOCIALES?','Bonus-4','BONUS 4 - TDR CHECKLIST - Parte 4','./recursos/curso-1/videos/B-4/b4.mp4',1);

/*!40000 ALTER TABLE `tbl_curso` ENABLE KEYS */;
UNLOCK TABLES;


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
-- Dumping routines (PROCEDURE) for database 'minedudi_academia'
--
DELIMITER ;;

# Dump of PROCEDURE sp_login
# ------------------------------------------------------------

/*!50003 DROP PROCEDURE IF EXISTS `sp_login` */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO"*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `sp_login`(`correo` VARCHAR(100), `password` VARCHAR(20))
begin
    select * from tbl_usuario
             where reg_correo = correo and reg_password = password and reg_estatus = 1;
end */;;

/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;;
# Dump of PROCEDURE sp_register_user
# ------------------------------------------------------------

/*!50003 DROP PROCEDURE IF EXISTS `sp_register_user` */;;
/*!50003 SET SESSION SQL_MODE="ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `sp_register_user`(IN r_dni varchar(15), IN r_apellidos_nombres varchar(100),
                                                        IN r_correo varchar(100), IN r_password varchar(20),
                                                        IN r_celular varchar(10), IN r_codigo varchar(9))
BEGIN
    INSERT INTO tbl_usuario
    VALUES(0, r_dni, r_apellidos_nombres, r_correo, r_password, r_celular, r_codigo, 1, 'user', 'No', 'No', 'No');
END */;;

/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;;
DELIMITER ;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
