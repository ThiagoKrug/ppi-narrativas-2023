-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Out-2023 às 12:47
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
(6, 'Marcelino decide que o ambiente rural e a companhia de seus avós são essenciais para sua cura emocional. Ele continua a morar com eles, ajudando nas tarefas da fazenda, cultivando uma vida simples e pacífica. Marcelino passa seu tempo escrevendo e documentando suas reflexões sobre a tragédia da Biblioteca de Alexandria, criando um acervo pessoal de conhecimento. Ele se torna uma figura respeitada na comunidade local e é lembrado como alguém que valorizou a família e a tranquilidade do campo.\r\nFoi durante esse período que Marcelino conheceu duas jovens mulheres que viviam nas proximidades da fazenda de seus avós.\r\nse chamavam Clara e Helena.', ''),
(7, 'Marcelino, após um período de recuperação na casa de seus avós, decide que é hora de seguir em frente e continuar sua jornada em busca de conhecimento e sabedoria. Ele se despede de seus avós com gratidão e parte para Alexandria novamente. Lá, ele se junta a um grupo de estudiosos que estão trabalhando na reconstrução de uma nova biblioteca. Marcelino contribui com seus próprios escritos e se envolve no esforço para reunir e preservar o conhecimento que restou após o incêndio. Sua dedicação e paixão o tornam uma parte essencial da nova era de aprendizado em Alexandria.', ''),
(20, 'Clara, uma jovem gentil e apaixonada por natureza, compartilhou com Marcelino uma paixão pelo conhecimento e pelo aprendizado. Os dois passaram horas explorando a paisagem local, discutindo filosofia e lendo juntos. À medida que o tempo passava, seu relacionamento se aprofundava, e eles se apaixonaram. Marcelino escolheu ficar com Clara, e juntos eles construíram uma vida pacífica no campo, combinando suas paixões pelo aprendizado e pela natureza.', ''),
(21, 'Elena era uma jovem vivaz e cheia de energia, que trouxe uma nova vitalidade para a vida de Marcelino. Ela o incentivou a explorar novos horizontes, experimentando novas aventuras e se aventurando na cidade em busca de novos conhecimentos. Marcelino se sentiu atraído pela energia e entusiasmo de Elena. Ele escolheu ficar com ela e, juntos, embarcaram em uma jornada repleta de descobertas e explorações, mantendo o amor pelo conhecimento como parte fundamental de sua relação.', ''),
(22, 'Marcelino se envolve profundamente na reconstrução da nova biblioteca em Alexandria. Ele está determinado a preservar o conhecimento e fazer uma contribuição significativa. Infelizmente, durante um incêndio acidental na nova biblioteca, Marcelino é pego nas chamas enquanto tenta salvar manuscritos valiosos. Ele perece heroicamente no incêndio, sua dedicação ao conhecimento perdendo a vida.', ''),
(23, 'Naquele dia 29 de Setembro Circula a noticia na cidade que o Pompeu, o Grande, é assassinado enquanto procurava obter asilo político no Egito.\r\nPorém, Marcelino e seu grupo de estudos não dão muita atenção para o ocorrido, e seguem a sua expedição onde\r\n pesquisando antigas relíquias e manuscritos em uma missão para descobrir segredos antigos. Durante essa expedição perigosa, seu grupo é emboscado por ladrões de conhecimento, que desejam roubar os manuscritos. Marcelino tenta resistir, mas ele é mortalmente ferido durante o confronto.', ''),
(24, 'Marcelino tenta pegar ambos livros e pergaminhos, mas quando ele chega na saída, ele se depara com ela fechada por destroços. Marcelino morre asfixiado na biblioteca.', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
