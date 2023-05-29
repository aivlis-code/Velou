<?php
// Configuration de la base de donnees
$host = "localhost"; // Database host
$dbname = "db_velou"; // Database name
$username = "root"; // Database username
$password = "root"; // Database password

// On utilise l'extension PDO pour PHP avec les parametres de base
// En cas d'erreur on arrete toute l'execution du code php
try{	
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}catch(Exception $e)
{
      die('Erreur : '.$e->getMessage());
}

function print_nav() {
    echo "
    <nav>
        <ul>
            <li><a href=\"index.php\">Louer</a></li>
            <li><a href=\"infos.php\">Info pratiques</a></li>
            <li><a href=\"Nous.php\">Qui sommes-nous?</a><li>
            <li><a href=\"Contacts.php\">Contact Us</a></li>
        </ul>
    </nav>";
}

function print_footer() {
    echo "<footer>"."<p>&copy;".date("Y")." Vélou. Tous droits réservés."."</footer>";
}
?>


