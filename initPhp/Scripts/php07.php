<html> <head> 
<title>Liste  des  employés</title> 
</head> 
<body> 
<?php 
    $connexion  =  mysqli_connect("localhost","root","","empsce");
    //  connexion  réussie
    if($connexion) {
        mysqli_set_charset  ($connexion,"utf8"); 
        $requete="select *  from  employe;"; 
        $resultat=  mysqli_query($connexion, $requete); 
        $ligne=mysqli_fetch_assoc($resultat); 
        while($ligne) {
            echo  $ligne["Emp_nss"];echo ",  "; 
            echo  $ligne["Emp_nom"];echo ",  "; 
            echo  $ligne["Emp_pnom"];  echo ", ";
            echo  $ligne["Emp_qualif"];echo ",  ";
            echo  $ligne["Emp_sce"]; echo "<br />";
            $ligne=mysqli_fetch_assoc($resultat);
            }
        }
    else { 
        echo  "problème  à  la  connexion  <br  />"; 
        mysqli_close($connexion);
        } 
?> 
</body>
</html> 