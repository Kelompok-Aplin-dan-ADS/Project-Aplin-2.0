-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 03:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-aplin-2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` varchar(16) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `link_halaman` varchar(255) NOT NULL,
  `tag` int(13) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `gambar`, `judul`, `deskripsi`, `waktu`, `tempat`, `link_halaman`, `tag`, `kategori`, `jurusan`) VALUES
(1, './../assets/events/retret-event.jpg', 'RETRET KMK 2019', 'Retret Seminar Hidup Dalam Roh yang diadakan 3 hari 2 malam dengan tema “Light It Up” ini akan disajikan melalui pengajaran dalam 8 sesi (50%), renungan serta doa (20%), dan sharing kelompok (15%), juga dalam rekreasi dan permainan (15%).\r\nDiharapkan dengan adanya pembagian acara menjadi 8 sesi yang akan dimulai dengan materi pertama “Cinta Kasih Allah” dibawakan oleh orang awam agar setiap pengalaman yang disharingkan lebih pada bagaimana kita mengerti dan memahami pribadi Tuhan Yesus sebagai pribadi yang penuh kasih. Harapan pada sesi ini, peserta dapat merenungkan dan menyadari apa saja yang telah Tuhan berikan untuk hidup kita melalui kasih-Nya yang tak berkesudahan.\r\nPada sesi kedua yang bertemakan “Penyelamatan”, peserta diingatkan dan diajak untuk mengakui kesalahan-kesalahan apa saja yang telah diperbuat, dan diajak untuk mohon ampun melalui Tuhan Yesus. Harapan pada sesi ini peserta dapat lebih mengerti makna dari pengampunan dan penyelamatan yang sudah dilakukan oleh Tuhan Yesus untuk seluruh umat manusia tanpa terkecuali.\r\nSesi ketiga dengan tema “Hidup Baru” akan diingatkan bahwa hidup baru di dalam Kristus sangatlah penting, dan mengenalkan bagaimana kita dapat memulai hidup baru dalam Kristus, serta apa saja yang dapat kita lakukan.\r\nSesi keempat yaitu “Menerima Karunia Allah”. Pada sesi ini kita diberitahu bahwa begitu banyak karunia Allah yang akan diberikan kepada setiap orang yang mengasihi-Nya dan karunia-karunia tersebut dapat membantu kita untuk mengetahui apa yang harus kita lakukan sebagai pengikut Kristus yang sejati.\r\nSesi kelima yaitu “Pencurahan Roh Kudus”, peserta akan didoakan secara pribadi oleh tim doa. Pada sesi ini Roh Kudus akan tercurah kepada setiap peserta dan Roh Kudus yang sudah dikaruniakan kepada setiap orang saat dibaptis akan dinyalakan kembali. \r\nSesi keenam yaitu “Pujian dan Penyembahan,” peserta akan diajak untuk mendalami salah satu cara membangun relasi yang lebih intim dengan Tuhan dan mempergunakan karunia Roh Kudus yang telah mereka dapatkan, yaitu dengan melakukan pujian dan penyembahan setiap hari saat berdoa.\r\nSesi ketujuh yaitu “Pertumbuhan”. Pada sesi ini peserta akan di jelaskan bagaiamana mereka harus hidup bertumbuh didalam Kristus untuk tetap menjaga Roh Kudus yang telah dikaruniakan Allah agar tetap menyala-nyala di dalam diri mereka.\r\nSesi kedelapan yaitu “Diubah Serupa Kristus”. Pada sesi ini perserta akan dibimbing untuk hidup baru di dalam Kristus dengan meninggalkan cara hidup yang lama dan memulai hidup  baru di dalam Kristus. \r\nSelain kedelapan sesi tersebut peserta akan diberi kesempatan untuk sharing di dalam kelompok dengan dibimbing oleh fasilitator masing-masing. Sharing ini bertujuan agar setiap peserta dapat turut mengalami kasih Tuhan melalui pengalaman-pengalaman dari teman yang lain. Kegiatan ini juga bertujuan untuk mempererat tali persaudaraan dan kekompakkan antar peserta, khususnya di dalam kelompok. Diharapkan melalui rangkaian acara retret ini, baik hubungan pribadi dengan Tuhan dan hubungan persaudaraan antara anggota KMK dapat terjalin dengan erat.', '29 November 2019', 'Jatijejer, Mojokerto', '', 0, '', ''),
(2, './../assets/events/shortMovieContest.jpg', 'Lomba Short Movie 2019', 'Pemberitahuan tentang lomba yang di umumkan pada 2 november 2019 dengan batas pengumpulan video pada 16 november 2019 dan pemenang akan di umumkan pada tanggal 23 november 2019', '2 November 2019', 'istts auditorimum', '', 0, '', ''),
(3, './../assets/events/kunjunganApple.png', 'KUNJUNGAN APPLE DEVELOPER ACADEMY 2019', 'Mengingat Perkembangan teknologi informatika dan bisnis di Indonesia yang semakin berkembang pada saat ini, seorang sarjana sistem informasi bisnis dituntut untuk semakin giat memperluas dan memperdalam wawasan dalam bidang teknologi informatika dan manajemen bisnis. Tanpa pengetahuan teknologi informatika dan sistem informasi bisnis praktis yang memadai, seorang sarjana Sistem Informasi Bisnis hanya akan menjadi penonton di negeri sendiri. Seandainya pun mereka bekerja, maka hasil yang diperoleh akan jauh dari optimal. Berkenaan dengan hal tersebut, kami selaku Himpunan Mahasiswa S-1 Sistem Informasi Bisnis Institut Sains Terapan Dan Teknologi Surabaya (HIMA SIB iSTTS) bermaksud mengajak mahasiswa jurusan Sistem Informasi Bisnis untuk belajar dan memahami secara langsung membuat aplikasi yang baik, serta memahami kolaborasi yang efektif antar team dari Apple Developer Academy yang nantinya mungkin akan menjadi developer Apple.', '29 Oktober 2019', 'Kumpul Lapangan istts', '', 0, '', ''),
(4, './../assets/events/diesNatalis.png', 'DIES NATALIS LUSTRUM 8 ISTTS', 'sehubungan dengan ulang tahun iSTTS yang ke-40, kegiatan Dies Natalis XXXL yang diselenggarakan pada bulan November 2019 dalam bentuk acara anniversary party bagi warga iSTTS sekaligus welcome party sebagai acara malam puncak. acara Dies tahhun ini bertemakan Carnival', '21 November 2019', 'iSTTS campus', '', 0, '', ''),
(5, './../assets/events/gamers.jpg', 'ISTTS GAMERS LEAGUE 2019', 'Mobile Legends adalah sebuah permainan mobile berjenis MOBA (Multiplayer Online Battle Arena) dengan system beberapa tim akan ditandingkan dalam perlombaan ini untuk mencapai dan menghancurkan base musuh sambil mempertahankan base mereka sendiri. Game ini menggunakan system Online Mutiplayer agar bisa bermain game, bahkan berinteraksi dengan orang lain di seluruh penjuru dunia, menggunakan Local Area Network maupun Internet. Indonesia menjadi salah satu kontributor pengguna aktif bulanan Mobile Legends terbesar dengan angka 29,4% dari total 170 juta pengguna aktif per bulan secara global, jumlah tersebut sama dengan 49,98 juta pengguna aktif. Disamping perlombaan Mobile Legends, kami juga menandingkan perlombaan Pokemon Trading Card Game karena kami melihat antusiasme pasar yang sangat besar untuk Pokemon Trading Card Game ini. Permainan Pokémon Trading Card Game dengan cepat meraih antusiasme yang besar di banyak negara sehingga pada bulan Maret 2019, permainan kartu ini telah berhasil menjual lebih dari 27,2 milyar kartu di seluruh dunia termasuk di Indonesia ini. Oleh karena itu, kami ingin mengadakan perlombaan iSTTS Gamers League mengingat kedua game yang ditandingkan yaitu Mobile Legend dan Pokemon Card Game sangat diminati di Indonesia, terutama di kota Surabaya, oleh berbagai kalangan baik dari pelajar SMA hingga pegawai perusahaan.', '12 Desember 2019', 'iSTTS gedung N-305', '', 0, '', ''),
(6, './../assets/events/seminarMovie.jpg', 'WORKSHOP SHORT MOVIE HIMA SIB 2019', 'Sebuah Seminar yang diadakan oleh Himpunan Mahasiswa SIB yang bertujuan untuk meningkatkan skill dan pengetahuan dalam bidang perfilman', '2 Mei 2019', 'Gedung Auditorium iSTTS', '', 0, '', ''),
(7, './../assets/events/ITRC.jpg', 'ITRC 2019', 'Lomba robotik yang diadakan oleh iSTTS yang ditujukan untuk para anak SMA agar dapat memperlihatkan skill robotik mereka sekaligus memperkenalkan iSTTS kepada masyarakat luar', '18 November 2019', 'Gedung L-101 iSTTS', '', 0, '', ''),
(8, './../assets/events/seminarFoods.jpg', 'KSP SEASON 3 EPISODE 6 \"HYGIENCE & SANITASI PENGOLAHAN MAKANAN\"', 'Hai para warga ISTTS, KSP kali ini adalah KSP terakhir pada season ini, dengan judul, \"Hygience & Sanitasi Pengolahan Makanan\" yang cocok banget buat kalian yang ingin menambah pengetahuan.', '3 Oktober 2019', 'Gedung iSTTS Ruang E-402', '', 0, '', ''),
(10, 'temp gambar', 'International Typography Student Poster Exhibition: Type Unite Project.', 'Type Unite adalah wadah yang memamerkan karya mahasiswa melalui poster tipografi. Sejauh perkembangannya, peserta mahasiswa yang telah aktif terdiri dari berbagai negara seperti Turki, Indonesia, Ekuador, Polandia, Uni Emirat Arab, Korea Selatan, Hungaria dan Amerika Serikat. Tujuanya Type Unite adalah menghubungkan keunikan budaya dari berbagai negara di dunia melalui karya poster tipografi. Karya poster yang ditampilkan merupakan eksperimen komposisi tipografi yang merepresentasikan suatu tema yang telah ditentukan. Melihat perkembangan yang positif ini maka Jurusan Desain Komunikasi Visual, Universitas Pelita Harapan bekerjasama dengan Type Unite untuk mengadakan pameran di tahun 2019. Pentingnya keikutsertaan mahasiswa dan dosen dalam pameran yang akan diadakan, bertujuan untuk meningkatkan mutu pembelajaran desain karena setiap karya melalui proses kurasi yang professional.                                                                ', '', 'Gedung iSTTS Auditorium', 'test Link', 0, 'Typograf', 'S1-SIB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
