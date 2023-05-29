<!DOCTYPE html>
<html>
<head>
    <title>Qui sommes-nous ?</title>
    <link rel="stylesheet" type="text/css" href="stylevelou.css">
</head>
<body>
    <header>
        <h1>Vélou</h1>
    </header>
    <?php include 'Common.php'; ?>
    <?php print_nav(); ?>

    <?php
    // To have session you need to call start_session()
    if ($_SESSION['is_admin'] == TRUE) {
        echo "<a href=\"Add_bikes.php\">Add bike</a>";
    }
    ?>

    <main>
        <h2>Qui sommes-nous ?</h2>
        <p>Vélou est un fournisseur de premier plan de services de location de vélos dans la ville de Paris. Nous souhaitons rendre le vélo accessible et pratique aussi bien pour les habitants que pour les touristes.</p>
        <p>Notre équipe est composée de cyclistes passionnés qui adorent explorer la nature. Nous croyons que le vélo est non seulement un excellent moyen de rester actif et respectueux de l'environnement, mais c'est aussi une façon agréable de découvrir de nouveaux endroits et de vivre la ville sous un angle unique.</p>
        <p>Chez Bike Rent Company, nous sommes fiers de proposer une large sélection de vélos de haute qualité pour tous les types de cyclistes. Que vous soyez un cycliste occasionnel, un amateur de sensations fortes ou quelqu'un qui souhaite découvrir la ville à un rythme tranquille, nous avons le vélo parfait pour vous.</p>
        <p>Nous accordons une grande importance à la sécurité et nous nous assurons que tous nos vélos sont bien entretenus et régulièrement inspectés. Notre personnel amical est toujours prêt à vous aider à choisir le bon vélo et à vous fournir tous les conseils et recommandations nécessaires pour votre aventure à vélo.</p>
        <p>Découvrez la joie du vélo avec Bike Rent Company !</p>
    </main>

   <?php print_footer();?>
</body>
</html>
