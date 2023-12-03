<?php include '../back/src/dao.php'; ?>
<!-- page de gestion pour la base de données -->
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
            <div class="logo-sct" style="margin: 0 0 0 2rem">
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
                        echo '<a href="categorie.php?id=' . ($counter + 1) . '" style="color: black; text-decoration: none; display: flex;">';
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
        // reception de tous les elements de la base de données
        $categories = $DAO->getCategorie();
        $recettes = $DAO->getRecette();
        $ingredients = $DAO->getIngredient();
        // affichage des differents elements categories, ingredients et recettes
        // categorie
        echo "<div class='gestion-sct'>";
            echo "<div class='cat'>";
                echo "<div class='btn'>";
                    // redirection vers la page d ajout
                    echo "<a href='form/ajouter_cat.php'>
                          <input 
                                type='submit' 
                                value='Ajouter'
                                style='background: transparent; border: none; cursor: pointer;'
                            >
                          </a>";
                    // redirection vers la page de modification
                    echo "<a href='form/modifier_cat.php'>
                        <input 
                                type='submit' 
                                value='Modifier'
                                style='background: transparent; border: none; cursor: pointer;'
                        >
                        </a>";
                    // redirection vers la page de suppression
                    echo "<a href='form/supp_cat.php'>
                        <input 
                                type='submit' 
                                value='Supprimer'
                                style='background: transparent; border: none; cursor: pointer;'
                            >
                        </a>";
                echo "</div>";
                echo "<h2>Catégories</h2>";
                // affichage des elements
                foreach ($categories as $categorie) {
                    echo '<div class="btn-sct">';
                        echo '<div id="img">';
                            echo "<img src='{$categorie['img']}' id='btnImg' style='height: 5rem;'></img>";
                        echo '</div>';
                        echo '<div id="label">';
                            echo "<p>{$categorie['nom']}</p>";
                        echo '</div>';
                    echo '</div>';
                }
            echo "</div>";
            // recette
            echo "<div class='rec'>";
                echo "<div class='btn'>";
                // redirection vers la page d ajout
                    echo "<a href='form/ajouter_recette.php'>
                            <input 
                                type='submit' 
                                value='Ajouter'
                                style='background: transparent; border: none; cursor: pointer;'
                            >
                          </a>";
                        //   redirection vers la page de modification
                    echo "<a href='form/modifier_recette.php'>
                          <input 
                                type='submit' 
                                value='Modifier'
                                style='background: transparent; border: none; cursor: pointer;'
                          >
                          </a>";
                    // redirection vers la page de suppression
                    echo "<a href='form/supp_recette.php'>
                          <input 
                                type='submit' 
                                value='Supprimer'
                                style='background: transparent; border: none; cursor: pointer;'
                            >
                          </a>";
                echo "</div>";
                echo "<h2>Recettes</h2>";
                // affichage des elements
                foreach ($recettes as $recette) {
                    echo '<div class="btn-sct">';
                        echo '<div id="img">';
                            echo "<img src='{$recette['img']}' id='btnImg' style='height: 9rem'></img>";

                        echo '</div>';
                        echo '<div id="label">';
                            echo "<p>{$recette['nom']}</p>";
                        echo '</div>';
                    echo '</div>'; 
                }
            echo "</div>";
            // ingredient
            echo "<div class='ing'>";
                echo "<div class='btn'>";
                // redirection vers la page d'ajout
                    echo "<a href='form/ajouter_ing.php'>
                            <input 
                                type='submit' 
                                value='Ajouter'
                                style='background: transparent; border: none; cursor: pointer;'
                            >
                        </a>";
                    // redirection vers la page de modification
                    echo "<a href='form/modifier_ing.php'>
                        <input 
                                type='submit' 
                                value='Modifier'
                                style='background: transparent; border: none; cursor: pointer;'
                        >
                        </a>";
                        // redirection vers la page de suppression
                    echo "<a href='form/supp_ing.php'>
                        <input 
                                type='submit' 
                                value='Supprimer'
                                style='background: transparent; border: none; cursor: pointer;'
                            >
                        </a>";
                echo "</div>";
                echo "<h2>Ingrédients</h2>";
                // affichage des elements
                foreach ($ingredients as $ingredient) {
                    echo '<div class="btn-sct">';
                        echo '<div id="img">';
                            echo "<img src='{$ingredient['img']}' id='btnImg' style='height: 5rem'></img>";
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