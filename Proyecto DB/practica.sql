-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2020 at 09:04 PM
-- Server version: 5.00.15
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `practica`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) NOT NULL,
  `Descrip` varchar(400) NOT NULL,
  `Fecha` date NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT '1',
  `Categorias_FK` int(11) NOT NULL,
  PRIMARY KEY (`ID_User`),
  KEY `Categorias_FK` (`Categorias_FK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID_User`, `Titulo`, `Descrip`, `Fecha`, `Autor`, `Status`, `Categorias_FK`) VALUES
(1, 'Los enemigos del estado son los perritos esponjosos', 'En este trabajo se explica como los perritos esponjosos seran los proximos conquistadores del universo; habra que detenerlos lo antes posibles', '2017-06-11', 'Kevin Carrillo Cuevas', 1, 2),
(3, 'Las ganas de ser comediante', 'El hombre que es un ing. es sistemas, pero que su sueño frustrado era ser comediante de tiempo completo, habla sobre su vida y lo quiere hacer con eso.', '2018-05-12', 'Luis Requena Hernández', 1, 1),
(4, 'Los memes como terapia', 'En este blog hablaremos sobre el gran beneficio que tienen los memes en la vida diaria y como pueden suplantar a los psicologos', '2020-06-09', 'Alexis Lamar Carrillo', 1, 1),
(5, 'Oxxos nuevos supermercados', 'Los oxxos son la siguiente revolución del los supermercados, venderán de todo, incluso armas en algún futuro', '2015-10-08', 'Michael Jordan ', 1, 1),
(6, 'Porque los Otakus no se bañan.', 'Nos hacemos la gran pregunta de porque los otakus no se bañan, después de muchos años de dura investigación tenemos la respuesta a esta gran incognita.', '2020-06-12', 'Uvufuewewe Onitwewewe Obewuve Osas', 1, 1),
(8, 'Hola mundo', 'como escribir un hola mundo con las manos atadas y los ojos vendados', '2020-06-17', 'Vegeta777', 1, 1),
(9, 'gracias por ver y suscribirse', 'dale like y compartelo con tus amigos para que haga mas videos asi, no olvides seguirme por mis redes sociales', '2013-07-10', 'Dross', 1, 1),
(10, 'Pech', 'Soy el maestro pech, todo un crack', '2077-07-07', 'Master Pech', 1, 1),
(17, 'lolita', 'este es un romance y solo por eso, es bueno', '2020-06-11', 'Kevin Cosner', 1, 7),
(18, 'ben 10', 'y si lo ves preparate pues te sorprendera', '2020-06-27', 'CN', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`ID`, `Nombre`, `Status`) VALUES
(1, 'Accion', 1),
(2, 'comedia', 1),
(7, 'Romance', 1),
(8, 'Investigacion', 1),
(9, 'Terror', 1),
(10, 'Educacion', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_User` varchar(100) NOT NULL,
  `Telefono_User` varchar(20) NOT NULL,
  `Direccion_User` varchar(150) NOT NULL,
  `Correo_User` varchar(100) NOT NULL,
  `Password_User` varchar(15) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID_User`, `Nombre_User`, `Telefono_User`, `Direccion_User`, `Correo_User`, `Password_User`, `Status`) VALUES
(4, 'Alexis', '987654321', 'drferre', 'uerrerfer@gmail.com', '123', 1),
(5, 'kevin carrillo', '54454545454', 'av.lolsito', 'naruto@gmail.com', 'lolito', 1),
(7, 'osas uvuwevuewue', '2342353454564', 'av.minecraft', 'coladegato@hotmail.com', 'contraseÃ±a', 1),
(16, 'juan perez', '2425272902', 'av. tulum', 'www@hotmail.com', '0000', 1),
(19, 'x', 'x', 'x', 'xxxx@xxx.com', 'xx', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`Categorias_FK`) REFERENCES `categorias` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
