-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 12 Jul 2022 pada 08.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birobinamental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pelaksanaan` datetime NOT NULL,
  `tempat_pelaksanaan` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `id_galeri_konten` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_user`, `tanggal_pelaksanaan`, `tempat_pelaksanaan`, `judul`, `isi`, `id_galeri_konten`, `hits`, `status`) VALUES
(1, 2, '2019-01-10 08:54:00', 'Payakumbuh', 'TPQ Mesjid Arsyad Tigo Koto Dibarua Payakumbuh Gelar Khatam Al Qur\'an 110 Santri', 'Sumber : http://www.nusantaranews.net/2019/01/tpq-mesjid-arsyad-tigo-koto-dibarua.html#more\r\n\r\nWalikota Payakumbuh Riza Falepi hadiri perayaan khatam Al Quran di TPQ Mesjid Arsyad Ke 24 yang diikuti 110 santri mesjid yang terletak di jalan negara Nan Kodok Kelurahan Tigo Koto Dibarua. Walikota tampak hadir bersama Kepala Dinas Pendidikan AH Agustion dan didampingi lurah Syafwani, pengurus KAN Koto Nan Gadang dan disambut pengurus mesjid Mirwan beraama tokoh masyarakat setempat.\r\n\r\n\r\nDalam laporan, penitia khatam Mirwan menyebutkan bahwa alek nagari terlaksana berkat kebersamaan warga dari semua unsur. Tak lupa dirinya sampaikan ungkapan terima kasih kepada semua lapisan yang tidak mungkin disebutkan.\r\n\r\n“Perayaan khatam sangat meriah, dan sudah tradisi kita di Kenagarian Koto Nan Gadang. Adat bajulo julo yang masih kita pertahankan hingga kini. Acara ini kita meriahkan dengan gambus Al Qamar. Terima kasih juga kepada para guru dan walisantri,”lapor Mirwan.\r\n\r\nWalikota Payakumbuh Riza Falepi dalam sambutannya menyampaikan selamat warga, khususnya santri khatam.\r\n\r\n“Pemko Payakumbuh sangat mendukung dan intens teehadap penghafal al quran. Reward umrah kita sediakan. Selain itu, masuk perguruan tinggi, para hafidz dan hafidzah juga diprioritaskan. Al quran saja bisa hafal apalagi pelajaran di sekolah. Untuk itu teruslah melanjutkan pembelajaran al quran. Tahsin, tajwid, irama, tartil, tilawah dan lainnya. Dorongan walisantri juga sangat menentukan. Mari kita optimalkan pondok al quran yang ada di kecamatan,”pesan Walikota.\r\n\r\n“Selamat kepada anak-anak kita, semoga menjadi generasi Qur’ani yang akan menambah bobot kebaikan di muka bumi ini. Agar para orangtua juga terus berinteraksi dengan Al Qur’an. Jangan anak-anak kita saja,”pungkas Riza Falepi sembari serahkan hadiah.\r\n\r\nMasih di lokasi mesjid, Kepala Dinas Pendidikan AH Agustion menerangkan bahwa perayaan khatam al quran di Payakumbuh sangat spesifik.\r\n\r\n“Selain mengandung nilai religous, khatam al quran di payakumbuh juga kaya dengan nilai budaya adat istiadat dan sosiografis. Kebijakan Pemko Payakumbuh adalah perayaan khatam al quran diselenggarakan di jam sekolah. Para siswa diberikan izin seluas-luasnya dalam perayaan khatam,”pungkas AH Agustion. (Rahmat Sitepu)', 39, 0, 'Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_berita`
--

CREATE TABLE `artikel_berita` (
  `id_artikel_berita` int(11) NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `id_galeri_konten` int(11) NOT NULL,
  `id_artikel_kategori` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel_berita`
--

INSERT INTO `artikel_berita` (`id_artikel_berita`, `tanggal_publish`, `id_user`, `judul`, `isi`, `id_galeri_konten`, `id_artikel_kategori`, `hits`, `status`) VALUES
(2, '2021-04-12 08:36:53', 1, 'Biro Bina Mental dan Kesra Sumbar Kumpulkan AMM Gelar Rapat Koordinasi', 'sumber : https://minangkabaunews.com/artikel-18759-biro-bina-mental-dan-kesra-sumbar-kumpulkan-amm-gelar-rapat-koordinasi.html\r\n\r\nPADANG -- Biro Bina Mental dan Kesra menggelar rapat koordinasi lembaga/Organisasi kepemudaan se-Sumbar di Hotel Axana, Jalan Bundo Kanduang No. 14-16 Padang, Jumat-Sabtu (16-17/11/2018). Kali ini diikuti 52 Utusan PDPM se-Sumbar dan satu utusan PWPM Sumbar.\r\n\r\nRakor ini juga merupakan implementasi UU 40 Tahun 2009 tentang Kepemudaan yang meminta Kemenpora mempelopori koordinasi strategis pelayanan kepemudaan di seluruh lembaga.\r\n\r\nDalam sambutannya, Jumadi selaku mewakili Kepala Biro Bina Mental dan Sosial Pemprov Sumbar berharap dalam rakor akan masukan dan terobosan kebijakan-kebijakan yang akan diambil biro mental dan sosial. \"Kita di binsos amat terbuka menerima masukan dari siapapun, justru masukan-masukan itu amat penting sebagai referensi untukmembuat kebijakan. Dengan adanya masukan, maka kebijakan yang diambil akan lebih mengena ke sasaran,\" kata Jumadi\r\n\r\nSelain itu, Rakor ini juga betujuan agar m membentengi diri pemuda dari perbuatan negatif dan berkomitmen menjaga NKRI serta paling penting mempersiapkan mental para pemuda dalam menghadapi bonus demografi.\r\n\r\nJumadi juga mengatakan Agent of change sebagai salah satu fungsi pemuda untuk senantiasa menyuarakan pendapat, mencurahkan pemikiran dan gagasan-gagasan brilian yang mampu mendongkrak konsep pemikiran yang tidak lagi relevan dengan kondisi saat ini. Pemuda hendaknya mengasah konsep pemikiran yang tajam, cerdas, cekatan namun tetap mengutamakan integritas sebagai wujud perwajahan pemuda berkarakter.\r\n\r\nLanjutnya, Pemuda sudah seharusnya memulai peranannya tidak hanya sebagai agent of change, tetapi direct of change. Tidak lagi sekedar perubahan yang reaksioner tetapi dengan design restra yang jauh kedepan serta terukur dengan baik. Sehingga cerita sejarah pemuda yang akan tercipta adalah sejarah kontribusi dan kepercayaan, sampai ruang teritorial dan waktulah yang akan menyatakan kelayakannya pemuda untuk kembali mengambil peran kepemimpinan Indonesia di masa depan.\r\n\r\nKakanwil Kemenag Sumbar, H. Yufri menyampaikan Organisasi sangat menyenangkan, untuk menghadapi dunia kerja justru yang biasa berorganisasi jauh lebih siap dibandingkan dengan yang biasa saja (RI)', 34, 1, 0, 'Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_kategori`
--

CREATE TABLE `artikel_kategori` (
  `id_artikel_kategori` int(11) NOT NULL,
  `nama_artikel_kategori` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel_kategori`
--

INSERT INTO `artikel_kategori` (`id_artikel_kategori`, `nama_artikel_kategori`, `status`) VALUES
(1, 'Berita Utama', 'Aktif'),
(2, 'Berita', 'Aktif'),
(3, 'Kebijakan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_upload`
--

CREATE TABLE `artikel_upload` (
  `id_artikel_upload` int(11) NOT NULL,
  `tahun_berkas` int(11) NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `hits` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel_upload`
--

INSERT INTO `artikel_upload` (`id_artikel_upload`, `tahun_berkas`, `tanggal_publish`, `id_user`, `nama_file`, `judul`, `hits`, `status`) VALUES
(1, 2016, '2021-04-12 08:39:29', 1, '6073a5361d74e.pdf', 'Rencana Strategis (Rensta) Biro Bina Mental', 0, 'Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_kategori`
--

CREATE TABLE `berita_kategori` (
  `id_artikel_kategori` int(255) NOT NULL,
  `id_artikel_berita` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_kategori`
--

INSERT INTO `berita_kategori` (`id_artikel_kategori`, `id_artikel_berita`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `extrapage_news`
--

CREATE TABLE `extrapage_news` (
  `id_extrapage` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `id_user` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `extrapage_news`
--

INSERT INTO `extrapage_news` (`id_extrapage`, `judul`, `isi`, `id_user`, `status`) VALUES
(1, 'hello world', 'saya', 1, 'Publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_kategori`
--

CREATE TABLE `galeri_kategori` (
  `id_galeri_kategori` int(11) NOT NULL,
  `nama_galeri_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_kategori`
--

INSERT INTO `galeri_kategori` (`id_galeri_kategori`, `nama_galeri_kategori`) VALUES
(1, 'carousel'),
(2, 'foto'),
(3, 'video'),
(4, 'berita'),
(5, 'agenda'),
(6, 'extrapage');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_konten`
--

CREATE TABLE `galeri_konten` (
  `id_galeri_konten` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_galeri_kategori` int(11) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri_konten`
--

INSERT INTO `galeri_konten` (`id_galeri_konten`, `id_user`, `text`, `nama_file`, `status`, `id_galeri_kategori`, `hits`) VALUES
(1, 2, '', 'dont-delete-this-folder/default.png', 'Publish', 6, 0),
(33, 1, '', '6073a3461e92a.jpg', 'Publish', 4, 0),
(34, 1, '', '6073a45e09793.jpg', 'Publish', 4, 0),
(35, 2, 'Pendidikan Karakter Bagi Masyarakat Sumatera Barat', '6073a5802fa04.png', 'Publish', 1, 0),
(36, 2, 'Jiwa Sehat Fisik Kuat', '6073a77280692.jpg', 'Publish', 2, 0),
(37, 2, 'Pelatikan Gubernur Sumbar', '6073a7af9b5c3.jpg', 'Publish', 2, 0),
(38, 2, 'Sulaman Emas', 'xV1HeAbOUGw', 'Publish', 3, 0),
(39, 2, '', '6073a92bed8f6.jpg', 'Publish', 5, 0),
(40, 2, 'Profil - Komunitas Sipak Rago TARATAK.RC', 'itKU8ZH5c9w', 'Publish', 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `id_role`, `id_instansi`, `email`, `no_telp`, `status`) VALUES
(1, 'khalil2021', '$2y$10$ZQs4YaKHDHm3zKhmT9YIb.1qop9VE0tQX69KYBgNgRONALE9pcYpm', 'khalil attalla', 2, 1, 'khalilattalla9022@yahoo.com', '081235672312', 'Aktif'),
(2, 'zahraa', '$2y$10$7s/dFujR3igqa9z83YTYhOiCl8yPyE3MJtvrL.xvTzKJ.//DLJKNK', 'Iffatuz Zahra', 2, 1, 'zahra@gmail.com', '085364650000', 'Aktif'),
(3, 'khalil1999', '$2y$10$v3l60yODIPIEDa6CmmEN/.ZLi3jJqgJqJ5yXtKrT.rr8UsldNR3Za', 'khalil attalla', 1, 1, 'khalilattalla9021212@yahoo.com', '123436324', 'Aktif'),
(4, 'khalileditor', '$2y$10$shvzZbQ8gESYaWSR52fCt.otbQedSR3UqFjgeYgLxuNF3hecIS1/a', 'khalil 1235467', 4, 1, 'khalilattalla2315@yahoo.com', '01829586', 'Aktif'),
(5, 'khaliloperator', '$2y$10$4f.x05ah.EHOIh1hxHCrp.uFssFqaD6urllUpV50GxrN46.8dp4XW', 'khalilasd', 5, 1, 'khalil125@yahoo.com', '1245671928367', 'Aktif'),
(6, 'khaliladminlokal', '$2y$10$9supojtWRP2TbQeaPnLXx.N6c9NivV/pQKgJZY3YfbO6UXEleijEq', 'ihsan', 2, 1, 'ihsan123@yahoo.com', '125718023', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_instansi`
--

CREATE TABLE `user_instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_instansi`
--

INSERT INTO `user_instansi` (`id_instansi`, `nama_instansi`, `parent_id`, `status`) VALUES
(1, 'Dinas Kominfo', 0, 'Aktif'),
(2, 'Kepala Biro Bina Mental dan Kesra', 0, 'Aktif'),
(3, 'Bagian Bina Mental', 0, 'Non-Aktif'),
(4, 'Bagian Pengembangan Generasi Muda dan Tata Usaha', 0, 'Non-Aktif'),
(5, 'Bagian Kesejahteraan Rakyat', 0, 'Non-Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `nama_role`) VALUES
(1, 'Administrator'),
(2, 'Admin Lokal'),
(4, 'Editor'),
(5, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_menu`
--

CREATE TABLE `web_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `order_no` int(11) NOT NULL,
  `level` int(64) NOT NULL,
  `child` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_menu`
--

INSERT INTO `web_menu` (`id_menu`, `nama_menu`, `icon`, `link`, `parent_id`, `status`, `order_no`, `level`, `child`) VALUES
(1, 'Dashboard', 'fas fa-home', '#', 0, 'Aktif', 1, 0, 0),
(2, 'Profile', 'fas fa-landmark', '#', 0, 'Aktif', 2, 0, 1),
(3, 'Berita', 'fa-newspaper', 'index_berita', 0, 'Aktif', 3, 0, 0),
(5, 'Visi dan Misi', '', 'extrapage_news/1', 2, 'Aktif', 4, 1, 0),
(6, 'Struktur Organisasi', '', '#', 2, 'Non-Aktif', 2, 1, 0),
(9, 'Agenda', '', 'index_agenda', 0, 'Aktif', 6, 0, 0),
(11, 'Galery', 'fa-images', '#', 0, 'Aktif', 4, 0, 1),
(12, 'Foto', '', 'index_foto', 11, 'Aktif', 1, 1, 0),
(15, 'Video', '', 'index_video', 11, 'Aktif', 2, 1, 0),
(16, 'Download', 'fa-file-download', 'index_upload', 11, 'Aktif', 3, 1, 0),
(17, 'asdasd', '', '#', 16, 'Non-Aktif', 11, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `agenda_ibfk_1` (`id_user`),
  ADD KEY `agenda_ibfk_2` (`id_galeri_konten`);

--
-- Indeks untuk tabel `artikel_berita`
--
ALTER TABLE `artikel_berita`
  ADD PRIMARY KEY (`id_artikel_berita`),
  ADD KEY `artikel_berita_ibfk_1` (`id_galeri_konten`),
  ADD KEY `artikel_berita_ibfk_2` (`id_user`),
  ADD KEY `id_artikel_kategori` (`id_artikel_kategori`);

--
-- Indeks untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  ADD PRIMARY KEY (`id_artikel_kategori`);

--
-- Indeks untuk tabel `artikel_upload`
--
ALTER TABLE `artikel_upload`
  ADD PRIMARY KEY (`id_artikel_upload`),
  ADD KEY `artikel_upload_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD KEY `fk_artikel_kategori` (`id_artikel_kategori`),
  ADD KEY `fk_artikel_berita` (`id_artikel_berita`);

--
-- Indeks untuk tabel `extrapage_news`
--
ALTER TABLE `extrapage_news`
  ADD PRIMARY KEY (`id_extrapage`),
  ADD KEY `extrapage_news_ibfk_2` (`id_user`);

--
-- Indeks untuk tabel `galeri_kategori`
--
ALTER TABLE `galeri_kategori`
  ADD PRIMARY KEY (`id_galeri_kategori`);

--
-- Indeks untuk tabel `galeri_konten`
--
ALTER TABLE `galeri_konten`
  ADD PRIMARY KEY (`id_galeri_konten`),
  ADD KEY `galeri_konten_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_ibfk_1` (`id_role`),
  ADD KEY `user_ibfk_2` (`id_instansi`);

--
-- Indeks untuk tabel `user_instansi`
--
ALTER TABLE `user_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `web_menu`
--
ALTER TABLE `web_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel_berita`
--
ALTER TABLE `artikel_berita`
  MODIFY `id_artikel_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel_kategori`
--
ALTER TABLE `artikel_kategori`
  MODIFY `id_artikel_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikel_upload`
--
ALTER TABLE `artikel_upload`
  MODIFY `id_artikel_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `extrapage_news`
--
ALTER TABLE `extrapage_news`
  MODIFY `id_extrapage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri_konten`
--
ALTER TABLE `galeri_konten`
  MODIFY `id_galeri_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_instansi`
--
ALTER TABLE `user_instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `web_menu`
--
ALTER TABLE `web_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`id_galeri_konten`) REFERENCES `galeri_konten` (`id_galeri_konten`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `artikel_berita`
--
ALTER TABLE `artikel_berita`
  ADD CONSTRAINT `artikel_berita_ibfk_1` FOREIGN KEY (`id_galeri_konten`) REFERENCES `galeri_konten` (`id_galeri_konten`) ON DELETE CASCADE,
  ADD CONSTRAINT `artikel_berita_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `artikel_berita_ibfk_3` FOREIGN KEY (`id_artikel_kategori`) REFERENCES `artikel_kategori` (`id_artikel_kategori`);

--
-- Ketidakleluasaan untuk tabel `artikel_upload`
--
ALTER TABLE `artikel_upload`
  ADD CONSTRAINT `artikel_upload_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD CONSTRAINT `fk_artikel_berita` FOREIGN KEY (`id_artikel_berita`) REFERENCES `artikel_berita` (`id_artikel_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_artikel_kategori` FOREIGN KEY (`id_artikel_kategori`) REFERENCES `artikel_kategori` (`id_artikel_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `extrapage_news`
--
ALTER TABLE `extrapage_news`
  ADD CONSTRAINT `extrapage_news_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeri_konten`
--
ALTER TABLE `galeri_konten`
  ADD CONSTRAINT `galeri_konten_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `user_role` (`id_role`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_instansi`) REFERENCES `user_instansi` (`id_instansi`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
