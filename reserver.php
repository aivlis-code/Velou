<?php
    include 'Common.php';

    // Vérifier que toutes les données nécessaires ont été soumises
    if (isset($_POST['Bike_ID'], $_POST['date_debut'], $_POST['date_fin'])) {
        $Bike_ID = $_POST['Bike_ID'];
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];

        // Vérifiez que l'utilisateur est connecté
        if (is_user_logged_in()) {
            // Obtenir l'ID de l'utilisateur connecté
            $user_id = get_logged_in_user_id();

            // Préparez une requête SQL pour insérer les informations de réservation dans la base de données
            $requete = $bdd->prepare('INSERT INTO location (Bike_ID, ID_user, date_debut, date_fin) VALUES (:Bike_ID, :ID_user, :date_debut, :date_fin)');
            $requete->execute(array(
                'Bike_ID' => $Bike_ID,
                'ID_user' => $ID_user,
                'date_debut' => $date_debut,
                'date_fin' => $date_fin
            ));

            echo "Votre réservation a bien été enregistrée. Merci de choisir Vélou !";
        } else {
            echo "Veuillez vous connecter pour réserver un vélo.";
        }
    } else {
        echo "Informations de réservation incomplètes. Veuillez réessayer.";
    }
?>