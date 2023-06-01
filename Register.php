<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
        print_header(); 
        print_nav();
        ?>
    <!-- insertion d'un formulaire pour l'insertion des données dans la base de données-->
    <div class="container">
        <h2>Se registrer</h2>
        <form action="Register_reply.php" method="POST">
            <input type="varchar" name="name" placeholder="Nom" required>
            <input type="varchar" name="surname" placeholder="Prenom" required>
            <input type="varchar" name="email" placeholder="Email" required>
            <input type="varchar" name="password" placeholder="Password" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php 
    //Nous ajoutons la fonction print_footer
    print_footer();?>
</body>
</html>