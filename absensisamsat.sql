-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2022 pada 14.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensisamsat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nik` varchar(225) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `masuk` time DEFAULT NULL,
  `pulang` time DEFAULT NULL,
  `ijin` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `nik`, `tanggal`, `masuk`, `pulang`, `ijin`) VALUES
(2, '1140', '2018-11-01', '10:03:35', '22:52:08', ''),
(3, '1120', '2018-11-01', '08:24:55', '22:49:21', ''),
(4, '1100', '2018-11-01', '22:36:57', '22:54:47', ''),
(5, '1140', '2018-11-02', '07:24:40', '20:00:00', ''),
(6, '1111', '2018-11-02', '17:02:41', '23:00:00', ''),
(7, '1140', '2018-11-03', '07:12:04', '18:11:40', ''),
(8, '1120', '2018-11-03', '07:12:12', '18:11:55', ''),
(11, '1111', '2018-11-03', '00:00:00', '00:00:00', 'sakit'),
(12, '1100', '2018-11-03', '00:00:00', '00:00:00', 'cuti'),
(13, '1140', '2022-09-26', '18:13:50', '18:14:33', NULL),
(14, '1140', '2022-09-28', '10:02:47', '10:10:33', NULL),
(21, '3516160902010003', '2022-10-26', NULL, NULL, 'ijin'),
(22, '3516160902010002', '2022-10-26', '13:32:05', '13:40:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `kode`, `alamat`) VALUES
(1, 'MTR', 'MATARAM'),
(2, 'SUB', 'Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(11) NOT NULL,
  `nama_aplikasi` varchar(255) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `nama_aplikasi`, `nama_perusahaan`, `logo`, `alamat`) VALUES
(1, 'Aplikasi Absensi Pekerja Non ASN Samsat Provinsi Nusa Tenggara.', 'Kantor Samsat Kota Mataram', 'file_20221001121918.file_20221001121858.file_20221001121840.file_20220923165800.logobappenda.png', ' Jl. Majapahit No. 17 Mataram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `kode_divisi` varchar(255) DEFAULT NULL,
  `divisi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id`, `kode_divisi`, `divisi`) VALUES
(1, 'AG', 'Agen Samsat'),
(2, 'CS', 'Customer Service'),
(3, 'TU', 'Tata Usaha'),
(4, 'AD', 'Administrasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(225) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `divisi` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nik`, `nama`, `no_telp`, `jenis_kelamin`, `agama`, `alamat`, `divisi`, `start_date`, `end_date`, `foto`) VALUES
(5, '3516160902010002', 'Putri Fahmi Ramadhani', '083098432712', 'Perempuan', 'Islam', 'MATARAM', 'Agen Samsat', '2022-09-29', '2025-09-28', 'file_20221026015802.Screenshot 2022-09-23 220652.png'),
(6, '3516160902010003', 'Laela Fitriana', '0876478136847', 'Perempuan', 'Islam', 'MATARAM', 'Customer Service', '2022-09-30', '2022-09-30', 'file_20220929194733.file_20220926180659.WhatsApp Image 2022-09-23 at 10.05.06 PM.jpeg'),
(8, '3516160902010004', 'Prayoga', '0876478136847', 'Laki-Laki', 'Islam', 'MATARAM', 'Agen Samsat', '0000-00-00', '0000-00-00', 'file_20221026140338.aku.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'putri', 'putri', 'Putri Fahmi Ramadhani', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id`, `level`) VALUES
(1, 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
