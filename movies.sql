-- Adminer 4.8.0 MySQL 5.5.5-10.5.17-MariaDB-1:10.5.17+maria~ubu2004 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(255) NOT NULL,
  `image_url` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `releasedate` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `movie_trailer_url` text NOT NULL,
  `synopsis` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `movies` (`id`, `movie_name`, `image_url`, `genre`, `language`, `duration`, `releasedate`, `classification`, `movie_trailer_url`, `synopsis`, `price`) VALUES
(3,	'movie test',	'https://m.media-amazon.com/images/M/MV5BMGMzYmZmNjYtMTFmZS00ZGY4LWIwNWUtMzYwNjcyYTI4YTRmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg',	'action',	'english',	'60',	'1/1/2099',	'18',	'www.youtube.com',	'MOVIE Synopsis',	'100'),
(4,	'Athena',	'https://upload.wikimedia.org/wikipedia/en/c/ca/Athena_%282022_film%29.png',	'action',	'English',	'160',	'1/1/2199',	'R18',	'www.youtube.com',	'Directed by Romain Gavras. With Dali Benssalah, Sami Slimane, Anthony Bajon, Ouassini Embarek. Hours after the tragic death of their youngest ...',	'90'),
(5,	'Athena1',	'https://upload.wikimedia.org/wikipedia/en/c/ca/Athena_%282022_film%29.png',	'action',	'English',	'160',	'1/1/2199',	'R18',	'www.youtube.com',	'Directed by Romain Gavras. With Dali Benssalah, Sami Slimane, Anthony Bajon, Ouassini Embarek. Hours after the tragic death of their youngest ...',	'70');

-- 2023-01-09 08:18:22
