-- phpMyAdmin SQL Dump
-- version 4.3.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21-Out-2015 às 05:06
-- Versão do servidor: 5.6.23
-- PHP Version: 5.4.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teste_backend`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Marcelo', 'mol360@gmail.com', '11 9999 9999'),
(2, 'Marcelo', 'mol360@gmail.com', '11 9999 9999'),
(3, 'Marcelo', 'mol360@gmail.com', '11 9999 9999'),
(4, 'Marcelo novo', 'mol360@hotmail.com', ''),
(5, 'Marcelo 02', 'marcelo@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `especialidade` varchar(60) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id`, `nome`, `especialidade`, `celular`, `descricao`, `foto`) VALUES
(1, 'Dr. Marcelo', 'Cardiologista', '11 9 9999 9999', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '995bf053c4694e1e353cfd42b94e4447.jpg'),
(2, 'Dr. Marcelo', 'Cardiologista', '11 9 9999 9999', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '995bf053c4694e1e353cfd42b94e4447.jpg'),
(4, 'Lita White', 'Neurosurgeon', '(985) 231-1234', 'Maecenas commodo turpis adipiscing, malesuada ipsum in, molestie magna.', '995bf053c4694e1e353cfd42b94e4448.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
