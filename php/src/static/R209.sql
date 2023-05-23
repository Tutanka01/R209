BEGIN TRANSACTION;

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    ID_user INTEGER PRIMARY KEY AUTOINCREMENT,
    login TEXT NOT NULL,
    passwd TEXT NOT NULL,
    perm TEXT NOT NULL
);

INSERT INTO user (login, passwd, perm) VALUES ('Julien', '1234', 'admin');
INSERT INTO user (login, passwd, perm) VALUES ('Jean', '1234', 'user');
INSERT INTO user (login, passwd, perm) VALUES ('Pierre', '1234', 'user');
INSERT INTO user (login, passwd, perm) VALUES ('admin', 'admin', 'admin');

DROP TABLE IF EXISTS plat;

CREATE TABLE plat
    (ID_plat        INTEGER PRIMARY KEY AUTOINCREMENT,
     nom_plat       TEXT NOT NULL,
     specificite    TEXT NULL,
     prix           INTEGER NOT NULL,
     auteur         TEXT NOT NULL,
     Lien           TEXT NOT NULL,
     description    TEXT NOT NULL,
     ingredient     TEXT NOT NULL);

INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Tajine','Halal',25,'EAEB','images\tajine.jpg','Le tajine est un plat traditionnel de la cuisine marocaine et algérienne. Il sagit dun ragoût cuit lentement dans un plat en terre cuite du même nom, avec des viandes, des légumes, des fruits et des épices. Le plat est souvent servi avec du pain ou de la semoule de couscous.','Les ingrédients pour un tajine traditionnel sont généralement de la viande (agneau, poulet ou bœuf), des légumes (comme les carottes et les oignons), des épices (comme le cumin et le safran) et des fruits secs (comme les abricots et les raisins).');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Gateau au chocolat','Sans Gluten',15,'JP','images\gateau_au_chocolat.jpg','Le gâteau au chocolat est un dessert moelleux et fondant, souvent réalisé avec du chocolat noir, des oeufs, du sucre et de la farine. Il peut être agrémenté de noix, damandes ou de fruits rouges pour une touche de saveur supplémentaire.','Ingrédients pour un gâteau au chocolat : chocolat noir, sucre, oeufs, farine, beurre, levure.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Glace Citron','None',5,'Test','images\glace_au_citron.jpg','La glace au citron est un dessert frais et acidulé, parfait pour les journées chaudes dété. Elle est généralement préparée avec du jus de citron frais, de la crème et du sucre. Sa texture est crémeuse et légère, avec un goût intense de citron.','Ingrédients pour une glace au citron : jus de citron, crème, sucre, eau.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Couscous','Halal',25,'EAEB','images\couscous.jpg','Le couscous est un plat traditionnel de la cuisine maghrébine. Il sagit de une semoule de blé dur, accompagnée de légumes et de viande. Le plat est souvent servi avec une sauce à base de tomates et dépices.','Les ingrédients pour un couscous traditionnel sont généralement de la viande (agneau, poulet ou bœuf), des légumes (comme les carottes et les oignons), des épices (comme le cumin et le safran) et des fruits secs (comme les abricots et les raisins).');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Tacos','Halal',10,'EAEB','images\tacos.jpg','Le tacos est un plat originaire du Mexique, composé dune tortilla de maïs ou de blé garnie de viande (généralement du poulet ou du bœuf), de légumes frais (tomate, oignon, salade) et de fromage fondu. Il est souvent accompagné de sauces piquantes et peut être servi en sandwich ou en plat principal.', 'Les ingrédients typiques dun tacos incluent de la viande hachée, de la salade, des tomates, des oignons, de la crème fraîche et de la sauce piquante.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Pizza margherita','None',12,'Mama Mia','images\pizza_margherita.jpg','La pizza margherita est une pizza classique italienne, garnie de tomates fraîches, de mozzarella et de basilic. La croûte est fine et croustillante, et la garniture est simple mais savoureuse.','Ingrédients pour une pizza margherita : pâte à pizza, tomates fraîches, mozzarella, basilic, huile dolive.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Pad Thai','None',18,'Thaïlande Delice','images\pad_thai.jpg','Le pad thai est un plat thaïlandais populaire, composé de nouilles de riz sautées, de légumes frais, de tofu, de cacahuètes et de crevettes ou de poulet. La sauce est à la fois sucrée, salée et épicée, et le plat est souvent garni de coriandre et de jus de citron vert.','Ingrédients pour un pad thai : nouilles de riz, légumes (comme les carottes, les oignons et les poivrons), tofu, crevettes ou poulet, cacahuètes, coriandre, jus de citron vert, sauce pour pad thai.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Raviolis aux champignons','None',20,'La Dolce Vita','images\raviolis.jpg','Les raviolis aux champignons sont un plat italien délicieux et raffiné, composé de pâtes farcies aux champignons, servies avec une sauce à la crème et au parmesan. Le plat est simple mais savoureux, et parfait pour une soirée spéciale.','Ingrédients pour des raviolis aux champignons : pâte à pâtes, champignons, ricotta, parmesan, crème, persil, sel, poivre.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Biryani','Halal',22,'Le Palais de lInde','images\biryani.jpg','Le biryani est un plat indien délicieux et épicé, composé de riz basmati, de viande (agneau, poulet ou bœuf), de légumes et dépices. Le plat est souvent garni de noix et de raisins secs, et est parfait pour un repas copieux.','Ingrédients pour un biryani : riz basmati, viande (agneau, poulet ou bœuf), légumes (comme les oignons, les carottes et les poivrons), épices (comme le cumin, le curcuma et le safran), noix, raisins secs.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Fish and chips','None',16,'The Fisherman','images\fish_and_chips.jpg','Le fish and chips est un plat anglais classique, composé de poisson pané et de frites. Le poisson est souvent du cabillaud ou de la morue, et la pâte est légère et croustillante. Le plat est servi avec une sauce tartare et du vinaigre malté.','Ingrédients pour le fish and chips : poisson (cabillaud ou morue), pommes de terre, farine, bière, œuf, huile de');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Chili Con Carne','None',20,'AS','images\chili_con_carne.jpg','Le Chili Con Carne est un plat mexicain à base de viande de boeuf hachée, de haricots rouges, de tomates, de poivrons et dépices. Il est souvent servi avec du riz, des nachos et du guacamole pour une expérience de repas tex-mex complète.','Les ingrédients typiques du Chili Con Carne incluent du boeuf haché, des haricots rouges, des tomates en dés, de loignon, du poivron rouge, de lail, de la poudre de chili et du cumin.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Salade Niçoise','None',8,'JP','images\salade_nicoise.jpg','La Salade Niçoise est une salade française composée de thon, dolives noires, de tomates, doeufs durs, de poivrons, de concombre et de laitue. Elle est souvent arrosée dune vinaigrette à base dhuile dolive et de vinaigre balsamique pour une saveur supplémentaire.','Les ingrédients typiques de la Salade Niçoise incluent du thon, des olives noires, des tomates, des oeufs durs, des haricots verts, des poivrons rouges, du concombre et de la laitue.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Poke Bowl','None',14,'SL','images\poke_bowl.jpg','Le Poke Bowl est un plat hawaïen à base de poisson cru, de riz, de légumes et de fruits. Il est souvent servi avec de la sauce soja et du wasabi pour une expérience de repas asiatique complète.','Les ingrédients typiques du Poke Bowl incluent du poisson cru, du riz, des avocats, des concombres, des mangues, des edamames, des algues et de la sauce soja.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Moussaka','None',18,'AS','images\moussaka.jpg','La Moussaka est un plat grec à base daubergines, de viande hachée et de sauce béchamel. Il est souvent servi avec une salade grecque et du pain pour une expérience culinaire méditerranéenne complète.','Les ingrédients typiques de la Moussaka incluent des aubergines, du boeuf hach');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Mousse au chocolat','Végétalien',8,'Test','images\mousse_chocolat.jpg','La mousse au chocolat est un dessert aérien et fondant, souvent réalisé avec du chocolat noir, des oeufs et du sucre. Cette version est végétalienne, donc sans oeufs ni produits laitiers. Elle peut être agrémentée de fruits rouges ou de noix pour une touche de saveur supplémentaire.','Ingrédients pour une mousse au chocolat végétalienne : chocolat noir, lait de coco, sucre, vanille, sel.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Crème Brûlée','Sans Gluten',12,'Test','images\creme_brulee.jpg','La crème brûlée est un dessert raffiné et classique, souvent réalisé avec de la crème, du sucre, des oeufs et de la vanille. Elle est cuite au four et servie froide, avec une croûte caramélisée et croustillante sur le dessus.','Ingrédients pour une crème brûlée : crème, sucre, oeufs, vanille, cassonade.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Tarte aux fraises','None',20,'Test','images\tarte_fraise.jpg','La tarte aux fraises est un dessert frais et fruité, parfait pour les journées chaudes dété. Elle est généralement préparée avec une croûte à tarte croustillante, de la crème pâtissière et des fraises fraîches. Sa texture est légère et fondante, avec un goût sucré et acidulé.','Ingrédients pour une tarte aux fraises : pâte à tarte, crème pâtissière, fraises, sucre glace.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Cheesecake','None',18,'Test','images\cheesecake.jpg','Le cheesecake est un dessert crémeux et décadent, souvent réalisé avec un mélange de fromage frais, de sucre et doeufs, sur une base de biscuits émiettés. Il peut être agrémenté de fruits, de coulis ou de sauce au chocolat pour une touche de saveur supplémentaire.','Ingrédients pour un cheesecake : biscuits graham, fromage frais, sucre, oeufs, crème fraîche, vanille.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Panna Cotta','Sans Gluten',10,'Test','images\pannacotta.jpg','La panna cotta est un dessert italien léger et crémeux, souvent réalisé avec de la crème, du sucre et de la gélatine. Elle peut être aromatisée avec de la vanille, du café ou de la liqueur damande pour une touche de saveur supplémentaire. Elle est servie froide, avec un coulis de fruits rouge ou de caramel.','Ingrédients pour une panna cotta : crème, sucre, gélatine, vanille, fruits rouges ou caramel pour la garniture.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Salade Caprese','Végétarien',12,'LS','images\salade_caprese.jpg','La salade Caprese est un plat italien traditionnel à base de tomates, de mozzarella et de basilic frais. Il est souvent assaisonné dhuile dolive et de vinaigre balsamique pour un goût frais et savoureux.','Ingrédients pour une salade Caprese : tomates, mozzarella, basilic frais, huile dolive, vinaigre balsamique.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Soupe à loignon','Végétarien',10,'SB','images\soupe_oignon.jpg','La soupe à loignon est une spécialité française chaude et réconfortante. Elle est préparée avec des oignons caramélisés, du bouillon de boeuf, du pain et du fromage. Elle est souvent servie avec une tranche de pain grillé et du fromage fondu sur le dessus.','Ingrédients pour une soupe à loignon : oignons, bouillon de boeuf, pain, fromage.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Houmous','Végétarien',8,'SA','images\houmous.jpg','Le houmous est une spécialité culinaire du Moyen-Orient à base de pois chiches, de tahini, dhuile dolive, de jus de citron et dail. Il est souvent servi avec du pain pita ou des légumes frais pour un apéritif sain et savoureux.','Ingrédients pour le houmous : pois chiches, tahini, huile dolive, jus de citron, ail.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Bruschetta','Végétarien',11,'SS','images\bruschetta.jpg','La bruschetta est un plat italien à base de pain grillé, dhuile dolive, dail et de tomates fraîches. Elle peut être agrémentée de basilic, de fromage et de charcuterie pour une variété de saveurs délicieuses.','Ingrédients pour une bruschetta : pain grillé, huile dolive, ail, tomates fraîches, basilic.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Couscous royal','Halal',30,'EAEB','images\couscous_royal.jpg','Le couscous royal est un plat traditionnel marocain composé de semoule de couscous, de légumes variés tels que des carottes, des navets, des courgettes, des pois chiches et des oignons, ainsi que de viandes telles que de lagneau, du poulet, des merguez et des boulettes de viande. Le plat est souvent servi avec une sauce épicée et des raisins secs pour une touche sucrée.','Ingrédients pour un couscous royal : semoule de couscous, légumes variés, viandes variées, épices.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Tagine de poulet aux olives','Halal',23,'AA','images\tagine_poulet_olives.jpg','Le tagine de poulet aux olives est un plat marocain traditionnel préparé dans un plat en terre cuite du même nom. Le plat est composé de poulet, dolives, doignons, de citron et dépices. Il est généralement servi avec du pain ou de la semoule de couscous.','Ingrédients pour un tagine de poulet aux olives : poulet, olives, oignons, citron, épices.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Kefta Mkaouara','Halal',18,'MA','images\kefta_mkaouara.jpg','Le Kefta Mkaouara est un plat marocain composé de boulettes de viande hachée (généralement de lagneau ou du bœuf) cuites dans une sauce tomate épicée avec des oignons et des poivrons. Il est généralement servi avec du pain ou de la semoule de couscous.','Ingrédients pour un Kefta Mkaouara : viande hachée, sauce tomate, oignons, poivrons, épices.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Mrouzia','Halal',28,'MA','images\mrouzia.jpg','Le mrouzia est un plat marocain traditionnel composé de viande dagneau ou de boeuf cuite lentement dans une sauce sucrée et épicée à base de miel, de ras el hanout (un mélange dépices) et damandes. Le plat est souvent servi avec des fruits secs et de la semoule de couscous.','Ingrédients pour un mrouzia : viande dagneau ou de boeuf, miel, ras el hanout, amandes, fruits secs.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Harrira','Halal',12,'MA','images\harrira.jpg','La harira est une soupe marocaine traditionnelle servie pendant le mois de Ramadan. Elle est composée de viande dagneau, de pois chiches, de lentilles, de tomates, doignons et de coriandre, le tout cuit dans un bouillon épicé. La soupe est souvent servie avec des dattes et des biscuits marocains.','Ingrédients pour une harira : viande dagneau, pois chiches, lentilles, tomates, oignons, coriandre, épices.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Tanjia','Halal',25,'AA','images\tanjia.jpg','La tanjia est un plat traditionnel de Marrakech préparé à partir de viande dagneau ou de boeuf, de graisse fondue, dail, de gingembre et de cumin. Le tout est cuit lentement dans un pot en terre cuite du même nom. Le plat est généralement servi avec du pain marocain.','Ingrédients pour une tanjia : viande dagneau ou de boeuf, graisse fondue, ail, gingembre, cumin.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Croissant','Classique',2,'Boulangerie du Coin','images/croissant.jpg','Le croissant est une viennoiserie dorigine autrichienne, très populaire en France. Il est fait à base de pâte feuilletée et a une forme caractéristique en croissant de lune.','Les ingrédients principaux pour un croissant sont la farine, le beurre, le lait, le sucre, la levure et le sel.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Boeuf Bourguignon','Traditionnel',30,'Le Chef Français','images/boeuf_bourguignon.jpg','Le bœuf bourguignon est un plat emblématique de la cuisine française, originaire de la région de Bourgogne. Il sagit dun ragoût de bœuf mijoté lentement avec du vin rouge, des légumes et des herbes, ce qui lui confère une saveur riche et délicieuse.','Les principaux ingrédients pour un bœuf bourguignon sont le bœuf (généralement du paleron ou du gîte), du vin rouge, des oignons, des carottes, du bouquet garni, de lail et des champignons.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Escargots de Bourgogne','Gastronomique',18,'La Maison des Escargots','images/escargots.jpg','Les escargots de Bourgogne sont un mets délicat et raffiné de la cuisine française. Ils sont cuits avec du beurre à lail et des herbes, et servis dans leurs coquilles. Les escargots sont souvent dégustés avec du pain frais.','Les ingrédients principaux pour les escargots de Bourgogne sont les escargots, le beurre, lail, le persil et les épices.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Quiche Lorraine','Classique',12,'La Petite Brasserie','images/quiche_lorraine.jpg','La quiche lorraine est une spécialité de la cuisine française, originaire de la région de Lorraine. Elle est composée dune pâte brisée garnie dun mélange de lardons, dœufs, de crème fraîche et de fromage. La quiche est cuite au four jusquà ce quelle soit dorée et croustillante.','Les ingrédients pour une quiche lorraine incluent la pâte brisée, les lardons, les œufs, la crème fraîche, le fromage râpé et les assaisonnements.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Magret de Canard','Gastronomique',28,'Le Bistro Français','images/magret_de_canard.jpg','Le magret de canard est un plat délicat et savoureux de la cuisine française. Il sagit du filet de poitrine de canard gras, généralement cuit à la poêle, et servi avec une sauce au choix (par exemple, à lorange ou au miel). Le magret de canard est apprécié pour sa texture tendre et son goût riche.','Les ingrédients principaux pour un magret de canard sont le filet de canard, le sel, le poivre et la sauce de votre choix.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Ratatouille','Méditerranéenne',16,'Le Restaurant Provençal','images/ratatouille.jpg','La ratatouille est un plat emblématique de la cuisine provençale, originaire de la région méditerranéenne. Elle est composée dun mélange de légumes frais, tels que les aubergines, les courgettes, les poivrons, les tomates et les oignons, cuits lentement avec des herbes et des épices.','Les ingrédients pour une ratatouille comprennent les aubergines, les courgettes, les poivrons, les tomates, les oignons, lail, lhuile dolive, les herbes de Provence et les assaisonnements.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Crêpes','Classique',8,'La Crêperie Bretonne','images/crepes.jpg','Les crêpes sont des spécialités de la cuisine bretonne, mais elles sont également très populaires dans toute la France. Elles sont préparées à base de pâte à crêpe, qui est ensuite cuite dans une poêle. Les crêpes peuvent être servies sucrées ou salées, avec une variété de garnitures au choix.','Les ingrédients de base pour les crêpes sont la farine, les œufs, le lait, le sucre, le beurre et la vanille (pour les crêpes sucrées) ou le sel (pour les crêpes salées).');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Bouillabaisse','Provençale',35,'Le Restaurant Méditerranéen','images/bouillabaisse.jpg','La bouillabaisse est une spécialité de la cuisine provençale, originaire de la région méditerranéenne. Il sagit dune soupe de poisson riche et parfumée, préparée avec une variété de poissons de mer, tels que le cabillaud, la lotte, le rouget, et servie avec des croûtons et de la rouille (une sauce à base de poivrons, dail et dhuile dolive).','Les ingrédients principaux pour une bouillabaisse comprennent une variété de poissons, des légumes (comme les oignons, les tomates et les pommes de terre), des herbes (comme le thym et le fenouil) et des épices (comme le safran).');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Cassoulet','Régional',22,'Le Restaurant Toulousain','images/cassoulet.jpg','Le cassoulet est un plat traditionnel de la cuisine toulousaine, dans le sud de la France. Il est préparé avec des haricots blancs, de la viande (lagneau et la saucisse) et des herbes, et cuit lentement jusquà ce que tous les ingrédients soient tendres et que les saveurs soient bien mélangées.','Les ingrédients pour un cassoulet incluent les haricots blancs, la viande (lagneau et la saucisse), les oignons, les carottes, le bouillon, les tomates, lail et les assaisonnements.');
INSERT INTO plat (nom_plat,specificite,prix,auteur,Lien,description,ingredient) VALUES('Coq au au jus dorange','Régional',26,'Le Bistrot Français','images/coq_au_jus.jpg','Le coq au vin est un plat régional de la cuisine française, originaire de la région de Bourgogne. Il sagit dun coq (ou dun poulet) mijoté dans du vin rouge, avec des lardons, des champignons et des herbes aromatiques. Le coq au vin est apprécié pour sa saveur riche et son caractère rustique.','Les ingrédients principaux pour un coq au vin sont le coq (ou le poulet)s les champignons, les oignons, lail, le bouquet garni et les assaisonnements.');




