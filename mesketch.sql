-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2022 pada 14.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesketch`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `excerpt` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `author`, `judul`, `isi`, `excerpt`, `gambar`, `tanggal`) VALUES
(1, 'Fina', 'Color Pallete Penting Gak', 'Color palette merupakan sekumpulan warna yang disusun dan dipadupadankan sehingga menghasilkan kombinasi warna yang menarik.', 'Color palette merupakan sekumpulan warna yang disusun dan dipadupadankan sehingga menghasilkan kombinasi warna yang menarik.', '1.jpg', '2022-09-16'),
(2, 'Rangga', 'Cermat Dalam Memilih Warna', 'Menggunakan warna yang terlalu banyak, jika tidak dieksekusi secara baik malah akan membuat desain kurang sedap dipandang.', 'Menggunakan warna yang terlalu banyak, jika tidak dieksekusi secara baik malah akan membuat desain kurang sedap dipandang.', '2.jpg', '2022-09-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id_komen` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `reply` int(5) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id_komen`, `nama`, `isi`, `email`, `id_blog`, `reply`, `waktu`) VALUES
(27, 'Rayhan Rangga Yudha', 'Coba Komentar Langsung', 'garest91@gmail.com', 1, 0, '2022-10-02'),
(28, 'Fina Ramadhani', 'Coba Reply Langsung', 'coba@gmail.com', 1, 27, '2022-10-02'),
(29, 'Miranti Rahayu', 'Coba Reply 3', 'coba@gmail.com', 1, 28, '2022-10-02'),
(30, 'Naisya Rosy', 'Coba Komen 2', 'coba@gmail.com', 1, 0, '2022-10-02'),
(31, 'Nazwa', 'Coba Reply 3', 'coba@gmail.com', 1, 30, '2022-10-02'),
(32, 'tes', 'tes', 'tes', 1, 0, '2022-10-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `isi` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testi`
--

CREATE TABLE `testi` (
  `idTesti` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testi`
--

INSERT INTO `testi` (`idTesti`, `nama`, `isi`) VALUES
(1, 'Rayhan Rangga Yudha', 'Coba Coba'),
(2, 'Fina Ramadhani', 'Coba edit testi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `gambar`, `role`) VALUES
(2, 'Fein', 'c89ee91ad8cdf83841d3b743413e403a', 'Finaaaaaa', 'Screenshot (19).png', 'Admin'),
(3, 'rangga', '863c2a4b6bff5e22294081e376fc1f51', 'Coba Nama', 'Screenshot 2022-08-23 145053.png', 'Writer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indeks untuk tabel `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`idTesti`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testi`
--
ALTER TABLE `testi`
  MODIFY `idTesti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
