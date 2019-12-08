-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2019 pada 05.19
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

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
-- Struktur dari tabel `acara`
--

DROP TABLE IF EXISTS `acara`;
CREATE TABLE `acara` (
  `id_acara` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul_1` varchar(255) NOT NULL,
  `judul_2` varchar(255) NOT NULL,
  `deskripsi_1` text NOT NULL,
  `deskripsi_2` text NOT NULL,
  `waktu` varchar(16) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `link_halaman` varchar(255) NOT NULL,
  `tag` varchar(10) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`id_acara`, `gambar`, `judul_1`, `judul_2`, `deskripsi_1`, `deskripsi_2`, `waktu`, `tempat`, `link_halaman`, `tag`, `kategori`, `jurusan`) VALUES
(1, './../assets/events/retret-event.jpg', 'RETRET KMK 2019', '', 'Retret Seminar Hidup Dalam Roh yang diadakan 3 hari 2 malam dengan tema “Light It Up” ini akan disajikan melalui pengajaran dalam 8 sesi (50%), renungan serta doa (20%), dan sharing kelompok (15%), juga dalam rekreasi dan permainan (15%).\r\nDiharapkan dengan adanya pembagian acara menjadi 8 sesi yang akan dimulai dengan materi pertama “Cinta Kasih Allah” dibawakan oleh orang awam agar setiap pengalaman yang disharingkan lebih pada bagaimana kita mengerti dan memahami pribadi Tuhan Yesus sebagai pribadi yang penuh kasih. Harapan pada sesi ini, peserta dapat merenungkan dan menyadari apa saja yang telah Tuhan berikan untuk hidup kita melalui kasih-Nya yang tak berkesudahan.\r\nPada sesi kedua yang bertemakan “Penyelamatan”, peserta diingatkan dan diajak untuk mengakui kesalahan-kesalahan apa saja yang telah diperbuat, dan diajak untuk mohon ampun melalui Tuhan Yesus. Harapan pada sesi ini peserta dapat lebih mengerti makna dari pengampunan dan penyelamatan yang sudah dilakukan oleh Tuhan Yesus untuk seluruh umat manusia tanpa terkecuali.\r\nSesi ketiga dengan tema “Hidup Baru” akan diingatkan bahwa hidup baru di dalam Kristus sangatlah penting, dan mengenalkan bagaimana kita dapat memulai hidup baru dalam Kristus, serta apa saja yang dapat kita lakukan.\r\nSesi keempat yaitu “Menerima Karunia Allah”. Pada sesi ini kita diberitahu bahwa begitu banyak karunia Allah yang akan diberikan kepada setiap orang yang mengasihi-Nya dan karunia-karunia tersebut dapat membantu kita untuk mengetahui apa yang harus kita lakukan sebagai pengikut Kristus yang sejati.\r\nSesi kelima yaitu “Pencurahan Roh Kudus”, peserta akan didoakan secara pribadi oleh tim doa. Pada sesi ini Roh Kudus akan tercurah kepada setiap peserta dan Roh Kudus yang sudah dikaruniakan kepada setiap orang saat dibaptis akan dinyalakan kembali. \r\nSesi keenam yaitu “Pujian dan Penyembahan,” peserta akan diajak untuk mendalami salah satu cara membangun relasi yang lebih intim dengan Tuhan dan mempergunakan karunia Roh Kudus yang telah mereka dapatkan, yaitu dengan melakukan pujian dan penyembahan setiap hari saat berdoa.\r\nSesi ketujuh yaitu “Pertumbuhan”. Pada sesi ini peserta akan di jelaskan bagaiamana mereka harus hidup bertumbuh didalam Kristus untuk tetap menjaga Roh Kudus yang telah dikaruniakan Allah agar tetap menyala-nyala di dalam diri mereka.\r\nSesi kedelapan yaitu “Diubah Serupa Kristus”. Pada sesi ini perserta akan dibimbing untuk hidup baru di dalam Kristus dengan meninggalkan cara hidup yang lama dan memulai hidup  baru di dalam Kristus. \r\nSelain kedelapan sesi tersebut peserta akan diberi kesempatan untuk sharing di dalam kelompok dengan dibimbing oleh fasilitator masing-masing. Sharing ini bertujuan agar setiap peserta dapat turut mengalami kasih Tuhan melalui pengalaman-pengalaman dari teman yang lain. Kegiatan ini juga bertujuan untuk mempererat tali persaudaraan dan kekompakkan antar peserta, khususnya di dalam kelompok. Diharapkan melalui rangkaian acara retret ini, baik hubungan pribadi dengan Tuhan dan hubungan persaudaraan antara anggota KMK dapat terjalin dengan erat.', '', '29 November 2019', 'Jatijejer, Mojokerto', '', '3|4', '1', '02'),
(2, './../assets/events/shortMovieContest.jpg', 'Lomba Short Movie 2019', '', 'Pemberitahuan tentang lomba yang di umumkan pada 2 november 2019 dengan batas pengumpulan video pada 16 november 2019 dan pemenang akan di umumkan pada tanggal 23 november 2019', '', '2 November 2019', 'istts auditorimum', '', '4|5', '1', '01'),
(3, './../assets/events/kunjunganApple.png', 'KUNJUNGAN APPLE DEVELOPER ACADEMY 2019', '', 'Mengingat Perkembangan teknologi informatika dan bisnis di Indonesia yang semakin berkembang pada saat ini, seorang sarjana sistem informasi bisnis dituntut untuk semakin giat memperluas dan memperdalam wawasan dalam bidang teknologi informatika dan manajemen bisnis. Tanpa pengetahuan teknologi informatika dan sistem informasi bisnis praktis yang memadai, seorang sarjana Sistem Informasi Bisnis hanya akan menjadi penonton di negeri sendiri. Seandainya pun mereka bekerja, maka hasil yang diperoleh akan jauh dari optimal. Berkenaan dengan hal tersebut, kami selaku Himpunan Mahasiswa S-1 Sistem Informasi Bisnis Institut Sains Terapan Dan Teknologi Surabaya (HIMA SIB iSTTS) bermaksud mengajak mahasiswa jurusan Sistem Informasi Bisnis untuk belajar dan memahami secara langsung membuat aplikasi yang baik, serta memahami kolaborasi yang efektif antar team dari Apple Developer Academy yang nantinya mungkin akan menjadi developer Apple.', '', '29 Oktober 2019', 'Kumpul Lapangan istts', '', '1|5', '1', '11'),
(4, './../assets/events/diesNatalis.png', 'DIES NATALIS LUSTRUM 8 ISTTS', '', 'sehubungan dengan ulang tahun iSTTS yang ke-40, kegiatan Dies Natalis XXXL yang diselenggarakan pada bulan November 2019 dalam bentuk acara anniversary party bagi warga iSTTS sekaligus welcome party sebagai acara malam puncak. acara Dies tahhun ini bertemakan Carnival', '', '21 November 2019', 'iSTTS campus', '', '1|3', '1', '12'),
(5, './../assets/events/gamers.jpg', 'ISTTS GAMERS LEAGUE 2019', '', 'Mobile Legends adalah sebuah permainan mobile berjenis MOBA (Multiplayer Online Battle Arena) dengan system beberapa tim akan ditandingkan dalam perlombaan ini untuk mencapai dan menghancurkan base musuh sambil mempertahankan base mereka sendiri. Game ini menggunakan system Online Mutiplayer agar bisa bermain game, bahkan berinteraksi dengan orang lain di seluruh penjuru dunia, menggunakan Local Area Network maupun Internet. Indonesia menjadi salah satu kontributor pengguna aktif bulanan Mobile Legends terbesar dengan angka 29,4% dari total 170 juta pengguna aktif per bulan secara global, jumlah tersebut sama dengan 49,98 juta pengguna aktif. Disamping perlombaan Mobile Legends, kami juga menandingkan perlombaan Pokemon Trading Card Game karena kami melihat antusiasme pasar yang sangat besar untuk Pokemon Trading Card Game ini. Permainan Pokémon Trading Card Game dengan cepat meraih antusiasme yang besar di banyak negara sehingga pada bulan Maret 2019, permainan kartu ini telah berhasil menjual lebih dari 27,2 milyar kartu di seluruh dunia termasuk di Indonesia ini. Oleh karena itu, kami ingin mengadakan perlombaan iSTTS Gamers League mengingat kedua game yang ditandingkan yaitu Mobile Legend dan Pokemon Card Game sangat diminati di Indonesia, terutama di kota Surabaya, oleh berbagai kalangan baik dari pelajar SMA hingga pegawai perusahaan.', '', '12 Desember 2019', 'iSTTS gedung N-305', '', '2|4', '1', '17'),
(6, './../assets/events/seminarMovie.jpg', 'WORKSHOP SHORT MOVIE HIMA SIB 2019', '', 'Sebuah Seminar yang diadakan oleh Himpunan Mahasiswa SIB yang bertujuan untuk meningkatkan skill dan pengetahuan dalam bidang perfilman', '', '2 Mei 2019', 'Gedung Auditorium iSTTS', '', '2|3', '1', '14'),
(7, './../assets/events/ITRC.jpg', 'ITRC 2019', '', 'Lomba robotik yang diadakan oleh iSTTS yang ditujukan untuk para anak SMA agar dapat memperlihatkan skill robotik mereka sekaligus memperkenalkan iSTTS kepada masyarakat luar', '', '18 November 2019', 'Gedung L-101 iSTTS', '', '2|3', '1', '18'),
(8, './../assets/events/seminarFoods.jpg', 'KSP SEASON 3 EPISODE 6 \"HYGIENCE & SANITASI PENGOLAHAN MAKANAN\"', '', 'Hai para warga ISTTS, KSP kali ini adalah KSP terakhir pada season ini, dengan judul, \"Hygience & Sanitasi Pengolahan Makanan\" yang cocok banget buat kalian yang ingin menambah pengetahuan.', '', '3 Oktober 2019', 'Gedung iSTTS Ruang E-402', '', '1|3|4', '1', '31'),
(10, 'temp gambar', 'International Typography Student Poster Exhibition: Type Unite Project.', '', 'Type Unite adalah wadah yang memamerkan karya mahasiswa melalui poster tipografi. Sejauh perkembangannya, peserta mahasiswa yang telah aktif terdiri dari berbagai negara seperti Turki, Indonesia, Ekuador, Polandia, Uni Emirat Arab, Korea Selatan, Hungaria dan Amerika Serikat. Tujuanya Type Unite adalah menghubungkan keunikan budaya dari berbagai negara di dunia melalui karya poster tipografi. Karya poster yang ditampilkan merupakan eksperimen komposisi tipografi yang merepresentasikan suatu tema yang telah ditentukan. Melihat perkembangan yang positif ini maka Jurusan Desain Komunikasi Visual, Universitas Pelita Harapan bekerjasama dengan Type Unite untuk mengadakan pameran di tahun 2019. Pentingnya keikutsertaan mahasiswa dan dosen dalam pameran yang akan diadakan, bertujuan untuk meningkatkan mutu pembelajaran desain karena setiap karya melalui proses kurasi yang professional.                                                                ', '', '', 'Gedung iSTTS Auditorium', 'test Link', '1|2', '1', '12'),
(11, './../assets/events/seminarFoods.jpg', '[Lain-lain] Kuliah Tamu dengan dosen dari Swinburn', '', 'Hadirilah kuliah tamu yang akan diadakan pada:<br>\r\nHari/ Tanggal : Rabu / 09 Januari 2007<br>\r\nPukul : 10.30 - 12.30 WIB<br>\r\nTempat : U-401<br>\r\nPembicara : Dr. Francois Malherbe (dosen dari Swinburne University)<br>\r\nTema : Multimedia dengan judul \"Games and Interactivity\"<br>\r\n<b>Pendaftaran :</b><br>\r\nDi L-202 pada Ibu Susi<br>\r\nTempat terbatas lohhh....Cepet daftar ya..??', '', '0', '0', '', '1|3|5', '2', '14'),
(12, './../assets/events/retret-event.jpg', '[Lain-lain] Kuliah Tamu dengan dosen dari Swinburn', '', 'Hadirilah kuliah tamu yang akan diadakan pada:<br>\r\nHari/ Tanggal : Rabu / 09 Januari 2007<br>\r\nPukul : 10.30 - 12.30 WIB<br>\r\nTempat : U-401<br>\r\nPembicara : Dr. Francois Malherbe (dosen dari Swinburne University)<br>\r\nTema : Multimedia dengan judul \"Games and Interactivity\"<br>\r\n<b>Pendaftaran :</b><br>\r\nDi L-202 pada Ibu Susi<br>\r\nTempat terbatas lohhh....Cepet daftar ya..??', '', '', '', '', '2|4|5', '2', '13'),
(13, './../assets/events/shortMovieContest.jpg', '[Organisasi] Pendaftaran Pengurus IC Periode Genap', '', 'Diumumkan bagi seluruh mahasiswa STTS yang aktif telah dibuka <b>pendaftaran Pengurus Internet Center Periode Genap 2007/2008.</b><br>\r\nBagi yang berminat dapat mengambil formulir pendaftaran di ruang Senat Mahasiswa. Pendaftaran dan pengumpulan formulir dilakukan paling lambat :<br><br>\r\nHari / Tanggal : Sabtu / 29 Januari 2008<br>\r\nWaktu : Pk 15.00 WIB<br>\r\nTempat : Didalam kotak KSK - Litbang Senat Mahasiswa<br><br>\r\nMengenai wawancara pemilihan Pengurus Internet Center periode Genap 2007/2008 akan diberitahukan selanjutnya. Demikian pengumuman ini harap diperhatikan.', '', '', '', '', '2|4|5', '2', '14'),
(14, './../assets/events/gamers.jpg', '[ecc] ECC PLACEMENT TEST INFO', '', 'It is here by announced that ECC Placement Test will be held on:\r\n      <B>\r\n      <BR>\r\n      Monday, January 28, 2008\r\n      <BR>\r\n      From 06.30 until 09.00\r\n      </B>\r\n      <BR>\r\n      (!!ONLY ONE DAY!!)\r\n      <BR>\r\n      (<B><U>please come on time</U></B>)\r\n      <BR>\r\n      at U-401\r\n      <BR><BR>\r\n      <U>Important notes</U>:\r\n      <UL>\r\n          <LI><B>THE PLACEMENT TEST IS ONLY HELD ON\r\n                <U>January 28, 2008!</U> THERE IS NO PLACEMENT TEST\r\n                ON <U>January 29, 2008</U>.</B>\r\n          </LI>\r\n          <LI>This placement test is for <B>ALL STUDENTS OF <U>S-1 INFORMATICS 2007</U>\r\n                and STUDENTS from other departments or previous years WHO HAVEN\'T\r\n                TAKEN THE TEST.</B>\r\n          </LI>\r\n          <LI>THE RESULT (YOUR SCORE AND LEVEL) CAN BE FOUND OUT <B>ON THE SAME DAY</B>\r\n                AND WILL BE PUT ON <B>THE ECC BOARD.</B>\r\n          </LI>\r\n          <LI>PLEASE GO TO COMPUTER LABS (L-BUILDING), 3<SUP>RD</SUP> FLOOR, TO GET YOUR\r\n                 RANDOM NUMBER <B>ON WEDNESDAY, JANUARY 30, 2008.</B>\r\n          </LI>\r\n          <LI>AFTER GETTING YOUR RANDOM NUMBER, YOU CAN REGISTER TO GET A\r\n                CLASS AT THE COMPUTER LABS <B>ON THURSDAY, JANUARY 31, 2007.</B>\r\n          </LI>\r\n          <LI><B>PLEASE</B> CONSULT WITH ECC LECTURERS or LAB ASSISTANTS,\r\n                SHOULD YOU HAVE ANY PROBLEMS WITH REGISTRATION.\r\n          </LI>\r\n      </UL>', '', '', '', '', '1|2|3', '2', '17'),
(15, './../assets/events/seminarFoods.jpg', 'Pengumpulan KKM', '', 'Bagi para mahasiswa yang belum melakukan pemutihan KKM, harap mengumpulkan pada bususi/L-202. Demikian pengumuman ini harap diperhatikan.', '', '', '', '', '3|4|5', '2', '13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
