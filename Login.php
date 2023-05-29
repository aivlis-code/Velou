<!DOCTYPE html>
<html>
<head>
    <title>Vélou</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <?php include 'Common.php';?>
    <?php print_nav();?>

    <div class="container">
        <h2>Vélou</h2>
        <form action="index.php" method="post">
            <input type="email" id="email" name="email" placeholder="Email" required>
            
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
           
            <input type="submit" id="submit" value="Se connecter">
        </form>
        <a href="Register.php">Register</a>
    </div>
    <?php print_footer();?>
</body>
</html>