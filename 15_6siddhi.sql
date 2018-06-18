DROP TABLE IF EXISTS `about_temple`;

CREATE TABLE `about_temple` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci,
  `edit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `about_temple` */

insert  into `about_temple`(`id`,`description`,`edit_date`) values (1,'<p><strong><img alt=\"\" src=\"jhhhhhhhhhh\" />this is my page</strong></p>\r\n\r\n<p><strong>this is my second text</strong></p>\r\n\r\n<p><strong>This is my third row</strong></p>\r\n\r\n<p><strong>Thsi is my fourth row</strong></p>\r\n','2018-06-12');

/*Table structure for table `about_trustee` */

DROP TABLE IF EXISTS `about_trustee`;

CREATE TABLE `about_trustee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci,
  `edit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `about_trustee` */

insert  into `about_trustee`(`id`,`description`,`edit_date`) values (1,'<p>Prior to 1980, The mandir was managed by a Government appointed trustee. Taking into consideration its growing popularity the Government Of Maharashtra , in October 1980, constituted the Shree Siddhivinayak Ganapati Mandir Nyas (Prabhadevi) Trust and appointed a nine member committee apart from a secretary and treasurer to look after its day-to-day running.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2018-06-13');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `session_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`email`,`password`,`status`,`session_id`) values (1,'akshata','akshatapawar129@gmail.com','675737b908ed6fa14bb6c3d7157f49d6',0,'tu164lhgf9tb11piuro0f35c30');

/*Table structure for table `ashtavinayak` */

DROP TABLE IF EXISTS `ashtavinayak`;

CREATE TABLE `ashtavinayak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ashtavinayak` */

