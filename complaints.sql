

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `combox` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `complaint` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `combox` (`ID`, `Title`, `complaint`) VALUES
();



ALTER TABLE `combox`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `combox`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

