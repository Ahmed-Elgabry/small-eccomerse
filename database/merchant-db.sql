-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 12:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merchant-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'تكنولوجيا', 'tknologya', '2023-09-13 01:44:05', '2023-10-16 14:59:42'),
(2, 'الصحة والجمال', 'alsh-oalgmal', '2023-09-13 01:44:05', '2023-10-16 15:32:27'),
(3, 'اثاث ومفروشات', 'athath-omfroshat', '2023-09-13 01:44:05', '2023-10-16 15:01:24'),
(4, 'حقائب واكسسورات', 'hkayb-oakssorat', '2023-09-13 01:44:05', '2023-10-16 15:02:26'),
(5, 'ملابس رجالي', 'mlabs-rgaly', '2023-09-13 01:44:05', '2023-10-16 14:58:57'),
(6, 'ازياء نسائية', 'azyaaa-nsayy', '2023-09-13 01:44:05', '2023-10-16 14:56:47'),
(9, 'الاجهزة-المنزلية', 'alaghz-almnzly', '2023-10-16 15:00:31', '2023-10-16 15:00:31'),
(10, 'الكترونيات', 'alktronyat', '2023-10-17 06:40:07', '2023-10-17 06:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_13_042122_create_categories_table', 1),
(6, '2023_09_13_042627_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) NOT NULL,
  `stock_status` enum('instock','outofstock') NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) NOT NULL,
  `images` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'ازياء البنات', 'https://www.toptato.com/index.php?route=product/product&product_id=16897', 'بليزر كاروهات مميز وانيق', 'في المتجر مجموعة من المنتجات تناسب جميع الاذواق والفئات ، منتجات مصممين بجودة عالية ودقة عالية ودقة متناهية مجرد الضغط على اسم المتجر ستشاهد باقى منتجاتنا وهدفنا هو ارضاء العميل', 220.00, 220.00, 'ازياء', 'instock', 0, 39, 'product-1.jpg', 'Null', 6, '2023-09-13 01:44:06', '2023-10-16 17:19:46'),
