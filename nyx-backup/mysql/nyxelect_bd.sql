-- MySQL dump 10.13  Distrib 5.6.23, for Linux (x86_64)
--
-- Host: localhost    Database: nyxelect_bd
-- ------------------------------------------------------
-- Server version	5.6.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atributos`
--

DROP TABLE IF EXISTS `atributos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atributos` (
  `cod_atributos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_atributos` varchar(70) NOT NULL,
  PRIMARY KEY (`cod_atributos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atributos`
--

LOCK TABLES `atributos` WRITE;
/*!40000 ALTER TABLE `atributos` DISABLE KEYS */;
INSERT INTO `atributos` (`cod_atributos`, `nombre_atributos`) VALUES (1,'atributo1'),(2,'atributo2');
/*!40000 ALTER TABLE `atributos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `cod_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(70) NOT NULL,
  PRIMARY KEY (`cod_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`cod_categoria`, `nombre_categoria`) VALUES (1,'exteriores'),(2,'interiores'),(3,'placas'),(4,'griferia');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `cod_ciudad` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_ciudad` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` (`cod_ciudad`, `nombre_ciudad`) VALUES (1,'Santa Cruz'),(2,'Beni'),(3,'Pando'),(4,'Cochabamba'),(5,'Chuquisaca'),(6,'Tarija'),(7,'La Paz'),(8,'Oruro'),(9,'Potosi');
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `cod_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `compania` varchar(50) NOT NULL,
  `mensaje` text NOT NULL,
  `cod_ciudad` int(11) NOT NULL,
  PRIMARY KEY (`cod_contacto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` (`cod_contacto`, `email`, `nombre`, `telefono`, `compania`, `mensaje`, `cod_ciudad`) VALUES (1,'marcjav@hotmail.com','marco javier','78787877','aa','mensaje1',1),(2,'josecanseco@gmail.com','jose canseco','787878','bb','mensaje2',2);
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `cod_producto` int(11) NOT NULL AUTO_INCREMENT,
  `item_nro` varchar(20) NOT NULL,
  `watt` varchar(40) NOT NULL,
  `chip` varchar(30) NOT NULL,
  `input_voltage` varchar(10) DEFAULT NULL,
  `lamp_size` varchar(20) DEFAULT NULL,
  `hrs` int(11) NOT NULL,
  `material` varchar(40) DEFAULT NULL,
  `luminous` varchar(40) DEFAULT NULL,
  `luminous_flux` varchar(40) DEFAULT NULL,
  `cut_out` varchar(40) DEFAULT NULL,
  `body_color` varchar(50) DEFAULT NULL,
  `led_color` varchar(40) DEFAULT NULL,
  `life_span` varchar(40) DEFAULT NULL,
  `ip` varchar(40) DEFAULT NULL,
  `guarantee` varchar(40) DEFAULT NULL,
  `led_type_qty` varchar(40) DEFAULT NULL,
  `frecuency_range` varchar(20) DEFAULT NULL,
  `image1` varchar(70) NOT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `cod_tipo_producto` int(11) NOT NULL,
  PRIMARY KEY (`cod_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`cod_producto`, `item_nro`, `watt`, `chip`, `input_voltage`, `lamp_size`, `hrs`, `material`, `luminous`, `luminous_flux`, `cut_out`, `body_color`, `led_color`, `life_span`, `ip`, `guarantee`, `led_type_qty`, `frecuency_range`, `image1`, `image2`, `descripcion`, `cod_categoria`, `cod_tipo_producto`) VALUES (32,'7W','7','',NULL,'100',1000,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7W.JPG','','Luces led. Luces exteriores, luces especiales para ambiente.',2,1),(33,'0278','10000','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0278.JPG','','Luces led. Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,1),(34,'0282','1000','',NULL,'100',1000,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0282.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,2),(99,'R1080/3W-SL','3','',NULL,'50x50mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SP3wSL.JPG','','Luces led. Luminacion interior LED, Spot de sobreponer de 3watts en luz calidas, especial para lugares de techo \nloza en el cual no se puede empotrar, baños\n, gradas, cocina, etc.  El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,5),(100,'0106N6W','6','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SP6w.JPG','','Luminaria para interior, panel LED de sobreponer circular de 6watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,15),(101,'0118M-26W','26','',NULL,'x',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SP26wr.JPG','','Luces led. Luminaria para interior, panel LED de sobreponer circular de 6watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.\n',2,15),(102,'0119M-12W','12','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SP12wcuad.JPG','','Luminaria para interior, panel LED de sobreponer cuadrado de 12watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,15),(103,'0118M-12W','12','',NULL,'225mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SP12wr.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(104,'0119M-12W','12','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SP26wcuad.JPG','','Luminaria para interior, panel LED de sobreponer cuadrado de 12watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.\n',2,5),(105,'0118M-26W','26','',NULL,'x',50000,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SP26wr.JPG','','Luminaria para interior, panel LED de sobreponer circular de 6watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.\n',2,15),(106,'T-30W-COB','30','',NULL,'110xH220mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SPOT_RIEL_30W.jpeg','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,10),(107,'T-20W-COB Silver','20','',NULL,'110xH165mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'T_20W_COB_Silver.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,10),(108,'T-30W-COB White','30','',NULL,'110x220mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'T.30w.JPG','','Luces exteriores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,10),(109,'T988/10W','10','',NULL,'90x50mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'T988.10W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,10),(110,'T996/10W-WH','10','',NULL,'70X100mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'T996.10W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,10),(111,'XB001/20W','20','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'XB001.20W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(114,'0289','30','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0289.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',0,5),(123,'0308','100','',NULL,'120x120mm',120,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'S15-15W Downlight COB.jpg','','Luces interiores. Con la llegada de los  COB da inicio la Cuarta Generación de iluminación LED. Son varios led SMD unidos en un Chip de ahí su nombre: Chip On Board (COB). Generan una única fuente de luz, muy bajo consumo, bajo calentamiento, alta luminosidad.',2,20),(125,'BR225/24W','24','',NULL,'DIA225x30mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0326.JPG','','Luminaria para interior, panel LED de sobreponer circular de 24 watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,4),(126,'0373','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0373.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(129,'0463','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0463.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',0,5),(132,'T986/20','20','','AC85-265V','90x120mm',100,'aluminium','2000Lm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0536.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,10),(133,'0544','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0544.JPG','','Luces led. Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(134,'0546','1','',NULL,' 103x79x33mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0546.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,16),(136,'0549','1','',NULL,'103x79x33mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0549.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,16),(137,'0550','1','',NULL,'103x79x33mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0550.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,16),(138,'0551','100','',NULL,'103x79x33mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0551.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,16),(141,'0559','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0559.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(142,'0560','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0560.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(143,'0563','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0563.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(144,'0577','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0577.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(145,'0646','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0646.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(146,'0647','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0647.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(147,'0649','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0649.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(148,'BS300/50W','50','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BS300_50W.png','','Luminaria para interior, panel LED de sobreponer circular de 50 watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,4),(149,'BS110/6w','6','',NULL,'110x110x29mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BS1106w.JPG','','Luminaria para interior, panel LED de sobreponer cuadrada de 30watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,4),(150,'BS180/24w','24','',NULL,'180x180x30mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BS18024w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,7),(151,'e27/7W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'e27.7W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,17),(152,'e27RGB','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'e27RGB.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,17),(153,'grad/3W','3','',NULL,'3',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'grad3W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,12),(154,'GRAD/5W','5','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'GRAD5w.JPG','','\ntodoconled.com - Baliza exterior ip65 cabrils (barcelona)	El aplique de leds para empotrar ref. pt-w03a001-w es ideal para combinar diferentes tipos de iluminaciÃ³n tanto en interiores como en exteriores. su diseÃ±o y gran resistencia lo convierten. Iluminacion exterior de leds, luces de leds para balizamiento empotrables',2,16),(155,'L3024/18WB','18','',NULL,'160x120mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'L3024.18WB.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,18),(156,'L3024B/7WB','7','',NULL,'110x67mm',111,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'L3024B.7WB.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,18),(157,'mr16','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'mr16.png','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(158,'N3024/5W-WH','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'N3024.5W.B.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(159,'N3024/5W-SL','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'N3024.5W.SL.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(160,'OJITO1W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'OJITO1W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(161,'P9070.5W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'P9070.5W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(162,'R1w','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'R1w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(163,'R609/30w','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'R609.30w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(164,'REF/10W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'REF10W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(165,'REF30W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'REF30W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(166,'REF/50W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'REF50W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(167,'S15/30WB','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'S15.30WB.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(168,'S15/45w','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'S15.45w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(169,'S15/30W-SL','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'S1530WSL.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(170,'GO508','6','',NULL,'15x15cm',100,'aluminio IP65',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0539.JPG','','Luminaria LED de exterior de 6watts de luz cálida, tipo aplique, con 2 salidas de luz. \nExcelente para fachadas, ingresos, paredes, patios, terrazas, y otros.\nItem nro. GO508, 6watts, medida de la lámpara:15x15cm',1,12),(171,'GO392','ninguno','',NULL,'100',100,'aluminio IP65',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0540.JPG','','Luminaria para exterior tipo aplique, para focos LED, bajo consumo y otros. \nExcelente para fachadas, ingresos, paredes, patios, terrazas, y otros.\nItem nro. GO392, E27 rosca normal, medida de la lámpara:25x12x8cm',1,12),(172,'423-2x50w','100 IP65','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0569.JPG','','Luminaria para exterior, reflector LED de 100 watts, doble ojo. Este reflector\nes utilizado para vallas publicitarias, canchas polifuncionales, alumbrado de jardines, \ningresos a viviendas, etc. Éste reflector en particular, viene en dos tonos colores, luz blanca y \nluz cálida; El mismo tiene bastante durabilidad hasta 50000 horas de vida.',1,13),(173,'GO393','IP65-e27 rosca standard','',NULL,'28.5x12x12',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0573.JPG','','Luminaria para exterior tipo aplique, para focos LED, bajo consumo y otros. \nExcelente para fachadas, ingresos, paredes, patios, terrazas, y otros.\nTamaño de lámpara:28.5x12x12\nWatts:IP65-e27 rosca standard.',1,5),(174,'T30W-COB','30','',NULL,'110xH220mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0639.JPG','','Luminaria para interior, spot LED de 30watts tipo riel, luz blanca/cálida. Éste tipo de reflector\ntiene un sistema de expansión dirigida del sistema COB, excelente para poder definir variedad de \nartículos y sectores. Se utilizan en tiendas, salones de belleza, para iluminar cuadros, etc..\nEl mismo tiene bastante durabilidad, hasta 50.000 horas de vida.',1,14),(175,'0696','25','',NULL,'296x67mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0696.JPG','','Proyectores LED para piscina. Luces de piscinas de hormigon . Luces para diferentes alcances y ambientes, con larga duración, hasta de 50000 horas. Garantía de 3 años. ',1,19),(177,'0701','25','',NULL,'296x67mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0701.JPG','','Proyectores LED para piscina. Luces de piscinas de hormigon . Luces para diferentes alcances y ambientes, con larga duración, hasta de 50000 horas. Garantía de 3 años. ',1,19),(178,'0705','25','',NULL,'296x67mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0705.JPG','','Proyectores LED para piscina. Luces de piscinas de hormigon . Luces para diferentes alcances y ambientes, con larga duración, hasta de 50000 horas. Garantía de 3 años. ',1,19),(179,'B208/2w','2','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'B208.2w.JPG','','Los apliques de pared LED sirven para iluminar su interior de una manera única y atractiva. Los apliques de pered LED crean bonitos y luminosos espacios. Otras ventajas de los apliques de pared LED son su larga vida y bajo consumo de energía. También cabe destacar que son muy fáciles de instalar.  Escoja de nuestra colección la que mas le convenga y se adecue a sus necesidades.',16,5),(180,'BR110/6W','6','',NULL,'x',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BR110_6W.png','','Luminaria para interior, panel LED de sobreponer cuadrado de 6 watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,15),(181,'BR155/12w','12','',NULL,'x',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BR155.12w.JPG','','Luminaria para interior, panel LED de sobreponer circular de 12 watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,15),(182,'BR225/30W','30','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BR225_30W.png','','Luminaria para interior, panel LED de sobreponer cuadrado de 30 watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,15),(183,'BR300/40W','40','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BR300_40W.png','','Luminaria para interior, panel LED de sobreponer circular de 40 watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,5),(184,'BR110/6w','6','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BR1106w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,15),(185,'BR180/24W','24','',NULL,'180x30mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'BR18024w.JPG','','Luminaria para interior, panel LED de sobreponer circular de 24 watts(downlight). Esta luminaria de panel, \nes utilizada, en caso de tener un techo de loza, en el cual no se puede empotrar. Se utiliza para casas, \ndepartamentos, oficinas, depósitos, tiendas, baños, cocinas, etc. Viene en dos tonos de luz, luz blanca \ny luz cálida. El mismo tiene bastante durabilidad, hasta 50.000 hrs. de vida.',2,15),(186,'grad3W','3','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'grad3W.JPG','','Rejilla frontal para alojar bombillas LED tipo E27 en exteriores. Aplique para empotrar en paredes de terrazas, jardines, piscinas o espacios comunes de comunidades de vecinos. Diseño moderno y funcional que ofrece máxima resistencia antivandálica. Acabado en aluminio cepillado con un índice de protección IP44 ',1,5),(188,'P9070/5W','5x1','',NULL,'100x310mm',100,'Aluminium casting',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'P9070.5W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',1,5),(189,'423/10W','10','',NULL,'115x85x80mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'423_10w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',1,13),(190,'423/30W-SS','30','',NULL,'225x250x115mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'REF30W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',1,5),(191,'REF100w','100','',NULL,'392x290x114mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'REF100w.JPG','','Reflector de exterior de 100w. 9800 lumenes. Base de Aluminio. Luz fría de 6000k. Garantía de 1 año, ideal para estacionamientos, jardines grandes, canchas de tenis, etc.',1,13),(192,'S15-30W-COB','30','',NULL,'140x280mm',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'S15.30WB.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',1,5),(194,'B247.2w','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'B247.2w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(195,'B247.4w','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'B247.4w.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(196,'B247/6W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'B247.6W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5),(197,'B210/1W','100','',NULL,'100',100,'aluminium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'B210.1W.JPG','','Luces interiores, luces especiales para el Área de piscinas, pasillos, techado, y lugares inhóspitos. Las luces con alcance de 1 metro de diámetro. Colores adecuados al ambiente, fríos, cálidos. Diseño variado y adecuado al ambiente',2,5);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_producto` (
  `cod_tipo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_producto` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_tipo_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_producto`
--

LOCK TABLES `tipo_producto` WRITE;
/*!40000 ALTER TABLE `tipo_producto` DISABLE KEYS */;
INSERT INTO `tipo_producto` (`cod_tipo_producto`, `nombre_tipo_producto`) VALUES (1,'lampara de mesa'),(2,'lampara de pie'),(3,'lampara de sobreponer'),(4,'lampara de empotrar'),(5,'lampara de colgar'),(6,'cinta led interior'),(7,'paneles leds'),(8,'lamparas led'),(9,'cinta led '),(10,'spot de riel'),(11,'luz de piso'),(12,'aplique de pared'),(13,'reflector'),(14,'reflector tipo riel'),(15,'Plafon de sobreponer LED'),(16,'apliques'),(17,'focos led'),(18,'spot ojitos'),(19,'luces de piscina'),(20,'COB Downlights ');
/*!40000 ALTER TABLE `tipo_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`cod_usuario`, `nombre_usuario`, `contrasenia`) VALUES (1,'edward','1234');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'nyxelect_bd'
--

--
-- Dumping routines for database 'nyxelect_bd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-26 16:51:39
