
<?php include_once('utils.php') ?>
    <h1><?php include_once('utils.php'); if(!defined($idCateg)) echo getTitre($idCateg); ?></h1>
    <p><a href="accueil.php?idCateg=acc">Accueil</a></p>
    <hr>
    <ul>
        <li><a href="listePdt.php?idCateg=b">Bulbes</a></li>
        <li><a href="listePdt.php?idCateg=r">Rosiers</a></li>
        <li><a href="listePdt.php?idCateg=m">Plantes à massifs</a></li>
    </ul>