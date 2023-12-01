<?php include '../back/dao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🙍🏻‍♀️ KOUIZINE</title>
    <link rel="stylesheet" href="index.scss">
</head>
<body>
    <div class="navbar-sct">
            <div class="topbar-sct">
                <div class="logo-sct">
                    <p>🍴 KOUIZINE</p>
                </div>
                <div class="search-sct">
                    <input type="search" name="searchbar" id="searchbar" placeholder='Des recettes, des ingrédients...'/>
                    <div id="searchbtn"></div>
                    <div id="img">
                        <img src='assets/search-icon.svg'></img>
                    </div>
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
                            echo '<div id="img">';
                            echo "<img src='{$categorie['img']}' id='btnImg'></img>";
                            echo '</div>';
                            echo '<div id="label">';
                            echo "<p>{$categorie['nom']}</p>";
                            echo '</div>';
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
            echo "<div class='search-sct'>";
            echo "<div class='title-sct'>";
            echo "<h2>Résultats de la recherche 🔍</h2>";
            echo "</div>";
            echo "<div class='grid-sct'>";
            echo "<div class='grid'>";
            $input = "Poulet rôti";
            $recherche = $DAO->search($input);
            foreach ($recherche as $resultat) {
                echo "<div class='grid'>";
                echo "<div id='img'><img src='{$resultat['img']}'></img></div>";
                echo "<div id='name'><p>{$resultat['nom']}</p>";
                echo "</div>";
                echo "</div>";
            }

            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo "<div class='trend-sct'>";
            echo "<div class='title-sct'>";
            echo "<h2>À la une de KOUUIZINE 🍴</h2>";
            echo "</div>";
            echo "<div class='grid-sct'>";
            echo "<div class='grid'>";
            $recettes = $DAO->getRecette();
            $counter = 1;
            foreach ($recettes as $recette) {
                if ($counter < 5) {
                    echo "<div class='grid" . $counter . "'>";
                    echo "<div id='img'><img src='{$recette['img']}'></img></div>";
                    echo "<div id='name'><p>{$recette['nom']}</p>";
                    echo "</div>";
                    echo "</div>";
                    $counter++;
                }
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo "<div class='you-sct'>";
            echo "<div class='title-sct'>";
            echo "<h2>Recommandés pour vous 😍</h2>";
            echo "</div>";
            echo "<div class='grid-sct'>";
            echo "<div class='grid'>";
            $counter2 = 1;
            foreach ($recettes as $recette) {
                if ($counter2 < 4) {
                    echo "<div class='grid" . $counter . "'>";
                    echo "<div id='img'><img src='{$recette['img']}'></img></div>";
                    echo "<div id='name'><p>{$recette['nom']}</p>";
                    echo "</div>";
                    echo "</div>";
                    $counter2++;
                }
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo "<div class='fav-sct'>";
            echo "<div class='title-sct'>";
            echo "<h2>Nos coups de coeur ❤️</h2>";
            echo "</div>";
            echo "<div class='grid-sct'>";
            echo "<div class='grid'>";
            $counter3 = 1;
            foreach ($recettes as $recette) {
                if ($counter3 < 7) {
                    echo "<div class='grid" . $counter3 . "'>";
                    echo "<div id='img'><img src='{$recette['img']}'></img></div>";
                    echo "<div id='name'><p>{$recette['nom']}</p>";
                    echo "</div>";
                    echo "</div>";
                    $counter3++;
                }
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo "<div class='all-sct'>";
            echo "<div class='title-sct'>";
            echo "<h2>Toutes nos recettes 📔</h2>";
            echo "</div>";
            echo "<div class='grid-sct'>";
            echo "<div class='grid'>";
            $$counter4 = 0;
            foreach ($recettes as $recette) {
                if ($$counter4 < 999) {
                    echo '<div class="recette-sct" id="recette">';
                    echo '<div id="img">';
                    echo "<img src='{$recette['img']}' id='btnImg'></img>";
                    echo '</div>';
                    echo '<div id="name">';
                    echo "<p>{$recette['nom']}</p>";
                    echo '</div>';
                    echo '</div>';
                    $$counter4++;
                } else {
                    break;
                }
            }
        ?>
    </div>
</body>
</html>