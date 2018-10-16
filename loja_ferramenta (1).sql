-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2018 às 02:53
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja_ferramenta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `cidade` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `endereco`, `cidade`) VALUES
(1, 'Bruno', '1899777777', 'Rua Goias 12', 'Paraguacu Paulista'),
(2, 'Joao', '1899666666', 'Rua GuimarÃ£es Rosa', 'Paraguacu Paulista'),
(3, 'Maria', '18995555555', 'Rua ParaguaÃ§u', 'Paraguacu Paulista'),
(4, 'Giulia', '18998888888', 'Ademar de Barros', 'Paraguacu Paulista'),
(5, 'Giovanni', '1899111111', 'Assis', 'Assis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `id` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_pedido`
--

INSERT INTO `item_pedido` (`id`, `pedido`, `produto`, `quantidade`, `valor`) VALUES
(1, 1, 1, 1, 32),
(2, 1, 1, 1, 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `data`, `cliente`) VALUES
(1, '2018-10-01', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao`, `quantidade`, `valor`) VALUES
(1, 'Alicate', 100, 32),
(2, 'Furadeira', 55, 70),
(3, 'Jogo de Chave de Fenda', 40, 85),
(4, 'Jogo de Chave de Boca', 40, 88);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pwd`) VALUES
(1, 'nathalia', 'aaace03b8a92cfb86dc18dc737b3dc07'),
(2, 'paulo', 'aaace03b8a92cfb86dc18dc737b3dc07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itempedido_produto` (`produto`),
  ADD KEY `itempedido_pedido` (`pedido`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_compra` (`cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item_pedido`
--
ALTER TABLE `item_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `itempedido_pedido` FOREIGN KEY (`pedido`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `itempedido_produto` FOREIGN KEY (`produto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `cliente_compra` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
