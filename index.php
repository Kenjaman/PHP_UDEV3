<?php require('includes/fonctions.php'); ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<title>Udev</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>
	<h1>Test</h1>
    <img src="https://www.presse-citron.net/wordpress_prod/wp-content/uploads/2019/05/saison-4-rick-morty-date-de-sortie.jpg" alt="Rick And Morty"/>
    <form method="POST" action="">
        <input type="hidden" name="control" value="ok">
        <input type="text" name="pseudo" placeholder="Pseudo">
        <input type="password" name="pwd" placeholder="Mot de passe">
        <button type="submit">Valider</button>
    </form>
    <div>
        <?php debug(verif()); ?>
    </div>
    <?= create(verif()); ?>

	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>