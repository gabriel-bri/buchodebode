-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Maio-2019 às 00:25
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buchodebode`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `nome_adm` varchar(20) DEFAULT NULL,
  `senha` varchar(160) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `profile_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`, `telefone`, `nascimento`, `profile_picture`) VALUES
(1, 'vj', 'black@gmail.com', '123', NULL, NULL, ''),
(2, 'Gabriel Brito da Cruz', 'rir@gma.com', '$2y$10$zVUwgxUg/PqCh97KJS9nduGHR0l2HOPpq4SsIc0Q41e2Pb3fK.aoe', '3939', '2000-10-10', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(3, 'fkkf', 'fkfk@gma.com', '$2y$10$L7tOwJdmae4AiTptDCWwOONGfqukgPlGc3HUsyfAlYJPJKk8koroi', '3939', '2000-10-20', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(4, 'Gabriel Brito da Cruz', 'gabrielbritodacruz@protonmail.com', '$2y$10$Jmxpm.JRUty0vN99aY.VgOgHhRu.xAZLq7mFqD3Z0cSVuKiTCZ3sa', '8888888', '2000-01-10', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(5, 'gkkg', 'roro@gka.com', '$2y$10$jeheV6c.aGqcaEpc4DeT3uKw23rx00s1A17zPAGcTdQGM1JiSF.3K', '3939', '2000-10-10', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(6, 'r', 'fk@cin.cin', '18a98c35f49808b45edadc75fb1b25ebfd4037d6', NULL, NULL, ''),
(7, 'Gabriel Brito da Cruz', 'gugocejivu@blackbird.ws', '$2y$10$ZbvmtkhRRbGUXUCd3D1nyOMlSMRxI/.Ius53mqWTj4Zj0uiYc1rp2', '93939', '2000-10-10', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(8, 'alert(&#39;oi&#39;);', 'g@cc.com', '$2y$10$qioMVTqaTQVz8NA2LzBBxOeb6oxmr10mFZiu/a5WoOKE1pstH3VoC', '29929', '2000-10-10', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(9, 'alert(&#39;oi&#39;)', 'eiie@mgcom.com', '$2y$10$ZWzm6B0o.PoEPuHGQVbEQuHQNZxtbYehKtf3.vkKCZrPPgSX5C9N2', '2929', '2000-02-11', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(10, 'Gabriel Brito da Cruz', 'gabrie@flip.comboror', '$2y$10$SQDymLh2vJ0uyuiMPXdjFOVwgN16QhHkoZLEP8OUwuJ.U37TjeONC', '3939', '2000-10-10', '1a37261345f71070617702b2222cd8653fa481cb.jpg'),
(11, 'Gabriel Brito da Cruz', 'teste@gmail.com', '$2y$10$eWoAO.RQxFyZEHllkGmeIeWNprnBqL8mTr.R8PnUKb9BuBfpe.Cme', '333', '2000-10-10', '1a37261345f71070617702b2222cd8653fa481cb.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `dia` date DEFAULT NULL,
  `nome_evento` varchar(20) DEFAULT NULL,
  `desc_evento` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `n_mesa` int(11) NOT NULL,
  `horario` date DEFAULT NULL,
  `reservado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`n_mesa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `n_mesa` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
