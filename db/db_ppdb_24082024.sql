-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2023 pada 20.04
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_form_pendaftarans`
--

CREATE TABLE `model_form_pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nopendaftaran` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmlengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` int(16) NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmplahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `jnskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_bindo` int(11) NOT NULL,
  `nilai_binggris` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_ipa` int(11) NOT NULL,
  `doc_nilaiujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idjurusan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idjurusan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_ketlulus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `model_form_pendaftarans`
--
ALTER TABLE `model_form_pendaftarans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `model_form_pendaftarans`
--
ALTER TABLE `model_form_pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
