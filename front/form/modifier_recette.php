<?php include '../../back/src/dao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🙍🏻‍♀️ KOUIZINE</title>
    <link rel="stylesheet" href="../autre.scss">
</head>
<body>
    <div class="navbar-sct">
            <div class="topbar-sct">
                <div class="logo-sct">
                    <a href="../index.php" style="color: black; text-decoration: none">🍴 KOUIZINE</a>
                </div>
                <div class="search-sct">
                    <a class='link' href="gestion.php">
                        <img src="../assets/data.svg">
                    </a>
                    <form action="../search.php" method="post">
                        <input type="search" name="searchbar" id="searchbar" placeholder='Des recettes, des ingrédients...' required/>
                        <div id="img">
                            <input type="image" src='../assets/search-icon.svg'></input>
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
            $id = 7;
            $recettes = $DAO->getRecette();
            foreach ($recettes as $recette) {
                echo '<div class="rec">';
                echo "<h2>Id_Recette {$recette['id']} : {$recette['nom']}</h2>";
                echo "<p>Id_Catégorie : {$recette['id_categorie']}</p>";
                echo "<p>Url de l'image : {$recette['img']}</p>";
                for ($i = 1; $i < 9; $i++) {
                    if($recette["etape{$i}"] != null) {
                        echo "<p>Étape {$i} : {$recette["etape{$i}"]}</p>";
                    }
                }
                echo "</div>";
            }
            echo '<div class="form">';
            echo '<form action="req.php?id=' . $id . '" method="post">';
            echo '<div class="id">';
            echo '<h2>Id</h2>';
            echo '<input type="text" value="" name="id">';
            echo '</div>';
            echo '<div class="id_categorie">';
            echo '<h2>Id Catégorie</h2>';
            echo '<input type="text" value="" name="id_categorie">';
            echo '</div>';
            echo '<div class="name">';
            echo '<h2>Nom</h2>';
            echo '<input type="text" value="" name="nom">';
            echo '</div>';
            echo '<div class="img">';
            echo '<h2>Image (URL)</h2>';
            echo '<input type="text" value="" name="img">';
            echo '</div>';
            echo '<div class="e1">';
            echo '<h2>Étape 1</h2>';
            echo '<input type="text" value="" name="e1">';
            echo '</div>';
            echo '<div class="e2">';
            echo '<h2>Étape 2</h2>';
            echo '<input type="text" value="" name="e2">';
            echo '</div>';
            echo '<div class="e3">';
            echo '<h2>Étape 3</h2>';
            echo '<input type="text" value="" name="e3">';
            echo '</div>';
            echo '<div class="e4">';
            echo '<h2>Étape 4</h2>';
            echo '<input type="text" value="" name="e4">';
            echo '</div>';
            echo '<div class="e5">';
            echo '<h2>Étape 5</h2>';
            echo '<input type="text" value="" name="e5">';
            echo '</div>';
            echo '<div class="e6">';
            echo '<h2>Étape 6</h2>';
            echo '<input type="text" value="" name="e6">';
            echo '</div>';
            echo '<div class="e7">';
            echo '<h2>Étape 7</h2>';
            echo '<input type="text" value="" name="e7">';
            echo '</div>';
            echo '<div class="e8">';
            echo '<h2>Étape 8</h2>';
            echo '<input type="text" value="" name="e8">';
            echo '</div>';
            echo '<input type="submit">';
            echo '</form>';
            echo '</div>'
        ?>
    </div>
</body>
</html>
