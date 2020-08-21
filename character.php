<html>
    <head>
        <title></title>
    </head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <body>

<?php
class Character
    {
        //tilldelar objekt private-attribut
       private $name;
       private $height;
       private $mass;
       private $hair_color;
       private $birth_year; 
       //sätter värden 
         function __construct($name,$height, $mass, $hair_color, $birth_year) {
            $this->name = $name;
            $this->height = $height;
            $this->mass = $mass;
            $this->hair_color = $hair_color;
            $this->birth_year = $birth_year;
        }
        //returnerar egenskaper
                function getName(){
                return $this->name;
            }
                function getHeight(){
                return $this->height;
             }
                function getMass(){
                return $this->mass;
            }
                function getHairColor(){
                return $this->hair_color;
            }
                function getBirthYear(){
                return $this->birth_year; 
            }
    }
?>

    </body>
</html>