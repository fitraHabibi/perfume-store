-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: localhost    Database: perfume_store
-- ------------------------------------------------------
-- Server version	8.0.44

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
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` VALUES (3,'Pour Homme','2025-12-21 20:37:13','2025-12-25 21:56:44'),(4,'Pour Femme','2025-12-21 20:43:06','2025-12-25 21:56:52'),(5,'The Shared Aura','2025-12-25 02:40:36','2025-12-25 21:57:17'),(8,'Discovery Set','2025-12-25 22:00:56','2025-12-25 22:01:16'),(9,'Travel Essentials','2025-12-25 22:01:06','2025-12-25 22:01:06'),(10,'Gardenia','2026-01-08 02:44:42','2026-01-08 02:44:42'),(11,'Midnight Scentials','2026-01-08 02:48:37','2026-01-08 02:48:37');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_12_21_114707_create_categories_table',1),(5,'2025_12_21_114902_create_products_table',1),(6,'2025_12_21_114927_create_orders_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
REPLACE INTO `orders` VALUES (26,14,'Gabriel Ananthea','granat@gmail.com',1,789000,'cancelled','2026-01-07 19:23:13','2026-01-07 19:26:49'),(28,9,'Aceng Jaya Wijaya Seno Putro','ajwsp@gmail.com',1,789000,'shipped','2026-01-08 05:03:05','2026-01-08 05:15:26'),(29,10,'Fiony Adanella','fitrahabibie393@gmail.com',1,789000,'paid','2026-01-08 05:05:26','2026-01-08 05:15:30'),(30,16,'Emira Sarasvati','081234567890',1,789000,'paid','2026-01-08 05:05:47','2026-01-08 05:15:32'),(31,17,'Luvita Anggraini','081234345689',1,789000,'paid','2026-01-08 05:06:07','2026-01-08 05:15:35'),(32,8,'Grace','083452216437',1,789000,'paid','2026-01-08 05:06:38','2026-01-08 05:15:37'),(33,16,'Renaya','083456213434',1,789000,'pending','2026-01-08 06:45:52','2026-01-08 06:45:52'),(37,9,'Gabriel','085432124565',1,789000,'pending','2026-01-08 07:30:26','2026-01-08 07:30:26'),(38,10,'Anastasya','084567899898',1,789000,'pending','2026-01-08 07:35:14','2026-01-08 07:35:14'),(39,13,'Valerie','086534565677',1,789000,'pending','2026-01-08 07:54:36','2026-01-08 07:54:36'),(40,17,'auralie','081234345678',1,789000,'pending','2026-01-08 23:44:41','2026-01-08 23:44:41'),(41,8,'Auralie','081234345678',1,789000,'pending','2026-01-08 23:49:01','2026-01-08 23:49:01'),(42,14,'adel','081234345656',1,789000,'pending','2026-01-09 00:08:56','2026-01-09 00:08:56');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` VALUES (8,3,'Midnight Sovereign',789000,23,'Dibuka oleh ketajaman black pepper yang berani, berpadu dengan kehangatan leather premium, lalu ditutup oleh jejak agarwood yang misterius. Sebuah aroma maskulin yang mencerminkan kendali, kemapanan, dan kepercayaan diri, sempurna untuk malam formal nan eksklusif.','products/6nxC9ycThcjgQD1I2q7Hq7pxXdGQHZAmRitfNoQp.png','2025-12-25 22:10:52','2026-01-08 23:49:01'),(9,3,'Gilded Oakwood',789000,15,'Kesegaran kayu ek klasik bertemu rempah eksotis, menghadirkan aroma hangat namun tegas. Elegan dan berkarakter, membangkitkan suasana perpustakaan pribadi di dalam kastil mewah.','products/jFVnjb7vjurBu8gwVRS4rcgUMcQxtkrHuRYZeMYI.png','2025-12-25 22:20:19','2026-01-08 07:30:26'),(10,4,'Velvet Peony',789000,19,'Peony yang mekar sempurna berpadu dengan manisnya lychee dan sentuhan white musk selembut beludru. Wewangian feminin yang lembut, anggun, dan tak lekang oleh waktu.','products/uFJVw0AAoA29I61zBSDAoxcSWs2Mr3L3QkXieV9R.png','2025-12-25 22:22:17','2026-01-08 07:35:14'),(11,4,'Ethereal Silk',789000,25,'Perpaduan melati putih, vanila Madagaskar, dan kayu cendana menciptakan aroma ringan dan berkelas. Memberikan aura kemewahan yang tenang, layaknya gaun sutra di pesta taman kerajaan.','products/TgzJbrfB9h3CJ2YiwflqMWfhtfH8pODEBQ6mLNbX.png','2025-12-25 22:29:32','2025-12-25 22:29:32'),(12,5,'Oud Horizon',789000,22,'Kekayaan kayu oud yang mendalam diseimbangkan oleh kesegaran bergamot dan sentuhan saffron. Sebuah ekspresi aroma lintas timur dan barat, ideal bagi pribadi unik yang melampaui batasan gender.','products/DjmvKzJ1G3W25Qwk9GJ6TPPmJ2SGOBqf6WArpAHX.png','2025-12-25 22:30:59','2025-12-25 22:30:59'),(13,5,'Solar Amber',789000,22,'Amber cair yang hangat, tonka bean, dan sentuhan aroma laut menghadirkan kesan cerah dan modern. Mewakili kemewahan yang bersahaja dengan energi positif, cocok menemani setiap momen sepanjang hari.','products/PlwMmxbm6T8A9R0yPlp8QyYPotEqlcdLHaepW1Nm.png','2025-12-25 22:31:43','2026-01-08 07:54:36'),(14,3,'Aureum Clarity',789000,19,'Perpaduan citrus segar, white musk, dan cedarwood menghadirkan citra pria yang rapi dan berkelas. Tutup emas melambangkan kesuksesan, sementara cairan beningnya mencerminkan kejujuran dan kharisma yang murni.','products/nm07Cuvfz4JBgTbMweThYYfa2wheKkZbq9qxHJvk.png','2025-12-25 22:43:53','2026-01-09 00:08:56'),(15,3,'Obsidian Shadow',789000,19,'Black pepper, leather, dan smoky vetiver berpadu menciptakan aroma maskulin yang misterius dan berwibawa. Dirancang untuk malam penuh tantangan, botol hitam transparannya menyimpan daya tarik yang kuat sekaligus penuh rahasia.','products/YAse95kGteI4LGjZ2AAQ3slxaftszpx1vjcOXqq8.png','2025-12-25 22:45:01','2026-01-07 06:42:30'),(16,4,'Rouge Enigma',789000,23,'Perpaduan berani dark cherry, mawar Damask, dan amber menghadirkan aroma sensual yang mendalam. Wewangian ini mencerminkan gairah klasik nan elegan, sempurna bagi wanita yang ingin menjadi pusat perhatian.','products/JwMRfx7U259DjuZ3olkXF97DL5TBMrNSi0275NT9.png','2025-12-25 22:45:52','2026-01-08 06:45:52'),(17,4,'Amber Solstice',789000,22,'Mandarin orange, madu, dan sandalwood menciptakan kehangatan manis layaknya matahari senja. Cairan oranye mencerminkan jiwa yang bebas, hangat, dan penuh energi positif di sore hari yang menenangkan.','products/w7GqXbyfG9tSy9agSBhNL3mfIO1RxsGFNH4LLCuV.png','2025-12-25 22:46:59','2026-01-08 23:44:41'),(18,4,'Luminous Prism',789000,22,'Aroma lembut melati putih, buah pir, dan sparkling musk tersimpan dalam botol kristal berkilau. Warna kuning pucatnya memancarkan kemewahan yang tenang, bersih, dan berkelas seperti perhiasan langka.','products/WESvcS02r31sIKzW5tdbrYKSHy6eHxGvMADORWpY.png','2025-12-25 22:47:52','2025-12-25 22:48:12'),(19,5,'Rose Cloud',789000,22,'Pink pepper, peony, dan vanilla lembut berpadu dalam harmoni yang seimbang. Dengan tampilan pink pastel modern, wewangian uniseks ini menghadirkan kenyamanan, kelembutan, dan elegansi tanpa batas gender.','products/DGNxMyunR565lpOdWxmClfuFP1PKj0kXUJIlXAQZ.png','2025-12-25 22:48:55','2025-12-25 22:48:55');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
REPLACE INTO `sessions` VALUES ('cQF0vr6vAABu6nI4GnlBfRwjBMZa5KPNWdOv6Knx',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.22.3 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiekJEVU4wWGJHN3EzdUVCeEQwZDJvTVdpb1lEVVlNSjhtelp4dmRENiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9wZXJmdW1lLXN0b3JlLnRlc3QvP2hlcmQ9cHJldmlldyI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767940947),('FETZKuNeROpnhgZfJBPYUvDKUkNrPACgk3tokzO3',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Herd/1.22.3 Chrome/120.0.6099.291 Electron/28.2.5 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2pYVmlrYnYwdGx4QWFZdUk0VlA0VEJZM0ZCMHRSalcxUHpMaXRmcyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9wZXJmdW1lLXN0b3JlLnRlc3QvP2hlcmQ9cHJldmlldyI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1767941308),('gJV7P9o2gcASjv9bu68ArwouQnMfSzblDrl70eU1',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiejk3cnFwYXhRODYxNUtNT0xtcGVkYnlIUTdqQUdpY2d2Mlh5ZlJ1QSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9wZXJmdW1lLXN0b3JlLnRlc3QiO3M6NToicm91dGUiO3M6NDoiaG9tZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1767884203),('OfXQmn5qUMi6h4pnqlPehU13TS5kBlE0kPovrOuK',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOW1DUWQwS2t5U3N5c1lUaFdLem9CY29RTURwMXE4ckpjajRkSmRXYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9wZXJmdW1lLXN0b3JlLnRlc3QiO3M6NToicm91dGUiO3M6NDoiaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1767942619);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` VALUES (1,'adminuddin','admin123@gmail.com',NULL,'$2y$12$oZ1RlShyIqX2daBROaUEP.x2zgjE1sytGDJHvlD3alxprG8xdxGra',NULL,'2025-12-21 20:17:48','2025-12-24 23:12:23'),(2,'Arjun','arjun@gmail.com',NULL,'$2y$12$TPGzCIhQiGMagJMEJx/2y.l0WvOLcxQvMS1JP1MHurzBAa0yQA116',NULL,'2026-01-07 19:35:38','2026-01-07 19:35:38');
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

-- Dump completed on 2026-01-09 14:29:27
