<?php include '../../back/src/dao.php'; ?>
<!-- page de suppression de categorie -->
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
        // formulaire pour elements pour la requete en id 4 dans req.php
            $id = 4;
            echo '<div class="form">';
            echo '<form action="req.php?id=' . $id . '" method="post">';
            echo "<h2>Choisir l'élément à supprimer :</h2>";
            $categorie2 = $DAO->getCategorie();
            foreach ($categorie2 as $cat2) {
                echo "<div class='catGrid'>";
                echo "<p>{$cat2['id']}-{$cat2['nom']}</p>";
                echo "</div>";
            }
            echo '<input type="text" name="nbR">';
            echo '<input type="submit" value="Confirmer">';
            echo '</form>';
            echo '</div>'
        ?>
    </div>
</body>
</html>