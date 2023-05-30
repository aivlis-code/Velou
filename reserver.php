<!DOCTYPE html>
<html>
<head>
    <title>Réserver</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <?php

        include 'Common.php'; 
        print_header(); 
        print_nav();


        if (isset($_SESSION['email'])) {

            // Vérifier que toutes les données nécessaires ont été soumises
            if (isset($_POST['Bike_ID'], $_POST['date_debut'], $_POST['date_fin'])) {
                $Bike_ID = $_POST['Bike_ID'];
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $user_id = $_SESSION['user_id'];

                $requete = $bdd->prepare('INSERT INTO location (Bike_ID, ID_user, date_debut, date_fin) VALUES (:Bike_ID, :ID_user, :date_debut, :date_fin)');
                $requete->execute(array(
                    'Bike_ID' => $Bike_ID,
                    'ID_user' => $user_id,
                    'date_debut' => $date_debut,
                    'date_fin' => $date_fin
                ));
            } else {
                echo "Informations de réservation incomplètes. Veuillez réessayer.";
            }
        } else {
            // The user is not logged: go to login
            header('Location: Login.php');
            exit;
        }
        print_footer();
?>
</body>
</html>