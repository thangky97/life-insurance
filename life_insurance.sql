-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2024 lúc 08:37 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `life_insurance`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `image`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'banner/1686587258_slide-01.jpg', NULL, 1, '2023-06-12 09:27:25', '2023-06-15 16:32:04'),
(2, NULL, NULL, 'banner/1686587266_slide-02.jpg', NULL, 1, '2023-06-12 09:27:41', NULL),
(3, NULL, NULL, 'banner/1686587284_slide-03.jpg', NULL, 1, '2023-06-12 09:27:49', '2023-06-16 08:41:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL COMMENT 'người thụ hưởng',
  `date_of_birth` date DEFAULT NULL,
  `relationship` varchar(255) NOT NULL COMMENT 'Mối quan hệ giữa người thụ hưởng và khách hàng',
  `policy_id` int(11) NOT NULL COMMENT 'liên kết với chính sách bảo hiểm',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` text NOT NULL COMMENT 'lời nhắn',
  `is_read` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `email`, `phone_number`, `message`, `is_read`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trang', NULL, '089527415', 'Tư vấn tôi bảo hiểm gia đình, giá cả thế nào, dịch vụ ra sao, tôi đang không biết nhiều về dịch vụ đó. Hàng tháng mình sẽ phải chi trả bao nhiêu tiền mỗi tháng. Chi phí 1 năm hết bao nhiêu và tôi có thể chi trả cho gia đình những ai; điều kiện là gì. Hỗ trợ tôi với.', NULL, NULL, 0, NULL, NULL),
(2, 'Đỗ Lệ', NULL, '0987785672', 'Tôi muốn mua BH gia đình', NULL, NULL, 1, '2023-06-16 08:38:36', '2023-06-16 08:39:52'),
(3, 'Ngọc Hân', NULL, '0987785672', '452', NULL, NULL, 0, '2023-06-16 08:44:35', '2023-06-16 08:44:35'),
(4, 'Tuan', NULL, '0931657128', 'API là gì', NULL, NULL, 0, '2023-06-16 10:16:45', '2023-06-16 10:16:45'),
(5, 'tr', NULL, '0985554653', 'eeeeeeeeee', NULL, NULL, 1, '2023-06-16 10:23:21', '2023-06-20 02:50:50'),
(6, 'Thắng', NULL, '0985554653', 'ai là gì', NULL, NULL, 0, '2023-06-16 10:27:39', '2023-06-16 10:27:39'),
(7, 'Thuận Mát', NULL, '0841515611', 'Thuận muốn mua bảo hiểm nt', NULL, NULL, 1, '2023-06-20 00:52:36', '2023-06-20 00:52:36'),
(8, 'Đỗ Thành Long', NULL, '0322678567', 'Tôi không muốn liên hệ một tí nào', NULL, NULL, 0, '2023-06-20 01:29:57', '2023-06-20 01:29:57'),
(9, 'Footer', NULL, '0432763894', 'Footer', NULL, NULL, 0, '2023-06-20 01:59:06', '2023-06-20 01:59:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_recruitment`
--

CREATE TABLE `contact_recruitment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_recruitment_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `message` text NOT NULL COMMENT 'lời nhắn',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `calling_date` date NOT NULL COMMENT 'Ngày gọi',
  `call_back` date NOT NULL COMMENT 'Gọi lại',
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL COMMENT 'nguồn lấy khách tư vấn',
  `email` varchar(255) DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL COMMENT 'Tên dịch vụ sd',
  `status_customer` int(11) NOT NULL COMMENT 'trạng thái khách hàng',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `calling_date`, `call_back`, `date_of_birth`, `address`, `phone_number`, `source`, `email`, `gender`, `content`, `service_id`, `status_customer`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Thuận Mát', '2023-06-08', '2023-06-10', NULL, 'Hà Nội', '09999999999', 'Giới thiệu', NULL, 1, 'sdjfjksffheuifhsnfsdhfiuefnjksenfegfiuregrbireg', '1', 2, NULL, 1, '2023-05-16 01:52:57', '2023-05-25 03:35:44'),
(2, 'Thắng Trần', '2023-06-02', '2023-06-13', NULL, 'Số nhà 431A, Hoàng Công Chất', '0931657128', 'Website', NULL, 1, 'ee', '1', 1, NULL, 1, '2023-06-11 08:58:25', '2023-06-25 02:43:17'),
(3, 'Thắng Trần', '2023-06-02', '2023-06-16', NULL, 'Số nhà 431A, Hoàng Công Chất', '0931657128', 'Giới thiệu', NULL, 1, NULL, '2,6', 0, NULL, 1, '2023-06-13 08:46:42', '2023-06-25 03:02:30'),
(5, 'tyyyyyy', '2023-06-16', '2023-06-16', NULL, 'Nam định', '0931657128', 'Facebook', NULL, 2, 'x', '1', 1, NULL, 1, '2023-06-14 08:35:29', '2023-06-24 19:25:25'),
(7, 'Huan Ơi', '2023-06-09', '2023-06-23', NULL, 'Thái Bình', '0931657128', 'Facebook', NULL, 2, NULL, '1,2,6', 1, NULL, 1, '2023-06-25 04:04:08', '2023-06-25 04:32:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers_use`
--

CREATE TABLE `customers_use` (
  `id` int(11) NOT NULL,
  `customer_photo` varchar(255) NOT NULL COMMENT 'ảnh khách hàng',
  `customer_name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL COMMENT 'Công việc',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customers_use`
--

INSERT INTO `customers_use` (`id`, `customer_photo`, `customer_name`, `job`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'customer_use/1686885800_khsd-1.jpg', 'Thanh Thanh Huyền', 'MC', NULL, 1, '2023-06-15 04:53:59', '2023-06-15 20:23:05'),
(2, 'customer_use/1686885781_khsd-9.jpg', 'Quang Tèo', 'Nghệ sĩ', NULL, 1, '2023-06-15 20:22:28', NULL),
(3, 'customer_use/1686885822_khsd-2.jpg', 'Phương Oanh', 'Diễn viên', NULL, 1, '2023-06-15 20:23:24', NULL),
(4, 'customer_use/1686885919_khsd-7.jpg', 'Thu Quỳnh', 'Diễn viên', NULL, 1, '2023-06-15 20:24:53', NULL),
(5, 'customer_use/1686885960_khsd-6.jpg', 'Dương Khắc Linh', 'Nhạc sĩ', NULL, 1, '2023-06-15 20:25:39', NULL),
(6, 'customer_use/1686886004_khsd-5.jpg', 'Việt Anh', 'Diễn viên', NULL, 1, '2023-06-15 20:26:28', NULL),
(7, 'customer_use/1686886023_khsd-4.jpg', 'Mạnh Trường', 'Diễn viên', NULL, 1, '2023-06-15 20:26:46', NULL),
(8, 'customer_use/1686886047_khsd-3.jpg', 'Trương Quỳnh Anh', 'Ca sĩ', NULL, 1, '2023-06-15 20:27:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `frequently_asked_question`
--

CREATE TABLE `frequently_asked_question` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sort_content` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `image_question` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `frequently_asked_question`
--

INSERT INTO `frequently_asked_question` (`id`, `title`, `sort_content`, `content`, `image_question`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tham gia thì cần bao nhiêu tiền?', NULL, 'Nên dành ra 10-15% thu nhập mỗi tháng để tham gia bảo hiểm nhân thọ. Phần thu nhập còn lại dùng cho các kế hoạch chi tiêu, tiêu dùng ngắn hạn. Phần tiền dành cho bảo hiểm nhân thọ là kế hoạch tiết kiệm dài hạn, phòng ngừa những khi ốm đau, bệnh tật, giúp bạn có quỹ hưu trí khi về già.', NULL, NULL, 1, '2023-06-15 08:48:38', '2023-06-15 19:11:20'),
(2, 'Nếu các năm sau không đóng phí thì sao?', NULL, 'Các hợp đồng đều có điều khoản về vấn đề này dựa trên Luật bảo hiểm: Bạn có 60 ngày gia hạn để nộp phí và vẫn được bảo vệ trong suốt thời gian này. Sau 60 ngày không nộp phí, công ty bảo hiểm sẽ trích tiền trong tài khoản bảo hiểm của bạn (nếu có) để đóng phí. Nếu số dư không đủ để đóng bạn có thể làm đơn yêu cầu Bảo hiểm giảm để không bị tạm dừng hợp đồng. Nếu hợp đồng bị tạm dừng, bạn có 24 tháng để kích hoạt lại hợp đồng. Bạn sẽ đóng bù các khoản phí đã thiếu. Hợp đồng tiếp tục chạy. Sau 24 tháng mà không kích hoạt lại hợp đồng, thì hợp đồng của bạn chính thức chấm dứt. Ở một số sản phẩm, bạn có thể linh hoạt đóng phí hàng năm, thậm chí vài năm không nộp phí vẫn được bảo vệ.', NULL, NULL, 1, '2023-06-15 16:58:40', '2023-06-15 19:10:48'),
(3, 'Bao nhiêu tuổi thì được tham gia bảo hiểm nhân thọ?', NULL, 'Độ tuổi tham gia cho phép từ 01 tháng tuổi tới 65 tuổi.', NULL, NULL, 1, '2023-06-15 17:07:59', '2023-06-15 19:10:02'),
(4, 'Khi nào nên tham gia bảo hiểm nhân thọ?', NULL, 'Nên tham gia càng sớm càng tốt. Tham gia sớm mức phí bảo hiểm sẽ thấp hơn, và cơ hội được duyệt hồ sơ cao hơn. Tham gia muộn mức phí sẽ cao hơn, và còn không được duyệt hồ sơ nếu sức khỏe suy giảm.', NULL, NULL, 1, '2023-06-15 19:08:38', '2023-06-15 19:09:41'),
(5, 'Có mất phí tư vấn không?', NULL, 'Bạn hoàn toàn không mất khoản phí gì khi tìm hiểu bảo hiểm nhân thọ: Không phí tư vấn, không phí hồ sơ, Không phí trung gian. Bạn được lựa chọn các quyền lợi mà mình tham gia. Người đại lý có trách nhiệm và nghĩa vụ tư vấn, chia sẻ với bạn cách thức tham gia bảo hiểm nhân thọ.', NULL, NULL, 1, '2023-06-15 19:08:47', '2023-06-15 20:38:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `insurance_policies`
--

CREATE TABLE `insurance_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `coverage_amount` varchar(255) NOT NULL COMMENT 'Số tiền bảo hiểm được đảm bảo',
  `premium_amount` varchar(255) NOT NULL COMMENT 'Số tiền phải trả hàng tháng/năm',
  `customer_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `insurance_services`
--

CREATE TABLE `insurance_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dead` varchar(255) NOT NULL COMMENT 'Tử vong/mất khả năng lao động',
  `accidental_death` varchar(255) NOT NULL COMMENT 'Tử vong do tai nạn',
  `death_due_special_accident` varchar(255) NOT NULL COMMENT 'Tử vong do tai nạn đặc biệt',
  `death_from_cancer` varchar(255) DEFAULT NULL COMMENT 'Tử vong do ung thư',
  `temporary_disability_benefits` varchar(255) NOT NULL COMMENT 'Quyền lợi thương tật tạm thời',
  `serious_illness_mild` varchar(255) NOT NULL COMMENT 'Bệnh hiểm nghèo thể nhẹ',
  `serious_illness` varchar(255) NOT NULL COMMENT 'Bệnh hiểm nghèo thể nặng',
  `benefits_pay_medical_expenses` varchar(255) NOT NULL COMMENT 'Quyền lợi thanh toán chi phí y tế',
  `service_id` int(11) DEFAULT NULL COMMENT 'Dịch vụ',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `insurance_services`
--

INSERT INTO `insurance_services` (`id`, `dead`, `accidental_death`, `death_due_special_accident`, `death_from_cancer`, `temporary_disability_benefits`, `serious_illness_mild`, `serious_illness`, `benefits_pay_medical_expenses`, `service_id`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'từ 700 triệu (mệnh giá bảo hiểm)', '120% mệnh giá + BH tai nạn', '150% mệnh giá +BH tai nạn x2', 't1', 'Bù đắp tiền mặt theo tỉ lệ % thương tật Ví dụ : Gãy xuơng đùi 6% KH được đền bù : 6%*200tr = 12 triệu', '50% số tiền bảo hiểm = 100tr', '100% số tiền bảo hiểm = 200tr', '3 Tấm thẻ Daiichi life Care Cao cấp cho gia đình : - Bảo lãnh 100% chi phí thanh toán ở bệnh viện - Thanh toán 100% chi phí tất cả viện từ tuyến huyện trở lên - Qũy nằm viện cho mỗi bệnh 1 TỶ ĐỒNG - Không giới hạn số bệnh', 1, NULL, 1, '2023-06-14 14:47:08', '2023-06-16 20:44:08'),
(2, '700 - 900 triệu (mệnh giá bảo hiểm)', '120% mệnh giá + BH tai nạn', '150% mệnh giá +BH tai nạn x2', 't2', 'Bù đắp tiền mặt theo tỉ lệ % thương tật Ví dụ : Gãy xuơng đùi 6% KH được đền bù : 6%*200tr = 12 triệu', '50% số tiền bảo hiểm = 100tr', '100% số tiền bảo hiểm = 200tr', '- Bảo lãnh 100% chi phí thanh toán ở bệnh viện - Thanh toán 100% chi phí tất cả viện từ tuyến huyện trở lên - Qũy nằm viện cho mỗi bệnh 1 TỶ ĐỒNG - Không giới hạn số bệnh', 6, NULL, 1, '2023-06-14 08:02:30', '2023-06-16 20:41:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `insurance_types`
--

CREATE TABLE `insurance_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduce`
--

CREATE TABLE `introduce` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_093954_create_banner_table', 1),
(6, '2023_06_07_094005_create_services_table', 1),
(7, '2023_06_07_094018_create_insurance_types_table', 1),
(8, '2023_06_07_094026_create_news_table', 1),
(9, '2023_06_07_094040_create_introduce_table', 1),
(10, '2023_06_07_094051_create_contact_table', 1),
(11, '2023_06_07_094145_create_recruitment_table', 1),
(12, '2023_06_10_020515_create_customers_table', 1),
(13, '2023_06_10_020613_create_insurance_policies_table', 1),
(14, '2023_06_10_020657_create_beneficiaries_table', 1),
(15, '2023_06_10_020714_create_payments_table', 1),
(16, '2023_06_10_023003_create_insurance_services_table', 1),
(17, '2023_06_10_025714_create_contact_recruitment_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `sort_content` varchar(255) DEFAULT NULL,
  `images_news` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'người đăng bài',
  `post_date` date DEFAULT NULL COMMENT 'Ngày đăng bài',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `sort_content`, `images_news`, `user_id`, `post_date`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ý nghĩa bảo hiểm nhân thọ', '<ol><li>&nbsp;Bảo hiểm nhân thọ là gì? \r\nBảo hiểm nhân thọ là sản phẩm bảo hiểm nhân thọ mà công ty bảo hiểm cung cấp để bảo vệ người tham gia trước các tình huống rủi ro về sức khoẻ, thân thể, tính mạng. Người tham gia sẽ ký kết hợp đồng thoả thuận với bên công ty bảo hiểm. Đồng thời họ cũng cần thực hiện nghĩa vụ đóng phí định kỳ theo thời hạn quy định. Số tiền phí này sẽ được công ty bảo hiểm quản lý. Công ty sẽ sử dụng để chi trả lại trong trường hợp bất trắc xảy ra với người tham gia. Số tiền này cũng được dùng để chi trả cho các hợp đồng đến thời gian đáo hạn. </li><li>Ý nghĩa bảo hiểm nhân thọ</li></ol><ul><li>Ý nghĩa bảo hiểm nhân thọ với bản thân Nâng cao điều kiện chăm sóc sức khỏe Một trong những lợi ích tuyệt vời của bảo hiểm nhân thọ chính là hỗ trợ chăm sóc sức khỏe. Bảo hiểm hỗ trợ chi phí khám, chữa bệnh ở bệnh viện chất lượng quốc tế. Điều này là ưu điểm rất lớn mà đa phần bảo hiểm y tế hiện nay không chi trả. Nó là nguồn hỗ trợ hữu dụng khi phát sinh vấn đề sức khỏe. Bạn không còn phải lo lắng về phí thăm khám, điều trị, phí giường phòng tốn kém. Với sự hỗ trợ của bảo hiểm nhân thọ, bạn có thể lựa chọn phương pháp điều trị tiên tiến nhất. Điều này sẽ góp phần rút ngắn thời gian chữa bệnh. Đặc biệt, những bệnh hiểm nghèo được hỗ trợ chi trả, giảm bớt gánh nặng tài chính. Kênh đầu tư sinh lời an toàn</li><li>Ý nghĩa bảo hiểm nhân thọ với gia đình Bạn là người trụ cột kinh tế chính trong gia đình. Bạn càng nên tham gia bảo hiểm để quản lý tốt rủi ro. Bảo hiểm nhân thọ sẽ thực hiện quyền lợi chi trả theo đúng hợp đồng đã ký kết trong trường hợp bất trắc. Nguồn tài chính này có tác dụng như chiếc phao cứu sinh. Nó giúp san sẻ cho gia đình bạn trong tình huống khó khăn. Trong những hoàn cảnh ấy, ý nghĩa bảo hiểm nhân thọ thực sự quan trọng.</li><li>Quỹ đầu tư giáo dục cho con</li></ul><ol><li>Vì sao nên chọn bảo hiểm nhân thọ Dai-ichi Đảm bảo chất lượng dịch vụ Sự hài lòng của khách hàng là những tiêu chí ưu tiên hàng đầu mà Dai-ichi hướng tới. Công ty bảo hiểm nhân thọ Dai-ichi không ngừng nghiên cứu và phát triển sản phẩm. Để Dai-chi mang tới dịch vụ tốt nhất, phù hợp với tài chính và nhu cầu của khách hàng.</li></ol>', 'Ý nghĩa bảo hiểm nhân thọ', 'news/1687570469_y-nghia-bao-hiem-nhan-tho.jpg', 2, '2023-06-17', NULL, 1, '2023-06-12 17:25:48', '2023-07-08 01:50:48'),
(2, 'Chính sách bồi thường bảo hiểm', '<ol><li>Bảo hiểm và hợp đồng bảo hiểm<br>1.1.Bảo hiểm là gì?\r\nBảo hiểm là nghiệp vụ giữa người bảo hiểm và người được bảo hiểm. Người bảo hiểm sẽ chi trả khi người được bảo hiểm gặp rủi ro. Mức chi trả và cách thức chi trả tùy thuộc vào thỏa thuận. Bảo hiểm gồm bảo hiểm do nhà nước ban hành và bảo hiểm thương mại. Bảo hiểm thương mại gồm ba loại chính. Đó là bảo hiểm nhân thọ, bảo hiểm phi nhân thọ và bảo hiểm tài sản.<br>1.2.Hợp đồng bảo hiểm là gì?\r\nHợp đồng bảo hiểm là phương thức hợp pháp xác nhận giao dịch. Ở đó người được bảo hiểm có được sự cam kết của người bảo hiểm. Đồng thời người được bảo hiểm xác nhận đồng tình với điều kiện của người bảo hiểm. Hợp đồng bao gồm Hồ sơ yêu cầu bảo hiểm, giấy chứng nhận bảo hiểm, Quy tắc và điều khoản, và thỏa thuận khác nếu có.\r\n\r\nHợp đồng là bằng chứng cho quyền lợi và nghĩa vụ của hai bên. Do đó hợp đồng rất quan trọng trong việc giao dịch bảo hiểm. Bạn cần xem xét kĩ hợp đồng bảo hiểm trước khi mua. Không nên chỉ phụ thuộc và tư vấn viên hay đại lý. \r\n\r\nHợp đồng bảo hiểm sẽ bao gồm các thông tin về pháp lý của hai bên. Bên cạnh đó, hợp đồng cũng bao gồm quy định và điều kiện chi trả. Đây là thông tin quan trọng cần chú ý. Hãy nắm rõ các quy định và chính sách chi trả để tránh ảnh hưởng đến quyền lợi của mình. </li><li>Nguyên tắc hoạt động và chi trả của bảo hiểm<br>2.1. Nguyên tắc chung\r\nNguyên tắc chung của bảo hiểm là đền bù thiệt hại. Người tham gia đóng một khoản phí bảo hiểm. Khi rủi ro xảy ra công ty bảo hiểm sẽ chi trả cho thiệt hại theo thỏa thuận. \r\n\r\nCác gói bảo hiểm khác nhau sẽ có hình thức chi trả khác nhau. Có sản phẩm chi trả một lần khi rủi ro xảy ra hoặc đáo hạn. Có sản phẩm chi trả nhiều lần theo định kỳ. Cũng có sản phẩm sẽ được xem xét chi trả theo nhiều mức. Khi rủi ro xảy ra, người thụ hưởng phải chuẩn bị hồ sơ đầy đủ theo quy định.<br>2.2. Nguyên tắc đối với bảo hiểm tài sản\r\n\r\nĐối với bảo hiểm tài sản, bạn cần cung cấp nhanh chóng và đầy đủ thông tin. Đảm bảo có chứng cứ xác thực. Mô tả cụ thể về thời gian, địa điểm và những thiệt hại. Bên bảo hiểm cũng cần thông tin người liên hệ của người bị thiệt hại. Không trao đổi và hứa hẹn khoản bồi thường không thông qua bên bảo hiểm.<br>2.3. Nguyên tắc đối với bảo hiểm liên kết chung\r\nĐối với bảo hiểm liên kết chung, phần lãi đầu tư sẽ được chi trả từ quỹ đầu tư. Khách hàng sẽ được thông báo về lãi suất đầu tư hàng năm. Khoản tiền này sẽ được chi trả riêng theo thỏa thuận. Khoản tiền này không ảnh hưởng đến quyền lợi bảo hiểm bảo vệ. </li><li>Chính sách bồi thường bảo hiểm của Dai-ichi life<br>3.1.Chi trả theo hợp đồng\r\nDai-ichi Life sẽ chi trả khi trường hợp bảo hiểm xảy ra hoặc đáo hạn hợp đồng. Quy trình chi trả căn cứ vào gói bảo hiểm và quy định hợp đồng. Tiền bảo hiểm được chi trả cho người thụ hưởng theo hợp đồng.\r\n\r\nTrong vòng 21 ngày kể từ ngày ký hợp đồng, người tham gia có thể thay đổi hoặc hủy hợp đồng. Trong thời gian này bạn có thể thay đổi điều khoản hợp đồng. Trong trường hợp hủy bạn sẽ nhận lại phí bảo hiểm đã đóng, trừ đi phí khám, xét nghiệm nếu có.<br>3.2.Các trường hợp thay đổi thông tin hợp đồng\r\nĐể không ảnh hưởng đến hiệu lực hợp đồng, thay đổi thông tin cần được cập nhật trong vòng 30 ngày. Bạn cần thông báo trong các trường hợp thay đổi thông tin cá nhân như họ tên, chứng minh thư, địa chỉ,… Thay đổi nghề nghiệp mang tính rủi ro cũng cần được khai báo. Bên cạnh đó còn có việc rời khỏi lãnh thổ Việt Nam trên 3 tháng.\r\n\r\nChuyển nhượng bảo hiểm sẽ làm thay đổi thông tin bảo hiểm. Quyền và nghĩa vụ của bên mua bảo hiểm trước sẽ chấm dứt. Người thụ hưởng sẽ do bên nhận chuyển nhượng chỉ định. Người được bảo hiểm vẫn là người được bảo hiểm trong hợp đồng. <br>3.3.Một số lưu ý khác\r\nNgoài ra, đối với sản phẩm bảo hiểm nhân thọ, Dai-ichi có chính sách tạm ứng. Nếu bạn quá hạn đóng phí bảo hiểm, Dai-ichi sẽ tạm ứng từ Giá trị hoàn lại để đóng phí bảo hiểm. Điều này có thể ảnh hưởng đến giá trị hợp đồng. Bạn có thể hoàn trả khoản tạm ứng bất cứ lúc nào. \r\n\r\nĐối với sản phẩm bảo hiểm liên kết, bạn nên chú ý một số khoản phí. Hàng tháng Dai-ichi sẽ khấu trừ chi phí bảo hiểm rủi ro và chi phí quản lý hợp đồng từ Giá trị tài khoản hợp đồng. Bên cạnh đó, lãi từ kết quả đầu tư sẽ tự động cộng vào Giá trị tài khoản hợp đồng. Sau năm hợp đồng đầu, bạn có thể rút một phần từ giá trị tài khoản hợp đồng theo quy định của Dai-ichi. </li><li><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Lưu ý về chính sách bồi thường bảo hiểm để không bị thiệt\r\nBảo hiểm bảo vệ chúng ta khỏi những rủi ro không lường trước. Vì vậy những rủi ro đã xảy ra sẽ không mua được bảo hiểm. Những rủi ro đã có dấu hiệu cũng sẽ khó hoặc không mua được bảo hiểm. Bạn cần nắm rõ những quy định và lưu ý về chính sách bồi thường để đảm bảo tốt nhất quyền lợi cho bản thân.<br></span>4.1.Tránh gian lận thông tin\r\nNhững trường hợp gian lận hay khai báo sai thông tin cũng sẽ không được bảo hiểm. Hãy đảm bảo thông tin của bạn là chính xác. Trung thực và đầy đủ thông tin là điều cần thiết khi thực hiện giao dịch bảo hiểm. <br>4.2. Chú ý thời gian đóng phí và thời hạn hợp đồng\r\nHủy hợp đồng hay không đóng phí có thể ảnh hưởng đến quyền lợi. Hãy đóng phí đúng thời hạn. Chú ý đến thời gian gia hạn để không ảnh hưởng đến giá trị hợp đồng. Giữ lại phiếu thu tiền đặc thù hoặc chứng từ đóng tiền. Đây là các giấy tờ hợp pháp chứng minh bạn đã đóng phí. Bạn nên lưu ý để bảo quản hợp đồng, tránh làm mất hoặc hư hỏng hợp đồng trong thời hạn để đảm bảo quyền lợi. Nếu cần thay đổi thông tin hợp đồng, hãy liên hệ đại lý trong thời gian quy định. \r\n\r\nLà một thương hiệu uy tín, chính sách bồi thường của Dai-ichi Life đều được minh bạch. Bạn có thể tự tìm hiểu qua website của Dai-ichi Life hoặc liên hệ đại lý. Nhân viên tư vấn cũng sẽ làm rõ các thông tin này. Xem xét kĩ các thông tin quy định và điều khoản hợp đồng. Đảm bảo thông tin cá nhân chính xác và đầy đủ. Chú ý thời gian đóng phí bảo hiểm để tránh ảnh hưởng giá trị hợp đồng. Bảo hiểm là khoản đầu tư lâu dài. Vì vậy hãy dành thời gian xem xét chính sách bồi thường bảo hiểm. Điều này sẽ giúp an tâm và đảm bảo quyền lợi bảo hiểm cho bạn.</li></ol>', 'Chính sách bồi thường bảo hiểm', 'news/1687570478_dai-ichi-dam-bao-quyen-loi-khach-hang.jpg', 2, '2023-06-17', NULL, 1, '2023-06-12 19:32:31', '2023-07-08 02:12:28'),
(3, 'Mua bảo hiểm khi nào', '1. Bảo hiểm Dai-ichi Life là gì?\r\n\r\n1.1. Bảo hiểm là gì?\r\nBảo hiểm là nghiệp vụ giữa người bảo hiểm và người được bảo hiểm. Ở đó người được bảo hiểm trả một khoản phí bảo hiểm. Khi rủi ro xảy ra, người bảo hiểm sẽ chi trả một khoản bồi thường thiệt hại. Hiểu nôm na, bảo hiểm là hình thức chia sẻ rủi ro với số đông. Số đông cùng đóng một khoản tiền. Số tiền được dành để bù đắp thiệt hại cho người gặp rủi ro. \r\n\r\nBảo hiểm bao gồm bảo hiểm do Nhà nước tổ chức và bảo hiểm thương mại. Bảo hiểm do nhà nước tổ chức quen thuộc như bảo hiểm y tế, bảo hiểm xã hội,… Bảo hiểm thương mại là bảo hiểm do doanh nghiệp bảo hiểm phát hành. Các sản phẩm bảo hiểm thương mại rất đa dạng. Các loại chính có thể kể đến như bảo hiểm nhân thọ, bảo hiểm trách nhiệm dân sự và bảo hiểm tài sản. Các quyền lợi và quy định bảo hiểm khác nhau tùy sản phẩm. \r\n\r\n1.2. Bảo hiểm Dai-ichi Life là gì? \r\nDai-ichi Life là một trong những công ty bảo hiểm lớn nhất Việt Nam. Dai-ichi hoạt động trên phương châm đồng hành cùng quyền lợi khách hàng. Bảo hiểm của Dai-ichi đã được hơn 3 triệu khách hàng tin tưởng.\r\n\r\nBảo hiểm của Dai-ichi Life là bảo hiểm thương mại. Các sản phẩm của Dai-ichi đa dạng, phục vụ mọi nhu cầu. Bảo hiểm của Dai-ichi bao gồm bảo hiểm sức khỏe, bảo hiểm tài sản, bảo hiểm trách nhiệm dân sự. Bên cạnh đó Dai-ichi có các sản phẩm kết hợp bảo hiểm tích lũy. \r\n\r\n2. Ý nghĩa và tác dụng của bảo hiểm trong đời sống\r\n \r\n2.1. Bù đắp và giảm thiểu thiệt hại\r\nRủi ro trong cuộc sống là điều không biết trước. Bảo hiểm giúp chúng ta mua sự an tâm. Trong tình huống rủi ro, bảo hiểm giúp chúng ta giảm thiểu thiệt hại. Bên cạnh đó, bảo hiểm giúp giảm thiểu gánh nặng tài chính. \r\n\r\nTrong trường hợp bệnh nặng hoặc nằm viện lâu, bảo hiểm san sẻ mối nguy tài chính cho gia đình. Đối với sự mất mát trụ cột tài chính gia đình, bảo hiểm giúp ổn định cuộc sống. Đặc biệt Dai-ichi có các gói bảo hiểm cho bệnh nan y. Đây là sản phẩm bảo vệ rất tốt cho gia đình.\r\n\r\n2.2. Đóng góp phát triển an sinh xã hội\r\nBảo hiểm góp phần vào phát triển bền vững và nâng cao mức sống người dân. Bảo hiểm do nhà nước tổ chức không mang mục đích lợi nhuận. Bên cạnh bảo hiểm bắt buộc, bảo hiểm tự nguyện của Nhà nước cũng giúp bạn chuẩn bị cho tương lai.\r\n\r\n2.3. Tích luỹ bảo vệ tương lai\r\nBảo hiểm Dai-ichi Life giúp bạn bảo vệ bản thân và gia đình khỏi thiệt hại khi gặp rủi ro. Bảo hiểm tích lũy giúp bạn lên kế hoạch tài chính. Bảo hiểm giúp bạn quản lý tài chính tốt hơn tiết kiệm thông thường. Vì kế hoạch mua bảo hiểm diễn ra trong thời gian dài. Bạn sẽ không dễ thay đổi cho các mục tiêu mua sắm. \r\n\r\nBên cạnh đó, bảo hiểm cũng giúp bạn chuẩn bị cho tuổi già hay tương lai con cái. Kể cả khi bố mẹ không còn làm chỗ dựa, tương lai học hành của con vẫn được đảm bảo. Điều này giúp bạn chăm sóc người thân bằng đảm bảo tài chính. \r\n\r\n3. Nên mua bảo hiểm lúc nào?\r\n3.1. Nguyên tắc bảo hiểm \r\n \r\nNguyên tắc bảo hiểm là bảo vệ khỏi rủi ro chưa lường trước. Do đó, những tình huống rủi ro đã xảy ra hoặc đã có dấu hiệu sẽ khó mua bảo hiểm. Một số tình huống sẽ không mua được bảo hiểm. Vì vậy bạn nên mua bảo hiểm trước khi có dấu hiệu rủi ro. Mua bảo hiểm càng sớm càng tốt. Khi mua sớm phí bảo hiểm sẽ thấp hơn. Đồng thời chúng ta mua được sự an tâm. \r\n\r\n3.2. Thời điểm mua bảo hiểm\r\nChuẩn bị lập gia đình hay có con bạn cũng có thể mua bảo hiểm Dai-ichi Life. Đây là thời điểm để bảo vệ tài chính gia đình. Bên cạnh đó bạn có thể thiết lập kế hoạch tài chính cho tương lai của con. Bạn cũng có thể cân nhắc mua bảo hiểm khi bắt đầu kinh doanh. Bảo hiểm bảo vệ tài sản cũng rất hữu ích khi bạn mua sắm tài sản có giá trị. \r\n\r\nMua bảo hiểm lúc nào là quyết định của bạn. Đội ngũ tư vấn của Dai-ichi sẽ hỗ trợ giải đáp gói bảo hiểm Dai-ichi nào tốt bất cứ thời điểm nào bạn cần. Bạn nên cân nhắc dựa trên kế hoạch tài chính gia đình. Bên cạnh đó, bạn cũng nên cân nhắc dựa trên công việc và mức thu nhập. \r\n\r\n4. Nên tìm hiểu thông tin ở đâu?\r\n \r\n4.1. Lựa chọn đơn vị uy tín\r\nĐơn vị bảo hiểm sẽ đồng hành cùng gia đình bạn. Bảo hiểm giúp bạn mua sự an tâm. Vì vậy lựa chọn sản phẩm tốt, công ty uy tín là rất quan trọng. Bạn nên tìm hiểu kỹ thông tin trước khi mua bảo hiểm. \r\n\r\n4.2. Tham khảo từ nhiều nguồn \r\nTham khảo danh sách những công ty bảo hiểm uy tín giúp bạn chọn lựa đơn vị bảo hiểm. Bạn có thể tự tìm hiểu về hoạt động của công ty trên các website. Những đơn vị uy tín như Dai-ichi đều có thông tin đầy đủ trên website. \r\n\r\nNếu bạn thắc mắc có nên mua bảo hiểm Dai-ichi, bạn có thể tìm hiểu thêm về Dai-ichi trên internet. Bạn cũng có thể tham gia các cộng đồng, nhóm online để hỏi tư vấn. Bạn nên tham khảo bạn bè, người thân, những người đã mua bảo hiểm. Bàn bạc với gia đình để cùng lựa chọn.\r\n\r\nCác gói sản phẩm với cấp độ và quyền lợi sẽ cho bạn những gợi ý phù hợp với nhu cầu. Bạn có thể tham khảo trước các sản phẩm của Dai-ichi để hiểu hơn về gói bảo hiểm.\r\n \r\n5. Các gói bảo hiểm tham khảo của Dai-ichi Life\r\n \r\nGói bảo hiểm Dai-ichi nào tốt? Một số sản phẩm nổi bật của Dai-ichi có thể kể đến như: bảo hiểm nhân thọ, bảo hiểm chăm sóc sức khỏe, bảo hiểm tích lũy cho tương lai của con,… \r\n\r\n5.1. Dai-ichi Life care – Bảo hiểm sức khỏe\r\nĐây là gói bảo hiểm chăm sóc toàn diện cho sức khỏe của bạn. Bảo hiểm sức khỏe giúp bạn giảm gánh nặng chi phí y tế. Bạn có thể lựa chọn những cấp độ và quyền lợi khác nhau. Dai-ichi Life care là sản phẩm linh hoạt với nhu cầu và mức chi trả. Với bảo hiểm sức khỏe, bạn không còn lo lắng về chi phí chăm sóc y tế cũng như chi phí điều trị tổn thương, điều dưỡng. Bạn có thể tham khảo thêm thông tin các cấp độ sản phẩm Dai-ichi Life care. \r\n\r\n5.2. Bảo hiểm độc lập cho bé\r\nĐây là gói bảo hiểm giúp bạn san sẻ nỗi lo sức khỏe của bé. Các chi phí viện phí và điều trị sẽ được Dai-ichi hỗ trợ. \r\n\r\nBên cạnh đó, nếu bố hoặc mẹ gặp bất trắc, bé cũng được được bảo vệ tài chính. Dai-ichi Life có mức hỗ trợ cho các trường hợp tai nạn đặc biệt lên đến 150% mệnh giá. Ngoài ra bảo hiểm Dai-ichi Life còn có chính sách hỗ trợ đóng phí và hỗ trợ bệnh hiểm nghèo.\r\n\r\n5.3. Bảo hiểm An tâm hưng thịnh toàn diện\r\nĐây là gói bảo hiểm toàn diện cho bạn. Bạn được bảo vệ trước nhiều rủi ro, tài chính hoặc sức khỏe. Giá trị tài khoản hợp đồng tăng trưởng với mức lãi hấp dẫn từ quỹ liên kết chung. Bạn còn nhận được khoản thưởng duy trì hợp đồng mỗi 3 năm. \r\n\r\nBạn có thể dễ dàng tham gia các sản phẩm bổ sung. An tâm hưng thịnh toàn diện linh hoạt trong đóng phí. An tâm hưng thịnh toàn diện có hai lựa chọn cho bạn: Bảo hiểm cơ bản và bảo hiểm nâng cao. Với sản phẩm này bạn cũng có thể dễ dàng điều chỉnh số tiền bảo hiểm phù hợp nhu cầu. \r\n\r\nQua một số thông tin trên, hi vọng bạn đã giải đáp được câu hỏi có nên mua bảo hiểm Dai-ichi. Với uy tín lâu dài và sản phẩm đa dạng, Dai-ichi là thương hiệu được nhiều người cân nhắc. Tùy vào kế hoạch tài chính gia đình, bạn có thể lựa chọn sản phẩm phù hợp. Bất cứ thời điểm nào, bạn cũng có thể chọn mua sản phẩm của Dai-ichi. Bảo hiểm Dai-ichi Life có các cấp độ và tính linh hoạt cao. Bạn có thể cân nhắc mua thêm trong quá trình sử dụng.', 'Mua bảo hiểm khi nào&nbsp;Mua bảo hiểm khi nào&nbsp;Mua bảo hiểm khi nào', 'news/1687570486_mua-bao-hiem-khi-nao.jpg', 2, '2023-06-17', NULL, 1, '2023-06-13 17:42:10', '2023-07-08 02:28:16'),
(4, 'Giá bảo hiểm nhân thọ', '1. Các gói bảo hiểm nhân thọ Dai-ichi Life\r\n1.1.Bảo hiểm chăm sóc sức khỏe\r\nCác sản phẩm của công ty bảo hiểm Dai-ichi luôn được nhiều khách hàng tin tưởng. Trong đó, bảo hiểm chăm sóc sức khỏe là sản phẩm nổi bật nhất. Đây là gói bảo hiểm thiết thực với nhu cầu hiện đại. Bảo hiểm chăm sóc sức khỏe bảo vệ với nhiều quyền lợi khám, chữa bệnh. \r\n\r\nChương trình bảo hiểm linh hoạt. Ba gói bảo hiểm phù hợp tài chính và nhu cầu khác nhau. Gói phổ thông: 210 triệu, quyền lợi điều trị nội trú và ngoại trú. Gói đặc biệt: 420 triệu, quyền lợi điều trị nội trú và ngoại trú. Gói cao cấp: 630 triệu, quyền lợi điều trị nội trú, ngoại trú và chăm sóc răng. Thanh toán viện phí với mạng lưới rộng khắp Việt Nam. Sản phẩm phù hợp với tất cả khách hàng từ 0 đến 60 tuổi. \r\n\r\n1.2.Bảo hiểm bệnh hiểm nghèo\r\nĐây là sản phẩm đặc thù của bảo hiểm nhân thọ Dai-ichi Life. Sản phẩm bảo vệ tới 88 bệnh hiểm nghèo. Các căn bệnh hiểm nghèo đòi hỏi thời gian điều trị lâu dài. Điều này tạo ra áp lực kinh tế lớn cho gia đình. Bảo hiểm bệnh hiểm giúp san sẻ nỗi lo tài chính. Sản phẩm này bảo vệ ở nhiều giai đoạn khác nhau. \r\n\r\nBảo hiểm bảo vệ nhiều lần cho nhiều bệnh hiểm nghèo. Quyền lợi bảo hiểm tối đa lên tới 200% số tiền bảo hiểm. Khách hàng từ 1 đến 60 tuổi đều có thể tham gia bảo hiểm. Thời hạn hợp đồng linh hoạt từ 5 đến 25 năm. \r\n\r\nCác sản phẩm bảo hiểm liên kết của Dai-ichi Life cũng rất được yêu mến. Đặc biệt phải kể đến An tâm hưng thịnh toàn diện, Bảo hiểm độc lập cho bé, Bảo hiểm cho cả gia đình,… \r\n\r\n1.3.Bảo hiểm nhân thọ Dai-ichi Life an tâm hưng thịnh toàn diện\r\nĐây là sản phẩm bảo vệ trọn vẹn cả về sức khỏe và tài chính của công ty bảo hiểm Dai-ichi. An tâm hưng thịnh toàn diện giúp bạn xây dựng kế hoạch tài chính chủ động. Đồng thời bảo hiểm giúp bạn linh hoạt, sẵn sàng trước mọi biến cố.Khách hàng được bảo vệ trước nhiều rủi ro trong cuộc sống. Bạn dễ dàng tham gia các sản phẩm bổ sung. Lãi suất cạnh tranh và luôn được đảm bảo. \r\n\r\nKhách hàng cũng có thể linh hoạt trước sự thay đổi. Người tham gia có thể đóng Phí bảo hiểm đóng thêm vào bất cứ thời gian nào. Khách hàng cũng có thể rút tiền từ Giá trị tài khoản hợp đồng. Khách hàng có thể dễ dàng điều chỉnh số tiền bảo hiểm phù hợp nhu cầu. Khách hàng từ 0 đến 60 tuổi đều có thể tham gia bảo hiểm. \r\n\r\n1.4.Bảo hiểm độc lập cho bé \r\nBảo hiểm độc lập cho bé là sự chuẩn bị tốt cho con cái. Đây là sản phẩm liên kết giúp bạn đầu tư cho tương lai của con. Bé được bảo vệ không giới hạn số bệnh. Số tiền chi trả cho mỗi đợt điều trị không giới hạn. Bảo hiểm hỗ trợ 100% phí điều trị ung thư. \r\n\r\nBảo hiểm độc lập cho bé hỗ trợ đóng phí khi bố mẹ gặp rủi ro tử vong. Bên cạnh đó bé cũng được tích lũy khoản tài chính lên tới 300.000.000 đồng. Sản phẩm này giúp gia đình an tâm chăm sóc bé tại các bệnh viện hàng đầu. Đây cũng là sự chuẩn bị tài chính cho tương lai của con. Ngay cả khi bố mẹ gặp rủi ro tử vong bé vẫn có điểm tựa về tài chính.\r\n\r\n2.Lưu ý khi mua bảo hiểm nhân thọ\r\n2.1.Bảo vệ khỏi rủi ro không biết trước.\r\nBảo hiểm nhân thọ là gì và hoạt động thế nào? Theo nguyên tắc chung, bảo hiểm chi trả rủi ro không lường trước. Do đó các rủi ro đã có dấu hiệu sẽ khó mua bảo hiểm. Mua bảo hiểm càng sớm chi phí càng thấp. Các hành vi vi phạm pháp luật hoặc cố ý tạo rủi ro sẽ không được chi trả. \r\n\r\n.2.Vừa được bảo vệ, vừa tích lũy\r\nNgoài việc bảo vệ khỏi rủi ro, bảo hiểm còn là kênh tích lũy. Khác với các kênh tiết kiệm thông thường, bảo hiểm có tính dài hạn. Bảo hiểm sẽ ít bị ảnh hưởng bởi chi tiêu cá nhân. Qua đó bảo hiểm giúp tích lũy cho tương lai. Bảo hiểm cũng là phương án chuẩn bị tốt chơ thời gian hưu trí.\r\n\r\nQuyền lợi và giá trị tích lũy sẽ khác nhau tùy sản phẩm. Bạn cần tìm hiểu kĩ sản phẩm bảo hiểm trước khi mua. Nên lựa chọn sản phẩm bảo hiểm phù hợp với khả năng tài chính gia đình. Đóng phí bảo hiểm trễ hoặc thiếu sót có thể ảnh hưởng đến giá trị bảo hiểm. Đóng phí bảo hiểm đầy đủ theo thời gian thỏa thuận để tránh ảnh hưởng đến quyền lợi. \r\n2.3.Thông tin trung thực\r\nTrung thực là yếu tố tiên quyết khi tham gia bảo hiểm. Đối với bảo hiểm nhân thọ Dai-ichi Life bạn cần hoàn thành Giấy yêu cầu bảo hiểm. Trong đó bao gồm các thông tin về sức khỏe, nghề nghiệp, lối sống,… Đây là các thông tin cần sự trung thực và đối chứng. \r\n\r\nCố tình không khai báo chính xác, hợp đồng có thể bị hủy. Điều này có thể ảnh hưởng đến quyền lợi bảo hiểm của bạn. Nếu có thay đổi thông tin, bạn nên liên hệ bên bảo hiểm. Nhân viên tư vấn luôn sẵn sàng hỗ trợ bạn. Đảm bảo thông tin được cập nhật kịp thời, chính xác để không ảnh hưởng hợp đồng. \r\n\r\n2.4.Quỹ bảo hiểm chi trả\r\nQuỹ bảo hiểm bao gồm quỹ dự phòng và quỹ đầu tư. Quỹ dự phòng chi trả cho khách hàng gặp rủi ro. Mức chi trả phụ thuộc vào giá trị hợp đồng. Các mức độ thiệt hại khác nhau sẽ được chi trả khác nhau. Điều này được quy định trong hợp đồng bảo hiểm\r\n\r\nQuỹ đầu tư là một phần phí đóng bảo hiểm của khách hàng. Khoản tiền này được dùng đầu tư và chia lãi cho khách hàng. Quỹ đầu tư áp dụng cho các sản phẩm bảo hiểm liên kết chung. Các đơn vị bảo hiểm lựa chọn các kênh đầu tư an toàn như mua trái phiếu chính phủ, gửi ngân hàng,… Điều này đảm bảo mức lãi suất ổn định cho khách hàng. \r\n\r\n2.5.Cách thức chi trả\r\nKhách hàng sẽ được chi trả bảo hiểm khi gặp rủi ro hoặc đáo hạn. Khi gặp rủi ro, khách hàng chuẩn bị giấy tờ và thông tin cần thiết theo quy định. Bạn nên chuẩn bị đầy đủ giấy tờ trong thời hạn quy định để được hỗ trợ tốt nhất. Bên bảo hiểm sẽ thực hiện chi trả theo thỏa thuận. \r\n\r\nBên cạnh đó, bảo hiểm cũng sẽ thực hiện chi trả khi đáo hạn hợp đồng. Tùy vào thỏa thuận mà mức chi trả và giá trị hợp đồng khác nhau. Bạn cũng có thể lựa chọn chi trả một lần hoặc trả theo kì hạn. Điều này được quy định trong hợp đồng. Bạn nên dành thời gian xem xét quyền và nghĩa vụ bảo hiểm trước khi mua. \r\n\r\nBạn có thể tìm hiểu thêm thông tin về các gói bảo hiểm nhân thọ Dai-ichi Life trên website. Các tư vấn viên cũng luôn sẵn sàng hỗ trợ tại các đại lý của Dai-ichi. Hãy lựa chọn sản phẩm bảo hiểm phù hợp với nhu cầu và khả năng tài chính. Chú ý các thông tin về quyền lợi và nghĩa vụ. Hãy chú ý thực hiện đúng, đủ hợp đồng, tránh ảnh hưởng quyền lợi. Hi vọng bạn đã có những kiến thức hữu ích về bảo hiểm nhân thọ và lựa chọn được sản phẩm phù hợp.', 'Giá bảo hiểm nhân thọ', 'news/1687570493_gia-bao-hiem.jpg', 2, '2023-06-17', NULL, 1, '2023-06-13 17:45:19', '2023-06-23 18:34:47'),
(5, '16/6 rt', '4', '4', 'news/1686872483_435bd93b46559d0bc444.jpg', 2, '2023-06-17', NULL, 2, '2023-06-15 16:41:11', '2023-06-15 16:48:03'),
(6, 'Test', '<h1><span style=\"background-color: rgb(255, 198, 156);\">Nội dung dài đưỡn</span></h1><pre>8yi8u</pre><p><br></p><table class=\"table table-bordered\"><tbody><tr><td>Một 1 trang</td><td>Anh lại nhớ em</td><td>Em ổn không</td><td>EM có tốt không</td></tr><tr><td>Có</td><td>không</td><td>Có<br></td><td>Có</td></tr><tr><td>không<br></td><td>không<br></td><td>không<br></td><td>không<br></td></tr><tr><td>không<br></td><td>Có<br></td><td>f</td><td>Có<br></td></tr></tbody></table><p><br></p><p><br></p>', '<p>Nội dung ngắn</p>', 'news/1688804879_intro_library.png', 2, '2023-07-07', NULL, 1, '2023-07-08 01:25:12', '2023-07-08 20:41:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_date` date NOT NULL COMMENT 'ngày thanh toán',
  `amount` varchar(255) NOT NULL COMMENT 'số tiền thanh toán',
  `policy_id` int(11) NOT NULL COMMENT 'liên kết với chính sách bảo hiểm',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_payment` int(11) NOT NULL COMMENT 'trạng thái thanh toán',
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `charges` varchar(255) DEFAULT NULL COMMENT 'Mức phí',
  `duration` varchar(255) DEFAULT NULL COMMENT 'Thời hạn',
  `face_protect_life` varchar(255) DEFAULT NULL COMMENT 'Mệnh giá bảo vệ tính mạng',
  `comprehensive_accident_insurance` varchar(255) DEFAULT NULL COMMENT 'Bảo hiểm tai nạn toàn diện',
  `critical_illness_insurance` varchar(255) DEFAULT NULL COMMENT 'Bảo hiểm bệnh hiểm nghèo',
  `health_care_insurance` varchar(255) DEFAULT NULL COMMENT 'Bảo hiểm chăm sóc sức khỏe',
  `insurance_services_id` int(11) DEFAULT NULL COMMENT 'id chi tiết dịch vụ bảo hiểm',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `service_name`, `thumbnail`, `description`, `charges`, `duration`, `face_protect_life`, `comprehensive_accident_insurance`, `critical_illness_insurance`, `health_care_insurance`, `insurance_services_id`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bảo hiểm cho cả gia đình', 'services/1687314472_bh-gia-dinh.jpg', 'Khi gia đình của bạn có thêm sự hiện diện của những thiên thần nhỏ, bạn sẽ dành mọi tình yêu thương và quan tâm cho con thân yêu của mình và luôn mong muốn dành cho con những điều tốt đẹp nhất trong cuộc sống.\r\nChính vì vậy, việc bắt đầu một kế hoạch tài chính để đảm bảo tương lai cho con bạn là một điều hết sức cần thiết. Với Dai-ichi Life Việt Nam, bạn sẽ không cần phải lo lắng điều đó một mình, chúng tôi luôn đồng hành cùng bạn với những giải pháp tài chính tốt nhất cho tương lai con trẻ.', '24 triệu/1 năm', 'Đóng phí 16-20 năm, bảo vệ trọn đời 100 tuổi', '700 triệu', '200 triệu', '200 triệu', '3 tấm thẻ Daiichi life Care có hạn mức từng thẻ 1 tỷ/1 bệnh/ Thương tật', 1, NULL, 1, '2023-06-12 02:15:30', '2023-06-20 19:27:46'),
(2, 'Bảo hiểm cho mẹ và bé', 'services/1687314461_bh-me-va-be.jpg', 'Khi gia đình của bạn có thêm sự hiện diện của những thiên thần nhỏ, bạn sẽ dành mọi tình yêu thương và quan tâm cho con thân yêu của mình và luôn mong muốn dành cho con những điều tốt đẹp nhất trong cuộc sống.\r\n\r\nChính vì vậy, việc bắt đầu một kế hoạch tài chính để đảm bảo tương lai cho con bạn là một điều hết sức cần thiết. Với Dai-ichi Life Việt Nam, bạn sẽ không cần phải lo lắng điều đó một mình, chúng tôi luôn đồng hành cùng bạn với những giải pháp tài chính tốt nhất cho tương lai con trẻ.', '21 triệu / 1 năm', 'Đóng phí 16-20 năm, bảo vệ trọn đời đến 100 tuổi', '700 triệu - 1 tỉ', '200 triệu', '200 triệu', '1 tỷ đồng / 1 bệnh / Thương tật 2 mẹ con mỗi người 1 thẻ Daiichi Care', 0, NULL, 1, '2023-06-12 02:20:19', '2023-06-25 02:47:39'),
(6, 'Bảo hiểm cho người độc thân', 'services/1687314483_bh-doc-than.jpg', 'Đây là thời gian bạn bắt đầu đi làm và tích cóp được nhiều nhất bởi bạn còn độc thân. Sẽ không bao giờ là quá sớm để bắt đầu lập kế hoạch tiết kiệm cho mình. Hãy bắt đầu tích lũy ngay khi bạn có những tháng lương đầu tiên!\r\n\r\nKhông chỉ dừng lại ở việc tiết kiệm, bạn mong muốn chăm sóc cha mẹ và những người thân yêu trong gia đình, nuôi dưỡng những ước mơ đang ấp ủ và xây dựng một gia đình tương lai vững chắc, hãy để Dai-ichi Life Việt Nam giúp bạn thực hiện tất cả những mong muốn đó ngay từ hôm nay!\r\n\r\nDai-ichi Life Việt Nam sẽ mang đến cho bạn những giải pháp tiết kiệm và bảo vệ tài chính toàn diện trong từng giai đoạn cuộc sống của bạn.', '18 triệu/1 năm', 'Đóng phí 16 năm, bảo vệ trọn đời', '700 - 900 triệu', '200 triệu', '200 triệu', '1 tỷ /1 bệnh/ Thương tật', 2, NULL, 1, '2023-06-12 02:20:15', '2023-06-25 02:36:43'),
(8, 'Bảo hiểm độc lập cho bé', 'services/1687314506_bh-cham-soc-suc-khoe.jpg', 'Khi con yêu chào đời, cha mẹ luôn mong muốn được bảo vệ con một cách tốt nhất nhưng băn khoăn vì tài chính hạn hẹp? Hiểu được mong muốn của các bậc cha mẹ, Daiichi Việt Nam mang đến gói sản phẩm tiết kiệm tối ưu dành riêng cho bé. Bé được bảo vệ đầy đủ nhất về sức khỏe, tính mạng với các dịch vụ y tế tốt nhất từ các bệnh viện hàng đầu chất lượng 5 sao!\r\n\r\nDaiichi Life Nhật Bản tự hào là đơn vị UY TÍN SỐ 1 tại Nhật Bản và Việt Nam. Điểm ưu việt hiện nay chỉ Daiichi mới mang tới cho khách hàng thị trường Việt Nam:\r\n– Không giới hạn số bệnh.\r\n– Không giới hạn số tiền chi trả mỗi đợt điều trị.\r\n– Hỗ trợ 100% chi phí điều trị ung thư.\r\n– Loại trừ bệnh ít nhất thị trường (đặc biệt là các bệnh cho bé). Bảo vệ cả bệnh bẩm sinh', '16 triệu/1 năm', 'Đóng phí 16 năm, bảo vệ trọn đời 100 tuổi', '1 tỉ', 'không', '200 triệu', 'không', NULL, NULL, 1, '2023-06-14 00:59:29', '2023-06-20 19:28:06'),
(9, 'ưdđư', 'services/1688808120_d.jpg', '<div>fhfhhdf</div><div><br></div>', 'wwwđ', 'dư', 'đư', 'ddw', 'ưdwd', 'ưdwd', NULL, NULL, 1, '2023-07-08 02:21:20', '2023-07-08 02:32:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_home`
--

CREATE TABLE `setting_home` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `support_phone_number` varchar(255) DEFAULT NULL COMMENT 'số đt hỗ trợ',
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_zalo` varchar(255) DEFAULT NULL,
  `support_email` varchar(255) DEFAULT NULL COMMENT 'Email hỗ trợ',
  `link_instagram` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `setting_home`
--

INSERT INTO `setting_home` (`id`, `logo`, `favicon`, `support_phone_number`, `link_facebook`, `link_zalo`, `support_email`, `link_instagram`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'logo/1686887463_Logo-Dai-Ichi-VN.png', 'favicon/1686887835_favicon.ico', '0353 693 509', 'https://www.facebook.com', 'https://zalo.me/0353693509', 'hungmv.mgmydinh@gmail.com', NULL, NULL, NULL, '2023-06-14 21:24:43', '2023-06-15 20:57:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `date_of_birthday` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `date_of_birthday`, `phone_number`, `address`, `gender`, `role`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Han3', 'han3@gmail.com', NULL, '$2y$10$f1R51RNf71xUXvzqWkDUJO1tY/2ArR8LY1Cefa7eQS0BNFvBiiu82', NULL, 'users/1686457484_2.jpg', '2023-06-03', '0985554653', NULL, NULL, NULL, NULL, 2, NULL, NULL),
(2, 'Thắng', 'tranthangvui360@gmail.com', NULL, '$2y$10$dEQi6bCks.LW/OSqY8aP5eLbGv1u2qBX2cAWfmfHF8O/aGK9djnse', NULL, 'users/1686999037_2.jpg', '2002-07-09', '0931657128', 'Nam Định', 1, NULL, NULL, 1, NULL, '2023-06-19 20:33:58'),
(3, 'Loc nè', 'trantha4@gmail.com', NULL, '$2y$10$of8tnQrX8SJdvzAWetGYceCVoQztErI.Pk699ZJVKVLMiRfSKNdje', NULL, 'users/1686455768_d.jpg', '2023-06-09', '0931657128', NULL, NULL, NULL, NULL, 2, NULL, '2023-06-10 17:00:00'),
(4, 'Thuận mát', 'thuanmat@gmail.com', NULL, '$2y$10$9DYdwrpOrvc9OYTRTzcQ6eUCh9Nwng3mXH8/S4/YNmtImLuHA62q.', NULL, 'users/1686456356_435bd93b46559d0bc444.jpg', '2023-06-07', '0938746789', NULL, NULL, NULL, NULL, 0, NULL, '2023-06-20 02:40:44'),
(5, '1ee', 'ee@gmail.com', NULL, '$2y$10$qwKijj2rK0aB9XkijUgIBe6vnneUoukt89VcFP3gTCk6F.LdiHkgy', NULL, 'users/1686873295_270073428_4688759907910676_4536360455985193879_n.jpg', '2023-06-14', '0588444555', NULL, NULL, NULL, NULL, 2, '2023-06-15 16:54:39', NULL),
(6, 'test', 'test@gmail.com', NULL, '$2y$10$sfBXdej4ZD4SEsSo2gk9VO4rrDuqzv6wCyTSSQ2U3hv1/.Ijb48Ji', NULL, 'users/1687254151_346881905_3489254524677522_4019123523222400098_n.jpg', '1976-07-14', '0373276678', NULL, NULL, NULL, NULL, 1, '2023-06-20 02:41:50', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact_recruitment`
--
ALTER TABLE `contact_recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `customers_use`
--
ALTER TABLE `customers_use`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `frequently_asked_question`
--
ALTER TABLE `frequently_asked_question`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `insurance_policies`
--
ALTER TABLE `insurance_policies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `insurance_services`
--
ALTER TABLE `insurance_services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `insurance_types`
--
ALTER TABLE `insurance_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting_home`
--
ALTER TABLE `setting_home`
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
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `contact_recruitment`
--
ALTER TABLE `contact_recruitment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `customers_use`
--
ALTER TABLE `customers_use`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `frequently_asked_question`
--
ALTER TABLE `frequently_asked_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `insurance_policies`
--
ALTER TABLE `insurance_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `insurance_services`
--
ALTER TABLE `insurance_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `insurance_types`
--
ALTER TABLE `insurance_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `introduce`
--
ALTER TABLE `introduce`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `setting_home`
--
ALTER TABLE `setting_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
