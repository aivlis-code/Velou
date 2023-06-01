<!DOCTYPE html>
<html>
<head>
    <title>Registration success</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
        print_header(); 
        print_nav();
        ?>
    <!-- Si les informations données sont bonnes alors il y a cette page qui affiche le message suivant-->
    <div class="container">
        <h2>Merci pour ton enregistrement</h2>
        <p>Bravo maintenant ton account Vélou a été créé.</p>
        <p>Tu peux te connecter avec ton mail et password.</p>
        <a href="Login.php">Log in</a>
    </div>
    <?php 
    //Nous ajoutons la fonction print_footer
    print_footer();?>
</body>
</html>
