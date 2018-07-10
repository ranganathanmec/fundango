-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2018 at 02:19 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpaynthe_sacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan_6thto8th`
--

CREATE TABLE `lesson_plan_6thto8th` (
  `lp_id` int(11) NOT NULL,
  `planclass` varchar(200) NOT NULL,
  `class` int(11) NOT NULL,
  `group_size` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `topics` varchar(200) NOT NULL,
  `date_duration` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `concept` varchar(200) NOT NULL,
  `learning_outcome` varchar(200) NOT NULL,
  `assessment_evidence` varchar(200) NOT NULL,
  `paradigm` varchar(200) NOT NULL,
  `teaching_style` varchar(200) NOT NULL,
  `learning_style` varchar(200) NOT NULL,
  `teaching_strategey` varchar(200) NOT NULL,
  `learning_techniques` varchar(200) NOT NULL,
  `teaching_techniques` varchar(200) NOT NULL,
  `learning_tools` varchar(200) NOT NULL,
  `teaching_skills` varchar(200) NOT NULL,
  `specific_skills` varchar(200) NOT NULL,
  `ict_integration` varchar(200) NOT NULL,
  `learning_plan` varchar(200) NOT NULL,
  `learning_object` varchar(200) NOT NULL,
  `motivation` varchar(200) NOT NULL,
  `teach_act1` text NOT NULL,
  `stud_act1` text NOT NULL,
  `assessment1` text NOT NULL,
  `ln_mat1` text NOT NULL,
  `teach_act2` text NOT NULL,
  `stud_act2` text NOT NULL,
  `assessment2` text NOT NULL,
  `ln_mat2` text NOT NULL,
  `teach_act3` text NOT NULL,
  `stud_act3` text NOT NULL,
  `assessment3` text NOT NULL,
  `ln_mat3` text NOT NULL,
  `teach_act4` text NOT NULL,
  `stud_act4` text NOT NULL,
  `assessment4` text NOT NULL,
  `ln_mat4` text NOT NULL,
  `teach_act5` text NOT NULL,
  `stud_act5` text NOT NULL,
  `assessment5` text NOT NULL,
  `ln_mat5` text NOT NULL,
  `activities` varchar(200) NOT NULL,
  `presentation` varchar(200) NOT NULL,
  `closure` varchar(200) NOT NULL,
  `lpvalues` varchar(200) NOT NULL,
  `pre_lession_activity` varchar(200) NOT NULL,
  `post_lession_activity` varchar(200) NOT NULL,
  `adaptation` varchar(200) NOT NULL,
  `extensions` varchar(200) NOT NULL,
  `elements` varchar(200) NOT NULL,
  `assignments` varchar(200) NOT NULL,
  `resources` varchar(200) NOT NULL,
  `lpreferences` varchar(200) NOT NULL,
  `add_info` text NOT NULL,
  `plan_date` varchar(200) NOT NULL,
  `plan_updation_date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `sub_title` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `sub_title`) VALUES
(1, 'english'),
(2, 'tamil'),
(3, 'hindi'),
(4, 'maths'),
(5, 'evs'),
(6, 'french'),
(7, 'science'),
(8, 'social science'),
(9, 'l2-tamil'),
(10, 'l2-hindi'),
(11, 'l2-french'),
(12, 'l3-tamil'),
(13, 'l3-hindi'),
(14, 'l3-french'),
(15, 'physics'),
(16, 'chemistry'),
(17, 'biology'),
(18, 'computer science'),
(19, 'accountancy'),
(20, 'business studies'),
(21, 'economics'),
(22, 'mass media1'),
(23, 'mass media2'),
(24, 'Library');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `staff_type` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `campus` varchar(200) NOT NULL,
  `prefix` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`staff_id`, `staff_name`, `staff_type`, `class`, `subject`, `campus`, `prefix`, `first_name`, `last_name`, `emailid`, `phone`, `username`, `password`, `status`, `reg_date`) VALUES
