-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 01:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sttsedunew`
--

-- --------------------------------------------------------

--
-- Table structure for table `org_bahasa`
--

DROP TABLE IF EXISTS `org_bahasa`;
CREATE TABLE `org_bahasa` (
  `org_bahasa_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `bahasa_id` tinyint(4) DEFAULT NULL,
  `org_nama_1` varchar(100) DEFAULT NULL,
  `org_nama_2` varchar(255) NOT NULL,
  `org_deskripsi_1` text DEFAULT NULL,
  `org_deskripsi_2` text NOT NULL,
  `org_foto_deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_bahasa`
--

INSERT INTO `org_bahasa` (`org_bahasa_id`, `org_id`, `bahasa_id`, `org_nama_1`, `org_nama_2`, `org_deskripsi_1`, `org_deskripsi_2`, `org_foto_deskripsi`) VALUES
(1, 1, 1, 'Badan Eksekutif Mahasiswa (BEM)', 'Student Executive Board (BEM)', 'Badan Eksekutif Mahasiswa (BEM) iSTTS merupakan badan perwakilan dari mahasiswa seluruh jurusan dalam usaha menyalurkan dan memperjuangkan aspirasi mahasiswa kepada pihak iSTTS. BEM juga merupakan sebuah badan yang memprakarsai dan mengoraganisir segala macam kegiatan mahasiswa di iSTTS yang bersifat umum dan tidak berbau akademis. Di samping itu BEM merupakan badan yang menyalurkan minat dan bakat yang disukai oleh mahasiswa iSTTS.', 'The iSTTS Student Executive Board (BEM) is a representative body of students from all departments in an effort to channel and fight for the aspirations of students to the iSTTS. BEM is also a body that initiates and organizes all kinds of student activities in iSTTS that are general and not academic in nature. In addition, BEM is a body that channeled interests and talents that are liked by iSTTS students.', NULL),
(2, 2, 1, 'Himafor', 'Himafor', 'Himpunan Mahasiswa merupakan organisasi yang terbentuk dari program studi. Organisasi ini secara struktural berada di bawah BEM. Kegiatan yang banyak dilakukan oleh organisasi ini adalah seminar dan kunjungan. Beberapa pabrik dan industri sudah pernah dikunjungi oleh HIMA, begitu sebutannya. Hima pun tidak terkungkung dalam lingkup kampus. Mereka juga menjalin kerja sama dengan pihak-pihak luar, terutama saat akan menyelenggarakan event-event besar.', '', NULL),
(3, 3, 1, 'Himatris', 'Himatris', 'Himpunan Mahasiswa merupakan organisasi yang terbentuk dari program studi. Organisasi ini secara struktural berada di bawah BEM. Kegiatan yang banyak dilakukan oleh organisasi ini adalah seminar dan kunjungan. Beberapa pabrik dan industri sudah pernah dikunjungi oleh HIMA, begitu sebutannya. Hima pun tidak terkungkung dalam lingkup kampus. Mereka juga menjalin kerja sama dengan pihak-pihak luar, terutama saat akan menyelenggarakan event-event besar.', '', NULL),
(4, 4, 1, 'Hima Elektro', 'Hima Elektro', 'Himpunan Mahasiswa merupakan organisasi yang terbentuk dari program studi. Organisasi ini secara struktural berada di bawah BEM. Kegiatan yang banyak dilakukan oleh organisasi ini adalah seminar dan kunjungan. Beberapa pabrik dan industri sudah pernah dikunjungi oleh HIMA, begitu sebutannya. Hima pun tidak terkungkung dalam lingkup kampus. Mereka juga menjalin kerja sama dengan pihak-pihak luar, terutama saat akan menyelenggarakan event-event besar.', '', NULL),
(5, 5, 1, 'Hima DKV', 'Hima DKV', 'Himpunan Mahasiswa merupakan organisasi yang terbentuk dari program studi. Organisasi ini secara struktural berada di bawah BEM. Kegiatan yang banyak dilakukan oleh organisasi ini adalah seminar dan kunjungan. Beberapa pabrik dan industri sudah pernah dikunjungi oleh HIMA, begitu sebutannya. Hima pun tidak terkungkung dalam lingkup kampus. Mereka juga menjalin kerja sama dengan pihak-pihak luar, terutama saat akan menyelenggarakan event-event besar.', '', NULL),
(6, 6, 1, 'Hima SIB', 'Hima SIB', 'Himpunan Mahasiswa merupakan organisasi yang terbentuk dari program studi. Organisasi ini secara struktural berada di bawah BEM. Kegiatan yang banyak dilakukan oleh organisasi ini adalah seminar dan kunjungan. Beberapa pabrik dan industri sudah pernah dikunjungi oleh HIMA, begitu sebutannya. Hima pun tidak terkungkung dalam lingkup kampus. Mereka juga menjalin kerja sama dengan pihak-pihak luar, terutama saat akan menyelenggarakan event-event besar.', '', NULL),
(7, 7, 1, 'Kyokusinkai', 'Kyokusinkai', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(8, 8, 1, 'Basket', 'Basketball', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(9, 9, 1, 'Band', 'Band', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(10, 10, 1, 'Dance', 'Dance', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(11, 11, 1, 'Mapala', 'Mapala', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(12, 12, 1, 'Taekwondo', 'Taekwondo', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(13, 13, 1, 'Korantang', 'Korantang', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(14, 14, 1, 'Badminton', 'Badminton', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(15, 15, 1, 'Futsal', 'Futsal', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(16, 16, 1, 'Focaloid', 'Focaloid', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(17, 17, 1, 'Catur', 'Chess', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(18, 18, 1, 'Rubik', 'Rubik', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(19, 19, 1, 'Renang', 'Swimming', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(20, 20, 1, 'Teater', 'Theater', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(21, 21, 1, 'Tenis Meja', 'Table tennis', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(22, 22, 1, 'Billyard', 'Billyard', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini.', '', NULL),
(23, 23, 1, 'Unit Kegiatan Kerohanian Islam', 'Islamic Spiritual Activity Unit', 'UKK adalah organisasi bentukan mahasiswa lainnya lagi yang berhubungan dengan agama yang dianut mahasiswa. Organisasi ini sepenuhnya didukung oleh kampus, mengingat iSTTS merupakan salah satu kampus swasta yang menghargai kebebasan beragama.', '', NULL),
(24, 24, 1, 'Persekutuan Doa', 'Prayer Fellowship', 'UKK adalah organisasi bentukan mahasiswa lainnya lagi yang berhubungan dengan agama yang dianut mahasiswa. Organisasi ini sepenuhnya didukung oleh kampus, mengingat iSTTS merupakan salah satu kampus swasta yang menghargai kebebasan beragama.', '', NULL),
(25, 25, 1, 'Keluarga Mahasiswa Katolik', 'Catholic Student Family', 'UKK adalah organisasi bentukan mahasiswa lainnya lagi yang berhubungan dengan agama yang dianut mahasiswa. Organisasi ini sepenuhnya didukung oleh kampus, mengingat iSTTS merupakan salah satu kampus swasta yang menghargai kebebasan beragama.', '', NULL),
(26, 26, 1, 'Keluarga Mahasiswa Buddha', 'Buddhist Student Family', 'UKK adalah organisasi bentukan mahasiswa lainnya lagi yang berhubungan dengan agama yang dianut mahasiswa. Organisasi ini sepenuhnya didukung oleh kampus, mengingat iSTTS merupakan salah satu kampus swasta yang menghargai kebebasan beragama.', '', NULL),
(27, 26, NULL, 'Himpunan Mahasiswa', 'Students Association', 'Himpunan Mahasiswa merupakan organisasi yang terbentuk dari program studi. Organisasi ini secara struktural berada di bawah BEM. Kegiatan yang banyak dilakukan oleh organisasi ini adalah seminar dan kunjungan. Beberapa pabrik dan industri sudah pernah dikunjungi oleh HIMA, begitu sebutannya. Hima pun tidak terkungkung dalam lingkup kampus. Mereka juga menjalin kerja sama dengan pihak-pihak luar, terutama saat akan menyelenggarakan event-event besar.', 'Student Association is an organization formed by the study program. This organization is structurally under the BEM. The activities carried out by this organization are seminars and visits. Some factories and industries have been visited by HIMA, as it is called. Hima was not confined within the campus. They also collaborate with outside parties, especially when they are going to hold big events.', NULL),
(28, NULL, NULL, 'Unit Kegiatan Mahasiswa', 'Student activity units', 'UKM adalah organisasi bentukan mahasiswa yang berhubungan dengan hobi mahasiswa. Dengan demikian, setiap mahasiswa yang memiliki hobi yang sama dapat bergabung dalam UKM-UKM yang sesuai. Sebagian besar kegiatan seni maupun pertunjukkan di lingkungan kampus diisi oleh UKM-UKM ini. ', 'UKM is a student-formed organization that deals with student hobbies. Thus, every student who has the same hobby can join in the appropriate UKM. Most of the arts and performance activities on campus are filled by these UKMs.', NULL),
(29, NULL, NULL, 'Unit Kegiatan Kerohanian', 'Spiritual Activity Unit', 'UKK adalah organisasi bentukan mahasiswa lainnya lagi yang berhubungan dengan agama yang dianut mahasiswa. Organisasi ini sepenuhnya didukung oleh kampus, mengingat iSTTS merupakan salah satu kampus swasta yang menghargai kebebasan beragama. ', 'UKK is another student-formed organization related to the religion of the students. This organization is fully supported by the campus, considering that iSTTS is a private campus that respects religious freedom.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `org_bahasa`
--
ALTER TABLE `org_bahasa`
  ADD PRIMARY KEY (`org_bahasa_id`),
  ADD KEY `org_id` (`org_id`),
  ADD KEY `bahasa_id` (`bahasa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `org_bahasa`
--
ALTER TABLE `org_bahasa`
  MODIFY `org_bahasa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `org_bahasa`
--
ALTER TABLE `org_bahasa`
  ADD CONSTRAINT `org_bahasa_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `org` (`org_id`),
  ADD CONSTRAINT `org_bahasa_ibfk_2` FOREIGN KEY (`bahasa_id`) REFERENCES `bahasa` (`bahasa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
