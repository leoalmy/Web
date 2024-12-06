<html> 
<head> 
<title>Un  petit  bonjour</title> 
</head> 
<body> 
<?php $message=""; 
    if  (!empty($_POST["familier"]))
    {  $message  =  "Salut  "; 
    } else 
    {  $message  =  "Bonjour  "; 
    } switch($_POST["politesse"])
    {
    case 1 : $message = $message."Mademoiselle  ";
    break; 
    case 2 : $message = $message."Madame  ";
    break; 
    case 3 : $message = $message."Monsieur  ";
    break; 
    }
    $message  =  $message.$_POST["prenom"]; 
    echo  $message; ?> 
</body> 
</html>