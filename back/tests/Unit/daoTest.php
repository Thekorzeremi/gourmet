<?php

use PHPUnit\Framework\TestCase;

require_once '/Applications/XAMPP/xamppfiles/htdocs/TU-MARMITON/back/src/dao.php';

class DAOTest extends TestCase {
    private $dao;

    protected function setUp(): void {
        $pdo = new PDO('mysql:host=localhost;port=3307;dbname=marmiton', 'root', '');
        $this->dao = new DAO($pdo);
    }

    public function testAddCategorie() {
        $categorie = new Categorie("Test", "test_categorie.jpg");
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Impossible d'ajouter la catégorie");
        $this->assertTrue($this->dao->addCategorie($categorie));
        $this->dao->removeCategorieById($this->getLastInsertedId());
    }

    public function testAddRecette() {
        $recette = new Recette("Test", "test.jpg", "1", "2", "", "", "", "", "", "", 1);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Impossible d'ajouter la recette");
        $this->assertTrue($this->dao->addRecette($recette));
        $this->dao->removeRecetteById($this->getLastInsertedId());
    }

    public function testAddIngredient() {
        $ingredient = new Ingredient("Ingredient", 50, "test_ingredient.jpg", 1);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Impossible d'ajouter l'ingrédient");
        $this->assertTrue($this->dao->addIngredient($ingredient));
        $this->dao->removeIngredientById($this->getLastInsertedId());
    }

    private function getLastInsertedId() {
        $stmt = $this->dao->query("SELECT LAST_INSERT_ID()");
        return $stmt->fetchColumn();
    }
}