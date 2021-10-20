

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8550800_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_mark`
--

CREATE TABLE `user_mark` (
  `id` int(11) NOT NULL,
  `u_rollno` int(2) NOT NULL,
  `u_class` int(2) NOT NULL,
  `u_hindi1` int(2) NOT NULL,
  `u_english1` int(2) NOT NULL,
  `u_math1` int(2) NOT NULL,
  `u_physics1` int(2) NOT NULL,
  `u_chemestry1` int(2) NOT NULL,
  `u_hindi2` int(2) NOT NULL,
  `u_english2` int(2) NOT NULL,
  `u_math2` int(2) NOT NULL,
  `u_physics2` int(2) NOT NULL,
  `u_chemestry` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_mark`
--
ALTER TABLE `user_mark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_mark`
--
ALTER TABLE `user_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;