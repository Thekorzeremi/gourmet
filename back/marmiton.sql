CREATE USER 'gourmet'@'localhost' IDENTIFIED BY 'gourmet';
GRANT ALL PRIVILEGES ON gourmet.* TO 'gourmet'@'localhost';
FLUSH PRIVILEGES;

CREATE DATABASE IF NOT EXISTS gourmet;

USE gourmet;

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    img VARCHAR(255)
);

CREATE TABLE Recette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(80),
    img VARCHAR(255),
    etape1 VARCHAR(500),
    etape2 VARCHAR(500),
    etape3 VARCHAR(500),
    etape4 VARCHAR(500),
    etape5 VARCHAR(500),
    etape6 VARCHAR(500),
    etape7 VARCHAR(500),
    etape8 VARCHAR(500),
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES Categorie(id)
);

CREATE TABLE Ingredient (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(80),
    quantite VARCHAR(80),
    img VARCHAR(255),
    id_recette INT,
    FOREIGN KEY (id_recette) REFERENCES Recette(id)
);

INSERT INTO Categorie (nom, img) VALUES ('Entrée', 'https://cdn-icons-png.flaticon.com/512/8033/8033081.png');
INSERT INTO Categorie (nom, img) VALUES ('Plat principal', 'https://cdn-icons-png.flaticon.com/512/1065/1065715.png');
INSERT INTO Categorie (nom, img) VALUES ('Dessert', 'https://cdn-icons-png.flaticon.com/512/1888/1888907.png');
INSERT INTO Categorie (nom, img) VALUES ('Burger', 'https://cdn-icons-png.flaticon.com/512/5787/5787016.png');
INSERT INTO Categorie (nom, img) VALUES ('Japonais', 'https://cdn-icons-png.flaticon.com/512/6920/6920188.png');
INSERT INTO Categorie (nom, img) VALUES ('Coréen', 'https://cdn-icons-png.flaticon.com/512/3978/3978806.png');


