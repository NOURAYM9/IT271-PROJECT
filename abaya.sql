
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `abaya`


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) --ENGINE=InnoDB DEFAULT CHARSET=utf8;


--import table from phpmyadmin

INSERT INTO `users` (`id`, `email`, `pass`) VALUES
(1, 'sara@gmail.com', '123456'),
(2, 'saraali@gmail.com', '56577878');


-- Indexes for table `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for dumped tables



-- AUTO_INCREMENT for table `users`

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
