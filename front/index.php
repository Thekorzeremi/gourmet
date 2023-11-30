<?php include '../back/dao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOUIZINE</title>
    <link rel="stylesheet" href="index.scss">
</head>
<body>
    <div class="navbar-sct">
            <div class="topbar-sct">
                <div class="logo-sct">
                    <p>KOUIZINE</p>
                </div>
                <div class="search-sct">
                    <input type="search" name="searchbar" id="searchbar" placeholder='Je cherche des recettes, des ingrédients...'/>
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
                <p>À la une de KOUIZINE</p>
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
    </div>
</body>
</html>