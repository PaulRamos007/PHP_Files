-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 12, 2022 at 03:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joker`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`) VALUES
(1, 'Religion', '2022-05-10 22:09:56'),
(2, 'Relationships', '2022-05-10 22:09:56'),
(3, 'Work', '2022-05-10 22:09:56'),
(4, 'School', '2022-05-10 22:09:56'),
(5, 'Misc', '2022-05-10 22:09:56'),
(6, 'Pets', '2022-05-10 22:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `jokes`
--

CREATE TABLE `jokes` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `teaser` varchar(150) NOT NULL,
  `joke_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jokes`
--

INSERT INTO `jokes` (`id`, `title`, `teaser`, `joke_text`, `created_at`, `user_id`, `category_id`) VALUES
(1, 'R.I.P.', 'When I was a young minister, a funeral director asked me to ...', 'When I was a young minister, a funeral director asked me to hold a grave side service for a homeless man with no family or friends. The funeral was to be at a cemetery way out in the country. This was a new cemetery and this man was the first to be laid to rest there.\\r\\n\\r\\nI was not familiar with the area and became lost. Being a typical man, of course, I did not ask for directions. I finally found the cemetery about an hour late. The back hoe was there and the crew was eating their lunch. The hearse was nowhere to be seen.\\r\\n\\r\\nI apologized to the workers for being late. As I looked into the open grave, I saw the vault lid already in place. I told the workers I would not keep them long, but that this was the proper thing to do. The workers, still eating their lunch, gathered around the opening.\\r\\n\\r\\nI was young and enthusiastic and poured out my heart and soul as I preached. The workers joined in with, \"Praise the Lord,\" \"Amen,\" and \"Glory!\" I got so into the service that I preached and preached and preached, from Genesis to The Revelation.\\r\\n\\r\\nWhen the service was over, I said a prayer and walked to my car. As I opened the door, I heard one of the workers say, \"I never saw anything like that before and I\'\'ve been putting in septic systems for twenty years!\r\n', '2022-05-11 02:43:32', 1, 1),
(2, 'Amish Humor', 'Sign behind an Amish carriage:', 'Sign behind an Amish carriage:\\r\\n\\r\\n\" Energy efficient vehicle. Runs on grass and oats.\\r\\n\\r\\nCAUTION: Avoid exhaust!', '2022-05-11 02:43:32', 1, 1),
(3, 'Bedside Manners', 'Susie\'\'s husband had been slipping in and out of a coma for several months...', 'Susie\'\'s husband had been slipping in and out of a coma for several months. Things looked grim, but she was by his bedside every single day. One day as he slipped back into consciousness, he motioned for her to come close to him. She pulled the chair close to the bed and leaned her ear close to be able to hear him.\\r\\n\\r\\n\"You know\" he whispered, his eyes filling with tears, \"you have been with me through all the bad times. When I got fired, you stuck right beside me. When my business went under, there you were. When we lost the house, you were there. When I got shot, you stuck with me. When my health started failing, you were still by my side. And you know what?\"\\r\\n\\r\\n\" What, dear? \" she asked gently, smiling to herself ... , \"I think you\'re bad luck.', '2022-05-11 02:43:32', 1, 2),
(4, 'Doggone Smart', 'A wealthy man decided to go on a safari in Africa. He took his faithful pet dachshund along...', 'A wealthy man decided to go on a safari in Africa. He took his faithful pet dachshund along for company. One day, the dachshund starts chasing butterflies and before long the dachshund discovers that he is lost.\\r\\n\\r\\nSo, wandering about, he notices a leopard heading rapidly in his direction with the obvious intention of having him for lunch. The dachshund thinks, \"OK, I\'\'m in deep trouble now!\" Then he noticed some bones on the ground close by, and immediately settles down to chew on the bones with his back to the approaching cat. Just as the leopard is about to leap, the dachshund exclaims loudly, \"Boy, that was one delicious leopard. I wonder if there are any more around here.\" Hearing this, the leopard halts his attack in mid-stride, as a look of terror comes over him, and slinks away into the trees. \"Whew,\" says the leopard. \"That was close. That dachshund nearly had me.\" Meanwhile, a monkey, who had been watching the whole scene from a nearby tree, figures he can put this knowledge to good use and trade it for protection from the leopard. So, off he goes.\\r\\n\\r\\nBut the dachshund saw him heading after the leopard with great speed, and figured that something must be up.\\r\\n\\r\\nThe monkey soon catches up with the leopard, spills the beans and strikes a deal for himself with the leopard. The leopard is furious at being made a fool of and says, \\\\\"Here monkey, hop on my back and see what\\\\\'\'s going to happen to that conniving canine.\\\\\" Now the dachshund sees the leopard coming with the monkey on his back, and thinks, \\\\\"What am I going to do now?\\\\\" But instead of running, the dog sits down with his back to his attackers, pretending he hasn\'\'t seen them yet ... and, just when they get close enough to hear, the dachshund says..................\\r\\n\\r\\n\\\\\"Where\'\'s that darn monkey? Sent him off half an hour ago to bring me another leopard.\r\n', '2022-05-11 02:43:32', 1, 6),
(5, 'An onion', 'An onion...', 'An onion can make people cry but there has never been a vegetable invented to make them laugh. ~ Will Rogers', '2022-05-11 02:43:32', 1, 5),
(6, 'When I', 'When I...', 'When I come to one of the forks in the road of life, I don’t waste time and energy wishing it was a spoon. ~ Miss Piggy\r\n', '2022-05-11 02:43:32', 1, 5),
(7, 'All reports', 'All reports...', 'All reports are in. Life is now officially unfair.', '2022-05-11 02:43:32', 1, 5),
(8, 'If', 'If...', 'If all is not lost, where is it?', '2022-05-11 02:43:32', 1, 5),
(9, 'The first', 'The first...', 'The first rule of holes: If you are in one, stop digging.', '2022-05-11 02:43:32', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `avatar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `created_at`, `last_login`, `avatar`) VALUES
(1, 'Paul', 'Ramos', 'paulramos', 'paul777', 'paul@gmail.com', '2022-05-11 04:42:40', '2022-05-11 02:43:22', 'lion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jokes`
--
ALTER TABLE `jokes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jokes_ibfk_1` (`user_id`),
  ADD KEY `jokes_ibfk_2` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jokes`
--
ALTER TABLE `jokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jokes`
--
ALTER TABLE `jokes`
  ADD CONSTRAINT `jokes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `jokes_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
