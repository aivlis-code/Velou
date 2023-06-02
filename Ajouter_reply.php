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

        echo  "<h2>Confirmation ajoute vélo</h2>";

        //requete de retour pour inserer les données dans notre database 
        $req = $bdd->prepare('INSERT INTO bikes(Model, Nom, Description, Image, Prix) VALUES (:Model, :Nom, :Description, :Image, :Prix)');
                
        $req->execute(array(
            'Model'=>$_POST['Model'],
            'Nom'=> $_POST['Nom'],
            'Description'=> $_POST['Description'],
            'Image'=> $_POST['Image'],
            'Prix'=> $_POST['Prix'],
        ));

            echo "Vélo ajouté correctement" ;
            // Nous ajoutons la fonction print_footer
            print_footer();
        ?>

</body>
</html>
