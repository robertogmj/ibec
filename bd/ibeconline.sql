-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/07/2015 às 08:24:03
-- Versão do Servidor: 5.5.31
-- Versão do PHP: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ibeconline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int(8) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(20) NOT NULL,
  `id_pai` int(8) NOT NULL,
  `id_turma` int(8) NOT NULL,
  `log_aluno` varchar(8) NOT NULL,
  `pass_aluno` varchar(8) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `id_pai`, `id_turma`, `log_aluno`, `pass_aluno`) VALUES
(1, 'Jose Roberto', 1, 1, 'jroberto', '123456'),
(2, 'Jose Carlos Ferreira', 0, 0, 'jcferrei', '888999'),
(11, 'asdrubal filho', 4, 2, 'asddd', '467382'),
(12, 'eu mesmo', 12, 1, 'mesmoeu', 'mes222'),
(13, 'cdf monstro', 2, 2, 'monster', 'mon888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE IF NOT EXISTS `aula` (
  `id_aula` int(8) NOT NULL AUTO_INCREMENT,
  `id_disciplina` int(8) NOT NULL,
  `id_professor` int(8) NOT NULL,
  `id_turma` int(8) NOT NULL,
  PRIMARY KEY (`id_aula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id_aula`, `id_disciplina`, `id_professor`, `id_turma`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 2, 1, 2),
(4, 2, 2, 2),
(5, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` int(8) NOT NULL AUTO_INCREMENT,
  `id_aula` int(8) NOT NULL,
  `id_aluno` int(8) NOT NULL,
  `data_diario` date NOT NULL,
  `tempo_aula` int(1) NOT NULL,
  `falta_diario` int(1) NOT NULL COMMENT '0 - presente | 1 - ausente',
  PRIMARY KEY (`id_diario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disciplina` int(8) NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(15) NOT NULL,
  PRIMARY KEY (`id_disciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`) VALUES
(1, 'Portugues'),
(2, 'Matematica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatistica`
--

CREATE TABLE IF NOT EXISTS `estatistica` (
  `id_conts` int(2) NOT NULL AUTO_INCREMENT,
  `contgeral` int(6) NOT NULL,
  PRIMARY KEY (`id_conts`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `estatistica`
--

INSERT INTO `estatistica` (`id_conts`, `contgeral`) VALUES
(1, 941);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `id_nota` int(8) NOT NULL AUTO_INCREMENT,
  `id_aula` int(8) NOT NULL,
  `id_aluno` int(8) NOT NULL,
  `bimestre` int(1) NOT NULL,
  `nota` decimal(3,1) NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pai`
--

CREATE TABLE IF NOT EXISTS `pai` (
  `id_pai` int(8) NOT NULL AUTO_INCREMENT,
  `nome_pai` varchar(20) NOT NULL,
  `tel_pai` decimal(11,0) NOT NULL,
  `email_pai` varchar(20) NOT NULL,
  `log_pai` varchar(8) NOT NULL,
  `pass_pai` varchar(8) NOT NULL,
  PRIMARY KEY (`id_pai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `pai`
--

INSERT INTO `pai` (`id_pai`, `nome_pai`, `tel_pai`, `email_pai`, `log_pai`, `pass_pai`) VALUES
(1, 'Roberto Goncalves', 2147483647, 'robertogmj@gmail.com', 'robertog', '456987'),
(2, 'Rosita Areas', 0, 'cademailpai', 'ratteixe', '987652'),
(3, 'Tomas Edson', 0, 'cademailpai', 'tedson', '987654'),
(4, 'Asdrubal Pai', 0, 'cademailpai', 'paidru', 'bec333'),
(5, 'Asdrubal Pai', 0, 'cademailpai', 'paidru', 'bec333'),
(6, 'Asdrubal Pai', 0, 'cademailpai', 'paidru', 'bec333'),
(7, 'Asdrubal Pai', 0, 'cademailpai', 'paidru', 'bec333'),
(8, 'Asdrubal Pai', 0, 'cademailpai', 'paidru', 'bec333'),
(9, 'Asdrubal Pai', 0, 'cademailpai', 'paidru', 'bec333'),
(10, 'Asdrubal Pai', 2277665599, 'cademailpai', 'paidru', 'bec333'),
(11, 'Asdrubal Pai', 2277665599, 'cademailpai', 'paidru', 'bec333'),
(12, 'mesmopai', 22998865321, 'cademailpai', 'paimesmo', 'mesm444'),
(13, 'paizao', 22335544228, 'cademail', 'pai888', 'pai222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id_professor` int(8) NOT NULL AUTO_INCREMENT,
  `nome_professor` varchar(20) NOT NULL,
  `log_professor` varchar(8) NOT NULL,
  `pass_professor` varchar(8) NOT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome_professor`, `log_professor`, `pass_professor`) VALUES
(1, 'Hernandes Fonseca', 'henandes', 'her4325'),
(2, 'Renato Souza', 'rensouza', '888666');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

CREATE TABLE IF NOT EXISTS `secretaria` (
  `id_secretaria` int(8) NOT NULL AUTO_INCREMENT,
  `nome_secretaria` varchar(20) NOT NULL,
  `log_secretaria` varchar(8) NOT NULL,
  `pass_secretaria` varchar(8) NOT NULL,
  PRIMARY KEY (`id_secretaria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `secretaria`
--

INSERT INTO `secretaria` (`id_secretaria`, `nome_secretaria`, `log_secretaria`, `pass_secretaria`) VALUES
(1, 'Asdrubal Pereira', 'asdrubal', '123456'),
(2, 'Roberto Goncalves', 'rgmj', '963258'),
(3, 'Renato Mendes', 'renmende', 'renato12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id_turma` int(8) NOT NULL AUTO_INCREMENT,
  `num_turma` int(5) NOT NULL,
  `turno` int(1) NOT NULL,
  PRIMARY KEY (`id_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `num_turma`, `turno`) VALUES
(1, 1201, 2),
(2, 1202, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `upconteudo`
--

CREATE TABLE IF NOT EXISTS `upconteudo` (
  `id_up` int(8) NOT NULL AUTO_INCREMENT,
  `title_up` varchar(20) NOT NULL,
  `id_aula` int(8) NOT NULL,
  `file_up` varchar(50) NOT NULL,
  `date_up` datetime NOT NULL,
  PRIMARY KEY (`id_up`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `upconteudo`
--

INSERT INTO `upconteudo` (`id_up`, `title_up`, `id_aula`, `file_up`, `date_up`) VALUES
(1, 'Materia V1', 3, '20150519_225036_Apostila de CSS.pdf', '2015-05-12 13:48:40'),
(2, 'Materia da Prova V2', 3, '20150516_183433_mysql_tut(Ingles).pdf', '0000-00-00 00:00:00'),
(3, 'Prove Recuperacao', 3, '20150516_183401_Mysql-tuto', '0000-00-00 00:00:00'),
(4, 'Prove Recuperacao', 3, '20150516_1', '0000-00-00 00:00:00'),
(5, 'Prove Recuperacao', 3, '20150516_1', '2015-05-16 18:32:41'),
(6, 'Teste Matematica', 3, '20150516_1', '2015-05-16 18:34:01'),
(7, 'TEste Portugues', 1, '20150516_1', '2015-05-16 18:34:33'),
(8, 'Exervivio Matematica', 2, '20150519_225036_Apostila de CSS.pdf', '2015-05-19 22:50:36'),
(9, 'asasasd', 1, '20150621_192206_Slides - Servidor Firewall e DHCP.', '2015-06-21 19:22:06'),
(10, 'teste777', 5, '20150621_193938_slide.pdf', '2015-06-21 19:39:38'),
(11, '25366', 4, '20150621_195200_Slide.pdf', '2015-06-21 19:52:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
