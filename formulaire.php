<?php
//je récupère mon $POST;
//echo("Bonjour");
echo("<pre>");
var_dump($_POST);
echo("</pre>");
$nom = htmlspecialchars($_POST["nom"]);
$telephone = htmlspecialchars($_POST["telephone"]);
$email = htmlspecialchars($_POST["email"]);
$infos = htmlspecialchars($_POST["infos"]);
$date = htmlspecialchars($_POST["date"]);

echo "entreprise : "  .$nom .  " - téléphone : " .$telephone .  " - email : "   .$email .  "- infos : "  .$infos .  " - date : "  .$date ;

// 1 : on ouvre le fichier
$monfichier = fopen('donneesformulaire.txt', 'a+');
fputs($monfichier, "==================================\n"); 
fputs($monfichier, $nom."\n"); 
fputs($monfichier, $telephone."\n"); 
fputs($monfichier, $email."\n"); 
fputs($monfichier, $infos."\n"); 
fputs($monfichier, $date."\n"); 

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);


?>