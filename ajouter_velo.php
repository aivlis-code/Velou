<?php
// Placez votre code de connexion à la base de données ici

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $image_url = $_POST["image_url"];

    // Validez et traitez les données reçues, effectuez les vérifications nécessaires

    // Insérez les données dans la base de données
    $sql = "INSERT INTO velos (name, description, image_url) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $description, $image_url);
    $stmt->execute();

    // Redirigez l'utilisateur vers une page appropriée (par exemple, la liste des vélos)
    header("Location: velos.php");
    exit;
}
?>

<!-- Formulaire pour ajouter un vélo -->
<h2>Ajouter un vélo</h2>
<form action="ajouter_velo.php" method="post">
    <input type="text" name="name" placeholder="Nom du vélo" required>
    <textarea name="description" placeholder="Description du vélo" required></textarea>
    <input type="text" name="image_url" placeholder="URL de l'image" required>
    <input type="submit" value="Ajouter">
</form>
