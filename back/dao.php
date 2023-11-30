<?php 

include 'config.php';

class Categorie {
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }
}

class Recette {
    private $nom;
    private $image;
    private $etape1;
    private $etape2;
    private $etape3;
    private $etape4;
    private $etape5;
    private $etape6;
    private $etape7;
    private $etape8;
    private $id_categorie;

    public function __construct($nom, $image, $etape1, $etape2, $etape3, $etape4, $etape5, $etape6, $etape7, $etape8, $id_categorie) {
        $this->nom = $nom;
        $this->image = $image;
        $this->etape1 = $etape1;
        $this->etape2 = $etape2;
        $this->etape3 = $etape3;
        $this->etape4 = $etape4;
        $this->etape5 = $etape5;
        $this->etape6 = $etape6;
        $this->etape7 = $etape7;
        $this->etape8 = $etape8;
        $this->id_categorie = $id_categorie;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getImage() {
        return $this->image;
    }

    public function getETape1() {
        return $this->etape1;
    }

    public function getETape2() {
        return $this->etape2;
    }

    public function getETape3() {
        return $this->etape3;
    }

    public function getETape4() {
        return $this->etape4;
    }

    public function getETape5() {
        return $this->etape5;
    }

    public function getETape6() {
        return $this->etape6;
    }

    public function getETape7() {
        return $this->etape7;
    }

    public function getETape8() {
        return $this->etape8;
    }

    public function getCategorie() {
        return $this->id_categorie;
    }
}

class Ingredient {
    private $nom;
    private $quantite;
    private $image;
    private $id_recette;

    public function __construct($nom, $quantite, $image, $id_recette) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->image = $image;
        $this->id_recette = $id_recette;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getImage() {
        return $this->image;
    }

    public function getId_recette() {
        return $this->id_recette;
    }
}

class DAO {
    private $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    public function addCategorie($categorie) {
        try {
            $requete = $this->bdd->prepare('INSERT INTO Categorie (nom) VALUES (?)');
            $requete->execute([
                $categorie->getNom()
            ]);
            return true;
        } catch (PDOException $e) {
            echo "Erreur de l'ajout de la categorie : " . $e->getMessage();
        }
    }
    
    public function addRecette($recette) {
        try {
            $requete = $this->bdd->prepare('INSERT INTO Recette 
                (nom, img, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, id_categorie) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $requete->execute([
                $recette->getNom(),
                $recette->getImage(),
                $recette->getETape1(),
                $recette->getETape2(),
                $recette->getETape3(),
                $recette->getETape4(),
                $recette->getETape5(),
                $recette->getETape6(),
                $recette->getETape7(),
                $recette->getETape8(),
                $recette->getCategorie()
            ]);
            return true;
        } catch (PDOException $e) {
            echo "Erreur de l'ajout de la recette : " . $e->getMessage();
        }
    }
    
    public function addIngredient($ingredient) {
        try {
            $requete = $this->bdd->prepare('INSERT INTO Ingredient (nom, quantite, img, id_recette) VALUES (?, ?, ?, ?)');
            $requete->execute([
                $ingredient->getNom(),
                $ingredient->getquantite(),
                $ingredient->getimage(),
                $ingredient->getId_recette()
            ]);
            return true;
        } catch (PDOException $e) {
            echo "Erreur de l'ajout de la ingredient : " . $e->getMessage();
        }
    }

    public function getCategorie() {
        try {
            $row = $this->bdd->prepare("SELECT * FROM Categorie");
            $row->execute();
            return $row->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des categories " . $e->getMessage();
            return [];
        }
    }

    public function getRecette() {
        try {
            $row = $this->bdd->prepare("SELECT * FROM Recette");
            $row->execute();
            return $row->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des recettes " . $e->getMessage();
            return [];
        }
    }

    public function getIngredient() {
        try {
            $row = $this->bdd->prepare("SELECT * FROM Ingredient");
            $row->execute();
            return $row->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des ingredients " . $e->getMessage();
            return [];
        }
    }

    public function updateCategorie($id, $categorie) {
        try {
            $row = $this->bdd->prepare("UPDATE Categorie SET nom = ? WHERE id = ?");
            $row->execute([$categorie->getNom(), $id]);
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de la modification du cate$categorie " . $e->getMessage();
            return false;
        }
    }

    public function updateRecette($id, $recette) {
        try {
            $row = $this->bdd->prepare("UPDATE Recette SET nom = ?, img = ?, etape1 = ?, etape2 = ?, etape3 = ?, etape4 = ?, etape5 = ?, etape6 = ?, etape7 = ?, etape8 = ?, id_categorie = ? WHERE id = ?");
            $row->execute([$recette->getNom(), $recette->getImage(), $recette->getEtape1(), $recette->getEtape2(), $recette->getEtape3(), $recette->getEtape4(), $recette->getEtape5(), $recette->getEtape6(), $recette->getEtape7(), $recette->getEtape8(), $recette->getCategorie(), $id]);
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de la modification de la recette : " . $e->getMessage();
            return false;
        }
    }

    public function updateIngredient($id, $ingredient) {
        try {
            $row = $this->bdd->prepare("UPDATE Ingredient SET nom = ?, quantite = ?, img = ?, id_recette = ? WHERE id = ?");
            $row->execute([$ingredient->getNom(), $ingredient->getQuantite(), $ingredient->getImage(), $ingredient->getId_recette(), $id]);
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de la modification du ingredient " . $e->getMessage();
            return false;
        }
    }

    public function removeCategorieById($id) {
        try {
            $row = $this->bdd->prepare("DELETE FROM Categorie WHERE id = ?");
            $row->execute([$id]);
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du personnage " . $e->getMessage();
        }
    }

    public function removeRecetteById($id) {
        try {
            $row = $this->bdd->prepare("DELETE FROM Recette WHERE id = ?");
            $row->execute([$id]);
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du personnage " . $e->getMessage();
        }
    }

    public function removeIngredientById($id) {
        try {
            $row = $this->bdd->prepare("DELETE FROM Ingredient WHERE id = ?");
            $row->execute([$id]);
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du personnage " . $e->getMessage();
        }
    }
}

$DAO = new DAO($bdd);
// $burger = new Recette("Burger", "img.com", "Coupe", "Cuit", "Presente", "", "", "", "", "", 1);
// $ail = new Ingredient("Ail", 15, "ail.png", 1);
// $DAO->addIngredient($ail);
?>