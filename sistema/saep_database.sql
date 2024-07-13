-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2024 às 16:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `saep_database`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividades`
--

CREATE TABLE `atividades` (
  `id_atividade` int(11) NOT NULL,
  `turma` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `atividades`
--

INSERT INTO `atividades` (`id_atividade`, `turma`, `descricao`) VALUES
(5, 'Desenvolvimento de Sistemas', 'Criar um código de sistema de controle de uma empresa de viagens'),
(6, 'Desenvolvimento de Sistemas', 'Criar uma página web de cadastro de veículos'),
(7, 'Mecatrônica', 'Aplicação de Microprocessadores.'),
(8, 'Mecatrônica', 'Aprendizado de Máquinas e Aplicações'),
(9, 'Redes', 'Aplicações em Redes e Administração de Sistemas'),
(10, 'Redes', 'Cabeamento'),
(11, 'Eletroeletrônica', 'Acessórios Elétricos'),
(12, 'Eletroeletrônica', 'Conectores e Terminais'),
(13, 'Internet das Coisas', 'Modelagem de dados'),
(14, 'Internet das Coisas', 'Sensores e atuadores em internet das coisas'),
(15, 'Robótica', 'Raciocínio lógico'),
(16, 'Robótica', 'Programação e Eletrônica'),
(17, 'Redação e Comunicação', 'Fazer um trabalho sobre tipos de comunicação'),
(18, 'Redação e Comunicação', 'Fazer uma redação sobre inovação em empresas'),
(19, 'Portugues', 'Fazer um resumo sobre os principais pontos da Sintaxe'),
(20, 'Portugues', 'Apresentação sobre morfologia e classes morfológicas '),
(21, 'Inovação e Criatividade de Projetos', 'Selecionar uma demanda da plataforma e fazer um projeto sobre'),
(22, 'Inovação e Criatividade de Projetos', 'Apresentação do Projeto de inovação');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `id_professor` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `nome`, `email`, `senha`) VALUES
(1, 'Allyson Freitas', 'allyson1@gmail.com', '123'),
(2, 'Leonardo Mendes', 'leozao2@gmail.com', '321'),
(3, 'Danila Manoel', 'danila_m3@gmail.com', '123321');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE `turmas` (
  `codigo` int(11) NOT NULL,
  `nome_turma` varchar(200) NOT NULL,
  `professor_cadastro` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `turmas`
--

INSERT INTO `turmas` (`codigo`, `nome_turma`, `professor_cadastro`) VALUES
(5, 'Desenvolvimento de Sistemas', 'Allyson Freitas'),
(6, 'Mecatrônica', 'Allyson Freitas'),
(7, 'Redes', 'Allyson Freitas'),
(8, 'Eletroeletrônica', 'Leonardo Mendes'),
(9, 'Internet das Coisas', 'Leonardo Mendes'),
(10, 'Robótica', 'Leonardo Mendes'),
(11, 'Redação e Comunicação', 'Danila Manoel'),
(12, 'Portugues', 'Danila Manoel'),
(13, 'Inovação e Criatividade de Projetos', 'Danila Manoel');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id_atividade`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id_professor`);

--
-- Índices de tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id_atividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
