CREATE TABLE IF NOT EXISTS `users` (
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(150)    NOT NULL,
    `lastname`  VARCHAR(150)    NOT NULL,
    `email`     VARCHAR(150)    NOT NULL,
    `user-type` ENUM ('foodie', 'cook', 'admin') DEFAULT 'foodie',
    `password`  VARCHAR(150)    NOT NULL
);

CREATE TABLE IF NOT EXISTS `recipes` (
    `recipe_id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `id` INT NOT NULL,
    `name`  VARCHAR(150)    NOT NULL,
    `description` TEXT,
    `location` ENUM ('east', 'west', 'south', 'north') NOT NULL,
    `category`    ENUM('soups', 'morsel', 'meats', 'grain') NOT NULL,
    `ingridients` JSON,
    `instructions` JSON,
    `nutrients` JSON
);

INSERT INTO `users` (`firstname`, `lastname`, `email`, `user-type`, `password`) VALUES 
('testuser', 'testuser', 'test@gmail.com', 'foodie', 'password');
 
ALTER TABLE `recipes`  ADD CONSTRAINT `recipes_user__fk` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

ALTER TABLE `recipes` MODIFY COLUMN `location` ENUM ('east', 'west', 'south', 'north') NOT NULL;

ALTER TABLE `recipes` CHANGE COLUMN `categories` `category`  ENUM('soups', 'morsel', 'meats', 'grain') NOT NULL;

INSERT INTO `recipes` (`id` , `name`, `description`, `location`, `categories`, `ingridients`,  `instructions`)
VALUES (2, 'Egusi soup', 'made with ground melon seeds', 'west', 'soups', '["Flour", "Sugar"]','["Mix Dry ingredients", "Add wet ingridients"]');