(1, 'Admin', 'admin', '', '', '', '', 'Super', 'Admin', 'thanthoni@lokas.in', '', 'adminayn', '7df77e699923d1e16217ebdbb822ea05', 1, '2018-06-14 08:13:04'),
(2, '', '', 'kg', 'english', '', '', '', '', '', '', 'aynkg-english', '164ecee026abce724814e11c12180640', 0, '2018-06-14 07:15:39'),
(3, '', '', 'kg', 'tamil', '', '', '', '', '', '', 'aynkg-tamil', '9e7879e8daf75cfa873b285e1fd11ea6', 0, '2018-06-14 07:15:39'),
(4, '', '', 'kg', 'hindi', '', '', '', '', '', '', 'aynkg-hindi', 'fe62da4e168506f3476c09b716ea94ff', 0, '2018-06-14 07:15:39'),
(5, '', '', 'kg', 'maths', '', '', '', '', '', '', 'aynkg-maths', 'e0ad3fe0b21c6062c1ea5e915bca2d2a', 0, '2018-06-14 07:15:39'),
(6, '', '', 'kg', 'evs', '', '', '', '', '', '', 'aynkg-evs', '633eebe5fc1505fec3595d7dfd0dbf7e', 0, '2018-06-14 07:15:39'),
(7, '', '', '1', 'english', '', '', '', '', '', '', 'aynclass1-english', '8dc651c4de844a653b5ab088c5d8988d', 0, '2018-06-14 07:15:39'),
(8, '', '', '1', 'tamil', '', '', '', '', '', '', 'aynclass1-tamil', '3cd803acaa011c8b0c5378d97eba8762', 0, '2018-06-14 07:15:39'),
(9, '', '', '1', 'hindi', '', '', '', '', '', '', 'aynclass1-hindi', 'fda9268b013e594deaf35ffa7a67b413', 0, '2018-06-14 07:15:39'),
(10, '', '', '1', 'maths', '', '', '', '', '', '', 'aynclass1-maths', '2c7e39aaf8b28325bf39fb8f84eab5d2', 0, '2018-06-14 07:15:39'),
(11, '', '', '1', 'evs', '', '', '', '', '', '', 'aynclass1-evs', '9902abeb8f2dc990b46e4f9e2e98994f', 0, '2018-06-14 07:15:39'),
(12, '', '', '2', 'english', '', '', '', '', '', '', 'aynclass2-english', 'd320f082e28ec4bbf96dcd9cba010234', 0, '2018-06-14 07:15:39'),
(13, '', '', '2', 'tamil', '', '', '', '', '', '', 'aynclass2-tamil', '1563df400d080be01a3d78cec3e340f4', 0, '2018-06-14 07:15:39'),
(14, '', '', '2', 'hindi', '', '', '', '', '', '', 'aynclass2-hindi', '6a481ffe84587e9c4b2db7b727d810f4', 0, '2018-06-14 07:15:39'),
(15, '', '', '2', 'maths', '', '', '', '', '', '', 'aynclass2-maths', '8f3d8e9e9fdc77c2e79687cf7bb87327', 0, '2018-06-14 07:15:39'),
(16, '', '', '2', 'evs', '', '', '', '', '', '', 'aynclass2-evs', 'b72ce22d23df58ce8241ee0a7b4608ed', 0, '2018-06-14 07:15:39'),
(17, '', '', '3', 'english', '', '', '', '', '', '', 'aynclass3-english', 'ea3966180d8dbec8f2860c3dc0ba607b', 0, '2018-06-14 07:15:39'),
(18, '', '', '3', 'tamil', '', '', '', '', '', '', 'aynclass3-tamil', '2d13ddeee987f94b681b7ba866aa50c1', 0, '2018-06-14 07:15:39'),
(19, '', '', '3', 'hindi', '', '', '', '', '', '', 'aynclass3-hindi', '2db6c6ab20fbe0a78158719160df5a74', 0, '2018-06-14 07:15:39'),
(20, '', '', '3', 'maths', '', '', '', '', '', '', 'aynclass3-maths', '5987777ba5e665487d6eadb696727bd0', 0, '2018-06-14 07:15:39'),
(21, '', '', '3', 'evs', '', '', '', '', '', '', 'aynclass3-evs', 'a9ad5ee1e5eecdb1408fb7c8b2c1529a', 0, '2018-06-14 07:15:39'),
(22, '', '', '4', 'english', '', '', '', '', '', '', 'aynclass4-english', 'e69184c3a37c74acc1267b077354a52c', 0, '2018-06-14 07:15:39'),
(23, '', '', '4', 'tamil', '', '', '', '', '', '', 'aynclass4-tamil', '66022bc28c1ca262bea019655553295a', 0, '2018-06-14 07:15:39'),
(24, '', '', '4', 'hindi', '', '', '', '', '', '', 'aynclass4-hindi', 'daeab16a2479eb12ec02ad755dd5643c', 0, '2018-06-14 07:15:39'),
(25, '', '', '4', 'french', '', '', '', '', '', '', 'aynclass4-french', '91439a344ffcbf3802380a039d2884c0', 0, '2018-06-14 07:15:39'),
(26, '', '', '4', 'maths', '', '', '', '', '', '', 'aynclass4-maths', '52d95e41fa8c95a27d438f64b2329d19', 0, '2018-06-14 07:15:39'),
(27, '', '', '4', 'evs', '', '', '', '', '', '', 'aynclass4-evs', '985e4d94fbebf0b537bac9b36e5a52b3', 0, '2018-06-14 07:15:39'),
(28, '', '', '4', 'social science', '', '', '', '', '', '', 'aynclass4-socialscience', '04d9c93c9b2ff55c9d96a92aa093c9c1', 0, '2018-06-14 07:15:39'),
(29, '', '', '5', 'social science', '', '', '', '', '', '', 'aynclass5-socialscience', '751fce118562aaaf486aa903b833b619', 0, '2018-06-14 07:15:39'),
(30, '', '', '5', 'evs', '', '', '', '', '', '', 'aynclass5-evs', '23b0cadf3106d0dc3315244bbde4e65b', 0, '2018-06-14 07:15:39'),
(31, '', '', '5', 'maths', '', '', '', '', '', '', 'aynclass5-maths', '0d3a35c8a503ae985a04518ac0d5a974', 0, '2018-06-14 07:15:39'),
(32, '', '', '5', 'french', '', '', '', '', '', '', 'aynclass5-french', '9f42eedf03b9d7ffa4543d9c6c00b194', 0, '2018-06-14 07:15:39'),
(33, '', '', '5', 'hindi', '', '', '', '', '', '', 'aynclass5-hindi', '841cd462e3a8275f929de38946ca98f1', 0, '2018-06-14 07:15:39'),
(34, '', '', '5', 'tamil', '', '', '', '', '', '', 'aynclass5-tamil', '066e5bdf52504ac9a06d9923a653be49', 0, '2018-06-14 07:15:39'),
(35, '', '', '5', 'english', '', '', '', '', '', '', 'aynclass5-english', '55d451f87384b36fad3e80641e4e4705', 0, '2018-06-14 07:15:39'),
(36, '', '', '6', 'english', '', '', '', '', '', '', 'aynclass6-english', '558216e41e43999c4d22c9bf328981e2', 0, '2018-06-14 07:15:39'),
(37, '', '', '6', 'l2-tamil', '', '', '', '', '', '', 'aynclass6-l2-tamil', '83625ecb56f918559f9d7c9cbfb2921e', 0, '2018-06-14 07:15:39'),
(38, '', '', '6', 'l3-tamil', '', '', '', '', '', '', 'aynclass6-l3-tamil', 'a5ca363fc27f11caff50e072c1c6f210', 0, '2018-06-14 07:15:39'),
(39, '', '', '6', 'l3-hindi', '', '', '', '', '', '', 'aynclass6-l3-hindi', '1fc514903aee11017ce29e5793c700d8', 0, '2018-06-14 07:15:39'),
(40, '', '', '6', 'l2-hindi', '', '', '', '', '', '', 'aynclass6-l2-hindi', '360f993a99205bf2ea5b65208c058c2a', 0, '2018-06-14 07:15:39'),
(41, '', '', '6', 'l2-french', '', '', '', '', '', '', 'aynclass6-l2-french', '7d763e46987c385416117f6b22709409', 0, '2018-06-14 07:15:39'),
(42, '', '', '6', 'l3-french', '', '', '', '', '', '', 'aynclass6-l3-french', 'c7039188243d5194cbef10a4d0a55059', 0, '2018-06-14 07:15:39'),
(43, '', '', '6', 'maths', '', '', '', '', '', '', 'aynclass6-maths', '656009a97492045ec51c5c238c3bb242', 0, '2018-06-14 07:15:39'),
(44, '', '', '6', 'science', '', '', '', '', '', '', 'aynclass6-science', 'ae196e86291f777af9e6054fb8937281', 0, '2018-06-14 07:15:39'),
(45, '', '', '6', 'social science', '', '', '', '', '', '', 'aynclass6-socialscience', '18b38bc096e9d2fdad7a078d44c8988a', 0, '2018-06-14 07:15:39'),
(46, '', '', '7', 'english', '', '', '', '', '', '', 'aynclass7-english', '9af91c6edd0e51922e26a69f81c0b7bd', 0, '2018-06-14 07:15:39'),
(47, '', '', '7', 'tamil', '', '', '', '', '', '', 'aynclass7-l2-tamil', '8b81031a99aebae538851e4f70625793', 0, '2018-06-14 07:15:39'),
(48, '', '', '7', 'l3-tamil', '', '', '', '', '', '', 'aynclass7-l3-tamil', 'bae24a8c34245b4fb0185563ffb170b6', 0, '2018-06-14 07:15:39'),
(49, '', '', '7', 'l3-hindi', '', '', '', '', '', '', 'aynclass7-l3-hindi', '0b8a360db9cdaaf2200c58b298da0a53', 0, '2018-06-14 07:15:39'),
(50, '', '', '7', 'l2-hindi', '', '', '', '', '', '', 'aynclass7-l2-hindi', '308bccef6683db2889bf7139f799b8fb', 0, '2018-06-14 07:15:39'),
(51, '', '', '7', 'l2-french', '', '', '', '', '', '', 'aynclass7-l2-french', '24da0eb3f54591413636b80a14735fc1', 0, '2018-06-14 07:15:39'),
(52, '', '', '7', 'l3-french', '', '', '', '', '', '', 'aynclass7-l3-french', 'e55953ed1ff929b2c07b3dd192af409c', 0, '2018-06-14 07:15:39'),
(53, '', '', '7', 'maths', '', '', '', '', '', '', 'aynclass7-maths', '5bb9ed2ccef9780c88f667e37ea2aa39', 0, '2018-06-14 07:15:39'),
(54, '', '', '7', 'science', '', '', '', '', '', '', 'aynclass7-science', 'a6d12bc3b91e5f0f447430525e8af748', 0, '2018-06-14 07:15:39'),
(55, '', '', '7', 'social science', '', '', '', '', '', '', 'aynclass7-socialscience', '6690e24c0f19b1fc41fceec2a5ecdeb7', 0, '2018-06-14 07:15:39'),
(56, '', '', '8', 'english', '', '', '', '', '', '', 'aynclass8-english', '686f7cbd5f5a320632bb96159210fd26', 0, '2018-06-14 07:15:39'),
(57, '', '', '8', 'l2-tamil', '', '', '', '', '', '', 'aynclass8-l2-tamil', 'c06328ec258d33575ab094a486de6a9f', 0, '2018-06-14 07:15:39'),
(58, '', '', '8', 'l3-tamil', '', '', '', '', '', '', 'aynclass8-l3-tamil', '67c5c9eb276498787beb99c1722f5b93', 0, '2018-06-14 07:15:39'),
(59, '', '', '8', 'l3-hindi', '', '', '', '', '', '', 'aynclass8-l3-hindi', 'e39e7e3b1f4a07e8441ebd0de490eb5e', 0, '2018-06-14 07:15:39'),
(60, '', '', '8', 'l2-hindi', '', '', '', '', '', '', 'aynclass8-l2-hindi', '618a75a0406d7596387abd8726d5894e', 0, '2018-06-14 07:15:39'),
(61, '', '', '8', 'l2-french', '', '', '', '', '', '', 'aynclass8-l2-french', '35f13b5ea2d6c504b2f116f5a5ca7a24', 0, '2018-06-14 07:15:39'),
(62, '', '', '8', 'l3-french', '', '', '', '', '', '', 'aynclass8-l3-french', '8fe9e7d78a9760ea767555aa4f2ce4c6', 0, '2018-06-14 07:15:39'),
(63, '', '', '8', 'maths', '', '', '', '', '', '', 'aynclass8-maths', '1d1b6859ec4f9b0f0246b2b3e834bffd', 0, '2018-06-14 07:15:39'),
(64, '', '', '8', 'science', '', '', '', '', '', '', 'aynclass8-science', 'eea4db5ac86fae2f07cafc2b114bb4f0', 0, '2018-06-14 07:15:39'),
(65, '', '', '8', 'social science', '', '', '', '', '', '', 'aynclass8-socialscience', '0121dfb580e5d829e1c9ad62ea0c8a1d', 0, '2018-06-14 07:15:39'),
(66, '', '', '9', 'english', '', '', '', '', '', '', 'aynclass9-english', 'dd471ed40022bc5e6ee536ff4dd1a38c', 0, '2018-06-14 07:15:39'),
(67, '', '', '9', 'tamil', '', '', '', '', '', '', 'aynclass9-tamil', 'c40cd0c37ed88a51d02b9f76449b142c', 0, '2018-06-14 07:15:39'),
(68, '', '', '9', 'hindi', '', '', '', '', '', '', 'aynclass9-hindi', '92696a41f0791d1df85b9710e9d35aeb', 0, '2018-06-14 07:15:39'),
(69, '', '', '9', 'french', '', '', '', '', '', '', 'aynclass9-french', '690927d4e1e97a52815f3ca23709a763', 0, '2018-06-14 07:15:39'),
(70, '', '', '9', 'maths', '', '', '', '', '', '', 'aynclass9-maths', 'c7aef3033b9bb8d9d70dc13c9c67d9ec', 0, '2018-06-14 07:15:39'),
(71, '', '', '9', 'science', '', '', '', '', '', '', 'aynclass9-science', '313513542720c10ff9008003500d848b', 0, '2018-06-14 07:15:39'),
(72, '', '', '9', 'social science', '', '', '', '', '', '', 'aynclass9-socialscience', '85c5f516833df7db8465e36de56da432', 0, '2018-06-14 07:15:39'),
(73, '', '', '10', 'english', '', '', '', '', '', '', 'aynclass10-english', '62f45d60502408e0d8a85ed74f309357', 0, '2018-06-14 07:15:39'),
(74, '', '', '10', 'tamil', '', '', '', '', '', '', 'aynclass10-tamil', '52508277c61ed58cfb49def09e8f5e17', 0, '2018-06-14 07:15:39'),
(75, '', '', '10', 'hindi', '', '', '', '', '', '', 'aynclass10-hindi', '79b8f87dc9047c907bd305a6e22904d4', 0, '2018-06-14 07:15:39'),
(76, '', '', '10', 'french', '', '', '', '', '', '', 'aynclass10-french', '28646cb04d1d14dce355111dfdb95771', 0, '2018-06-14 07:15:39'),
(77, '', '', '10', 'maths', '', '', '', '', '', '', 'aynclass10-maths', 'c83ffd8052ac289a98ce737a4d64c1eb', 0, '2018-06-14 07:15:39'),
(78, '', '', '10', 'science', '', '', '', '', '', '', 'aynclass10-science', '4549e3b2ce0feffacf3a8f2d1967b1bc', 0, '2018-06-14 07:15:39'),
(79, '', '', '10', 'social science', '', '', '', '', '', '', 'aynclass10-socialscience', '32313ddc56887a998f0dabd5f32873a3', 0, '2018-06-14 07:15:39'),
(80, '', '', '11', 'english', '', '', '', '', '', '', 'aynclass11-english', '0554ba7056d19a34853c9d09a35c3a37', 0, '2018-06-14 07:15:39'),
(81, '', '', '11', 'maths', '', '', '', '', '', '', 'aynclass11-maths', '3b11ac7c247013636588350ecd17818f', 0, '2018-06-14 07:15:39'),
(82, '', '', '11', 'physics', '', '', '', '', '', '', 'aynclass11-physics', 'a3a15b0a56a0c4b0b09174b6865ee3b0', 0, '2018-06-14 07:15:39'),
(83, '', '', '11', 'chemistry', '', '', '', '', '', '', 'aynclass11-chemistry', '1b7666c1ddb3006a3b2d6e58c710321f', 0, '2018-06-14 07:15:39'),
(84, '', '', '11', 'biology', '', '', '', '', '', '', 'aynclass11-biology', '4d3364d1e3e0922b6d1904919c5a4d70', 0, '2018-06-14 07:15:39'),
(85, '', '', '11', 'computer science', '', '', '', '', '', '', 'aynclass11-computerscience', 'ae1dd7d59c8a341b5841026d0fdede43', 0, '2018-06-14 07:15:39'),
(86, '', '', '11', 'accountancy', '', '', '', '', '', '', 'aynclass11-accountancy', '5b4a6650ffe1bc9b1ae1698c3a50af65', 0, '2018-06-14 07:15:39'),
(87, '', '', '11', 'business studies', '', '', '', '', '', '', 'aynclass11-businessstudies', '44671011cf39014e629124d9d14d628c', 0, '2018-06-14 07:15:39'),
(88, '', '', '11', 'economics', '', '', '', '', '', '', 'aynclass11-economics', 'b9367a2b2cd0607d7255ddbe1aa3eeab', 0, '2018-06-14 07:15:39'),
(89, '', '', '11', 'mass media1', '', '', '', '', '', '', 'aynclass11-massmedia1', 'da17b288ba5676c306fb7ce6f756556d', 0, '2018-06-14 07:15:39'),
(90, '', '', '11', 'mass media2', '', '', '', '', '', '', 'aynclass11-massmedia2', '6d0d4aa291781c5aada4f74a4f634749', 0, '2018-06-14 07:15:39'),
(91, '', '', '12', 'english', '', '', '', '', '', '', 'aynclass12-english', 'a09bc1996e3a101ffb204826af37b411', 0, '2018-06-14 07:15:39'),
(92, '', '', '12', 'maths', '', '', '', '', '', '', 'aynclass12-maths', 'c3a0e0680c00dea1994600b0c49e95c3', 0, '2018-06-14 07:15:39'),
(93, '', '', '12', 'physics', '', '', '', '', '', '', 'aynclass12-physics', '542edc810ae3cb65a78a95aabfac945c', 0, '2018-06-14 07:15:39'),
(94, '', '', '12', 'chemistry', '', '', '', '', '', '', 'aynclass12-chemistry', 'dde43020943c9ecb3d8f533963dcfeeb', 0, '2018-06-14 07:15:39'),
(95, '', '', '12', 'biology', '', '', '', '', '', '', 'aynclass12-biology', 'ea54c65486ef06a87ec2023202bdf114', 0, '2018-06-14 07:15:39'),
(96, '', '', '12', 'computer science', '', '', '', '', '', '', 'aynclass12-computerscience', '71cb7f3f1636afa11aff2c5438567d08', 0, '2018-06-14 07:15:39'),
(97, '', '', '12', 'accountancy', '', '', '', '', '', '', 'aynclass12-accountancy', 'da92566b39f05307df92f39265bd8236', 0, '2018-06-14 07:15:39'),
(98, '', '', '12', 'business studies', '', '', '', '', '', '', 'aynclass12-businessstudies', 'e92d35f604495ed58fc4a27b1e4b1127', 0, '2018-06-14 07:15:39'),
(99, '', '', '12', 'economics', '', '', '', '', '', '', 'aynclass12-economics', 'f147072389d670c7c852bd179fe252a4', 0, '2018-06-14 07:15:39'),
(100, '', '', '12', 'mass media1', '', '', '', '', '', '', 'aynclass12-massmedia1', 'dd81ad53fb93dadd2d9e3dbae7406d0e', 0, '2018-06-14 07:15:39'),
(101, '', '', '12', 'mass media2', '', '', '', '', '', '', 'aynclass12-massmedia2', 'c8ff4219b62e161f0567dca60b62d089', 0, '2018-06-14 07:15:39'),
(102, '', '', '12', 'tamil', '', '', '', '', '', '', 'aynclass12-tamil', '36a948e20ad0f563ca6fe32c1f97705c', 0, '2018-06-14 07:15:39'),
(103, '', '', '11', 'tamil', '', '', '', '', '', '', 'aynclass11-tamil', 'd1a269161ff41d156a98ec405ea66753', 0, '2018-06-14 07:15:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson_plan_6thto8th`
--
ALTER TABLE `lesson_plan_6thto8th`
  ADD PRIMARY KEY (`lp_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lesson_plan_6thto8th`
--
ALTER TABLE `lesson_plan_6thto8th`
  MODIFY `lp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
