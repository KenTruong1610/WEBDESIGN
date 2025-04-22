-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2025 lúc 06:07 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_bantin`
--
CREATE DATABASE IF NOT EXISTS `db_bantin` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_bantin`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bantin`
--
-- Tạo: Th4 16, 2025 lúc 03:20 PM
-- Cập nhật lần cuối: Th4 16, 2025 lúc 03:57 PM
--

DROP TABLE IF EXISTS `tbl_bantin`;
CREATE TABLE `tbl_bantin` (
  `id_bantin` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tieude` varchar(150) NOT NULL,
  `hinhanh` varchar(150) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `tukhoa` varchar(150) NOT NULL,
  `nguontin` varchar(150) NOT NULL,
  `solike` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `tbl_bantin`:
--   `id_danhmuc`
--       `tbl_danhmuc` -> `id_danhmuc`
--

--
-- Cắt ngắn bảng trước khi chèn `tbl_bantin`
--

TRUNCATE TABLE `tbl_bantin`;
--
-- Đang đổ dữ liệu cho bảng `tbl_bantin`
--

INSERT INTO `tbl_bantin` (`id_bantin`, `id_danhmuc`, `tieude`, `hinhanh`, `noidung`, `tukhoa`, `nguontin`, `solike`, `rating`) VALUES
(1, 1, 'AI trong thời đại số', 'ai.jpg', 'AI đang thay đổi thế giới...', 'AI, công nghệ', 'TechVN', 15, 5),
(2, 2, 'Cách mạng giáo dục 4.0', 'edu.jpg', 'Công nghệ trong giảng dạy...', 'giáo dục, e-learning', 'Báo Giáo Dục', 10, 4),
(3, 3, 'Phong cách sống xanh', 'life.jpg', 'Lối sống thân thiện môi trường...', 'đời sống, xanh', 'LifeNews', 12, 4),
(4, 4, 'Olympic Paris 2024', 'olympic.jpg', 'Thể thao toàn cầu...', 'Olympic, thể thao', 'Báo Thể thao', 20, 5),
(5, 5, 'Sống khỏe mỗi ngày', 'health.jpg', 'Chăm sóc sức khỏe chủ động...', 'sức khỏe, phòng bệnh', 'Health+VN', 18, 4),
(6, 1, 'Cuộc cách mạng công nghệ 4.0', 'congnghe.jpg', 'Công nghệ 4.0 thay đổi', 'Công nghệ 4.0', 'LifeNews', 12, 4),
(7, 1, 'Công nghệ số hóa', 'sohoa.jpg', 'Số hóa toàn cầu...', 'Số hóa', 'Báo Thể thao', 20, 5),
(8, 5, 'Sống xanh mỗi ngày', 'môi trường.jpg', 'Môi trường ô nhiễm, các tác nhân gây hại', 'môi trường, sức khỏe', 'Health+VN', 18, 4),
(9, 2, 'Olympic Tin học', 'Tin học.jpg', 'Sinh viên đạt giải...', 'Olympic, Tin học', 'Báo Thanh Niên', 20, 5),
(10, 1, 'Xu hướng AI năm 2025', 'ai2025.jpg', 'AI tiếp tục làm chủ xu hướng công nghệ.', 'AI, xu hướng', 'TechVN', 22, 5),
(11, 2, 'Ứng dụng công nghệ trong lớp học', 'classtech.jpg', 'Công nghệ giúp giảng dạy hiệu quả hơn.', 'giáo dục, công nghệ', 'Báo Giáo Dục', 11, 4),
(12, 3, 'Tái chế trong đời sống hàng ngày', 'recycle.jpg', 'Mỗi người một hành động xanh.', 'xanh, tái chế', 'LifeNews', 13, 4),
(13, 4, 'SEA Games 32: Việt Nam bứt phá', 'seagames.jpg', 'Đoàn thể thao Việt Nam đạt nhiều thành tích.', 'thể thao, SEA Games', 'Báo Thể thao', 25, 5),
(14, 5, 'Chế độ dinh dưỡng hợp lý', 'nutrition.jpg', 'Ăn uống khoa học giúp tăng cường sức khỏe.', 'dinh dưỡng, sức khỏe', 'Health+VN', 17, 4),
(15, 1, 'AI và đạo đức công nghệ', 'aiethics.jpg', 'Thách thức về đạo đức trong sử dụng AI.', 'AI, đạo đức', 'TechVN', 19, 5),
(16, 2, 'Trường học thông minh', 'smartschool.jpg', 'Ứng dụng IoT và Big Data trong giảng dạy.', 'giáo dục, smart school', 'Báo Giáo Dục', 14, 4),
(17, 3, 'Bảo vệ môi trường biển', 'ocean.jpg', 'Giảm rác thải nhựa để cứu đại dương.', 'môi trường, biển', 'LifeNews', 16, 4),
(18, 4, 'Lịch thi đấu World Cup', 'worldcup.jpg', 'Thông tin mới nhất về giải đấu lớn.', 'bóng đá, World Cup', 'Báo Thể thao', 30, 5),
(19, 5, 'Tập thể dục tại nhà', 'homeworkout.jpg', 'Không cần đến phòng gym vẫn khỏe mạnh.', 'thể dục, sức khỏe', 'Health+VN', 21, 5),
(20, 1, 'Tương lai của trí tuệ nhân tạo', 'futureai.jpg', 'Tác động dài hạn của AI đến xã hội.', 'AI, tương lai', 'TechVN', 23, 5),
(21, 2, 'Kỹ năng học tập thế kỷ 21', 'skills21.jpg', 'Các kỹ năng mềm cần thiết cho học sinh.', 'giáo dục, kỹ năng', 'Báo Giáo Dục', 9, 4),
(22, 3, 'Cuộc sống chậm – slow living', 'slowliving.jpg', 'Giảm căng thẳng với lối sống chậm.', 'đời sống, thư giãn', 'LifeNews', 12, 4),
(23, 4, 'Chiến thắng lịch sử của tuyển nữ', 'win.jpg', 'Tuyển nữ Việt Nam tạo nên kỳ tích.', 'bóng đá nữ, thể thao', 'Báo Thể thao', 27, 5),
(24, 5, 'Dấu hiệu cảnh báo bệnh tim', 'heart.jpg', 'Những dấu hiệu thường gặp cần chú ý.', 'sức khỏe, bệnh tim', 'Health+VN', 20, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--
-- Tạo: Th4 16, 2025 lúc 03:23 PM
-- Cập nhật lần cuối: Th4 16, 2025 lúc 04:03 PM
--

DROP TABLE IF EXISTS `tbl_binhluan`;
CREATE TABLE `tbl_binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `tieude` varchar(150) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `solike` int(11) NOT NULL,
  `thoigian` datetime NOT NULL,
  `id_bantin` int(11) NOT NULL,
  `id_docgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `tbl_binhluan`:
--   `id_bantin`
--       `tbl_bantin` -> `id_bantin`
--   `id_docgia`
--       `tbl_docgia` -> `id_docgia`
--

--
-- Cắt ngắn bảng trước khi chèn `tbl_binhluan`
--

TRUNCATE TABLE `tbl_binhluan`;
--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`id_binhluan`, `tieude`, `noidung`, `solike`, `thoigian`, `id_bantin`, `id_docgia`) VALUES
(1, 'Bài viết hay quá!', 'Thông tin trong bài rất bổ ích và dễ hiểu.', 5, '2023-06-01 08:30:00', 1, 1),
(2, 'Cảm ơn tác giả', 'Mình đã học được rất nhiều điều từ bài viết này.', 7, '2023-06-02 10:15:00', 2, 2),
(3, 'Chưa rõ lắm', 'Có vài chỗ mình không hiểu lắm, cần thêm ví dụ.', 3, '2023-06-02 14:20:00', 3, 3),
(4, 'Bài viết rất chất lượng', 'Rất đáng đọc và chia sẻ cho bạn bè.', 10, '2023-06-03 09:45:00', 4, 4),
(5, 'Thiếu hình ảnh minh họa', 'Nội dung tốt nhưng nếu có thêm hình ảnh thì hay hơn.', 2, '2023-06-03 16:05:00', 5, 5),
(6, 'Quá tuyệt vời!', 'Chủ đề này rất hot, mong có thêm bài tương tự.', 8, '2023-06-04 11:30:00', 1, 1),
(7, 'Bài viết cần sửa lỗi chính tả', 'Có vài lỗi nhỏ nhưng nhìn chung rất tốt.', 4, '2023-06-04 13:10:00', 2, 2),
(8, 'Bài viết sơ sài quá', 'Mình mong đợi nhiều hơn.', 1, '2023-06-05 07:20:00', 3, 3),
(9, 'Giá trị thực tiễn cao', 'Mình đã áp dụng và thấy hiệu quả ngay.', 9, '2023-06-05 18:00:00', 4, 4),
(10, 'Không đồng tình', 'Mình có quan điểm khác với bài viết này.', 0, '2023-06-06 08:10:00', 5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangbai`
--
-- Tạo: Th4 16, 2025 lúc 03:21 PM
-- Cập nhật lần cuối: Th4 16, 2025 lúc 04:00 PM
--

DROP TABLE IF EXISTS `tbl_dangbai`;
CREATE TABLE `tbl_dangbai` (
  `id_vietbai` int(11) NOT NULL,
  `id_bantin` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `thoigian` datetime NOT NULL,
  `tinhtrang` varchar(150) NOT NULL,
  `ghichu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `tbl_dangbai`:
--   `id_nguoidung`
--       `tbl_nguoidung` -> `id_nguoidung`
--   `id_bantin`
--       `tbl_bantin` -> `id_bantin`
--

--
-- Cắt ngắn bảng trước khi chèn `tbl_dangbai`
--

TRUNCATE TABLE `tbl_dangbai`;
--
-- Đang đổ dữ liệu cho bảng `tbl_dangbai`
--

INSERT INTO `tbl_dangbai` (`id_vietbai`, `id_bantin`, `id_nguoidung`, `thoigian`, `tinhtrang`, `ghichu`) VALUES
(1, 1, 1, '2023-06-01 10:00:00', 'đã duyệt', 'Tin công nghệ mới'),
(2, 2, 2, '2023-06-02 11:15:00', 'đã duyệt', ''),
(3, 3, 3, '2023-06-03 08:45:00', 'đang chờ', ''),
(4, 4, 4, '2023-06-04 14:30:00', 'đã duyệt', 'Bài đăng giáo dục'),
(5, 5, 5, '2023-06-05 09:10:00', 'đang chờ', 'Đang chờ duyệt'),
(6, 6, 6, '2023-06-06 10:20:00', 'đã duyệt', ''),
(7, 7, 7, '2023-06-07 15:00:00', 'đã duyệt', ''),
(8, 8, 8, '2023-06-08 13:15:00', 'đã duyệt', ''),
(9, 9, 9, '2023-06-09 16:40:00', 'đang chờ', ''),
(10, 10, 10, '2023-06-10 17:25:00', 'đã duyệt', 'Hot trend'),
(11, 11, 1, '2023-06-11 18:00:00', 'đã duyệt', ''),
(12, 12, 2, '2023-06-12 19:30:00', 'đã duyệt', ''),
(13, 13, 3, '2023-06-13 20:45:00', 'đang chờ', 'Cần chỉnh sửa'),
(14, 14, 4, '2023-06-14 08:00:00', 'đã duyệt', ''),
(15, 15, 5, '2023-06-15 09:15:00', 'đã duyệt', ''),
(16, 16, 1, '2023-06-16 10:30:00', 'đang chờ', ''),
(17, 17, 2, '2023-06-17 11:45:00', 'đã duyệt', ''),
(18, 18, 3, '2023-06-18 13:00:00', 'đã duyệt', ''),
(19, 19, 4, '2023-06-19 14:30:00', 'đã duyệt', ''),
(20, 20, 5, '2023-06-20 15:45:00', 'đã duyệt', 'Bài viết nổi bật'),
(21, 21, 2, '2023-06-17 11:45:00', 'đã duyệt', ''),
(22, 22, 3, '2023-06-18 13:00:00', 'đã duyệt', ''),
(23, 23, 4, '2023-06-19 14:30:00', 'đã duyệt', ''),
(24, 24, 5, '2023-06-20 15:45:00', 'đã duyệt', 'Bài viết nổi bật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--
-- Tạo: Th4 16, 2025 lúc 03:19 PM
-- Cập nhật lần cuối: Th4 16, 2025 lúc 03:28 PM
--

DROP TABLE IF EXISTS `tbl_danhmuc`;
CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(150) NOT NULL,
  `hinhanh` varchar(150) NOT NULL,
  `id_nguoidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `tbl_danhmuc`:
--

--
-- Cắt ngắn bảng trước khi chèn `tbl_danhmuc`
--

TRUNCATE TABLE `tbl_danhmuc`;
--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `ten_danhmuc`, `hinhanh`, `id_nguoidung`) VALUES
(1, 'Công nghệ', 'tech.jpg', 1),
(2, 'Giáo dục', 'edu.jpg', 1),
(3, 'Đời sống', 'life.jpg', 2),
(4, 'Thể thao', 'sport.jpg', 2),
(5, 'Sức khỏe', 'health.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_docgia`
--
-- Tạo: Th4 16, 2025 lúc 03:01 PM
-- Cập nhật lần cuối: Th4 16, 2025 lúc 03:47 PM
--

DROP TABLE IF EXISTS `tbl_docgia`;
CREATE TABLE `tbl_docgia` (
  `id_docgia` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `hoten` varchar(150) NOT NULL,
  `ghichu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `tbl_docgia`:
--

--
-- Cắt ngắn bảng trước khi chèn `tbl_docgia`
--

TRUNCATE TABLE `tbl_docgia`;
--
-- Đang đổ dữ liệu cho bảng `tbl_docgia`
--

INSERT INTO `tbl_docgia` (`id_docgia`, `email`, `password`, `hoten`, `ghichu`) VALUES
(1, 'reader1@gmail.com', 'doc123', 'Nguyễn Văn A', 'Người dễ tính'),
(2, 'reader2@gmail.com', 'doc234', 'Độc Giả 2', 'lab1'),
(3, 'reader3@gmail.com', 'doc345', 'Độc Giả 3', 'lab7'),
(4, 'reader4@gmail.com', 'doc456', 'Độc Giả 4', 'hahaha'),
(5, 'reader5@gmail.com', 'doc567', 'Độc Giả 5', 'vui vẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoidung`
--
-- Tạo: Th4 16, 2025 lúc 02:57 PM
-- Cập nhật lần cuối: Th4 16, 2025 lúc 03:43 PM
--

DROP TABLE IF EXISTS `tbl_nguoidung`;
CREATE TABLE `tbl_nguoidung` (
  `id_nguoidung` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `hoten` varchar(150) NOT NULL,
  `bidanh` varchar(150) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `diachi` varchar(150) NOT NULL,
  `ngayvaolam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `tbl_nguoidung`:
--

--
-- Cắt ngắn bảng trước khi chèn `tbl_nguoidung`
--

TRUNCATE TABLE `tbl_nguoidung`;
--
-- Đang đổ dữ liệu cho bảng `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`id_nguoidung`, `email`, `password`, `hoten`, `bidanh`, `dienthoai`, `cmnd`, `diachi`, `ngayvaolam`) VALUES
(1, 'danh1@gmail.com', 'pass123', 'Nguyễn Thành Danh', 'nta', 911121116, 123456789, 'Hà Nội', '2023-01-01 00:00:00'),
(2, 'khoi2@gmail.com', 'pass234', 'Trần Đăng Khôi', 'tdk', 917149201, 987654321, 'Đà Nẵng', '2023-02-15 00:00:00'),
(3, 'tung3@gmail.com', 'pass345', 'Truong Thanh Tùng', 'ttt', 356019345, 135792468, 'TP.HCM', '2023-03-10 00:00:00'),
(4, 'lan1@gmail.com', 'pass456', 'Phạm Thị Lan', 'ptl', 2147483647, 246813579, 'Huế', '2023-04-20 00:00:00'),
(5, 'ngoc2@gmail.com', 'pass567', 'Hoàng Văn Ngọc', 'hvm', 955555555, 102938475, 'Cần Thơ', '2023-05-05 00:00:00'),
(6, 'kietbui@gmail.com', 'pass006', 'Bùi Lê Tuấn Kiệt', 'bltk', 918203967, 19028102, 'Quảng Trị', '2024-06-01 00:00:00'),
(7, 'tri2005@gmail.com', 'pass007', 'Nguyễn Lê Đức Trí', 'trile', 918205192, 223344556, 'Vĩnh Long', '2023-06-05 00:00:00'),
(8, 'dohuuphuoc@gmail.com', 'pass008', 'Đỗ Hữu Phước', 'dhp', 929691029, 334455667, 'Thanh Hóa', '2023-06-10 00:00:00'),
(9, 'phamquangminh2005@gmail.com', 'pass009', 'Phạm Quang Minh', 'minhpham2005', 969401925, 445566778, 'Hà Nội', '2023-06-15 00:00:00'),
(10, 'user10@gmail.com', 'pass010', 'Tạ Quang Khánh', 'tqk', 901010101, 556677889, 'Long An', '2023-06-20 00:00:00'),
(11, 'user1910@gmail.com', 'pass011', 'Cao Văn Ngân', 'cvn', 912121212, 667788990, 'Quảng Ninh', '2023-06-25 00:00:00'),
(12, 'anhhuynh@gmail.com', 'pass012', 'Huỳnh Ngọc Quang Anh', 'hnqa', 986102910, 778899001, 'Bình Thuận', '2023-07-01 00:00:00'),
(13, 'user13@gmail.com', 'pass013', 'Nguyễn Văn Phát', 'nvp', 934343434, 889900112, 'Đắk Lắk', '2023-07-05 00:00:00'),
(14, 'phucle@gmail.com', 'pass014', 'Lê Cao Phúc', 'lecaophuccoolngau', 945980182, 990011223, 'Ninh Bình', '2023-07-10 00:00:00'),
(15, 'user15@gmail.com', 'pass015', 'Trịnh Công', 'tc10204', 956120304, 1122334, 'Lâm Đồng', '2023-07-15 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phanquyen`
--
-- Tạo: Th4 16, 2025 lúc 03:12 PM
-- Cập nhật lần cuối: Th4 16, 2025 lúc 03:45 PM
--

DROP TABLE IF EXISTS `tbl_phanquyen`;
CREATE TABLE `tbl_phanquyen` (
  `id_phanquyen` int(11) NOT NULL,
  `ten_quyen` varchar(150) NOT NULL,
  `id_nguoidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `tbl_phanquyen`:
--   `id_nguoidung`
--       `tbl_nguoidung` -> `id_nguoidung`
--

--
-- Cắt ngắn bảng trước khi chèn `tbl_phanquyen`
--

TRUNCATE TABLE `tbl_phanquyen`;
--
-- Đang đổ dữ liệu cho bảng `tbl_phanquyen`
--

INSERT INTO `tbl_phanquyen` (`id_phanquyen`, `ten_quyen`, `id_nguoidung`) VALUES
(1, 'Admin', 1),
(2, 'Admin', 2),
(3, 'Editor', 3),
(4, 'Editor', 4),
(5, 'Writer', 5),
(6, 'Writer', 6),
(7, 'Reader', 7),
(8, 'Reader', 8),
(9, 'Reader', 9),
(10, 'Reader', 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_bantin`
--
ALTER TABLE `tbl_bantin`
  ADD PRIMARY KEY (`id_bantin`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `id_bantin` (`id_bantin`,`id_docgia`),
  ADD KEY `id_bantin_2` (`id_bantin`),
  ADD KEY `tbl_binhluan_ibfk_2` (`id_docgia`);

--
-- Chỉ mục cho bảng `tbl_dangbai`
--
ALTER TABLE `tbl_dangbai`
  ADD PRIMARY KEY (`id_vietbai`),
  ADD KEY `id_nguoidung` (`id_nguoidung`),
  ADD KEY `id_bantin` (`id_bantin`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`),
  ADD KEY `id_nguoidung` (`id_nguoidung`),
  ADD KEY `ten_danhmuc` (`ten_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_docgia`
--
ALTER TABLE `tbl_docgia`
  ADD PRIMARY KEY (`id_docgia`);

--
-- Chỉ mục cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_phanquyen`
--
ALTER TABLE `tbl_phanquyen`
  ADD PRIMARY KEY (`id_phanquyen`),
  ADD KEY `id_nguoidung` (`id_nguoidung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bantin`
--
ALTER TABLE `tbl_bantin`
  MODIFY `id_bantin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_dangbai`
--
ALTER TABLE `tbl_dangbai`
  MODIFY `id_vietbai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_docgia`
--
ALTER TABLE `tbl_docgia`
  MODIFY `id_docgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_phanquyen`
--
ALTER TABLE `tbl_phanquyen`
  MODIFY `id_phanquyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_bantin`
--
ALTER TABLE `tbl_bantin`
  ADD CONSTRAINT `tbl_bantin_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD CONSTRAINT `tbl_binhluan_ibfk_1` FOREIGN KEY (`id_bantin`) REFERENCES `tbl_bantin` (`id_bantin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_binhluan_ibfk_2` FOREIGN KEY (`id_docgia`) REFERENCES `tbl_docgia` (`id_docgia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_dangbai`
--
ALTER TABLE `tbl_dangbai`
  ADD CONSTRAINT `tbl_dangbai_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_nguoidung` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_dangbai_ibfk_2` FOREIGN KEY (`id_bantin`) REFERENCES `tbl_bantin` (`id_bantin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_phanquyen`
--
ALTER TABLE `tbl_phanquyen`
  ADD CONSTRAINT `tbl_phanquyen_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_nguoidung` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Siêu dữ liệu
--
USE `phpmyadmin`;

--
-- Siêu dữ liệu cho bảng tbl_bantin
--

--
-- Cắt ngắn bảng trước khi chèn `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Cắt ngắn bảng trước khi chèn `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Cắt ngắn bảng trước khi chèn `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Siêu dữ liệu cho bảng tbl_binhluan
--

--
-- Cắt ngắn bảng trước khi chèn `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Cắt ngắn bảng trước khi chèn `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Cắt ngắn bảng trước khi chèn `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Siêu dữ liệu cho bảng tbl_dangbai
--

--
-- Cắt ngắn bảng trước khi chèn `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Cắt ngắn bảng trước khi chèn `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Cắt ngắn bảng trước khi chèn `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Siêu dữ liệu cho bảng tbl_danhmuc
--

--
-- Cắt ngắn bảng trước khi chèn `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Cắt ngắn bảng trước khi chèn `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Cắt ngắn bảng trước khi chèn `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Siêu dữ liệu cho bảng tbl_docgia
--

--
-- Cắt ngắn bảng trước khi chèn `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Cắt ngắn bảng trước khi chèn `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Cắt ngắn bảng trước khi chèn `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Siêu dữ liệu cho bảng tbl_nguoidung
--

--
-- Cắt ngắn bảng trước khi chèn `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Cắt ngắn bảng trước khi chèn `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Cắt ngắn bảng trước khi chèn `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Siêu dữ liệu cho bảng tbl_phanquyen
--

--
-- Cắt ngắn bảng trước khi chèn `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Cắt ngắn bảng trước khi chèn `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Cắt ngắn bảng trước khi chèn `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Siêu dữ liệu cho cơ sở dữ liệu db_bantin
--

--
-- Cắt ngắn bảng trước khi chèn `pma__bookmark`
--

TRUNCATE TABLE `pma__bookmark`;
--
-- Cắt ngắn bảng trước khi chèn `pma__relation`
--

TRUNCATE TABLE `pma__relation`;
--
-- Cắt ngắn bảng trước khi chèn `pma__savedsearches`
--

TRUNCATE TABLE `pma__savedsearches`;
--
-- Cắt ngắn bảng trước khi chèn `pma__central_columns`
--

TRUNCATE TABLE `pma__central_columns`;SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
