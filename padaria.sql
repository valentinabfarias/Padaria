-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2025 às 14:47
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `turma_202`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `padaria`
--

CREATE TABLE `padaria` (
  `descricao` varchar(45) DEFAULT NULL,
  `codigo` int(11) NOT NULL,
  `valor` float NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `imagem` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `padaria`
--

INSERT INTO `padaria` (`descricao`, `codigo`, `valor`, `id_categoria`, `imagem`) VALUES
('cookie', 6, 5, 2, 'cookie.png'),
('brownie', 7, 8, 2, 'brownie.png'),
('coxinha', 8, 6, 1, 'coxinha.png'),
('enroladinho', 9, 4, 1, 'enroladinho.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `padaria`
--
ALTER TABLE `padaria`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `padaria`
--
ALTER TABLE `padaria`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
