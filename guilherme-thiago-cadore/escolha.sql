-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Nov-2023 às 13:59
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ppi-historia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolha`
--

DROP TABLE IF EXISTS `escolha`;
CREATE TABLE IF NOT EXISTS `escolha` (
  `id_origem` smallint NOT NULL,
  `id_destino` smallint NOT NULL,
  `descricao_alt` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_origem`,`id_destino`),
  KEY `ce2` (`id_destino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `escolha`
--

INSERT INTO `escolha` (`id_origem`, `id_destino`, `descricao_alt`) VALUES
(1, 2, 'Tentar salvar textos na biblioteca'),
(1, 3, 'Sair do local'),
(2, 4, 'Pega o máximo que puder'),
(2, 5, 'Sair da biblioteca'),
(3, 6, 'Continuar morando com os avós'),
(3, 7, 'Seguir sua vida'),
(4, 8, 'Pegar pergaminho raro de astronomia'),
(4, 9, 'Salvar os textos de filosofia'),
(4, 24, 'Pegar os dois'),
(5, 10, 'Ir para o porto'),
(5, 11, 'Se juntar ao grupo de estudantes'),
(6, 20, 'Ficar com a Clara'),
(6, 21, 'Ficar com a Helena'),
(7, 22, 'Continuar na reconstrução da nova biblioteca'),
(7, 23, 'Ir a uma expedição com o grupo'),
(8, 12, 'Encerrar jornada no Monte Sinai'),
(8, 13, 'Conhecer a menina'),
(9, 14, 'Decide passar seus ensinamentos'),
(9, 15, 'Continuar estudando'),
(10, 16, 'Ir para o Oeste'),
(10, 17, 'Ir para o Nordeste'),
(11, 18, 'Continuar como guardião'),
(11, 19, 'Se tornar diplomata'),
(12, 1, 'voltar ao início'),
(13, 1, 'voltar ao início'),
(14, 1, 'voltar ao início'),
(15, 1, 'voltar ao início'),
(16, 1, 'voltar ao início'),
(17, 1, 'voltar ao início'),
(18, 1, 'voltar ao início'),
(19, 1, 'voltar ao início'),
(20, 1, 'voltar ao início'),
(21, 1, 'voltar ao início'),
(22, 1, 'voltar ao início'),
(23, 1, 'voltar ao início'),
(24, 1, 'voltar ao início');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
