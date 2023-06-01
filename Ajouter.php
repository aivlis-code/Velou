<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un vélo</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
    print_header(); 
    print_nav();
    ?>
     <h2>Ajouter un vélo</h2>
    <!-- Form pour ajouter les vélos -->
    <form action="Ajouter_reply.php" method="post">
            <input type="varchar" name="Nom" placeholder="Nom" required>
            <input type="varchar" name="Model" placeholder="Model" required>
            <input type="varchar" name="Description" placeholder="Déscription" required>
            <input type="varchar" name="Image" placeholder="Image url" required>
            <input type="decimal" name="Prix" placeholder="Prix per jour" required>
            <input type="submit" id="submit" value="Ajouter">
        </form>

        <?php
        //Nous ajoutons la fonction print_footer
            print_footer();
        ?>

</body>
</html>
