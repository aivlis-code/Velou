<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $isValid = true;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format d'email invalide";
        $isValid = false;
    }

    if (strlen($password) < 6) {
        echo "Le mot de passe doit comporter au moins 6 caractères";
        $isValid = false;
    }

    // Si les données du formulaire sont valides, redirigez vers location.html
    if ($isValid) {
        header("Location: ../location/location.html");
        exit;
    }
}
?>
