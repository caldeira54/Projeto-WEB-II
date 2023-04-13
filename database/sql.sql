-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 13-Abr-2023 às 12:20
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `projetoaulai3b2023`
--
CREATE DATABASE IF NOT EXISTS `projetoaulai3b2023` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projetoaulai3b2023`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `fabricante` varchar(128) NOT NULL,
  `modelo` varchar(128) NOT NULL,
  `ano` int(11) NOT NULL,
  `placa` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `fabricante`, `modelo`, `ano`, `placa`) VALUES
(1, 'Ford', 'Maverick', 2023, '0'),
(2, 'Volkswagen', 'Passati', 2022, 'PAS-4525'),
(4, 'Ford', 'Maverick', 2023, '0'),
(5, 'Ford', 'Maverick', 2023, 'QHU-9852'),
(6, 'Gomes Car', 'Tiluquinha', 2023, 'BTX-2565'),
(7, 'Gomes Car', 'Xarui', 2023, 'BTX-2565'),
(8, 'Blitz', 'Xarui', 2023, 'BTX-2565');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;