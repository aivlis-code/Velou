<?php
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

// Fonction pour afficher la navigation
function print_nav() {
    echo "
    <nav>
        <ul>
            <li><a href=\"index.php\">Louer</a></li>
            <li><a href=\"infos.php\">Info pratiques</a></li>
            <li><a href=\"Nous.php\">Qui sommes-nous?</a></li>
            <li><a href=\"Contacts.php\">Contact Us</a></li>
        </ul>
    </nav>";
}

// Fonction pour afficher le pied de page
function print_footer() {
    echo "<footer>" . "<p>&copy;" . date("Y") . " Vélou. Tous droits réservés." . "</footer>";
}
?>
