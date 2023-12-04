-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Dez-2023 às 20:12
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
-- Banco de dados: `ppi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolha`
--

DROP TABLE IF EXISTS `escolha`;
CREATE TABLE IF NOT EXISTS `escolha` (
  `id_escolha` int NOT NULL AUTO_INCREMENT,
  `opcao` varchar(255) NOT NULL,
  `id_destino` int NOT NULL,
  `id_historia` int NOT NULL,
  PRIMARY KEY (`id_escolha`),
  KEY `fk_historia` (`id_historia`),
  KEY `fk_destino` (`id_destino`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `escolha`
--

INSERT INTO `escolha` (`id_escolha`, `opcao`, `id_destino`, `id_historia`) VALUES
(3, 'Continuar', 2, 1),
(4, 'Continuar', 3, 2),
(11, 'Ir para a aldeia', 5, 3),
(12, 'Ir para a floresta', 4, 3),
(13, 'Caminho curto com sol', 6, 5),
(14, 'Caminho longo com sombra', 7, 5),
(15, 'Tentar entrar pelo portão', 8, 7),
(16, 'Entrar despercebido ', 9, 7),
(17, 'Continuar', 10, 9),
(18, 'Continuar', 11, 10),
(19, 'Continuar', 12, 11),
(20, 'Roubar ouro antes do amanhecer', 13, 12),
(21, 'Roubar ouro depois do amanhecer ', 14, 12),
(22, 'Continuar', 15, 14),
(25, 'Pedir às poções que ele já tem', 18, 17),
(26, 'Aceitar as condições', 19, 17),
(27, 'Continuar', 20, 19),
(28, 'Continuar', 21, 20),
(29, 'Mentir que é para uma poção de força', 23, 21),
(30, 'Revelar que é para uma poção de enfraquecimento', 22, 21),
(31, 'Continuar', 24, 23),
(32, 'Ir pela tirolesa', 26, 24),
(33, 'Continuar', 27, 26),
(34, 'Correr para um local seguro', 28, 27),
(35, 'Tentar recuperar a flecha do caçador', 29, 27),
(36, 'Continuar', 30, 29),
(37, 'Continuar', 31, 30),
(38, 'Continuar', 32, 31),
(39, 'Explorar a caverna', 33, 32),
(40, 'Continuar a explorar a floresta', 34, 32),
(43, 'Fechar janela e porta', 37, 36),
(44, 'Ir pela ponte', 25, 24),
(45, 'Continuar', 35, 34),
(46, 'Continuar', 36, 35),
(56, 'Continuar', 16, 15),
(57, 'Deixar a janela e porta aberta', 53, 36),
(58, 'Deixar a janela aberta e porta fechada', 54, 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `id_historia` int NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `fim` int NOT NULL,
  PRIMARY KEY (`id_historia`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`id_historia`, `texto`, `fim`) VALUES
(1, 'Em uma aldeia na França, no ano de 1766, um garoto chamado Pierre é amaldiçoado por um velho feiticeiro.\n\nNesse mesmo ano, a aldeia de Drakoria acaba destruindo a aldeia inimiga, matando a maior parte de seus aldeões. Um feiticeiro que conseguiu sobreviver ao ataque é encontrado depois de um breve tempo e capturado pelo rei.\n\nEm seu leito de morte, o feiticeiro diz: <br><br>\n\nFeiticeiro: - A partir de hoje vocês estão fadados à ruína, eu amaldiçoo seu filho mais novo a se transformar em uma fera \n         abominável na próxima noite de lua cheia.\n\n', 0),
(2, 'Distante do reino, existe um planalto com uma perigosa floresta em volta e um pequeno riacho ao final dele, ao alto desse planalto existe uma pequena cabana abandonada e algumas árvores que compõem essa bela paisagem.\nAo saber disso, o líder ordena que seu filho viva no alto do planalto Pornareffi, para evitar a morte de sua população.\nPierre acorda em uma cabana abandonada e se sente diferente; percebe que está mais forte, mais rápido e com sentidos mais aguçados,  porém com muita fome. Então vai procurar algo para se alimentar. Ao abrir seu armazém de suprimentos, não encontra nada, Pierre então decide ir em busca de comida de algum jeito.\n\n\n', 0),
(3, 'Ao averiguar os arredores do planalto, ele avista dois possíveis locais para ir em busca de alimentos:\n<br><br>\nEle avista sua aldeia distante e avista dois caminhos e rapidamente analisa as chances de conseguir alimento, sem excluir as chances de ser descoberto.\nObserva também uma floresta, a qual desde sua infância ouvia o quanto era temida por guerreiros e rapidamente analisa as chances de conseguir alimento, sem excluir as chances de não conseguir sair da floresta.\n', 0),
(4, 'O lobisomem foi morto na floresta antes da noite de lua cheia e acabou matando 0 pessoas.\nDepois os guerreiros viram um homem morto na floresta e afirmaram que era apenas mais um dos vários homens que ali passaram um dia.\nA floresta era repleta de monstros e criaturas de que o lobisomem poderoso, porém na forma humana, não podia dar conta.\nE a trágica morte de Pierre foi o seu destino.\n\n<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 1),
(5, '\nPierre tem 2 caminhos, escolha com sabedoria\n', 0),
(6, 'Ao escolher o caminho curto Pierre tomou uma péssima decisão, passando pelo caminho mais curto ele acaba tendo uma insolação por causa dos raios ultravioleta por irradiação. E a morte de Pierre foi certa antes mesmo de começar sua jornada.<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 1),
(7, 'Ao ir para sua antiga aldeia, Pierre se depara com 3 guardas vigiando o portão e vê que irá precisar persuadir eles para conseguirem adentrar na vila ou tentar passar por um caminho secreto que leva direto à vila.', 0),
(8, 'Ao tentar persuadir os guardas para adentrar na aldeia, os guardas reconhecem Pierre e o capturam. Mandando para o julgamento pelo rei da aldeia, seu próprio pai lhe condena para a forca e a triste morte de Pierre foi o desfecho de sua aventura<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 1),
(9, 'Após entrar na vila, Pierre passa despercebido por todos até chegar em uma cabana em que há um comerciante vendendo alimentos para um aldeão. Ao perceber que o vendedor estava muito distraído com o comprador, Pierre aproveita a situação para furtar o máximo de alimentos possíveis para não se preocupar com alimentação por um tempo.\n', 0),
(10, 'Depois do furto, ao voltar para a montanha, Pierre avista uma cabana abandonada que estava caindo aos pedaços, decide então entrar nela e agora irá se estabelecer nela no dia da lua cheia. Para a sua sorte, ele encontra um machado enferrujado que só poderá ser usado mais 1 vez. Após sentir uma forte tensão e raiva, Pierre se olha em um espelho quebrado que havia no banheiro da cabana e sente como se alguma força estivesse controlando as suas ações e então em um ato de fé, ele fala em um tom de implorar “por favor, não me deixem escapar”.', 0),
(11, 'Saindo da cabana para explorar os arredores, Pierre parte para uma floresta que era temida dentre os mais formidáveis guerreiros. Explorando mais essa floresta Pierre encontra uma caverna e de longe avista dentro da caverna criaturas; altas, com coloração acinzentada, chifres negros, com caras maliciosas e de pura ganância. \n\nEram os GOBLINS, Pierre vê que há baús tão cheios de ouro que nem se quer fechavam, e muito ouro espalhado em meio ao chão da caverna.\n', 0),
(12, 'Após tamanha tentação em ver aquela grande quantidade de ouro Pierre indaga para si mesmo - “eu devo tentar roubar esse ouro? Seria de grande ajuda para mim”. Com uma grande indecisão em mente.', 0),
(13, 'Ao tentar roubar o ouro dos goblins antes do amanhecer, você acaba pisando despercebidamente em uma moeda de ouro e acaba acordando as criaturas, que despertadas antes do horário comum ficam muito raivosas e acabam lhe matando<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 1),
(14, 'Pierre decide esperar o dia amanhecer para que eles fiquem ativos para sair à busca de mais ouro. Com essa grande oportunidade ele pega o máximo de ouro possível e sai silenciosamente do lugar.<br>Depois do furto de uma boa parte do ouro, você vai mais a fundo na floresta e se depara com uma luz no meio de duas árvores… depois de ir em direção a esse feixe de luz, você se depara com uma cidade sobrenatural repleta de monstros.\n', 0),
(15, 'Chegando nessa cidade, Pierre é abordado por três vampiros e eles lhe perguntam - “tu tens aparência humana, Pierre é algum monstro? Se Pierre for um humano tentando entrar em nossa cidade, não teremos piedade de te executar” - Sem opção, Pierre é obrigado a falar que é um lobisomem e eles sentem o teu cheiro para ver se o que tu estás falando eras mesmo verdade. Eles falam - “tu é mesmo um lobisomem, criatura horrenda como sempre” - eles então te olham com uma cara feia e te deixam passar.', 0),
(16, 'Entrando na cidade, Pierre se vê encantado por uma taberna que tinha sua aura de pura magia; ao entrar na taberna, Pierre se depara com um feiticeiro de forma esquelética jogando um jogo de cartas mágicas, ao redor algo chama o teu interesse… ele estava rodeado de poções e com isso Pierre enxerga uma oportunidade de conseguir algumas para te ajudar a não escapar na noite de sua transformação.<br> <br> <a href=\"cartas.php\" id=\"but\"> Continuar </a>', 0),
(17, 'Ao falar com o feiticeiro depois da sua partida de cartas mágicas, você pergunta para ele “O senhor feiticeiro poderia me dar algumas poções? Sou um lobisomem e não posso matar ninguém na noite de lua cheia.” Ele olha no fundo de sua alma e fala “Eu lhe darei a minha poção de enfraquecimento mais forte, mas eu não tenho ingredientes para isso, busque-os e eu lhe farei a poção que procura”.', 0),
(18, 'Ao pedir para o feiticeiro às suas poções para ajudar na caça para os ingredientes, o feiticeiro fica muito irritado por causa da atitude e decide lançar um feitiço para lhe diminuir a cinzas<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a> ', 1),
(19, 'Determinado a fazer de tudo para não escapar na noite de lua cheia, você fala para o feiticeiro “muito bem, trarei tudo que precisar. Mas quais são os ingredientes?” E ele lhe diz “1 dente de vampiro, 400ml de sangue de goblin, 1 cogumelo bioluminescente azul da floresta das fadas”.', 0),
(20, 'Saindo da cidade dos monstros, Pierre vai em busca dos ingredientes que necessita para fazer a poção e chegando no portão de saída, os guardas lhe dão um aviso “cuidado criatura horrenda, tem um caçador muito forte na floresta das fadas, recomendamos não sair por enquanto” e como Pierre estava muito determinado, Pierre fala “ele pode ser forte, mas eu sou um lobisomem” e eles te olham com cara feia, mas te deixam sair da cidade.', 0),
(21, 'Chegando na floresta das fadas, Pierre vê um rastro de sangue verde, mas mesmo espantado Pierre decide seguir o rastro e observa que tem vários corpos de goblins espalhados pela trilha, Pierre horrorizado com isso vê um caçador… um caçador de monstros, e vendo essa oportunidade de conseguir os ingredientes facilmente, Pierre chega perto dele e fala “caçador… CAÇADOR”, ele ouve o grito e aponta sua besta imediatamente para Pierre e fala “por que gritas, aldeão?” e Pierre faz uma proposta para ele “o senhor me ajudaria a conseguir ingredientes para confeccionar uma poção e em troca, lhe darei 10 francos de ouro” ', 0),
(22, ' Ao revelar que é para uma poção de enfraquecimento, ele lhe fala “poções de enfraquecimento são utilizadas por lobisomens para não serem tão destrutivos na noite de lua cheia, você deve ser mais um desse tipo infame de criaturas” e ele acaba lhe matando para ter menos um lobisomem no mundo.<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>\n', 1),
(23, 'Ele aceita lhe ajudar em troca dos 10 francos de ouro. Então vocês dois partem para a jornada de conseguir os ingredientes para a poção. Indo em outras partes da floresta, você vê uma estrada com um clima sombrio e assustador e então você olha para cima e vê um enorme castelo com milhares de morcegos o rodeando.', 0),
(24, 'Ao chegar mais perto, o caçador já experiente sabe que aquele é um castelo com vampiros e você fala para ele “isso é excelente, preciso de um dente de vampiro”, ele fala “tudo bem, desde que me pague”. Vocês avistam uma ponte e uma tirolesa para ultrapassar o abismo e ir em direção ao castelo\r\nO caçador fala “iremos por qual caminho aldeão?”', 0),
(25, 'Ao Pierre decidir passar pela ponte, ela começa a balançar, mas Pierre não dá importância para isso e continua a sua caminhada e chegando no castelo, a ponte desaba com Pierre e com o caçador juntos, caindo no abismo infinito, escuro e frio desse macabro castelo.<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 1),
(26, 'Ao chegar à porta do castelo, Pierre avista uma placa dizendo “Casa do Drácula”, o caçador lê isso e suspira forte porém continua seu caminho, ao adentrar no castelo, eles percebem uma silhueta de uma asa gigantesca de morcego no vidro do castelo e de repente um homem vestido totalmente de preto começa a voar com suas enormes asas de morcego.', 0),
(27, 'O caçador rapidamente pega sua besta e aponta para a criatura que até então era misteriosa, a criatura ao pousar no chão revela sua identidade, era o Drácula e estava inconformado que tentam o desafiar, ele mostra os dentes ao caçador, que rapidamente atira uma flecha de madeira em seu coração porém o Drácula desvia com facilidade', 0),
(28, 'O Drácula ao perceber que o mais fraco estava correndo da luta, ele vê uma possibilidade de uma presa frágil para conseguir sangue e ficar mais forte, ele com rapidez vai para sua direção e suga todo o seu sangue e mata o caçador na batalha.<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 1),
(29, 'O caçador consegue distrair o Drácula e Pierre acaba correndo em direção da flecha que o caçador havia disparado em direção ao monstro, aquela flecha era a única que matava vampiros, pois era de madeira e foi banhada em água benta, Pierre dá um grito para o caçador e o Drácula o vê com a flecha de madeira na mão e vai em sua direção, Pierre joga a flecha para o caçador e rapidamente ele o dispara no coração de Drácula, antes dele o morder e o transformar em vampiro.', 0),
(30, 'Pierre pega o dente do vampiro e eles saem do castelo e vão em direção a floresta das fadas para pegar o sangue de goblin necessário para a poção, o caçador fala que ele é experiente em matar goblins, então não terá dificuldades em completar essa missão, ao chegar na floresta eles avistam um lago e terão que passar por esse lago e ao tentar ultrapassar, eles são picados por mosquitos que estão infectados com o platelminto Plasmodium.', 0),
(31, 'O caçador e Pierre são picados diversas vezes, ao passar pelo lago o caçador caí no chão e começa a ficar muito mal e ele lhe fala “provavelmente não irei muito longe, então continue sem mim” e acaba morrendo por danos cerebrais que a malária o fez passar, como Pierre é um lobisomem, sua capacidade de regeneração e sistema imunológico eram infinitamente superiores e Pierre acaba sobrevivendo a malária.', 0),
(32, 'Ao chegar no ponto que Pierre tinha encontrado o caçador, Pierre vê um goblin morto porém com sangue fresco ainda e aproveita e pega os 400ml de sangue de goblin que Pierre precisava, agora só faltava o cogumelo bioluminescente azul da floresta das fadas, andando e explorando mais a fundo na floresta, Pierre avista uma caverna e indaga para si mesmo “essa caverna pode ter o cogumelo que preciso, ela pode ser boa de explorar”', 0),
(33, 'Ao adentrar na caverna Pierre se vê em uma escuridão total e temperatura fria, ao ir mais a fundo nessa caverna Pierre ouve um som de respiração e então a criatura abre os olhos e Pierre observa os olhos vermelhos com sede de sangue e a criatura vai atrás da presa e Pierre sem nenhuma chance acaba morrendo.<br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 1),
(34, 'Explorando mais a fundo a floresta, Pierre vê algo atrás de uma árvore com um tom de luminescência e curioso, Pierre vai em direção a essa luz e vê algo… era o cogumelo bioluminescente azul da floresta das fadas, Pierre tinha conseguido todos os ingredientes e só precisava voltar para a cidade de monstros se encontrar com o feiticeiro.', 0),
(35, 'Ao voltar para a cidade de monstros e encontrar o feiticeiro novamente, ele lhe pergunta “conseguiu todos os ingredientes?” e você entrega todos os ingredientes para ele e o feiticeiro imediatamente começa a fazer a poção. Ao começar a fazer a poção, você vê todo o processo de encantação da poção e pergunta para o feiticeiro “como você faz isso? essa poção irá demorar muito?” e ele lhe responde “a poção tem uma velocidade de reação instantânea, então logo estará feita”, ao terminar a poção, ele lhe entrega e lhe diz “boa sorte caro companheiro, você foi o único lobisomem até agora que lutou para não matar tudo que vê em sua forma bestial”, você agradece e sai da cidade dos monstros.', 0),
(36, 'Entrando na sua vila repleta de aldeões novamente pelo mesmo jeito que entrou da primeira vez, você avista sua cabana e entra rapidamente nela, ao entrar você prepara tudo que pegou para a transformação, a lua cheia é nesta noite e você está muito nervoso com tudo isso, mas consegue raciocinar e colocar a poção em todos os alimentos que você roubou da tenda do vendedor da cidade, agora é só esperar a lua cheia… que pode ser sangrenta ou repleta de paz. Você avista a janela e porta da cabana aberta e deixar elas aberta seria um perigo.', 0),
(37, '<h1> Um milagre: </h1>O lobisomem escapa e acaba matando 0 pessoas sendo que uma foi atacada e sobreviveu por um milagre … a pobre alma se considerou com sorte, pelo menos até a próxima lua cheia\nO lobisomem foi para o portão de saída da cidade e derrubou os guardas que estavam lá e com fúria arrebenta o portão da cidade. ele acaba escapando para a floresta das fadas antes dos caçadores chegarem.<br><br><a href=\"creditos.php\" id=\"but\">Ver créditos</a>\n\n\n', 0),
(40, '<h1> Uma noite de terror: </h1>O lobisomem escapa e acaba matando 2 pessoas sendo que uma foi comida viva … a pobre alma não teve sequer uma chance. O lobisomem foi para o portão de saída da cidade e derrubou os guardas que estavam lá e com fúria arrebenta o portão da cidade. ele acaba escapando para a floresta das fadas antes dos caçadores chegarem.<br><br><a href=\"creditos.php\" id=\"but\">Ver créditos</a>', 0),
(43, 'O jogo foi criado: Lázaro Lima Saucedo e Martín Silveira de Almeida. <br>Obrigado por jogar! <br><br><a href=\"index.php\" id=\"but\">Voltar ao inicio</a>', 0),
(52, 'You are a human who is cursed by a wizard and ends up becoming a werewolf, so your father (the king) sends you to live on top of a mountain to prevent you from transforming and ending up killing all the people in the kingdom. The story revolves around you managing to get the supplies and lock yourself in a cabin so that you don\'t kill any innocent people before the next full moon arrives. The adventure will begin from the moment you wake up in an abandoned cabin.<br><br><a href=\"index.php\" id=\"but\">Back to start</a>', 0),
(53, '<h1> Um banho de sangue: </h1> O lobisomem escapa e acaba matando 7 pessoas sendo que três foram comidas vivas … pobres almas não tiveram sequer uma chance. O lobisomem foi para o portão de saída da cidade e derrubou os guardas que estavam lá e com fúria arrebenta o portão da cidade. O lobisomem acaba escapando para a floresta das fadas antes dos caçadores chegarem, mas os caçadores conseguiram rastrear a besta e a mataram sem nenhuma misericórdia.<br><br><a href=\"creditos.php\" id=\"but\">Ver créditos</a>', 0),
(54, '<h1> Um massacre: </h1> O lobisomem escapa e acaba matando 4 pessoas sendo que duas foram comidas vivas … pobres almas não tiveram sequer uma chance. O lobisomem foi para o portão de saída da cidade e derrubou os guardas que estavam lá e com fúria arrebenta o portão da cidade. Os caçadores foram atrás da besta e antes do lobisomem escapar para a floresta das fadas, os caçadores acertam uma flecha de prata em seu peito quase acertando o coração... E a besta quase morta escapa.<br><br><a href=\"creditos.php\" id=\"but\">Ver créditos</a>', 0);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `escolha`
--
ALTER TABLE `escolha`
  ADD CONSTRAINT `fk_destino` FOREIGN KEY (`id_destino`) REFERENCES `historia` (`id_historia`),
  ADD CONSTRAINT `fk_historia` FOREIGN KEY (`id_historia`) REFERENCES `historia` (`id_historia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
