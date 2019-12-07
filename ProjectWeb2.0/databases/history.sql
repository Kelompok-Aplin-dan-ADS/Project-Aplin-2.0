-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2019 pada 11.25
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
-- Struktur dari tabel `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `tahun` int(4) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`tahun`, `isi`) VALUES
(1979, '<section class=\"card\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:120px;\">1979</div>\r\n        <div>\r\n            <p>STTS pada mulanya dikenal dengan Institut Teknisi Elektro Surabaya \r\n                (ITES) yang didirikan pada tanggal 1 Maret 1979. ITES berlokasi di jalan Bali\r\n                no. 17 Surabaya dan dibawah naungan Yayasan Perguruan Tinggi Teknik Nusantara.\r\n                Penyelenggaraan perguruan tinggi ini didasarkan atas kesadaran untuk ikut berperan\r\n                serta dalam memenuhi kebutuhan pendidikan tinggi khususnya di bidang \r\n                teknik elektro.\r\n            </p>\r\n        </div>\r\n    </section>'),
(1980, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:30px;\">1980</div>\r\n        <div>\r\n            <p>Dengan jumlah mahasiswa yang semakin banyak, \r\n                kampus ITES pindah ke jalan Gubeng Pojok no. 15 Surabaya.\r\n            </p>\r\n        </div>\r\n    </section>'),
(1982, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:120px;\">1982</div>\r\n        <div>\r\n            <p>ITES berubah nama menjadi Sekolah Tinggi ElektroTeknik Surabaya (STIELS) dan memperoleh status TERDAFTAR hingga program sarjana lengkap S1 (insinyur). \r\n                Untuk memenuhi kebutuhan masyarakat akan tenaga ahli bidang komputer dengan masa pendidikan yang cepat, tahun ini juga STIELS menyelenggarakan program Diploma 3 jurusan Manajemen Informatika dan Teknik Komputer.\r\n            </p>\r\n        </div>\r\n    </section>'),
(1983, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:120px;\">1983</div>\r\n        <div>\r\n            <p>\r\n            Dengan pengesahan dari Kopertis Wilayah VII, STIELS menyelenggarakan program sarjana penuh melalui SK Menteri Pendidikan dan Kebudayaan RI No. 261/O/1983. Pada bulan Desember 1983, STIELS mulai mengikuti ujian sarjana muda dan pada tahun berikutnya mulai mengikuti ujian sarjana negara. STIELS merupakan perguruan tinggi swasta pertama di luar Jakarta dan Bandung yang mengikuti ujian sarjana negara.\r\n            </p>\r\n        </div>\r\n    </section>'),
(1985, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:120px;\">1985</div>\r\n        <div>\r\n            <p>\r\n            STIELS berganti nama menjadi Sekolah Tinggi Teknik Surabaya (STTS) dan membuka jurusan baru, yaitu Strata-1 Teknik Informatika dan Komputer. Sejak itu pula kegiatan belajar mengajar secara bertahap dipindahkan ke kampus baru di jalan Ngagel Jaya Tengah no. 73-77 yang dilengkapi dengan gedung laboratorium.\r\n            </p>\r\n        </div>\r\n    </section>'),
(1988, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">1988</div>\r\n        <div>\r\n            <p>\r\n            Tim Akreditasi Direktorat Jendral Pendidikan Tinggi Republik Indonesia memutuskan kenaikan status TERDAFTAR menjadi DIAKUI untuk semua program studi yang ada di STTS, yaitu:\r\n            <br>- Strata-1 Teknik Elektro\r\n            <br>- Strata-1 Teknik Informatika dan Komputer\r\n            <br>- Diploma-3 Manajemen Informatika dan Teknik Komputer\r\n            </p>\r\n        </div>\r\n    </section>'),
(1992, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">1992</div>\r\n        <div>\r\n            <p>\r\n            STTS membuka jurusan Strata-1 Teknik dan Manajemen Industri, yang membekali mahasiswa dengan sejumlah teknik dan ilmu manajemen di bidang industri. Selain itu program ini juga menekankan penggunaan komputer sebagai unsur pengendalian.\r\n            </p>\r\n        </div>\r\n    </section>'),
(1993, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">1993</div>\r\n        <div>\r\n            <p>\r\n            Pemerintah melalui Direktorat Jendral Pendidikan Tinggi Republik Indonesia memutuskan kenaikan status dari DIAKUI menjadi DISAMAKAN untuk 3 (tiga) program studi, yaitu:\r\n            <br>- Strata-1 Teknik Elektro\r\n            <br>- Strata-1 Teknik Informatika dan Komputer\r\n            <br>- Diploma-3 Manajemen Informatika dan Teknik Komputer\r\n            </p>\r\n        </div>\r\n    </section>'),
(1997, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">1997</div>\r\n        <div>\r\n            <p>\r\n            Pertama kali Depdikbud menerapkan akreditasi, STTS ditetapkan sebagai Perguruan Tinggi Terakreditasi (yang pertama di Indonesia Timur diantara perguruan tinggi swasta jurusan sejenis)\r\n            </p>\r\n        </div>\r\n    </section>'),
(2000, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2000</div>\r\n        <div>\r\n            <p>\r\n            STTS bekerja sama dengan Swinburne University of Technology (SUT) - Melbourne Australia , menyelenggarakan link program Bachelor of Science Information Technology (BIT) dan program studi lanjut untuk jenjang master di SUT.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2003, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2003</div>\r\n        <div>\r\n            <p>\r\n            Untuk menghasilkan sumber daya manusia di bidang teknologi informasi, STTS menyelenggarakan Program Pascasarjana. Program Pascasarjana program studi Teknologi Informasi STTS merupakan program pascasarjana perguruan tinggi swasta pertama di Jatim yang berbasiskan teknologi informasi.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2006, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2006</div>\r\n        <div>\r\n            <p>\r\n            STTS menyelenggarakan program strata-1 Sistem Informasi Bisnis, dengan tujuan menghasilkan sarjana dengan kemampuan yang merupakan perpaduan antara ilmu informatika dan manajemen\r\n            </p>\r\n        </div>\r\n    </section>'),
(2008, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2008</div>\r\n        <div>\r\n            <p>\r\n            STTS merupakan Perguruan Tinggi berbasis teknologi informasi yang tentunya mampu memberikan kontribusi di bidang desain. Selaras dengan kebutuhan dan permintaan tenaga desain yang semakin banyak masuk ke STTS pada tahun 2008 STTS membuka jurusan Desain Komunikasi Visual dan tiga tahun kemudian , di tahun 2011 STTS membuka jurusan Desain Produk.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2009, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2009</div>\r\n        <div>\r\n            <p>\r\n            Tahun 2009, STTS membuka program Studi S1 Teknik Informatika untuk tenaga professional di bidang IT, dimana perkuliahan diselenggrakan pada sore hingga malam hari. Kegiatan ini tetap diselenggrakan dengan kualitas sama dengan program S1 Teknik Informatika yang diselenggrakan pada siang hari.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2011, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2011</div>\r\n        <div>\r\n            <p>\r\n            Pada tahun 2011 STTS bekerja sama dengan 2 univesitas di Netherland yaitu fontys Univesity of Technologi dan Saxion university of Technology. Kerjasama yang dilakukan adalah Join degree sehingga mahasiswa bisa mendapatkan 2 gelar sejenis yaitu Gelar sarjana STTS dan gelar Bachelor dari Fontys University/ Saxion University dalam waktu kurang lebih 4 tahun. Pada tahun 2011 pula STTS menambah fasilitas satu gedung baru berlantai tujuh yang diberi nama Tower of Eagle. Gedung ini dipakai untuk layanan E-library, ruang pertemuan, ruang kuliah, ruang kuliah model theater dan ruang pertemuan bagi kegiatan kemahasiswaan.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2012, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2012</div>\r\n        <div>\r\n            <p>\r\n            Pada tahun 2012 STTS bekerja sama dengan University of New Castle, Australia untuk kerjasama transfer kredit mata kuliah bagi jurusan Informatika, sehingga mahasiswa STTS dapat melanjutkan studi untuk meraih gelar Bachelor of ICT di University of New Castle Australia, baik di Australia Campus atau di Singapore Campus.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2014, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2014</div>\r\n        <div>\r\n            <p>\r\n            Kerjasama STTS dan Malaysia University of Science and Technology(MUST) terjalin. Kerjasama tersebut mencakup:\r\n            <br>- Menawarkan mahasiswa S1 maupun S2 untuk mengambil joint atau dual degree dari MUST dan STTS\r\n            <br>- Penempatan mahasiswa magang\r\n            <br>- Mengadakan konferensi, seminar, atau workshop bersama, baik untuk internal maupun umum\r\n            <br>- Mengadakan kuliah tamu\r\n            <br>- Kerjasama penelitian dan tukar menukar informasi\r\n            <br>\r\n            5 dari 6 Program Studi Sarjana di STTS telah terakreditasi B\r\n            <br>- S1 Teknik Elektro (B)\r\n            <br>- S1 Teknik Informatika (B)\r\n            <br>- S1 Teknik Industri (B)\r\n            <br>- S1 Desain Komunikasi Visual (B)\r\n            <br>- S1 Desain Produk (B)\r\n            <br>-'),
(2015, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2015</div>\r\n        <div>\r\n            <p>\r\n            STTS mendapat akreditasi B dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) NoSK: 401/SK/BAN-PT/Akred/V/2015 dan di tahun yang sama, STTS menjalin kerjasama dengan Universitas Dong Eui,Busan, Korea Selatan.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2016, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2016</div>\r\n        <div>\r\n            <p>\r\n            <br> • Didirikan Lembaga Sertifikasi Profesi (LSP) STTS yang bernaung di bawah Badan Nasional Sertifikasi Nasional (BNSP).\r\n            <br> • Memperoleh peningkatan status dari Perguruan Tinggi kelompok Binaan menjadi Perguruan Tinggi kelompok Madya.\r\n            <br> • Meraih predikat PT Unggulan.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2017, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2017</div>\r\n        <div>\r\n            <p>\r\n            <br> • STTS meresmikan unit baru yaitu Kantor Urusan Internasional (KUI). KUI ini bertugas mengurusi berbagai macam kegiatan STTS yang bersifat internasional,misalnya seminar internasional, studi ke luar negeri, pertukaran mahasiswa, dan lain sebagainya.\r\n            <br> • Kembali meraih predikat Perguruan Tinggi Unggulan. Predikat tersebut sudah diraih sebanyak 8 kali.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2018, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2018</div>\r\n        <div>\r\n            <p>\r\n            Dalam Sambutan pada acara Wisuda STTS XXXV bulan November 2018, Kepala LL-Dikti wilayah VII Jawa Timur menyatakan bahwa STTS telah mencapai prestasi menjadi Sekolah Tinggi bidang Teknik terbaik di lingkungan LL-Dikti wilayah VII JawaTimur dan diminta untuk terus berkembang dan memberikan kontribusi bagi pendidikan di Indonesia.\r\n            </p>\r\n        </div>\r\n    </section>'),
(2019, '<section class=\"card\" data-aos=\"fade-left\">\r\n        <div style=\"font-size:50pt; color:brown; text-align:center;padding-top:90px;\">2019</div>\r\n        <div>\r\n            <p>\r\n            Pada tanggal 24 Juni 2019, SK Menteri Nomor 481/KPT/ I /2019 tentang Izin perubahan bentuk nama Sekolah Tinggi Teknik Surabaya (STTS) telah resmi berubah menjadi Institut Sains dan Teknologi Terpadu Surabaya (iSTTS).\r\n            </p>\r\n        </div>\r\n    </section>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
