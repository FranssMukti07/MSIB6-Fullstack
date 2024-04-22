-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbpos_sib5
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_produk`
--

DROP TABLE IF EXISTS `jenis_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_produk`
--

LOCK TABLES `jenis_produk` WRITE;
/*!40000 ALTER TABLE `jenis_produk` DISABLE KEYS */;
INSERT INTO `jenis_produk` VALUES (1,'elektroniks'),(2,'furniture'),(3,'makanan'),(4,'minuman'),(5,'komputer'),(6,'Makanan Ringan'),(7,'Minuman soda'),(8,'Makanan Berat');
/*!40000 ALTER TABLE `jenis_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kartu`
--

DROP TABLE IF EXISTS `kartu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kartu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(6) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `iuran` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_UNIQUE` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kartu`
--

LOCK TABLES `kartu` WRITE;
/*!40000 ALTER TABLE `kartu` DISABLE KEYS */;
INSERT INTO `kartu` VALUES (1,'GOLD','Gold Utama',0.05,100000),(2,'PLAT','Platinum Jaya',0.1,150000),(3,'SLV','Silver',0.025,50000),(4,'NO','Non Member',0,0),(7,'PGU','Perunggu',0.5,2000);
/*!40000 ALTER TABLE `kartu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `lihat_vendor`
--

DROP TABLE IF EXISTS `lihat_vendor`;
/*!50001 DROP VIEW IF EXISTS `lihat_vendor`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `lihat_vendor` (
  `nomor` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `kota` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','manager','staff') NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'Siti','siti','siti','staff','siti.jpg'),(2,'Test','test','test','staff','test.jpg'),(3,'Admin','admin','967a9f8fa757dfb5fdda6e5e08579869fb9b2ae3','admin','admin.jpg'),(4,'Staff','staff','ae186d20e1a1b46737a98ef69fc0896ba7cca385','staff','staff.jpg');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_11_03_014141_create_staff_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jk` char(1) NOT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `kartu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`),
  KEY `fk_pelanggan_kartu1_idx` (`kartu_id`),
  KEY `idx_nama_pelanggan` (`nama`),
  KEY `idx_tgllahir_pelanggan` (`tgl_lahir`),
  CONSTRAINT `fk_pelanggan_kartu1` FOREIGN KEY (`kartu_id`) REFERENCES `kartu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelanggan`
--

LOCK TABLES `pelanggan` WRITE;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` VALUES (1,'C001','Agung Sedayu Group','L','Solo','2010-01-01','sedayu@gmail.com',1),(2,'C002','Pandan Wangi','P','Yogyakarta','1950-01-01','wangi@gmail.com',2),(3,'C003','Sekar Mirah','P','Kediri','1983-02-20','mirah@yahoo.com',1),(4,'C004','Swandaru Geni','L','Kediri','1981-01-04','swandaru@yahoo.com',4),(5,'C005','Pradabashu','L','Pati','1985-04-02','prada85@gmail.com',2),(6,'C006','Gayatri Dwi','P','Jakarta','1987-11-28','gaya87@gmail.com',1),(7,'C007','Dewi Gyat','P','Jakarta','1988-12-01','giyat@gmail.com',1),(8,'C008','Andre Haru','L','Surabaya','1990-07-15','andre.haru@gmail.com',4),(9,'C009','Ahmad Hasan','L','Surabaya','1992-10-15','ahasan@gmail.com',4),(10,'C010','Cassanndra','P','Belfast','1990-11-20','casa90@gmail.com',1),(11,'K0010','Andi Wijaya','L','Tangerang','2023-11-07','andi@gmail.com',2),(12,'K0011','Ira','P','Jakarta','2023-11-07','ira@gmail.com',4);
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nokuitansi` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `ke` int(11) DEFAULT NULL,
  `pesanan_id` int(11) NOT NULL,
  `status_pembayaran` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nokuitansi_UNIQUE` (`nokuitansi`),
  KEY `fk_pembayaran_pesanan1_idx` (`pesanan_id`),
  CONSTRAINT `fk_pembayaran_pesanan1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembayaran`
--

LOCK TABLES `pembayaran` WRITE;
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
INSERT INTO `pembayaran` VALUES (1,'MD001','0000-00-00',30000,1,11,'Lunas'),(2,'MD002','2023-10-10',30000,2,11,'Lunas'),(3,'MD003','2023-10-10',30000,1,11,'Lunas'),(4,'MD004','2023-10-10',15000,1,2,''),(5,'MD005','2023-10-10',18000,2,2,'Lunas');
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembelian`
--

DROP TABLE IF EXISTS `pembelian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(45) DEFAULT NULL,
  `nomor` varchar(10) DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nomor_UNIQUE` (`nomor`),
  KEY `produk_id` (`produk_id`),
  KEY `vendor_id` (`vendor_id`),
  CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembelian`
--

LOCK TABLES `pembelian` WRITE;
/*!40000 ALTER TABLE `pembelian` DISABLE KEYS */;
INSERT INTO `pembelian` VALUES (1,'2019-10-10','P001',1,2,3500000,1),(2,'2019-11-20','P002',2,5,5500000,2),(3,'2019-12-12','P003',2,5,5400000,1),(4,'2020-01-20','P004',7,200,1800,3),(5,'2020-01-20','P005',5,100,2300,3);
/*!40000 ALTER TABLE `pembelian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',9,'token','f3aa341b43ce08e885ede4e6131a2c6c929045d90c244e30a479bdff6e88a7ba','[\"*\"]','2023-12-07 19:17:52',NULL,'2023-12-07 19:16:55','2023-12-07 19:17:52'),(2,'App\\Models\\User',7,'token','eb93b37bfd01e688d57efc50bd7b93e1ee1de2cc2c2a2487ad3fcda006c13ce8','[\"*\"]','2023-12-10 20:36:42',NULL,'2023-12-10 20:36:04','2023-12-10 20:36:42'),(3,'App\\Models\\User',7,'token','3d50a4f50c3564ba98b07c42f699277e2c811875b40949e30c7237b3fa42a598','[\"*\"]',NULL,NULL,'2023-12-10 22:36:55','2023-12-10 22:36:55'),(4,'App\\Models\\User',7,'token','f0bd20b0ed18a2925352b324f29a3810eaa5884c8c3a1a5621c7f18eeb1ba4e7','[\"*\"]','2023-12-10 22:44:54',NULL,'2023-12-10 22:42:55','2023-12-10 22:44:54'),(5,'App\\Models\\User',1,'token','39053abd3fe0d98710bb64b03669adc182667896e6542edc04e014424bf94b0e','[\"*\"]',NULL,NULL,'2023-12-20 18:11:12','2023-12-20 18:11:12');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pesanan_customer_idx` (`pelanggan_id`),
  CONSTRAINT `fk_pesanan_customer` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan`
--

LOCK TABLES `pesanan` WRITE;
/*!40000 ALTER TABLE `pesanan` DISABLE KEYS */;
INSERT INTO `pesanan` VALUES (1,'2015-11-04',9720000,1),(2,'2015-11-04',17500,3),(3,'2015-11-04',0,6),(4,'2015-11-04',0,7),(5,'2015-11-04',0,10),(6,'2015-11-04',0,2),(7,'2015-11-04',0,5),(8,'2015-11-04',0,4),(9,'2015-11-04',0,8),(10,'2015-11-04',0,9),(11,'2015-11-04',30000,9);
/*!40000 ALTER TABLE `pesanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan_items`
--

DROP TABLE IF EXISTS `pesanan_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pesanan_items_pesanan1_idx` (`pesanan_id`),
  KEY `fk_pesanan_items_produk1_idx` (`produk_id`),
  CONSTRAINT `fk_pesanan_items_pesanan1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_items_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan_items`
--

LOCK TABLES `pesanan_items` WRITE;
/*!40000 ALTER TABLE `pesanan_items` DISABLE KEYS */;
INSERT INTO `pesanan_items` VALUES (1,1,1,1,5040000),(2,3,1,1,4680000),(3,5,2,5,3500),(6,5,3,10,3500),(7,1,3,1,5040000),(9,5,5,10,3500),(10,5,6,20,3500);
/*!40000 ALTER TABLE `pesanan_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `pesanan_pelanggan_kartu`
--

DROP TABLE IF EXISTS `pesanan_pelanggan_kartu`;
/*!50001 DROP VIEW IF EXISTS `pesanan_pelanggan_kartu`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `pesanan_pelanggan_kartu` (
  `id` tinyint NOT NULL,
  `tanggal` tinyint NOT NULL,
  `total` tinyint NOT NULL,
  `kode` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `nama_kartu` tinyint NOT NULL,
  `diskon` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `stok` int(11) NOT NULL,
  `min_stok` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_produk_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_UNIQUE` (`kode`),
  KEY `fk_produk_jenis_produk1_idx` (`jenis_produk_id`),
  CONSTRAINT `fk_produk_jenis_produk1` FOREIGN KEY (`jenis_produk_id`) REFERENCES `jenis_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES (1,'TV01','Televisi 21 inchs',3500000,50500000,5,2,'',NULL,1),(2,'TV02','Televisi 40 inch',5500000,7440000,4,2,NULL,NULL,1),(3,'K001','Kulkas 2 pintu',3500000,4680000,6,2,'',NULL,1),(4,'M001','Meja Makan',500000,600000,4,3,NULL,NULL,2),(5,'TK01','Teh Kotak',3000,3500,6,10,'foto-5.png',NULL,4),(6,'PC01','PC Desktop HP',7000000,9984000,9,2,NULL,NULL,5),(7,'TB01','Teh Botol',2000,2500,53,10,'foto-7.jpg',NULL,4),(8,'AC01','Notebook Acer S',8000000,11232000,7,2,NULL,NULL,5),(9,'LN01','Notebook Lenovo',9000000,12480000,9,2,NULL,NULL,5),(11,'L005','Laptop Lenovo',13000000,16000000,5,2,'',NULL,1),(15,'L112','Kopi',20000,30000,10,15,'foto-15.png','Luwak White Coffee merupakan bubuk biji kopi luwak yang dikombinasikan dengan gurihnya krimer serta manisnya gula. Keharuman kopi serta rasa manisnya yang pas juga membuat popularitas Luwak White Coffee melejit.',4),(16,'L113','Teh Sosro 2',10000,15000,10,12,'.png',NULL,1),(18,'L0015','Laptop Asus',3000000,5000000,10,20,'foto-65542ffa66604.jpg',NULL,1),(19,'TV0115','Televisi 22 inc`',3500000,50500000,5,2,NULL,NULL,1),(20,'TV0116','Televisi 23 inc',3500000,50500000,5,2,NULL,NULL,1),(21,'TV0117','Televisi 24 inc',3500000,50500000,5,2,NULL,NULL,1),(22,'TV0118','Televisi 25 inc',3500000,50500000,5,2,NULL,NULL,1),(24,'TV0120','Televisi 27 inc',3500000,50500000,5,2,NULL,NULL,1),(25,'TV0121','Televisi 28 inc',3500000,50500000,5,2,NULL,NULL,1),(26,'TV0122','Televisi 29 inc',3500000,50500000,5,2,NULL,NULL,1),(27,'THP001','Teh Pucuk',4000,5000,10,2,'pucuk.jpg','Teh pucuk adalah',4),(28,'THP002','Teh Pucuk2',4000,5000,10,2,'pucuk.jpg','Teh pucuk adalah',4);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nip` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `staff_nip_unique` (`nip`),
  UNIQUE KEY `staff_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','manager','staff','pelanggan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pelanggan',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$b17tDHyYBc7.6b7hx.Nu9uXW6DBPH/DU8QIgvzrKpMs98pRo9apiG',NULL,'admin',NULL,'2023-11-22 18:56:50','2023-11-22 18:56:50'),(2,'manager','manager@gmail.com',NULL,'$2y$10$pyR12F61/cj5YwYHzy8VvOC7OtjTmL/YsRdCkY5QqHuor1aIHDLLy',NULL,'manager',NULL,'2023-11-26 19:02:58','2023-11-26 19:02:58'),(3,'Pelanggan','pelanggan@gmail.com',NULL,'$2y$10$CUIG1jWkBQuJV6ufY6L2cuTArsphJt0yTLB/TTM3OlReo1v/pRkxS',NULL,'pelanggan',NULL,'2023-11-26 19:03:41','2023-11-26 19:03:41'),(4,'Staff1','staff1@gmail.com',NULL,'$2y$10$8e0vIo8ZMTrmv8iI3SUHhOKSGxwFpBt7IDtuSpX2IhZbc7DqH7oDK',NULL,'manager','gCdOXXYV5FPhAWtTqO4vJAyfU9icPJhsfE68h9Qf.jpg.jpg','2023-11-26 20:48:29','2023-11-29 21:13:55'),(5,'Pelanggan2','pelanggan2@gmail.com',NULL,'$2y$10$8i8YZlXfYrwQdChuF/zLZeEIpGE.peA0uwwn7pHaOBeYYwn9lE8ye',NULL,'pelanggan',NULL,'2023-11-26 21:04:46','2023-11-26 21:04:46'),(6,'Pelanggan 3','pelanggan3@gmail.com',NULL,'$2y$10$fjkT4wW5ddzwyzWH2dmeG.t/12WuyHQNih.kzKb1HTn4bmafdQ5xu',NULL,'pelanggan',NULL,'2023-11-26 21:18:15','2023-11-26 21:18:15'),(7,'Pelanggan 4','pelanggan4@gmail.com',NULL,'$2y$10$y3JSDB3qjBWWfBsFGnQ37.RpBUAFFBELXqmE9CvT319NfSHS9eX86',NULL,'staff',NULL,'2023-11-27 21:25:17','2023-11-27 21:25:17'),(9,'pelanggan5','pelanggan5@gmail.com',NULL,'$2y$10$uGBXu5BiJZsiIH8NDA8Fw.o9hdlLcF6ry0jFA1Fjs8W1BnQZ8jf0K',NULL,'pelanggan',NULL,'2023-12-07 18:59:56','2023-12-07 18:59:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kontak` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nomor` (`nomor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor`
--

LOCK TABLES `vendor` WRITE;
/*!40000 ALTER TABLE `vendor` DISABLE KEYS */;
INSERT INTO `vendor` VALUES (1,'V001','PT Guna Samudra','Surabaya','Ali Nurdin'),(2,'V002','PT Pondok C9','Depok','Putri Ramadhani'),(3,'V003','CV Jaya Raya Semesta','Jakarta','Dwi Rahayu'),(4,'V004','PT Lekulo X','Kebumen','Mbambang G'),(5,'V005','PT IT Prima','Jakarta','David W');
/*!40000 ALTER TABLE `vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `lihat_vendor`
--

/*!50001 DROP TABLE IF EXISTS `lihat_vendor`*/;
/*!50001 DROP VIEW IF EXISTS `lihat_vendor`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `lihat_vendor` AS select `vendor`.`nomor` AS `nomor`,`vendor`.`nama` AS `nama`,`vendor`.`kota` AS `kota` from `vendor` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pesanan_pelanggan_kartu`
--

/*!50001 DROP TABLE IF EXISTS `pesanan_pelanggan_kartu`*/;
/*!50001 DROP VIEW IF EXISTS `pesanan_pelanggan_kartu`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pesanan_pelanggan_kartu` AS select `pesanan`.`id` AS `id`,`pesanan`.`tanggal` AS `tanggal`,`pesanan`.`total` AS `total`,`pelanggan`.`kode` AS `kode`,`pelanggan`.`nama` AS `nama`,`kartu`.`nama` AS `nama_kartu`,`kartu`.`diskon` AS `diskon` from ((`pesanan` join `pelanggan` on(`pesanan`.`pelanggan_id` = `pelanggan`.`id`)) join `kartu` on(`pelanggan`.`kartu_id` = `kartu`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-13  9:15:42
