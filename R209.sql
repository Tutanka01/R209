BEGIN TRANSACTION;

DROP TABLE IF EXISTS user;

CREATE TABLE user
    (ID_user    TEXT PRIMARY KEY,
     login   TEXT NOT NULL,
     passwd     TEXT NOT NULL,
     perm       TEXT NOT NULL
     );

INSERT INTO user VALUES('U1','Julien','1234','admin');
INSERT INTO user VALUES('U2','Mohamad','123','guest');
INSERT INTO user VALUES('U3','Jean','123','guest');
INSERT INTO user VALUES('U4','Pierre','123','guest');

DROP TABLE IF EXISTS plat;

CREATE TABLE plat
    (ID_plat     TEXT PRIMARY KEY,
     nom_plat    TEXT NOT NULL,
     spécificité    TEXT NULL,
     prix          INTEGER NOT NULL,
     auteur     TEXT NOT NULL,
     Lien       TEXT NOT NULL,
     description TEXT NOT NULL,
     ingredient  TEXT NOT NULL);

INSERT INTO plat VALUES('P1','Tajine','Halal',25,'EAEB','images\tajine.jpg','Le tajine est un plat traditionnel de la cuisine marocaine et algérienne. Il sagit dun ragoût cuit lentement dans un plat en terre cuite du même nom, avec des viandes, des légumes, des fruits et des épices. Le plat est souvent servi avec du pain ou de la semoule de couscous.','Les ingrédients pour un tajine traditionnel sont généralement de la viande (agneau, poulet ou bœuf), des légumes (comme les carottes et les oignons), des épices (comme le cumin et le safran) et des fruits secs (comme les abricots et les raisins).');
INSERT INTO plat VALUES('P2','Gateau au chocolat','Sans Gluten',15,'JP','images\gateau_au_chocolat.jpg','Le gâteau au chocolat est un dessert moelleux et fondant, souvent réalisé avec du chocolat noir, des oeufs, du sucre et de la farine. Il peut être agrémenté de noix, damandes ou de fruits rouges pour une touche de saveur supplémentaire.','Ingrédients pour un gâteau au chocolat : chocolat noir, sucre, oeufs, farine, beurre, levure.');
INSERT INTO plat VALUES('P3','Glace Citron','None',5,'Test','images\glace_au_citron.jpg','La glace au citron est un dessert frais et acidulé, parfait pour les journées chaudes dété. Elle est généralement préparée avec du jus de citron frais, de la crème et du sucre. Sa texture est crémeuse et légère, avec un goût intense de citron.','Ingrédients pour une glace au citron : jus de citron, crème, sucre, eau.');
INSERT INTO plat VALUES('P4','Couscous','Halal',25,'EAEB','images\couscous.jpg','Le couscous est un plat traditionnel de la cuisine maghrébine. Il sagit de une semoule de blé dur, accompagnée de légumes et de viande. Le plat est souvent servi avec une sauce à base de tomates et dépices.','Les ingrédients pour un couscous traditionnel sont généralement de la viande (agneau, poulet ou bœuf), des légumes (comme les carottes et les oignons), des épices (comme le cumin et le safran) et des fruits secs (comme les abricots et les raisins).');
INSERT INTO plat VALUES('P5','Tacos','Halal',10,'EAEB','images\tacos.jpg','Le tacos est un plat originaire du Mexique, composé dune tortilla de maïs ou de blé garnie de viande (généralement du poulet ou du bœuf), de légumes frais (tomate, oignon, salade) et de fromage fondu. Il est souvent accompagné de sauces piquantes et peut être servi en sandwich ou en plat principal.', 'Les ingrédients typiques dun tacos incluent de la viande hachée, de la salade, des tomates, des oignons, de la crème fraîche et de la sauce piquante.');

DROP TABLE IF EXISTS categorie;

CREATE TABLE categorie
    (ID_plat     TEXT PRIMARY KEY,
     caud   INTEGER NULL,
     froid   INTEGER NULL,
     entree  INTEGER NULL,
     plat  INTEGER NULL,
     dessert   INTEGER NULL );

INSERT INTO categorie VALUES('P1',1,0,0,1,0);
INSERT INTO categorie VALUES('P2',0,0,0,0,1);
INSERT INTO categorie VALUES('P3',0,1,0,0,1);
INSERT INTO categorie VALUES('P4',1,0,0,1,0);
INSERT INTO categorie VALUES('P5',1,0,0,1,0);

DROP TABLE IF EXISTS panier;

CREATE TABLE panier
    (ID_user    TEXT NOT NULL,
     ID_plat    TEXT NOT NULL,
     QTE        INTEGER NOT NULL);

COMMIT;