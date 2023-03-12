CREATE DATABASE IF NOT EXISTS `game_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `game_shop`;

DROP TABLE IF EXISTS `developers`;
CREATE TABLE `developers` (
  `developerID` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS `publishers`;
CREATE TABLE `publishers` (
  `publisherID` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `gameID` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `release_date` DATE NOT NULL,
  `genre` VARCHAR(255) NOT NULL,
  `developerID` INT NOT NULL,
  `publisherID` INT NOT NULL,
  `platform` VARCHAR(255) NOT NULL,
  `player_count` VARCHAR(255) NOT NULL,
  `age_rating` VARCHAR(10) NOT NULL,
  `price` DECIMAL(10, 2) NOT NULL,
  `description` TEXT NOT NULL,
  FOREIGN KEY (developerID) REFERENCES developers(developerID),
  FOREIGN KEY (publisherID) REFERENCES publishers(publisherID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO developers (name)
VALUES
('Riot Games'),
('Blizzard Entertainment'),
('Respawn Entertainment'),
('Valve Corporation'),
('Treyarch'),
('Epic Games'),
('Mojang Studios'),
('Rockstar Games'),
('CD Projekt Red'),
('Square Enix'),
('Capcom'),
('Behaviour Interactive'),
('Remedy Entertainment'),
('Ubisoft Montreal');

INSERT INTO publishers (name)
VALUES
('Riot Games'),
('Blizzard Entertainment'),
('Electronic Arts'),
('Valve Corporation'),
('Activision'),
('Epic Games'),
('Microsoft Studios'),
('Rockstar Games'),
('CD Projekt'),
('Square Enix'),
('Capcom'),
('Starbreeze Studios'),
('505 Games'),
('Ubisoft');

INSERT INTO games (gameID ,name, release_date, genre, developerID, publisherID, platform, player_count, age_rating, price, description)
VALUES
  (1,'Valorant', '2020-06-02', 'FPS', 1, 1, 'PC', 'Multiplayer', 'T', 0, 'Valorant is a 5v5 character-based tactical shooter game set in a near-future world.'),
  (2,'League of Legends', '2009-10-27', 'MOBA', 1, 1, 'PC', 'Multiplayer', 'T', 0, 'League of Legends is a fast-paced, competitive online game that blends the speed and intensity of an RTS with RPG elements.'),
  (3,'Overwatch', '2016-05-24', 'FPS', 2, 2, 'PC, Xbox One, PlayStation 4, Nintendo Switch', 'Multiplayer', 'T', 15.99, 'Overwatch is a highly stylized team-based shooter set on a near-future earth.'),
  (4,'Apex Legends', '2019-02-04', 'Battle Royale', 3, 3, 'PC, Xbox One, PlayStation 4, Nintendo Switch', 'Multiplayer', 'T', 0, 'Apex Legends is a free-to-play battle royale game set in the Titanfall universe.'),
  (5,'Call of Duty: Black Ops Cold War', '2020-11-13', 'FPS', 4, 3, 'PC, Xbox One, PlayStation 4, Xbox Series X|S, PlayStation 5', 'Multiplayer', 'M', 59.99, 'Call of Duty: Black Ops Cold War is a first-person shooter game set during the Cold War.'),
  (6,'Fortnite', '2017-07-25', 'Battle Royale', 5, 3, 'PC, Xbox One, PlayStation 4, Nintendo Switch, iPhone, iPad, Android', 'Multiplayer', 'T', 0, 'Fortnite is a free-to-play battle royale game that has also expanded to include other game modes such as Save the World and Creative.'),
  (7,'Minecraft', '2011-11-18', 'Sandbox', 6, 4, 'PC, Xbox One, PlayStation 4, Nintendo Switch, iPhone, iPad, Android', 'Singleplayer, Multiplayer', 'E', 26.95, 'Minecraft is a sandbox game that allows players to build and explore in a block-based world.'),
  (8,'Red Dead Redemption 2', '2018-10-26', 'Action-Adventure', 7, 3, 'PlayStation 4, Xbox One, PC', 'Singleplayer', 'M', 59.99, 'Red Dead Redemption 2 is a western-themed action-adventure game set in the year 1899.'),
  (9,'The Witcher 3: Wild Hunt', '2015-05-19', 'Action RPG', 8, 4, 'PC, Xbox One, PlayStation 4', 'Singleplayer', 'M', 49.99, 'The Witcher 3: Wild Hunt is an action role-playing game set in a rich and immersive world.'),
  (10,'Final Fantasy VII Remake', '2020-04-10', 'Action RPG', 9, 5, 'PlayStation 4', 'Singleplayer', 'T', 59.99, 'Final Fantasy VII Remake is a retelling of the original Final Fantasy VII game, featuring updated graphics, new gameplay mechanics, and an expanded story.'),
  (11,'Resident Evil Village', '2021-05-07', 'Survival Horror', 10, 5, 'PC, Xbox One, PlayStation 4, Xbox Series X|S, PlayStation 5', 'Singleplayer', 'M', 59.99, 'Resident Evil Village is the latest entry in the Resident Evil franchise, featuring a new storyline, new characters, and improved gameplay.'),
  (12,'Dead by Daylight', '2016-06-14', 'Survival Horror', 11, 6, 'PC, Xbox One, PlayStation 4, Nintendo Switch', 'Multiplayer', 'M', 19.99, 'Dead by Daylight is a multiplayer survival horror game where players take on the role of either a survivor or a killer.'),
  (13,'Control', '2019-08-27', 'Action Adventure', 12, 7, 'PC, Xbox One, PlayStation 4', 'Singleplayer', 'T', 39.99, 'Control is a supernatural action-adventure game set in the Federal Bureau of Control, a secret government agency tasked with investigating paranormal phenomena.'),
  (14,'Assassins Creed Valhalla', '2020-11-10', 'Action RPG', 13, 5, 'PC, Xbox One, PlayStation 4, Xbox Series X|S, PlayStation 5', 'Singleplayer', 'M', 59.99, 'Assassins Creed Valhalla is an action role-playing game set in Norse-inspired mythology, following a Viking raider turned assassin as they explore a new land and build a new home for their people.'),
  (15,'FIFA 22', '2021-10-01', 'Sports', 3, 3, 'PC, Xbox One, Xbox Series X|S, PlayStation 4, PlayStation 5, Nintendo Switch', 'Singleplayer, Multiplayer', 'E', 59.99, 'FIFA 22 is the latest installment in the long-running soccer (football) simulation series, featuring updated rosters, improved gameplay, and new features.'),
  (16,'Deathloop', '2021-09-14', 'Action', 11, 3, 'PC, PlayStation 5', 'Singleplayer', 'M', 59.99, 'Deathloop is a first-person action game set in a time loop, where the player must take out eight targets to break the cycle.'),
  (17,'Forza Horizon 5', '2021-11-09', 'Racing', 12, 3, 'PC, Xbox One, Xbox Series X|S', 'Singleplayer, Multiplayer', 'E', 59.99, 'Forza Horizon 5 is an open-world racing game set in Mexico, featuring hundreds of cars and a dynamic weather system.'),
  (18,'Halo Infinite', '2021-12-08', 'FPS', 13, 3, 'PC, Xbox One, Xbox Series X|S', 'Singleplayer, Multiplayer', 'M', 59.99, 'Halo Infinite is the latest entry in the long-running Halo franchise, featuring a new campaign and multiplayer modes.'),
  (19,'The Legend of Zelda: Breath of the Wild 2', '2022-12-31', 'Action-Adventure', 14, 7, 'Nintendo Switch', 'Singleplayer', 'E', 59.99, 'The Legend of Zelda: Breath of the Wild 2 is the highly-anticipated sequel to the critically-acclaimed Breath of the Wild, featuring a new story and new gameplay mechanics.'),
  (20,'The Last of Us Part II', '2020-06-19', 'Action-Adventure', 11, 5, 'PlayStation 4', 'Singleplayer', 'M', 59.99, 'The Last of Us Part II is a post-apocalyptic action-adventure game that follows the story of Ellie and Joel in a world ravaged by a deadly virus.'),
  (21,'Death Stranding', '2019-11-08', 'Action', 12, 5, 'PlayStation 4, PC', 'Singleplayer', 'M', 59.99, 'Death Stranding is an action game set in an open-world environment, where players must deliver cargo and connect isolated cities in a world on the brink of extinction.'),
  (22,'Rainbow Six Siege', '2015-12-01', 'Tactical shooter', 13, 13, 'PC, Xbox One, PlayStation 4', 'Multiplayer', 'M', 19.99, 'Rainbow Six Siege is a team-based tactical shooter that emphasizes environmental destruction and co-operation between players.'),
  (23,'Sea of Thieves', '2018-03-20', 'Action-Adventure', 14, 7, 'PC, Xbox One', 'Multiplayer', 'T', 39.99, 'Sea of Thieves is an action-adventure game that takes place in a shared open-world environment, where players can take on the role of a pirate and explore the seas with their crew.');
  

  --1. Display all games in the database:
  SELECT * FROM games;

  --2. Display all developers in the database:
  SELECT * FROM developers;

  --3. Display all publishers in the database:
  SELECT * FROM publishers;

  --4. Display games that were released in 2020:
  SELECT * FROM games WHERE YEAR(release_date) = 2020;

  --5. Display games that were developed by "Blizzard Entertainment":
  SELECT * FROM games WHERE developer_id = (SELECT developer_id FROM developers WHERE name = 'Blizzard Entertainment');

  --6. Display games that were published by "Ubisoft":
  SELECT * FROM games WHERE publisher_id = (SELECT publisher_id FROM publishers WHERE name = 'Ubisoft');

  --7. Display games that are classified as "FPS":
  SELECT * FROM games WHERE genre = 'FPS';

  --8. Display games that are available on the "PlayStation 4" platform:
  SELECT * FROM games WHERE platform LIKE '%PlayStation 4%';

  --9. Display games that are rated "M" for mature audiences:
  SELECT * FROM games WHERE age_rating = 'M';

  --10. Display games that cost more than $50:
  SELECT * FROM games WHERE price > 50;



