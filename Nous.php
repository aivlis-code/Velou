<!DOCTYPE html>
<html>
<head>
    <title>Qui sommes-nous ?</title>
    <link rel="shortcut icon" href="Pictures/LogoAppli.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
     <!--Nous rajoutons la page common et les fonctions print_header et print_nav -->
    <?php include 'Common.php'; 
    print_header(); 
    print_nav();
    ?>
    <!-- page qui affiche les informations-->
    <main>
        <h2>Qui sommes-nous ?</h2>
        <p>Vélou est un fournisseur de premier plan de services de location de vélos dans la ville de Paris. Nous souhaitons rendre le vélo accessible et pratique aussi bien pour les habitants que pour les touristes.</p>
        <p>Notre équipe est composée de cyclistes passionnés qui adorent explorer la nature. Nous croyons que le vélo est non seulement un excellent moyen de rester actif et respectueux de l'environnement, mais c'est aussi une façon agréable de découvrir de nouveaux endroits et de vivre la ville sous un angle unique.</p>
        <p>Chez Vélou, nous sommes fiers de proposer une large sélection de vélos de haute qualité pour tous les types de cyclistes. Que vous soyez un cycliste occasionnel, un amateur de sensations fortes ou quelqu'un qui souhaite découvrir la ville à un rythme tranquille, nous avons le vélo parfait pour vous.</p>
        <p>Nous accordons une grande importance à la sécurité et nous nous assurons que tous nos vélos sont bien entretenus et régulièrement inspectés. Notre personnel amical est toujours prêt à vous aider à choisir le bon vélo et à vous fournir tous les conseils et recommandations nécessaires pour votre aventure à vélo.</p>
        <p>Découvrez la joie du vélo avec Vélou!</p>
    </main>

   <?php 
   //Nous ajoutons la fonction print_footer
   print_footer();?>
</body>
</html>
