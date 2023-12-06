-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Out-2023 às 01:12
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
(11, 19, 'Se tornar diplomata');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `id_historia` smallint NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id_historia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`id_historia`, `descricao`, `imagem`) VALUES
(1, 'Marcelino é um estudioso que vive em Alexandria no Egito, no ano 48 a.C, quando o Pompeu fugiu para o Egito ptolemaico. Marcelino é um amante do conhecimento e da cultura. Ele se encontra no momento crucial em que a grande Biblioteca de Alexandria está em chamas, após o ditador Júlio César mandar atacar a cidade, Pois Pompeu estava na região e Pompeu e Júlio Cesar estavam em confronto.', 'incendio-biblioteca.jpg'),
(2, 'Marcelino entra na biblioteca em chamas para tentar salvar alguns livros e pergaminhos. O fogo está se espalhando rapidamente, e ele precisa decidir como proceder.\r\nO fogo está se espalhando mais rápido.', ''),
(3, 'Por sua casa ser muito perto de onde estava acontecendo o incêndio, Marcelino não teve outra escolha se não, deixar sua casa e pegar seus itens pessoais e que ele considerava importante para ele, e fugir do local, buscando abrigo na casa de seus avós que moravam em uma zona rural próxima a cidade Ele buscava refúgio e consolo em um ambiente familiar e sereno, longe da tristeza que pairava sobre Alexandria.', ''),
(4, 'Marcelino continua dentro da biblioteca tentando salvar o máximo de conhecimento possível. Ele encontra pergaminhos raros sobre astronomia e pergaminhos e livros sobre filosofia.', ''),
(5, 'Marcelino percebe que o fogo esta incontrolável e decide sair da biblioteca o mais rápido possível. Após sair do local, ele se depara com o caos na cidade durante o ataque de Júlio Cesar. Então Marcelino tem a ideia de fugir para o porto, mas ele vê um grupo de estudantes procurando refugio.', ''),
(6, 'Marcelino decide que o ambiente rural e a companhia de seus avós são essenciais para sua cura emocional. Ele continua a morar com eles, ajudando nas tarefas da fazenda, cultivando uma vida simples e pacífica. Marcelino passa seu tempo escrevendo e documentando suas reflexões sobre a tragédia da Biblioteca de Alexandria, criando um acervo pessoal de conhecimento. Ele se torna uma figura respeitada na comunidade local e é lembrado como alguém que valorizou a família e a tranquilidade do campo.\r\nFoi durante esse período que Marcelino conheceu duas jovens mulheres que viviam nas proximidades da fazenda de seus avós.\r\nse chamavam Clara e Helena.', ''),
(7, 'Marcelino, após um período de recuperação na casa de seus avós, decide que é hora de seguir em frente e continuar sua jornada em busca de conhecimento e sabedoria. Ele se despede de seus avós com gratidão e parte para Alexandria novamente. Lá, ele se junta a um grupo de estudiosos que estão trabalhando na reconstrução de uma nova biblioteca. Marcelino contribui com seus próprios escritos e se envolve no esforço para reunir e preservar o conhecimento que restou após o incêndio. Sua dedicação e paixão o tornam uma parte essencial da nova era de aprendizado em Alexandria.', ''),
(8, 'Marcelino escolhe salvar o pergaminho raro de astronomia e consegue sair em segurança da biblioteca em chamas.\r\nMarcelino estuda sobre astronomia e se torna um renomado astrônomo.  Sua dedicação ao estudo do cosmos o leva a fazer descobertas revolucionárias. No entanto, essa busca incessante por conhecimento o isola do mundo ao seu redor. Ele dedica a maior parte de sua vida observando estrelas e planetas.\r\num certo dia, Marcelino viaja para o Egito onde estava no topo do monte Sinai a 2.285m de altitude, observando as estrelas, quando vê uma menina estudante de astronomia que estava fazendo o mesmo que ele ali naquele monte, observando as estrelas.\r\n ', ''),
(9, 'Marcelino escolhe pegar os textos de filosofia. Ele consegue sair em segurança da biblioteca em chamas.\r\nMarcelino estuda todos os textos que ele conseguiu salvar e se torna um filosofo influente, suas ideias e ensinamentos moldam o pensamento da época.', ''),
(10, 'Marcelino decide ir para o porto para tentar fugir do caos. Ele consegue entrar em um navio que parte para o Mar Mediterrâneo, porém ele tem a escolha de ir para o noroeste ou para o oeste. ', ''),
(11, 'Marcelino decide se juntar aos estudantes que estavam buscando algum refugio para se proteger. Após tudo voltar à se normalizar, Marcelino se torna um dos guardiões dos textos que foram salvos durante o incêndio. ', ''),
(12, 'Marcelino depois de observar duas noites seguidas, as estrelas naquele monte, retorna a Alexandria onde fica por mais tempo em sua casa. Marcelino morre sozinho, mas sua obra se torna uma referência para futuros astrônomos, e ele é lembrado como um dos maiores cientistas da Antiguidade.', ''),
(13, 'Marcelino vai ao encontro dessa menina, eles conversam e percebem os interesses em comum. começam a namorar, e depois de um bom tempo juntos ele se casa com a estudiosa da astronomia que compartilha de seu amor pelo cosmos. Eles têm filhos que continuam seu legado, criando uma dinastia de astrônomos respeitados.', ''),
(14, 'Marcelino, ao longo de sua vida, orienta vários jovens estudiosos que se tornam filósofos notáveis. Ele morre com sua filosofia bem estabelecida e é lembrado como um dos grandes pensadores da história.', ''),
(15, 'Marcelino, à medida que envelhece, enfrenta conflitos filosóficos com outros pensadores de sua época. Sua busca pela sabedoria o leva a desafiar as normas e a estabelecer novas escolas de pensamento.', ''),
(16, 'Marcelino acaba seguindo pelo Oeste, e chega a avistar terra firme, onde seria a África, mas antes mesmo de o navio chegar perto da terra, ele fica doente dentro do navio, com febres intensas, dor de cabeça vômito e até convulsões.\r\nMarcelino estava com Malária, uma doença causada pelo protozoário do gênero Plasmodium.\r\nUma simples picada de um mosquito o levou  a morte dentro do navio, sem mesmo ter tido tempo de chegar a algum lugar.\r\n No entanto, sua coleção de artefatos, livros e histórias enriquece as futuras gerações com um tesouro de conhecimento e diversidade cultural.', ''),
(17, 'Marcelino segue pelo Noroeste e ao chegar em Atenas rapidamente percebe a diferença cultural, pois ele nunca tinha saído de Alexandria.\r\nMarcelino se depara com um debate em praça pública, onde os cidadãos de Atenas estão discutindo decisões politicas.\r\nLogo após se estabelecer na cidade de Atenas, Marcelino entra para a academia de Platão para se aprofundar nos estudos sobre ensinamentos gerais.\r\nEnquanto viveu em Atenas, Marcelino obteve muito conhecimento sobre a cultura local e escreveu livros.\r\nMarcelino, por mais que tenha se tornado um homem muito conhecido e renomado, não podia participar das decisões políticas da polis,\r\npois estrangeiros não podiam participar.', ''),
(18, ' Marcelino continua sua missão como guardião, dedicando sua vida a preservar a cultura e a história. Ele morre no cumprimento de seu dever, mas sua devoção é lembrada por gerações futuras.', ''),
(19, 'Marcelino se torna um diplomata, viajando para diferentes regiões para negociar a troca de conhecimento. Sua habilidade em construir alianças culturais e compartilhar conhecimento o torna um herói da época.', ''),
(20, 'Clara, uma jovem gentil e apaixonada por natureza, compartilhou com Marcelino uma paixão pelo conhecimento e pelo aprendizado. Os dois passaram horas explorando a paisagem local, discutindo filosofia e lendo juntos. À medida que o tempo passava, seu relacionamento se aprofundava, e eles se apaixonaram. Marcelino escolheu ficar com Clara, e juntos eles construíram uma vida pacífica no campo, combinando suas paixões pelo aprendizado e pela natureza.', ''),
(21, 'Elena era uma jovem vivaz e cheia de energia, que trouxe uma nova vitalidade para a vida de Marcelino. Ela o incentivou a explorar novos horizontes, experimentando novas aventuras e se aventurando na cidade em busca de novos conhecimentos. Marcelino se sentiu atraído pela energia e entusiasmo de Elena. Ele escolheu ficar com ela e, juntos, embarcaram em uma jornada repleta de descobertas e explorações, mantendo o amor pelo conhecimento como parte fundamental de sua relação.', ''),
(22, 'Marcelino se envolve profundamente na reconstrução da nova biblioteca em Alexandria. Ele está determinado a preservar o conhecimento e fazer uma contribuição significativa. Infelizmente, durante um incêndio acidental na nova biblioteca, Marcelino é pego nas chamas enquanto tenta salvar manuscritos valiosos. Ele perece heroicamente no incêndio, sua dedicação ao conhecimento perdendo a vida.', ''),
(23, 'Naquele dia 29 de Setembro Circula a noticia na cidade que o Pompeu, o Grande, é assassinado enquanto procurava obter asilo político no Egito.\r\nPorém, Marcelino e seu grupo de estudos não dão muita atenção para o ocorrido, e seguem a sua expedição onde\r\n pesquisando antigas relíquias e manuscritos em uma missão para descobrir segredos antigos. Durante essa expedição perigosa, seu grupo é emboscado por ladrões de conhecimento, que desejam roubar os manuscritos. Marcelino tenta resistir, mas ele é mortalmente ferido durante o confronto.', ''),
(24, 'Marcelino tenta pegar ambos livros e pergaminhos, mas quando ele chega na saída, ele se depara com ela fechada por destroços. Marcelino morre asfixiado na biblioteca.', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
