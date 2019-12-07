-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2019 pada 11.26
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
-- Struktur dari tabel `institusi`
--

DROP TABLE IF EXISTS `institusi`;
CREATE TABLE `institusi` (
  `id` int(11) NOT NULL,
  `namaInstitusi` varchar(10) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `institusi`
--

INSERT INTO `institusi` (`id`, `namaInstitusi`, `isi`) VALUES
(1, 'LPPM', '<section class=\"card\">\r\n            <img class=\"imgs\" style=\"margin-left:20px; margin-top:150px;\" src=\"assets/institusi/1.jpg\" alt=\"\">\r\n            <div>\r\n                <h1>LPPM</h1>\r\n                <p>Lembaga Penelitian dan Pengabdian kepada Masyarakat merupakan unit yang memberdayakan sumber daya dalam melakukan penelitian inovatif yang mempertimbangkan kearifan lokal serta pengabdian masyarakat yang tepat sasaran. Secara khusus tujuan dari LPPM mencakup hal-hal sebagai berikut:</p>\r\n                <p>1. Meningkatkan peran dan partisipasi dosen dalam penelitian.\r\n                    <br>2. Meningkatkan kuantitas dan kualitas penelitian, dan pelayanan masyarakat yang bernuansa IPTEKS.\r\n                    <br>3. Melakukan diseminasi dan promosi hasil-hasil penelitian dan pengabdian kepada masyarakat serta upaya untuk pemerolehan hak atas kekayaan intelektual yang dilakukan lembaga, dosen, dan mahasiswa.</p>\r\n            </div>\r\n        </section>'),
(2, 'P2KPN', '<section class=\"card\" data-aos=\"flip-left\">\r\n            <img class=\"imgs\" style=\"margin-left:20px; margin-top:150px;\" src=\"assets/institusi/2.jpg\" alt=\"\">\r\n            <div>\r\n                <h1>P2KPN</h1>\r\n                <p>Sekolah Tinggi Teknik Surabaya (STTS) sebagai salah satu perguruan tinggi teknik swasta tertua di Indonesia bagian Timur mempunyai komitmen yang sangat tinggi dalam mengembangkan kewirausahaan di Perguruan Tinggi. Dengan Terbentuknya lembaga ini dimaksudkan untuk memberikan wadah bagi berbagai kegiatan kewirausahaan di Sekolah Tinggi Teknik Surabaya. Dengan melalui dukungan pemerintah, Program Kewirausahaan STTS kini telah berkembang menjadi Pengembangan Pusat Kewirausahaan dan Produktivitas Nasional di STTS (P2KPN STTS), sehingga peran STTS dalam usaha mengembangkan kewirausahaan secara internal maupun dalam masyarakat makin menonjol.</p>\r\n            </div>\r\n        </section>'),
(3, 'LEMBAGA JA', '<section class=\"card\" data-aos=\"flip-right\">\r\n            <img class=\"imgs\" style=\"margin-left:20px; margin-top:150px;\" src=\"assets/institusi/3.jpg\" alt=\"\">\r\n            <div>\r\n                <h1>LEMBAGA JAMINAN MUTU</h1>\r\n                <p>Sekolah Tinggi Teknik Surabaya sebagai salah satu perguruan tinggi di Indonesia yang melakukan kegiatan sistematik penjaminan mutu pendidikan tinggi, menetapkan dan mewujudkan visi melalui pelaksanaan misinya, serta berkomitmen untuk memberikan kontribusi kepada negara dan masyarakat dengan menghasilkan sumber daya manusia yang berkualitas. Penjaminan mutu dilakukan oleh unit yang dibentuk untuk melakukan perencanaan dan pelaksanaan penjaminan mutu baik akademik maupun non akademik. Unit tersebut adalah Lembaga Jaminan Mutu (LJM), yang beranggotakan personal dari masing masing unit kerja yang ada di Sekolah Tinggi Teknik Surabaya. ?Copyright 2013 Sekolah Tinggi Teknik Surabaya</p>\r\n            </div>\r\n        </section>'),
(4, 'PENGEMBANG', '<section class=\"card\" data-aos=\"flip-left\">\r\n            <img class=\"imgs\" style=\"margin-left:20px; margin-top:150px;\" src=\"assets/institusi/4.jpg\" alt=\"\">\r\n            <div>\r\n                <h1>PENGEMBANGAN KELEMBAGAAN</h1>\r\n                <p>Badan ini dikhususkan untuk mengembangkan STTS di bidang akademik. Berbagai tantangan dari Ditjen Dikti, seperti Higher Education Long Term Strategy (HELTS 2003-2010) merupakan peluang bagi badan ini untuk mengharumkan nama STTS. Badan ini telah berhasil mengangkat STTS sehingga memenangkan beberapa penghargaan, yaitu sebagai Perguruan Tinggi Unggulan (Kelompok Sekolah Tinggi) di bidang Kelembagaan dan Tata Kelola, Penelitian dan Pengabdian pada Masyarakat, Kemahasiswaan dan Tri Dharma Perguruan Tinggi di Jawa Timur. STTS juga berhasil memperoleh bantuan Program Hibah Pembinaan Perguruan Tinggi Swasta (PHP-PTS).</p>\r\n            </div>\r\n        </section>'),
(5, 'TRAINING C', '<section class=\"card\" data-aos=\"flip-right\">\r\n            <img class=\"imgs\" style=\"margin-left:20px; margin-top:150px;\" src=\"assets/institusi/5.jpg\" alt=\"\">\r\n            <div>\r\n                <h1>TRAINING CENTER</h1>\r\n                <p>Selain menggelar kegiatan perkuliahan, STTS juga membuka beberapa training. Training-training ini merupakan salah satu cara bagi STTS untuk memberikan sertifikat kepada peserta-peserta yang qualified. Bahkan, beberapa sertifikat yang diberikan STTS merupakan sertifikat berstandar internasional. Klik daftar training di sebelah kanan untuk informasi lebih lanjut.</p>\r\n            </div>\r\n        </section>'),
(6, 'PUSAT STUD', '<section class=\"card\" data-aos=\"flip-left\">\r\n            <img class=\"imgs\" style=\"margin-left:20px; margin-top:150px;\" src=\"assets/institusi/6.jpg\" alt=\"\">\r\n            <div>\r\n                <h1>PUSAT STUDI</h1>\r\n                <p>Segala penelitian di STTS selalu mengacu pada roadmap yang telah disusun oleh Pusat-pusat Studi. Dengan demikian, Pusat Studi menjadi tombak penelitian para dosen, juga sebagai komunitas yang mendukung pengembangan teknologi mutakhir. Tidak hanya penelitian, Pusat Studi juga menjalin kerja sama dengan berbagai industri kreatif untuk menghasilkan produk-produk inovatif.</p>\r\n            </div>\r\n        </section>'),
(7, 'ENGLISH CO', '<section class=\"card\" data-aos=\"flip-right\">\r\n            <img class=\"imgs\" style=\"margin-left:20px; margin-top:150px;\" src=\"assets/institusi/7.jpg\" alt=\"\">\r\n            <div>\r\n                <h1>ENGLISH CONVERSATION CLASS(ECC)</h1>\r\n                <p>English Conversation Class (ECC) adalah kelas bahasa Inggris untuk membekali mahasiswa dengan kemampuan mengutarakan pendapat secara lisan dalam bahasa Inggris. Tidak dapat dipungkiri, pemakaian bahasa Inggris dalam dunia bisnis dan teknologi sudah menjadi sebuah kebutuhan. ECC melatih calon-calon sarjana agar berani berbicara dalam bahasa Inggris dan mampu menyampaikan pemikiran mereka dalam sebuah diskusi atau presentasi. Beberapa kegiatan tak rutin yang tercakup dalam kelas ECC antara lain adalah partisipasi mahasiswa dalam Debate Contest dan penyelenggaraan kuliah tamu dengan native speaker sebagai pengajar. ?Copyright 2013 Sekolah Tinggi Teknik Surabaya</p>\r\n            </div>\r\n        </section>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `institusi`
--
ALTER TABLE `institusi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `institusi`
--
ALTER TABLE `institusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
