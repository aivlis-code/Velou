<!DOCTYPE html>
<html>
<head>
    <title>Détails du Vélo</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <!-- En-tête de la page -->
    <header>
        <h1>Détails du Vélo</h1>
    </header>

    <?php 
        include 'Common.php'; 
        print_nav(); 
    ?>

    <main>
        <div class="container">
            <?php
                if (isset($_GET['Bike_ID'])) {
                    // Récupération de l'identifiant du vélo depuis les paramètres GET
                    $Bike_ID = $_GET['Bike_ID'];
                    
                    // Préparation et exécution de la requête pour obtenir les détails du vélo
                    $requete = $bdd->prepare('SELECT * FROM bikes WHERE Bike_ID = :Bike_ID');
                    $requete->execute(array('Bike_ID' => $Bike_ID));
                    $row = $requete->fetch();
                    
                    // Affichage des détails du vélo
                    echo '<div class="bike_details">';
                    echo '<img src="' . $row['Image'] . '" alt="Image vélo">';
                    echo '<p>' . $row['Description'] . '</p>';
                    echo '<p>Modèle : ' . $row['Model'] . '</p>';
                    echo '<p>Nom : ' . $row['Nom'] . '</p>';
                    echo '<p>Prix de location: ' . $row['Prix'] . ' €</p>';

                    // Formulaire de réservation
                    echo '<form method="post" action="reserver.php">';
                    echo '<label for="date_debut">Date de début:</label>';
                    echo '<input type="date" id="date_debut" name="date_debut" required>';
                    echo '<label for="date_fin">Date de fin:</label>';
                    echo '<input type="date" id="date_fin" name="date_fin" required>';
                    echo '<input type="hidden" name="Bike_ID" value="' . $Bike_ID . '">';
                    echo '<a href="details_velo.php?Bike_ID='. $row['ID_location'].'<button type="submit">Réserver</button>';
                    echo '</form>';

                    echo '</div>';
                    
                    // Fermeture de la requête
                    $requete->closeCursor();
                } else {
                    echo "<p>Aucun vélo n'a été sélectionné.</p>";
                }
            ?>
        </div>
    </main>

    <?php 
        print_footer();
    ?>
</body>
</html>
