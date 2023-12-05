-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Nov-2023 às 20:10
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

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
  `texto` mediumtext,
  `imagem` mediumtext,
  `id_historia` int DEFAULT NULL,
  PRIMARY KEY (`id_consequencia`),
  KEY `id_historia` (`id_historia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `consequencia`
--

INSERT INTO `consequencia` (`id_consequencia`, `texto`, `imagem`, `id_historia`) VALUES
(1, 'Ao abrir o baú Alex observa vários objetos embaralhados nos quais chamam muito sua atenção, como uma antiga bússola, uma imagem do Santo Isidoro de Sevilha, padroeiros dos historiadores e dos internautas no qual seu avô tinha muita devoção e uma chave enferrujada, que por conta de morar em um ambiente úmido a chave sofreu uma reação de oxirredução. No fundo desse baú, chamou sua atenção um antigo mapa que estava coberto de pó, muito curioso Alex começa a analisá-lo.', NULL, NULL),
(2, 'Sua mãe ao ler a carta, se sente assustada e com medo de seu filho Alex ir atrás das coisas passadas de seu avô e guarda o baú em um local onde Alex não pode encontrá-lo. FIM DE JOGO!\r\n', NULL, NULL),
(3, 'Alex decide contar à sua família que iria partir em busca dos segredos de seu avô, pois achava que sua missão era seguir o legado dele. Sua família não concordou com a ideia pois achou muito arriscado Alex ir em busca de algo que ele não sabia o que iria encontrar, por fim Alex decidiu desistir da ideia por influência da família.', NULL, NULL),
(4, ' Alex pensa que sua família não entenderia sua missão e decide não falar a verdade, ao contrário diz que vai viajar com suas economias de férias para a casa de um amigo.  ', NULL, NULL),
(5, 'Quando Alex estiver na igreja encontrará um outro baú que será necessário o uso da chave para continuar. ', NULL, NULL),
(6, 'Inconscientemente Alex escolhe os objetos certos para levar em sua jornada.', NULL, NULL),
(7, 'Alex decide atravessar o rio pela antiga ponte da cidade, no meio do percurso com Alex em cima da ponte as madeiras já podres, começam a estalar e por fim, quase finalizando a ponte desmorona e Alex cai no rio.', NULL, NULL),
(8, 'Alex decide pegar a balsa para atravessar e enfim chegar no vilarejo.\r\n', NULL, NULL),
(9, 'Alex decide ignorar o vendedor “americano” e acaba não encontrando Eliot.', NULL, NULL),
(10, 'Alex aceita a ajuda e vai com o americano até Eliot Castillo.', NULL, NULL),
(11, 'Alex cai no papo de Eliot e desanima com o que ouve de Nicarau, e pensa que realmente pode ser perda de tempo.', NULL, NULL),
(12, 'Alex decide continuar seu caminho e vai até a igreja.', NULL, NULL),
(13, 'Alex desvia do seu caminho e acaba não entendendo as pistas.', NULL, NULL),
(14, 'Alex analisa o altar entre mesas, velas e toalhas por um tempo até quando chega a um canto do altar enxergando um relicário quase escondido na parede da igreja.', NULL, NULL),
(15, 'Alex decidiu ao arrumar suas coisas trazer uma bússola ao invés da chave que abriria a fechadura.', NULL, NULL),
(16, 'Alex escolheu certo ao arrumar suas coisas e trouxe a chave para abrir a fechadura. ', NULL, NULL),
(17, 'Alex volta para a casa de Eliot para contar-lhe que encontrou um novo mapa, com uma cidade desconhecida. Eliot ao ver o mapa se mostra outra pessoa e decide roubar o mapa de Alex.', NULL, NULL),
(18, 'Alex decide ir direto ao início da trilha indicado no mapa. ', NULL, NULL),
(19, 'Alex continuou o caminho e descobriu que estava pisando em areia movediça e acabou afundando até não sobreviver mais.', NULL, NULL),
(20, 'Alex continuou por pedras que costeiam o caminho.', NULL, NULL),
(21, 'Alex decide passar a noite em cima da árvore e com isso acaba sendo picado por uma cobra venenosa.', NULL, NULL),
(22, 'Alex decide passar a noite em uma casa abandonada onde ele encontra um lampião para não ficar no breu.', NULL, NULL),
(23, 'Alex decide comer a maçã e acaba se envenenando com a própria.', NULL, NULL),
(24, 'Alex decide não comer a maçã pois fica com medo de acabar se envenenando, então ele prefere ficar com fome.', NULL, NULL),
(25, 'Alex não soube se guiar e acabou escolhendo o caminho errado.', NULL, NULL),
(26, 'Alex conseguiu ter noção de orientação e consegui escolher o caminho correto.', NULL, NULL),
(27, 'Alex se aproxima da beira do mirante e ao pisar em falso desaba precipício abaixo.', NULL, NULL),
(28, 'Alex decide ao invés de perder tempo, continuar sua jornada em busca da cidade apontada no mapa.', NULL, NULL),
(29, 'Alex decide continuar para chegar mais rápido ao seu destino e acaba afetado pela irradiação dos raios UVA e sendo morto pela insolação, cansaço, fome e sede. ', NULL, NULL),
(30, 'Alex opta por parar para descansar, aproveitando que embaixo das árvores é uma zona de ar com temperatura menor para beber água e comer um lanche.', NULL, NULL),
(31, 'Alex decide olhar as  construções de perto e com isso acaba acionando uma armadilha ali construída e acaba ficando preso.', NULL, NULL),
(32, 'Alex acaba mais curioso com a grande pirâmide então decide ir até ela.', NULL, NULL),
(33, 'Alex, ao abrir a lápide acaba fraturando o pulso e sem encontrar nada, acaba se frustrando e com muita dor decide voltar para casa.', NULL, NULL),
(34, 'Alex, ao sair da pirâmide decide então procurar pela casa de número 753 com a esperança de encontrar algo ou explicações relacionadas ao seu avô.', NULL, NULL),
(35, 'Alex continua lendo o livro, quando de repente a catacumba se fecha e Alex não consegue mais abri-lá.', NULL, NULL),
(36, 'Alex prontamente desce as escadas do subterrâneo para explorar a catacumba.', NULL, NULL),
(37, 'Relógio toca.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolha`
--

DROP TABLE IF EXISTS `escolha`;
CREATE TABLE IF NOT EXISTS `escolha` (
  `id_escolha` int NOT NULL,
  `escolha` varchar(255) DEFAULT NULL,
  `consequencia` mediumtext,
  PRIMARY KEY (`id_escolha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `escolha`
--

INSERT INTO `escolha` (`id_escolha`, `escolha`, `consequencia`) VALUES
(1, 'Abrir o baú:', NULL),
(2, 'Mostrar a carta para a mãe:', NULL),
(3, 'Contar para a família:', NULL),
(4, 'Não contar para a família:', NULL),
(5, ' Levar a bússola, um santo e um livro: ', NULL),
(6, 'Levar a chave, um Santo e um livro:', NULL),
(7, 'Ir pela ponte de Madeira:', NULL),
(8, 'Ir de Balsa: ', NULL),
(9, '“I don’t speak English”:', NULL),
(10, ' “I would love that”:', NULL),
(11, 'Continuar escutando Eliot:', NULL),
(12, 'Ir até a igreja:', NULL),
(13, 'Procurar na volta da igreja:', NULL),
(14, 'Procurar no altar: ', NULL),
(15, 'Alex não trouxe a chave: ', NULL),
(16, 'Alex trouxe a chave:', NULL),
(17, 'Contar a Eliot:', NULL),
(18, 'Alex parte para a trilha:', NULL),
(19, 'Continuar o caminho: ', NULL),
(20, 'Trocar o caminho:', NULL),
(21, 'Dormir em cima da árvore:', NULL),
(22, 'Dormir na casa abandonada: ', NULL),
(23, 'Comer a maçã: ', NULL),
(24, 'Não comer a maçã: ', NULL),
(25, 'Suas costas estão apontadas: ', NULL),
(26, 'Seu peito está apontado:', NULL),
(27, 'Tentar enxergar Nicarau:', NULL),
(28, ' Ignorar a vista:', NULL),
(29, ' Continuar até o próximo ponto: ', NULL),
(30, 'Aproveitar o espaço aberto: ', NULL),
(31, 'Ir nas construções:', NULL),
(32, 'Ir na pirâmide:', NULL),
(33, ' Abrir a lápide:', NULL),
(34, 'Sair da pirâmide:', NULL),
(35, 'Continuar lendo o livro:', NULL),
(36, ' Entrar na catacumba:', NULL),
(37, 'Abrir o baú:', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `id_historia` int NOT NULL,
  `texto` mediumtext,
  `imagem` varchar(255) DEFAULT NULL,
  `id_escolha` int DEFAULT NULL,
  PRIMARY KEY (`id_historia`),
  KEY `id_escolha` (`id_escolha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`id_historia`, `texto`, `imagem`, `id_escolha`) VALUES
(1, 'Alex era um menino muito curioso que adorava aventuras. Ele havia completado recentemente seus 18 anos de idade e se formado no Ensino Médio. Um de seus sonhos era se tornar um historiador seguindo os passos de seu falecido avô.\r\nAlexandre era um grande historiador dos anos 90, famoso por uma de suas teorias sobre uma cidade perdida. Alex e seu avô Alexandre eram muito próximos e por conta disto despertou em Alex o desejo de também ser um historiador como o seu avô e descobrir sobre a cidade perdida de que ele tanto lhe falava.\r\n	No dia 18 de agosto de 2021, Alex, ao chegar em casa após a escola, recebeu a triste notícia de sua mãe que seu avô havia falecido, vítima de um dos grandes surtos do vírus da COVID-19. A tese mais aceita seria que o vírus passou do morcego para um mamífero intermediário, e dele para o principal hospedeiro, o ser humano.\r\n\r\n\r\n', NULL, NULL),
(2, 'Dois anos depois da morte de seu avô, Alex recebe uma carta junto com uma caixa de sua mãe, que foi deixada por seu avô antes de falecer em forma de herança. Alex lê a carta na qual dizia: “Meu querido neto, creio que fui um homem de poucas posses e durante minha vida acumulei uma coleção de coisas que para muitos não teriam valor. Mas, para um jovem historiador como tu, esses objetos poderiam revelar segredos fascinantes do passado. A estrada que escolheste seguir, a de um historiador, é uma jornada cheia de surpresas, reviravoltas e descobertas incríveis. Não temas o desconhecido, meu neto, pois é nele que os melhores segredos estão escondidos. O baú é apenas o começo. Do outro lado da vida, com amor e um toque de mistério, teu avô.\r\nObs: Lembra-te: as maiores histórias estão ocultas nas entrelinhas e naquilo que não é dito.”', NULL, NULL),
(3, 'Alex achou o mapa muito interessante e sentiu-se instigado para ir em busca dos segredos que aquele mapa trazia.', NULL, NULL),
(4, 'Alex vai arrumar sua mochila para ir em busca dos segredos que há no mapa. Sem muito saber o que levar por não saber o que lhe espera, Alex pega primeiramente roupas e depois decide levar alguns objetos que encontrou no baú de seu avô.', NULL, NULL),
(5, 'Alex, com suas coisas arrumadas, compra uma passagem de ônibus para a cidade mais próxima do ‘X’ no mapa. No caminho da longa viagem, Alex analisa o mapa novamente e percebe que há no verso um nome masculino escrito, sendo visível quando posto contra a luz. Chegando na cidade, Alex descobre que o ‘X’ se trata de um vilarejo chamado Nicarau e que, para chegar até o local, é necessário atravessar um rio.\r\n', NULL, NULL),
(6, 'Chegando ao pequeno porto de Nicarau, Alex decide ir em busca do nome escrito no mapa. Ao sair do atracamento, Alex encontra uma feirinha muito movimentada. Partindo para lá decide perguntar a alguém sobre o nome que havia no mapa. Chamou sua atenção dentre várias barracas uma que vendia artigos religiosos. quando de repente um vendedor de peixe lhe abordou: DIÁLOGO – americano: ‘Hi, do you need any help?\r\n    alex: “Yes, please” \r\n   alex: \"Do you  know Eliot Castillo?”\r\n   americano: “Do you want me to take you to the missionary?”\r\nAlex diz:\r\n', NULL, NULL),
(7, 'Chegando na casa de Eliot Castillo, Alex mostra o mapa de seu avô e pergunta o porquê de seu nome estar escrito nele. Eliot então, conta para Alex sobre sua amizade com o seu avô Alexandre quando o ajudava a desvendar mistérios sobre o vilarejo. Eliot também comenta que a vila é composta por grande parte de missionários. Tendo culturalmente o hábito de realizar grandes missas na catedral da cidade, onde todos sempre participam. Eliot começa a falar mal do vilarejo para Alex e afirma que estar ali é perda de tempo.', NULL, NULL),
(8, 'Chegando na igreja, Alex nota que o nome da catedral é o mesmo do santo que seu avô era devoto: Santo Isidoro de Sevilha. Então decide entrar na igreja e fica encantado com a estrutura do local. Em seguida, decide procurar alguma pista.', NULL, NULL),
(9, 'Alex percebe que o relicário era do Santo Isidoro de Sevilha. Ao se aproximar muito intrigado, nota uma espécie de fenda que mais parecia uma fechadura, Alex lembra da chave que havia encontrado no baú.\r\n\r\n', NULL, NULL),
(10, 'Alex usa a chave que trouxe e abre o relicário. Dentro encontra um novo baú, decide abrir e descobre um novo mapa sobre uma cidade desconhecida, mas para chegar até ela é necessário passar pela floresta.\r\n', NULL, NULL),
(11, 'Alex partiu ao primeiro ponto do mapa por uma trilha aparentemente segura, já que o caminho da trilha não era tão inclinado até então. Alex caminhou por um tempo até encontrar um trecho onde não sabia como prosseguir.\r\n', NULL, NULL),
(12, 'Alex chega ao primeiro ponto do mapa e encontra uma placa avisando que a trilha é perigosa.', NULL, NULL),
(13, 'Alex ignorou a placa e continuou seu caminho pela trilha porém, com receio por conta do sol que já estava se pondo. Alex apressa o passo para o próximo ponto de referência do mapa para passar a noite. Chegando lá, Alex vê um conjunto de ruínas, o que parecia uma antiga casa, então decide:', NULL, NULL),
(14, 'Ao amanhecer, Alex continua seu caminho para desbravar aquela trilha em busca do próximo “X”. Ao seguir a caminhada Alex encontra uma macieira com vários frutos. Apesar da fome, estava com medo de as frutas não lhe fazerem bem.\r\n', NULL, NULL),
(15, 'Alex continua seu trajeto por um tempo, até encontrar uma espécie de trevo onde tinha dois caminhos. Olhando para o mapa ele descobre que precisa ir para o Norte, ele está de frente para o sol nascente e então ao abrir seus braços e apontar seu braço direito para o sol Alex deverá escolher o caminho para o qual:', NULL, NULL),
(16, 'Ao escolher o caminho certo, Alex continua bravamente a trilha agora cada vez mais íngreme. Ao chegar em certo ponto de seu caminho, Alex nota a elevação no relevo em relação à área de onde partiu, então conclui que se trata de uma montanha. Ao continuar Alex descobre que o novo ponto se trata de um mirante um pouco turvo pela mata que vinha avançando. Alex então decide ir ver a vista onde nota um alto precipício e ao fundo, tapado pelas árvores, algo que parecia o vilarejo de onde partiu.', NULL, NULL),
(17, 'Alex segue a trilha em meio à mata cada vez mais fechada e um árduo caminho de areia. Já cansado, com sede e muito calor pela exposição ao sol, continua a trilha até chegar a um espaço limpo de mata, mas com muita sombra por conta das altas árvores que impedem a radiação solar direta. Então Alex decide:', NULL, NULL),
(18, 'Após descansar, Alex continuou seu trajeto até encontrar a rocha descrita no mapa. Quando de repente avistou uma rocha esculpida, com um formato de um rosto, Alex entendeu que a rocha descrita no mapa se tratava de um rosto e então imaginou que poderia estar chegando ao seu destino.', NULL, NULL),
(19, 'Ao continuar seu caminho, Alex percebe que a mata já era menos densa, e logo ele começou a avistar ruínas que pareciam pirâmides e templos feitos de pedra. Chegando ao que parecia ser uma grande entrada, Alex nota uma sequência de símbolos esculpidos em uma pedra ao lado de algo que se parecia um portão. Os desenhos eram parecidos com um abecedário que tinha no livro que seu avô lhe deu, então Alex teve a ideia de tentar traduzir o que estava escrito:', NULL, NULL),
(20, 'Alex descobre que a cidade “perdida” se trata de uma antiga cidade maia da era clássica chamada Tikal. Com isso, lembrou que seu falecido avô falava sobre as cidades maias que tinham muita influência em toda mesoamérica, também conhecidas por suas grandes pirâmides e construções de arquitetura única.', NULL, NULL),
(21, 'Alex subiu as escadas da pirâmide e chegando no topo em um local que parecia ser um templo, avistou uma lápide. Intrigado, Alex se aproximou para ler e entender do que se tratava:', NULL, NULL),
(22, 'Alex acha estranho a mensagem na lápide por não estar na linguagem maia e conclui que aquilo pode ter sido posto por seu avô como forma de uma pista para desvendar o mistério.', NULL, NULL),
(23, 'Alex após entender o enigma que seu avô havia deixado na lápide, vai em busca da ruína de número 753. Ao andar pelas ruínas de Tikal, Alex encontra algo que poderia ser o local de número 753, então decide entrar e procurar por pistas. \r\n	Ao entrar, Alex se lembra do livro de seu avô que trouxe junto dele, e ao folheá-lo se apoiou em uma das grandes pedras que havia no local. Sem querer aciona um mecanismo que abre uma porta para o subterrâneo. \r\n', NULL, NULL),
(24, 'Andando em meio a túneis e ossários, Alex decide então acender uma tocha para explorar a catacumba. Ao andar, Alex percebe que existe um padrão numérico para cada sala e decide procurar novamente pelo número 753. \r\nEm busca desta sala, Alex só consegue enxergar aquilo que o fogo da tocha ilumina. Ao longo de seu percurso Alex sentia cada vez mais medo ao passar por diversos esqueletos cobertos por jóias, roupas e poeira. \r\nEntão Alex encontra a sala com o número 753, a qual não possuía ossos, era mais vazia e diferente das outras pelas quais havia passado naquele subterrâneo. Alex começou a procurar pelas paredes vazias algo que pudesse fazer sentido, quando de repente um reflexo de luz vindo de uma fechadura brilha o olho dele. Alex nota que há um baú no centro da sala em cima de um velho pedestal. Alex se choca por ver seu nome escrito no baú, com a situação Alex tem suas emoções afloradas e com aquilo que parecia ser o final de sua jornada, Alex pensa que ao abrir o baú tudo fará sentido, ele descobrirá por que seu avô fez com que ele passasse por tudo e o que ele ganharia com isso…', NULL, NULL),
(25, 'Alex escuta seu despertador tocar e ouve sua mãe lhe chamando desesperadamente para aula, avisando que seu avô Alexandre vai levá-lo para escola.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `score` int DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `consequencia`
--
ALTER TABLE `consequencia`
  ADD CONSTRAINT `consequencia_ibfk_1` FOREIGN KEY (`id_historia`) REFERENCES `historia` (`id_historia`);

--
-- Limitadores para a tabela `historia`
--
ALTER TABLE `historia`
  ADD CONSTRAINT `historia_ibfk_1` FOREIGN KEY (`id_escolha`) REFERENCES `escolha` (`id_escolha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
