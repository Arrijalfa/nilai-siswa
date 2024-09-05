-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 05:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `nilai_kuis` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nama_siswa`, `nilai_kuis`) VALUES
(1, 'Fadhil Arrijal', 100),
(2, 'Almira', 80);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `password`) VALUES
('20200810045', 'Syatori', 'Laki-laki', 'syatori123'),
('20200810057', 'Fadhil Arrijal', 'Laki-laki', 'fadhil123'),
('20200810060', 'Almira', 'Perempuan', 'almira123'),
('20200810070', 'Michaele', 'Laki-laki', 'michelle123');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `nama_soal` varchar(255) DEFAULT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `pilihan_a` varchar(255) DEFAULT NULL,
  `pilihan_b` varchar(255) DEFAULT NULL,
  `pilihan_c` varchar(255) DEFAULT NULL,
  `pilihan_d` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `nama_soal`, `jawaban`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`) VALUES
(1, 'Otot yang bekerja tanpa disadari dan terdapat di sekitar organ dalam tubuh disebut...', 'C', 'Otot Lurik', 'Otot Rangka', 'Otot Polos', 'Otot Jantung'),
(2, 'Otot yang berada di dalam jantung dan memompa darah ke seluruh tubuh adalah...', 'A', 'Otot Jantung', 'Otot Lurik', 'Otot Polos', 'Otot Darah'),
(3, 'Otot-otot yang dapat kita kendalikan secara sadar disebut...', 'B', 'Otot Jantung', 'Otot Lurik', 'Otot Polos', 'Otot Involunter'),
(4, 'Apakah fungsi utama otot jantung?', 'B', 'Mengangkat beban', 'Memompa Darah', 'Mengatur gerakan', 'Menyokong organ '),
(5, 'Bagaimana bentuk otot polos?  ', 'D', 'Panjang dan ramping', 'Berserat dan kasar', 'Bersendi seperti tali', 'Gelondong seperti potongan kayu'),
(6, 'Kapan otot polos bekerja?', 'A', 'Bekerja tanpa disadari', 'Saat kita sadar', 'Saat diperintahkan', 'Saat tidur'),
(7, 'Dimana otot polos terdapat dalam tubuh manusia?', 'C', 'Jantung', 'Tulang', 'Saluran Pencernaan', 'Tengkorak'),
(8, 'Bagaimana bentuk otot lurik?', 'D', 'Bulat dan padat', 'Gelondong seperti potongan kayu', 'Berserat dan kasar', 'Serabut seperti kabel'),
(9, 'Kapan otot rangka biasanya digunakan', 'C', 'Saat tidur', 'Saat makan', 'Saat beraktivitas', 'Saat tidak sadar'),
(10, 'Dimana otot lurik menempel?', 'B', 'pada saluran pencernaan', 'Pada rangka ', 'Pada jantung', 'Pada pembuluh darah'),
(11, 'Apa yang terjadi pada otot rangka saat kita mengangkat benda?', 'D', 'Relaksasi', 'Pembesaran', 'Pembentukan serat', 'Kontraksi'),
(12, 'Bagaimana bentuk otot jantung?', 'A', 'Serabut membentuk anyaman', 'Gelondong seperti potongan kayu', 'Bulat dan padat', 'Berserat dan kasar'),
(13, 'Di mana otot jantung terdapat dalam tubuh manusia?', 'A', 'Dinding jantung', 'Saluran pencernaan', 'Pembuluh darah', 'Otot-otot besar'),
(14, 'Bagaimana otot jantung bekerja?', 'B', 'Hanya saat kita sadar', 'Bekerja tanpa diperintah', 'Saat diperintahkan', 'Diperintah oleh otak'),
(15, 'Apa yang dilakukan otot jantung saat tidur, makan, atau belajar?', 'B', 'Beristirahat', 'Memompa Darah', 'Berkontraksi', 'Mengendur'),
(16, 'Dengan cara apa otot membantu gerakan tubuh?', 'D', 'Menopang tubuh', 'Melindungi organ tubuh', 'Membantu pencernaan', 'Meregang sesuai kebutuhan'),
(17, 'Apa yang terjadi saat otot berkontraksi?', 'C', 'Otot memanjang', 'Otot menjadi lemas', 'Otot memendek', 'Otot menciut'),
(18, 'Apa fungsi utama dari otot dalam sistem gerak?', 'A', 'Melakukan gerakan', 'Menyimpan energi', 'Menghasilkan hormon', 'Memberikan bentuk'),
(19, 'Otot yang berkontraksi ketika kita berjalan adalah...', 'C', 'Otot jantung', 'Otot polos', 'Otot lurik', 'Otot kaki'),
(20, 'Ketika kita merasakan rasa lapar, otot apa yang membantu pergerakan makanan melalui saluran pencernaan?', 'D', 'Otot jantung', 'Otot perut', 'Otot lurik', 'Otot polos'),
(21, 'Olahraga push-up membantu melatih otot...', 'B', 'Otot jantung', 'Otot Lurik', 'Otot polos', 'Otot tenaga'),
(22, 'Otot yang membantu mencerna makanan pada usus disebut...', 'C', 'Otot usus', 'Otot perut', 'Otot polos', 'Otot jantung'),
(23, 'Otot yang dapat kita kendalikan secara sadar adalah...', 'A', 'Otot Lurik', 'Otot Polos', 'Otot Jantung', 'Otot Otak'),
(24, 'Fungsi utama otot lurik adalah...', 'D', 'Mencerna makanan', 'Mengontrol jantung', 'Mengontrol otak', 'Membantu gerak tubuh'),
(25, 'Berikut merupakan jenis otot pada tubuh manusia, kecuali...', 'C', 'Otot lurik', 'Otot polos', 'Otot kawat', 'Otot jantung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `status_user` enum('Admin','RT','RW') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `status_user`) VALUES
(1, 'Akmal', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin ', 'Admin'),
(2, 'Fadhil Arrijal', 'fadhil', '4134dc827923290eecc2fd4d1693359f', '', 'Admin'),
(4, 'Rommy Mukhtarom', 'rommy', '0af8dbd1b92da1e06753a3efb1dc797f', 'Guru', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
