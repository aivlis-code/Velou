<!DOCTYPE html>
<html>
<head>
    <title>Infos Pratiques</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
        print_header(); 
        print_nav();
        ?>
    <!-- Ajout du titre de la page des différentes parties comme liste -->
    <main>
        <h2>Infos Pratiques</h2>
        <p>Voici quelques informations pratiques pour faciliter votre expérience de location de vélos :</p>
        <ul>
            <li>Horaires d'ouverture : du lundi au vendredi de 9h à 18h, le samedi de 10h à 16h.</li>
            <li>Réservations : vous pouvez réserver un vélo en ligne ou par téléphone à l'avance.</li>
            <li>Dépôt de garantie : un dépôt de garantie sera requis lors de la location, qui sera remboursé à la fin de la location.</li>
            <li>Assurance : nous proposons une assurance optionnelle pour couvrir les éventuels dommages ou vols.</li>
            <li>Retour des vélos : veuillez retourner les vélos loués à notre agence dans les délais convenus.</li>
            <li>Conditions d'utilisation : veuillez lire attentivement nos conditions générales de location avant de procéder à la location.</li>
        </ul>
    </main>

    <?php //Nous ajoutons la fonction print_footer
    print_footer();?>
</body>
</html>
