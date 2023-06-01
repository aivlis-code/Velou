<!DOCTYPE html>
<html>
<head>
    <title>Réserver</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common  -->
        <?php
    include 'Common.php';
    //si la demande a été envoyé alors on commence ce loop
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        // Insertion des données dans le database avec du code sql
        $req = $bdd->prepare('INSERT INTO user (Nom, Prenom, Mail, MdP, is_Admin) VALUES (:name, :surname, :email, :password, :admin)');

        $req->execute(array(
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'password' => $password,
            'admin' => 0,
        ));

        // Redirection envers la page de bon registration si les infos sont valables
        header('Location: registration_success.php');
        exit;
    } else {
        // Dans le cas où les infos ne sont pas bonne il affiche un erreur 
        echo "Form submission error.";
    }
    //Nous ajoutons la fonction print_footer
    print_footer();
    ?>
</body>
</html>
