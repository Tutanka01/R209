BEGIN TRANSACTION;

DROP TABLE IF EXISTS user;

CREATE TABLE user
    (ID_user    TEXT PRIMARY KEY,
     nom_user   TEXT NOT NULL,
     perm       TEXT NOT NULL,
     passwd     TEXT NOT NULL
     );

INSERT INTO user VALUES('U1','JP','Admin','Momoju');

DROP TABLE IF EXISTS saveur;

CREATE TABLE saveur
    (ID_plat     TEXT PRIMARY KEY,
     sale   INTEGER NULL,
     sucre  INTEGER NULL,
     acide  INTEGER NULL,
     amer   INTEGER NULL,
     umami  INTEGER NULL
     );

INSERT INTO saveur VALUES('P1',1,0,0,0,0);
INSERT INTO saveur VALUES('P2',0,1,0,0,0);
INSERT INTO saveur VALUES('P3',1,0,0,0,0);
INSERT INTO saveur VALUES('P4',0,1,1,0,0);


DROP TABLE IF EXISTS plat;

CREATE TABLE plat
    (ID_plat     TEXT PRIMARY KEY,
     nom_plat    TEXT NOT NULL,
     spécificité    TEXT NULL,
     auteur     TEXT NOT NULL,
     Lien       TEXT NOT NULL,
     ingredients TEXT NOT NULL);

INSERT INTO plat VALUES('P1','Tajine','Halal','EAEB','images\tajine.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Eros in cursus turpis massa tincidunt dui ut ornare lectus. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Sem integer vitae justo eget. Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Gravida quis blandit turpis cursus in hac. Diam vel quam elementum pulvinar etiam non quam lacus. Dui ut ornare lectus sit amet.s');
INSERT INTO plat VALUES('P2','Gateau au chocolat','Sans Gluten','JP','images\gateau_au_chocolat.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Eros in cursus turpis massa tincidunt dui ut ornare lectus. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Sem integer vitae justo eget. Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Gravida quis blandit turpis cursus in hac. Diam vel quam elementum pulvinar etiam non quam lacus. Dui ut ornare lectus sit amet.');
INSERT INTO plat VALUES('P4','Glace Citron','None','Test','images\glace_au_citron.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Eros in cursus turpis massa tincidunt dui ut ornare lectus. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Sem integer vitae justo eget. Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Gravida quis blandit turpis cursus in hac. Diam vel quam elementum pulvinar etiam non quam lacus. Dui ut ornare lectus sit amet.');
INSERT INTO plat VALUES('P5','Couscous','Halal','EAEB','images\couscous.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Eros in cursus turpis massa tincidunt dui ut ornare lectus. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Sem integer vitae justo eget. Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Gravida quis blandit turpis cursus in hac. Diam vel quam elementum pulvinar etiam non quam lacus. Dui ut ornare lectus sit amet.');
INSERT INTO plat VALUES('P6','Tajinette','Halal','EAEB','images\tajine.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim lobortis scelerisque fermentum dui faucibus in ornare. Eros in cursus turpis massa tincidunt dui ut ornare lectus. A arcu cursus vitae congue mauris rhoncus aenean vel elit. Sem integer vitae justo eget. Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Gravida quis blandit turpis cursus in hac. Diam vel quam elementum pulvinar etiam non quam lacus. Dui ut ornare lectus sit amet.');

DROP TABLE IF EXISTS categorie;

CREATE TABLE categorie
    (ID_plat     TEXT PRIMARY KEY,
     caud   INTEGER NULL,
     froid   INTEGER NULL,
     entree  INTEGER NULL,
     plat  INTEGER NULL,
     dessert   INTEGER NULL,
     accompagnement  INTEGER NULL  );

INSERT INTO categorie VALUES('P1',1,0,0,1,0,0);
INSERT INTO categorie VALUES('P2',0,0,0,0,1,0);
INSERT INTO categorie VALUES('P3',1,0,1,0,0,0);
INSERT INTO categorie VALUES('P4',0,1,0,0,1,0);

DROP TABLE IF EXISTS panier;

CREATE TABLE panier
    (ID_user    TEXT NOT NULL,
     ID_plat    TEXT NOT NULL,
     QTE        INTEGER NOT NULL);

COMMIT;