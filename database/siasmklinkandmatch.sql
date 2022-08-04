-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 06:08 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siasmklinkandmatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`, `fullname`, `foto`) VALUES
(1, 'admin', 123, 'Admin', 'avatar5.png'),
(2, 'guru', 123, 'Guru Skmn', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `slogan` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `foto` varchar(20) NOT NULL,
  `tanggal_terbit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `slogan`, `content`, `foto`, `tanggal_terbit`) VALUES
(11, 'Jalan Sehat Ceria', '<p><b></b></p><p></p><blockquote><b><u></u></b>RATUSAN PESERTA IKUT RAMAIKAN JALAN SEHAT CERIA LINTAS ALAM</blockquote><p><b><u><br></u></b></p><p><b><u>\r\n</u></b></p><p></p><p></p><p><u></u>Ratusan peserta yang terdiri dari siswa-siswi SMK, dan Umum \r\nmengikuti agenda lomba Jalan Sehat Ceria Lintas Alam yang diadakan oleh \r\nSMK Link and Match. Acara yang memperebutkan sembilan piala walikota \r\nTangerang Selatan ini digelar di SMK Link and Match, Pondok Cabe, \r\nTangerang Selatan, Sabtu, (19/10).<br></p><p>\r\nMenurut ketua pelaksana, Kamsidik, acara ini merupakan agenda perdana \r\nyang dilakukan oleh SMK Link and Match sekaligus program kerja dari \r\nbidang Humas SMK Link and Match. \r\n\r\n<br></p><p>\r\n</p><p>“Ada cara yang sederhana yaitu dengan jalan, itulah kenapa nama kegiatannya lintas alam,” ungkapnya. </p>\r\n\r\n\r\n\r\n<p>Kegiatan ini mendapatkan respon positif dari para peserta yang ikut \r\nmeramaikan acara ini. Keseruan acara dirasakan oleh salah satu peserta, \r\nAngell Wijaya. Ia menuturkan agar kegiatan seperti ini bisa terus \r\ndiadakan setiap tahunnya. </p>\r\n\r\n\r\nSelain bertujuan untuk mengenalkan pola hidup sehat dan seru-seruan, \r\nkegiatan ini juga bertujuan untuk mengenalkan SMK Link and Match kepada \r\nmasyarakat umum. Hal ini disampaikan oleh Kepala Sekolah SMK Link and \r\nMatch, Minar Pandiangan. Ia menuturkan tujuan diadakannya acara ini \r\nsalah satunya adalah untuk mempromosikan sekolah SMK Link and Match \r\nkepada masyarakat, juga untuk promosi penerimaan siswa baru tahun ajaran\r\n 2020\r\n\r\n<br><p></p><p>\r\n</p><p>“Supaya mereka lebih semangat lagi khususnya bagi siswa SMP, agar \r\nmereka lebih mengenal lagi sekolah kami dan mereka bisa daftar disini. \r\nUntuk siswa SMK dan SMA agar bisa mengenalkan kepada masyarakat luas,” \r\nungkap Kepala Sekolah yang baru dilantik bulan Juni lalu. </p>\r\n\r\n\r\n\r\n<p>Perlu diketahui, agenda Jalan Sehat Ceria Lintas alam ini dimulai \r\ndari pukul 08.00 WIB dan berakhir pukul 14.00 WIB. Diawali dengan lomba \r\njalan sehat, dan ditutup dengan hiburan sekaligus pembagian piala \r\npemenang lomba jalan sehat</p><u><p></p>\r\n\r\n<br></u><p></p><p></p><p></p><p><b></b></p><blockquote></blockquote><p></p><p><b><br></b></p>', 'a.jpg', '2020-07-06 15:07:41'),
(12, 'Kunjungan wisatawan', '<p>\r\n</p><p> Sejumlah peserta didik SMK Link and Match Kota Tangerang\r\n Selatan foto bersama usai melakukan kunjungan ke Dinas Perpustakaan dan\r\n Kearsipan (DPK) Provinsi Banten, Senin (30/4). </p>\r\n     <p> </p><p><strong><i>SERANG</i></strong><i> </i>Gerakan literasi yang semakin digaungkan, membuat para peserta didik \r\nlebih menggemari melakukan kunjungan ke tempat edukasi. Diantaranya \r\nadalah Dinas Perpustakaan dan Kearsipan (DPK) Banten, Senin (30/4).</p>\r\n\r\n<p><br>\r\nPanitia kegiatan Ainun Nur Anita mengatakan, kegiatan ini diikuti oleh \r\nkelas X (kelas 1) jurusan Administrasi Perkantoran, yang berjumlah 44 \r\npeserta beserta 3 guru pendamping. Kegiatan sekolah ini rutin \r\ndilaksanakan oleh sekolah setiap satu tahun sekali, di tempat yang \r\nberbeda namun tetap menyesuaikan dengan kebutuhan jurusan atau prodi.</p>\r\n\r\n<p><br>\r\nDi lokasi yang sama Guru Pendamping Emeritus mengaku, kegiatan ini \r\nbertujuan agar peserta didiknya yang memang berasal dari kompetensi \r\nkejuruan dibidang administrasi perkantoran, dapat memahami pengolahan \r\narsip dan bagaimana proses pemeliharaan arsip-arsip serta pendayagunaan \r\ninformasi arsip melalui teknologi kearsipan.</p>\r\n\r\n<p><br>\r\n“Kegiatan ini mendapat sambutan positif dari Dinas Perpustakaan dan \r\nKearsipan Provinsi Banten, penting bagi sekolah-sekolah seperti SMK Link\r\n and Match agar dapat terus berkunjung ke perpustakaan provinsi Banten,”\r\n katanya.</p>\r\n\r\n<p><br>\r\nSelama di dalam perpustakaan siswa-siswi juga diajak untuk menanamkan \r\nkecintaan anak untuk membaca buku dan belajar sejak dini. Terutama saat \r\nini, anak-anak diharapkan lebih mudah beradaptasi dengan tantangan yang \r\nada.</p>\r\n\r\n<p><br>\r\n“Dengan harapan akan memberikan pengetahuan dan mendidik jiwa anak-anak \r\nagar punya jiwa yang kreatif, inovatif, dan kelak akan memberikan banyak\r\n manfaat baik di lingkungan sekitar.</p><p></p>', 'D.jpg', '2020-07-01 16:07:17'),
(16, 'Hari guru 2019', '<p>\r\nGuru berdiri di depan kelas, \r\ndan siswa memberi penghormatan, itu bukan karena guru haus kehormatan, \r\ntetapi karena siswa sedang diajar untuk tahu menghormati.\r\n\r\nGuru mengajar didepan kelas, siswa diminta memperhatikan, bukan karena \r\nguru tak tahu metode mengajar yang baik, tetapi karena siswa sedang \r\ndiajar untuk menghargai orang lain.\r\n\r\nGuru memberikan Pekerjaan Rumah, siswa diminta menyelesaikan, bukan \r\nkarena guru memberi beban tambahan, tetapi karena siswa sedang diajar \r\nuntuk bisa mengisi waktu berkualitas\r\n\r\nGuru merobek kertas ujian karena menyontek, siswa diminta mengikuti \r\nujian susulan, bukan karena guru berlaku jahat, tetapi karena siswa \r\nsedang diajar pentingnya kejujuran.\r\n\r\nGuru membuat jadwal kebersihan, siswa diminta membersihkan lingkungan, \r\nbukan karena guru mau seenaknya memerintah,  tetapi karena siswa diajar \r\nuntuk bisa bertanggung jawab.\r\n\r\nGuru berbicara keras karena siswa kurang memperhatikan, bukan karena \r\nguru benci, tetapi karena siswa sedang diajar untuk sadar akan \r\nkesalahan.\r\n\r\nGuru memukul siswa karena bandel, bukan karena guru marah, tetapi karena\r\n siswa sedang diajar untuk mengerti kebaikan.\r\n\r\nGuru memberi hukuman yang wajar, bukan karena guru tak punya kasih, \r\ntetapi karena siswa sedang diajar mengakui kesalahan.\r\n\r\nGuru melarang siswa melakukan hal-hal yang terlihat asyik, bukan karena \r\nguru tak mengerti kesenangan siswa, tetapi karena siswa sedang diajar \r\nuntuk melihat masa depan lebih baik.\r\n\r\nTanyakan pada mereka yang sukses sekarang, pantaskah membenci seorang \r\nguru ?\r\n\r\nSELAMAT HARI GURU 2019\r\nTerimakasih atas segala jasa-jasamu\r\n\r\n<br></p>', '3.jpg', '2020-07-04 20:07:47'),
(17, 'MAULID NABI SAW', '<p>\r\nDengan tema <b>\"Meneladani sunnah Rasulullah untuk kemajuan generasi muda \r\nIslam\"</b> <br></p><p>         SMK Link and Match mengadakan kegiatan peringatan Maulid Nabi \r\nMuhammad SAW tahun 1441 H/2019 M di aula SMK Link and Match, Pondok \r\nCabe, Rabu (20/11)\r\nKegiatan ini diikuti oleh seluruh guru, karyawan, dan siswa-siswi, dari \r\nkelas 10,11,12. Sebagai penceramah, menghadirkan Ustad KH. Taufiq \r\nHidayatullah S.Ag dan Al Habib Bagir Bin Idurs Alaydrus. \r\n\r\n<br></p><br>', '32.jpg', '2020-07-04 21:07:06'),
(18, 'Artis Bintang Tamu', '<p>\r\nAtta Halilintar penjadi pengisi acara puncak Career Day di SMK Link and \r\nMatch, Pondok Cabe, Kamis (7/11).\r\nDengan popularitasnya sebagai Youtuber ternama, Atta Halilintar tak \r\nsegan membagikan pengalaman hidupnya merintis karir baik sebagai \r\nyoutuber maupun pengusaha kepada siswa-siswi SMK Link and Match.\r\n\r\n<br></p>', '4.jpg', '2020-07-04 21:07:46'),
(19, 'Rapat Komite', '<p>\r\n</p><p></p><p><b>Rapat Komite SMK Link and Match Tahun Pelajaran 2018/2019.</b><br></p><blockquote><b><br></b></blockquote><p></p><p></p><p>\r\n<strong></strong>Jum\'at, 08 Februari 2019<b> </b>telah dilaksanakan Rapat \r\nKomite Sekolah Tahun 2019 yang dihadiri oleh segenap pengurus Komite \r\nSekolah, Jajaran Manajemen Sekolah, para Wali Kelas, dan para orang \r\ntua/wali murid kelas X, XI, XII, dan XIII secara bergiliran sesuai \r\ndengan jadwal yang telah ditetapkan. Rapat dilaksanakan dalam ranga \r\nPenyampaian Program Sekolah, Rencana Kerja, dan Anggaran Sekolah Tahun \r\nPelajaran 2018/2019 dari Sekolah kepada para Orang Tua/Wali Siswa.\r\n\r\n<b><br></b></p><p></p><p><small></small><br></p><br><br><br><br><br><br><br><br><br><br><br>', '5.jpg', '2020-07-05 17:07:34'),
(25, 'Covid-19', '<p>\r\n</p><p><b>Menenangkan diri</b> dengan cara membaca buku motivasi mendengarkan prodcast internasional melakukan latihan yoga hingga beribadah,. Self comport practice dapat membuat kita lebih postifi dalam memandang sesuatu dan membuat bugar tubuh dan jasmani.</p><p><b>Mengikuti pembelajaran online </b>dapat membuka wawasan kita menjadi lebih luas, sudah banyak online library dan aplikasi belajar tentang bahasa baru sejarah dan lainnya.</p><p><b>Berolahraga </b>adalah media untuk kita membuat tubuh kembali bugar, dengan olahraga kita juga dapat menjaga kesehatan pikiran.</p>\r\n\r\n<br><p></p>', '1.jpg', '2020-07-06 14:07:56'),
(26, 'tesetstst', '<p>stestseetststes<br></p>', 'Penguins1.jpg', '2020-09-08 16:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `nama_sekolah` varchar(20) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `slider_1` varchar(20) NOT NULL,
  `slider_2` varchar(20) NOT NULL,
  `email_sekolah` varchar(20) NOT NULL,
  `no_telepon_sekolah` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `logo_sekolah` varchar(20) NOT NULL,
  `alamat_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama_sekolah`, `visi`, `misi`, `slider_1`, `slider_2`, `email_sekolah`, `no_telepon_sekolah`, `keterangan`, `logo_sekolah`, `alamat_sekolah`) VALUES
