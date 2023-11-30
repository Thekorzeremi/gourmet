<?php include '../back/dao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
</head>
<body>
    <h1>Liste des Catégories</h1>
    <ul>
        <?php
        $categories = $DAO->getCategorie();
        foreach ($categories as $categorie) {
            echo "<li>" . $categorie['nom'] . "</li>";
        }
        ?>
    </ul>

    <h1>Liste des Recettes</h1>
    <ul>
        <?php
        $recettes = $DAO->getRecette();
        foreach ($recettes as $recette) {
            echo "<li>" . $recette['nom'] . "</li>";
        }
        ?>
    </ul>

    <h1>Liste des Ingrédients</h1>
    <ul>
        <?php
        $ingredients = $DAO->getIngredient();
        foreach ($ingredients as $ingredient) {
            echo "<li>" . $ingredient['nom'] . " - Quantité: " . $ingredient['quantite'] . "</li>";
        }
        ?>
    </ul>
</body>
</html>
