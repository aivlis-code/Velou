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
                        echo '<img src="' . $row['Image'] . '" alt="Image vélo">';
                        echo '<p>' . $row['Description'] . '</p>';
                        echo '<p>Modèle : ' . $row['Model'] . '</p>';
                        echo '<p>Nom : ' . $row['Nom'] . '</p>';
                        echo '<p>Prix de location: ' . $row['Prix'] . ' €</p>';

                    // Vérifier si le vélo est déjà réservé pour les dates sélectionnées
                    if (isset($_POST['date_debut']) && isset($_POST['date_fin'])) {
                        $date_debut = $_POST['date_debut'];
                        $date_fin = $_POST['date_fin'];
    
                        // Requête pour vérifier si le vélo est déjà réservé pour les dates sélectionnées
                           $checkReservation = $bdd->prepare('SELECT * FROM location WHERE Bike_ID = :Bike_ID 
                            AND (date_debut BETWEEN :date_debut AND :date_fin OR date_fin BETWEEN :date_debut AND :date_fin)');
                            $checkReservation->execute(array(
                                'Bike_ID' => $Bike_ID,
                                'date_debut' => $date_debut,
                                'date_fin' => $date_fin
                            ));
                            $existingReservation = $checkReservation->fetch();
                            
                            if ($existingReservation) {
                                $isRentable = false;
                                echo '<p>Ce vélo est déjà réservé pour les dates sélectionnées.</p>';
                            }
                        }
                         
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