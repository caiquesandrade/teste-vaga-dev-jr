-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Ago-2019 às 17:21
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
-- Database: `zemis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
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
  `data_reg` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`, `email`, `telefone`, `data_de_nasc`, `estuda`, `pretencao_salarial`, `descricao`, `data_reg`) VALUES
(3, '22', '22@222', '24 998446276', '0000-00-00', 'Fac', 1200, 'Muito bom', '2019-08-30 15:01:04.000000'),
(4, 'teste de ediÃ§Ã£o', 'teste@teste', '12123123', '2001-03-24', 'Fac', 1200, 'Muito bom', '2019-08-30 08:33:29.000000'),
(5, 'teste fecha e atualzia', 'teste.de.edicao@hotmail.com', '24 998446276', '1994-03-24', 'Fac', 3500, '0', '2019-08-30 08:38:40.000000'),
(6, 'kakak', 'kakak@kakaka', '24 2424-2424', '0000-00-00', 'Fac', 5000, 'O cara Ã© fera demais', '2019-08-30 08:40:44.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(250) DEFAULT NULL,
  `senha` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `data_reg` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
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
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
