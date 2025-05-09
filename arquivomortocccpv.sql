-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/03/2025 às 13:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arquivomortocccpv`
--
CREATE DATABASE IF NOT EXISTS `arquivomortocccpv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `arquivomortocccpv`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cccpv_curso`
--

DROP TABLE IF EXISTS `cccpv_curso`;
CREATE TABLE `cccpv_curso` (
  `idCurso` int(11) NOT NULL,
  `cursoNome` varchar(225) NOT NULL,
  `cursoEixoTecnologico` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cccpv_curso`
--

INSERT INTO `cccpv_curso` (`idCurso`, `cursoNome`, `cursoEixoTecnologico`) VALUES
(1, 'Técnico em Administração - Integrado ao Ensino Médio', 'Gestão e Negócios'),
(2, 'Técnico em Contabilidade - Integrado ao Ensino Médio', 'Gestão e Negócios'),
(3, 'Técnico em Informática - Integrado ao Ensino Médio', 'Informação e Comunicação');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cccpv_prontuario`
--

DROP TABLE IF EXISTS `cccpv_prontuario`;
CREATE TABLE `cccpv_prontuario` (
  `idProntuario` int(11) NOT NULL,
  `prontuarioCodCaixa` varchar(255) DEFAULT NULL,
  `prontuarioNumero` int(11) NOT NULL,
  `prontuarioNome` varchar(255) DEFAULT NULL,
  `prontuarioLocalNasc` varchar(255) DEFAULT NULL,
  `prontuarioDataNasc` varchar(255) DEFAULT NULL,
  `prontuarioRG` varchar(20) DEFAULT NULL,
  `prontuarioCPF` varchar(20) DEFAULT NULL,
  `prontuarioRA` varchar(20) DEFAULT NULL,
  `prontuarioMae` varchar(255) DEFAULT NULL,
  `prontuarioPai` varchar(255) DEFAULT NULL,
  `prontuarioContatoResponsavel` varchar(255) DEFAULT NULL,
  `prontuarioEmailResponsavel` varchar(255) DEFAULT NULL,
  `prontuarioEndereco` varchar(255) DEFAULT NULL,
  `prontuarioCEP` varchar(20) DEFAULT NULL,
  `prontuarioDataIngresso` date DEFAULT NULL,
  `prontuarioCursoMatriculado` varchar(255) DEFAULT NULL,
  `fk_IdCurso` int(11) NOT NULL,
  `prontuarioEixoTec` varchar(255) DEFAULT NULL,
  `prontuarioDataFormatura` varchar(255) DEFAULT NULL,
  `prontuarioHistorico` varchar(255) DEFAULT NULL,
  `prontuarioContrato` varchar(255) DEFAULT NULL,
  `prontuarioOutrosDocs` varchar(255) DEFAULT NULL,
  `fk_idTipoFormacao` int(11) NOT NULL,
  `prontuarioFormaAprovacao` varchar(255) DEFAULT NULL,
  `fk_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cccpv_tipoformacao`
--

DROP TABLE IF EXISTS `cccpv_tipoformacao`;
CREATE TABLE `cccpv_tipoformacao` (
  `idTipoFormacao` int(11) NOT NULL,
  `tipoFormacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cccpv_tipoformacao`
--

INSERT INTO `cccpv_tipoformacao` (`idTipoFormacao`, `tipoFormacao`) VALUES
(1, 'Aprovação Nota'),
(2, 'Aprovação Conselho'),
(3, 'Transferência'),
(4, 'Falecimento');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cccpv_usuario`
--

