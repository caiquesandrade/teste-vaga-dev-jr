-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 05:20 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zemis`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoas`
--

CREATE TABLE `pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `data_de_nasc` date DEFAULT NULL,
  `estuda` varchar(3) DEFAULT NULL,
  `pretencao_salarial` int(32) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `data_reg` datetime(6) DEFAULT NULL,
  `favorito` enum('s','n') DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`, `email`, `telefone`, `data_de_nasc`, `estuda`, `pretencao_salarial`, `descricao`, `data_reg`, `favorito`) VALUES
(9, 'Caique de Souza Andrade', 'caiquesandrade@live.com', '2499844627', '2004-08-12', 'Cur', 1700, 'bem esperto com JavaScript', '2019-08-30 23:29:54.000000', 's'),
(10, 'Caio Miranda', 'caiosumosinho@gmail.com', '123) 123123123', '2004-08-12', 'Cur', 1231231, '1231231231', '2019-09-01 17:10:40.000000', 'n'),
(11, 'Rose Miranda', 'rosesmiran@gmail.com', '2499844627', '2004-08-12', 'Est', 1231231, 'qweqweqwe', '2019-09-01 23:28:55.000000', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(250) DEFAULT NULL,
  `senha` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `data_reg` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `senha`, `email`, `data_reg`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'caiquesandrade@live.com', '2019-08-29 14:33:30.000000'),
(2, 'teste', '698dc19d489c4e4db73e28a713eab07b', 'teste@teste.com.br', '2019-08-29 14:58:35.000000'),
(6, 'novousuario', '202cb962ac59075b964b07152d234b70', 'novo@novo.com', '2019-08-29 16:14:16.000000'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '2019-08-30 08:21:50.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
