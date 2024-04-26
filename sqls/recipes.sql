-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 26, 2024 at 05:16 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodPetEats`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `COL 1` varchar(10) DEFAULT NULL,
  `COL 2` varchar(11) DEFAULT NULL,
  `COL 3` varchar(6) DEFAULT NULL,
  `COL 4` varchar(10) DEFAULT NULL,
  `COL 5` varchar(28) DEFAULT NULL,
  `COL 6` varchar(14) DEFAULT NULL,
  `COL 7` varchar(289) DEFAULT NULL,
  `COL 8` varchar(46) DEFAULT NULL,
  `COL 9` varchar(7) DEFAULT NULL,
  `COL 10` varchar(7) DEFAULT NULL,
  `COL 11` varchar(38) DEFAULT NULL,
  `COL 12` varchar(7) DEFAULT NULL,
  `COL 13` varchar(7) DEFAULT NULL,
  `COL 14` varchar(61) DEFAULT NULL,
  `COL 15` varchar(7) DEFAULT NULL,
  `COL 16` varchar(7) DEFAULT NULL,
  `COL 17` varchar(29) DEFAULT NULL,
  `COL 18` varchar(7) DEFAULT NULL,
  `COL 19` varchar(7) DEFAULT NULL,
  `COL 20` varchar(27) DEFAULT NULL,
  `COL 21` varchar(7) DEFAULT NULL,
  `COL 22` varchar(7) DEFAULT NULL,
  `COL 23` varchar(18) DEFAULT NULL,
  `COL 24` varchar(7) DEFAULT NULL,
  `COL 25` varchar(7) DEFAULT NULL,
  `COL 26` varchar(19) DEFAULT NULL,
  `COL 27` varchar(7) DEFAULT NULL,
  `COL 28` varchar(7) DEFAULT NULL,
  `COL 29` varchar(13) DEFAULT NULL,
  `COL 30` varchar(7) DEFAULT NULL,
  `COL 31` varchar(7) DEFAULT NULL,
  `COL 32` varchar(13) DEFAULT NULL,
  `COL 33` varchar(7) DEFAULT NULL,
  `COL 34` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`, `COL 17`, `COL 18`, `COL 19`, `COL 20`, `COL 21`, `COL 22`, `COL 23`, `COL 24`, `COL 25`, `COL 26`, `COL 27`, `COL 28`, `COL 29`, `COL 30`, `COL 31`, `COL 32`, `COL 33`, `COL 34`) VALUES
