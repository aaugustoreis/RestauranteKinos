CREATE DATABASE IF NOT EXISTS `RestauranteKinos` DEFAULT CHARACTER SET utf8 ;
use `RestauranteKinos`;



CREATE TABLE IF NOT EXISTS `RestauranteKinos`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(25) NOT NULL,
  `Morada` VARCHAR(15) NULL,
  `Contacto` INT (15) NULL,
   PRIMARY KEY (`idCliente`))
ENGINE = InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `RestauranteKinos`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `Categoria` varchar (15) NULL,
   PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `RestauranteKinos`.`Funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(25) NOT NULL,
  `Morada` varchar(45) NOT NULL,
  `Cargo` varchar(45) NULL,
  `Data_Nasc` DATE ,
  `Contacto` INT NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  PRIMARY KEY (`idFuncionario`)
  ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `RestauranteKinos`.`Reserva` (
  `idReserva` int(11) NOT NULL AUTO_INCREMENT,
  `Reserva` VARCHAR(11) NULL,
  `Data` DATE NOT NULL,
  `Cliente` INT NOT NULL,
  `Funcionario` INT NOT NULL,
   PRIMARY KEY (`idRESERVA`),
  KEY `ClienteReser` (`Cliente`),
  KEY `FuncionarioReser` (`Funcionario`),
  CONSTRAINT `ClienteReser` FOREIGN KEY (`Cliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FunconarioReser` FOREIGN KEY (`Funcionario`) REFERENCES `Funcionario` (`idFuncionario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `RestauranteKinos`.`Produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` VARCHAR(25) NOT NULL,
  `Preco` FLOAT(45) NOT NULL,
  `Categoria` INT NOT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `CategoriaProd` (`Categoria`),
  CONSTRAINT `Categoria` FOREIGN KEY (`Categoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `RestauranteKinos`.`Stock` (
  `idStock` int(11) NOT NULL AUTO_INCREMENT,
  `Stock` VARCHAR(25) NOT NULL,
  `Quantidade` INT(45) NOT NULL,
  `Produto` INT NOT NULL,
  PRIMARY KEY (`idStock`),
  KEY `ProdutoStock` (`Produto`),
  CONSTRAINT `ProdutoStock` FOREIGN KEY (`Produto`) REFERENCES `Produto` (`idProduto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `RestauranteKinos`.`Encomenda` (
  `idEncomenda` INT(11) NOT NULL AUTO_INCREMENT,
  `Encomenda` VARCHAR(11) NULL,
  `Data` DATE NOT NULL,
  `Quantidade` INT NOT NULL,
  `Local` VARCHAR(15) NOT NULL,
  `Cliente` INT NOT NULL,
  `Funcionario` INT NOT NULL,
  `Produto` INT NOT NULL,
   PRIMARY KEY (`idEncomenda`),
  KEY `EncomCliente` (`Cliente`),
  KEY `EncomFuncionario` (`Funcionario`),
  KEY `EncomProduto` (`Produto`),
  CONSTRAINT `EncomCliente` FOREIGN KEY (`Cliente`) REFERENCES `Cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `EncomFunconario` FOREIGN KEY (`Funcionario`) REFERENCES `Funcionario` (`idFuncionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `EncomProduto` FOREIGN KEY (`Produto`) REFERENCES `Produto` (`idProduto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

use restaurantekinos;
