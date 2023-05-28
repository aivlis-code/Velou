<!DOCTYPE html>
<html>
<head>
    <title>Vélo de ville</title>
    <link rel="stylesheet" type="text/css" href="fa.css">
</head>
<body>
    <nav>
        <button onclick="location.href='../location/location.html'">Location</button>
        <button onclick="location.href='../connexion/connexion.html'">Connexion</button>
    </nav>
    <div id="container">
        <?php
        $servername = "localhost";
        $username = "username"; // à remplacer
        $password = "password"; // à remplacer
        $dbname = "database_name"; // à remplacer

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $velo_id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM velo WHERE id = ?");
        $stmt->bind_param("i", $velo_id);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            echo "<img src='" . $row["image_url"] . "' alt='Image de vélo'>";
            echo "<div id='details'>";
            echo "<h1>" . $row["name"] . "</h1>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<span id='price'>53€ / mois</span>"; // Si vous avez une colonne pour le prix dans votre table de base de données, vous pouvez également l'intégrer ici.
            echo "<button onclick=\"location.href='reservation.php'\">Réserver</button>";
            echo "</div>";
        } else {
            echo "Aucun vélo trouvé avec cet identifiant";
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>
