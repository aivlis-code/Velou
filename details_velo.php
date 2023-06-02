<!DOCTYPE html>
<html>
<head>
    <title>Détails du Vélo</title>
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
        <div class="container">
        <h2>Détails vélo</h2>
            <?php
                if (isset($_GET['Bike_ID'])) {
                    // Récupération de l'identifiant du vélo depuis les paramètres GET
                    $Bike_ID = $_GET['Bike_ID'];
                    
                    // Préparation et exécution de la requête pour obtenir les détails du vélo
                    $requete = $bdd->prepare('SELECT * FROM bikes WHERE Bike_ID = :Bike_ID');
                    $requete->execute(array('Bike_ID' => $Bike_ID));
                    $row = $requete->fetch();
                    
                    if ($row) {
                        // Affichage des détails du vélo
                        echo '<div class="bike_details">';
                        echo '<img style="max-width:250px;width:100%" src="' . $row['Image'] . '" alt="Image vélo">';
                        echo '<p>' . $row['Description'] . '</p>';
                        echo '<p>Modèle : ' . $row['Model'] . '</p>';
                        echo '<p>Nom : ' . $row['Nom'] . '</p>';
                        echo '<p>Prix de location: ' . $row['Prix'] . ' €</p>';
                         
                    // Formulaire de réservation avec date début et fin qui ne peuvent pas etre avant la date du jour meme 
                        echo '<form method="post" action="reserver.php">';
                        echo '<label for="date_debut">Date de début:</label>';
                        echo '<input type="date" id="date_debut" name="date_debut"  min="' . date('Y-m-d') . '" required>';
                        echo '<label for="date_fin">Date de fin:</label>';
                        echo '<input type="date" id="date_fin" name="date_fin" min="' . date('Y-m-d') . '" required>';
                        echo '<input type="hidden" name="Bike_ID" value="' . $Bike_ID . '">';
                        echo '<input type="submit" id="submit" value="Reserver">';
                        echo '</form>';
                    
                    // Fermeture de la requête
                    $requete->closeCursor();
                } else {
                    echo "<p>Aucun vélo n'a été sélectionné.</p>";
                }
            }
            ?>
        </div>
    </main>

    <?php 
    //Nous ajoutons la fonction print_footer
        print_footer();
    ?>
</body>
</html>