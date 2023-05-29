<!DOCTYPE html>
<html>
<head>
    <title>Vélos à louer chez Vélou</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <header>
        <h1>Vélos à louer chez Vélou</h1>
    </header>

    <?php 
        include 'Common.php'; 
        print_nav(); 
        session_start();
    ?>
    
    <main>
        <div class="container">
            <?php
            
                $contenu = $bdd->query('SELECT * FROM bikes');
                $i = 0;

                while ($row = $contenu->fetch()) {
                    if ($i % 3 == 0) {
                        echo '<div class="row">';
                    }

                    echo '<div class="col">';
                    echo '<img src="' . $row['Image'] . '" alt="Image vélo">';
                    echo '<p>' . $row['Description'] . '</p>';
                    echo '<p>Modèle : ' . $row['Model'] . '</p>';
                    echo '<p>Nom : ' . $row['Nom'] . '</p>';
                    echo '<p>Prix de location: ' . $row['Prix'] . ' €</p>';
                    echo '<a href="details_velo.php?Bike_ID=' . $row['Bike_ID'] . '"><button>Réserver</button></a>';

                    // Si l'utilisateur est connecté en tant qu'administrateur, afficher le bouton Administrer
                    if ($_SESSION['is_Admin'] == true) {
                        echo '<button>Administrer</button>';
                    }

                    echo '</div>';

                    if ($i % 3 == 2 || $i == $contenu->rowCount() - 1) {
                        echo '</div>';
                    }

                    $i++;
                }

                $contenu->closeCursor();
            ?>
        </div>
    </main>

    <?php 
        print_footer();
    ?>

</body>
</html>