<?php 

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
    private $img;
    private $id_recette;

    public function __construct($nom, $quantite, $img, $id_recette) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->img = $img;
        $this->id_recette = $id_recette;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getImg() {
        return $this->img;
    }

    public function getId_recette() {
        return $this->id_recette;
    }
}

?>