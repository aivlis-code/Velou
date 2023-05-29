<!DOCTYPE html>
<html>
<head>
    <title>Détails du Vélo</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
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
                    $Bike_ID = $_GET['Bike_ID'];
                    $requete = $bdd->prepare('SELECT * FROM bikes WHERE Bike_ID = :Bike_ID');
                    $requete->execute(array('Bike_ID' => $Bike_ID));
                    $row = $requete->fetch();
                    
                    echo '<div class="bike_details">';
                    echo '<img src="' . $row['Image'] . '" alt="Image vélo">';
                    echo '<p>' . $row['Description'] . '</p>';
                    echo '<p>Modèle : ' . $row['Model'] . '</p>';
                    echo '<p>Nom : ' . $row['Nom'] . '</p>';
                    echo '<p>Prix de location: ' . $row['Prix'] . ' €</p>';

                    echo '<form method="post" action="reserver.php">';
                    echo '<label for="date_debut">Date de début:</label>';
                    echo '<input type="date" id="date_debut" name="date_debut" required>';
                    echo '<label for="date_fin">Date de fin:</label>';
                    echo '<input type="date" id="date_fin" name="date_fin" required>';
                    echo '<input type="hidden" name="Bike_ID" value="' . $Bike_ID . '">';
                    echo '<a href="details_velo.php?Bike_ID='. $row['ID_location'].'<button type="submit">Réserver</button>';
                    echo '</form>';

                    echo '</div>';
                    
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