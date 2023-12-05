-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Dez-2023 às 02:00
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

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
  `id_escolha` int NOT NULL AUTO_INCREMENT,
  `id_origem` smallint NOT NULL,
  `id_destino` smallint NOT NULL,
  `descricao_alt` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_escolha`),
  KEY `id_origem` (`id_origem`),
  KEY `id_destino` (`id_destino`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `escolha`
--

INSERT INTO `escolha` (`id_escolha`, `id_origem`, `id_destino`, `descricao_alt`) VALUES
(1, 1, 2, 'Tentar salvar textos na biblioteca'),
(2, 1, 3, 'Sair do local'),
(4, 2, 4, 'Pega o máximo que puder'),
(5, 2, 5, 'Sair da biblioteca'),
(6, 3, 6, 'Continuar morando com os avós'),
(7, 3, 7, 'Seguir sua vida'),
(8, 4, 8, 'Pegar pergaminho raro de astronomia'),
(9, 4, 9, 'Salvar os textos de filosofia'),
(10, 4, 24, 'Pegar os dois'),
(11, 5, 10, 'Ir para o porto'),
(12, 5, 11, 'Se juntar ao grupo de estudantes'),
(13, 6, 20, 'Ficar com a Clara'),
(14, 6, 21, 'Ficar com a Helena'),
(15, 7, 22, 'Continuar na reconstrução da nova biblioteca'),
(16, 7, 23, 'Ir a uma expedição com o grupo'),
(17, 8, 12, 'Encerrar jornada no Monte Sinai'),
(18, 8, 13, 'Conhecer a menina'),
(19, 9, 14, 'Decide passar seus ensinamentos'),
(20, 9, 15, 'Continuar estudando'),
(21, 10, 16, 'Ir para o Oeste'),
(22, 10, 17, 'Ir para o Nordeste'),
(23, 11, 18, 'Continuar como guardião'),
(24, 11, 19, 'Se tornar diplomata'),
(25, 12, 1, 'Voltar ao inicio'),
(26, 13, 1, 'Voltar ao inicio'),
(27, 14, 1, 'Voltar ao inicio'),
(28, 15, 1, 'Voltar ao inicio'),
(29, 16, 1, 'Voltar ao inicio'),
(30, 17, 1, 'Voltar ao inicio'),
(31, 18, 1, 'Voltar ao inicio'),
(32, 19, 1, 'Voltar ao inicio'),
(33, 20, 1, 'Voltar ao inicio'),
(34, 21, 1, 'Voltar ao inicio'),
(35, 22, 1, 'Voltar ao inicio'),
(36, 23, 1, 'Voltar ao inicio'),
(37, 24, 1, 'Voltar ao inicio'),
(38, 7, 25, 'Contribuição á Reconstrução'),
(39, 7, 26, 'Ir a expedição cientifica.'),
(40, 22, 29, 'Ficar dentro da biblioteca para evitar o calor'),
(41, 22, 27, 'Marcelino vai ao encontro dos visitantes.'),
(42, 22, 28, 'Marcelino permite que os visitantes entrem na biblioteca.');

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
(1, 'Marcelino é um estudioso que vive em Alexandria no Egito, no ano 48 a.C, quando o Pompeu fugiu para o Egito ptolemaico. Marcelino é um amante do conhecimento e da cultura. Ele se encontra no momento crucial em que a grande Biblioteca de Alexandria está em chamas, após o ditador Júlio César mandar atacar a cidade, Pois Pompeu estava na região e Pompeu e Júlio Cesar estavam em confronto.', 'fogo.jpg'),
(2, 'Marcelino entra na biblioteca em chamas para tentar salvar alguns livros e pergaminhos. O fogo está se espalhando rapidamente, e ele precisa decidir como proceder.\r\nO fogo está se espalhando mais rápido.', 'id02.jpg'),
(3, 'Por sua casa ser muito perto de onde estava acontecendo o incêndio, Marcelino não teve outra escolha se não, deixar sua casa e pegar seus itens pessoais e que ele considerava importante para ele, e fugir do local, buscando abrigo na casa de seus avós que moravam em uma zona rural próxima a cidade Ele buscava refúgio e consolo em um ambiente familiar e sereno, longe da tristeza que pairava sobre Alexandria.', 'campo.jpg'),
(4, 'Marcelino continua dentro da biblioteca tentando salvar o máximo de conhecimento possível. Ele encontra pergaminhos raros sobre astronomia e pergaminhos e livros sobre filosofia.', 'biblioteca-de-alexandria-antiga.jpg'),
(5, 'Marcelino percebe que o fogo esta incontrolável e decide sair da biblioteca o mais rápido possível. Após sair do local, ele se depara com o caos na cidade durante o ataque de Júlio Cesar. Então Marcelino tem a ideia de fugir para o porto, mas ele vê um grupo de estudantes procurando refugio.', 'id5.jpg'),
(6, 'Marcelino decide que o ambiente rural e a companhia de seus avós são essenciais para sua cura emocional. Ele continua a morar com eles, ajudando nas tarefas da fazenda, cultivando uma vida simples e pacífica. Marcelino passa seu tempo escrevendo e documentando suas reflexões sobre a tragédia da Biblioteca de Alexandria, criando um acervo pessoal de conhecimento. Ele se torna uma figura respeitada na comunidade local e é lembrado como alguém que valorizou a família e a tranquilidade do campo.\r\nFoi durante esse período que Marcelino conheceu duas jovens mulheres que viviam nas proximidades da fazenda de seus avós.\r\nse chamavam Clara e Helena.', 'moças2.jpg'),
(7, 'Marcelino, após um período de recuperação na casa de seus avós, decide que é hora de seguir em frente e continuar sua jornada em busca de conhecimento e sabedoria. Ele se despede de seus avós com gratidão e parte para Alexandria novamente. Lá, ele se junta a um grupo de estudiosos que estão trabalhando na reconstrução de uma nova biblioteca. Marcelino contribui com seus próprios escritos e se envolve no esforço para reunir e preservar o conhecimento que restou após o incêndio. Sua dedicação e paixão o tornam uma parte essencial da nova era de aprendizado em Alexandria.', 'tchauAvos.jpg'),
(8, 'Marcelino escolhe salvar o pergaminho raro de astronomia e consegue sair em segurança da biblioteca em chamas.\r\nMarcelino estuda sobre astronomia e se torna um renomado astrônomo.  Sua dedicação ao estudo do cosmos o leva a fazer descobertas revolucionárias. No entanto, essa busca incessante por conhecimento o isola do mundo ao seu redor. Ele dedica a maior parte de sua vida observando estrelas e planetas.\r\num certo dia, Marcelino viaja para o Egito onde estava no topo do monte Sinai a 2.285m de altitude, observando as estrelas, quando vê uma menina estudante de astronomia que estava fazendo o mesmo que ele ali naquele monte, observando as estrelas.\r\n ', 'sinai1.jpg'),
(9, 'Marcelino escolhe pegar os textos de filosofia. Ele consegue sair em segurança da biblioteca em chamas.\r\nMarcelino estuda todos os textos que ele conseguiu salvar e se torna um filosofo influente, suas ideias e ensinamentos moldam o pensamento da época.', 'id9.jpg'),
(10, 'Marcelino decide ir para o porto para tentar fugir do caos. Ele consegue entrar em um navio que parte para o Mar Mediterrâneo, porém ele tem a escolha de ir para o noroeste ou para o oeste. ', 'id10.jpg'),
(11, 'Marcelino decide se juntar aos estudantes que estavam buscando algum refugio para se proteger. Após tudo voltar à se normalizar, Marcelino se torna um dos guardiões dos textos que foram salvos durante o incêndio. ', 'grupo.jpg'),
(12, 'Marcelino depois de observar duas noites seguidas, as estrelas naquele monte, retorna a Alexandria onde fica por mais tempo em sua casa. Marcelino morre sozinho, mas sua obra se torna uma referência para futuros astrônomos, e ele é lembrado como um dos maiores cientistas da Antiguidade.', 'id12.jpg'),
(13, 'Marcelino vai ao encontro dessa menina, eles conversam e a menina fica super interessada na historia de Marcelino, principalmente por suas grandes descobertas ja feitas, a menina tem interesse em objetos que Marcelino salvou da biblioteca, alguns desses objetos seria os pergaminhos.\r\nela planeja uma viagem a dois para eles, para o topo de uma montanha, onde ela disse para ele que eles iriam observar as estrelas a noite e passar um tempo juntos. Mas oque Marcelino não imaginava, é que tudo era um  emboscada para ela cruelmente o assassinar e ficar com seus objetos de grande valor.\r\nChegando ao local que supostamente iriam admirar as estrelas, eles sentam na beira do penhasco para terem uma melhor visão do local, é quando Marcelino se levanta para pegar algumas coisas em sua mochila, que ela então parte para cima dele o empurrando do penhasco, Marcelino sem chances de se defender ou se segurar em algum lugar, acaba caindo daquela altura, enquanto despenca Marcelino grita de desespero até o impacto no chão, e infelizmente acabar falecendo.', 'id13.jpg'),
(14, 'Marcelino, ao longo de sua vida, orienta vários jovens estudiosos que se tornam filósofos notáveis. Ele morre com sua filosofia bem estabelecida e é lembrado como um dos grandes pensadores da história.', 'id14.jpg'),
(15, 'Marcelino, à medida que envelhece, enfrenta conflitos filosóficos com outros pensadores de sua época. Sua busca pela sabedoria o leva a desafiar as normas e a estabelecer novas escolas de pensamento.', 'id15.jpg'),
(16, 'Marcelino acaba seguindo pelo Oeste, e chega a avistar terra firme, onde seria a África, mas antes mesmo de o navio chegar perto da terra, ele fica doente dentro do navio, com febres intensas, dor de cabeça vômito e até convulsões.\r\nMarcelino estava com Malária, uma doença causada pelo protozoário do gênero Plasmodium.\r\nUma simples picada de um mosquito o levou  a morte dentro do navio, sem mesmo ter tido tempo de chegar a algum lugar.\r\n No entanto, sua coleção de artefatos, livros e histórias enriquece as futuras gerações com um tesouro de conhecimento e diversidade cultural.', 'barco.png'),
(17, 'Marcelino segue pelo Noroeste e ao chegar em Atenas rapidamente percebe a diferença cultural, pois ele nunca tinha saído de Alexandria.\r\nMarcelino se depara com um debate em praça pública, onde os cidadãos de Atenas estão discutindo decisões politicas.\r\nLogo após se estabelecer na cidade de Atenas, Marcelino entra para a academia de Platão para se aprofundar nos estudos sobre ensinamentos gerais.\r\nEnquanto viveu em Atenas, Marcelino obteve muito conhecimento sobre a cultura local e escreveu livros.\r\nMarcelino, por mais que tenha se tornado um homem muito conhecido e renomado, não podia participar das decisões políticas da polis,\r\npois estrangeiros não podiam participar.', 'democracia-atenas.jpg'),
(18, ' Marcelino continua sua missão como guardião, dedicando sua vida a preservar a cultura e a história. Ele morre no cumprimento de seu dever, mas sua devoção é lembrada por gerações futuras.', 'id18.jpg\r\n'),
(19, 'Marcelino se torna um diplomata, viajando para diferentes regiões para negociar a troca de conhecimento. Sua habilidade em construir alianças culturais e compartilhar conhecimento o torna um herói da época.', 'id19.jpg'),
(20, 'Clara, uma jovem gentil e apaixonada por natureza, compartilhou com Marcelino uma paixão pelo conhecimento e pelo aprendizado. Os dois passaram horas explorando a paisagem local, discutindo filosofia e lendo juntos. À medida que o tempo passava, seu relacionamento se aprofundava, e eles se apaixonaram. Marcelino escolheu ficar com Clara, e juntos eles construíram uma vida pacífica no campo, combinando suas paixões pelo aprendizado e pela natureza.', 'id20.jpg'),
(21, 'Elena era uma jovem vivaz e cheia de energia, que trouxe uma nova vitalidade para a vida de Marcelino. Ela o incentivou a explorar novos horizontes, experimentando novas aventuras e se aventurando na cidade em busca de novos conhecimentos. Marcelino se sentiu atraído pela energia e entusiasmo de Elena. Ele escolheu ficar com ela e, juntos, embarcaram em uma jornada repleta de descobertas e explorações, mantendo o amor pelo conhecimento como parte fundamental de sua relação.', 'id21.jpg'),
(22, 'Enquanto Marcelino se dedicava à reconstrução da nova biblioteca em Alexandria, ele percebeu a necessidade de expandir seus horizontes linguísticos para alcançar um público mais amplo. Ele decidiu incorporar o inglês em suas atividades diárias, reconhecendo a importância dessa língua global no compartilhamento de conhecimento.\r\nEm uma tarde ensolarada, Marcelino estava na biblioteca, organizando manuscritos e discutindo com outros estudiosos. Ele viu um grupo de visitantes estrangeiros se aproximando. Ao cumprimentá-los, Marcelino notou que eles falavam principalmente inglês.\r\nNaquele dia fazia muito calor na cidade, Marcelino havia já fechado a biblioteca, pois muitas pessoas que passavam por ali entravam para dentro apenas para fugir do sol e do calor insuportável. Marcelino ficou em duvida se deveria ir ao encontro dos visitantes que avistou ou ficar em sua biblioteca protegido dos raios de sol que havia lá fora.', 'construcao.jpg'),
(23, 'Naquele dia 29 de Setembro Circula a noticia na cidade que o Pompeu, o Grande, é assassinado enquanto procurava obter asilo político no Egito.\r\nPorém, Marcelino e seu grupo de estudos não dão muita atenção para o ocorrido, e seguem a sua expedição onde\r\n pesquisando antigas relíquias e manuscritos em uma missão para descobrir segredos antigos. Durante essa expedição perigosa, seu grupo é emboscado por ladrões de conhecimento, que desejam roubar os manuscritos. Marcelino tenta resistir, mas ele é mortalmente ferido durante o confronto.', 'ladrao.jpg'),
(24, 'Marcelino tenta pegar ambos livros e pergaminhos, mas quando ele chega na saída, ele se depara com ela fechada por destroços. Marcelino morre asfixiado na biblioteca.', 'id24.jpg'),
(25, 'Marcelino se une a um grupo de cientistas que estão trabalhando na reconstrução da nova biblioteca. Sua expertise em física é valiosa para entender as propriedades do fogo e desenvolver métodos mais eficientes para prevenir incêndios. Marcelino contribui para a criação de um sistema de proteção contra incêndios baseado em princípios físicos, ajudando a prevenir futuras tragédias.', ''),
(26, 'Marcelino decide liderar uma expedição científica para explorar antigos artefatos e manuscritos em busca de conhecimentos ocultos. Durante uma descoberta notável, ele encontra um antigo tratado de física escrito por um filósofo da antiguidade. Este texto se torna a base para seus próprios estudos e contribuições à compreensão contemporânea da física. Marcelino, agora não apenas um estudioso, mas também um cientista, deixa uma marca duradoura no campo da física.', ''),
(27, 'Marcelino cumprimenta os visitantes e, ao perceber que o inglês é a língua comum, decide se esforçar para aprimorar suas habilidades linguísticas. Durante a conversa, ele pede aos visitantes para compartilhar conhecimentos em inglês. \"I am eager to expand my knowledge and communicate more effectively,\" diz Marcelino, demonstrando seu comprometimento em aprender e colaborar internacionalmente.\r\n', ''),
(28, 'Os visitantes vão em direção a biblioteca que é um lugar coberto e tem sombra, para fugirem dos raios solares. Marcelino permite a entrada deles na biblioteca mesmo ele ja tendo fechado a biblioteca. Ao conversar com os visitantes em inglês, Marcelino percebe a beleza da diversidade linguística. Ele compartilha suas ideias sobre a importância de unir culturas por meio do idioma. \"Language is not just a tool for communication; it\'s a bridge that connects people and ideas,\" expressa Marcelino, destacando a sua compreensão mais profunda da unidade que a linguagem pode trazer', ''),
(29, 'Tragédia no Incêndio da Nova Biblioteca  Marcelino estava um dia de muito calor dentro da biblioteca arrumando alguns pergaminhos, tentando fugir do calor insruportavel que fazia do lado de fora. Infelizmente, ocorre um incêndio na nova biblioteca causado pelo calor excessivo do local, o material utilizado na sua construção era de fácil combustão fazendo assim o fogo se alastrar mais rápido porque havia muitos pergaminhos de papel, sem dar chances de fuga a quem estava por perto. Marcelino é pego nas chamas enquanto tenta salvar manuscritos valiosos. Ele perece heroicamente no incêndio, sua dedicação ao conhecimento o faz perder a vida.', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `email`, `senha`) VALUES
(1, 'gui', 'antonio.2022310602@aluno.iffar.edu.br', 'b2c8930bc968520c9c76a17a629f44c8');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `escolha`
--
ALTER TABLE `escolha`
  ADD CONSTRAINT `escolha_ibfk_1` FOREIGN KEY (`id_origem`) REFERENCES `historia` (`id_historia`),
  ADD CONSTRAINT `escolha_ibfk_2` FOREIGN KEY (`id_destino`) REFERENCES `historia` (`id_historia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
