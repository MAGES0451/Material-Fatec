CREATE DATABASE sistema_shop;

USE sistema_shop;

DROP DATABASE sistema_shop;

-- Tabela usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    nivel_acesso VARCHAR(255) NOT NULL
);

-- Tabela produtos
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    categoria VARCHAR(55),
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL,
    imagem VARCHAR(255) NOT NULL
);

-- Usuários cadastrados
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel_acesso`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$QVUUP4MX8P60mS5Q7.JMeuQY5G0VO1NNpXCbCTIn2KdW/rviPp8tm', 'ADMINISTRADOR'),
(2, 'usuario', 'usuario@gmail.com', '$2y$10$HZ9rWpdUwjPbsN6q8DQal.4QZU.tOtvOkB6PomYf5DP7sLWcI636C', 'COMUM');

-- Produtos cadastrados
INSERT INTO `produtos` (`id`, `nome`, `descricao`,`categoria`, `preco`, `quantidade`, `imagem`) VALUES
(1, 'Deus Ex', 'The year is 2052 and the world is a dangerous and chaotic place. Terrorists operate openly - killing thousands; drugs, disease and pollution kill even more. The world\'s economies are close to collapse and the gap between the insanely wealthy and the desperately poor grows ever wider. Worst of all, an ages old conspiracy bent on world domination has decided that the time is right to emerge from the shadows and take control.','immersive sim', 110.00, 4, '672d28b32d22f-deusex.jpg'),
(2, 'Baldur\'s Gate', 'Forced to leave your home under mysterious circumstances, you find yourself drawn into a conflict that has the Sword Coast on the brink of war.\r\n\r\nYour view of the world has been limited to the heavily fortified walls of Candlekeep. Your foster father, Gorion, has done everything in his power to protect you, and keep you out of harm’s way. All that is about to change...','RPG', 250.00, 2, '672d29060d152-BG.png'),
(3, 'Planescape: Torment', '\"What can change the nature of a man?\"\r\n\r\nYou are the Nameless One, a hulking figure covered in scars and tattoos collected over the course of countless lives—none of which you can remember, but are now coming back to haunt you. You are prodded awake by Morte, a floating skull and keeper of secrets, to embark on an adventure taking The Nameless One from the dirty streets of Sigil into the mysterious Outer Planes and even into the depths of Hell itself.\r\n','RPG', 310.00, 1, '672d2a37012dc-Planescape.jpg'),
(4, 'Half-Life', 'Named Game of the Year by over 50 publications, Valve\'s debut title blends action and adventure with award-winning technology to create a frighteningly realistic world where players must think to survive. Also includes an exciting multiplayer mode that allows you to play against friends and enemies around the world.','FPS', 333.00, 3, '672d2a96eb05f-HL.jpg'),
(5, 'Quake', 'You are Ranger, a warrior armed with a powerful arsenal of weapons. Fight corrupted knights, deformed ogres and an army of twisted creatures across four dark dimensions of infested military bases, ancient medieval castles, lava-filled dungeons and gothic cathedrals in search of the four magic runes. Only after you have collected the runes will you hold the power to defeat the ancient evil that threatens all of humanity.','FPS', 89.00, 6, '672d2ba6d80f5-Quake.jpg');


SELECT * FROM usuarios;

SELECT * FROM produtos;