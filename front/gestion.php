<?php include '../back/dao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🙍🏻‍♀️ KOUIZINE</title>
    <link rel="stylesheet" href="gestion.scss">
</head>
<body>
    <div class="navbar-sct">
            <div class="topbar-sct">
                <div class="logo-sct">
                    <a href="./">🍴 KOUIZINE</a>
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
    </div>
    <div class="content-sct">
        <?php
        $categories = $DAO->getCategorie();
        $recettes = $DAO->getRecette();
        $ingredients = $DAO->getIngredient();

        echo "<div class='gestion-sct'>";
        echo "<div class='cat'>";
        echo "<div class='btn'>";
        echo "<a href='form/ajouter_cat.php'><input type='submit' value='Ajouter'></a>";
        echo "<a href='form/modifier_cat.php'><input type='submit' value='Modifier'></a>";
        echo "<a href='form/supp_cat.php'><input type='submit' value='Supprimer'></a>";
        echo "</div>";
        echo "<h2>Catégories</h2>";
        foreach ($categories as $categorie) {
            echo '<div class="btn-sct">';
            echo '<div id="img">';
            echo "<img src='{$categorie['img']}' id='btnImg'></img>";
            echo '</div>';
            echo '<div id="label">';
            echo "<p>{$categorie['nom']}</p>";
            echo '</div>';
            echo '</div>'; 
        }
        echo "</div>";

        echo "<div class='rec'>";
        echo "<div class='btn'>";
        echo "<a href='form/ajouter_recette.php'><input type='submit' value='Ajouter'></a>";
        echo "<a href='form/modifier_recette.php'><input type='submit' value='Modifier'></a>";
        echo "<a href='form/supp_recette.php'><input type='submit' value='Supprimer'></a>";
        echo "</div>";
        echo "<h2>Recettes</h2>";
        foreach ($recettes as $recette) {
            echo '<div class="btn-sct">';
            echo '<div id="img">';
            echo "<img src='{$recette['img']}' id='btnImg'></img>";
            echo '</div>';
            echo '<div id="label">';
            echo "<p>{$recette['nom']}</p>";
            echo '</div>';
            echo '</div>'; 
        }
        echo "</div>";

        echo "<div class='ing'>";
        echo "<div class='btn'>";
        echo "<a href='form/ajouter_ing.php'><input type='submit' value='Ajouter'></a>";
        echo "<a href='form/modifier_ing.php'><input type='submit' value='Modifier'></a>";
        echo "<a href='form/supp_ing.php'><input type='submit' value='Supprimer'></a>";
        echo "</div>";
        echo "<h2>Ingrédients</h2>";
        foreach ($ingredients as $ingredient) {
            echo '<div class="btn-sct">';
            echo '<div id="img">';
            echo "<img src='{$ingredient['img']}' id='btnImg'></img>";
            echo '</div>';
            echo '<div id="label">';
            echo "<p>{$ingredient['nom']}</p>";
            echo '</div>';
            echo '</div>'; 
        }
        echo "</div>";
        echo "</div>";
        ?>
    </div>
</body>