<?php include '../back/dao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🙍🏻‍♀️ KOUIZINE</title>
    <link rel="stylesheet" href="recette.scss">
</head>
<body>
    <div class="navbar-sct">
            <div class="topbar-sct">
                <div class="logo-sct">
                    <a href="./" style="color: black; text-decoration: none">🍴 KOUIZINE</a>
                </div>
                <div class="search-sct">
                    <a class='link' href="gestion.php">
                        <img src="assets/data.svg">
                    </a>
                    <form action="search.php" method="post">
                        <input type="search" name="searchbar" id="searchbar" placeholder='Des recettes, des ingrédients...' required/>
                        <div id="img">
                            <input type="image" src='assets/search-icon.svg'></input>
                        </div>
                    </form>
                </div>
            </div>
            <div class="botbar-sct">
                <div class="allbtn-sct">
                    <?php
                    $categories = $DAO->getCategorie();
                    $counter = 0;

                    foreach ($categories as $categorie) {
                        if ($counter < 6) {
                            echo '<div class="btn-sct">';
                            echo '<a href="categorie.php?id=' . ($counter + 1) . '" style="color: black; text-decoration: none;">';
                            echo '<div id="img">';
                            echo "<img src='{$categorie['img']}' id='btnImg'></img>";
                            echo '</div>';
                            echo '<div id="label">';
                            echo "<p>{$categorie['nom']}</p>";
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';       
                            $counter++;
                        } else {
                            break;
                        }
                    }
                    ?>
                </div>
            </div>
    </div>
    <div class="content-sct">
        <?php
            $idR  = $_GET['id'];
            $recettes = $DAO->getRecetteById($idR);
            $ingredients = $DAO->getIngredientByRecette($idR);
            foreach ($recettes as $recette) {
                echo '<div id="img">';
                echo "<img src='{$recette['img']}' id='btnImg'></img>";
                echo '</div>';
                echo '<div id="label">';
                echo "<p>{$recette['nom']}</p>";
                echo '</div>';
                echo "<h2>Ingrédients</h2>";
                foreach ($ingredients as $ing) {
                    echo "<img src={$ing['img']}>";
                    echo "<p>{$ing['quantite']}  {$ing['nom']}</p>";
                }
                echo "<h2>Préparation</h2>";
                for ($i = 0; $i < 8; $i++) {
                    if ($recette['etape' . $i] != null) {
                        echo "<p>{$recette['etape' . $i]}</p>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>
