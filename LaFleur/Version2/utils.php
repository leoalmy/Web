<?php 
    function cnx() {
        $connexion = mysqli_connect("localhost", "lafleur", "secret", "baselafleur1");
        return $connexion;
    };
    function getTitre($idCateg) {
        if ($connexion = cnx()) {
            mysqli_set_charset($connexion, "utf8");

            $requete = "SELECT categorie.cat_libelle as lib
                        FROM categorie
                        WHERE categorie.cat_code = '$idCateg';";

            $resultat = mysqli_query($connexion, $requete);
            $ligne = mysqli_fetch_assoc($resultat);
            $titre = "Société Lafleur - " .$ligne["lib"];
            mysqli_close($connexion);
        }
        return $titre;
    }
?>