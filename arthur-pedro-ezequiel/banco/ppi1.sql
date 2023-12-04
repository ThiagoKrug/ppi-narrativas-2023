-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Dez-2023 às 19:42
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
-- Banco de dados: `ppi1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cena`
--

DROP TABLE IF EXISTS `cena`;
CREATE TABLE IF NOT EXISTS `cena` (
  `id_cena` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id_cena`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cena`
--

INSERT INTO `cena` (`id_cena`, `nome`, `audio`, `imagem`, `texto`) VALUES
(39, 'cena 1', 'audios/PPI', 'imagens/baixar.png', '          Está sem uso(fiquei com preguiça de tirar)                                  '),
(42, 'cena 2-1', '', 'imagens/baixar.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(43, 'cena 3-1', '', 'imagens/baixar.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(44, 'cena 3', '', 'imagens/cena2.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(45, 'cena 3-2', '', 'imagens/cena3.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(46, 'cena 3-3', 'audios/cena46.mp3', 'imagens/cena3.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(47, 'cena 4', '', 'imagens/cena4.jfif', '          Está sem uso(fiquei com preguiça de tirar) '),
(48, 'cena 4-2', 'audios/cena48.mp3', 'imagens/cena4_2.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(49, 'cena 4-3', 'audios/cena49', 'imagens/cena4_3', '          Está sem uso(fiquei com preguiça de tirar)            '),
(50, 'cena 5', '', 'imagens/cena5.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(51, 'cena 5-2', '', 'imagens/cena5_2.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(53, 'cena 5-3', '', 'imagens/cena5_3.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(54, 'cena 5-4', 'audios/cena54', 'imagens/cena5_4.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(55, 'cena 5-5', '', 'imagens/cena5.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(56, 'cena 6', '', 'imagens/cena6.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(57, 'cena 6-2', '', 'imagens/cena6.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(58, 'cena 6_3', 'audios/cena58', 'imagens/cena6_3.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(59, 'cena 6-4', '', 'imagens/cena6.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(60, 'cena 7', '', 'imagens/cena6.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(61, 'cena 7-2', 'audios/cena61', 'imagens/cena7_2.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(62, 'cena 7-3', '', 'imagens/cena7_3.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(63, 'cena 7-4', 'audios/cena63.mp3', 'imagens/cena7_4.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(64, 'cena 7-5', '', 'imagens/cena7_5.jfif', '          Está sem uso(fiquei com preguiça de tirar)            '),
(65, 'cena 7-6', '', 'imagens/cena6.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(66, 'cena 8', '', 'imagens/cena8.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(68, 'cena 8-1', '', 'imagens/cena8.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(69, 'cena 8-2', 'audios/cena69.mp3', 'imagens/cena8_2.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(70, 'cena 8-3', '', 'imagens/cena8_3.jpg', '          Está sem uso(fiquei com preguiça de tirar)            '),
(71, 'cena 8-4', '', 'imagens/cena8_4.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(72, 'cena 8-5', '', 'imagens/cena8_5.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(73, 'cena 8-6', '', 'imagens/cena8_5.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(74, 'cena 8-7', '', 'imagens/cena8_5.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(75, 'cena 9', '', 'imagens/cena9.jpg', '          Está sem uso(fiquei com preguiça de tirar)            '),
(76, 'cena 9-1', '', 'imagens/cena9_1.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(77, 'cena 9-2', '', 'imagens/cena9_1.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(78, 'cena 9-3', '', 'imagens/cena9_1.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(79, 'cena 10', '', 'imagens/cena10.jpg', '          Está sem uso(fiquei com preguiça de tirar) '),
(81, 'cena 10-1', '', 'imagens/cena10_1.jpg', '          Está sem uso(fiquei com preguiça de tirar) '),
(82, 'cena 10-2', '', 'imagens/cena10_2.jpg', '          Está sem uso(fiquei com preguiça de tirar) '),
(83, 'cena 10-3', '', 'imagens/cena10_4.jpg', '          Está sem uso(fiquei com preguiça de tirar)            '),
(84, 'cena 11', 'audios/cena84', 'imagens/cena11.jpg', '          Está sem uso(fiquei com preguiça de tirar)            '),
(85, 'cena 12 final', 'audios/cena61.mp3', 'imagens/cena7_2.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(86, 'cena 12-1', 'audios/cena61.mp3', 'imagens/cena7_2.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(87, 'cena 12-2', '', 'imagens/cena12_2.jpg', '          Está sem uso(fiquei com preguiça de tirar)            '),
(88, 'cena 12-3', '', 'imagens/cena12_3.jpg', '          Está sem uso(fiquei com preguiça de tirar)            '),
(89, 'cena 12-4', '', 'imagens/cena12_2.jpg', '          Está sem uso(fiquei com preguiça de tirar) '),
(90, 'Cena 12-5', 'audios/cena90.mp3', 'imagens/cena5.png', '          Está sem uso(fiquei com preguiça de tirar)                                  '),
(91, '', 'audios/cena91.mp3', 'imagens/finala.jpg', '          Está sem uso(fiquei com preguiça de tirar)                                             '),
(92, 'Final 14', '', 'imagens/cena14.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(93, 'cena 14-1', '', 'imagens/cena14.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(94, 'cena 14-2', '', 'imagens/cena14_2.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(95, 'cena 14-3', 'audios/cena95', 'imagens/cena14_3.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(97, 'Final bom, do Pedro', '', 'imagens/cena14_4.png', '          Está sem uso(fiquei com preguiça de tirar) '),
(99, 'créditos 1', 'audios/final.mp3', 'imagens/fim.png', '          Está sem uso(fiquei com preguiça de tirar)            '),
(100, 'creditos 2', 'audios/creditos2.mp3', 'imagens/fim', '          Está sem uso(fiquei com preguiça de tirar) ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dialogos_textos`
--

DROP TABLE IF EXISTS `dialogos_textos`;
CREATE TABLE IF NOT EXISTS `dialogos_textos` (
  `id_dialogo` int NOT NULL AUTO_INCREMENT,
  `texto` text,
  `id_cena` int DEFAULT NULL,
  PRIMARY KEY (`id_dialogo`),
  KEY `dialogos_textos` (`id_cena`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `dialogos_textos`
--

INSERT INTO `dialogos_textos` (`id_dialogo`, `texto`, `id_cena`) VALUES
(4, '           A família está no carro e Cristiano Ronaldo JR pede ao pai para parar no posto mais perto para ir ao banheiro, enquanto Mary Jane questiona o pai sobre a viagem.          ', 39),
(5, '           CR7:Pai já não aguento mais. O senhor pode parar naquele posto? Já tô segurando desde que a gente passou a fronteira com o RS.\r\n                      ', 39),
(6, '           H.R: Tá tá, já já vamos chegar em Porto União e você pode se aliviar lá.\r\n', 39),
(7, '           MJ: Já to muito cansada pai, a gente pode parar em Porto União para descansar um pouco.\r\n', 39),
(10, '           M.J: Nunca me ouvem. Odeio esta família. ', 42),
(11, '           CR7: Assim chegaremos logo em Curitiba. Obrigado, pai.', 42),
(12, '           CR7: Não!!!!!! Eu quero chegar logo em Curitiba, vamos só parar pra ir no banheiro e depois vamos seguir viagem.', 39),
(13, '           M.J: Eu não sei há quanto tempo eu não durmo numa cama. Muito obrigado, pai, por parar.', 43),
(14, '          H.R: De nada, aproveitem porque amanhã de manhã a gente sai. ', 43),
(15, '           CR7: Poxa pai, se nós tivéssemos acelerado já estaríamos em Curitiba, mas uma pausinha não é tão ruim.', 43),
(16, '           5 dias depois.', 44),
(17, '      A família Richards está próxima de finalmente chegar a seu destino     ', 44),
(18, '       H.R: Acordem, estamos quase lá.    ', 44),
(19, '*Ninguém acorda. ', 44),
(20, '- Você começa a perceber que tem um carro estranho atrás de vocês.           ', 44),
(21, '           *O carro não ultrapassa e fica mais colado com o carro.\r\n           ', 45),
(22, '           -Você começa a desconfiar e acelera.\r\n           ', 45),
(23, '   -Você consegue abrir uma distância do carro.\r\n           ', 45),
(25, '           -H.J acorda.', 45),
(26, '           H.J: Querido, o que está acontecendo? Por que está acelerando o carro?\r\n', 45),
(27, 'H.R: Não é nada querida, volte a dormir.', 45),
(29, '*Neste instante o carro volta a segui-los e começa a bater na traseira do carro', 45),
(30, '           -No susto, Você joga o carro numa trilha e começa a acelerar.\r\n', 45),
(31, 'H.R: Se segurem!!!!\r\n', 45),
(32, ' *Nesse momento você cai em uma trilha , porém percebe que a trilha é estreita, densa, com muitas folhas, úmida e com árvores com cipó. Você dificuldade de controlar o carro.\r\n', 45),
(34, '           -Você começa a desconfiar e acelera.\r\n           ', 46),
(36, '           -Você consegue abrir uma distância do carro\r\n', 46),
(37, '         -H.J acorda.\r\n', 46),
(38, '    H.J: Querido, o que está acontecendo? Por que está acelerando o carro?\r\n', 46),
(39, 'H.R: Não é nada querida, volte a dormir.\r\n\r\n', 46),
(40, '*Neste instante o carro volta a segui-los e começa a bater na traseira do carro\r\n', 46),
(41, '           -No susto, você joga o carro numa trilha e começa a acelerar', 46),
(42, '          Ao adentrar a trilha, você percebe que ela é estreita, cheia de curvas e depressões, com muitas folhas espalhadas pelo chão, úmida e cheia de Cipozeiras. Tudo isso somado com os gritos ensurdecedores de sua família fazem você ter muita dificuldade de controlar o  carro.*            ', 47),
(44, '           Graças à diminuição da velocidade, o pneu rasgou em um dejeto metálico da trilha.', 48),
(45, '           Ao acelerar, você não percebe que há uma curva no trajeto, acaba perdendo totalmente o controle e cai de um barranco.', 49),
(46, '            A queda é tão forte que você e sua família MORREM.', 49),
(47, '           você perde o controle do carro, bate em uma árvore e acaba ficando inconsciente por algumas horas. O carro fica em péssimo estado.', 50),
(48, '          Ao acordar, você percebe que sua família já não esta mais lá .           ', 50),
(49, 'Ao subir, você avista fumaça a alguns quilômetros e decide ir investigar.           ', 51),
(50, '           -Ao olhar em volta, você ouve um barulho. Ao se aproximar, você vê uma onça-pintada comendo o que parece ser uma anta. Você se desespera e acaba fazendo barulho.', 53),
(51, '           -Ao correr, a onça-pintada percebe sua movimentação e corre atrás de você e acaba te alcançando.', 54),
(52, '           Você foi brutalmente esfolado e comido vivo, pela cruel onça. ', 54),
(53, '           -Ao ficar parado a onça-pintada continua a comer a sua caça. Você silenciosamente sai dali e volta para o carro.', 55),
(54, '           H.R:Não aguento mais caminhar já está quase de noite e ainda não achei o foco daquela fumaça. \r\n', 56),
(55, '-Você acha uma placa, ao ler você acha a seguinte frase: Aldeia Yoroman a 3 quilômetros.\r\n\r\n', 56),
(57, '           -Você Ao andar mais um pouco, acha outra placa que diz: Ao olhar do sol poente norte 1Km, leste 1Km,norte 1Km.\r\n', 56),
(58, '  -Você Percebe que o sol está quase se pondo em sua frente.', 56),
(59, '           Você esta no caminho certo.', 57),
(60, '           Você seguiu o caminho errado. ', 58),
(61, '           Você se perdeu neste enorme labirinto de árvores, e acabou morrendo de fome.', 58),
(62, '           Você esta no caminho certo.', 59),
(63, '           H.R: Eu não aguento mais caminhar, parece que faz horas que estou andando, estou cansado de andar nessa floresta grande e densa!!!!\r\n', 60),
(64, '           -Nesse momento você ouve um barulho*', 60),
(65, '           -Ao investigar você acha uma placa escrita: Bem-vindo à aldeia Yoroman.\r\n', 61),
(66, '-Você se aproxima e vê um grande quantidade de ocas formando um círculo onde no meio há várias crianças brincando com o que parece ser uma cutia. Ao andar um pouco, uma pessoa chega perto de você: um  homem, forte, alto, com cabelo curto vestido com uma bermuda suja na frente com barro, uma camiseta de um time com chinelo.', 61),
(68, '           Ubiratan: Olá amigo, estar perdido? Mim ser Pata choca, seu nome?\r\n\r\n', 61),
(69, '-Você fica com um misto de surpresa e riso.\r\n\r\n           ', 61),
(70, '           H.R: Mim ser Herbert Richard, prazer!\r\n', 61),
(71, '           H.R: Mim estar perdido, cavalo de aço bater a alguns quilômetros daqui, família minha desaparecida mim não saber onde estar. \r\n', 61),
(72, '           - Ao terminar de falar, você escuta risos olhando ao redor e percebe todo mundo rindo, na sua frente está Ubiratan gargalhando.\r\n', 61),
(73, 'Ubiratan: Desculpa amigo, sempre que vejo um forasteiro não resisto. Não falamos assim aqui!\r\n\r\n', 61),
(74, '           H.R:Suspiro.\r\n Que susto você me deu! Achei que estivesse falando com índios! ', 61),
(75, '           H.R: Vocês teriam um pouco de água, porque eu estou precisando descansar.\r\n', 61),
(76, '    *No outro dia*\r\n', 62),
(77, '           -Você acorda no outro dia desnorteado.\r\n', 62),
(78, '           H.R: Onde estou, que lugar esse?', 62),
(79, '           Ubiratan: Eu sou Ubiratan, um indígena guardador desse local. Essa aldeia é a Yoroman. Fazemos parte do povo Omágua. Você está bem longe de casa, o que houve com você? \r\n', 62),
(80, '           Herbert: Eu estava sendo perseguido por pessoas, não sei quem eles são. Por algum motivo desconhecido eles raptaram minha família, e eu estou aqui preso nessa maldita floresta. Vocês sabem como sair daqui?\r\n', 62),
(81, '           Ubiratan: Bem, temos um problema: a estrada que nos liga  cidade está alagada pois estamos em época de cheia do rio e é muito perigoso tentar atravessar e ainda mais estamos a 40 quilômetros da cidade mais próxima.\r\n', 62),
(82, '           Ubiratan: Bem, temos um problema: a estrada que nos liga  cidade está alagada pois estamos em época de cheia do rio e é muito perigoso tentar atravessar e ainda mais estamos a 40 quilômetros da cidade mais próxima.\r\n', 62),
(83, '           Herbert: O que devo fazer então? Estou preso aqui?\r\n', 62),
(84, '           Nesse momento aparece um homem velho com cabelos todos brancos, cheio de marcas no rosto, com um colete colorido e um colar de flores no pescoço, calça bem rasgada. Ele entra no lugar*\r\n', 62),
(85, '           handrasekhara Venkata : Quem disse que ele poderia ficar entre nós? Sabe que ele pode estar infectado com algum verme que poderia devastar toda aldeia? Viu o que aconteceu com sua tembireko e o que está acontecendo com o Naira.\r\n', 62),
(86, '           H.R: Eu não estou com vermes, peço que me abriguem aqui só até a cheia do rio baixar, daí nunca mais vão precisar me ver.\r\n', 62),
(87, '           Chandrasekhara Venkata: Faremos uma reunião e a aldeia decidirá seu futuro.\r\n', 62),
(88, '           Chandrasekhara Venkata: Ubiratan leve-o daqui enquanto discutimos sua estada aqui.', 62),
(89, '           Ao se afastar, você caminha durante horas mata a dentro, e acha uma velha casa aos pedaços. Ao entrar, você acha algumas garrafas com água congelada no que parece ser um tipo de geladeira primitiva.É de extrema importância  manter essas garrafas congeladas:\r\n           ', 63),
(90, '           O item que você escolheu como isolante térmico não foi o suficiente, então a água descongelou.                      ', 64),
(91, '           Você morreu de hipertermia.', 64),
(92, '        Ao pegar as aguas e mantê las geladas, você volta ao mesmo local de antes, e decide investigar aquele barulho.  ', 65),
(93, '           Herbert: Você não está falando desde que começamos a caminhar, estamos caminhando há horas. Você poderia ao menos conversar comigo.\r\n', 66),
(94, '          Ubiratan: Sobre o que você quer conversar?  ', 66),
(95, '         Herbert: Eu tenho muitas perguntas: primeiro, como vocês sendo índios sabem falar portugues? Sério, vocês moram a 40 quilômetros da civilização como conseguem falar tão bem portugues e essas roupas?\r\n  ', 66),
(96, '           Ubiratan:Nossa aldeia por muito tempo foi uma aldeia isolada nunca gostamos de nos relacionar com a civilização mas um dia eles apareceram um bando de cientista tentando entender nossa língua, costumes, eles nos mostraram muitas coisas como remédios tecnologias que nunca tínhamos visto, com o tempo acabamos absorvendo seu idioma seu jeitos fomos nos “modernizando” eles diziam, mas um dia enquanto um deles estava pesquisando sobre plantas que usamos como remédios ele acabou sendo atacado por uma onça,a maior que eu já vi, e venho a morrer.Os cientistas ficaram em choque com a perda de seu amigo e acabaram aos poucos parar de vir aqui ainda  mantemos contato e fazemos comércio com a civilização mas não é como antigamente.Não é  porque somos “Índios” que temos que morar em ocas falar só nossa língua quem disse que não podemos ser parecidos como vocês mas com nossas raízes,nossas ancestralidades.Quando vamos até vocês comprar algo somos tratados como se fossemos animais irracionais.\r\n', 66),
(97, '        Herbert:Sinto muito por isso, foi mal ter tratado você assim.\r\n   ', 66),
(98, '           Ubiratan:Mas mudando de assunto quais outras perguntas você tem? \r\n', 68),
(100, '     Herbert: Quem é esse Chandrasekhara Venkata?\r\n', 68),
(101, 'Ubiratan: Ele é um ancião da nossa aldeia, aqui na nossa aldeia chegar a idade que ele tem é muito difícil mas as  pessoas que alcançam são muito prestigiadas ele está assim grosso desde que minha tembireko morreu ela era incrível e sempre conseguiu cativar todo mundo com sua beleza.Um dia ela foi terrivelmente acometida por uma doença mortal eu vi o brilho no seu olhar desaparecer agora ela está com os espíritos que protegem nossa aldeia.\r\n\r\n', 68),
(102, '       Ubiratan: Infelizmente a mesma doença que acometeu ela voltou para nos assombrar e está tentando levar algumas crianças da nossa aldeia inclusive uma é muito chegada ao  Chandrasekhara Venkata por isso seu humor tem piorado nos últimos tempos. Ele é um boa pessoa mas aquela doença o assombra mais que tudo.\r\n    ', 68),
(103, '         Herbert: Mas que tipo de doença terrível é essa que você fala?\r\n  ', 68),
(104, '        Ubiratan: É uma doença que deixa o hospedeiro com febre, falta de apetite, cansaço, e o pior a pessoa fica toda amarela. Tentamos pedir ajuda para a civilização mas parece que não é um assunto muito importante para vocês.\r\n   ', 68),
(105, 'Herbert:Nossa! A vida de vocês não é nada fácil.\r\n\r\n   ', 68),
(106, '           Ubiratan: Não podemos reclamar a natureza tem sido muito generosa com meu povo.Sempre nos alimentando, protegendo não podemos reclamar ela nos dá o que precisamos.\r\n', 68),
(107, '       Hebert: Ei! Ubiratan o que aquilo? Achei que estávamos a 40 quilômetros da cidade, o que aquele prédio?\r\n    ', 68),
(108, '           -Na sua frente tem um prédio alto feito de concreto com sinais de abandono com dois andares com janelas por todo o local,algumas quebradas, e há uma placa na frente escrita: P.I. Aruk. \r\n', 68),
(109, '          Ubiratan: Aquilo? Aquilo é um antigo posto indígena que costumava ajudar os povos da região mas com o tempo tornou se inviável manter por causa da distância da civilização então optaram por abandonar esse posto.Ele está em perfeitas condições mas em algumas partes a vegetação está bem alta.\r\n ', 68),
(110, '         Herbert:Vamos ver se conseguimos alguma coisa.\r\n  ', 68),
(111, '           Ubiratan: Talvez seja uma boa ideia ir para a aldeia, está um pouco longe mas pode ser mais seguro.', 68),
(112, '           - During your journey back to the village, you find it difficult to walk because of the density of the forest, at a certain point your leg ends up sinking into a hole and you become trapped. Suddenly a huge and robust snake appears in front of you, an anaconda, you are in despair and end up writhing, which makes the situation worse and causes you to sink your other leg.', 69),
(113, 'The anaconda approaches you and ends up wrapping itself around your body, resulting in your death', 69),
(114, '          - Ao entrar dentro do posto você vê um local com várias cadeiras organizadas uma atrás da outra com um balcão um pouco empoeirado com um computador e algumas máquinas de fax,com eletricidade.\r\n ', 70),
(115, '           Ubiratan: Que esquisito por que um lugar abandonado teria eletricidade?\r\n', 70),
(116, '         Herbert: Será que não estamos sozinhos?\r\n  ', 70),
(117, '           Ubiratan: Quem poderia ser estamos no meio da mata com as estradas todas alagadas por causa do tempo da cheia como alguém conseguiria chegar até aqui?\r\n', 70),
(118, '           Herbert: De qualquer modo vamos investigar para ver se encontramos algo.\r\n', 70),
(119, '          Herbert: Vamos procurar alguns medicamentos e um lugar para podermos dormir\r\n ', 70),
(121, '           Ubiratan: Por quê você precisa de medicamentos?\r\n', 70),
(122, '           Ubiratan: Como assim?\r\n', 70),
(123, '     Herbert:Eu suspeito que seja uma doença chamada amarelão ela é uma doença causada por um verme que penetra na sua pele depois entra na sua corrente sanguínea chega no seu coração e pulmão até por fim chegar no seu intestino.\r\n      ', 70),
(124, '           Ubiratan: Você acha que isso pode dar certo?\r\n', 70),
(125, '          Herbert: Eu não sei, mas não custa tentar.\r\n', 70),
(126, '           Herbert: Veja! ali está a sala de medicamentos.', 70),
(128, '           Ao entrar na sala você encontra várias prateleiras placas na frente,de repente, a luz caí', 71),
(129, '         Como está muito escuro você não consegue ver muito bem o nome das prateleiras nem o nome dos medicamentos  ', 72),
(130, '-Você fica entre dois remédios, então decide pegar o: ', 72),
(131, '           -Você decide pegar o A**i****si***i*s.', 73),
(132, '           -Você decide pegar o *i*o*a**v*.', 74),
(133, '           - Ao chegar ao gerador você percebe que a chave do gerador caiu,rapidamente, você a liga e a luz volta ao posto.\r\n            ', 75),
(134, '            -Depois você volta a sala de medicamentos e volta a procurar pelo medicamento.           ', 75),
(135, '           -Você fica entre dois remédios, então decide pegar o:', 76),
(136, '     -Você decide pegar o Antiparasitários.      ', 77),
(137, '           -Você decide pegar o Minorativo.', 78),
(138, '       Ubiratan: Ok,agora que pegamos o medicamento vamos procurar um lugar para dormir.\r\n    ', 79),
(139, '        Herbert: Vamos tentar dormir no segundo andar,lá será mais seguro.\r\n   ', 79),
(140, '           Ao subir as escadas para o segundo andar você houve um barulho e decide ir investigar.\r\n', 79),
(141, '          Herbert: Acho que ouvi algo na sala do diretor. ', 79),
(142, '           - Ao abrir a porta você vê uma onça-parda com dois filhotes e imediatamente após abrir ela se assusta e vai pra cima de vocês e acaba arranhando Ubiratan na perna,rapidamente,você o puxa para fora da sala e fecha a porta e fica segurando ela enquanto Ubiratan tenta derrubar uma estante que tem ao lado da porta.\r\n', 81),
(143, 'Herbert: Derruba essa estante logo que eu não to conseguindo aguentar.\r\n-Ubiratan consegue derrubar a estante.\r\n\r\n', 81),
(144, '-Ubiratan consegue derrubar a estante.\r\n', 81),
(145, 'Ubiratan: Você tá bem?\r\n\r\n', 81),
(146, '           Herbert: Melhor você deixar eu ver esse ferimento.\r\n', 81),
(147, '          Ubiratan: Nada que eu já não tenha enfrentado.\r\n', 81),
(148, '           Herbert: Precisamos achar algo para estancar esse sangramento.\r\n', 82),
(149, '          Herbert: Vamos ver se não tem uma cozinha por aqui, para ver se achamos algo para estancar isso.  ', 82),
(150, '           - Você encontra uma sala de lazer dos funcionários, você decide pegar uma faca e esquentar a ponta da faca na boca de um fogão para cauterizar o ferimento dele e acaba dando certo.Ele se sente um pouco melhor.', 82),
(151, '        - Vocês acham um lugar para dormir lá na sala dos funcionários e passam a noite lá.\r\n   ', 83),
(152, '           -De manhã vocês são acordados por um barulho muito forte.', 84),
(153, '           Herbert: Você ouviu esse barulho?\r\n', 84),
(154, 'Ubiratan: Claro que sim! Foi muito alto. Vamos ver o que é.\r\n', 84),
(155, '- Ao olhar pela janela vocês vêem um carro suspeito do lado de fora e algumas pessoas estranhas.\r\n\r\n', 84),
(156, 'Ubiratan: Devemos pedir ajuda a eles?\r\n\r\n', 84),
(157, 'Herbert: Não parecem ser pessoas legais, vamos nos esconder. \r\n\r\n\r\n', 84),
(158, '-Ao se esconder e observar, você percebe que o carro das pessoas se parece muito com o carro que o perseguiu, com isso você se sente receoso em voltar até a aldeia.\r\n\r\n\r\n', 84),
(159, '           -Apesar do receio você acha mais importante levar o remédio até a aldeia.Você toma muito cuidado para não ser visto esperando todos que estavam do lado de fora irem e decide sair do posto. Durante esse tempo Ubiratan começa a se sentir um pouco cansado para não cansá-lo mais, você decide ir a aldeia buscar pessoas para o trazerem.\r\n', 81),
(160, '           -Apesar do receio você acha mais importante levar o remédio até a aldeia.Você toma muito cuidado para não ser visto esperando todos que estavam do lado de fora irem e decide sair do posto. Durante esse tempo Ubiratan começa a se sentir um pouco cansado para não cansá-lo mais, você decide ir a aldeia buscar pessoas para o trazerem.\r\n', 85),
(161, '           Herbert: Eu não acho uma boa ideia deixar você aqui, mas já que você insiste tanto,eu vou.\r\n', 85),
(162, '  - Herbert consegue chegar bem na entrada da aldeia.\r\n', 85),
(163, 'Herbert: Alguém por favor me ajuda!\r\n', 85),
(164, 'Chandrasekhara Venkata : O que houve?', 85),
(166, 'Herbert: Eu e Ubiratan fomos até um antigo posto, lá apareceu uma onça e o atacou, ele está bem mas foi arranhado pela onça e precisa de ajuda preciso de dois homens para trazer.\r\n', 85),
(167, '           Herbert: Eu preciso falar com você,acredito ter achado a cura para essa doença que está acometendo a sua aldeia,por favor leve me até um dos doentes.', 85),
(168, '           chandrasekhara Venkata :Como é? fale mais devagar.Você acha que vai conseguir nos enganar primeiro você sequestrou o Ubiratan e agora está querendo encostar em nossos irmãos que estão fracos.Peguem-no!!\r\n', 86),
(169, '           - Neste momento aparece Ubiratan.\r\n', 86),
(170, '      Ubiratan: Irmãos o que está acontecendo aqui por que estão querendo atacar o estrangeiro.Eu estou bem. Ele acredita ter achado um remédio.Por favor OUÇAM ele!!!     ', 86),
(171, '    Herbert: Aqui está o remédio.     ', 86),
(172, 'Chandrasekhara Venkata:não sei se deveria falar isso e talvez eu me arrependa mas se o Ubiratan confia em você…nós vimos alguns homens suspeitos indo para uma antiga vila cujo povo sumiu repentinamente a muito tempo atrás. Alguns de nós ouviu eles dizerem sobre uma família que foi pega por eles. Não vamos com você pois se você quiser morrer morra mas não vamos arriscar a vida de nenhum nos.\r\n    ', 86),
(173, '           Herbert: Ok, eu agradeço a informação.', 86),
(174, '           -Caminhando pela floresta densa para onde Chandrasekhara Venkata  te disse onde ficava a aldeia você fica cansado de caminhar por uma floresta com muitas folhas grandes no chão. Ao caminhar por um tempo você avista o que parece ser uma antiga aldeia indígena toda destruída com muitos destroços no chão que parecem estar ali a algumas décadas com a vegetação já cobrindo toda aldeia com sua vegetação densa e folhas enormes com alguns animais pequenos saindo de algumas ocas.', 87),
(175, '           Um pouco longe das ocas na mata você ouve alguns passos, e ao olhar para o lado você avista sua esposa e seus filhos andando sorrateiramente com mochilas nas costas. Você então se aproxima deles.         ', 88),
(176, '           Herbert: Querida é você? Você e as crianças estão bem? O que aconteceu?\r\n', 88),
(177, '           Rasputia: Não temos tempo, precisamos sair daqui rápido.', 88),
(178, '           - Herbert e sua família saem sem fazer barulho e ao fazerem o percurso pela aldeia abandonada de repente se ouve um barulho e todos se escondem imediatamente.\r\n', 89),
(179, '           Sujeito 1: Eles sumiram precisamos avisar o chefe, rápido.\r\n', 89),
(181, '          Sujeito 2: Não! Se ele descobrir que perdemos eles, ele vai acabar com a gente, vamos procurar eles.Eles não devem estar tão longe.\r\n ', 89),
(182, '           Herbert: Precisamos sair  daqui rápido,onde estão as crianças?\r\n', 89),
(183, '      Hipotenusia: Eles correram mata a dentro.\r\n', 89),
(184, '      - Imediatamente Herbert e sua esposa saem correndo para a mata.\r\n     ', 89),
(185, '           Hipotenusia: Vamos nos separar, para procurar-lós.   ', 89),
(186, '           Herbert: Não quero perder você de novo, vamos procurar eles juntos.', 89),
(187, '           -Ao adentrar na mata você e sua esposa avistam seus filhos correndo, vocês os seguem pelos rastros. Até que chegam no local onde vocês se acidentaram, seus filhos estão próximos ao carro, estáticos, sem demonstrar nenhum tipo de emoção. Você se vira para trás porque não consegue avistar mais sua esposa e ao virar novamente para frente ela está entre seus filhos com as mãos dadas, também sem demonstrar nenhum  tipo de emoção. Neste momento, tudo à sua volta começa a se distorcer, luzes fortes começam a aparecer no céu e você cai no chão. A luz, que então era forte, começa a diminuir, e você percebe que se trata de uma lâmpada, você está em uma sala, sobre uma cama, uma mulher surgir pela porta.', 90),
(188, '         Mulher: Ah, você acordou!\r\n  ', 91),
(189, '       Herbert: Quem é você, onde eu estou?\r\n\r\n  ', 91),
(190, '     Mulher: Meu nome é Marie Curie, sou enfermeira e estou responsável por seus cuidados, você acabou sofrendo um acidente a uma semana atrás e veio parar nesse hospital.\r\n      ', 91),
(191, '         Herbert: Minha família está bem?  ', 91),
(192, 'Marie Curie: Eles estão...', 91),
(193, '           -Você toma a decisão de seguir o carro\r\n', 92),
(194, 'Herbert: Aquele carro se parece muito com o que perseguia a mim e a minha família, eu preciso segui-lo.\r\nUbiratan: Tem certeza disso, não.', 92),
(195, '           Ubiratan: Tem certeza disso, não acha que está agindo de cabeça quente?\r\n', 92),
(196, '           Herbert: Tenho total certeza que eu tenho que segui-lo.', 92),
(197, '           Ubiratan: Está certo então, mas eu preciso voltar para a aldeia com os medicamentos.\r\n', 92),
(198, '           -Seguindo o carro, você vai até uma fazenda isolada .', 92),
(199, '           -Lá você percebe que se trata de uma fazenda de criação de animais bovinos. Observando a distância, você acaba avistando o carro estacionado próximo a um galpão e não vê ninguém por perto além dos animais, e com isso você decide ir até o galpão. Ao se aproximar, você vai até uma pequena janela e lá você acaba avistando pessoas que se parecem com a sua família, ao observar melhor você realmente percebe que se trata da sua família. Eles estão aparentemente alimentando alguns porcos que estão lá, e além disso você avista um homem que parece estar armado os observando. Você então acaba chegando à conclusão de que sua família está sendo mantida refém e que eles estão sendo usados como escravos para trabalhar na fazenda.', 93),
(200, '           Com isso, você  precisa de alguma forma resgatar sua família, você decide procurar algo para poder se defender e ter alguma chance contra alguém armado. Sorrateiramente você anda pela fazenda tentando encontrar algo e avista um pequeno monte de lenha e ao se aproximar você avista um machado, no qual você não pensa duas vezes em pegar.', 94),
(201, '           Agora voltando e entrando no galpão com o machado, você não avista mais sua família, avista apenas o homem, e em um momento de desatenção dele você vai para cima golpeando uma de suas pernas e quando ele cai você o questiona.', 95),
(202, '           Herbert: Onde está minha família?\r\n', 97),
(203, '           - O homem não responde nada, ele saca sua arma para atirar e rapidamente você reage o golpeando na mão. Logo em seguida você pega a arma e o questiona novamente.\r\n', 97),
(205, '           Herbert: Eu só vou perguntar mais uma vez, onde eles estão?\r\n', 97),
(206, '           Homem: Eu não sei do que você está falando\r\n', 97),
(207, '           - Após essa fala você escuta um barulho e ao virar-se para vê, o homem reage novamente dessa vez sacando uma faca, ele acaba acertando sua perna de raspão e você em ato de contra defesa acaba dando um tiro, no qual acabou alvejando o homem. Ao virar-se novamente para averiguar o barulho, você avista uma mulher com seus filhos, que estão carregando baldes com alimentos para os porcos.\r\n', 97),
(208, '      Mulher: O que você fez com o meu marido?!!!!!!     ', 97),
(209, '           *Radio tocando.', 39),
(210, '           <h2>Escrito por: Arthur, Ezequiel e Pedro.</h2>\r\n                                 ', 99),
(212, '          <h2> Imagens: Bing Ia. </h2>                    ', 99),
(213, '     <h2>Áudios: Youtube. </h2>\r\n                      ', 99),
(214, '           <br> <br> <br> <h1> Obrigado por jogar. </h1>', 99),
(215, '     <h2>Escrito por: Arthur, Ezequiel e Pedro.</h2>      ', 100),
(216, '         <h2> Imagens:Bing Ia. </h2>  ', 100),
(217, '         <h2> Efeitos sonoros: Youtube. </h2>  ', 100),
(218, '         <h2> Música:Nightcall. </h2>  ', 100),
(219, '         <h1> Obrigado por jogar. </h1>  ', 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolha`
--

DROP TABLE IF EXISTS `escolha`;
CREATE TABLE IF NOT EXISTS `escolha` (
  `id_escolha` int NOT NULL AUTO_INCREMENT,
  `texto` text,
  `id_cena` int DEFAULT NULL,
  `id_destino` int DEFAULT NULL,
  PRIMARY KEY (`id_escolha`),
  KEY `fkidescolha` (`id_cena`),
  KEY `fk_Destino` (`id_destino`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `escolha`
--

INSERT INTO `escolha` (`id_escolha`, `texto`, `id_cena`, `id_destino`) VALUES
(13, '     Continuar a viagem ', 39, 42),
(14, '     Ficar em Porto união      ', 39, 43),
(15, '           Continuar', 43, 44),
(16, '       Continuar    ', 42, 44),
(17, '       Deixar o carro passar               ', 44, 45),
(18, '           Acelerar     ', 44, 46),
(19, '          Continuar ', 45, 47),
(20, '           Continuar', 46, 47),
(21, '           Diminuir a velocidade          ', 47, 48),
(22, '           Acelerar           ', 47, 49),
(23, '     Voltar ao inicio           ', 49, 39),
(24, '   Continuar                  ', 48, 50),
(25, '           Subir em uma árvore alta para melhor visão           ', 50, 51),
(26, '           Olhar em volta           ', 50, 53),
(27, '           Correr           ', 53, 54),
(28, '      Voltar ao inicio           ', 54, 39),
(29, '           Ficar parado', 53, 55),
(30, '           Subir em uma árvore alta para melhor visão.', 55, 51),
(31, '           Continuar         ', 51, 56),
(32, '       Ir para esquerda               ', 56, 57),
(33, '    Ir para direita                  ', 56, 58),
(34, '           Ir para esquerda          ', 57, 59),
(35, '           Ir para direita           ', 57, 58),
(36, '  ir para esquerda                    ', 59, 58),
(37, '           Voltar ao inicio         ', 58, 39),
(38, '           Ir para a direita          ', 59, 60),
(39, '           Ir investigar          ', 60, 61),
(40, '           Continuar           ', 61, 62),
(41, '           Se afastar           ', 60, 63),
(42, '           Usar folhas de uma árvore como isolante térmico          ', 63, 64),
(43, '           Usar um pano velho e fino como isolante térmico           ', 63, 64),
(44, '           Voltar ao inicio           ', 64, 39),
(45, '      Usar um casaco velho e grosso como isolante térmico                ', 63, 65),
(46, '           Ir investigar          ', 65, 61),
(48, '   Continuar                   ', 62, 66),
(50, '           Continuar           ', 66, 68),
(51, '           Ir para à aldeia\r\n           ', 68, 69),
(52, '         \r\nBack to start  ', 69, 39),
(53, '           Ir ao posto           ', 68, 70),
(54, '           Entrar na sala           ', 70, 71),
(55, '           Procurar os medicamentos           ', 71, 72),
(56, '           A**i****si***i*s           ', 72, 73),
(57, '  *i*o*a**v*                                      ', 72, 74),
(58, '           Ir procurar pelo gerador           ', 71, 75),
(59, '         Voltar para a sala             ', 75, 76),
(60, '           Antiparasitários           ', 76, 77),
(61, '           Minorativo          ', 76, 78),
(62, '           Procurar lugar para dormir          ', 73, 79),
(63, '           Procurar um lugar para dormir          ', 74, 79),
(64, '           Procurar um lugar para dormir\r\n           ', 77, 79),
(65, '           Procurar um lugar para dormir\r\n           ', 78, 79),
(66, '       Ir investigar              ', 79, 81),
(67, '           Procurar algo para cauterizar o ferimento        ', 81, 82),
(68, '           Passar a noite na sala dos funcionários          ', 82, 83),
(69, '           Continuar           ', 83, 84),
(70, '        Voltar com os remédios para a aldeia            ', 84, 85),
(71, '     Continuar                 ', 85, 86),
(72, '           Ir à aldeia abandonada           ', 86, 87),
(73, '           Continuar          ', 87, 88),
(74, '      Continuar                ', 88, 89),
(75, '           Continuar          ', 89, 90),
(76, '           Descobrir toda a verdade    ', 90, 91),
(78, '           Seguir o carro           ', 84, 92),
(79, '           Continuar', 92, 93),
(80, '           Continuar         ', 93, 94),
(81, '           Continuar          ', 94, 95),
(82, '           Continuar           ', 95, 97),
(84, '           ...', 97, 99),
(85, '           ...', 91, 100);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `dialogos_textos`
--
ALTER TABLE `dialogos_textos`
  ADD CONSTRAINT `dialogos_textos_ibfk_1` FOREIGN KEY (`id_cena`) REFERENCES `cena` (`id_cena`);

--
-- Limitadores para a tabela `escolha`
--
ALTER TABLE `escolha`
  ADD CONSTRAINT `fk_Destino` FOREIGN KEY (`id_destino`) REFERENCES `cena` (`id_cena`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
