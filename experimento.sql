-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2023 a las 01:53:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacionestecnicosequipos`
--

CREATE TABLE `asignacionestecnicosequipos`
(
    `IDAsignacion`    int(11) NOT NULL,
    `IDTecnico`       int(11) DEFAULT NULL,
    `IDEquipo`        int(11) DEFAULT NULL,
    `FechaAsignacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes`
(
    `IDCliente`         int(11) NOT NULL,
    `CI`                int(20) NOT NULL,
    `Apellido`          varchar(50) NOT NULL,
    `Nombre`            varchar(50) NOT NULL,
    `Telefono`          varchar(20) NOT NULL,
    `Email`             varchar(100) DEFAULT NULL,
    `FechaNacimiento`   date         DEFAULT NULL,
    `FechaRegistro`     datetime     DEFAULT current_timestamp(),
    `FechaModificacion` timestamp NULL DEFAULT current_timestamp () ON UPDATE current_timestamp (),
    `Estado`            int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IDCliente`, `CI`, `Apellido`, `Nombre`, `Telefono`, `Email`, `FechaNacimiento`,
                        `FechaRegistro`, `FechaModificacion`, `Estado`)
VALUES (23, 1012345678, 'García', 'Maria', '61234567', 'maria.garcia@gmail.com', '1990-01-15', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (24, 1119876543, 'Rodríguez', 'Jose', '62345678', 'jose.rodriguez@gmail.com', '1985-03-20',
        '2023-10-03 08:09:32', '2023-10-03 14:32:55', 1),
       (25, 1208765432, 'López', 'Carlos', '64567890', 'carlos.lopez@gmail.com', '1980-07-10', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (26, 1001234567, 'González', 'Laura', '61239876', 'laura.gonzalez@gmail.com', '1978-11-25',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (27, 1212345678, 'Pérez', 'Daniel', '67451234', 'daniel.perez@gmail.com', '1995-06-05', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (28, 1112345670, 'Martínez', 'Isabel', '67893456', 'isabel.martinez@gmail.com', '1982-09-12',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (29, 1209876543, 'Sánchez', 'Luis', '71234567', 'luis.sanchez@gmail.com', '1977-04-30', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (30, 1219876543, 'Fernández', 'Ana', '72345678', 'ana.fernandez@gmail.com', '1992-02-18', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (31, 1010987654, 'Torres', 'Miguel', '74567890', 'miguel.torres@gmail.com', '1988-08-15', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (32, 1110123456, 'Ruiz', 'Carmen', '71239876', 'carmen.ruiz@gmail.com', '1979-12-08', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (33, 1201234567, 'Jiménez', 'Alejandro', '77451234', 'alejandro.jimenez@gmail.com', '1984-05-03',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (34, 1012765432, 'Morales', 'Elena', '77893456', 'elena.morales@gmail.com', '1993-10-22', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (35, 1210123456, 'Romero', 'Juan', '61234589', 'juan.romero@gmail.com', '1981-03-28', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (36, 1112765432, 'Vargas', 'Patricia', '64561237', 'patricia.vargas@gmail.com', '1989-07-17',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (37, 1019876543, 'Sánchez', 'Antonio', '67894567', 'antonio.sanchez@gmail.com', '1976-09-05',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (38, 1212765432, 'Martínez', 'Paula', '71236789', 'paula.martinez@gmail.com', '1998-01-10',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (39, 1200987654, 'Torres', 'Francisco', '77890123', 'francisco.torres@gmail.com', '1974-11-14',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (40, 1110123456, 'Pérez', 'Raquel', '61234567', 'raquel.perez@gmail.com', '1983-06-30', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (41, 1012345678, 'Rodríguez', 'Pedro', '62345678', 'pedro.rodriguez@gmail.com', '1991-04-12',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (42, 1209876543, 'Sánchez', 'Marta', '64567890', 'marta.sanchez@gmail.com', '1975-09-24', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (43, 1210987654, 'Martínez', 'Roberto', '61239876', 'roberto.martinez@gmail.com', '1987-02-08',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (44, 1101234567, 'Pérez', 'Susana', '67451234', 'susana.perez@gmail.com', '1997-08-03', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (45, 1200123456, 'Sánchez', 'Javier', '67893456', 'javier.sanchez@gmail.com', '1986-12-19',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (46, 1112345678, 'García', 'Beatriz', '71234567', 'beatriz.garcia@gmail.com', '1973-10-01',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (47, 1200123456, 'Pérez', 'David', '72345678', 'david.perez@gmail.com', '1990-05-14', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (48, 1012345678, 'Martínez', 'Monica', '74567890', 'monica.martinez@gmail.com', '1984-07-27',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (49, 1212765432, 'Rodríguez', 'Manuel', '71234589', 'manuel.rodriguez@gmail.com', '1982-01-03',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (50, 1110123456, 'Sánchez', 'Sonia', '64561237', 'sonia.sanchez@gmail.com', '1995-11-08', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (51, 1012765432, 'Ruiz', 'Alberto', '67894567', 'alberto.ruiz@gmail.com', '1978-04-17', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (52, 1212345678, 'González', 'Silvia', '71236789', 'silvia.gonzalez@gmail.com', '1989-09-21',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (53, 1202345678, 'Pérez', 'Guillermo', '77890123', 'guillermo.perez@gmail.com', '1987-03-04',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (54, 1112345670, 'Torres', 'Rosa', '61234567', 'rosa.torres@gmail.com', '1996-12-12', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (55, 1209876543, 'Sánchez', 'Eduardo', '62345678', 'eduardo.sanchez@gmail.com', '1980-08-29',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (56, 1219876543, 'Martínez', 'Mercedes', '64567890', 'mercedes.martinez@gmail.com', '1983-02-02',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (57, 1010987654, 'López', 'Sergio', '61239876', 'sergio.lopez@gmail.com', '1997-05-26', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (58, 1110123456, 'García', 'Natalia', '67451234', 'natalia.garcia@gmail.com', '1979-09-10',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (59, 1201234567, 'Rodríguez', 'Diego', '67893456', 'diego.rodriguez@gmail.com', '1992-03-05',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (60, 1012765432, 'Sánchez', 'Andrea', '71234567', 'andrea.sanchez@gmail.com', '1986-07-18',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (61, 1210123456, 'Fernández', 'Jorge', '72345678', 'jorge.fernandez@gmail.com', '1977-01-21',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (62, 1112765432, 'Pérez', 'Victoria', '74567890', 'victoria.perez@gmail.com', '1995-10-28',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (63, 1019876543, 'Martínez', 'Oscar', '61234589', 'oscar.martinez@gmail.com', '1989-12-07',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (64, 1212765432, 'López', 'Lorena', '64561237', 'lorena.lopez@gmail.com', '1984-04-13', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (65, 1200987654, 'González', 'Raul', '67894567', 'raul.gonzalez@gmail.com', '1978-08-02', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (66, 1110123456, 'Pérez', 'Elena', '71236789', 'elena.perez@gmail.com', '1993-06-09', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (67, 1012345678, 'Torres', 'Gabriel', '77890123', 'gabriel.torres@gmail.com', '1981-11-16',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (68, 1209876543, 'Sánchez', 'Carmen', '61234567', 'carmen.sanchez@gmail.com', '1987-09-23',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (69, 1210987654, 'Martínez', 'Alvaro', '62345678', 'alvaro.martinez@gmail.com', '1990-02-27',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (70, 1101234567, 'Ruiz', 'Marina', '64567890', 'marina.ruiz@gmail.com', '1985-10-04', '2023-10-03 08:09:32',
        '2023-10-03 12:42:39', 1),
       (71, 1200123456, 'García', 'Fernando', '61239876', 'fernando.garcia@gmail.com', '1976-12-30',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1),
       (72, 1112345678, 'Sánchez', 'Miriam', '67451234', 'miriam.sanchez@gmail.com', '1998-04-19',
        '2023-10-03 08:09:32', '2023-10-03 12:42:39', 1);

--
-- Disparadores `clientes`
--
DELIMITER
$$
CREATE TRIGGER `trg_actualizar_fecha_modificacion`
    BEFORE UPDATE
    ON `clientes`
    FOR EACH ROW
BEGIN
    SET NEW.FechaModificacion = NOW();
END $$
DELIMITER;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepagosrepuestos`
--

CREATE TABLE `detallepagosrepuestos`
(
    `CantidadRepuestos` int(11) DEFAULT NULL,
    `DetalleRepuesto`   text DEFAULT NULL,
    `IDRepuesto`        int(11) NOT NULL,
    `IDPagoRepuesto`    int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepagosservicios`
--

CREATE TABLE `detallepagosservicios`
(
    `IDPagoServicio`  int(11) NOT NULL,
    `IDServicio`      int(11) NOT NULL,
    `CostoServicio`   decimal(10, 2) DEFAULT NULL,
    `DetalleServicio` text           DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos`
(
    `IDEquipo`          int(11) NOT NULL,
    `NombreEquipo`      varchar(50) DEFAULT NULL,
    `DescripcionEquipo` text        DEFAULT NULL,
    `Estado`            int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresoequipos`
--

CREATE TABLE `ingresoequipos`
(
    `IDIngreso`    int(11) NOT NULL,
    `Foto`         varchar(100) DEFAULT NULL,
    `Descripcion`  text         DEFAULT NULL,
    `Garantia`     varchar(50)  DEFAULT NULL,
    `ModeloEquipo` varchar(50)  DEFAULT NULL,
    `FechaIngreso` datetime     DEFAULT NULL,
    `FechaSalida`  datetime     DEFAULT NULL,
    `Estado`       varchar(20)  DEFAULT NULL,
    `EstadoEquipo` text         DEFAULT NULL,
    `IDCliente`    int(11) DEFAULT NULL,
    `IDUsuario`    int(11) DEFAULT NULL,
    `IDMarca`      int(11) DEFAULT NULL,
    `IDTipoEquipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ingresoequipos`
--

INSERT INTO `ingresoequipos` (`IDIngreso`, `Foto`, `Descripcion`, `Garantia`, `ModeloEquipo`, `FechaIngreso`,
                              `FechaSalida`, `Estado`, `EstadoEquipo`, `IDCliente`, `IDUsuario`, `IDMarca`,
                              `IDTipoEquipo`)
VALUES (1, 'imagen1.jpg', 'Impresora con problemas de impresión', '6 meses', 'HP LaserJet Pro', '2023-09-02 10:00:00',
        '2023-09-05 10:00:00', 'En revisión', 'Funciona pero con problemas', 23, 6, 15, 1),
       (2, 'imagen2.jpg', 'Pantalla parpadea al encender', '3 meses', 'Asus ROG Swift', '2023-09-02 14:30:00',
        '2023-09-04 14:30:00', 'En revisión', 'Pantalla parpadea', 24, 6, 5, 2),
       (3, 'imagen3.jpg', 'No enciende, posible problema de batería', '12 meses', 'Apple MacBook Pro',
        '2023-09-02 09:15:00', '2023-09-03 09:15:00', 'En revisión', 'No enciende', 25, 6, 4, 4),
       (4, 'imagen4.jpg', 'Problema con la conexión Wi-Fi', '24 meses', 'Dell Inspiron', '2023-09-03 16:45:00',
        '2023-09-05 16:45:00', 'En revisión', 'Problema de Wi-Fi', 26, 6, 9, 4),
       (5, 'imagen5.jpg', 'Impresora sin papel en la bandeja', '6 meses', 'Epson EcoTank', '2023-09-06 11:20:00',
        '2023-09-09 11:20:00', 'En revisión', 'Sin papel', 27, 6, 11, 1),
       (6, 'imagen6.jpg', 'Pantalla rota después de caída', '6 meses', 'AOC CQ32G1', '2023-09-06 08:50:00',
        '2023-09-10 08:50:00', 'En revisión', 'Pantalla rota', 28, 6, 3, 2),
       (7, 'imagen7.jpg', 'Problema de impresión en color', '18 meses', 'Canon PIXMA', '2023-09-09 13:10:00',
        '2023-10-11 13:10:00', 'En revisión', 'Impresión defectuosa', 29, 6, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas`
(
    `IDMarca` int(11) NOT NULL,
    `Marca`   varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`IDMarca`, `Marca`)
VALUES (1, 'Acer'),
       (2, 'Alienware'),
       (3, 'AOC'),
       (4, 'Apple'),
       (5, 'Asus'),
       (6, 'BenQ'),
       (7, 'Brother'),
       (8, 'Canon'),
       (9, 'Dell'),
       (10, 'EIZO'),
       (11, 'Epson'),
       (12, 'Fujitsu'),
       (13, 'Gestetner'),
       (14, 'Gigabyte'),
       (15, 'HP'),
       (16, 'Huawei'),
       (17, 'Kodak'),
       (18, 'Konica Minolta'),
       (19, 'Kyocera'),
       (20, 'LG'),
       (21, 'Lenovo'),
       (22, 'Lexmark'),
       (23, 'MSI'),
       (24, 'Microsoft'),
       (25, 'NEC'),
       (26, 'OKI'),
       (27, 'Océ'),
       (28, 'Panasonic'),
       (29, 'Philips'),
       (30, 'Razer'),
       (31, 'Ricoh'),
       (32, 'Samsung'),
       (33, 'Sharp'),
       (34, 'Sony'),
       (35, 'Toshiba'),
       (36, 'ViewSonic'),
       (37, 'Xerox'),
       (38, 'Zebra Technologies');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodospago`
--

CREATE TABLE `metodospago`
(
    `IDMetodoPago` int(11) NOT NULL,
    `NombreMetodo` varchar(50) DEFAULT NULL,
    `Estado`       int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosrepuestos`
--

CREATE TABLE `pagosrepuestos`
(
    `IDPagoRepuesto` int(11) NOT NULL,
    `FechaVenta`     date           DEFAULT NULL,
    `TotalMonto`     decimal(10, 2) DEFAULT NULL,
    `IDRazonSocial`  int(11) DEFAULT NULL,
    `IDIngreso`      int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosservicios`
--

CREATE TABLE `pagosservicios`
(
    `IDPagoServicio` int(11) NOT NULL,
    `FechaRegistro`  datetime DEFAULT NULL,
    `TotalPago`      int(11) DEFAULT NULL,
    `IDIngreso`      int(11) DEFAULT NULL,
    `IDRazonSocial`  int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razonessociales`
--

CREATE TABLE `razonessociales`
(
    `IDRazonSocial` int(11) NOT NULL,
    `DetalleRazon`  varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos`
(
    `IDRepuesto`   int(11) NOT NULL,
    `Descripcion`  varchar(100)   DEFAULT NULL,
    `Foto`         varchar(100)   DEFAULT NULL,
    `Cantidad`     int(5) DEFAULT NULL,
    `Precio`       decimal(10, 2) DEFAULT NULL,
    `FechaIngreso` datetime       DEFAULT NULL,
    `Estado`       int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`IDRepuesto`, `Descripcion`, `Foto`, `Cantidad`, `Precio`, `FechaIngreso`, `Estado`)
VALUES (17, 'Memoria RAM DDR4 8GB', '', 25, 349.00, '2023-09-27 09:30:00', 1),
       (18, 'Disco Duro SSD 512GB', '', 15, 627.00, '2023-09-26 14:45:00', 1),
       (19, 'Tarjeta de Video NVIDIA GTX 1660', '', 10, 2091.00, '2023-09-25 11:15:00', 1),
       (20, 'Fuente de Poder 600W', '', 20, 345.00, '2023-09-24 17:20:00', 1),
       (21, 'Teclado USB Logitech', '', 30, 139.00, '2023-09-23 10:10:00', 1),
       (22, 'Mouse Óptico Inalámbrico', '', 40, 91.00, '2023-09-22 13:55:00', 1),
       (23, 'Monitor LED 24 pulgadas', '', 12, 1045.00, '2023-09-21 16:40:00', 1),
       (24, 'Impresora Multifuncional HP', '', 8, 621.00, '2023-09-20 09:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios`
(
    `IDServicio`     int(11) NOT NULL,
    `NombreServicio` varchar(50)    DEFAULT NULL,
    `PrecioServicio` decimal(10, 2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos`
(
    `IDTecnico`       int(11) NOT NULL,
    `NombreTecnico`   varchar(50)  DEFAULT NULL,
    `ApellidoTecnico` varchar(50)  DEFAULT NULL,
    `Especialidad`    varchar(100) DEFAULT NULL,
    `Estado`          int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets`
(
    `IDTicket`            int(11) NOT NULL,
    `IDCliente`           int(11) DEFAULT NULL,
    `IDEquipo`            int(11) DEFAULT NULL,
    `FechaInicio`         date           DEFAULT NULL,
    `FechaFin`            date           DEFAULT NULL,
    `Estado`              varchar(20)    DEFAULT NULL,
    `DescripcionProblema` text           DEFAULT NULL,
    `DescripcionSolucion` text           DEFAULT NULL,
    `MontoTotal`          decimal(10, 2) DEFAULT NULL,
    `IDMetodoPago`        int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoequipo`
--

CREATE TABLE `tipoequipo`
(
    `IDTipoEquipo` int(11) NOT NULL,
    `TipoEquipo`   varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipoequipo`
--

INSERT INTO `tipoequipo` (`IDTipoEquipo`, `TipoEquipo`)
VALUES (1, 'Impresora'),
       (2, 'Monitor'),
       (3, 'PC'),
       (4, 'Laptop'),
       (5, 'Router'),
       (6, 'Modem');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios`
(
    `IDUsuario`     int(11) NOT NULL,
    `Usuario`       varchar(100)       DEFAULT NULL,
    `Password`      varchar(200)       DEFAULT NULL,
    `Nombre`        varchar(100)       DEFAULT NULL,
    `Apellido`      varchar(100)       DEFAULT NULL,
    `Perfil`        varchar(50)        DEFAULT NULL,
    `Especialidad`  varchar(100)       DEFAULT NULL,
    `Foto`          varchar(100)       DEFAULT NULL,
    `Telefono`      varchar(20)        DEFAULT NULL,
    `UltimoLogin`   datetime  NOT NULL,
    `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp (),
    `Estado`        int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUsuario`, `Usuario`, `Password`, `Nombre`, `Apellido`, `Perfil`, `Especialidad`, `Foto`,
                        `Telefono`, `UltimoLogin`, `FechaRegistro`, `Estado`)
VALUES (1, 'Ana', '$2a$07$asxx54ahjppf45sd87a5auDYEQn9FSFgFKqtulxg4A1kGWe2vSM0O', 'Lucia', 'Quiroga', 'Administrador',
        NULL, 'vistas/img/usuarios/Ana/260.png', '66567890', '2023-10-03 00:40:59', '2023-10-03 04:40:59', 1),
       (4, 'andres', '$2a$07$asxx54ahjppf45sd87a5auG6wzcvHQX0OYqZGMhIPic7EbdRk/KIC', 'Andres Paulo', 'Mamani Alarcon',
        'Administrador', NULL, '', '+591 77027096', '2023-10-03 00:53:45', '2023-10-03 04:53:45', 1),
       (5, 'Rosa', '$2a$07$asxx54ahjppf45sd87a5auNre7qyQLwTGRf6Xb.C4cQfz84xt4mSO', 'Rosa', 'Rodríguez García',
        'Secretaria', NULL, '', '+591 7142056893', '0000-00-00 00:00:00', '2023-10-03 11:36:28', 1),
       (6, 'Juan', '$2a$07$asxx54ahjppf45sd87a5auqq2BXY7BcuKOwAp3czmq4.KiMSxirnS', 'Juan', 'Pérez García', 'Técnico',
        'Reparación de impresoras láser', '', '+591 6123456789', '0000-00-00 00:00:00', '2023-10-03 11:36:28', 1),
       (7, 'Alvarez', '$2a$07$asxx54ahjppf45sd87a5auQHQGC6bKj9Og7GH7B08wIxbKwZM0Yd6', 'Andres', 'Cruz Alvares',
        'Técnico', 'Reparación de computadoras de escritorio', '', '+591 7165982340', '0000-00-00 00:00:00',
        '2023-10-03 11:36:28', 1),
       (8, 'Laura', '$2a$07$asxx54ahjppf45sd87a5aub2uCi.fH9Zxf1SNptKhXvAvdnfoVZXm', 'Laura González', 'Pérez',
        'Técnico', 'Recuperación de datos y copias de seguridad', '', '+591  7983456120', '0000-00-00 00:00:00',
        '2023-10-03 11:36:29', 1),
       (9, 'Daniel', '$2a$07$asxx54ahjppf45sd87a5au7SjbBHH2Vws.Pr2o14nStlEsQvaIaCq', 'Daniel', 'Torres', 'Técnico',
        'Reparación de laptops y notebooks', '', '+591 7142056893', '0000-00-00 00:00:00', '2023-10-03 11:37:27', 0),
       (10, 'Marta', '$2a$07$asxx54ahjppf45sd87a5aunf0dlWgZNh5s.t5nk748vzcYuxupQMq', 'Marta', 'Díaz Herrera', 'Técnico',
        'Instalación y configuración de sistemas operativos', '', '+591 6589743120', '0000-00-00 00:00:00',
        '2023-10-03 11:40:08', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacionestecnicosequipos`
--
ALTER TABLE `asignacionestecnicosequipos`
    ADD PRIMARY KEY (`IDAsignacion`),
  ADD KEY `IDTecnico` (`IDTecnico`),
  ADD KEY `IDEquipo` (`IDEquipo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
    ADD PRIMARY KEY (`IDCliente`);

--
-- Indices de la tabla `detallepagosrepuestos`
--
ALTER TABLE `detallepagosrepuestos`
    ADD PRIMARY KEY (`IDRepuesto`, `IDPagoRepuesto`),
  ADD KEY `IDPagoRepuesto` (`IDPagoRepuesto`);

--
-- Indices de la tabla `detallepagosservicios`
--
ALTER TABLE `detallepagosservicios`
    ADD PRIMARY KEY (`IDServicio`, `IDPagoServicio`),
  ADD KEY `IDPagoServicio` (`IDPagoServicio`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
    ADD PRIMARY KEY (`IDEquipo`);

--
-- Indices de la tabla `ingresoequipos`
--
ALTER TABLE `ingresoequipos`
    ADD PRIMARY KEY (`IDIngreso`),
  ADD KEY `IDCliente` (`IDCliente`),
  ADD KEY `IDUsuario` (`IDUsuario`),
  ADD KEY `IDMarca` (`IDMarca`),
  ADD KEY `IDTipoEquipo` (`IDTipoEquipo`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
    ADD PRIMARY KEY (`IDMarca`);

--
-- Indices de la tabla `metodospago`
--
ALTER TABLE `metodospago`
    ADD PRIMARY KEY (`IDMetodoPago`);

--
-- Indices de la tabla `pagosrepuestos`
--
ALTER TABLE `pagosrepuestos`
    ADD PRIMARY KEY (`IDPagoRepuesto`),
  ADD KEY `IDRazonSocial` (`IDRazonSocial`),
  ADD KEY `IDIngreso` (`IDIngreso`);

--
-- Indices de la tabla `pagosservicios`
--
ALTER TABLE `pagosservicios`
    ADD PRIMARY KEY (`IDPagoServicio`),
  ADD KEY `IDIngreso` (`IDIngreso`),
  ADD KEY `IDRazonSocial` (`IDRazonSocial`);

--
-- Indices de la tabla `razonessociales`
--
ALTER TABLE `razonessociales`
    ADD PRIMARY KEY (`IDRazonSocial`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
    ADD PRIMARY KEY (`IDRepuesto`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
    ADD PRIMARY KEY (`IDServicio`);

--
-- Indices de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
    ADD PRIMARY KEY (`IDTecnico`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
    ADD PRIMARY KEY (`IDTicket`),
  ADD KEY `IDCliente` (`IDCliente`),
  ADD KEY `IDEquipo` (`IDEquipo`),
  ADD KEY `IDMetodoPago` (`IDMetodoPago`);

--
-- Indices de la tabla `tipoequipo`
--
ALTER TABLE `tipoequipo`
    ADD PRIMARY KEY (`IDTipoEquipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
    ADD PRIMARY KEY (`IDUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacionestecnicosequipos`
--
ALTER TABLE `asignacionestecnicosequipos`
    MODIFY `IDAsignacion` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
    MODIFY `IDCliente` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
    MODIFY `IDEquipo` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingresoequipos`
--
ALTER TABLE `ingresoequipos`
    MODIFY `IDIngreso` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
    MODIFY `IDMarca` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `metodospago`
--
ALTER TABLE `metodospago`
    MODIFY `IDMetodoPago` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagosrepuestos`
--
ALTER TABLE `pagosrepuestos`
    MODIFY `IDPagoRepuesto` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagosservicios`
--
ALTER TABLE `pagosservicios`
    MODIFY `IDPagoServicio` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `razonessociales`
--
ALTER TABLE `razonessociales`
    MODIFY `IDRazonSocial` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
    MODIFY `IDRepuesto` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
    MODIFY `IDServicio` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
    MODIFY `IDTecnico` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
    MODIFY `IDTicket` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoequipo`
--
ALTER TABLE `tipoequipo`
    MODIFY `IDTipoEquipo` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
    MODIFY `IDUsuario` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacionestecnicosequipos`
--
ALTER TABLE `asignacionestecnicosequipos`
    ADD CONSTRAINT `asignacionestecnicosequipos_ibfk_1` FOREIGN KEY (`IDTecnico`) REFERENCES `tecnicos` (`IDTecnico`),
  ADD CONSTRAINT `asignacionestecnicosequipos_ibfk_2` FOREIGN KEY (`IDEquipo`) REFERENCES `equipos` (`IDEquipo`);

--
-- Filtros para la tabla `detallepagosrepuestos`
--
ALTER TABLE `detallepagosrepuestos`
    ADD CONSTRAINT `detallepagosrepuestos_ibfk_1` FOREIGN KEY (`IDRepuesto`) REFERENCES `repuestos` (`IDRepuesto`),
  ADD CONSTRAINT `detallepagosrepuestos_ibfk_2` FOREIGN KEY (`IDPagoRepuesto`) REFERENCES `pagosrepuestos` (`IDPagoRepuesto`);

--
-- Filtros para la tabla `detallepagosservicios`
--
ALTER TABLE `detallepagosservicios`
    ADD CONSTRAINT `detallepagosservicios_ibfk_1` FOREIGN KEY (`IDPagoServicio`) REFERENCES `pagosservicios` (`IDPagoServicio`),
  ADD CONSTRAINT `detallepagosservicios_ibfk_2` FOREIGN KEY (`IDServicio`) REFERENCES `servicios` (`IDServicio`);

--
-- Filtros para la tabla `ingresoequipos`
--
ALTER TABLE `ingresoequipos`
    ADD CONSTRAINT `ingresoequipos_ibfk_1` FOREIGN KEY (`IDCliente`) REFERENCES `clientes` (`IDCliente`),
  ADD CONSTRAINT `ingresoequipos_ibfk_2` FOREIGN KEY (`IDUsuario`) REFERENCES `usuarios` (`IDUsuario`),
  ADD CONSTRAINT `ingresoequipos_ibfk_3` FOREIGN KEY (`IDMarca`) REFERENCES `marcas` (`IDMarca`),
  ADD CONSTRAINT `ingresoequipos_ibfk_4` FOREIGN KEY (`IDTipoEquipo`) REFERENCES `tipoequipo` (`IDTipoEquipo`);

--
-- Filtros para la tabla `pagosrepuestos`
--
ALTER TABLE `pagosrepuestos`
    ADD CONSTRAINT `pagosrepuestos_ibfk_1` FOREIGN KEY (`IDRazonSocial`) REFERENCES `razonessociales` (`IDRazonSocial`),
  ADD CONSTRAINT `pagosrepuestos_ibfk_2` FOREIGN KEY (`IDIngreso`) REFERENCES `ingresoequipos` (`IDIngreso`);

--
-- Filtros para la tabla `pagosservicios`
--
ALTER TABLE `pagosservicios`
    ADD CONSTRAINT `pagosservicios_ibfk_1` FOREIGN KEY (`IDIngreso`) REFERENCES `ingresoequipos` (`IDIngreso`),
  ADD CONSTRAINT `pagosservicios_ibfk_2` FOREIGN KEY (`IDRazonSocial`) REFERENCES `razonessociales` (`IDRazonSocial`);

--
-- Filtros para la tabla `tickets`
--
ALTER TABLE `tickets`
    ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`IDCliente`) REFERENCES `clientes` (`IDCliente`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`IDEquipo`) REFERENCES `equipos` (`IDEquipo`),
  ADD CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`IDMetodoPago`) REFERENCES `metodospago` (`IDMetodoPago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
