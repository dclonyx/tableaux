<?php
CREATE DATABASE IF NOT EXISTS `TABLEAUX_D_ELODIE` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TABLEAUX_D_ELODIE`;

CREATE TABLE `CATEGORIE` (
  `id_categorie` BIGINT AUTO_INCREMENT,
  `nom_categorie` VARCHAR(255),
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `PRIX` (
  `id_prix` BIGINT AUTO_INCREMENT,
  `prix` FLOAT,
  PRIMARY KEY (`id_prix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `TABLEAU` (
  `id_tableau` BIGINT AUTO_INCREMENT,
  `reference` VARCHAR(255),
  `lien_image` VARCHAR(255),
  `id_taille` BIGINT,
  `id_categorie` BIGINT,
  `id_prix` BIGINT,
  PRIMARY KEY (`id_tableau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `TAILLE` (
  `id_taille` BIGINT AUTO_INCREMENT,
  `taille` FLOAT,
  PRIMARY KEY (`id_taille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `TABLEAU` ADD FOREIGN KEY (`id_categorie`) REFERENCES `CATEGORIE` (`id_categorie`);
ALTER TABLE `TABLEAU` ADD FOREIGN KEY (`id_taille`) REFERENCES `TAILLE` (`id_taille`);
ALTER TABLE `TABLEAU` ADD FOREIGN KEY (`id_prix`) REFERENCES `PRIX` (`id_prix`);


INSERT INTO tableau (reference, lien_image, id_categorie, id_taille, id_prix)
VALUES (`ref1`, `test1`, '1', '5', '3'),
(`ref2`, `test2`, '2', '2', '5'),
(`ref3`, `test3`, '3', '4', '3'),
(`ref4`, `test4`, '4', '3', '1'),
(`ref5`, `test5`, '5', '1', '2'),
(`ref6`, `test6`, '2', '4', '4'),
(`ref7`, `test7`, '5', '2', '5');