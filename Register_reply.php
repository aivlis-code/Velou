<?php
include 'Common.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uname = $_POST['uname'] ?? '';
    $password = $_POST['password'] ?? '';

    // Perform any necessary validation or processing with the form data here

    // Example: Insert the data into the database
    $req = $bdd->prepare('INSERT INTO utilisateur (username, password, Admin) VALUES (:username, :password, ::admin)');

    $req->execute(array(
        'username' => $uname,
        'password' => $password,
        'admin' => 0
    ));

    // Redirect to a success page or perform any other desired actions
    header('Location: registration_success.php');
    exit;
} else {
    // Handle the case where the form is not submitted correctly
    echo "Form submission error.";
}
?>
