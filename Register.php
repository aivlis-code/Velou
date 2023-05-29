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
            <input type="text" name="uname" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Submit</button>
        </form>
        <a href="Register.php">Register</a>
    </div>
    <?php print_footer();?>
</body>
</html>