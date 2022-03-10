--
-- ESTRUCUTRA DE DATOS DE MARKETPLACE
--
-- Versión 0.0.1
--
-- Autor: Félix León
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `marketplace`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_registro_usuarios`
--

CREATE TABLE `pre_registro_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `tlf` text NOT NULL,
  `correo` text NOT NULL,
  `key_confirm` text NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `fecha_status` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estructura de tabla para la tabla `usuarios_confirmados`
--

CREATE TABLE `usuarios_confirmados` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `tlf` text COLLATE utf8_bin NOT NULL,
  `correo` text COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `ciudad` text COLLATE utf8_bin NOT NULL,
  `estado` text COLLATE utf8_bin NOT NULL,
  `pais` text COLLATE utf8_bin NOT NULL,
  `dni` int(11) NOT NULL DEFAULT 0,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `cuenta_verificada` int(11) NOT NULL DEFAULT 0,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Estructura de tabla para la tabla `market_producto_general`
--

CREATE TABLE `market_producto_general` (
  `id` int(11) NOT NULL,
  `codigo` varchar(12) NOT NULL,
  `name` text NOT NULL,
  `cat` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(11) NOT NULL,
  `antes` int(11) NOT NULL,
  `nuevo_usado` text NOT NULL,
  `marca` varchar(64) NOT NULL,
  `modelo` varchar(64) NOT NULL,
  `color` varchar(64) NOT NULL,
  `fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuario` int(11) NOT NULL,
  `fecha_editado` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
----------------------------------------------

--
-- Indices de la tabla `pre_registro_usuarios`
--
ALTER TABLE `pre_registro_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_confirmados`
--
ALTER TABLE `usuarios_confirmados`
  ADD PRIMARY KEY (`id`);

  --
-- Indices de la tabla `market_producto_general`
--
ALTER TABLE `market_producto_general`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--------------------------------------------

--
-- AUTO_INCREMENT de la tabla `pre_registro_usuarios`
--
ALTER TABLE `pre_registro_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

--
-- AUTO_INCREMENT de la tabla `usuarios_confirmados`
--
ALTER TABLE `usuarios_confirmados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

--
-- AUTO_INCREMENT de la tabla `market_producto_general`
--
ALTER TABLE `market_producto_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;