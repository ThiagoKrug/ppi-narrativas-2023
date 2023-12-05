-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Dez-2023 às 22:16
-- Versão do servidor: 8.0.31
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cidade_perdida`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consequencia`
--

DROP TABLE IF EXISTS `consequencia`;
CREATE TABLE IF NOT EXISTS `consequencia` (
  `id_consequencia` int NOT NULL,
  PRIMARY KEY (`id_consequencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `consequencia`
--

INSERT INTO `consequencia` (`id_consequencia`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77),
(78),
(79),
(80),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88),
(89),
(90),
(91),
(92),
(93),
(94),
(95),
(96),
(97),
(98),
(99),
(100),
(101),
(102),
(103),
(104),
(105),
(106),
(107),
(108),
(109),
(110),
(111),
(112),
(113),
(114),
(115),
(116),
(117),
(118),
(119),
(120),
(121),
(122),
(123),
(124),
(125),
(126),
(127),
(128),
(129),
(130),
(131),
(132),
(133),
(134),
(135),
(136);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolha`
--

DROP TABLE IF EXISTS `escolha`;
CREATE TABLE IF NOT EXISTS `escolha` (
  `id_escolha` int NOT NULL,
  `escolha` varchar(255) DEFAULT NULL,
  `id_consequencia` int DEFAULT NULL,
  `id_historia` int NOT NULL,
  PRIMARY KEY (`id_escolha`),
  KEY `id_consequencia` (`id_consequencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `escolha`
--

INSERT INTO `escolha` (`id_escolha`, `escolha`, `id_consequencia`, `id_historia`) VALUES
(0, 'Continuar', 2, 1),
(1, 'Abrir o baú', 3, 2),
(2, 'Mostrar a carta para a mãe', 27, 2),
(3, 'Contar para a família', 28, 3),
(4, 'Não contar para a família', 29, 3),
(5, 'Ir pela ponte de Madeira:', 30, 5),
(6, 'Levar a chave, um Santo e um livro:', 5, 4),
(7, 'Levar a bússola, um santo e um livro', 39, 4),
(8, 'Ir de Balsa: ', 31, 5),
(9, '“I don’t speak English”:', 32, 6),
(10, ' “I would love that”:', 33, 6),
(11, 'Continuar escutando Eliot:', 34, 7),
(12, 'Ir até a igreja:', 35, 7),
(13, 'Procurar na volta da igreja:', 36, 8),
(14, 'Procurar no altar: ', 37, 8),
(15, 'Continuar', 9, 0),
(17, 'Contar a Eliot:', 40, 10),
(18, 'Alex parte para a trilha:', 41, 10),
(19, 'Continuar o caminho: ', 42, 11),
(20, 'Trocar o caminho:', 43, 11),
(21, 'Dormir em cima da árvore:', 44, 13),
(22, 'Dormir na casa abandonada: ', 45, 13),
(23, 'Comer a maçã: ', 46, 14),
(24, 'Não comer a maçã: ', 47, 14),
(25, 'Suas costas estão apontadas', 48, 15),
(26, 'Seu peito está apontado', 49, 15),
(27, 'Tentar enxergar Nicarau', 50, 16),
(28, ' Ignorar a vista', 51, 16),
(29, ' Continuar até o próximo ponto', 52, 17),
(30, 'Aproveitar o espaço aberto', 53, 17),
(31, 'Ir nas construções', 54, 20),
(32, 'Ir na pirâmide', 55, 20),
(33, ' Abrir a lápide', 56, 21),
(34, 'Sair da pirâmide', 57, 21),
(35, 'Continuar lendo o livro', 58, 23),
(36, ' Entrar na catacumba', 59, 23),
(37, 'Abrir o baú', 25, 24),
(38, 'Continuar', 4, 29),
(39, 'Continuar', 6, 31),
(40, 'Continuar', 7, 33),
(41, 'Continuar', 8, 35),
(42, 'Continuar\r\n', 9, 37),
(43, 'Continuar', 11, 41),
(44, 'Continuar', 10, 9),
(53, 'Continuar', 12, 43),
(54, 'Continuar', 13, 12),
(55, 'Continuar', 14, 45),
(57, 'Continuar', 15, 47),
(59, 'Synopsis in English', 62, 61),
(62, 'To go back', 61, 62),
(64, 'Continuar', 16, 49),
(65, 'Continuar', 17, 51),
(67, 'Continuar', 18, 53),
(69, 'Continuar', 19, 18),
(70, 'Continuar', 20, 19),
(71, 'continuar', 21, 55),
(72, 'Continuar', 23, 57),
(73, 'Continuar', 24, 59),
(78, 'Open the chest', 77, 76),
(79, 'Show the letter to his mother', 78, 76),
(80, 'Tell the family', 80, 79),
(81, 'Not tell the family', 81, 79),
(82, 'Take the key, a saint, and a book', 83, 82),
(83, 'Take the compass, a saint, and a book', 136, 82),
(84, 'Take the Ferry', 85, 83),
(85, 'Go across the Wooden Bridge', 84, 83),
(86, '“I would love that”', 88, 86),
(87, '\"I don\'t speak English\"', 87, 86),
(88, 'Continue listening to Eliot', 90, 89),
(89, 'Go to the church', 91, 89),
(90, 'Look around the church', 93, 92),
(91, 'Look at the altar', 94, 92),
(92, 'Tell Eliot', 99, 98),
(93, 'Continue on the path', 102, 101),
(94, 'Head to the trail', 100, 98),
(95, 'Sleeping in the tree', 106, 105),
(96, 'Change the path', 103, 101),
(97, 'Eating the apple', 109, 108),
(98, 'Sleeping in the abandoned house', 107, 105),
(99, 'His back is pointing', 112, 111),
(100, 'Not eating the apple', 110, 108),
(101, 'Trying to see Nicarau', 115, 114),
(102, 'His chest is pointing', 113, 111),
(103, 'Ignoring the view', 116, 114),
(104, 'Continuing to the next point', 118, 117),
(105, 'Taking advantage of the open space', 119, 117),
(106, 'Exploring the structures', 123, 122),
(107, 'Opening the tombstone', 127, 125),
(108, 'Going to the pyramid', 124, 122),
(109, 'Continuing to read the book', 130, 129),
(110, 'Leaving the pyramid', 128, 125),
(111, 'Entering the catacomb', 131, 129),
(112, 'Opening the chest', 133, 132),
(134, 'Continue', 76, 75),
(135, 'Continue', 79, 77),
(136, 'Continue', 82, 81),
(137, 'Continue', 86, 85),
(138, 'Continue', 89, 88),
(139, 'Continue', 92, 91),
(140, 'Continue', 95, 94),
(141, 'Continue', 98, 95),
(142, 'Continue', 101, 100),
(143, 'Continue', 104, 103),
(144, 'Continue', 105, 104),
(145, 'Continue', 108, 107),
(146, 'Continue', 111, 110),
(147, 'Continue', 114, 113),
(148, 'Continue', 117, 116),
(149, 'Continue', 120, 119),
(150, 'Continue\r\n', 121, 120),
(151, 'Continue', 122, 121),
(152, 'Continue', 125, 124),
(153, 'Continue\r\n', 129, 128),
(154, 'Continue', 132, 131),
(155, 'Continuar', 134, 25),
(156, 'Continue', 135, 133),
(157, 'Fim de Jogo!', 1, 27),
(158, 'Fim de Jogo!', 1, 28),
(159, 'Fim de Jogo!', 1, 30),
(160, 'Fim de Jogo!', 1, 39),
(161, 'Fim de Jogo!', 1, 32),
(162, 'Fim de Jogo!', 1, 34),
(163, 'Fim de Jogo!', 1, 36),
(164, 'Fim de Jogo!', 1, 40),
(165, 'Fim de Jogo!', 1, 42),
(166, 'Fim de Jogo!', 1, 44),
(167, 'Fim de Jogo!', 1, 46),
(168, 'Fim de Jogo!', 1, 48),
(169, 'Fim de Jogo!', 1, 50),
(170, 'Fim de Jogo!', 1, 52),
(171, 'Fim de Jogo!', 1, 54),
(172, 'Fim de Jogo!', 1, 56),
(173, 'Fim de Jogo!\r\n', 1, 58),
(174, 'Game Over!', 75, 78),
(175, 'Game Over!', 75, 80),
(176, 'Game Over!', 75, 136),
(177, 'Game Over!', 75, 84),
(178, 'Game Over!', 75, 87),
(179, 'Game Over!', 75, 90),
(180, 'Game Over!', 75, 93),
(181, 'Game Over!', 75, 99),
(182, 'Game Over!', 75, 102),
(183, 'Game Over!', 75, 106),
(184, 'Game Over!', 75, 109),
(185, 'Game Over!', 75, 112),
(186, 'Game Over!', 75, 115),
(187, 'Game Over!', 75, 118),
(188, 'Game Over!', 75, 123),
(189, 'Game Over!', 75, 127),
(190, 'Game Over!', 75, 130);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `id_historia` int NOT NULL AUTO_INCREMENT,
  `texto` mediumtext,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_historia`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`id_historia`, `texto`, `imagem`) VALUES
(1, 'Alex era um menino muito curioso que adorava aventuras. Ele havia completado recentemente seus 18 anos de idade e se formado no Ensino Médio. Um de seus sonhos era se tornar um historiador seguindo os passos de seu falecido avô.\r\nAlexandre era um grande historiador dos anos 90, famoso por uma de suas teorias sobre uma cidade perdida. Alex e seu avô Alexandre eram muito próximos e por conta disto despertou em Alex o desejo de também ser um historiador como o seu avô e descobrir sobre a cidade perdida de que ele tanto lhe falava.\r\n	No dia 18 de agosto de 2021, Alex, ao chegar em casa após a escola, recebeu a triste notícia de sua mãe que seu avô havia falecido, vítima de um dos grandes surtos do vírus da COVID-19. A tese mais aceita seria que o vírus passou do morcego para um mamífero intermediário, e dele para o principal hospedeiro, o ser humano.\r\n\r\n\r\n', 'imagens/introducao.jpg'),
(2, 'Dois anos depois da morte de seu avô, Alex recebe uma carta junto com uma caixa de sua mãe, que foi deixada por seu avô antes de falecer em forma de herança. Alex lê a carta na qual dizia: “Meu querido neto, creio que fui um homem de poucas posses e durante minha vida acumulei uma coleção de coisas que para muitos não teriam valor. Mas, para um jovem historiador como tu, esses objetos poderiam revelar segredos fascinantes do passado. A estrada que escolheste seguir, a de um historiador, é uma jornada cheia de surpresas, reviravoltas e descobertas incríveis. Não temas o desconhecido, meu neto, pois é nele que os melhores segredos estão escondidos. O baú é apenas o começo. Do outro lado da vida, com amor e um toque de mistério, teu avô.\"\n', 'imagens/bauecarta.png'),
(3, 'Ao abrir o baú Alex observa vários objetos embaralhados os quais chamam muito sua atenção, como uma antiga bússola, uma imagem do Santo Isidoro de Sevilha, padroeiro dos historiadores e dos internautas no qual seu avô tinha muita devoção e uma chave enferrujada, que por conta de morar em um ambiente úmido, a chave sofreu uma reação de oxirredução. No fundo desse baú, chamou sua atenção um antigo mapa que estava coberto de pó. Muito curioso Alex começa a analisá-lo.\nAlex achou o mapa muito interessante e sentiu-se instigado para ir em busca dos segredos que aquele mapa trazia.', 'imagens/mapanicarau.png'),
(4, 'Alex vai arrumar sua mochila para ir em busca dos segredos que há no mapa. Sem muito saber o que levar por não saber o que lhe espera, Alex pega primeiramente roupas e depois decide levar alguns objetos que encontrou no baú de seu avô.', 'imagens/mochila.jpg'),
(5, 'Alex, com suas coisas arrumadas, compra uma passagem de ônibus para a cidade mais próxima do ‘X’ no mapa. No caminho da longa viagem, Alex analisa o mapa novamente e percebe que há no verso um nome masculino escrito, sendo visível quando posto contra a luz. Chegando na cidade, Alex descobre que o ‘X’ se trata de um vilarejo chamado Nicarau e que, para chegar até o local, é necessário atravessar um rio.\r\n', 'imagens/mapanicarau.png'),
(6, 'Chegando ao pequeno porto de Nicarau, Alex decide ir em busca do nome escrito no mapa. Ao sair do atracamento, Alex encontra uma feirinha muito movimentada. Partindo para lá decide perguntar a alguém sobre o nome que havia no mapa. Chamou sua atenção dentre várias barracas uma que vendia artigos religiosos. quando de repente um vendedor de peixe lhe abordou: \n– americano: ‘Hi, do you need any help\n- alex: “Yes, please”\n-alex: \"Do you  know Eliot Castillo?”\n-americano: “Do you want me to take you to the missionary?”\nAlex responde:\n', 'imagens/chegadanicarau.png'),
(7, 'Chegando na casa de Eliot Castillo, Alex mostra o mapa de seu avô e pergunta o porquê de seu nome estar escrito nele. Eliot então, conta para Alex sobre sua amizade com o seu avô Alexandre quando o ajudava a desvendar mistérios sobre o vilarejo. Eliot também comenta que a vila é composta por grande parte de missionários. Tendo culturalmente o hábito de realizar grandes missas na catedral da cidade, onde todos sempre participam. Eliot começa a falar mal do vilarejo para Alex e afirma que estar ali é perda de tempo.', 'imagens/eliotcastillo.png'),
(8, 'Chegando na igreja, Alex nota que o nome da catedral é o mesmo do santo que seu avô era devoto: Santo Isidoro de Sevilha. Então decide entrar na igreja e fica encantado com a estrutura do local. Em seguida, decide procurar alguma pista.', 'imagens/catedral.png'),
(9, 'Alex percebe que o relicário era do Santo Isidoro de Sevilha. Ao se aproximar muito intrigado, nota uma espécie de fenda que mais parecia uma fechadura, Alex lembra da chave que havia encontrado no baú.\r\n\r\n', 'imagens/relicario.png'),
(10, 'Alex usa a chave que trouxe e abre o relicário. Dentro encontra um novo baú, decide abrir e descobre um novo mapa sobre uma cidade desconhecida, mas para chegar até ela é necessário passar pela floresta.\r\n', 'imagens/mapatikal.png'),
(11, 'Alex partiu ao primeiro ponto do mapa por uma trilha aparentemente segura, já que o caminho da trilha não era tão inclinado até então. Alex caminhou por um tempo até encontrar um trecho onde não sabia como prosseguir.\n', 'imagens/iniciotrilha.png'),
(12, 'Alex chega ao primeiro ponto do mapa e encontra uma placa avisando que a trilha é perigosa.', 'imagens/placa.png'),
(13, 'Alex ignorou a placa e continuou seu caminho pela trilha porém, com receio por conta do sol que já estava se pondo. Alex apressa o passo para o próximo ponto de referência do mapa para passar a noite. Chegando lá, Alex vê um conjunto de ruínas, o que parecia uma antiga casa, então decide:', 'imagens/ruina.png'),
(14, 'Ao amanhecer, Alex continua seu caminho para desbravar aquela trilha em busca do próximo “X”. Ao seguir a caminhada Alex encontra uma macieira com vários frutos. Apesar da fome, estava com medo de as frutas não lhe fazerem bem.\r\n', 'imagens/macieira.png'),
(15, 'Alex continua seu trajeto por um tempo, até encontrar uma espécie de trevo onde tinha dois caminhos. Olhando para o mapa ele descobre que precisa ir para o Norte, ele está de frente para o sol nascente e então ao abrir seus braços e apontar seu braço direito para o sol Alex deverá escolher o caminho para o qual:', 'imagens/trevo.png'),
(16, 'Ao escolher o caminho certo, Alex continua bravamente a trilha agora cada vez mais íngreme. Ao chegar em certo ponto de seu caminho, Alex nota a elevação no relevo em relação à área de onde partiu, então conclui que se trata de uma montanha. Ao continuar Alex descobre que o novo ponto se trata de um mirante um pouco turvo pela mata que vinha avançando. Alex então decide ir ver a vista onde nota um alto precipício e ao fundo, tapado pelas árvores, algo que parecia o vilarejo de onde partiu.', 'imagens/mirante.png'),
(17, 'Alex segue a trilha em meio à mata cada vez mais fechada e um árduo caminho de areia. Já cansado, com sede e muito calor pela exposição ao sol, continua a trilha até chegar a um espaço limpo de mata, mas com muita sombra por conta das altas árvores que impedem a radiação solar direta. Então Alex decide:', 'imagens/descanso.png'),
(18, 'Após descansar, Alex continuou seu trajeto até encontrar a rocha descrita no mapa. Quando de repente avistou uma rocha esculpida, com um formato de um rosto, Alex entendeu que a rocha descrita no mapa se tratava de um rosto e então imaginou que poderia estar chegando ao seu destino.', 'imagens/pedraesculpida.png'),
(19, 'Ao continuar seu caminho, Alex percebe que a mata já era menos densa, e logo ele começou a avistar ruínas que pareciam pirâmides e templos feitos de pedra. Chegando ao que parecia ser uma grande entrada, Alex nota uma sequência de símbolos esculpidos em uma pedra ao lado de algo que se parecia um portão. Os desenhos eram parecidos com um abecedário que tinha no livro que seu avô lhe deu, então Alex teve a ideia de tentar traduzir o que estava escrito:', 'imagens/portao.jpg'),
(20, 'Alex descobre que a cidade “perdida” se trata de uma antiga cidade maia da era clássica chamada Tikal. Com isso, lembrou que seu falecido avô falava sobre as cidades maias que tinham muita influência em toda mesoamérica, também conhecidas por suas grandes pirâmides e construções de arquitetura única.', 'imagens/tikal.jpg'),
(21, 'Alex subiu as escadas da pirâmide e chegando no topo em um local que parecia ser um templo, avistou uma lápide. Intrigado, Alex se aproximou para ler e entender do que se tratava.\r\nAlex acha estranho a mensagem na lápide por não estar na linguagem maia e conclui que aquilo pode ter sido posto por seu avô como forma de uma pista para desvendar o mistério.', 'imagens/lapidepiramede.png'),
(23, 'Alex após entender o enigma que seu avô havia deixado na lápide, vai em busca da ruína de número 750. Ao andar pelas ruínas de Tikal, Alex encontra algo que poderia ser o local de número 750, então decide entrar e procurar por pistas. \r\n	Ao entrar, Alex se lembra do livro de seu avô que trouxe junto dele, e ao folheá-lo se apoiou em uma das grandes pedras que havia no local. Sem querer aciona um mecanismo que abre uma porta para o subterrâneo. \r\n', 'imagens/escadaria.png'),
(24, 'Andando em meio a túneis e ossários, Alex decide então acender uma tocha para explorar a catacumba. Ao andar, Alex percebe que existe um padrão numérico para cada sala e decide procurar novamente pelo número 750. \r\nEm busca desta sala, Alex só consegue enxergar aquilo que o fogo da tocha ilumina. Ao longo de seu percurso Alex sentia cada vez mais medo ao passar por diversos esqueletos cobertos por jóias, roupas e poeira. \r\nEntão Alex encontra a sala com o número 750, a qual não possuía ossos, era mais vazia e diferente das outras pelas quais havia passado naquele subterrâneo. Alex começou a procurar pelas paredes vazias algo que pudesse fazer sentido, quando de repente um reflexo de luz vindo de uma fechadura brilha o olho dele. Alex nota que há um baú no centro da sala em cima de um velho pedestal. Alex se choca por ver seu nome escrito no baú, com a situação Alex tem suas emoções afloradas e com aquilo que parecia ser o final de sua jornada, Alex pensa que ao abrir o baú tudo fará sentido, ele descobrirá por que seu avô fez com que ele passasse por tudo e o que ele ganharia com isso…', 'imagens/baufinal.png'),
(25, 'Alex escuta seu despertador tocar e ouve sua mãe lhe chamando desesperadamente para aula, avisando que seu avô Alexandre vai levá-lo para escola.', 'imagens/final.jpg'),
(27, 'Sua mãe, ao ler a carta, se sente assustada e com medo de seu filho Alex ir atrás das coisas passadas de seu avô e guarda o baú em um local onde Alex não pode encontrá-lo. ', NULL),
(28, 'Alex decide contar à sua família que iria partir em busca dos segredos de seu avô, pois acha que sua missão é seguir o legado dele. Sua família não concorda com a ideia pois acha muito arriscado Alex ir em busca de algo que ele não sabe o que encontrar. Por fim, Alex decide desistir da ideia por influência da família. ', NULL),
(29, 'Alex pensa que sua família não entenderia sua missão e decide não falar a verdade, ao contrário diz que vai viajar com suas economias de férias para a casa de um amigo.   ', 'imagens/viagemamigo.jpg'),
(30, 'Alex decide atravessar o rio pela antiga ponte da cidade. No meio do percurso, com Alex em cima da ponte, as madeiras já podres começam a estalar e por fim, quase no final, a ponte desmorona e Alex cai no rio. ', NULL),
(31, 'Alex decide pegar a balsa para atravessar o rio e enfim chegar no vilarejo.\r\n', 'imagens/balsa.jpg'),
(32, 'Alex decide ignorar o vendedor “americano” e acaba não encontrando Eliot.', NULL),
(33, 'Alex aceita a ajuda e vai com o americano até Eliot Castillo.\r\n', NULL),
(34, 'Alex cai no papo de Eliot e desanima com o que ouve de Nicarau, e pensa que realmente pode ser perda de tempo.', NULL),
(35, 'Alex decide continuar seu caminho e vai até a igreja.\r\n', NULL),
(36, 'Alex desvia do seu caminho e acaba não entendendo as pistas.', NULL),
(37, 'Alex analisa o altar entre mesas, velas e toalhas por um tempo até que chega a um canto do altar enxergando um relicário quase escondido na parede da igreja.\r\n', 'imagens/altar.jpg'),
(39, 'Alex não se atentou aos sinais que havia no mapa e acabou escolhendo levar a bússola ao invés da chave que será crucial mais para frente!', NULL),
(40, 'Alex volta para a casa de Eliot para contar-lhe que encontrou um novo mapa, com uma cidade desconhecida. Eliot ao ver o mapa se mostra outra pessoa e decide roubar o mapa de Alex.', NULL),
(41, 'Alex decide ir direto ao início da trilha indicado no mapa. \r\n', 'imagens/trilha.jpg'),
(42, 'Alex continuou o caminho e descobriu que estava pisando em areia movediça e acabou afundando até não sobreviver mais.', NULL),
(43, 'Alex continuou por pedras que costeavam o caminho.\r\n', 'imagens/pedrasnocaminho.jpg'),
(44, 'Alex decide passar a noite em cima da árvore e com isso acaba sendo picado por uma cobra venenosa.', NULL),
(45, 'Alex decide passar a noite em uma casa abandonada onde ele encontra um lampião para não ficar no breu.', 'imagens/dormircasaabandonada.jpg'),
(46, 'Alex decide comer a maçã e acaba se envenenando com ela.', NULL),
(47, 'Alex decide não comer a maçã pois fica com medo de acabar se envenenando. Então ele prefere ficar com fome.', 'imagens/maçaenvenenada'),
(48, 'Alex não soube se guiar e acabou escolhendo o caminho errado .', NULL),
(49, 'Alex conseguiu ter noção de orientação e consegui escolher o caminho correto.\r\n', NULL),
(50, 'Alex se aproxima da beira do mirante e ao pisar em falso desaba precipício abaixo. ', NULL),
(51, 'Alex decide ao invés de perder tempo, continuar sua jornada em busca da cidade apontada no mapa.', NULL),
(52, ' Alex decide continuar para chegar mais rápido ao seu destino e acaba afetado pela irradiação dos raios UVA e morre de insolação, cansaço, fome e sede. ', NULL),
(53, 'Alex opta por parar para descansar, aproveitando que embaixo das árvores é uma zona de ar com temperatura menor para beber água e comer um lanche. ', NULL),
(54, 'Alex decide olhar as  construções de perto e com isso aciona uma armadilha ali construída e acaba ficando preso.', NULL),
(55, 'Alex acaba mais curioso com a grande pirâmide então decide ir até ela.\r\n', NULL),
(56, 'Alex, ao abrir a lápide acaba fraturando o pulso e sem encontrar nada, acaba se frustrando e com muita dor decide voltar para casa. ', NULL),
(57, 'Alex, ao sair da pirâmide decide então procurar pela casa de número 750 com a esperança de encontrar algo ou explicações relacionadas ao seu avô.\r\n', 'imagens/residencia750.jpg'),
(58, 'Alex continua lendo o livro, quando de repente a catacumba se fecha e Alex não consegue mais abri-la.', NULL),
(59, 'Alex prontamente desce as escadas do subterrâneo para explorar a catacumba. \r\n', 'imagens/cata.jpg'),
(60, 'Relógio toca.', NULL),
(61, 'Na trama do jogo, acompanhamos Alex, um jovem aspirante a historiador determinado a seguir os passos de seu avô. Em sua jornada, você deverá ajudar ele a enfrentar enigmas desafiadores ao buscar a herança misteriosa deixada por Alexandre, seu avô. Munido de coragem, um mapa e um sonho, Alex embarca na busca pela cidade perdida, desvendando os mistérios e desafios ao longo do caminho.\r\n	O objetivo do jogo é conduzir Alex através de sua emocionante jornada incentivando os jogadores a explorar e superar desafios para alcançar o máximo possível, em meio a diversas formas de morrer. A narrativa envolvente instiga a curiosidade dos jogadores em desvendar os mistérios que permeiam a cidade perdida. Ao final, compreenda o propósito da misteriosa herança de Alexandre.\r\n', NULL),
(62, 'In this plot, we follow Alex, a young aspiring historian determined to follow in his grandfather\'s footsteps. Throughout his journey, you will need to help him confront challenging puzzles while seeking the mysterious inheritance left by his grandfather, Alexandre. Armed with courage, a map, and a dream, Alex embarks on a quest for the lost city, unraveling mysteries and facing challenges along the way.\r\nThe objective of the game is to guide Alex through his thrilling journey, encouraging players to explore and overcome challenges to reach the highest possible outcome, amidst various ways to perish. The engaging narrative sparks players\' curiosity to unravel the mysteries that surround the lost city, ultimately understanding the purpose behind Alexandre\'s mysterious inheritance.\r\n', NULL),
(75, 'Alex was a very curious boy who loved adventures. He had recently turned 18 and graduated from high school. One of his dreams was to become a historian, following in the footsteps of his late grandfather.\r\nAlexandre was a prominent historian from the 90s, famous for one of his theories about a lost city. Alex and his grandfather Alexandre were very close, and this proximity sparked in Alex the desire to become a historian like his grandfather and uncover the lost city he often spoke about.\r\nOn August 18, 2021, upon returning home from school, Alex received the sad news from his mother that his grandfather had passed away, a victim of one of the major outbreaks of the COVID-19 virus. The most accepted theory was that the virus passed from bats to an intermediate mammal and then to humans, the main host.\r\n', 'imagens/introducao.jpg'),
(76, 'Two years after his grandfather\'s death, Alex receives a letter along with a box from his mother, left by his grandfather as part of his inheritance. Alex reads the letter, which said, \"My dear grandson, I believe I was a man of few possessions, and throughout my life, I amassed a collection of things that many would deem worthless. However, for a young historian like yourself, these objects could reveal fascinating secrets from the past. The path you\'ve chosen, that of a historian, is a journey full of surprises, twists, and incredible discoveries. Fear not the unknown, my grandson, for it is within it that the best secrets are hidden. The chest is just the beginning. On the other side of life, with love and a touch of mystery, your grandfather.\r\nNote: Remember, the greatest stories are concealed between the lines and in what is left unsaid.\"\r\n', 'imagens/bauecarta.png'),
(77, ' Upon opening the chest, Alex observes various scattered objects that catch his attention, such as an old compass, an image of Saint Isidore of Seville, the patron saint of historians and internet users, to whom his grandfather was devoted, and a rusty key. Due to living in a humid environment, the key underwent a redox reaction. At the bottom of the chest, an old map covered in dust grabbed his attention. Very curious, Alex begins to analyze it.\r\n', NULL),
(78, 'His mother, upon reading the letter, becomes frightened and afraid that her son Alex will pursue his grandfather\'s past. She hides the chest in a place where Alex cannot find it.', NULL),
(79, 'Alex found the map very intriguing and felt compelled to pursue the secrets that the map held.', 'imagens/mapanicarau.png'),
(80, 'Alex decides to tell his family that he is going to pursue his grandfather\'s secrets because he believes it is his mission to follow in his footsteps. His family disagrees with the idea as they think it is too risky for Alex to go after something he doesn\'t know about. In the end, Alex decides to abandon the idea influenced by his family.', NULL),
(81, 'Alex thinks that his family wouldn\'t understand his mission and decides not to speak the truth. Instead, he says he will travel with his vacation savings to a friend\'s house.\r\n', 'imagens/viagemamigo.jpg'),
(82, 'Alex is going to pack his backpack to go in search of the secrets indicated on the map. Not knowing exactly what to take since he is unsure of what awaits him, Alex first grabs some clothes and then decides to bring along a few items he found in his grandfather\'s chest.', 'imagens/mochila.jpg'),
(83, 'Alex, with his belongings packed, buys a bus ticket to the nearest city to the \'X\' on the map. During the long journey, Alex examines the map again and realizes that there is a male name written, clearly visible next to the large red \'X.\' Upon reaching the city, Alex discovers that the \'X\' corresponds to a village called Nicarau and that to reach the location, he needs to cross a large river, not a small stream as depicted on his grandfather\'s map.', 'imagens/mapanicarau.png'),
(84, ' Alex decides to cross the river using the old city bridge. Midway through the journey, with Alex on the bridge, the already rotten woods start creaking, and eventually, near the end, the bridge collapses, and Alex falls into the river.', NULL),
(85, 'Alex decides to take the ferry to cross the river and finally reach the village.\r\n', 'imagens/balsa.jpg'),
(86, 'Upon reaching the small port of Nicarau, Alex decides to search for the name written on the map. As he disembarks, Alex encounters a bustling marketplace. Heading towards it, he decides to ask someone about the name on the map. One of the stalls selling religious articles catches his attention. Suddenly, a fishmonger approaches him:\n – americano: ‘Hi, do you need any help?\n    alex: “Yes, please” \n   alex: \"Do you  know Eliot Castillo?”\n   americano: “Do you want me to take you to the missionary?”\nAlex says:', 'imagens/chegadanicarau.png'),
(87, 'Alex decides to ignore the \"American\" vendor and ends up not finding Eliot.', NULL),
(88, 'Alex accepts the help and goes with the American to Eliot Castillo.\r\n', NULL),
(89, 'Arriving at Eliot Castillo\'s house, Alex shows his grandfather\'s map and asks why his name is written on it. Eliot then tells Alex about his friendship with Alex\'s grandfather, Alexandre, when he helped unravel mysteries about the village. Eliot also mentions that the village is largely composed of missionaries who culturally have the habit of conducting grand masses in the city\'s cathedral, where everyone always participates. Eliot begins to speak negatively about the village to Alex and claims that being there is a waste of time.\r\n', 'imagens/eliotcastillo.png'),
(90, 'Alex falls for Eliot\'s talk and becomes discouraged by what he hears about Nicarau, thinking that it might indeed be a waste of time. ', NULL),
(91, 'Alex decides to continue his journey and heads to the church.\r\n', NULL),
(92, 'Upon arriving at the church, Alex notices that the cathedral\'s name is the same as the saint his grandfather was devoted to: Saint Isidore of Seville. He then decides to enter the church and is enchanted by the structure of the place. Subsequently, he decides to look for some clues.', 'imagens/catedral.png'),
(93, 'Alex deviates from his path and ends up not understanding the clues. ', NULL),
(94, 'Alex examines the altar amid tables, candles, and cloths for a while until he reaches a corner of the altar, spotting an almost hidden reliquary on the church wall.\r\n', 'imagens/altar.jpg'),
(95, 'Alex realizes that the reliquary belongs to Saint Isidore of Seville. Approaching it with great intrigue, he notices a kind of slit that resembled a keyhole. Alex remembers the key he found in the chest. \n', 'imagens/relicario.png'),
(96, 'Alex decided, while packing his things, to bring a compass instead of the key that would open the lock. ', NULL),
(97, 'Alex made the right choice when packing his things and brought the key to unlock the reliquary.', NULL),
(98, 'Alex uses the key he brought and opens the reliquary. Inside, he finds a new chest, decides to open it, and discovers a new map detailing an unknown city. However, to reach it, he must pass through the forest.', 'imagens/mapatikal.png'),
(99, 'Alex goes back to Eliot\'s house to tell him that he found a new map with an unknown city. Seeing the map, Eliot becomes a different person and decides to steal Alex\'s map. ', NULL),
(100, 'Alex decides to go straight to the starting point of the trail indicated on the map.\r\n\r\n', 'imagens/trilha.jpg'),
(101, 'Alex set off to the first point on the map through a seemingly safe trail, as the path was not too steep up to that point. Alex walked for a while until he reached a section where he didn\'t know how to proceed.', 'imagens/iniciotrilha.png'),
(102, 'Alex continued on the path and discovered he was stepping on quicksand, sinking until he didn\'t survive.', NULL),
(103, 'Alex continued along the stones that bordered the trail.\r\n', 'imagens/pedrasnocaminho.jpg'),
(104, 'Alex reaches the first point on the map and finds a sign warning that the trail is dangerous.', 'imagens/placa.png'),
(105, 'Alex ignored the sign and continued along the trail, albeit with apprehension due to the setting sun. Hurrying towards the next map reference point to spend the night, Alex arrives to find a set of ruins resembling an old house. Faced with this discovery, Alex decides', 'imagens/ruina.png'),
(106, 'Alex decides to spend the night up in the tree, only to end up getting bitten by a venomous snake.', NULL),
(107, 'Alex decides to spend the night in an abandoned house where he discovers a lantern to ward off the darkness.\r\n', 'imagens/dormircasaabandonada.jpg'),
(108, 'At dawn, Alex continues on the trail to explore in search of the next \'X.\' During the journey, Alex comes across an apple tree laden with fruits. Despite feeling hungry, there is a lingering fear that the fruits might not be safe to eat.', 'imagens/macieira.png'),
(109, ' Alex decides to eat the apple and ends up poisoning themselves.', NULL),
(110, 'Alex decides not to eat the apple due to fear of potential poisoning, choosing to endure hunger instead.\r\n', 'imagens/maçaenvenenada'),
(111, 'Alex continues on his journey for a while until he reaches a sort of crossroads with two paths. Consulting the map, he realizes he needs to go North. Facing the rising sun, Alex opens his arms and points his right arm towards the sun, indicating that he should choose the path leading', 'imagens/trevo.png'),
(112, 'Alex struggles to navigate and ends up choosing the wrong path.', NULL),
(113, 'Alex gains a sense of direction and successfully chooses the correct path.', NULL),
(114, 'Choosing the right path, Alex bravely continues the trail, now becoming increasingly steep. At a certain point, Alex notices the elevation in the terrain compared to the starting area and realizes it\'s a mountain. As Alex continues, they discover that the new point is a viewpoint, somewhat obscured by the advancing forest. Alex decides to go and see the view, where they notice a high cliff and, in the distance, partially hidden by trees, what appears to be the village they started from. ', 'imagens/mirante.png'),
(115, 'Alex approaches the edge of the viewpoint, and with a misstep, tumbles down the cliff.', NULL),
(116, 'Instead of wasting time, Alex decides to continue their journey in search of the city marked on the map.\r\n', NULL),
(117, 'Alex follows the trail through the increasingly dense forest and a challenging path of sand. Tired, thirsty, and feeling the heat from prolonged sun exposure, Alex continues the trail until reaching a clearing in the woods, shaded by tall trees that block direct sunlight. At this point, Alex decides', 'imagens/descanso.png'),
(118, 'Alex decides to press on to reach the destination faster but succumbs to the effects of UVA radiation, dying from sunstroke, exhaustion, hunger, and thirst.', NULL),
(119, 'Alex chooses to stop and rest, capitalizing on the shaded area beneath the trees with a cooler temperature. There, Alex drinks water and eats a snack. 	', NULL),
(120, 'After resting, Alex continued the journey until encountering the rock described on the map. Suddenly, Alex spotted a sculpted rock shaped like a face. Realizing that the rock mentioned on the map was, in fact, a face, Alex believed they might be approaching their destination.', 'imagens/pedraesculpida.png'),
(121, 'As Alex continued the journey, the forest became less dense, and soon, they began to spot ruins that resembled pyramids and stone temples. Arriving at what seemed like a grand entrance, Alex noticed a sequence of symbols carved into a stone next to something resembling a gate. The drawings resembled an alphabet similar to the one in the book their grandfather had given them. Alex had the idea to try and translate what was written:', 'imagens/portao.jpg'),
(122, 'Alex discovers that the \'lost\' city is an ancient Mayan city from the classical era called Tikal. With this realization, they remembered their late grandfather talking about the Maya cities that had significant influence throughout Mesoamerica, known for their grand pyramids and unique architecture.', 'imagens/tikal.jpg'),
(123, 'Alex decides to get a closer look at the constructions, triggering a trap built there and ending up getting trapped. ', NULL),
(124, 'Intrigued by the grand pyramid, Alex decides to approach it.\r\n', NULL),
(125, 'Alex climbed the stairs of the pyramid, reaching the top where there seemed to be a temple. On the summit, Alex spotted a tombstone. Intrigued, they approached to read and understand what it was about. Finding the message on the tombstone strange because it wasn\'t in the Mayan language, Alex concludes that it might have been placed there by their grandfather as a clue to unravel the mystery', 'imagens/lapidepiramede.png'),
(127, 'Alex, upon opening the tombstone, ends up fracturing their wrist. Frustrated and in pain, without finding anything, they decide to return home. ', NULL),
(128, 'Upon exiting the pyramid, Alex decides to search for the house numbered 750, hoping to find something or explanations related to their grandfather.\r\n', 'imagens/residencia750.jpg'),
(129, 'Alex, after deciphering the riddle left by their grandfather on the tombstone, sets out in search of ruin number 750. While wandering through the ruins of Tikal, Alex stumbles upon what could be the location marked 750. Intrigued, they decide to enter and look for clues.\r\nOnce inside, Alex remembers the book their grandfather had brought along. While flipping through its pages, they lean on one of the large stones in the area. Unintentionally, they trigger a mechanism that opens a door leading underground.\r\n', 'imagens/escadaria.png'),
(130, 'Alex keeps reading the book when suddenly the catacomb closes, and Alex is unable to reopen it.', NULL),
(131, 'Alex promptly descends the underground stairs to explore the catacomb. ', 'imagens/cata.jpg'),
(132, 'Walking through tunnels and ossuaries, Alex decides to light a torch to explore the catacomb. While walking, Alex notices a numerical pattern for each room and decides to search again for room number 750. In pursuit of this room, Alex can only see what the torch\'s fire illuminates. Along the way, Alex feels increasing fear passing by numerous skeletons covered in jewelry, clothes, and dust.\r\nEventually, Alex finds room number 750, which lacks bones, appearing emptier and different from the other rooms in the underground. Alex starts searching the bare walls for something that could make sense when suddenly a reflection of light from a keyhole catches their eye. Alex notices a chest in the center of the room on an old pedestal. To their shock, Alex sees their name written on the chest. Overwhelmed by emotions and faced with what seems to be the culmination of their journey, Alex thinks that opening the chest will provide all the answers, revealing why their grandfather orchestrated this elaborate quest and what Alex stands to gain from it…\r\n', 'imagens/baufinal.png'),
(133, 'Alex hears his alarm clock ringing and his mother calling desperately for school, notifying that his grandfather, Alexandre, will take him to school.', 'imagens/final.jpg'),
(134, 'Parabéns, você conseguiu ajudar Alex a acordar do seu sonho profundo! Todos estes desafios enfrentados até aqui, não passavam de um sonho. Alex sequer se formou e Alexandre nunca morreu, Alex ainda é um menino de 18 anos, estudante do Ensino Médio com o sonho de seguir os passos de seu avô. Fim\nPPI feita por nós: Bruno de Lima, Maitê D\'Lapierre e Maria Clara Gomes', 'imagens/fotoppi.jpg'),
(135, 'Congratulations, you managed to help Alex wake up from his deep dream! All these challenges faced so far were nothing more than a dream. Alex didn\'t even graduate and Alexandre never died, Alex is still an 18-year-old boy, a high school student with the dream of following in his grandfather\'s footsteps. End\r\nPPI made by us: Bruno de Lima, Maitê D\'Lapierre and Maria Clara Gomes', 'imagens/fotoppi.jpg'),
(136, 'Alex didn\'t pay attention to the signs on the map and ended up choosing to take the compass instead of the key, which will be crucial later on!', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `usuario`, `email`, `senha`) VALUES
(7, 'Maria Clara', 'maria.clara', 'maria@gmail.com', '1234'),
(8, 'bruno de lima lindo', 'bruno', 'bruno@gmail.com', 'soulindo'),
(9, 'maite dlapierre', 'maite', 'maite@gmail.com', '12345'),
(11, 'Stephane', 'tephinha', 'stephane.dias@iffarroupilha.edu.br', 'games@1234'),
(13, 'Leandro', 'leandro', 'leandro@gmail.com', '1234');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `escolha`
--
ALTER TABLE `escolha`
  ADD CONSTRAINT `escolha_ibfk_1` FOREIGN KEY (`id_consequencia`) REFERENCES `consequencia` (`id_consequencia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
