<!DOCTYPE html>
<html>
<head>
    <title>Administration des vélos</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <h2>Administration des vélos</h2>

    <?php
    // Placez votre code de connexion à la base de données ici

    // Vérifier si l'utilisateur est un administrateur
    if ($user['isAdmin']) {
        // Afficher les boutons d'administration
        echo '<div class="admin-buttons">';
        echo '<a href="ajouter_velo.php">Ajouter un vélo</a>';
        echo '<a href="supprimer_velo.php">Supprimer un vélo</a>';
        echo '<a href="velos_disponibles.php">Voir les vélos disponibles</a>';
        echo '<a href="velos_indisponibles.php">Voir les vélos indisponibles</a>';
        echo '</div>';

        // Afficher la liste des vélos
        $sql = "SELECT * FROM velos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="velo-list">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="velo">';
                echo '<h3>' . $row['name'] . '</h3>';
                echo '<p>' . $row['description'] . '</p>';
                echo '<img src="' . $row['image_url'] . '" alt="Image du vélo">';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p>Aucun vélo disponible.</p>';
        }
    } else {
        echo '<p>Accès réservé aux administrateurs.</p>';
    }
    ?>

</body>
</html>
