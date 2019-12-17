-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 12:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `belong_to`
--

CREATE TABLE `belong_to` (
  `Deid` int(11) NOT NULL,
  `Seid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `check_up`
--

CREATE TABLE `check_up` (
  `checkid` int(10) NOT NULL,
  `date` date NOT NULL,
  `usid` int(11) NOT NULL,
  `syid` int(11) NOT NULL,
  `symid1` int(10) DEFAULT NULL,
  `symid2` int(10) DEFAULT NULL,
  `symid3` int(10) DEFAULT NULL,
  `symid4` int(10) DEFAULT NULL,
  `symid5` int(10) DEFAULT NULL,
  `symid6` int(10) DEFAULT NULL,
  `symid7` int(10) DEFAULT NULL,
  `symid8` int(10) DEFAULT NULL,
  `symid9` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_up`
--

INSERT INTO `check_up` (`checkid`, `date`, `usid`, `syid`, `symid1`, `symid2`, `symid3`, `symid4`, `symid5`, `symid6`, `symid7`, `symid8`, `symid9`) VALUES
(1, '2018-06-19', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '2018-06-19', 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2018-06-19', 38, 0, 0, 100, 100, NULL, 100, 100, 100, 100, 100),
(4, '2018-06-19', 38, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '2018-06-19', 38, 7, 13, 17, 17, 0, 0, 0, 0, 0, 0),
(6, '2018-06-19', 38, 3, 64, 74, 0, 0, 0, 0, 0, 0, 0),
(7, '2018-06-07', 38, 38, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2018-06-19', 38, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, '2018-06-19', 38, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, '2018-06-19', 38, 10, 14, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '2018-06-19', 38, 7, 131, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(12, '2018-06-19', 38, 7, 10, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(13, '2018-06-19', 38, 6, 18, 0, 0, 0, 0, 0, 0, 0, NULL),
(14, '2018-06-19', 38, 10, 19, 0, 0, 0, 0, 0, 0, 0, NULL),
(15, '2018-06-19', 38, 2147483647, 89, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(16, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(17, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(18, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(19, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(20, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(21, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(22, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(23, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(24, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(25, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(26, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(27, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(28, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(29, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(30, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(31, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(32, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(33, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(34, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(35, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(36, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(37, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(38, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(39, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(40, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(41, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(42, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(43, '2018-06-19', 38, 13, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(44, '2018-06-19', 38, 2147483647, 10, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(45, '2018-06-19', 38, 2147483647, 10, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(46, '2018-06-19', 38, 2, 14, 35, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(47, '2018-06-19', 38, 61, 7, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(48, '2018-06-19', 38, 61, 7, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(49, '2018-06-19', 38, 7, 2147483647, 2147483647, 2147483647, 11, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(50, '2018-06-20', 38, 2, 9, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(51, '2018-06-20', 38, 2, 9, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647),
(52, '2018-06-20', 38, 2, 9, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `Did` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`Did`, `Name`) VALUES
(0, 'Acne '),
(1, 'AIDS '),
(2, 'Alcoholic hepatitis '),
(3, 'Allergy '),
(4, 'Arthritis '),
(5, 'Bronchial Asthma '),
(6, 'Cervical spondylosis '),
(7, 'Chicken pox '),
(8, 'Chronic cholestasis '),
(9, 'Common Cold '),
(10, 'Dengue '),
(11, 'Diabetes '),
(12, 'Dimorphic hemmorhoids '),
(13, 'Drug Reaction '),
(14, 'Fungal infection '),
(15, 'Gastroenteritis '),
(16, 'GERD '),
(17, 'Heart attack '),
(18, 'hepatitis A '),
(19, 'Hepatitis B '),
(20, 'Hepatitis C '),
(21, 'Hepatitis D '),
(22, 'Hepatitis E '),
(23, 'Hypertension '),
(24, 'Hyperthyroidism '),
(25, 'Hypoglycemia '),
(26, 'Hypothyroidism '),
(27, 'Impetigo '),
(28, 'Jaundice '),
(29, 'Malaria '),
(30, 'Migraine '),
(31, 'Osteoarthristis '),
(32, 'Paralysis '),
(33, 'Paroymsal Positional Vertigo '),
(34, 'Peptic ulcer diseae '),
(35, 'Pneumonia '),
(36, 'Psoriasis '),
(37, 'Tuberculosis '),
(38, 'Typhoid '),
(39, 'Urinary tract infection '),
(40, 'Varicose veins ');

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE `has` (
  `meid` int(11) NOT NULL,
  `DEid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `Mid` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `uid` int(11) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`uid`, `pw`, `Name`, `Gender`, `Age`, `Email`) VALUES
(38, '1234', 'Khaled', 'Male', 22, 'khaled@a');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `sid` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`sid`, `Name`) VALUES
(0, ' Itching'),
(1, 'Skin_Rash'),
(2, 'Nodal_Skin_Eruptions'),
(3, 'Continuous_Sneezing'),
(4, 'Shivering'),
(5, 'Chills'),
(6, 'Joint_Pain'),
(7, 'Stomach_Pain'),
(8, 'Acidity'),
(9, 'Ulcers_On_Tongue'),
(10, 'Muscle_Wasting'),
(11, 'Vomiting'),
(12, 'Burning_Micturition'),
(13, 'Spotting_Urination'),
(14, 'Fatigue'),
(15, 'Weight_Gain'),
(16, 'Anxiety'),
(17, 'Cold_Hands_And_Feets'),
(18, 'Mood_Swings'),
(19, 'Weight_Loss'),
(20, 'Restlessness'),
(21, 'Lethargy'),
(22, 'Patches_In_Throat'),
(23, 'Irregular_Sugar_Level'),
(24, 'Cough'),
(25, 'High_Fever'),
(26, 'Sunken_Eyes'),
(27, 'Breathlessness'),
(28, 'Sweating'),
(29, 'Dehydration'),
(30, 'Indigestion'),
(31, 'Headache'),
(32, 'Yellowish_Skin'),
(33, 'Dark_Urine'),
(34, 'Nausea'),
(35, 'Loss_Of_Appetite'),
(36, 'Pain_Behind_The_Eyes'),
(37, 'Back_Pain'),
(38, 'Constipation'),
(39, 'Abdominal_Pain'),
(40, 'Diarrhoea'),
(41, 'Mild_Fever'),
(42, 'Yellow_Urine'),
(43, 'Yellowing_Of_Eyes'),
(44, 'Acute_Liver_Failure'),
(45, 'Fluid_Overload'),
(46, 'Swelling_Of_Stomach'),
(47, 'Swelled_Lymph_Nodes'),
(48, 'Malaise'),
(49, 'Blurred_And_Distorted_Vision'),
(50, 'Phlegm'),
(51, 'Throat_Irritation'),
(52, 'Redness_Of_Eyes'),
(53, 'Sinus_Pressure'),
(54, 'Runny_Nose'),
(55, 'Congestion'),
(56, 'Chest_Pain'),
(57, 'Weakness_In_Limbs'),
(58, 'Fast_Heart_Rate'),
(59, 'Pain_During_Bowel_Movements'),
(60, 'Pain_In_Anal_Region'),
(61, 'Bloody_Stool'),
(62, 'Irritation_In_Anus'),
(63, 'Neck_Pain'),
(64, 'Dizziness'),
(65, 'Cramps'),
(66, 'Bruising'),
(67, 'Obesity'),
(68, 'Swollen_Legs'),
(69, 'Swollen_Blood_Vessels'),
(70, 'Puffy_Face_And_Eyes'),
(71, 'Enlarged_Thyroid'),
(72, 'Brittle_Nails'),
(73, 'Swollen_Extremeties'),
(74, 'Excessive_Hunger'),
(75, 'Extra_Marital_Contacts'),
(76, 'Drying_And_Tingling_Lips'),
(77, 'Slurred_Speech'),
(78, 'Knee_Pain'),
(79, 'Hip_Joint_Pain'),
(80, 'Muscle_Weakness'),
(81, 'Stiff_Neck'),
(82, 'Swelling_Joints'),
(83, 'Movement_Stiffness'),
(84, 'Spinning_Movements'),
(85, 'Loss_Of_Balance'),
(86, 'Unsteadiness'),
(87, 'Weakness_Of_One_Body_Side'),
(88, 'Loss_Of_Smell'),
(89, 'Bladder_Discomfort'),
(90, 'Foul_Smell_Of Urine'),
(91, 'Continuous_Feel_Of_Urine'),
(92, 'Passage_Of_Gases'),
(93, 'Internal_Itching'),
(94, 'Toxic_Look_(Typhos)'),
(95, 'Depression'),
(96, 'Irritability'),
(97, 'Muscle_Pain'),
(98, 'Altered_Sensorium'),
(99, 'Red_Spots_Over_Body'),
(100, 'Belly_Pain'),
(101, 'Abnormal_Menstruation'),
(102, 'Dischromic_Patches'),
(103, 'Watering_From_Eyes'),
(104, 'Increased_Appetite'),
(105, 'Polyuria'),
(106, 'Family_History'),
(107, 'Mucoid_Sputum'),
(108, 'Rusty_Sputum'),
(109, 'Lack_Of_Concentration'),
(110, 'Visual_Disturbances'),
(111, 'Receiving_Blood_Transfusion'),
(112, 'Receiving_Unsterile_Injections'),
(113, 'Coma'),
(114, 'Stomach_Bleeding'),
(115, 'Distention_Of_Abdomen'),
(116, 'History_Of_Alcohol_Consumption'),
(117, 'Fluid_Overload'),
(118, 'Blood_In_Sputum'),
(119, 'Prominent_Veins_On_Calf'),
(120, 'Palpitations'),
(121, 'Painful_Walking'),
(122, 'Pus_Filled_Pimples'),
(123, 'Blackheads'),
(124, 'Scurring'),
(125, 'Skin_Peeling'),
(126, 'Silver_Like_Dusting'),
(127, 'Small_Dents_In_Nails'),
(128, 'Inflammatory_Nails'),
(129, 'Blister'),
(130, 'Red_Sore_Around_Nose'),
(131, 'Yellow_Crust_Ooze'),
(2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `belong_to`
--
ALTER TABLE `belong_to`
  ADD PRIMARY KEY (`Deid`,`Seid`),
  ADD KEY `sympo` (`Seid`);

--
-- Indexes for table `check_up`
--
ALTER TABLE `check_up`
  ADD PRIMARY KEY (`checkid`),
  ADD KEY `user_id` (`usid`),
  ADD KEY `sym_id` (`syid`),
  ADD KEY `sym1` (`symid1`),
  ADD KEY `sym2` (`symid2`),
  ADD KEY `sym3` (`symid3`),
  ADD KEY `sym4` (`symid4`),
  ADD KEY `sym5` (`symid5`),
  ADD KEY `sym6` (`symid6`),
  ADD KEY `sym7` (`symid7`),
  ADD KEY `sym8` (`symid8`),
  ADD KEY `sym9` (`symid9`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`meid`,`DEid`),
  ADD KEY `dise_id` (`DEid`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`Mid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_up`
--
ALTER TABLE `check_up`
  MODIFY `checkid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `belong_to`
--
ALTER TABLE `belong_to`
  ADD CONSTRAINT `disease` FOREIGN KEY (`Deid`) REFERENCES `disease` (`Did`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sympo` FOREIGN KEY (`Seid`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `check_up`
--
ALTER TABLE `check_up`
  ADD CONSTRAINT `sym1` FOREIGN KEY (`symid1`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym2` FOREIGN KEY (`symid2`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym3` FOREIGN KEY (`symid3`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym4` FOREIGN KEY (`symid4`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym5` FOREIGN KEY (`symid5`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym6` FOREIGN KEY (`symid6`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym7` FOREIGN KEY (`symid7`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym8` FOREIGN KEY (`symid8`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym9` FOREIGN KEY (`symid9`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `sym_id` FOREIGN KEY (`syid`) REFERENCES `symptoms` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user2` FOREIGN KEY (`usid`) REFERENCES `patient` (`uid`);

--
-- Constraints for table `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `dise_id` FOREIGN KEY (`DEid`) REFERENCES `disease` (`Did`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicine` FOREIGN KEY (`meid`) REFERENCES `medication` (`Mid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
