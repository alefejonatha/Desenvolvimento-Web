-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Maio-2020 às 15:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `minisite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `id` int(15) NOT NULL,
  `tituloPost` varchar(40) NOT NULL,
  `textoPost` varchar(140) NOT NULL,
  `linkPost` varchar(500) NOT NULL,
  `tituloArt` varchar(140) NOT NULL,
  `textoArt` varchar(1000) NOT NULL,
  `linkArt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`id`, `tituloPost`, `textoPost`, `linkPost`, `tituloArt`, `textoArt`, `linkArt`) VALUES
(1, 'Manu Dibango', 'Manu Dibango, saxofonista e lenda do afro-jazz, morre após testar positivo para coronavírus.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQt3ptXiCTkfoQpE3jxg3akoQYJejNQiCU725A5G-UYebO4yLmA', 'Manu Dibango, saxofonista e lenda do afro-jazz, morre após testar positivo para coronavírus', ' <p>Hospitalizado há vários dias, depois de ter sido testado positivo para a Covid-19, Manu Dibango, saxofonista camaronês e lenda do afro-jazz, morreu aos 86 anos na França. A informação foi confirmada na manhã desta terça-feira (23) por um dos responsáveis pela sua gravadora e publicada em sua rede social.\r\n\r\n        <p>    \r\n            A vida de Emmanuel N\'Djoke Dibango, mais conhecido como Manu Dibango, foi inteiramente dedicada à música. Ele ficou conhecido mundialmente com o sucesso de Soul Makossa, em 1972, que entrou para a lenda do jazz.', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/S50-naTOA3M\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Snarky Puppy', 'Snarky Puppy é um conjunto instrumental de Brooklyn, Nova York, combina uma variedade de ritmos e ganhou três prêmios Grammy.', 'https://snarkypuppy.com/press/logos/logo-pup.png', 'Snarky Puppy', '<p>Apesar de ainda ser considerada underground em muitos aspectos, a banda conquistou seu primeiro Grammy em 2014 na categoria Melhor Performance de R&B, com elogios de críticos de veículos renomados como “BBC”, “Village Voice”, “The Guardian” e “Bostou Herald”, e de músicos como Pat Metheny a Prince. Eles também lideraram o lista de jazz do Itunes com seu primeiro trabalho, \"Family Dinner – Volume One”.</p> <p>O grupo, liderado pelo baixista, guitarrista, compositor e arranjador Michael League, sempre usou a performance ao vivo e mantém uma agenda de turnê mais intensa que qualquer outra banda do mesmo idioma. Ao longo de 2013, se apresentaram \r\n mais 200 vezes, entre shows e workshops pelos quatro continentes, incluindo participações em grandes festivais como North Sea Jazz, Monterey Jazz Festival, Jazz à Vienne, Blue Note Tokyo, e The Melbourne International Jazz Festival.</p>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/L_XJ_s5IsQc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'Jammcard', '<b>JammJam</b> é um evento apenas para convidados, apresentando os melhores músicos do mundo.', 'https://jammcard.com/wp-content/uploads/2018/07/Icon.svg', 'Jammcard', '<p>O JammJam é um evento apenas para convidados, apresentando os melhores músicos do mundo, ocorre em ambientes inspiradores. É o local de estréia para tocar, encontrar com os amigos, conhecer novos, e unir-se como uma comunidade.</p> ', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/I0iX_BdAG-g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'Semana Cultural', '<p>A região central da capital paulista recebe a edição do projeto Old Roger, um festival de música, feira de artes, gastronomia e moda</p', 'https://photos1.blogger.com/blogger/5431/2219/320/CMA04_D.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non pulvinar neque. Duis ut diam quam nulla porttitor massa id neque. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Egestas diam in arcu cursus euismod quis viverra nibh. Blandit massa enim nec dui nunc mattis enim. Proin gravida hendrerit lectus a. Elementum curabitur vitae nunc sed velit.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Q5n_RolmSbo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'Tony Royster Jr.', 'Conheça Tony Royster Jr, músico endosso da DW Drums, Zildjian Cymbals, Vic Firth sticks, Gopro Câmeras.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZ098JWPh8BQ6rhiFGLhi1hENfERF-fT_ozz22m6jyI8YNyMyq', 'Conheça Tony Royster Jr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Risus quis varius quam quisque. Libero justo laoreet sit amet cursus sit amet dictum. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Malesuada fames ac turpis egestas sed. Cursus metus aliquam eleifend mi in. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Pretium lectus quam id leo in vitae turpis massa sed. At volutpat diam ut venenatis tellus in metus.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wiUwe1k9HLo?start=5\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(16, 'PJ Morton', 'PJ Morton lançou seu primeiro álbum de estréia com uma grande gravadora, \"New Orleans\".', 'https://img.discogs.com/U2tGrqA9fpueOH_ndgUrKVBZWfQ=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-12702992-1540359197-8936.png.jpg', 'PJ Morton lançou seu primeiro álbum de estréia com uma grande gravadora, \"New Orleans\".', 'Paul Morton Jr. conhecido como PJ Morton (Nova Orleans, Louisiana, Estados Unidos em 29 de Março de 1981) é um Cantor, Compositor, Músico, Produtor musical estadunidense de R&B e que atualmente é o stand-in tecladista na banda de pop rock Maroon 5.[1] Em 27 de março de 2012, PJ lançou seu primeiro disco solo, o EP gratuito \"Following My First Mind\", pela gravadora Young Money de Lil Wayne. Adam Levine foi destaque no primeiro single, \"Heavy\"; outros músicos na EP incluem Lil Wayne, Jazmine Sullivan e Chantae Cann. Em 14 de maio de 2013, PJ Morton lançou seu primeiro álbum de estréia com uma grande gravadora, \"New Orleans\".', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RGfHMcWdK7Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`nome`, `email`, `phone`, `texto`) VALUES
('Álefe', 'te', '123', 'wwe'),
('Álefe', 'te', '123', 'wwe'),
('Álefe', 'te', '123', 'wwe'),
('Álefe', 'te', '123', 'wwe'),
('Álefe', 'te', '123', 'wwe'),
('Álefe', 'alef.jonatha@gmail.com', '839999999', 'w'),
('Álefe', 'alef.jonatha@gmail.com', '83999999999', 'w'),
('Álefe', 'alef.jonatha@gmail.com', '83999999999', 'w'),
('Álefe', 'alef.jonatha@gmail.com', '83999999999', 'w'),
('Álefe', 'alef.jonatha@gmail.com', '83999999999', 'texte 1'),
('Álefe', 'alef.jonatha@gmail.com', '83999999999', 'texte 1'),
('Álefe', 'alef.jonatha@gmail.com', '83999999999', 'Text2'),
('Álefe', 'alef.jonatha@gmail.com', '83999999999', 'dasd'),
('20', 'alef.jonatha@gmail.com', '11111', 'teste 20 de maio');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigo`
--
ALTER TABLE `artigo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
