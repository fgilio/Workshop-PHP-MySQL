/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : mis_notas_app

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-10-16 20:24:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for notas
-- ----------------------------
DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `nota_ID` int(20) NOT NULL AUTO_INCREMENT,
  `user_ID` int(20) NOT NULL,
  `nota_titulo` text NOT NULL,
  `nota_contenido` longtext,
  `nota_privacidad` varchar(45) DEFAULT 'publica',
  PRIMARY KEY (`nota_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notas
-- ----------------------------
INSERT INTO `notas` VALUES ('2', '1', 'Lista de compras', 'Huevos, avena, leche, frutillas y manzandas', 'privada');
INSERT INTO `notas` VALUES ('3', '2', 'Temás para el examen', 'Revolución Rusa. Cap 1 al 3', 'privada');
INSERT INTO `notas` VALUES ('5', '1', 'Tip PHP n01', 'Los \"inlcude\" y \"require\" nos ayudan a separar un proyecto en pequeñas porciones de código.\r\nLa ventaja más visible es un código más fácil de leer.', 'publica');
INSERT INTO `notas` VALUES ('6', '3', 'Super Tip!', 'Comentar el código describiendo que es lo que hace, y cómo lo hace.', 'publica');
INSERT INTO `notas` VALUES ('12', '0', 'Foo', 'Bar', 'publica');
INSERT INTO `notas` VALUES ('13', '4', 'Nueva', 'ssssss', 'publica');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `user_ID` int(20) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(64) NOT NULL,
  `user_clave_activacion` varchar(45) DEFAULT NULL,
  `user_activado` int(1) DEFAULT NULL,
  `user_total_notas` int(20) DEFAULT NULL,
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `user_email_UNIQUE` (`user_email`),
  KEY `user_clave_activacion` (`user_clave_activacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'me@fgilio.com', 'mi pass!', 's6dg41s6df85', '1', null);
INSERT INTO `usuarios` VALUES ('2', 'fiocchigabriel@gmail.com', 'blaBlaaaa', 'gdfiofhsdgfh65d', '0', null);
INSERT INTO `usuarios` VALUES ('3', 'lucas.nz.d@gmail.com', 'añaña', 'askldfhjñasldf', '0', null);
INSERT INTO `usuarios` VALUES ('4', 'fgilio@neomediatv.com.ar', 'papapa', null, null, null);
