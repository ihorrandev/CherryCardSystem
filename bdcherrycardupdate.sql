-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.26 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para cherrycard
CREATE DATABASE IF NOT EXISTS `cherrycard` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cherrycard`;

-- Copiando estrutura para tabela cherrycard.tbcartao
CREATE TABLE IF NOT EXISTS `tbcartao` (
  `Id_Usuario` int DEFAULT NULL,
  `Cart_Numero` bigint NOT NULL,
  `Cart_Validade` date DEFAULT NULL,
  `Cart_Codigo` int DEFAULT NULL,
  `Cart_Ativo` bit(1) DEFAULT NULL,
  `Cart_Tipo` int DEFAULT NULL,
  PRIMARY KEY (`Cart_Numero`),
  UNIQUE KEY `Cart_Codigo` (`Cart_Codigo`),
  KEY `FK_tbcartao_tbusuario` (`Id_Usuario`),
  CONSTRAINT `FK_tbcartao_tbusuario` FOREIGN KEY (`Id_Usuario`) REFERENCES `tbusuario` (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Aqui é onde vão ficar os dados do cartão do usuario da cherry';

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela cherrycard.tbfuncionario
CREATE TABLE IF NOT EXISTS `tbfuncionario` (
  `Id_Funcionario` int NOT NULL AUTO_INCREMENT,
  `Fun_Nome` varchar(50) DEFAULT NULL,
  `Fun_CPF` varchar(20) DEFAULT NULL,
  `Fun_Email` varchar(60) DEFAULT NULL,
  `Fun_Genero` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Fun_DDD` varchar(3) DEFAULT NULL,
  `Fun_Telefone` varchar(12) DEFAULT NULL,
  `Fun_Senha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Fun_Idade` varchar(50) DEFAULT NULL,
  `Fun_Avatar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Funcionario`),
  UNIQUE KEY `Fun_CPF` (`Fun_CPF`),
  UNIQUE KEY `Fun_Email` (`Fun_Email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela para cadastrar os funcionários';

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela cherrycard.tbusuario
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `Id_Usuario` int NOT NULL AUTO_INCREMENT,
  `Usu_Nome` varchar(60) DEFAULT NULL,
  `Usu_CPF` varchar(20) DEFAULT NULL,
  `Usu_Email` varchar(60) DEFAULT NULL,
  `Usu_DDD` varchar(3) DEFAULT NULL,
  `Usu_Telefone` varchar(12) DEFAULT NULL,
  `Usu_Idade` varchar(50) DEFAULT NULL,
  `Usu_Senha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Usu_Avatar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Usuario`),
  UNIQUE KEY `Usu_Email` (`Usu_Email`),
  UNIQUE KEY `Usu_CPF` (`Usu_CPF`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabela de usuarios do serviço Cherry Card';

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
