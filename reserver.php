<!DOCTYPE html>
<html>
<head>
    <title>Réserver</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php
        include 'Common.php'; 
        print_header();
        print_nav();           
        
        echo " <h2>Reserver</h2>";

        if (isset($_SESSION['email'])) {
            // Vérifier que toutes les données nécessaires ont été soumises
            if (isset($_POST['Bike_ID'], $_POST['date_debut'], $_POST['date_fin'])) {
                $Bike_ID = $_POST['Bike_ID'];
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $user_id = $_SESSION['user_id'];

                 // Calcule de la diffèrence entre la date début et de fin
                $diff = date_diff(date_create($date_debut), date_create($date_fin));
                $rentalDays = $diff->format('%a');

                // Vérification si le période est inférieur à 10jj
                if ($rentalDays < 10) {
                    // La reservation est inférieure à 10 j.
                    // On doit verifier la disponibilité du vélo dans ces dates.
                    $requete = $bdd->query("SELECT * FROM location WHERE Bike_ID = $Bike_ID");
                    while ($location = $requete->fetch()) {
                        $location_debut = $location['date_debut'];
                        $location_fin = $location['date_fin'];
                        $days_of_overlap = 
                            datesOverlap(
                                new DateTime($location_debut), 
                                new DateTime($location_fin), 
                                new DateTime($date_debut), 
                                new DateTime($date_fin)
                            );
                        // si les jours d'overlap sont plus de 0 alors l'user ne peut pas louer
                        if ($days_of_overlap > 0) {
                            echo "C'est pas possible de louer ce vélo du $date_debut au $date_fin: le vélo n'est pas disponible! Nous sommes désolés";
                            print_footer();
                            die();
                        }           
                    }
                    // Avant a checké qu'il y aille des vélo disponibles pour les dates décidé: alors on peut reserver.
                    $requete = $bdd->prepare('INSERT INTO location (Bike_ID, ID_user, date_debut, date_fin) VALUES (:Bike_ID, :ID_user, :date_debut, :date_fin)');
                    $requete->execute(array(
                        'Bike_ID' => $Bike_ID,
                        'ID_user' => $user_id,
                        'date_debut' => $date_debut,
                        'date_fin' => $date_fin           
                    ));
                    echo "Votre réservation est avvenue avec success :) vous allez recevoir un mail avec tous les détails! Merci pour la confiance!";
                } else {
                    // La reservation de plus de 10 jours ne peut pas etre faite.
                    echo " Le délai de location ne peut pas dépasser 10 jours. Informations de réservation incomplètes. Veuillez réessayer.";
                }
            } }
            else {
                // Le user n'est pas conncecté alors il doit aller sur login
                header('Location: Login.php');
                exit;
            }
        //Nous ajoutons la fonction print_footer
        print_footer();
?>
</body>
</html>