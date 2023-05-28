<!DOCTYPE html>
<html>
<head>
    <title>Vélo à louer</title>
    <link rel="stylesheet" type="text/css" href="location.css">
</head>
<body>
    <nav>
        <button onclick="location.href='location.php'">Location</button>
        <button onclick="location.href='connexion.php'">Connexion</button>
    </nav>
    <h1>Vélo à louer</h1>
    <div id="bikeContainer">
        <?php
        $servername = "localhost";
        $username = "username";// à remplacer
        $password = "password";// à remplacer
        $dbname = "database_name";// à remplacer

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM velo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='velos'>";
                echo "<h2>" . $row["name"] . "</h2>";
                echo "<img src='" . $row["image_url"] . "' alt='Image de vélo'>";
                echo "<p>" . $row["description"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "Aucun vélo disponible";
        }

        $conn->close();
        ?>
    </div>
    <button id="loadMore">Voir plus</button>
</body>
</html>
