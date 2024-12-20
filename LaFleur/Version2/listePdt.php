<?php include_once('utils.php');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title><?php echo test($_GET); ?></title>
    <meta name="description" content="Script pour avoir la liste des produits par catégorie" >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta http-equiv="Content-Language" content="fr" >
    <!-- Fichier : listePdt.php -->
    <!-- Auteur : Almy Léo -->
</head>
<body>
    <?php
        $idCateg = $_GET['idCateg'];
        include('menu.php');
        if ($_SERVER["REQUEST_METHOD"] == "GET") { 

            if ($connexion = cnx()) {

                $idCateg = mysqli_real_escape_string($connexion, $_GET['idCateg']);

                $requete = "SELECT produit.*, categorie.cat_libelle 
                            FROM produit 
                            JOIN categorie ON produit.pdt_categorie = categorie.cat_code
                            WHERE produit.pdt_categorie = '$idCateg';";

                $resultat = mysqli_query($connexion, $requete);

                if ($resultat && mysqli_num_rows($resultat) > 0) {
                    $ligne = mysqli_fetch_assoc($resultat);
                    echo '<p><table border="2" width="75%">';
                    echo "<tr><th>Image</th><th>Référence</th><th>Désignation</th><th>Prix</th></tr>";

                    while ($ligne) {
                        echo "<tr>
                            <td><img alt='Image du produit' src='../images/".$ligne['pdt_image']."'></td>
                            <td>".$ligne['pdt_ref']."</td>
                            <td>".$ligne['pdt_designation']."</td>
                            <td>".$ligne['pdt_prix']."</td>
                        </tr>";
                        $ligne = mysqli_fetch_assoc($resultat);
                    }
                    echo "</table></p>";
                } else {
                    echo "Aucun produit trouvé pour cette catégorie.";
                }

                mysqli_close($connexion);
            } else {
                echo "Problème à la connexion <br />";
            }
        }
    ?>
</body>
</html>
