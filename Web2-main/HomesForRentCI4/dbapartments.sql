-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2021 a las 22:28:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbapartments`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblowneraddapt`
--

CREATE TABLE `tblowneraddapt` (
  `id` int(12) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rooms` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `pic1` text DEFAULT NULL,
  `pic2` text DEFAULT NULL,
  `pic3` text DEFAULT NULL,
  `pic4` text DEFAULT NULL,
  `pic5` text DEFAULT NULL,
  `review` varchar(200) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblowneraddapt`
--

INSERT INTO `tblowneraddapt` (`id`, `country`, `city`, `address`, `location`, `rooms`, `price`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `review`, `email`) VALUES
(41, 'USA', 'San Francisco', '3988  Meadow Lane', 'E54W23', 3, 100, 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307557_af395df3d9a412d0600f.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307557_e62d828f88208d7e7c34.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307557_a563576e7f7b6f551dcf.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307557_1ff8eb6edb4d3094801b.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307557_75a60670b3661df61f1f.jpg', 'This is the best place in San Francisco, CA. Yes!', 'luisa@gmail.com'),
(42, 'Canada', 'Toronto', '500 Kingston Rd Toronto ON M4L 1V3', 'E45W32', 3, 45, 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067395_03538647bf332e691127.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067395_4a0daf6af50e4344ab24.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067395_6c0e90a3e2de5e8ecc74.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067395_1e58c77e29c249f1bcb1.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067395_7e2605e35f1056d8f292.jpg', 'Welcome to Toronto, Canada! this is an awesome place.', 'petv1981@gmail.com'),
(43, 'Finland', 'Helsinki', 'Massbyntie 20', '60.231332349131314, 25.069104102751332', 2, 65, 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067901_2029a254935f883dc227.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067901_21cff7c3974a82a59a71.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067901_3df11cbe4f0b4aeb4997.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067901_7bf58eac84eb3b6f2949.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622067901_01229f443a78d042d875.jpg', 'This is your home in Helsinki.', 'petv1981@gmail.com'),
(44, 'USA', 'Denver', '3138  Sampson Street', 'E54W34', 2, 100, 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307821_2d2fc92ada52348babed.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307821_a684e8873e18a80ad880.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307821_67bfd9a3c0fe31c6f164.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307821_07ba4f147e55d9c81ee0.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307821_2f8233f5b44d4f599fce.jpg', 'This is a nice place in USA!', 'paco@gmail.com'),
(45, 'Ireland', 'Dublin', '38 Bridge st Cavan', 'E43W67', 3, 34, 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622308021_85953a690d59459afd90.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622308021_2fb0bf86b2dacc79d33a.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622308021_b8796e1dfc4e67967f88.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622308021_5f51c0b5b1a3028c9120.jpg', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622308021_faf28b392327a7da1b67.jpg', 'nice place!', 'luisa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprofiles`
--

CREATE TABLE `tblprofiles` (
  `id` int(11) NOT NULL,
  `myname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `personalintro` varchar(200) NOT NULL,
  `picofme` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblprofiles`
--

INSERT INTO `tblprofiles` (`id`, `myname`, `country`, `city`, `personalintro`, `picofme`, `email`) VALUES
(11, 'Luisa Maria', 'UK', 'Leicester', 'I am a nice lady!', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622223642_83f74768aafc9b4f6f70.jpg', 'luisa@gmail.com'),
(13, 'Paul Henry', 'USA', 'New York City', 'I am a successful man', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622256129_8fad6f120d980db9d0ad.jpg', 'petv1981@gmail.com'),
(14, 'lola Sanchez', 'Spain', 'Madrid', 'Yo soy una mujer genial!', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622066857_ad1205e48ce4f8520c04.jpg', 'lola@gmail.com'),
(15, 'Paco Perez', 'Spain', 'Madrid', 'Yo soy Paco!', 'http://localhost:8080/HomesForRentCI4/public/uploads/images/1622307751_b2a68c46c8a04c4562a4.jpg', 'paco@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblregister`
--

CREATE TABLE `tblregister` (
  `iduser` int(12) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblregister`
--

INSERT INTO `tblregister` (`iduser`, `nickname`, `email`, `password`, `role`) VALUES
(95, 'luisa84', 'luisa@gmail.com', '123', 'HOST'),
(97, 'petv', 'petv1981@gmail.com', '123', 'HOST'),
(98, 'lola43', 'lola@gmail.com', '123', 'GUEST'),
(99, 'paco81', 'paco@gmail.com', '123', 'HOST');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblowneraddapt`
--
ALTER TABLE `tblowneraddapt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblprofiles`
--
ALTER TABLE `tblprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblowneraddapt`
--
ALTER TABLE `tblowneraddapt`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tblprofiles`
--
ALTER TABLE `tblprofiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `iduser` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