(2, 'الملابس النسائية', 'almlabs-alnsayy', 'فستان جينز كاجوال مميز جدا', 'فى المتجر مجموعة من أفضل المنتجات تناسب جميع الاذواق والفئات مصممين بدقة متناهية وجودة بمجرد الضغط على اسم المتجر ستشاهد منتجات جديدة وهدفنا دائما ارضاء العميل', 399.00, 399.00, 'ازياء', 'instock', 0, 1, 'product-2-1.jpg', 'Null', 6, '2023-09-13 01:44:06', '2023-10-16 15:36:50'),
(3, 'فستان اطفال شيك', 'https://www.jumia.com.eg/ar/teddy-classy-dress-for-girls-beige-23447904.html\n', 'فستان شتوى بناتى انيق رقيق - بيج', 'فستان اطفال شيك جدا خريفى وشتوى بتصميم بسيط وخامه فائقة الجوده ويتميز بانه عملى ومناسب لجميع الازواق والمناسبات الفستان مناسب للبنات من سن اربع سنوات لسن تسع سنوات ', 500.00, 500.00, 'فستان اطفال', 'instock', 0, 33, 'product-3-1.jpg', 'Null', 6, '2023-09-13 01:44:06', '2023-10-16 15:38:55'),
(4, 'جيمي شو', 'https://www.mtgers.com/%D8%A7%D9%84%D8%B9%D8%B7%D9%88%D8%B1-%D8%A7%D9%84%D9%86%D8%B3%D8%A7%D8%A6%D9%8A%D8%A9', 'عطور نسائية', 'خامة من اجود العطور يناسب جميع المناسبات متوفر بعدة الوان لاظهار الشكل بربطة انيقة وعصرية', 75.00, 75.00, 'عطور', 'instock', 0, 20, 'product-4-1.jpg', 'Null', 2, '2023-09-13 01:44:06', '2023-10-17 03:12:54'),
(5, 'اثاث ومفروشات', 'athath-omfroshat', ' جيمي شو عطر جيمي شو للنساء أو دو بارفان – 60 مل ', 'توليفة عطرية جذابة للمرأة التي تعشق الجمال وتعرف ما تريد، هذا العطر الجديد والمثير يجعله عطراً مثاليًا عندما ترغبين في جذب انتباه شخص ما، ارتديه بشكل غير اعتيادي أثناء النهار أو طوال المساء عندما تبحثين عن المتعة.', 230.00, 230.00, 'اثاث ومفروشات', 'instock', 0, 28, 'product-5-1.jpg', 'Null', 3, '2023-09-13 01:44:06', '2023-10-16 15:46:20'),
(6, 'احذيه هاف بوت ', 'ahthyh-haf-bot', 'جمبسوت جينز ترند السنة', 'فى المتجر مجموعة من أفضل المنتجات تناسب جميع الأذواق والفات مصممين بجودة عالية ودقة متناهية على يد اشهر مصممين ازياء بمجرد متابعة متجرى ستشاهد اقوى العروض واحدث الموديلات وارخص الاسعار واعلى الخامات لان هدفنا هو ارضاء العميل ', 395.00, 395.00, 'هوت بوت', 'instock', 0, 38, 'product-6-1.jpg', 'Null', 4, '2023-09-13 01:44:06', '2023-10-16 15:49:37'),
(7, 'مكياج اكريلك', 'mkyag-akrylk', 'SHEIN Metal Frame Sunglasses', 'SHEIN Metal Frame Sunglasses With Case-8730', 219.50, 219.50, 'مكياج', 'instock', 0, 40, 'product-7-1.jpg', 'Null', 2, '2023-09-13 01:44:06', '2023-10-16 15:51:01'),
(8, 'حقيبة كتف', 'hkyb-ktf', 'حقيبة يد من بام', 'Shield حقيبة كروس جلد سوداء مع قماش', 245.00, 245.00, 'حقيبة', 'instock', 0, 31, 'product-8-1.jpg', 'Null', 4, '2023-09-13 01:44:06', '2023-10-16 15:52:16'),
(9, 'سيدة الموضة للنظارات الشمسي', 'https://www.jumia.com.eg/ar/shein-ombre-lens-fashion-glasses-white-45825088.html', 'عباية أسود حرير ', 'عباية أسود حرير من أرقي و أبسط الموديلات الحصرية بها سوستة أمامية متحركة  تتميز بأنها عملية في اللبس مصنوعة من الكريب السعودي لتناسب كل الاوقات وكل الاعمار', 600.00, 600.00, 'نظارات', 'instock', 0, 38, 'product-9-1.jpg', 'Null', 4, '2023-09-13 01:44:07', '2023-10-16 17:47:40'),
(10, 'بدل رجالي', 'https://www.mtgers.com/%D8%A7%D9%84%D9%85%D9%84%D8%A7%D8%A8%D8%B3-%D8%A7%D9%84%D8%B1%D8%AC%D8%A7%D9%84%D9%8A%D8%A9', 'Tie Shop بونيه بدون خياطه', 'بونيه بدون خياطه بجودة عالية من القطن مناسب لجميع الفصول خامة خفيفة ناعمة بتصميم عصري انيق بالوان مختلفة', 40.00, 40.00, 'بدلة', 'instock', 0, 26, 'product-10-1.jpg', 'Null', 5, '2023-09-13 01:44:07', '2023-10-16 16:40:32'),
(11, 'مكنسة كهربائية', 'https://www.mtgers.com/%D8%A7%D9%84%D8%A7%D8%AC%D9%87%D8%B2%D8%A9-%D8%A7%D9%84%D9%85%D9%86%D8%B2%D9%84%D9%8A%D8%A9', 'طقم ماليزي قطعتين نقاب بتندا وطرحه', 'طقم ماليزي قطعتين نقاب بتندا وطرحه مربعه كبيره - خامة شيفون مريحة وعملية و فنيش ممتاز- أسود', 189.00, 189.00, 'مكنسة', 'instock', 0, 20, 'product-11-1.jpg', 'Null', 9, '2023-09-13 01:44:07', '2023-10-16 16:43:50'),
(12, 'شاشة سمارت TV', 'https://www.mtgers.com/%D8%A7%D9%84%D8%A7%D8%AC%D9%87%D8%B2%D8%A9-%D8%A7%D9%84%D9%85%D9%86%D8%B2%D9%84%D9%8A%D8%A9/%D8%AA%D9%84%D9%81%D8%B2%D9%8A%D9%88%D9%86%D8%A7%D8%AA', 'صندل حريمي بكعب ', 'xo style صندل حريمي بكعب -خامات عاليه الجود -6 سم', 692.00, 692.00, 'سمارت', 'instock', 0, 15, 'product-12-1.jpg', 'Null', 1, '2023-09-13 01:44:07', '2023-10-16 16:46:45'),
(13, 'احذية رياضية', 'https://www.almanea.sa/electronics-c-7444/computers-c-7434', 'lile صندل شرائط شمواه - اسود', 'أفضل الخامات بأرخص الأسعار.مكانك الأمثل للحقائب ذات الجودة العالية.جميع الأكسسوارات (السحاب،الأزرار،الجيوب….إلخ) قد يتغير لونها أو حجمها أو شكلها', 249.00, 249.00, 'احذية رياضية', 'instock', 0, 20, 'product-13-1.jpg', 'Null', 2, '2023-09-13 01:44:07', '2023-10-16 17:03:11'),
(14, 'شميز حريمي', 'https://www.mtgers.com/%D8%A7%D9%84%D9%85%D9%84%D8%A7%D8%A8%D8%B3-%D8%A7%D9%84%D9%86%D8%B3%D8%A7%D8%A6%D9%8A%D8%A9/%D9%81%D8%B3%D8%A7%D8%AA%D9%8A%D9%86', 'إنفينيكس سمارت 7 6.6 بوصة 64 جيجا/3 جيجا', 'هاتف إنفينيكس سمارت 7 6.6 بوصة 64 جيجابايت/3 جيجابايت ثنائي الشريحة - أزرق', 3325.00, 3325.00, 'شميز', 'instock', 0, 25, 'product-14-1.jpg', 'Null', 6, '2023-09-13 01:44:07', '2023-10-16 17:11:48'),
(15, 'حقيبة يد', 'https://www.mtgers.com/%D8%A7%D9%84%D8%B4%D9%86%D8%B7-%D9%88%D8%A7%D9%84%D8%AD%D9%82%D8%A7%D8%A6%D8%A8', 'دريس بناتي من التول موديل مميز', 'فستان بناتي مميز نجوم مصنوع من الريب المضلع والتل المستورد ليعطي شياكه واناقه حين أرتدائه مناسب للصيف لخامته المستورده', 399.00, 399.00, 'حقائب', 'instock', 0, 49, 'product-15-1.jpg', 'Null', 4, '2023-09-13 01:44:07', '2023-10-16 17:15:01'),
(16, 'ادوات للشعر', 'adoat-llshaar', 'خمار ماليزى كبير مميز لون بني', 'يعتبر هذا المنتج من فتاه من المنتجات الأساسية للاستخدام اليومي ولا يمكن الاستغناء عنه حيث أنه يصلح لجميع الفصول, كما ان الخامة معالجة ضد الحساسية ،', 116.00, 116.00, 'ادوات للشعر', 'instock', 0, 28, 'product-16-1.jpg', 'Null', 2, '2023-09-13 01:44:07', '2023-10-16 15:31:39'),
(18, 'حزانة الكترونية', 'https://www.jumia.com.eg/ar/safety-tech-digital-safe-box-503531-gn-50-eia-39495276.html', 'خزنة إلكترونية من سيفتى تك', 'Safety Tech خزنة إلكترونية من سيفتى تك مقاس 50*35*31', 4449.00, 4449.00, 'حزانة', 'instock', 0, 1, '1697537087.jpg', NULL, 10, '2023-10-17 06:48:42', '2023-10-17 07:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `utype` varchar(255) NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for Normal User',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Fawzi', 'admin@hotmail.com', NULL, '$2y$10$Cei3ewsdDxAOQ9Lkj0CXQegMTUT0SH.IwKpXrTPqmRuZKKY1WlFBG', 'ADM', NULL, '2023-09-18 07:49:19', '2023-09-18 07:49:19'),
(2, 'Hazem Fawzi', 'user@hotmail.com', NULL, '$2y$10$dQKeE96crdPRm6ccOERv/uPpJZJu0NePlta2yJduYTxUibUADrd/G', 'USR', NULL, '2023-09-18 07:50:29', '2023-09-18 07:50:29'),
(3, 'Naser Merchant', 'merchant@hotmail.com', NULL, '$2y$10$vuM7aG8j/o4MOwJ91GyZQuGxtJTeGq0W9psmvUOJ7YMLAsZKXmO3m', 'ADM', NULL, '2023-10-09 14:52:12', '2023-10-09 14:52:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
