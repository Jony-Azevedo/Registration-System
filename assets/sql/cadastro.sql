-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/05/2023 às 01:54
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `nascimento` varchar(11) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `observacao` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `nascimento`, `cpf`, `celular`, `email`, `endereco`, `observacao`) VALUES
(12, 'Jony Azevedo Batista da Cunha', '2000-10-16', '18003175739', '21980875865', 'azevedo1safe2@gmail.com', 'Rua Ivonete', 'testando dgqergeqrgb'),
(14, 'Francisco Guerra', '2000-09-12', '03317501422', '22980805863', 'franciscoFernando@hotmail.com', 'Rua A n° 36', ''),
(15, 'Andreia Garcia de Paula', '2000-10-15', '75866488922', '41998758657', 'garcia@gmail.com', 'Rua das Flores', 'Dados devem ser alterados'),
(16, 'Renato Barbosa Teixeira', '2001-11-12', '55766893522', '21980875865', 'barbosaFerreira@gmail.com', 'Rua 35', 'Dados corretos\n'),
(19, 'Gabriele Santana de Souza Ferreira', '2002-02-11', '03455866521', '41980882526', 'SantanaGabriele145@gmail.com', 'Rua da esquina n° 88', 'Testando sistema novamente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
