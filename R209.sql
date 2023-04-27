BEGIN TRANSACTION;

DROP TABLE IF EXISTS user;

CREATE TABLE user
    (ID_user    TEXT PRIMARY KEY,
     nom_user   TEXT NOT NULL,
     perm       TEXT NOT NULL
     );

INSERT INTO user VALUES('U1','JP','Admin');

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
     spécificité    TEXT NOT NULL,
     auteur     TEXT NOT NULL);

INSERT INTO plat VALUES('P1','Tajine','Halal','EAEB');
INSERT INTO plat VALUES('P2','Gâteau au chocolat','Sans Gluten','JP');
INSERT INTO plat VALUES('P3','Souflé','Français','Blbl');
INSERT INTO plat VALUES('P4','Glace Citron','None','Test');

DROP TABLE IF EXISTS categorie;

CREATE TABLE categorie
    (ID_plat     TEXT PRIMARY KEY,
     chaud   INTEGER NULL,
     froid   INTEGER NULL,
     entrée  INTEGER NULL,
     plat  INTEGER NULL,
     dessert   INTEGER NULL,
     accompagnement  INTEGER NULL  );

INSERT INTO categorie VALUES('P1',1,0,0,1,0,0);
INSERT INTO categorie VALUES('P2',1,0,0,0,1,0);
INSERT INTO categorie VALUES('P3',1,0,1,0,0,0);
INSERT INTO categorie VALUES('P4',0,1,0,0,1,0);

DROP TABLE IF EXISTS panier;

CREATE TABLE panier
    (ID_user    TEXT NOT NULL,
     ID_plat    TEXT NOT NULL,
     QTE        INTEGER NOT NULL);

COMMIT;