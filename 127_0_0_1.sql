-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 04:46 PM
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
-- Database: `auth`
--
CREATE DATABASE IF NOT EXISTS `auth` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `auth`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bno` int(11) NOT NULL,
  `pno` int(11) NOT NULL,
  `name` text NOT NULL,
  `mob` text NOT NULL,
  `email` text NOT NULL,
  `uid` text NOT NULL,
  `address` text NOT NULL,
  `pax` int(11) NOT NULL DEFAULT 1,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bno`, `pno`, `name`, `mob`, `email`, `uid`, `address`, `pax`, `time`, `status`) VALUES
(1, 52, 'suyash', '8960666100', 'suyashrastogi312@gmail.com', '392135104955', '3/1699, sector-3, jankipuram extension, lucknow-226031', 1, '2023-08-17 19:18:35', 'CANCELLED'),
(2, 52, 'suyash', '8960666100', 'suyashrastogi312@gmail.com', '392135104955', '3/1699, sector-3, jankipuram extension, lucknow-226031', 1, '2023-08-17 19:19:32', 'PENDING'),
(3, 52, 'suyash', '8960666100', 'suyashrastogi312@gmail.com', '392135104955', '3/1699, sector-3, jankipuram extension, lucknow-226031', 1, '2023-08-17 19:19:49', 'CONFIRMED'),
(4, 52, 'asd', 'asd', 'asd@sd.vom', 'asd', 'asd', 1, '2023-08-17 19:23:26', 'CANCELLED'),
(5, 52, 'sd', 'asd', 'asd@gf.com', 'asd', 'asd', 1, '2023-08-17 19:24:30', 'CANCELLED'),
(6, 56, 'AJAI', '8569523654', 'XYN@K.COM', '41259932', 'INDIA', 3, '2023-08-18 08:55:28', 'CONFIRMED'),
(7, 56, 'KUSHAGRA RASTOGI', '9450384044', 'KUSHAGRA@GMAIL.COM', '392135104955', 'LKO', 3, '2023-08-19 13:58:25', 'CONFIRMED');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cno` int(11) NOT NULL,
  `cname` text NOT NULL,
  `csdesc` text NOT NULL,
  `cdesc` text NOT NULL,
  `img_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cno`, `cname`, `csdesc`, `cdesc`, `img_src`) VALUES
(35, 'BEACHES AND COASTS', 'Experience coastal magic on our tours. Relax on stunning beaches, enjoy crystal-clear waters, and explore charming coastal towns. Unforgettable moments await you along the shore.', 'The Allure of the Beach\r\nThe beach, a place of relaxation, invigoration, and inspiration, has been a magnet for humans throughout history. It’s a natural arena where the elements of earth, water, and air converge, creating an environment that’s simultaneously soothing and stimulating.\r\n\r\nGeographical Significance\r\nFrom a geographical perspective, beaches are much more than just beautiful landscapes. They are dynamic systems shaped by the intricate interplay of geological, biological, and climatic factors. The constant ebb and flow of tides, the sedimentary processes, and the impact of weather patterns all contribute to the ever-changing profile of a beach. It’s a living testament to the power and persistence of nature.\r\n\r\nEcological Importance\r\nEcologically, beaches host a diverse array of flora and fauna, serving as crucial habitats for many species. The intertidal zones teem with life, from microscopic plankton to larger marine creatures. Coastal vegetation, such as mangroves and sea oats, help stabilize the sand dunes, playing a vital role in preventing beach erosion. These ecosystems are delicate, often bearing the brunt of human activities and climate change, necessitating concerted conservation efforts.\r\n\r\nSymbolism in Culture and Literature\r\nIn culture and literature, beaches have been potent symbols. They’ve been portrayed as places of solitude, romance, and introspection, offering a canvas for writers and artists to explore the human condition. The beach’s dual nature, both comforting and wild, mirrors our own internal struggles and triumphs.\r\n\r\nBeaches as Socioeconomic Hubs\r\nThe socioeconomic aspect of beaches cannot be overlooked. They are hubs of tourism, driving local economies through a myriad of activities like swimming, surfing, and beachcombing. Beachfront properties are prized real estate, and coastal cities often rank among the world’s most vibrant metropolises. However, this economic boon can come at an environmental cost, necessitating sustainable development practices.\r\n\r\nTherapeutic Value\r\nThe therapeutic value of beaches is widely acknowledged. The rhythmic sound of waves, the warmth of the sun, and the tactile sensation of sand beneath the feet can have a calming effect, reducing stress and promoting mental well-being. The beach also offers a space for physical activities, contributing to overall health.\r\n\r\nThe Future of Beaches\r\nThe future of beaches, however, hangs in the balance. Rising sea levels, pollution, and unchecked development pose significant threats. It’s incumbent upon us to safeguard these natural treasures for future generations. This entails a shift towards responsible tourism, stringent environmental regulations, and public awareness campaigns about the importance of beach conservation.\r\n\r\nIn conclusion, beaches are more than just scenic locales for leisure and recreation. They are dynamic systems, rich ecosystems, cultural symbols, economic powerhouses, and therapeutic havens. As we bask in the beauty and bounty of beaches, we must also strive to protect and preserve them. Their survival is not just a matter of environmental concern, but a testament to our ability as a species to live in harmony with nature.', 'images/category.BEACHES AND COASTS.BEACH.jpg'),
(36, 'MOUNTAINS', 'Embark on awe-inspiring mountain journeys. Majestic peaks, lush valleys, and crisp air await. Hike, ski, or simply admire the breathtaking vistas. Unforgettable mountain adventures await you.', 'Mountains are really very beautiful and refreshing landscape to look at. Speaking in the geographical terms, mountains are highly elevated part of land.\r\n\r\nThey attain greater height as compared to surrounding land. Mountains are one of the most prominent feature of the Earth’s landscape.\r\n\r\nThey symbolize perfection, success, strength and many other positive traits. The highest tip of the mountain is called it’s ‘Peak’.\r\n\r\nAlthough there are other elevated land forms also like, Plateau, Cliff, Hills etc. but the height of mountain is greatest of all. The height of the mountain is calculated on the basis of mean sea level on Earth.  \r\n\r\nAlthough there is no commonly agreed average height, above which an elevation can be considered a mountain. But in general terms, an elevation above 1,000 meters from the mean sea level can be considered as a mountain.  \r\n\r\nWhen there are several mountain in continuation, they form a ‘Mountain Chain’. And when these Mountain Chains run parallel to each other, they are called a ‘Mountain Range’.\r\n\r\nBeing at the great heights, most of the mountains are covered with the thick layer of snow throughout the year. And this scenic & serene natural beauty provides good opportunity of recreation also, to the tourists.  \r\n\r\nMountains generally have a broader base, while their top are narrower. At different altitudes of a mountain, different types floral & faunal species are found. Alpine and Coniferous forests are found at the mountains.  \r\n\r\nMountains add up tremendous beauty to the surrounding landscape, as the great Himalayas does to the north Indian landscape of our country. And the Alps does to the European landscape, etc. ', 'images/category.MOUNTAINS.beautiful-morning-in-mountains-4k-pc.jpg'),
(37, 'PILGRIMAGE', ' Embark on soul-enriching pilgrimages to ancient sacred sites. Connect with spirituality, culture, and history, as you journey towards enlightenment.', 'India is a land of holy cities. Most of the important places of pilgrimage in India are located along the banks of the great rivers like the Ganga, Brahmputra, Godavari and Kaveri. Bathing in these rivers is considered a meritorious act. With the expansion of public transportation in the 20th century, it has become now easier for the people to visit these spots to partake of the divine. In fact, in India pilgrimage is the preferred form of tourism, which may be called religious tourism.\r\n\r\nThe most significant religious place is Varanasi, which is also known as Kashi in south eastern Uttar Pradesh on the north bank of the Ganga, it is sacred to Hindus, Buddhist and Jains. They flock to the ghats or steps, leading from temples down to the banks of the sacred Ganga in their search for an auspicious site for death, cremation or immersion of ashes.\r\n\r\nThen comes Hardwar at the foot of the Garhwal Himalayas, the Ganga flows quietly into this holy city it is a favourite spot for ritual bathing. 24 km. north of Hardwar is Rishikesh. It is here that the sacred river transforms itself from a rushing torrent, ideal for rivers rafting, into a meandering waterway. There are numerous destinations in the Himalayas including Badrinath and Kedarnath.\r\n\r\nIn Southern India, there are rivers like Kaveri, Krishna and Godavari. They all are holy rivers and attract pilgrims to a large number of bathing sites and the coastline features major temples such as the Ramalingesvara Temple in Ramesvaram, Tamil Nadu, where Ram and his army crossed over to Lanka to rescue Sita. Apart from these, there are many small sites for pilgrimage in India near almost all rivers or scenic hilltop.\r\n\r\nADVERTISEMENTS:\r\n\r\nThe pilgrims generally keep fasting and travel on foot in group in the process of getting to their destination. They sing devotional songs throughout the way. On arrival at pilgrimage sites, they often make contacts with priests who instruct them to do their rituals. At the major pilgrimage sites, the families of priests have served as hereditary guides for the pilgrims over many generations.\r\n\r\nThe devotees wait in line to have a elimpse of the deity’s image. This is done to maintain peace around the temples. There are numerous pilgrims who visit different religious fairs e.g. Kumbh mela, Puskar mela etc. Kumbh mela which is held at Allahabad at the interval of every ten years attracts thousands of devotees.\r\n\r\nThe devotees take holy dip into the sacred waters of the rivers which is the confluence of three rivers-Ganga, Yamuna and Saraswati. Outside these religious sites one can see several hawkers and shopkeepers, selling various articles of need. There are amusement parks too in the surrounding area of such religious sites. They make the atmosphere lively and attractive and amuse the pilgrims in diferent ways.', 'images/category.PILGRIMAGE.istockphoto-515855602-612x612.jpg'),
(40, 'ADVENTURE', 'Adventure travel exhilarates the soul, combining exploration and thrill-seeking to unveil nature\'s wonders, cultures, and personal growth through extraordinary experiences. Adventure travel exhilarates the soul, combining exploration and thrill-seeking to unveil nature\'s wonders, cultures, and personal growth through extraordinary experiences.', 'Adventure travel is a thrilling and transformative way to explore the world, pushing boundaries and embracing the unknown. It goes beyond typical tourist experiences, offering a chance to immerse oneself in the heart of nature\'s most awe-inspiring landscapes.\r\n\r\nFrom scaling towering peaks to delving into mysterious caves, adventure travel demands courage, physical endurance, and a taste for the extraordinary. Whether it\'s trekking through dense jungles, kayaking down roaring rivers, or embarking on a safari through rugged terrains, these experiences create lasting memories and a deep connection with the environment.\r\n\r\nAdventure travel also fosters personal growth and self-discovery. Overcoming challenges such as conquering a challenging trail or facing the elements instills confidence and resilience. It encourages stepping out of comfort zones and embracing the raw beauty of the world, forging a stronger sense of self and a new perspective on life.\r\n\r\nMoreover, adventure travel often allows for cultural exchange with local communities, providing insight into their customs, traditions, and way of life. This interaction enriches the journey, fostering a deeper appreciation for global diversity.\r\n\r\nWhile adventure travel promises exhilarating moments, it\'s essential to prioritize safety and responsible tourism. Guided by experienced professionals, adventurers can partake in activities that respect the environment and local cultures.\r\n\r\nIn essence, adventure travel is a transformative pursuit that redefines limits, sparks inner growth, and unveils the extraordinary tapestry of our planet. It\'s an invitation to explore, learn, and create memories that last a lifetime.', 'images/category.ADVENTURE.sports-4k-s7rla0e31pyejixo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `uid` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`uid`, `pw`) VALUES
('', ''),
('suyash', 'suyash'),
('admin', 'admin'),
('kush', 'rastogi'),
('', ''),
('', ''),
('', ''),
('me', 'me'),
('w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `eno` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `mob` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'PENDING',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`eno`, `name`, `mob`, `email`, `msg`, `status`, `time`) VALUES
(11, 'sdf', 'df', 'sdf', 'fsdddf', 'RESOLVED', '2023-08-14 13:19:10'),
(12, 'sdfsdf', 'sdfsdf', 'sfd', 'sdfdfsdf', 'RESOLVED', '2023-08-14 13:26:08'),
(13, 'sdfsdf', 'sdfsdf', 'sfd', 'sdfdfsdf', 'RESOLVED', '2023-08-14 13:27:32'),
(14, 'sdfsdf', 'sdfsdf', 'sfd', 'sdfdfsdf', 'RESOLVED', '2023-08-14 13:30:55'),
(15, 'suyash', '896066584', 'sslkjdhh@h.aom', 'fljhsdfklhsdkfhgsdkyf', 'RESOLVED', '2023-08-14 13:37:17'),
(16, 'kush', '7896541232', 'lukhsdg@og.com', 'hi...', 'RESOLVED', '2023-08-14 13:41:04'),
(17, 'suyash', '8960666100', 'suyash@gmail.com', 'hello', 'RESOLVED', '2023-08-15 14:58:03'),
(18, 'suyash', '8960666100', 'suyashrastogi312@gmail.com', 'hi...\r\n', 'PENDING', '2023-08-16 18:39:19'),
(19, 'we', 'wqe', 'qwe@d.com', 'qwe', 'PENDING', '2023-08-16 18:42:47'),
(20, 'sdfg', 'sdfg', 'f@d.com', 'suifh', 'PENDING', '2023-08-17 12:03:18'),
(21, 'f@d.com', 'f@d.com', 'f@d.com', 'f@d.com', 'PENDING', '2023-08-17 12:03:27'),
(22, 'f@d.com', 'f@d.com', 'f@d.com', 'f@d.com', 'RESOLVED', '2023-08-17 12:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pno` int(11) NOT NULL,
  `pname` text NOT NULL,
  `psdesc` text NOT NULL,
  `pdesc` text NOT NULL,
  `src` text NOT NULL,
  `dest` text NOT NULL,
  `duration` text NOT NULL,
  `hname` text NOT NULL,
  `hcat` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `spl_price` int(11) NOT NULL,
  `img_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pno`, `pname`, `psdesc`, `pdesc`, `src`, `dest`, `duration`, `hname`, `hcat`, `price`, `spl_price`, `img_src`) VALUES
