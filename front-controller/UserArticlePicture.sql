create database frontcontroller;

CREATE TABLE IF NOT EXISTS `frontcontroller`.`Picture` (
  `id` INT(11) NOT NULL auto_increment,
  `title` VARCHAR(150) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `img` VARCHAR(255) NOT NULL,
  `yearCreated` YEAR NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `frontcontroller`.`Article` (
  `id` INT(11) NOT NULL auto_increment,
  `title` VARCHAR(150) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `yearCreated` YEAR NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `frontcontroller`.`User` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `hash` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(100) NOT NULL,
  `role` ENUM("ADMIN", "USER") NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT into `frontcontroller`.`User` (email, `name`, hash, phone, role)
VALUES ('admin@admin.com', 'Painter', '$2y$10$m53hJER8S0YyUA2NJM4eN.eKehhlcYUo3Lr7PVkJFfsDIAGs.Xx5S', '+7(999)999-99-99', "ADMIN");