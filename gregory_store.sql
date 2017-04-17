-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2017 at 04:29 PM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20




--
--Create database globitekw2
--

DROP DATABASE IF EXISTS `gregory_store`;
CREATE DATABASE `gregory_store`;

USE `globitekw2`;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gregory1_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `varietal` varchar(30) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `pictfile` varchar(100) NOT NULL,
  `fullprice` varchar(100) NOT NULL,
  `col_3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `country`, `region`, `description`, `varietal`, `featured`, `price`, `pictfile`, `fullprice`, `col_3`) VALUES
(1, 'Bisson Cilieglio Rose 2015 ', 'Italy', 'south-west', 'Made from the Ciliegiolo grape, this rose is darker than most of its peers. Flavors and aromas of slightly tart cherries lead into a long, delicious finish. Nice minerality and acidity balance it out. ', 'wine', 1, 9, 'pict1.jpg', '$9.00', ''),
(2, 'Martini Pinot Grigio', 'Italy', 'south', 'A full-bodied, rich white wine, straw-yellow in color, flowery and broad with a bouquet reminding of pears and apples. This Pinot Grigio goes well with mushroom-based dishes,fish and seafood; makes an excellent aperitif', 'wine', 0, 33, 'pict2.jpg', '$33.00', ''),
(3, 'Symphony Vodka ', 'Poland', 'center', 'Distilled from potatoes, this premium vodka is an absolute steal at the price! smooth, clean, and a touch of sweetness, this vodka is gluten-free and a wonderful selection for your holiday gift giving', 'vodka', 0, 96, 'pict3.jpg', '$96.00', ''),
(4, 'Absolut - Citron Vodka ', 'Sweden', 'north', 'Citron''s bouquet sings with fresh, vibrant, lemon zest right from the opening bell; the prototypical citrus-flavored vodka bouquet. Palate entry is so clean and effortless that you just want to consume more immediately; ', 'vodka', 0, 330, 'pict4.jpg', '$330.00', ''),
(5, 'Glenfiddich 26 Year Old ', 'Scotland', 'south ', 'A rare and aged single malt Scotch whisky that has spent 26 long years carefully maturing in American Oak ex-bourbon casks. This expression was created to honor Glenfiddich s line of continuous family ownership ', 'whisky', 1, 75, 'pict5.jpg', '$75.00', ''),
(6, 'Bowmore - 18 year Single Malt ', 'United States', 'middle west', 'Cosseted away in the finest, hand-selected oak casks and allowed to mature at its own sedate pace, this is one of the most remarkable, perfectly balanced malts of its kind. One of our rarest most exceptional bottlings, ', 'whisky', 0, 125, 'pict6.jpg', '$125.00', ''),
(7, 'Bodegas Naia Verdejo 2015', 'Italy', 'center', 'Aromas of lime, must and kiwi, together with the classic plant-like qualities of Verdejo. Beautifully fresh, with a long and dry finish.\r\n', 'wine', 0, 12, 'pict7.jpg', '$12.00', ''),
(8, 'Echeverria Cabernet Sauvignon ', 'Italy', 'south', 'Flowery notes of red fruit, roses and cherry, w/ well-integrated oak and a medium-bodied palate with a silky texture, good acidity and freshness. Great for the price!\r\n', 'wine', 0, 30, 'pict8.jpg', '$30.00', ''),
(9, 'Palacios Remondo La Vendemmia ', 'Poland', 'north', 'Flowery notes of red fruit, roses and cherry, w/ well-integrated oak and a medium-bodied palate with a silky texture, good acidity and freshness. Great for the price!\r\n', 'wine', 0, 70, 'pict9.jpg', '$70.00', ''),
(10, 'Perrier-Jouët - Brut Rose Cham', 'Sweden', 'west', 'Wine Enthusiast 92 points - All raspberries and red currants, this is a delicious, instantly approachable wine. It also has a more complex side, intense acidity, a tight texture followed by a juicy fruit character.\r\n', 'wine', 0, 110, 'pict10.jpg', '$110.00', ''),
(11, 'Santa Margherita Pinot Grigio ', 'USA', 'north', 'This dry white wine has a straw yellow color. Its clean, intense aroma and bone-dry taste (with an appealing flavor of Golden Delicious apples) make Santa\r\n', 'vodka', 1, 45, 'pict11.jpg', '$45.00', ''),
(12, 'Robert Foley The Griffin 2013', 'USA', 'west', 'Aromas suggest ripe and youthfully bright red cherries and raspberries. Even mid palate flavors of vanilla and butterscotch are framed with softly gripping tannins which resolve in a gently gripping finish\r\n', 'wine', 0, 15, 'pict12.jpg', '$15.00', ''),
(13, 'Astica - Malbec 2015', 'USA', 'east', 'The Astica Malbec offers a pure, fruit driven example of Argentina''s signature grape. Medium in body with juicy berry flavors and a finish of soft tannins\r\n', 'wine', 0, 80, 'pict13.jpg', '$80.00', ''),
(14, 'Austerity - Chardonnay 2015', 'Italy', 'south', 'Deep aromas in which fresh fruits dominate with a hint of hazelnut. The palate is full bodied & complex with white peaches and almonds.\r\n', 'wine', 0, 140, 'pict14.jpg', '$140.00', ''),
(15, 'Veuve Clicquot - "Rich" Champa', 'Italy', 'south', 'Wine Enthusiast 92 points - All raspberries and red currants, this is a delicious, instantly approachable wine. It also has a more complex side, intense acidity, a tight texture followed by a juicy fruit character.\r\n', 'wine', 0, 7, 'pict15.jpg', '$7.00', ''),
(16, 'Veuve Clicquot - "Rich" Champa', 'USA', 'central', 'In the history of Champagne, wines that were blended for greater sweetness were customarily described as “rich." Even the 1840s bottles of Veuve Clicquot found recently in the Aland Islands have over\r\n', 'wine', 0, 85, 'pict16.jpg', '$85.00', ''),
(17, 'Beringer - Founders'' Estate Ca', 'Italy', 'north', 'Very tasty black cherry liqueur on the nose and palate, hedged by a cedar brush. Very supple and mouth-filling with terrific vibrancy.\r\n', 'vodka', 1, 37, 'pict17.jpg', '$37.00', ''),
(18, 'Bonterra - Viognier Mendocino ', 'USA', 'north', 'Aromas of peaches and cream, citrus blossom and apricot pour out of the glass. Peaches and cream are a sensory signature of this wine.\r\n', 'wine', 0, 57, 'pict18.jpg', '$57.00', ''),
(19, 'Floc De Gascogne Laubade White', 'Sweden', 'north', 'A blend of fresh grape juice and young Bas Armagnac, this light aperitif is versatile and delicious. A blend of 50% Colombard and 50% Ugni Blanc,\r\n', 'vodka', 0, 80, 'pict19.jpg', '$80.00', ''),
(20, 'Tamworth Distilling - Garden A', 'USA', 'central', 'A blend of fresh grape juice and young Bas Armagnac, this light aperitif is versatile and delicious. A blend of 50% Colombard and 50% Ugni Blanc,\r\n', 'vodka', 0, 45, 'pict20.jpg', '$45.00', ''),
(21, 'Captain Morgan (1L)', 'Poland', 'central', 'A favorite worldwide this is the taste that started it all. Mellow aged and enhanced with special fruit flavors, spices and a delicate hint of vanilla for a unique essence all its own.\r\n', 'vodka', 0, 23, 'pict21.jpg', '$23.00', ''),
(22, 'Khortysta Ice Vodka', 'Poland', 'central', 'Extremely smooth, clean, fresh, and easy to drink, this vodka is making our customers very happy! \r\n', 'vodka', 0, 80, 'pict22.jpg', '$80.00', ''),
(23, 'Art in the Age - Sage', 'Sweden', 'north', 'Thomas Jefferson was a man of many achievements — a Founding Father, a speaker of five languages, third president of the United States and one heck of a horticulturist\r\n', 'vodka', 0, 120, 'pict23.jpg', '$120.00', ''),
(24, 'Boyd & Blair - Potato Vodka', 'Italy', 'south', 'Boyd & Blair Potato Vodka is an incredibly smooth, award winning spirit that has been ranked the top vodka in the world by F. Paul Pacult\r\n', 'vodka', 0, 9, 'pict24.jpg', '$9.00', ''),
(25, 'Casamigos - Blanco Tequila', 'USA', 'central', 'The unique flavor and profile of Casamigos Tequila comes from our extra-slow fermentation process, which takes 80 hours to complete (and is double the industry standard).\r\n', 'vodka', 0, 130, 'pict25.jpg', '$130.00', ''),
(26, 'Earth Mama - Vodka (1L)', 'USA', 'south', 'Earth Mama Vodka is Top Secret. It s a Super Premium handcrafted Vodka made in the USA and is an all NATURAL Blend of Herbs, Botanicals and Essential Oils. Rest assured that there is absolutely NO\r\n', 'vodka', 0, 12, 'pict26.jpg', '$12.00', ''),
(27, 'Amrut - Fusion Single Malt', 'USA', 'south', 'The first nosing passes find gentle scents of light spice and brown sugar; aeration reveals solid aromas of molasses and buttered toast\r\n', 'whisky', 0, 70, 'pict27.jpg', '$70.00', ''),
(28, 'Asbach - Uralt Brandy', 'Italy', 'north', 'A bottle of Asbach Uralt, the German brandy that is a perennial favorite, especially amongst British ex-servicemen. The sibling to the 3 year old original\r\n', 'whisky', 0, 40, 'pict28.jpg', '$40.00', ''),
(29, 'Aultmore - 12 Year Old Single ', 'Sweden', 'west', '12 year old Aultmore single malt Scotch whisky, unveiled in 2014 for the Last Great Malts by Dewar s. A refreshing dram, with plenty of vanilla, honey and citrus, alongside a touch of grassiness.\r\n', 'whisky', 0, 85, 'pict29.jpg', '$80.00', ''),
(30, 'Baker''s - Bourbon', 'USA', 'east', 'Opening nosings detect concentrated, litchi nut, deep-roasted grain scents; aroma turns baked, buttery, oaky and almost brandy-like with aeration.\r\n', 'whisky', 0, 15, 'pict30.jpg', '$15.00', ''),
(31, 'Caribbean Cask 14 Yr Old Singl', 'Poland', 'central', 'Unveiled in 2014, the 15 Year Old Single Barrel Sherry Cask is a wonderful sight from Balvenie—single malt Scotch whisky fully matured in Sherry casks\r\n', 'whisky', 0, 110, 'pict31.jpg', '$110.00', ''),
(32, 'Barrel Hitch Oregon Oak', 'USA', 'south', 'The recipe of this remarkable bourbon dates back to 1796, when Basil Hayden himself was a master distiller. Hayden was born and raised in Maryland\r\n', 'whisky', 1, 55, 'pict32.jpg', '$55.00', ''),
(33, 'Bird Dog 10yr Old Bourbon', 'USA', 'central', 'This is an amazing 10 year old Bourbon that has layers of rich, toasty flavors of spice, orange, vanilla, maple, cherry, and oak. Great value for such a old Bourbon\r\n', 'whisky', 0, 23, 'pict33.jpg', '$23.00', ''),
(34, 'Bodegas Fundador - Gold Reserv', 'Poland', 'north', 'Fundador is the market-leading Spanish grape brandy. Made using Airen and Palomino grapes, Fundador (literally Founder ) was the first brand marketed\r\n', 'whisky', 0, 8, 'pict34.jpg', '$8.00', ''),
(35, 'Bowen''s Whiskey', 'Italy', 'south', 'A 15 year old released in January of 2007 from the legendary Bowmore distillery in Islay. This single malt has enjoyed maturation in Oloroso sherry casks. Sherry notes on the nose with raisins\r\n', 'whisky', 1, 15, 'pict35.jpg', '$15.00', ''),
(36, 'Single Malt Whiskey', 'USA', 'north', 'Besides our unique high-rye mash bill we owe our success to careful mingling of casks at each bottling and the perfect Breckenridge snowmelt water used\r\n', 'whisky', 0, 130, 'pict36.jpg', '$130.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`) VALUES
('Test', 'test@gmail.com'),
('Gregory', 'exam@gmail.com'),
('Greg', 'life@gmail.com'),
('tes333', 'tesr@test,com'),
('frenek', 'franek@contact.com'),
('Me', 'Me@gmail.com'),
('frenek', 'baruch@baruch.com'),
('test3', 'test3.test3.c0m'),
('Troy1', 'Troy1'),
('testingtoday', 'testingtoday@gmail.com'),
('alabacity', 'ghgh55555g@aol.net'),
('manual', '<SCRIPT>alert(''XSS'')</SCR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
