<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un vélo</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <?php include 'Common.php'; 
    print_header(); 
    print_nav();
    ?>
    
    <form action="Ajouter_reply.php" method="post">
            <input type="varchar" name="Nom" placeholder="Nom" required>
            <input type="varchar" name="Model" placeholder="Model" required>
            <input type="varchar" name="Description" placeholder="Déscription" required>
            <input type="varchar" name="Image" placeholder="Image url" required>
            <input type="decimal" name="Prix" placeholder="Prix per jour" required>
            <input type="submit" id="submit" value="Ajouter">
        </form>

        <?php
            print_footer();
        ?>

</body>
</html>