(1, 'SMK LINK AND MATCH', '<p><b></b></p><blockquote><b>“Membangun sumber daya indonesia unggul yang dapat bekerja sama dalam persaingan dan bersaing dalam bekerja sama pada dunia usaha/Dunia industri baik Nasional maupun Internasional”<br><br></b></blockquote><p></p>', '<p><b></b></p><b>Mempersiapkan tamatan SMK menjadi asset tenaga kerja pembangunan ekonomi\r\n Bangsa dan Keluarga, serta memiliki karakter pelopor, berdedikasi \r\ntinggi, dan berbudaya DISIPLIN.</b><b></b><p></p><p><b></b></p><br><br><br>', 'gedung1.png', 'c1.JPG', 'smk.elem@gmail.com', '082 234 578 912', 'SMK Link and Match adalah merupakan sebuah Lembaga Pendidikan Menengah Kejuruan yang berdiri sejak 2007 dan berdomisili di Tangerang selatan. SMK Link and Match berada di bawah naungan Yayasan Pembangunan Pendidikan (LPPK) EL-EM ', 'png_logo1.png', 'Jl.Raya Terminal Pondok Cabe, No 95 Pamulang Tangerang Selatan-Banten');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `id_extra` int(11) NOT NULL,
  `nama_extra` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `foto` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_pembimbing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id_extra`, `nama_extra`, `hari`, `jam`, `foto`, `keterangan`, `nama_pembimbing`) VALUES
(2, 'BKC', 'Kamis', '03:30:00', '2090968DSC_0509.JPG', 'Latihan', 'Suhendar S.pd'),
(4, 'Futsal Turnament', 'Rabu', '02:30:00', 'IMG_20200310_131326.jpg', 'Bagi yang minat saja silahkan daftar', 'Pa Hendra S.pd'),
(5, 'Paskibra Agustus', 'Sabtu', '04:15:00', '23334376_1674015519317611_1070041281066753366_o.jpg', 'Menaikan Bendera kemerdekaan', 'Wawan Santoso S.pd'),
(6, 'Senam Olahraga', 'Kamis', '03:25:00', '26758283_1741240039261825_8941894546936041818_o.jpg', 'Latihan', 'Mahendra S.pd'),
(7, 'tes', 'Selasa', '04:56:00', 'Penguins.jpg', 'tes', 'tes'),
(8, 'tes', 'Senin', '03:05:00', '6.jpg', 'tes', 'tes'),
(9, 'tesd', 'Senin', '04:33:00', '2.jpg', 'sdf', 'dsf');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `no_telepon` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `no_telepon`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `foto`, `password`) VALUES
(2, '444', 'Hentje Sanger, S.T', '086757575343', 'Graha indah pamulang', 'Kakas', '1978-11-06', 'kristen', 'laki-laki', 'guru.jpg', '$2y$10$vCzueInkQkURCF4ZDft2kuoqPo41Li2e3pzwETDJVj.tivSzEnKq.'),
(3, '333', 'Ahmad Fuzan Baihaqi,', '08764653988', 'Jl.Hj Amit N0.39 Rempoa ciputat timur tangsel', 'Jakarta', '1991-02-25', 'islam', 'laki-laki', 'p.jpg', '$2y$10$hvgbNZlObZ.njWK4JYR6Xuq17zg5Ujs.aDODXei2n7DtSB8LhzfWy'),
(4, '213', 'Ainun Nur Anita, S.A', '08578464688', 'Sawangan Depok', 'Jakarta', '1983-05-27', 'islam', 'perempuan', 'aa.jpg', '$2y$10$E5o/IWW166RIWCzg1HXzluWG7.28CyiyI0T2hGRfGEbGut9MqrdYy'),
(5, '555', 'Arief Khamdi, S.Pd', '08976453560', 'kp.baru no4 tangsel', 'ciputat', '2020-06-02', 'islam', 'laki-laki', 'guru2.jpg', '$2y$10$ILp9DsC5JAnthglPWE/PceLho064xrwnjMU6VRW3jYfy.pbgCNqZu'),
(6, '223', 'Fajar Mada Tama, Psi', '08764653980', 'Jl.Pondok Aren Raya Rt05/05 No.28', 'Jakarta', '1982-05-28', 'islam', 'laki-laki', 'guru51.jpg', '$2y$10$0yusZbtpNV6fmLRrI3bUVu0sKl5ZgJ/4NlnJj7qiua0d/qqOSyqA6'),
(7, '1200', 'Lies lestari.SE', '08764656698', 'Jl.Pleret Rt01/07 No.11 pangasinan Sawangan', 'Purworejo', '1986-04-09', 'islam', 'laki-laki', 'lies.jpg', '$2y$10$0NGc8lH2tieP.DEU4fiosejLvDwqEy82iC6PVzkym2O7ksBbMuV8a'),
(8, '1203', 'Juliana, S.Pd', '08582727444', 'Jl.metro III Blok B3/29 rt3/07 Parung Bogor', 'Lamalota', '1994-02-16', 'islam', 'perempuan', 'kjjj.jpg', '$2y$10$6lciamQkJzeTt3kYOBrJRumFRm4r4aV5p99puGyoPF6R403bTVKlK'),
(9, '1222', 'Juniarto. A.Md', '08590282310', 'Jl.Bojong Gede Bogor Blok N. No.3', 'Jakarta', '1979-06-24', 'islam', 'laki-laki', 'juniarto.jpg', '$2y$10$qAgF0EQePG7K/Pjlh08HFeE27Wfn3quSKaNqKjNk3ArvpHorD8T6W'),
(10, '1024', 'Aripanca Kuswara.SE', '08764653980', 'Jl.Angsana Gaplek', 'pamulang', '1986-06-28', 'islam', 'laki-laki', 'f.jpg', '$2y$10$E7iW59.L8yQq3xeyBTQ/GeEAWFSiyNq09mFl4A0q6susvbRi3ZXYe'),
(11, '1444', 'Isti Khotimah, S.Pd', '08590282323', 'Vila inti persada pamulang', 'Sukoharjo', '1990-05-29', 'islam', 'perempuan', 'ii.jpg', '$2y$10$8t.bPlG.sWjKw5nl1r5bGeg8EOQojHoSVuvjIHFgkjmcWdtuLWoM6'),
(12, '2433', 'Yoyoh Rokayah, S.Pd', '08977746665', 'Jl. Trubus 2 Rt.01/4 Pondok cabe Ilir', 'Tangerang', '1975-03-16', 'islam', 'perempuan', 'yoyoh.jpg', '$2y$10$YLmJNMbLGuz2Kx5Jo/k0ZOq2WZbNDhefDWqkcb8XJOIcxeMxe.sBy'),
(13, '5432', 'Kamsidik, MM', '08584634660', 'Jl. komplek. legoso Gg. H. Kipin Rt1/01 No115', 'Pekalongan', '1989-05-03', 'islam', 'laki-laki', 'kamsidik.jpg', '$2y$10$Ec0B70pCAVx31GUqjq3bkej4tsY5v6tAS1NHe.PvC9M82U9C5UD/C'),
(14, '2327', 'Fefrizal, S.Pd', '08584753433', 'Jl. Bambu Apus Raya No.78 RT.02/02.', 'Kotobaru', '1987-02-22', 'islam', 'laki-laki', 'guru4.jpg', '$2y$10$Z2rhG/d2nNZiJ1iH1BgyweqD.Fk9mSbbCoXsSJi6ljoEwGlgKcVxq'),
(15, '3252', 'Palela Setyaningsih,', '08577435755', 'Revira Hill Blok B4 No17 Meruyung limo  depok', 'Purbalingga', '1986-04-29', 'islam', 'perempuan', 'palela.jpg', '$2y$10$yIkkkuj5l/i8.iQnOeR.UuMP/Lx4Tr3ZvP9nH6Gxg63XqZRLy6bha'),
(16, '7663', 'Tugino, S.T', '08597995464', 'Jl. Bangka rt04/2 mampang prapatan', 'Jakarta', '1993-11-10', 'islam', 'laki-laki', '6j.jpg', '$2y$10$rWAQZE6gV/ZQkaN0Xlh/h.71md.8Qw3X8XulQICQN9wXg/j2LTKGG');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_jadwal_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `s1_guru` varchar(150) NOT NULL,
  `s2_guru` varchar(150) NOT NULL,
  `s3_guru` varchar(150) NOT NULL,
  `s4_guru` varchar(150) NOT NULL,
  `s5_guru` varchar(150) NOT NULL,
  `t1_guru` varchar(150) NOT NULL,
  `t2_guru` varchar(150) NOT NULL,
  `t3_guru` varchar(150) NOT NULL,
  `t4_guru` varchar(150) NOT NULL,
  `t5_guru` varchar(150) NOT NULL,
  `r1_guru` varchar(150) NOT NULL,
  `r2_guru` varchar(150) NOT NULL,
  `r3_guru` varchar(150) NOT NULL,
  `r4_guru` varchar(150) NOT NULL,
  `r5_guru` varchar(150) NOT NULL,
  `k1_guru` varchar(150) NOT NULL,
  `k2_guru` varchar(150) NOT NULL,
  `k3_guru` varchar(150) NOT NULL,
  `k4_guru` varchar(150) NOT NULL,
  `k5_guru` varchar(150) NOT NULL,
  `j1_guru` varchar(150) NOT NULL,
  `j2_guru` varchar(150) NOT NULL,
  `j3_guru` varchar(150) NOT NULL,
  `j4_guru` varchar(150) NOT NULL,
  `j5_guru` varchar(150) NOT NULL,
  `p1_guru` varchar(150) NOT NULL,
  `p2_guru` varchar(150) NOT NULL,
  `p3_guru` varchar(150) NOT NULL,
  `p4_guru` varchar(150) NOT NULL,
  `p5_guru` varchar(150) NOT NULL,
  `s1_pelajaran` varchar(225) NOT NULL,
  `s2_pelajaran` varchar(225) NOT NULL,
  `s3_pelajaran` varchar(225) NOT NULL,
  `s4_pelajaran` varchar(225) NOT NULL,
  `s5_pelajaran` varchar(225) NOT NULL,
  `t1_pelajaran` varchar(225) NOT NULL,
  `t2_pelajaran` varchar(225) NOT NULL,
  `t3_pelajaran` varchar(225) NOT NULL,
  `t4_pelajaran` varchar(225) NOT NULL,
  `t5_pelajaran` varchar(225) NOT NULL,
  `r1_pelajaran` varchar(225) NOT NULL,
  `r2_pelajaran` varchar(225) NOT NULL,
  `r3_pelajaran` varchar(225) NOT NULL,
  `r4_pelajaran` varchar(225) NOT NULL,
  `r5_pelajaran` varchar(225) NOT NULL,
  `k1_pelajaran` varchar(225) NOT NULL,
  `k2_pelajaran` varchar(225) NOT NULL,
  `k3_pelajaran` varchar(225) NOT NULL,
  `k4_pelajaran` varchar(225) NOT NULL,
  `k5_pelajaran` varchar(225) NOT NULL,
  `j1_pelajaran` varchar(225) NOT NULL,
  `j2_pelajaran` varchar(225) NOT NULL,
  `j3_pelajaran` varchar(225) NOT NULL,
  `j4_pelajaran` varchar(225) NOT NULL,
  `j5_pelajaran` varchar(225) NOT NULL,
  `p1_pelajaran` varchar(225) NOT NULL,
  `p2_pelajaran` varchar(225) NOT NULL,
  `p3_pelajaran` varchar(225) NOT NULL,
  `p4_pelajaran` varchar(225) NOT NULL,
  `p5_pelajaran` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id_jadwal_pelajaran`, `id_kelas`, `s1_guru`, `s2_guru`, `s3_guru`, `s4_guru`, `s5_guru`, `t1_guru`, `t2_guru`, `t3_guru`, `t4_guru`, `t5_guru`, `r1_guru`, `r2_guru`, `r3_guru`, `r4_guru`, `r5_guru`, `k1_guru`, `k2_guru`, `k3_guru`, `k4_guru`, `k5_guru`, `j1_guru`, `j2_guru`, `j3_guru`, `j4_guru`, `j5_guru`, `p1_guru`, `p2_guru`, `p3_guru`, `p4_guru`, `p5_guru`, `s1_pelajaran`, `s2_pelajaran`, `s3_pelajaran`, `s4_pelajaran`, `s5_pelajaran`, `t1_pelajaran`, `t2_pelajaran`, `t3_pelajaran`, `t4_pelajaran`, `t5_pelajaran`, `r1_pelajaran`, `r2_pelajaran`, `r3_pelajaran`, `r4_pelajaran`, `r5_pelajaran`, `k1_pelajaran`, `k2_pelajaran`, `k3_pelajaran`, `k4_pelajaran`, `k5_pelajaran`, `j1_pelajaran`, `j2_pelajaran`, `j3_pelajaran`, `j4_pelajaran`, `j5_pelajaran`, `p1_pelajaran`, `p2_pelajaran`, `p3_pelajaran`, `p4_pelajaran`, `p5_pelajaran`) VALUES
