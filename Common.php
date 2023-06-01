<?php

// Ce file contient fontions utilisés dans d'autres pages.
// Toujours include ce file dans toutes les autres pages car il fait commencer la starting session.

// Start session si la session n'a pas déjà commencé.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuration de la base de données
$host = "localhost"; // Hôte de la base de données
$dbname = "db_velou"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = "root"; // Mot de passe de la base de données

// Utilisation de l'extension PDO pour PHP avec les paramètres de base de données
// En cas d'erreur, l'exécution du code PHP est arrêtée
try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//Fonction pour afficher l'header 

function print_header() {
    echo"<header>
    <h1>Vélos à louer chez Vélou</h1>
    </header>";
}

// Fonction pour afficher la navigation
function print_nav() {
    // Print au début de la nav bar si l'user est connecté.
    if (isset($_SESSION['email'])) {
        echo 'Welcome, ';
        echo $_SESSION['prenom'];        
    }
    echo "
    <nav>
        <ul>
            <li><a href=\"index.php\">Louer</a></li>
            <li><a href=\"infos.php\">Info pratiques</a></li>
            <li><a href=\"Nous.php\">Qui sommes-nous?</a></li>
            <li><a href=\"Contacts.php\">Contact Us</a></li>";
    // Si l'utilisateur fait le login alors print la page logout et mes vélos loués, si non login.
    if (isset($_SESSION['email'])) {
        echo "<li><a href=\"mon_profile.php\">Mes vélos loués</a></li>";
        echo "<li><a href=\"Logout.php\">Logout</a></li>";
    } else {
        echo "<li><a href=\"Login.php\">Login</a></li>";
    }
    // Print la fin de la nav bar
    echo "</ul></nav>";
}

// Fonction pour afficher le pied de page avec la date (seulement année)
function print_footer() {
    echo "<footer>" . "<p>&copy;" . date("Y") . " Vélou. Tous droits réservés." . "</footer>";
}

// S'il y a pas des overlap des dates retourne 0, en cas contraire retourne le numéro de j de overlap
function datesOverlap($start_one,$end_one,$start_two,$end_two) {
    if($start_one <= $end_two && $end_one >= $start_two) { //si les dates overlap
         return min($end_one,$end_two)->diff(max($start_two,$start_one))->days + 1; //retour les n jours de overlap
    }
    return 0; //Retour 0 si no overlap
}
?>
