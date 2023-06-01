<?php
//Nous rajoutons la page common
include "Common.php";
//si il clique sur logout, enleve les informations dans $_SESSION
unset($_SESSION['email']);
unset($_SESSION['is_admin']);
unset($_SESSION['prenom']);
unset($_SESSION['user_id']);

header('Location: index.php');

?>