(1, 1, 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Arief Khamdi, S.Pd', 'Lies lestari.SE', '', 'Ahmad Fuzan Baihaqi,', 'Lies lestari.SE', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', '', 'Tugino, S.T', 'Ahmad Fuzan Baihaqi,', 'Arief Khamdi, S.Pd', 'Tugino, S.T', '', 'Tugino, S.T', 'Tugino, S.T', 'Tugino, S.T', 'Palela Setyaningsih,', '', 'Kamsidik, MM', 'Tugino, S.T', 'Tugino, S.T', 'Palela Setyaningsih,', '', 'Kamsidik, MM', 'Juliana, S.Pd', 'Isti Khotimah, S.Pd', 'Kamsidik, MM', '', 'Pendidikan pancasila', 'Bahasa Inggris', 'Bahasa indonesia', 'Produk kreatif kewirausahaan', '', 'Sejarah indonesia', 'Produk kreatif kewirausahaan', 'Produk kreatif kewirausahaan', 'Bahasa Inggris', '', 'Simulasi dan komunikasi digital', 'Sejarah indonesia', 'Bahasa indonesia', 'Komputer dan jaringan dasar', '', 'Komputer dan jaringan dasar', 'Simulasi dan komunikasi digital', 'Dasar Desain Grafis', 'Matematika', '', 'Pemrograman Dasar', 'Teknik animasi 2D dan 3D', 'Dasar Desain Grafis', 'Matematika', '', 'Desaign media interaktif', 'Fisika', 'Kimia', 'Teknik pengolahan audio video', ''),
(2, 2, 'Ainun Nur Anita, S.A', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ainun Nur Anita, S.A', 'Ahmad Fuzan Baihaqi,', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', 'Seni Budaya', 'Pendidikan Agama', 'Pendidikan pancasila', 'Matematika', 'Matematika', 'Teknik pengolahan audio video', 'Fisika', 'Pemrograman Dasar', 'Komputer dan jaringan dasar', 'Sejarah indonesia', '', '', '', '', '', '', '', '', 'Teknik animasi 2D dan 3D', 'Desaign media interaktif', 'Dasar Desain Grafis', 'Pendidikan Agama', '', '', 'Bahasa Inggris', 'Bahasa Inggris', 'Bahasa Inggris', 'Bahasa Inggris', 'Bahasa Inggris'),
(3, 3, 'Ainun Nur Anita, S.A', 'Arief Khamdi, S.Pd', 'Lies lestari.SE', 'Kamsidik, MM', '', 'Hentje Sanger, S.T', 'Arief Khamdi, S.Pd', 'Ahmad Fuzan Baihaqi,', 'Kamsidik, MM', '', 'Ainun Nur Anita, S.A', 'Fajar Mada Tama, Psi', 'Ainun Nur Anita, S.A', 'Kamsidik, MM', '', 'Fajar Mada Tama, Psi', 'Ainun Nur Anita, S.A', 'Aripanca Kuswara.SE', 'Yoyoh Rokayah, S.Pd', '', 'Arief Khamdi, S.Pd', 'Ainun Nur Anita, S.A', 'Ainun Nur Anita, S.A', 'Kamsidik, MM', '', 'Ainun Nur Anita, S.A', 'Lies lestari.SE', 'Ainun Nur Anita, S.A', 'Yoyoh Rokayah, S.Pd', '', 'Matematika', 'Bahasa indonesia', 'Kimia', 'Dasar Desain Grafis', '', 'Sejarah indonesia', 'Dasar Desain Grafis', 'Produk kreatif kewirausahaan', 'Pendidikan pancasila', '', 'Fisika', 'Simulasi dan komunikasi digital', 'Pemrograman Dasar', 'Desain Grafis percetakan', '', 'Matematika', 'Seni Budaya', 'Kimia', 'Teknik pengolahan audio video', '', 'Matematika', 'Bahasa Inggris', 'Pemrograman Dasar', 'Pendidikan Jasmani Olahraga', '', 'Seni Budaya', 'Seni Budaya', 'Pemrograman Dasar', 'Desain Grafis percetakan', ''),
(4, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 7, 'Hentje Sanger, S.T', 'Arief Khamdi, S.Pd', 'Ainun Nur Anita, S.A', 'Aripanca Kuswara.SE', 'Ahmad Fuzan Baihaqi,', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa indonesia', 'Seni Budaya', 'Pemrograman Dasar', 'Pemrograman Dasar', '', 'Bahasa Inggris', 'Matematika', 'Pemrograman Dasar', 'Komputer dan jaringan dasar', 'Desain Grafis percetakan', 'Bahasa Inggris', '', 'Komputer dan jaringan dasar', 'Pemrograman Dasar', '', 'Matematika', 'Matematika', 'Fisika', 'Pemrograman Dasar', 'Desaign media interaktif', 'Bahasa indonesia', 'Bahasa indonesia', 'Kimia', 'Dasar Desain Grafis', 'Teknik pengolahan audio video', 'Simulasi dan komunikasi digital', 'Pendidikan Jasmani Olahraga', 'Pemrograman Dasar', 'Pemrograman Dasar', 'Kimia'),
(8, 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 10, 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', '', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', '', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', '', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', '', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', '', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', 'Ahmad Fuzan Baihaqi,', '', 'Matematika', 'Matematika', 'Matematika', 'Matematika', '', 'Matematika', 'Matematika', 'Matematika', 'Matematika', '', 'Matematika', 'Matematika', 'Matematika', 'Matematika', '', 'Matematika', 'Matematika', 'Matematika', 'Matematika', '', 'Matematika', 'Matematika', 'Matematika', 'Matematika', '', 'Matematika', 'Matematika', 'Matematika', 'Matematika', ''),
(11, 11, 'Ahmad Fuzan Baihaqi,', 'Fajar Mada Tama, Psi', 'Hentje Sanger, S.T', 'Juniarto. A.Md', 'Hentje Sanger, S.T', 'Arief Khamdi, S.Pd', 'Fajar Mada Tama, Psi', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ainun Nur Anita, S.A', 'Fajar Mada Tama, Psi', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ainun Nur Anita, S.A', 'Fajar Mada Tama, Psi', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ainun Nur Anita, S.A', 'Fajar Mada Tama, Psi', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ainun Nur Anita, S.A', 'Fajar Mada Tama, Psi', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Bahasa Inggris', 'Pendidikan Jasmani Olahraga', 'Bahasa indonesia', 'Seni Budaya', 'Matematika', 'Bahasa Inggris', 'Pendidikan Jasmani Olahraga', 'Pendidikan Agama', 'Pendidikan Agama', 'Matematika', 'Bahasa Inggris', 'Pendidikan Jasmani Olahraga', 'Pendidikan Agama', 'Pendidikan Agama', 'Matematika', 'Bahasa Inggris', 'Pendidikan Jasmani Olahraga', 'Pendidikan Agama', 'Pendidikan Agama', 'Matematika', 'Bahasa Inggris', 'Pendidikan Jasmani Olahraga', 'Pendidikan Agama', 'Pendidikan Agama', 'Matematika', 'Bahasa Inggris', 'Pendidikan Jasmani Olahraga', 'Pendidikan Agama', 'Pendidikan Agama', 'Matematika'),
(12, 12, 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Bahasa indonesia', 'Teknik pengolahan audio video', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama'),
(13, 13, 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama'),
(14, 14, 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Bahasa Inggris', '', '', '', '', 'Bahasa Inggris', '', '', '', '', 'Bahasa Inggris', '', '', '', '', 'Bahasa Inggris', 'Bahasa Inggris', '', '', '', 'Bahasa Inggris', '', '', '', '', 'Bahasa Inggris', '', '', '', ''),
(15, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 26, 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', 'Pendidikan Agama', '', '', '', '', 'Pendidikan Agama', '', '', '', '', 'Pendidikan Agama', '', '', '', '', 'Pendidikan Agama', '', '', '', '', 'Pendidikan Agama', '', '', '', '', 'Pendidikan Agama', '', '', '', ''),
(27, 27, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 28, '', '', '', 'Hentje Sanger, S.T', '', '', '', '', '', '', '', '', '', 'Hentje Sanger, S.T', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', '', '', '', '', '', '', '', '', '', 'Bahasa Inggris', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 29, 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama'),
(30, 30, 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Hentje Sanger, S.T', 'Ahmad Fuzan Baihaqi,', 'Hentje Sanger, S.T', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama', 'Pendidikan Agama');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `foto`, `keterangan_jurusan`) VALUES
(3, 'Multimedia', 'Penguins.jpg', 'lorem ipsum dolar '),
(5, 'Akuntansi', 'Hydrangeas.jpg', 'Lorem Ipsum Dolar Et'),
(6, 'Teknik Kendaraan Ringan', 'Jellyfish.jpg', 'Lorem Ipsum Dolar');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `keterangan`, `wali_kelas`, `ruang`) VALUES
(1, 'X MM1', 'Multimedia1', 'Hentje Sanger, ST', '003'),
(2, 'X MM2', 'Multimedia2', 'Sugino, ST', '002'),
(3, 'X AP1', 'Administrasi perkantoran1', 'Palela Setya Ningsih, SP.d', '005'),
(4, 'X AP2', 'Administrasi perkantoran2', 'Nur Anita, SPd', '006'),
(5, 'X AK1', 'Akuntansi1', 'Yoyoh Rokayah, SPd', '008'),
(6, 'X AK2', 'Akuntansi 2', 'Lies Lestari, SE', '007'),
(7, 'X PH1', 'Perhotelan1', 'Ari Panca Kuswara, SE', '009'),
(8, 'X PH2', 'Perhotelan2', 'Arief Khamdi, SPd', '010'),
(9, 'X OTF1', 'Otomotif sepeda Motor1', 'Lies Lestari, SE', '012'),
(10, 'X OTF2', '', '', ''),
(11, 'XI MM1', '', '', ''),
(12, 'XI MM2', '', '', ''),
(13, 'XI AP1', '', '', ''),
(14, 'XI AP2', '', '', ''),
(15, 'XI AK1', '', '', ''),
(16, 'XI AK2', '', '', ''),
(17, 'XI PH1', '', '', ''),
(18, 'XI PH2', '', '', ''),
(19, 'XI OTF1', '', '', ''),
(20, 'XI OTF2', '', '', ''),
(21, 'XII  MM1', '', '', ''),
(22, 'XII MM2', '', '', ''),
(23, 'XII AP1', '', '', ''),
(24, 'XII AP2', '', '', ''),
(25, 'XII AK1', '', '', ''),
(26, 'XII AK2', '', '', ''),
(27, 'XII PH1', '', '', ''),
(28, 'XII PH2', '', '', ''),
(29, 'XII OTF1', '', '', ''),
(30, 'XII OTF2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id_kepsek` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `fullname` varchar(125) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kata_sambutan` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id_kepsek`, `nip`, `fullname`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_telepon`, `email`, `alamat`, `kata_sambutan`, `foto`, `id_guru`) VALUES
(1, '11023436343433', 'Minar Pandiangan, S.Pd', 'perempuan', 'Bojong sari baru Rt02/05 Bojong Sari - Depok', '1967-10-15', '087765512333', 'minarpandiangan95@gmail.com', 'Jl. Jaksaan Ciputat no.12 Tangerang Banten.', '<p><b>Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, \r\nbahwasannya dengan rahmat dan karunia-Nya,</b></p><p><b>Kami mengucapkan selamat datang di Website kami SMK Link and Match. </b></p><p><b> yang saya tujukan untuk seluruh unsur \r\npimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat \r\nmengakses seluruh informasi tentang segala profil, aktifitas/kegiatan \r\nserta fasilitas sekolah kami.</b></p><b>\r\n</b><p><b>Kami selaku pimpinan sekolah mengucapkan\r\n terima kasih kepada tim pembuat Website ini yang telah berusaha untuk \r\ndapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah. \r\nDan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh\r\n karena itu kepada seluruh civitas akademika dan masyarakat umum dapat \r\nmemberikan saran dan kritik yang membangun demi kemajuan Website ini \r\nlebih lanjut.</b></p><br><p></p><br><br><br><br><br><br><br>', 'minar.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `id_mengajar` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `id_guru`, `id_kelas`, `id_pelajaran`) VALUES
(175, 37, 1, 1),
(176, 37, 2, 1),
(177, 37, 3, 1),
(193, 1, 1, 1),
(194, 1, 3, 8),
(894, 3, 1, 18),
(895, 3, 1, 19),
(896, 3, 2, 18),
(897, 3, 2, 19),
(898, 3, 3, 18),
(899, 3, 4, 18),
(900, 3, 5, 18),
(901, 3, 5, 19),
(902, 3, 6, 18),
(903, 3, 6, 19),
(904, 3, 7, 18),
(905, 3, 7, 19),
(906, 3, 8, 18),
(907, 3, 8, 19),
(908, 3, 9, 18),
(909, 3, 9, 19),
(910, 3, 10, 18),
(911, 3, 10, 19),
(912, 3, 11, 19),
(913, 3, 12, 18),
(914, 3, 12, 19),
(932, 5, 1, 3),
(933, 5, 2, 3),
(934, 5, 11, 3),
(935, 5, 12, 3),
(936, 5, 19, 3),
(937, 5, 20, 3),
(1006, 9, 17, 48),
(1007, 9, 17, 50),
(1008, 9, 18, 48),
(1009, 9, 18, 50),
(1010, 9, 25, 30),
(1011, 9, 26, 30),
(1012, 9, 27, 48),
(1013, 9, 27, 50),
(1014, 9, 28, 48),
(1015, 9, 28, 50),
(1030, 10, 13, 20),
(1031, 10, 14, 20),
(1032, 10, 17, 17),
(1033, 10, 18, 17),
(1034, 10, 23, 20),
(1035, 10, 24, 20),
(1036, 10, 25, 17),
(1037, 10, 26, 17),
(1054, 12, 3, 3),
(1055, 12, 4, 3),
(1056, 12, 5, 3),
(1057, 12, 6, 3),
(1058, 12, 7, 3),
(1059, 12, 8, 3),
(1060, 12, 13, 3),
(1061, 12, 14, 3),
(1062, 12, 15, 3),
(1063, 12, 16, 3),
(1064, 12, 21, 3),
(1065, 12, 22, 3),
(1066, 12, 23, 3),
(1067, 12, 24, 3),
(1068, 11, 9, 3),
(1069, 11, 10, 3),
(1070, 11, 17, 3),
(1071, 11, 18, 3),
(1072, 11, 19, 3),
(1073, 11, 20, 3),
(1074, 11, 25, 3),
(1075, 11, 26, 3),
(1076, 11, 27, 3),
(1077, 11, 28, 3),
(1086, 7, 1, 17),
(1087, 7, 2, 17),
(1088, 7, 3, 17),
(1089, 7, 4, 17),
(1090, 7, 5, 17),
(1091, 7, 6, 17),
(1092, 7, 7, 17),
(1093, 7, 8, 17),
(1094, 7, 9, 17),
(1095, 7, 10, 17),
(1096, 7, 13, 17),
(1097, 7, 14, 17),
(1098, 7, 15, 17),
(1099, 7, 16, 17),
(1100, 7, 20, 17),
(1101, 7, 21, 17),
(1102, 7, 22, 17),
(1111, 6, 1, 21),
(1112, 6, 2, 21),
(1113, 6, 7, 21),
(1114, 6, 8, 21),
(1115, 6, 11, 21),
(1116, 6, 12, 21),
(1117, 6, 24, 38),
(1118, 6, 25, 38),
(1130, 13, 1, 11),
(1131, 13, 1, 16),
(1132, 13, 2, 11),
(1133, 13, 2, 16),
(1134, 13, 11, 11),
(1135, 13, 11, 16),
(1136, 13, 12, 11),
(1137, 13, 12, 16),
(1138, 13, 21, 11),
(1139, 13, 21, 14),
(1140, 13, 21, 16),
(1161, 14, 9, 24),
(1162, 14, 9, 25),
(1163, 14, 10, 24),
(1164, 14, 10, 25),
(1165, 14, 19, 24),
(1166, 14, 19, 25),
(1167, 14, 29, 24),
(1168, 14, 29, 25),
(1169, 14, 30, 24),
(1170, 14, 30, 25),
(1171, 15, 3, 2),
(1172, 15, 4, 2),
(1173, 15, 5, 2),
(1174, 15, 6, 2),
(1175, 15, 7, 2),
(1176, 15, 8, 2),
(1177, 15, 11, 2),
(1178, 15, 12, 2),
(1179, 15, 17, 2),
(1180, 15, 18, 2),
(1181, 15, 21, 2),
(1182, 15, 22, 2),
(1183, 15, 23, 2),
(1184, 15, 24, 2),
(1185, 15, 25, 2),
(1186, 15, 26, 2),
(1187, 8, 1, 2),
(1188, 8, 2, 2),
(1189, 8, 9, 2),
(1190, 8, 10, 2),
(1191, 8, 13, 2),
(1192, 8, 14, 2),
(1193, 8, 25, 2),
(1194, 8, 26, 2),
(1195, 8, 27, 2),
(1196, 8, 28, 2),
(1197, 8, 29, 2),
(1198, 8, 30, 2),
(1269, 16, 1, 7),
(1270, 16, 1, 10),
(1271, 16, 1, 12),
(1272, 16, 1, 15),
(1273, 16, 2, 7),
(1274, 16, 2, 10),
(1275, 16, 2, 12),
(1276, 16, 2, 15),
(1277, 16, 12, 10),
(1278, 16, 12, 12),
(1279, 16, 12, 15),
(1280, 16, 21, 10),
(1281, 16, 21, 12),
(1282, 16, 21, 15),
(1283, 16, 22, 10),
(1284, 16, 22, 12),
(1285, 16, 22, 15),
(1286, 4, 5, 39),
(1287, 4, 6, 39),
(1288, 4, 23, 54),
(1289, 4, 24, 54),
(1304, 2, 1, 4),
(1305, 2, 2, 4),
(1306, 2, 8, 4),
(1307, 2, 17, 4),
(1308, 2, 18, 4),
(1309, 2, 27, 4),
(1310, 2, 28, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `kkm` int(11) NOT NULL,
  `tugas_1` int(11) NOT NULL,
  `tugas_2` int(11) NOT NULL,
  `tugas_3` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `nilai_rata2` decimal(5,2) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_pelajaran`, `kkm`, `tugas_1`, `tugas_2`, `tugas_3`, `uts`, `uas`, `nilai_rata2`, `semester`) VALUES
(4, 1, 1, 70, 70, 70, 70, 70, 70, '70.00', 3),
(6, 1, 1, 10, 10, 10, 10, 10, 10, '10.00', 5),
(7, 1, 1, 80, 80, 80, 80, 80, 80, '80.00', 6),
(9, 20, 1, 80, 85, 80, 80, 80, 80, '81.00', 2),
(10, 20, 4, 80, 80, 80, 80, 80, 80, '80.00', 2),
(20, 1, 4, 10, 10, 10, 10, 10, 10, '10.00', 5),
(21, 1, 5, 10, 10, 10, 10, 10, 10, '10.00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `kode_pelajaran` varchar(150) NOT NULL,
  `nama_pelajaran` varchar(70) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `kode_pelajaran`, `nama_pelajaran`, `jam`, `tahun_ajaran`) VALUES
(1, 'PAI02', 'Pendidikan Agama', '2 ', '2005-2020'),
(2, 'MAT01', 'Matematika', '2 ', '2005-2020'),
(3, 'BHS02', 'Bahasa indonesia', '2 ', '2006-2020'),
(4, 'BHS03', 'Bahasa Inggris', '3', '2005-2020'),
(5, 'SB04', 'Seni Budaya', '2', '2009-2020'),
(6, 'PJO05', 'Pendidikan Jasmani Olahraga', '3', '2005-2020'),
(7, 'SKD05', 'Simulasi dan komunikasi digital', '2', '2009-2020'),
(8, 'FISK06', 'Fisika', '1', '2003-2020'),
(9, 'KIM07', 'Kimia', '1', '2005-2020'),
(10, '', 'Komputer dan jaringan dasar', '2', '2019-2021'),
(11, '', 'Pemrograman Dasar', '2', '2010-2020'),
(12, '', 'Dasar Desain Grafis', '3', '2010-2020'),
(13, '', 'Desain Grafis percetakan', '2', '2015-2022'),
(14, '', 'Teknik pengolahan audio video', '2', '2010-2020'),
(15, '', 'Teknik animasi 2D dan 3D', '2', '2010-2020'),
(16, '', 'Desaign media interaktif', '2', '2005-2019'),
(17, '', 'Produk kreatif kewirausahaan', '2', '2015-2010'),
(18, '', 'Pendidikan pancasila', '2', '2015-2020'),
(19, '', 'Sejarah indonesia', '3', '2015-2020'),
(20, '', 'Ekonomi Bisnis', '2', '2015-2020'),
(21, '', 'Bimbingan Konseling', '1', '2009-2020'),
(22, '', 'Bahasa Jepang', '2', '2009-2020'),
(23, '', 'Gambar Teknik Otomotif', '2', '2018-2020'),
(24, '', 'Teknologi Dasar Otomotif', '3', '2018-2020'),
(25, '', 'Pekerjaan Dasar Otomotif', '2', '2018-2020'),
(26, '', 'Pemeliharaan Mesin Sepeda Motor', '1', '2018-2020'),
(27, '', 'Pemeliharaan Sasis Sepeda Motor', '2', '2018-2020'),
(28, '', 'Pemeliharaan Kelistrikan Sepeda Motor', '2', '2018-2020'),
(30, '', 'Administrasi Umum', '2', '2005-2020'),
(31, '', 'IPA', '2', '2003-2020'),
(32, '', 'Teknologi Perkantoran', '', '2009-2020'),
(33, '', 'Korespondensi', '', '2010-2020'),
(34, '', 'Otomotisasi Tata Kelola Kepegawaian', '', '2009-2020'),
(35, '', 'Otomotisasi Tata Kelola Keuangan', '', '2009-2020'),
(36, '', 'Otomotisasi Tata Kelola Sarana dan Prasarana', '', '2009-2020'),
(37, '', 'Otomotisasi Tata Kelola Humas dan Keprotokolan', '', '2009-2020'),
(38, '', 'Etika Profesi', '', '2009-2020'),
(39, '', 'Akuntansi dasar', '', '2010-2020'),
(40, '', 'Perbankan Dasar', '', '2010-2020'),
(41, '', 'Praktikum Akuntansi Perusahaan Jasa, Dagang dan Menufaktur', '', '2010-2020'),
(42, '', 'Praktikum Akuntansi Lembaga/instansi Pemerintah', '', '2010-2020'),
(43, '', 'Akuntansi Keuangan', '', '2009-2020'),
(44, '', 'Komputer Akuntansi', '', '2009-2020'),
(45, '', 'Administrasi Pajak', '', '2010-2020'),
(46, '', 'Kepariwisataan', '', '2005-2020'),
(47, '', 'Komunikasi industri pariwisata', '', '2008-2020'),
(48, '', 'Industri perhotelan', '', '2012-2020'),
(49, '', 'Front office', '', '2010-2020'),
(50, '', 'Housekeeping', '', '2010-2020'),
(51, '', 'Laundry', '', '2010-2020'),
(54, '', 'Kearsipan', '', '2010-2020'),
(55, '423DF', 'Kewirausahaan', '4', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `no_telepon` varchar(225) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat_orang_tua` text NOT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `alamat_wali` text,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nomor_sttb` varchar(100) NOT NULL,
  `tanggal_sttb` date NOT NULL,
  `tanggal_meninggalkan_sekolah` date NOT NULL,
  `alasan_meninggalkan_sekolah` text NOT NULL,
  `tamat_nomor_sttb` varchar(100) NOT NULL,
  `tamat_tanggal_sttb` date NOT NULL,
  `keterangan_lain` text,
  `foto_siswa` varchar(225) NOT NULL,
  `sakit_1` int(11) NOT NULL,
  `sakit_2` int(11) NOT NULL,
  `sakit_3` int(11) NOT NULL,
  `sakit_4` int(11) NOT NULL,
  `sakit_5` int(11) NOT NULL,
  `sakit_6` int(11) NOT NULL,
  `ijin_1` int(11) NOT NULL,
  `ijin_2` int(11) NOT NULL,
  `ijin_3` int(11) NOT NULL,
  `ijin_4` int(11) NOT NULL,
  `ijin_5` int(11) NOT NULL,
  `ijin_6` int(11) NOT NULL,
  `alpa_1` int(11) NOT NULL,
  `alpa_2` int(11) NOT NULL,
  `alpa_3` int(11) NOT NULL,
  `alpa_4` int(11) NOT NULL,
  `alpa_5` int(11) NOT NULL,
  `alpa_6` int(11) NOT NULL,
  `catatan_1` text NOT NULL,
  `catatan_2` text NOT NULL,
  `catatan_3` text NOT NULL,
  `catatan_4` text NOT NULL,
  `catatan_5` text NOT NULL,
  `catatan_6` text NOT NULL,
  `keputusan_1` text NOT NULL,
  `keputusan_2` text NOT NULL,
  `keputusan_3` text NOT NULL,
  `keputusan_4` text NOT NULL,
  `keputusan_5` text NOT NULL,
  `keputusan_6` text NOT NULL,
  `kelas_s1` varchar(20) NOT NULL,
  `kelas_s2` varchar(20) NOT NULL,
  `kelas_s3` varchar(20) NOT NULL,
  `kelas_s4` varchar(20) NOT NULL,
  `kelas_s5` varchar(20) NOT NULL,
  `kelas_s6` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `id_jurusan`, `nis`, `nama_siswa`, `tahun_ajaran`, `no_telepon`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `warga_negara`, `agama`, `alamat_siswa`, `nama_orang_tua`, `pekerjaan`, `alamat_orang_tua`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `tanggal_masuk`, `asal_sekolah`, `alamat_sekolah`, `nomor_sttb`, `tanggal_sttb`, `tanggal_meninggalkan_sekolah`, `alasan_meninggalkan_sekolah`, `tamat_nomor_sttb`, `tamat_tanggal_sttb`, `keterangan_lain`, `foto_siswa`, `sakit_1`, `sakit_2`, `sakit_3`, `sakit_4`, `sakit_5`, `sakit_6`, `ijin_1`, `ijin_2`, `ijin_3`, `ijin_4`, `ijin_5`, `ijin_6`, `alpa_1`, `alpa_2`, `alpa_3`, `alpa_4`, `alpa_5`, `alpa_6`, `catatan_1`, `catatan_2`, `catatan_3`, `catatan_4`, `catatan_5`, `catatan_6`, `keputusan_1`, `keputusan_2`, `keputusan_3`, `keputusan_4`, `keputusan_5`, `keputusan_6`, `kelas_s1`, `kelas_s2`, `kelas_s3`, `kelas_s4`, `kelas_s5`, `kelas_s6`, `password`) VALUES
(1, 2, 3, 11012, 'Agung setiawan', '2020-2021', '08956377311', 'laki-laki', 'Tangerang', '2004-02-29', 'WNI', 'islam', 'Jl.Bintaro said pamulang No.2 Rt-2/16 pamulang timur', 'Sulaiman', 'Ibu rumah tangga', 'Jl.Bintaro said pamulang No.2 Rt-2/16 pamulang timur', '-', '-', '-', '2020-07-13', 'MTS DAARUL HIKMAH', 'Jl.Pondok cabe udik', '', '0000-00-00', '0000-00-00', 'Agung setiawan', '-', '0000-00-00', '', '17__MUHAMMAD_FAZRI_HARDIANSYAH_IMG_0511.JPG', 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, '1', '2', '3', '4', '5', '6', '1', '2', '3', '4', '5', '6', 'X-MM1', 'X-MM2', '', '', '', '', '$2y$10$d4PEGToQwQmQ09BhXV526.yMETiYx/u4Eb9wjRpwl5pUggNd3wY7e'),
(2, 12, 3, 10023, 'Bayu Wulung', '2020-2021', '08954322799', 'laki-laki', 'Tangerang', '2003-07-10', 'WNI', 'islam', 'Jl. Reni jaya pamulang barat No.3 pos 13303 Rt3/14', 'Apipudin', 'Pegawai Swasta', 'Jl. Reni jaya pamulang barat No.3 pos 13303 Rt3/14 ', '-', '-', '-', '2020-07-13', 'MTS DAARUL HIKMAH', 'Jl.Terminal pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Bayu Wulung', '-', '0000-00-00', '', 'UMAR_IMG_0543.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$JvJtzOBmPZMsbdUFw4b3zOTGtt1osVqTHGjhg/nYTeISKbdYP9mWy'),
(3, 3, 3, 12042, 'Fitri wulandari', '2019-2020', '08976453566', 'perempuan', 'Pamulang', '2002-07-22', 'WNI', 'islam', 'Jl. Villa inti persada Blok II No.5 Rt1/13 Tangerang selatan', 'Hj.nurhalizah', 'perkantoran', 'Jl. Villa inti persada Blok II No.5 Rt1/13 Tangerang selatan', '-', '-', '-', '2020-07-13', 'SMP Negeri Cipondoh', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Fitri wulandari', '-', '0000-00-00', '', '8__ERENZTISA_RAMADHANTI_SABILA_IMG_0493.JPG', 0, 0, 0, 4, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '', '0', '', '', '', '0', '', '0', '', '', '', '', '', '', '', '$2y$10$HI4h2xFJdR0UCVeCpF4FkObaKDYUaVX48kE3KFsPfie.dBHfgGsHy'),
(4, 4, 3, 10441, 'Putri ayu ningsih', '2019-2020', '08590282323', 'perempuan', 'Tangerang', '2002-08-12', 'WNI', 'islam', 'Jl. Parung cidokom No11 pos 14211 Tangerang selatan', 'Sutimah', 'Ibu rumah tangga', 'Jl. Parung cidokom No11 pos 14211 Tangerang selatan', '-', '-', '-', '2020-07-13', 'MTS YAPINNA', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Putri ayu ningsih', '-', '0000-00-00', '', '25__NUR_HOLIFAH_IMG_0525.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$v8G1Ooh6W.VdpK7njucXSOvk0UCR/9ATecNoMYjP95yPa68ScrGyq'),
(5, 5, 3, 10112, 'Deuis Susilawati', '2019-2020', '08590282323', 'perempuan', 'Ciputat', '2001-05-20', 'WNI', 'islam', 'Jl. Jaksa ciputat Blok IV No.13 pos 16612 Tangerang selatan', 'Sulastri', 'Pegawai Swasta', 'Jl. Jaksa ciputat Blok IV No.13 pos 16612 Tangerang selatan', '-', '-', '-', '2020-07-13', 'SMP ISLAMIAH', 'Jl. Terminal Raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Deuis Susilawati', '-', '0000-00-00', '', '29__RONAINA_QHOSTALANIE_ZAIZAFA_IMG_0533.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$Bt5CRgXXP.X7BmP0uPOCL.eRNMFmowwiZmOXgBy/VBNZvMiJeuSLW'),
(6, 6, 3, 11035, 'Fiva Novitasari', '2019-2020', '08532428664', 'perempuan', 'Pamulang', '2003-08-12', 'WNI', 'islam', 'Jl. Melon pamulang estate Blok  4 No12 poss  11036 Tangerang', 'Hj.sukmawati', 'perkantoran', 'Jl. Melon pamulang estate Blok  4 No12 poss  11036 Tangerang ', '-', '-', '-', '2020-07-13', 'SMP Negeri Depok II', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Fiva Novitasari', '-', '0000-00-00', '', '21__NEILA_MEISARAH_IMG_0517.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$h5t0DeXy9FzzAIOTBo.A3u2ZXQOVLAWG/.SdM5RYq8aFR7t.oMkjK'),
(7, 7, 3, 11501, 'Bagas Saputro', '2019-2020', '08532428664', 'laki-laki', 'Pondok cabe', '2004-02-16', 'WNI', 'katholik', 'Jl. Kemiri III pondok cabe kp. belakang No 18 pos 30135 Tangerang selatan kec. pondok Cabe udik', 'Damiri', 'Pegawai Swasta', 'Jl. Kemiri III pondok cabe kp. belakang No 18 pos 30135 Tangerang selatan kec. pondok Cabe udik', '-', '-', '-', '2020-07-13', 'SMP Negeri Depok II', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '', '-', '0000-00-00', '', '15__MUHAMMAD_AUFA_RAFIF_IMG_0509.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$26WBxt9lU452zZkwBqH3KOx90FteP5k/Z.MAtZMtPg/9qAMjKdoJK'),
(8, 8, 3, 10992, 'Dio fanie afyan', '2019-2020', '08586733380', 'laki-laki', 'Depok', '2003-07-12', 'WNI', 'islam', 'Jl. Margonda 2 Blok 2 No 012 pos 30311 kec. depok parung bogor', 'Alimin', 'Buruh', 'Jl. Margonda 2 Blok 2 No 012 pos 30311 kec. depok parung bogor', '-', '-', '-', '2019-07-13', 'SMP Negeri Depok II', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '', '14__MUHAMAD_ALDI_ANUGRAH_IMG_0507.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$g7tvbeYJGdT.gyLppuU4DOJTv/S6sCxljS6NpjEo23MBrUfwNOW4y'),
(9, 9, 3, 11802, 'Hafidzs Zahran', '2019-2020', '08586733388', 'laki-laki', 'Pamulang', '2003-05-06', 'WNI', 'islam', 'Jl. Setiabudi Gang salak III No.12 pos 120622 kec. pamulang', 'Apipudin', 'Pegawai Swasta', 'Jl. Setiabudi Gang salak III No.12 pos 120622 kec. pamulang', '-', '-', '-', '2020-07-13', 'SMP MUHAMMADIYAH', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '', '-', '0000-00-00', '', '9__HAFIDS_ZAHRAN_IMG_0495.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$hx8i5UymrF6WWwIGBYYNHO28D2Pwujkplvx1.vCEJ4ST4DdObMRdO'),
(10, 11, 3, 20110, 'Fahmi fakhrurrozi', '2019-2020', '08586733380', 'laki-laki', 'Tangerang', '2002-02-12', 'WNI', 'islam', 'Jl. kp. mangga pamulang rt 1/17 No.38 poss 114672 pamulang timur', 'Epi Herawati', 'Ibu rumah tangga', 'Jl. kp. mangga pamulang rt 1/17 No.38 poss 114672 pamulang timur', '-', '-', '-', '2019-07-13', 'MTS YAPINNA', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '', '-', '0000-00-00', '', '2__ALDI_SUDARMANSYAH_IMG_0478.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$AGEegyWn5oIatqiy9sTQFORNxnqcCyiTb1WqjR/UlifGtFgb87sXS'),
(11, 12, 3, 20232, 'Nurprasetyo', '2019-2020', '08586733388', 'laki-laki', 'Jakarta', '2003-02-14', 'WNI', 'islam', 'Jl. Pinang dalam Blok A No. 15 Kec. pamulang', 'Lastri', 'Ibu rumah tangga', 'Jl. Pinang dalam Blok A No. 15 Kec. pamulang', '-', '-', '-', '2018-07-13', 'MTS DAARUL HIKMAH', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '', '3__ALFIAN_SYIFANTONI_IMG_0480.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$v/t/2oszOvmVuEKgFtr0Z.Wu.2Y6AqyCnFArxG2Z9yrntosAtGIZy'),
(12, 13, 3, 26031, 'Indriani sukma putri', '2019-2020', '08764653981', 'perempuan', 'Tangerang', '2001-02-21', 'WNI', 'islam', 'Jl. Poncol lestari Rt.5/17 No. 20 pos 23110 pamulang timur, kec. pamulang', 'Mariamaunah', 'Pegawai Swasta', 'Jl. Poncol lestari Rt.5/17 No. 20 pos 23110 pamulang timur, kec. pamulang', '-', '-', '-', '2019-07-13', 'MTS DAARUL HIKMAH', 'Jl. Terminal raya pondok cabe udik', '', '0000-00-00', '0000-00-00', '', '-', '0000-00-00', '', '4__ANNISA_WAHIDIAH_IMG_0484.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$.8ia25KQ2xhhHI0efz4vBOyYtmE6xm3emTWABX7ift2cACwHa.ZL.'),
(13, 14, 3, 20122, 'Susi Damayanti', '2019-2020', '08764653581', 'perempuan', 'Pamulang', '2003-02-12', 'WNI', 'islam', 'Jl. Poncol waru Blok D No.13 pos 12031 pamulang timur, kec pamulang', 'Herman', 'Pegawai Swasta', 'Jl. Poncol waru Blok D No.13 pos 12031 pamulang timur, kec pamulang', '-', '-', '-', '2019-07-13', 'SMP ISLAMIAH', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Susi Damayanti', '-', '0000-00-00', '', '12__MEILYA_HESTININGRUM_IMG_0503.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$fFfdJD0BsYcKGIgS3IKW9OMp2BziE7.dIt29kR72V1OgC700Z4xYS'),
(14, 15, 3, 22181, 'Dini sapitri handayani', '2019-2020', '08590282300', 'perempuan', 'Tangerang', '2001-05-20', 'WNI', 'islam', 'Jl. Cimanggis raya ciputat  Blok C III No.14, 22041 kec. ciputat Tangerang selatan', 'Soedarjo', 'perkantoran', 'Jl. Cimanggis raya ciputat  Blok C III No.14, 22041 kec. ciputat Tangerang selatan', '-', '-', '-', '2019-07-13', 'SMP Negeri 1', 'Jl. Terminal Raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Indriani sukma putri', '-', '0000-00-00', '', '24__NUR_HASANAH_IMG_0523.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$oiXTR.8RfyiorLL1i8uU1O7TT5ND/Wg3kqP3s84VSJiDntMigXMwO'),
(15, 16, 3, 22761, 'Mumammad fahri', '2019-2020', '08972636328', 'laki-laki', 'Tangerang', '2002-06-20', 'WNI', 'islam', 'jL. Cinangka wates No.3 14218, Tangerang selatan', 'Jarianto', 'Pegawai Swasta', 'jL. Cinangka wates No.3 14218, Tangerang selatan', '-', '-', '-', '2018-07-13', 'MTS SADATURAIN', 'Jl. Terminal Raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$z4h5QkSjJaRi0p2lAV2mRO3TMGJuUo0NqTCLJIuPIXGAcoBWPbKBm'),
(16, 17, 3, 2147483647, 'Maulana Alif Anugrah', '2019-2020', '08726263265', 'laki-laki', 'Tangerang', '2001-03-30', 'WNI', 'islam', 'Jl. Jaksaan komplek Blok A No.2, 13321 kec. ciputat tangerang', 'Martha', 'Pegawai Swasta', 'Jl. Jaksaan komplek Blok A No.2, 13321 kec. ciputat tangerang ', '-', '-', '-', '2019-07-13', 'SMP ISLAMIAH', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '', '-', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$.kHxmI7Ro1yWhRbnTsFpZuoOJMd2Fs8W.zXsqKhCz1yZwlGPJORc6'),
(17, 18, 3, 2122626277, 'M.arya pujiansyah', '2019-2020', '08776423355', 'laki-laki', 'Bogor', '2002-03-29', 'WNI', 'islam', 'Jl. setapak cogrek Blok A III, 03423 kec. parung bogor', 'Nardih', 'Pegawai Swasta', 'Jl. setapak cogrek Blok A III, 03423 kec. bogor', '-', '-', '-', '2019-07-13', 'SMP NEGRI AMEC BOGOR', 'Jl.  Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'M.arya pujiansyah', '-', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$LnX9MH2b76pByvi9p4d3Ouxt1/.aJ5s16HR2Nkdj9NSh9IbcOoV52'),
(18, 19, 3, 2147483647, 'M.rizky ramadhan', '2019-2020', '08572828822', 'laki-laki', 'Tangerang', '2003-04-06', 'WNI', 'islam', 'Jl. Poncol lestari Rt.4/17 No. 9 pos 23110 pamulang timur, kec. pamulang', 'Sunaryo', 'Pegawai Swasta', 'Jl. Poncol lestari Rt.5/17 No. 20 pos 23110 pamulang timur, kec. pamulang', '-', '-', '-', '2019-07-13', 'MTS DAARUL HIKMAH', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$P/bDdwloAFrgygeoIEvXuOjUKLfAeIoBfkIR0E/HvnFQUe/n6ppx6'),
(19, 20, 3, 2147483647, 'Deni saputra', '2019-2020', '08746363331', 'laki-laki', 'Pamulang', '2003-05-12', 'WNI', 'islam', 'Jl. serua pinang Rt.2/13 No. 20 pos 19310 pamulang timur, kec. pamulang', 'Nurjanah', 'Pegawai Swasta', 'Jl. serua pinang Rt.2/13 No. 20 pos 19310 pamulang timur, kec. pamulang', '-', '-', '-', '2019-07-13', 'SMP ISLAMIAH', 'Jl.Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Deni saputra', '-', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$JkZDq8k9Rm8qFBdbbbpOeuRH90NikxCKI9hzNN16gwnguFqSJZfFi'),
(20, 21, 3, 2147483647, 'Siti zaenab', '2019-2020', '08523728282', 'perempuan', 'Depok', '2000-03-21', 'WNI', 'islam', 'Jl. Tambang serompak Rt.2/16 No. 5 pos 11319 kec. Depok tangerang', 'Sutimah', 'Ibu rumah tangga', 'Jl. Tambang serompak Rt.2/16 No. 5 pos 11319 kec. Depok tangerang', '-', '-', '-', '2017-07-13', 'SMP NEGERI 2 PARUNG', 'Jl. Terminal Raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$CJbD.Z/wAhpiP7PYS4Y3u..n3CoTLd./x397DkmXpzaVUM133Nrm2'),
(21, 22, 3, 2147483600, 'Lukman santoso', '2019-2020', '08976566859', 'laki-laki', 'Tangerang', '2000-05-29', 'WNI', 'islam', 'Jl. Pujasari Blok A No.8 30211 parung Bogor kec. parung', 'Jajang', 'Pegawai Swasta', 'Jl. Pujasari Blok A No.8 30211 parung Bogor kec. parung', '-', '-', '-', '2018-07-13', 'MTS YAPINNA', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '', '6__ARIS_TANTOWI_IMG_0489.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$8Fsef3bPfVuyjpiDVcChneRpdFQoiwcau2cE2bHFQsZ8JAKJCfGGS'),
(22, 23, 3, 2147483647, 'Yesi sekar astuti', '2019-2020', '09876367621', 'perempuan', 'Tangerang', '2001-03-29', 'WNI', 'islam', 'Jl. Permata serua Blok M No15, 312101 Tangerang selatan', 'Leman ', 'Pegawai Swasta', 'Jl. Permata serua Blok M No15, 312101 Tangerang selatan', '-', '-', '-', '2018-07-13', 'SMP MUHAMMADIYAH', 'Jl. Terminal raya pondok cabe udik', '-', '0000-00-00', '0000-00-00', 'Yesi sekar astuti', '-', '0000-00-00', '', '19__MUTIARA_SELINA_IMG_0513.JPG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$YETaLi4LCG4pAEvJK2oCvOrBr74nDc/qOhezO4GhpQAoA4ZCmAMj2'),
(29, 2, 3, 324234234, 'tess', 'tes', '3232423432', 'laki-laki', 'tesss', '2020-10-23', 'WNI', 'islam', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '2020-10-02', 'tes', 'tes', '3423', '2020-10-07', '0000-00-00', '', '', '0000-00-00', '', 'Penguins.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '0', '0', '0', '0', '', '', '0', '0', '0', '0', '', '', '', '', '', '', '$2y$10$B8NgdfIBRzwqNzHZGhAMueruWu9.UR6feC04pH/t5qG4zLtEzETZq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `id_guru` (`id_account`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id_extra`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadwal_pelajaran`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id_kepsek`),
  ADD UNIQUE KEY `id_guru_2` (`id_guru`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `id_extra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_jadwal_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id_kepsek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1311;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
