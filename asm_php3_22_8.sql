-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2022 lúc 08:02 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhien`
--

CREATE TABLE `anhien` (
  `id` int(1) NOT NULL,
  `ten` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `anhien`
--

INSERT INTO `anhien` (`id`, `ten`) VALUES
(0, 'Ẩn'),
(1, 'Hiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `idTin` int(11) NOT NULL DEFAULT 0,
  `noiDung` text NOT NULL,
  `ngayDang` date NOT NULL DEFAULT current_timestamp(),
  `hoTen` varchar(255) NOT NULL,
  `hinh` varchar(500) NOT NULL,
  `anHien` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `idTin`, `noiDung`, `ngayDang`, `hoTen`, `hinh`, `anHien`, `created_at`, `updated_at`) VALUES
(35, 796, 'comment\r\n', '2022-08-18', 'Hà Quang Dự', 'avt.jpg', 1, '2022-08-17 23:24:08', '2022-08-17 23:24:08'),
(34, 796, 'cấcc', '2022-08-18', 'Hà Quang Dự', 'avt.jpg', 1, '2022-08-17 23:13:33', '2022-08-20 00:41:19'),
(38, 797, 'Giỏi', '2022-08-20', 'Hà Quang Dự', 'img/1CCfEnNWwTZdGVsHy4dvzSLmECBY2R2ba7ErXg9X.png', 1, '2022-08-20 00:22:07', '2022-08-20 00:22:07'),
(37, 806, 'Món ăn rất hấp dẫn', '2022-08-20', 'Hà Quang Dự', 'img/1CCfEnNWwTZdGVsHy4dvzSLmECBY2R2ba7ErXg9X.png', 1, '2022-08-19 23:10:19', '2022-08-19 23:10:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `noiDung` varchar(500) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `noiDung`, `updated_at`, `created_at`) VALUES
(1, 'Hà Quang Dự', 'quangdu2082k2@gmail.com', 'hello', '2022-08-19 09:20:21', '2022-08-19 09:20:21'),
(3, 'Khách hàng 1', 'khach@gmail.com', 'sđt', '2022-08-21 09:05:53', '2022-08-21 09:05:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL DEFAULT '',
  `anHien` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`id`, `ten`, `anHien`, `created_at`, `updated_at`) VALUES
(3, 'Du lịch', 1, NULL, NULL),
(4, 'Khoa học', 1, NULL, NULL),
(9, 'Ẩm Thực', 1, NULL, '2022-08-18 07:58:06'),
(24, 'Mẹo vặt', 0, NULL, '2022-08-18 08:07:52'),
(79, 'Sức khỏe', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_04_051715_bang_l_tin', 1),
(6, '2022_08_04_051938_bang_l_tin', 2),
(7, '2022_08_04_080754_bang_tin', 3),
(8, '2022_08_12_093325_binh_luan', 4),
(9, '2022_08_12_155353_thanh_vien', 5),
(10, '2022_08_15_164112_tag', 6),
(11, '2014_10_12_000000_create_users_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('quangdu2082k3@gmail.com', '$2y$10$b5oJ/ZqLYcl0A4MtTIx.O.dxd1NuFZ/RcCa2Ule6ElHd.mYS.MlGa', '2022-08-17 06:16:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `idTin` int(11) NOT NULL,
  `noiDung` varchar(500) NOT NULL,
  `anHien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `idTin`, `noiDung`, `anHien`, `created_at`, `updated_at`) VALUES
(3, 803, 'Sinh Viên Việt', 1, '2022-08-19 09:57:19', '2022-08-19 09:57:19'),
(4, 806, 'Món ngon', 1, '2022-08-19 09:58:08', '2022-08-19 23:22:49'),
(5, 797, 'Quá giỏi', 1, '2022-08-20 00:21:13', '2022-08-20 00:21:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(255) NOT NULL DEFAULT '',
  `tomTat` varchar(1000) DEFAULT NULL,
  `urlHinh` varchar(255) DEFAULT NULL,
  `ngayDang` date DEFAULT current_timestamp(),
  `noiDung` text DEFAULT NULL,
  `idLT` int(11) NOT NULL DEFAULT 0,
  `idUser` int(11) NOT NULL,
  `xem` int(11) DEFAULT 0,
  `anHien` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`id`, `tieuDe`, `tomTat`, `urlHinh`, `ngayDang`, `noiDung`, `idLT`, `idUser`, `xem`, `anHien`, `created_at`, `updated_at`) VALUES
