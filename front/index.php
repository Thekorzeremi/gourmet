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
                            echo '<a href="recette.php?id=' . $counter . '" style="color: black; text-decoration: none;">';
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
                            echo "<div id='grid' class='grid" . $counter2 . "'>";
                            echo '<a href="recette.php?id=' . $counter2 . '" style="color: black; text-decoration: none;">';
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
                            echo "<div id='grid' class='grid" . $counter3 . "'>";
                            echo '<a href="recette.php?id=' . $counter3 . '" style="color: black; text-decoration: none;">';
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
                    $counter4 = 0;
                    foreach ($recettes as $recette) {
                        if ($counter4 < 999) {
                            echo '<div class="recette-sct" id="recette">';
                            echo '<a href="recette.php?id=' . $counter4 . '" style="color: black; text-decoration: none;">';
                            echo '<div id="img">';
                            echo "<img src='{$recette['img']}' id='btnImg'></img>";
                            echo '</div>';
                            echo '<div id="name">';
                            echo "<p>{$recette['nom']}</p>";
                            echo '</div>';
                            echo '</div>';
                            $counter4++;
                        } else {
                            break;
                        }
                    }

                ?>
    </div>
</body>
</html>