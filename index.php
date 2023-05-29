<!DOCTYPE html>
<html>
<head>
    <title>Vélos à louer chez Vélou</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <!-- En-tête de la page -->
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
                // Récupération des données des vélos depuis la base de données
                $contenu = $bdd->query('SELECT * FROM bikes');
                $i = 0;

                // Parcours des données des vélos et affichage
                while ($row = $contenu->fetch()) {
                    // Ouverture d'une nouvelle ligne de conteneur pour chaque 3 vélos
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

                    // Vérification si l'utilisateur est connecté en tant qu'administrateur
                    if ($_SESSION['is_Admin'] == true) {
                        // Affichage du bouton "Administrer" pour l'administrateur
                        echo '<button>Administrer</button>';
                    }

                    echo '</div>';

                    // Fermeture de la ligne de conteneur après chaque 3 vélos ou pour le dernier vélo
                    if ($i % 3 == 2 || $i == $contenu->rowCount() - 1) {
                        echo '</div>';
                    }

                    $i++;
                }

                // Fermeture de la requête
                $contenu->closeCursor();
            ?>
        </div>
    </main>

    <?php 
        print_footer();
    ?>

</body>
</html>
