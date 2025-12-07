-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2025 at 01:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aa`
--

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(11) NOT NULL,
  `nama_periode` varchar(100) NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_tutup` date NOT NULL,
  `status_periode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_asal_sekolah`
--

CREATE TABLE `tb_asal_sekolah` (
  `id_asal_sekolah` int(11) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `status_sekolah` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_asesmen`
--

CREATE TABLE `tb_asesmen` (
  `idasesmen` int(11) NOT NULL,
  `kode_polkes` varchar(100) NOT NULL,
  `matkul_polkes` varchar(100) NOT NULL,
  `sks_polkes` varchar(100) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_atas_nama`
--

CREATE TABLE `tb_atas_nama` (
  `id_atas_nama` int(11) NOT NULL,
  `nama_atas_nama` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir1`
--

CREATE TABLE `tb_formulir1` (
  `id_formulir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('PMDP','1 Pilihan Prodi Jalur Umum','2 Pilihan Prodi Jalur Umum','1 Pilihan Prodi Jalur Lintas Provinsi','2 Pilihan Prodi Jalur Lintas Provinsi') NOT NULL,
  `nama_lengkap` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pilihan_prodi` varchar(250) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `nama_sekolah` varchar(150) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL,
  `daerah_asal` text NOT NULL,
  `berat_badan` varchar(15) NOT NULL,
  `tinggi_badan` varchar(15) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `pekerjaan_orang_tua` varchar(150) NOT NULL,
  `golongan_darah` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tanggal_daftar` varchar(20) NOT NULL,
  `tanggal_login` varchar(20) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_cetak` varchar(20) NOT NULL,
  `tempat_ujian` varchar(100) NOT NULL,
  `ruang_ujian` varchar(250) NOT NULL,
  `ikut_tes_tertulis` varchar(100) NOT NULL,
  `lulus_tes_tertulis` varchar(100) NOT NULL,
  `ikut_tes_kesehatan` varchar(100) NOT NULL,
  `lulus_tes_kesehatan` varchar(100) NOT NULL,
  `tempat_kuliah` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir2`
--

CREATE TABLE `tb_formulir2` (
  `id_formulir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('PMDP','1 Pilihan Prodi Jalur Umum','2 Pilihan Prodi Jalur Umum','1 Pilihan Prodi Jalur Lintas Provinsi','2 Pilihan Prodi Jalur Lintas Provinsi','SIMAMA') NOT NULL,
  `nama_lengkap` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pilihan_prodi` varchar(250) NOT NULL,
  `pilihan_prodi2` varchar(200) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `nama_sekolah` varchar(150) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL,
  `daerah_asal` text NOT NULL,
  `berat_badan` varchar(15) NOT NULL,
  `tinggi_badan` varchar(15) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `pekerjaan_orang_tua` varchar(100) NOT NULL,
  `golongan_darah` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tanggal_daftar` varchar(50) NOT NULL,
  `tanggal_login` varchar(50) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_cetak` varchar(20) NOT NULL,
  `tempat_ujian` varchar(100) NOT NULL,
  `ruang_ujian` varchar(250) NOT NULL,
  `ikut_tes_tertulis` varchar(50) NOT NULL,
  `lulus_tes_tertulis` varchar(50) NOT NULL,
  `ikut_tes_kesehatan` varchar(50) NOT NULL,
  `status_kelulusan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir3`
--

CREATE TABLE `tb_formulir3` (
  `id_formulir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('PMDP','1 Pilihan Prodi Jalur Umum','2 Pilihan Prodi Jalur Umum','1 Pilihan Prodi Jalur Lintas Provinsi','2 Pilihan Prodi Jalur Lintas Provinsi') NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pilihan_prodi` varchar(250) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `jurusan_sekolah` varchar(100) NOT NULL,
  `akreditasi` varchar(5) NOT NULL,
  `nama_sekolah` varchar(150) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL,
  `daerah_asal` text NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `nama_orang_tua` varchar(150) NOT NULL,
  `pekerjaan_orang_tua` varchar(150) NOT NULL,
  `kartu_bpjs` varchar(100) DEFAULT NULL,
  `penghasilan_orang_tua` varchar(100) DEFAULT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_daftar` varchar(50) NOT NULL,
  `tanggal_login` varchar(50) NOT NULL,
  `rekomendasi_sekolah` varchar(100) NOT NULL,
  `sertifikat_akreditasi` varchar(100) NOT NULL,
  `keterangan_prestasi_akademik` text NOT NULL,
  `tingkat_prestasi_akademik` varchar(50) NOT NULL,
  `tahun_prestasi_akademik` varchar(15) NOT NULL,
  `nilai_akademik` varchar(50) NOT NULL,
  `keterangan_prestasi_nonakademik` text NOT NULL,
  `tingkat_prestasi_nonakademik` varchar(50) NOT NULL,
  `tahun_prestasi_nonakademik` varchar(15) NOT NULL,
  `nilai_nonakademik` varchar(50) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `status` enum('Belum Lengkap','Terdaftar','Sudah di Verifikasi','Sudah Membayar') NOT NULL DEFAULT 'Belum Lengkap',
  `photo5` varchar(200) DEFAULT NULL,
  `photo4` varchar(200) DEFAULT NULL,
  `photo3` varchar(200) DEFAULT NULL,
  `photo2` varchar(200) DEFAULT NULL,
  `photo1` varchar(200) DEFAULT NULL,
  `nominal` varchar(100) DEFAULT NULL,
  `waktu_pembayaran` date DEFAULT NULL,
  `id_transaksi_pembayaran` varchar(100) DEFAULT NULL,
  `ikut_tes_kesehatan` varchar(100) NOT NULL,
  `lulus_tes_kesehatan` varchar(100) NOT NULL,
  `status_pmdp` varchar(150) NOT NULL,
  `status_pmdp_2` varchar(200) NOT NULL,
  `cetak1` varchar(30) NOT NULL,
  `cetak2` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir4`
--

CREATE TABLE `tb_formulir4` (
  `id_formulir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pilihan_prodi` varchar(250) NOT NULL,
  `pilihan_prodi2` varchar(150) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `jurusan_sekolah` varchar(100) NOT NULL,
  `akreditasi` varchar(150) NOT NULL,
  `nama_sekolah` varchar(150) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL,
  `daerah_asal` text NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `nama_orang_tua` varchar(150) NOT NULL,
  `pekerjaan_orang_tua` varchar(150) NOT NULL,
  `kartu_bpjs` varchar(100) DEFAULT NULL,
  `penghasilan_orang_tua` varchar(100) DEFAULT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `nik` varchar(30) CHARACTER SET ujis COLLATE ujis_japanese_ci NOT NULL,
  `tanggal_daftar` varchar(50) NOT NULL,
  `tanggal_login` varchar(50) NOT NULL,
  `keterangan_prestasi_akademik` text NOT NULL,
  `tingkat_prestasi_akademik` varchar(50) NOT NULL,
  `tahun_prestasi_akademik` varchar(15) NOT NULL,
  `nilai_akademik` varchar(50) NOT NULL,
  `keterangan_prestasi_nonakademik` text NOT NULL,
  `tingkat_prestasi_nonakademik` varchar(50) NOT NULL,
  `tahun_prestasi_nonakademik` varchar(15) NOT NULL,
  `nilai_nonakademik` varchar(50) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `tanggal_ujian` date NOT NULL,
  `tempat_ujian` varchar(255) DEFAULT NULL,
  `ruang_ujian` varchar(255) DEFAULT NULL,
  `sesi_ujian` varchar(50) NOT NULL,
  `status` enum('Belum Lengkap','Terdaftar','Sudah di Verifikasi','Sudah Membayar') NOT NULL DEFAULT 'Belum Lengkap',
  `prodi_lulus` varchar(200) DEFAULT NULL,
  `status_lulus` varchar(100) NOT NULL DEFAULT 'Maaf Anda Belum Berhasil',
  `status_kelulusan_2` enum('Lulus','Tidak Lulus') NOT NULL DEFAULT 'Tidak Lulus',
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(200) DEFAULT NULL,
  `photo4` varchar(200) DEFAULT NULL,
  `photo5` varchar(200) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `photo7` varchar(255) DEFAULT NULL,
  `nominal` varchar(100) DEFAULT NULL,
  `waktu_pembayaran` date DEFAULT NULL,
  `id_transaksi_pembayaran` varchar(100) DEFAULT NULL,
  `ikut_tes_kesehatan` varchar(100) NOT NULL,
  `lulus_tes_kesehatan` varchar(100) NOT NULL,
  `status_pmdp` varchar(100) NOT NULL,
  `hari` int(11) NOT NULL,
  `sesi` int(11) NOT NULL,
  `pc` int(11) NOT NULL,
  `ruang` int(11) NOT NULL,
  `kartu` varchar(10) NOT NULL,
  `prodi_lulus_tahap2` varchar(100) NOT NULL,
  `status_lulus_tahap2` varchar(100) NOT NULL DEFAULT 'Tidak Lulus'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir5`
--

CREATE TABLE `tb_formulir5` (
  `id_formulir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pilihan_prodi` varchar(250) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `jurusan_sekolah` varchar(100) NOT NULL,
  `nama_sekolah` varchar(150) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL,
  `akreditasi` varchar(150) NOT NULL,
  `daerah_asal` text NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `tinggi_badan` varchar(50) NOT NULL,
  `nama_orang_tua` varchar(150) NOT NULL,
  `pekerjaan_orang_tua` varchar(150) NOT NULL,
  `kartu_bpjs` varchar(100) DEFAULT NULL,
  `penghasilan_orang_tua` varchar(100) DEFAULT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_daftar` varchar(50) NOT NULL,
  `tanggal_login` varchar(50) NOT NULL,
  `keterangan_prestasi_akademik` text NOT NULL,
  `tingkat_prestasi_akademik` varchar(50) NOT NULL,
  `tahun_prestasi_akademik` varchar(15) NOT NULL,
  `nilai_akademik` varchar(50) NOT NULL,
  `keterangan_prestasi_nonakademik` text NOT NULL,
  `tingkat_prestasi_nonakademik` varchar(50) NOT NULL,
  `tahun_prestasi_nonakademik` varchar(15) NOT NULL,
  `nilai_nonakademik` varchar(50) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `tanggal_ujian` date NOT NULL,
  `tempat_ujian` varchar(255) DEFAULT NULL,
  `ruang_ujian` varchar(255) DEFAULT NULL,
  `sesi_ujian` varchar(50) NOT NULL,
  `status` enum('Belum Lengkap','Terdaftar','Sudah di Verifikasi','Sudah Membayar') NOT NULL DEFAULT 'Belum Lengkap',
  `prodi_lulus` varchar(255) DEFAULT NULL,
  `status_lulus` varchar(100) NOT NULL DEFAULT 'Maaf Anda Belum Berhasil',
  `photo6` varchar(255) DEFAULT NULL,
  `photo5` varchar(200) DEFAULT NULL,
  `photo4` varchar(200) DEFAULT NULL,
  `photo3` varchar(200) DEFAULT NULL,
  `photo2` varchar(200) DEFAULT NULL,
  `photo1` varchar(200) DEFAULT NULL,
  `file_1` varchar(100) NOT NULL,
  `file_2` varchar(100) NOT NULL,
  `file_3` varchar(100) NOT NULL,
  `file_4` varchar(100) NOT NULL,
  `file_5` varchar(100) NOT NULL,
  `file_6` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `nominal` varchar(100) DEFAULT NULL,
  `waktu_pembayaran` date DEFAULT NULL,
  `id_transaksi_pembayaran` varchar(100) DEFAULT NULL,
  `ikut_tes_kesehatan` varchar(100) DEFAULT NULL,
  `lulus_tes_kesehatan` varchar(100) DEFAULT NULL,
  `status_pmdp` varchar(100) DEFAULT NULL,
  `hari` int(11) NOT NULL,
  `sesi` int(11) NOT NULL,
  `pc` int(11) NOT NULL,
  `ruang` int(11) NOT NULL,
  `kartu` varchar(10) NOT NULL,
  `status_lulus_2` varchar(100) NOT NULL DEFAULT 'Tidak Lulus'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir6`
--

CREATE TABLE `tb_formulir6` (
  `id_formulir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` text NOT NULL,
  `nama_lengkap` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pilihan_prodi1` varchar(250) NOT NULL,
  `pilihan_prodi2` varchar(100) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `nama_sekolah` varchar(150) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL,
  `daerah_asal` text NOT NULL,
  `berat_badan` varchar(15) NOT NULL,
  `tinggi_badan` varchar(15) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `pekerjaan_orang_tua` varchar(100) NOT NULL,
  `golongan_darah` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_cetak` varchar(20) NOT NULL,
  `tempat_ujian` varchar(100) NOT NULL,
  `ruang_ujian` varchar(250) NOT NULL,
  `tanggal_daftar` varchar(100) NOT NULL,
  `tanggal_login` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(100) NOT NULL,
  `photo5` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_formulir7`
--

CREATE TABLE `tb_formulir7` (
  `id_formulir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` text NOT NULL,
  `nama_lengkap` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pilihan_prodi1` varchar(250) NOT NULL,
  `pilihan_prodi2` varchar(200) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `nama_sekolah` varchar(150) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL,
  `daerah_asal` text NOT NULL,
  `berat_badan` varchar(15) NOT NULL,
  `tinggi_badan` varchar(15) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `pekerjaan_orang_tua` varchar(100) NOT NULL,
  `golongan_darah` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tanggal_daftar` varchar(50) NOT NULL,
  `tanggal_login` varchar(50) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `status` enum('Belum Lengkap','Terdaftar','Sudah Membayar') NOT NULL DEFAULT 'Belum Lengkap',
  `tanggal_cetak` varchar(20) NOT NULL,
  `tempat_ujian` varchar(100) NOT NULL,
  `ruang_ujian` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_ujian_tertulis`
--

CREATE TABLE `tb_hasil_ujian_tertulis` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `status_ujian` varchar(100) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_ujian_umum`
--

CREATE TABLE `tb_hasil_ujian_umum` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_ujian` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_ujian_umum_gelombang2`
--

CREATE TABLE `tb_hasil_ujian_umum_gelombang2` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_ujian` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_ujian_umum_gelombang2_tahap2`
--

CREATE TABLE `tb_hasil_ujian_umum_gelombang2_tahap2` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_ujian` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_ujian_umum_tahap2`
--

CREATE TABLE `tb_hasil_ujian_umum_tahap2` (
  `id_hasil` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_ujian` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikut_tes_tertulis`
--

CREATE TABLE `tb_ikut_tes_tertulis` (
  `id_ikut_ujian` int(11) NOT NULL,
  `keterangan_ujian` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikut_uji_kesehatan`
--

CREATE TABLE `tb_ikut_uji_kesehatan` (
  `id_ikut_uji_kesehatan` int(11) NOT NULL,
  `ikut_uji_kesehatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE `tb_jenis_kelamin` (
  `id_jenis_kelamin` int(11) NOT NULL,
  `nama_jenis_kelamin` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan_sekolah`
--

CREATE TABLE `tb_jurusan_sekolah` (
  `id_jurusan_sekolah` int(11) NOT NULL,
  `jurusan_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelulusan_tes_kesehatan`
--

CREATE TABLE `tb_kelulusan_tes_kesehatan` (
  `id_kelulusan_tes_kesehatan` int(11) NOT NULL,
  `lulus_tes_kesehatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan_sekolah`
--

CREATE TABLE `tb_keterangan_sekolah` (
  `id_keterangan_sekolah` int(11) NOT NULL,
  `keterangan_sekolah` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_konversi`
--

CREATE TABLE `tb_konversi` (
  `id_konversi` int(11) NOT NULL,
  `agama_kode` varchar(100) NOT NULL,
  `agama_nama` varchar(100) NOT NULL,
  `agama_sks` varchar(100) NOT NULL,
  `agama_nilai` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `peng_agama` varchar(20) DEFAULT NULL,
  `peng_kewarganegaraan` varchar(20) DEFAULT NULL,
  `peng_bahasa_indonesia` varchar(20) DEFAULT NULL,
  `peng_bahasa_inggris` varchar(20) DEFAULT NULL,
  `peng_matematika` varchar(20) DEFAULT NULL,
  `peng_fisika` varchar(20) DEFAULT NULL,
  `peng_biologi` varchar(20) DEFAULT NULL,
  `peng_kimia` varchar(20) DEFAULT NULL,
  `peng_sejarah` varchar(20) DEFAULT NULL,
  `peng_geografi` varchar(20) DEFAULT NULL,
  `peng_ekonomi` varchar(20) DEFAULT NULL,
  `peng_sosiologi` varchar(20) DEFAULT NULL,
  `peng_senibudaya` varchar(20) NOT NULL,
  `peng_pend_jasmani` varchar(20) NOT NULL,
  `peng_teknologi_informasi` varchar(20) NOT NULL,
  `peng_keterampilan` varchar(20) NOT NULL,
  `peng_mulok` varchar(20) NOT NULL,
  `prak_agama` varchar(20) NOT NULL,
  `prak_kewarganegaraan` varchar(20) NOT NULL,
  `prak_bahasa_indonesia` varchar(20) NOT NULL,
  `prak_bahasa_inggris` varchar(20) NOT NULL,
  `prak_matematika` varchar(20) NOT NULL,
  `prak_fisika` varchar(20) NOT NULL,
  `prak_biologi` varchar(20) NOT NULL,
  `prak_kimia` varchar(20) NOT NULL,
  `prak_sejarah` varchar(20) NOT NULL,
  `prak_geografi` varchar(20) NOT NULL,
  `prak_ekonomi` varchar(20) NOT NULL,
  `prak_sosiologi` varchar(20) NOT NULL,
  `prak_senibudaya` varchar(20) NOT NULL,
  `prak_pend_jasmani` varchar(20) NOT NULL,
  `prak_teknologi_informasi` varchar(20) NOT NULL,
  `prak_keterampilan` varchar(20) NOT NULL,
  `prak_mulok` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `status` enum('Belum di Verifikasi','Sudah di Verifikasi') NOT NULL DEFAULT 'Belum di Verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai1`
--

CREATE TABLE `tb_nilai1` (
  `id_nilai` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `peng_agama` varchar(20) DEFAULT NULL,
  `peng_kewarganegaraan` varchar(20) DEFAULT NULL,
  `peng_bahasa_indonesia` varchar(20) DEFAULT NULL,
  `peng_bahasa_inggris` varchar(20) DEFAULT NULL,
  `peng_matematika` varchar(20) DEFAULT NULL,
  `peng_fisika` varchar(20) DEFAULT NULL,
  `peng_biologi` varchar(20) DEFAULT NULL,
  `peng_kimia` varchar(20) DEFAULT NULL,
  `peng_sejarah` varchar(20) DEFAULT NULL,
  `peng_geografi` varchar(20) DEFAULT NULL,
  `peng_ekonomi` varchar(20) DEFAULT NULL,
  `peng_sosiologi` varchar(20) DEFAULT NULL,
  `peng_senibudaya` varchar(20) NOT NULL,
  `peng_pend_jasmani` varchar(20) NOT NULL,
  `peng_teknologi_informasi` varchar(20) NOT NULL,
  `peng_keterampilan` varchar(20) NOT NULL,
  `peng_mulok` varchar(20) NOT NULL,
  `prak_agama` varchar(20) NOT NULL,
  `prak_kewarganegaraan` varchar(20) NOT NULL,
  `prak_bahasa_indonesia` varchar(20) NOT NULL,
  `prak_bahasa_inggris` varchar(20) NOT NULL,
  `prak_matematika` varchar(20) NOT NULL,
  `prak_fisika` varchar(20) NOT NULL,
  `prak_biologi` varchar(20) NOT NULL,
  `prak_kimia` varchar(20) NOT NULL,
  `prak_sejarah` varchar(20) NOT NULL,
  `prak_geografi` varchar(20) NOT NULL,
  `prak_ekonomi` varchar(20) NOT NULL,
  `prak_sosiologi` varchar(20) NOT NULL,
  `prak_senibudaya` varchar(20) NOT NULL,
  `prak_pend_jasmani` varchar(20) NOT NULL,
  `prak_teknologi_informasi` varchar(20) NOT NULL,
  `prak_keterampilan` varchar(20) NOT NULL,
  `prak_mulok` varchar(20) NOT NULL,
  `nilai_rata_rata` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `status` enum('Belum di Verifikasi','Sudah di Verifikasi') NOT NULL DEFAULT 'Belum di Verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai2`
--

CREATE TABLE `tb_nilai2` (
  `id_nilai` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `peng_agama` varchar(20) DEFAULT NULL,
  `peng_kewarganegaraan` varchar(20) DEFAULT NULL,
  `peng_bahasa_indonesia` varchar(20) DEFAULT NULL,
  `peng_bahasa_inggris` varchar(20) DEFAULT NULL,
  `peng_matematika` varchar(20) DEFAULT NULL,
  `peng_fisika` varchar(20) DEFAULT NULL,
  `peng_biologi` varchar(20) DEFAULT NULL,
  `peng_kimia` varchar(20) DEFAULT NULL,
  `peng_sejarah` varchar(20) DEFAULT NULL,
  `peng_geografi` varchar(20) DEFAULT NULL,
  `peng_ekonomi` varchar(20) DEFAULT NULL,
  `peng_sosiologi` varchar(20) DEFAULT NULL,
  `peng_senibudaya` varchar(20) NOT NULL,
  `peng_pend_jasmani` varchar(20) NOT NULL,
  `peng_teknologi_informasi` varchar(20) NOT NULL,
  `peng_keterampilan` varchar(20) NOT NULL,
  `peng_mulok` varchar(20) NOT NULL,
  `prak_agama` varchar(20) NOT NULL,
  `prak_kewarganegaraan` varchar(20) NOT NULL,
  `prak_bahasa_indonesia` varchar(20) NOT NULL,
  `prak_bahasa_inggris` varchar(20) NOT NULL,
  `prak_matematika` varchar(20) NOT NULL,
  `prak_fisika` varchar(20) NOT NULL,
  `prak_biologi` varchar(20) NOT NULL,
  `prak_kimia` varchar(20) NOT NULL,
  `prak_sejarah` varchar(20) NOT NULL,
  `prak_geografi` varchar(20) NOT NULL,
  `prak_ekonomi` varchar(20) NOT NULL,
  `prak_sosiologi` varchar(20) NOT NULL,
  `prak_senibudaya` varchar(20) NOT NULL,
  `prak_pend_jasmani` varchar(20) NOT NULL,
  `prak_teknologi_informasi` varchar(20) NOT NULL,
  `prak_keterampilan` varchar(20) NOT NULL,
  `prak_mulok` varchar(20) NOT NULL,
  `nilai_rata_rata` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `status` enum('Belum di Verifikasi','Sudah di Verifikasi') NOT NULL DEFAULT 'Belum di Verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id_pejabat` int(10) NOT NULL,
  `nama_pejabat` varchar(50) NOT NULL,
  `nip_pejabat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan_orangtua`
--

CREATE TABLE `tb_pekerjaan_orangtua` (
  `id_pekerjaan_orangtua` int(11) NOT NULL,
  `nama_pekerjaan_orangtua` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penghasilan_orangtua`
--

CREATE TABLE `tb_penghasilan_orangtua` (
  `id_penghasilan_orangtua` int(11) NOT NULL,
  `jumlah_penghasilan_orangtua` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman_mandiri_tahap_1`
--

CREATE TABLE `tb_pengumuman_mandiri_tahap_1` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_ujian` varchar(100) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman_pmdp_tahap_1`
--

CREATE TABLE `tb_pengumuman_pmdp_tahap_1` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_ujian` varchar(100) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman_pmdp_tahap_2`
--

CREATE TABLE `tb_pengumuman_pmdp_tahap_2` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status_ujian` varchar(100) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `bukti_n` text NOT NULL,
  `tgl` date NOT NULL,
  `entri` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi1`
--

CREATE TABLE `tb_prodi1` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi_gelombang2`
--

CREATE TABLE `tb_prodi_gelombang2` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi_pmdp`
--

CREATE TABLE `tb_prodi_pmdp` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rpl`
--

CREATE TABLE `tb_rpl` (
  `idrpl` int(11) NOT NULL,
  `idasesmen` varchar(100) NOT NULL,
  `kode_asal` varchar(100) NOT NULL,
  `matkul_asal` varchar(100) NOT NULL,
  `sks_asal` varchar(100) NOT NULL,
  `nilai_asal` varchar(100) NOT NULL,
  `status_rpl` varchar(100) NOT NULL,
  `status_sks` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang_ujian`
--

CREATE TABLE `tb_ruang_ujian` (
  `id_ruang_ujian` int(11) NOT NULL,
  `nama_ruang_ujian` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sesi_ujian`
--

CREATE TABLE `tb_sesi_ujian` (
  `id_sesi_ujian` int(11) NOT NULL,
  `sesi_ujian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_pembayaran`
--

CREATE TABLE `tb_status_pembayaran` (
  `id_status_pembayaran` int(255) NOT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_pmdp`
--

CREATE TABLE `tb_status_pmdp` (
  `id_status_pmdp` int(11) NOT NULL,
  `status_pmdp` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggal_ujian`
--

CREATE TABLE `tb_tanggal_ujian` (
  `id_tanggal_ujian` int(11) NOT NULL,
  `tanggal_ujian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat_kuliah`
--

CREATE TABLE `tb_tempat_kuliah` (
  `id_tempat_kuliah` int(11) NOT NULL,
  `tempat_kuliah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat_ujian`
--

CREATE TABLE `tb_tempat_ujian` (
  `id_tempat_ujian` int(11) NOT NULL,
  `tempat_ujian` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  `level` enum('back_office','front_office','adminrpl','administrator') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`) USING BTREE;

--
-- Indexes for table `tb_asal_sekolah`
--
ALTER TABLE `tb_asal_sekolah`
  ADD PRIMARY KEY (`id_asal_sekolah`) USING BTREE;

--
-- Indexes for table `tb_asesmen`
--
ALTER TABLE `tb_asesmen`
  ADD PRIMARY KEY (`idasesmen`);

--
-- Indexes for table `tb_atas_nama`
--
ALTER TABLE `tb_atas_nama`
  ADD PRIMARY KEY (`id_atas_nama`) USING BTREE;

--
-- Indexes for table `tb_formulir1`
--
ALTER TABLE `tb_formulir1`
  ADD PRIMARY KEY (`id_formulir`) USING BTREE;

--
-- Indexes for table `tb_formulir2`
--
ALTER TABLE `tb_formulir2`
  ADD PRIMARY KEY (`id_formulir`) USING BTREE;

--
-- Indexes for table `tb_formulir3`
--
ALTER TABLE `tb_formulir3`
  ADD PRIMARY KEY (`id_formulir`) USING BTREE;

--
-- Indexes for table `tb_formulir4`
--
ALTER TABLE `tb_formulir4`
  ADD PRIMARY KEY (`id_formulir`) USING BTREE;

--
-- Indexes for table `tb_formulir5`
--
ALTER TABLE `tb_formulir5`
  ADD PRIMARY KEY (`id_formulir`) USING BTREE;

--
-- Indexes for table `tb_formulir6`
--
ALTER TABLE `tb_formulir6`
  ADD PRIMARY KEY (`id_formulir`) USING BTREE;

--
-- Indexes for table `tb_formulir7`
--
ALTER TABLE `tb_formulir7`
  ADD PRIMARY KEY (`id_formulir`) USING BTREE;

--
-- Indexes for table `tb_hasil_ujian_tertulis`
--
ALTER TABLE `tb_hasil_ujian_tertulis`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE;

--
-- Indexes for table `tb_hasil_ujian_umum`
--
ALTER TABLE `tb_hasil_ujian_umum`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE;

--
-- Indexes for table `tb_hasil_ujian_umum_gelombang2`
--
ALTER TABLE `tb_hasil_ujian_umum_gelombang2`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `tb_hasil_ujian_umum_gelombang2_tahap2`
--
ALTER TABLE `tb_hasil_ujian_umum_gelombang2_tahap2`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `tb_hasil_ujian_umum_tahap2`
--
ALTER TABLE `tb_hasil_ujian_umum_tahap2`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE;

--
-- Indexes for table `tb_ikut_tes_tertulis`
--
ALTER TABLE `tb_ikut_tes_tertulis`
  ADD PRIMARY KEY (`id_ikut_ujian`) USING BTREE;

--
-- Indexes for table `tb_ikut_uji_kesehatan`
--
ALTER TABLE `tb_ikut_uji_kesehatan`
  ADD PRIMARY KEY (`id_ikut_uji_kesehatan`) USING BTREE;

--
-- Indexes for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`) USING BTREE;

--
-- Indexes for table `tb_jurusan_sekolah`
--
ALTER TABLE `tb_jurusan_sekolah`
  ADD PRIMARY KEY (`id_jurusan_sekolah`) USING BTREE;

--
-- Indexes for table `tb_kelulusan_tes_kesehatan`
--
ALTER TABLE `tb_kelulusan_tes_kesehatan`
  ADD PRIMARY KEY (`id_kelulusan_tes_kesehatan`) USING BTREE;

--
-- Indexes for table `tb_keterangan_sekolah`
--
ALTER TABLE `tb_keterangan_sekolah`
  ADD PRIMARY KEY (`id_keterangan_sekolah`) USING BTREE;

--
-- Indexes for table `tb_konversi`
--
ALTER TABLE `tb_konversi`
  ADD PRIMARY KEY (`id_konversi`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`) USING BTREE;

--
-- Indexes for table `tb_nilai1`
--
ALTER TABLE `tb_nilai1`
  ADD PRIMARY KEY (`id_nilai`) USING BTREE;

--
-- Indexes for table `tb_nilai2`
--
ALTER TABLE `tb_nilai2`
  ADD PRIMARY KEY (`id_nilai`) USING BTREE;

--
-- Indexes for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id_pejabat`) USING BTREE;

--
-- Indexes for table `tb_pekerjaan_orangtua`
--
ALTER TABLE `tb_pekerjaan_orangtua`
  ADD PRIMARY KEY (`id_pekerjaan_orangtua`);

--
-- Indexes for table `tb_penghasilan_orangtua`
--
ALTER TABLE `tb_penghasilan_orangtua`
  ADD PRIMARY KEY (`id_penghasilan_orangtua`);

--
-- Indexes for table `tb_pengumuman_mandiri_tahap_1`
--
ALTER TABLE `tb_pengumuman_mandiri_tahap_1`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE;

--
-- Indexes for table `tb_pengumuman_pmdp_tahap_1`
--
ALTER TABLE `tb_pengumuman_pmdp_tahap_1`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE;

--
-- Indexes for table `tb_pengumuman_pmdp_tahap_2`
--
ALTER TABLE `tb_pengumuman_pmdp_tahap_2`
  ADD PRIMARY KEY (`id_hasil`) USING BTREE;

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE;

--
-- Indexes for table `tb_prodi1`
--
ALTER TABLE `tb_prodi1`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE;

--
-- Indexes for table `tb_prodi_gelombang2`
--
ALTER TABLE `tb_prodi_gelombang2`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE;

--
-- Indexes for table `tb_prodi_pmdp`
--
ALTER TABLE `tb_prodi_pmdp`
  ADD PRIMARY KEY (`id_prodi`) USING BTREE;

--
-- Indexes for table `tb_rpl`
--
ALTER TABLE `tb_rpl`
  ADD PRIMARY KEY (`idrpl`);

--
-- Indexes for table `tb_ruang_ujian`
--
ALTER TABLE `tb_ruang_ujian`
  ADD PRIMARY KEY (`id_ruang_ujian`) USING BTREE;

--
-- Indexes for table `tb_sesi_ujian`
--
ALTER TABLE `tb_sesi_ujian`
  ADD PRIMARY KEY (`id_sesi_ujian`);

--
-- Indexes for table `tb_status_pembayaran`
--
ALTER TABLE `tb_status_pembayaran`
  ADD PRIMARY KEY (`id_status_pembayaran`) USING BTREE;

--
-- Indexes for table `tb_status_pmdp`
--
ALTER TABLE `tb_status_pmdp`
  ADD PRIMARY KEY (`id_status_pmdp`) USING BTREE;

--
-- Indexes for table `tb_tanggal_ujian`
--
ALTER TABLE `tb_tanggal_ujian`
  ADD PRIMARY KEY (`id_tanggal_ujian`);

--
-- Indexes for table `tb_tempat_kuliah`
--
ALTER TABLE `tb_tempat_kuliah`
  ADD PRIMARY KEY (`id_tempat_kuliah`) USING BTREE;

--
-- Indexes for table `tb_tempat_ujian`
--
ALTER TABLE `tb_tempat_ujian`
  ADD PRIMARY KEY (`id_tempat_ujian`) USING BTREE;

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_asal_sekolah`
--
ALTER TABLE `tb_asal_sekolah`
  MODIFY `id_asal_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_asesmen`
--
ALTER TABLE `tb_asesmen`
  MODIFY `idasesmen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_atas_nama`
--
ALTER TABLE `tb_atas_nama`
  MODIFY `id_atas_nama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_formulir1`
--
ALTER TABLE `tb_formulir1`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_formulir2`
--
ALTER TABLE `tb_formulir2`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_formulir3`
--
ALTER TABLE `tb_formulir3`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_formulir4`
--
ALTER TABLE `tb_formulir4`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_formulir5`
--
ALTER TABLE `tb_formulir5`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_formulir6`
--
ALTER TABLE `tb_formulir6`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_formulir7`
--
ALTER TABLE `tb_formulir7`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil_ujian_tertulis`
--
ALTER TABLE `tb_hasil_ujian_tertulis`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil_ujian_umum`
--
ALTER TABLE `tb_hasil_ujian_umum`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil_ujian_umum_gelombang2`
--
ALTER TABLE `tb_hasil_ujian_umum_gelombang2`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil_ujian_umum_gelombang2_tahap2`
--
ALTER TABLE `tb_hasil_ujian_umum_gelombang2_tahap2`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hasil_ujian_umum_tahap2`
--
ALTER TABLE `tb_hasil_ujian_umum_tahap2`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ikut_tes_tertulis`
--
ALTER TABLE `tb_ikut_tes_tertulis`
  MODIFY `id_ikut_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ikut_uji_kesehatan`
--
ALTER TABLE `tb_ikut_uji_kesehatan`
  MODIFY `id_ikut_uji_kesehatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jenis_kelamin`
--
ALTER TABLE `tb_jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jurusan_sekolah`
--
ALTER TABLE `tb_jurusan_sekolah`
  MODIFY `id_jurusan_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kelulusan_tes_kesehatan`
--
ALTER TABLE `tb_kelulusan_tes_kesehatan`
  MODIFY `id_kelulusan_tes_kesehatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_keterangan_sekolah`
--
ALTER TABLE `tb_keterangan_sekolah`
  MODIFY `id_keterangan_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_konversi`
--
ALTER TABLE `tb_konversi`
  MODIFY `id_konversi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilai1`
--
ALTER TABLE `tb_nilai1`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilai2`
--
ALTER TABLE `tb_nilai2`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  MODIFY `id_pejabat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pekerjaan_orangtua`
--
ALTER TABLE `tb_pekerjaan_orangtua`
  MODIFY `id_pekerjaan_orangtua` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penghasilan_orangtua`
--
ALTER TABLE `tb_penghasilan_orangtua`
  MODIFY `id_penghasilan_orangtua` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengumuman_mandiri_tahap_1`
--
ALTER TABLE `tb_pengumuman_mandiri_tahap_1`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengumuman_pmdp_tahap_1`
--
ALTER TABLE `tb_pengumuman_pmdp_tahap_1`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengumuman_pmdp_tahap_2`
--
ALTER TABLE `tb_pengumuman_pmdp_tahap_2`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prodi1`
--
ALTER TABLE `tb_prodi1`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prodi_gelombang2`
--
ALTER TABLE `tb_prodi_gelombang2`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_prodi_pmdp`
--
ALTER TABLE `tb_prodi_pmdp`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_rpl`
--
ALTER TABLE `tb_rpl`
  MODIFY `idrpl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ruang_ujian`
--
ALTER TABLE `tb_ruang_ujian`
  MODIFY `id_ruang_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sesi_ujian`
--
ALTER TABLE `tb_sesi_ujian`
  MODIFY `id_sesi_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_status_pembayaran`
--
ALTER TABLE `tb_status_pembayaran`
  MODIFY `id_status_pembayaran` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_status_pmdp`
--
ALTER TABLE `tb_status_pmdp`
  MODIFY `id_status_pmdp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tanggal_ujian`
--
ALTER TABLE `tb_tanggal_ujian`
  MODIFY `id_tanggal_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tempat_kuliah`
--
ALTER TABLE `tb_tempat_kuliah`
  MODIFY `id_tempat_kuliah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tempat_ujian`
--
ALTER TABLE `tb_tempat_ujian`
  MODIFY `id_tempat_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
