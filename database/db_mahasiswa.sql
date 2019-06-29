-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 05:02 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jurusan_mhs` varchar(30) NOT NULL,
  `npm_mhs` varchar(20) NOT NULL,
  `tempat_lahir_mhs` varchar(20) NOT NULL,
  `tanggal_lahir_mhs` date NOT NULL,
  `jenis_kelamin_mhs` varchar(10) NOT NULL,
  `nik_ktp_mhs` varchar(20) NOT NULL,
  `asal_sekolah_mhs` varchar(20) NOT NULL,
  `jurusan_sekolah_mhs` varchar(30) NOT NULL,
  `alamat_sekolah_mhs` varchar(100) NOT NULL,
  `nomor_sttb` varchar(20) NOT NULL,
  `nilai_ijazah` varchar(5) NOT NULL,
  `nilai_nem` varchar(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `perguruan_tinggi_asal` varchar(30) NOT NULL,
  `jurusan_asal` varchar(30) NOT NULL,
  `npm_asal` varchar(20) NOT NULL,
  `tahun_lulus_asal` date NOT NULL,
  `alamat_mhs` varchar(30) NOT NULL,
  `rt_mhs` varchar(5) NOT NULL,
  `rw_mhs` varchar(5) NOT NULL,
  `kelurahan_mhs` varchar(20) NOT NULL,
  `kecamatan_mhs` varchar(20) NOT NULL,
  `kota_mhs` varchar(20) NOT NULL,
  `kode_pos_mhs` varchar(5) NOT NULL,
  `nomor_telpon_mhs` varchar(15) NOT NULL,
  `nomor_hp_mhs` varchar(15) NOT NULL,
  `email_mhs` varchar(30) NOT NULL,
  `agama_mhs` varchar(10) NOT NULL,
  `nomor_kps` varchar(20) NOT NULL,
  `urutan_anak` varchar(5) NOT NULL,
  `jumlah_saudara` varchar(5) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir_ayah` varchar(20) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `nik_ktp_ayah` varchar(20) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(20) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `nik_ktp_ibu` varchar(20) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `tempat_lahir_wali` varchar(20) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `nik_ktp_wali` varchar(20) NOT NULL,
  `pendidikan_wali` varchar(20) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
