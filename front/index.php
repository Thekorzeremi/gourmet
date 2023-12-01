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
        <div class="trend-sct">
            <div class='title-sct'>
                <h2>À la une de KOUIZINE 🍴</h2>
            </div>
            <div class='grid-sct'>
                <div class="grid">
                    <div class="grid1"></div>
                    <div class="grid2"></div>
                    <div class="grid3"></div>
                    <div class="grid4"></div>
                </div>
            </div>
        </div>
        <div class="you-sct">
            <div class="title-sct">
                <h2>Recommandés pour vous 😍</h2>
            </div>
            <div class="grid-sct">
                <div class="grid">
                    <div class="grid1"></div>
                    <div class="grid2"></div>
                    <div class="grid3"></div>
                </div>
            </div>
        </div>
        <div class="fav-sct">
            <div class="title-sct">
                <h2>Nos coups de coeur ❤️</h2>
            </div>
            <div class="grid-sct">
                <div class="grid">
                    <div class="grid1"></div>
                    <div class="grid2"></div>
                    <div class="grid3"></div>
                    <div class="grid4"></div>
                    <div class="grid5"></div>
                    <div class="grid6"></div>
                </div>
            </div>
        </div>
        <div class="all-sct">
            <div class="title-sct">
                <h2>Toutes nos recettes 📔</h2>
            </div>
            <div class="grid-sct">
                <div class="grid">
                    <?php
                    $recettes = $DAO->getRecette();
                    $counter = 0;

                    foreach ($recettes as $recette) {
                        if ($counter < 999) {
                            echo '<div class="recette-sct">';
                            echo '<div id="img">';
                            echo "<img src='{$recette['img']}' id='btnImg'></img>";
                            echo '</div>';
                            echo '<div id="name">';
                            echo "<p>{$recette['nom']}</p>";
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
</body>
</html>