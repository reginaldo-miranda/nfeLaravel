-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para nfefacil
DROP DATABASE IF EXISTS `nfefacil`;
CREATE DATABASE IF NOT EXISTS `nfefacil` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nfefacil`;

-- Copiando estrutura para tabela nfefacil.aliquf
DROP TABLE IF EXISTS `aliquf`;
CREATE TABLE IF NOT EXISTS `aliquf` (
  `codigo` char(2) NOT NULL,
  `descricao` varchar(25) DEFAULT NULL,
  `aliqicms` double DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.banco
DROP TABLE IF EXISTS `banco`;
CREATE TABLE IF NOT EXISTS `banco` (
  `codigo` int(11) NOT NULL,
  `banco` varchar(4) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `nome_reduzido` varchar(20) DEFAULT NULL,
  `emite_boleto` char(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.boleto
DROP TABLE IF EXISTS `boleto`;
CREATE TABLE IF NOT EXISTS `boleto` (
  `ordem` char(5) DEFAULT NULL,
  `banco` char(30) DEFAULT NULL,
  `nome_banco` char(10) DEFAULT NULL,
  `dataemis` char(10) DEFAULT NULL,
  `datavcto` char(10) DEFAULT NULL,
  `numbloq` char(13) DEFAULT NULL,
  `agencia` char(4) DEFAULT NULL,
  `dac_agencia` char(1) DEFAULT NULL,
  `conta` char(8) DEFAULT NULL,
  `carteira` char(2) DEFAULT NULL,
  `cod_cedente` char(7) DEFAULT NULL,
  `pac_cedente` char(2) DEFAULT NULL,
  `nome_cedente` char(50) DEFAULT NULL,
  `cnpj_cedente` char(24) DEFAULT NULL,
  `numdoc` char(12) DEFAULT NULL,
  `tipodoc` char(10) DEFAULT NULL,
  `moeda` char(4) DEFAULT NULL,
  `valor` char(20) DEFAULT NULL,
  `jurodia` char(12) DEFAULT NULL,
  `obs1` char(80) DEFAULT NULL,
  `obs2` char(80) DEFAULT NULL,
  `obs3` char(50) DEFAULT NULL,
  `obs4` char(50) DEFAULT NULL,
  `cod_sacado` char(7) DEFAULT NULL,
  `nome_sacado` char(50) DEFAULT NULL,
  `ende_sacado` char(50) DEFAULT NULL,
  `cep_sacado` char(9) DEFAULT NULL,
  `cidade_sacado` char(30) DEFAULT NULL,
  `uf_sacado` char(2) DEFAULT NULL,
  `doc_sacado` char(25) DEFAULT NULL,
  `vendedor` char(30) DEFAULT NULL,
  `carro` char(5) DEFAULT NULL,
  `dias_protesto` char(2) DEFAULT NULL,
  `cod_barra` char(46) DEFAULT NULL,
  `linha_digitavel` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.caixa
DROP TABLE IF EXISTS `caixa`;
CREATE TABLE IF NOT EXISTS `caixa` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `nome` char(15) DEFAULT NULL,
  `codmaquina` int(11) DEFAULT NULL,
  `serie65` char(3) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.cfop
DROP TABLE IF EXISTS `cfop`;
CREATE TABLE IF NOT EXISTS `cfop` (
  `codigo` int(11) NOT NULL,
  `cfop` int(11) DEFAULT NULL,
  `descricao` varchar(120) DEFAULT NULL,
  `observacao` varchar(120) DEFAULT NULL,
  `faturamento` tinyint(1) NOT NULL,
  `financeiro` tinyint(1) DEFAULT NULL,
  `seqcfop` int(11) DEFAULT NULL,
  `operacao` char(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `codigo` int(11) NOT NULL,
  `razaosocial` varchar(60) DEFAULT NULL,
  `fantasia` varchar(60) DEFAULT NULL,
  `pessoa` char(1) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `inscest` varchar(20) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `numero` varchar(8) DEFAULT NULL,
  `bairro` varchar(25) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `codcidade` int(11) NOT NULL,
  `uf` char(2) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `contato` varchar(20) DEFAULT NULL,
  `ramalcontato` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `consufinal` char(1) DEFAULT NULL,
  `diferido` char(1) DEFAULT NULL,
  `ehtransp` char(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_cliente_cidade` (`codcidade`),
  CONSTRAINT `fk_cliente_cidade` FOREIGN KEY (`codcidade`) REFERENCES `ibge` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.empresa
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `codigo` int(11) NOT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `codempresa` int(11) NOT NULL,
  `codigo_pais_nfe` varchar(4) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `contato` varchar(30) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `fantasia` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `inscest` varchar(20) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `razao` varchar(50) DEFAULT NULL,
  `tipo_nf` varchar(1) DEFAULT NULL,
  `codcidade` int(11) NOT NULL,
  `crt` char(1) DEFAULT NULL,
  `margem_lucro` double DEFAULT '15',
  PRIMARY KEY (`codigo`),
  KEY `fk_empresa_cidade` (`codcidade`),
  CONSTRAINT `fk_empresa_cidade` FOREIGN KEY (`codcidade`) REFERENCES `ibge` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.forma_pgto
