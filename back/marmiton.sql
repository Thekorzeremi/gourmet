CREATE DATABASE IF NOT EXISTS marmiton;

USE marmiton;

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    img VARCHAR(255)
);

CREATE TABLE Recette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(80),
    img VARCHAR(255),
    etape1 VARCHAR(255),
    etape2 VARCHAR(255),
    etape3 VARCHAR(255),
    etape4 VARCHAR(255),
    etape5 VARCHAR(255),
    etape6 VARCHAR(255),
    etape7 VARCHAR(255),
    etape8 VARCHAR(255),
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


INSERT INTO Recette (nom, img, etape1, etape2, etape3, etape4, id_categorie)
VALUES ('Salade César', 'cesar.jpg', 'Laver les feuilles de laitue...', 'Préparer la sauce avec de la mayonnaise...', 'Mélanger le tout et servir.', NULL, 1);

INSERT INTO Recette (nom, img, etape1, etape2, etape3, etape4, id_categorie)
VALUES ('Poulet rôti', 'poulet_roti.jpg', 'Préchauffer le four...', 'Assaisonner le poulet...', 'Cuire au four pendant 1 heure.', NULL, 2);


INSERT INTO Recette (nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, id_categorie)
VALUES ('Tarte aux pommes', 'tarte_pommes.jpg', 'Préparer la pâte...', 'Éplucher et couper les pommes...', 'Cuire au four pendant 30 minutes.', NULL, NULL, NULL, NULL, NULL, 3);


INSERT INTO Ingredient (nom, quantite, img, id_recette) 
VALUES ('Laitue', '200g', 'laitue.jpg', 1);

INSERT INTO Ingredient (nom, quantite, img, id_recette) 
VALUES ('Poulet', '1 kg', 'poulet.jpg', 2);

INSERT INTO Ingredient (nom, quantite, img, id_recette) 
VALUES ('Pommes', '4', 'pommes.jpg', 3);

INSERT INTO Recette(nom, img, id_categorie) VALUES ('Dinde','dinde.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Alligot','alligot.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Sushi Maki','sushi.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Tiramisu','tiramisu.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Dinde','dinde.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Alligot','alligot.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Sushi Maki','sushi.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Tiramisu','tiramisu.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Dinde','dinde.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Alligot','alligot.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Sushi Maki','sushi.jpg',2);
INSERT INTO Recette(nom, img, id_categorie) VALUES ('Tiramisu','tiramisu.jpg',2);
