<?php
// Placez votre code de connexion à la base de données ici

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $veloId = $_POST["velo_id"];

    // Validez et traitez les données reçues, effectuez les vérifications nécessaires

    // Supprimez le vélo de la base de données
    $sql = "DELETE FROM velos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $veloId);
    $stmt->execute();

    // Redirigez l'utilisateur vers une page appropriée (par exemple, la liste des vélos)
    header("Location: velos.php");
    exit;
}
?>

<!-- Formulaire pour supprimer un vélo -->
<h2>Supprimer un vélo</h2>
<form action="supprimer_velo.php" method="post">
    <input type="number" name="velo_id" placeholder="ID du vélo à supprimer" required>
    <input type="submit" value="Supprimer">
</form>
