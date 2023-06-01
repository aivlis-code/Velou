<?php
 //Nous rajoutons la page common
 include 'Common.php';

$email = $_POST['email'];
$password = $_POST['password'];

// On verfie si les entrees POST correspondent a celles de la BDD
$verifinfo = $bdd->prepare('SELECT * FROM user WHERE Mail = :email AND MdP = :password');
$verifinfo->execute (array(
    'email' => $email,
    'password' => $password
));

// Si un resultat est retourne sinon retour a la page login
if ($row = $verifinfo->fetch()) {
    $_SESSION['email'] = $row['Mail']; // sauvegarde du nom de l'utilisaeur dans une session
    $_SESSION['prenom'] = $row['Prenom'];
    $_SESSION['user_id'] = $row['ID_user'];

    if ($row['is_Admin'] == 1) {
        // User est admin
        $_SESSION['is_admin'] = 1; 
    } else {
        // User est pas admin
        $_SESSION['is_admin'] = 0;
    }
    // Redirection après avoir sauvegarder les informations de l'user dans $_SESSION
    header('Location: index.php');
    exit;
}
else {
    header('Location: Login.html');
    exit;
}
?>
