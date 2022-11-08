-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2022 at 03:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autee`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(32) NOT NULL,
  `section_id` int(32) NOT NULL,
  `phone_number` varchar(12) DEFAULT NULL,
  `title` varchar(512) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `room_number` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `section_id`, `phone_number`, `title`, `description`, `room_number`) VALUES
(1, 17, '۶۴۵۴۳۳۰۰', 'خانم ثریا رنجبر', '', ''),
(2, 17, '۶۴۵۴۳۳۰۱', 'خانم طاهره بنایی', '', ''),
(3, 18, '۶۴۵۴۳۳۰۵', 'آقای سهراب نصیری', '', ''),
(4, 18, '۶۴۵۴۳۳۰۵', 'خانم مونا مشهدی', '', ''),
(5, 19, '۶۴۵۴۳۳۰۳', 'خانم زهرا زینی زاده', '', ''),
(6, 19, '۶۴۵۴۳۳۰۲', 'خانم بهناز عظامی', '', ''),
(7, 5, '۶۴۵۴۳۳۱۱', 'دکتر مهرداد عابدی', '', '۸۰۵'),
(8, 5, '۶۴۵۴۳۳۴۱', 'دکتر گيورک بابا ملک قره پتیان', '', '۸۰۷'),
(9, 5, '۶۴۵۴۳۳۳۸', 'دکتر عبدالعلی عبدی پور', '', '۸۰۹'),
(10, 5, '۶۴۵۴۳۳۱۰', 'دکتر مسعود شفیعی', '', '۸۱۱'),
(11, 5, '۶۴۵۴۳۳۲۱', 'دکتر مجتبی آقامیرسلیم', '', '۸۱۳'),
(12, 5, '۶۴۵۴۳۳۳۰', 'دکتر بهروز وحیدی', '', '۸۱۵'),
(13, 5, '۶۴۵۴۳۳۳۴', 'دکتر عباس محمدی', '', '۸۱۷'),
(14, 5, '۶۴۵۴۳۳۴۰', 'دکتر حیدر علی طالبی', '', '۸۱۹'),
(15, 5, '۶۴۵۴۳۳۵۳', 'دکتر سید حمید فتحی', '', '۸۲۱'),
(16, 5, '۶۴۵۴۳۳۴۳', 'دکتر سید حسین حسینیان', '', '۸۲۳'),
(17, 5, '۶۴۵۴۳۳۱۴', 'دکتر ایاز قربانی', '', '۸۲۵'),
(18, 5, '۶۴۵۴۳۳۲۲', 'دکتر حسن آقایی نیا', '', '۸۰۸'),
(19, 5, '۶۴۵۴۳۳۴۶', 'دکتر حسن رستگار', '', '۸۱۰'),
(20, 5, '۶۴۵۴۳۳۵۸', 'دکتر فرزانه عبدالهی', '', '۸۱۲'),
(21, 5, '۶۴۵۴۳۳۲۵', 'دکتر غلامرضا مرادی', '', '۸۱۴'),
(22, 5, '۶۴۵۴۳۳۲۶', 'دکتر محمد یاوری', '', '۸۲۰'),
(23, 5, '۶۴۵۴۳۳۳۹', 'مهندس سید امیر کاشی', '', '۸۲۲'),
(24, 5, '۶۴۵۴۳۳۴۷', 'دکتر محمد باقر منهاج', '', '۸۲۴'),
(25, 6, '', 'آبدارخانه', '', '۸۰۱'),
(26, 6, '', 'معاونت مالی-اداری و معاونت دانشجویی', '', '۸۰۲'),
(27, 6, '', 'اساتید پیشکسوت', '', '۸۰۶'),
(28, 6, '', 'شورای دانشکده مهندسی برق-سالن پروفسور نیکروش', '', '۸۲۶'),
(29, 7, '۶۴۵۴۳۳۵۰', 'دکتر شهرام منتصر کوهساری', '', '۷۰۵'),
(30, 7, '۶۴۵۴۳۳۵۲', 'دکتر حسن طاهری قزوینی', '', '۷۰۷'),
(31, 7, '۶۴۵۴۳۳۲۹', 'دکتر علی دوست محمدی', '', '۷۰۹'),
(32, 7, '۶۴۵۴۳۳۴۹', 'دکتر جواد شکرالهی مغانی', '', '۷۱۵'),
(33, 7, '۶۴۵۴۳۳۲۳', 'دکتر مرتضی محمدی اردهالی', '', '۷۱۷'),
(34, 7, '۶۴۵۴۳۳۰۹', 'دکتر امیرابولفضل صورتگر', '', '۷۲۳'),
(35, 7, '۶۴۵۴۳۳۳۵', 'دکتر حسین عسکریان ابیانه', '', '۷۲۵'),
(36, 7, '۶۴۵۴۳۳۴۵', 'دکتر مهدی کراری', '', '۷۲۷'),
(37, 7, '', 'دکتر حسن غفوری فرد', '', '۷۲۹'),
(38, 7, '۶۴۵۴۳۳۲۸', 'دکتر کریم فائز', '', '۷۳۵'),
(39, 7, '۶۴۵۴۳۳۴۸', 'دکتر سید حسام الدین صادقی', '', '۷۳۷'),
(40, 7, '۶۴۵۴۳۳۵۱', 'دکتر جعفر میلی منفرد', '', '۷۴۳'),
(41, 7, '۶۴۵۴۳۳۱۵', 'دکتر ابوالقاسم اسداله راعی', '', '۷۴۵'),
(42, 7, '۶۴۵۴۳۳۳۱', 'دکتر سید احمد معتمدی', '', '۷۴۵'),
(43, 7, '۶۴۵۴۳۵۲۱', 'دکتر پریسا دهخدا', '', '۷۱۱'),
(44, 7, '۶۴۵۴۵۱۹۸', 'دکتر ایمان شریفی', '', '۷۱۳'),
(45, 7, '۶۴۵۴۳۳۸۸', 'دکتر حسن کاتوزیان', '', '۷۱۹'),
(46, 7, '۶۴۵۴۳۳۳۲', 'دکتر حمیدرضا امین داور', '', '۷۲۱'),
(47, 7, '۶۴۵۴۵۵۵۷', 'دکتر محسن معزی', '', '۷۳۱'),
(48, 7, '۶۴۵۴۵۷۹۹', 'دکتر امیر نادر عسکر پور', '', '۷۳۳'),
(49, 7, '۶۴۵۴۳۳۴۲', 'دکتر ساناز سیدین', '', '۷۳۹'),
(50, 7, '۶۴۵۴۳۳۱۱', 'دکتر حمید شیخ زاده', '', '۷۴۱'),
(51, 8, '۶۴۵۴۳۳۷۷', 'دکتر مجید شالچیان', '', '۷۰۸'),
(52, 8, '۶۴۵۴۵۵۶۰', 'دکتر امیر جهانشاهی', '', '۷۱۶'),
(53, 8, '۶۴۵۴۵۸۱۱', 'دکتر حامد نفیسی', '', '۷۱۸'),
(54, 8, '۶۴۵۴۵۸۹۸', 'دکتر امیر خرسندی', '', '۷۲۸'),
(55, 8, '۶۴۵۴۵۵۵۱', 'دکتر وحید پوراحمدی', '', '۷۸۳'),
(56, 8, '۶۴۵۴۵۵۵۳', 'دکتر سعید شریفیان', '', '۷۰۲'),
(57, 8, '۶۴۵۴۵۵۵۲', 'دکتر حمزه بیرانوند', '', '۷۰۴'),
(58, 8, '۶۴۵۴۵۵۵۴', 'دکتر هاجر عطریانفر', '', '۷۰۶'),
(59, 8, '۶۴۵۴۳۳۷۵', 'دکتر محمدجواد عمادی', '', '۷۱۲'),
(60, 8, '۶۴۵۴۳۳۳۷', 'دکتر احمد افشار', '', '۷۱۴'),
(61, 8, '۶۴۵۴۳۳۱۸', 'دکتر رضا صراف شیرازی', '', '۷۲۰'),
(62, 8, '۶۴۵۴۳۳۱۸', 'مهندس طاهره سیدنا', '', '۷۲۲'),
(63, 8, '۶۴۵۴۳۳۷۷', 'دکتر غلامحسین رضوانی', '', '۷۲۴'),
(64, 8, '۶۴۵۴۳۳۸۲', 'دکتر فرهاد آزادی نمین', '', '۷۲۶'),
(65, 8, '۶۴۵۴۷۹۷', 'دکتر محمداعظم خسروی', '', '۷۳۲'),
(66, 8, '۶۴۵۴۳۳۲۰', 'دکتر غلامحسین ریاحی', '', '۷۳۴'),
(67, 8, '', 'دکتر میرابوالحسن فصیحی', '', '۷۴۰'),
(68, 8, '۶۴۵۴۳۳۱۳', 'دکتر سید مصطفی صفوی همایی', '', '۷۴۲'),
(69, 8, '۶۴۵۴۵۷۹۸', 'دکتر یاسر نوروزی', '', '۷۴۴'),
(70, 10, '', 'آزمایشگاه تحقیقاتی انتشار امواج و اندازه گیری مایکروویو', '', '۹۰۷'),
(71, 10, '', 'آزمایشگاه مکاترونیک', '', '۹۰۹'),
(72, 10, '', 'قطب علمی الکترونیک، سامانه های پردازش دیجیتال و آز تحقیقاتی پردازش گفتار', '', '۹۱۳ و ۹۱۵'),
(73, 10, '', 'رباتیک تعاملی، دکتر خسروی', '', '۹۰۶'),
(74, 10, '', 'دبیرخانه دائمی- کمیته راهبردی کنفرانس بین المللی- موج میلیمتری و تراهرتز- قطب علمی قدرت- سیستم های مخابرات رادیوئی- قطب علمی الکترونیک- قطب علمی کنترل و رباتیک', '', '۹۱۴'),
(75, 10, '', 'پژوهشکده بهره برداری ایمن شبکه- پژوهشکده مخابرات و الکترومغناطیس کاربردی', '', '۹۲۰'),
(76, 11, '', 'آز پایداری سیستم های دینامیکی', '', ''),
(77, 11, '', 'آز تحقیقاتی بهینه سازی توزیع شده و هوشمند', '', ''),
(78, 11, '', 'آز تحقیقاتی مایکروویو/ موج میلیمتری و مخابرات بدون سیم', '', ''),
(79, 11, '', 'قطب علمی سیستم های مخابرات رادیویی فرکانس بالا', '', ''),
(80, 11, '', 'قطب علمی سیستم های مخابرات رادیویی فرکانس بالا، آز تحقیقاتی رادار', '', ''),
(81, 11, '', 'قطب علمی مخابرات، آز تحقیقاتی الکترومغناطیس', '', ''),
(82, 11, '', 'آز تحقیقاتی بلادرنگ و رباتیک', '', ''),
(83, 12, '', 'آز تحقیقاتی اجزاء محدود', '', ''),
(84, 12, '', 'سرپرست شبکه کامپیوتر آقای مهندس جواد استادرضا', '', '۶۰۸'),
(85, 12, '', 'انجمن فناوری اطلاعات و ارتباطات ایران', '', '۶۱۲'),
(86, 13, '', 'آز تحقیقاتی هوش محاسباتی و سیستم های ابعاد وسیع', '', ''),
(87, 13, '', 'آز تحقیقاتی اتوماسیون و فناوری اطلاعات', '', ''),
(88, 13, '', 'آز تحقیقاتی حفاظت سیستم های قدرت', '', ''),
(89, 13, '', 'آز رله و حفاظت', '', ''),
(90, 13, '', 'آز آنالیز سیستم های قدرت', '', ''),
(91, 13, '', 'آمفی تئاتر دکتر ادیبی', '', ''),
(92, 14, '', 'محاسبات فراگیر', '', ''),
(93, 14, '', 'آز تحقیقاتی نیمه هادی', '', ''),
(94, 14, '', 'آز ریز فناوری زیستی', '', ''),
(95, 14, '', 'اتاق دکتر مهدی صلای نادری', '', ''),
(96, 14, '', 'آز الکترونیک لیزر', '', ''),
(97, 14, '', 'آز تحقیقاتی مخابرات دیجیتال', '', ''),
(98, 14, '', 'آز تحقیقاتی فتونیک ( PRL )', '', ''),
(99, 15, '', 'آز کاربردی اینترنت اشیا', '', ''),
(100, 15, '', 'آز مدارهای منطقی و میکروپروسسور', '', ''),
(101, 15, '', 'آز تحقیقاتی بهینه سازی توزیع شده و هوشمند', '', ''),
(102, 15, '', 'آز الکترونیک- آز پالس- آز سیستم تلویزیون', '', ''),
(103, 15, '', 'آز الکترونیک پیشرفته خودرو', '', ''),
(104, 15, '', 'آز سامانه های هوشمند دیجیتال', '', ''),
(105, 15, '', 'طراحی مدارهای مجتمع', '', ''),
(106, 16, '', 'آز اندازه گیری و مدار', '', ''),
(107, 16, '', 'آز مدارهای مخابراتی- آز مایکروویو و آنتن', '', ''),
(108, 16, '', 'آز کنترل صنعتی', '', ''),
(109, 16, '', 'آز کنترل سیستم های خطی', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `subtitle` varchar(512) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `availability` varchar(512) DEFAULT NULL,
  `color` varchar(16) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `parent` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `slug`, `title`, `subtitle`, `description`, `availability`, `color`, `type`, `icon`, `parent`) VALUES
(1, 'dean', 'دفتر رئیس دانشکده', NULL, NULL, 'شنبه تا چهارشنبه در ساعات اداری', 'default', 'parent', NULL, -1),
(2, 'education', 'دفتر آموزش', NULL, NULL, 'شنبه تا چهارشنبه در ساعات اداری', 'default', 'parent', NULL, -1),
(3, 'graduate', 'دفتر تحصیلات تکمیلی', NULL, NULL, 'شنبه تا چهارشنبه در ساعات اداری', 'default', 'parent', NULL, -1),
(4, 'faculty', 'اتاق اساتید', NULL, NULL, NULL, 'default', 'parent', NULL, -1),
(5, '#8th-faculty', 'اساتید طبقه هشتم ابوریحان', NULL, NULL, NULL, 'default', 'faculty', NULL, 4),
(6, '#8th-centers', 'مراکز طبقه هشتم ابوریحان', NULL, NULL, NULL, 'default', 'center', NULL, 4),
(7, '#7th-N', 'اساتید طبقه هفتم ابوریحان (راهرو شمالی)', NULL, NULL, NULL, 'default', 'faculty', NULL, 4),
(8, '#7th-S', 'اساتید طبقه هفتم ابوریحان (راهرو جنوبی)', NULL, NULL, NULL, 'default', 'faculty', NULL, 4),
(9, 'labs', 'آزمایشگاه ها', NULL, NULL, NULL, 'default', 'parent', NULL, -1),
(10, '#9th', 'طبقه نهم', NULL, NULL, NULL, 'default', 'lab', NULL, 9),
(11, '#6thNE', 'طبقه ششم (راهرو شمالی-شرقی)', NULL, NULL, NULL, 'default', 'lab', NULL, 9),
(12, '#6thSE', 'طبقه ششم (راهرو جنوبی-شرقی)', NULL, NULL, NULL, 'default', 'lab', NULL, 9),
(13, '#3thNE', 'طبقه سوم (راهرو شمالی-شرق)', NULL, NULL, NULL, 'default', 'lab', NULL, 9),
(14, '#3thSE', 'طبقه سوم (راهرو جنوبی-شرق)', NULL, NULL, NULL, 'default', 'lab', NULL, 9),
(15, '#3thNW', 'طبقه سوم (راهرو شمالی-غرب)', NULL, NULL, NULL, 'default', 'lab', NULL, 9),
(16, '#3thSW', 'طبقه سوم (راهرو جنوبی-غرب)', NULL, NULL, NULL, 'default', 'lab', NULL, 9),
(17, '#d', 'کارشناسان دفتر ریاست در طبقه هشتم ابوریحان', NULL, NULL, NULL, 'default', 'office', NULL, 1),
(18, '#e', 'کارشناسان دفتر آموزش در طبقه چهارم ابوریحان', NULL, NULL, NULL, 'default', 'office', NULL, 2),
(19, '#g', 'کارشناسان دفتر تحصیلات تکمیلی در طبقه چهارم ابوریحان', NULL, NULL, NULL, 'default', 'office', NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section` (`section_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entries`
--
ALTER TABLE `entries`
  ADD CONSTRAINT `section` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;