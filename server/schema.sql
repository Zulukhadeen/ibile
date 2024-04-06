CREATE TABLE IF NOT EXISTS `users` (
    `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(150)    NOT NULL,
    `lastname`  VARCHAR(150)    NOT NULL,
    `email`     VARCHAR(150)    NOT NULL,
    `user-type` ENUM ('foodie', 'cook', 'admin') DEFAULT 'foodie',
    `password`  VARCHAR(150)    NOT NULL
);

INSERT INTO `users` (`firstname`, `lastname`, `email`, `user-type`, `password`) VALUES 
('testuser', 'testuser', 'test@gmail.com', 'foodie', 'password');