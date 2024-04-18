-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2024 at 05:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetocesta`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastropesquisa`
--

CREATE TABLE `cadastropesquisa` (
  `idCadPesq` int(11) NOT NULL,
  `idEstagiarioPesq` int(11) NOT NULL,
  `idTipoComercio` int(11) NOT NULL,
  `idProdutoPesq` int(11) DEFAULT NULL,
  `maisVendido` varchar(30) DEFAULT NULL,
  `maisPrecoProduto` decimal(10,2) NOT NULL DEFAULT 0.00,
  `subVendido` varchar(30) DEFAULT NULL,
  `subPrecoProduto` decimal(10,2) NOT NULL DEFAULT 0.00,
  `barVendido` varchar(30) DEFAULT NULL,
  `barPrecoProduto` decimal(10,2) DEFAULT 0.00,
  `dataCadPesq` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `horaCadPesq` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Finalizado` varchar(1) NOT NULL DEFAULT '0',
  `dataCadastroPesq` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE `departamentos` (
  `idDepartamento` int(11) NOT NULL,
  `nomeDepartamento` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `industrializadoDepartamento` int(11) NOT NULL DEFAULT 0,
  `ativoDepartamento` int(1) NOT NULL DEFAULT 1,
  `dataCadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departamentos`
--

INSERT INTO `departamentos` (`idDepartamento`, `nomeDepartamento`, `industrializadoDepartamento`, `ativoDepartamento`, `dataCadastro`) VALUES
(1, 'carne', 0, 1, '2024-04-07 15:24:15'),
(2, 'hortifruti', 0, 1, '2024-04-07 15:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `estagiario`
--

CREATE TABLE `estagiario` (
  `idEstagiario` int(11) NOT NULL,
  `nomeEstagiario` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emailEstagiario` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `foneEstagiario` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `instituicaoEstagiario` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ativoEstagiario` int(1) NOT NULL DEFAULT 1,
  `dataCadastroEstagiario` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estagiario`
--

INSERT INTO `estagiario` (`idEstagiario`, `nomeEstagiario`, `emailEstagiario`, `foneEstagiario`, `instituicaoEstagiario`, `ativoEstagiario`, `dataCadastroEstagiario`) VALUES
(1, 'Lucas', 'lucas@fatec.edu.br', '1812123636', 'fatec', 1, '2024-04-07 15:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `pesquisa`
--

CREATE TABLE `pesquisa` (
  `idPesquisa` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `idTipoComercio` int(11) NOT NULL,
  `idEstagiario` int(11) NOT NULL,
  `maisVendidoDescricao` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `maisVendidoValor` decimal(10,0) NOT NULL,
  `substitutoDescricao` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `substitutoValor` decimal(10,0) NOT NULL,
  `baratoDescricao` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `baratoValor` decimal(10,0) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idUnidadeMedida` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `idSubDepartamento` int(11) NOT NULL,
  `ativoProduto` int(11) NOT NULL DEFAULT 1,
  `dataCadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipocomercio`
--

CREATE TABLE `tipocomercio` (
  `idTipoComercio` int(11) NOT NULL,
  `nomeTipoComercio` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ativoTipoComercio` int(11) NOT NULL DEFAULT 1,
  `dataTipoComercio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipocomercio`
--

INSERT INTO `tipocomercio` (`idTipoComercio`, `nomeTipoComercio`, `ativoTipoComercio`, `dataTipoComercio`) VALUES
(1, 'Supermercado Amigão', 1, '2024-03-21 15:07:03'),
(2, 'Supermercado Rondon - Cobrac', 1, '2024-04-07 15:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `unidademedidaproduto`
--

CREATE TABLE `unidademedidaproduto` (
  `idUnidadeMedida` int(11) NOT NULL,
  `nomeUnidadeMedida` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ativoUnidadeMedida` int(11) NOT NULL DEFAULT 1,
  `dataUnidadeMedida` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unidademedidaproduto`
--

INSERT INTO `unidademedidaproduto` (`idUnidadeMedida`, `nomeUnidadeMedida`, `ativoUnidadeMedida`, `dataUnidadeMedida`) VALUES
(1, 'un', 1, '2024-03-21 15:03:37'),
(2, 'kg', 1, '2024-03-21 15:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `enderecoCliente` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cidadeCliente` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cepCliente` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emailCliente` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userCliente` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `passCliente` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipoUsuarioCliente` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ativoCliente` int(1) NOT NULL DEFAULT 1,
  `instituicaoCliente` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dataCadastroCliente` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idCliente`, `nomeCliente`, `enderecoCliente`, `cidadeCliente`, `cepCliente`, `emailCliente`, `userCliente`, `passCliente`, `tipoUsuarioCliente`, `ativoCliente`, `instituicaoCliente`, `dataCadastroCliente`) VALUES
(1, 'marina keiko', 'rua numero', 'Araçatuba', '38800000', 'marina.matsumoto@fatec.sp.gov.br', 'marinakm', '123', 'administrador', 1, 'instituicaoAdminstrador', '2024-03-20 11:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastropesquisa`
--
ALTER TABLE `cadastropesquisa`
  ADD PRIMARY KEY (`idCadPesq`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`idDepartamento`);

--
-- Indexes for table `estagiario`
--
ALTER TABLE `estagiario`
  ADD PRIMARY KEY (`idEstagiario`);

--
-- Indexes for table `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`idPesquisa`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Indexes for table `tipocomercio`
--
ALTER TABLE `tipocomercio`
  ADD PRIMARY KEY (`idTipoComercio`);

--
-- Indexes for table `unidademedidaproduto`
--
ALTER TABLE `unidademedidaproduto`
  ADD PRIMARY KEY (`idUnidadeMedida`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastropesquisa`
--
ALTER TABLE `cadastropesquisa`
  MODIFY `idCadPesq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estagiario`
--
ALTER TABLE `estagiario`
  MODIFY `idEstagiario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `idPesquisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipocomercio`
--
ALTER TABLE `tipocomercio`
  MODIFY `idTipoComercio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unidademedidaproduto`
--
ALTER TABLE `unidademedidaproduto`
  MODIFY `idUnidadeMedida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