insert  into `ashtavinayak`(`id`,`name`,`description`,`image`,`edit_date`) values (1,'SHRI MAYURESHWAR OF MORGAON','\"MOR\" in Marathi means peacock. The village had a lot of peacocks and the village boundary resembled that of a peacock, and hence the village was named as Moregaon. It is situated on the banks of river Karha. This is 64 Kms. from Pune and state transport bus service is available to reach the place.\r\n\r\nThe present temple structure was built during the Mughal period, though the idol is very ancient. It is facing north. There is a Nandi (the bull of Lord Siva) facing Lord Ganesha. The Nandi is not fully carved.\r\n\r\n \r\n\r\nThe legend says that while this Nandi was being taken for installation in a Siva temple, the cart carrying it broke down in front of the Ganesha temple. Inspite of all efforts, the big Nandi could not be lifted back on to the cart. it was therefore, installed there itself.\r\n\r\nThe idol of Lord Ganesha is in the sitting posture, with the trunk on left side. There are diamonds on eyes, and due to frequent application of vermilion (sindur) over the idol the original carved shape is lost. However after around 100-125 years the thick coating of vermilion comes off and at that time the original idol is visible. The sindur last fell off in the years 1788 and 1882.\r\nThe story about this place goes as under: (Ganesh Purana)\r\n\r\nOnce upon a time there was a city called Gandaki. The king of this place was Chakrapani. He had no children. Following the advice of a sage, he worshipped the Sun deity, and was blessed with immortality by the deity. He conquered all the kings on the earth as well as Indra and Lord Vishnu and then proceeded to Kailash, the abode of Lord Siva. All gods were very unhappy and they prayed to Lord Ganesha. Pleased by their worship, Lord Ganesha incarnated as son of Parvati and fought with Sindhu. In the great battle that took place, Sindhu (Kamalasur) was killed by cutting his body into three pieces. The head of Sindhu fell near Morgaon, and the villagers constructed a temple for Lord Ganesha there. Lord Ganesha fought this battle by riding a peacock, and He was known as Mayureshwar.','1529064707_1.jpg','2018-08-15'),(2,'	SHRI SIDDHIVINAYAK OF SIDDHATEK','The original temple is believed to be built by Vishnu, however it was destroyed over time. Later, a cowherd is believed to have had a vision of the ancient temple and found the icon of Siddhi-vinayaka. The cowherd worshipped the deity and soon others came to know of the shrine','1529065571_5.jpg','2018-06-15'),(3,'SRI BALLALESHWAR OF PALI','Pali is 110 Kms. from Pune and 30 Kms. from Karjat. Buses from Pune are Karjat are available to reach Pali.\r\n\r\nThe temple is situated at one end of the village and is facing east. The idol is about 3 feet high. The special attraction here is a big bell in the temple which is made of \"Panchadhatu\" (alloy of five metals). This big bell was manufactured in Europe and was brought to India and installed in the church of Vasai-Sasti in Konkan.\r\n\r\nOne Chimajee Appa of the Peshva regime defeated the Portugese and brought the bell from the church and fixed it up in the temple.\r\n\r\n\r\nThere is a small temple of Dhundi Vinayaka claimed to be \"Swayambhu\" behind Balleleshwar temple. This Vinayaka is offered the first worship every day, before worship is done in the Ballaleshwar temple.\r\n\r\nThe story about this place goes as under: (Ganesh Purana) \r\n\r\nOnce upon a time there lived a grocer named Kalyan with his wife. They had a son named Ballal. He was very fond of worship of Lord Vinayaka. His sincerity was so transparent that even his friends started following him. This worried the villagers, because they thought that their children would become lazy and not do any useful work for their families. They complained to the grocer. He got wild with anger and went into the forest in search of Ballal to teach him a lesson. Ballal was in deep meditation when his father came. His friends deserted him and ran away. His father, Kalvan broke the idol of Ganesha in front of the meditating Ballal, beat him mercilessly, tied him to a tree and went home. Lord Ganesha took the form of a Brahmin and freed Ballal and heeled all the wounds sustained at the hands of his father. Ballal intuitively recognised the true form of the Brahmin and prostrated to him. Pleased by the devotion, the Lord asked as to what boon he wanted. Ballal requested the Lord to stay there permanently in the forest. The Brahmin thereupon disappeared and there stood in his place a big black rock with the form of Ganesha carved on it.\r\n\r\nThis idol came to be known after the devotee, as Sri Ballaleshwar Vinayaka.','1529065438_6.jpg','2018-06-15'),(4,'SHRI VARAD VINAYAKA OF MAHAD','Mahad is about 1.5 Kms. from off the main road connecting Pune and Khapoli.\r\n\r\nThe temple faces east. It is carved out of stone. Thee is a small pond behind the temple and it is said that the present idol of Lord Vinayaka was recovered from this pond, sometime around 1690. The temple was constructed during the Maratha regime and then renovated during the British period. In 1738, Saint Harihar Gosavihad attained samadhi here, a little to the east side of this temple.\r\n\r\n\r\n\r\nThe story about this place goes as under: (Ganesh Purana)\r\nIn Vidharbha, there was a king named Bhim who was very brave. He had no children for a long time. With the blessings of Lord Vinayaka. He got a son, equally brave and handsome and also a devotee of Lord Ganesha. He was named Rukmangad. Once he went for hunting and was overcome by thirst. He went to the nearby Ashram of Vachakni Rishi. The wife of the Rishi, Mukunda, saw this handsome king and was infatuated by him. The request to fulfill her desire was turned down by the king. Mukunda cursed the king and he became a leper. He then performed Tapas for long years. Narad Muni happened to pass that way. He saw the king and told him to go to Kadamb lake and take a dip. The king did so and he was releived of the leprosy. Lord Indra who came to know about Mukunda\'s desire, disguised himself as Rukmangad, and procreated a son in her, named Grudsamad. The boy grew up to be a very learned, brave and noble person. He was, however, belittled by some rishis on the grounds of his birth. Grudsamad was upset by this and he retired to the forests and performed severe tapas for years on end, standing on one toe and eating only dry leaves. Finally Lord Vinayaka was pleased by his tapas and gave him a boon(Var) due to which he became so reknowned a Rishi, that his name came to be chanted at the start of Ganesg Mantra. Since Lord Vinayaka had given boon(Var) at this place, He was known as Varad Vinayaka, the Lord who bestows boons.','1529065455_3.jpg','2018-06-15'),(5,'SHRI CHINTAMANI OF THEUR','This is one of the most famous Ashtavinayaka temples. It is situated on the banks of River Mula-Mutha which flows through the city of Pune. Theur is only 22 Kms. from Pune and even city buses go to this place. \r\n\r\nThe temple\'s main gate is facing north but the idol of Ganesha is facing east. This is a big temple, originally built by Gosavi Moraya and then renovated during the period of Madhavrao Peshva. Madhavrao was a great devotee of Ganesha and he used to worship at this temple before proceeding for any battle and also after returning from his battles.\r\n\r\n\r\n\r\nChimajee Appa, another warrior and brother of Bajirao Peshva had brought a few church bells from Vasai after defeating the Portugese and one of the bells was installed here. On the Ghats of the river near the temple, Ramabai the queen of Madhavrao Reshva had committed \'SATI\' on the funeral pyre of her husband when the latter died. As such, this temple is of historic importance also. All secret meetings of the Maratha rulers used to take place here during the Peshva period. \r\n\r\nThere are two or three legends about this temple and the name Chintamani given to Lord Ganesha. One of them goes as under.\r\nPrince Gana, the son of king Abhijeet, was a brave warrior but was very short tempered. Once he went to Kapil Rishi where he saw a diamond named Chintamani. It was a magic diamond and the power to bring forth anything that the possessor wanted. Gana wanted this diamond; and when the rishi refused it, he snatched it from him. Kapil Rishi worshipped Vinayaka who was pleased with him and promised to get back the diamond from Gana. Vinayaka destroyed Gana and got back the diamond. By that time Kapil had lost all desire for the diamond. It was not taken by kapil Rishi, but instead he wanted Ganeshji to stay there. Ganeshji took up the name of this diamond and remained there under a Kadamb tree and came to be known as Chintamani Vinayaka. The village was known as Kadamb','1529065466_8.jpg','2018-06-15'),(6,'SHRI GIRIJATMAJ OF LENYADRI','Lenyadri is 5 Kms. off Junner. Junner is 230 Kms. from Mumbai and is connected to Talegaon (88 Kms.) and also to Pune. From Junner one has to trek 5 Kms. to the temple on foot or by bullock cart.\r\n\r\n\'Lenyadri\' means a mountain cave. \"Lena\" - in Marathi means a cave. This temple is Ganesha is cared in a mountain. For going up the mountain there are 283 steps.\r\n\r\nThe temple has a hall of 54 X 51 feet carved into the mountain. It is interestingto note that such a big hall exists without any supporting pillar within it. \r\n\r\n\r\nThe idol of Lord Ganesha does not have a proper carving of its shape and it is told that Lord Ganesha is sitting with his back towards the entrance of the temple, facing the other side of the mountain. Efforts to dig from other side to see the face of the Lord could not succeed so far. There are other idols on the sides, which are being worshipped, but these have been added in the recent past. There are 17 or 18 caves in the mountain, but they are all in total darkness and no one dares to get into them.\r\n\r\nThe legend connected with the temple runs thus: (Ganesh Purana)\r\n\r\nGoddess Parvati (also know as Girija) desired to have Vinayaka as her son. So she did Tapas for 12 years at this place. Vinayaka was pleased and agreed to be her son. Soon he incarnated as Girija\'s son. It is said that Lord Ganesha spent about 15 years in these caves during childhood with Girija. There was a deep forest in this area, and the Asuras used to disturb the yagnas of Rishis. Ganesha destroyed them and rendered te place trouble free. Atmaj means son, and since Lord Ganesha was born to Girija, he came to be known as Girijatmaj.','1529065483_7.jpg','2018-06-15'),(7,'SHRI VIGNESHWAR OF OZAR','Ozar is approachable from Junner by state transport buses. For going to Junner, regular buses from Bombay and Pune are available. The temple here is facing east. This temple was recently renovated during the period 1958-1968.\r\n\r\nThe legend connected with the temple is as follows: (Ganesh Purana) \r\nThere lived a king named Abhinandan at Hemwati. He was very ambitious. He wanted to perform a yagna and conquer the kingdom of Indra, the Lord of heavens.\r\n\r\nWhen Indra came to know of this, he remembered the devil Vighnasur whose \'profession\' was to disturb the vedic rituals. The gods went to Ganesha, who fought Vighnasur and defeated him. The Asura asked for pardon and also requested the Lord to carry his name with that of his. The place where the battle was fought was Ozar, and Lord Ganesha here came to be known as Vighneshwar Vinayaka, the conqueror of Vighnasur.','1529065497_26big.jpg','2018-06-15'),(8,'SHRI MAHAGANAPATI OF RANJANGAON','Ranjangaon is 50 Kms. from Pune and buses are available to reach this place.\r\n\r\nThe temple dates back to 9th century or 10th century. Its sanctum sanctorum was built by the senior Madhavrao Peshwa in 1768. The temple is east-facing. There is a basement below the temple where a small idol of Ganesha is installed, which has 20 hands and 10 trunks. It is said that this is the original idol of the temple.\r\n\r\n\r\n\r\n\r\nThe legend of the temple goes thus: (Ganesha Purana)\r\n\r\nGrudsamad was a devotee of Lord Ganesha. A son was born to him. When he grew up, he wanted to conquer all the three Lokas. He was told by his father to pray to Lord Gajanan for the fulfilment of his wish. After intensive Tapas Lord Gajanan was pleased, and gave him the boon that nobody except Lord Shankara could destroy him. He also gave three Puras of steel, silver and gold to the prince. He became an Asura in his later years known as Tripurasur.\r\n\r\nTripurasur conquered all the three Lokas. He and his two army chiefs started humiliating all gods and human beings. Finally the gods went to Lord Siva and prayed to him for destruction of Tripurasur. Lord Siva worshipped Lord Ganesha and finally killed the devil. The place, where Lord Siva worshipped Lord Ganesha came to be known as Ranjangaon.','1529067450_event_pic1.jpg','2018-06-15');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category` */

insert  into `category`(`id`,`title`,`status`) values (1,'Angarkhi',0),(2,'Sankashti',0),(4,'Other',1),(3,'Vinayaki',0),(5,'Other',0),(6,'Other',1);

/*Table structure for table `disclaimer` */

DROP TABLE IF EXISTS `disclaimer`;

CREATE TABLE `disclaimer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disclaimer` longtext COLLATE utf8_unicode_ci,
  `edit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `disclaimer` */

