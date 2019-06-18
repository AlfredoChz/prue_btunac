-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2019 a las 22:23:30
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bolsa_trabajo_unac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblapplicants`
--

CREATE TABLE `tblapplicants` (
  `APPLICANTID` int(11) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `SEX` varchar(11) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(255) NOT NULL,
  `AGE` int(2) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CONTACTNO` varchar(90) NOT NULL,
  `DEGREE` text NOT NULL,
  `APPLICANTPHOTO` varchar(255) NOT NULL,
  `NATIONALID` varchar(255) NOT NULL,
  `USERID` int(11) NOT NULL,
  `ESCUELAID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblapplicants`
--

INSERT INTO `tblapplicants` (`APPLICANTID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `EMAILADDRESS`, `CONTACTNO`, `DEGREE`, `APPLICANTPHOTO`, `NATIONALID`, `USERID`, `ESCUELAID`) VALUES
(1, 'Alfredo', 'Chávez', 'Palomino', 'Av. Nicolas Dueñas', 'Masculino', 'Soltero', '1998-07-24', 'Lima', 20, 'alfredo@gmail.com', '123456789', 'Estudiante', '', '123456789', 3, 2),
(2, 'Jhan', 'Calderon', 'Mariano', 'Av. Faucet', 'Masculino', 'Soltero', '2019-06-16', '.', 21, '.', '.', '.', '.', '.', 4, 2),
(3, 'Jesus', 'Alvan', 'Huarcaya', '.', 'Masculino', 'Soltero', '2019-06-16', '.', 20, '.', '.', '.', '.', '.', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblattachmentfile`
--

CREATE TABLE `tblattachmentfile` (
  `FILEID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(90) NOT NULL,
  `FILE_LOCATION` varchar(255) NOT NULL,
  `USERAPPLICANTID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGORYID` int(11) NOT NULL,
  `CATEGORY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGORYID`, `CATEGORY`) VALUES
(1, 'Tecnología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcompany`
--

CREATE TABLE `tblcompany` (
  `COMPANYID` int(11) NOT NULL COMMENT 'CODIGO',
  `COMPANYNAME` varchar(100) NOT NULL COMMENT 'NOMBRE',
  `COMPANYADDRESS` varchar(50) NOT NULL COMMENT 'DIRECCION',
  `COMPANYCONTACT` varchar(10) NOT NULL COMMENT 'CONTACTO',
  `COMPANYRUC` varchar(11) NOT NULL COMMENT 'RUC',
  `COMPANYWEB` varchar(100) NOT NULL COMMENT 'PAGINA WEB',
  `COMPANYDESCRIPCION` varchar(100) NOT NULL COMMENT 'DESCRIPCION',
  `COMPANYEMAIL` varchar(50) NOT NULL COMMENT 'CORREO',
  `COMPANYEMAILCV` varchar(50) NOT NULL COMMENT 'CORREO CV',
  `COMPANYSTATUS` varchar(50) NOT NULL COMMENT 'ESTADO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblcompany`
--

INSERT INTO `tblcompany` (`COMPANYID`, `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACT`, `COMPANYRUC`, `COMPANYWEB`, `COMPANYDESCRIPCION`, `COMPANYEMAIL`, `COMPANYEMAILCV`, `COMPANYSTATUS`) VALUES
(1, 'Universidad Nacional del Callao', 'Av. Juan Pablo II 306, Bellavista - Callao', '4299740', '0', 'https://www.unac.edu.pe/', 'Universidad Nacional del Callao', 'otic.fiis@unac.edu.pe', 'otic.fiis@unac.edu.pe', 'Aceptada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblemployees`
--

CREATE TABLE `tblemployees` (
  `EMPLOYEEID` int(11) NOT NULL COMMENT 'CODIGO EMPLEADO',
  `FNAME` varchar(50) NOT NULL COMMENT 'NOMBRE EMPLEADO',
  `LNAME` varchar(50) NOT NULL,
  `MNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL COMMENT 'DIRECCION',
  `BIRTHDATE` date NOT NULL COMMENT 'FECHA DE NACIMIENTO',
  `BIRTHPLACE` varchar(100) NOT NULL COMMENT 'LUGAR DE NACIMIENTO',
  `AGE` int(11) NOT NULL COMMENT 'EDAD',
  `SEX` varchar(30) NOT NULL COMMENT 'SEXO',
  `CIVILSTATUS` varchar(30) NOT NULL COMMENT 'ESTADO CIVIL',
  `TELNO` varchar(50) NOT NULL COMMENT 'TELEFONO',
  `EMP_EMAILADDRESS` varchar(100) NOT NULL COMMENT 'EMAIL DEL EMPLEADO',
  `CELLNO` varchar(30) NOT NULL COMMENT 'CELULAR',
  `POSITION` varchar(50) NOT NULL COMMENT 'POSICION',
  `WORKSTATS` varchar(100) NOT NULL COMMENT 'ESTADIOS DE TRABAJO',
  `EMPPHOTO` varchar(200) NOT NULL COMMENT 'FOTO DEL EMPLEADO',
  `USERID` int(11) NOT NULL COMMENT 'USUARIO',
  `DATEHIRED` date NOT NULL COMMENT 'FECHA DE CONTRATACION',
  `COMPANYID` int(11) NOT NULL COMMENT 'CODIGO DE EMPRESA',
  `FACULTADID` int(11) NOT NULL COMMENT 'CODIGO DE FACULTAD'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblemployees`
--

INSERT INTO `tblemployees` (`EMPLOYEEID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `SEX`, `CIVILSTATUS`, `TELNO`, `EMP_EMAILADDRESS`, `CELLNO`, `POSITION`, `WORKSTATS`, `EMPPHOTO`, `USERID`, `DATEHIRED`, `COMPANYID`, `FACULTADID`) VALUES
(1, 'Administrador FIIS', 'FIIS', 'FIIS', 'FIIS', '2019-06-16', 'Callao', 2019, 'FIIS', 'FIIS', 'FIIS', 'FIIS', 'FIIS', 'FIIS', 'FIIS', '', 2, '2019-06-16', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblescuela`
--

CREATE TABLE `tblescuela` (
  `ESCUELAID` int(11) NOT NULL,
  `ESCUELANAME` varchar(255) NOT NULL,
  `FACULTADID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblescuela`
--

INSERT INTO `tblescuela` (`ESCUELAID`, `ESCUELANAME`, `FACULTADID`) VALUES
(1, 'Ingeniería Industrial', 1),
(2, 'Ingeniería de Sistemas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfacultad`
--

CREATE TABLE `tblfacultad` (
  `FACULTADID` int(11) NOT NULL,
  `FACULTADNAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblfacultad`
--

INSERT INTO `tblfacultad` (`FACULTADID`, `FACULTADNAME`) VALUES
(1, 'Facultad de Ingeniería Industrial y de Sistemas'),
(2, 'Facultad de Ingeniería Mecánica y de Energía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FEEDBACKID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbljob`
--

CREATE TABLE `tbljob` (
  `JOBID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `CATEGORYID` int(11) NOT NULL,
  `OCCUPATIONTITLE` varchar(50) NOT NULL,
  `REQ_NO_EMPLOYEES` int(11) NOT NULL,
  `SALARIES` double NOT NULL,
  `DURATION_EMPLOYEMENT` varchar(50) NOT NULL,
  `QUALIFICATION_WORKEXPERIENCE` text NOT NULL,
  `JOBDESCRIPTION` text NOT NULL,
  `PREFEREDSEX` varchar(50) NOT NULL,
  `SECTOR_VACANCY` text NOT NULL,
  `JOBSTATUS` varchar(100) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbljobregistration`
--

CREATE TABLE `tbljobregistration` (
  `REGISTRATIONID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONDATE` date NOT NULL,
  `REMARKS` varchar(255) NOT NULL DEFAULT 'Pending',
  `FILEID` int(11) NOT NULL,
  `PENDINGAPPLICATION` tinyint(1) NOT NULL DEFAULT '1',
  `HVIEW` tinyint(1) NOT NULL DEFAULT '1',
  `DATETIMEAPPROVED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltypeuser`
--

CREATE TABLE `tbltypeuser` (
  `TYPEUSERID` int(11) NOT NULL COMMENT 'CODIGO',
  `TYPEUSERNAME` varchar(50) NOT NULL COMMENT 'NOMBRE DE TIPO DE USUARIO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbltypeuser`
--

INSERT INTO `tbltypeuser` (`TYPEUSERID`, `TYPEUSERNAME`) VALUES
(1, 'Administrador'),
(2, 'Administrador por Facultad'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusers`
--

CREATE TABLE `tblusers` (
  `USERID` int(11) NOT NULL COMMENT 'CODIGO',
  `FULLNAME` varchar(50) NOT NULL COMMENT 'NOMBRE',
  `USERNAME` varchar(50) NOT NULL COMMENT 'NOMBRE DE USUARIO',
  `PASS` varchar(90) NOT NULL,
  `TYPEUSERID` int(11) NOT NULL COMMENT 'CODIGO TIPO DE USUARIO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `FULLNAME`, `USERNAME`, `PASS`, `TYPEUSERID`) VALUES
(1, 'Administrador General', 'Admin', '123456', 1),
(2, 'Administrador FIIS', 'Admin_FIIS', '123456', 2),
(3, 'Alfredo Chavez Palomino', '1525210402', 'alfredo', 3),
(4, 'Jhan Calderon Mariano', 'jhan', 'jhan', 3),
(5, 'Jesus Alvan Huarcaya', 'jesus', 'jesus', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblapplicants`
--
ALTER TABLE `tblapplicants`
  ADD PRIMARY KEY (`APPLICANTID`),
  ADD KEY `fk_escuelaid` (`ESCUELAID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indices de la tabla `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD PRIMARY KEY (`FILEID`),
  ADD KEY `fk_jobid` (`JOBID`);

--
-- Indices de la tabla `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indices de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGORYID`);

--
-- Indices de la tabla `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indices de la tabla `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`EMPLOYEEID`),
  ADD KEY `USERID` (`EMPPHOTO`),
  ADD KEY `COMPANYID` (`DATEHIRED`),
  ADD KEY `FACULTADID` (`COMPANYID`),
  ADD KEY `FACULTAD_ID` (`FACULTADID`),
  ADD KEY `COMPANY_ID` (`COMPANYID`),
  ADD KEY `USER_ID` (`USERID`),
  ADD KEY `FACULTADID_2` (`FACULTADID`);

--
-- Indices de la tabla `tblescuela`
--
ALTER TABLE `tblescuela`
  ADD PRIMARY KEY (`ESCUELAID`),
  ADD KEY `fk_facultadid` (`FACULTADID`);

--
-- Indices de la tabla `tblfacultad`
--
ALTER TABLE `tblfacultad`
  ADD PRIMARY KEY (`FACULTADID`);

--
-- Indices de la tabla `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`FEEDBACKID`);

--
-- Indices de la tabla `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`JOBID`),
  ADD KEY `COMPANYID` (`COMPANYID`),
  ADD KEY `CATEGORYID` (`CATEGORYID`);

--
-- Indices de la tabla `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD PRIMARY KEY (`REGISTRATIONID`),
  ADD KEY `fk_companyid` (`COMPANYID`),
  ADD KEY `fk_jobid2` (`JOBID`),
  ADD KEY `fk_applicantid` (`APPLICANTID`),
  ADD KEY `fk_tblattachmentfile` (`FILEID`);

--
-- Indices de la tabla `tbltypeuser`
--
ALTER TABLE `tbltypeuser`
  ADD PRIMARY KEY (`TYPEUSERID`);

--
-- Indices de la tabla `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`),
  ADD KEY `TYPEUSERID` (`TYPEUSERID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblapplicants`
--
ALTER TABLE `tblapplicants`
  MODIFY `APPLICANTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  MODIFY `FILEID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGORYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `COMPANYID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `EMPLOYEEID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO EMPLEADO', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblescuela`
--
ALTER TABLE `tblescuela`
  MODIFY `ESCUELAID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblfacultad`
--
ALTER TABLE `tblfacultad`
  MODIFY `FACULTADID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `FEEDBACKID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbljob`
--
ALTER TABLE `tbljob`
  MODIFY `JOBID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  MODIFY `REGISTRATIONID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbltypeuser`
--
ALTER TABLE `tbltypeuser`
  MODIFY `TYPEUSERID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO', AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblapplicants`
--
ALTER TABLE `tblapplicants`
  ADD CONSTRAINT `fk_escuelaid` FOREIGN KEY (`ESCUELAID`) REFERENCES `tblescuela` (`ESCUELAID`),
  ADD CONSTRAINT `tblapplicants_ibfk_1` FOREIGN KEY (`USERID`) REFERENCES `tblusers` (`USERID`);

--
-- Filtros para la tabla `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD CONSTRAINT `fk_jobid` FOREIGN KEY (`JOBID`) REFERENCES `tbljob` (`JOBID`);

--
-- Filtros para la tabla `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD CONSTRAINT `tblemployees_ibfk_1` FOREIGN KEY (`COMPANYID`) REFERENCES `tblcompany` (`COMPANYID`),
  ADD CONSTRAINT `tblemployees_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `tblusers` (`USERID`),
  ADD CONSTRAINT `tblemployees_ibfk_3` FOREIGN KEY (`FACULTADID`) REFERENCES `tblfacultad` (`FACULTADID`);

--
-- Filtros para la tabla `tblescuela`
--
ALTER TABLE `tblescuela`
  ADD CONSTRAINT `fk_facultadid` FOREIGN KEY (`FACULTADID`) REFERENCES `tblfacultad` (`FACULTADID`);

--
-- Filtros para la tabla `tbljob`
--
ALTER TABLE `tbljob`
  ADD CONSTRAINT `tbljob_ibfk_1` FOREIGN KEY (`COMPANYID`) REFERENCES `tblcategory` (`CATEGORYID`),
  ADD CONSTRAINT `tbljob_ibfk_2` FOREIGN KEY (`COMPANYID`) REFERENCES `tblcompany` (`COMPANYID`);

--
-- Filtros para la tabla `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD CONSTRAINT `fk_applicantid` FOREIGN KEY (`APPLICANTID`) REFERENCES `tblapplicants` (`APPLICANTID`),
  ADD CONSTRAINT `fk_companyid` FOREIGN KEY (`COMPANYID`) REFERENCES `tblcompany` (`COMPANYID`),
  ADD CONSTRAINT `fk_jobid2` FOREIGN KEY (`JOBID`) REFERENCES `tbljob` (`JOBID`),
  ADD CONSTRAINT `fk_tblattachmentfile` FOREIGN KEY (`FILEID`) REFERENCES `tblattachmentfile` (`FILEID`);

--
-- Filtros para la tabla `tblusers`
--
ALTER TABLE `tblusers`
  ADD CONSTRAINT `tblusers_ibfk_1` FOREIGN KEY (`TYPEUSERID`) REFERENCES `tbltypeuser` (`TYPEUSERID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