DROP TABLE IF EXISTS `cccpv_usuario`;
CREATE TABLE `cccpv_usuario` (
  `idusuario` int(11) NOT NULL,
  `usuarioCargo` varchar(10) DEFAULT NULL,
  `usuarioAcesso` varchar(10) DEFAULT NULL,
  `usuarioDataCadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cccpv_usuario`
--

INSERT INTO `cccpv_usuario` (`idusuario`, `usuarioCargo`, `usuarioAcesso`, `usuarioDataCadastro`) VALUES
(1, 'userroot', 'teste123!', NULL);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `fk_tipoformacao`
-- (Veja abaixo para a visão atual)
--
DROP VIEW IF EXISTS `fk_tipoformacao`;
CREATE TABLE `fk_tipoformacao` (
`idProntuario` int(11)
,`prontuarioCodCaixa` varchar(255)
,`prontuarioNumero` int(11)
,`prontuarioNome` varchar(255)
,`prontuarioLocalNasc` varchar(255)
,`prontuarioDataNasc` varchar(255)
,`prontuarioRG` varchar(20)
,`prontuarioCPF` varchar(20)
,`prontuarioRA` varchar(20)
,`prontuarioMae` varchar(255)
,`prontuarioPai` varchar(255)
,`prontuarioContatoResponsavel` varchar(255)
,`prontuarioEmailResponsavel` varchar(255)
,`prontuarioEndereco` varchar(255)
,`prontuarioCEP` varchar(20)
,`prontuarioDataIngresso` date
,`prontuarioCursoMatriculado` varchar(255)
,`prontuarioEixoTec` varchar(255)
,`prontuarioDataFormatura` varchar(255)
,`prontuarioHistorico` varchar(255)
,`prontuarioContrato` varchar(255)
,`prontuarioOutrosDocs` varchar(255)
,`prontuarioFormaAprovacao` varchar(255)
);

-- --------------------------------------------------------

--
-- Estrutura para view `fk_tipoformacao`
--
DROP TABLE IF EXISTS `fk_tipoformacao`;

DROP VIEW IF EXISTS `fk_tipoformacao`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY INVOKER VIEW `fk_tipoformacao`  AS SELECT `cccpv_prontuario`.`idProntuario` AS `idProntuario`, `cccpv_prontuario`.`prontuarioCodCaixa` AS `prontuarioCodCaixa`, `cccpv_prontuario`.`prontuarioNumero` AS `prontuarioNumero`, `cccpv_prontuario`.`prontuarioNome` AS `prontuarioNome`, `cccpv_prontuario`.`prontuarioLocalNasc` AS `prontuarioLocalNasc`, `cccpv_prontuario`.`prontuarioDataNasc` AS `prontuarioDataNasc`, `cccpv_prontuario`.`prontuarioRG` AS `prontuarioRG`, `cccpv_prontuario`.`prontuarioCPF` AS `prontuarioCPF`, `cccpv_prontuario`.`prontuarioRA` AS `prontuarioRA`, `cccpv_prontuario`.`prontuarioMae` AS `prontuarioMae`, `cccpv_prontuario`.`prontuarioPai` AS `prontuarioPai`, `cccpv_prontuario`.`prontuarioContatoResponsavel` AS `prontuarioContatoResponsavel`, `cccpv_prontuario`.`prontuarioEmailResponsavel` AS `prontuarioEmailResponsavel`, `cccpv_prontuario`.`prontuarioEndereco` AS `prontuarioEndereco`, `cccpv_prontuario`.`prontuarioCEP` AS `prontuarioCEP`, `cccpv_prontuario`.`prontuarioDataIngresso` AS `prontuarioDataIngresso`, `cccpv_prontuario`.`prontuarioCursoMatriculado` AS `prontuarioCursoMatriculado`, `cccpv_prontuario`.`prontuarioEixoTec` AS `prontuarioEixoTec`, `cccpv_prontuario`.`prontuarioDataFormatura` AS `prontuarioDataFormatura`, `cccpv_prontuario`.`prontuarioHistorico` AS `prontuarioHistorico`, `cccpv_prontuario`.`prontuarioContrato` AS `prontuarioContrato`, `cccpv_prontuario`.`prontuarioOutrosDocs` AS `prontuarioOutrosDocs`, `cccpv_prontuario`.`prontuarioFormaAprovacao` AS `prontuarioFormaAprovacao` FROM `cccpv_prontuario`WITH CASCADED CHECK OPTION  ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cccpv_curso`
--
ALTER TABLE `cccpv_curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Índices de tabela `cccpv_prontuario`
--
ALTER TABLE `cccpv_prontuario`
  ADD PRIMARY KEY (`idProntuario`),
  ADD UNIQUE KEY `fk_idTipoFormacao` (`fk_idTipoFormacao`),
  ADD UNIQUE KEY `fk_idCurso` (`fk_IdCurso`) USING BTREE,
  ADD UNIQUE KEY `fk_idUsuario` (`fk_idUsuario`);

--
-- Índices de tabela `cccpv_tipoformacao`
--
ALTER TABLE `cccpv_tipoformacao`
  ADD PRIMARY KEY (`idTipoFormacao`);

--
-- Índices de tabela `cccpv_usuario`
--
ALTER TABLE `cccpv_usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cccpv_curso`
--
ALTER TABLE `cccpv_curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cccpv_prontuario`
--
ALTER TABLE `cccpv_prontuario`
  MODIFY `idProntuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cccpv_tipoformacao`
--
ALTER TABLE `cccpv_tipoformacao`
  MODIFY `idTipoFormacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cccpv_usuario`
--
ALTER TABLE `cccpv_usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cccpv_prontuario`
--
ALTER TABLE `cccpv_prontuario`
  ADD CONSTRAINT `cccpv_prontuario_ibfk_2` FOREIGN KEY (`fk_idTipoFormacao`) REFERENCES `cccpv_tipoformacao` (`idTipoFormacao`),
  ADD CONSTRAINT `cccpv_prontuario_ibfk_3` FOREIGN KEY (`fk_idUsuario`) REFERENCES `cccpv_usuario` (`idusuario`),
  ADD CONSTRAINT `cccpv_prontuario_ibfk_4` FOREIGN KEY (`fk_IdCurso`) REFERENCES `cccpv_curso` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
