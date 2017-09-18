-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Apr 2017 pada 04.35
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `gambar_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi_berita`, `gambar_berita`, `tanggal_berita`) VALUES
(1, 'Warriors Blow By Boston', 'The Warriors winning streak now stands at a season-best six games after they earned a 104-88 road victory over the Celtics on Friday night. Klay Thompson led all scorers with 28 points, while Kevin Durant stuffed the stat sheet with 23 points, 10 rebounds and seven assists. With the win, Golden State improves to 10-2 on the season and 2-0 on their current four-game road trip.\r\n\r\nThe last four meetings between these two teams had all been decided by five points or less, but when all was said and done, Friday’s game followed a considerably different tune. Golden State took their first lead of the game midway through the opening quarter, and as it turned out, they wouldn’t trail for the rest of the contest. After Marcus Smart evened the score at 12 just under five minutes into the game, the Warriors took their largest lead of the first half with a 9-0 run, capped by Kevin Durant’s only three-pointer of the night. That stretch included three rebounds by Zaza Pachulia, whose total of eight in the frame were the most by any Warriors player in a quarter this season. Isaiah Thomas would bring the drought to an end with his first four points of the game, which Andre Iguodala matched in immediate response.', '1.jpg', '2016-11-19'),
(2, 'Coming This Friday', 'This Thanksgiving, the Warriors are saying thanks by giving you four days of deals, starting at 10 a.m. on Black Friday (November 25). Enjoy no ticket fees* for all games, and get special offers and free shipping on all orders over $75 at the', '4DaysofGivingPre-Promotional_2016_1280x720.jpg', '2016-11-23'),
(3, 'Warriors need to blunt Cavs gr', 'OAKLAND, Calif. -- There’s no denying the Cleveland Cavaliers and LeBron James, at the moment, appear to have a mental edge over the rival Golden State Warriors. Overcoming a 3-1 lead in the NBA Finals to secure Cleveland’s first championship in 52 years and coming back from a 14-point deficit on Christmas Day certainly adds credence to that notion.\r\n\r\nThe Warriors have gone an NBA-record 126 regular-season games without losing a back-to-back, but the Cavaliers claimed a back-to-back-back against them on the grandest stage of all.\r\n\r\nIndeed, Cleveland has defeated Golden State four consecutive times dating to June. In that span, two-time MVP Stephen Curry has averaged more turnovers (4.1) than assists (3.6). And most of his turnovers were of the flashy, high-degree-of-difficulty sort. Against most teams, he can get away with converting the razzle-dazzle highlight play. However, the Cavaliers have the defensive scheme and personnel to disrupt Curry, especially if he&#039;s careless with the ball.\r\n\r\nCleveland often will trap Curry on the pick-and-roll, hoping he tries a circus pass rather than making the routine one out of the double. Frequently enough, he chooses the former, and the results haven’t been favorable for the Warriors.\r\n\r\nIn the aftermath of that Finals series, James again solidified himself as the unequivocal best player in the game. All of a sudden, he’s comfortable taking subtle jabs at his West Coast counterpart, which brings us to that legendary Halloween party he hosted in October.\r\n\r\nThe highly creative decor that made headlines featuring Curry and Klay Thompson tombstone cookies and a skeleton prop with “3-1 lead” inscribed on the bass drum wasn’t James&#039; idea, sources close to the four-time MVP told ESPN. According to sources, James instructed his people to come up with something clever and artistic with a budget of approximately $150,000 for an invite-only gathering consisting of roughly 40 guests. He found out about the Warriors theme upon arrival.\r\n\r\nRegardless of who came up with the Halloween concept, the Warriors didn’t find it funny. That’s why Monday’s game at Oracle Arena on Martin Luther King Jr. Day should mean more to the them from a mental standpoint.\r\n\r\nA mid-January Warriors victory won’t completely rectify what has transpired in the teams&#039; previous four meetings, but it could be something to build upon if these teams are to meet again in June for the third straight year. No teams have ever met in the Finals three consecutive times.\r\n\r\nWill Cleveland give Golden State an opportunity to clear its mental hurdle on Monday? It would be the ultimate mind game if the Cavs were to rest James, Kyrie Irving and Kevin Love.\r\nLeBron James, left, and the Cavaliers have won four in a row since June over Stephen Curry and the Warriors. David Sherman/NBAE via Getty Images\r\n\r\n“The only thing we can do is play,” Warriors coach Steve Kerr said when asked about such a move. “Whoever is out there is out there.”\r\n\r\nLeague sources told ESPN that some within the Cavaliers&#039; organization briefly pondered sitting out the trio, but the desire to improve and gain valuable repetition against one of the NBA&#039;s elite teams trumped that logic.\r\n\r\nIt will be the Warriors&#039; final chance to garner some type of edge on the Cavaliers. Barring a catastrophic turn of events or a game-changing trade, it appears to be a three-team race -- along with the San Antonio Spurs -- toward the NBA Finals.\r\n\r\nAfter that Christmas Day loss in Cleveland, an irate Kerr said that Curry needs to make better decisions with the ball. That was a bit out of the norm. You’ll hear coaches say that about a first- or second-year player but seldom about one of the game’s best.\r\n\r\nThat’s how much Kerr wanted that game. The Warriors coughed it up on 19 occasions.\r\n\r\n“We turned the ball over [too much on Christmas],&quot; Kevin Durant said. &quot;I want to say 10 or 12 points in transition where we could have had layups and we turned it over trying to thread the needle. I think we just need to keep it simple, make correct passes, and we’ll be fine. I thought defensively we were solid that game, but we can’t give teams extra possessions when we turn it over. It’s a big emphasis for us.”\r\n\r\nIt’s not a life-or-death basketball scenario, but Golden State needs a win on Monday more than its opponent does. Right now, it’s just a four-game losing streak. But add a couple of more L&#039;s, and the reality just might be that one team happens to be the superior one.\r\n\r\nWe’ll see on Monday.', 'i1.jpg', '2016-11-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `judul`, `deskripsi`, `gambar`, `tgl`) VALUES
(2, 'Boston Celtics', 'AWAY\r\nFRI NOV 18\r\n5:00 PM', 'boston.png', '0000-00-00'),
(3, 'milwaukee bucks', 'AWAY\r\nSAT NOV 19\r\n5:30 PM', 'mil.png', '0000-00-00'),
(4, 'Indiana Pacers', 'AWAY\r\nMON NOV 21\r\n4:00 PM', 'Indiana_Pacers.svg.png', '0000-00-00'),
(5, 'Los Angeles Lakers', 'HOME\r\nWED NOV 23\r\n7:30 PM', 'lal.png', '0000-00-00'),
(6, 'Los Angeles Lakers', 'AWAY\r\nFRI NOV 25\r\n7:30 PM', 'lal.png', '0000-00-00'),
(7, 'Minnesota Timberwolves', 'HOME\r\nSAT NOV 26\r\n7:30 PM', 'Minnesota_Timberwolves.svg.png', '0000-00-00'),
(8, 'Thunder OKC', 'home\r\nWed Jan 18\r\n7:30 PM', 'oklahoma_city_thunder.png', '2017-01-13'),
(9, 'Houston Rockets', 'away\r\nFri Jan 20\r\n5:00 PM', 'houston_rockets.png', '2017-01-13'),
(10, 'Orlando Magic', 'away\r\nSun Jan 22\r\n9:00 AM', 'orlando_magic.png', '2017-01-13'),
(11, 'Miami Heat', 'away\r\nMon Jan 23\r\n4:30 PM', 'miami-heat-logo-54474.png', '2017-01-13'),
(12, 'Hornets', 'away\r\nWed Jan 25\r\n5:00 PM', 'charlotte_hornets.png', '2017-01-13'),
(13, 'Clippers', 'home\r\nSat Jan 28\r\n5:30 PM', 'la_clippers_logo_detail.png', '2017-01-13'),
(14, 'Portland', 'away\r\nSun Jan 29\r\n6:00 PM', 'portland_trail_blazers.png', '2017-01-13'),
(15, 'Hornets', 'home\r\nWed Feb 1\r\n7:30 PM', 'charlotte_hornets1.png', '2017-01-13'),
(16, 'Clippers', 'away\r\nThu Feb 2\r\n7:30 PM', 'la_clippers_logo_detail1.png', '2017-01-13'),
(17, 'Sacramento Kings', 'away\r\nSat Feb 4\r\n7:30 PM', 'sacramento_kings.png', '2017-01-13'),
(18, 'Chicago Bulls', 'home\r\nWed Feb 8\r\n7:30 PM', 'Chicago_bulls.png', '2017-01-13'),
(19, 'Memphis Grizzlies', 'away\r\nFri Feb 10\r\n5:00 PM', 'memphis_grizzlies.png', '2017-01-13'),
(20, 'Thunder OKC', 'away\r\nSat Feb 11\r\n5:30 PM', 'oklahoma_city_thunder1.png', '2017-01-13'),
(21, 'Denver Nuggets', 'away\r\nMon Feb 13\r\n6:00 PM', 'denver_nuggets.png', '2017-01-13'),
(22, 'Sacramento Kings', 'home\r\nWed Feb 15\r\n7:30 PM', 'sacramento_kings1.png', '2017-01-13'),
(23, 'Clippers', 'home\r\nThu Feb 23\r\n7:30 PM', 'la_clippers_logo_detail2.png', '2017-01-13'),
(24, 'Nets Brooklyn', 'home\r\nSat Feb 25\r\n7:30 PM', 'brooklyn-nets-logo.png', '2017-01-13'),
(25, 'Philadelphia 76ers', 'away\r\nMon Feb 27\r\n4:00 PM', 'philadelphia_76ers-secondary-2016.png', '2017-01-13'),
(26, 'Washington Wizards', 'away\r\nTue Feb 28\r\n4:00 PM', 'washington_wizards.png', '2017-01-13'),
(27, 'Chicago Bulls', 'away\r\nThu Mar 2\r\n5:00 PM', 'Chicago_bulls1.png', '2017-01-13'),
(28, 'Knicks', 'away\r\nSun Mar 5\r\n12:30 PM', 'New_York_Knicks_Logo.png', '2017-01-13'),
(29, 'Atlanta Hawks', 'away\r\nMon Mar 6\r\n4:30 PM', 'atlanta_hawks-logo.png', '2017-01-13'),
(30, 'Boston Celtics', 'home\r\nWed Mar 8\r\n7:30 PM', 'boston1.png', '2017-01-13'),
(31, 'Minnesota Timberwolves', 'away\r\nFri Mar 10\r\n5:00 PM', 'Minnesota_Timberwolves_svg1.png', '2017-01-13'),
(32, 'San Antonio Spurs', 'away\r\nSat Mar 11\r\n5:30 PM', 'san_antonio_spurs2.png', '2017-01-13'),
(33, 'Philadelphia 76ers', 'home\r\nTue Mar 14\r\n7:30 PM', 'philadelphia_76ers-secondary-20161.png', '2017-01-13'),
(34, 'Orlando Magic', 'home\r\nThu Mar 16\r\n7:30 PM', 'orlando_magic1.png', '2017-01-13'),
(35, 'milwaukee bucks', 'home\r\nSat Mar 18\r\n7:30 PM', 'mil1.png', '2017-01-13'),
(36, 'Thunder OKC', 'away\r\nMon Mar 20\r\n5:00 PM', 'oklahoma_city_thunder2.png', '2017-01-13'),
(37, 'Dallas Mavricks', 'away\r\nTue Mar 21\r\n5:30 PM', 'Dallas_Mavericks_logo_svg.png', '2017-01-13'),
(38, 'Sacramento Kings', 'home\r\nFri Mar 24\r\n7:30 PM', 'sacramento_kings2.png', '2017-01-13'),
(39, 'Memphis Grizzlies', 'home\r\nSun Mar 26\r\n5:00 PM', 'memphis_grizzlies1.png', '2017-01-13'),
(40, 'Houston Rockets', 'away\r\nTue Mar 28\r\n5:00 PM', 'houston_rockets2.png', '2017-01-13'),
(41, 'San Antonio Spurs', 'away\r\nWed Mar 29\r\n6:30 PM', 'san_antonio_spurs3.png', '2017-01-13'),
(42, 'Houston Rockets', 'home\r\nFri Mar 31\r\n7:30 PM', 'houston_rockets3.png', '2017-01-13'),
(43, 'Washington Wizards', 'home\r\nSun Apr 2\r\n5:00 PM', 'washington_wizards1.png', '2017-01-13'),
(44, 'Minnesota Timberwolves', 'home\r\nTue Apr 4\r\n7:30 PM', 'Minnesota_Timberwolves_svg2.png', '2017-01-13'),
(45, 'Phoenix suns', 'away\r\nWed Apr 5\r\n7:00 PM', 'Phoenix_Suns_2013_LOGO.png', '2017-01-13'),
(46, 'New Orleans', 'home\r\nSat Apr 8\r\n7:30 PM', 'new_orleans_pelicans.png', '2017-01-13'),
(47, 'Jazz Utah', 'home\r\nMon Apr 10\r\n7:30 PM', 'utah_jazz.png', '2017-01-13'),
(48, 'Los Angels Lakers', 'home\r\nWed Apr 12\r\n7:30 PM', 'lal1.png', '2017-01-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `komen` text NOT NULL,
  `tanggal` date NOT NULL,
  `berita_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_user`, `nama_user`, `komen`, `tanggal`, `berita_id`) VALUES
(9, 2, 'rexy', '', '2016-11-20', 1),
(22, 2, 'rexy', '', '2016-11-20', 1),
(23, 2, 'rexy', 'rexy ganteng', '2016-11-20', 1),
(36, 2, 'rexy', 'hjh', '2016-11-23', 2),
(37, 2, 'rexy', 'tes', '2016-11-23', 2),
(38, 1, 'admin', 'haha', '2016-11-27', 3),
(39, 2, 'rexy', 'hayo', '2017-01-12', 1),
(40, 2, 'rexy', 'sadfdsa', '2017-01-12', 3),
(41, 2, 'rexy', 'RExy ganteng', '2017-01-12', 3),
(42, 2, 'rexy', 'rexy ganteng', '2017-01-12', 3),
(43, 5, 'nab', 'hai', '2017-01-12', 3),
(44, 2, 'rexy', 'aa', '2017-01-17', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `ppg` int(11) NOT NULL,
  `rpg` int(11) NOT NULL,
  `apg` int(11) NOT NULL,
  `spg` int(11) NOT NULL,
  `bpg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `judul`, `deskripsi`, `gambar`, `ppg`, `rpg`, `apg`, `spg`, `bpg`) VALUES
(1, 'Stephent Curry', 'PG\r\nLahir: 14 Maret 1988 (28 tahun), Akron, Ohio, Amerika\r\nTinggi: 6 ft 3&quot;\r\nPasangan: Ayesha Curry (m. 2011)\r\nGaji: 12,11 juta USD (2016)\r\nPenghargaan: Penghargaan NBA untuk Pemain Terbaik, lainnya\r\nSaudara kandung: Seth Curry, Sydel Curry', 'sc111.png', 80, 40, 60, 20, 5),
(2, 'Kevin Durant', 'SF\r\nLahir: 29 September 1988 (28 tahun), Washington, D.C., Amerika\r\nTinggi: 6 ft 9&quot;\r\nGaji: 26,54 juta USD (2017)\r\nTim saat ini: Golden State Warriors (#35 / Small forward)\r\nFilm: Back for the Future\r\nPenghargaan: Penghargaan NBA untuk Pemain Terbaik, lainnya', 'kd2.png', 90, 70, 50, 10, 20),
(3, 'Zaza Pachulia', 'C\r\nLahir: 10 Februari 1984 (32 tahun), Tbilisi, Georgia\r\nTinggi: 6 ft 11&quot;\r\nPasangan: Tina Pachulia (m. 2008)\r\nTim saat ini: Golden State Warriors (#27 / Center)\r\nGaji: 2,898 juta USD (2016)\r\nAnak: Davit Pachulia, Miriam Pachulia, Saba Pachulia', '51111111.jpg', 50, 60, 20, 10, 40),
(6, 'Klay Thompson', 'SG\r\nLahir: 8 Februari 1990 (26 tahun), Los Angeles, California, Amerika\r\nTinggi: 6 ft 7&quot;\r\nGaji: 15,5 juta USD (2016)\r\nTim saat ini: Golden State Warriors (#11 / Shooting guard)\r\nSaudara kandung: Trayce Thompson, Mychel Thompson\r\nOrang tua: Mychal Thompson, Julie Thompson', 'Klay-Thompson-11111.png', 70, 40, 20, 5, 5),
(7, 'Draymond Green', 'PF\r\nLahir: 4 Maret 1990 (26 tahun), Saginaw, Michigan, Amerika\r\nTinggi: 6 ft 7&quot;\r\nGaji: 15,33 juta USD (2016)\r\nTim saat ini: Golden State Warriors (#23 / Power forward)\r\nAnak: Kyla Green, Draymond Jamal Green\r\nPenghargaan: All-NBA Team, lainnya', '4122.jpg', 50, 80, 70, 20, 10),
(8, 'Ian Clark', 'SG\r\nLahir: 7 Maret 1991 (25 tahun), Memphis, Tennessee, Amerika\r\nTinggi: 6 ft 3&quot;\r\nTim saat ini: Golden State Warriors (#21 / Shooting guard)\r\nGaji: 1,016 juta USD (2016)\r\nSaudara kandung: Chris Clark\r\nOrang tua: Jon Clark, Shelbia Clark', 'usa-today-8923183_01.jpg', 50, 10, 10, 5, 5),
(9, 'Andre Iguodala', 'SF\r\nLahir: 28 Januari 1984 (32 tahun), Springfield, Illinois, Amerika\r\nTinggi: 6 ft 6&quot;\r\nPasangan: Christina Gutierrez (m. 2015)\r\nGaji: 11,13 juta USD (2016)\r\nAnak: Andre Tyler Iguodala II, London Iguodala\r\nTim saat ini: Golden State Warriors (#9 / Shooting guard, Small forward), Tim nasional bola basket Amerika Serikat', 'usatsi_75317821.jpg', 50, 40, 30, 10, 5),
(10, 'JaVale McGee', 'C\r\nLahir: 19 Januari 1988 (28 tahun), Flint, Michigan, Amerika\r\nTinggi: 7 ft 0&quot;\r\nTim saat ini: Golden State Warriors (#1 / Center)\r\nGaji: 1,404 juta USD (2016)\r\nOrang tua: George Montgomery, Pamela McGee\r\nSaudara kandung: Imani Boyette, Tiffany Montgomery, Dorien Montgomery', 'javale-mcgee1.jpg', 40, 20, 5, 5, 10),
(11, 'Shaun Livingston', 'PG\r\nLahir: 11 September 1985 (31 tahun), Peoria, Illinois, Amerika\r\nTinggi: 6 ft 7&quot;\r\nTim saat ini: Golden State Warriors (#34 / Point guard, Shooting guard)\r\nGaji: 5,305 juta USD (2015)\r\nSaudara kandung: Sarah Aupperle-Livingston, Blair Wyman\r\nOrang tua: Reggie Livingston, Ann Wyman', 'shaunlivingston_760x442.jpg', 50, 20, 20, 15, 10),
(12, 'David West', 'PF\r\nLahir: 29 Agustus 1980 (36 tahun), Teaneck, New Jersey, Amerika\r\nTinggi: 6 ft 9&quot;\r\nPasangan: Lesley West (m. 2003)\r\nTim saat ini: Golden State Warriors (#3 / Power forward)\r\nGaji: 1,552 juta USD (2016)\r\nAnak: Dasia West, David Benjamin West', 'i.png', 30, 30, 20, 10, 5),
(13, 'Kevon Looney', 'PF\r\nLahir: 6 Februari 1996 (20 tahun), Milwaukee, Wisconsin, Amerika\r\nTinggi: 6 ft 9&quot;\r\nTim saat ini: Golden State Warriors (#36 / Power forward)\r\nGaji: 1,132 juta USD (2016)\r\nSaudara kandung: Kevin Looney\r\nOrang tua: Victoria Looney, Doug Looney', 'img_568b60549339b.jpg', 20, 30, 10, 5, 5),
(14, 'Patrick McCaw', 'Lahir: 25 Oktober 1995 (21 tahun), St. Louis, Missouri, Amerika\r\nTinggi: 6 ft 7&quot;\r\nTim saat ini: Golden State Warriors (#0 / Shooting guard, Small forward)\r\nSG\r\nGaji: 543.471 USD (2016)\r\nSaudara kandung: Camille McCaw, Jeffery McCaw, Trinity McCaw, Jayla McCaw, Celeste McCaw\r\nOrang tua: Jeffery McCaw Sr., Teresa McCaw', 'web1_bkn-lakerswarriors-oct16-16jh_008_7188720.jpg', 20, 10, 10, 5, 5),
(15, 'Anderson Varejao', 'PF\r\nLahir: 28 September 1982 (34 tahun), Colatina, Espírito Santo, Brasil\r\nTinggi: 6 ft 10&quot;\r\nPasangan: Marcelle Silva (m. 2013)\r\nGaji: 1,552 juta USD (2016)\r\nTim saat ini: Golden State Warriors (#18 / Power forward, Center)\r\nSaudara kandung: Sara França Varejão, Simone Varejão, Sandro Varejao', 'usa-today-9181194_0.jpg', 15, 20, 10, 5, 5),
(16, 'James Michael McAdoo', 'PF\r\nLahir: 4 Januari 1993 (24 tahun), Norfolk, Virginia, Amerika\r\nTinggi: 6 ft 9&quot;\r\nPasangan: Lauren Elizabeth Adkins (m. 2014)\r\nTim saat ini: Golden State Warriors (#20 / Power forward)\r\nGaji: 980.431 USD (2016)\r\nSaudara kandung: Kelsey McAdoo', 'usa-today-8521827_0.jpg', 10, 10, 5, 5, 5),
(17, 'Damian Jones', 'PF\r\nLahir: 30 Juni 1995 (21 tahun), Baton Rouge, Louisiana, Amerika\r\nTinggi: 7 ft 0&quot;\r\nBerat: 245 lb\r\nTim saat ini: Golden State Warriors (#15 / Power forward, Center)\r\nGaji: 1,172 juta USD (2016)\r\nOrang tua: David Jones, Dana Jones', '588651900.jpg', 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `groups` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `groups`, `nama`, `email`, `username`, `password`) VALUES
(1, 1, 'admin', 'rexyyosua@gmail.com', 'admin', 'admin'),
(2, 2, 'rexy', 'rexyyosua@gmail.com', 'rexy', '1234'),
(3, 2, 'adi', 'adi@gmail.com', 'adi', 'adi'),
(4, 2, 'amel', 'ame@gmail.com', 'amel', 'amel'),
(5, 2, 'nab', 'a@d.c', 'nabileh', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
