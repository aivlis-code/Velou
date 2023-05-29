<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <?php include 'Common.php';?>
    <?php print_nav();?>

    <div class="container">
        <h2>Register pour vélou</h2>
        <form action="Register_reply.php" method="POST">
            <input type="varchar" name="name" placeholder="Nom" required>
            <input type="varchar" name="surname" placeholder="Prenom" required>
            <input type="varchar" name="email" placeholder="Email" required>
            <input type="varchar" name="password" placeholder="Password" required>
            <button type="submit">Submit</button>
        </form>
        <a href="Register.php">Register</a>
    </div>
    <?php print_footer();?>
</body>
</html>