-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 05:27 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `animelaravel`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2019_08_19_000000_create_failed_jobs_table', 1),
(40, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(41, '2021_10_30_025220_create_tbl_admin_table', 1),
(42, '2021_10_30_153801_create_tbl_category_product', 1),
(43, '2021_11_01_025808_create_tbl_product', 1),
(44, '2021_11_01_163024_create_tbl_bloger', 1),
(45, '2021_11_01_163613_create_tbl_comment', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_used_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'sky@gmail.com', '3822b8c79e45a710aef77553e18f892f', 'Sky Nguyen', '099999999', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bloger`
--

CREATE TABLE `tbl_bloger` (
  `bloger_id` int(10) UNSIGNED NOT NULL,
  `bloger_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloger_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloger_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloger_avt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bloger_status` int(11) DEFAULT NULL,
  `bloger_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bloger`
--

INSERT INTO `tbl_bloger` (`bloger_id`, `bloger_name`, `bloger_email`, `bloger_password`, `bloger_avt`, `remember_token`, `created_at`, `updated_at`, `bloger_status`, `bloger_desc`) VALUES
(1, 'Ken', 'ken@gmail.com', '3822b8c79e45a710aef77553e18f892f', 'ken.jpg', 'dddd', NULL, NULL, 0, ''),
(14, 'Sky', 'sky@gmail.com', '480', 'tanjiro87.jpg', NULL, NULL, NULL, 0, ''),
(15, 'Ngao', 'ngao@gmail.com', '480', 'gin175.jpg', NULL, NULL, NULL, 0, ''),
(18, 'MTP', 'mtp@gmail.com', '480', 'tanjiro79.jpg', NULL, NULL, NULL, NULL, NULL),
(19, 'Sky Nguyễn', 'skynguyen@gmail.com', '480', 'todoroki97.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_product_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_category_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_product_status` int(11) NOT NULL,
  `category_product_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_product_keywords`, `category_product_name`, `slug_category_product`, `category_product_desc`, `category_product_status`, `category_product_icon`, `created_at`, `updated_at`) VALUES
(2, 'movie', 'Movie', 'movie', 'dede', 0, 'ti-video-clapper', NULL, NULL),
(3, 'action', 'Action', 'action', 'action', 0, 'ti-desktop', NULL, NULL),
(4, 'school', 'School', 'school', 'hummm', 0, 'ti-ruler-pencil', NULL, NULL),
(5, 'magic', 'Magic', 'magic', 'magic', 0, 'ti-wand', NULL, NULL),
(6, 'sport', 'Sport', 'sport', 'sport', 0, 'ti-medall-alt', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `bloger_id` int(11) NOT NULL,
  `comment_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_product_id` int(11) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `bloger_id`, `comment_content`, `created_at`, `updated_at`, `comment_product_id`, `comment_date`) VALUES
(1, 18, 'vai ca dai', NULL, NULL, 9, '2021-11-25 14:58:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `bloger_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `bloger_id`, `product_name`, `product_time`, `product_content`, `product_img`, `created_at`, `updated_at`, `product_desc`, `product_status`) VALUES
(8, 3, 19, 'Dragon Ball', '5', 'Dragon Ball (ドラゴンボール Doragon Bōru?) là bộ truyện tranh nhiều tập được viết và vẽ minh họa bởi Toriyama Akira. Loạt truyện tranh bắt đầu xuất bản hàng tuần trong tạp chí Weekly Shōnen Jump từ năm 1984 đến 1995 với 519 chương và sau đó được xuất bản trong 42 tập truyện dày bởi nhà xuất bản Shueisha. Sau 20 năm dừng sáng tác, từ năm 2015, tác giả Toriyama Akira đã tiếp tục sáng tác bộ truyện Dragon Ball Super, với nội dung tiếp nối bộ truyện gốc.\r\n\r\nDragon Ball là bộ truyện nổi tiếng và phổ biến rộng rãi bậc nhất trên toàn thế giới, là một trong những bộ manga được tiêu thụ nhiều nhất mọi thời đại.\r\n\r\nTương phản với tiểu thuyết Tây du ký của Trung Quốc, loạt truyện mô tả cuộc hành trình của Son Goku từ lúc bé đến trưởng thành, qua các lần tầm sư học võ và khám phá thế giới để truy tìm các viên ngọc rồng với điều ước từ rồng thiêng. Xuyên suốt hành trình của Son Goku, cậu đã gặp được nhiều bạn bè và chống lại những kẻ hung ác có âm mưu dùng điều ước từ rồng thiêng để làm bá chủ thế giới.', 'drgball70.jpg', NULL, NULL, NULL, '0'),
(9, 3, 19, 'Naruto', '5.phút', ' Naruto[a] là xê-ri manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và có ước mơ trở thành Hokage lãnh đạo làng. Câu chuyện được kể trong hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên và phần thứ hai là ở tuổi thiếu niên của Naruto. Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).\r\n\r\n    Naruto được đăng tải trên Weekly Shōnen Jump, tạp chí của Shueisha từ năm 1999 đến 2014, và được đóng gói dưới dạng tankōbon với 72 tập. Manga được chuyển thể thành một xê-ri anime do Pierrot và Aniplex đồng sản xuất, có tổng cộng 220 tập phát sóng tại Nhật Bản từ 2002 đến 2007; chuyển thể tiếng Anh của xê-ri được phát sóng trên Cartoon Network và YTV từ 2005 đến 2009 còn phiên bản lồng tiếng Việt của xê-ri được phát sóng trên HTV3 từ 2014 đến 2016 và POPS Worldwide phát hành trên nền tảng kỹ thuật số với bản lồng tiếng Việt mới từ tháng 12 năm 2020. Phần tiếp theo của xê-ri, Naruto: Shippuden, bắt đầu ra mắt tại Nhật Bản từ 2007 và kết thúc vào năm 2017, sau 500 tập. Chuyển thể tiếng Anh được phát sóng trên Disney XD từ 2009 đến 2011 với 98 tập đầu, và sau đó được chuyển đến khung giờ Toonami của kênh Adult Swim vào tháng 1 năm 2014, bắt đầu từ tập một. Chuyển thể tiếng Anh vẫn tiếp tục phát sóng hàng tuần trên Adult Swim. Phiên bản lồng tiếng Việt của xê-ri được phát sóng trên HTV3 trong năm 2016 và 2017 với 196 tập đầu. Bên cạnh xê-ri anime, Pierrot đồng thời phát triển mười một phim điện ảnh và mười hai OVA. Các nhượng quyền thương hiệu khác liên quan đến Naruto bao gồm light novel, trò chơi video và trading card được phát triển bởi những công ty khác nhau.\r\n    \r\n    Viz Media cấp phép sản xuất manga và anime tại Bắc Mỹ và đăng tải Naruto trên tạp chí Weekly Shonen Jump kỹ thuật số của họ. Xê-ri anime bắt đầu phát sóng tại Hoa Kỳ và Canada từ 2005 còn tại Anh Quốc và Australia tương ứng vào 2006 và 2007. Các phim điện ảnh và hầu hết các OVA từ xê-ri đều được phát hành bởi Viz,với phần phim đầu tiên được trình chiếu rạp. Viz Media bắt đầu stream hai xê-ri anime trên dịch vụ streaming của họ Neon Alley vào tháng 12 năm 2012. Chuyện của Naruto vẫn tiếp tục cho đến đời con của Naruto, Uzumaki Boruto, trong Boruto: Naruto Next Generations: Boruto ước nguyện đi theo theo con đường ninja riêng chính mình thay vì dựa dẫm vào cha mình.\r\n    \r\n    Naruto nằm ở vị trí thứ tư trong danh sách manga bán chạy nhất, bán được 250 triệu bản trên toàn thế giới, với 153 triệu bản được bán ra chỉ tính riêng ở Nhật Bản và 97 triệu bản còn lại là ở những nơi khác. Tác phẩm trở thành một trong những xê-ri manga bán chạy nhất của Viz Media; các bản dịch tiếng Anh của tập truyện nhiều lần xuất hiện trong danh sách bán chạy nhất của USA Today và The New York Times, và tập thứ bảy giảnh được giải Quill Award vào năm 2006. Được các nhà phê bình đánh giá tích cực về sự phát triển nhân vật của manga, cốt truyện mạnh mẽ, các cảnh chiến đấu được thực hiện khá tốt, mặc dù các cảnh đánh nhau làm chậm nhịp câu chuyện. Giới chuyên môn còn nhấn mạnh rằng manga, mang chủ đề tuổi thành niên, sử dụng các tham chiếu văn hóa từ thần thoại Nhật Bản và Nho giáo.', 'posternaruto41.jpg', NULL, NULL, NULL, '0'),
(17, 3, 14, 'Onepunch Man', '5.phút', 'Your Name – Tên cậu là gì? (Nhật: 君きみの名なは。 Hepburn: Kimi no Na wa.?, Tựa tiếng Anh: Your Name), rút ngắn thành \"Your Name\", là một bộ phim điện ảnh hoạt hình Nhật Bản thuộc thể loại tình cảm lãng mạn, kỳ ảo, chính kịch do Shinkai Makoto đạo diễn, được chuyển thể thành tiểu thuyết cùng tên của ông.[4] Phim do hãng CoMix Wave Films sản xuất và Toho phát hành.[5] Mảng thiết kế nhân vật do Tanaka Masayoshi thực hiện, phần hoạt hình do Ando Masashi chịu trách nhiệm,[6] còn ban nhạc J-rock RADWIMPS phụ trách phần âm nhạc. Bộ phim kể về Mitsuha - một nữ sinh trung học buồn chán với cuộc sống tẻ nhạt ở vùng thôn quê và Taki - một chàng trai Tokyo - vì một lý do nào đó bị hoán đổi cơ thể trong khi sao chổi thiên niên kỉ đang đến gần. Phim công chiếu lần đầu tại hội nghị Anime Expo 2016 tổ chức tại Los Angeles, bang California, Hoa Kỳ vào ngày 3 tháng 7 năm 2016 sau đó công chiếu tại Nhật Bản vào ngày 26 tháng 8 năm 2016.[7][8][9] Bộ phim bắt đầu khởi chiếu tại Việt Nam từ ngày 13 tháng 1 năm 2017.[10]\r\n\r\nSau khi phát hành, Your Name – Tên cậu là gì? đã được giới phê bình khen ngợi nhiệt liệt cho cốt truyện và hình ảnh, và cùng với đạo diễn Makoto và nhóm nhạc RADWIMPS, đã giành được nhiều đề cử và giải thưởng tại Nhật Bản và cả trên thế giới, bao gồm giải thưởng của Hiệp hội phê bình phim Los Angeles cho phim hoạt hình xuất sắc nhất và giải thưởng Kịch bản xuất sắc nhất 2016 của Viện Hàn lâm Nhật Bản.', 'onepunch32.webp', NULL, NULL, NULL, '0'),
(22, 3, 18, 'Fairy Tail', '5.phút', 'Fairy Tail (フェアリーテイル Fearī Teiru?) là seri manga Nhật Bản do Mashima Hiro sáng tác. Bộ truyện được đăng dài kì trên tạp chí Weekly Shōnen Magazine từ ngày 2 tháng 8 năm 2006 và được Kodansha xuất bản thành 43 tập tankōbon tính đến tháng 5 năm 2014. Một loạt anime đã được A-1 Pictures và Satelight sản xuất, bắt đầu phát sóng tại Nhật Bản vào ngày 12 tháng 10 năm 2009[2], cùng với 6 OVA. Sê-ri theo sau những cuộc phiêu lưu của Lucy Heartfilia, một pháp sư trẻ tham gia hội pháp sư Fairy Tail và lập nhóm với Natsu Dragneel khi cậu đanh tìm kiếm một con rồng tên Igneel. Một phim anime tên Fairy Tail the Movie: The Phoenix Priestess được chuyển thể từ bộ truyện và được công chiếu vào ngày 18 tháng 8 năm 2012.\r\n\r\nLoạt truyện ban đầu được cấp giấy phép cho bản tiếng Anh ở Bắc Mỹ bởi Del Rey Manga, bắt đầu phát hành từng volume riêng từ ngày 25 tháng 3 năm 2008 và kết thúc với việc phát hành vol 12 vào tháng 9 năm 2010. Loạt truyện sau đó được tiếp tục phát hành bởi Kodansha USA Publishing ở Bắc Mỹ [3]. Mạng Animax Asia của Đông Nam Á phát sóng một phiên bản tiếng Anh của hai mùa anime từ 2010 đến 2012 [4][5]. Anime được cấp phép bởi Funimation Entertainment cho một bản phát hành tiếng Anh ở Bắc Mỹ [6].', 'posterFrt84.jpg', NULL, NULL, NULL, '0'),
(24, 3, 19, 'Onepice', '5.phút', 'One Piece (ワンピース Wan Pīsu?), từng được xuất bản tại Việt Nam dưới tên gọi Đảo Hải Tặc là bộ manga dành cho lứa tuổi thiếu niên của tác giả Oda Eiichiro, được đăng định kì trên tạp chí Weekly Shōnen Jump, ra mắt lần đầu trên ấn bản số 34 vào ngày 19 tháng 7 năm 1997. Bản tankōbon của truyện do Shueisha phát hành với tập đầu tiên vào ngày 24 tháng 12 năm 1997. One Piece kể về cuộc hành trình của Monkey D. Luffy - thuyền trưởng của băng hải tặc Mũ Rơm và các đồng đội của cậu. Luffy tìm kiếm vùng biển bí ẩn nơi cất giữ kho báu lớn nhất thế giới One Piece, với mục tiêu trở thành Tân Vua Hải Tặc.', 'posteronp10.jpg', NULL, NULL, NULL, '0'),
(25, 3, 19, 'yato', '5.phút', 'One Piece (ワンピース Wan Pīsu?), từng được xuất bản tại Việt Nam dưới tên gọi Đảo Hải Tặc là bộ manga dành cho lứa tuổi thiếu niên của tác giả Oda Eiichiro, được đăng định kì trên tạp chí Weekly Shōnen Jump, ra mắt lần đầu trên ấn bản số 34 vào ngày 19 tháng 7 năm 1997. Bản tankōbon của truyện do Shueisha phát hành với tập đầu tiên vào ngày 24 tháng 12 năm 1997. One Piece kể về cuộc hành trình của Monkey D. Luffy - thuyền trưởng của băng hải tặc Mũ Rơm và các đồng đội của cậu. Luffy tìm kiếm vùng biển bí ẩn nơi cất giữ kho báu lớn nhất thế giới One Piece, với mục tiêu trở thành Tân Vua Hải Tặc.', 'posteronp78.jpg', NULL, NULL, NULL, '0'),
(26, 3, 18, 'Onepice', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto58.jpg', NULL, NULL, NULL, '0'),
(27, 3, 18, 'Onepice', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto53.jpg', NULL, NULL, NULL, '0'),
(28, 3, 18, 'yato', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto28.jpg', NULL, NULL, NULL, '0'),
(29, 3, 18, 'Fairy Tail', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto82.jpg', NULL, NULL, NULL, '0'),
(30, 3, 18, 'Onepice', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto99.jpg', NULL, NULL, NULL, '0'),
(31, 3, 18, 'Fairy Tail', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto18.jpg', NULL, NULL, NULL, '0'),
(32, 3, 18, 'Onepice', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto91.jpg', NULL, NULL, NULL, '0'),
(33, 3, 18, 'yato', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto3.jpg', NULL, NULL, NULL, '0'),
(34, 3, 18, 'Onepice', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto52.jpg', NULL, NULL, NULL, '0'),
(35, 3, 18, 'huhu', '5.phút', 'Naruto[a] là một chuỗi manga được sáng tác bởi Kishimoto Masashi. Tác phẩm kể về Uzumaki Naruto, một ninja trẻ luôn muốn tìm cách khẳng định mình để được mọi người công nhận và nuôi ước mơ trở thành Hokage lãnh đạo làng. Cốt truyện được chia làm hai phần – phần đầu lấy bối cảnh vài năm trước tuổi thiếu niên (Naruto: Dattebayo) và phần thứ hai là ở tuổi thiếu niên của Naruto (Naruto: Shippuden). Series dựa trên hai Yomikiri của Kishimoto: Karakuri (1995), đã giúp Kishimoto đạt danh hiệu Hop Step Award hàng tháng của Shueisha ở những năm tiếp theo, và Naruto (1997).', 'posternaruto6.jpg', NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_bloger`
--
ALTER TABLE `tbl_bloger`
  ADD PRIMARY KEY (`bloger_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_bloger`
--
ALTER TABLE `tbl_bloger`
  MODIFY `bloger_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
