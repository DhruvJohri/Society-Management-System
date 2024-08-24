

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `images` (`id`, `image_url`) VALUES
(1, 'IMG-617627ff778ad9.82682524.jpg'),
(2, 'IMG-6176280bb21e86.75353156.jpg'),
(5, 'IMG-62cd7d0a2e28c2.83360011.jpg');


ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;


