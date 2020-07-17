-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2020 pada 10.53
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pangsapasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_lengkap`, `sekolah_asal`, `lokasi`, `id_sekolah`, `jurusan`, `angkatan`) VALUES
(1, 'Miggy', 'SMP 1', 'Rancaekek', 1, 'RPL', '2010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa_smp`
--

CREATE TABLE `tb_siswa_smp` (
  `id` int(11) NOT NULL,
  `minat` varchar(255) NOT NULL,
  `bakat` varchar(255) NOT NULL,
  `id_smp` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa_smp`
--

INSERT INTO `tb_siswa_smp` (`id`, `minat`, `bakat`, `id_smp`, `nama`, `umur`) VALUES
(1, 'Otomotif', 'Futsal', 1, 'Ilham', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_smp`
--

CREATE TABLE `tb_smp` (
  `id` int(11) NOT NULL,
  `nama_smp` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_smp`
--

INSERT INTO `tb_smp` (`id`, `nama_smp`, `lokasi`, `email`, `no_tlp`) VALUES
(1, 'SMP Negeri 1 ', 'Bandung', 'smpnegeri1bandung@gmail.com', '022776577');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `nama`, `role`) VALUES
(5, 'admin', 'admin@admin', '$2y$10$e6bG21WuztMLkDooK5YAP.6dlkDWozVlo0HzOErfn3uUe9p1XN62K', 'Admin 1', 'Admin'),
(8, 'humas', 'humas@gmail.com', '$2y$10$e8AhRRBWpU424P53MCNTnu9sKQL.EvxZvJHw6yMGgaLt8i5oDwT0m', 'Divisi Humas', 'Humas/Hubin'),
(9, 'kepalasekolah', 'kepalasekolah', '$2y$10$6V/ktHDey0TlMUv4.rtiwOdRtiit07pXVyYx1a4TgCWg0q1gVk0SO', 'Kepala Sekolah 1', 'Kepala Sekolah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_siswa_smp`
--
ALTER TABLE `tb_siswa_smp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_smp`
--
ALTER TABLE `tb_smp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa_smp`
--
ALTER TABLE `tb_siswa_smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_smp`
--
ALTER TABLE `tb_smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
