-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 01:25 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tacchronicle2`
--

-- --------------------------------------------------------

--
-- Table structure for table `joborder`
--

CREATE TABLE `joborder` (
  `jonumber` bigint(20) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telno` varchar(255) NOT NULL,
  `servicetype` varchar(50) NOT NULL,
  `warrantyinfo` varchar(50) NOT NULL,
  `otherinfo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joborder`
--

INSERT INTO `joborder` (`jonumber`, `custname`, `address`, `telno`, `servicetype`, `warrantyinfo`, `otherinfo`) VALUES
(8525, 'Joseph Tanola', 'Sta Rita, Samra', '09264476034', 'carry-in', 'out of warranty', ''),
(7668, 'CLSF', 'Giporlos Samar', '092234500708', 'carry-in', 'out of warranty', ''),
(8306, 'Anthony Carbonella', 'Tacloban City', '09503449167', 'carry-in', 'out of warranty', ''),
(8516, 'Jogan Cular', 'Tacloban City', '09175287985', 'carry-in', 'out of warranty', ''),
(8561, 'Cragandeeb', 'Tacloban City', '09109848199', 'carry-in', 'out of warranty', ''),
(8549, 'Marites Fernandez', 'Tacloban City', '09301369935', 'carry-in', 'out of warranty', ''),
(8451, 'Jacqueline Burlao', 'Baybay', '09058216072', 'carry-in', 'out of warranty', ''),
(8546, 'Tia Tilas Bulalo', 'Palo', '09772006929', 'carry-in', 'in warranty', ''),
(8515, 'Jet Evangelista', 'Tacloban City', '09984969540', 'carry-in', 'out of warranty', ''),
(8514, 'Lio Alota', 'Tacloban City', '09109481441', 'carry-in', 'out of warranty', ''),
(8553, 'Reymundo C. Olimpo', 'Tacloban City', '09176681978', 'carry-in', 'out of warranty', ''),
(8540, 'Gabrino  Estaline', 'Tacloban City', '09981817158', 'carry-in', 'in warranty', ''),
(8412, 'S.L Ruiz', 'Tacloban City', '09178820073', 'carry-in', 'out of warranty', ''),
(8517, 'Aeznith Advincula', 'Tacloban City', '09052627502', 'carry-in', 'out of warranty', ''),
(8475, 'Saniko Pelisisimo', 'Tacloban City', '', 'carry-in', 'out of warranty', ''),
(8465, 'Orbeta Ramon Disabelle', 'Tacloban City', '0917118456', 'carry-in', 'out of warranty', ''),
(8535, 'Cesario Ladrera JR', 'Tacloban City', '095551473265', 'carry-in', 'out of warranty', ''),
(8300, 'Janice Lazaro', 'Tacloban City', '09185202535', 'carry-in', 'out of warranty', ''),
(7616, 'Silvino Baldesco', 'Tacloban City', '09302692218', 'carry-in', 'out of warranty', ''),
(8385, 'Kervin Goyjoco', 'Tacloban City', '09277292959', 'carry-in', 'out of warranty', ''),
(8388, 'Chrisfen Mendalla', 'Tacloban City', '09308021758', 'carry-in', 'out of warranty', ''),
(8332, 'Dominggo Sacay', 'Naval, Biliran', '09454331261', 'carry-in', 'out of warranty', ''),
(7620, 'Lucio Aguilar', 'Alang alang', '09270623963', 'carry-in', 'out of warranty', ''),
(8344, 'Mary Rose Andaya', 'Tacloban City', '09300966453', 'carry-in', 'out of warranty', ''),
(8415, 'Jimmy Palomiras', 'Tacloban City', '09067655937', 'carry-in', 'out of warranty', ''),
(8378, 'RRDC', 'TACLOBAN', '0916153442209', 'carry-in', 'out of warranty', ''),
(8383, 'Alan Benites', 'Tacloban City', '09056542162', 'carry-in', 'out of warranty', ''),
(8360, 'RONNEL TEZON', 'Tacloban City', '09277080326', 'carry-in', 'out of warranty', ''),
(8402, 'NESTOR SPARES', 'BABATNGON', '09101071609', 'carry-in', 'out of warranty', ''),
(7981, 'ALDREN LINGANAY', 'TACLOBAN', '09297949717', 'carry-in', 'out of warranty', ''),
(8457, 'Cualita Baliatis', 'Pinabakdaw, Samar', '09774408545', 'carry-in', 'out of warranty', ''),
(8590, 'Candy Hawin', 'Tacloban City', '09283810280', 'carry-in', 'in warranty', ''),
(8547, 'Rebecca Demejelio', 'Tacloban City', '09977701156', 'carry-in', 'out of warranty', ''),
(8575, 'Arcelina Marilao', 'Tacloban City', '09758182049', 'carry-in', 'out of warranty', ''),
(8503, 'Leo  Reganuevo', 'El Reposo Street', '09177290755', 'carry-in', 'out of warranty', ''),
(8502, 'Hogi Apunan', 'Tacloban City', '09209665983', 'carry-in', 'out of warranty', ''),
(8357, 'Ryan Rosal', 'Tacloban City', '093063199187', 'carry-in', 'out of warranty', ''),
(8545, 'Reynaldo Asid', 'Julita, Leyte', '09177185327', 'carry-in', 'out of warranty', ''),
(8586, 'Atty. Rafael Iriarte', 'Tacloban City', '09161261330/09993841309', 'carry-in', 'in warranty', ''),
(8576, 'Ana Erby Camulte', 'Tacloban City', '09776210158', 'carry-in', 'out of warranty', ''),
(8479, 'Dante Calinang', 'Tacloban City', '09985441281', 'carry-in', 'out of warranty', ''),
(8647, 'Michelle Cotan', 'Tanauan Leyte', '09973991879', 'carry-in', 'out of warranty', ''),
(8595, 'Kim Dacara', 'Palo, leye', '09662396953', 'carry-in', 'out of warranty', ''),
(8708, 'Helen Grace Canon', 'Tunga, Leyte', '09153770959', 'carry-in', 'out of warranty', ''),
(8633, 'Cris Ay-Ay', 'San Jose, Tacloban City', '09554833032', 'carry-in', 'out of warranty', ''),
(8591, 'Noel Quinas', 'LaPaz, Leyte', '09283777993', 'carry-in', 'out of warranty', ''),
(8587, 'Raymund Olimpo', 'Tacloban City', '09176681978', 'carry-in', 'out of warranty', ''),
(8632, 'CSC/ Kowen Renos', 'Tacloban City', '09173735241', 'carry-in', 'out of warranty', ''),
(8512, 'Jemar S. Romano', 'Tacloban City', '09756420242', 'carry-in', 'out of warranty', ''),
(8566, 'Mario Jamora', 'Palo, leye', '09204703656', 'carry-in', 'out of warranty', ''),
(8607, 'Gerry Villegas', 'Marasbaras, Tacloban City', '09058919980', 'carry-in', 'out of warranty', ''),
(8616, 'Engr. Libeth L. Morot', 'Tanauan Leyte', '09151322894', 'carry-in', 'out of warranty', ''),
(8528, 'Erlinda Baluran', 'Tacloban City', '09771101943', 'carry-in', 'out of warranty', ''),
(8536, 'Abegail Zacarias', 'Dulag, Leyte', '09477341215', 'carry-in', 'out of warranty', ''),
(8544, 'Marlon Balledo', 'Tacloban City', '09486216247', 'carry-in', 'out of warranty', ''),
(8571, 'Felipe V. Canonigo III', 'San Roque, Tolossa Leyte', '09081729074', 'carry-in', 'out of warranty', ''),
(8598, 'Almera S. Galvez', 'Tacloban City', '09280752303', 'carry-in', 'out of warranty', ''),
(8564, 'Ramon Dela Cruz', 'Palo, leye', '09109201174', 'carry-in', 'out of warranty', ''),
(8608, 'Timoteo E. Guillermo', 'Alang Alang. Leyte', '09266441526', 'carry-in', 'out of warranty', ''),
(8565, 'Mario Molon', 'Mayorga, Leyte', '09394540170/09103438867', 'carry-in', 'out of warranty', ''),
(8599, 'Ma. Rosario Bactol', 'Tacloban City', '09951405330', 'carry-in', 'out of warranty', ''),
(8491, 'Lili Lacbayo', 'Sta Rita', '093558449462', 'carry-in', 'out of warranty', ''),
(8481, 'Philip Negas', 'Tacloban City', '09393965637', 'carry-in', 'out of warranty', ''),
(8588, 'Arnel Ibanez', 'Tacloban City', '0936083.6413', 'carry-in', 'out of warranty', ''),
(8556, 'Chito Enyermo', 'Burauen, Leyte', '09199554499', 'carry-in', 'out of warranty', ''),
(8450, 'Rowena Vinegaz', 'Tacloban City', '091267100370', 'carry-in', 'out of warranty', ''),
(8603, 'Lea Elementp', 'Palo, leye', '09196352482', 'carry-in', 'out of warranty', ''),
(8560, 'Ligaya De Store', 'Tacloban City', '09485591969', 'carry-in', 'out of warranty', ''),
(8552, 'Wilfredo Ceyral', 'Dagami, Leyte', '09084530465', 'carry-in', 'out of warranty', ''),
(8579, 'Jelson Flor', 'Tacloban City', '09099377725', 'carry-in', 'out of warranty', ''),
(8531, 'Mario Maico', 'Abuyog Leyte', '09291606529', 'carry-in', 'out of warranty', ''),
(8526, 'Ayessa Antolihad', 'Bato', '09456901320', 'carry-in', 'out of warranty', ''),
(8390, 'Leo Petillos', 'Abucay, Tacloban City', '09464747251', 'carry-in', 'out of warranty', ''),
(8551, 'Remejio Badeller', 'Tacloban City', '09054721095', 'carry-in', 'out of warranty', ''),
(8486, 'Basilides Yu', 'Tacloban City', '09154668454', 'carry-in', 'out of warranty', ''),
(8570, 'Edgar Wanwan', 'Tacloban City', '09753961328', 'carry-in', 'out of warranty', ''),
(8428, 'Renito Saladaga', 'Tacloban City', '09391437603', 'carry-in', 'in warranty', ''),
(8555, 'Neil Go', 'Tacloban City', '09273103892', 'carry-in', 'out of warranty', ''),
(8414, 'Oscar Atuel', 'Tacloban City', '09774860506', 'carry-in', 'out of warranty', ''),
(8532, 'Monica Golaly', 'Tacloban City', '09277746401', 'carry-in', 'out of warranty', ''),
(8458, 'Vicerido Oppillas', 'Tacloban City', '09453633890', 'carry-in', 'out of warranty', ''),
(8211, 'Leornado Mercado', 'Tacloban City', '09272186733', 'carry-in', 'out of warranty', ''),
(8183, 'Pit Abuyog', 'N/A', '09173239617', 'carry-in', 'out of warranty', ''),
(8239, 'Mark Galvez', 'Tacloban City', '09057616255', 'carry-in', 'out of warranty', ''),
(8392, 'Jason Canete', 'Tacloban City', '09173785228', 'carry-in', 'out of warranty', ''),
(8249, 'Bimilia Ssong', 'Tacloban City', '09157881283', 'carry-in', 'out of warranty', ''),
(8237, 'Manlured Mission Station', 'Tacloban City', '09282204105', 'carry-in', 'out of warranty', ''),
(8269, 'Elina Taganna', 'Basey, Samar', '09055996075', 'carry-in', 'out of warranty', ''),
(8352, 'Venus Uy', 'Calbiga, Samar', '', 'carry-in', 'out of warranty', ''),
(7768, 'Artemio Espiel', 'Dagami, Leyte', '09193550966', 'carry-in', 'out of warranty', ''),
(8419, 'Archimedes Sabala', 'Tacloban City', '09553765596', 'carry-in', 'out of warranty', ''),
(8250, 'Benjamin Padulon', 'Alangalang, Leyte', '09287018648', 'carry-in', 'out of warranty', ''),
(8471, 'Jeffrey Bayani', 'Tacloban City', '09772437379', 'carry-in', 'out of warranty', ''),
(8289, 'Fredie Gayie', 'Pastrana', '09777714361', 'carry-in', 'out of warranty', ''),
(8459, 'Mary Abadon', 'Tacloban City', '09563386105', 'carry-in', 'out of warranty', ''),
(8405, 'Alexander Capaquidu', 'Tolosa, Leyre', '09173146618/09499540047', 'carry-in', 'out of warranty', ''),
(8621, 'Roman Lego', 'Tacloban City', '09991953191', 'carry-in', 'out of warranty', ''),
(8709, 'Richelle F. Gacus', 'Tacloban City', '09152840084', 'carry-in', 'out of warranty', ''),
(8602, 'Maricris Huiso', 'Tacloban City', '09983281510', 'carry-in', 'out of warranty', ''),
(8649, 'Julius Pore', 'Palo, leye', '09472015873', 'carry-in', 'out of warranty', ''),
(8682, 'Mark Mazo', 'Tacloban City', '09179571045', 'carry-in', 'out of warranty', ''),
(8658, 'Rona Versosa', 'Tacloban City', '09498908067', 'carry-in', 'out of warranty', ''),
(8674, 'Evelyn Mejona', 'Mc Arthur', '09183977612', 'carry-in', 'out of warranty', ''),
(8594, 'Sonny Amande', 'Tacloban City', 'n/a', 'carry-in', 'in warranty', ''),
(8686, 'Marmita Aringoy', 'Brgy 95 Paterno st. Tacloban City', 'n/a', 'carry-in', 'in warranty', ''),
(8219, 'Archie Fuentes', 'Tacloban City', '09053116088', 'carry-in', 'out of warranty', ''),
(8629, 'Paulo Quillotes', 'Burauen, Leyte', '09164749231', 'carry-in', 'out of warranty', ''),
(8596, 'Antonio Ocaria', 'Tacloban City', '09158660436', 'carry-in', 'out of warranty', ''),
(8613, 'Azucena Raagas', 'Tacloban City', '09173224808', 'carry-in', 'out of warranty', ''),
(8639, 'Noel Enriquez', 'Tacloban City', '09363168312', 'carry-in', 'out of warranty', ''),
(8660, 'Emy Silmar', 'Tacloban City', '09495711689', 'carry-in', 'in warranty', ''),
(8618, 'Christopher Manocay', 'Tacloban City', '09195150759', 'carry-in', 'out of warranty', ''),
(8645, 'Roberto Lopez', 'Tacloban City', '09094064618', 'carry-in', 'out of warranty', ''),
(8662, 'Claire C. Pangilinan', 'Bgry. 83 Paraiso San Jose Tacloban City', '09988851687/09560410859', 'carry-in', 'out of warranty', ''),
(8580, 'Raffy Desoloc', 'Tacloban City', '0919344433', 'carry-in', 'out of warranty', ''),
(8581, 'Willie Gahuman', 'Tacloban City', '09363893536', 'carry-in', 'out of warranty', ''),
(8572, 'Bryan Jerick Aswar', 'Tacloban City', '09751374671', 'carry-in', 'out of warranty', ''),
(8634, 'Renaldo Rocabo', 'Tacloban City', '09219801402', 'carry-in', 'out of warranty', ''),
(8672, 'Ely Ruiz', 'Tacloban City', '09332977808', 'carry-in', 'out of warranty', ''),
(8524, 'Marian Relayo', 'Palo, leye', '09064397762', 'carry-in', 'out of warranty', ''),
(8664, 'Maricel Vallepas', 'Brgy 52 A Sagkahan Bliss Tacloban City', '09993136404', 'carry-in', 'out of warranty', ''),
(8671, 'Fr. Ragay', 'Tacloban City', '09177321377', 'carry-in', 'out of warranty', ''),
(8508, 'Joselito Dacluy', 'Tacloban City', '0935801965', 'carry-in', 'out of warranty', ''),
(8296, 'Salvador Estudillo', 'Tacloban City', '09173274412', 'carry-in', 'out of warranty', ''),
(8716, 'Ian Perez', 'Tacloban City', '09159654847', 'carry-in', 'out of warranty', ''),
(8703, 'Gerald Pacanan', 'Tacloban City', '09753082648', 'carry-in', 'out of warranty', ''),
(8678, 'Reazel Ladipe', 'Tacloban City', '09265045816', 'carry-in', 'out of warranty', ''),
(8677, 'Domingo Angeles', 'Tacloban City', '09300066258', 'carry-in', 'out of warranty', ''),
(8691, 'Garnet Pax Tonolete', 'Carigara', '09359429932', 'carry-in', 'out of warranty', ''),
(8158, 'Jeffrey B. Gatdula', 'Leyte Regional Reservation, Abuyog Leyte', '0905121660', 'carry-in', 'out of warranty', ''),
(8697, 'jJasper Lays', 'V&G ,Tacloban City', '0926699662', 'carry-in', 'out of warranty', ''),
(8717, 'Remond Bollosa', 'Tacloban City', '', 'carry-in', 'out of warranty', ''),
(8694, 'Gerly Macawili', 'Tacloban City', '09774906918', 'carry-in', 'out of warranty', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentid` bigint(20) NOT NULL,
  `paytransid` bigint(20) NOT NULL,
  `article` varchar(100) NOT NULL,
  `payamount` double NOT NULL,
  `paydate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentid`, `paytransid`, `article`, `payamount`, `paydate`) VALUES
(1800, 4, 'Initial payment', 300, '2018-07-03'),
(1801, 4, 'Full Payment for Balance', 200, '2018-07-13'),
(1802, 3, 'Full Payment', 1000, '2018-07-04'),
(1803, 9, 'Full payment', 3776, '2018-07-23'),
(1804, 10, 'Full payment', 3776, '2018-07-23'),
(1805, 12, 'Full payment', 3776, '2018-07-23'),
(1806, 13, 'Full payment', 1050, '2018-07-23'),
(1807, 14, 'Full payment', 7600, '2018-07-23'),
(1808, 15, 'Full payment', 1025, '2018-07-23'),
(1809, 16, 'Full payment', 1000, '2018-07-23'),
(1810, 17, 'Full payment', 1150, '2018-07-23'),
(1811, 18, 'Full payment', 6300, '2018-07-23'),
(1812, 19, 'Full payment', 1195, '2018-07-23'),
(1813, 20, 'Full payment', 2795, '2018-07-23'),
(1814, 21, 'Full payment', 550, '2018-07-23'),
(1815, 22, 'Full payment', 3045, '2018-07-23'),
(1816, 23, 'Full payment', 500, '2018-07-23'),
(1817, 24, 'Full payment', 5300, '2018-07-23'),
(1818, 25, 'Full payment', 4000, '2018-07-23'),
(1819, 26, 'Full payment', 845, '2018-07-23'),
(1820, 27, 'Full payment', 500, '2018-07-23'),
(1821, 28, 'Full payment', 4000, '2018-07-23'),
(1822, 29, 'Full payment', 350, '2018-07-23'),
(1823, 30, 'Full payment', 6300, '2018-07-23'),
(1824, 31, 'Full payment', 7100, '2018-07-23'),
(1825, 32, 'Full payment', 1600, '2018-07-23'),
(1826, 33, 'Full payment', 1245, '2018-07-23'),
(1827, 34, 'Full payment', 5250, '2018-07-23'),
(1828, 35, 'Full payment', 1495, '2018-07-23'),
(1829, 36, 'Full payment', 1250, '2018-07-23'),
(1830, 37, 'Full payment', 3150, '2018-07-23'),
(1831, 38, 'Full payment', 2800, '2018-07-23'),
(1832, 39, 'Full payment', 4240, '2018-07-23'),
(1833, 40, 'Full payment', 4500, '2018-07-23'),
(1834, 41, 'Full payment', 1000, '2018-07-23'),
(1835, 43, 'Full Payment for Balance', 4600, '2018-09-02'),
(1836, 44, 'Full Payment for Balance', 1500, '2018-09-02'),
(1837, 45, 'Full Payment for Balance', 1000, '2018-09-02'),
(1838, 47, 'Full Payment for Balance', 550, '2018-09-02'),
(1839, 48, 'Full Payment for Balance', 845, '2018-09-02'),
(1840, 49, 'Full Payment for Balance', 4500, '2018-09-02'),
(1841, 51, 'Full Payment for Balance', 4500, '2018-09-02'),
(1842, 50, 'Full Payment for Balance', 5900, '2018-09-02'),
(1843, 54, 'Full Payment for Balance', 1920, '2018-09-02'),
(1844, 55, 'Full Payment for Balance', 1995, '2018-09-02'),
(1845, 56, 'Full Payment for Balance', 6700, '2018-09-02'),
(1846, 57, 'Full Payment for Balance', 995, '2018-09-02'),
(1847, 58, 'Full Payment for Balance', 3400, '2018-09-02'),
(1848, 59, 'Full Payment for Balance', 1465, '2018-09-02'),
(1849, 62, 'Full Payment for Balance', 1245, '2018-09-02'),
(1850, 63, 'Full Payment for Balance', 1900, '2018-09-02'),
(1851, 64, 'Full Payment for Balance', 995, '2018-09-02'),
(1852, 65, 'Full Payment for Balance', 8600, '2018-09-02'),
(1853, 66, 'Full Payment for Balance', 1140, '2018-09-02'),
(1854, 67, 'Full Payment for Balance', 1665, '2018-09-02'),
(1855, 68, 'Full Payment for Balance', 4000, '2018-09-02'),
(1856, 69, 'Full Payment for Balance', 1986, '2018-09-02'),
(1857, 70, 'Full Payment for Balance', 3700, '2018-09-02'),
(1858, 71, 'Full Payment for Balance', 1450, '2018-09-02'),
(1859, 72, 'Full Payment for Balance', 1435, '2018-09-02'),
(1860, 73, 'Full Payment for Balance', 945, '2018-09-02'),
(1861, 74, 'Full Payment for Balance', 4500, '2018-09-02'),
(1862, 75, 'Full Payment for Balance', 1250, '2018-09-02'),
(1863, 76, 'Full Payment for Balance', 2600, '2018-09-02'),
(1864, 78, 'Full Payment for Balance', 1600, '2018-09-02'),
(1865, 79, 'Full Payment for Balance', 1500, '2018-09-02'),
(1866, 80, 'Full Payment for Balance', 4300, '2018-09-02'),
(1867, 81, 'Full Payment for Balance', 2900, '2018-09-02'),
(1868, 82, 'Full Payment for Balance', 350, '2018-09-02'),
(1869, 83, 'Full Payment for Balance', 2090, '2018-09-02'),
(1870, 84, 'Full Payment for Balance', 1000, '2018-09-02'),
(1871, 85, 'Full Payment for Balance', 650, '2018-09-02'),
(1872, 86, 'Full Payment for Balance', 3800, '2018-09-02'),
(1873, 87, 'Full Payment for Balance', 1800, '2018-09-02'),
(1874, 88, 'Full Payment for Balance', 900, '2018-09-02'),
(1875, 89, 'Full Payment for Balance', 1245, '2018-09-02'),
(1876, 90, 'Full Payment for Balance', 3200, '2018-09-02'),
(1877, 91, 'Full Payment for Balance', 1545, '2018-09-02'),
(1878, 92, 'Full Payment for Balance', 3050, '2018-09-02'),
(1879, 93, 'Full Payment for Balance', 2034, '2018-09-02'),
(1880, 94, 'Full Payment for Balance', 2000, '2018-09-02'),
(1881, 95, 'Full Payment for Balance', 845, '2018-09-02'),
(1882, 96, 'Full Payment for Balance', 3400, '2018-09-02'),
(1883, 97, 'Full Payment for Balance', 995, '2018-09-02'),
(1884, 98, 'Full Payment for Balance', 1045, '2018-09-02'),
(1885, 99, 'Full Payment for Balance', 2000, '2018-09-02'),
(1886, 100, 'Full Payment for Balance', 6000, '2018-09-02'),
(1887, 101, 'Full Payment for Balance', 1780, '2018-09-02'),
(1888, 102, 'Full Payment for Balance', 1600, '2018-09-02'),
(1889, 103, 'Full Payment for Balance', 8000, '2018-09-02'),
(1890, 104, 'Full Payment for Balance', 950, '2018-09-03'),
(1891, 106, 'Full Payment for Balance', 4300, '2018-09-03'),
(1892, 107, 'Full Payment for Balance', 3100, '2018-09-03'),
(1893, 108, 'Full Payment for Balance', 3600, '2018-09-03'),
(1894, 109, 'Full Payment for Balance', 1100, '2018-09-03'),
(1895, 111, 'Full Payment for Balance', 3080, '2018-09-03'),
(1896, 112, 'Full Payment for Balance', 5150, '2018-09-03'),
(1897, 113, 'Full Payment for Balance', 3156, '2018-09-03'),
(1898, 114, 'Full Payment for Balance', 850, '2018-09-03'),
(1899, 115, 'Full Payment for Balance', 6500, '2018-09-03'),
(1900, 116, 'Full Payment for Balance', 2495, '2018-09-03'),
(1901, 117, 'Full Payment for Balance', 3400, '2018-09-03'),
(1902, 118, 'Full Payment for Balance', 800, '2018-09-03'),
(1903, 119, 'Full Payment for Balance', 3700, '2018-09-03'),
(1904, 120, 'Full Payment for Balance', 995, '2018-09-03'),
(1905, 121, 'Full Payment for Balance', 550, '2018-09-03'),
(1906, 122, 'Full Payment for Balance', 550, '2018-09-03'),
(1907, 123, 'Full Payment for Balance', 350, '2018-09-03'),
(1908, 124, 'Full Payment for Balance', 1000, '2018-09-03'),
(1909, 125, 'Full Payment for Balance', 800, '2018-09-03'),
(1910, 126, 'Full Payment for Balance', 6000, '2018-09-03'),
(1911, 127, 'Full Payment for Balance', 3000, '2018-09-03'),
(1912, 128, 'Full Payment for Balance', 350, '2018-09-03'),
(1913, 129, 'Full Payment for Balance', 1665, '2018-09-04'),
(1914, 130, 'Full Payment for Balance', 845, '2018-09-04'),
(1915, 131, 'Full Payment for Balance', 1000, '2018-09-04'),
(1916, 132, 'Full Payment for Balance', 6500, '2018-09-04'),
(1917, 133, 'Full Payment for Balance', 2100, '2018-09-04'),
(1918, 134, 'Full Payment for Balance', 1450, '2018-09-04'),
(1919, 135, 'Full Payment for Balance', 735, '2018-09-04'),
(1920, 136, 'Full Payment for Balance', 3700, '2018-09-04'),
(1921, 137, 'Full Payment for Balance', 1495, '2018-09-04'),
(1922, 138, 'Full Payment for Balance', 1686, '2018-09-04'),
(1923, 139, 'Full Payment for Balance', 2540, '2018-09-04'),
(1924, 140, 'Full Payment for Balance', 3730, '2018-09-04'),
(1925, 141, 'Full Payment for Balance', 1000, '2018-09-04'),
(1926, 142, 'Full Payment for Balance', 1025, '2018-09-04'),
(1927, 143, 'Full Payment for Balance', 4000, '2018-09-05'),
(1928, 144, 'Full Payment for Balance', 2500, '2018-09-05'),
(1929, 145, 'Full Payment for Balance', 2800, '2018-09-05'),
(1930, 146, 'Full Payment for Balance', 3050, '2018-09-05'),
(1931, 147, 'Full Payment for Balance', 550, '2018-09-05'),
(1932, 148, 'Full Payment for Balance', 2000, '2018-09-05'),
(1933, 149, 'Full Payment for Balance', 1980, '2018-09-05'),
(1934, 150, 'Full Payment for Balance', 1000, '2018-09-05'),
(1935, 151, 'Full Payment for Balance', 6000, '2018-09-05'),
(1936, 152, 'Full Payment for Balance', 2750, '2018-09-05'),
(1937, 153, 'Full Payment for Balance', 2500, '2018-09-05'),
(1938, 154, 'Full Payment for Balance', 995, '2018-09-05'),
(1939, 155, 'Full Payment for Balance', 3300, '2018-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `repairdetail`
--

CREATE TABLE `repairdetail` (
  `rdid` bigint(20) NOT NULL,
  `rdtransid` bigint(20) NOT NULL,
  `rdno` int(11) DEFAULT NULL,
  `partnumber` varchar(255) DEFAULT NULL,
  `partdescription` varchar(255) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `unitprice` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairdetail`
--

INSERT INTO `repairdetail` (`rdid`, `rdtransid`, `rdno`, `partnumber`, `partdescription`, `qty`, `unitprice`) VALUES
(35, 18, 0, '', 'Set backlight', 1, 4000),
(33, 17, 0, '', 'Distort parts', 1, 600),
(31, 15, 0, '', 'Tac Switch', 1, 475),
(29, 14, 0, '', 'Power Suppy Board', 1, 4800),
(15, 9, 0, '', 'TAC SWITCH', 7, 68),
(14, 9, 0, '', 'Motherboard', 1, 2500),
(21, 10, 0, '', 'Tac Switch', 7, 68),
(20, 10, 0, '', 'Motherboard', 1, 2500),
(18, 11, 0, '', 'Corroded', 1, 250),
(19, 11, 0, '', 'Tube defect', 1, 250),
(22, 12, 0, '', 'Motherboard', 1, 2500),
(23, 12, 0, '', 'Tac Switch', 7, 68),
(27, 13, 0, '', 'Tube FDefect', 1, 250),
(26, 13, 0, '', 'Corroded', 1, 250),
(37, 19, 0, '', 'Labor only', 1, 645),
(41, 20, 0, '', 'amp fuse small', 1, 95),
(40, 20, 0, '', 'k3569 fet -power', 2, 850),
(43, 22, 0, '12131', 'Smd fet', 1, 1695),
(46, 24, 0, '', 'Power Supply Board', 1, 3500),
(49, 25, 0, '', 'Backlight', 1, 3000),
(51, 26, 0, '', 'Parts', 1, 295),
(53, 28, 0, '', 'Backlight', 1, 3000),
(55, 30, 0, '', 'backlight assemble', 1, 4000),
(57, 31, 0, '', 'backlight', 32, 150),
(59, 32, 0, '', 'Backlight LED ', 4, 150),
(61, 33, 0, '', 'Volume Control (Slide)', 1, 395),
(63, 34, 0, '', 'Backlight', 7, 350),
(65, 35, 1, '', 'SMD Resistor, Cap', 1, 695),
(67, 36, 1, '', 'BLACKLIGHT LED', 1, 250),
(69, 37, 1, '', 'PANEL DEFECT CHECKUP FEE', 1, 350),
(71, 38, 1, '', 'T-CON DRIVE IS SMD , SMD CAP', 1, 1800),
(74, 39, 1, '', 'T-CON SMD SWITCHING IC', 1, 1750),
(75, 39, 2, '', 'SMD CAP', 2, 95),
(78, 40, 1, '', 'MOTHERBOARD', 1, 3500),
(82, 43, 2, '', 'Magnetron', 1, 550),
(81, 43, 1, '', 'Capacitor', 1, 3500),
(84, 44, 0, '', 'Cable Connector', 1, 500),
(94, 48, 0, '', 'Resistor, Transistor', 1, 295),
(99, 49, 0, '', 'P15+550', 1, 745),
(98, 49, 0, '', '47 ohms resistor', 1, 158),
(97, 49, 0, '', '1100uf/ 35v', 4, 58),
(96, 49, 0, '', 'L6599D Oscillator', 1, 500),
(95, 49, 0, '', '13nk60 fet - tr power', 2, 695),
(100, 49, 0, '', 'TUNER', 1, 500),
(124, 50, 0, '', 'Mainboard', 1, 3995),
(120, 51, 0, '', '13nk60 FET  Tr-power', 2, 695),
(118, 51, 0, '', '1000 ohms / 35v', 4, 58),
(119, 51, 0, '', 'L6599D Oscillator', 1, 500),
(117, 51, 0, '', '47 ohm resistor', 1, 58),
(116, 51, 0, '', 'Samsung crt', 1, 840),
(121, 51, 0, '', 'other parts', 1, 160),
(122, 51, 0, '', 'Tuner', 1, 500),
(126, 54, 0, '', 'Backlight bulb', 1, 120),
(129, 55, 1, '', 'Optical Lens', 1, 1250),
(130, 55, 2, '', 'Lens Pad', 1, 195),
(132, 56, 0, '', 'Backilight Set', 1, 4400),
(135, 57, 0, '', 'Power Adaptor', 1, 995),
(137, 58, 1, '', 'Set backlight', 1, 2600),
(139, 59, 0, '', 'Tack Swtich', 7, 95),
(141, 62, 1, '', 'Transformer', 1, 695),
(143, 63, 0, 'L40B10602', 'Flyback Transformer', 1, 1350),
(147, 64, 2, '25v 5w', 'Resistor', 1, 295),
(146, 64, 3, '2c5200', 'Transistors', 1, 150),
(160, 65, 0, '331/1kv', 'Polyester Cap', 2, 95),
(159, 65, 0, 'BA1516', 'SMD IC', 1, 350),
(158, 65, 0, 'K10A60D', 'FET Tr-power', 2, 695),
(157, 65, 0, '30J127', 'FET Tr-power', 2, 695),
(156, 65, 0, 'FGPF4536', 'FET Tr-power', 1, 695),
(155, 65, 0, '17NF25', 'FET Tr-power', 2, 695),
(161, 65, 0, '32of / 50v', 'Elecc. Cap', 1, 58),
(163, 66, 1, 'LA4558', 'Pre - AMP IC', 2, 295),
(165, 67, 1, '', 'Tack Switch', 7, 95),
(167, 68, 0, '', 'Backlight', 1, 3000),
(171, 69, 2, '', 'Tack Switch', 7, 98),
(170, 69, 1, '', 'Speaker', 2, 250),
(173, 70, 0, '', 'Motherboard', 1, 2900),
(175, 71, 0, '', 'Backlight LED', 3, 150),
(177, 72, 0, '', 'BULB', 3, 145),
(179, 73, 0, '', 'Transistor and Resistor', 1, 395),
(181, 74, 0, '', 'Parts Casstd', 1, 3500),
(183, 75, 0, '', 'Backilight', 1, 250),
(185, 76, 1, '', 'Backlight LED', 2, 150),
(187, 78, 1, '', 'SMD 3.2 v Regulator , IC', 1, 995),
(189, 79, 0, '', '7 pins ', 1, 995),
(191, 80, 1, 'SB5150', 'Stand by diode', 2, 750),
(193, 81, 0, '', 'MainBoard', 1, 2400),
(196, 83, 1, '', 'Flyback Transformer', 1, 1200),
(197, 83, 2, '', 'Tack Switch', 5, 68),
(199, 85, 1, '', 'Backlight LED', 1, 150),
(201, 86, 1, '', 'Motherboard', 1, 3000),
(203, 88, 0, '', 'Voluntary Controle (Soecial Small)', 4, 95),
(205, 89, 1, 'LA78040', 'Vertical IC', 1, 695),
(207, 90, 0, '', 'Tack switch, capacitor', 1, 995),
(209, 91, 0, '', 'Cord', 1, 995),
(211, 92, 0, '', 'Universal Board', 1, 2500),
(218, 93, 3, '1000 ut 35v', 'n/a', 2, 58),
(217, 93, 2, '470 ut 35v', 'n/a', 2, 58),
(216, 93, 1, '680 ut 35v', 'n/a', 2, 58),
(219, 93, 4, '', 'Tack Switch', 7, 98),
(221, 94, 1, '', 'Luds Revation', 1, 1500),
(223, 95, 1, '1170 &amp; 680 ohm', '1150 Resistor, Resistor', 1, 295),
(226, 96, 1, '', 'Set Backlight', 1, 2900),
(228, 97, 0, '', 'Photo Couplen IC', 1, 395),
(231, 98, 3, '5551', 'Transistor', 1, 495),
(232, 98, 4, '100uf 50v', 'Capacitor', 0, 0),
(234, 99, 1, '', 'Backlight LED', 4, 250),
(236, 100, 0, '', 'Backlight 1set', 1, 4500),
(239, 101, 1, 'PC123', 'IC PHOTO COUPLEN', 1, 980),
(240, 101, 2, 'SR123', 'DIODE(UPOD NA AN 980)', 0, 0),
(242, 103, 0, '', 'Motherboard', 1, 6200),
(244, 106, 0, '', 'Powersupply', 1, 3000),
(246, 107, 1, '', 'Main Board', 1, 2600),
(249, 108, 1, '', 'OB33550 Backlight Oscillator', 1, 2600),
(250, 108, 2, '', 'FET - TR  (Upod na an 2,600)', 0, 0),
(252, 109, 1, '', 'Switch', 1, 500),
(254, 111, 0, '', 'BACKLIGHT', 1, 2280),
(256, 112, 0, '', '1 Set Backlight', 1, 4000),
(263, 113, 3, '470 nf/ 35v', 'Electrolyte Capacitor', 1, 80),
(262, 113, 2, 'C4003D', 'SMD Musfet Transistor', 1, 695),
(261, 113, 1, 'C400D', 'SMD Musfet Transistor', 1, 695),
(264, 113, 4, '', 'Tack Switch', 7, 98),
(266, 115, 1, '', 'Backlight Set', 1, 4200),
(268, 116, 1, '470K', 'Resistor', 1, 195),
(270, 117, 1, '', 'Backlight Set', 1, 2400),
(272, 119, 1, '', 'Set Backlight', 1, 2700),
(274, 120, 0, '', 'Capacitor', 1, 445),
(277, 126, 0, '', 'Backlight Set', 1, 4700),
(278, 126, 0, '', 'Speaker', 1, 500),
(280, 127, 0, '', 'Banding', 1, 3000),
(282, 129, 1, '', 'Tacj Switch ', 7, 95),
(286, 130, 1, '220k', 'Resistor (Upod na an 295)', 1, 0),
(285, 130, 4, '5551', 'Transistors', 1, 295),
(288, 132, 0, '', 'Backlight Set', 1, 4200),
(290, 133, 1, '', 'Power Supply', 1, 1500),
(292, 134, 0, '', 'Backlight LED', 3, 150),
(294, 135, 0, '', 'Resistor', 1, 185),
(296, 136, 0, '', 'Backlight Set', 1, 2700),
(298, 137, 0, '', 'n/a', 1, 695),
(300, 138, 1, '', 'Tack Switch', 7, 98),
(304, 139, 1, '4014', 'Transistor', 1, 995),
(303, 139, 0, '', 'n/a', 1, 995),
(306, 140, 0, '', '1 set backlight', 1, 2730),
(308, 142, 5, '', 'Tack Switch', 1, 475),
(310, 143, 0, '', 'Bonding', 1, 3500),
(312, 144, 0, '', 'Parts', 1, 1500),
(315, 145, 0, '', 'T-con Orile IS SMD', 1, 900),
(316, 145, 0, '', 'SMD CAP', 1, 900),
(318, 146, 1, '', 'Magnetron', 1, 2500),
(320, 148, 0, '', 'Speaker', 2, 500),
(322, 149, 0, '', 'Remote', 1, 980),
(324, 151, 1, '', 'Mainboard', 1, 4400),
(327, 152, 0, '', 'Backlight (Pensonic)', 1, 250),
(328, 152, 0, '', 'Backlight (LG)', 1, 500),
(330, 153, 1, '', 'Motherboard', 1, 775),
(332, 154, 0, '', 'Parts and labor', 1, 995),
(334, 155, 1, '', 'Main board', 1, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transid` bigint(20) NOT NULL,
  `transjonumber` bigint(20) NOT NULL,
  `transtype` varchar(20) NOT NULL,
  `jodate` date NOT NULL,
  `jodiagnosed` date NOT NULL DEFAULT '1970-01-01',
  `jorepair` date NOT NULL DEFAULT '1970-01-01',
  `jopullout` date NOT NULL DEFAULT '1970-01-01',
  `jorepaired` date NOT NULL DEFAULT '1970-01-01',
  `jodateout` date NOT NULL DEFAULT '1970-01-01',
  `customerinformed` varchar(10) NOT NULL,
  `cidate` date NOT NULL DEFAULT '1970-01-01',
  `repairaction` varchar(100) NOT NULL,
  `accessories` varchar(255) DEFAULT NULL,
  `complain` varchar(255) NOT NULL,
  `dealer` varchar(255) DEFAULT NULL,
  `datepurchase` date DEFAULT '1970-01-01',
  `labor` double DEFAULT NULL,
  `transportation` double DEFAULT NULL,
  `shippingcost` double DEFAULT NULL,
  `othercharges` double DEFAULT NULL,
  `checkupfee` double DEFAULT NULL,
  `discount` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transid`, `transjonumber`, `transtype`, `jodate`, `jodiagnosed`, `jorepair`, `jopullout`, `jorepaired`, `jodateout`, `customerinformed`, `cidate`, `repairaction`, `accessories`, `complain`, `dealer`, `datepurchase`, `labor`, `transportation`, `shippingcost`, `othercharges`, `checkupfee`, `discount`) VALUES
(18, 8451, 'new', '2018-07-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'w/ box', 'no picture w/o backlight', '', '1970-01-01', 2300, 0, 0, 0, NULL, NULL),
(17, 8549, 'new', '2018-07-13', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit', 'w/ power auto off power', '', '1970-01-01', 550, 0, 0, 0, NULL, NULL),
(16, 8526, 'new', '2018-07-17', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit w/ stand', 'w/ Backlight', '', '1970-01-01', 1000, 0, 0, 0, NULL, NULL),
(143, 8465, 'new', '2018-06-15', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-15', '2018-07-12', 'yes', '2018-06-15', 'claimed', 'Main unit only ', 'Half Screen display', '', '1970-01-01', 500, 0, 0, 0, 0, 0),
(13, 8516, 'new', '2018-07-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'no', '1970-01-01', 'claimed', 'Main unit', 'No power', '', '1970-01-01', 550, 0, 0, 0, NULL, NULL),
(14, 7668, 'new', '2017-11-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main Unit w/ built in Ac cord', 'HDMI Defect picture on/off afer a while', '', '1970-01-01', 2800, 0, 0, 0, NULL, NULL),
(12, 8306, 'new', '2018-05-04', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'no', '1970-01-01', 'claimed', 'Unit with stand', 'No power - tact switch no function (the back is wet)', '', '1970-01-01', 800, 0, 0, 0, NULL, NULL),
(19, 8546, 'new', '2018-07-12', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit only', 'No power, not spinning w/ power', '', '1970-01-01', 550, 0, 0, 0, NULL, NULL),
(20, 8515, 'new', '2018-07-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'w/ silver hook at the back, no adaptor', 'w/ sounds no picture', '', '1970-01-01', 1000, 0, 0, 0, NULL, NULL),
(21, 8514, 'new', '2018-07-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit only', 'Transformer defect', '', '1970-01-01', 550, 0, 0, 0, NULL, NULL),
(22, 8553, 'new', '2018-07-14', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit w/o stand', 'No picture, remote for repiar', '', '1970-01-01', 1000, 0, 0, 350, NULL, NULL),
(23, 8540, 'new', '2018-07-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit only no record', 'Sensor defect', '', '1970-01-01', 500, 0, 0, 0, NULL, NULL),
(24, 8412, 'new', '2018-06-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'box only no stand no remote', 'Dead Set', '', '1970-01-01', 1800, 0, 0, 0, NULL, NULL),
(25, 8517, 'new', '2018-07-03', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'stand attach only no remote no bracket', 'w/ sounds no picture', '', '1970-01-01', 1000, 0, 0, 0, NULL, NULL),
(26, 8475, 'new', '2018-06-19', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit only', 'Blue and Red picture', '', '1970-01-01', 550, 0, 0, 0, NULL, NULL),
(144, 8415, 'new', '2018-06-04', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-05', '2018-06-06', 'yes', '2018-06-05', 'claimed', 'Main unit only w/ stand', 'Blinking Picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(28, 8535, 'new', '2018-07-10', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Main unit w/ stand', 'No picture w/ sound', '', '1970-01-01', 1000, 0, 0, 0, NULL, NULL),
(29, 8300, 'new', '2018-05-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Unit with stand no remote, no ac cord', 'Standby Power', '', '1970-01-01', 0, 0, 0, 350, NULL, NULL),
(30, 7616, 'new', '2017-11-11', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'stand attach only no ac cord', 'w/ sound no picture', '', '1970-01-01', 2300, 0, 0, 0, NULL, NULL),
(31, 8385, 'new', '2018-05-26', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'unit only, no ac cord, no PAL, w/bracket', 'w/ power, no picture, panel not tested', '', '1970-01-01', 2300, 0, 0, 0, NULL, NULL),
(32, 8388, 'new', '2018-05-28', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'w/ box', 'no sounds no picture', '', '1970-01-01', 1000, 0, 0, 0, NULL, NULL),
(33, 8332, 'new', '2018-05-10', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'with adaptor 12V', 'n/a', '', '1970-01-01', 850, 0, 0, 0, NULL, NULL),
(34, 7620, 'new', '2017-11-13', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', '2 bracket w/ bracelet at the back', 'w/ sound no picture', '', '1970-01-01', 2800, 0, 0, 0, NULL, NULL),
(35, 8344, 'new', '2018-05-15', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Unit with Stand', 'red md only, panel not tested', 'checked and repaired', '2018-05-22', 800, 0, 0, 0, NULL, NULL),
(145, 8383, 'new', '2018-05-26', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-04', '2018-06-05', 'yes', '2018-06-04', 'claimed', 'unit with stand- no pal no adaptor', 'Blinking red indicator', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(37, 8378, 'new', '2018-05-24', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Unit with stand', 'BLINKING INDICATOR ONLY', '', '1970-01-01', 2800, 0, 0, 0, NULL, NULL),
(146, 8296, 'new', '2018-05-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-05-08', '2018-05-08', 'yes', '2018-05-08', 'claimed', 'unit only', 'not heating', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(39, 8360, 'new', '2018-05-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'Unit with stand - NO REMOTE NO ACCORD', 'Standby Power WITH PANEL NOT TESTED', '', '2018-05-31', 2300, 0, 0, 0, NULL, NULL),
(40, 8402, 'new', '2016-05-30', '1970-01-01', '2018-07-23', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'WITH BOX', 'NO POWER - DEFECT', '', '2018-06-02', 1000, 0, 0, 0, NULL, NULL),
(41, 7981, 'new', '2018-02-07', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-23', 'yes', '2018-07-23', 'claimed', 'UNIT WITH BOX ONLY - NO STAND- NO AC CORD, NO REMOTE', 'WITH SOUNDS, NO PICTURE AFTER A WHILE', '', '1970-01-01', 1000, 0, 0, 0, NULL, NULL),
(42, 8562, 'new', '2018-09-02', '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', 'no', '1970-01-01', 'open', 'SDFSF', 'SDFSDF', NULL, '1970-01-01', 1000, NULL, NULL, NULL, 50, NULL),
(43, 8457, 'new', '2018-06-14', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-16', '2018-09-02', 'yes', '2018-07-14', 'claimed', 'Main unit only', 'no power', '', '1970-01-01', 0, 0, 0, 0, 550, NULL),
(44, 8590, 'new', '2018-07-21', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-21', '2018-07-21', 'yes', '2018-09-02', 'claimed', 'Unit only w/ stand', 'Antenna port broken', '', '1970-01-01', 1000, 0, 0, 0, 0, NULL),
(45, 8547, 'new', '2018-07-12', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-20', '2018-07-21', 'yes', '2018-07-20', 'claimed', 'w/ PAL, No ac cord', 'No Picture', '', '1970-01-01', 1000, 0, 0, 0, 0, NULL),
(46, 8575, 'new', '2018-07-18', '1970-01-01', '1970-01-01', '2018-07-20', '1970-01-01', '2018-07-20', 'no', '1970-01-01', 'pull out', 'w/ bag and router adaptor', 'no display w/ power', '', '1970-01-01', 0, 0, 0, 0, 0, NULL),
(47, 8503, 'new', '2018-06-27', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-12', '2018-07-21', 'yes', '2018-09-02', 'claimed', 'Main unit only', 'Distorted Sound', '', '1970-01-01', 0, 0, 0, 0, 550, NULL),
(48, 8502, 'new', '2018-06-27', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-19', '2018-09-02', 'yes', '2018-09-02', 'claimed', 'Main unit only', 'no sound', '', '1970-01-01', 0, 0, 0, 0, 550, NULL),
(49, 8357, 'new', '2018-05-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-04', '2018-07-19', 'yes', '2018-07-19', 'claimed', 'Unit w/ stand- no PAL no adpator', 'no power', '', '1970-01-01', 1000, 0, 0, 155, -180, NULL),
(50, 8545, 'new', '2018-07-12', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-17', '2018-07-19', 'yes', '2018-07-10', 'claimed', 'Main unit only', 'no power', '', '1970-01-01', 2300, 0, 0, 0, 0, 395),
(51, 8357, 'new', '2018-05-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-09-02', '2018-09-02', 'yes', '2018-09-02', 'claimed', 'unit w/ stand - no Pal no adaptor', 'no power', '', '1970-01-01', 1000, 0, 0, 0, 0, 180),
(52, 8591, 'new', '2018-07-21', '1970-01-01', '1970-01-01', '2018-08-03', '2018-07-25', '2018-08-03', 'yes', '2018-07-26', 'pull out', '', 'dfgdgdg', '', '1970-01-01', 0, 0, 0, 0, 900, 0),
(53, 8586, 'new', '2018-07-20', '1970-01-01', '1970-01-01', '2018-07-20', '1970-01-01', '2018-07-20', 'yes', '2018-07-20', 'pull out', 'Main unit only', 'n/a', '', '1970-01-01', 0, 0, 0, 0, 0, 0),
(54, 8576, 'new', '2018-07-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-19', '2018-09-02', 'yes', '2018-07-19', 'claimed', 'w 2pcs bracket attach - no ac cord, no stand, no remote, no box', 'blue LED indicator only', '', '1970-01-01', 1800, 0, 0, 0, 0, 0),
(55, 8479, 'new', '2018-06-20', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-20', '2018-07-19', 'yes', '2018-07-18', 'claimed', 'Main unit only w/ disk', 'dire na play', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(56, 8647, 'new', '2018-08-09', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-15', '2018-08-31', 'yes', '2018-08-15', 'claimed', 'Main unit w/ stand - no AC cord, no PAL', 'w/ picture, no backlight', '', '1970-01-01', 2300, 0, 0, 0, 0, 0),
(57, 8595, 'new', '2018-07-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-11', '2018-08-31', 'yes', '2018-08-11', 'claimed', 'Main unit only, No mic. w/ power adaptor only', 'no power', '', '1970-01-01', 0, 0, 0, 0, 0, 0),
(58, 8708, 'new', '2018-08-27', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-29', '2018-08-31', 'yes', '2018-08-28', 'claimed', 'Main unit only q/ Haier box, no remote, no stand', 'No picture w/ sound', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(59, 8633, 'new', '2018-08-03', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-06', '2018-08-07', 'yes', '2018-08-06', 'claimed', 'Main unit only w/ stand', 'Switch Defect', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(62, 8587, 'new', '2018-07-21', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-01', '2018-08-07', 'yes', '2018-08-01', 'claimed', 'n/a', 'n/a', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(63, 8632, 'new', '2018-08-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-04', '2018-08-07', 'yes', '2018-08-04', 'claimed', 'n/a', 'n/a', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(64, 8512, 'new', '2018-07-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-16', '2018-08-03', 'yes', '2018-08-01', 'claimed', 'Main unit only', 'Left no sound', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(65, 8566, 'new', '2018-07-17', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-03', '2018-08-04', 'yes', '2018-08-03', 'claimed', 'Main unit only w/ stand, No ac cord', 'No bliking standby power', '', '1970-01-01', 3200, 0, 0, 0, 0, 63),
(66, 8607, 'new', '2018-07-26', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-03', '2018-08-04', 'yes', '2018-08-03', 'claimed', 'Main unit only', 'Destort sound when high volume', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(130, 8645, 'new', '2018-08-08', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-18', '2018-08-18', 'yes', '2018-08-18', 'claimed', 'Main unit only', 'no sounds', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(68, 8528, 'new', '2018-07-07', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-13', '2018-08-01', 'yes', '2018-07-18', 'claimed', 'Main unit only w/ stand', 'No picture / Green indicator', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(69, 8536, 'new', '2018-07-10', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-28', '2018-07-30', 'yes', '2018-07-28', 'claimed', 'stand attach only- no remote, no box, no bracelet', 'Weak sounds', '', '1970-01-01', 600, 0, 0, 0, 200, 0),
(70, 8544, 'new', '2018-07-12', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-18', '2018-07-19', 'yes', '2018-07-18', 'claimed', '-----NONE------', 'Standby power', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(71, 8571, 'new', '2018-07-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-27', '2018-07-31', 'yes', '2018-07-27', 'claimed', 'unit only', 'n/a', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(72, 8598, 'new', '2018-07-25', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-24', '2018-07-31', 'yes', '2018-07-24', 'claimed', 'Main unit only w/ stand', 'no picture, panel not tested', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(73, 8564, 'new', '2018-07-17', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-25', '2018-07-31', 'yes', '2018-07-31', 'claimed', 'Main unit only', 'no sounds', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(74, 8608, 'new', '2018-07-26', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-30', '2018-07-31', 'yes', '2018-07-30', 'claimed', 'Main unit only w/ stand', 'no power', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(75, 8565, 'new', '2018-07-17', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-17', '2018-07-31', 'yes', '2018-07-24', 'claimed', 'Main unit only w/ stand, No ac cord', 'No Picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(76, 8599, 'new', '2018-07-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-28', '2018-07-28', 'yes', '2018-07-28', 'claimed', 'Main Unit w/ bracket, no ac cord. no pal', 'No picture,  w/ sound', '', '1970-01-01', 2300, 0, 0, 0, 0, 0),
(77, 8491, 'new', '2018-06-23', '2018-07-03', '1970-01-01', '2018-07-28', '1970-01-01', '2018-07-28', 'yes', '2018-07-23', 'pull out', 'Main unit only w/ box', 'Standby power', '', '1970-01-01', 0, 0, 0, 0, 350, 0),
(78, 8481, 'new', '2018-06-21', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-18', '2018-07-27', 'yes', '2018-07-18', 'claimed', 'Main unit only no adaptor', 'no power', '', '1970-01-01', 850, 0, 0, 0, 0, 245),
(79, 8588, 'new', '2018-07-21', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-28', 'yes', '2018-07-26', 'claimed', 'Mic, power adaptor, 7 pins cord, Jack, no chip', 'Replace 7 pins cord', '', '1970-01-01', 550, 0, 0, 0, 0, 45),
(80, 8556, 'new', '2018-07-14', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-18', '2018-07-27', 'yes', '2018-07-18', 'claimed', 'stand attach only- no remote, no box, no bracelet', 'no power', '', '1970-01-01', 2000, 0, 0, 0, 1400, 600),
(81, 8450, 'new', '2018-06-16', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-26', '2018-07-27', 'yes', '2018-07-18', 'claimed', 'Main unit only w/ stand', 'Blue indicator', '', '1970-01-01', 500, 0, 0, 0, 0, 0),
(82, 8603, 'new', '2018-07-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-25', '2018-07-25', 'yes', '2018-07-25', 'claimed', 'Main unit w/ bracket screw', 'vertical line', '', '1970-01-01', 0, 0, 0, 0, 350, 0),
(83, 8560, 'new', '2018-07-16', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-25', '2018-07-26', 'yes', '2018-07-25', 'claimed', 'Main unit only', 'w/ power no picture', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(84, 8552, 'new', '2018-07-13', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-26', '2018-07-26', 'yes', '2018-07-26', 'claimed', 'Bracket screw, no pal', 'automatic deadset', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(85, 8579, 'new', '2018-07-19', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-28', '2018-07-28', 'yes', '2018-07-28', 'claimed', 'Main unit, only, no ac CORD, no pal, no stand ', 'no p', '', '1970-01-01', 500, 0, 0, 0, 0, 0),
(86, 8531, 'new', '2018-07-07', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-25', '2018-07-25', 'yes', '2018-07-25', 'claimed', 'Main unit only w/ stand', 'Gen check up', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(87, 8526, 'new', '2018-07-06', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-24', '2018-07-24', 'yes', '2018-07-24', 'claimed', 'unit only w/ stand', 'double image', '', '1970-01-01', 1800, 0, 0, 0, 0, 0),
(88, 8390, 'new', '2018-05-28', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-13', '2018-07-19', 'yes', '2018-07-13', 'claimed', 'Main unit only w/ stand', 'Def volted, napaso', '', '1970-01-01', 550, 0, 0, 0, 0, 30),
(89, 8551, 'new', '2018-07-13', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-17', '2018-07-24', 'yes', '2018-07-17', 'claimed', 'Main unit', 'Standby power', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(90, 8486, 'new', '2018-06-22', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-24', 'yes', '2018-07-23', 'claimed', 'Main unit only w/ stand', 'Channel', '', '1970-01-01', 2300, 0, 0, 0, 0, 95),
(91, 8570, 'new', '2018-07-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-24', '2018-07-25', 'yes', '2018-07-23', 'claimed', 'mic, ac adaptor, songbook, manual,RCA Adaptor, BlackBag', 'Auto video, the rest functional', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(92, 8428, 'new', '2018-06-07', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-14', '2018-07-24', 'yes', '2018-06-14', 'claimed', 'Main unit', 'w power, poor signal', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(93, 8555, 'new', '2018-07-14', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-23', '2018-07-27', 'yes', '2018-07-23', 'claimed', 'Main unit only', 'No display', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(94, 8414, 'new', '2018-06-04', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-11', '2018-07-18', 'yes', '2018-07-11', 'claimed', 'w/ stand attached', 'No Picture', '', '1970-01-01', 500, 0, 0, 0, 0, 0),
(95, 8532, 'new', '2018-07-09', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-11', '2018-07-13', 'yes', '2018-07-11', 'claimed', 'Main unit only', 'Auto power and sound', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(96, 8458, 'new', '2018-06-11', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-28', '2018-07-11', 'yes', '2018-07-03', 'claimed', 'Main unit only', 'No sound, no picture', '', '1970-01-01', 500, 0, 0, 0, 0, 0),
(97, 8211, 'new', '2018-04-12', '1970-01-01', '1970-01-01', '1970-01-01', '2018-05-28', '2018-05-31', 'yes', '2018-05-28', 'claimed', 'w/ stand', 'no power', '', '1970-01-01', 600, 0, 0, 0, 0, 0),
(98, 8183, 'new', '2018-04-07', '1970-01-01', '1970-01-01', '1970-01-01', '2018-04-12', '2018-04-20', 'yes', '2018-04-12', 'claimed', 'n/a', 'n/a', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(99, 8239, 'new', '2018-04-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-04-20', '2018-04-20', 'yes', '2018-04-20', 'claimed', 'w/ attach stand, no pal, ac cord', 'w/ power no picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(100, 8392, 'new', '2018-05-28', '1970-01-01', '1970-01-01', '1970-01-01', '2018-05-31', '2018-06-01', 'yes', '2018-05-31', 'claimed', 'Main unit only', 'w power, no picture', '', '1970-01-01', 1800, 0, 0, 0, 0, 300),
(101, 8249, 'new', '2018-04-19', '1970-01-01', '1970-01-01', '1970-01-01', '2018-04-20', '2018-04-23', 'yes', '2018-04-20', 'claimed', 'Main unit only w/ stand', 'no power', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(102, 8237, 'new', '2018-04-17', '1970-01-01', '1970-01-01', '1970-01-01', '2018-04-19', '2018-04-20', 'yes', '2018-04-19', 'claimed', 'Main unit w/ bracket', 'no power', '', '1970-01-01', 1000, 0, 0, 600, 0, 0),
(103, 8269, 'new', '2018-04-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-04-30', '2018-04-30', 'yes', '2018-04-30', 'claimed', 'Main unit only w/ stand', 'No power, order remote', '', '1970-01-01', 1800, 0, 0, 0, 0, 0),
(104, 8352, 'new', '2018-05-06', '1970-01-01', '1970-01-01', '1970-01-01', '2018-05-29', '2018-05-31', 'yes', '2018-05-29', 'claimed', 'Main unit only', 'Disk no fucniton, usb error', '', '1970-01-01', 950, 0, 0, 0, 0, 0),
(106, 7768, 'new', '2017-12-12', '1970-01-01', '1970-01-01', '1970-01-01', '2017-12-21', '2018-04-24', 'yes', '2017-12-08', 'claimed', 'unit only', 'deadset', '', '1970-01-01', 1000, 300, 0, 0, 0, 0),
(107, 8419, 'new', '2018-06-05', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-18', '2018-07-26', 'yes', '2018-07-18', 'claimed', 'Main unit w/ neck', 'Standby power', '', '1970-01-01', 500, 0, 0, 0, 0, 0),
(108, 8250, 'new', '2018-04-19', '1970-01-01', '1970-01-01', '1970-01-01', '2018-05-22', '2018-05-25', 'yes', '2018-05-22', 'claimed', 'Main unit only w/ stand', 'No picture w/ power', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(109, 8471, 'new', '2018-06-16', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-21', '2018-06-22', 'yes', '2018-06-21', 'claimed', 'Main unit only w/ neck', 'no power', '', '1970-01-01', 600, 0, 0, 0, 0, 0),
(110, 8289, 'new', '2018-04-28', '1970-01-01', '1970-01-01', '2018-06-19', '1970-01-01', '2018-06-19', 'yes', '2018-06-19', 'pull out', 'unit only', 'W/ power after 15mins auto off', '', '1970-01-01', 0, 0, 0, 0, 425, 0),
(111, 8459, 'new', '2018-06-25', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-21', '2018-06-25', 'yes', '2018-06-22', 'claimed', 'Main unit only w/ stand', 'No sound, no picture', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(112, 8405, 'new', '2018-05-31', '1970-01-01', '1970-01-01', '1970-01-01', '2018-05-31', '2018-07-23', 'yes', '2018-05-31', 'claimed', 'w/ stand attached', 'blue indicator, no picture', '', '1970-01-01', 1150, 0, 0, 0, 0, 0),
(113, 8621, 'new', '2018-07-30', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-30', '2018-08-22', 'yes', '2018-08-18', 'claimed', 'Main unit only', 'w/ power no picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(114, 8709, 'new', '2018-08-27', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-31', '2018-08-31', 'yes', '2018-08-31', 'claimed', 'Main unit only, no ac cord', 'n/a', '', '1970-01-01', 850, 0, 0, 0, 0, 0),
(115, 8602, 'new', '2018-07-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-10', '2018-08-21', 'yes', '2018-08-11', 'claimed', 'Main unit only w/ stand', 'deadset', '', '1970-01-01', 2300, 0, 0, 0, 0, 0),
(116, 8649, 'new', '2018-08-09', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-21', '2018-08-21', 'yes', '2018-08-21', 'claimed', 'Main unit only w/ box', 'no picture, panel not tested', '', '1970-01-01', 2300, 0, 0, 0, 0, 0),
(117, 8682, 'new', '2018-08-20', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-21', '2018-08-22', 'yes', '2018-08-21', 'claimed', 'Main unit, w/ stand, no ac CORD', 'Blinking Red', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(118, 8658, 'new', '2019-08-11', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-14', '2018-08-21', 'yes', '2018-08-21', 'claimed', 'Main unit only w/ stand', 'Blinking display', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(119, 8674, 'new', '2018-08-16', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-17', '2018-08-22', 'yes', '2018-08-17', 'claimed', 'Main unit only w/ stand', 'w/ power no picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(120, 8594, 'new', '2018-07-23', '2018-08-08', '1970-01-01', '1970-01-01', '2018-08-09', '2018-08-21', 'yes', '2018-08-21', 'claimed', '1 speaker on;y', 'usb board', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(121, 8686, 'new', '2018-08-21', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-22', '2018-08-23', 'yes', '2018-08-22', 'claimed', 'Main unit only', 'No sound right channel', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(122, 8219, 'new', '2018-04-13', '1970-01-01', '1970-01-01', '1970-01-01', '2018-04-13', '2018-08-23', 'yes', '2018-08-03', 'claimed', 'Main unit only, 2 MIC, w/ adaptor', 'w/ power no display', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(123, 8629, 'new', '2018-08-02', '1970-01-01', '1970-01-01', '2018-08-15', '2018-08-02', '2018-08-15', 'yes', '2018-08-15', 'pull out', '-----NONE------', 'w/ backlight, no picture', '', '1970-01-01', 0, 0, 0, 0, 350, 0),
(124, 8596, 'new', '2018-07-23', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-07', '2018-08-08', 'yes', '2018-08-07', 'claimed', 'Main unit only w/ stand and PAL', 'w/ power no picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(125, 8613, 'new', '2018-07-27', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-31', '2018-08-08', 'yes', '2018-08-02', 'claimed', 'Main unit only, no PAL, no ac cord, no stand', 'Picture off, auto menu', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(126, 8616, 'new', '2018-07-28', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-28', '2018-08-09', 'yes', '2018-08-04', 'claimed', 'Main unit only w/ stand', 'w/ picture, no backlight', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(127, 8639, 'new', '2018-08-07', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-07', '2018-08-20', 'yes', '2018-08-07', 'claimed', 'Main unit only', 'Panel Problem', '', '1970-01-01', 0, 0, 0, 0, 0, 0),
(128, 8660, 'new', '2018-08-11', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-11', '2018-08-20', 'yes', '2018-08-11', 'claimed', 'Main unit w/ bracket', 'half screen, vertical line', '', '1970-01-01', 0, 0, 0, 0, 350, 0),
(129, 8618, 'new', '2018-07-30', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-02', '2018-08-02', 'yes', '2018-08-02', 'claimed', 'Main unit only w/ stand', 'Auto volume and channel', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(131, 8662, 'new', '2018-08-10', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-16', '2018-08-16', 'yes', '2018-08-16', 'claimed', 'Main unit only w/ stand and PAL', 'n/a', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(132, 8580, 'new', '2018-07-19', '1970-01-01', '1970-01-01', '1970-01-01', '2018-09-04', '2018-09-04', 'yes', '2018-09-04', 'claimed', 'Main unit only', 'No picture,  w/ sound', '', '1970-01-01', 2300, 0, 0, 0, 0, 0),
(133, 8581, 'new', '2018-07-19', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-01', '2018-08-18', 'yes', '2018-07-25', 'claimed', 'Main unit only w/ box, No bracket', 'No picture after a while of viewing', '', '1970-01-01', 600, 0, 0, 0, 0, 0),
(134, 8572, 'new', '2018-07-18', '1970-01-01', '1970-01-01', '1970-01-01', '2018-09-04', '2018-09-04', 'yes', '2018-09-04', 'claimed', 'w/ stand attach only, no PAL, no ac cord, no remote, no bracket', 'double image w/ vertical line', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(135, 8634, 'new', '2018-08-04', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-04', '2018-08-17', 'yes', '2018-08-17', 'claimed', 'Main unit only', 'no power', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(136, 8672, 'new', '2018-08-14', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-16', '2018-08-17', 'yes', '2018-08-16', 'claimed', 'Main unit only w/ 4 knob', 'w/ sound no picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(137, 8524, 'new', '2018-07-06', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-10', '2018-07-10', 'yes', '2018-07-06', 'claimed', 'Main unit, w/ stand, no PAL no adaptor', 'Blinking red indicator', '', '1970-01-01', 800, 0, 0, 0, 0, 0),
(138, 8664, 'new', '2018-08-13', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-13', '2018-08-17', 'yes', '2018-08-13', 'claimed', 'Main unit only w/ stand', 'n/a', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(139, 8671, 'new', '2018-08-14', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-15', '2018-08-17', 'yes', '2018-08-16', 'claimed', 'Main unit only no ac cord', 'n/a', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(140, 8508, 'new', '2018-06-28', '1970-01-01', '1970-01-01', '1970-01-01', '2018-06-28', '2018-06-28', 'yes', '2018-06-28', 'claimed', 'Main unit only w/ bracket no stand', 'Auto off picture', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(141, 8561, 'new', '2018-07-16', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-16', '2018-07-17', 'yes', '2018-07-17', 'claimed', 'Main unit only w/ stand', 'w/ backlight', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(142, 8525, 'new', '2018-07-06', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-16', '2018-07-17', 'yes', '2018-07-16', 'claimed', 'unit only', 'no power', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(147, 8716, 'new', '2018-08-30', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-30', '2018-08-30', 'yes', '2018-08-30', 'claimed', 'Main unit only', 'Na drain', '', '1970-01-01', 550, 0, 0, 0, 0, 0),
(148, 8703, 'new', '2018-08-25', '1970-01-01', '1970-01-01', '1970-01-01', '2018-09-05', '2018-09-05', 'yes', '2018-09-05', 'claimed', 'Main unit only w/ stand, no adaptor no pal', 'no sound', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(149, 8678, 'new', '2018-08-17', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-27', '2018-08-27', 'yes', '2018-08-27', 'claimed', 'Main unit only w/ stand, no remote no adaptor', 'no power', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(150, 8677, 'new', '2018-08-17', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-23', '2018-08-28', 'yes', '2018-08-23', 'claimed', 'Main unit only no ac cord', 'n/a', '', '1970-01-01', 1000, 0, 0, 0, 0, 0),
(151, 8691, 'new', '2018-08-21', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-24', '2018-08-27', 'yes', '2018-08-24', 'claimed', 'Main unit. no stand no ac cord', 'Standby power', '', '1970-01-01', 1800, 0, 0, 0, 0, 200),
(152, 8158, 'new', '2018-04-02', '1970-01-01', '1970-01-01', '1970-01-01', '2018-05-07', '2018-08-24', 'yes', '2018-05-07', 'claimed', 'Main unit only w/ box', 'n/a', '', '1970-01-01', 2000, 0, 0, 0, 0, 0),
(153, 8697, 'new', '2018-08-22', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-22', '2018-08-24', 'yes', '2018-08-22', 'claimed', 'Main unit only', 'Gen check up', '', '1970-01-01', 1800, 0, 0, 0, 0, 75),
(154, 8622, 'new', '2018-07-31', '1970-01-01', '1970-01-01', '1970-01-01', '2018-07-31', '2018-08-24', 'yes', '2018-08-24', 'claimed', 'Main unit only', 'Gen check up', '', '1970-01-01', 0, 0, 0, 0, 0, 0),
(155, 8694, 'new', '2018-08-21', '1970-01-01', '1970-01-01', '1970-01-01', '2018-08-26', '2018-08-28', 'yes', '2018-08-27', 'claimed', 'Main unit only w/ stand no PAL', 'Blinking red indicator', '', '1970-01-01', 800, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unitinfo`
--

CREATE TABLE `unitinfo` (
  `uiid` bigint(20) NOT NULL,
  `uijonumber` bigint(20) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `serialno` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitinfo`
--

INSERT INTO `unitinfo` (`uiid`, `uijonumber`, `brand`, `model`, `serialno`) VALUES
(36, 85525, 'Media.com Amf', 'MC1-7004', '70CH201203100057'),
(35, 85525, 'Media.com DVD', 'MC1-320T Pro', 'MC13200120080502'),
(30, 8516, 'SONY 21CRT', 'KV-21VDR1', '101250'),
(32, 7668, 'Haier', 'LE48M600', 'DH1DB0B04032ZE6M0177'),
(28, 8306, 'PENSONIC LED 24', 'LED2416 DIAMOND CUT', 'V-140070314-LED2416-0042'),
(38, 85526, 'Sharp LED32', 'LC-21LE 150 M', '312714894'),
(40, 8549, 'SONY CRT LED', 'ST-21FIK', 'FeBA21'),
(42, 8451, 'TCL', '4D2900', '1608ADY125917A00087 '),
(46, 8546, 'Microwave', 'JE12870SPSS', 'RE025384'),
(45, 8546, 'Microwave', 'JE12870SPSS', 'RGO33594'),
(48, 8515, 'Toshiba', '32AVSUOE', '9734584'),
(50, 8514, 'konzert', 'KC-212', '131704135'),
(52, 8553, 'Samsung', '0a32E440038', '2383Aq'),
(54, 8540, 'Devant LCD', '320x850', '45055090904'),
(57, 8412, 'Devant 42"', '42DE850', '5040111032'),
(60, 8517, 'Haier 32" Led', 'LE32M600', '0325'),
(62, 8475, 'Samsung', 'CT2039A', 'N/A'),
(67, 8535, 'Toshiba 32LED', '32P1400VD', 'E408e3J0032281'),
(68, 8535, 'Toshiba 47', '47C2400UP', 'E309COJ00047G1'),
(70, 8300, 'Hisense 50"', '50022', 'HS101400232'),
(72, 7616, 'Devant 40"', '400l570', 'A0411400223'),
(74, 8385, 'LG', '42LB6500', '78463'),
(76, 8388, 'Sanyo', 'Le328000', 'BO790'),
(78, 8332, 'Lyric Organ', 'a300', '2016'),
(80, 7620, 'Hisense', '0022', '2eface'),
(82, 8344, 'Haier 24"', 'LE24B800', 'A0318'),
(328, 8415, 'Haier 32" LED TV', '32 M6A', 'T0079'),
(86, 8378, 'SAMSUNG LCD55', 'UA95CC900VR', '00940K'),
(332, 8296, 'Aowa Microwave', 'AW-3099', '05319'),
(90, 8360, 'SAMSUNG LED40', 'LA40D550K7R', '00008P'),
(93, 8402, 'PENASONIC', 'LED 3016', '0300'),
(95, 7981, 'PENSONIC DIAMOND CUT', 'LED3216', '3216-0831'),
(96, 8562, 'SDFSDF', 'SDFDSF', 'SDFDSF'),
(98, 8457, 'Whirlpool', 'MWX503ES', 'WG19036606'),
(100, 8590, 'Haier', 'LE32B9000', 'H1304'),
(104, 8547, 'LG', '32LM3410211', 'NWA2T521'),
(106, 8575, 'TOSHIBA LAPTOP', 'L755-55153', '2C13305lw'),
(109, 8503, 'DB-AUDIO', 'Set-502-18', 'n/a'),
(115, 8502, 'Xenon Brand', 'Pro-XA1240', 'n/a'),
(132, 8586, 'Sharp', 'CRT21', '4150'),
(127, 8357, 'Samsung CRT', 'CT21KML', 'LRXXTC'),
(129, 8545, 'Toshiba', '40L2400XP', '35N1'),
(126, 8357, 'Sanyo LCD 32"', '32K40', '2135'),
(157, 8512, 'DAI- ICHE AMP', 'DAV-845', '4IN'),
(134, 8576, 'Hisense 50"', '50D22', 'HSD51400293'),
(136, 8479, 'HDT DVD Player', 'Premier 98p pro(n)', 'n/a'),
(138, 8647, 'LG 42 LED', '421B5510', 'FOU122'),
(141, 8595, 'Extreme Magic Sing', 'ET23KR', 'n/A'),
(143, 8708, 'Devant 32"', '32OL540', 'A071501981'),
(145, 8633, 'Pensonic', 'LED2416 Diamond Cut', 'V-140070314-LED2416-0179'),
(155, 8632, 'Sanyo', 'ST14KH2', '13308821'),
(153, 8587, 'Samsung CRTV', 'K15D20V10', 'n/a'),
(159, 8566, 'Samsung 51 Plasma', 'P051E55CD112', 'C800080T'),
(161, 8607, 'Sakura Amplifier', 'AV-735UB', 'ED-T525442'),
(165, 8528, 'Pensonic 32" LED TV', 'LED -3227', '32277528/14'),
(169, 8536, 'Toshiba 47"', '47C2400UP', 'E309C0J0047GI'),
(168, 8536, 'AKAI 24" TOSHIA', 'Deface', 'Deface'),
(171, 8544, 'Devant', '24DL410', '60414021158'),
(173, 8571, 'Samsung', 'UA3F45C', 'LG000350B13001094'),
(175, 8598, 'Haier', 'LE32M600', 'DHIR20VO80-8D2E4R1347'),
(177, 8564, 'DB- Audio', 'n/a', 'n/a'),
(180, 8608, 'Philips', '32PHA409198', '01370'),
(182, 8565, 'Samsung 32" LED TV', 'UA32F6300', 'B00293A'),
(184, 8599, 'Samsung', 'VA40F5500AR', '50060LK'),
(187, 8491, 'DRDMAC', 'LCDYY325IMS', '10559922'),
(189, 8481, 'Sony Player', 'HBD-TZ140', '4115557'),
(191, 8588, 'Wow magic Sing', 'n/a', 'n/a'),
(193, 8556, 'Haier 50" LED', 'LE50B7000', 'DHILI90D0602HBE870079'),
(195, 8450, 'DEVANT 24"', '24MEL420', 'B02120366'),
(197, 8603, 'Haier 50"', 'LE0B7000', '760494'),
(199, 8560, 'Sharp', '21V-L70M', '30103055'),
(201, 8552, 'Sanyo 32"', 'LCD32K40', '1146265'),
(203, 8579, 'Samsung', 'nit 32F54', '520A1C'),
(205, 8531, 'TCL 24"', 'LED2402700', 'A00218'),
(207, 8526, 'Devant', '5061510', 'Deface'),
(209, 8390, 'Pro-Xagoi Xenon', 'PRO-X4601', '101012'),
(211, 8551, 'Sharp CRT', '21V-FR200M', '40292513'),
(213, 8486, 'Sanyo LCF 42', 'LCD 42510-HD', '18401074'),
(215, 8570, 'Magic Sing', 'ET25R', 'n/a'),
(217, 8428, 'Philips CRT', 'SV000502', 'n/a'),
(219, 8555, 'Haier', 'L32e360', 'XOC36'),
(221, 8414, 'DEVANT LED TV', '32DL410', 'CO71404073'),
(223, 8532, 'JBC CRT', 'JC- 140900V', 'n/a'),
(227, 8458, 'DEVANT', '32DL410', 'n/a'),
(229, 8211, 'Skyworth', '19E78', 'SPH310085000147'),
(231, 8183, 'Sakura Amp', 'AV-735', '7299'),
(233, 8239, 'Pensonic LED TV', 'TH-L32B6X', 'MEZ1121514'),
(235, 8392, 'DEVANT', '48DL410', '0403'),
(237, 8249, 'Samsung', 'LA22F55000R', '50813'),
(239, 8237, 'Samsung', 'ZA3ZEH4003RYYD', '1179F'),
(241, 8269, 'DEVANT', '39DL140', '30660'),
(244, 8352, 'JVL', 'CA-DV010', '06300142'),
(246, 7768, 'DEVANT CRT', '32GL510', 'A03141000'),
(248, 8419, 'DEVANT 29" LED', '29IL300', '29IL300V08130421'),
(250, 8250, 'Luloms', 'TE320CP', '1080'),
(252, 8471, 'XTREME', 'LED1998', '00267'),
(254, 8289, 'Samsung', 'MX-HS8000', 'OAN1612GA002707'),
(256, 8459, 'PENSONIC', 'LED3216 Diamond Cut', 'n/a'),
(258, 8405, 'DEVANT', '40DL520', 'A041400592'),
(260, 8621, 'Samyo LED 32', 'L32C300A', 'A2325'),
(262, 8709, 'Pioneer', 'XV-HT05', '1537DB'),
(264, 8602, 'Xtreme LEDTV', 'XT-LED4298', '1420008'),
(266, 8649, 'Samsung', 'UA4011630OAR', '0A40H6300XRXXP'),
(268, 8682, 'TCL 29 LED', 'LED29E4200', 'B-0061'),
(270, 8658, 'Changhang LCD 24', 'LT246994', 'n/a'),
(272, 8674, 'Pensonic LED 32', '3237', '3227710942/14'),
(274, 8594, 'ACE Speaker', 'n/a', 'n/a'),
(276, 8686, 'Xenon Karaoke Amplifier', 'PRO-XA84OF', 'n/a'),
(278, 8219, 'Magic Sing', 'ET23KH', 'CASH23HB00372'),
(281, 8629, 'Philips 50"', 'PFA45095198', '2014'),
(283, 8596, 'Toshiba LED 32', '32PU20ED', '0073946'),
(285, 8613, 'Philips LED TV', '24DAA430/98', 'AUB1818065'),
(287, 8616, 'DEVANT 48" LED', '48DL410', 'n/a'),
(289, 8639, 'DEVANT', '32G1510', 'A051400447'),
(291, 8660, 'Samsung', 'LAADBH500', '571X'),
(293, 8618, 'TCL', 'LEDD32B-350', 'B-C055'),
(295, 8645, 'Sakura Amp', 'AV-3032', 'n/a'),
(298, 8662, 'TCL', 'LED32B2610', '140ALY1155IF-02011'),
(300, 8580, 'Skyworth 40"', '40E361', '140060PP00544'),
(302, 8581, 'MyView', '19EX200F', 'RIE459EX200F2015062380'),
(304, 8572, 'Sony 32" LCD', 'ILV-32BX350', '2001806'),
(306, 8634, 'Sony CRT', 'RV-PF2IN70', '10C276'),
(308, 8672, 'Pecster LED 32', '32D900k', 'KC32B0445'),
(310, 8524, 'Sanyo LCD 24"', 'LCD-24K40', '1055275309171181456'),
(312, 8664, 'S Syntxa', 'SLK-32781', '04411012-11150'),
(315, 8671, 'Kevler Speaker', 'EON-15A', '1545'),
(316, 8671, 'Speaker', 'MS912', '995'),
(318, 8508, 'Skyworth 32"', '32E3000', '1602064PP00172'),
(320, 8561, 'Sharp LED 32', 'LC-32LE150M', '321714894'),
(324, 8525, 'Media.com DVD', 'MC1-3200 Pro', 'MC132001200080502'),
(323, 8525, 'Media.com Amplifier', 'MC1-7004', '70011201203100057'),
(326, 8465, 'DEVANT', '320410', '93369'),
(330, 8383, 'Samsung LCD 32', 'UA32EH4003R', '004151'),
(334, 8716, 'Panasonic Washing', 'NA-W751703', '812533921'),
(336, 8703, 'Philips', '32P11A41001018', '01417'),
(338, 8678, 'Toshiba 29', '29PB200E', 'J0002241'),
(340, 8677, 'Skyworth 32', '32F3300', 'PP00736'),
(342, 8691, 'DEVANT 50"', '50DE500', '0876'),
(346, 8158, 'Panasonic 32 LED TV', 'TH-32D3005', 'S000923'),
(345, 8158, 'LG 32 LED', '32DB552A', 'KB049'),
(348, 8697, 'DEVANT', 'A8LTV700', '01638'),
(350, 8717, 'DB Audio Amp', 'SA502-18', '1905'),
(352, 8694, 'Sharp 24" LED', 'LC24LE155M', '508788895');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `nickname`) VALUES
(1, 'user', 'user', 'admin'),
(2, 'tacloban', 'chronicle', 'admin2'),
(5, 'test', 'test', 'admin5');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_joborderunitinfo`
--
CREATE TABLE `vw_joborderunitinfo` (
`jonumber` bigint(20)
,`custname` varchar(255)
,`address` varchar(255)
,`telno` varchar(255)
,`servicetype` varchar(50)
,`warrantyinfo` varchar(50)
,`otherinfo` varchar(255)
,`uiid` bigint(20)
,`uijonumber` bigint(20)
,`brand` varchar(255)
,`model` varchar(255)
,`serialno` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_jotrans`
--
CREATE TABLE `vw_jotrans` (
`jonumber` bigint(20)
,`custname` varchar(255)
,`address` varchar(255)
,`telno` varchar(255)
,`servicetype` varchar(50)
,`warrantyinfo` varchar(50)
,`otherinfo` varchar(255)
,`uiid` bigint(20)
,`uijonumber` bigint(20)
,`brand` varchar(255)
,`model` varchar(255)
,`serialno` varchar(255)
,`transid` bigint(20)
,`transjonumber` bigint(20)
,`transtype` varchar(20)
,`jodate` date
,`jodiagnosed` date
,`jorepair` date
,`jopullout` date
,`jorepaired` date
,`jodateout` date
,`customerinformed` varchar(10)
,`cidate` date
,`repairaction` varchar(100)
,`accessories` varchar(255)
,`complain` varchar(255)
,`dealer` varchar(255)
,`datepurchase` date
,`labor` double
,`transportation` double
,`shippingcost` double
,`othercharges` double
,`checkupfee` double
,`discount` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_jotranspay`
--
CREATE TABLE `vw_jotranspay` (
`paymentid` bigint(20)
,`paytransid` bigint(20)
,`article` varchar(100)
,`payamount` double
,`paydate` date
,`jonumber` bigint(20)
,`custname` varchar(255)
,`address` varchar(255)
,`telno` varchar(255)
,`servicetype` varchar(50)
,`warrantyinfo` varchar(50)
,`otherinfo` varchar(255)
,`uiid` bigint(20)
,`uijonumber` bigint(20)
,`brand` varchar(255)
,`model` varchar(255)
,`serialno` varchar(255)
,`transid` bigint(20)
,`transjonumber` bigint(20)
,`transtype` varchar(20)
,`jodate` date
,`jodiagnosed` date
,`jorepair` date
,`jopullout` date
,`jorepaired` date
,`jodateout` date
,`customerinformed` varchar(10)
,`cidate` date
,`repairaction` varchar(100)
,`accessories` varchar(255)
,`complain` varchar(255)
,`dealer` varchar(255)
,`datepurchase` date
,`labor` double
,`transportation` double
,`shippingcost` double
,`othercharges` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_maxtrans`
--
CREATE TABLE `vw_maxtrans` (
`transmaxjonumber` bigint(20)
,`transmax` bigint(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_mtall`
--
CREATE TABLE `vw_mtall` (
`transmaxjonumber` bigint(20)
,`transmax` bigint(20)
,`transid` bigint(20)
,`transjonumber` bigint(20)
,`transtype` varchar(20)
,`jodate` date
,`jodiagnosed` date
,`jorepair` date
,`jopullout` date
,`jorepaired` date
,`jodateout` date
,`customerinformed` varchar(10)
,`cidate` date
,`repairaction` varchar(100)
,`accessories` varchar(255)
,`complain` varchar(255)
,`dealer` varchar(255)
,`datepurchase` date
,`labor` double
,`transportation` double
,`shippingcost` double
,`othercharges` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_mtalljo`
--
CREATE TABLE `vw_mtalljo` (
`jonumber` bigint(20)
,`custname` varchar(255)
,`address` varchar(255)
,`telno` varchar(255)
,`servicetype` varchar(50)
,`warrantyinfo` varchar(50)
,`otherinfo` varchar(255)
,`transmaxjonumber` bigint(20)
,`transmax` bigint(20)
,`transid` bigint(20)
,`transjonumber` bigint(20)
,`transtype` varchar(20)
,`jodate` date
,`jodiagnosed` date
,`jorepair` date
,`jopullout` date
,`jorepaired` date
,`jodateout` date
,`customerinformed` varchar(10)
,`cidate` date
,`repairaction` varchar(100)
,`accessories` varchar(255)
,`complain` varchar(255)
,`dealer` varchar(255)
,`datepurchase` date
,`labor` double
,`transportation` double
,`shippingcost` double
,`othercharges` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_mtalljounit`
--
CREATE TABLE `vw_mtalljounit` (
`jonumber` bigint(20)
,`custname` varchar(255)
,`address` varchar(255)
,`telno` varchar(255)
,`servicetype` varchar(50)
,`warrantyinfo` varchar(50)
,`otherinfo` varchar(255)
,`transmaxjonumber` bigint(20)
,`transmax` bigint(20)
,`transid` bigint(20)
,`transjonumber` bigint(20)
,`transtype` varchar(20)
,`jodate` date
,`jodiagnosed` date
,`jorepair` date
,`jopullout` date
,`jorepaired` date
,`jodateout` date
,`customerinformed` varchar(10)
,`cidate` date
,`repairaction` varchar(100)
,`accessories` varchar(255)
,`complain` varchar(255)
,`dealer` varchar(255)
,`datepurchase` date
,`labor` double
,`transportation` double
,`shippingcost` double
,`othercharges` double
,`uiid` bigint(20)
,`uijonumber` bigint(20)
,`brand` varchar(255)
,`model` varchar(255)
,`serialno` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_joborderunitinfo`
--
DROP TABLE IF EXISTS `vw_joborderunitinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_joborderunitinfo`  AS  select `joborder`.`jonumber` AS `jonumber`,`joborder`.`custname` AS `custname`,`joborder`.`address` AS `address`,`joborder`.`telno` AS `telno`,`joborder`.`servicetype` AS `servicetype`,`joborder`.`warrantyinfo` AS `warrantyinfo`,`joborder`.`otherinfo` AS `otherinfo`,`unitinfo`.`uiid` AS `uiid`,`unitinfo`.`uijonumber` AS `uijonumber`,`unitinfo`.`brand` AS `brand`,`unitinfo`.`model` AS `model`,`unitinfo`.`serialno` AS `serialno` from (`joborder` join `unitinfo` on((`joborder`.`jonumber` = `unitinfo`.`uijonumber`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_jotrans`
--
DROP TABLE IF EXISTS `vw_jotrans`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_jotrans`  AS  select `vw_joborderunitinfo`.`jonumber` AS `jonumber`,`vw_joborderunitinfo`.`custname` AS `custname`,`vw_joborderunitinfo`.`address` AS `address`,`vw_joborderunitinfo`.`telno` AS `telno`,`vw_joborderunitinfo`.`servicetype` AS `servicetype`,`vw_joborderunitinfo`.`warrantyinfo` AS `warrantyinfo`,`vw_joborderunitinfo`.`otherinfo` AS `otherinfo`,`vw_joborderunitinfo`.`uiid` AS `uiid`,`vw_joborderunitinfo`.`uijonumber` AS `uijonumber`,`vw_joborderunitinfo`.`brand` AS `brand`,`vw_joborderunitinfo`.`model` AS `model`,`vw_joborderunitinfo`.`serialno` AS `serialno`,`transaction`.`transid` AS `transid`,`transaction`.`transjonumber` AS `transjonumber`,`transaction`.`transtype` AS `transtype`,`transaction`.`jodate` AS `jodate`,`transaction`.`jodiagnosed` AS `jodiagnosed`,`transaction`.`jorepair` AS `jorepair`,`transaction`.`jopullout` AS `jopullout`,`transaction`.`jorepaired` AS `jorepaired`,`transaction`.`jodateout` AS `jodateout`,`transaction`.`customerinformed` AS `customerinformed`,`transaction`.`cidate` AS `cidate`,`transaction`.`repairaction` AS `repairaction`,`transaction`.`accessories` AS `accessories`,`transaction`.`complain` AS `complain`,`transaction`.`dealer` AS `dealer`,`transaction`.`datepurchase` AS `datepurchase`,`transaction`.`labor` AS `labor`,`transaction`.`transportation` AS `transportation`,`transaction`.`shippingcost` AS `shippingcost`,`transaction`.`othercharges` AS `othercharges`,`transaction`.`checkupfee` AS `checkupfee`,`transaction`.`discount` AS `discount` from (`vw_joborderunitinfo` join `transaction` on((`vw_joborderunitinfo`.`jonumber` = `transaction`.`transjonumber`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_jotranspay`
--
DROP TABLE IF EXISTS `vw_jotranspay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_jotranspay`  AS  select `payments`.`paymentid` AS `paymentid`,`payments`.`paytransid` AS `paytransid`,`payments`.`article` AS `article`,`payments`.`payamount` AS `payamount`,`payments`.`paydate` AS `paydate`,`vw_jotrans`.`jonumber` AS `jonumber`,`vw_jotrans`.`custname` AS `custname`,`vw_jotrans`.`address` AS `address`,`vw_jotrans`.`telno` AS `telno`,`vw_jotrans`.`servicetype` AS `servicetype`,`vw_jotrans`.`warrantyinfo` AS `warrantyinfo`,`vw_jotrans`.`otherinfo` AS `otherinfo`,`vw_jotrans`.`uiid` AS `uiid`,`vw_jotrans`.`uijonumber` AS `uijonumber`,`vw_jotrans`.`brand` AS `brand`,`vw_jotrans`.`model` AS `model`,`vw_jotrans`.`serialno` AS `serialno`,`vw_jotrans`.`transid` AS `transid`,`vw_jotrans`.`transjonumber` AS `transjonumber`,`vw_jotrans`.`transtype` AS `transtype`,`vw_jotrans`.`jodate` AS `jodate`,`vw_jotrans`.`jodiagnosed` AS `jodiagnosed`,`vw_jotrans`.`jorepair` AS `jorepair`,`vw_jotrans`.`jopullout` AS `jopullout`,`vw_jotrans`.`jorepaired` AS `jorepaired`,`vw_jotrans`.`jodateout` AS `jodateout`,`vw_jotrans`.`customerinformed` AS `customerinformed`,`vw_jotrans`.`cidate` AS `cidate`,`vw_jotrans`.`repairaction` AS `repairaction`,`vw_jotrans`.`accessories` AS `accessories`,`vw_jotrans`.`complain` AS `complain`,`vw_jotrans`.`dealer` AS `dealer`,`vw_jotrans`.`datepurchase` AS `datepurchase`,`vw_jotrans`.`labor` AS `labor`,`vw_jotrans`.`transportation` AS `transportation`,`vw_jotrans`.`shippingcost` AS `shippingcost`,`vw_jotrans`.`othercharges` AS `othercharges` from (`payments` join `vw_jotrans` on((`payments`.`paytransid` = `vw_jotrans`.`transid`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_maxtrans`
--
DROP TABLE IF EXISTS `vw_maxtrans`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_maxtrans`  AS  select `transaction`.`transjonumber` AS `transmaxjonumber`,max(`transaction`.`transid`) AS `transmax` from `transaction` group by `transaction`.`transjonumber` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_mtall`
--
DROP TABLE IF EXISTS `vw_mtall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_mtall`  AS  select `vw_maxtrans`.`transmaxjonumber` AS `transmaxjonumber`,`vw_maxtrans`.`transmax` AS `transmax`,`transaction`.`transid` AS `transid`,`transaction`.`transjonumber` AS `transjonumber`,`transaction`.`transtype` AS `transtype`,`transaction`.`jodate` AS `jodate`,`transaction`.`jodiagnosed` AS `jodiagnosed`,`transaction`.`jorepair` AS `jorepair`,`transaction`.`jopullout` AS `jopullout`,`transaction`.`jorepaired` AS `jorepaired`,`transaction`.`jodateout` AS `jodateout`,`transaction`.`customerinformed` AS `customerinformed`,`transaction`.`cidate` AS `cidate`,`transaction`.`repairaction` AS `repairaction`,`transaction`.`accessories` AS `accessories`,`transaction`.`complain` AS `complain`,`transaction`.`dealer` AS `dealer`,`transaction`.`datepurchase` AS `datepurchase`,`transaction`.`labor` AS `labor`,`transaction`.`transportation` AS `transportation`,`transaction`.`shippingcost` AS `shippingcost`,`transaction`.`othercharges` AS `othercharges` from (`vw_maxtrans` join `transaction` on((`vw_maxtrans`.`transmax` = `transaction`.`transid`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_mtalljo`
--
DROP TABLE IF EXISTS `vw_mtalljo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_mtalljo`  AS  select `joborder`.`jonumber` AS `jonumber`,`joborder`.`custname` AS `custname`,`joborder`.`address` AS `address`,`joborder`.`telno` AS `telno`,`joborder`.`servicetype` AS `servicetype`,`joborder`.`warrantyinfo` AS `warrantyinfo`,`joborder`.`otherinfo` AS `otherinfo`,`vw_mtall`.`transmaxjonumber` AS `transmaxjonumber`,`vw_mtall`.`transmax` AS `transmax`,`vw_mtall`.`transid` AS `transid`,`vw_mtall`.`transjonumber` AS `transjonumber`,`vw_mtall`.`transtype` AS `transtype`,`vw_mtall`.`jodate` AS `jodate`,`vw_mtall`.`jodiagnosed` AS `jodiagnosed`,`vw_mtall`.`jorepair` AS `jorepair`,`vw_mtall`.`jopullout` AS `jopullout`,`vw_mtall`.`jorepaired` AS `jorepaired`,`vw_mtall`.`jodateout` AS `jodateout`,`vw_mtall`.`customerinformed` AS `customerinformed`,`vw_mtall`.`cidate` AS `cidate`,`vw_mtall`.`repairaction` AS `repairaction`,`vw_mtall`.`accessories` AS `accessories`,`vw_mtall`.`complain` AS `complain`,`vw_mtall`.`dealer` AS `dealer`,`vw_mtall`.`datepurchase` AS `datepurchase`,`vw_mtall`.`labor` AS `labor`,`vw_mtall`.`transportation` AS `transportation`,`vw_mtall`.`shippingcost` AS `shippingcost`,`vw_mtall`.`othercharges` AS `othercharges` from (`joborder` join `vw_mtall` on((`joborder`.`jonumber` = `vw_mtall`.`transjonumber`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_mtalljounit`
--
DROP TABLE IF EXISTS `vw_mtalljounit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_mtalljounit`  AS  select `vw_mtalljo`.`jonumber` AS `jonumber`,`vw_mtalljo`.`custname` AS `custname`,`vw_mtalljo`.`address` AS `address`,`vw_mtalljo`.`telno` AS `telno`,`vw_mtalljo`.`servicetype` AS `servicetype`,`vw_mtalljo`.`warrantyinfo` AS `warrantyinfo`,`vw_mtalljo`.`otherinfo` AS `otherinfo`,`vw_mtalljo`.`transmaxjonumber` AS `transmaxjonumber`,`vw_mtalljo`.`transmax` AS `transmax`,`vw_mtalljo`.`transid` AS `transid`,`vw_mtalljo`.`transjonumber` AS `transjonumber`,`vw_mtalljo`.`transtype` AS `transtype`,`vw_mtalljo`.`jodate` AS `jodate`,`vw_mtalljo`.`jodiagnosed` AS `jodiagnosed`,`vw_mtalljo`.`jorepair` AS `jorepair`,`vw_mtalljo`.`jopullout` AS `jopullout`,`vw_mtalljo`.`jorepaired` AS `jorepaired`,`vw_mtalljo`.`jodateout` AS `jodateout`,`vw_mtalljo`.`customerinformed` AS `customerinformed`,`vw_mtalljo`.`cidate` AS `cidate`,`vw_mtalljo`.`repairaction` AS `repairaction`,`vw_mtalljo`.`accessories` AS `accessories`,`vw_mtalljo`.`complain` AS `complain`,`vw_mtalljo`.`dealer` AS `dealer`,`vw_mtalljo`.`datepurchase` AS `datepurchase`,`vw_mtalljo`.`labor` AS `labor`,`vw_mtalljo`.`transportation` AS `transportation`,`vw_mtalljo`.`shippingcost` AS `shippingcost`,`vw_mtalljo`.`othercharges` AS `othercharges`,`unitinfo`.`uiid` AS `uiid`,`unitinfo`.`uijonumber` AS `uijonumber`,`unitinfo`.`brand` AS `brand`,`unitinfo`.`model` AS `model`,`unitinfo`.`serialno` AS `serialno` from (`vw_mtalljo` join `unitinfo` on((`vw_mtalljo`.`jonumber` = `unitinfo`.`uijonumber`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joborder`
--
ALTER TABLE `joborder`
  ADD PRIMARY KEY (`jonumber`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `repairdetail`
--
ALTER TABLE `repairdetail`
  ADD PRIMARY KEY (`rdid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transid`);

--
-- Indexes for table `unitinfo`
--
ALTER TABLE `unitinfo`
  ADD PRIMARY KEY (`uiid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1940;
--
-- AUTO_INCREMENT for table `repairdetail`
--
ALTER TABLE `repairdetail`
  MODIFY `rdid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `unitinfo`
--
ALTER TABLE `unitinfo`
  MODIFY `uiid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
