<!DOCTYPE html>
<html>
<head>
    <title>Vélou</title>
    <link rel="stylesheet" type="text/css" href="connexion.css">
</head>
<body>
    <div class="container">
        <h2>Vélou</h2>
        <form action="connexion.php" method="post">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <span id="emailError" class="error"></span>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            <span id="passwordError" class="error"></span>
            <input type="submit" id="submit" value="Se connecter" disabled>
        </form>
    </div>
</body>
</html>
<?php
$servername = "localhost"; 
$username = "username";// à remplacer
$password = "password";// à remplacer
$dbname = "database_name";// à remplacer

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $userPassword = $_POST["password"];
    $isValid = true;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format d'email invalide";
        $isValid = false;
    }

    if (strlen($userPassword) < 8) {
        echo "Le mot de passe doit comporter au moins 8 caractères";
        $isValid = false;
    }

    if ($isValid) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($userPassword, $user['password'])) {
                // le mot de passe est correct
                header("Location: index.php");
                exit;
            } else {
                // le mot de passe est incorrect
                echo "Identifiants incorrects";
            }
        } else {
            echo "Identifiants incorrects";
        }

        $stmt->close();
    }
}

$conn->close();
?>