(45, 'MARVELOUS ANDAMAN', 'Visit to Laxmanpur Beach in Neil Island, Visit to Radhanagar Beach, Visit to Kala Pathar Beach, Comfortable private transfers', 'Witness the delightful weather in Port Blair with mild tropical temperatures. Unwind at the breezy beaches and indulge in thrilling water sports. Experience clear blue skies with pleasantly cool weather in Havelock. Enjoy sightseeing and water sports at the pristine beaches. Witness the delightful weather in Port Blair with mild tropical temperatures. Unwind at the breezy beaches and indulge in thrilling water sports.', 'LUCKNOW', 'PORT BLAIR', '7N/8D', 'BLUE SEA', 5, 70000, 65000, 'images/package.MARVELOUS ANDAMAN.photo-1586053226626-febc8817962f.jpg'),
(52, 'SPLENDOROUS SOUTH INDIA', 'Refresh your spirit at the timeless Kapaleeshwar Temple in Chennai. Take a holy bath at the Kapila Theertam in Tirupati. Feel the divinity at the Shore Temple in Mahabalipuram and offer your prayers to Lord Ganesha at the Manakula Vinayagar Temple in Puducherry.', 'Experience monsoon by the coast as mild rain showers grace Tirupati. Visit the enchanting Kapila Theertham Waterfall and feel refreshed in its holy waters.\r\nExperience the vibrant contrast from Delhi to Chennai with our curated journey.', 'NEW DELHI', 'CHENNAI', '10N/9D', 'GINGER CHENNAI', 3, 45000, 43000, 'images/package.SPLENDOROUS SOUTH INDIA.photo-1582510003544-4d00b7f74220.jpg'),
(54, 'FEEL THE KERALA', 'Experience the wonders of God\'s own country! Learn more about tea-making in Munnar and delve into history at the Hill Palace Museum in . Meet elephants at Periyar National Park and relax on the serene Alappuzha Beach.', 'Nestled in the southwestern part of India, Kerala is a captivating paradise often referred to as \"God\'s Own Country.\" This enchanting destination is renowned for its diverse landscapes that range from serene backwaters and lush tea plantations to pristine beaches and dense forests. The backwaters, a network of tranquil canals and waterways, offer a unique cruising experience. Kerala\'s rich cultural heritage is reflected in its art, dance forms, and festivals. The cuisine is a flavorful fusion of spices and ingredients, while Ayurvedic traditions rejuvenate the body and mind. With its welcoming locals and breathtaking scenery, Kerala promises an unforgettable and rejuvenating journey.', 'LUCKNOW', 'KOCHI', '5N/6D', 'Gokulam Park Hotel And Convention Centre ', 4, 30000, 25000, 'images/package.FEEL THE KERALA.istockphoto-484742610-170667a.jpg'),
(56, 'Glimpses of Gujarat', 'Embark on a captivating journey through Gujarat\'s rich heritage, vibrant culture, and breathtaking landscapes on our curated tour package. Unforgettable experiences await.', 'Discover the treasures of Gujarat with our meticulously crafted tour package. Immerse yourself in the state\'s vibrant culture, explore ancient architectural marvels like the Sun Temple in Modhera, and witness the exquisite craftsmanship of the Patola sarees. Traverse the white sands of the Rann of Kutch during its mesmerizing salt desert festival and relish the delectable local cuisine. Encounter the Asiatic lions at Gir National Park, stroll through the historic streets of Ahmedabad, and bask in the spiritual serenity of Dwarka and Somnath. This comprehensive journey promises an unforgettable fusion of history, culture, nature, and spirituality in one of India\'s most diverse states.', 'KOLKATA', 'GANDHINAGAR', '10N/9D', 'CAPITAL O', 3, 55000, 52000, 'images/package.Glimpses of Gujarat.desktop-wallpaper-gujarat-gujrat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`eno`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `eno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
