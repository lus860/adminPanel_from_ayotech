
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
DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'about','content','{\"title\":{\"hy\":\"Մեր մասին\",\"ru\":\"О нас\",\"en\":\"About\"},\"content\":{\"hy\":\"<p>Բարի գալուստ xorovac.am - արագ սննդի կետի կայք-էջ: Մեզ մոտ բոլոր ճաշատեսակները պատրաստվում են միայն թարմ և տեղական մսից, իսկ մեր բարձրակարգ խոհարարները ճաշատեսակների պատրաստումը դարձնում են արվեստ: 3500 դրամ և ավելի պատվերի դեպքում հնարավոր է առաքում ցանկացած վայր:<\\/p>\",\"ru\":\"<p>Добро пожаловать на xorovac.am - страницу быстрого питания. Все блюда сделаны из свежего и местного мяса, а наши высококлассные повара делают искусство приготовления блюд. Доставка возможна куда угодно, от 3500 драм и более.<\\/p>\",\"en\":\"<p>Welcome to xorovac.am - fast food page. All dishes are made from fresh and local meat, and our high-class chefs make the art of cooking. Delivery is possible anywhere from 3500 drams and more.<\\/p>\"},\"image\":\"vYn93AeuK2gsOkNcJS.png\"}'),(2,'contact','content','{\"title\":{\"hy\":\"Կապ մեզ հետ\",\"ru\":\"Свяжитесь с нами\",\"en\":\"Contact us\"},\"text\":{\"hy\":\"<p>Եթե ունեք հարցեր, առաջարկություններ կամ առեւտրային առաջարկներ, խնդրում ենք դիմել մեզ ցանկացած հարմար ձեւով: Յուրաքանչյուր հյուր կարող է կատարել առցանց պատվերկամ որեւէ հարց տալ, մեր ներկայացուցիչները կպատասխանեն եւ կտրամադրեն ձեզ անհրաժեշտ բոլոր տեղեկությունները: Մենք ակնկալում ենք լսել ձեզանից եւ տեսնել ձեզ որպես հյուրեր:<\\/p>\",\"ru\":\"<p>Если у вас есть какие-либо вопросы, предложения или торговые предложения, пожалуйста, свяжитесь с нами по любому удобному способу. Каждый гость может сделать онлайн-запрос, наши представители ответят и предоставят вам всю необходимую информацию. Мы с нетерпением ждем вашего ответа и ждем вас в качестве гостей.<\\/p>\",\"en\":\"<p>If you have any questions, suggestions or trade offers, please contact us by any convenient method. Each guest can make an online request, our representatives will answer and provide you with all the necessary information. We look forward to your reply and are waiting for you as guests.<\\/p>\"},\"phone_text\":{\"hy\":\"Մենք ուրախ ենք պատասխանել ձեր հարցերին կամ ձեզ ուղղորդել հեռախոսով:\",\"ru\":\"Мы рады ответить на ваши вопросы или помочь вам по телефону.\",\"en\":\"We are happy to answer your questions or help you by phone.\"},\"email_text\":{\"hy\":\"Հարցերի դեպքում կարող եք մեզ դիմել նաև մեր էլ․հասցով:\",\"ru\":\"Если у вас есть вопросы, вы можете связаться с нами по электронной почте.\",\"en\":\"If you have questions, you can contact us by email.\"},\"address_text\":{\"hy\":\"Մենք ուրախ կլինենք ձեզ հյուրընկալել մեզ մոտ:\",\"ru\":\"Мы будем рады видеть вас у нас в гостях.\",\"en\":\"We will be glad to see you visiting us.\"},\"contact_title\":{\"hy\":\"ՀԵՏԱԴԱՐՁ ԿԱՊ\",\"ru\":\"СВЯЖИТЕСЬ С НАМИ\",\"en\":\"CONTACT US\"}}'),(3,'home','main_banner','{\"image\":\"amKWPoaPMN3F97D9qH.png\",\"title\":{\"hy\":\"ԱՅՍՈՒՀԵՏ ՄԵԶ ՄՈՏ ԿԱՐՈՂ ԵՔ ՀԱՄՏԵՍԵԼ\",\"ru\":\"У НАС ВЫ МОЖЕТЕ ПОПРОБОВАТЬ\",\"en\":\"HERE YOU CAN TRY\"},\"desc\":{\"hy\":\"Մենք՝ հայերս, ամեն ինչը տաք ենք սիրում՝ որոշում կայացնելուց մինչ ուտելիք, սուրճ ու թեյ:\",\"ru\":\"Мы, армяне, все любим горячие, до принять решение еды, кофе и чай.\",\"en\":\"We, Armenians, all love the hot, to decide, coffee and tea.\"},\"url\":\"#\"}'),(4,'home','delivery','{\"title\":{\"hy\":\"Առաքում\",\"ru\":\"Доставка\",\"en\":\"Delivery\"},\"desc\":{\"hy\":\"<p>Դուք կարող եք զանգահարել մեզ 010-27-00-47 կամ 091-27-00-47 հեռախոսահամարներով, և մեր հեռախոսավարուհիները կպատասխանեն Ձեր բոլոր հարցերին և կգրանցեն&nbsp;Ձեր պատվերները:<\\/p>\",\"ru\":\"<p>Вы можете позвонить нам по телефону 010-27-00-47 или 091-27-00-47, и наши телефонные операторы примут ваш заказ.<\\/p>\",\"en\":\"<p>You can call us at 010-27-00-47 or 091-27-00-47, and our telephone operators will accept your order.<\\/p>\"},\"address\":{\"hy\":\"Հայաստան, 0012 Երևան Կոմիտասի պող., 24\\/6 շենք\",\"ru\":\"Армения, 0012, Ереван, пр. Комитаса 24\\/6\",\"en\":\"Armenia, 0012, Yerevan, Komitas Ave. 24\\/6\"},\"image\":\"1wgjmg0C98xTjRUX18.jpg\"}'),(5,'home','about','{\"title\":{\"hy\":\"Մեր մասին\",\"ru\":\"О нас\",\"en\":\"About\"},\"desc\":{\"hy\":\"<p>Բարի գալուստ Թոնրաշխարհ արագ սննդի կետի կայք-էջ: Մեզ մոտ բոլոր ճաշատեսակները պատրաստվում են միայն թարմ և տեղական մսից, իսկ մեր բարձրակարգ խոհարարները ճաշատեսակների պատրաստումը դարձնում են արվեստ: 3500 դրամ և ավելի պատվերի դեպքում հնարավոր է առաքում ցանկացած վայր:<\\/p>\",\"ru\":\"<p>Добро пожаловать на домашнюю страницу быстрого питания Xorovac.am. Все блюда сделаны из свежего и местного мяса, а наши высококлассные повара делают искусство приготовления блюд. Доставка возможна куда угодно, от 3500 драм и более.<\\/p>\",\"en\":\"<p>Welcome to the Xorovac.am fast food homepage. All dishes are made from fresh and local meat, and our high-class chefs make the art of cooking. Delivery is possible anywhere from 3500 drams and more.<\\/p>\"},\"image\":\"y3Zil5tbwS8GQfL24A.png\"}'),(6,'home','titles','{\"most_sold\":{\"hy\":\"Շատ վաճառված\",\"ru\":\"Самые продаваемые\",\"en\":\"Top Selling\"},\"news\":{\"hy\":\"Նորություններ\",\"ru\":\"Новости\",\"en\":\"News\"}}'),(7,'info','seo','{\"title_suffix\":{\"hy\":\"Tonrashkharh.am\",\"ru\":\"Tonrashkharh.am\",\"en\":\"Tonrashkharh.am\"}}'),(8,'info','contacts','{\"phone\":\"+37410-27-00-47\",\"email\":\"info@xorovac.am\",\"address\":{\"hy\":\"Հայաստան, 0012 Երևան Կոմիտասի պող., 24\\/6 շենք\",\"ru\":\"Армения, 0012, Ереван, пр. Комитаса 24\\/6\",\"en\":\"Armenia, 0012, Yerevan, Komitasi Ave. 24\\/6\"}}'),(9,'info','contacts','{\"phone\":\"+37491-27-00-47\",\"email\":\"xorovac@gmail.com\",\"address\":{\"hy\":null,\"ru\":null,\"en\":null}}'),(10,'info','contacts','{\"phone\":null,\"email\":null,\"address\":{\"hy\":null,\"ru\":null,\"en\":null}}'),(11,'info','contacts','{\"phone\":null,\"email\":null,\"address\":{\"hy\":null,\"ru\":null,\"en\":null}}'),(12,'info','data','{\"header_logo\":\"bUtNU5vzjklOOE7Mlx.png\",\"menu_logo\":\"jYWlBukOyQdEkay0QV.png\",\"iframe\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3047.266215785392!2d44.49794151570166!3d40.203140776525295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd412054710b%3A0x9283d6238313215e!2stonrashkharh!5e0!3m2!1shy!2s!4v1556899018374!5m2!1shy!2s\",\"contact_email\":\"info@xorovac.am\",\"min_sum\":\"3000\",\"product_image\":\"UXZ1ow2yjcXZBciTXF.jpg\",\"options_selected\":true}'),(13,'info','socials','{\"icon\":\"MuiebE8gH9XvI4FG6H.svg\",\"title\":null,\"url\":\"https:\\/\\/www.facebook.com\\/xorovac.am\\/\"}'),(14,'info','socials','{\"icon\":\"SmyxGthLoDV27cp732.svg\",\"title\":null,\"url\":\"https:\\/\\/www.instagram.com\\/tonrashxarh\\/\"}'),(15,'info','socials','{\"icon\":\"6Kism19A6JHOk5dKU0.svg\",\"title\":null,\"url\":null}'),(16,'info','socials','{\"icon\":\"AULnzgcfLpjh4LbXpU.svg\",\"title\":null,\"url\":null}'),(17,'info','socials','{\"icon\":\"EdY8kqwqJYzorXcGjC.svg\",\"title\":null,\"url\":null}'),(18,'info','socials','{\"icon\":\"lkwvo3X5SGKe7SNIKY.svg\",\"title\":null,\"url\":null}'),(19,'info','socials','{\"icon\":\"k38AviCRZVzc9rfYLT.svg\",\"title\":null,\"url\":null}'),(20,'info','socials','{\"icon\":null,\"title\":null,\"url\":null}'),(21,'info','socials','{\"icon\":null,\"title\":null,\"url\":null}'),(22,'info','socials','{\"icon\":null,\"title\":null,\"url\":null}'),(23,'info','payments','{\"image\":\"a6EAoeTAkNlKwGDOVa.png\",\"title\":null,\"active\":true}'),(24,'info','payments','{\"image\":\"gmoMJlvuFtmTooZUAj.png\",\"title\":null,\"active\":true}'),(25,'info','payments','{\"image\":\"U82PYcwP3mfbywiR0M.png\",\"title\":null,\"active\":true}'),(26,'info','payments','{\"image\":null,\"title\":null,\"active\":false}'),(27,'info','payments','{\"image\":null,\"title\":null,\"active\":false}'),(28,'menu','data','{\"other_products\":{\"hy\":\"Այլ ապրանքներ\",\"ru\":\"Другие продукты\",\"en\":\"Other products\"}}');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `catalogue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catalogue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `catalogue` WRITE;
/*!40000 ALTER TABLE `catalogue` DISABLE KEYS */;
INSERT INTO `catalogue` VALUES (1,'{\"hy\":\"Թոնրի խորոված\",\"ru\":\"Шашлык в тандыре\",\"en\":\"Tandoori barbecue\"}','tonri-khorovats','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,1,'2019-06-07 14:10:36','2019-07-23 19:02:27'),(2,'{\"hy\":\"Մանղալի խորոված\",\"ru\":\"Шашлык на мангале\",\"en\":\"Barbecue  on a brazier\"}','manghali-khorovats','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,1,'2019-06-11 10:03:17','2019-07-23 19:02:27'),(3,'{\"hy\":\"Քաբաբներ\",\"ru\":\"Кебабы\",\"en\":\"Kebabs\"}','qyababner','{\"en\":null}','{\"en\":null}','{\"en\":null}',3,1,'2019-06-11 10:03:25','2019-07-23 19:02:27'),(4,'{\"hy\":\"Ապուրներ\",\"ru\":\"Супы\",\"en\":\"Soups\"}','apurner','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,1,'2019-06-11 10:03:33','2019-07-23 19:02:27'),(5,'{\"hy\":\"Տաք կերակուրներ\",\"ru\":\"Горячие блюда\",\"en\":\"Hot dishes\"}','taq-kerakurner','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,1,'2019-06-11 10:03:49','2019-07-23 19:02:27'),(6,'{\"hy\":\"Խավարտներ\",\"ru\":\"Гарниры\",\"en\":\"Garnishes\"}','khavartner','{\"en\":null}','{\"en\":null}','{\"en\":null}',6,1,'2019-06-11 10:03:55','2019-07-23 19:02:27'),(7,'{\"hy\":\"Ձկնեղեն\",\"ru\":\"Рыбы\",\"en\":\"Fish\"}','dzkneghen','{\"en\":null}','{\"en\":null}','{\"en\":null}',7,1,'2019-07-23 17:43:54','2019-07-23 19:02:27'),(8,'{\"hy\":\"Աղցաններ\",\"ru\":\"Салаты\",\"en\":\"Salads\"}','aghtsanner','{\"en\":null}','{\"en\":null}','{\"en\":null}',7,1,'2019-07-25 18:29:52','2019-07-25 18:29:52'),(9,'{\"hy\":\"Փռի մեջ\",\"ru\":\"Приготовление в печи\",\"en\":\"Cooking in the oven\"}','pri-mej','{\"en\":null}','{\"en\":null}','{\"en\":null}',7,1,'2019-07-25 21:22:10','2019-07-25 21:22:10');
/*!40000 ALTER TABLE `catalogue` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `price` int(10) unsigned NOT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` VALUES (2,'{\"hy\":\"Արաբկիր\",\"ru\":\"Арабкир\",\"en\":\"Arabkir\"}',300,1,1),(3,'{\"hy\":\"Շենգավիթ\",\"ru\":\"Шенгавит\",\"en\":\"Shengavit\"}',500,11,1),(4,'{\"hy\":\"Աջափնյակ\",\"ru\":\"Ачапняк\",\"en\":\"Ajapnyak\"}',500,2,1),(5,'{\"hy\":\"Ավան\",\"ru\":\"Аван\",\"en\":\"Avan\"}',500,3,1),(6,'{\"hy\":\"Դավթաշեն\",\"ru\":\"Давташен\",\"en\":\"Davtashen\"}',500,4,1),(7,'{\"hy\":\"Էրեբունի\",\"ru\":\"Эребуни\",\"en\":\"Erebuni\"}',500,5,1),(8,'{\"hy\":\"Կենտրոն\",\"ru\":\"Центр\",\"en\":\"Kentron\"}',500,6,1),(9,'{\"hy\":\"Մալաթիա-Սեբաստիա\",\"ru\":\"Малатия-Себастия\",\"en\":\"Malatia-Sebastia\"}',500,7,1),(10,'{\"hy\":\"Նոր Նորք\",\"ru\":\"Нор-Норк\",\"en\":\"Nor Nork\"}',500,8,1),(11,'{\"hy\":\"Նորք-Մարաշ\",\"ru\":\"Норк-Мараш\",\"en\":\"Nork-Marash\"}',500,9,1),(12,'{\"hy\":\"Նուբարաշեն\",\"ru\":\"Нубарашен\",\"en\":\"Nubarashen\"}',500,10,1),(14,'{\"hy\":\"Քանաքեռ-Զեյթուն\",\"ru\":\"Канакер-Зейтун\",\"en\":\"Kanaker-Zeytun\"}',500,13,1);
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` int(10) unsigned DEFAULT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'about',NULL,'UPbaI2BcZ3F9cv9ap6.png',NULL,NULL,4),(2,'about',NULL,'qz720dmG1kf8IYcVBm.png',NULL,NULL,5),(3,'about',NULL,'kswUtalHNaPB7aEgAr.png','{\"hy\":\"Alt1\",\"en\":null}','{\"hy\":\"Title1\",\"en\":null}',1),(4,'about',NULL,'lnRON7OGt2kgj3vKAl.png',NULL,NULL,3),(5,'about',NULL,'cudOW81PZCoRtdiWHK.png',NULL,NULL,2);
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `home_catalogue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_catalogue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catalogue_id` int(10) unsigned NOT NULL DEFAULT '0',
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `size` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `home_catalogue` WRITE;
/*!40000 ALTER TABLE `home_catalogue` DISABLE KEYS */;
INSERT INTO `home_catalogue` VALUES (1,1,'S5ao1oO5Baf2snF81i.png','{\"hy\":\"Թոնրի խորոված\",\"ru\":\"Шашлык в тандыре\",\"en\":\"Tandoori barbecue\"}','{\"hy\":\"Մենք օգտագործում ենք միայն թարմ և տեղական մսամթերք:\",\"ru\":\"Мы используем только свежие и местные продукты.\",\"en\":\"We use only fresh and local products.\"}',2,0,'2019-06-10 16:15:29','2019-07-09 16:55:45'),(2,2,'K5jmSDLPtQn21zLalJ.png','{\"hy\":\"Մանղալի խորոված\",\"ru\":\"Шашлык на мангале\",\"en\":\"Barbecue on a brazier\"}','{\"hy\":\"Մենք օգտագործում ենք միայն թարմ և տեղական մսամթերք\",\"ru\":\"Мы используем только свежие и местные продукты.\",\"en\":\"We use only fresh and local products.\"}',1,1,'2019-06-10 16:15:29','2019-07-09 16:57:08'),(3,4,'DERky2OKjsSfteIx5T.png','{\"hy\":\"Ապուրներ\",\"ru\":\"Супы\",\"en\":\"Soups\"}','{\"hy\":\"Մենք օգտագործում ենք միայն թարմ և տեղական մսամթերք\",\"ru\":\"Мы используем только свежие и местные продукты.\",\"en\":\"We use only fresh and local products.\"}',1,2,'2019-06-10 16:15:29','2019-07-09 16:58:11'),(4,6,'vPeYwpoQCpG3XncxxS.png','{\"hy\":\"Խավարտներ\",\"ru\":\"Гарниры\",\"en\":\"Garnishes\"}','{\"hy\":\"Մենք օգտագործում ենք միայն թարմ և տեղական մսամթերք\",\"ru\":\"Мы используем только свежие и местные продукты.\",\"en\":\"We use only fresh and local products.\"}',1,3,'2019-06-10 16:15:29','2019-07-09 16:59:02'),(5,5,'2g1PhoDEx7tyGasoS1.png','{\"hy\":\"Տաք կերակուրներ\",\"ru\":\"Горячие блюда\",\"en\":\"Hot dishes\"}','{\"hy\":\"Մենք օգտագործում ենք միայն թարմ և տեղական մսամթերք\",\"ru\":\"Мы используем только свежие и местные продукты.\",\"en\":\"We use only fresh and local products.\"}',1,4,'2019-06-10 16:15:29','2019-07-09 16:59:53');
/*!40000 ALTER TABLE `home_catalogue` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iso` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_iso_unique` (`iso`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'hy','Հայերեն',1),(2,'ru','Русский',1),(3,'en','English',1);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_02_04_203034_create_banners_table',1),(4,'2019_02_04_204046_create_languages_table',1),(5,'2019_02_04_211411_create_pages_table',1),(7,'2019_03_26_171844_create_galleries_table',1),(9,'2019_06_04_164955_create_catalogue_table',2),(10,'2019_06_07_163802_create_home_catalogue_table',2),(11,'2019_06_07_182911_create_products_table',3),(12,'2019_06_07_183014_create_product_options_table',4),(13,'2019_06_07_183100_create_options_to_products_table',4),(14,'2019_06_10_214247_create_video_galleries_table',5),(15,'2019_02_08_195104_create_news_table',6),(17,'2019_06_13_200750_add_on_home_to_products_table',7),(18,'2019_06_18_174210_create_orders_table',8),(19,'2019_06_18_175243_create_order_products_table',8),(20,'2019_06_25_153335_add_contacts_to_users_table',9),(21,'2019_07_01_164226_add_relations_to_order_products_table',10),(24,'2019_07_02_180411_add_seo_to_pages_table',11),(25,'2019_07_02_180743_add_seo_to_news_table',11),(26,'2019_07_02_180822_add_seo_to_catalogue_table',11),(27,'2019_07_02_180848_add_seo_to_products_table',11),(28,'2019_07_05_163525_add_show_image_to_products_table',12),(29,'2019_07_05_165256_create_delivery_table',13),(30,'2019_07_08_152720_add_delivery_to_orders_table',14),(33,'2019_07_08_201306_add_locale_to_orders_table',15);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'{\"hy\":\"Սննդի արագ ընդունումը կարող է շաքարախտ առաջացնել\",\"en\":null}','TV983SM93jpXF5HQsh.jpg','gaspacho-gastrohachuyq','{\"hy\":\"Ճապոնացի մասնագիտները պնդում են, որ սննդի արագ ընդունումը կարող է երկրորդ կարգի շաքարախտ առաջացնել:\",\"en\":null}','{\"hy\":\"<p>Ճապոնացի մասնագիտները պնդում են, որ սննդի արագ ընդունումը կարող է երկրորդ կարգի շաքարախտ առաջացնել: Նման սովորությունն, ինչպես կարծում են տվյալ հետազոտության հեղինակները, բացասական է ազդում ֆիզիկական առողջության, ինչպես նաև արտաքին տեսքի վրա:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Ճապոնացի գիտնականներն ասում են, որ սննդի արագ ընդունումը բարձրացնում է արյան մեջ գլյուկոզայի մակարդակն, օրինակ, այն մարդկանց մոտ, ովքեր ուտում են գրասենյակում համակարգչի առաջ, աշխատանքի գնալիս &laquo;ոտքի վրա&raquo; և այլն:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Այդ սովորությունը վատ ազդեցություն է ունենում մեր օրգանիզմի և առողջության վրա, ընդ որում, շաքարախտը համարվում է անբուժելի հիվանդություն, որն առողջական մի շարք խնդիրների է հանգեցնում:<\\/p>\",\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,'2019-06-12 15:19:02','2019-07-11 21:38:18'),(2,'{\"hy\":\"Ձվածեղն օգտակար է արյան բարձր ճնշում ունեցողների համար\",\"en\":null}','wsOa2a6fIxot7W8EUl.jpg','tnakan-uteliqi-anhaght-uzhy','{\"hy\":\"Հետազոտությունները նաև ցույց են տվել, որ ջերմային մշակումից հետո սպիտակուցի` արյան ճնշում իջեցնող հատկությունը չի վերանում։\",\"en\":null}','{\"hy\":\"<p>Չինացի և կանադացի գիտնականները պարզել են, որ ձվի սպիտակուցը իջեցնում է արյան ճնշումը։ Լաբորատոր պայմաններում մկների վրա կատարած փորձարկումները հաստատել են այդ փաստը։ Հետազոտությունները նաև ցույց են տվել, որ ջերմային մշակումից հետո սպիտակուցի` արյան ճնշում իջեցնող հատկությունը չի վերանում։ Ավելին, կանադացի հետազոտողների խոսքերով` տապակած սպիտակուցը ավելի արագ է իջեցնում արյան ճնշումը։<\\/p>\",\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,'2019-06-12 15:19:28','2019-07-11 21:39:56'),(3,'{\"hy\":\"Առողջարար սննդամթերքներ, որոնք մենք սխալ ենք վերամշակում\",\"en\":null}','2cU9FzBOVTanHZCIyU.jpg','haykakan-khohanotsi-rusakan-hyury','{\"hy\":\"Բազմաթիվ օգտակար սննդամթերքները մարդիկ հաճախ օգտագործում են ոչ ճիշտ, ինչի հետևանքով նվազագույնի են հասցվում կամ վերանում են դրանց օգտակար նյութերը:\",\"en\":null}','{\"hy\":\"<p>Բազմաթիվ օգտակար սննդամթերքներ, պարզվում է, մարդիկ շատ հաճախ օգտագործում են ոչ ճիշտ, ինչ հետևանքով նվազագույնի են հասցվում կամ էլ առհասարակ վերանում են դրանց օգտակար նյութերը:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Բրոկոլի<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Եփման կամ էլ քիչ ջրով եփման ու տապակման ժամանակ կորչում են այս բանջարեղենի բոլոր օգտակար նյութերը: Դրանք պահպանելու համար պետք է բրոկոլին խաշել գոլորշու վրա կամ էլ օգտագործել հում վիճակով:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Ելակ<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Այն ձեռք բերելուց հետո մի շտապեք անմիջապես հեռացնել պտղակոթերը, քանի որ դրա, ինչպես նաև կտրտելու հետևանքով այս հատապտուղը կորցնում է իր վիտամինների մեծ մասը: Եվ հիշեք՝ ամենաօգտակար ելակը վաճառվում է միայն համապատասխան սեզոնին:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Սև թեյ<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Սև թեյի օգտակար հատկությունները կորչում են, երբ դրան կաթ են ավելացնում:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Կտավատի սերմեր<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Այս հիանալի սերմերը պարունակում են թաղանթանյութ, օմեգա-3 ճարպաթթուներ, հակաօքսիդանտներ: Սակայն կտավատի սերմերը սովորական օգտագործման, կամ էլ կեֆիրի ու յոգուրտի հետ օգտագործման դեպքում գործնականորեն չեն կիրառվում, ուստի դրանք պետք է փոշիացնել նոր ուտել:&nbsp;<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Սպանախ<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Այս կանաչեղենի օգտակար հատկությունները պահպանելու համար պետք է այն կամ շոգեխաշել կամ էլ թեթևակի տապակել շիկացած թավայի վրա, բայց այնպես, որ այն մնա փոքր-ինչ խրթխրթան:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Սխտոր<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Սխտորից առավելագույն օգուտ ստանալու համար ճզմեք այն և թողեք 10 րոպե, ինչից հետո նոր ավելացրեք ուտեստներին:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Լոլիկներ<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Լոլիկները պարունակում են լիկոպին հակաօքսիդանտը, որը պաշտպանում է անոթները, կանխում աթերոսկլերոզի առաջացումը: Լոլիկներից առավելագույն օգուտ ստանալու համար պետք է դրանք ենթարկել ջերմային մշակման:&nbsp;<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Յոգուրտ<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Բացելով յոգուրտը՝ դեն մի նետեք երեսին հավաքված շիճուկն, այլ խառնեք ընդհանուրի հետ ու կերեք:<br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Հացահատիկային ու լոբազգի մշակաբույսեր<\\/strong><br \\/>\\r\\n&nbsp;&nbsp;&nbsp;&nbsp; Չվերամշակված հացահատիկները և չորացված լոբազգիներն իրենց թաղանթի մեջ պարունակում են ֆիտատներ՝ հակաօքսիդանտներ, որոնք, շփման մեջ մտնելով վիտամինների և հանքանյութերի հետ, խանգարում են դրանց ամբողջական յուրացմանը: Ուստի միշտ պետք է լոբազգիներն ու հացահատիկային բույսերը պատրաստելուն նախորդող գիշերը թրջել ջրի մեջ:<\\/p>\",\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,'2019-06-12 15:20:17','2019-07-11 21:41:21'),(4,'{\"hy\":\"Ամենաառողջ սննդակարգը՝ ըստ գիտնականների\",\"en\":null}','PTIIRvXabAj7M9MUo9.jpg','erevani-girosayin-spartan','{\"hy\":\"Գիտնականները պնդում են, որ սննդակարգն օգնում է մարդուն բարելավել բոլոր ներքին օրգանների աշխատանքը, սրտանոթային գործունեությունը, մարսողությունը:\",\"en\":null}','{\"hy\":\"<p>Կետոգենիկ սննդակարգն ավելորդ քաշը կորցնելու ամենաիդեալական միջոցն է: Նման եզրահանգման են եկել ամերիկացի գիտնականները, գրում է Business Insider-ը:<\\/p>\\r\\n\\r\\n<p>Կետոգենիկ սննդակարգը ցածր ածխաջրային սննդակարգ է` ճարպերի և սպիտակուցների չափավոր քանակությամբ: Այս սննդակարգն օրգանիզմի ընդունած ճարպերն օգտագործում է որպես էներգիայի աղբյուր: Սովորաբար սննդի մեջ պարունակվող ածխաջրերը վերածվում են գլյուկոզի, ինչը շատ կարևոր է ուղեղի աշխատանքի համար: Սակայն եթե սննդակարգում ածխաջրերը քիչ քանակությամբ են, գլխուղեղում գլյուկոզի փոխարեն ճարպերն են էներգիայի պաշար հանդիսանում: Լյարդը ճարպը վերածում է ճարպաթթուների և կետոնային մարմինների: Հենց վերջիններն էլ գլյուկոզի փոխարեն էներգիա են մատակարարում մարմնին:<\\/p>\\r\\n\\r\\n<p>Գիտնականները պնդում են, որ այս սննդակարգն օգնում է մարդուն կառուցել սեփական սննդառեժիմը, բարելավել բոլոր ներքին օրգանների աշխատանքը, սրտանոթային գործունեությունը, մարսողությունը, ինչպես նաև նվազեցնել այնպիսի ծանր հիվանդությունների զարգացման ռիսկը, ինչպիսին է Ալցհեյմերի հիվանդությունը կամ ծերունական թուլամտությունը:<\\/p>\",\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,'2019-06-12 15:20:36','2019-07-11 21:26:39');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `options_to_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options_to_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=245 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `options_to_products` WRITE;
/*!40000 ALTER TABLE `options_to_products` DISABLE KEYS */;
INSERT INTO `options_to_products` VALUES (7,2,1),(16,3,1),(231,3,4),(22,7,1),(232,7,4),(29,8,1),(30,8,2),(34,9,1),(35,9,2),(40,10,1),(41,10,2),(44,11,1),(63,14,4),(234,20,2),(233,20,1),(105,21,1),(106,21,2),(111,22,1),(112,22,2),(117,23,1),(118,23,2),(244,49,2),(243,49,1),(242,48,2),(241,48,1),(240,47,2),(239,47,1),(238,46,2),(237,46,1),(236,45,2),(235,45,1),(230,2,4),(229,11,4);
/*!40000 ALTER TABLE `options_to_products` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL DEFAULT '1',
  `price` int(10) unsigned NOT NULL,
  `product_title` text COLLATE utf8mb4_unicode_ci,
  `options` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `order_products_order_id_foreign` (`order_id`),
  CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` VALUES (1,1,7,5,4200,'{\"hy\":\"Խոզի մատեր 4 կտոր\",\"ru\":\"Шашлык из свиных ребер\",\"en\":\"Pigs ribs, fillet barbeque\"}','[{\"id\":4,\"title\":{\"hy\":\"Կարտոֆիլ\",\"ru\":\"Картофель\",\"en\":\"Potatoes\"}},{\"id\":1,\"title\":{\"hy\":\"Սոխ\",\"ru\":\"Лук\",\"en\":\"Onion\"}}]'),(4,3,11,3,4300,'{\"hy\":\"Խոզի խորոված խառը\",\"ru\":\"Шашлык из свинины разное\",\"en\":\"Pig barbeque\"}','[{\"id\":4,\"title\":{\"hy\":\"Կարտոֆիլ\",\"ru\":\"Картофель\",\"en\":\"Potatoes\"}},{\"id\":1,\"title\":{\"hy\":\"Սոխ\",\"ru\":\"Лук\",\"en\":\"Onion\"}}]');
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `delivery_id` int(10) unsigned DEFAULT NULL,
  `delivery_title` text COLLATE utf8mb4_unicode_ci,
  `delivery` int(10) unsigned DEFAULT NULL,
  `method` enum('cash','online') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash',
  `sum` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `locale` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,NULL,'Edgar','091232400','099010770','Avan babajanyan 146',NULL,NULL,5,'{\"hy\":\"Ավան\"}',500,'cash',21500,-1,'hy','2019-07-11 19:30:41','2019-07-15 21:08:26'),(3,NULL,'Михаил','043525730',NULL,'Мамиконянц 37',NULL,NULL,2,'{\"hy\":\"Արաբկիր\",\"ru\":\"Арабкир\",\"en\":\"Arabkir\"}',300,'cash',13200,-1,'ru','2019-07-17 01:19:04','2019-07-18 17:59:26');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_image` tinyint(1) NOT NULL DEFAULT '1',
  `content` text COLLATE utf8mb4_unicode_ci,
  `static` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `to_menu` tinyint(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'home','{\"hy\":\"Գլխավոր\",\"ru\":\"Главная\",\"en\":\"Home\"}',NULL,0,'{\"ru\":null}','home','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,1,1,'2019-05-31 12:24:25','2019-07-23 19:02:18'),(2,'menu','{\"hy\":\"Մենյու\",\"ru\":\"Меню\",\"en\":\"Menu\"}',NULL,0,'{\"ru\":null}','menu','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,1,2,'2019-05-13 15:45:26','2019-07-23 19:02:18'),(3,'about','{\"hy\":\"Մեր մասին\",\"ru\":\"О нас\",\"en\":\"About\"}',NULL,0,NULL,'about',NULL,NULL,NULL,1,1,3,'2019-05-31 11:39:50','2019-07-23 19:02:18'),(4,'kap','{\"hy\":\"Կապ\",\"ru\":\"Контакт\",\"en\":\"Contact\"}',NULL,0,NULL,'contact',NULL,NULL,NULL,1,1,5,'2019-05-31 12:24:15','2019-07-23 19:02:18'),(5,'news','{\"hy\":\"Նորություններ\",\"ru\":\"Новости\",\"en\":\"News\"}',NULL,0,'{\"ru\":null}','news','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,1,4,'2019-06-10 14:11:55','2019-07-23 19:02:18');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('laravel@laravel.co.ck.ck','$2y$10$gkOAUXIKjpm1lnQ6EX8.zeuBcIz.24hVvngahRIRmYCm6KGTHjp8S','2019-07-05 00:10:21');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `product_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `product_options` WRITE;
/*!40000 ALTER TABLE `product_options` DISABLE KEYS */;
INSERT INTO `product_options` VALUES (1,'{\"hy\":\"Սոխ\",\"ru\":\"Лук\",\"en\":\"Onion\"}','cv12SGFd6zfLIGyaIi.svg',8,1,'2019-06-08 12:26:43','2019-07-05 19:29:18'),(2,'{\"hy\":\"Կանաչի\",\"ru\":\"Зелень\",\"en\":\"Greenery\"}','Yei1fq2MOTOi7bm3s6.svg',1,1,'2019-06-08 12:26:56','2019-07-05 19:24:07'),(3,'{\"hy\":\"Կծու բիբար\",\"ru\":\"Острый перец\",\"en\":\"Hot peppers\"}','c4qgaNppeYq9rARmLV.svg',2,1,'2019-06-11 10:00:51','2019-07-05 19:24:48'),(4,'{\"hy\":\"Կարտոֆիլ\",\"ru\":\"Картофель\",\"en\":\"Potatoes\"}','j0ts4e0WlPDddbuYeX.svg',3,1,'2019-06-11 10:01:07','2019-07-05 19:25:28'),(5,'{\"hy\":\"Մայոնեզ\",\"ru\":\"Майонез\",\"en\":\"Mayonnaise\"}','OhxYyGaCmXzRawvrLr.svg',4,1,'2019-06-11 10:01:17','2019-07-05 19:26:09'),(6,'{\"hy\":\"Սխտոր\",\"ru\":\"Чеснок\",\"en\":\"Garlic\"}','A8P3TktShsdNIMx7Dt.svg',5,1,'2019-06-11 10:01:27','2019-07-05 19:27:25'),(7,'{\"hy\":\"Լոլիկ\",\"ru\":\"Помидор\",\"en\":\"Tomatoes\"}','tnPCSifjZ9vbvE2qj5.svg',6,1,'2019-06-11 10:02:45','2019-07-05 19:27:52'),(8,'{\"hy\":\"Կետչուպ\",\"ru\":\"Кетчуп\",\"en\":\"Ketchup\"}','HPxmtSVRvRXviPFdar.svg',7,1,'2019-06-11 10:02:59','2019-07-05 19:28:33');
/*!40000 ALTER TABLE `product_options` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_image` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `short` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `catalogue_id` int(10) unsigned NOT NULL,
  `on_home` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'{\"ru\":\"Патронтаж-Рипс\",\"en\":\"Patronage-Rips\",\"hy\":\"Պատրոնտաժ-Ռիփս\"}','AeNKFngnFHMDljSbpp.jpg',1,'patrontazh-rips',8700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,1,1,'2019-06-10 12:01:33','2019-07-23 19:06:45'),(8,'{\"hy\":\"Գառի խառը կտորներ\",\"ru\":\"Шашлык из Ягненка\",\"en\":\"Veal Barbeque\"}','2jagUvPx8tTVuVPODt.jpg',0,'gari-khary-ktorner',3600,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,10,1,'2019-06-25 10:43:18','2019-07-23 19:06:45'),(9,'{\"hy\":\"Գառի չալաղաջ 4 կտոր\",\"ru\":\"Шашлык из тундира, ягненок\",\"en\":\"Lamb barbeque made in tundir\"}','mHbaxqJtdoQqjzlD4d.jpg',1,'gari-chalaghaj-4-ktor',4800,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,2,1,'2019-06-25 11:16:29','2019-07-23 19:06:45'),(10,'{\"hy\":\"Թոնրի հավ\",\"ru\":\"Курица из тундира\",\"en\":\"Chicken made in tundir\"}','tcrPqHehuPFew1P8Jt.jpg',1,'tonri-hav',3200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,3,1,'2019-06-25 11:18:36','2019-07-23 19:06:45'),(11,'{\"hy\":\"Խոզի խորոված խառը\",\"ru\":\"Шашлык из свинины разное\",\"en\":\"Pig barbeque\"}','RINJD74lAfRlvuoATN.jpg',1,'khozi-khorovats-khary',4500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,4,1,'2019-06-25 11:21:05','2019-07-23 19:06:45'),(12,'{\"hy\":\"Իշխան խորոված\",\"ru\":\"Форель из тундира\",\"en\":\"Trout made in tundir\"}','PuEVZvM7kc8MTjeFsg.jpg',1,'ishkhan-khorovats',3500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',7,0,2,1,'2019-06-25 11:23:22','2019-07-23 17:47:53'),(13,'{\"hy\":\"Հավի թևեր\",\"ru\":\"Куриные крилышки\",\"en\":\"Chicken wings\"}','TE5FXkIgZ4bulU0cPz.jpg',1,'havi-tever',1800,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,1,5,1,'2019-06-25 11:26:09','2019-07-23 19:06:45'),(2,'{\"hy\":\"Խոզի չալաղաջ 3 կտոր\",\"en\":null}','9vh7dl6kA8TMU7uo1d.png',1,'khozi-chalaghaj-3-ktor',4500,NULL,'{\"hy\":\"<p>SHORT<\\/p>\",\"en\":null}','{\"hy\":\"<p>LONG<\\/p>\",\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,6,1,'2019-06-10 12:04:36','2019-07-23 19:06:45'),(3,'{\"hy\":\"Խոզի խորոված՝ փափուկ 4 կտոր\",\"ru\":\"Шашлык из тундира\",\"en\":\"Barbeque with potatoes and onions\"}','eYbj2liEyA3udBoW0X.jpg',1,'khozi-khorovats-papuk-4-ktor',3800,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,7,1,'2019-06-10 12:05:03','2019-07-23 19:06:45'),(6,'{\"hy\":\"Խորոված կարտոֆիլ\",\"ru\":\"Запеченный картофель\",\"en\":\"Roasted potatoes\"}','ynUUsXvb1OJRrhAaNt.jpg',1,'product',400,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,1,1,'2019-06-13 09:50:04','2019-07-24 16:40:00'),(7,'{\"hy\":\"Խոզի մատեր 4 կտոր\",\"ru\":\"Шашлык из свиных ребер\",\"en\":\"Pigs ribs, fillet barbeque\"}','oaZ2HOiicPUT8y1lcZ.jpg',1,'khozi-mater-4-ktor',4200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,8,1,'2019-06-25 09:24:34','2019-07-23 19:06:45'),(14,'{\"hy\":\"Թոնրի ճուտ\",\"ru\":\"Цыпленок из тундира\",\"en\":\"Chicken made in tundir\"}','1L6lo25vGvgTw3cxbf.jpg',1,'tonri-chut',1500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',1,0,9,1,'2019-06-25 11:28:25','2019-07-23 19:06:45'),(15,'{\"hy\":\"Սունկ\",\"ru\":\"Грибы\",\"en\":\"Mushrooms\"}','ucGAeTHriJ17TttO8X.jpg',1,'sunk',1200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,2,1,'2019-06-25 11:45:57','2019-07-24 16:40:00'),(16,'{\"hy\":\"Փառդա\",\"ru\":\"Парда\",\"en\":\"Parda\"}','YNdxVvtno5IBTFErjM.jpg',1,'parda',1300,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,3,1,'2019-06-25 11:50:13','2019-07-24 16:40:00'),(17,'{\"hy\":\"Շիշ թաուք\",\"ru\":\"Шиш Таук\",\"en\":\"Shish Tauk\"}','dh8eu03vh1TSghaMVv.jpg',1,'shish-tauq',1600,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,6,1,'2019-06-25 11:51:51','2019-07-24 16:40:00'),(18,'{\"hy\":\"Ցլիկի մեջքամիս՝ սուկի\",\"ru\":\"Суки\",\"en\":\"Suki\"}','yODD3WyI8qCXjn3QZz.jpg',1,'tsliki-mejqamis-suki',6000,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,7,1,'2019-06-25 12:01:34','2019-07-24 16:40:00'),(19,'{\"hy\":\"Գառան չալաղաջ\",\"ru\":\"Шашлык из бараньего окорка\",\"en\":\"Sheep ham barbeque\"}','uXLFHcsx90qklzRWeI.jpg',1,'garan-chalaghaj',4500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,8,1,'2019-06-25 12:02:53','2019-07-24 16:40:00'),(20,'{\"hy\":\"Խոզի խորոված\",\"ru\":\"Шашлык из свиного окорка\",\"en\":\"Pig ham barbeque\"}','gnwvraJZarYAEVuXot.jpg',1,'khozi-khorovats',4200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,9,1,'2019-06-25 12:05:43','2019-07-24 16:40:00'),(21,'{\"hy\":\"Հավի քաբաբ\",\"ru\":\"Куриный кебаб\",\"en\":\"Chicken kebab\"}','SwrB1S393SFtHFWtqu.jpg',1,'qabab-havi',800,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',3,0,2,1,'2019-06-25 12:11:06','2019-07-24 16:46:56'),(22,'{\"hy\":\"Գառան քաբաբ\",\"ru\":\"Кебаб из баранины\",\"en\":\"Kebab of mutton\"}','s9GNZQL8jTEk299nz0.jpg',1,'arabakan',1000,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',3,1,3,1,'2019-06-25 12:13:48','2019-07-24 16:46:56'),(23,'{\"hy\":\"Տավարի քաբաբ\",\"ru\":\"Кебаб из телятины\",\"en\":\"Kebab of veal\"}','Masjtp9FONMI20wzCJ.jpg',1,'haykakan',1000,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',3,0,1,1,'2019-06-25 12:15:33','2019-07-24 16:46:56'),(24,'{\"hy\":\"Խաշ\",\"ru\":\"Хаш\",\"en\":\"Xash\"}','EXjWghs8zWBnMBEceb.jpg',1,'khash',2000,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,6,1,'2019-06-25 12:29:13','2019-07-24 22:12:01'),(25,'{\"hy\":\"Թանապուր\",\"ru\":\"Спас\",\"en\":\"Spas\"}','ylqymH5E2t59ryXfIp.jpg',1,'tanapur',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,5,1,'2019-06-25 12:31:52','2019-07-24 22:12:01'),(26,'{\"hy\":\"Սնկով ապուր\",\"ru\":\"Грибной суп\",\"en\":\"Mushroom soup\"}','lsS2RIj2kmot9bI0VQ.jpg',1,'snkov-apur',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,4,1,'2019-06-25 12:33:16','2019-07-24 22:12:01'),(27,'{\"hy\":\"Խարչո\",\"ru\":\"Харчо\",\"en\":\"Kharcho\"}','0ccZA6ftBXBBkknThz.jpg',1,'kharcho',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,3,1,'2019-06-25 12:34:26','2019-07-24 22:12:01'),(28,'{\"hy\":\"Սոլյանկա\",\"ru\":\"Солянка\",\"en\":\"Solyanka\"}','KkWXKEd6yAgX7HNH68.jpg',1,'solyanka',1100,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,2,1,'2019-06-25 12:36:49','2019-07-24 22:12:01'),(29,'{\"hy\":\"Փիթի\",\"ru\":\"Пити\",\"en\":\"Piti\"}','piLoB4CmSB379OeIwo.jpg',1,'piti',1100,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,1,1,'2019-06-25 12:38:09','2019-07-24 22:12:01'),(30,'{\"hy\":\"Իտալական լանգետ\",\"ru\":\"Лангет Итальянский\",\"en\":\"Languet Italian\"}','bc0cabwt0LVtZmyPit.jpg',1,'italakan-langet',2700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,1,4,1,'2019-06-25 12:45:03','2019-07-25 21:01:12'),(31,'{\"hy\":\"Իսպանական լանգետ\",\"ru\":\"Лангет Испанский\",\"en\":\"Languet Spanish\"}','zugS2cXlLY5kMgR2cI.jpg',1,'ispanakan-langet',2700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,1,3,1,'2019-06-25 12:46:50','2019-07-25 21:01:12'),(32,'{\"hy\":\"Խոզի տապակա\\/ժարկոե\",\"ru\":\"Жаркое из свинины\",\"en\":\"Pork roast\"}','68nItvWa2Rc82a6IdX.jpg',1,'khozi-tapakazharkoe',2200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,0,2,1,'2019-06-25 12:48:11','2019-07-25 21:01:12'),(33,'{\"hy\":\"Բեֆստոգրանով\",\"ru\":\"Бефстроганов\",\"en\":\"Beef stroganoff\"}','MqqvB4slMUr1klQfig.jpg',1,'befstogranov',2200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,0,1,1,'2019-06-25 12:49:44','2019-07-25 21:01:12'),(37,'{\"hy\":\"Կարտոֆիլ կարագով տապակած\",\"ru\":\"Картофель жареный с маслом\",\"en\":\"Fried potatoes with butter\"}','lSPNGhpsZzgouFhL29.jpg',1,'kartofil-karagov-tapakats',800,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',6,0,0,1,'2019-06-25 12:57:52','2019-07-05 20:17:04'),(38,'{\"hy\":\"Բրինձ\",\"ru\":\"Рис\",\"en\":\"Rice\"}','7LMgPOTpdNuZx8Abdk.jpg',1,'brindz',400,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',6,0,0,1,'2019-06-25 12:59:28','2019-07-05 20:17:23'),(39,'{\"hy\":\"Հնդկացորեն\",\"ru\":\"Гречка\",\"en\":\"Buckwheat\"}','q8VrVQz3lj2kOGKcJ1.jpg',1,'hndkatsoren',400,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',6,0,0,1,'2019-06-25 13:00:50','2019-07-05 20:17:35'),(43,'{\"hy\":\"Չուքաձուկ\",\"ru\":\"Стерлядь\",\"en\":\"Sterlet\"}',NULL,1,'chuqadzuk',6000,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',7,0,1,1,'2019-07-23 17:47:40','2019-07-23 17:47:53'),(44,'{\"hy\":\"Սիգ\",\"ru\":\"Сиг\",\"en\":\"Sig\"}',NULL,1,'sig',1600,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',7,0,0,1,'2019-07-23 17:49:28','2019-07-23 17:49:28'),(45,'{\"hy\":\"Խոզի խորոված՝ մատեր 4 կտոր\",\"ru\":\"Шашлык из свиных ребер 4шт.\",\"en\":\"Pig ham barbeque 4p.\"}',NULL,1,'khozi-mater-4-ktor-2',3900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,10,1,'2019-07-23 18:41:56','2019-07-24 16:40:00'),(46,'{\"hy\":\"Խոզի խորոված՝ փափուկ\",\"ru\":\"Шашлык из свиной корейки\",\"en\":\"Pigs fillet barbeque\"}',NULL,1,'khozi-khorovats-papuk',3700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,11,1,'2019-07-23 19:27:27','2019-07-24 16:40:00'),(47,'{\"hy\":\"Գառան խորոված՝ խառը 4 կտոր\",\"ru\":\"Шашлик из ягненка разное 4 шт.\",\"en\":\"Lamb barbeque 4p.\"}',NULL,1,'garan-khorovats-khary-4-ktor',3300,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,12,1,'2019-07-23 20:57:36','2019-07-24 16:40:00'),(48,'{\"hy\":\"Գառի իքի բիր\",\"ru\":\"Ики бир из баранины\",\"en\":\"Lamb iki bir\"}',NULL,1,'gari-iqi-bir',1300,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,4,1,'2019-07-24 16:31:06','2019-07-24 16:40:00'),(49,'{\"hy\":\"Խոզի իքի բիր\",\"ru\":\"Ики бир из свинины\",\"en\":\"Pig iki bir\"}',NULL,1,'khozi-iqi-bir',1400,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',2,0,5,1,'2019-07-24 16:39:55','2019-07-24 16:40:00'),(50,'{\"hy\":\"Կրեմ-ապուր դդումով\",\"ru\":\"Крем-суп из тыквы\",\"en\":\"Pumpkin Cream Soup\"}',NULL,1,'kremm-apur-ddumov',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,8,1,'2019-07-24 19:09:09','2019-07-24 22:12:01'),(51,'{\"hy\":\"Կրեմ-ապուր սնկով\",\"ru\":\"Крем-суп с грибами\",\"en\":\"Cream soup with mushrooms\"}',NULL,1,'krem-apur-snkov',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,7,1,'2019-07-24 19:11:15','2019-07-24 22:12:01'),(52,'{\"hy\":\"Կրեմ-ապուր բրոկոլիով\",\"ru\":\"Крем-суп с брокколи\",\"en\":\"Broccoli Cream Soup\"}',NULL,1,'krem-apur-brokoliov',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,10,1,'2019-07-24 19:12:26','2019-07-24 22:12:01'),(53,'{\"hy\":\"Կրեմ-ապուր ոսպով\",\"ru\":\"Крем-суп с чечевицей\",\"en\":\"Cream soup with lentils\"}',NULL,1,'krem-apur-ospov',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,9,1,'2019-07-24 19:14:31','2019-07-24 22:12:01'),(54,'{\"hy\":\"Խաշլամա ցուլիկի 4 կտոր, կարտոֆիլով\",\"ru\":\"Хашлама из говядины с картофелем\",\"en\":\"Beef khashlama with potatoes\"}',NULL,1,'khashlama-tsuliki-4-ktor-kartofilov',3700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,0,6,1,'2019-07-24 19:28:32','2019-07-25 21:01:12'),(55,'{\"hy\":\"Խաշլամա գառան 4 կտոր, կարտոֆիլով\",\"ru\":\"Хашлама из ягненка с картофелем\",\"en\":\"Lamb khashlama with potatoes\"}',NULL,1,'khashlama-garan-4-ktor-kartofilov',3500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,0,5,1,'2019-07-24 20:19:37','2019-07-25 21:01:12'),(56,'{\"hy\":\"Հավով ապուր\",\"ru\":\"Куриный суп\",\"en\":\"Chicken soup\"}',NULL,1,'havov-apur',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',4,0,11,1,'2019-07-24 22:11:44','2019-07-24 22:12:01'),(57,'{\"hy\":\"Թաբուլե\",\"ru\":\"Табуле\",\"en\":\"Tabule\"}',NULL,1,'tabule',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 18:31:24','2019-07-25 18:31:24'),(58,'{\"hy\":\"Հումուս\",\"ru\":\"Хумус\",\"en\":\"Humus\"}',NULL,1,'humus',1200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 18:34:47','2019-07-25 18:34:47'),(59,'{\"hy\":\"Մութաբալ\",\"ru\":\"Мутабал\",\"en\":\"Mutabal\"}',NULL,1,'mutabal',1200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 18:36:40','2019-07-25 18:36:40'),(60,'{\"hy\":\"Ամառային\",\"ru\":\"Лето\",\"en\":\"Summer\"}',NULL,1,'amarayin',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 18:39:45','2019-07-25 18:39:45'),(61,'{\"hy\":\"Կարմիր լոբով\",\"ru\":\"Красная фасоль\",\"en\":\"Red beans\"}',NULL,1,'karmir-lobov',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 19:13:53','2019-07-25 19:13:53'),(62,'{\"hy\":\"Մառոլով\",\"ru\":\"С маролью\",\"en\":\"Marolles\"}',NULL,1,'marolov',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 19:50:51','2019-07-25 19:50:51'),(63,'{\"hy\":\"Ավելուկով\",\"ru\":\"Из авелука\",\"en\":\"Aveluk\"}',NULL,1,'avelukov',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 20:35:56','2019-07-25 20:35:56'),(64,'{\"hy\":\"Հունական\",\"ru\":\"Греческий\",\"en\":\"Greek\"}',NULL,1,'hunakan',1500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 20:43:54','2019-07-25 20:43:54'),(65,'{\"hy\":\"Կեսար\",\"ru\":\"Цезарь\",\"en\":\"Caesar\"}',NULL,1,'kesar',1500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 20:49:38','2019-07-25 20:49:38'),(66,'{\"hy\":\"Կաղամբով\",\"ru\":\"Из капусты\",\"en\":\"From cabbage\"}',NULL,1,'kaghambov',500,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',8,0,0,1,'2019-07-25 20:53:04','2019-07-25 20:53:04'),(67,'{\"hy\":\"Խինկալի \\/1 հատ\\/\",\"ru\":\"Хинкали \\/1 шт.\\/\",\"en\":\"Khinkali \\/ 1pc \\/\"}',NULL,1,'khinkali-1-hat',200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',5,0,7,1,'2019-07-25 21:01:01','2019-07-25 21:01:12'),(68,'{\"hy\":\"Լահմաջո տավարի մսով (32սմ)\",\"ru\":\"Ламаджо с говядиной (32см)\",\"en\":\"Lamadzho with beef (32cm)\"}',NULL,1,'lahmajo-tavari-msov-32-sm',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',9,0,1,1,'2019-07-25 21:25:10','2019-07-25 21:54:58'),(69,'{\"hy\":\"Լահմաջո գառան մսով (32սմ)\",\"ru\":\"Ламаджо из ягнонка (32см)\",\"en\":\"Lamadzho with lamb (32cm)\"}',NULL,1,'lahmajo-garan-msov-32sm',700,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',9,0,2,1,'2019-07-25 21:36:26','2019-07-25 21:54:58'),(70,'{\"hy\":\"Մերգելական խաչապուրի (34սմ)\",\"ru\":\"Хачапури по-мегрельски (34см)\",\"en\":\"Megrelian khachapuri (34cm)\"}',NULL,1,'mergelakan-khachapuri-34sm',2200,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',9,0,3,1,'2019-07-25 21:48:50','2019-07-25 21:54:58'),(71,'{\"hy\":\"Իմերիթական խաչապուրի (34սմ)\",\"ru\":\"Имеретинские хачапури (34см)\",\"en\":\"Khachapuri by imeretinsky (34cm)\"}',NULL,1,'imeritakan-khachapuri-34sm',2000,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',9,0,4,1,'2019-07-25 21:53:04','2019-07-25 21:54:58'),(72,'{\"hy\":\"Աջարական խաչապուրի 2 ձվով\",\"ru\":\"Аджарский хачапури с 2 яйцами\",\"en\":\"Adjarian khachapuri with 2 eggs\"}',NULL,1,'ajarakan-khachapuri-2-dzvov',900,NULL,'{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}','{\"en\":null}',9,0,5,1,'2019-07-25 21:54:53','2019-07-25 21:54:58');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `verification` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','info@xorovac.am','$2y$10$19MUCIyVXfZaD5TLuLPdoubSW9HaucN93LfT04.TnSZLO3Xlq3Xgy','Կոմիտասի պող., 24/6 շենք','+37410270047','qL3VZoysbYdogPZANce1Sjk4C6IkFTJrSlesl8cHhXCtlL3WjMZ3u2AVozYG',1,NULL,1,'2019-05-10 09:26:49','2019-07-04 18:22:21'),(2,'Hayk Zakaryan','zakhayko@gmail.com','$2y$10$ywYyBNBqtQ/PkTOmbjxEwOcBCc1Z0UKqdsYvrvgH4JU.wPf/NFp.y','Kanaker-Zeytun','+37455325665','Wa4VtY2VlLJxi3NgufLktB5fFSXeFZpwaTnR5XUCsCpf5UkAUwpivJNXolRS',0,NULL,1,'2019-07-04 18:46:36','2019-07-04 18:47:15'),(3,'Դավիթ Կենջեցյան','davidkenjetsyan@gmail.com','$2y$10$CvGXq.CjRSOoLPLl5G//XeH/CHp2riI.b5D5b9XFizXN6xbzbsYna','Ռուբինյանց 26, բն.51','+37499410220','TIhIHjQGHjIbfOgClNKcARtxCLAZHIzd2rWxtsVaqhZthV7Ewgi2S2Pmh1Qv',0,NULL,1,'2019-07-21 21:50:45','2019-07-21 21:51:15'),(4,'Hovhannes','asatryanhovhannes@yahoo.com','$2y$10$BDi9QPFOLvgB92TCslKSnODhVgNGzN5baB2aZAXjQy4iQFASUCn0C','Aram Khachatryan 18-76','095599595','PeZRdsVgTwNLEk3PtkGfrsBBbJB7BJDaApaz42XztU4wX6jWIvDWhwZtkKcg',0,NULL,1,'2019-07-24 21:16:09','2019-07-24 21:16:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `video_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` int(10) unsigned DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `video_galleries` WRITE;
/*!40000 ALTER TABLE `video_galleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `video_galleries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

