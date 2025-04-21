-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 21, 2025 lúc 04:19 PM
-- Phiên bản máy phục vụ: 10.6.20-MariaDB-cll-lve-log
-- Phiên bản PHP: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rbgdcnwyhosting_manager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky`
--

CREATE TABLE `dang_ky` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `diachi` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngay_dang_ky` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `departure` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(500) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `slug` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `title`, `duration`, `departure`, `price`, `image_url`, `category_id`, `slug`) VALUES
(1, 'TOUR HOKKAIDO 3N2Đ', '3 Ngày 2 Đêm', 'Ikebukuro - Tokyo', 10184220.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-hokkaido-300x169.png', 3, 'https://hktraveljapan.jp/tour/tour-hokkaido-3n2d-4570.html'),
(2, 'TOUR TOKYO – HAKONE – IZU', '2 Ngày 1 Đêm', 'Ikebukuro - Tokyo', 6380000.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-shirahama-300x169.png', 3, 'https://hktraveljapan.jp/tour/lich-trinh-tour-tokyo-hakone-izu-4559.html'),
(3, 'Cung Đường Vàng 3 Ngày 2 Đêm', '3 Ngày 2 Đêm', 'Ikebukuro - Tokyo', 9900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-osaka-300x169.png', 3, 'https://hktraveljapan.jp/tour/cung-duong-vang-3n2d-4546.html'),
(4, 'TOUR MÙA THU - KAMIKOCHI HAKUBA', '2 ngày 1 đêm', 'TOKYO - YOKOHAMA', 4949840.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-tour-mua-thu-kamikochi-hakuba-1-300x169.jpg', 3, 'https://hktraveljapan.jp/tour/tour-mua-thu-kamikochi-hakuba-4400.html'),
(5, 'TOUR PHÚ SĨ – LÀNG CỪU MAKAINO', '1 NGÀY', 'IKEBUKURO - TOKYO', 2280460.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/05/hktravel-20160401t-makaino-zenkei-300x169.jpg', 4, 'https://hktraveljapan.jp/tour/tour-phu-si-lang-cuu-makaino-4650.html'),
(6, 'TOUR CHINH PHỤC NÚI PHÚ SĨ', '2 Ngày 1 Đêm', 'Ikebukuro - Tokyo', 3936680.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-leo-nui-phu-si-300x169.png', 4, 'https://hktraveljapan.jp/tour/tour-chinh-phuc-nui-phu-si-4589.html'),
(7, 'TOUR MÙA THU NIKKO', '2 ngày 1 đêm', 'TOKYO - YOKYOHAMA', 6158295.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-tour-mua-thu-nikko-300x169.png', 4, 'https://hktraveljapan.jp/tour/tour-mua-thu-nikko-4403.html'),
(8, 'THIÊN ĐƯỜNG CỎ KOCHIA', 'Trong Ngày', 'TOYKO-YOKOHAMA', 2567400.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-thien-duong-co-kochia-300x169.png', 4, 'https://hktraveljapan.jp/tour/thien-duong-co-kochia-4397.html'),
(9, 'Du lịch Nhật Bản mùa thu 5N4Đ tháng 5', '5 Ngày 4 Đêm', 'Sân Bay Nội Bài', 23900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/04/hktravel-osaka-castle-74190-5287-300x169.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-thu-5n4d-thang-5-5730.html'),
(10, 'Tour du lịch Nhật Bản mùa thu rực rỡ 5N5Đ tháng 5', '5 Ngày 5 Đêm', 'Sân bay Tân Sơn Nhất', 29900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/04/hktravel-lovepik-com-500703396-japans-cabinet-temple-300x169.jpg', 1, 'https://hktraveljapan.jp/tour/tour-du-lich-nhat-ban-mua-thu-ruc-ro-5n5d-thang-5-5714.html'),
(11, 'Du lịch Nhật Bản mùa lễ hội Fuji Shibazakura 5N5Đ Tháng 5', '5 Ngày 5 Đêm', 'Sân bay Tân Sơn Nhất', 29900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/04/hktravel-kinkakuji-temple-golden-pavilion-kyoto-japan-1232-2316-300x169.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-le-hoi-fuji-shibazakura-5n5d-thang-5-5712.html'),
(12, 'Cung đường hoa tử đằng Nhật Bản kỳ nghỉ lễ 30/04 – 01/05', '6 ngày 5 đêm', 'Sân bay Nội Bài', 38900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/04/hktravel-fuji-mountain-boat-kawaguchiko-lake-japan-335224-105.jpg', 1, 'https://hktraveljapan.jp/tour/cung-duong-hoa-tu-dang-nhat-ban-ky-nghi-le-30-04-01-05-5710.html/'),
(13, 'Du lịch Nhật Bản dịp lễ 30/04 – 01/05', '6 ngày 5 đêm', 'Sân bay Nội Bài', 38900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/04/hktravel-cang-kobe.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-dip-le-30-04-01-05-5707.html/'),
(14, 'Tour du lịch mùa hoa tử đằng dịp lễ 30/04 – 01/05', '6 ngày 5 đêm', 'Sân bay Nội Bài', 32900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/04/hktravel-487285232-1107182521450377-8002236044259415620-n-1.jpg', 1, 'https://hktraveljapan.jp/tour/tour-du-lich-mua-hoa-tu-dang-dip-le-30-04-01-05-5703.html/'),
(15, 'Tour du lịch 6N5Đ tại Osaka – Kyoto – Phú Sĩ – Tokyo tháng 4 siêu ưu đãi', '6 ngày 5 đêm', 'Sân bay Nội Bài', 32900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-486644278-1106363621532267-2969097170024130828-n.jpg', 1, 'https://hktraveljapan.jp/tour/tour-du-lich-6n5d-tai-osaka-kyoto-phu-si-tokyo-thang-4-sieu-uu-dai-5697.html/'),
(16, 'Tour du lịch tham quan Tokyo 5N4Đ siêu hấp dẫn tháng 4', '5 ngày 4 đêm', 'Sân bay Nội Bài', 23900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-476648581-122146897700390839-6710766819728801252-n.jpg', 1, 'https://hktraveljapan.jp/tour/tour-du-lich-tham-quan-tokyo-5n4d-sieu-hap-dan-thang-4-5690.html/'),
(17, 'Tour mùa xuân Nhật Bản 6N5Đ tháng 4/2025', '6 ngày 5 đêm', 'Sân bay Nội Bài', 34900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-screenshot-1743411107.png', 1, 'https://hktraveljapan.jp/tour/tour-mua-xuan-nhat-ban-6n5d-thang-4-2025-5686.html/'),
(18, 'Du xuân Nhật Bản: Hà Nội – Osaka – Kyoto – Phú Sĩ – Tokyo 6N5Đ Tháng 4', '6 ngày 5 đêm', 'Sân bay Nội Bài', 32900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-screenshot-1743411107.png', 1, 'https://hktraveljapan.jp/tour/du-xuan-nhat-ban-ha-noi-osaka-kyoto-phu-si-tokyo-6n5d-thang-4-5678.html/'),
(19, 'Tour du lịch Nhật Bản mùa hoa anh đào tháng 4', '6 ngày 5 đêm', 'Sân bay Nội Bài', 38900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-screenshot-1743409699.png', 1, 'https://hktraveljapan.jp/tour/tour-du-lich-nhat-ban-mua-hoa-anh-dao-thang-4-5668.html/'),
(20, 'Du lịch ngắm hoa chi anh, hoa tử đằng dịp lễ 30/04 – 01/05', '5 ngày 5 đêm', 'Sân bay Tân Sơn Nhất', 39900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-shibazakura-4.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-ngam-hoa-chi-anh-hoa-tu-dang-dip-le-30-04-01-05-5664.html/'),
(21, 'Du lịch Nhật Bản mùa hoa tử đằng dịp lễ 30/4 – 1/5', '5 ngày 5 đêm', 'Sân bay Tân Sơn Nhất', 38900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-477599325-1163639605505996-8957949578546676838-n.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-hoa-tu-dang-dip-le-30-4-1-5-5652.html/'),
(22, 'Tận hưởng kỳ nghỉ lễ 30/04 – 1/5 tại Hokkaido – Asahikawa – Monbetsu – Sapporo', '5 ngày 6 đêm', 'Sân bay Tân Sơn Nhất', 46900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-asian-women-wearing-japanese-traditional-kimono-visiting-beautiful-fushimi-inari-shrine-kyoto-japan-335224-73.jpg', 1, 'https://hktraveljapan.jp/tour/tan-huong-ky-nghi-le-30-04-1-5-tai-hokkaido-asahikawa-monbetsu-sapporo-5620.html/'),
(23, 'Tour Nhật Bản ngắm hoa chi anh, hoa tử đằng Osaka tháng 4', '5 ngày 5 đêm', 'Sân bay Tân Sơn Nhất', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-shibazakura-3.png', 1, 'https://hktraveljapan.jp/tour/tour-nhat-ban-ngam-hoa-chi-anh-hoa-tu-dang-osaka-thang-4-5612.html/'),
(24, 'Tour ngắm hoa anh đào, hoa tulip và hái trái cây tháng 4 siêu hot', '5 ngày 5 đêm', 'Sân bay Tân Sơn Nhất', 36900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/03/hktravel-469429999-1011608667673096-316825185514909989-n-1.jpg', 1, 'https://hktraveljapan.jp/tour/tour-ngam-hoa-anh-dao-hoa-tulip-va-hai-trai-cay-thang-4-sieu-hot-5608.html/'),
(25, 'TP.HCM – Osaka – Kyoto – Nagoya – Phú sỹ – Tokyo 5N5Đ Tháng 4', '5 ngày 5 đêm', 'Sân bay Tân Sơn Nhất', 39900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-chua-asakusa.jpg', 1, 'https://hktraveljapan.jp/tour/tp-hcm-osaka-kyoto-nagoya-phu-sy-tokyo-5n5d-thang-4-5604.html/'),
(26, 'Tour Nhật Bản Tháng 4 Cung Đường Vàng 5 Ngày 5 Đêm', '5 ngày 5 đêm', 'Sân bay Tân Sơn Nhất', 39900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-472570262-636522012283581-7736064307470168667-n.jpg', 1, 'https://hktraveljapan.jp/tour/tour-nhat-ban-thang-4-cung-duong-vang-5-ngay-5-dem-5603.html/'),
(27, 'Du xuân xứ Phù Tang mùa hoa anh đào nở rộ', '6 ngày 5 đêm', 'Sân bay Nội Bài', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6406126937887-c4e48a603f7b2441d3fa01fd997644ad.jpg', 1, 'https://hktraveljapan.jp/tour/du-xuan-xu-phu-tang-mua-hoa-anh-dao-no-ro-5168.html/'),
(28, 'Tour Ngắm Hoa Anh Đào – Xem Geisha Show', '6 ngày 5 đêm', 'Sân bay Nội Bài', 37900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6405853136392-4717064df20264b3cba57b6e9ba1ec4a.jpg', 1, 'https://hktraveljapan.jp/tour/tour-ngam-hoa-anh-dao-xem-geisha-show-5166.html/'),
(29, 'Tour cung đường hoa anh đào Nhật Bản', '6 ngày 5 đêm', 'Sân bay Nội Bài', 37900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-s1.png', 1, 'https://hktraveljapan.jp/tour/tour-cung-duong-hoa-anh-dao-nhat-ban-5165.html/'),
(30, 'Du lịch mùa hoa anh đào xứ Phù Tang', '6 ngày 5 đêm', 'Sân bay Nội Bài', 37900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6401720067228-dc7547b1d4b50b519b5aa9f677b0dd35.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-mua-hoa-anh-dao-xu-phu-tang-5164.html/'),
(31, 'Tour lễ hội hoa anh đào Nhật Bản', '6 ngày 5 đêm - Khởi hành: 23/03; 01/04', 'Sân bay Nội Bài', 38900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-473771776-642866984982417-6452653291642431441-n.jpg', 1, 'https://hktraveljapan.jp/tour/tour-le-hoi-hoa-anh-dao-nhat-ban-5163.html/'),
(32, 'Tour Ngắm Hoa Anh Đào Tháng 3', '6 ngày 5 đêm', 'Sân bay Nội Bài', 37900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-tour-du-lich.png', 1, 'https://hktraveljapan.jp/tour/tour-ngam-hoa-anh-dao-thang-3-5155.html/'),
(33, 'Du xuân Nhật Bản: Sắc hoa anh đào – vũ điệu Geisha\r\n', '6 ngày 5 đêm - Khởi hành: 13/03/2025', 'Sân bay Nội Bài', 32900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-tour-du-lich-nhat-ban.png', 1, 'https://hktraveljapan.jp/tour/du-xuan-nhat-ban-sac-hoa-anh-dao-vu-dieu-geisha-5152.html/'),
(34, 'Du ngoạn Nhật Bản mùa hoa anh đào nở rộ', '6 ngày 5 đêm - Khởi hành 10/03/2025', 'Sân bay Nội Bài', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-screenshot-1740644191-1.png', 1, 'https://hktraveljapan.jp/tour/tour-ngam-hoa-anh-dao-no-som-ve-sang-5145.html/'),
(35, 'Check in mùa hoa anh đào Nhật Bản', '6 ngày 5 đêm - Khởi hành: 07/03/2025', 'Sân bay Nội Bài', 32900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-466508388-1004506378385283-4420316904697018784-n.png', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-hoa-anh-dao-som-ha-noi-osaka-kyoto-phu-si-tokyo-2-5135.html/'),
(36, 'Nhật Bản mùa hoa anh đào Hà Nội – Osaka – Kyoto – Núi Phú Sĩ – Tokyo', '6 ngày 5 đêm', 'Sân bay Nội Bài', 34900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-cdv-hoa-anh-dao-kixnrt-ve-chieu-ha-noi.png', 1, 'https://hktraveljapan.jp/tour/nhat-ban-mua-hoa-anh-dao-ha-noi-osaka-kyoto-nui-phu-si-tokyo-5137.html/'),
(37, 'Du lịch Nhật Bản mùa hoa anh đào sớm', '6 ngày 5 đêm - Khởi hành 05/03 - 12/03', 'Sân bay Nội Bài', 30900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-tour-nhat-ban-hoa-anh-dao-ha-noi-vietjet.png', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-hoa-anh-dao-som-ha-noi-osaka-kyoto-phu-si-tokyo-5127.html/'),
(38, 'Lễ hội mùa anh đào Nhật Bản', '5 ngày 5 đêm', 'Sân Bay Nội Bài', 39900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-lovepik-com-501217825-kimono-girls-in-kimono-in-kawabata-kyoto-japan-scaled.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-anh-dao-tp-hcm-osaka-kyoto-nagoya-phu-sy-tokyo-5002.html/'),
(39, 'Du lịch Nhật ngắm anh đào Tokyo – Phú Sĩ – Nagoya – Kyoto – Osaka', '5 ngày 5 đêm', 'Sân bay Tân Sơn Nhất', 34900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6419003382903-3772aa1a7bc49af79b9abd85cd5d1e39.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ngam-anh-dao-tokyo-phu-si-nagoya-kyoto-osaka-4997.html/'),
(40, 'Du lịch Nhật Bản mùa xuân Hà Nội – Osaka – Kyoto – Phú Sĩ – Tokyo', '6 ngày 5 đêm - Ngày 25/02/2025', 'Hà Nội', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6405812215670-9fcfc383070628a09ba530ab46bcf82c.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-xuan-ha-noi-osaka-kyoto-phu-si-tokyo-2-4940.html/'),
(41, 'Du lịch Nhật Bản mùa xuân 2025', '6 ngày, 5 đêm - Ngày 18/02/2025', 'Hà Nội', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6405812202282-8a75a15e4034177566101112778fc337.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-xuan-2025-ha-noi-lang-co-shirakawago-phu-si-tokyo-4937.html/'),
(42, 'Ngắm hoa anh đào sớm Tokyo – Phú Sĩ – Nagoya – Kyoto – Osaka', '5 ngày 5 đêm', 'Narita - Tokyo', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6419003328830-af56bc4baf291375dcc40f4158aca593.jpg', 1, 'https://hktraveljapan.jp/tour/ngam-hoa-anh-dao-som-tokyo-phu-si-nagoya-kyoto-osaka-4933.html/'),
(43, 'Trải nghiệm mùa xuân Nhật Bản thơ mộng', '6 ngày 5 đêm - Ngày19/02/2025', 'Hà Nội', 30900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-ngam-hoa-anh-dao-som-kawazu.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-mua-xuan-ha-noi-osaka-kyoto-phu-si-tokyo-4931.html/'),
(44, 'Đón Tết Nguyên Đán tại Nhật Bản', 'Đón Tết Nguyên Đán tại Nhật Bản', 'Narita - Tokyo', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6401720026490-e8a4ba9e67c398e9cd8f0d1198849715.jpg', 1, 'https://hktraveljapan.jp/tour/du-lich-nhat-ban-don-tet-nguyen-dan-tokyo-phu-si-nagoya-kyoto-osaka-4921.html/'),
(45, 'Khám phá mùa đông Hokkaido – Asahikawa, Monbetsu – Sapporo', '5 ngày 6 đêm', 'Haneda - Nhật Bản', 57544200.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-screenshot-1739437141.png', 1, 'https://hktraveljapan.jp/tour/kham-pha-mua-dong-hokkaido-asahikawa-monbetsu-sapporo-4909.html/'),
(46, 'TRẢI NGHIỆM TẾT NGUYÊN ĐÁN ĐẶC SẮC TẠI NHẬT BẢN TOKYO-FUJI-NAGOYA-KYOTO-OSAKA', '5 ngày 5 đêm - Ngày 27/01/2025', 'Tokyo', 33900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-nb2.jpg', 1, 'https://hktraveljapan.jp/tour/trai-nghiem-tet-nguyen-dan-dac-sac-tai-nhat-ban-tokyo-fuji-nagoya-kyoto-osaka-4892.html/'),
(47, 'Du xuân xứ sở hoa anh đào', '5 ngày 5 đêm - ngày 25/01/2025', 'Tokyo', 35900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6401720054327-0d872462f330c3ff975c50186ee7d78c.jpg', 1, 'https://hktraveljapan.jp/tour/don-tet-nguyen-dan-tai-tokyo-fuji-nagoya-kyoto-osaka-4887.html/'),
(48, 'TRẢI NGHIỆM MÙA ĐÔNG NHẬT BẢN – TRƯỢT TUYẾT FUJITEN & HÁI TRÁI CÂY TOKYO-FUJI-NAGOYA-KYOTO-OSAKA', '5 ngày 5 đêm - ngày 08/01/2025', 'Narita - Tokyo', 34900000.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6406126922429-c6a50a1f3dc3b1b08ee68eb80551298f.png', 1, 'https://hktraveljapan.jp/tour/tokyo-phu-si-nagoya-kyoto-osaka-4855.html/'),
(49, 'HÀ NỘI – NAGOYA – OSAKA – KYOTO – NÚI PHÚ SĨ – TOKYO', '6 Ngày 5 Đêm', 'Hà Nội', 42151200.00, 'https://hktraveljapan.jp/wp-content/uploads/2025/02/hktravel-z6419003382976-11c58f9cd9a7ccf3f97bbe4a9f1ae03b.jpg', 1, 'https://hktraveljapan.jp/tour/ha-noi-nagoya-osaka-kyoto-nui-phu-si-tokyo-4601.html/'),
(50, 'HÀ NỘI – TOKYO – FUJI – KYOTO – OSAKA – HÀ NỘI', '6 Ngày 5 Đêm', 'Hà Nội', 42804736.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-2.png', 1, 'https://hktraveljapan.jp/tour/ha-noi-tokyo-fuji-kyoto-osaka-ha-noi-4600.html/'),
(51, 'HÀ NỘI – TOKYO – PHÚ SĨ – HAKONE – KYOTO – OSAKA', '6 Ngày 5 Đêm', 'Hà Nội', 42151200.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-okuwadani.png', 1, 'https://hktraveljapan.jp/tour/ha-noi-tokyo-phu-si-hakone-kyoto-osaka-4599.html/'),
(52, 'HÀ NỘI – OSAKA – KYOTO – PHÚ SĨ – TOKYO', '5 ngày 4 đêm', 'Hà Nội', 36096900.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-kyoto.png', 1, 'https://hktraveljapan.jp/tour/ha-noi-osaka-kyoto-phu-si-tokyo-4598.html/'),
(53, 'HÀ NỘI – OSAKA – KYOTO – NAGOYA – PHÚ SĨ – TOKYO', '6 Ngày 5 Đêm', 'Hà Nội', 39392100.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-osaka.png', 1, 'https://hktraveljapan.jp/tour/ha-noi-osaka-kyoto-nagoya-phu-si-tokyo-2-4597.html/'),
(54, 'HÀ NỘI – TOKYO – PHÚ SĨ – NAGOYA – KYOTO – OSAKA', '6 Ngày 5 Đêm', 'Hà Nội', 32419700.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-1.png', 1, 'https://hktraveljapan.jp/tour/ha-noi-tokyo-phu-si-nagoya-kyoto-osaka-4596.html/'),
(55, 'HÀ NỘI – OSAKA – KOBE – KYOTO – NÚI PHÚ SĨ – TOKYO', '6 Ngày 5 Đêm', 'Hà Nội', 42804736.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-cang-kobe.png', 1, 'https://hktraveljapan.jp/tour/ha-noi-osaka-kobe-kyoto-nui-phu-si-tokyo-4594.html/'),
(56, 'HÀ NỘI – NAGOYA – TAKAYAMA – SHIRAKAWAGO – FUJI – TOKYO', '6 ngày 5 đêm', 'Hà Nội', 34232000.00, 'https://hktraveljapan.jp/wp-content/uploads/2024/04/hktravel-shirakawago.png', 1, 'https://hktraveljapan.jp/tour/ha-noi-nagoya-takayama-shirakawago-fuji-tokyo-4593.html/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_categories`
--

CREATE TABLE `tour_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_categories`
--

INSERT INTO `tour_categories` (`id`, `name`, `slug`) VALUES
(1, 'Tour Việt Nam - Nhật Bản', 'tour-viet-nam'),
(3, 'Tour Ghép', 'tour-ghep'),
(4, 'Tour Thiết Kế', 'tour-thiet-ke');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dang_ky`
--
ALTER TABLE `dang_ky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `tour_categories`
--
ALTER TABLE `tour_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`) USING HASH;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dang_ky`
--
ALTER TABLE `dang_ky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tour_categories`
--
ALTER TABLE `tour_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
