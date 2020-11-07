--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `ClassId` int(11) NOT NULL,
  `ClassName` varchar(50) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`ClassId`, `ClassName`, `IsActive`) VALUES
(1, 'BCA', 1),
(2, 'MCA', 1),
(3, 'BSc IT', 1),
(4, 'MSc IT', 1),
(5, 'Mechanical', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classsubject`
--

CREATE TABLE `tbl_classsubject` (
  `ClassSubId` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_classsubject`
--

INSERT INTO `tbl_classsubject` (`ClassSubId`, `ClassId`, `SubjectId`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(6, 2, 5),
(7, 2, 6),
(8, 2, 7),
(9, 3, 8),
(10, 3, 9),
(11, 3, 10),
(12, 3, 11),
(13, 1, 12),
(14, 1, 13),
(15, 5, 14),
(16, 5, 15),
(17, 5, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `GradeId` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `Grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`GradeId`, `StudentId`, `SubjectId`, `Grade`) VALUES
(1, 1, 1, 87),
(2, 1, 2, 88),
(3, 1, 3, 45),
(4, 1, 4, 82),
(5, 1, 12, 71),
(6, 1, 13, 78),
(7, 2, 1, 87),
(8, 2, 2, 91),
(9, 2, 3, 83),
(10, 2, 4, 96),
(11, 2, 12, 73),
(12, 2, 13, 86);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `LoginId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`LoginId`, `UserId`, `Designation`, `Username`, `Password`, `CreatedDate`, `ModifiedDate`) VALUES
(1, 1, 'Class Teacher', 'ajay', 'ajay', '2020-11-05 00:00:00', NULL),
(2, 6, 'Class Teacher', 'poonam', 'poonam', '2020-11-05 00:00:00', NULL),
(3, 7, 'Class Teacher', 'sameer', 'sameer', '2020-11-05 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `StudentId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`StudentId`, `UserId`, `ClassId`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1),
(4, 5, 1),
(6, 8, 1),
(7, 5, 1),
(8, 10, 1),
(9, 12, 2),
(10, 13, 2),
(11, 19, 2),
(12, 20, 1),
(13, 21, 3),
(14, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `SubjectId` int(11) NOT NULL,
  `SubjectName` varchar(100) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`SubjectId`, `SubjectName`, `CreatedDate`, `ModifiedDate`, `IsActive`) VALUES
(1, 'C Programming', NULL, NULL, 1),
(2, 'C Plus Plus', NULL, NULL, 1),
(3, 'Operating System', NULL, NULL, 1),
(4, 'Web Technologies', NULL, NULL, 1),
(5, 'Linux Administration', NULL, NULL, 1),
(6, 'Android Learning', NULL, NULL, 1),
(7, 'Personality Development', NULL, NULL, 1),
(8, 'HTML', NULL, NULL, 1),
(9, 'JavaScript', NULL, NULL, 1),
(10, 'JQuery', NULL, NULL, 1),
(11, 'CSS', NULL, NULL, 1),
(12, 'Database Management ', NULL, NULL, 1),
(13, 'Structured Query Language', NULL, NULL, 1),
(14, 'Strength of ma', NULL, NULL, 0),
(15, 'Design of Machine', NULL, NULL, 0),
(16, 'Mathematic ', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `TeacherId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`TeacherId`, `UserId`, `ClassId`) VALUES
(1, 1, 1),
(2, 6, 1),
(3, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `UserId` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedDate` date DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `IsActive` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`UserId`, `Name`, `Gender`, `DOB`, `Mobile`, `Email`, `Address`, `CreatedBy`, `CreatedDate`, `ModifiedDate`, `IsActive`) VALUES
(1, 'Ajay Goankar', 'Male', NULL, NULL, NULL, 'Thane', 1, '2020-11-05', NULL, b'1'),
(2, 'Rawal Suthar', 'Male', '1999-06-10', '9768', 'rawal@mrsuthar.com', 'Palava', 1, '2020-11-05', '2020-11-07 05:24:00', b'1'),
(3, 'Raj Saroj', 'Male', NULL, '989', '', 'Vikhroli', 1, '2020-11-05', '2020-11-07 05:24:18', b'1'),
(4, 'Zareen Makrani', 'Female', NULL, NULL, NULL, 'Mumra', 1, '2020-11-05', NULL, b'1'),
(5, 'Nikita Shinde', 'Female', NULL, NULL, NULL, 'Kalyan', 1, '2020-11-05', NULL, b'1'),
(6, 'Poonam Shinde', 'Female', NULL, NULL, NULL, 'Kalwa', 1, '2020-11-05', NULL, b'1'),
(7, 'Sameer Bhambhalkar', 'Male', NULL, NULL, NULL, 'Thane', 1, '2020-11-05', NULL, b'1'),
(8, 'Rohan', NULL, NULL, '9768821252', NULL, 'Palava', 1, '2020-11-05', NULL, b'1'),
(9, 'Devanand Patil', NULL, NULL, '987', NULL, 'Nilaje', 1, '2020-11-05', NULL, b'1'),
(10, 'Siddhesh Gupta', NULL, NULL, '7045219184', NULL, 'Dombivali', 1, '2020-11-05', NULL, b'0'),
(11, '', NULL, NULL, '', NULL, '', 1, '2020-11-06', NULL, b'1'),
(12, 'Durvesh Naik', NULL, NULL, '987', NULL, 'Elite', 1, '2020-11-06', NULL, b'1'),
(13, 'Vishal', NULL, NULL, '987', NULL, 'Elite', 1, '2020-11-06', NULL, b'0'),
(14, 'Rawal Suthar', NULL, NULL, 'rawal@mrsuthar.', NULL, 'rawal@mrsuthar.com', 1, '2020-11-07', NULL, b'1'),
(15, 'Rawal Suthar', NULL, NULL, '9768821252', NULL, 'Palava', 1, '2020-11-07', NULL, b'1'),
(16, 'Rawal Suthar', NULL, NULL, '9768821252', NULL, 'Palava', 1, '2020-11-07', NULL, b'1'),
(17, 'Rawal Suthar', NULL, NULL, '9768821252', NULL, 'Palava', 1, '2020-11-07', NULL, b'1'),
(18, 'Rawal Suthar', NULL, NULL, '9768821252', NULL, 'Palava', 1, '2020-11-07', NULL, b'1'),
(19, 'Rajesh', NULL, NULL, '', NULL, 'Palava', 1, '2020-11-07', NULL, b'0'),
(20, 'Vishwas', NULL, NULL, '', NULL, '', 1, '2020-11-07', NULL, b'0'),
(21, 'Dhan Shree', 'Female', '0000-00-00', '987654321', 'abc@abc.abc', 'Palava', 6, '2020-11-07', NULL, b'0'),
(22, 'Rajendra', '', '0000-00-00', '', '', '', 6, '2020-11-07', NULL, b'0'),
(23, '', '', '0000-00-00', '', '', '', 6, '2020-11-07', NULL, b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`ClassId`);

--
-- Indexes for table `tbl_classsubject`
--
ALTER TABLE `tbl_classsubject`
  ADD PRIMARY KEY (`ClassSubId`),
  ADD KEY `FK_ClassSub` (`ClassId`),
  ADD KEY `FK_SubClass` (`SubjectId`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`GradeId`),
  ADD KEY `FK_GradeStudentId` (`StudentId`),
  ADD KEY `FK_GradeSubjectId` (`SubjectId`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`LoginId`),
  ADD KEY `FK_UserID` (`UserId`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`StudentId`),
  ADD KEY `FK_Student` (`UserId`),
  ADD KEY `FK_ClassId` (`ClassId`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`SubjectId`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`TeacherId`),
  ADD KEY `FK_User` (`UserId`),
  ADD KEY `FK_Class` (`ClassId`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `ClassId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_classsubject`
--
ALTER TABLE `tbl_classsubject`
  MODIFY `ClassSubId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `GradeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `SubjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `TeacherId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_classsubject`
--
ALTER TABLE `tbl_classsubject`
  ADD CONSTRAINT `FK_ClassSub` FOREIGN KEY (`ClassId`) REFERENCES `tbl_class` (`ClassId`),
  ADD CONSTRAINT `FK_SubClass` FOREIGN KEY (`SubjectId`) REFERENCES `tbl_subject` (`SubjectId`);

--
-- Constraints for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD CONSTRAINT `FK_GradeStudentId` FOREIGN KEY (`StudentId`) REFERENCES `tbl_student` (`StudentId`),
  ADD CONSTRAINT `FK_GradeSubjectId` FOREIGN KEY (`SubjectId`) REFERENCES `tbl_subject` (`SubjectId`);

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `FK_UserID` FOREIGN KEY (`UserId`) REFERENCES `tbl_user` (`UserId`);

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `FK_ClassId` FOREIGN KEY (`ClassId`) REFERENCES `tbl_class` (`ClassId`),
  ADD CONSTRAINT `FK_Student` FOREIGN KEY (`UserId`) REFERENCES `tbl_user` (`UserId`);

--
-- Constraints for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD CONSTRAINT `FK_ClassTeacher` FOREIGN KEY (`ClassId`) REFERENCES `tbl_class` (`ClassId`),
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`UserId`) REFERENCES `tbl_user` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