INSERT INTO Recette (nom, img, etape1, etape2, etape3, etape4, etape5, id_categorie)
VALUES ('Salade César', 'https://assets.afcdn.com/recipe/20190704/94709_w600.jpg', "Faites dorer le pain, coupé en cubes, 3 min dans un peu d'huile.", 'Déchirez les feuilles de romaine dans un saladier, et ajoutez les croûtons préalablement épongés dans du papier absorbant.', "Préparez la sauce : Faites cuire l'oeuf 1 min 30 dans l'eau bouillante, et rafraîchissez-le.", "Cassez-le dans le bol d'un mixeur et mixez, avec tous les autres ingrédients; rectifiez l'assaissonnement et incorporez à la salade.", "Décorez de copeaux de parmesan, et servez.", 1);
INSERT INTO Recette (nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, id_categorie)
VALUES ('Poulet rôti', 'https://assets.afcdn.com/recipe/20130909/63747_w1024h768c1cx1872cy2808.jpg', 'Préchauffer le four à 190°.', "Prendre le poulet et le 'masser' avec de l'huile, partout, même sous les ailes.", 'Laisser la bride.', "Le poser dans un plat et le mettre au four pendant 1 h 30 (ou 2 h si c'est un bio).", "Important : ne pas le piquer avec une fourchette ou un couteau, ne pas le retourner, ne plus le toucher, une fois enfourné !", "Il cuit dans sa peau, comme dans un film étirable sous-vide (ne pas percer la peau).", "C'est capital : pas besoin de l'arroser.", 2);
INSERT INTO Recette (nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, id_categorie)
VALUES ('Tarte aux pommes', 'https://assets.afcdn.com/recipe/20230127/139908_w600.jpg', 'Pelez et coupez les pommes en fines tranches', 'Dans un saladier, mélangez le sucre, les oeufs, le sucre vanillé', 'la crème fraîche', "Etalez la pâte dans un moule à tarte et piquez le fond à l'aide d'une fourchette. Disposez les pommes sur la pâte et versez le tout sur les pommes (ou versez uniquement la crème)", "Puis disposer les lamelles de pommes roulées sur elles-même en roses.", "Enfournez environ 30 minutes, jusqu'à ce que la tarte prenne une belle couleur dorée.", "Déguster", NULL, 3);
INSERT INTO Recette(nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, id_categorie) 
VALUES ('Maki California','https://assets.afcdn.com/recipe/20131025/16373_w600.jpg', "Rincer le riz à l'eau froide jusqu'à ce que l'eau qui s'écoule soit claire. Laisser égoutter.", "Faire cuire le riz dans 15 cl d'eau : porter à ébullition 2 minutes et laisser gonfler 10 minutes à petit feu couvert. Laisser refroidir.", "Faire bouillir le vinaigre de riz avec le sucre et le sel. Laisser refroidir. Incorporer l'assaisonnement au riz.", "Emincer en fines et longues lamelles le concombre et l'avocat.", "Etaler 1 cm de riz sur chacune des feuilles de nori.", "Saupoudrer de graines de sésame.", "Retourner la feuille de nori (pour que le riz se retrouve à l'extérieur du rouleau) et étaler un peu wasabi.", "Garnir avec le concombre, l'avocat et le crabe, puis rouler pour former le rouleau (plus facile si vous poséder un makisu : natte de bambou à rouler).", 5);
INSERT INTO Recette(nom, img, etape1, etape2, etape3, etape4, id_categorie) 
VALUES ('Alligot','https://assets.afcdn.com/recipe/20191231/105959_w600.jpg', "Faites cuire les pommes de terre épluchées pendant 25 à 30 min dans une casserole d'eau. Egouttez. Réduisez-les ensuite une purée et assaisonnez avec le beurre, la crème, l'ail pilé, très peu de sel et du poivre.", "Détaillez le fromage en très fines lamelles. Sur feu doux, ajoutez le fromage à la purée.", "Pendant au moins 15 min, battez la masse avec une grande cuillère en bois, en formant des 'huit', et en la soulevant jusqu'à obtenir une pâte lisse qui se détache des parois de la casserole et qui file.", "Servez dans chaque assiette : soulevez un grand ruban d'aligot et coupez-le au ciseau.", 2);
INSERT INTO Recette(nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, id_categorie)
VALUES ('Tiramisu','https://assets.afcdn.com/recipe/20170614/69362_w600.jpg', "Séparer les blancs des jaunes d'oeufs.", "Mélanger les jaunes avec le sucre roux et le sucre vanillé.", "Ajouter le mascarpone au fouet.", "Monter les blancs en neige et les incorporer délicatement à la spatule au mélange précédent. Réserver.", "Mouiller les biscuits dans le café rapidement avant d'en tapisser le fond du plat.", "Recouvrir d'une couche de crème au mascarpone puis répéter l'opération en alternant couche de biscuits et couche de crème en terminant par cette dernière.", "Saupoudrer de cacao.", "Mettre au réfrigérateur 4 heures minimum puis déguster frais.", 3);
INSERT INTO Recette(nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, id_categorie)
VALUES ("Sushi de thon rouge", "https://assets.afcdn.com/recipe/20221205/138196_w600.jpg", "A préparer 12 h à l'avance.", "Mettre la darne de saumon dans une papillote d'aluminium, y ajouter le jus des 4 citrons et 2 cuillères de vinaigre. Laissez au frais 12 h minimum.", "Le jour J : Faire bouillir l'eau (pour le riz) y rajouter le fumet de poisson et cuire le riz. Il doit être bien cuit.", "Pendant ce temps : découper la darne en 'domino' : petits cubes rectangulaires. 1cm x 2cm (1/2 à 1cm d'épaisseur).", "Dans un bol, mélanger l'huile avec le vinaigre restant et 1 cuillères à soupe de jus d'orange.", "Sur un plat : disposer les cubes de thon, verser sur chaque cube l'équivalent d'une cuillère à café du mélange huile/vinaigre/orange.", "Disposer l'équivalent en riz sur chaque cube de thon.", "Sur le riz (qui est sur le thon), mettre la pointe d'un couteau de wasabi.", 5);
INSERT INTO Recette(nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, id_categorie)
VALUES ("Burger d'avocat", "https://assets.afcdn.com/recipe/20160914/63596_w600.jpg", "Éplucher et couper l'oignon en rondelles.", "Laver et couper la tomate en rondelles.", "Cuire les steaks à la poêle avec un filet d'huile d'olive. Saler et poivrer.", "Toaster les graines de sésames.", "Ouvrir les avocats en 2, retirer le noyau et les éplucher.", "Monter les burger en plaçant un demi-avocat face noyau vers le haut, déposer un steak, une tranche de cheddar sur le steak bien chaud pour qu'elle fonde, une rondelle de tomate, une rondelle d'oignon, quelques feuilles de salade et terminer par la seconde moitié d'avocat.", "Parsemer quelques graines de sésames.", 4);
INSERT INTO Recette(nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, id_categorie)
VALUES ("Bibimbap", "https://assets.afcdn.com/recipe/20151026/24406_w600.jpg", "Commencer par faire cuire le riz comme indiqué sur le sachet.", "Préparer la sauce.", "Pour cela, mélanger le sucre, l'huile de sésame, le vinaigre de riz, l'ail que vous aurez écrasé et un petit morceau de gingembre découpé en petits morceaux.", "Couper le boeuf en très fines lamelles, placer les dans la sauce et mettre au frais.", "Couper les carottes et courgettes en fines lamelles. Émincer les champignons.", "Dans une grande poêle ou un grand wok, faire revenir les légumes avec un peu d'huile de tournesol et un peu de sauce soja.", "Faire cuire 2 minutes le boeuf dans un peu d'huile bien chaude ainsi que les oeufs (oeufs au plat)", "Dresser l'ensemble dans des grands bols avec du riz au fond, des légumes autour, et la viande et/ou le riz au milieu.", 6);

INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Laitue', '2', 'https://assets.afcdn.com/recipe/20171229/76431_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Huile', '2 c.a.soupe', 'https://assets.afcdn.com/recipe/20220117/127496_origin.png', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Parmesan', '25g copeaux', 'https://assets.afcdn.com/recipe/20170607/67344_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Tranche de pain', '4', 'https://assets.afcdn.com/recipe/20170607/67639_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sel', 'Quelques pincées', 'https://assets.afcdn.com/recipe/20170607/67687_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Poivre', 'Quelques pincées', 'https://assets.afcdn.com/recipe/20170607/67563_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Tabasco', '1 trait', 'https://assets.afcdn.com/recipe/20170607/67548_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Moutarde', '0.5 c.a.c', 'https://assets.afcdn.com/recipe/20171121/75409_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Oeuf', '1', 'https://assets.afcdn.com/recipe/20220126/128066_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Parmesan', '25g râpé', 'https://assets.afcdn.com/recipe/20170607/67344_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Câpre', '2 c.a.c', 'https://assets.afcdn.com/recipe/20170607/67470_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Citron', '1', 'https://assets.afcdn.com/recipe/20170607/67457_origin.jpg', 1);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Gousse d'ail", '1', 'https://assets.afcdn.com/recipe/20170607/67514_origin.jpg', 1);

INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Poulet', '1 kg', 'https://assets.afcdn.com/recipe/20170607/67769_origin.jpg', 2);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Huile', '', 'https://assets.afcdn.com/recipe/20220117/127496_origin.png', 2);


INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Pommes', '3', 'https://assets.afcdn.com/recipe/20170607/67365_origin.jpg', 3);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sucre vanillé', '1 sachet', 'https://assets.afcdn.com/recipe/20170607/67644_origin.jpg', 3);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sucre en poudre', '100g', 'https://assets.afcdn.com/recipe/20170607/67377_origin.jpg', 3);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Crême fraiche', '25cl', 'https://assets.afcdn.com/recipe/20170607/67763_origin.jpg', 3);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Pâte brisée', '1', 'https://assets.afcdn.com/recipe/20221207/138285_origin.jpg', 3);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Oeuf', '2', 'https://assets.afcdn.com/recipe/20220126/128066_origin.jpg', 3);


INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sel', '0.5 c.a.c', 'https://assets.afcdn.com/recipe/20170607/67687_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Vinaigre de riz', '1 c.a.c', 'https://assets.afcdn.com/recipe/20170621/69188_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sucre en poudre', '1 c.a.c', 'https://assets.afcdn.com/recipe/20170607/67377_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sésame', '', 'https://assets.afcdn.com/recipe/20170607/67391_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Avocat', '0.5', 'https://assets.afcdn.com/recipe/20170607/67382_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Concombre', '0.25', 'https://assets.afcdn.com/recipe/20170607/67693_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Crabe', '1', 'https://assets.afcdn.com/recipe/20170607/67697_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Feuille de nori', '2 feuilles', 'https://assets.afcdn.com/recipe/20171110/74694_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Riz', '125g', 'https://assets.afcdn.com/recipe/20170607/67482_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Wasabi', '', 'https://assets.afcdn.com/recipe/20170621/69191_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sauce soja salée', '', 'https://assets.afcdn.com/recipe/20170607/67466_origin.jpg', 4);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sauce soja sucrée', '', 'https://assets.afcdn.com/recipe/20170607/67466_origin.jpg', 4);

INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sel', 'Quelques pincées', 'https://assets.afcdn.com/recipe/20170607/67687_origin.jpg', 5);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Poivre', 'Quelques pincées', 'https://assets.afcdn.com/recipe/20170607/67563_origin.jpg', 5);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Crême fraiche', '20cl', 'https://assets.afcdn.com/recipe/20170607/67763_origin.jpg', 5);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Beurre', '50g', 'https://assets.afcdn.com/recipe/20201201/115998_origin.jpg', 5);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Tôme d'auvergne", '50g', 'https://assets.afcdn.com/recipe/20170607/67596_origin.jpg', 5);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Pomme de terre", '500g', 'https://assets.afcdn.com/recipe/20170607/67419_origin.jpg', 5);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Gousse d'ail", '1', 'https://assets.afcdn.com/recipe/20170607/67514_origin.jpg', 5);

INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Cacao amer", '30g', 'https://assets.afcdn.com/recipe/20170607/67774_origin.jpg', 6);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Biscuit à la cuillère", '24', 'https://assets.afcdn.com/recipe/20230328/141650_origin.jpg', 6);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sucre vanillé', '1 sachet', 'https://assets.afcdn.com/recipe/20170607/67644_origin.jpg', 6);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sucre roux', '100g', 'https://assets.afcdn.com/recipe/20170607/67530_origin.jpg', 6);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Oeuf', '3', 'https://assets.afcdn.com/recipe/20220126/128066_origin.jpg', 6);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Mascarpone', '250g', 'https://assets.afcdn.com/recipe/20170607/67742_origin.jpg', 6);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Café noir non sucré', '50g', 'https://assets.afcdn.com/recipe/20170607/67609_origin.jpg', 6);

INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Vinaigre balsamique', '3 c.à.s', 'https://assets.afcdn.com/recipe/20170607/67527_origin.jpg', 7);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Orange', '1', 'https://assets.afcdn.com/recipe/20170607/67729_origin.jpg', 7);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Thon Rouge', '1', 'https://assets.afcdn.com/recipe/20170607/67511_origin.jpg', 7);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Citron', '4', 'https://assets.afcdn.com/recipe/20170607/67457_origin.jpg', 7);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Riz', '240g', 'https://assets.afcdn.com/recipe/20170607/67667_origin.jpg', 7);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Fumet de poisson', '4 c.à.s', 'https://assets.afcdn.com/recipe/20170607/67378_origin.jpg', 7);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Huile de noix', '4 c.à.s', 'https://assets.afcdn.com/recipe/20170607/67537_origin.jpg', 7);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Wasabi', '', 'https://assets.afcdn.com/recipe/20170621/69191_origin.jpg', 7);

INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Poivre', '1 pincée', 'https://assets.afcdn.com/recipe/20170607/67563_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ('Sel', '1 pincée', 'https://assets.afcdn.com/recipe/20170607/67687_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Huile d'olive", '1 filet', 'https://assets.afcdn.com/recipe/20220114/127365_origin.png', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Sésame", '', 'https://assets.afcdn.com/recipe/20170607/67391_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Tomate", '1', 'https://assets.afcdn.com/recipe/20170607/67459_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Avocat", '2', 'https://assets.afcdn.com/recipe/20170607/67382_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Steak haché", '2', 'https://assets.afcdn.com/recipe/20170621/69170_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Cheddar", '2 tranches', 'https://assets.afcdn.com/recipe/20170607/67544_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Salade", 'feuille', 'https://assets.afcdn.com/recipe/20170607/67567_origin.jpg', 8);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Oignon rouge", '0.5', 'https://assets.afcdn.com/recipe/20170607/67488_origin.jpg', 8);

INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Huile de sésame", '4 c.à.s', 'https://assets.afcdn.com/recipe/20170621/69076_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Vinaigre de riz", '4 c.à.s', 'https://assets.afcdn.com/recipe/20170621/69188_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Sucre roux", '4 c.à.s', 'https://assets.afcdn.com/recipe/20170607/67530_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Huile de tournesol", '3 c.à.s', 'https://assets.afcdn.com/recipe/20170621/69067_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Pavé de boeuf", '500g', 'https://assets.afcdn.com/recipe/20231102/146397_origin.png', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Gingembre râpé", '1 morceau', 'https://assets.afcdn.com/recipe/20170607/67668_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Courgette", '2', 'https://assets.afcdn.com/recipe/20170607/67437_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Carottes", '2', 'https://assets.afcdn.com/recipe/20170607/67370_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Riz thaï", '300g', 'https://assets.afcdn.com/recipe/20170607/67667_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Germe de soja", '200g', 'https://assets.afcdn.com/recipe/20170607/67678_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Champignon shiitaké", '200g', 'https://assets.afcdn.com/recipe/20170607/67739_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Pousse d'épinard", '200g', 'https://assets.afcdn.com/recipe/20170621/69035_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Gousse d'ail", '2', 'https://assets.afcdn.com/recipe/20170607/67514_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Oeuf", '6', 'https://assets.afcdn.com/recipe/20220126/128066_origin.jpg', 9);
INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES ("Sauce soja", '3 c.à.s', 'https://assets.afcdn.com/recipe/20170607/67466_origin.jpg', 9);
