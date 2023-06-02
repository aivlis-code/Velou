<!DOCTYPE html>
<html>
<head>
    <title>Mes vélos loués</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
    print_header(); 
    print_nav();
    ?>
    <h2>Tes vélos loués </h2>
    <!-- ajoute d'un tableau-->
    <table>
        <tr>
            <th>Name Vélo</th>
            <th>Model Vélo</th>
            <th>From</th>
            <th>To</th>
        </tr>

    <?php
    // etre sur que le user a fait le login et le user id est dans la session
    if (isset($_SESSION['user_id'])) {
        // prendre le user id de la session
        $user_id = $_SESSION['user_id'];        
        $requete = $bdd->query("SELECT * FROM location NATURAL JOIN bikes WHERE ID_User = $user_id");
        //while loop affiche les lignes de table
        while ($location = $requete->fetch()) {
            $bike_name = $location['Nom'];
            $bike_model = $location['Model'];
            $location_debut = new DateTime($location['date_debut']);
            $location_fin = new DateTime($location['date_fin']);
            $location_debut_string = $location_debut->format('d-m-Y');
            $location_fin_string = $location_fin->format('d-m-Y');
            echo "<tr>"; // Ouvrir ligne table
            echo "<td>$bike_name</td>";
            echo "<td>$bike_model</td>";
            echo "<td>$location_debut_string</td>";
            echo "<td>$location_fin_string</td>";
            echo "</tr>"; // Fermer ligne table
        }
    }
    ?>
    </table>
    
    <?php 
    //Nous ajoutons la fonction print_footer
    print_footer(); ?>
    
</body>
</html>
