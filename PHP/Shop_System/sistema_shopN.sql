-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/11/2024 às 22:07
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_shop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `quantidade`, `imagem`) VALUES
(1, 'Deus Ex', 'The year is 2052 and the world is a dangerous and chaotic place. Terrorists operate openly - killing thousands; drugs, disease and pollution kill even more. The world\'s economies are close to collapse and the gap between the insanely wealthy and the desperately poor grows ever wider. Worst of all, an ages old conspiracy bent on world domination has decided that the time is right to emerge from the shadows and take control.', 110.00, 4, '672d28b32d22f-deusex.jpg'),
(2, 'Baldur\'s Gate', 'Forced to leave your home under mysterious circumstances, you find yourself drawn into a conflict that has the Sword Coast on the brink of war.\r\n\r\nYour view of the world has been limited to the heavily fortified walls of Candlekeep. Your foster father, Gorion, has done everything in his power to protect you, and keep you out of harm’s way. All that is about to change...', 250.00, 2, '672d29060d152-BG.png'),
(3, 'Planescape: Torment', '\"What can change the nature of a man?\"\r\n\r\nYou are the Nameless One, a hulking figure covered in scars and tattoos collected over the course of countless lives—none of which you can remember, but are now coming back to haunt you. You are prodded awake by Morte, a floating skull and keeper of secrets, to embark on an adventure taking The Nameless One from the dirty streets of Sigil into the mysterious Outer Planes and even into the depths of Hell itself.\r\n', 310.00, 1, '672d2a37012dc-Planescape.jpg'),
(4, 'Half-Life', 'Named Game of the Year by over 50 publications, Valve\'s debut title blends action and adventure with award-winning technology to create a frighteningly realistic world where players must think to survive. Also includes an exciting multiplayer mode that allows you to play against friends and enemies around the world.', 333.00, 3, '672d2a96eb05f-HL.jpg'),
(5, 'Quake', 'You are Ranger, a warrior armed with a powerful arsenal of weapons. Fight corrupted knights, deformed ogres and an army of twisted creatures across four dark dimensions of infested military bases, ancient medieval castles, lava-filled dungeons and gothic cathedrals in search of the four magic runes. Only after you have collected the runes will you hold the power to defeat the ancient evil that threatens all of humanity.', 89.00, 6, '672d2ba6d80f5-Quake.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel_acesso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel_acesso`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$QVUUP4MX8P60mS5Q7.JMeuQY5G0VO1NNpXCbCTIn2KdW/rviPp8tm', 'ADMINISTRADOR'),
(2, 'usuario', 'usuario@gmail.com', '$2y$10$HZ9rWpdUwjPbsN6q8DQal.4QZU.tOtvOkB6PomYf5DP7sLWcI636C', 'COMUM');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
