-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: 172.19.0.2    Database: bobbin
-- ------------------------------------------------------
-- Server version	5.7.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `danh_muc`
--

DROP TABLE IF EXISTS `danh_muc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `danh_muc` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc_cha` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `noi_bat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danh_muc`
--

LOCK TABLES `danh_muc` WRITE;
/*!40000 ALTER TABLE `danh_muc` DISABLE KEYS */;
INSERT INTO `danh_muc` VALUES (36,'BoBBIN','bobbin',-1,'2022-10-24 21:15:12','2022-10-24 21:15:12',1),(37,'Gia Công Sản Phẩm Nhựa Ép','gia-cong-san-pham-nhua-ep',-1,'2022-10-24 21:16:39','2022-10-25 00:27:54',1),(38,'Công Đoạn Sản Xuất Hàng Bobbin','cong-doan-san-xuat-hang-bobbin',-1,'2022-10-24 23:47:31','2022-10-25 00:28:15',1),(39,'BoBBIN Đóng Thùng','bobbin-dong-thung',-1,'2022-10-25 00:04:04','2022-10-25 00:28:29',1);
/*!40000 ALTER TABLE `danh_muc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hinh_anh_cty`
--

DROP TABLE IF EXISTS `hinh_anh_cty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hinh_anh_cty` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hinh_anh_cty`
--

LOCK TABLES `hinh_anh_cty` WRITE;
/*!40000 ALTER TABLE `hinh_anh_cty` DISABLE KEYS */;
INSERT INTO `hinh_anh_cty` VALUES (1,'Phòng kế toán','phong-ke-toan','8GTc_phong-ke-toan.jpg_phong-ke-toan','2022-10-23 22:29:48','2022-10-23 22:29:48'),(2,'Phòng họp','phong-hop','fxxK_phong-hop.jpg_phong-hop','2022-10-23 22:30:12','2022-10-23 22:30:12'),(3,'Xưởng sản xuất','xuong-san-xuat','YVyz_xuong-3.jpg_xuong-san-xuat','2022-10-23 22:30:33','2022-10-23 22:30:33'),(4,'Hành lang văn phòng','hanh-lang-van-phong','X7sT_hanh-lang-van-phong.jpg_hanh-lang-van-phong','2022-10-23 22:31:01','2022-10-23 22:31:01'),(5,'Phòng nguyên liệu','phong-nguyen-lieu','xkpb_phong-nguyen-lieu.png_phong-nguen-lieu','2022-10-23 22:31:33','2022-10-23 22:31:48'),(6,'Phòng chất lượng','phong-chat-luong','bOCR_phong-chat-luong.png_phong-chat-luong','2022-10-23 22:32:40','2022-10-23 22:32:40'),(7,'Văn phòng','van-phong','Yv9S_van-phong.jpg_van-phong','2022-10-23 22:33:12','2022-10-23 22:33:12'),(8,'Xưởng sản xuất','xuong-san-xuat','GZws_xuong-2.jpg_xuong-san-xuat','2022-10-23 22:33:32','2022-10-23 22:33:32'),(9,'Xưởng sản xuất','xuong-san-xuat','em7u_xuong-1.jpg_xuong-san-xuat','2022-10-23 22:33:47','2022-10-23 22:33:47');
/*!40000 ALTER TABLE `hinh_anh_cty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `may_in`
--

DROP TABLE IF EXISTS `may_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `may_in` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `may_in`
--

LOCK TABLES `may_in` WRITE;
/*!40000 ALTER TABLE `may_in` DISABLE KEYS */;
/*!40000 ALTER TABLE `may_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2020_11_07_045513_danhmuc',1),(2,'2020_11_07_072715_create_may_in_table',2),(3,'2020_11_07_073137_create_san_pham_in_table',2),(4,'2020_11_07_073924_create_thong_tin_cty_in_table',2),(5,'2020_11_07_074310_create_vat_lieu_in_table',2),(6,'2020_11_07_075659_create_users_table',3),(7,'2020_11_08_022446_create_thong_tin_website_table',4),(8,'2020_11_08_142530_add_noi_bat_to_danh_muc_table',5),(9,'2022_10_22_222414_create_hinh_anh_cty',6),(10,'2022_10_24_213027_create_san_pham_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `san_pham` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_muc` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham`
--

LOCK TABLES `san_pham` WRITE;
/*!40000 ALTER TABLE `san_pham` DISABLE KEYS */;
INSERT INTO `san_pham` VALUES (1,'BoBBIN thành phẩm','bobbin-thanh-pham','BOBBIN-11','Pugu_bobbin-thanh-pham-2.png_bobbin-thanh-pham','<p>Bobbin vòng ngoài 330 màu đen</p>',36,'2022-10-24 21:58:57','2022-10-24 21:58:57'),(2,'Bobbin vòng ngoài 330 xanh','bobbin-vong-ngoai-330-xanh','BOBBIN-02','e1YO_bobbin-vong-ngoai-330-xanh.png_bobbin-vong-ngoai-330-xanh','<p>Bobbin vòng ngoài 330 màu xanh</p>',36,'2022-10-24 22:03:02','2022-10-24 22:03:02'),(3,'Bobbin vòng ngoài 380 trắng (lõi)','bobbin-vong-ngoai-380-trang-loi-','BOBBIN-05','bFU0_bobbin-vong-ngoai-380-trang-loi.png_bobbin-vong-ngoai-380-trang-loi-','<p>Bobbin vòng ngoài 380 trắng (lõi)</p>',36,'2022-10-24 22:11:57','2022-10-24 22:11:57'),(4,'BoBBIN thành phẩm','bobbin-thanh-pham','BOBBIN-10','MVkh_bobbin-thanh-pham.png_bobbin-thanh-pham','<p>BoBBIN thành phẩm</p>',36,'2022-10-24 23:30:03','2022-10-24 23:30:03'),(5,'Bobbin vòng ngoài 380 đen(mặt chính)','bobbin-vong-ngoai-380-den-mat-chinh-','BOBBIN-03','d9TT_bobbin-vong-ngoai-380-den-ching.png_bobbin-vong-ngoai-380-den-mat-chinh-','<p>Bobbin vòng ngoài 380 đen(mặt chính)</p>',36,'2022-10-24 22:05:28','2022-10-24 22:05:28'),(6,'Bobbin vòng ngoài 380 trắng (mặt chính)','bobbin-vong-ngoai-380-trang-mat-chinh-','BOBBIN-06','lDP0_bobbin-vong-ngoai-380-trang-chinh.png_bobbin-vong-ngoai-380-trang-mat-chinh-','<p>Bobbin vòng ngoài 380 trắng (mặt chính)</p>',36,'2022-10-24 22:13:02','2022-10-24 22:13:02'),(7,'Bobbin vòng ngoài 380 trắng (mặt nghiêng)','bobbin-vong-ngoai-380-trang-mat-nghieng-','BOBBIN-07','MbC7_bobbin-vong-ngoai-380-trang-nghieng.png_bobbin-vong-ngoai-380-trang-mat-nghieng-','<p>Bobbin vòng ngoài 380 trắng (mặt nghiêng)</p>',36,'2022-10-24 22:13:41','2022-10-24 22:13:41'),(8,'Bobbin vòng ngoài 380 xanh (mặt chính)','bobbin-vong-ngoai-380-xanh-mat-chinh-','BOBBIN-08','1LXu_bobbin-vong-ngoai-380-xanh-chinh.png_bobbin-vong-ngoai-380-xanh-mat-chinh-','<p>Bobbin vòng ngoài 380 xanh (mặt chính)</p>',36,'2022-10-24 22:14:55','2022-10-24 22:16:24'),(9,'Bobbin vòng ngoài 380 xanh (mặt nghiêng)','bobbin-vong-ngoai-380-xanh-mat-nghieng-','BOBBIN-09','a2p8_bobbin-vong-ngoai-380-xanh-nghieng.png_bobbin-vong-ngoai-380-xanh-mat-nghieng-','<p>Bobbin vòng ngoài 380 xanh (mặt nghiêng)</p>',36,'2022-10-24 22:17:15','2022-10-24 22:17:15'),(10,'Bobbin vòng ngoài 380 đen(mặt nghiêng)','bobbin-vong-ngoai-380-den-mat-nghieng-','BOBBIN-04','HiTx_bobbin-vong-ngoai-380-den-nghieng.png_bobbin-vong-ngoai-380-den-mat-nghieng-','<p>Bobbin vòng ngoài 380 đen(mặt nghiêng)</p>',36,'2022-10-24 22:06:04','2022-10-24 22:06:04'),(11,'Bobbin vòng ngoài 330 xanh','bobbin-vong-ngoai-330-xanh','BOBBIN-02','e1YO_bobbin-vong-ngoai-330-xanh.png_bobbin-vong-ngoai-330-xanh','<p>Bobbin vòng ngoài 330 màu xanh</p>',36,'2022-10-24 23:30:48','2022-10-24 23:30:48'),(12,'BoBBIN thành phẩm (nghiêng)','bobbin-thanh-pham-nghieng-','BOBBIN-12','jDqi_bobbin-thanh-pham-mat-nghieng.png_bobbin-thanh-pham-nghieng-','<p>BoBBIN thành phẩm (nghiêng)</p>',36,'2022-10-24 23:31:31','2022-10-24 23:31:31'),(13,'Gia công sản phẩm nhựa ép','gia-cong-san-pham-nhua-ep','GIACONG-01','Jq2v_giacong1.jpg_gia-cong-san-pham-nhua-ep','<p>Gia công sản phẩm nhựa ép</p>',37,'2022-10-24 23:34:14','2022-10-24 23:34:14'),(14,'Gia công sản phẩm nhựa ép','gia-cong-san-pham-nhua-ep','GIACONG-02','NDuf_giacong2.jpg_gia-cong-san-pham-nhua-ep','<p>Gia công sản phẩm nhựa ép</p>',37,'2022-10-24 23:34:39','2022-10-24 23:34:39'),(15,'Gia công sản phẩm nhựa ép','gia-cong-san-pham-nhua-ep','GIACONG-03','HUsL_giacong3.png_gia-cong-san-pham-nhua-ep','<p>Gia công sản phẩm nhựa ép</p>',37,'2022-10-24 23:35:03','2022-10-24 23:35:03'),(16,'Gia công sản phẩm nhựa ép','gia-cong-san-pham-nhua-ep','GIACONG-04','DDzt_giacong4.jpg_gia-cong-san-pham-nhua-ep','<p>Gia công sản phẩm nhựa ép</p>',37,'2022-10-24 23:35:39','2022-10-24 23:35:39'),(17,'Robot gắp hàng','robot-gap-hang','STEP-1','9RGv_robot-gap-hang.png_robot-gap-hang','<p>Robot gắp hàng</p>',38,'2022-10-24 23:50:32','2022-10-24 23:50:32'),(18,'Công nhân gia công đảm bảo hàng sạch bavia','cong-nhan-gia-cong-dam-bao-hang-sach-bavia','STEP-2','ulTd_cong-doan-2.png_cong-nhan-gia-cong-dam-bao-hang-sach-bavia','<p>Công nhân gia công đảm bảo hàng sạch bavia</p>',38,'2022-10-24 23:51:20','2022-10-24 23:51:20'),(19,'Xếp hàng ngay ngăn gọn gàng','xep-hang-ngay-ngan-gon-gang','STEP-3','VHCE_cong-doan-3.png_xep-hang-ngay-ngan-gon-gang','<p>Xếp hàng ngay ngăn gọn gàng</p>',38,'2022-10-24 23:52:00','2022-10-24 23:52:00'),(20,'Hàn bằng máy','han-bang-may','STEP-4','IBjf_cong-doan-4.png_han-bang-may','<p>Hàn bằng máy</p>',38,'2022-10-24 23:52:44','2022-10-24 23:52:44'),(21,'Dùng súng hơi xì sạch bụi bẩn','dung-sung-hoi-xi-sach-bui-ban','STEP-5','IeaJ_cong-doan-5.png_dung-sung-hoi-xi-sach-bui-ban','<p>Dùng súng hơi xì sạch bụi bẩn</p>',38,'2022-10-24 23:53:19','2022-10-24 23:53:19'),(22,'Lấy giẻ sạch lau lại hàng trước khi đóng thùng','lay-gie-sach-lau-lai-hang-truoc-khi-dong-thung','STEP-6','7gHp_cong-doan-6.png_lay-gie-sach-lau-lai-hang-truoc-khi-dong-thung','<p>Lấy giẻ sạch lau lại hàng trước khi đóng thùng</p>',38,'2022-10-24 23:53:49','2022-10-24 23:53:49'),(23,'BoBBIN đóng thùng','bobbin-dong-thung','THUNG-BOBBIN','ySXR_bobin-dong-thung-1.png_bobbin-dong-thung','<p>Trên mỗi đáy thùng có lót miếng gỗ phẳng cố định, giúp sản phẩm không bị biến dạng</p>',39,'2022-10-25 00:09:08','2022-10-25 00:09:08'),(24,'BoBBIN đóng thùng','bobbin-dong-thung','THUNG-BOBBIN-02','t9od_bobin-dong-thung-2.png_bobbin-dong-thung','<p>Trên mỗi thùng hàng đều bọc túi bóng, giúp sản phẩm sạch sẽ không bụi bẩn</p>',39,'2022-10-25 00:09:39','2022-10-25 00:09:57'),(25,'BoBBIN đóng thùng','bobbin-dong-thung','THUNG-BOBBIN-03','HRGC_bobin-dong-thung-3.png_bobbin-dong-thung','<p>Túi bóng được bọc lại cẩn thận, giữ sản phẩm sạch sẽ</p>',39,'2022-10-25 00:10:46','2022-10-25 00:10:46'),(26,'BoBBIN đóng thùng','bobbin-dong-thung','THUNG-BOBBIN-04','RM21_bobin-dong-thung-4.png_bobbin-dong-thung','<p>Đóng nắp thùng để khi xếp không ảnh hưởng đến sản phẩm</p>',39,'2022-10-25 00:11:16','2022-10-25 00:11:16'),(27,'BoBBIN đóng thùng','bobbin-dong-thung','THUNG-BOBBIN-05','llWq_bobin-dong-thung-5.png_bobbin-dong-thung','<p>Trên mỗi thùng có dán tem mã hàng, Mỗi mã hàng phân tách khu vực để hàng riêng, tránh nhầm lẫn hàng</p>',39,'2022-10-25 00:14:02','2022-10-25 00:14:02'),(28,'BoBBIN đóng thùng','bobbin-dong-thung','THUNG-BOBBIN-06','i2jF_bobin-dong-thung-6.png_bobbin-dong-thung','<p>Thùng xếp ngay ngắn, gọn gàng, có tên Công ty</p>',39,'2022-10-25 00:14:50','2022-10-25 00:14:50');
/*!40000 ALTER TABLE `san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san_pham_in`
--

DROP TABLE IF EXISTS `san_pham_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `san_pham_in` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_lieu` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham_in`
--

LOCK TABLES `san_pham_in` WRITE;
/*!40000 ALTER TABLE `san_pham_in` DISABLE KEYS */;
INSERT INTO `san_pham_in` VALUES (1,'In logo trên vật liệu nhựa - 1','in-logo-tren-vat-lieu-nhua-1','SsSx_sp2.jpg','<p>Chúng tôi nhận In logo trên vật liệu nhựa - 1</p>',1,'2020-11-07 18:57:10','2021-07-18 16:58:08'),(2,'In logo trên vật liệu nhựa - 2','in-logo-tren-vat-lieu-nhua-2','w3hZ_sp2.jpg','<p>In logo trên vật liệu nhựa - 2</p>',1,'2020-11-07 19:00:48','2021-07-18 16:58:08'),(3,'In logo trên vật liệu sứ - 1','in-logo-tren-vat-lieu-su-1','0h3m_sp5.jpg','<p>In logo trên vật liệu sứ - 1</p>',2,'2020-11-07 19:05:09','2021-07-18 16:58:08'),(4,'In logo trên vật liệu sứ- 2','in-logo-tren-vat-lieu-su-2','1Zxx_sp6.jpg','<p>In logo trên vật liệu sứ- 2</p>',2,'2020-11-07 19:05:31','2021-07-18 16:58:08');
/*!40000 ALTER TABLE `san_pham_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thong_tin_cty`
--

DROP TABLE IF EXISTS `thong_tin_cty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `thong_tin_cty` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thong_tin_cty`
--

LOCK TABLES `thong_tin_cty` WRITE;
/*!40000 ALTER TABLE `thong_tin_cty` DISABLE KEYS */;
/*!40000 ALTER TABLE `thong_tin_cty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thong_tin_website`
--

DROP TABLE IF EXISTS `thong_tin_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `thong_tin_website` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thong_tin_website`
--

LOCK TABLES `thong_tin_website` WRITE;
/*!40000 ALTER TABLE `thong_tin_website` DISABLE KEYS */;
INSERT INTO `thong_tin_website` VALUES (1,'0333.206.366','superiorprecisevn@gmail.com','Thôn Hà Liễu, Xã Phương Liễu, Huyện Quế Võ, Tỉnh Bắc Ninh','Chúng tôi chuyên sản xuất và cung cấp các sản phẩm BOBBIN và các sản phẩm về khuôn ép.',NULL,'2022-10-25 16:46:06','0333.206.366');
/*!40000 ALTER TABLE `thong_tin_website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$V8xdTtvQwnuF5b8v0tEOSeWoCmdIz8uEuiHa2IzoB84fa5R743m5S',NULL,'2020-11-07 19:15:14','2020-11-07 19:16:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vat_lieu_in`
--

DROP TABLE IF EXISTS `vat_lieu_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vat_lieu_in` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vat_lieu_in`
--

LOCK TABLES `vat_lieu_in` WRITE;
/*!40000 ALTER TABLE `vat_lieu_in` DISABLE KEYS */;
INSERT INTO `vat_lieu_in` VALUES (1,'Nhựa','nhua','2020-11-07 08:46:25','2021-07-18 16:58:16'),(2,'Sứ','su','2020-11-07 08:46:30','2021-07-18 16:58:16');
/*!40000 ALTER TABLE `vat_lieu_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khong_dau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (5,'Sản xuất in ấn tại nhà máy','san-xuat-in-an-tai-nha-may','https://youtu.be/P7bJHT4adtA','2020-11-10 09:25:58','2022-10-25 16:44:06');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-25 17:32:10
