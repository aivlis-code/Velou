<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <?php include 'Common.php'; 
        print_header(); 
        print_nav();
        ?>
    <!-- Si les informations données sont bonnes alors il y a cette page qui affiche le message suivant-->
    <div class="container">
        <h2>Merci pour ton enregistrement</h2>
        <p>Bravo maintenent ton account Vélou a été créé.</p>
        <p>Tu peux te connecter avec ton mail et password.</p>
        <a href="Login.php">Log in</a>
    </div>
    <?php print_footer();?>
</body>
</html>
