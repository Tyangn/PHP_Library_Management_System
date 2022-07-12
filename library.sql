-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: library
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (20170001,'111111');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_info`
--

DROP TABLE IF EXISTS `book_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_info` (
  `book_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publish` varchar(30) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `introduction` text,
  `language` varchar(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `pubdate` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `pressmark` int(11) DEFAULT NULL,
  `state` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50000015 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_info`
--

LOCK TABLES `book_info` WRITE;
/*!40000 ALTER TABLE `book_info` DISABLE KEYS */;
INSERT INTO `book_info` VALUES (10000001,'大雪中的山庄','东野圭吾','北京十月文艺出版社','9787530216835','东野圭吾长篇小说杰作，   中文简体首次出版。 一出没有剧本的舞台剧，为什么能让七个演员赌上全部人生.东野圭吾就是有这样过人的本领，能从充满悬念的案子写出荡气回肠的情感，在极其周密曲折的同时写出人性的黑暗与美丽。 一家与外界隔绝的民宿里，七个演员被要求住满四天，接受导演的考验，但不断有人失踪。难道这并非正常排练，而是有人布下陷阱要杀他们。 那时候我开始喜欢上戏剧和音乐，《大雪中的山庄》一书的灵感就来源于此。我相信这次的诡计肯定会让人大吃一惊。——东野圭吾','中文',35.00,'2017-06-01',9,13,1),(10000003,'三生三世 十里桃花','唐七公子 ','沈阳出版社','9787544138000','三生三世，她和他，是否注定背负一段纠缠的姻缘？\r\n三生三世，她和他，是否终能互许一个生生世世的承诺？','中文',26.80,'2009-01-06',7,2,1),(10000005,'11处特工皇妃','潇湘冬儿','江苏文艺出版社','9787539943893','《11处特工皇妃(套装上中下册)》内容简介：她是国安局军情十一处惊才绝艳的王牌军师——收集情报、策划部署、进不友好国家布置暗杀任务……她运筹帷幄之中，决胜于千里之外，堪称军情局大厦的定海神针。','中文',74.80,'2011-05-05',7,2,1),(10000006,'人类简史','[以色列] 尤瓦尔·赫拉利 ','中信出版社','9787508647357','十万年前，地球上至少有六种不同的人\r\n但今日，世界舞台为什么只剩下了我们自己？\r\n从只能啃食虎狼吃剩的残骨的猿人，到跃居食物链顶端的智人，\r\n从雪维洞穴壁上的原始人手印，到阿姆斯壮踩上月球的脚印，\r\n从认知革命、农业革命，到科学革命、生物科技革命，\r\n我们如何登上世界舞台成为万物之灵的？\r\n从公元前1776年的《汉摩拉比法典》，到1776年的美国独立宣言，\r\n从帝国主义、资本主义，到自由主义、消费主义，\r\n从兽欲，到物欲，从兽性、人性，到神性，\r\n我们了解自己吗？我们过得更快乐吗？\r\n我们究竟希望自己得到什么、变成什么？','英文',68.00,'2014-11-01',11,3,1),(10000007,'明朝那些事儿（1-9）','当年明月 ','中国海关出版社','9787801656087','《明朝那些事儿》讲述从1344年到1644年，明朝三百年间的历史。作品以史料为基础，以年代和具体人物为主线，运用小说的笔法，对明朝十七帝和其他王公权贵和小人物的命运进行全景展示，尤其对官场政治、战争、帝王心术着墨最多。作品也是一部明朝政治经济制度、人伦道德的演义。','中文',358.20,'2009-04-06',11,3,1),(10000010,'经济学原理（上下）','[美] 曼昆 ','机械工业出版社','9787111126768','此《经济学原理》的第3版把较多篇幅用于应用与政策，较少篇幅用于正规的经济理论。书中主要从供给与需求、企业行为与消费者选择理论、长期经济增长与短期经济波动以及宏观经济政策等角度深入浅出地剖析了经济学家们的世界观。','英文',88.00,'2003-08-05',6,5,1),(50000004,'方向','马克-安托万·马修 ','后浪丨北京联合出版公司','9787020125265','《方向》即便在马修的作品中也算得最独特的：不着一字，尽得风流。原作本无一字，标题只是一个→，出版时才加了个书名Sens——既可以指“方向”，也可以指“意义”。 《方向》没有“字”，但有自己的语言——请读者在尽情释放想象力和独立思考之余，破解作者的密码，听听作者对荒诞的看法。','中文',99.80,'2017-04-01',9,13,1),(50000005,'画的秘密','马克-安托万·马修 ','北京联合出版公司·后浪出版公司','9787550265608','一本关于友情的疗伤图像小说，直击人内心最为隐秘的情感。 一部追寻艺术的纸上悬疑电影，揭示命运宇宙中奇诡的真相。 ★ 《画的秘密》荣获欧洲第二大漫画节“瑞士谢尔漫画节最佳作品奖”。 作者曾两度夺得安古兰国际漫画节重要奖项。 ★ 《画的秘密》是一部罕见的、结合了拼贴、镜像、3D等叙事手法的实验型漫画作品。作者巧妙地调度光线、纬度、时间、记忆，在一个悬念重重又温情治愈的故事中，注入了一个有关命运的哲学议题。','中文',60.00,'2016-01-01',9,13,1),(50000007,'造彩虹的人','东野圭吾 ','北京十月文艺出版社','9787530216859','其实每个人身上都会发光，但只有纯粹渴求光芒的人才能看到。 从那一刻起，人生会发生奇妙的转折。 ------------------------------------------------------------------------------------------------------ 功一高中退学后无所事事，加入暴走族消极度日；政史备战高考却无法集中精神，几近崩溃；辉美因家庭不和对生活失去勇气，决定自杀。面对糟糕的人生，他们无所适从，直到一天夜里，一道如同彩虹的光闯进视野。 凝视着那道光，原本几乎要耗尽的气力，源源不断地涌了出来。一切又开始充满希望。打起精神来，不能输。到这儿来呀，快来呀——那道光低声呼唤着。 他们追逐着呼唤，到达一座楼顶，看到一个人正用七彩绚烂的光束演奏出奇妙的旋律。 他们没想到，这一晚看到的彩虹，会让自己的人生彻底转...','中文',39.50,'2017-06-01',9,13,1),(50000008,'控方证人','阿加莎·克里斯蒂 ','新星出版社','9787513325745','经典同名话剧六十年常演不衰； 比利•怀尔德执导同名电影，获奥斯卡金像奖六项提名！ 阿加莎对神秘事物的向往大约来自于一种女性祖先的遗传，在足不出户的生活里，生出对世界又好奇又恐惧的幻想。 ——王安忆 伦纳德•沃尔被控谋杀富婆艾米丽以图染指其巨额遗产，他却一再表明自己的无辜。伦纳德的妻子是唯一能够证明他无罪的证人，却以控方证人的身份出庭指证其确实犯有谋杀罪。伦纳德几乎陷入绝境，直到一个神秘女人的出现…… 墙上的犬形图案；召唤死亡的收音机；蓝色瓷罐的秘密；一只疯狂的灰猫……十一篇神秘的怪谈，最可怕的不是“幽灵”，而是你心中的魔鬼。','中文',35.00,'2017-05-01',9,12,1),(50000009,'少有人走的路','M·斯科特·派克 ','吉林文史出版社','9787807023777','这本书处处透露出沟通与理解的意味，它跨越时代限制，帮助我们探索爱的本质，引导我们过上崭新，宁静而丰富的生活；它帮助我们学习爱，也学习独立；它教诲我们成为更称职的、更有理解心的父母。归根到底，它告诉我们怎样找到真正的自我。 正如开篇所言：人生苦难重重。M·斯科特·派克让我们更加清楚：人生是一场艰辛之旅，心智成熟的旅程相当漫长。但是，他没有让我们感到恐惧，相反，他带领我们去经历一系列艰难乃至痛苦的转变，最终达到自我认知的更高境界。','中文',26.00,'2007-01-01',9,12,1),(50000010,'追寻生命的意义','[奥] 维克多·弗兰克 ','新华出版社','9787501162734','《追寻生命的意义》是一个人面对巨大的苦难时，用来拯救自己的内在世界，同时也是一个关于每个人存在的价值和能者多劳们生存的社会所应担负职责的思考。本书对于每一个想要了解我们这个时代的人来说，都是一部必不可少的读物。这是一部令人鼓舞的杰作……他是一个不可思议的人，任何人都可以从他无比痛苦的经历中，获得拯救自己的经验……高度推荐。','中文',12.00,'2003-01-01',9,16,1),(50000011,'秘密花园','乔汉娜·贝斯福 ','北京联合出版公司','9787550252585','欢迎来到秘密花园！ 在这个笔墨编织出的美丽世界中漫步吧 涂上你喜爱的颜色，为花园带来生机和活力 发现隐藏其中的各类小生物，与它们共舞 激活创造力，描绘那些未完成的仙踪秘境 各个年龄段的艺术家和“园丁”都可以来尝试喔！','中文',42.00,'2015-06-01',9,18,1),(50000012,'时间简史','史蒂芬·霍金','湖南科学技术出版社','9787535732309','史蒂芬·霍金的《时间简史》自1988年首版以来的岁月里，已成为全球科学著作的里程碑。它被翻译成40种文字，销售了近1000万册，成为国际出版史上的奇观。《时间简史》（插图本）全面更新了原书的内容，把许多观测揭示的新知识，以及霍金全新的研究纳入《时间简史》（插图本），并配以大量（250幅）照片和电脑制作的三维和四维空间图。霍金曾不无得意地引用评论者的话说道：“我关于物理的著作比麦当娜关于性的书还更畅销。”不知道这个《时间简史》（插图本）版本会使原来已经非常巨大的销售数字“膨胀”多少。','中文',30.00,'2012-01-01',23,1,1),(50000013,'广义相对论','阿尔伯特·爱因斯坦','普鲁士科学院会议报告','不适用','广义相对论是现代物理中基于相对性原理利用几何语言描述的引力理论。该理论由阿尔伯特·爱因斯坦等人自1907年开始发展，最终在1915年基本完成。广义相对论将经典的牛顿万有引力定律与狭义相对论加以推广。在广义相对论中，引力被描述为时空的一种几何属性（曲率），而时空的曲率则通过爱因斯坦场方程和处于其中的物质及辐射的能量与动量联系在一起。从广义相对论得到的部分预言和经典物理中的对应预言非常不同，尤其是有关时间流易、空间几何、自由落体的运动以及光的传播等问题，例如引力场内的时间膨胀、光的引力红移和引力时间延迟效应。广义相对论的预言至今为止已经通过了所有观测和实验的验证——广义相对论虽然并非当今描述引力的唯一理论，但却是能够与实验数据相符合的最简洁的理论。不过仍然有一些问题至今未能解决。最为基础的即是广义相对论和量子物理的定律应如何统一以形成完备并且自洽的量子引力理论。','英文',20.75,'1915-12-31',23,1,1),(50000014,'狭义相对论','阿尔伯特·爱因斯坦 / 亨德里克·洛伦兹 / 亨利·庞加莱','物理年鉴','不适用','狭义相对论（英语：Special relativity）是由爱因斯坦、洛仑兹和庞加莱等人创立的，应用在惯性参考系下的时空理论，是对牛顿时空观的拓展和修正。爱因斯坦在1905年完成的《论动体的电动力学》论文中提出了狭义相对论。爱因斯坦意识到伽利略变换实际上是牛顿经典时空观的体现，如果承认“真空光速独立于参考系”这一实验事实为基本原理，可以建立起一种新的时空观（相对论时空观）。在这一时空观下，由相对性原理即可导出洛伦兹变换。1905年，爱因斯坦发表论文《论动体的电动力学》，建立狭义相对论，成功描述了在亚光速领域宏观物体的运动。','德语',20.75,'1905-12-31',23,1,1);
/*!40000 ALTER TABLE `book_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_info`
--

DROP TABLE IF EXISTS `class_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_info` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(45) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_info`
--

LOCK TABLES `class_info` WRITE;
/*!40000 ALTER TABLE `class_info` DISABLE KEYS */;
INSERT INTO `class_info` VALUES (1,'马克思主义'),(2,'哲学'),(3,'社会科学总论'),(4,'政治法律'),(5,'军事'),(6,'经济'),(7,'文化'),(8,'语言'),(9,'文学'),(10,'艺术'),(11,'历史地理'),(12,'自然科学总论'),(13,' 数理科学和化学'),(14,'天文学、地球科学'),(15,'生物科学'),(16,'医药、卫生'),(17,'农业科学'),(18,'工业技术'),(19,'交通运输'),(20,'航空、航天'),(21,'环境科学'),(22,'综合'),(23,'理论物理学');
/*!40000 ALTER TABLE `class_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `reader_id` int(11) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `read_status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1501014101,'这是一个测试反馈','1'),(1501014102,'Make Library Great Again!!!','1'),(1501014101,'最终测试','1'),(1501014101,'我借书不还，我犯了什么罪？','1');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lend_list`
--

DROP TABLE IF EXISTS `lend_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lend_list` (
  `sernum` bigint(20) NOT NULL AUTO_INCREMENT,
  `book_id` bigint(20) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `lend_date` date DEFAULT NULL,
  `back_date` date DEFAULT NULL,
  PRIMARY KEY (`sernum`)
) ENGINE=InnoDB AUTO_INCREMENT=2015040164 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lend_list`
--

LOCK TABLES `lend_list` WRITE;
/*!40000 ALTER TABLE `lend_list` DISABLE KEYS */;
INSERT INTO `lend_list` VALUES (2015040145,10000001,1501014101,'2017-09-02','2017-09-02'),(2015040146,50000014,1501014101,'2022-05-21','2022-05-24'),(2015040147,50000007,1501014101,'2022-05-22','2022-05-22'),(2015040148,10000010,1501014103,'2022-05-22','2022-05-24'),(2015040149,50000011,1501014102,'2022-05-22','2022-05-22'),(2015040150,50000005,1501014104,'2022-05-22','2022-05-22'),(2015040151,50000010,1501014107,'2022-05-22','2022-05-22'),(2015040152,50000013,1501014101,'2022-05-22','2022-05-24'),(2015040153,50000008,1501014101,'2022-05-22','2022-05-22'),(2015040156,50000012,1501014101,'2022-05-24','2022-05-24'),(2015040160,10000007,1501014101,'2022-05-24','2022-05-24'),(2015040163,50000014,1501014101,'2022-05-24','2022-05-24');
/*!40000 ALTER TABLE `lend_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reader_card`
--

DROP TABLE IF EXISTS `reader_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reader_card` (
  `reader_id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `passwd` varchar(15) NOT NULL DEFAULT '111111',
  `card_state` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`reader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reader_card`
--

LOCK TABLES `reader_card` WRITE;
/*!40000 ALTER TABLE `reader_card` DISABLE KEYS */;
INSERT INTO `reader_card` VALUES (1501014101,'张三','111111',1),(1501014102,'唐纳德·特朗普','111111',1),(1501014103,'弗拉基米尔·普京','111111',1),(1501014104,'乔·拜登','111111',1),(1501014105,'鲍里斯·约翰逊','111111',1),(1501014106,'爱新觉罗·玄烨','111111',1),(1501014107,'伊丽莎白二世','111111',1);
/*!40000 ALTER TABLE `reader_card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reader_info`
--

DROP TABLE IF EXISTS `reader_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reader_info` (
  `reader_id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `telcode` varchar(11) NOT NULL,
  PRIMARY KEY (`reader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reader_info`
--

LOCK TABLES `reader_info` WRITE;
/*!40000 ALTER TABLE `reader_info` DISABLE KEYS */;
INSERT INTO `reader_info` VALUES (1501014101,'张三','男','2002-07-01','中国政法大学','12345678901'),(1501014102,'唐纳德·特朗普','男','1946-06-14','佛罗里达州海湖庄园','12345678909'),(1501014103,'弗拉基米尔·普京','男','1952-10-07','莫斯科克里姆林宫','12345678908'),(1501014104,'乔·拜登','男','1942-11-20','华盛顿哥伦比亚特区白宫','12345678907'),(1501014105,'鲍里斯·约翰逊','男','1964-06-19','伦敦唐宁街10号首相官邸','15123659875'),(1501014106,'爱新觉罗·玄烨','男','1654-05-04','北京市东城区紫禁城','15369874123'),(1501014107,'伊丽莎白二世','女','1926-04-21','伦敦白金汉宫','12376834012');
/*!40000 ALTER TABLE `reader_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `today`
--

DROP TABLE IF EXISTS `today`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `today` (
  `type` char(1) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `today`
--

LOCK TABLES `today` WRITE;
/*!40000 ALTER TABLE `today` DISABLE KEYS */;
INSERT INTO `today` VALUES ('1','https://img10.360buyimg.com/n1/jfs/t1/214990/23/2109/129887/617a36ecEd96f9857/2762b81edd8f615d.jpg','★时间从来不语，却回答了所有问题；岁月从来不言，却见证了所有真心。<br>时间拉开了距离，也证明了一切。生活就是平平淡淡、又起起伏伏。顺境时一往无前，坎坷时柳暗花明，重要的是你对待时间的态度，你以什么样的态度对待时间，时间就会给你什么样的回应。<br>★活得通透，过得舒心，顺逆总平常，得失在人心。看淡得失，自在而为。纵观季老的一生，沟坎起伏不断，失意得意交替，内心却一直自在充盈、淡定从容。在季老眼里，人生中最重要的事情无非是方向明确，脚步坚定，只有知道自己真正想要的是什么，才能坦然接受人生的不完美。','季羡林-时间从来不语'),('2','https://www.gov.cn/xinwen/2019-04/21/5384933/images/eeea01c568f74e8396234a24496994c0.JPG','    古人曰：“书中自有黄金屋，书中自有颜如玉，书中自有千钟粟。” 为了让书友手中的经典书籍“复活”，我们图书馆将开展 “读好书，广读书”活动，书友之间以书换书，互相推荐好书、彼此讨论读书心得，不仅让自己的好书找到新的归宿，同时也从其它好书中学到新知识，扩大了视野，更重要是借交换图书之机，加深书友之间的情意，可谓一举多得！<br>    本次活动，旨在强化学习氛围，促进大家提高素养，养成阅读和学习的良好习惯。我们将改造了图书阅览室，整理图书架，让每位书友拿出家中经典存书，存放于图书馆，由管理员统一登记入册后，向全体学生开放借阅，实现“好书大家读”的图书漂流目标。我们还对阅览室的书籍进行了充实，新增添了《学习强人与头脑强人》等10余种书籍和杂志。','世界读书日-图书交换阅读');
/*!40000 ALTER TABLE `today` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-12 20:47:47