insert  into `disclaimer`(`id`,`disclaimer`,`edit_date`) values (1,'<p>We,<strong>Shree Siddhi Vinayak Ganapati Temple Trust</strong>, Prabhadevi reconstituted under the ShreeSiddhi Vinayak Ganapati Temple Trust (Prabhadevi) Act 1980, trustees of the temple and all associated with the management and day to day functioning of the Shree Siddhi Siddhi Vinayak Ganapati Temple Trust, state that weare located only at Veer Savarkar Marg/Nardula Tank Road, Prabhadevi, Mumbai-400028 and declare that we have no affiliations or associations elsewhere(in India or abroad) and we the trust and the temple are solely situate at and available to the avid followers, devotees/ Bhaktas, disciples at the aforesaid address only.</p>\r\n\r\n<p>We also add that the trustees/persons associated with the aforesaid Trust have not granted any license, permission authority to any third parties, body/bodies or entity/entities to hold out, portray/project, themselves as being connected with or affiliated to theShree Siddhi Vinayak Ganapati Temple Trust or Shree Siddhi Vinayak Ganapati Temple. All persons, devotees, disciples, followers of Bhagwan/ Dev Shree Siddhi Vinayak Ganapati are hereby informed that if they are contacted and approached by entities or third partiesas belonging to the ShreeSiddhi Vinayak Ganapati Temple Trust, they should first verify the same withthe managing Trusteesof the aforesaid Trust. The Trustees reiterate that the Trust and the Temple are located only at Prabhadeviand nowhere else.</p>\r\n\r\n<p>All the Followers, Devotees, Bhaktas, disciples and other concerned personsare requested to note the aforesaid. The Trustees and/orthe temple will not be responsible in any manner for any loss caused to the members of the public in case of solicitation or invocation to business of any kind by third parties claiming to be affiliated or connected with Shree Siddhi Vinayak Ganapati Temple Trust Prabhadevi, Mumbai, India.</p>\r\n','2018-06-13');

/*Table structure for table `faq` */

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `faq` */

insert  into `faq`(`id`,`question`,`answer`,`status`) values (1,'What does Ganesha Mean in Sanskrit?','GANA in Sanskrit means \'multitude\'and \'ISHA\' means Lord. GANESH therefore literally means \'THE LORD OF ALL BEINGS\'.\r\nGanesha is the first son of Lord Shiva. Shiva represents the supreme Reality. Ganesha symbolise\'s one who has realised the Reality. One who has discovered the godhood in him. Such a man is said to be the lord of all beings. Ganesha is known by other names as well. Ganapati, Gajanana, vinayaka, Vighneshwara. Gajanana means \'elephant-faced\' Gaja-elephant. Ganesha has four arms. The four arms represent the four inner equipment\'s of the subtle body, namely mind, intellect, ego and conditioned-consciousness. In one hand he holds an axe and in another a rope. The axe symbolise\'s the destruction of all desires and attachments and their consequent agitation\'s and sorrows. The rope is meant to pull the seeker out of his worldly entanglements and bind him to the everlasting and enduring bliss of his own Self.',1),(2,'Why is Gajanan called the Lord of intellect, higher knowledge, wisdom and prosperity?','There is a delightful story about a contest between Lord Ganesha and his brother, Kartikeya. Kartikeya was very proud of his mount, the peacock, and his own speed and efficiency. He challenged Lord Ganesha to a race which would involve encircling the world three times. Lord Shiva signaled to indicate that the race had begun. Kartikeya immediatly climbed atop his peacock and left to circle the whole world. Ganpati just smiled. He encircled Lord Shiva and Godess Parvati thrice. When Kartikeya came back to Mount Kailash, he was very surprised to find Ganpati there. Ganpati told him that ones parents are one\'s own world and encircling them means encircling the world. He had thus won the race.',0),(3,'What do you know about Ganesha\'s body structure?','Ganapati is a Lord of intellect and higher knowledge. Each part of Lord Ganesh symbolizes the intellect:- The big ears, nose, small eyes, big belly and head are the signs of a \"MAHAPURUSH.\" The \'Big Head\' symbolizes lots of knowledge. The \'Big Ears\' symbolizes the ability to hear well and that listening makes you a better person. \'Small Eyes\' symbolizes the ability to see the future and the reality instead of the fake outside. \'Big Trunk\' symbolizes the ability to smell good and the bad in the person from far away. The Large belly is meant to convey that a man of perfection can consume and digest whatever experiences he undergoes.',0),(4,'What is the Significance of Right Sided Trunk?','The trunk should be curved to the left for normal idols. If it is curved to the right, it is called siddhi vinakya and needs special worship. One should be very careful in worshipping such idols. \r\nBut why is the trunk curved to right so special and so strict ? The iDa naaDii is on the left side, while the pingalaa naaDii is on the right. The left-turning trunk has easy rules and one can do puja however one wants with respect since the ida naadii is the moon. but the right turning nadi is the sun and will burn one if rules are violated. When the trunk is facing straight forward, then it signifies the sushumna is entirely open. Idols such as these are very rare and special. Even more special is the trunk where the trunk is swung up right in the air. It means the kundalini shakti has reached the sahasra permanently.\r\n',0),(5,'Why Ganesha has stayed single?','Often it is asked why Ganesha, beloved of the gods and of all humanity, remained a Brahmachari, single and celibate (as believed in the south).\r\nA legend states that the reason was that he felt that his mother, Parvati, was a most beautiful and perfect woman in the universe. Bring me a woman as beautiful as she is, and I shall marry her , he said.\r\n\r\nNone could find as equal to the lovely uma. The gods as still searching and so is Ganesha!. \r\nWhy should we use Lord Ganapatiâ€™s statue only in seated, and not in standing position? \r\nWhen we have a guest, we offer him a seat; we do not leave him standing. Similarly, during Ganesh Chaturthi we invoke the Ganesh principle (Ganesh tattva), meaning me invite Lord Ganesh. Hence, we should show hospitality with the faith that Lord Ganesh Himself is visiting us.\r\n\r\nBesides, if we the statue is kept standing for 10 days, there are chances of the weight on the legs of the statue actually breaking the statue. Hence, statues should be made as the traditional ones in the seated position.',0),(6,'Why does Lord Ganesha have a half-broken tusk?','When he came up with the idea to Mahabharatha, Sage Ved Vyasa looked around for someone who would write down the words even as he recited them. He approached Lord Ganesha and asked him if he would do so. Lord Ganesha readily agreed.\r\n\r\nVed Vyasa said \"I will narrate the story and you must take it down as fast as I say it and should not interrupt or stop anywhere in between\" and Lord Ganesha too said that \"I will do so and if you halt or hesitate, I will stop writing and your epic will never be written\". Ved Vyasa agreed with his final condition \"So I agree but you must also agree to fully comprehend the meaning of the poems as you write and not just blindly write them as I say\". \r\nThe elephant headed God gave his consent and they started writing the epic Mahabharata. To write this Lord Ganesha broke a bit off his tusk and used it as a pen. \r\n\r\nAs they continued with the writing, Ved Vyasa found that Ganesha was very fast and he didn\'t even have any time to breathe in air! His face slowly turned blue and he wondered how will he go on without pausing to draw his breath also. Then he came up with the solution and narrated a difficult stanza. Ganesha, who was writing at a furious pace, stopped for a second to get the meaning of the stanza and Ved Vyasa thankfully used the split second gap to gulp deep lungful of air. But Ganesha carried on immediately and they went on. And so, whenever Ved Vyasa needed a break, he would tell a difficult phrase and used the time Ganesha took to comprehend the meaning. Thus the original Mahabharata contains many difficult stanzas placed at intervals throughout the length of the epic.\r\n ',0);

/*Table structure for table `financial_result` */

