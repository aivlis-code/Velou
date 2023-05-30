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
        
        $req = $bdd->prepare('INSERT INTO bikes(Model, Nom, Description, Image, Prix) VALUES (:Model, :Nom, :Description, :Image, :Prix)');
                
        $req->execute(array(
            'Model'=>$_POST['Model'],
            'Nom'=> $_POST['Nom'],
            'Description'=> $_POST['Description'],
            'Image'=> $_POST['Image'],
            'Prix'=> $_POST['Prix'],
        ));

            echo "Vélo ajouté correctement" ;

            print_footer();
        ?>

</body>
</html>
