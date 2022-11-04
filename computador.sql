-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jul-2021 às 21:00
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Intcom Solutions`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `computadores`
--

DROP TABLE IF EXISTS `computador`;
CREATE TABLE IF NOT EXISTS `computador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placamae` varchar(50) NOT NULL,
  `memoriaram` varchar(50) NOT NULL,
  `hd` varchar(50) NOT NULL,
  `marcahd` varchar(50) NOT NULL,
  `velocidadeprocessador` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `computador`
--

INSERT INTO `computador` (`id`, `marca`, `modelo`, `Placa-Mãe`, `Memória RAM`, `HD`, `Marca HD`, `Velocidade do Processador`) VALUES
(1, 'Samsung','Expert','Gigabyte','DDR4','1TB','Seagate', 2.0),
(2, 'Apple','M1','M1','DDR4','256gb','Kingston', 4.0),
(3, 'Asus','Z170 MARK','Motherboard','DDR4','500GB','Western Digital', 2.5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