DROP TABLE IF EXISTS `financial_result`;

CREATE TABLE `financial_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `edit_date` date DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `financial_result` */

insert  into `financial_result`(`id`,`document`,`year`,`status`,`edit_date`,`add_date`) values (1,'1528782803_siddhivinayak_bs_2008-2009.pdf',2009,0,'2018-06-12','2018-06-12'),(2,'1528783010_siddhivinayak bs 2012-2013.pdf',2013,0,'2018-06-12','2018-06-12'),(3,'1528782043_siddhivinayak-bs-2009-2010.pdf',2010,0,NULL,'2018-06-12'),(4,'1528796540_license-pizza-with-tomatoes-next-964617.pdf',2011,0,'2018-06-12','2018-06-12');

/*Table structure for table `ganesha_book` */

DROP TABLE IF EXISTS `ganesha_book`;

CREATE TABLE `ganesha_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bk_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bk_writer` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ganesha_book` */

insert  into `ganesha_book`(`id`,`bk_name`,`bk_writer`,`status`) values (1,'Shree Ganesh Pooja and Aarti Sangraha','Vilas Pawar',0),(2,'Ganesh the Benevolent','Marg Publication',0),(3,'The Indian Express Ganesha 2003','An Indian Express Group',0),(4,'Ganesha The Auspiciousnessâ€¦ The Beginning ','Shakunthala Jagannathan & Nanditha Krishna',0),(5,'Shree Ganesh Kosh ','Amarendra Gadgil',0);

/*Table structure for table `imp_dates` */

DROP TABLE IF EXISTS `imp_dates`;

CREATE TABLE `imp_dates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moon_rise` time DEFAULT NULL,
  `yog` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `imp_dates` */

insert  into `imp_dates`(`id`,`title`,`moon_rise`,`yog`,`date`,`status`) values (1,'Sankashti Chaturthi','00:00:00','','2018-06-13',0),(2,'Sankashti Chaturthi',NULL,NULL,'2018-06-03',1),(3,'Sankashti Chaturthi6',NULL,NULL,'2018-06-06',1),(4,'Sankashti Chaturthi',NULL,NULL,'2018-06-01',1),(5,'Sankashti Chaturthi5',NULL,NULL,'2018-07-05',1),(6,'Sankashti Chaturthi',NULL,NULL,'2018-06-03',1),(7,'Sankashti Chaturthi','00:00:00','','2018-08-03',0),(8,'Vinayaki Chaturthi','00:00:00','','2018-07-13',0),(9,'Sankashti Chaturthi','00:00:00','','2018-08-28',0),(10,'Angarki Chaturthi','21:01:00','','2018-12-25',0),(11,'Angarki Chaturthi','21:40:00','','2018-07-31',0),(12,'Sankashti Chaturthi','00:00:00','','2018-06-29',0),(13,'Sankashti Chaturthi','00:00:00','','2018-06-19',0),(14,'Sankashti Chaturthi','16:00:00','Angarakhi','2018-10-24',0),(15,'Vinayaki Chaturthi','17:00:00','Angarak Yog','2018-06-28',0),(16,'Angarki Chaturthi','21:32:00','','2018-04-03',0);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news_description` text NOT NULL,
  `news_date` date NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `news` */

insert  into `news`(`news_id`,`news_title`,`news_description`,`news_date`,`meta_description`,`image`,`status`) values (1,'Bollywood celebrities at Siddhivinayak temple','Salman Khan, along with Saif Ali Khan, Tabu, Sonali Bendre and Neelam Kothari arrived at the Jodhpur court on Wednesday, ahead of the verdict in the 1998 blackbuck poaching case.','0000-00-00','Salman Khan, along with Saif Ali Khan, Tabu, Sonali Bendre and Neelam Kothari arrived at the Jodhpur court on Wednesdaya','1528441888_farmers-8751.jpg',1),(2,'Nita Ambani with Anant offer Akash\'s engagement card at Siddhivinayak temple','Mukesh Ambani\'s wife Nita Ambani visited Siddhivinayak Temple in Mumbai with younger son Anant Ambani to seek the blessings of the deity and offered the first invitation card for her elder son Akash\'s engagement to Shloka Mehta. All pictures/Yogen Shah\r\n\r\n','2018-06-15','Mukesh Ambani\'s wife Nita Ambani visited Siddhivinayak Temple in Mumbai with younger son Anant Ambani','1528442417_fb_img_1520869901533.jpg',0),(3,'Bollywood celebrities at Siddhivinayak temple','Salman Khan, along with Saif Ali Khan, Tabu, Sonali Bendre and Neelam Kothari arrived at the Jodhpur court on Wednesday, ahead of the verdict in the 1998 blackbuck poaching case.','2015-09-10','Bollywood celebrities at Siddhivinayak temple','1528894625_deepika-padukone.jpg',0),(4,'Temple Festivals at Siddhivinayak temple','Salman Khan, along with Saif Ali Khan, Tabu, Sonali Bendre and Neelam Kothari arrived at the Jodhpur court on Wednesday, ahead of the verdict in the 1998 blackbuck poaching case.','2016-10-18','Temple Festivals at Siddhivinayak temple','1528894713_india_ganeshcharturthi.jpg',0),(5,'History Of Siddhivinayak Temple','Shree Ganesh is the first to be worshipped before beginning any new project or venture as he is the destroyer of obstacles (Vighnaharta). This is Shree Siddhivinayak Ganapati Temple at Prabhadevi in Mumbai..','2018-05-31','History Of Siddhivinayak Temple','1528894797_news3.jpg',0),(6,'What is Lorem Ipsum?','orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2018-06-01','Lorem Ipsum','1528972010_maghi_utsav1.jpg',0),(7,'Why do we use it?','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).','2018-06-22','Why do we use ','1528972077_2.jpg',0);

/*Table structure for table `photo_gallery` */

DROP TABLE IF EXISTS `photo_gallery`;

CREATE TABLE `photo_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alb_id` int(11) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `edit_date` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `photo_gallery` */

insert  into `photo_gallery`(`id`,`image`,`alb_id`,`add_date`,`edit_date`,`status`) values (1,'1528701007_angarakhi2.jpg',1,'2018-06-08','2018-06-11',0),(2,'1528460771_5.jpg',3,'2018-06-08','2018-06-11',1),(3,'1528700970_26big.jpg',1,'2018-06-09','2018-06-11',1),(4,'1528520480_angarakhi1.jpg',2,'2018-06-09','2018-06-11',0),(5,'1528705753_6.jpg',1,'2018-06-09','2018-06-11',1),(6,'1528701028_7.jpg',3,'2018-06-09','2018-06-11',1),(7,'1528705810_28big.jpg',5,'2018-06-11','2018-06-12',0),(8,'1528886971_1.jpg',2,'2018-06-13',NULL,0),(9,'1528887014_5.jpg',1,'2018-06-13',NULL,0),(10,'1528887020_6.jpg',1,'2018-06-13',NULL,0),(11,'1528887065_7.jpg',1,'2018-06-13',NULL,0),(12,'1528887086_8.jpg',2,'2018-06-13',NULL,0),(13,'1528887107_3.jpg',3,'2018-06-13',NULL,0),(14,'1528887117_4.jpg',3,'2018-06-13',NULL,0),(15,'1528887126_2.jpg',5,'2018-06-13',NULL,0);

/*Table structure for table `pooja_details` */

DROP TABLE IF EXISTS `pooja_details`;

CREATE TABLE `pooja_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_of_pooja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reporting_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `frequency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` decimal(10,0) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `persons` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prasad` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pooja_details` */