DROP TABLE IF EXISTS categorie;

CREATE TABLE categorie
    (ID_plat     INTEGER PRIMARY KEY AUTOINCREMENT,
     chaud   INTEGER NULL,
     froid   INTEGER NULL,
     entree  INTEGER NULL,
     plat  INTEGER NULL,
     dessert   INTEGER NULL,
     
     FOREIGN KEY (ID_plat) REFERENCES plat (ID_plat));

INSERT INTO categorie (chaud, froid, entree, plat, dessert) 
VALUES
    (1, 0, 0, 1, 0),
    (0, 0, 0, 0, 1),
    (0, 1, 0, 0, 1),
    (1, 0, 0, 1, 0),
    (1, 0, 0, 1, 0),
    (1, 0, 0, 1, 0),
    (1, 0, 0, 1, 0),
    (1, 0, 0, 1, 0),
    (1, 0, 0, 1, 0),
    (1, 1, 1, 1, 0),
    (1, 0, 0, 1, 0),
    (0, 1, 0, 1, 0),
    (0, 1, 1, 1, 0),
    (1, 0, 0, 1, 0),
    (0, 0, 0, 0, 1),
    (0, 0, 0, 0, 1),
    (0, 0, 0, 0, 1),
    (0, 0, 0, 0, 1),
    (0, 0, 0, 0, 1),
    (0, 0, 1, 1, 0),
    (0, 0, 1, 0, 0),
    (0, 0, 1, 0, 0),
    (0, 0, 1, 0, 0),
    (0, 0, 0, 1, 0),
    (0, 0, 0, 1, 0),
    (0, 0, 0, 1, 0),
    (0, 0, 0, 1, 0),
    (0, 0, 0, 1, 0),
    (0, 0, 0, 1, 0),
    (1, 0, 0, 1, 0),
    (0, 0, 0, 0, 1),
    (1, 0, 0, 1, 0),
    (0, 0, 1, 1, 0),
    (0, 1, 0, 1, 0),
    (0, 0, 1, 0, 0),
    (1, 0, 0, 1, 0),
    (0, 1, 1, 0, 0),
    (0, 0, 0, 0, 1),
    (0, 0, 1, 1, 0);


DROP TABLE IF EXISTS panier;

CREATE TABLE panier
    (ID_user    TEXT NOT NULL,
     ID_plat    TEXT NOT NULL,
     QTE        INTEGER NOT NULL);

DROP TABLE IF EXISTS commande;

CREATE TABLE commande
    (ID_commande INTEGER PRIMARY KEY AUTOINCREMENT,
    ID_user TEXT NOT NULL,
    ID_plat TEXT NOT NULL,
    FOREIGN KEY (ID_user) REFERENCES user (ID_user),
    FOREIGN KEY (ID_plat) REFERENCES plat (ID_plat));


COMMIT;