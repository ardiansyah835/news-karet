-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 03:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_karet`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_penulis` varchar(35) NOT NULL,
  `tgl_berita` date NOT NULL,
  `sub_judul` varchar(300) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `judul`, `nama_penulis`, `tgl_berita`, `sub_judul`, `isi_berita`, `gambar`) VALUES
(3, 'tri andi', 'tri andi', '2023-05-11', 'tri andi kang ngoding', 'hhaskdkhdkadhdkahdkahdkhdksad', '28-285371_10-itachi-uchiha-wallpaper-for-mobile-iphone-and.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi`
--

CREATE TABLE `ekonomi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_penulis` varchar(35) NOT NULL,
  `tgl_berita` date NOT NULL,
  `sub_judul` varchar(300) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekonomi`
--

INSERT INTO `ekonomi` (`id`, `judul`, `nama_penulis`, `tgl_berita`, `sub_judul`, `isi_berita`, `gambar`) VALUES
(21, 'ekonomi di Kp. karet', 'Ardiansyah', '2023-05-03', 'ekonomi di Kp. karet sedang membaik', 'ekonomi di kp karet sedang naik daun', 'bag.png'),
(32, 'Ardiansyah', 'Ardi', '2023-05-10', 'Ardiansyah bingung kerjain TA', 'berita hari ini tidak ada', 'persami.jpg'),
(35, 'Ariel ngedate sama UMI', 'Ardiansyah', '2023-05-10', 'Ariel ngedate sama UMI jam 19.00 di Citra', 'HEBOHH!!!!!! Ariel dan UMI ngedate di sebuah cafe di kawasan CITRA INDAH.', 'persami.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hiburan`
--

CREATE TABLE `hiburan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_penulis` varchar(35) NOT NULL,
  `tgl_berita` date NOT NULL,
  `sub_judul` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiburan`
--

INSERT INTO `hiburan` (`id`, `judul`, `nama_penulis`, `tgl_berita`, `sub_judul`, `isi_berita`, `gambar`) VALUES
(4, 'keberhasilan membuat crud', 'Ardiansyah', '2023-05-03', 'keren kan ardian berhasil membuat crud', 'hallo semua ardian berhasil membuat web menggunakan crud', 'bag.png');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(32) NOT NULL,
  `nama_belakang` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id`, `nama_depan`, `nama_belakang`, `email`, `subject`, `pesan`) VALUES
(3, 'pesan', 'pesan', 'pesan', 'pesan', 'pesan'),
(4, 'ardian', 'ananda', 'ardian@gmail.com', 'tentang api', 'tentang api nih guys');

-- --------------------------------------------------------

--
-- Table structure for table `pembaca`
--

CREATE TABLE `pembaca` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `verifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembaca`
--

INSERT INTO `pembaca` (`id`, `nama_lengkap`, `username`, `password`, `telp`, `verifikasi`) VALUES
(1, 'ardian', 'ardian', '46632a526b980b41478ca6078fb02c28', '82124120495', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id` int(11) NOT NULL,
  `nama_penulis` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `nama_penulis`, `username`, `password`) VALUES
(1, 'penulis', 'penulis', 'de3709b8e6f81a4ef5a858b7a2d28883');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
(1, 'Ardian', 'Ardian', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `politik`
--

CREATE TABLE `politik` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_penulis` varchar(35) NOT NULL,
  `tgl_berita` date NOT NULL,
  `sub_judul` varchar(300) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `politik`
--

INSERT INTO `politik` (`id`, `judul`, `nama_penulis`, `tgl_berita`, `sub_judul`, `isi_berita`, `gambar`) VALUES
(2, 'politik 1', 'Ardian', '2023-05-27', 'politik 1 telah menguasai bumi', 'politik 1 nih guys', 'gambar 1.1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `teknologi`
--

CREATE TABLE `teknologi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_penulis` varchar(35) NOT NULL,
  `tgl_berita` date NOT NULL,
  `sub_judul` varchar(300) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teknologi`
--

INSERT INTO `teknologi` (`id`, `judul`, `nama_penulis`, `tgl_berita`, `sub_judul`, `isi_berita`, `gambar`) VALUES
(6, 'Teknologi digital', 'Ardiansyah ', '2023-05-21', 'Teknologi digital yang sudah menyebar luas di kalangan dunia ini', 'Teknologi nih guys', 'teknologi.jpg'),
(8, 'Teknologi 2', 'Teknologi 2', '2023-05-26', 'Teknologi 2', 'Teknologi 2 nih guys', 'teknologi1.jpg'),
(9, 'Teknologi 2', 'Ardi', '2023-05-26', 'Teknologi 2', 'Teknologi 2 nih guys mwehehehe', 'php.png'),
(10, 'teknologi 1 nih guys ', 'Ardiansyah', '2023-05-26', 'Teknologi 1 nih guys ', 'Teknologi 1 telah membuat tatanan dunia berubah 100%', 'admin.JPG'),
(11, 'Teknologi 3 lagi', 'Ardi', '2023-05-26', 'Teknologi 3 sudah menguasai bumi', 'berita 1 nih guys ', 'koneksi.JPG'),
(12, 'berita 4 ', 'ardi', '2023-05-26', 'berita 4 yang viral di kp karet', 'berita 1 yang menguasai dunia', 'berita-teknologi.JPG'),
(13, 'Teknologi 5 ', 'Ardi', '2023-05-26', 'teknologi 5 menguasai bumi', 'berita 5 sedang gg guys', 'gambar 1.1.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekonomi`
--
ALTER TABLE `ekonomi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiburan`
--
ALTER TABLE `hiburan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembaca`
--
ALTER TABLE `pembaca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `politik`
--
ALTER TABLE `politik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknologi`
--
ALTER TABLE `teknologi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ekonomi`
--
ALTER TABLE `ekonomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hiburan`
--
ALTER TABLE `hiburan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembaca`
--
ALTER TABLE `pembaca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `politik`
--
ALTER TABLE `politik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teknologi`
--
ALTER TABLE `teknologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