insert  into `pooja_details`(`id`,`type_of_pooja`,`reporting_time`,`frequency`,`duration`,`amount`,`persons`,`prasad`,`status`) values (1,'Avartan Panchamrut Pooja','8 am','Daily','100','101','Two','2 Ladoos, 1 Coconut, 1 Banana, Vibhuti',0),(2,'Two Avartan Shodashopchar Pooja1','8.00 am1','Daily1','278','148','Two1','2 Ladoos, 1 Coconut, 1 Banana, Vibhuti1',1),(3,'Two Avartan Shodashopchar Pooja','8.00 am','Daily','30','101','Two','2 Ladoos, 1 Coconut, 1 Banana, Vibhuti pkt',0),(4,'Ashtottar Naam Pooja','8.00 am','Daily','30','151','Two','2 Ladoos, 1 Coconut, 1 Banana, Vibhuti pkt',0),(5,'5 Avartan  Shodashopchar Pooja','8.00 am','Daily','35','251','Two','4 Ladoos, 1 Coconut, 1 Banana, Vibhuti pkt',0),(6,'11 Avartan  Shodashopchar Pooja','8.00 am','Daily','45','551','Two-Four','6 Ladoos, 1 Coconut, 1 Banana, Vibhuti pkt',0),(7,'Ashirvachan Pooja','8.00 am to 9.00 pm	','Daily','10','751','Two-Four','1 Photoframe of Lord Siddhivinayak, Ganesh Vastra',0),(8,' Shree Satyanarayan Mahapooja','1.00pm','M,W,T, Not on Chaturthis','120','2001','Two-Four','Sheera (the sweet dish prepared on the auspicious ocassion of Shree Satyanarayan Mahapooja)',0);

/*Table structure for table `reach` */

DROP TABLE IF EXISTS `reach`;

