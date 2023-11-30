CREATE DATABASE IF NOT EXISTS marmiton;

USE marmiton;

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255)
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
