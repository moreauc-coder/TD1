<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" />
 <title> Mon premier php </title>
 </head>
 
 <body>
 Voici le résultat du script PHP : 
 <?php
 // Ceci est un commentaire PHP sur une ligne
 /* Ceci est le 2ème type de commentaire PHP
 sur plusieurs lignes */
 
 // On met la chaine de caractères "hello" dans la variable 'texte'
 // Les noms de variable commencent par $ en PHP
 $texte = "hello world !";
 // On écrit le contenu de la variable 'texte' dans la page Web
 echo $texte;

 $prenom = "Marc";
echo "Bonjour " . $prenom;
echo "Bonjour $prenom";
echo 'Bonjour $prenom';
echo $prenom;
echo "$prenom";

$marque = 'Fiat';
$couleur = "vert caca d'oie";
$immatriculation = "MBAP18";


$voiture = array("marque", "couleur","immatriculation" );
var_dump($voiture);

$voiture_T = [
    [
      "marque" => "Fiat",
      "immatriculation" => "123456",
      "couleur" => "rouge"
    ],
    [
        "marque" => "Mercedes",
        "immatriculation" => "147258",
        "couleur" => "jaune"
      ],
      [
        "marque" => "Renault",
        "immatriculation" => "258369",
        "couleur" => "vert"
      ],
      [
        "marque" => "Honda",
        "immatriculation" => "159357",
        "couleur" => "gris"
      ],
      [
        "marque" => "",
        "immatriculation" => "",
        "couleur" => ""
      ],
    ];

 ?>

<p> Voiture <?php echo $immatriculation?> de marque <?php echo $marque?> couleur <?php echo $couleur?>  </p>
<p> Voiture <?php echo $voiture[2]?> de marque <?php echo $voiture[0]?> couleur <?php echo $voiture[1]?>  </p>

<ul> 
    <?php 
    foreach ($voiture_T as $voit)  {
        if ($voit["marque"] == '' && $voit["immatriculation"] == '' && $voit["couleur"] == ''){ echo "il n'y a pas de voiture"; break;};
    echo '<li>';
       echo 'Voiture '. $voit["immatriculation"]. ' de marque '. $voit["marque"]. ' couleur '. $voit["couleur"];
    echo '</li>';}
    ?>
    
 </ul>
 </body>
</html> 