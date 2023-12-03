<?php

 include '../../back/src/dao.php'; ?>

<!-- page de gestion des requetes -->
<?php
    // reception par methode GET de id qui est dans les URL des redirections vers cette page
    $idr = $_GET['id'];
    // switch case pour determiner quelle requete effectuer en fonction de l id
    switch ($idr){
        // requete ajout de categorie
        case 1:
            $nom = $_POST['nom'];
            $img = $_POST['img'];
            $categorie = new Categorie($nom,$img);
            $DAO->addCategorie($categorie);
            header('location: ../gestion.php');
            break;
        // requete ajout ingredient
        case 2:
            $nom = $_POST['nom'];
            $img = $_POST['img'];
            $qt = $_POST['qt'];
            $idRe = $_POST['idRe'];
            $ingredient = new Ingredient($nom,$qt,$img,$idRe);
            $DAO->addIngredient($ingredient);
            header('location: ../gestion.php');
            break;
        // requete ajout de recette
        case 3:
            $nom = $_POST['nom'];
            $img = $_POST['img'];
            $e1 = $_POST['e1'];
            $e2 = $_POST['e2'];
            $e3 = $_POST['e3'];
            $e4 = $_POST['e4'];
            $e5 = $_POST['e5'];
            $e6 = $_POST['e6'];
            $e7 = $_POST['e7'];
            $e8 = $_POST['e8'];
            $idC = $_POST['idC'];
            $ingredient = new Recette($nom,$img,$e1,$e2,$e3,$e4,$e5,$e6,$e7,$e8,$idC);
            $DAO->addRecette($ingredient);
            header('location: ../gestion.php');
            break;
        // requete suppression de categorie
        case 4:
            $idr = $_POST['nbR'];
            $DAO->removeCategorieById($idr);
            header('location: ../gestion.php');
            break;
        // requete suppression de recette
        case 5:
            $idr3 = $_POST['nbR3'];
            $DAO->removeRecetteById($idr3);
            header('location: ../gestion.php');
            break;
        // requete suppression d ingredient
        case 6:
            $idr2 = $_POST['nbR2'];
            $DAO->removeIngredientById($idr2);
            header('location: ../gestion.php');
            break;
        // requete de Mise a jour d'une recette
        case 7: 
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $img = $_POST['img'];
            $e1 = $_POST['e1'];
            $e2 = $_POST['e2'];
            $e3 = $_POST['e3'];
            $e4 = $_POST['e4'];
            $e5 = $_POST['e5'];
            $e6 = $_POST['e6'];
            $e7 = $_POST['e7'];
            $e8 = $_POST['e8'];
            $idC = $_POST['id_categorie'];
            $recetteF = new Recette($nom, $img, $e1, $e2, $e3, $e4, $e5, $e6, $e7, $e8, $idC);
            if ($DAO->updateRecette($id, $recetteF)) {
                header('location: ../gestion.php');
            } else {
                echo "Erreur MAJ Recette.";
            }
            break;
        // requete de Mise a jour d'une categorie
        case 8:
            $id2 = $_POST['id'];
            $nom2 = $_POST['nom'];
            $img2 = $_POST['img'];
            $categorieF = new Categorie($nom2, $img2);
            if ($DAO->updateCategorie($id2, $categorieF)) {
                header('location: ../gestion.php');
            } else {
                echo "Erreur MAJ Categorie.";
            }
            break;
        // requete de Mise a jour d'un ingrédient
        case 9:
            $id3 = $_POST['id'];
            $idr3 = $_POST['id_recette'];
            $nom3 = $_POST['nom'];
            $qt3 = $_POST['quantite'];
            $img3 = $_POST['img'];
            $ingredientF = new Ingredient($nom3, $qt3, $img3, $idr3);
            if ($DAO->updateIngredient($id3, $ingredientF)) {
                header('location: ../gestion.php');
            } else {
                echo "Erreur MAJ Ingrédient.";
            }
            break;
        default:
            echo "Erreur lors de la gestion des requêtes";
            break;
    }
?>