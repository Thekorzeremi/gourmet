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