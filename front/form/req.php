<?php include '../../back/src/dao.php'; ?>

<?php
    $idr = $_GET['id'];
    switch ($idr){
        case 1:
            $nom = $_POST['nom'];
            $img = $_POST['img'];
            $categorie = new Categorie($nom,$img);
            $DAO->addCategorie($categorie);
            header('location: ../index.php');
            break;
        case 2:
            $nom = $_POST['nom'];
            $img = $_POST['img'];
            $qt = $_POST['qt'];
            $idRe = $_POST['idRe'];
            $ingredient = new Ingredient($nom,$qt,$img,$idRe);
            $DAO->addIngredient($ingredient);
            header('location: ../index.php');
            break;
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
            header('location: ../index.php');
            break;
        default:
            echo "TEST";
            break;
    }
?>