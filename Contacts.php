<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
        print_header(); 
        print_nav();
        ?>

    <main>
        <!-- Titre de la page -->
        <h2>Contact Us</h2>

        <!-- Informations de contact -->
        <p>Pour toute information ou assistance, n'hésitez pas à nous contacter :</p>
        <ul>
            <li>Email: info@velou.com</li>
            <li>Téléphone: 0746491134</li>
            <li>Adresse: 57 rue Bourse, Paris, France</li>
        </ul>
    </main>
    <!-- Nous ajoutons la fonction print_footer-->
    <?php print_footer();?>
</body>
</html>
