<?php
//Inkluderar externt skrift
include("character.php"); 
?>
<html>
    <head>
        <title>Karaktärer</title>
    </head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <body>

<?php
//Hämtar data från swapi.json 
    $fil = file_get_contents("swapi.json");
    $data = json_decode($fil, true);
    $index = 0; //Startar index-"räknaren"

    //Foreach loopar värdet i arrayen
    foreach ($data["results"] as $info){
        $index++;
    //instansierar objekt 
        $character = new Character( 
        $info["name"], 
        $info["height"], 
        $info["mass"], 
        $info["hair_color"], 
        $info["birth_year"]
    );
    //Skriver ut egenskaper
        echo "Karaktär nummer ". "$index, <br>"; 
        echo "<ul>";
        echo "<li>" . "Namn: ".$character->getName() . "</li>";
        echo "<li>" . "Längd: " .$character->getHeight() . " cm". "</li>"; 
        echo "<li>" . "Vikt: " .$character->getMass() . " kg". "</li>"; 
        echo "<li>" . "Hårfärg: " .$character->getHairColor() ."</li>"; 
        echo "<li>" . "Födelseår: " .$character->getBirthYear() ."</li>"; 
        echo "</ul>"; 
    }
?>
    </body>
</html>