-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2019 às 01:02
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrosdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `carro_id` int(11) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `descricao` text NOT NULL,
  `portas` int(11) NOT NULL,
  `ano_fab` int(11) NOT NULL,
  `ano_mod` int(11) NOT NULL,
  `cor` varchar(40) NOT NULL,
  `km` double NOT NULL,
  `placa` varchar(8) NOT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `obs` text NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `foto1` varchar(50) NOT NULL,
  `foto2` varchar(50) DEFAULT NULL,
  `foto3` varchar(50) DEFAULT NULL,
  `foto4` varchar(50) DEFAULT NULL,
  `dt_inclusao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`carro_id`, `marca`, `modelo`, `descricao`, `portas`, `ano_fab`, `ano_mod`, `cor`, `km`, `placa`, `valor`, `obs`, `ativo`, `foto1`, `foto2`, `foto3`, `foto4`, `dt_inclusao`) VALUES
(31, 'vw', 'Gol 1.6 Flex', 'ar + dir', 4, 2015, 2016, 'preta', 27000, 'jdi-2569', '36000.00', 'Conservado', 1, './img/gol1.jpg', './img/gol2.jpg', './img/gol3.jpg', './img/gol4.jpg', '2019-06-02 19:30:31'),
(32, 'fiat', 'Stilo 1.8 Flex', 'completo', 2, 2010, 2011, 'azul', 42000, 'der-2314', '43000.00', 'Conservado', 1, './img/stilo1.jpg', './img/stilo2.jpg', './img/stilo3.jpg', './img/stilo4.jpg', '2019-06-02 19:30:31'),
(33, 'toyota', 'Corolla 2.0 Flex', 'completo', 4, 2015, 2015, 'branca', 72000, 'loa-2569', '27000.00', 'sem debitos', 1, './img/corolla1.jpg', './img/corolla2.jpg', './img/corolla3.jpg', './img/corolla4.jpg', '2019-06-02 19:30:31'),
(34, 'honda', 'Civic 1.6 Flex', 'completo', 4, 2015, 2015, 'preta', 63000, 'kow-0034', '61000.00', 'Conservado', 1, './img/civic1.jpg', './img/civic2.jpg', './img/civic3.jpg', './img/civic4.jpg', '2019-06-02 19:30:31'),
(35, 'gm', 'Onix 1.4 Flex', 'completo', 4, 2018, 2018, 'azul', 98000, 'der-2237', '31000.00', 'sem debitos', 1, './img/onix1.jpg', './img/onix2.jpg', './img/onix3.jpg', './img/onix4.jpg', '2019-06-02 19:30:31'),
(36, 'fiat', 'Palio 1.0 Flex', 'ar + dir', 2, 2017, 2018, 'branca', 78000, 'loe-8745', '37500.00', 'Conservado', 1, './img/palio1.jpg', './img/palio2.jpg', './img/palio3.jpg', './img/palio4.jpg', '2019-06-02 19:30:31'),
(37, 'vw', 'Voyage 1.6 Flex', 'completo', 4, 2015, 2016, 'prata', 42000, 'yeu-2899', '34800.00', 'único dono', 1, './img/voyage1.jpg', './img/voyage2.jpg', './img/voyage3.jpg', './img/voyage4.jpg', '2019-06-02 19:30:31'),
(38, 'ford', 'Ka SE 1.5 Flex', 'completo', 4, 2014, 2014, 'prata', 78500, 'dwe-2365', '25900.00', 'sem debitos', 1, './img/ka1.jpg', './img/ka2.jpg', './img/ka3.jpg', './img/ka4.jpg', '2019-06-02 19:30:31'),
(39, 'toyota', 'Hillux 2.4 Flex', 'completo', 2, 2013, 2013, 'preta', 43000, 'lle-2569', '76900.00', 'sem debitos', 1, './img/hillux1.jpg', './img/hillux2.jpg', './img/hillux3.jpg', './img/hillux4.jpg', '2019-06-02 19:30:31'),
(40, 'vw', 'Saveiro 1.6 Flex', 'basico', 4, 2011, 2011, 'preta', 142000, 'oiw-4589', '17000.00', 'Conservado', 1, './img/saveiro1.jpg', './img/saveiro2.jpg', './img/saveiro3.jpg', './img/saveiro4.jpg', '2019-06-02 19:30:31'),
(41, 'fiat', 'Uno 1.4 Flex', 'completo', 4, 2013, 2013, 'prata', 49000, 'der-7745', '37000.00', 'Conservado', 1, './img/uno1.jpg', './img/uno2.jpg', './img/uno3.jpg', './img/uno4.jpg', '2019-06-02 19:30:31'),
(42, 'HONDA', 'HRV 1.8 Flex', 'completo', 2, 2018, 2019, 'preta', 42000, 'der-2014', '39000.00', 'sem debitos', 1, './img/hrv1.jpg', './img/hrv2.jpg', './img/hrv3.jpg', './img/hrv4.jpg', '2019-06-02 19:30:31'),
(43, 'ford', 'Ecosport 1.6 Flex', 'ar + dir', 2, 2013, 2014, 'preta', 122000, 'der-3025', '56000.00', 'Conservado', 1, './img/ecosport1.jpg', './img/ecosport2.jpg', './img/ecosport3.jpg', './img/ecosport4.jpg', '2019-06-02 19:30:31'),
(44, 'fiat', 'strada 1.4 Flex', 'completo', 2, 2011, 2011, 'preta', 42000, 'der-6635', '23000.00', 'Conservado', 1, './img/strada1.jpg', './img/strada2.jpg', './img/strada3.jpg', './img/strada4.jpg', '2019-06-02 19:30:31'),
(45, 'GM', 'Cruze 2.0 Flex', 'ar + dir', 2, 2012, 2013, 'prata', 42000, 'drd-2277', '63000.00', 'Conservado', 1, './img/cruze1.jpg', './img/cruze2.jpg', './img/cruze3.jpg', './img/cruze4.jpg', '2019-06-02 19:30:31'),
(46, 'gm', 'opala', 'impecÃ¡vel', 2, 1975, 1975, 'vermelha', 120000, 'klf-9633', '94000.00', 'carro de colecionador', 0, './img/opala1.jpg', './img/opala1.jpg', './img/opala1.jpg', './img/opala1.jpg', '2019-06-03 10:29:56'),
(54, 'ferrari', '458', 'Carro impecavel', 2, 2009, 2010, 'Vermelha', 25000, 'wuy-9633', '99000.00', 'Sem dÃ©bitos', 0, './img/ferrari1.jpg', './img/ferrari2.jpg', './img/ferrari3.jpg', './img/ferrari4.jpg', '2019-06-03 19:18:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`carro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `carro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
