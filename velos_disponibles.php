<?php
// Placez votre code de connexion à la base de données ici

// Récupérez les vélos disponibles depuis la base de données
$sql = "SELECT * FROM velos WHERE disponibilite = 'disponible'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Affichez les informations du vélo
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<img src='" . $row['image_url'] . "' alt='Image du vélo'>";
    }
} else {
    echo "<p>Aucun vélo disponible.</p>";
}
?>
