-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2018 a las 18:53:36
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_materia`
--

CREATE TABLE `calificacion_materia` (
  `id_cal` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_mat` int(11) DEFAULT NULL,
  `id_exam` int(11) DEFAULT NULL,
  `base_datos` int(11) NOT NULL,
  `aplicaciones_I` int(11) NOT NULL,
  `aplicaciones_web` int(11) NOT NULL,
  `SO` int(11) NOT NULL,
  `Admin_funcion_info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canalizados`
--

CREATE TABLE `canalizados` (
  `id_canalizacion` int(11) NOT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canalizados`
--

INSERT INTO `canalizados` (`id_canalizacion`, `id_maestro`, `id_alumno`, `id_materia`) VALUES
(1, 76543, 20160094, 1),
(2, 76543, 20160091, 1),
(3, 76544, 20160348, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creacion`
--

CREATE TABLE `creacion` (
  `id_creacio` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `mensaje` text,
  `hora` time DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `creacion`
--

INSERT INTO `creacion` (`id_creacio`, `id_user`, `fecha_creacion`, `estado`, `mensaje`, `hora`, `id_materia`) VALUES
(13, 9, '2018-04-17', 'finalizado', 'This Exam Was Create By.<b> Bonnie </b>Now You Can Start Your Test.', NULL, NULL),
(14, 20160400, '2018-04-18', 'finalizado', 'This Exam Was Create By.<b> Carlos </b>Now You Can Start Your Test.', '05:54:00', NULL),
(15, 20160400, '2018-04-18', 'finalizado', 'This Exam Was Create By.<b> Carlos </b>Now You Can Start Your Test.', '07:23:00', NULL),
(17, 20160400, '2018-04-18', 'creado', 'This Exam Was Create By.<b> Carlos </b>Now You Can Start Your Test.', '10:26:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_corin` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_exam` int(11) DEFAULT NULL,
  `correctas` int(11) DEFAULT NULL,
  `incorrectas` int(11) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `calificasion` char(10) DEFAULT NULL,
  `dictamen` varchar(30) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora_termino` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_corin`, `id_usuario`, `id_exam`, `correctas`, `incorrectas`, `estado`, `calificasion`, `dictamen`, `fecha`, `hora_termino`) VALUES
(2, 20160403, NULL, 2, 0, 'Finalizado', '100', 'Aprobado', '2018-04-13', NULL),
(3, 20160094, NULL, 1, 1, 'Finalizado', '50', 'Reprobado', '2018-04-14', NULL),
(4, 20160094, NULL, 15, 23, 'Finalizado', '39', 'Reprobado', '2018-04-15', NULL),
(5, 20160094, 14, 43, 54, 'Finalizado', '44', 'Reprobado', '2018-04-18', '07:20:00'),
(6, 20160094, 15, 38, 59, 'Finalizado', '39', 'Reprobado', '2018-04-18', '12:07:00'),
(7, 20160348, 13, 44, 53, 'Finalizado', '45', 'Reprobado', '2018-04-18', '08:39:00'),
(8, 20160348, 14, 1, 96, 'Finalizado', '1', 'Reprobado', '2018-04-18', '09:01:00'),
(9, 20160094, 17, 40, 61, 'Finalizado', '39', 'Reprobado', '2018-04-19', '12:36:00'),
(10, 20160091, 17, 47, 54, 'Finalizado', '46', 'Reprobado', '2018-04-19', '10:11:00'),
(11, 20160091, 17, 34, 67, 'Finalizado', '33', 'Reprobado', '2018-04-19', '10:40:00'),
(12, 20160091, 17, 30, 71, 'Finalizado', '29', 'Reprobado', '2018-04-19', '11:51:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `mensaje_alumn` text,
  `mensaje_sujerencia` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `mensaje_alumn`, `mensaje_sujerencia`) VALUES
(1, 'fdghsfhjsd@ute.mx', 'jdcsjcb', 'iojfjerf'),
(2, 'a20160094@utem.edu.mx', 'jdcsjcb', 'iojfjerf'),
(3, 'a20160094@utem.edu.mx', 'jdcsjcb', 'iojfjerf'),
(4, '76543 ', '20160094', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_ma` int(11) NOT NULL,
  `materia` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_ma`, `materia`) VALUES
(1, 'Base de Datos II'),
(2, 'Desarrollo de Aplicaciones I'),
(3, 'Desarrollo de Aplicaciones Web'),
(4, 'Sistemas Operativos'),
(5, 'Administracion de la Funcion Informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mat_maestros`
--

CREATE TABLE `mat_maestros` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mat_maestros`
--

INSERT INTO `mat_maestros` (`id`, `id_user`, `id_materia`) VALUES
(1, 76543, 1),
(2, 76545, 4),
(3, 76544, 5),
(4, 76545, 2),
(5, 76543, 3),
(6, 9, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_respuestas`
--

CREATE TABLE `mis_respuestas` (
  `id_res` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `respuestas` text,
  `numero_examen` int(11) DEFAULT NULL,
  `id_corin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mis_respuestas`
--

INSERT INTO `mis_respuestas` (`id_res`, `id_user`, `id_pregunta`, `respuestas`, `numero_examen`, `id_corin`) VALUES
(1, 20160094, 68, 'website map', 17, 9),
(2, 20160094, 57, 'The System.Collections namespace contains all the headers', 17, 9),
(3, 20160094, 14, 'yes, but you have to give them a feedback', 17, 9),
(4, 20160094, 24, 'multiuser database application', 17, 9),
(5, 20160094, 3, 'asking to creative commons what kind of plans they have. And analyze', 17, 9),
(6, 20160094, 58, 'Intranet', 17, 9),
(7, 20160094, 55, 'yes. Just declare the class as enum', 17, 9),
(8, 20160094, 96, 'Servers, clients, domains', 17, 9),
(9, 20160094, 83, 'None of the Previous', 17, 9),
(10, 20160094, 72, 'The electronic mail', 17, 9),
(11, 20160094, 51, 'collecs interfaces', 17, 9),
(12, 20160094, 46, 'you can prevent a class, related it as an application', 17, 9),
(13, 20160094, 47, 'in an array, the index value of the first element is 2', 17, 9),
(14, 20160094, 9, 'yes. But it is limited', 17, 9),
(15, 20160094, 75, 'There is a possibility', 17, 9),
(16, 20160094, 23, 'single-user database application', 17, 9),
(17, 20160094, 53, 'it is possible if you believe', 17, 9),
(18, 20160094, 87, 'F8', 17, 9),
(19, 20160094, 50, 'it cannot be possible', 17, 9),
(20, 20160094, 89, 'Relate devices', 17, 9),
(21, 20160094, 7, 'A work is in public domain if it was published in the Africa before 1924', 17, 9),
(22, 20160094, 80, 'Programs that initialize the computer', 17, 9),
(23, 20160094, 92, 'None of the Previous', 17, 9),
(24, 20160094, 70, 'True', 17, 9),
(25, 20160094, 16, 'issue that person', 17, 9),
(26, 20160094, 74, 'None of the above', 17, 9),
(27, 20160094, 61, 'Security measures', 17, 9),
(28, 20160094, 1, 'copyright protects you of PDFs Malicious', 17, 9),
(29, 20160094, 25, 'Oracle', 17, 9),
(30, 20160094, 69, 'Similar to an electronic agenda', 17, 9),
(31, 20160094, 35, 'A -> B.', 17, 9),
(32, 20160094, 97, 'Number and otter sing', 17, 9),
(33, 20160094, 90, 'None of the Above', 17, 9),
(34, 20160094, 42, 'all of the above', 17, 9),
(35, 20160094, 86, 'Enter', 17, 9),
(36, 20160094, 21, 'R:base', 17, 9),
(37, 20160094, 95, 'None of the Previous', 17, 9),
(38, 20160094, 65, 'encryption', 17, 9),
(39, 20160094, 79, 'None of the Previous', 17, 9),
(40, 20160094, 59, 'None of the above', 17, 9),
(41, 20160094, 37, 'domain/key normal form.', 17, 9),
(42, 20160094, 84, 'Right', 17, 9),
(43, 20160094, 67, 'structure of the website', 17, 9),
(44, 20160094, 39, 'itâ€™s a programming language', 17, 9),
(45, 20160094, 11, 'Yes. The Copyright Office maintains records of copyright registrations and makes them available for public inspection', 17, 9),
(46, 20160094, 76, 'None of the above', 17, 9),
(47, 20160094, 98, 'Minimum cardinality', 17, 9),
(48, 20160094, 91, 'None of the Previous', 17, 9),
(49, 20160094, 38, 'relation', 17, 9),
(50, 20160094, 71, 'Random Access Memory', 17, 9),
(51, 20160094, 88, 'Ability to evolve', 17, 9),
(52, 20160094, 10, 'no, because the stage name. is not the element part to do that', 17, 9),
(53, 20160094, 33, 'DBMS', 17, 9),
(54, 20160094, 78, 'Windows 2000', 17, 9),
(55, 20160094, 85, 'NFTS', 17, 9),
(56, 20160094, 28, 'creating databases', 17, 9),
(57, 20160094, 6, 'A work is considered to be published when youâ€™ve noticed that you work is already part of copyright', 17, 9),
(58, 20160094, 81, 'Processor PIII 233 MHz, 128 MB Ram', 17, 9),
(59, 20160094, 100, 'Parent', 17, 9),
(60, 20160094, 99, 'Strong entity', 17, 9),
(61, 20160094, 54, 'The virtual keyword is used to write code automatically', 17, 9),
(62, 20160094, 40, 'class describes all the attributes of objects, as well as the methods that implement the behavior of member objects', 17, 9),
(63, 20160094, 31, 'data mining database application', 17, 9),
(64, 20160094, 19, 'The author/creator', 17, 9),
(65, 20160094, 15, 'because your work has been considered C already', 17, 9),
(66, 20160094, 49, 'yes, but in some kind of part you cannot do it complety', 17, 9),
(67, 20160094, 52, 'Each delegate object holds reference to a single method', 17, 9),
(68, 20160094, 4, 'you have to follow a process which you can find on CR', 17, 9),
(69, 20160094, 66, 'None of the above', 17, 9),
(70, 20160094, 73, 'False', 17, 9),
(71, 20160094, 22, 'user data', 17, 9),
(72, 20160094, 12, 'it takes about 4 years', 17, 9),
(73, 20160094, 41, 'itâ€™s a formal description to implement in a software', 17, 9),
(74, 20160094, 94, 'It is a software that allows the interconnection of computers to access services and resources, hardware and software, creating computer networks', 17, 9),
(75, 20160094, 5, 'yes, but it is limited.', 17, 9),
(76, 20160094, 62, 'Configuraciones', 17, 9),
(77, 20160094, 93, 'Monotarea and Multitasking', 17, 9),
(78, 20160094, 13, 'you need to register your works with the Copyright Office', 17, 9),
(79, 20160094, 44, 'itâ€™s a case to define interfaces', 17, 9),
(80, 20160094, 60, 'Extranet', 17, 9),
(81, 20160094, 26, 'Structured Question Language', 17, 9),
(82, 20160094, 27, 'an application program', 17, 9),
(83, 20160094, 101, 'Instance entity', 17, 9),
(84, 20160094, 77, 'None of the above', 17, 9),
(85, 20160094, 18, 'contact to US. And ask for CC', 17, 9),
(86, 20160094, 64, 'None of the above', 17, 9),
(87, 20160094, 20, 'Database application and SQL', 17, 9),
(88, 20160094, 63, 'security measures on the website', 17, 9),
(89, 20160094, 29, 'table', 17, 9),
(90, 20160094, 48, 'no you cannot specify', 17, 9),
(91, 20160094, 45, 'itâ€™s the principal element to implement in a framework', 17, 9),
(92, 20160094, 2, 'Technically, nothing happens', 17, 9),
(93, 20160094, 17, 'you have to give them a service', 17, 9),
(94, 20160094, 36, 'normal forms.', 17, 9),
(95, 20160094, 56, 'Enumeration is defined as a constantly retribution by the software engineer', 17, 9),
(96, 20160094, 30, 'dBase-II', 17, 9),
(97, 20160094, 82, 'Customized', 17, 9),
(98, 20160094, 43, 'CRUM method, FX interfaces', 17, 9),
(99, 20160091, 60, 'Extranet', 17, 12),
(100, 20160091, 50, 'Overriding involves the creation of two or more methods with the same name and same signature in different classes', 17, 12),
(101, 20160091, 100, 'Subtype', 17, 12),
(102, 20160091, 3, 'asking to creative commons what kind of plans they have. And analyze', 17, 12),
(103, 20160091, 27, 'described', 17, 12),
(104, 20160091, 4, 'you have to follow a process which you can find on CR', 17, 12),
(105, 20160091, 62, 'Videoconferencia', 17, 12),
(106, 20160091, 44, 'itâ€™s a part to implement in a Fx interface', 17, 12),
(107, 20160091, 75, 'There is a possibility', 17, 12),
(108, 20160091, 64, 'Encryption', 17, 12),
(109, 20160091, 26, 'Structured Question Language', 17, 12),
(110, 20160091, 67, 'Website map', 17, 12),
(111, 20160091, 96, 'None of the Previous', 17, 12),
(112, 20160091, 9, 'yes. But it is limited', 17, 12),
(113, 20160091, 88, 'Convenienc', 17, 12),
(114, 20160091, 31, 'multiuser database application', 17, 12),
(115, 20160091, 101, 'Subtype entity', 17, 12),
(116, 20160091, 82, 'Customized', 17, 12),
(117, 20160091, 20, 'Data and the database', 17, 12),
(118, 20160091, 48, 'All the methods inside an interface are always protected, by default', 17, 12),
(119, 20160091, 76, 'There is a possibility', 17, 12),
(120, 20160091, 85, 'NTSF', 17, 12),
(121, 20160091, 25, 'dBase-II', 17, 12),
(122, 20160091, 98, 'Minimum cardinality', 17, 12),
(123, 20160091, 92, 'Single-user and multi-user', 17, 12),
(124, 20160091, 95, 'Windows server, windows vista, windows 8, mac os x yosemita', 17, 12),
(125, 20160091, 36, 'referential integrity constraints.', 17, 12),
(126, 20160091, 46, 'you can prevent a class, deleting the same', 17, 12),
(127, 20160091, 97, 'Number and otter sing', 17, 12),
(128, 20160091, 23, 'e-commerce database application', 17, 12),
(129, 20160091, 35, 'A -> C.', 17, 12),
(130, 20160091, 78, 'Mac Os', 17, 12),
(131, 20160091, 54, 'The virtual keyword is used to write code automatically', 17, 12),
(132, 20160091, 99, 'Strong entity', 17, 12),
(133, 20160091, 13, 'yes but you have to delete some information about your project', 17, 12),
(134, 20160091, 93, 'Single-user and multi-user', 17, 12),
(135, 20160091, 16, 'call to goku ', 17, 12),
(136, 20160091, 39, 'itâ€™s a software', 17, 12),
(137, 20160091, 33, 'DBMS', 17, 12),
(138, 20160091, 45, 'itâ€™s a term to use on software ingineer', 17, 12),
(139, 20160091, 81, 'Computer and keyboard', 17, 12),
(140, 20160091, 87, 'Enter', 17, 12),
(141, 20160091, 56, 'Enumeration is defined as a constantly retribution by the software engineer', 17, 12),
(142, 20160091, 94, 'None of the Previous', 17, 12),
(143, 20160091, 47, 'In an array, the index value of the first element is 0 (zero)', 17, 12),
(144, 20160091, 51, 'release the software and sell it automatically', 17, 12),
(145, 20160091, 89, 'Relate devices', 17, 12),
(146, 20160091, 8, 'yes, but it will cost you a little bit more of money', 17, 12),
(147, 20160091, 91, 'Monotarea and Multitasking', 17, 12),
(148, 20160091, 77, 'There is a possibility', 17, 12),
(149, 20160091, 14, 'No. You can copyright unpublished works. It just needs to be in a tangible form', 17, 12),
(150, 20160091, 52, 'it has varios features to work with the enviromental', 17, 12),
(151, 20160091, 79, 'Organize the information that is stored in the computer', 17, 12),
(152, 20160091, 24, 'multiuser database application', 17, 12),
(153, 20160091, 68, 'None of the above', 17, 12),
(154, 20160091, 70, 'Organization of Schedules', 17, 12),
(155, 20160091, 86, 'Enter', 17, 12),
(156, 20160091, 59, 'None of the above', 17, 12),
(157, 20160091, 5, 'yes, but it is limited.', 17, 12),
(158, 20160091, 30, 'R:base', 17, 12),
(159, 20160091, 49, 'yes, but you have to replace varios elements', 17, 12),
(160, 20160091, 10, 'no, because the stage name is private', 17, 12),
(161, 20160091, 53, 'it is possible if you believe', 17, 12),
(162, 20160091, 15, 'because your work has been considered C already', 17, 12),
(163, 20160091, 17, 'you have to give them a service', 17, 12),
(164, 20160091, 29, 'database', 17, 12),
(165, 20160091, 12, 'â€“ it takes about 10 years', 17, 12),
(166, 20160091, 38, 'record.', 17, 12),
(167, 20160091, 61, 'Technical requirements', 17, 12),
(168, 20160091, 18, 'you must contact to the copyright office to ask for one', 17, 12),
(169, 20160091, 84, 'None of the Previous', 17, 12),
(170, 20160091, 41, 'itâ€™s a piece of interface for a module', 17, 12),
(171, 20160091, 83, 'Spanish-Spain', 17, 12),
(172, 20160091, 57, 'The System.Collections namespace contains all footers', 17, 12),
(173, 20160091, 22, 'reports', 17, 12),
(174, 20160091, 55, 'yes. Just create a MVC', 17, 12),
(175, 20160091, 63, 'Technical requirements', 17, 12),
(176, 20160091, 11, 'it depends of your project', 17, 12),
(177, 20160091, 42, 'itâ€™s a collection to represent a case', 17, 12),
(178, 20160091, 72, 'The chat', 17, 12),
(179, 20160091, 73, 'None of the above', 17, 12),
(180, 20160091, 7, 'A work is in public domain if it was published in London before 1923', 17, 12),
(181, 20160091, 6, 'A work is considered to be published when youâ€™ve noticed that you work is already part of copyright', 17, 12),
(182, 20160091, 90, 'None of the Above', 17, 12),
(183, 20160091, 21, 'dBase-II', 17, 12),
(184, 20160091, 65, 'encryption', 17, 12),
(185, 20160091, 66, 'None of the above', 17, 12),
(186, 20160091, 43, 'java look and feel, W3C', 17, 12),
(187, 20160091, 37, 'fourth normal form.', 17, 12),
(188, 20160091, 69, 'A Laptop', 17, 12),
(189, 20160091, 74, 'None of the above', 17, 12),
(190, 20160091, 19, 'The author/creator', 17, 12),
(191, 20160091, 40, 'itâ€™s a module of mangagement', 17, 12),
(192, 20160091, 28, 'processing data', 17, 12),
(193, 20160091, 58, 'Internet', 17, 12),
(194, 20160091, 80, 'Set of programs that manage the tasks that run concurrently on the computer', 17, 12),
(195, 20160091, 1, 'Literary works, Music and lyrics and Dramatic works and music', 17, 12),
(196, 20160091, 71, 'Access Memory', 17, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `pregunta` text,
  `correcta` text,
  `incorrecta1` text,
  `incorrecta2` text,
  `incorrecta3` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `id_materia`, `pregunta`, `correcta`, `incorrecta1`, `incorrecta2`, `incorrecta3`) VALUES
(1, 5, 'What is copyright and what does it protect?', 'Literary works, Music and lyrics and Dramatic works and music', 'nothing at all ', 'copyright protects you of PDFs Malicious', 'copyright protects you of your personal information'),
(2, 5, 'When is something copyrighted?', 'Technically, in order to copyright something, assuming it\'s your original work', 'Technically, nothing happens', 'Technically, a system will be delete', 'Technically, a system can be a contribution with the community'),
(3, 5, 'How do I copyright something?', 'The cheapest way to copyright something is to register it online', 'asking to creative commons what kind of plans they have. And analyze', 'calling to USA and ask for a plan of CR', 'buy a license on internet'),
(4, 5, 'How much does it cost to register a copyright?', 'it depends what you want to register', 'it cost nothing at all', 'you have to follow a process which you can find on CR', 'you have to set CC at your project'),
(5, 5, 'Can I copyright multiple things in one application?', 'Yes, if the multiple items are considered a collection.', 'yes, but it is limited.', 'no, you cannot copyright multiple things.', 'yes, but you have to handle a different method.'),
(6, 5, 'When is a work considered published?', 'A work is considered to be published when the author or owner makes it available to the public on a non-restricted basis', 'A work is considered to be published when youâ€™ve received a confirmation by email', 'A work is considered to be published when youâ€™ve published it in an official page', 'A work is considered to be published when youâ€™ve noticed that you work is already part of copyright'),
(7, 5, 'How long does a copyright last?', 'A work is in public domain if it was published in the United States before 1923.', 'A work is in public domain if it was published in the Africa before 1924', 'A work is in public domain if it was published in Russia before 1932', 'A work is in public domain if it was published in London before 1923'),
(8, 5, 'Can I renew a copyright?', 'No, you can\'t renew works created on or after January 1, 1978, but for works published or registered prior to January 1, 1978, renewal registration is optional after 28 years', 'yes, but it will cost you a little bit more of money', 'yes, but the process will be more complicate', 'no, you canâ€™t because your work has been published as an official and unchange'),
(9, 5, 'Can a copyright be transferred?', 'Yes. Transfers are normally made via contracts because the U.S. Copyright Office doesn\'t have forms for transfers', 'no, because doesnâ€™t exist that implementation yet', 'no, because it is not permitted', 'yes. But it is limited'),
(10, 5, 'Can I use a stage name to register my copyright?', 'yes, you can use a stage name. Just check the Pseudonymous box when giving information about the authors in your registration', 'no, because the stage name is private', 'yes, because stage name. just check the name.', 'no, because the stage name. is not the element part to do that'),
(11, 5, 'Will my personal information be available to the public if I register a copyright?', 'Yes. The Copyright Office maintains records of copyright registrations and makes them available for public inspection', 'no, it will not', 'it depends of your project', 'in most cases it will be. In rarely project it is'),
(12, 5, 'How long does it take for something to get copyrighted?', 'For online registration, about 90 days. For hard-copy registrations, the average processing time is 10 months', 'it takes about 4 years', 'â€“ it takes about 10 years', 'it takes about 3 years'),
(13, 5, 'Do I need to register my work with the Copyright Office in order for it to be protected?', 'you need to register your works with the Copyright Office', 'not at all', 'yes but you have to delete some information about your project', 'yes but you have to complete a formulary'),
(14, 5, 'Does my work have to be published before I can copyright it?', 'No. You can copyright unpublished works. It just needs to be in a tangible form', 'yes, but you have to give them a feedback', 'for some projects it is necessary', 'for some project it is not necessary'),
(15, 5, 'Why should I register a copyright if it\'s already protected?', 'because Your work is considered copyrighted under U.S', 'because your work has been considered C already', 'because it could disable the copyright', 'because it could be robe if you not do that'),
(16, 5, 'What can I do if someone else is using my work without my permission?', 'If your work is registered with the Copyright Office, and a third party is liable for copyright infringement, you can sue them. To do this, you\'ll need to hire an attorney', 'issue that person', 'call to goku ', 'call to Gio to ask for the requirements'),
(17, 5, 'How do I copyright something for free?', 'The cheapest way is to do this yourself on their website, but consulting an attorney or using a service like LegalZoom can save you from costly mistakes, and save time', 'you have to work with the ONU', 'you have call to creative commons', 'you have to give them a service'),
(18, 5, 'How can I get an international copyright?', 'There\'s no such thing as an international copyright that will automatically protect your work around the world ', 'you must contact to the copyright office to ask for one', 'you must contact creative commons and copyright office to create one', 'contact to US. And ask for CC'),
(19, 5, 'Who owns the copyright?', 'The author/creator', 'The author/creatorâ€™s heirs if the creator is dead (living family)', 'Creators of a joint work automatically share copyright ownership unless there is a contrary agreement', 'Anyone to whom the author/creator'),
(20, 1, 'The DBMS acts as an interface between what two components of an enterprise-class database system?', 'Database application and the database', 'Data and the database', 'The user and the database application', 'Database application and SQL'),
(21, 1, 'Which of the following products was an early implementation of the relational model developed by E.F. Codd of IBM?', 'DB2', 'IDMS', 'dBase-II', 'R:base'),
(22, 1, 'The following are components of a database except _____________.', 'reports', 'user data', 'metadata', 'indexes'),
(23, 1, 'An application where only one user accesses the database at a given time is an example of a(n) ________ .', 'single-user database application', 'multiuser database application', 'e-commerce database application', 'data mining database application'),
(24, 1, 'An on-line commercial site such as Amazon.com is an example of a(n) ________ .', 'e-commerce database application', 'single-user database application', 'multiuser database application', 'data mining database application'),
(25, 1, 'Which of the following products was the first to implement true relational algebra in a PC DBMS?', 'R:base', 'IDMS', 'Oracle', 'dBase-II'),
(26, 1, 'SQL stands for ________ .', 'Structured Query Language', 'Sequential Query Language', 'Structured Question Language', 'Sequential Question Language'),
(27, 1, 'Because it contains a description of its own structure, a database is considered to be ________ .', 'self-describing', 'described', 'metadata compatible', 'an application program'),
(28, 1, 'The following are functions of a DBMS except ________ .', 'creating and processing forms', 'creating databases', 'processing data', 'administrating databases'),
(29, 1, 'Helping people keep track of things is the purpose of a(n) ________ .', 'database', 'table', 'instance', 'relationship'),
(30, 1, 'Which of the following products implemented the CODASYL DBTG model?', 'IDMS', 'DB2', 'dBase-II', 'R:base'),
(31, 1, 'An Enterprise Resource Planning application is an example of a(n) ________ .', 'multiuser database application', 'single-user database application', 'e-commerce database application', 'data mining database application'),
(32, 1, 'A DBMS that combines a DBMS and an application generator is ________ .', 'Microsoft\'s Access', 'Microsoft\'s SQL Server', 'IBM\'s DB2', 'Oracle Corporation\'s Oracle'),
(33, 1, 'Which of the following is not considered to be a basic element of an enterprise-class database system?', 'COBOL programs', 'DBMS', 'Database applications', 'Users'),
(34, 1, 'The DBMS that is most difficult to use is ________ .', 'Oracle Corporation\'s Oracle', 'IBM\'s DB2', 'Microsoft\'s Access', 'Microsoft\'s SQL Server'),
(35, 1, 'Every time attribute A appears, it is matched with the same value of attribute B, but not the same value of attribute C. Therefore, it is true that:', 'A -> B.', 'A -> C.', 'A -> (B,C).', '(B,C) -> A.'),
(36, 1, 'The different classes of relations created by the technique for preventing modification anomalies are called:', 'normal forms.', 'referential integrity constraints.', 'functional dependencies.', 'None of the above is correct.'),
(37, 1, 'A relation is in this form if it is in BCNF and has no multivalued dependencies:', 'fourth normal form.', 'second normal form.', 'third normal form.', 'domain/key normal form.'),
(38, 1, 'Row is synonymous with the term:', 'record.', 'relation', 'column.', 'field'),
(39, 2, 'What is object-oriented programming (OOP)?', 'OOP is a technique to develop logical modules', 'itâ€™s a proyect management', 'itâ€™s a programming language', 'itâ€™s a software'),
(40, 2, 'What is a class?', 'class describes all the attributes of objects, as well as the methods that implement the behavior of member objects', 'itâ€™s a module of mangagement', 'itâ€™s a software whose is used for developing', 'its a elemento f scrum'),
(41, 2, 'What is an object?', 'They are instance of classes. It is a basic unit of a system', 'itâ€™s a particular object which has the functionality to write interfaces', 'itâ€™s a formal description to implement in a software', 'itâ€™s a piece of interface for a module'),
(42, 2, 'What is the relationship between a class and an object?', 'class acts as a blue-print that defines the properties, states, and behaviors that are common to a number of objects', 'itâ€™s a collection to represent a case', 'itâ€™s part of the system that can be implemented as a class', 'all of the above'),
(43, 2, '5	What is the basic features of OOPs?', 'Abstraction - Refers to the process of exposing only the relevant and essential data to the users without showing unnecessary information', 'collections, clases, interfaces', 'java look and feel, W3C', 'CRUM method, FX interfaces'),
(44, 2, 'What is an array?', 'An array is a data structure that contains a group of elements', 'itâ€™s a particular thing to develop interfaces', 'itâ€™s a case to define interfaces', 'itâ€™s a part to implement in a Fx interface'),
(45, 2, 'What is the definition of  collection?', 'collection is defined as a group of related items that can be referred to as a single unit', 'itâ€™s a term to use on software ingineer', 'itâ€™s the validation to contribuit with the enviromental system', 'itâ€™s the principal element to implement in a framework'),
(46, 2, 'How can you prevent your class to be inherited further?', 'You can prevent a class from being inherited further by defining it with the sealed keyword', 'you can prevent a class, transforming the same in a interface', 'you can prevent a class, related it as an application', 'you can prevent a class, deleting the same'),
(47, 2, 'What is the index value of the first element in an array?', 'In an array, the index value of the first element is 0 (zero)', 'in an array, the index value of the first element is 1', 'in an array, the index value of the first element is 2', 'in an array, the index value of the first element is 3'),
(48, 2, 'Can you specify the accessibility modifier for methods inside the interface', 'All the methods inside an interface are always public, by default. You cannot specify any other access modifier for them', 'no you cannot specify', 'All the methods inside an interface are always private, by default', 'All the methods inside an interface are always protected, by default'),
(49, 2, 'Is it possible for a class to inherit the constructor of its base class?', 'No, a class cannot inherit the constructor of its base class', 'yes it could be', 'yes, but you have to replace varios elements', 'yes, but in some kind of part you cannot do it complety'),
(50, 2, 'How is method overriding different from method overloading?', 'Overriding involves the creation of two or more methods with the same name and same signature in different classes', 'it cannot be possible', 'Overriding involves the creation of the interface to make it different', 'Overriding involves the quantification by the method overloading'),
(51, 2, 'What is the features of a class ?', '1.A class is a reference type- 2.While instantiating a class, CLR allocates memory for its instance in heap-3.Classes support inheritance-4.Variables of a class can be assigned as null-5.Class can contain constructor/destructor', 'collecs interfaces', 'retrieve information', 'release the software and sell it automatically'),
(52, 2, 'Basically how works the multicast delegate?', 'Each delegate object holds reference to a single method', 'it works whit interfaces and classes', 'it just Works on interfaces', 'it has varios features to work with the enviromental'),
(53, 2, 'Can you declare an overridden method to be static if the original method is not static?', 'No. Two virtual methods must have the same signature', 'yes, you can', 'no, you canâ€™t', 'it is possible if you believe'),
(54, 2, 'Why is the virtual keyword used in code?', 'The virtual keyword is used while defining a class to specify that the methods and the properties of that class can be overridden in derived classes', 'The virtual keyword is used to write code automatically', 'The virtual keyword is used to create a complety software', 'The virtual keyword is used build clases, interfaces, enum and others'),
(55, 2, 'Can you allow a class to be inherited, but prevent a method from being overridden in C#?', 'Yes. Just declare the class public and make the method sealed', 'yes. Just declare the class as enum', 'yes. Just declare the class as interface', 'yes. Just create a MVC'),
(56, 2, 'Define enumeration?', 'Enumeration is defined as a value type that consists of a set of named values', 'Enumeration is defined as a function to represent many classes', 'Enumeration is defined as a function to valuate a software', 'Enumeration is defined as a constantly retribution by the software engineer'),
(57, 2, 'In which namespace, all .NET collection classes are contained?', 'The System.Collections namespace contains all the collection classes', 'The System.Collections namespace contains all the headers', 'The System.Collections namespace contains all footers', 'The System.Collections namespace contains all the frameworks'),
(58, 3, 'World-class computer network that uses the telephone line to transmit information', 'Internet', 'Intranet', 'Extranet', 'None of the above'),
(59, 3, 'It is a computer network that uses Internet protocol technology to share information, operating systems or computer services within an organization', 'Intranet', 'Internet', 'Extranet', 'None of the above'),
(60, 3, 'It is a private network that uses Internet protocols, communication protocols and probably public communication infrastructure to securely share part of the information or operation of an organization with suppliers, buyers, partners, customers or any other business', 'Extranet', 'Intranet', 'Internet', 'None of the above'),
(61, 3, 'Content visibility, content update, activity or main purpose are:', 'Types of website', 'Technical requirements', 'Security measures', 'None of the above'),
(62, 3, 'what are the techs requirements?', 'Procesador IntelÂ® a 1,3 GHz o superior, Memoria RAM 512 Mb, Bocinas o AudÃ­fonos', 'Videoconferencia', 'Configuraciones', 'Ninguna de las anteriores'),
(63, 3, 'They tend to focus mainly on the elimination or reduction of system vulnerabilities', 'security measures on the website', 'Types of website', 'Technical requirements', 'None of the above'),
(64, 3, 'Computer procedure that ensures that a user of a website or similar service is authentic or who he claims to be', 'Authentication', 'Encryption', 'Customer specificationsCustomer specifications', 'None of the above'),
(65, 3, 'It is the process to make information illegible considered important', 'encryption', 'authentication', 'Customer specification', 'None of the above'),
(66, 3, 'are the exact statements of the particular needs that must be met, or the essential characteristics that a film needs and that a provider must deliver', 'customer specification', 'encryption', 'authentication', 'None of the above'),
(67, 3, 'It refers to the way in which their pages are related to each other and the user\'s browsing experience', 'structure of the website', 'website content', 'Website map', 'None of the above'),
(68, 3, 'is a collection of web pages related to and common to an internet domain or subdomain on the World Wide Web within the Internet', 'website content', 'website map', 'Website structure', 'None of the above'),
(69, 3, 'One of the following definitions does not correspond to a PDA', 'A Laptop', 'Personal Digital Assistant', 'Similar to an electronic agenda', 'None of the above'),
(70, 3, 'Chronological organization: Articles in a blog are sorted chronologically showing first the most recent articles. The previous statement is:', 'True', 'False', 'Organization of Schedules', 'Organization of Activities'),
(71, 3, 'RAM is the acronym for the English concept of Random Access Memory which means:', 'Random Access Memory', 'Limited Access Memory', 'Access Memory', 'None of the above'),
(72, 3, 'Of the following applications, one of them does not allow synchronous communication', 'The electronic mail', 'The chat', 'Facebook', 'None of the above'),
(73, 3, 'Within the web 2.0 tools, we find: Prezi, WEbNode, Wikispace, youtube. All the aforementioned list, is part of this group of tools?', 'True', 'False', 'None of the above', 'There is a possibility'),
(74, 3, 'Who are responsible for interpreting the html code?', 'Browsers', 'Flex', 'Text processor', 'None of the above'),
(75, 3, 'A hypertext document is only composed of text', 'False', 'True', 'None of the above', 'There is a possibility'),
(76, 3, 'Html is a nested language', 'True', 'False', 'None of the above', 'There is a possibility'),
(77, 3, 'On August 6, 1991 was the World Wide Web born?', 'True', 'None of the above', 'False', 'There is a possibility'),
(78, 4, 'which of the following operating system does not handle a graphics interface?', 'Unix', 'Windows 2000', 'Mac Os', 'Windows Xp'),
(79, 4, 'which of the following is a function of an operating system?', 'None of the Previous', 'Organize the information that is stored in the computer', 'Manage computer resources', 'All the previous ones'),
(80, 4, 'what is a operating system?', 'Set of programs that manage the tasks that run concurrently on the computer', 'All the previous ones', 'Programs that initialize the computer', 'None of the Previous'),
(81, 4, 'mention the requirements to install windows xp', 'Processor PIII 233 MHz, 128 MB Ram', 'Computer and keyboard', 'All the previous ones', 'None of the above'),
(82, 4, 'what is the valid configuration for the majority of users when the operating system is installed?', 'Customized', 'Regional', 'Typical', 'None of the Previous'),
(83, 4, 'what option is selected in regional configuration and language?', 'Spanish-Mexico', 'Spanish-Spain', 'Spanish-Latin America', 'None of the Previous'),
(84, 4, 'in which part of the screen deploy the characteristics of the operating system, in the process of installation?', 'Progress screen', 'Right', 'Left', 'None of the Previous'),
(85, 4, 'what system of files is utilize to format windows 2000 and XP?', 'NFTS', 'NTFS', 'NTSF', 'None of the previous'),
(86, 4, 'What key is pressed, to cancel the installation of Windows?', 'F8', 'Enter', 'F3 ', 'None of the previous'),
(87, 4, 'what key is pressed to create a partition in a space not utilized?', 'C', 'Enter', 'F8', 'None of the previous'),
(88, 4, 'an operating system must be constructed by way to permit the development, proof or introduction effective of new functions of the system without interfering with the service', 'Ability to evolve', 'Convenienc', 'Efficiency', 'None of the Previous'),
(89, 4, 'the operating system should be in charge to communicate to peripheral devices.when the user wants it', 'Relate devices', 'Organize data', 'Accessibility', 'None of the Previous'),
(90, 4, 'what is a system multitasking?', 'It allows to execute different programs at the same time', 'It allows several users to execute programs at the same time', 'None of the Above', 'All the previous ones'),
(91, 4, 'classification of the operating system by the tasks management', 'Monotarea and Multitasking', 'Centralized and distributed', 'Single-user and multi-user', 'None of the Previous'),
(92, 4, 'classification of the operating system by user management', 'Single-user and multi-user', 'Centralized and distributed', 'Monotarea and Multitasking', 'None of the Previous'),
(93, 4, 'classification of the operating system by resources handling', 'Centralized and distributed', 'Monotarea and Multitasking', 'Single-user and multi-user', 'None of the previous'),
(94, 4, 'what is a network operating system?', 'It is a software that allows the interconnection of computers to access services and resources, hardware and software, creating computer networks', 'It is software that allows us to design and create networks of all types', 'It is a software that allows us to detect malicious software, mallware', 'None of the Previous'),
(95, 4, 'Examples of network operating system', 'Windows NT Server, Nover Netware, LAN Manager, Windows Server 2008', 'Solaris, ubuntu, fedora, debian', 'Windows server, windows vista, windows 8, mac os x yosemita', 'None of the Previous'),
(96, 3, 'the components of the network operating system habitually are', 'Servers, clients, domains', 'Multitasking, single user', 'RAM Memory, Antivirus, internet', 'None of the Previous'),
(97, 3, 'a network operating system, also called â€œNOSâ€ from English:', 'Network operating system', 'News and olds system', 'Number and otter sing', 'None of the Previous'),
(98, 1, 'Which of the following indicates te maximum number of entities that cab be involved in a relationship?', 'Minimum cardinality', 'Maximum cardinality', 'ERD', 'Greater Entity Count (GEC)'),
(99, 1, 'Which type of entity cannot exist in the database unless another type of entity also exists in the database, but does not require taht the identifier of thet other entity be included as part of its own identifier?', 'Weak entity', 'Strong entity', 'ID-dependet entity', 'ID-independent entity'),
(100, 1, 'In aone-to-many relationship, the entiy that is on the one side of the ralationship is called a(n)____entity.', 'Parent', 'Child', 'Instance', 'Subtype'),
(101, 1, 'Which type of entity reprents an actual occurrence of an associated generalized entity?', 'Supertype entity', 'Subtype entity', 'Archetype entity', 'Instance entity');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_extra`
--

CREATE TABLE `pregunta_extra` (
  `id` int(11) NOT NULL,
  `pregunta` text,
  `fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pregunta_extra`
--

INSERT INTO `pregunta_extra` (`id`, `pregunta`, `fecha_creacion`) VALUES
(1, 'hola?', '2018-04-15'),
(2, 'Pregunta de Prueba', '2018-04-16'),
(3, 'NUMERO 1 PRUEBA DE BONNIE BRUST', '2018-04-17'),
(4, 'sahxjsag?', '2018-04-18'),
(5, 'estas seguro', '2018-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `result_practica`
--

CREATE TABLE `result_practica` (
  `id` int(11) NOT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `result_practica`
--

INSERT INTO `result_practica` (`id`, `id_pregunta`, `id_user`, `calificacion`, `Fecha`) VALUES
(4, 1, 20160094, 10, '2018-04-16'),
(5, 1, 20160094, 8, '2018-04-16'),
(6, 3, 20160094, 10, '2018-04-17'),
(7, 5, 20160348, 5, '2018-04-18'),
(9, 1, 20160094, 5, '2018-04-18'),
(10, 1, 20160094, 5, '2018-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(11) NOT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `id_pregunta`, `id_user`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(10, 2, 20160094, 'gv', 'fcgd', 48089, 'image/png', 'etdr.PNG'),
(12, 1, 20160094, 'hhvgh', 'gvvggv', 88709, 'application/pdf', 'CURRICULUM VITAE.pdf'),
(13, 2, 20160091, 'dhbas', 'hbchjsb', 10914, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'INGLES.xlsx'),
(14, 3, 20160094, 'Resultados', 'Examen', 48089, 'image/png', 'etdr.PNG'),
(15, 5, 20160348, 'curriculum', 'wjfndbfjabgc', 50552, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'CURRICULUM VITAE.docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo_user` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usertbl`
--

INSERT INTO `usertbl` (`id`, `password`, `nombre`, `correo`, `tipo_user`) VALUES
(9, '1234', 'Bonnie', 'bonnie@utem.edu.mx', 'Maestro'),
(396, '123456', 'Giovanni Garcia Vargas', 'giovanni-garcia@utem.edu.mx', 'Maestro'),
(76543, '1', 'Juan Manuel Fernandez Alvarez', 'manuel-fernandez@utem.edu.mx', 'Maestro'),
(76544, '1', 'Alberto Daniel Garcia NuÃ±ez', 'alberto-garcia@utem.edu.mx', 'Maestro'),
(76545, '1', 'Giovanni Garcia Vargas', 'giovanni-garcia@utem.edu.mx', 'Maestro'),
(20160091, '1', 'Juan Carlos', 'a20160091@utem.edu.mx', 'Alumno'),
(20160094, '1', 'Alan Guillermo Avila Macias', 'a20160094@utem.edu.mx', 'Alumno'),
(20160348, '15932', 'Josue Ramos', 'a20160348@utem.edu.mx', 'Alumno'),
(20160400, '1', 'Carlos', 'Carlos@utem.edu.mx', 'Maestro'),
(20160403, 'holabebe', 'JordiENP', 'a20160403@utem.edu.mx', 'Alumno'),
(20160890, '1', 'Juan', 'Juan@utem.edu.mx', 'Maestro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion_materia`
--
ALTER TABLE `calificacion_materia`
  ADD PRIMARY KEY (`id_cal`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_mat` (`id_mat`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Indices de la tabla `canalizados`
--
ALTER TABLE `canalizados`
  ADD PRIMARY KEY (`id_canalizacion`),
  ADD KEY `id_maestro` (`id_maestro`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `creacion`
--
ALTER TABLE `creacion`
  ADD PRIMARY KEY (`id_creacio`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_corin`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Indices de la tabla `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_ma`);

--
-- Indices de la tabla `mat_maestros`
--
ALTER TABLE `mat_maestros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `mis_respuestas`
--
ALTER TABLE `mis_respuestas`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_corin` (`id_corin`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `pregunta_extra`
--
ALTER TABLE `pregunta_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `result_practica`
--
ALTER TABLE `result_practica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion_materia`
--
ALTER TABLE `calificacion_materia`
  MODIFY `id_cal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `canalizados`
--
ALTER TABLE `canalizados`
  MODIFY `id_canalizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `creacion`
--
ALTER TABLE `creacion`
  MODIFY `id_creacio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_corin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mat_maestros`
--
ALTER TABLE `mat_maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `mis_respuestas`
--
ALTER TABLE `mis_respuestas`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT de la tabla `pregunta_extra`
--
ALTER TABLE `pregunta_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `result_practica`
--
ALTER TABLE `result_practica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20160891;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion_materia`
--
ALTER TABLE `calificacion_materia`
  ADD CONSTRAINT `calificacion_materia_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usertbl` (`id`),
  ADD CONSTRAINT `calificacion_materia_ibfk_2` FOREIGN KEY (`id_mat`) REFERENCES `materias` (`id_ma`),
  ADD CONSTRAINT `calificacion_materia_ibfk_3` FOREIGN KEY (`id_exam`) REFERENCES `estado` (`id_corin`);

--
-- Filtros para la tabla `canalizados`
--
ALTER TABLE `canalizados`
  ADD CONSTRAINT `canalizados_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `usertbl` (`id`),
  ADD CONSTRAINT `canalizados_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `usertbl` (`id`),
  ADD CONSTRAINT `canalizados_ibfk_3` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_ma`);

--
-- Filtros para la tabla `creacion`
--
ALTER TABLE `creacion`
  ADD CONSTRAINT `creacion_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usertbl` (`id`),
  ADD CONSTRAINT `creacion_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_ma`);

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usertbl` (`id`),
  ADD CONSTRAINT `estado_ibfk_2` FOREIGN KEY (`id_exam`) REFERENCES `creacion` (`id_creacio`);

--
-- Filtros para la tabla `mat_maestros`
--
ALTER TABLE `mat_maestros`
  ADD CONSTRAINT `mat_maestros_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usertbl` (`id`),
  ADD CONSTRAINT `mat_maestros_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_ma`);

--
-- Filtros para la tabla `mis_respuestas`
--
ALTER TABLE `mis_respuestas`
  ADD CONSTRAINT `mis_respuestas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usertbl` (`id`),
  ADD CONSTRAINT `mis_respuestas_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id`),
  ADD CONSTRAINT `mis_respuestas_ibfk_3` FOREIGN KEY (`id_corin`) REFERENCES `estado` (`id_corin`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_ma`);

--
-- Filtros para la tabla `result_practica`
--
ALTER TABLE `result_practica`
  ADD CONSTRAINT `result_practica_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta_extra` (`id`),
  ADD CONSTRAINT `result_practica_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `usertbl` (`id`);

--
-- Filtros para la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD CONSTRAINT `tbl_documentos_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta_extra` (`id`),
  ADD CONSTRAINT `tbl_documentos_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `usertbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