('recipeID', 'section', 'vegen ', 'recipeType', 'recipeName', 'image', 'instructions', '01_ingredient', '01_size', '01_unit', '02_ingredient', '02_size', '02_unit', '03_ingredient', '03_size', '03_unit', '04_ingredient', '04_size', '04_unit', '05_ingredient', '05_size', '05_unit', '06_ingredient', '06_size', '06_unit', '07_ingredient', '07_size', '07_unit', '08_ingredient', '08_size', '08_unit', '09_ingredient', '09_size', '09_unit'),
('cat001', 'cat', '', 'meal', 'Rice-N-Chicken', 'cat001.gif', 'Cook chicken and rice separately. Mash cooked peas. Mix all ingredients together and serve in appropriate portions', 'cooked chicken (shredded)', '1', 'cup', 'cooked brown rice', '0.25', 'cup', 'peas (cooked and mashed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat003', 'cat', '', 'meal', 'Sweet Salmon Delight', 'cat002.gif', 'Cook the salmon and sweet potato. Steam the green beans until tender. Mix all the ingredients and serve', 'baked salmon (flaked)', '0.5', 'cup', 'baked sweet potato (mashed)', '0.25', 'cup', 'green beans (steamed and chopped)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat004', 'cat', '', 'meal', 'Stew-O-CaroTuna', 'cat003.gif', 'Drain canned tuna. Steam or boil carrots and peas until tender. Mix all ingredients and serve', 'canned tuna (in water)', '0.5', 'cup', 'carrots (diced)', '0.25', 'cup', 'peas (mashed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat005', 'cat', '', 'meal', 'BB Stir-Fry', '', 'Cook ground beef until browned and drain excess fat. Steam broccoli until tender. Cook brown rice. Combine all ingredients a', 'lean ground beef', '0.5', 'cup', 'broccoli florets', '0.25', 'cup', 'brown rice (cooked)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat006', 'cat', '', 'meal', 'Turkey and Spinach Surprise', '', 'Cook ground turkey in skillet until brown. Steam or sauté spinach until wilted. Cook quinoa. Mix all ingredients and serve', 'ground turkey', '0.5', 'cup', 'spinach (chopped)', '0.25', 'cup', 'quinoa (cooked)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat007', 'cat', '', 'meal', 'Brown Rice and Salmon', '', 'Mix all ingredients and serve', 'baked salmon (flaked)', '0.5', 'cup', 'carrots (cooked, diced)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat008', 'cat', '', 'meal', 'Sweet Tuna Medley', '', 'Mash drained canned tuna. Mash cooked sweet potato. Steam and mash peas. Mix all ingredients and serve', 'tuna (canned in water)', '0.5', 'cup', 'sweet potato (baked, mashed)', '0.5', 'cup', 'peas (cooked and mashed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat009', 'cat', '', 'treat', 'Pumpkin-Chicken Treats', 'cat008.gif', 'Mix shredded chicken with canned pumpkin and oat flour to form a dough. Roll out dough and cut into treat shapes. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'cooked chicken (shredded)', '1', 'cup', 'canned pumpkin (unsweetened)', '0.25', 'cup', 'oat flour', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat010', 'cat', '', 'meal', 'Beef and Vegetable Casserole', '', 'Thoroughly cook ground beef until brown. Steam or boil carrots and green beans until tender. Mix ingredients and serve', 'ground turkey', '0.5', 'cup', 'quinoa (cooked)', '0.25', 'cup', 'peas (cooked and mashed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat011', 'cat', '', 'meal', 'Turkey and Quinoa Dish', '', 'Thoroughly cook ground turkey in a skillet until brown. Add cooked quinoa and peas. Mix and serve', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat012', 'cat', 'T', 'meal', 'Vegan Lentil Stew', '', 'Cook lentils, quinoa, sweet potatoes, and peas separately. Mix all ingredients and serve', 'green or brown lentils (cooked)', '0.5', 'cup', 'quinoa (cooked)', '0.25', 'cup', 'sweet potato (baked, mashed)', '0.25', 'cup', 'peas (cooked, mashed)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat013', 'cat', 'T', 'meal', 'Tofu and Spinach Bowl', 'cat012.gif', 'Combine cooked ingredients and serve', 'firm tofu', '0.5', 'cup', 'brown rice (cooked)', '0.25', 'cup', 'chopped spinach (sautéd or steamed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat014', 'cat', 'T', 'meal', 'Carrot and Chickpea Stew', 'cat013.gif', 'Cook chickpeas, carrots, and quinoa separately. Mix all ingredients and serve', 'chickpeas (cooked)', '0.5', 'cup', 'carrots (cooked and diced)', '0.25', 'cup', 'quinoa (cooked)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat015', '', 'T', 'treat', 'Pumpkin Bites', '', 'Mix pumpkin, oat flour, and quinoa to form a dough. Roll out dough and cut into bite-sized pieces. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'canned pumpkin (unsweetened)', '0.5', 'cup', 'oat flour', '0.25', 'cup', 'quinoa (cooked)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('cat016', '', 'T', 'meal', 'Sweet Potato Jingle', 'cat015.gif', 'Mix all the ingredients and serve', 'baked sweet potato (mashed)', '0.5', 'cup', 'quinoa (cooked)', '0.25', 'cup', 'peas (cooked and mashed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog001', 'dog', '', 'meal', 'Chicken and Rice', 'dog001.gif', 'Cook chicken and rice separately. Steam or boil carrots and peas until tender. Mix all ingredients together. Serve in appropriate portions based on dog size', 'cooked chicken (shredded)', '2', 'cup', 'brown rice (cooked)', '1', 'cup', 'carrots (diced)', '0.5', 'cup', 'peas', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog002', 'dog', '', 'meal', 'Beef and Veggie Stew', '', 'In a large skillet, cook ground beef until browned, and drain excess fat. In separate pot, boil sweet potato, green beans, and carrots until tender. Combine all and allow to cool before serving in appropriate portions', 'lean ground beef', '1', 'lb', 'sweet potato (cubed)', '1', 'potato', 'green beans (chopped)', '1', 'cup', 'carrots (sliced)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog003', 'dog', '', 'treat', 'did someone say treat?', 'dog003.gif', 'Preheat oven to 350°F (175°C). Mix flour and salt in bowl. Add beaten egg and broth to bowl and kneed into dough. Roll out dough on floured surface to about 1/4”. Cut shapes with cookie cutters or upside down glass. Bake for 30 minutes or until firm and brown. Allow to cool before serving', 'whole wheat flower', '2.5', 'cup', 'egg', '1', 'egg', 'beef or chicken broth (low sodium, high quality, or homemade)', '1', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog004', 'dog', '', 'meal', 'Sweet Salmon', 'dog004.gif', 'Cook salmon and sweet potatoes. Combine salmon with mashed sweet potatoes and steamed green beans. Serve in appropriate portions', 'baked salmon (flaked)', '1', 'cup', 'sweet potatoes', '2', 'potato', 'green beans (steamed)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog005', 'dog', '', 'meal', 'Quinoa Turkey Bowl', 'dog005.gif', 'Cook ground turkey thoroughly in a skillet until browned. In a separate pot, cook the quinoa. Steam the peas and carrots until tender. Mix ingredients together and serve in appropriate portions when cool', 'ground turkey', '1', 'lb', 'quinoa', '1', 'cup', 'peas', '0.5', 'cup', 'carrots', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog006', 'dog', '', 'meal', 'Chicken Veggie Stir Fru', 'dog006.gif', 'Cook chicken and set it aside. Stir-fry the broccoli and bell peppers until tender. Combine all ingredients and allow to cool before serving', 'cooked chicken (cubed)', '1', 'cup', 'broccoli florets', '1', 'cup', 'bell peppers', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog007', 'dog', '', 'treat', 'Peanut Butter Pumpkin Pieces', 'dog007.gif', 'Preheat oven to 350°F (175°C). In a bowl, mix flour, eggs, canned pumpkin, and peanut butter until it forms a dough. Roll out dough and cut it into shapes or use a cookie cutter. Bake for about 30 minutes or until firm', 'whole wheat flour', '2.5', 'cup', 'eggs', '2', 'eggs', 'canned pumpkin', '0.5', 'cup', 'peanut butter', '2', 'T', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog008', 'dog', '', 'meal', 'Turkey Spinach Meatballs', '', 'Preheat oven to 350°F (175°C). Mix ground turkey, chopped spinach, and oats. Form mixture into meatballs. Bake 20-25 minutes until cooked through', 'ground turkey', '1', 'lb', 'spinach (chopped)', '0.5', 'cup', 'oats (regular, not steel cut)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog009', 'dog', '', 'meal', 'Tuna Veggie Delight', '', 'Drain the tuna. Steam the peas and carrots. Combine all ingredients and serve', 'canned tuna (in water)', '1', 'can', 'peas', '0.5', 'cup', 'oats (regular/quick)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog010', 'dog', '', 'meal', 'Doggone Good Stew', 'dog010.gif', 'Cook ground beef and brown rice separately. Boil potatoes and peas until tender. Mix all ingredients and serve when cool', 'ground beef', '1', 'lb', 'brown rice (cooked)', '1', 'cup', 'potatoes (cubed)', '2', 'potato', 'peas', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog011', 'dog', '', 'meal', 'Pork and Apple Crockpot', 'dog011.gif', 'Place the pork tenderloin, sliced apples, and cubed sweet potatoes in a slow cooker. Cook on low for 6-8 hours or until the pork is tender. Shred the pork and mix with the cooked apples and sweet potatoes. Serve after cooling.', 'pork tenderloin', '1', 'lb', 'apples (cored and sliced)', '2', 'apples', 'sweet potatoes (cubed)', '2', 'potato', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog012', 'dog', '', 'meal', 'Dog Omelette', 'dog012.gif', 'Whisk eggs in a bowl. Heat skillet and pour in eggs. Sprinkle chopped spinach and small amount of cheese (in moderation) on top. Cook until eggs are set, flip and cook other side. Cut into bite-sized pieces and serve.', 'eggs', '2', 'eggs', 'spinach (chopped)', '0.5', 'cup', 'cheese', '0.125', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog013', 'dog', '', 'treat', 'BananaBlue Biscuits', 'dog013.gif', 'Preheat oven to 350°F (175°C). Mash bananas and mix with blueberries. Gradually add whole wheat flour to form a dough. Roll out dough, cut into shapes, and bake for 20-25 minutes.', 'fresh blueberries', '1', 'cup', 'bananas', '2', 'banana', 'whole wheat flour', '3', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog014', 'dog', '', 'meal', 'Veggie Rice Medley', '', 'Cook the brown rice. Steam zucchini and carrots until tender. Mix all ingredients and serve when cooled', 'brown rice (cooked)', '1', 'cup', 'zucchini (sliced)', '1', 'cup', 'carrots (diced)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog015', 'dog', '', 'meal', 'Puppy Power Food', 'dog015.gif', 'Cook ground turkey and brown rice separately. Steam peas until tender. Mix all ingredients and serve when cool', 'ground turkey', '1', 'lb', 'brown rice (cooked)', '1', 'cup', 'peas', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog016', 'dog', '', 'treat', 'Tasty Tuna Treats', '', 'Mash tuna in a bowl. Mix in shredded carrots and chopped parsley. Form small balls and flatten into treat shapes. Refrigerate a few hours before serving', '1 can tuna in water (drained)', '1', 'can', 'carrots (shredded)', '0.5', 'cup', 'parsley (chopped)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog017', 'dog', '', 'meal', 'Chicken and Rice Balls', '', 'Mix shredded chicken and cooked rice in a bowl. Form mixture into bite-sized balls. Serve in appropriate portions.', 'cooked chicken (shredded)', '1', 'cup', 'brown rice (cooked)', '1', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog018', 'dog', '', 'meal', 'Cranberry and Turkey Time', '', 'Cook ground turkey in a skillet until browned and cooked through. Chop cranberries, steam the green beans. Mix all ingredients together and serve', 'ground turkey', '1', 'lb', 'cranberries (fresh or unsweetened dry)', '0.5', 'cup', 'green beans (steamed)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog019', 'dog', '', 'meal', 'Meatloaf', '', 'Preheat oven to 350°F (175°C). Mix ground beef, oats, and mixed vegetables in a bowl. Shape mixture into a loaf and place baking dish. Bake 45-50 minutes or until cooked through. Cool before serving and cut into appropriate portions', 'ground beef', '1', 'lb', 'oats', '0.5', 'cup', 'mixed veggies (carrots, peas, etc..)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog020', 'dog', 'T', 'meal', 'Vegan Lentil Stew', '', 'Cook lentils, quinoa, sweet potatoes, and peas separately. Mash peas. Mix all ingredients and serve.', 'cooked green or brown lentils', '1', 'cup', 'cooked quinoa', '0.25', 'cup', 'sweet potatoes (cooked and mashed)', '0.25', 'cup', 'peas (cooked and mashed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog021', 'dog', 'T', 'meal', 'Tofu Spinach Bowl', '', 'Cube firm tofu. Cook the brown rice. Steam or sauté the chopped spinach until wilted. Mix all the ingredients and serve', 'firm tofu (cubed)', '0.5', 'cup', 'cooked brown rice', '0.25', 'cup', 'chopped spinach', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog022', 'dog', 'T', 'meal', 'Chickpea Carrot Stew', '', 'Cook chickpeas, carrots, and quinoa separately. Dice cooked carrots. Mix all ingredients and serve', 'cooked chickpeas', '0.5', 'cup', 'carrots (cooked and diced)', '0.25', 'cup', 'cooked quinoa', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog023', 'dog', 'T', 'treat', 'Vegan Pumpkin Bites', '', 'Mix canned pumpkin, oat flour, and cooked quinoa to form a dough. Roll out dough and cut into small bite-sized pieces. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'fresh or canned pumpkin (unsweetened)', '0.5', 'cup', 'oat flour', '0.25', 'cup', 'cooked quinoa', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('dog024', 'dog', 'T', 'meal', 'Sweet Potato Medley', '', 'Bake and mash the sweet potato. Cook the quinoa. Mash the peas. Mix all ingredients and serve', 'baked sweet potato (mashed)', '0.5', 'cup', 'cooked quinoa', '0.25', 'cup', 'peas (cooked and mashed)', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('sugar001', 'sugarGlider', 'T', 'treat', 'Mix-O-Fruits', 'sugar001.gif', 'Mix together fruits, diced into small, bite-sized pieces. Offer a small portion as a treat. Remove uneaten portions after a few hours to prevent spoilage', 'apples (diced)', '0.25', 'cup', 'pears (diced)', '0.25', 'cup', 'peaches (diced)', '0.25', 'cup', 'berries (diced)', '0.25', 'cup', 'melon (cantaloup, honeydew)', '0.25', 'cup', 'kiwi (remove skin)', '1', 'T', 'mango (remove skin)', '2', 'T', '', '', '', '', '', ''),
('sugar002', 'sugarGlider', 'T', 'meal', 'Mix-O-Veggies', '', 'Mix together fresh, pesticide-free vegetables', 'fresh carrots (diced)', '0.25', 'cup', 'bell peppers (diced)', '0.25', 'cup', 'peas', '0.25', 'cup', 'sweet potato (cooked, mashed)', '0.25', 'cup', 'broccoli florets (cooked)', '2', 'T', '', '', '', '', '', '', '', '', '', '', '', ''),
('sugar003', 'sugarGlider', '', 'meal', 'Mix-O-Protien', '', 'Mix together diced meat and mashed boiled eggs. Add mealworms or crickets and plain yogurt as a source of calcium', 'diced cooked chicken', '0.25', 'cup', 'hard boiled egg (mashed)', '0.25', 'cup', 'meal worms or crickets (live or dried)', '1', 'tsp', 'unsweet yogurt', '2', 'tsp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('sugar004', 'sugarGlider', '', 'treat', 'Glider Nectar', 'sugar.004.gif', 'Mix to create a sugar glider-safe nectar', 'honey', '0.25', 'cup', 'filtered water (warm)', '0.5', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('hamster001', 'hamster', 'T', 'treat', 'Carrot-Oat Delight', '', 'Mix oats and grated carrots. Add honey (if desired). Form small, bite-sized balls and let them dry for a few hours', 'rolled oats', '1', 'T', 'carrots (grated)', '1', 'T', 'honey (optional)', '1', 'tsp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('hamster002', 'hamster', 'T', 'treat', 'PB-NANA', 'hamster002.gif', 'Mix together to form dough-like consistency. Roll into bite-sized balls & let dry 2-3 hours', 'natural peanut butter (no added salt or sugar)', '1', 'tsp', 'ripe banana (mashed)', '2', 'T', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('hamster003', 'hamster', 'T', 'treat', 'Cran-Apples', 'hamster003.gif', 'Dice into small pieces and mix together', 'dried apple', '1', 'T', 'dried cranberries', '1', 'tsp', 'cinnamon (optional)', '1', 'pinch', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('hamster004', 'hamster', 'T', 'treat', 'Flax-N-Sunflower', 'hamster004.gif', 'Mix seeds and add drop of water. Form bite-sized balls. Let dry 2-3 hours until solid', 'raw sunflower seeds', '1', 'tsp', 'ground flaxseed', '0.25', 'tsp', 'drop of water', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('hamster005', 'hamster', 'T', 'treat', 'Whole Grain Bites', '', 'Mix together to form small bite-sized pieces', 'quinoa (cooked)', '1', 'T', 'rolled oats', '0.5', 'tsp', 'broccoli (finely chopped)', '0.25', 'tsp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('gold001', 'goldFish', 'T', 'treat', 'Pleasing Peas', 'gold001.gif', 'Ensure peas are soft and cut into small pieces to prevent choking', 'shelled, cooked, organic peas', '1', 'pea', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('gold002', 'goldFish', '', 'treat', 'Brine Shrimp', 'gold002.gif', 'Brine shrimp can provide variety in the diet', 'freeze dried shrimp', '1', 'pinch', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('gold003', 'goldFish', '', 'treat', 'Goldfish Flakes', '', 'Steam or blanch baby carrots, peas, and spinach until soft. Puree vegetables. Add crushed freeze-dried bloodworms. Roll into small flakes and allow to dry', 'baby carrots', '0.25', 'cup', 'peas', '0.25', 'cup', 'fresh spinach', '0.25', 'cup', 'freeze dried blood worms', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('gold004', 'goldFish', '', 'treat', 'Daphnia treat', 'gold004.gif', 'Daphnia (water flea) can provide variety in the diet', 'freeze dried daphnia', '1', 'pinch', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('guinea001', 'guineaPig', 'T', 'treat', 'C and C Treats', 'guinea001.gif', 'Wash thoroughly before feeding', 'fresh carrot', '1', 'piece', 'cilantro leaves', '1', 'piece', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('guinea002', 'guineaPig', 'T', 'treat', 'Greens Apple', 'guinea002.gif', 'Wash thoroughly', 'fresh apple (remove seeds)', '1', 'piece', 'romaine lettuce', '1', 'leaf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('guinea003', 'guineaPig', 'T', 'treat', 'Pepper Parsley', 'guinea003.gif', 'Wash thoroughly ', 'fresh bell pepper', '1', 'piece', 'fresh parsley', '1', 'piece', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('guinea004', 'guineaPig', 'T', 'treat', 'Timothy Blue', '', 'Use high quality, organic ingredients', 'fresh or dried blueberries', '1', 'tsp', 'timothy hay pellets', '2', 'tsp', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('guinea005', 'guineaPig', 'T', 'treat', 'Bananoat', 'guinea005.gif', 'Ensure cookie is free of added sugar without any artificial ingredients', 'plain, unsweetened oatmeal cookie', '1', 'piece', 'ripe banana', '1', 'piece', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ferret001', 'ferret', '', 'treat', 'Chicken Treats', '', 'Mix cooked, shredded chicken with applesauce and rice flour to form a dough. Roll dough and cut into small, ferret-sized pieces. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'high quality chicken (cooked and shredded)', '0.5', 'cup', 'unsweetened applesauce', '0.25', 'cup', 'rice flour', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ferret002', 'ferret', '', 'treat', 'Egg-celent Salmon', 'ferret002.gif', 'Mix salmon, scrambled egg, and oat flour to form a dough. Roll out dough and cut into small, ferret-sized pieces. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'canned salmon (drained)', '0.5', 'cup', 'egg (scrambled)', '0.25', 'cup', 'oat flour', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ferret003', 'ferret', '', 'treat', 'Meaty Bites', 'ferret003.gif', 'Cook and mince beef and liver. Mix the minced beef, minced liver, and rice flour to form a dough. Roll out the dough and cut into small, ferret-sized pieces. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'cooked beef (minced)', '0.5', 'cup', 'beef liver (cooked and. minced)', '0.25', 'cup', 'rice flour', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ferret004', 'ferret', '', 'treat', 'Pumpkin Turkey Delight', 'ferret004.gif', 'Cook and mince turkey. Mix minced turkey, canned pumpkin, and oat flour to form a dough. Roll out dough and cut into small, ferret-sized pieces. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'cooked and minced turkey', '0.5', 'cup', 'unsweetened canned pumpkin', '0.25', 'cup', 'oat flour', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ferret005', 'ferret', '', 'treat', 'Lamb and Carrot Treats', 'ferret005.gif', 'Mix minced lamb, minced carrots, and rice flour to form a dough. Roll out dough and cut into small, ferret-sized pieces. Bake at 350°F (175°C) for about 10-12 minutes until firm', 'cooked lamb (minced)', '0.5', 'cup', 'carrots (cooked and minced)', '0.25', 'cup', 'rice flour', '0.25', 'cup', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
