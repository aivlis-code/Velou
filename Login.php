<!DOCTYPE html>
<html>
<head>
    <title>Vélou</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <!-- Nous avons inclu notre page Common pour apporter les infos et functions comme print_nav et print_footer -->
    <?php include 'Common.php'; 
    print_header(); 
    print_nav();
    ?>
    <!-- Nous avons mis un container-->
    <div class="container">
        <h2>Login</h2>

        <!-- Formulaire de connexion -->
        <form action="login_reply.php" method="post">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            <input type="submit" id="submit" value="Se connecter">
        </form>

        <!-- Lien vers la page d'inscription -->
        <a href="Register.php">Register</a>
    </div>
    <?php 
    //Nous ajoutons la fonction print_footer
    print_footer();?>
</body>
</html>
