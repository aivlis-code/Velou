<?php
include "Common.php";

unset($_SESSION['email']);
unset($_SESSION['is_admin']);
unset($_SESSION['prenom']);
unset($_SESSION['user_id']);

header('Location: index.php');

?>