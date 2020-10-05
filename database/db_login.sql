-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Okt 2020 pada 16.25
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(18, 'fahrudin', 'fahrudin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(19, 'Monalisa', 'monalisa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'fahrudin', 'supriyadi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'Dody', 'dody@gmail.com', '202cb962ac59075b964b07152d234b70'),
(22, 'Karjono', 'karjono@gmail.com', '202cb962ac59075b964b07152d234b70'),
(23, 'Maesaroh', 'maesaroh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(24, 'Mahmudah', 'mahmudah@gmail.com', '202cb962ac59075b964b07152d234b70'),
(25, 'Rambo', 'rambo@gmail.com', '202cb962ac59075b964b07152d234b70'),
(26, 'nana', 'nana@gmail.com', '202cb962ac59075b964b07152d234b70'),
(27, 'Sofi', 'sofi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(28, 'Kampret', 'kampret@gmail.com', '202cb962ac59075b964b07152d234b70'),
(29, 'Miya', 'miya@gmail.com', '202cb962ac59075b964b07152d234b70'),
(30, 'rama', 'rama@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
