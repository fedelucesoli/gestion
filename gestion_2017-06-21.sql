# ************************************************************
# Sequel Pro SQL dump
# Versión 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Base de datos: gestion
# Tiempo de Generación: 2017-06-22 02:41:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `valor` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `nombre`, `valor`, `created_at`, `updated_at`)
VALUES
	(1,'Calles','calles',NULL,NULL),
	(2,'Desagües','desagues',NULL,NULL),
	(3,'Asfalto','asfalto',NULL,NULL),
	(4,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL DEFAULT '',
  `descripcion` varchar(500) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `categoria_id` int(11) DEFAULT NULL,
  `lng` decimal(11,7) DEFAULT NULL,
  `lat` decimal(11,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `titulo`, `descripcion`, `foto`, `fecha_inicio`, `categoria_id`, `lng`, `lat`, `created_at`, `updated_at`)
VALUES
	(6,'Reemplazo del puente Arroyo Pillahuincó en la ruta 85, Coronel Pringles y Coronel Suárez\nReemplazo del puente Arroyo Pillahuincó en la ruta 85, Coronel Pringles y Coronel Suárez\n','Construimos un puente nuevo para mejorar la comunicación entre los vecinos de Coronel Pringles y Coronel Suárez. Esta obra forma parte de un plan hidráulico que previene problemas causados por las lluvias y evita que se deterioren las rutas.\n\n','1.jpg','2017-06-01 00:00:00',1,NULL,NULL,NULL,NULL),
	(7,'Trabajos en Ruta Provincial 67 en Coronel Suárez y Pigüé\n','Estamos cumpliendo con la finalización de una obra que obedece a un reclamo histórico de los vecinos de Coronel Suarez y Pigüé.\nEstamos repavimentando y ensanchando la ruta y arreglando las banquinas para que sean más seguras. Además, remodelamos el acceso a Arroyo Corto, instalamos semáforos en el acceso a Pigüé y trabajamos sobre los puentes y alcantarillas de todo ese tramo','2.jpg','2017-05-15 00:00:00',2,NULL,NULL,NULL,NULL),
	(8,'Obras de desagüe y asfaltado en Monte Hermoso\n','Estamos trabajando en la construcción de desagües pluviales, asfaltado de la costanera, generación de badenes y un tratamiento de calzada, para facilitar el acceso aún en época de lluvias. La obra es de 1,4 kilómetros, desde la Av. Alfonsín hasta Pedro de Mendoza, y va a beneficiar a 6.890 habitantes de Monte Hermoso.','3.jpg','2017-05-15 00:00:00',2,NULL,NULL,NULL,NULL),
	(9,'Obras en el hospital de Las Flores','Queremos brindar un mejor servicio a los más de 25 mil habitantes de Las Flores. Por eso, finalizamos las obras comenzadas en el Hospital, mejorando las salas de guardias de emergencias, para optimizar la atención de los pacientes y construyendo un nuevo hogar de ancianos para mejorar la forma de cuidar a nuestros abuelos.','4.jpg','2017-03-20 00:00:00',1,NULL,NULL,NULL,NULL),
	(10,'Obras de desagüe y asfaltado en Monte Hermoso\n','Estamos trabajando en la construcción de desagües pluviales, asfaltado de la costanera, generación de badenes y un tratamiento de calzada, para facilitar el acceso aún en época de lluvias. La obra es de 1,4 kilómetros, desde la Av. Alfonsín hasta Pedro de Mendoza, y va a beneficiar a 6.890 habitantes de Monte Hermoso.','3.jpg','2017-05-15 00:00:00',1,NULL,NULL,NULL,NULL),
	(11,'Trabajos en Ruta Provincial 67 en Coronel Suárez y Pigüé\n','Estamos cumpliendo con la finalización de una obra que obedece a un reclamo histórico de los vecinos de Coronel Suarez y Pigüé.\nEstamos repavimentando y ensanchando la ruta y arreglando las banquinas para que sean más seguras. Además, remodelamos el acceso a Arroyo Corto, instalamos semáforos en el acceso a Pigüé y trabajamos sobre los puentes y alcantarillas de todo ese tramo','2.jpg','2017-05-15 00:00:00',2,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `recovery_hash` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `usuario`, `password`, `recovery_hash`, `created_at`, `updated_at`, `date`, `email`)
VALUES
	(17,'fede','$2y$10$lVO/2LTbMH/nizZNK.I4Nue2vT6dKH.VOdSGxUTO.rQ0QYFf0GbmC',NULL,'2017-06-21 01:00:19','2017-06-21 01:00:19',NULL,'fedelucesoli@gmail.com'),
	(18,'fede1','$2y$10$kaOLeRQB8.zT/zVV61Vnh.S0DOjQaNk0ivnkg2b0yWUd6qbG5m2Fi',NULL,'2017-06-21 01:03:48','2017-06-21 01:03:48',NULL,'fedelucesoli@gmail.com'),
	(19,'fede2','$2y$10$E4in5s.Q14G8z26LQDMBlOV6rsRZETdvduf3q1OIfkETp6tl4HQKm',NULL,'2017-06-21 01:12:37','2017-06-21 01:12:37',NULL,'fedelucesoli@gmail.com'),
	(20,'fede3','$2y$10$s2n8KoAe6/JkER6NWPpkOONKdUl8CuskfURTxvdZmnOXVHE.FjkKG',NULL,'2017-06-21 01:12:44','2017-06-21 01:12:44',NULL,'fedelucesoli@gmail.com'),
	(21,'fede4','$2y$10$g.l4woqcLRcBzSW/YROnyO59SgGuV9mQYpbQcfdKA/S/9I98IzbR2',NULL,'2017-06-21 01:13:00','2017-06-21 01:13:00',NULL,'fedelucesoli@gmail.com'),
	(22,'fede5','$2y$10$kp6ewtYfNfmzkvq2AHdGXu2PDfeeSP3AzoCkR9BK8j5fShjg00ReC',NULL,'2017-06-21 01:14:37','2017-06-21 01:14:37',NULL,'fedelucesoli@gmail.com'),
	(23,'fede6','$2y$10$eLWanCFKgtfStLJN4.9MCOe/wTvahrh6c6aozoGYNnW8EflC6dbou',NULL,'2017-06-21 01:14:44','2017-06-21 01:14:44',NULL,'fedelucesoli@gmail.com'),
	(24,'fede7','$2y$10$OajtJuHOMJkAC3rlg5lSZeUlvp4tHFMWzWBIdz.DUzd7q8vMRs.UO',NULL,'2017-06-21 01:51:03','2017-06-21 01:51:03',NULL,'fedelucesoli@gmail.com'),
	(25,'fede8','$2y$10$oCjAnXga93GLJsruysZQUuWUcMj7IJaInl/6pnWLTocrvCDzN9QjO',NULL,'2017-06-21 02:00:19','2017-06-21 02:00:19',NULL,'fedelucesoli@gmail.com'),
	(26,'fede8','$2y$10$zpWpkIGZcSHP2d45E37JcucVsNMj9XlAKGlC2RrUX34zocx2c/nvy',NULL,'2017-06-21 03:34:14','2017-06-21 03:34:14',NULL,'fedelucesoli@gmail.com'),
	(27,'fede9','$2y$10$w2p94hzXQOtrhrncZLQ.POU9et5f3dRrcgvpAaB9nKQefT8Z.tEUy',NULL,'2017-06-21 03:36:28','2017-06-21 03:36:28',NULL,'fedelucesoli@gmail.com');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