DROP TABLE IF EXISTS `forma_pgto`;
CREATE TABLE IF NOT EXISTS `forma_pgto` (
  `codigo` int(11) NOT NULL,
  `descricao` char(20) NOT NULL,
  `qtde_parcelas` int(11) DEFAULT '0',
  `dias_inicial` int(11) DEFAULT '0',
  `dias_intervalo` int(11) DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.fornecedor
DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `codigo` int(11) NOT NULL,
  `razaosocial` varchar(60) DEFAULT NULL,
  `fantasia` varchar(60) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `inscest` varchar(20) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `numero` varchar(8) DEFAULT NULL,
  `bairro` varchar(25) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `codcidade` int(11) NOT NULL,
  `uf` char(2) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `contato` varchar(20) DEFAULT NULL,
  `ramalcontato` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_fornec_cidade` (`codcidade`),
  CONSTRAINT `fk_fornec_cidade` FOREIGN KEY (`codcidade`) REFERENCES `ibge` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.funcionarios
DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id_funcionarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario` double(10,2) NOT NULL,
  `funcao` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_funcionarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.ibge
DROP TABLE IF EXISTS `ibge`;
CREATE TABLE IF NOT EXISTS `ibge` (
  `codigo` int(11) NOT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `codcidade` int(11) DEFAULT NULL,
  `distrito` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.ibpt
DROP TABLE IF EXISTS `ibpt`;
CREATE TABLE IF NOT EXISTS `ibpt` (
  `uf` char(2) NOT NULL,
  `ncm` char(8) NOT NULL,
  `tipo` varchar(5) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `aliqNacionalFederal` double DEFAULT NULL,
  `aliqImportadosFederal` double DEFAULT NULL,
  `aliqEstadual` double DEFAULT NULL,
  `aliqMunicipal` double DEFAULT NULL,
  `vigenciaInicio` date DEFAULT NULL,
  `vigenciaFim` date DEFAULT NULL,
  `chave` varchar(10) DEFAULT NULL,
  `versao` varchar(10) DEFAULT NULL,
  `fonte` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uf`,`ncm`,`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.inf_resp_tec
DROP TABLE IF EXISTS `inf_resp_tec`;
CREATE TABLE IF NOT EXISTS `inf_resp_tec` (
  `codigo` int(11) NOT NULL,
  `cnpj` char(14) NOT NULL,
  `contato` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `fone` char(14) NOT NULL,
  `idcsrt` char(2) NOT NULL,
  `csrt` char(36) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.leiturax
DROP TABLE IF EXISTS `leiturax`;
CREATE TABLE IF NOT EXISTS `leiturax` (
  `tipo` char(10) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `numeronfce` int(11) DEFAULT NULL,
  `serienfce` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `modelonfe` char(2) DEFAULT NULL,
  `nivel` char(1) DEFAULT NULL,
  `alterar_qtde` char(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.maquina
DROP TABLE IF EXISTS `maquina`;
CREATE TABLE IF NOT EXISTS `maquina` (
  `codigo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `nome` char(20) DEFAULT NULL,
  `modelo` char(20) DEFAULT NULL,
  `numero_serie` char(20) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.margem
DROP TABLE IF EXISTS `margem`;
CREATE TABLE IF NOT EXISTS `margem` (
  `cnpj` char(14) NOT NULL,
  `margem` double DEFAULT NULL,
  PRIMARY KEY (`cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.movfin
DROP TABLE IF EXISTS `movfin`;
CREATE TABLE IF NOT EXISTS `movfin` (
  `empresa` int(11) NOT NULL,
  `tipomovfin` char(1) NOT NULL,
  `clifor` int(11) NOT NULL,
  `data_mvto` date NOT NULL,
  `documento` varchar(15) NOT NULL,
  `parcela` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  `data_vcto` date DEFAULT NULL,
  `valor_pago` double DEFAULT NULL,
  `data_pgto` date DEFAULT NULL,
  `numero_nfe` int(11) DEFAULT NULL,
  `serie_nfe` char(3) DEFAULT NULL,
  `chave_nfe` char(44) DEFAULT NULL,
  PRIMARY KEY (`empresa`,`tipomovfin`,`clifor`,`data_mvto`,`documento`,`parcela`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.nf
DROP TABLE IF EXISTS `nf`;
CREATE TABLE IF NOT EXISTS `nf` (
  `empresa` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `doc_cliente` char(14) DEFAULT NULL,
  `nome_documento` varchar(60) DEFAULT NULL,
  `cod_forma_pgto` int(11) NOT NULL,
  `cod_tipo_doc` char(2) DEFAULT NULL,
  `cod_banco` int(11) NOT NULL,
  `data_digitacao` date DEFAULT NULL,
  `valor_produtos` double DEFAULT NULL,
  `valor_descontos` double DEFAULT NULL,
  `valor_total` double DEFAULT NULL,
  `cod_transportador` int(11) NOT NULL,
  `dados_adicionais` varchar(255) DEFAULT NULL,
  `qtde_volume` int(11) DEFAULT '0',
  `peso_volume` double DEFAULT NULL,
  `placa_veiculo` char(8) DEFAULT NULL,
  `uf_placa` char(2) DEFAULT NULL,
  `pedido_cliente` char(25) DEFAULT NULL,
  `modelonfe` char(2) DEFAULT NULL,
  `numero_nfe` decimal(9,0) DEFAULT '0',
  `serie_nfe` varchar(3) DEFAULT NULL,
  `data_emissao` date DEFAULT NULL,
  `chave_nfe` char(54) DEFAULT NULL,
  `icms_bc` double DEFAULT NULL,
  `icms_vlr` double DEFAULT NULL,
  `ipi_bc` double DEFAULT NULL,
  `ipi_vlr` double DEFAULT NULL,
  `pis_bc` double DEFAULT NULL,
  `pis_vlr` double DEFAULT NULL,
  `cofins_bc` double DEFAULT NULL,
  `cofins_vlr` double DEFAULT NULL,
  `vtottrib` double DEFAULT NULL,
  `num_nfe_fat` decimal(9,0) DEFAULT '0',
  `fin_nfe` char(1) DEFAULT NULL,
  `data_cancelamento` date DEFAULT NULL,
  `num_nfe_dev` decimal(9,0) DEFAULT '0',
  `data_devolucao` date DEFAULT NULL,
  `qrcode` varchar(1024) DEFAULT NULL,
  `tpemis` char(1) DEFAULT NULL,
  `tpamb` char(1) DEFAULT NULL,
  `pedido_interno` char(15) DEFAULT NULL,
  `vTotIbpt` double DEFAULT NULL,
  `refNFe` char(44) DEFAULT NULL,
  `status_nfe` char(3) DEFAULT NULL,
  `motivo_nfe` varchar(300) DEFAULT NULL,
  `mod_frete` char(1) DEFAULT NULL,
  PRIMARY KEY (`empresa`,`pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.nfce_lido
DROP TABLE IF EXISTS `nfce_lido`;
CREATE TABLE IF NOT EXISTS `nfce_lido` (
  `id` int(11) DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.nfe_lido
DROP TABLE IF EXISTS `nfe_lido`;
CREATE TABLE IF NOT EXISTS `nfe_lido` (
  `id` int(11) DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.nf_entrada
DROP TABLE IF EXISTS `nf_entrada`;
CREATE TABLE IF NOT EXISTS `nf_entrada` (
  `empresa` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `cod_fornecedor` int(11) NOT NULL,
  `cod_forma_pgto` int(11) NOT NULL,
  `cod_tipo_doc` char(2) DEFAULT NULL,
  `cod_banco` int(11) NOT NULL,
  `data_digitacao` date DEFAULT NULL,
  `valor_produtos` double DEFAULT NULL,
  `valor_descontos` double DEFAULT NULL,
  `valor_total` double DEFAULT NULL,
  `cod_transportador` int(11) NOT NULL,
  `dados_adicionais` varchar(1024) DEFAULT NULL,
  `qtde_volume` int(11) DEFAULT '0',
  `peso_volume` double DEFAULT NULL,
  `placa_veiculo` char(8) DEFAULT NULL,
  `uf_placa` char(2) DEFAULT NULL,
  `pedido_fornecedor` char(25) DEFAULT NULL,
  `numero_nfe` decimal(9,0) NOT NULL DEFAULT '0',
  `serie_nfe` varchar(3) NOT NULL,
  `data_emissao` date DEFAULT NULL,
  `chave_nfe` char(54) DEFAULT NULL,
  `icms_bc` double DEFAULT NULL,
  `icms_vlr` double DEFAULT NULL,
  `ipi_bc` double DEFAULT NULL,
  `ipi_vlr` double DEFAULT NULL,
  `pis_bc` double DEFAULT NULL,
  `pis_vlr` double DEFAULT NULL,
  `cofins_bc` double DEFAULT NULL,
  `cofins_vlr` double DEFAULT NULL,
  `num_nfe_fat` decimal(9,0) DEFAULT '0',
  `fin_nfe` char(1) DEFAULT NULL,
  `data_cancelamento` date DEFAULT NULL,
  `num_nfe_dev` decimal(9,0) DEFAULT '0',
  `data_devolucao` date DEFAULT NULL,
  PRIMARY KEY (`empresa`,`cod_fornecedor`,`numero_nfe`,`serie_nfe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.nf_prazo
DROP TABLE IF EXISTS `nf_prazo`;
CREATE TABLE IF NOT EXISTS `nf_prazo` (
  `empresa` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `parcela` int(11) NOT NULL DEFAULT '1',
  `documento` char(12) DEFAULT NULL,
  `datavcto` date DEFAULT NULL,
  `vlr_parcela` double DEFAULT NULL,
  `datapgto` date DEFAULT NULL,
  `vlr_pago` double DEFAULT NULL,
  `datavcto_orig` date DEFAULT NULL,
  PRIMARY KEY (`empresa`,`pedido`,`parcela`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.nf_produtos
DROP TABLE IF EXISTS `nf_produtos`;
CREATE TABLE IF NOT EXISTS `nf_produtos` (
  `empresa` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `item` int(11) NOT NULL DEFAULT '0',
  `cod_produto` int(11) NOT NULL,
  `cod_interno` char(13) DEFAULT NULL,
  `cod_cfop` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '0',
  `peso` decimal(10,3) DEFAULT NULL,
  `vlr_unitario` double NOT NULL,
  `vlr_produto` double DEFAULT NULL,
  `vlr_desconto` double DEFAULT NULL,
  `vlr_total` double DEFAULT NULL,
  `icms_bc` double DEFAULT NULL,
  `icms_perc` double DEFAULT NULL,
  `icms_pred` double DEFAULT NULL,
  `icms_vlr` double DEFAULT NULL,
  `icms_cst` char(3) DEFAULT NULL,
  `ipi_bc` double DEFAULT NULL,
  `ipi_perc` double DEFAULT NULL,
  `ipi_vlr` double DEFAULT NULL,
  `ipi_cst` char(3) DEFAULT NULL,
  `pis_bc` double DEFAULT NULL,
  `pis_perc` double DEFAULT NULL,
  `pis_vlr` double DEFAULT NULL,
  `pis_cst` char(3) DEFAULT NULL,
  `cofins_bc` double DEFAULT NULL,
  `cofins_perc` double DEFAULT NULL,
  `cofins_vlr` double DEFAULT NULL,
  `cofins_cst` char(3) DEFAULT NULL,
  `vtottrib` double DEFAULT NULL,
  `preco_custo` double DEFAULT NULL,
  `vTotIbpt` double DEFAULT NULL,
  PRIMARY KEY (`empresa`,`pedido`,`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.nf_prod_entra
DROP TABLE IF EXISTS `nf_prod_entra`;
CREATE TABLE IF NOT EXISTS `nf_prod_entra` (
  `empresa` int(11) NOT NULL,
  `cod_fornecedor` int(11) NOT NULL,
  `numero_nfe` decimal(9,0) NOT NULL DEFAULT '0',
  `serie_nfe` varchar(3) NOT NULL,
  `item` int(11) NOT NULL DEFAULT '0',
  `pedido` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `cod_cfop` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '0',
  `peso` decimal(10,3) DEFAULT NULL,
  `vlr_unitario` double NOT NULL,
  `vlr_produto` double DEFAULT NULL,
  `vlr_desconto` double DEFAULT NULL,
  `vlr_total` double DEFAULT NULL,
  `icms_bc` double DEFAULT NULL,
  `icms_perc` double DEFAULT NULL,
  `icms_pred` double DEFAULT NULL,
  `icms_vlr` double DEFAULT NULL,
  `icms_cst` char(3) DEFAULT NULL,
  `ipi_bc` double DEFAULT NULL,
  `ipi_perc` double DEFAULT NULL,
  `ipi_vlr` double DEFAULT NULL,
  `ipi_cst` char(3) DEFAULT NULL,
  `pis_bc` double DEFAULT NULL,
  `pis_perc` double DEFAULT NULL,
  `pis_vlr` double DEFAULT NULL,
  `pis_cst` char(3) DEFAULT NULL,
  `cofins_bc` double DEFAULT NULL,
  `cofins_perc` double DEFAULT NULL,
  `cofins_vlr` double DEFAULT NULL,
  `cofins_cst` char(3) DEFAULT NULL,
  PRIMARY KEY (`empresa`,`cod_fornecedor`,`numero_nfe`,`serie_nfe`,`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.numerolote
DROP TABLE IF EXISTS `numerolote`;
CREATE TABLE IF NOT EXISTS `numerolote` (
  `empresa` int(11) DEFAULT NULL,
  `numeroproximolote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.numeronfe
DROP TABLE IF EXISTS `numeronfe`;
CREATE TABLE IF NOT EXISTS `numeronfe` (
  `empresa` int(11) NOT NULL,
  `serienfe` char(3) NOT NULL,
  `modelonfe` char(2) NOT NULL,
  `ambiente` char(1) NOT NULL,
  `numeronfe` int(11) NOT NULL,
  PRIMARY KEY (`empresa`,`serienfe`,`modelonfe`,`ambiente`),
  CONSTRAINT `fk_numeronfe_empresa` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.numeropedido
DROP TABLE IF EXISTS `numeropedido`;
CREATE TABLE IF NOT EXISTS `numeropedido` (
  `empresa` int(11) DEFAULT NULL,
  `pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.numerosequencia
DROP TABLE IF EXISTS `numerosequencia`;
CREATE TABLE IF NOT EXISTS `numerosequencia` (
  `empresa` int(11) DEFAULT NULL,
  `numeroproximaseq` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.numeroseq_tef
DROP TABLE IF EXISTS `numeroseq_tef`;
CREATE TABLE IF NOT EXISTS `numeroseq_tef` (
  `empresa` int(11) DEFAULT NULL,
  `numeroproximaseq` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.pardigital
DROP TABLE IF EXISTS `pardigital`;
CREATE TABLE IF NOT EXISTS `pardigital` (
  `codigo` int(11) NOT NULL,
  `empresa` int(11) NOT NULL,
  `senha_truststore` varchar(20) DEFAULT NULL,
  `senha_token` varchar(20) DEFAULT NULL,
  `senha_keystore` varchar(20) DEFAULT NULL,
  `serie55` char(3) DEFAULT NULL,
  `serie65` char(3) DEFAULT NULL,
  `verproc` char(30) DEFAULT NULL,
  `idtoken` char(6) DEFAULT NULL,
  `csc` varchar(40) DEFAULT NULL,
  `csc_prod` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_pardigital_empresa` (`empresa`),
  CONSTRAINT `fk_pardigital_empresa` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.pedidos65
DROP TABLE IF EXISTS `pedidos65`;
CREATE TABLE IF NOT EXISTS `pedidos65` (
  `empresa` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `documento` char(14) DEFAULT NULL,
  `nome_documento` varchar(60) DEFAULT NULL,
  `cod_forma_pgto` int(11) NOT NULL,
  `data_digitacao` date DEFAULT NULL,
  `qtde_itens` int(11) NOT NULL,
  `valor_produtos` double DEFAULT NULL,
  `valor_descontos` double DEFAULT NULL,
  `valor_total` double DEFAULT NULL,
  `dados_adicionais` varchar(255) DEFAULT NULL,
  `qtde_volume` int(11) DEFAULT '0',
  `peso_volume` double DEFAULT NULL,
  `numero_nfe` decimal(9,0) DEFAULT '0',
  `serienfe` varchar(3) DEFAULT NULL,
  `modelonfe` varchar(2) DEFAULT NULL,
  `data_emissao` date DEFAULT NULL,
  `cancelado` tinyint(1) DEFAULT NULL,
  `codcaixa` int(11) DEFAULT NULL,
  `codlogin` int(11) DEFAULT NULL,
  `codmaquina` int(11) DEFAULT NULL,
  `docAutTEF` varchar(10) DEFAULT NULL,
  `cnpjTEF` char(14) DEFAULT NULL,
  PRIMARY KEY (`empresa`,`pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.pessoa
DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `codigo` char(1) NOT NULL,
  `descricao` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `codigo` int(11) NOT NULL,
  `nome_reduzido` varchar(60) DEFAULT NULL,
  `seg_name` varchar(255) DEFAULT NULL,
  `unidade` char(2) DEFAULT NULL,
  `ean` char(14) DEFAULT NULL,
  `ncm` char(8) DEFAULT NULL,
  `cest` char(7) DEFAULT NULL,
  `origem` char(1) DEFAULT NULL,
  `preco_compra` double DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `peso` decimal(10,3) DEFAULT NULL,
  `codigo_fornec` char(12) DEFAULT NULL,
  `fornecedor` char(15) DEFAULT NULL,
  `marca` varchar(25) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `source_fat` char(2) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `garantia` double DEFAULT NULL,
  `icms_cst` varchar(3) DEFAULT NULL,
  `icms_perc` double DEFAULT NULL,
  `icms_pred` double DEFAULT NULL,
  `ipi_cst` varchar(2) DEFAULT NULL,
  `ipi_perc` double DEFAULT NULL,
  `pis_cst` varchar(2) DEFAULT NULL,
  `pis_perc` double DEFAULT NULL,
  `cofins_cst` varchar(2) DEFAULT NULL,
  `cofins_perc` double DEFAULT NULL,
  `trib_st_perc` double DEFAULT NULL,
  `descnovo` char(255) DEFAULT NULL,
  `descricao` char(255) DEFAULT NULL,
  `cnpj_fornecedor` char(14) DEFAULT NULL,
  `tipo_ncm` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.produtos65
DROP TABLE IF EXISTS `produtos65`;
CREATE TABLE IF NOT EXISTS `produtos65` (
  `empresa` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `item` int(11) NOT NULL DEFAULT '0',
  `cod_produto` int(11) NOT NULL,
  `cod_cfop` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '0',
  `peso` decimal(10,3) DEFAULT NULL,
  `vlr_unitario` double NOT NULL,
  `vlr_produto` double DEFAULT NULL,
  `vlr_desconto` double DEFAULT NULL,
  `vlr_total` double DEFAULT NULL,
  `cancelado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`empresa`,`pedido`,`item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.resumo_cst
DROP TABLE IF EXISTS `resumo_cst`;
CREATE TABLE IF NOT EXISTS `resumo_cst` (
  `empresa` int(11) NOT NULL,
  `icms_cst` char(3) NOT NULL,
  `pis_cst` char(3) NOT NULL,
  `valor_com_st` double DEFAULT NULL,
  `valor_sem_st` double DEFAULT NULL,
  PRIMARY KEY (`empresa`,`icms_cst`,`pis_cst`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.sangria
DROP TABLE IF EXISTS `sangria`;
CREATE TABLE IF NOT EXISTS `sangria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `codcaixa` int(11) NOT NULL,
  `codlogin` int(11) NOT NULL,
  `codgerente` int(11) NOT NULL,
  `data_sangria` date DEFAULT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.suprimento
DROP TABLE IF EXISTS `suprimento`;
CREATE TABLE IF NOT EXISTS `suprimento` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `codcaixa` int(11) NOT NULL,
  `codlogin` int(11) NOT NULL,
  `codgerente` int(11) NOT NULL,
  `data_suprimento` date DEFAULT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.tipomovfin
DROP TABLE IF EXISTS `tipomovfin`;
CREATE TABLE IF NOT EXISTS `tipomovfin` (
  `codigo` char(1) NOT NULL,
  `descricao` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.tipopgto65
DROP TABLE IF EXISTS `tipopgto65`;
CREATE TABLE IF NOT EXISTS `tipopgto65` (
  `empresa` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `id_tipo_pgto` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`empresa`,`pedido`,`id_tipo_pgto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.tipo_doc
DROP TABLE IF EXISTS `tipo_doc`;
CREATE TABLE IF NOT EXISTS `tipo_doc` (
  `codigo` char(2) NOT NULL,
  `descricao` char(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.tipo_pgto
DROP TABLE IF EXISTS `tipo_pgto`;
CREATE TABLE IF NOT EXISTS `tipo_pgto` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` char(10) DEFAULT NULL,
  `descricao` char(30) DEFAULT NULL,
  `tef` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.uf
DROP TABLE IF EXISTS `uf`;
CREATE TABLE IF NOT EXISTS `uf` (
  `codigo` char(2) NOT NULL,
  `descricao` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.unidade
DROP TABLE IF EXISTS `unidade`;
CREATE TABLE IF NOT EXISTS `unidade` (
  `codigo` char(2) NOT NULL,
  `descricao` char(25) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela nfefacil.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
