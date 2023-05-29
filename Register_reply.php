<?php
include 'Common.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform any necessary validation or processing with the form data here

    // Example: Insert the data into the database
    $req = $bdd->prepare('INSERT INTO user (Nom, Prenom, Mail, MdP, is_Admin) VALUES (:name, :surname, :email, :password, :admin)');

    $req->execute(array(
        'name' => $name,
        'surname' => $surname,
        'email' => $email,
        'password' => $password,
        'admin' => 0,
    ));

    // Redirect to a success page or perform any other desired actions
    header('Location: registration_success.php');
    exit;
} else {
    // Handle the case where the form is not submitted correctly
    echo "Form submission error.";
}
?>