CREATE TABLE `reach` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `route` varchar(255) NOT NULL,
  `buses` int(255) NOT NULL,
  `from_route` varchar(255) NOT NULL,
  `to_route` varchar(255) NOT NULL,
  `trips` int(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `reach` */

insert  into `reach`(`id`,`route`,`buses`,`from_route`,`to_route`,`trips`,`status`) values (1,'',0,'','',0,1),(2,'AS-3',7,'N.S.C.I (WORLI)','CADBURY JUNCTION(THANE)',25,0),(3,'84',10,'HUTATMA CHK','OSHIWARA DEPOT',36,0),(4,'87 Ltd Ext',0,'Mantralaya','BKC TEL.EXCHANGE',2,0);

/*Table structure for table `recent_event` */

DROP TABLE IF EXISTS `recent_event`;

CREATE TABLE `recent_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evnt_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `recent_event` */

insert  into `recent_event`(`id`,`evnt_title`,`event_date`,`event_duration`,`event_address`,`event_description`,`image`,`status`) values (1,'ANGARKI CHATURTHI1','2018-06-14','2','S.K.Bole Marg, Prabhadevi, Mumbai 4000281','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha1','1528789538_7.jpg',1),(2,'ANGARKI CHATURTHI','2018-06-21','3','S.K.Bole Marg, Prabhadevi, Mumbai 400028','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528892698_405.jpg',0),(3,'SANKASHTI CHATURTHI1','2018-06-28','2','S.K.Bole Marg, Prabhadevi, Mumbai 400023','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528182686_2.jpg',0),(4,'VINAYAKI CHATURTHI','2018-07-26','3','S.K.Bole Marg, Prabhadevi, Mumbai 400028','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528183164_8.jpg',1),(5,'VINAYAKI CHATURTHI','2018-06-07','2','S.K.Bole Marg, Prabhadevi, Mumbai 400028','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528884956_28big.jpg',0);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `ser_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ser_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ser_description` longtext COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0',
  `add_date` date DEFAULT NULL,
  `edit_date` date DEFAULT NULL,
  PRIMARY KEY (`ser_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `services` */

insert  into `services`(`ser_id`,`ser_icon`,`ser_title`,`ser_description`,`status`,`add_date`,`edit_date`) values (3,'fa fa-cog faa-spin animated1','Online Pooja Booking1','Online Pooja Booking1\r\n',1,'2018-06-01','2018-06-12'),(2,'fa fa-cog faa-spin animated','Online Pooja Booking','Online Pooja Booking',0,'2018-06-01','2018-06-01'),(4,'fa fa-cog faa-spin animated','Online Pooja Booking','Online Pooja Booking',1,'2018-06-01','2018-06-12'),(5,'fa fa-cog faa-spin animated1','Online Pooja Booking1','Online Pooja Booking1',1,'2018-06-01','2018-06-01'),(6,'fa fa-cog faa-spin animated1','Online Pooja Booking1','Online Pooja Booking1',1,'2018-06-01','2018-06-01'),(7,'fa fa-cog faa-spin animated1','Online Pooja Booking1','Online Pooja Booking1',1,'2018-06-01','2018-06-01'),(8,'fa fa-cog faa-spin animated1','Online Pooja Booking1','Online Pooja Booking1',1,'2018-06-01','2018-06-01'),(9,'fa fa-cog faa-spin animated1','Online Pooja Booking1','Online Pooja Booking1',1,'2018-06-01','2018-06-12'),(10,'fa fa-cog faa-spin animated1','Online Pooja Booking1','Online Pooja Booking1',1,'2018-06-01','2018-06-01'),(11,'fa fa-bell faa-ring animated','Book Archana Pooja','Book Archana Pooja',0,'2018-06-01',NULL),(12,'dev archatn','this i2','sthisfks2',1,'2018-06-01','2018-06-01'),(13,'this ','thsi ','this ',1,'2018-06-01',NULL),(14,'fa fa-desktop faa-flash animated','Online Live Darshan','Online Live Darshan',0,'2018-06-12',NULL),(15,'fa fa-video-camera faa-tada animated','Online Darshan','Online Darshan',0,'2018-06-12',NULL);

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desk_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mob_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `add_date` date DEFAULT NULL,
  `edit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `slider` */

insert  into `slider`(`id`,`desk_img`,`mob_img`,`status`,`add_date`,`edit_date`) values (1,'1528955167_5.jpg','1528955167_mob3.jpg',0,'2018-06-12','2018-06-14'),(2,'1528955090_1.jpg','1528955090_mob1.jpg',1,'2018-06-12','2018-06-14'),(3,'1528955134_1.jpg','1528955134_mob1.jpg',0,'2018-06-14',NULL),(4,'1528955147_2.jpg','1528955147_mob2.jpg',0,'2018-06-14',NULL);

/*Table structure for table `stories` */

DROP TABLE IF EXISTS `stories`;

CREATE TABLE `stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `story` longtext COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `stories` */

insert  into `stories`(`id`,`title`,`image`,`story`,`status`) values (1,'Birth of Lord Ganesha (From Shiva Puraana)','1528963935_41jpg.jpg','<p>In every cycle (kaalpa), the story of the birth of Ganesha is told in different ways. The story of the birth of Ganesha in this cycle, Shveta-varaaha kalpa (Divine Boar Cycle), is narrated thus:</p>\r\n\r\n<p>Jayaa and Vijayaa, two friends of Shakti Parvati, once discussed with Her that She should create a son to head all of the ganas of Shiva.</p>\r\n\r\n<p>Parvati, pleased with the suggestion, resolved to carry it out. The great goddess thought, &quot;There must be a son of my own who will be expert in s his duties.</p>\r\n\r\n<p>He must not disobey my orders.&quot; Thinking thus, goddess Parvati created a person by Her mere will from the dust or dirt of Her own cosmic body. She, being the primordial energy herself, created a boy from the three gunas or triple modes of nature known as sattva (poise), rajas (passion), and lamas (inertia). The boy was spotless and handsome in every limb of His body. He was huge in size and had the brilliance of a thousand suns. He was strong and full of valor.</p>\r\n\r\n<p>Shakti Parvati blessed Him and said, &quot;You are my beloved son. You shall carry out my orders obediently.&quot; Saying thus, Parvati presented Him with ornaments and clothes.</p>\r\n\r\n<p>Ganesha made obeisance to Her and said, &quot;My dear Mother, give me any duty. I shall accomplish whatever you command,&quot; Parvati said, &quot;Ganesha, guard my gates from today onwards. You are my own son. Do not allow anyone into my home without my permission.&quot; Accordingly, She gave Him a hard stick, kissed and placed Him, armed with that staff, as the gatekeeper at the entrance to Her palace.&nbsp;<br />\r\n<br />\r\nNow Parvati began taking Her bath free from worry, At this very moment, Lord Shiva, Her husband, returned to His home and was about to enter the gate, Ganesha stopped Him and said, &quot;without my Mother&#39;s permission, you cannot go in now. She is bathing. Wait until She finishes Her bath so I might obtain Her permission for you.&quot;&nbsp;<br />\r\n<br />\r\nShiva flew into a rage and said, &quot;Who are you, O wicked knave? Don&#39;t you know that I am Shiva, the Lord of the universe? I am the husband of Parvati. This is my abode. Who are you to forbid me to enter?&quot; Speaking thus, Shiva attempted to go inside. Ganesha got angry and struck Him with his hard stick several times. Lord Shiva, furious, stood outside the home and commanded His ganas (attendants) to inquire into the matter. (While following these worldly conversations, we should not forget that the Lord is playing a wonderful sport or leela.) The Shivaganas came and stood to Ganesha. &quot;Listen,&quot; they said, &quot;we are the servants of Shiva. We have come here to inquire about you and throw you out. This is Shiva&#39;s abode. You had better go away from here.&quot;&nbsp;<br />\r\n<br />\r\nGanesha ignored their speech and stood at the gate fearlessly. At the command of Shiva, His ganas, gnashing their teeth and armed with different kinds of weapons, rushed toward him. Nandi the bull caught hold of one leg and began pulling it. Bhringi caught hold of His other leg. But before they could topple Him, Ganesha struck a blow at their hands and got His legs free.&nbsp;<br />\r\n<br />\r\nStanding at the gate, He held a big iron mace and smashed the attendants of Shiva. With crushed foreheads, broken hands, smashed backs, shattered teeth, fractured knees and blasted shoulders, the ganas of Shiva, thousands in number, fled in different directions to protect themselves! Sage Narada, looking on, urged Lord Vishnu, Brahma and Indra to come there at once with all the devatas. Knowing this to be the leela, or the play of Shiva and Shakti, for a specific purpose, all the gods, headed by Brahma, came to attack Ganesha.&nbsp;<br />\r\n<br />\r\nTo assist Her son, Mother Parvati created two great shaktis. One shakti, assuming a fierce form, stood at the gate and opened her mouth as wide as the cavern of a mountain. The other shakti assumed a huge form as a terrible goddess ready to punish Ganesha&#39;s opponents.&nbsp;<br />\r\n<br />\r\nThe weapons hurled by the gods and Shivaganas were swallowed by the goddess with the wide-open mouth. Lord Ganesha won the battle single-handed. Gasping frequently for breath, being utterly shaken by His blows, the devas retreated and gathered around Lord Shiva.&nbsp;<br />\r\n<br />\r\nLord Shiva returned with a desire to fight Ganesha to the death. When Shiva lifted His trident, lord Ganesha.struck His hand with great power. The trident fell and with great anger, Lord Shiva took up His bow, Pinaka. Ganesha felled Shiva&#39;s bow to the ground with His iron club, and struck His five hands also. Shiva took up the trident with the other five hands. The five-faced Shiva with His ten arms could not manage to fight with this boy of great shakri. Securing permission from Lord Shiva, Lord Vishnu created clouds of illusion and split the iron club of Ganesha by means of His discus. Then the son of Parvati took up His staff and struck Vishnu, who dramatizing great pain, fell to the ground. But He got up quickly and resumed the fight. Immediately, Lord Shiva saw His opportunity and cut off Ganesha &#39;s head with His trident.&nbsp;<br />\r\n<br />\r\nSage Narada broke the sad news to Parvati of the death of Her son. Parvati came running to Shiva and cried bitterly. &quot;Oh, what shall I do? Where shall I go? Alas! How can this great misery re dispelled now?&quot;&nbsp;<br />\r\n<br />\r\nLamenting, goddess Parvati became furious and angrily created hundreds of thousands of shaktis out of Her body instantaneously. Speaking with great fury, she cried, &quot;O shaktis, devour forcibly all these devatas, yabhas and other ganas who have assisted Shiva in killing my son!&quot; ,</p>\r\n\r\n<p>At once, the different kinds of shaktis, like Karalis (the terrific), Kubjakas (the hump-backed), Khanjas (the lame), Lambashirshas (the tall-headed) and the other multitudinous powers of goddess Parvati took up the gods with their hands and threw them into their mouths.&nbsp;<br />\r\n<br />\r\nSeeing this, Shiva, Brahma, Vishnu, Indra, the ganas and sages headed by Sage Narada, appealed to goddess Parvati. They bowed to Her again and again and propitiated Her with many hymns. They said this prayer, &quot;O Universal Mother, be pleased. Obeisance to You. You are the primordial shakti, and the source of creation. By Your anger, the three worlds are scorched. Shower Your grace and bless the world with peace.&quot;&nbsp;<br />\r\n<br />\r\nThe Divine Mother was pleased with their prayer and said, &quot;If my son Ganesha regains life, is given first place among the devas and is first to be worshipped, then there will be no more destruction. There will be universal peace. Give him the power that before any action, any endeavor, anywhere, if they remember Ganesha, and offer the prayers to him, their works will be successful, and they will have no trouble or problems.&quot;&nbsp;<br />\r\n<br />\r\nThe gods agreed and intimated to Lord Shiva the wish of Parvati. Lord Shiva said, &quot;It shall be done according to Her wish for the peace of all. Now you devas wash the headless body of Ganesha and I will go in the southern direction. Whatever person or creature I meet first, I shall cut off his head and fit it to this body.&quot;&nbsp;<br />\r\n<br />\r\nLord Shiva rushed with His trident towards the southern direction. The great god knew there was a demon of darkness called Gajasura sleeping in the southern direction who had destroyed many sages and fire sacrifices. He cut off the head of the sleeping elephant demon (gajasura) and carried it back.&nbsp;<br />\r\n<br />\r\nThe devas retrieved the body of Ganesha and after washing it well, took the head of the elephant that Lord Shiva brought and fitted it to the body. After joining it, the gods made obeisance to Shiva. Lord Brahma and Lord Vishnu, on the advice of Lord Shiva, sprinkled holy water upon the body of Ganesha. Immediately, the boy Ganesha woke up as if from a sleep.&nbsp;<br />\r\n<br />\r\nGanesha, with the face of an elephant, the trunk of a human and red complexion, gave joy to everyone. Goddess Parvati was delighted about Her son coming back to life and blessed the world with peace. Brahma, Vishnu and Shiva, the holy Trinity, and all the gods (devatas) crowned Ganesha as the supreme leader of the ganas, the angels, archangels, siddhas, devas, planets, divine and human species.&nbsp;<br />\r\n<br />\r\nGoddess Parvati bestowed on Him all the siddhis (supernatural powers) and blessed Him lovingly. She said, &quot;My dear son, Ganesha, you will receive worship first before all the gods and even before the Trinity. Vermilion will be your color and you will be worshipped with vermilion (sindhwa) by all devotees everywhere. All wishes of human beings shall be fulfilled by worshipping you with the sixteen modes of worship. All obstacles of theirs shall come to an end.&quot;&nbsp;<br />\r\n<br />\r\nThus, Mother Parvati blessed Her son. Then, to show the way of worship of Ganesha, She herself offered worship to Him. By this worship, all obstacles of the devas came to an end. Peace reigned in all the lokas.&nbsp;<br />\r\n<br />\r\nThen Mother Parvati placed Ganesha on her lap. Brahma, Vishnu and Shiva blessed Ganesha and worshipped Him. They jointly declared to the devas, &quot;Ganesha is the remover of all obstacles. He is the giver of all fruits from all rites---vidya (wisdom), riddhi (intelligence), and siddhis (the attainments or fulfillment). He shall be worshipped first and we shall be worshipped next or the fruit of all fire sacrifices and rites will be lost. This is the Truth.&quot;&nbsp;<br />\r\n<br />\r\nSaying thus, Shiva, Vishnu and Brahma worshipped Ganesha respectfully with flowers, rice, sandalwood paste, fruits, food, etc. Thereafter, all the devatas and ganas also worshipped Him with devotion. So it was that the entire kingdom of heaven, the Trinity and their wives and j I all the denizens of heaven, proclaimed Ganesha as the presiding deity over all beings.&nbsp;<br />\r\n<br />\r\nLord Shiva himself conferred very special boons on Lord Ganesha. &quot;O Ganesha, whoever worships you devoutly with songs and acts of service will achieve success in all their endeavors. Their obstacles will be shattered. Your worship vow (vrita) could be observed by and people of all castes and especially by women for the welfare of their family and children. They a lot will all be blessed with prosperity and good fortune.&quot;</p>\r\n\r\n<p>Thus Lord Shiva blessed Ganesha. Celestial musicians sang. Celestial nymphs danced and there were flowers showered upon Ganesha. With the installation of Ganesha as the foremost sun deity to be worshipped, the whole universe attained peace. Brahma, Vishnu and all the gods, after paying homage to Shiva and Parvati returned to their abodes.&nbsp;<br />\r\n<br />\r\nWhoever listens to or reads this story of Ganesha shall have their wishes fulfilled. The sick will be healed, the poor will become rich, the childless will beget children. Those who want enlightenment and peace will obtain the same by the blessings of Lord Ganesha.&nbsp;<br />\r\n<br />\r\nWe are all like the image made by the Mother in this body. We are all given a job and a duty and as per the law, we do it. Then when the ego manifests, Shiva consciousness comes and cuts off our ego and darkness. A demon is sleeping in everyone of us, the demon of darkness and ignorance, and when that head is chopped off, the Light alone is brought and thereby kept so our head is filled with the light.</p>\r\n',0),(2,'Ganesha Chaturthi1','1528981066_3.jpg','<p>this is my text Ganesha Chaturthi is the birthday of Lord Ganesha. It falls on the fourth day of the bright fortnight of the month of Bhadrapada which falls in the months of August-September.</p>\r\n\r\n<p>During one of His birthdays, His mother, Shakti Parvati, cooked for Him twenty-one types of delicious food and a lot of sweet porridge. Ganesha ate so much that even His big belly could bro not contain it. Mounting His little mouse, He embarked on His nightly rounds. His mouse suddenly stumbled upon seeing a huge snake. To adjust His belly, Ganesha put the snake as on as a belt &#39;round His stomach&#39;.</p>\r\n\r\n<p>All of a sudden, He heard from the sky someone laughing at Him. He looked up and saw the moon mocking Him. Ganesha, infuriated, broke off one of His two tusks and hurled it at the moon. The moon hid himself behind the clouds. Immediately Ganesha pronounced a curse on him saying, &quot;Let no one look at your face on my birthday. If anyone, knowingly or unknowingly, looks at you, they will be completely misunderstood in the family circle and neighborhood for no reason whatsoever.&quot;<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The symbology behind the mouse and snake and Ganesha&#39;s big belly and its relationship to the moon on His birthday is highly philosophic. The whole cosmos is like the belly of God. Shakti Parvati is the primordial energy who cooks twenty-one types of dishes, meaning twenty-one expansions: seven lokas above, seven lokas below and seven oceans, all of which are inside the cosmic belly of Ganesha, held together by the cosmic energy kundalini symbolized as a huge snake which Ganesha ties around Him.</p>\r\n\r\n<p>The mouse is nothing but our ego. Ganesha, using the ego as vehicle, represents the fact in every one of us that our great Self or consciousness controls the ego and uses it as a vehicle or instrument in daily efforts. In other words, one who has controlled the ego has Ganesha consciousness or God-consciousness.</p>\r\n\r\n<p>Now the moon on that day, that is, Ganesha&#39;s birthday, is malefic and will not allow the mind of man to concentrate on God. That is why Ganesha punished him with His tusk and made it well known to all people by warning them of the danger of looking at the moon on such an auspicious day as His birth. In other words, it is an astrological fact that on that day, the moon creates bad moods in human beings.</p>\r\n',0),(3,'The Marriage of Lord Ganesha','1529041811_social_activities.jpg','<p>Shiva and Parvati were very happy at the services rendered by their son Ganesha. For the destruction of the demon Taraka Asura, a second son was born to them. His name was Skanda. Because He had six faces, He was known as &quot;Shanmukha.&quot; And as He was born when the &quot;kritloka&quot; stars were auspicious, He was also known as &quot;Kartekeya.&quot; The whole universe adored Him with the name &quot;Subrahmanya,&quot; as He blessed His devotees with the knowledge of Brahman.</p>\r\n\r\n<p>The universal parents, Shiva and Parvati, thought of marriage for their two sons, Ganesha and Subrahmanya, as they had attained youth-the right time for marriage. When their parents revealed the decision for them to marry, the two boys began quarreling.,</p>\r\n\r\n<p>One said, &quot;marry me first!&quot;</p>\r\n\r\n<p>&quot;No,&quot; the other rejoined, &quot;marry me first!&quot;</p>\r\n\r\n<p>To pacify them, Shiva and Parvati devised a plan, called them near, and spoke to them thus, &quot;O good sons, we love both of you equally. To settle your quarrel, we have made a decision. Between the two of you, whoever returns here first after going around the entire Mother Earth shall be married first !&quot;</p>\r\n\r\n<p>On hearing these words, Lord Subrahmanya immediately set off on His peacock with great speed to go around the earth quickly and return earlier than Ganesha. To their wonderment, Lord Ganesha just stood near Lord Shiva and Shakti Parvati without making any preparations to leave. Instead, He requested that His divine parents occupy the two seats He provided and prayed to them to accept His worship service. Shiva and Shakti readily agreed to this and sat on those seats.</p>\r\n\r\n<p>Lord Ganesha worshipped both of them with great devotion, circumambulated seven times and made obeisance to them seven times. As He completed His seventh salutation, Lord Subrahmanya arrived, completing His journey around the entire earth. Now Subrahmanya demanded that His marriage be celebrated first because He had gone around the earth and returned to them first, as per their command. Lord Ganesha never went around the earth at all.</p>\r\n\r\n<p>At this point, Lord Ganesha said, &quot;O Divine Mother, O Universal Father, the Vedas declare that whoever goes around or circumnavigates his parents obtains the fruit of bhu-pradakshina or tones circling around the entire earth. When this blessing is applicable even by going around earthly parents, how much more it should be when the circumnavigation is done to you, O Divine Parents. By going around you seven times, I have gone around not only the earth, but the whole universe! Therefore, celebrate my marriage without any delay.&quot;</p>\r\n\r\n<p>On hearing Ganesha&#39;s intelligent words, Shiva and Parvati were pleased and at once decided to celebrate His marriage first. Prajapati Vishwaroopa&#39;s two beautiful daughters, one called Riddhi and the other called Siddhi, were selected to marry Lord Ganesha. The divine sculptor Vishwakarma made all the arrangements for the marriage by constructing a beautiful marriage hall. Lord Shiva and Parvati celebrated the marriage of Ganesha to Riddhi and Siddhi, who bore Him two beautiful sons named Labha and Kshema respectively.</p>\r\n\r\n<p>Ganesha is an eternal brahmachari (celibate). All the gods are, but they &quot;marry&quot; sometimes so that we people on mundane earth will understand. Thus, Ganesha married two beautiful daughters of Brahma the Creator, and they are called &quot;Riddhi&quot; and &quot;Siddhi.&quot; The illumined mind and attainment. The energies or powers of God are His wives. And out of these two wives, Ganesha had two children. One is called Kshema. Another is called Labha. Labha means profit, gain of the highest wealth. And Kshema means complete protection of that highest wealth.</p>\r\n\r\n<p>Lord Subrahmanya, who silently observed all this, bade farewell to His parents and brother and went to the Krauncha Mountain near Lake Manasa in Kailasa Mountain. (In Skanda Puraana, the story of Subrahmanya is narrated, where it is explained that after the marriage of Ganesha, Subrahmanya also was married to two beautiful wives named Valli and Devasena.)</p>\r\n',0);

/*Table structure for table `temple_activities` */

DROP TABLE IF EXISTS `temple_activities`;

CREATE TABLE `temple_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `temple_activities` */

insert  into `temple_activities`(`id`,`title`,`description`,`image`,`status`) values (1,'Religious Activities1','Celebrating festivals & Utsavs1','1528195133_activities1.jpg',1),(2,'Cultural Activities','Cultural programs during Maghi Ganeshotsav','1528967706_maghi_utsav.jpg',1),(3,'Social Activities','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528967696_libraray.jpg',0),(4,'Social Activities','Educational Activities like Ultramodern Library\r\n\r\n','1528193595_libraray.jpg',1),(5,'Other Activities','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528967686_activities2.jpg',0),(6,'ANGARKI CHATURTHI','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528885297_activities1.jpg',0),(7,'ANGARKI CHATURTHI','Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha Sankashti Chaturthi is an auspicious day dedicated to Ganesha. This day is observed in every lunar month of the Hindu calendar on the fourth day of Krishna Paksha','1528968403_maghi_utsav2.jpg',0);

/*Table structure for table `tenders` */

DROP TABLE IF EXISTS `tenders`;

CREATE TABLE `tenders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tender_title` varchar(255) NOT NULL,
  `tender_type` varchar(255) NOT NULL,
  `tender_refe_no` varchar(255) NOT NULL,
  `issue_date` date NOT NULL,
  `tender_file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tenders` */

insert  into `tenders`(`id`,`tender_title`,`tender_type`,`tender_refe_no`,`issue_date`,`tender_file`,`status`) values (1,'test','test','4454554','2018-06-13','1528446169_cfc1375104047.pdf',0),(2,'Expression of Interest for appointment of honorary Consultant for the Trust	','E-Tender	','2150ET06','2018-06-09','1528960083_medical aid form.pdf',0),(3,'Tender for Supply of Hydraulic Excavators (Including Annual Service Contract)	','Quotation	','5ECT4565','2018-06-15','1528960064_medical aid form.pdf',0),(4,'For for getting financial assistance for medical expenses.	','E-tenders','2150ET06','2018-06-21','1528959433_medical aid form.pdf',0);

/*Table structure for table `trustees` */

DROP TABLE IF EXISTS `trustees`;

CREATE TABLE `trustees` (
  `trustee_id` int(11) NOT NULL AUTO_INCREMENT,
  `trustee_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trustee_work` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trustee_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seniority` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`trustee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `trustees` */

insert  into `trustees`(`trustee_id`,`trustee_name`,`trustee_work`,`trustee_image`,`seniority`,`status`) values (1,'ADESH BANDEKAR','CHAIRMAN','1529040103_adesh_bandekar.jpg',10,0),(2,'SUMANT GHAISAS','TREASURER','1528883805_sumant_ghaisas.jpg',9,0),(3,'SUMANT GHAISAS','TREASURER','1527855346_Sumant_Ghaisas.jpg',9,1),(4,'BHARAT PARIKH','TRUSTEE','1527916821_Bharat_Parikh.jpg',9,1),(5,'BHARAT PARIKH','TRUSTEE','1528884198_bharat_parikh.jpg',9,0),(6,'MAHESH MUDALIYAR','TRUSTEE','1528884817_mudliyar_sir.jpg',9,0),(7,'SANJAY SAWANT','TRUSTEE','1528884911_sanjay_sawant.jpg',8,0),(8,'ANAND RAO','TRUSTEE','1528884840_vajendla_ramananand_rao.jpg',9,0),(9,'GOPAL DALVI','TRUSTEE','1528884850_gopal_dalvi.jpg',9,0),(10,'PANKAJ GORE','TRUSTEE','1528884899_pankaj_gore.jpg',8,0),(11,'VISHKHA RAUT','TRUSTEE','1528884888_vishkha_raut.jpg',8,0),(12,'SUBODH ACHARYA','TRUSTEE','1528884876_subodh_acharya.jpg',8,0),(13,'VAIBHAVI CHAVAN','TRUSTEE','1528884861_vaibhavi_chavan.jpg',8,0);

/*Table structure for table `video_gallery` */

DROP TABLE IF EXISTS `video_gallery`;

CREATE TABLE `video_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `edit_date` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `video_gallery` */

insert  into `video_gallery`(`id`,`link`,`cat_id`,`add_date`,`edit_date`,`status`) values (1,'https://www.youtube.com/embed/T5cMkW8IBsA',3,'2018-06-11','2018-06-11',0),(2,'https://www.youtube.com/embed/NZvptZraimw',2,'2018-06-11','2018-06-11',0),(3,'https://www.youtube.com/embed/cKiWNxoDwQY',5,'2018-06-11',NULL,0),(4,'https://www.youtube.com/embed/NZvptZraimw',1,'2018-06-11',NULL,0);

