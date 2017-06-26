# ************************************************************
# Sequel Pro SQL dump
# Versión 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Base de datos: gestion
# Tiempo de Generación: 2017-06-26 12:13:05 +0000
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


# Volcado de tabla images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `original_name`, `item_id`, `filename`, `created_at`, `updated_at`)
VALUES
	(6,'WhatsApp Image 2017-06-25 at 10.57.26.jpeg','24','whatsapp-image-2017-06-25-at-105726.jpeg','2017-06-25 23:58:53','2017-06-25 23:58:53'),
	(7,'FullSizeRender1-e1498347906562.jpg','25','fullsizerender1-e1498347906562.jpg','2017-06-26 00:01:36','2017-06-26 00:01:36'),
	(8,'4a9d87c2-9ceb-440a-9405-ec1a38cdd879.jpg','26','4a9d87c2-9ceb-440a-9405-ec1a38cdd879.jpg','2017-06-26 00:02:51','2017-06-26 00:02:51'),
	(9,'1afa970f-d53d-4feb-8e96-08ed4ea0e4e7.jpg','27','1afa970f-d53d-4feb-8e96-08ed4ea0e4e7.jpg','2017-06-26 00:04:41','2017-06-26 00:04:41'),
	(10,'5ac3dea8-8f79-41b6-aaad-3404883e4a66.jpg','28','5ac3dea8-8f79-41b6-aaad-3404883e4a66.jpg','2017-06-26 00:06:03','2017-06-26 00:06:03'),
	(11,'a4ed271e-614f-4eef-bf0f-ab0c5c72db24.jpg','29','a4ed271e-614f-4eef-bf0f-ab0c5c72db24.jpg','2017-06-26 00:08:34','2017-06-26 00:08:34');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `lng` decimal(11,7) DEFAULT NULL,
  `lat` decimal(11,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `titulo`, `foto`, `categoria`, `descripcion`, `fecha_inicio`, `fecha_fin`, `lng`, `lat`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(24,'Mejorado de calles en el Barrio Celeste y Blanco',NULL,'Calles','Mejoramos','2017-06-22','2017-06-25',-59.1009528,-35.1500035,'2017-06-25 23:58:38','2017-06-25 23:58:38',NULL),
	(25,'Limpieza de predio',NULL,'Espacio Público','En la mañana de hoy empleados de la Municipalidad procedieron a limpiar la calle 233 entre Mastropietro y Angueira, que hace mucho tiempo estaba cubierta en su totalidad por arbustos, ramas y basura.','2017-06-24','2017-06-25',-59.0925414,-35.1695987,'2017-06-26 00:01:30','2017-06-26 00:01:30',NULL),
	(26,'Arreglo de calle',NULL,'Calles','asdads','2017-06-16','2017-06-19',-59.0933575,-35.1675640,'2017-06-26 00:02:49','2017-06-26 00:02:49',NULL),
	(27,'Puente sobre la Emilio Castro',NULL,'Espacio Público','asd','2017-07-04','2017-07-11',-59.0930571,-35.1771057,'2017-06-26 00:04:39','2017-06-26 00:04:39',NULL),
	(28,'Asfalto para la calle 233',NULL,'Calles','asdasd','2017-06-08','2017-06-09',-59.0912560,-35.1793507,'2017-06-26 00:06:01','2017-06-26 00:06:01',NULL),
	(29,'Mejorado de calles',NULL,'Calles','asd',NULL,NULL,-59.0951599,-35.1859449,'2017-06-26 00:08:32','2017-06-26 00:08:32',NULL);

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla items1
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items1`;

CREATE TABLE `items1` (
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

LOCK TABLES `items1` WRITE;
/*!40000 ALTER TABLE `items1` DISABLE KEYS */;

INSERT INTO `items1` (`id`, `titulo`, `descripcion`, `foto`, `fecha_inicio`, `categoria_id`, `lng`, `lat`, `created_at`, `updated_at`)
VALUES
	(6,'Reemplazo del puente Arroyo Pillahuincó en la ruta 85, Coronel Pringles y Coronel Suárez\nReemplazo del puente Arroyo Pillahuincó en la ruta 85, Coronel Pringles y Coronel Suárez\n','Construimos un puente nuevo para mejorar la comunicación entre los vecinos de Coronel Pringles y Coronel Suárez. Esta obra forma parte de un plan hidráulico que previene problemas causados por las lluvias y evita que se deterioren las rutas.\n\n','1.jpg','2017-06-01 00:00:00',1,NULL,NULL,NULL,NULL),
	(7,'Trabajos en Ruta Provincial 67 en Coronel Suárez y Pigüé\n','Estamos cumpliendo con la finalización de una obra que obedece a un reclamo histórico de los vecinos de Coronel Suarez y Pigüé.\nEstamos repavimentando y ensanchando la ruta y arreglando las banquinas para que sean más seguras. Además, remodelamos el acceso a Arroyo Corto, instalamos semáforos en el acceso a Pigüé y trabajamos sobre los puentes y alcantarillas de todo ese tramo','2.jpg','2017-05-15 00:00:00',2,NULL,NULL,NULL,NULL),
	(8,'Obras de desagüe y asfaltado en Monte Hermoso\n','Estamos trabajando en la construcción de desagües pluviales, asfaltado de la costanera, generación de badenes y un tratamiento de calzada, para facilitar el acceso aún en época de lluvias. La obra es de 1,4 kilómetros, desde la Av. Alfonsín hasta Pedro de Mendoza, y va a beneficiar a 6.890 habitantes de Monte Hermoso.','3.jpg','2017-05-15 00:00:00',2,NULL,NULL,NULL,NULL),
	(9,'Obras en el hospital de Las Flores','Queremos brindar un mejor servicio a los más de 25 mil habitantes de Las Flores. Por eso, finalizamos las obras comenzadas en el Hospital, mejorando las salas de guardias de emergencias, para optimizar la atención de los pacientes y construyendo un nuevo hogar de ancianos para mejorar la forma de cuidar a nuestros abuelos.','4.jpg','2017-03-20 00:00:00',1,NULL,NULL,NULL,NULL),
	(10,'Obras de desagüe y asfaltado en Monte Hermoso\n','Estamos trabajando en la construcción de desagües pluviales, asfaltado de la costanera, generación de badenes y un tratamiento de calzada, para facilitar el acceso aún en época de lluvias. La obra es de 1,4 kilómetros, desde la Av. Alfonsín hasta Pedro de Mendoza, y va a beneficiar a 6.890 habitantes de Monte Hermoso.','3.jpg','2017-05-15 00:00:00',1,NULL,NULL,NULL,NULL),
	(11,'Trabajos en Ruta Provincial 67 en Coronel Suárez y Pigüé\n','Estamos cumpliendo con la finalización de una obra que obedece a un reclamo histórico de los vecinos de Coronel Suarez y Pigüé.\nEstamos repavimentando y ensanchando la ruta y arreglando las banquinas para que sean más seguras. Además, remodelamos el acceso a Arroyo Corto, instalamos semáforos en el acceso a Pigüé y trabajamos sobre los puentes y alcantarillas de todo ese tramo','2.jpg','2017-05-15 00:00:00',2,NULL,NULL,NULL,NULL),
	(20,'Obras de desagüe y asfaltado en Monte Hermoso\n','Estamos trabajando en la construcción de desagües pluviales, asfaltado de la costanera, generación de badenes y un tratamiento de calzada, para facilitar el acceso aún en época de lluvias. La obra es de 1,4 kilómetros, desde la Av. Alfonsín hasta Pedro de Mendoza, y va a beneficiar a 6.890 habitantes de Monte Hermoso.','3.jpg','2017-05-15 00:00:00',1,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `items1` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(5,'2014_10_12_000000_create_users_table',1),
	(6,'2014_10_12_100000_create_password_resets_table',1),
	(7,'2017_06_24_184244_create_items_table',1),
	(8,'2015_08_07_125128_CreateImages',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Federico Lucesoli','fedelucesoli@gmail.com','$2y$10$CtDC1FnzPtuwybrxEdl9DOnozdoO98ThkxFtY51qylS5JrqFeCuqm','182Mh5VxYLTnULEWLEqk0gnAgsO4GFhgCs8nPETbZ1Sucg6p0VtsjJeYTW0v','2017-06-24 20:49:50','2017-06-24 20:49:50');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
