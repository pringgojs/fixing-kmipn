-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: kmipn
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','admin@kmipn.com','$2y$10$82ISN4uIRebkA6WweQ5HMe.EFuRphEbOZonr.FKpl2uE2KbCjrx6W',NULL,'2018-08-03 08:22:13','2018-08-03 08:22:13');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `status` enum('Publish','Draft') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counters`
--

DROP TABLE IF EXISTS `counters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counters`
--

LOCK TABLES `counters` WRITE;
/*!40000 ALTER TABLE `counters` DISABLE KEYS */;
/*!40000 ALTER TABLE `counters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Cipta Inovasi',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(2,'Bisnis Tik',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(3,'Game Development',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(4,'E-Goverment',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(5,'IoT (Internet of Things)',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(6,'Desain Animasi',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(7,'Keamanan Jaringan',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(8,'Hackathon',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lomba`
--

DROP TABLE IF EXISTS `lomba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lomba` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` int(10) unsigned NOT NULL,
  `pengumuman` text COLLATE utf8_unicode_ci,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `peraturan` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lomba_kategori_id_foreign` (`kategori_id`),
  CONSTRAINT `lomba_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lomba`
--

LOCK TABLES `lomba` WRITE;
/*!40000 ALTER TABLE `lomba` DISABLE KEYS */;
INSERT INTO `lomba` VALUES (1,1,'','Lomba Cipta Inovasi KMIPN 2018 adalah wadah \n                                bagi para mahasiswa politeknik seluruh Indonesia untuk \n                                menuliskan terobosan ide kreatif mereka sebagai salah satu \n                                bentuk intellectual respons atas segala permasalahan nyata\n                                di bidang TIK (Teknologi Informasi dan Komunikasi) \n                                masyarakat Indonesia. Ide yang diajukan diharapkan \n                                bersifat unik, kreatif, visioner, futuristik dan bermanfaat.','Cipta_Inovasi.pdf','lamp.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(2,2,'','Lomba Bisnis TIK adalah kompetisi pengembangan \n                                model bisnis dengan produk TIK. Lomba ini memberikan \n                                kesempatan kepada peserta yang memiliki ide bisnis, \n                                startup dan pengembangan usaha yang berorientasi pada \n                                produk TIK, berupa jasa atau produk.','LOMBA_BISNIS_TIK.pdf','briefcase.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(3,3,'','Game Development adalah salah satu cabang kompetisi \n                                KMIPN yang diadakan oleh PENS. Game Development \n                                KMIPN ditujukan untuk seluruh mahasiswa politeknik se- \n                                Indonesia. Game Development KMIPN tidak membatasi \n                                tema sehingga para peserta dapat berkreasi sekreatif \n                                mungkin dalam permainan mereka.','Game_Development.pdf','console.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(4,4,'','e-Government merupakan pemanfaatan teknologi \n                                informasi berbasis internet oleh pemerintah dalam \n                                memberikan informasi dan layanan kepada masyarakat, \n                                bisnis, pegawai, atau pemerintah lainnya, atau sebaliknya \n                                masyarakat atau bisnis dapat berinteraksi, atau \n                                memberikan informasi kepada pemerintah.','KATEGORI_LOMBA_E-Gov.pdf','city-hall.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(5,5,'','Lomba Piranti Cerdas adalah kompetisi karya rekayasa \n                                pada keilmuan teknik elektro yang bertujuan untuk \n                                mendorong yang dihasilkan karya-karya penelitian inovatif \n                                yang mengintegrasikan aspek-aspek design dari design \n                                sistem hingga perangkat, metodologi dan implementasi.','','cpu.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(6,6,'','Desain animasi adalah sebuah kompetisi pembuatan video \n                                animasi pendek dalam bentuk 2D/3D yang memberikan \n                                informasi dan pengenalan singkat yang unik dan menarik \n                                tentang revolusi industri di Indonesia, untuk memberikan \n                                kesadaran terhadap masyarakat luas tentang \n                                perkembangan teknologi di industri Indonesia.','Rancangan_Desain_Animasi.pdf','video-player.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(7,7,'','Lomba keamanan jaringan adalah lomba untuk menguji \n                                kemampuan mengamankan sistemkomputer beserta \n                                jaringannya. Peserta akan berkompetisi dengan peserta lain \n                                dalam kemampuan mengkongurasi sistem yang aman dan \n                                melakukan identikasi potensi celahkeamanan dari sistem \n                                komputer yang ada kemudian memberikan solusi \n                                keamanannya.','KEAMANAN_JARINGAN_Today.pdf','shield.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05'),(8,8,'','Hacking adalah pemecahan masalah yang kretif (tidak \n                                harus melibatkan teknologi). Hackathon adalah acara \n                                tentang apapun dari suatu waktu tertentu dimana orang \n                                berkumpul untuk menyelesaikan masalah. Kebanyakan \n                                hackathon yang dilakukan juga memiliki trek parallel untuk \n                                karya hackathon (banyak karya yang dihasilkan).','Hackathon.pdf','programmer.svg',NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05');
/*!40000 ALTER TABLE `lomba` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (119,'2014_10_12_000000_create_users_table',1),(120,'2014_10_12_100000_create_password_resets_table',1),(121,'2016_11_01_152432_create_users_activation_table',1),(122,'2018_01_15_025120_create_kategori_table',1),(123,'2018_04_30_074104_create_lomba_table',1),(124,'2018_05_02_013804_create_counters_table',1),(125,'2018_05_03_221550_create_artikel_table',1),(126,'2018_05_03_221607_create_galeri_table',1),(127,'2018_05_07_024951_create_tim_table',1),(128,'2018_05_08_111015_create_admins_table',1),(129,'2018_07_18_090712_create_politeknik_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `politeknik`
--

DROP TABLE IF EXISTS `politeknik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `politeknik` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `politeknik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `politeknik`
--

LOCK TABLES `politeknik` WRITE;
/*!40000 ALTER TABLE `politeknik` DISABLE KEYS */;
INSERT INTO `politeknik` VALUES (1,'Politeknik Manufaktur Bandung',NULL,NULL,NULL),(2,'Politeknik Negeri Jakarta',NULL,NULL,NULL),(3,'Politeknik Negeri Medan',NULL,NULL,NULL),(4,'Politeknik Negeri Bandung',NULL,NULL,NULL),(5,'Politeknik Negeri Semarang',NULL,NULL,NULL),(6,'Politeknik Negeri Sriwijaya',NULL,NULL,NULL),(7,'Politeknik Negeri Lampung',NULL,NULL,NULL),(8,'Politeknik Negeri Ambon',NULL,NULL,NULL),(9,'Politeknik Negeri Padang',NULL,NULL,NULL),(10,'Politeknik Negeri Bali',NULL,NULL,NULL),(11,'Politeknik Negeri Pontianak',NULL,NULL,NULL),(12,'Politeknik Negeri Ujung Pandang',NULL,NULL,NULL),(13,'Politeknik Negeri Manado',NULL,NULL,NULL),(14,'Politeknik Perkapalan Negeri Surabaya',NULL,NULL,NULL),(15,'Politeknik Negeri Banjarmasin',NULL,NULL,NULL),(16,'Politeknik Negeri Lhokseumawe',NULL,NULL,NULL),(17,'Politeknik Negeri Kupang',NULL,NULL,NULL),(18,'Politeknik Elektronik Negeri Surabaya',NULL,NULL,NULL),(19,'Politeknik Negeri Jember',NULL,NULL,NULL),(20,'Politeknik Pertanian Negeri Pangkajene Kepulauan',NULL,NULL,NULL),(21,'Politeknik Pertanian Negeri Kupang',NULL,NULL,NULL),(22,'Politeknik Perikanan Negeri Tual',NULL,NULL,NULL),(23,'Politeknik Negeri Malang',NULL,NULL,NULL),(24,'Politeknik Pertanian Negeri Samarinda',NULL,NULL,NULL),(25,'Politeknik Pertanian Negeri Payakumbuh',NULL,NULL,NULL),(26,'Politeknik Negeri Samarinda',NULL,NULL,NULL),(27,'Politeknik Negeri Media Kreatif',NULL,NULL,NULL),(28,'Politeknik Manufaktur Negeri Bangka Belitung',NULL,NULL,NULL),(29,'Politeknik Negeri Batam',NULL,NULL,NULL),(30,'Politeknik Negeri Nusa Utara',NULL,NULL,NULL),(31,'Politeknik Negeri Bengkalis',NULL,NULL,NULL),(32,'Politeknik Negeri Balikpapan',NULL,NULL,NULL),(33,'Politeknik Negeri Madura',NULL,NULL,NULL),(34,'Politeknik Maritim Negeri Indonesia',NULL,NULL,NULL),(35,'Politeknik Negeri Banyuwangi',NULL,NULL,NULL),(36,'Politeknik Negeri Madiun',NULL,NULL,NULL),(37,'Politeknik Negeri Fakfak',NULL,NULL,NULL),(38,'Politeknik Negeri Sambas',NULL,NULL,NULL),(39,'Politeknik Negeri Tanah Laut',NULL,NULL,NULL),(40,'Politeknik Negeri Subang',NULL,NULL,NULL),(41,'Politeknik Negeri Ketapang',NULL,NULL,NULL),(42,'Politeknik Negeri Cilacap',NULL,NULL,NULL),(43,'Politeknik Negeri Indramayu',NULL,NULL,NULL),(44,'Politeknik Unggul LP3M',NULL,NULL,NULL),(45,'Politeknik Ganesha',NULL,NULL,NULL),(46,'Politeknik Mandiri Bina Prestasi',NULL,NULL,NULL),(47,'Politeknik Profesional Mandiri',NULL,NULL,NULL),(48,'Politeknik Poliprofesi Medan',NULL,NULL,NULL),(49,'Politeknik LP3I Medan',NULL,NULL,NULL),(50,'Politeknik Tugu 45 Medan',NULL,NULL,NULL),(51,'Politeknik Santo Thomas',NULL,NULL,NULL),(52,'Politeknik Trijaya Krama',NULL,NULL,NULL),(53,'Politeknik Yanada',NULL,NULL,NULL),(54,'Politeknik Tanjungbalai',NULL,NULL,NULL),(55,'Politeknik Kesehatan YRSU Dr Rusdi',NULL,NULL,NULL),(56,'Politeknik IT&B Medan',NULL,NULL,NULL),(57,'Politeknik Bisnis Indonesia',NULL,NULL,NULL),(58,'Politeknik Gihon',NULL,NULL,NULL),(59,'Politeknik Wilmar Bisnis Indonesia',NULL,NULL,NULL),(60,'Politeknik Akamigas Palembang',NULL,NULL,NULL),(61,'Politeknik Anika Palembang',NULL,NULL,NULL),(62,'Politeknik Darusalam',NULL,NULL,NULL),(63,'Politeknik Sekayu',NULL,NULL,NULL),(64,'Politeknik YPPB Belitang',NULL,NULL,NULL),(65,'Politeknik Raflesia',NULL,NULL,NULL),(66,'Politeknik Gajah Sakti',NULL,NULL,NULL),(67,'Politeknik Muara Dua',NULL,NULL,NULL),(68,'Politeknik Palcomtech',NULL,NULL,NULL),(69,'Politeknik Darma Ganesha',NULL,NULL,NULL),(70,'Politeknik Manufaktur Astra',NULL,NULL,NULL),(71,'Politeknik Swadharma',NULL,NULL,NULL),(72,'Politeknik Bunda Kandung',NULL,NULL,NULL),(73,'Politeknik Tugu Jakarta',NULL,NULL,NULL),(74,'Politeknik LP3I Jakarta',NULL,NULL,NULL),(75,'Politeknik Global Indonesia',NULL,NULL,NULL),(76,'Politeknik Karya Husada',NULL,NULL,NULL),(77,'Politeknik Soca',NULL,NULL,NULL),(78,'Politeknik Bina Budaya Cipta',NULL,NULL,NULL),(79,'Politeknik Kelapa Sawit Citra Widya Edukasi',NULL,NULL,NULL),(80,'Politeknik Kent',NULL,NULL,NULL),(81,'Politeknik Piksi Input Serang',NULL,NULL,NULL),(82,'Politeknik TEDC',NULL,NULL,NULL),(83,'Politeknik Agroindustri',NULL,NULL,NULL),(84,'Politeknik Al-Islam Bandung',NULL,NULL,NULL),(85,'Politeknik Enjinering Indorama',NULL,NULL,NULL),(86,'Politeknik Gajah Tunggal',NULL,NULL,NULL),(87,'Politeknik Geologi Dan Pertambangan Agp',NULL,NULL,NULL),(88,'Politeknik Gunakarya Indonesia Bekasi',NULL,NULL,NULL),(89,'Politeknik Kesehatan Bhakti Pertiwi Husada',NULL,NULL,NULL),(90,'Politeknik Kesehatan TNI-AU Ciumbuleuit',NULL,NULL,NULL),(91,'Politeknik Komputer Niaga Lpkia',NULL,NULL,NULL),(92,'Politeknik Krakatau',NULL,NULL,NULL),(93,'Politeknik Kridatama Bandung',NULL,NULL,NULL),(94,'Politeknik LP3I Bandung',NULL,NULL,NULL),(95,'Politeknik Meta Industri Cikarang',NULL,NULL,NULL),(96,'Politeknik Mitra Kusuma',NULL,NULL,NULL),(97,'Politeknik Pajajaran Insan Cinta Bangsa Bandung',NULL,NULL,NULL),(98,'Politeknik Perdana Mandiri',NULL,NULL,NULL),(99,'Politeknik PGRI Banten',NULL,NULL,NULL),(100,'Politeknik Piksi Ganesha',NULL,NULL,NULL),(101,'Politeknik Pos Indonesia',NULL,NULL,NULL),(102,'Politeknik Praktisi Bandung',NULL,NULL,NULL),(103,'Politeknik Sukabumi',NULL,NULL,NULL),(104,'Politeknik Tri Mitra Karya Mandiri',NULL,NULL,NULL),(105,'Politeknik Triguna Tasikmalaya',NULL,NULL,NULL),(106,'Politeknik Tunas Pemuda',NULL,NULL,NULL),(107,'Politeknik Mekatronika Sanata Dharma',NULL,NULL,NULL),(108,'Politeknik Muhammadiyah Yogyakarta',NULL,NULL,NULL),(109,'Politeknik API Yogyakarta',NULL,NULL,NULL),(110,'Politeknik LPP Yogyakarta',NULL,NULL,NULL),(111,'Politeknik Seni Yogyakarta',NULL,NULL,NULL),(112,'Politeknik Kesehatan Bhakti Setya Indonesia',NULL,NULL,NULL),(113,'Politeknik Kesehatan Permata Indonesia Yogyakarta',NULL,NULL,NULL),(114,'Politeknik Harapan Bersama',NULL,NULL,NULL),(115,'Politeknik Sawunggalih Aji',NULL,NULL,NULL),(116,'Politeknik Pratama Mulia',NULL,NULL,NULL),(117,'Politeknik Muhammadiyah Magelang',NULL,NULL,NULL),(118,'Politeknik Pratama',NULL,NULL,NULL),(119,'Politeknik Ma arif',NULL,NULL,NULL),(120,'Politeknik Dharma Patria',NULL,NULL,NULL),(121,'Politeknik Indonusa Surakarta',NULL,NULL,NULL),(122,'Politeknik Pusmanu',NULL,NULL,NULL),(123,'Politeknik Purbaya',NULL,NULL,NULL),(124,'Politeknik Unggulan Sragen',NULL,NULL,NULL),(125,'Politeknik Manufaktur Ceper',NULL,NULL,NULL),(126,'Politeknik Stibisnis',NULL,NULL,NULL),(127,'Politeknik Muhammadiyah Pekalongan',NULL,NULL,NULL),(128,'Politeknik Banjarnegara',NULL,NULL,NULL),(129,'Politeknik Muhammadiyah Tegal',NULL,NULL,NULL),(130,'Politeknik Kesehatan Bhakti Mulia',NULL,NULL,NULL),(131,'Politeknik ATMI',NULL,NULL,NULL),(132,'Politeknik Trisila Dharma',NULL,NULL,NULL),(133,'Politeknik Baja Tegal',NULL,NULL,NULL),(134,'Politeknik Mitra Karya Mandiri',NULL,NULL,NULL),(135,'Politeknik Santo Paulus Surakarta',NULL,NULL,NULL),(136,'Politeknik Bina Trada Semarang',NULL,NULL,NULL),(137,'Politeknik Kesehatan RS Dr Soepraoen Kesdam V',NULL,NULL,NULL),(138,'Politeknik Kota Malang',NULL,NULL,NULL),(139,'Politeknik NSC',NULL,NULL,NULL),(140,'Politeknik Ubaya',NULL,NULL,NULL),(141,'Politeknik Unisma Malang',NULL,NULL,NULL),(142,'Politeknik Cahaya Surya',NULL,NULL,NULL),(143,'Politeknik Surabaya',NULL,NULL,NULL),(144,'Politeknik Kesehatan Majapahit',NULL,NULL,NULL),(145,'Politeknik Sakti Surabaya',NULL,NULL,NULL),(146,'Politeknik Kediri',NULL,NULL,NULL),(147,'Politeknik 17 Agustus 1945 Surabaya',NULL,NULL,NULL),(148,'Politeknik Pertanian dan Peternakan Mapena',NULL,NULL,NULL),(149,'Politeknik Nasional Denpasar',NULL,NULL,NULL),(150,'Politeknik St Wilhelmus',NULL,NULL,NULL),(151,'Politeknik Ganesa Guru',NULL,NULL,NULL),(152,'Politeknik Widya Dharma Bali',NULL,NULL,NULL),(153,'Politeknik Medica Farma Husada Mataram',NULL,NULL,NULL),(154,'Politeknik Informatika Nasional',NULL,NULL,NULL),(155,'Politeknik Gorontalo',NULL,NULL,NULL),(156,'Politeknik Palu',NULL,NULL,NULL),(157,'Politeknik Indotec Kendari',NULL,NULL,NULL),(158,'Politeknik Bosowa',NULL,NULL,NULL),(159,'Politeknik Caltex',NULL,NULL,NULL),(160,'Politeknik Jambi',NULL,NULL,NULL),(161,'Politeknik Kesehatan Siteba',NULL,NULL,NULL),(162,'Politeknik Kampar',NULL,NULL,NULL),(163,'Politeknik Pariwisata Batam',NULL,NULL,NULL),(164,'Politeknik Hasnur',NULL,NULL,NULL),(165,'Politeknik Muara Teweh',NULL,NULL,NULL),(166,'Politeknik Tonggak Equator',NULL,NULL,NULL),(167,'Politeknik Putra Bangsa Pontianak',NULL,NULL,NULL),(168,'Politeknik Kotabaru',NULL,NULL,NULL),(169,'Politeknik Sendawar',NULL,NULL,NULL),(170,'Politeknik Malinau',NULL,NULL,NULL),(171,'Politeknik Islam Syekh Salman Al-Farisi Rantau',NULL,NULL,NULL),(172,'Politeknik Tanah Laut',NULL,NULL,NULL),(173,'Politeknik Bisnis Lamda',NULL,NULL,NULL),(174,'Politeknik Ilmu Pelayaran Balikpapan',NULL,NULL,NULL),(175,'Politeknik Unggulan Kalimantan',NULL,NULL,NULL),(176,'Politeknik Batulicin',NULL,NULL,NULL),(177,'Politeknik Perdamaian Halmahera',NULL,NULL,NULL),(178,'Politeknik Sains & Teknologi Wiratama Maluku Utara',NULL,NULL,NULL),(179,'Politeknik Halmahera',NULL,NULL,NULL),(180,'Politeknik Aceh',NULL,NULL,NULL),(181,'Politeknik Aceh Selatan',NULL,NULL,NULL),(182,'Politeknik Indonesia Venezuela',NULL,NULL,NULL),(183,'Politeknik Amamapare',NULL,NULL,NULL),(184,'Politeknik Katolik Saint Paul',NULL,NULL,NULL),(185,'Politeknik Pertanian Yasanto',NULL,NULL,NULL);
/*!40000 ALTER TABLE `politeknik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tim`
--

DROP TABLE IF EXISTS `tim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `kategori_id` int(10) unsigned NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `politeknik_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_proposal` text COLLATE utf8_unicode_ci,
  `total_anggota` int(11) DEFAULT NULL,
  `status` enum('Daftar','Tahap Seleksi','Lolos','Tidak Lolos') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Daftar',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tim_users_id_foreign` (`users_id`),
  KEY `tim_kategori_id_foreign` (`kategori_id`),
  CONSTRAINT `tim_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  CONSTRAINT `tim_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tim`
--

LOCK TABLES `tim` WRITE;
/*!40000 ALTER TABLE `tim` DISABLE KEYS */;
INSERT INTO `tim` VALUES (1,1,1,'TIM','1','operasi linux word.docx',0,'Tahap Seleksi',NULL,'2018-08-03 08:22:13','2018-08-03 08:22:13');
/*!40000 ALTER TABLE `tim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_activations`
--

DROP TABLE IF EXISTS `user_activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_activations_users_id_foreign` (`users_id`),
  CONSTRAINT `user_activations_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_activations`
--

LOCK TABLES `user_activations` WRITE;
/*!40000 ALTER TABLE `user_activations` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci DEFAULT NULL,
  `jurusan` text COLLATE utf8_unicode_ci,
  `no_mahasiswa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8_unicode_ci,
  `no_telp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tim_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('Ketua','Anggota') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Anggota',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ketua','ketua@kmipn.com','$2y$10$Io3tTWg76xkWu4PeuTeAaOcZbKGP1fCIZo6sbneHdNCdgA75/hcW2','Laki-laki','IT','2103171036','Surabaya','2018-08-03','Surabaya','0895337348558','1',NULL,'Ketua',NULL,NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05',0),(2,'anggota1','anggota1@kmipn.com',NULL,'Laki-laki','IT','2103171036','Surabaya','2018-08-03','Surabaya','0895337348558','1',NULL,'Anggota',NULL,NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05',0),(3,'Anggota2','Anggota2@kmipn.com',NULL,'Laki-laki','IT','2103171036','Surabaya','2018-08-03','Surabaya','0895337348558','1',NULL,'Anggota',NULL,NULL,'2018-08-03 08:22:05','2018-08-03 08:22:05',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-03 22:59:02
