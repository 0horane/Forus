-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 05:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasteleria`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Recipe_ID` int(11) NOT NULL,
  `Text` longtext NOT NULL,
  `Created_At` datetime NOT NULL,
  `Deleted_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `User_id` int(10) UNSIGNED NOT NULL,
  `Recipes_id` int(10) UNSIGNED NOT NULL,
  `Created_At` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Description` longtext NOT NULL,
  `Views` int(11) NOT NULL,
  `ingredients` longtext NOT NULL,
  `steps` longtext NOT NULL,
  `img_path` varchar(64) DEFAULT NULL,
  `Created_At` datetime NOT NULL,
  `Deleted_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`ID`, `User_ID`, `Name`, `Description`, `Views`, `ingredients`, `steps`, `img_path`, `Created_At`, `Deleted_At`) VALUES
(1, 1, 'Torta mousse de café', 'Base de chocolate\r\n1° paso: pre calentar el horno a 180°C. Recubrir con papel manteca la base del molde de 24 cm.\r\n2° paso: en un bowl batir los huevos junto con el azúcar.\r\n3° paso: agregar la leche. Mezclar. Verter en forma de hilo el aceite mezclando constantemente.\r\n4° paso: agregar en 3 veces la harina, revolver hasta disolver todos los grumos.\r\n5° paso: por último, incorporar el cacao en polvo previamente tamizado. Batir bien.\r\n6° paso: verter la mezcla en el molde y llevar a horno 180°C por 15/20 minutos. Pinchar el centro antes de retirarlo del horno. Desmoldar una vez que esté completamente frío.\r\n7° paso: con un poco de café y cagnac realizar un baño para el bizcochuelo.\r\n8° paso: recubrir la pared del molde con papel film o un acetato. Colocar la base de bizcochuelo dentro, bañarlo y reservar. Comenzar con el mousse.\r\n\r\nMousse de chocolate\r\n1° paso: calentar a fuego medio la leche.\r\n2° paso: en una olla de tamaño medio colocar los 120 gramos de azúcar, el almidón y el café soluble. Revolver.\r\n3° paso: verter, a los polvos, la leche caliente en 3 veces, revolver hasta que el café se haya disuelto por completo. Llevar a fuego medio y cocinar hasta que lleve a hervor. Luego, colocar papel film a contacto a la crema y llevar a heladera hasta que esté completamente fría.\r\n4° paso: por otro lado, batir la crema de leche junto con los 40 gramos de azúcar. Debe quedar bien firme.\r\n5° paso: retirar la crema de café de la heladera, con la ayuda de la batidora mezclarla hasta que se una nuevamente. Incorporar un poco de la crema batida a la crema de café y batir.\r\n6° paso: luego, verter toda la crema de café dentro de la crema de leche. Mezclar con la ayuda de la batidora.\r\n7° paso: disolver la gelatina sin sabor con un poco de agua caliente, agregar una cucharada sopera de crema a la gelatina, unir y luego verterla dentro de la totalidad de la crema de café. Batir bien con la batidora.\r\n8° paso: verter la mousse dentro del molde, emparejarla y llevarla a freezer por al menos 3 horas o hasta que esté completamente congelada.\r\n9° paso: retirarla del freezer, desmoldar y decorar con cacao amargo en polvo. Dejar descongelar en heladera por al menos 5 horas antes de ser servida.', 0, 'Ingredientes\r\nMolde de 24 cm\r\n\r\nBase de chocolte\r\nHuevos...2 unidades\r\nAzúcar...100 grs.\r\nLeche...120 ml.\r\nAceite de girasol...30 ml.\r\nCacao amargo en polvo...40 grs.\r\nHarina 0000...100 grs.\r\nPolvo de hornear...8 grs.\r\n\r\nMousse de café\r\nLeche...350 ml.\r\nAzúcar...120 grs.\r\nAlmidón de maíz...25 grs.\r\nCafé en polvo soluble...8 grs.\r\nCrema de leche...450 ml.\r\nAzúcar...40 grs.\r\nGelatina sin sabor...5 grs.', '', NULL, '2021-10-26 02:02:17', NULL),
(2, 2, 'Crostata Italiana', 'Procedimiento\r\n\r\n1° paso: en un bowl mezclar la manteca a temperatura ambiente junto con el azúcar hasta obtener una crema.\r\n2° paso: agregar la esencia de vainilla. Batir.\r\n3° paso: agregar de a uno los huevos mezclando luego de cada incorporación.\r\n4° paso: agregar las yemas, unir bien.\r\n5° paso: incorporar el polvo de hornear. Mezclar.\r\n6° paso: agregar la harina en tres veces. Mezclar hasta obtener una masa que no se pegue en los dedos, de lo contrario, agregar más harina.\r\n7° paso: cubrir la masa con papel film y llevar a frío por 1 hora.\r\n8° paso: mientras la masa está en la heldadera, enmantecar y enharinar el molde de tarta.\r\n9° paso: retirar la masa del frío, estirarla con la ayuda de un palo de amasar al grosor de ½ cm.\r\n10° paso: colocarla sobre el molde. Presionar levemente la masa cerciorándose que tome la forma del molde.\r\n11° paso: verter la mermelada sobre la masa y distribuirla de manera uniforme.\r\n12° paso: con la masa restante, hacer las tiras en la superficie. Tratar que sean todas del mismo grosor, así se cocinan de manera uniforme en el horno.\r\n13° paso: cocinar en horno 180°C por 35/40 minutos o hasta que la masa esté bien dorada. Dejar enfríar antes de desmoldar.', 0, 'Ingredientes\r\nMolde de 26 cm.\r\nHarina 000...325 grs.\r\nManteca...100 grs.\r\nAzúcar...100 grs.\r\nHuevos...2 unidades\r\nYemas...2 unidades\r\nMermelada de cerezas...250 grs. (sabor a gusto)\r\nPolvo de hornear...5 grs.\r\nEsencia de vainilla...1 cda.', '', NULL, '2021-10-26 02:12:37', NULL),
(3, 4, 'Budín marmolado crema y chocolate', 'Procedimiento\r\n\r\n1°paso: aceitar y enharinarla budinera. Pre calentar el horno a 180°C.\r\n2°paso: en un bowl grande colocar los tres huevos y mezclarlos con el azúcar.\r\n3°paso: agregar la crema de leche y batir.\r\n4°paso: incorporar el aceite en forma de hilo si dejar de batir.\r\n5°paso: agregar la mitad de la harina y meclar.\r\n6°paso: incorporar el polvo de hornaer junto con el resto de la harina y batir hasta unir todo.\r\n7°paso: verter la mitad de la mezcla dentro de la budinera.\r\n8°paso: al resto, agregar el cacao en polvo previamente tamizado, batir y agregar la leche, mezclar hasta unir todo.\r\n9°paso: verter la mezcla de chocolate sobre la mezcla a la crema.\r\n10°paso: llevar a horno 180°C por 35/40minutos. Antes de retirarlo del horno, pinchar el interior para corroborar la cocción.', 0, 'Ingredientes\r\nBudinera de 30 cm.\r\n\r\nHarina 0000...320 grs.\r\nHuevos...3 u.\r\nAzúcar...200 grs.\r\nCrema de leche...200 ml.\r\nCacao amargo en polvo...15 grs.\r\nAceite de girasol...45 ml.\r\nPolvo de hornear...16 grs.\r\nLeche...70 ml.', '', NULL, '2021-10-26 02:12:37', NULL),
(4, 5, 'Cookies con chips', 'Procedimiento\r\n1°paso: picar el chocolate en pequeños trozos.\r\n2°paso: mezclar la manteca a temperatura ambiente junto con el azúcar.\r\n3°paso: agregar el huevo y la yema mezclando luego de cada incorporación.\r\n4°paso: incorporar la esencia de vainilla.\r\n5°paso: agregar la mitad de la harina junto con el polvo de hornear y batir. Una vez unida, incorporar la harina restante.\r\n6°paso: agregar los chips de chocolate. Pre calentar el horno a 180°C.\r\n7°paso: colocar papel manteca sobre una placa de horno y comenzar a formar las galletitas ayudándose de dos chucharas de té. Al colocar las bolitas de masa sobre la placa, dejar espacio entre ellas ya que en el horno se expanden y crecen.\r\n8°paso: cocinar en horno por unos 12/15 minutos o hasta que la base esté dorada.', 0, 'Ingredientes\r\nPara 12 a 15 cookies\r\nHarina 0000...130 grs.\r\nManteca...50 grs.\r\nAzúcar...70 grs.\r\nHuevos...1 unidad\r\nYema...1 unidad\r\nPolvo de hornear...2 cdta.\r\nEsencia de vainilla...1 cda.\r\nChocolate amargo...45 grs.', '', NULL, '2021-10-26 02:15:35', NULL),
(5, 3, 'Cheesecake al horno', 'Procedimiento\r\n\r\n1° paso: pre calentar el horno a 160°C. Enmantecar y enharinar el molde de 26 cm.\r\n2° paso: triturar las galletitas de chocolate, mezclarlas con la manteca prviamente derretida. Colocarlas en la base del molde haciendo presión para formar una base uniforme.\r\n3° paso: en un bowl grande colocar el queso a temperatura ambiente, el azúcar y la harina. Batir con la ayuda de una batidora.\r\n4° paso: incorporar de a uno los huevos, batir luego de cada incorporación. Agregar el brandy.\r\n5° paso: batir la mitad de la crema a medio punto y agregarla a la mezcla con movimientos envolventes.\r\n6° paso: verter el contenido sobre la base de galletitas.\r\n7° paso: hornear en horno a 160°C por unos 45/50 minutos o hasta que la torta haga una fina corteza dorada en la superficie.\r\n8° paso: una vez tibia, desmoldar. Batir y decorar con el resto de la crema cuando se haya enfriado por completo.', 0, 'Ingredientes\r\nMolde de 24cm\r\n\r\nGalletitas de chocolate...250 grs.\r\nManteca o mantequilla...45 grs.\r\nQueso blanco...600 grs.\r\nAzúcar...220 grs.\r\nHuevos...3 unidades\r\nHarina 0000...35 grs.\r\nCrema de leche...230 ml.\r\nBrandy...c/n (a gusto)', '', NULL, '2021-10-26 02:15:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(64) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Created_At` datetime NOT NULL,
  `Deleted_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserName`, `Password`, `Email`, `Created_At`, `Deleted_At`) VALUES
(1, 'bel', '52a2b9fdd0f20231ed3440119bb01e26', 'bejishiil@arge.as.3', '2021-10-25 19:02:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`User_id`,`Recipes_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