(796, 'Hoàng hôn trên sông Mê Kông', 'Bên ghế đá thị xã Savẳn, thủ phủ miền Trung và Hạ Lào của đất nước Hoa Chăm Pa, ngước sang bên kia là Mục Đa Hán là vùng Đông Bắc của xứ sở Chùa Vàng Thái Lan, chúng tôi ngồi hàng giờ để ngắm hoàng hôn đang lịm dần trên mặt sông Mê Kông. ', 'img/5dGuPPhHLEtBwcmes4sWfIAoU6a2TOqXvArgcIXe.jpg', '2022-08-17', '<p>Thời tiết Hà Nội những ngày này vô cùng oi bức, chúng tôi <a href=\"http://www.elle.vn/du-lich/\">du lịch</a> “trốn nóng tới một vùng nóng hơn” – Lào. Nhưng trái lại với suy nghĩ của nhiều người về “gió Lào”, Luang Prabang lại mát dịu hơn, nắng không gay gắt và hầm hập như cái nắng của Hà Nội.</p><p>Luang Prabang là cố đô của Lào, một thành phố được vây quanh bởi những dãy núi và nằm cạnh dòng sông Mê Kông nước quanh năm đỏ phù sa. Lào không có biển, bởi vậy người ta yêu lắm dòng sông này. Đó là nơi điều hòa không khí cho cả thành phố, cũng như nơi cuộc sống của người dân gắn bó. Họ thả trâu dọc bờ cát trên sông, họ cưỡi voi qua sông và chèo những con thuyền dài xuôi ngược dòng sông Mê Kông ấy.</p><p>.</p><figure class=\"image\"><img src=\"http://www.elle.vn/wp-content/uploads/2016/06/19/Sunset-on-Me-Kong-river-2-490x367.jpg\" alt=\"Hoàng hôn trên dòng Mê Kông. \"></figure><p>Hoàng hôn trên dòng Mê Kông.</p><p>Nắng chiều dần tắt, bạn có thể chọn một nơi để ngắm hoàng hôn, bên một quán cà phê river view, hay trên ngọn núi Phou Si nơi vừa ngắm mặt trời dần lặn sau dãy núi, vừa có thể bao quát được toàn cảnh cố đô Luang Prabang. Còn chúng tôi, chúng tôi chọn cho mình một cách vô cùng thú vị, đó là ngắm hoàng hôn trên tàu.</p><p>Con tàu Dok Keow&nbsp;4 sao dài 28 mét được trang bị đầy đủ như một khách sạn nổi trên sông với phòng ngủ, bếp, toa lét và khoang ngắm hoàng hôn mái di động. Tàu đón khách ngay tại bến, và ngược dòng sông Mê Kông về hướng Tây để tìm mặt trời đang dần lặn xuống sau những dẫy núi trùng điệp.</p><p>.</p><figure class=\"image\"><img src=\"http://www.elle.vn/wp-content/uploads/2016/06/19/Sunset-on-Me-Kong-river-7-490x367.jpg\" alt=\"Con tàu Luxury on Mekong dài 28 mét được trang bị đầy đủ như một khách sạn nổi trên sông đón khách ngay tại bến. \"></figure><p>Con tàu Luxury on Mekong dài 28 mét được trang bị đầy đủ như một khách sạn nổi trên sông đón khách tại bến.</p><p>Nắng chiều dần dịu nhẹ, con tàu vượt dòng chảy, nhẹ lướt trên mặt nước đỏ đục của dòng Mê Kông đưa du khách khám phá những cảnh đẹp thay đổi hai bên bờ. Gió thổi lộng lùa vào hai bên mạn tàu mang theo vị ngai ngái từ dòng sông quyện đều. Chúng tôi bắt đầu tận hưởng những giây phút thư thái, mắt lim dim để tiếng gió, tiếng tàu rẽ nước vỗ ì oạp hai bên mạn tàu ùa vào tai.</p><p>Chỉ chưa đầy 30 phút chạy, tàu dừng chân đưa chúng tôi đến bờ cát mịn, nơi những chú trâu trắng đang nhẩn nha gặm cỏ, nhẩn nha dìm mình dưới dòng nước mát của dòng sông mẹ. Và từ đây, là nơi đẹp nhất để có thể ngắm hoàng hôn trải dài những dải sáng vàng rực trên dòng sông và cảnh vật hùng vĩ này.</p><p>.</p><figure class=\"image\"><img src=\"http://www.elle.vn/wp-content/uploads/2016/06/19/Sunset-on-Mekong-490x324.jpg\" alt=\"Tàu dừng chân tại một bờ cát mịn - nơi những bữa tiệc đang sẵn sàng chờ du khách.\"></figure><p>Tàu dừng chân tại một bờ cát mịn – nơi những bữa tiệc đang sẵn sàng chờ du khách.</p><p>Chúng tôi ai cũng thích thú rời con tàu, ùa xuống bãi cát dài, mịn để nô đùa và ngắm cảnh. Trong khi ấy, một bữa tiệc nhẹ với các món ăn đặc sắc của Lào cùng vang trắng và rượu sâm-panh đã được dọn sẵn chờ đợi chúng tôi khai tiệc ngay trên bờ cát.</p><p>.</p><figure class=\"image\"><img src=\"http://www.elle.vn/wp-content/uploads/2016/06/19/Sunset-on-Me-Kong-river-10-490x653.jpg\" alt=\"Du khách mải mê dạo chơi trên bờ cát mịn trải dài. \"></figure><p>Du khách mải mê dạo chơi trên bờ cát mịn trải dài.</p><figure class=\"image\"><img src=\"http://www.elle.vn/wp-content/uploads/2016/06/19/Sunset-on-Me-Kong-river-8-490x653.jpg\" alt=\"Tiệc tùng bên bờ sông Mê Kông, ngắm hoàng hông là một trải nghiệm mới mẻ và tuyệt vời với bất kỳ ai. \"></figure><p>Tiệc tùng bên bờ sông Mê Kông, ngắm hoàng hôn là một trải nghiệm mới mẻ và tuyệt vời với bất kỳ ai.</p><figure class=\"image\"><img src=\"http://www.elle.vn/wp-content/uploads/2016/06/19/Sunset-on-Me-Kong-river-1-490x653.jpg\" alt=\"Những món ăn nhẹ được phục vụ bởi nhà hàng ngon nhất địa phương. \"></figure><p>Những món ăn nhẹ được phục vụ bởi nhà hàng ngon nhất địa phương.</p>', 3, 41, 82, 0, '2022-08-17 07:55:15', '2022-08-19 11:03:35'),
(797, '7 sáng kiến đoạt giải cuộc thi Sáng kiến khoa học 2022', '7 sáng kiến đoạt giải cuộc thi Sáng kiến khoa học 2022', 'img/sauRV5efdo9FPz2CMBg9D038uIcU95KHLtNvgSIH.jpg', '2022-08-17', '<h2><strong>7 sáng kiến đoạt giải cuộc thi Sáng kiến khoa học 2022</strong></h2><p>Các sản phẩm được vinh danh ngày 17/5 có giá trị thiết thực giải quyết vấn đề từ cuộc sống, tiềm năng ứng dụng góp phần tăng năng suất lao động, mang lại hiệu quả kinh tế.</p><p>Sau gần 3 tháng tranh tài, cuộc thi <a href=\"https://vnexpress.net/khoa-hoc/cuoc-thi-sang-kien-khoa-hoc\">Sáng kiến Khoa học 2022</a> đã tìm được chủ nhân các giải thưởng. Trong đó giải đặc biệt 100 triệu đồng, giải nhất trị giá 50 triệu đồng, giải nhì 30 triệu đồng, giải ba 20 triệu đồng cùng 3 giải khuyến khích, mỗi giải 10 triệu đồng.</p><p><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-thuong-sang-kien-khoa-hoc-5735-2552-1652801501.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=sUQyvZwh2k4onq1DtULPEA 1x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-thuong-sang-kien-khoa-hoc-5735-2552-1652801501.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=YqtfEhmoGqd5qT3xQt24Kg 1.5x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-thuong-sang-kien-khoa-hoc-5735-2552-1652801501.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=pTUOWdAb2qkykdPjsdkhbQ 2x\"><img src=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-thuong-sang-kien-khoa-hoc-5735-2552-1652801501.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=sUQyvZwh2k4onq1DtULPEA\" alt=\"Thứ trưởng Bùi Thế Duy (thứ 8 từ trái qua) chụp ảnh cùng đại diện Ban tổ chức, Ban giám khảo và các tác giả 7 sáng kiến. Ảnh: Đinh Tùng\"></picture></p><p>Thứ trưởng Bùi Thế Duy (thứ 8 từ trái qua) chụp ảnh cùng đại diện Ban tổ chức, Ban giám khảo và các tác giả 7 sáng kiến. Ảnh: <i>Đinh Tùng</i></p><p><strong>1. Giải pháp kết hợp công nghệ vệ tinh và chà nổi truyền thống giúp khai thác cá hiệu quả</strong></p><p>Công trình được vinh danh giải Đặc biệt trị giá 100 triệu đồng thuộc về tác giả Đồng Quang Hùng (Khánh Hòa). Giải pháp nhóm đưa ra là sự kết hợp giữa công nghệ vệ tinh hiện đại với chà nổi truyền thống giúp khai thác cá hiệu quả. Sự kết hợp mang tính cải tiến và đột phá giúp mở ra hướng khai thác mới cho ngành ngư nghiệp Việt Nam, đặc biệt tại các vùng biển xa bờ, ngư trường truyền thống và vùng biển nước sâu nơi trữ lượng hải sản dồi dào.</p><p>Với giải pháp này, ngư dân chỉ cần thả 3-5 phao dò đặt cạnh 3-5 chà tại các vị trí khác nhau. Dựa vào các dữ liệu phao dò cá gửi về thông qua sóng vệ tinh, chủ tàu có thể xác định vị trí đánh bắt, các tín hiệu dự báo như: tọa độ, cá ở độ sâu bao nhiêu, khối lượng cá dự kiến, nhiệt độ nước, dòng chảy... Khi có tín hiệu cá, ngư dân mới thực hiện đánh bắt, vừa hiệu quả, vừa tiết kiệm nhiên liệu, chi phí mỗi chuyến đi.</p><p>Ưu điểm lớn của giải pháp là chỉ với chi phí đầu tư khoảng 100 triệu đồng, ngư dân có thể tiếp cận được công nghệ và tăng sản lượng đánh bắt cá từ 3 đến 5 lần, đồng thời tiết kiệm 40% nhiên liệu.</p><p>Giải pháp cũng giúp cung cấp nguồn dữ liệu có ý nghĩa trong việc đánh giá dự báo ngư trường, phục vụ cơ quan nghiên cứu và dự báo nguồn lợi khai thác hải sản.</p><p>Theo tác giả, với khoảng gần 44.000 tàu các nghề (lưới vây, lưới rê, câu cá ngừ đại dương), giải pháp này có thể đem đến quy mô thị trường giá trị lên đến 5 triệu USD/năm (10$/tàu/tháng).</p><figure class=\"image\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-dac-biet-5444-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=oH74LURnx4eh4nfP1xEv6g 1x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-dac-biet-5444-1652765250.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=WrOi8l_Tys_cnGKBccsZfg 1.5x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-dac-biet-5444-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=7OZJMTBvbYvqGPwoB8nJLg 2x\"><img src=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-dac-biet-5444-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=oH74LURnx4eh4nfP1xEv6g\" alt=\"Thứ trưởng Bùi Thế Duy (trái) trao giải đặc biệt cho đại diện nhóm tác giả giải đặc biệt. Ảnh: Đinh Tùng\"></picture></figure><p>Thứ trưởng Bùi Thế Duy (trái) trao giải đặc biệt cho đại diện nhóm tác giả giải đặc biệt. Ảnh: <i>Đinh Tùng</i></p><p><strong>2. Chiết tách lycopen từ quả gấc</strong></p><p>Sáng kiến của nhóm nhà khoa học G5-nhóm nghiên cứu phát triển vật liệu mới thuộc Viện hóa học, Viện Hàn lâm Khoa học và Công nghệ Việt Nam được trao giải Nhất, giải thưởng trị giá 50 triệu đồng. Công trình đã tách chiết thành công lycopen tinh khiết 98% và nano lycopen dễ tan trong nước.</p><p>Lycopen và hệ nano lycopen là những nguồn dược liệu quý, có tiềm năng ứng dụng lớn trong ngành dược phẩm, mỹ phẩm và công nghệ thực phẩm. Nhận thấy hàm lượng lycopen từ quả gấc cao gấp 70-100 lần so với cà chua, sau 3 năm nghiên cứu nhóm nhà khoa học G5 đã tách chiết thành công.</p><p>Đưa ra quy trình công nghệ đơn giản, giải pháp này có thể giúp các công ty hóa mỹ phẩm, thực phẩm nhập được nguồn nguyên liệu có độ tinh khiết cao với giá cả hợp lý. Theo tính toán của nhóm, 1 kg lycopen chiết được có giá khoảng 50- 60 triệu đồng, rẻ hơn 1/3 so với các sản phẩm ngoại nhập (giá trên dưới 150 triệu đồng trên thị trường). Nghiên cứu được Cục Sở hữu Trí tuệ cấp bằng độc quyền sáng chế tháng 1/2021.</p><figure class=\"image\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhat-6581-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=yeUey7gG837ZiJg7SbMneQ 1x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhat-6581-1652765250.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=eqTmc5NYk7BB0P57wvrLTg 1.5x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhat-6581-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=EIpCshjNyrqrZx0idTpOAA 2x\"><img src=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhat-6581-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=yeUey7gG837ZiJg7SbMneQ\" alt=\"Ông Phạm Hiếu, Phó Tổng biên tập phụ trách báo VnExpress (trái) trao giải nhất cho nhóm tác giả. Ảnh: Đinh Tùng\"></picture></figure><p>Ông Phạm Hiếu, Phó Tổng biên tập phụ trách báo VnExpress (trái) trao giải nhất cho nhóm tác giả. Ảnh: <i>Đinh Tùng</i></p><p><strong>3. Thiết bị định vị phẫu thuật nội soi xương 3D</strong></p><p>Thiết bị phẫu thuật nội soi xương 3D nhằm lấy triệt để khối u nhưng không làm tổn thương các lớp sụn, xương của bệnh nhân khi mổ. Nghiên cứu của nhóm BS chuyên khoa II Phạm Trung Hiếu, Phụ trách trung tâm nghiên cứu công nghệ in 3D y sinh và các cộng sự từ Đại học VinUni phát triển nhận giải Nhì, giải thưởng trị giá 30 triệu đồng.</p><p>Thiết bị được thiết kế để dẫn đường giúp bác sĩ tạo ra một đường hầm đi từ bề mặt ngoài xương (vùng an toàn) tới chính xác trung tâm khối u. Qua đường hầm này bác sĩ sẽ sử dụng thiết bị nội soi để loại bỏ khối u một cách tiện lợi, an toàn và không làm tổn thương bất kỳ cấu trúc nào khác của khớp. Nhóm thực hiện nghiên cứu với bệnh u nang xương sên, xảy ra khi bệnh nhân chơi thể thao, vận động nhiều gây tổn thương ở nang xương trong xương sên gần bề mặt khớp cổ chân.</p><p>Theo nhóm nghiên cứu, thiết bị định vị phẫu thuật nội soi xương 3D là dạng mô hình cải tiến hỗ trợ bác sĩ tăng khả năng thành công trong ca mổ và nằm trong danh mục kỹ thuật được Bộ Y tế công nhận.</p><p>&nbsp;</p><figure class=\"image\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhi-1401-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=dsNY0fqs7SOHujLWRk7y5w 1x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhi-1401-1652765250.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=jonShsiwqnaOI7y7lajdlQ 1.5x, https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhi-1401-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=lHc-B74C6nh7QNS1OxY8ZQ 2x\"><img src=\"https://i1-vnexpress.vnecdn.net/2022/05/17/giai-nhi-1401-1652765250.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=dsNY0fqs7SOHujLWRk7y5w\" alt=\"Bà Bùi Thanh Vân, Trưởng ban tổ chức cuộc thi (phải) trao giải nhì cho đại diện nhóm tác giả. Ảnh: Đinh Tùng\"></picture></figure><p>Bà Bùi Thanh Vân, Trưởng ban tổ chức cuộc thi (phải) trao giải nhì cho đại diện nhóm tác giả. Ảnh: <i>Đinh Tùng</i></p>', 4, 41, 28, 1, '2022-08-17 08:58:52', '2022-08-20 00:22:07'),
(803, 'Sinh viên Việt làm nhà in 3D giá 50 triệu đồng', 'Nhóm sinh viên Đại học Sư phạm Kỹ thuật TP HCM sử dụng công nghệ in 3D tạo ra ngôi nhà rộng 27 m2 với thời gian 30 giờ in.', 'img/UXHaptIcvx9JFZcO2aDcylTku3JZ6Se1JfMHprxx.jpg', '2022-08-18', '<h2><strong>Sinh viên Việt làm nhà in 3D giá 50 triệu đồng</strong></h2><p>Nhóm sinh viên Đại học Sư phạm Kỹ thuật TP HCM sử dụng công nghệ in 3D tạo ra ngôi nhà rộng 27 m2 với thời gian 30 giờ in.</p><p>Ngôi nhà xây bằng máy in 3D tại TP Thủ Đức, TP HCM do bốn sinh viên Lê Anh Kiệt, Đỗ Hoàng Khanh, Đỗ Phước Bảo Long, Nguyễn Đoàn Đăng Khoa (ngành cơ điện tử, Khoa chất lượng cao) thiết kế và xây dựng từ đầu tháng 3. Sau hai tháng, ngôi nhà hoàn thành với diện tích 27 m2, gồm: phòng khách, phòng ngủ, phòng vệ sinh. Nhà có chiều cao 3 m, tường 2 m.</p><figure class=\"image image-style-side\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2022/08/15/1-1660557582.jpg?w=1200&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=QDEu4QOJjP4o3p2fRogn3w 1x, https://i1-vnexpress.vnecdn.net/2022/08/15/1-1660557582.jpg?w=1200&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=42JHnjdFbawwP1_EvONouw 2x\"><img src=\"https://i1-vnexpress.vnecdn.net/2022/08/15/1-1660557582.jpg?w=1200&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=QDEu4QOJjP4o3p2fRogn3w\" alt=\"\"></picture></figure><p>Máy in 3D dùng cho thi công ngôi nhà do nhóm tự phát triển hai năm trước. Máy có ba bộ phân chính: hệ khung đỡ, đầu in và tủ điều khiển. Nhóm thiết kế ngôi nhà trên máy tính, sau đó thi công phần móng và đưa máy vào in tường theo lập trình.</p><p>Vữa làm nhà được nhóm sử dụng các vật liệu như xây một ngôi nhà thông thường như cát (kích thước khoảng 2 mm), xi măng, nước. Ngoài ra vữa còn được thêm bột thạch cao, các phụ gia... Các nguyên liệu này được nhóm tính toán, phối trộn cho tỷ lệ tốt nhất để khi đổ lên khuôn cấp cho đầu in ra vật liệu đảm bảo các yếu tố chịu lực cho kết cấu ngôi nhà, vữa sau in có độ chắc, không quá khô hay quá nhão.</p><figure class=\"image image-style-side\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2022/08/15/3-1660557585.jpg?w=1200&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=rtew4fqNhxmnHYts5NCpbA 1x, https://i1-vnexpress.vnecdn.net/2022/08/15/3-1660557585.jpg?w=1200&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=Y1IFryO568S3_7LZiAIwew 2x\"><img src=\"https://i1-vnexpress.vnecdn.net/2022/08/15/3-1660557585.jpg?w=1200&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=rtew4fqNhxmnHYts5NCpbA\" alt=\"\"></picture></figure><p>Đầu in 3D hoạt động theo lập trình của máy tính. Ngôi nhà hoàn thành sau khoảng hơn 30 giờ in.</p><p>Lê Anh Kiệt, trưởng nhóm cho biết, hiện công nghệ in 3D ứng dụng trong nhiều lĩnh vực, nhưng việc tạo ra một ngôi nhà thật từ công nghệ này chưa nhiều ở Việt Nam.</p><p>Nhóm nghiên cứu công nghệ nhà từ in 3D để tận dụng ưu thế thời gian thi công nhanh, giảm nhân công, chi phí hợp lý nhưng cũng có một ngôi nhà với kết cấu chắc chắn, có thể sử dụng để sinh hoạt. \"Chi phí xây dựng ngôi nhà khoảng hơn 50 triệu đồng\", Khoa cho biết.</p><p>&nbsp;</p><p>&nbsp;</p><p>Tủ điều khiển do nhóm phát triển được coi là \"đầu não\" cho toàn bộ quá trình in 3D.</p><p>&nbsp;</p><p>Tường ngôi nhà được in 3D theo nguyên tắc xếp chồng từng lớp vữa với độ dày mỗi lớp 2 cm, độ dày vách tường 20 cm. Bên trong vách tường có độ rỗng nhằm giảm chi phí vật liệu, cách nhiệt nhưng vẫn đảm bảo yếu tố chịu lực.</p><p>Độ cao của tường được xếp từ 120 lớp vữa in, thời gian in mỗi lớp từ 10 - 20 phút.</p>', 4, 41, 29, 1, '2022-08-17 18:25:05', '2022-08-21 10:51:53'),
(806, 'Giả cầy miền Tây', 'Khác với giả cầy miền Bắc thoảng vị chua, màu vàng sậm hay giả cầy miền Trung đượm vị ngọt, giả cầy miền Tây lại dậy mùi thơm béo ngậy từ chao.', 'img/Kp25w16FC4kWqmEk2z2dAasPQII0fX4hDTqczR9F.jpg', '2022-08-18', '<h2><strong>Giả cầy miền Tây</strong></h2><p>Khác với giả cầy miền Bắc thoảng vị chua, màu vàng sậm hay giả cầy miền Trung đượm vị ngọt, giả cầy miền Tây lại dậy mùi thơm béo ngậy từ chao.</p><p>Tác giả: <strong>Bùi Thủy</strong></p><h2><strong>Nguyên liệu</strong></h2><p>1 kg giò heo</p><p>2 nhánh sả</p><p>2 quả ớt</p><p>4 củ hành khô</p><p>4 tép tỏi</p><p>1 quả dừa tươi lấy nước</p><p>Gia vị: Chao, tương hột, sa tế, muối, đường, hạt nêm, ngũ vị hương, dầu màu điều</p><p>Đậu phộng rang (tùy chọn)</p><h2><strong>Cách làm</strong></h2><p>Giò heo cạo sạch, thui bằng rơm hoặc dùng đèn khò cho xém vàng, ngả màu nâu sậm. Cạo hết bụi tro, rửa sạch, chặt miếng vừa ăn.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-1-1-5483-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=vwGHX2eZeB3klVjCUaRxSQ 1x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-1-1-5483-1660810238.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=Nu9mvO2LS8y2pm6q4ydIdw 1.5x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-1-1-5483-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=h5kx2MtbCGS7r4MC1L8FfA 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-1-1-5483-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=vwGHX2eZeB3klVjCUaRxSQ\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Hành, tỏi, ớt, sả băm nhuyễn. Lấy 80 gr tương hột tán đều, chao tán nhuyễn 2 muỗng canh.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-2-2-2433-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=5Vdbga1HPriK_M055j1ABg 1x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-2-2-2433-1660810238.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=zQDYxNc5Fc-fnI2VsgCn2Q 1.5x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-2-2-2433-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=M92Yn9YzOlX95_2rePaKkQ 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-2-2-2433-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=5Vdbga1HPriK_M055j1ABg\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Ướp giò heo với tương hột, chao cùng 1 muỗng canh sa tế, 1/2 muỗng canh đường, 1/2 muỗng canh dầu màu điều, 1 muỗng cà phê muối, 1/2 muỗng cà phê hạt nêm, 1/2 muỗng cà phê ngũ vị hương cùng 1/2 lượng hành, tỏi, sả, ớt băm. Trộn đều ướp trong 30 phút cho thấm vị.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-3-3-9489-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7-gJYdni9sgINxIzboOPmg 1x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-3-3-9489-1660810238.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=-2c5l_3HkQEdVNDD0WCTLA 1.5x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-3-3-9489-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=ZF_c9mQJZPaO7xGfpiG41w 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-3-3-9489-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7-gJYdni9sgINxIzboOPmg\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Phi thơm lượng hành, tỏi, sả còn lại. Cho giò heo đã ướp vào đảo đều cho săn lại.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-4-4-2264-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=bedsA9Wf4f_lIcidpdAUTQ 1x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-4-4-2264-1660810238.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=iW7824Ncce-fRqnzaANw7w 1.5x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-4-4-2264-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=diYX5POwP4K2qkQWx2tDpA 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-4-4-2264-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=bedsA9Wf4f_lIcidpdAUTQ\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Sau đó, thêm lượng nước dừa tươi xâm xấp bề mặt và ninh ở lửa nhỏ vừa. Nêm nếm gia vị vừa ăn. Khi giò heo đạt độ mềm mong muốn, nước sóng sánh thì tắt bếp, múc ra thêm đậu phộng rang, thưởng thức nóng cùng bánh mì, bún hay cơm trắng.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-5-5-6188-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=uWmSlKHicfA8gk735cRUpQ 1x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-5-5-6188-1660810238.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=Q20fXwBFZFDqVJEZN861eg 1.5x, https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-5-5-6188-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=eusv8lMTFUkODEIFb8sFvQ 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/18/Buoc-5-5-6188-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=uWmSlKHicfA8gk735cRUpQ\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Yêu cầu thành phẩm: Giò heo mềm mà vẫn giữ độ giòn sần sật, vị mặn ngọt bùi béo hài hòa, dậy mùi thơm quyến rũ từ chao.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/18/Thanh-pham-1-2173-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=-dYlYWjtDK3JU21hX2Ytyw 1x, https://i1-giadinh.vnecdn.net/2022/08/18/Thanh-pham-1-2173-1660810238.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=YN6adkplzZWQjvCO-9iboQ 1.5x, https://i1-giadinh.vnecdn.net/2022/08/18/Thanh-pham-1-2173-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=37RbFVVrIiJmIi-Du2zIyQ 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/18/Thanh-pham-1-2173-1660810238.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=-dYlYWjtDK3JU21hX2Ytyw\" alt=\"\"></picture></figure><p>&nbsp;</p><p><strong>Chú ý:</strong></p><p>Nên chọn mua giò heo chân trước sẽ ngon hơn vì nhiều bắp gân, thịt chắc.</p><p>Tùy theo khẩu vị mà điều chỉnh vị ngọt, mặn cho phù hợp.</p><p>Món này nên ăn nóng sẽ giữ trọn vẹn các hương vị và sự quyến rũ từ chao.</p>', 9, 41, 18, 1, '2022-08-17 21:13:00', '2022-08-20 00:06:41'),
(807, 'Sắc màu phố biển trên huy chương VM Nha Trang', 'Sắc màu phố biển trên huy chương VM Nha Trang', 'img/H0KXi6xzK4Bkpo0M2Y1ZE6MgxegdYFCc0dqeOSMe.jpg', '2022-08-18', '<h2><strong>Sắc màu phố biển trên huy chương VM Nha Trang</strong></h2><p>Huy chương cho người chiến thắng lấy tông xanh nước biển làm chủ đạo, cùng thiết kế mang cảm hứng từ nụ trầm hương, biểu tượng của thành phố Nha Trang.</p><p>Huy chương giải chạy VnExpress Marathon Marvelous Nha Trang 2022 có kích thước 75 x 115 mm, sử dụng hiệu ứng đổi màu ấn tượng. Hình dáng tổng thể mang cảm hứng từ nụ trầm hương, một trong những biểu tượng nổi tiếng của thành phố Nha Trang.</p><p>Khối chữ \"VnExpress Marathon Marvelous Nha Trang\" in nổi ở mặt trước với hai sắc màu xanh dương - hồng rực rỡ.</p><p><picture><source srcset=\"https://i1-thethao.vnecdn.net/2022/08/18/IMG-1597-6364-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=m9HP0wovlWqFQ5j4sOVJKQ 1x, https://i1-thethao.vnecdn.net/2022/08/18/IMG-1597-6364-1660811295.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=aH5Ye7wg6hAAZlaDRxMXZA 1.5x, https://i1-thethao.vnecdn.net/2022/08/18/IMG-1597-6364-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=_nWIXtGcGpcqrpSG6mVlAg 2x\"><img src=\"https://i1-thethao.vnecdn.net/2022/08/18/IMG-1597-6364-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=m9HP0wovlWqFQ5j4sOVJKQ\" alt=\"Huy chương giải VnExpress Marathon Marvelous Nha Trang. Ảnh: VM\"></picture></p><p>Huy chương giải VnExpress Marathon Marvelous Nha Trang. Ảnh: <i>VM</i></p><p>Đường bờ biển nối dài, đèo Lương Sơn, hệ sinh thái biển - những món quà tuyệt vời thiên nhiên ban tặng cho thành phố biển Nha Trang được khắc họa rõ nét trên mặt trước của tấm huy chương. Đặc biệt, hình ảnh chim yến - loài chim \"lộc trời\" quý hiếm của vùng vịnh Nha Trang cũng được xuất hiện trên vật phẩm chiến thắng này.</p><p>Ở giữa là hình ảnh thành phố với con đường dọc biển Nha Trang, những tòa nhà cao tầng, các công trình kiến trúc mang dấu ấn nhịp sống thời đại.</p><figure class=\"image\"><picture><source srcset=\"https://i1-thethao.vnecdn.net/2022/08/18/IMG-1626-1712-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=cjoFRjgImMQIaF01YyfXig 1x, https://i1-thethao.vnecdn.net/2022/08/18/IMG-1626-1712-1660811295.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=yKbpGYdZoKCtrmFIbjZXlA 1.5x, https://i1-thethao.vnecdn.net/2022/08/18/IMG-1626-1712-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=ust7KVkRIT7x5Ljdu94ORw 2x\"><img src=\"https://i1-thethao.vnecdn.net/2022/08/18/IMG-1626-1712-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=cjoFRjgImMQIaF01YyfXig\" alt=\"Huy chương mang thông điệp về bảo vệ môi trường biển. Ảnh: VM\"></picture></figure><p>Huy chương mang thông điệp về bảo vệ môi trường biển. Ảnh: <i>VM</i></p><p>Thông qua tấm huy chương cho 8.500 vận động viên dự giải, Ban tổ chức muốn gửi gắm thông điệp chung tay bảo vệ môi trường và nguồn sống của những loài động vật quý hiếm. Vịnh Nha Trang là một trong những hình mẫu tự nhiên hiếm có của hệ thống vũng, vịnh trên thế giới với các hệ sinh thái quý hiếm. Trong đó điển hình là hệ sinh thái đất ngập nước, rạn san hô, rừng ngập mặn, thảm cỏ biển... Đây cũng là môi trường sinh trưởng ổn định cho một số loài rùa biển quý hiếm.</p><p>Huy chương cho mỗi cự ly giống nhau, chỉ khác màu dây. Vận động viên 5 km sẽ nhận huy chương có dây xanh màu đại dương, 10 km có dây màu xanh bầu trời, 21 km là dây màu đỏ, 42 km có màu tím. Tất cả vận động viên hoàn thành đường đua hợp lệ đều nhận được huy chương ngay sau vạch đích.</p><figure class=\"image\"><picture><source srcset=\"https://i1-thethao.vnecdn.net/2022/08/18/IMG-1617-6132-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=zUAgSf9wgZIRzRUilns6OQ 1x, https://i1-thethao.vnecdn.net/2022/08/18/IMG-1617-6132-1660811295.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=RgkkJnvZd6EHmeoi48xMTw 1.5x, https://i1-thethao.vnecdn.net/2022/08/18/IMG-1617-6132-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=5szKDbBefOyBkZyPoNFegA 2x\"><img src=\"https://i1-thethao.vnecdn.net/2022/08/18/IMG-1617-6132-1660811295.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=zUAgSf9wgZIRzRUilns6OQ\" alt=\"Màu dây tương ứng cho từng cự ly. Ảnh: VM\"></picture></figure><p>Màu dây tương ứng cho từng cự ly. Ảnh:<i> VM</i></p><p>VnExpress Marathon Marvelous Nha Trang diễn ra vào ngày 28/8 với 8.500 vận động viên. Trong lần đầu tiên đến với \"thiên đường du lịch\" của miền Trung, giải mang đến đường chạy đậm chất biển. Cả 4 cự ly đều sẽ chạy qua những tuyến đường ven biển đẹp, đưa người chạy khám phá vẻ đẹp nên thơ và nhịp sống sôi động của địa phương này.</p><p><strong>Thành Dương</strong></p>', 3, 41, 5, 1, '2022-08-18 06:01:06', '2022-08-20 00:08:44'),
(808, 'Cách nấu nước đậu đen thanh lọc cơ thể, giảm cân', 'Nước đậu đen không chỉ giải khát, giải độc mà còn là \'\'bí mật\'\' từ lâu của người dân Nhật Bản giúp giảm bớt lượng mỡ thừa ở cánh tay, phần bụng.', 'img/Tk8HLpHjjqoC9EXCy3FSTAPonuYWQlmu1IHwBIs0.jpg', '2022-08-18', '<h2><strong>Cách nấu nước đậu đen thanh lọc cơ thể, giảm cân</strong></h2><p>Nước đậu đen không chỉ giải khát, giải độc mà còn là \'\'bí mật\'\' từ lâu của người dân Nhật Bản giúp giảm bớt lượng mỡ thừa ở cánh tay, phần bụng.</p><p>Tác giả: <strong>Bùi Thủy</strong></p><h2><strong>Nguyên liệu</strong></h2><p>200 gr đậu đen xanh lòng</p><p>3,5 - 4 lít nước</p><h2><strong>Cách làm</strong></h2><p>Đậu đen rửa sạch, đãi bỏ hạt lép (thường nổi lên trên), rồi dàn ra mẹt thưa để phơi cho ráo nước.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-1-1-3793-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=fN2POq5nEFshudTlNzuAlA 1x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-1-1-3793-1659339316.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=-dxfW64MEcapAyVOOM90lg 1.5x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-1-1-3793-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=B6yDl_giHo9Ef0D2w9drLA 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-1-1-3793-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=fN2POq5nEFshudTlNzuAlA\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Cho đậu vào rang ở lửa nhỏ vừa, đảo thường xuyên cho các hạt đậu chín đều. Có thể dùng nồi chiên không dầu hoặc lò nướng.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-2-2-3263-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=xTGC-VsZnpY7USVeSFBd2Q 1x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-2-2-3263-1659339316.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=4mQwld9kEcQ2Gc1-Hc6XIg 1.5x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-2-2-3263-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=tHX3MmgZ-v2nL3bb9E6jYQ 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-2-2-3263-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=xTGC-VsZnpY7USVeSFBd2Q\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Sau khi rang 20 - 25 phút, hạt đậu nứt vỏ, xoa thấy vỏ bong ra, ruột vàng thơm là được.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-3-3-3861-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=nW4TTkDjH41mWbA7IsKRAA 1x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-3-3-3861-1659339316.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HOsvCvxRxYfdJXGuNrgqzQ 1.5x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-3-3-3861-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=zIf2oVgTKpvE0IwpnEjEtQ 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-3-3-3861-1659339316.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=nW4TTkDjH41mWbA7IsKRAA\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Cho đậu đã rang cùng 3,5 - 4 lít nước vào đun sôi khoảng 2 - 3 phút thì tắt bếp om 5-8 phút. Lúc này nước đậu đen có màu hơi đỏ là được. Dùng rây lọc lấy nước, bỏ bã.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-4-4-2133-1659339317.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=aPc5AF1o7WUcV2aBpxQbEg 1x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-4-4-2133-1659339317.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=LhSdEU1QcImz8ztrvDnEsQ 1.5x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-4-4-2133-1659339317.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=4mRcciUwFCjssJ4PpwcGMA 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-4-4-2133-1659339317.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=aPc5AF1o7WUcV2aBpxQbEg\" alt=\"\"></picture></figure><p>&nbsp;</p><p>Để nguội thành trà đậu đen, chia vào các hũ (lọ) thủy tinh để ngăn mát tủ lạnh dùng trong 3 - 5 ngày. Để giảm cân tốt nhất, nước đậu đen nên uống trước bữa ăn 20 - 30 với 1 cốc 150 ml.</p><figure class=\"image\"><picture><source srcset=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-5-Thanh-pham-1-6893-1659339317.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=UoSxIktspELbkeTO7Z4vSg 1x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-5-Thanh-pham-1-6893-1659339317.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=vbjDQ6V9KWPo6mG4k0-wLQ 1.5x, https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-5-Thanh-pham-1-6893-1659339317.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=YvAcWksZ0p4QkXol68rwPg 2x\"><img src=\"https://i1-giadinh.vnecdn.net/2022/08/01/Buoc-5-Thanh-pham-1-6893-1659339317.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=UoSxIktspELbkeTO7Z4vSg\" alt=\"\"></picture></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>Chú ý:</strong></p><p>Chọn đỗ đen xanh lòng tăng hương vị thơm ngon cho nước trà đậu đen.</p><p>Rang lửa nhỏ vừa, đảo thường xuyên để chín vàng đều.</p><p>Uống nước đậu đen kết hợp với thể dục, chế độ ăn nhiều rau xanh, hạn chế món ăn dầu mỡ để việc giảm cân có hiệu quả.</p>', 9, 41, 1, 1, '2022-08-18 06:11:04', '2022-08-18 09:35:43'),
(811, 'Du lịch Cần Thơ: 12 địa điểm, khu du lịch nổi tiếng', 'Cần Thơ là xứ Tây Đô với những con người chân phương và cảnh sắc miền sông nước bình dị mà cuốn hút. Đến Cần Thơ, bạn hãy cùng VNTRIP.VN khám phá 12 địa điểm du lịch không thể bỏ qua này nhé!', 'img/NOnGqWNFq5vwbFRpEpfXD6y7gC46f2wXtvRmBrSl.jpg', '2022-08-18', '<p>Cần Thơ là xứ Tây Đô với những con người chân phương và cảnh sắc miền sông nước bình dị mà cuốn hút. Đến Cần Thơ, bạn hãy cùng VNTRIP.VN khám phá 12 địa điểm du lịch không thể bỏ qua này nhé!</p><h2><strong>1. Chợ nổi Cái Răng</strong></h2><p>Nằm cách thành phố Cần Thơ khoảng 6km, <a href=\"https://www.vntrip.vn/cam-nang/cho-noi-cai-rang-o-can-tho-1196\">chợ nổi Cái Răng</a> là chợ đầu mối chuyên trao đổi, mua bán các mặt hàng nông sản, trái cây, thực phẩm, ăn uống đồng thời là địa điểm tham quan mang đậm bản sắc vùng sông nước của thành phố Cần Thơ. Điều đặc biệt của chợ là các ghe hàng trên sông đều có một cây chèo bẻo, trên đó có treo mặt hàng họ bán với mục đích “quảng cáo”. Chiếc ghe, xuống như “căn hộ di động” &nbsp;trên sông nước với đầy đủ tiện nghi, chậu cây cảnh, vật nuôi, xe gắn máy. Nếu muốn tìm hiểu cuộc sống của người thương hồ nơi đây, bạn hãy hòa mình vào không khí tấp nập của chợ nổi Cái Răng.</p><p><img src=\"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/1-3.jpg\" alt=\"Không khí tấp nập ở chợ (Nguồn sưu tầm)\"></p><p>Không khí tấp nập ở khu chợ nổi (Nguồn sưu tầm)</p><h2><strong>2. Nhà cổ Bình Thủy</strong></h2><p>Tọa lạc trên đường đường Bùi Hữu Nghĩa phường Bình Thủy, quận Bình Thủy, thành phố Cần Thơ, <a href=\"https://www.vntrip.vn/cam-nang/nha-co-binh-thuy-can-tho-35954\">nhà cổ Bình Thủy</a> được &nbsp;thiết kế với 5 gian 2 mái, mang kiến trúc thời Pháp được xây dựng năm 1870. Nhà cổ đã, đang và sẽ giữ được những giá trị văn hóa và lịch sử được lưu giữ qua dòng thời gian. Bên ngoài nhà cổ trồng nhiều cây và hoa làm không gian vừa cổ kính, vừa tươi mới.</p><p><img src=\"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/3-3.jpg\" alt=\"Bên trong địa điểm Nhà cổ (Nguồn sưu tầm)\"></p><p>Hình ảnh&nbsp;trong địa điểm Nhà cổ (Nguồn sưu tầm)</p><p><img src=\"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/2-3.jpg\" alt=\"Bên ngoài khu Nhà cổ (Nguồn sưu tầm)\"></p><p>Bên ngoài khu Nhà cổ (Nguồn sưu tầm)</p><p><strong>Một số khách sạn ở Quận Bình Thủy du khách có thể đặt ngay như:</strong></p><h2><strong>3. Bến Ninh Kiều</strong></h2><p>Đến Cần Thơ, bạn đừng quên ghé thăm <a href=\"https://www.vntrip.vn/cam-nang/ben-ninh-kieu-can-tho-1089\">bến Ninh Kiều</a> – Địa danh du lịch, văn hóa nổi tiếng của thành phố. Tọa lạc ở bờ phải sông Hậu, nằm giữa ngã ba sông Hậu và sông Cần Thơ và tiếp giáp với đường Hai Bà Trưng, quận Ninh Kiều, bến Ninh Kiều đã trở thành biểu tượng của thành phố Cần Thơ. Với vẻ đẹp nên thơ, trữ tình, bến Ninh Kiều không chỉ đi vào cuộc sống của người dân miền sông nước mà còn đi vào thơ ca và lòng người. Từ bến Ninh Kiều, du khách có thể dễ dàng đi thăm các địa điểm du lịch khác.</p><p><img src=\"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/4-3.jpg\" alt=\"Khu du lịch Bến Ninh Kiều ban ngày (Nguồn sưu tầm)\"></p><p>Khu du lịch Bến Ninh Kiều ban ngày (Nguồn sưu tầm)</p><p><img src=\"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/5-3.jpg\" alt=\"Bên Ninh Kiều ban đêm (Nguồn sưu tầm)\"></p><p>Bên Ninh Kiều ban đêm (Nguồn sưu tầm)</p><p><strong>Chọn lưu trú tại quận Ninh Kiều du khách có thể chọn một số khách sạn như:</strong></p><h2><strong>4. Làng du lịch Mỹ Khánh</strong></h2><p>Làng du lịch Mỹ Khánh được xem như một đồng bằng sông Cửu Long thu nhỏ – đây là một điểm du lịch sinh thái nổi tiếng ở Cần Thơ. Ghé qua đây, bạn hãy thưởng thức trái cây đủ loại trong miệt vườn và các món ăn đặc sản, tham quan làng nghề truyền thống và nghe câu ca hát dân ca Nam Bộ nhé!. Đồng thời bạn đừng bỏ qua các trò chơi dân gian như leo cây, nhảy bao bố, đua heo,…</p><p><img src=\"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/6-3.jpg\" alt=\"Cổng làng du lịch Mỹ Khánh (Nguồn sưu tầm)\"><br>Cổng làng du lịch Mỹ Khánh (Nguồn sưu tầm)</p><p><img src=\"https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/7-3.jpg\" alt=\"Đua heo ở làng du lịch (Nguồn sưu tầm)\"></p><p>Đua heo ở làng du lịch Cần Thơ (Nguồn sưu tầm)</p>', 3, 41, 1, 1, '2022-08-18 07:30:37', '2022-08-20 00:07:03'),
(813, 'Những người sống thọ nhất thế giới ăn sáng thế nào', 'Những người sống thọ nhất thế giới ăn sáng thế nào', 'img/GXSbxzcmIbFadggQSYUD2lVQxKaOHn5s650EhuZ5.png', '2022-08-22', '<h2><strong>Những người sống thọ nhất thế giới ăn sáng thế nào</strong></h2><p>Người dân tại các Vùng Xanh của thế giới chủ yếu ăn thực phẩm hữu cơ, thực vật, những loại ngũ cốc như lúa gạo, bột yến mạch.</p><p>Bữa sáng là bữa ăn quan trọng nhất trong ngày, chìa khóa cho cuộc sống lâu dài và khỏe mạnh. Các nhà khoa học đã nghiên cứu về chế độ ăn uống tại các \"Vùng Xanh\" của thế giới, nơi dân số hầu hết sống đến 100 tuổi trở lên để tìm hiểu bí quyết sống thọ thông qua bữa ăn đầu tiên trong ngày.</p><p>Theo chuyên gia dinh dưỡng Kim Yawitz, Viện St. Louis, Missouri, các vùng này rất khác nhau về địa lý, truyền thống văn hóa, song các nhà nghiên cứu đã xác định được 9 lối sống phổ biến giúp thúc đẩy tuổi thọ. Ba trong số đó liên quan đến chế độ ăn uống.</p><p>\"Người dân ở Vùng Xanh chủ yếu ăn đủ thức ăn để duy trì cơ thể, hầu hết calo đến từ thực vật. Họ ăn trung bình 425-560 g thịt mỗi tháng, ít hơn so với mức trung bình 10 kg tại Mỹ\", tiến sĩ Yawitz cho biết.</p><p>Sau quá trình nghiên cứu, các chuyên gia đã tìm ra những món ăn sáng phổ biến tại các Vùng Xanh của thế giới.</p><p><strong>Sữa chua Hy Lạp, mật ong và trái cây</strong></p><p>Một trong những vùng người dân sống thọ và khỏe mạnh nhất thế giới là hòn đảo Crete và Ikaria của Hy Lạp. Những năm 1950, đảo Crete là nơi tỷ lệ tuổi thọ cao nhất toàn cầu. Trong khi đó, đảo Ikaria có số người sống đến 100 tuổi nhiều nhất thế giới.</p><p>Một trong những sự thật ít người biết đến về Ikaria là phần đông người dân không ăn sáng. Người dân áp dụng chế độ \"nhịn ăn gián đoạn\" của riêng mình, phù hợp với thể trạng và đặc tính cơ thể. Có hai hình thức nhịn ăn gián đoạn chính: hạn chế thời gian ăn trong ngày (ăn từ 6-8 giờ và nhịn ăn trong 16-18 giờ còn lại) hoặc nhịn ăn liên tục trong vòng 16 đến 24 giờ, hai lần một tuần.</p><p>\"Nếu ăn sáng, họ thường ăn bữa đơn giản như sữa chua với mật ong, một số loại trái cây và bánh mì bột chua, dầu ô liu nguyên chất\", chuyên gia dinh dưỡng Bill Bradley, đồng tác giả cuốn <i>Công thức truyền thống của những người khỏe mạnh nhất trên thế giới</i>, giải thích.</p><p>Sữa chua ở khu vực này thường là sữa cừu. Đây là các động vật ăn cỏ hoặc ăn các loại trái cây dại không phun thuốc, hoàn toàn hữu cơ.</p><p>Tiến sĩ Bradley cũng chỉ ra rằng ăn theo chế độ Địa Trung Hải sẽ tăng tuổi thọ lên đến 13 năm. Sử dụng thực phẩm hữu cơ, không pha tạp chất cũng tốt cho sức khỏe.</p><p><picture><source srcset=\"https://i1-suckhoe.vnecdn.net/2022/08/20/su-a-chua-1660968436-1784-1660968570.png?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=C_oXYJpU02lKarRBp40u0Q 1x, https://i1-suckhoe.vnecdn.net/2022/08/20/su-a-chua-1660968436-1784-1660968570.png?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=cCK21voeUepcKiQ1vNfojw 1.5x, https://i1-suckhoe.vnecdn.net/2022/08/20/su-a-chua-1660968436-1784-1660968570.png?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=L5EJ2ap5FMWZPrTIUGBnSA 2x\"><img src=\"https://i1-suckhoe.vnecdn.net/2022/08/20/su-a-chua-1660968436-1784-1660968570.png?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=C_oXYJpU02lKarRBp40u0Q\" alt=\"Sữa chua ăn kèm mật ong, hạnh nhân và trái cây. Ảnh: Shutterstock\"></picture></p><p>Sữa chua ăn kèm mật ong, hạnh nhân và trái cây. Ảnh: <i>Shutterstock</i></p><p><strong>Súp miso, rong biển, natto và đồ tươi sống</strong></p><p>Một Vùng Xanh khác của thế giới là tỉnh Okinawa, Nhật Bản. Tỷ lệ ung thư, mất trí và bệnh tim mạch tại những hòn đảo thuộc tỉnh Okinawa thấp. Phái đẹp Okinama cũng là những phụ nữ sống thọ nhất thế giới.</p><p>\"Bữa sáng truyền thống của người Okinama được chia thành các món nhỏ, với nhiều loại thực phẩm lên men, tươi sống và rong biển. Các thành phần nổi bật trong bữa sáng của dân tỉnh này là súp miso, natto và rong biển\", tiến sĩ Yawitz cho biết.</p><p>Miso được làm từ đậu nành, gạo, lúa mạch, trải qua giai đoạn lên men cùng với muối và nấm kōjikin để tạo thành nước sốt đặc sánh. Natto cũng có thành phần chính là đậu nành lên men, tạo thành hỗn hợp dai, dính và có mùi hăng.</p><p>Trích dẫn nghiên cứu công bố trên Tạp chí Y khoa Anh, tiến sĩ Yawitz cho biết các sản phẩm từ đậu nành lên men có thể giúp giảm nguy cơ tử vong sớm. trong nghiên cứu, người thường xuyên ăn natto có tỷ lệ tử vong vì bệnh tim mạch thấp hơn 24% so với người không ăn thường xuyên.</p><p>\"Mozuku, kombu và các loại rong biển khác có tác dụng tương tự. Hai khảo sát lớn gần đây cũng chỉ ra rằng ăn nhiều rong biển có thể làm giảm nguy cơ tử vong vì bệnh tim và đột quỵ\", Yawitz nói.</p><p><strong>Bột yến mạch, các loại hạt, siro cây phong</strong></p><p>Người dân vùng Loma Linda, California, Mỹ nổi tiếng với tuổi thọ cao. Là một phần truyền thống tôn giáo, họ chủ yếu ăn chay.</p><p>Bữa sáng chính của khu vực này gồm thịt lợn và ngũ cốc, yến mạch. \"Họ cũng thường ăn cháo yến mạch hoặc granola làm từ yến mạch, siro cây phong và các loại hạt\", Bradley chia sẻ.</p><p>Ông lưu ý yến mạch là thực phẩm cực kỳ bổ dưỡng, đã được chứng minh công dụng phòng ngừa bệnh tim mạch. Yến mạch chứa nhiều vitamin E, B6, B5 cùng khoáng chất như sắt, selen, magiê và đồng. Yến mạch giúp ngăn ngừa táo bón, kiểm soát lượng đường trong máu, giảm nguy cơ tiểu đường type 2, giảm ung thư, huyết áp, hỗ trợ giảm cân.</p><p><strong>Trứng, bánh mì bột chua và dầu ô liu</strong></p><p>Dầu ô liu có hàm lượng chất kháng viêm cao, tốt cho sức khỏe. Trong khi đó, trứng tại các Vùng Xanh là từ gà ăn các loại thảo mộc như rau lang. Vì vậy, trứng gà chứa nhiều axit béo omega-3 chống viêm.</p><p>Một số nhà khoa học tin rằng lượng lớn omega-3 mà người dân đảo Ikaria và Crete hấp thụ mỗi ngày là chìa khóa kéo dài tuổi thọ, nâng cao sức khỏe.</p><p>\"Người dân sống lâu như vậy là do ăn các thực phẩm tự trồng, chế độ hàng ngày dựa trên thực vật\", tiến sĩ Bradley nhận định.</p>', 79, 41, 3, 1, '2022-08-21 10:58:04', '2022-08-21 11:00:40'),
(814, 'Cách ăn bánh trung thu không lo béo', 'Cách ăn bánh trung thu không lo béo', 'img/2N4pcTjrh2TTZTIBTlWgr1Soo8Ak3YevZGbocLho.jpg', '2022-08-22', '<h2><strong>Cách ăn bánh trung thu không lo béo</strong></h2><p>Lựa chọn bánh theo loại vỏ, nhân, thành phần; ăn kèm trà xanh hoặc trà bạc hà; tự làm bánh là cách để kiểm soát cân nặng.</p><p>Trung bình, một chiếc bánh trung thu nhân trứng muối chứa 790 calo, gấp 5 lần bát cơm vừa và 2,5 lần tô phở bò. Để tiêu thụ hết lượng calo này, mỗi người cần chạy bộ khoảng 2,5 giờ. Đối với những người không có thói quen vận động mạnh hoặc tập thể dục hàng ngày, đây là thử thách lớn. Các chuyên gia đã đưa ra một số phương pháp đơn giản để thưởng thức bánh trung thu mà vẫn có thể kiểm soát cân nặng.</p><p><strong>Lựa chọn loại bánh và thành phần</strong></p><p>Các loại bánh trung thu phổ biến nhất hiện nay là bánh nướng, bánh dẻo truyền thống, bánh ngàn lớp. Theo các chuyên gia, bánh nướng và bánh dẻo được coi là \"tốt cho sức khỏe\" hơn so với bánh ngàn lớp. Lý do là bánh trung thu ngàn lớp thường có nhân khoai mỡ, được làm bằng cách cán xen kẽ các lớp dầu và bột bánh đã được chiên qua. Do đó, đây là loại bánh có nhiều chất béo nhất.</p><p>Tiến sĩ Bibi Chia, chuyên gia dinh dưỡng chính tại Trung tâm Nội tiết và Tiểu đường Raffles, cho biết các gia đình nên lựa chọn bánh trung thu dựa trên thành phần. Các nguyên liệu thường được liệt kê trên bao bì theo thứ tự tỷ lệ phần trăm từ cao nhất đến thấp nhất.</p><p>\"Chọn bánh trung thu ít đường hoặc không đường nếu bạn muốn giảm thiểu lượng calo nạp vào cơ thể. Bỏ qua những loại có lòng đỏ trứng muối để giảm lượng natri\", tiến sĩ Chia cho biết.</p><p>Điều này rất quan trọng đối với những người mắc bệnh tiểu đường, có lượng cholesterol trong máu cao và gặp tình trạng thừa cân, béo phì.</p><p>Bên cạnh đó, mọi người cần xem kỹ hạn sử dụng trên bao bì hoặc hỏi người bán lẻ (nếu đó là loại bánh \"nhà làm\"). Bánh trung thu cần một khoảng thời gian để \"xuống dầu\", vì vậy thời hạn sử dụng càng lâu, lượng chất béo chuyển hóa, đường và chất bảo quản trong đó càng tăng.</p><p>Kết cấu của bánh cũng là yếu tố quan trọng quyết định hàm lượng calo. Vỏ bánh trung thu càng mềm, mịn thì càng có nhiều chất béo.</p><p><strong>Ăn bánh trung thu kèm trà xanh hoặc trà bạc hà</strong></p><p>Trà xanh và trà bạc hà có thể giúp đẩy nhanh quá trình chuyển hóa đường và làm giảm vị béo ngọt, rất phù hợp để ăn chung với bánh trung thu. Tuy nhiên, các chuyên gia cho biết chỉ nên uống trà ấm (nhiệt độ nước dưới 70 độ C) để không phá hủy lượng vitamin C và axit catechin có trong lá trà.</p><p>Theo nghiên cứu về các loại thuốc cổ truyền Trung Quốc, cả trà xanh và trà bạc hà đều có tính hàn, vì vậy những người gặp vấn đề về dạ dày không nên uống quá nhiều.</p><p><picture><source srcset=\"https://i1-suckhoe.vnecdn.net/2022/08/18/130144774-l-2-jpeg-1660811256-8087-1660811400.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=sHzer9PWzSovucKzU2U0gA 1x, https://i1-suckhoe.vnecdn.net/2022/08/18/130144774-l-2-jpeg-1660811256-8087-1660811400.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=-_SR2bvTxTg5DtdB7WYpVg 1.5x, https://i1-suckhoe.vnecdn.net/2022/08/18/130144774-l-2-jpeg-1660811256-8087-1660811400.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=3z5dOEKEQCcv4qLxXgYb3Q 2x\"><img src=\"https://i1-suckhoe.vnecdn.net/2022/08/18/130144774-l-2-jpeg-1660811256-8087-1660811400.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=sHzer9PWzSovucKzU2U0gA\" alt=\"Bánh Trung thu cổ truyền. Ảnh: Bake From Scratch\"></picture></p><p>Bánh Trung thu cổ truyền. Ảnh: <i>Bake From Scratch</i></p><p><strong>Ăn bánh trung thu vào bữa sáng</strong></p><p>Vì lượng calo cao, các chuyên gia khuyến khích các gia đình sử dụng bánh trung thu làm bữa sáng. Đây là thời điểm cơ thể người cần nạp nhiều năng lượng nhất sau một đêm. Bánh trung thu ăn kèm sữa hoặc sữa đậu nành, hoa quả là một lựa chọn phù hợp cho những ngày sắp tới.</p><p><strong>Kiểm soát khẩu phần ăn</strong></p><p>Bánh trung thu chứa lượng đường và dầu ăn cao. Theo nghiên cứu, cứ 100g bánh có thể cung cấp khoảng 20% năng lượng mà một người trưởng thành tiêu thụ trong ngày. Vì vậy, nếu không muốn tăng cân, các chuyên gia khuyến cáo không nên ăn quá 100g bánh trung thu một ngày.</p><p>Thông thường, bánh trung thu cỡ lớn điển hình chứa khoảng 700 calo, một số thậm chí chứa gần 1.000 calo. Ví dụ, bánh trung thu nhân hạt sen chứa 716 calo. Theo Ủy ban Nâng cao Sức khỏe, bánh dẻo lạnh nhân sen có tới hơn 900 calo.</p><p>Nếu sử dụng bánh trung thu làm bữa phụ, các chuyên gia hầu hết khuyến nghị giới hạn lượng calo tiêu thụ ở mức 100 calo, khoảng một phần 8 chiếc bánh trung bình.</p><p>Mỗi người cần kiểm soát khẩu phần ăn và tập thể dục nhiều hơn. Những ngày gần tết Trung thu sẽ là dịp để các địa phương tổ chức nhiều sự kiện, triển lãm, nhạc hội và các hoạt động như thả đèn. Các chuyên gia khuyến nghị người dân tích cực tham gia hoạt động, đi dạo để giảm lượng calo đã nạp vào cơ thể.</p>', 79, 41, 0, 1, '2022-08-21 11:00:13', '2022-08-21 11:00:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vai_tro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `urlHinh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `vai_tro`, `urlHinh`) VALUES
(39, 'Hà Quang Dự', 'quangdu2082k2@gmail.com', NULL, '$2y$10$xgIV3nDMsw7Zu14mgJbvbur.8Z0yGIWrZeWpzuJVZYhg7m4WIkxHq', 'QdhdOycR4D3wN83JayvQVGg4FV6SlsulxJPiYRiV0gRt46b8MBheQpZPa3I3', '2022-08-17 18:53:53', '2022-08-19 22:18:08', '0', 'img/1CCfEnNWwTZdGVsHy4dvzSLmECBY2R2ba7ErXg9X.png'),
(41, 'Admin', 'admin@gmail.com', NULL, '$2y$10$9AaR.H2WD/i6Z/DB6lwdYu7dZqgm9pbjklegRSGCZ4zxv6Isx.hvO', NULL, '2022-08-18 07:20:10', '2022-08-19 13:51:54', '1', 'img/bq3phHljrzvay8APK2y1ukW0hZEB6Oi7e6r1USFi.jpg'),
(42, 'Chi cảm Cúm', 'chi@gmail.com', NULL, '$2y$10$OwJnRmTUmSkIz6DXOJJVPOJ5GrMYthcg1qWDHNH/TQyphljD3eeGy', NULL, '2022-08-19 01:22:59', '2022-08-19 01:22:59', '0', 'img/1WHjkyKaRgrtftQNJPMrymzxTuRaylXbMU6vKWQN.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anhien`
--
ALTER TABLE `anhien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=815;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
