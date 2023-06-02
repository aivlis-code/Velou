<!DOCTYPE html>
<html>
<head>
    <title>Vélos à louer chez Vélou</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
    print_header(); 
    print_nav();
    ?>
    
    
    <main>
        <h2>Nos vélos</h2>
            <div class="container">
                <?php
                
                    // Vérification si l'utilisateur est connecté en tant qu'administrateur
                    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
                        // Affichage du bouton "Ajouter" pour l'administrateur
                        echo '<a href="Ajouter.php">Ajouter un vélo</a>';
                    }

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
                        echo '<img style="max-width:250px;width:100%" src="' . $row['Image'] . '" alt="Image vélo">';
                        echo '<p>' . $row['Description'] . '</p>';
                        echo '<p>Modèle : ' . $row['Model'] . '</p>';
                        echo '<p>Nom : ' . $row['Nom'] . '</p>';
                        echo '<p>Prix de location: ' . $row['Prix'] . ' €</p>';
                        echo '<a href="details_velo.php?Bike_ID=' . $row['Bike_ID'] . '">Détails</a>';
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
    //Nous ajoutons la fonction print_footer
        print_footer();
    ?>

</body>
</html>
